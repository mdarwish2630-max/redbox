<?php

/**
 * Geo Detection Helper
 * 
 * Detects visitor's country via IP and maps it to system_countries table.
 * Results are cached in session to avoid repeated API calls.
 * 
 * @package Redbox
 */

if (!function_exists('detect_geo_country')) {
    /**
     * Detect visitor's country from IP address
     * 
     * Uses ip-api.com free API (no key needed, 45 req/min)
     * Caches result in $_SESSION for the session duration
     * 
     * @param mysqli $db - Database connection
     * @return array|null - Country record from system_countries, or null if detection fails
     */
    function detect_geo_country($db) {
        /* Check session cache first */
        if (isset($_SESSION['geo_detected_country'])) {
            return $_SESSION['geo_detected_country'];
        }

        try {
            /* Get visitor's IP */
            $ip = $_SERVER['REMOTE_ADDR'];
            
            /* Handle reverse proxy (Cloudflare, etc.) */
            if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
                $ips = explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']);
                $ip = trim($ips[0]);
            }
            
            /* Skip localhost / private IPs */
            if ($ip === '127.0.0.1' || $ip === '::1' || filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_NO_RES_RANGE) === false) {
                $_SESSION['geo_detected_country'] = null;
                return null;
            }

            /* Call ip-api.com (free, no key) */
            $url = "http://ip-api.com/json/" . urlencode($ip) . "?fields=status,countryCode,country&lang=en";
            $ctx = stream_context_create(['http' => ['timeout' => 3]]);
            $response = @file_get_contents($url, false, $ctx);
            
            if ($response === false) {
                $_SESSION['geo_detected_country'] = null;
                return null;
            }

            $data = json_decode($response, true);
            
            if (!isset($data['status']) || $data['status'] !== 'success' || empty($data['countryCode'])) {
                $_SESSION['geo_detected_country'] = null;
                return null;
            }

            /* Map country code to system_countries table */
            $country_code = strtoupper($data['countryCode']);
            $get_country = $db->query(sprintf(
                "SELECT * FROM system_countries WHERE country_code = %s LIMIT 1",
                secure($country_code)
            ));

            if ($get_country->num_rows == 0) {
                /* Try matching by country name as fallback */
                $country_name = $data['country'];
                $get_country = $db->query(sprintf(
                    "SELECT * FROM system_countries WHERE country_name = %s LIMIT 1",
                    secure($country_name)
                ));
            }

            if ($get_country->num_rows > 0) {
                $country = $get_country->fetch_assoc();
                $country['geo_detected'] = true;
                $country['geo_ip'] = $ip;
                $country['geo_country_code'] = $country_code;
                $_SESSION['geo_detected_country'] = $country;
                return $country;
            }

            /* Country not found in system_countries */
            $_SESSION['geo_detected_country'] = null;
            return null;

        } catch (Exception $e) {
            $_SESSION['geo_detected_country'] = null;
            return null;
        }
    }
}
