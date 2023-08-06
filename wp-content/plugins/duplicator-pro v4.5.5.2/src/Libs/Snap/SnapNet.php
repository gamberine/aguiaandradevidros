<?php

/**
 *
 * @package Duplicator
 * @copyright (c) 2022, Snap Creek LLC
 *
 */

namespace Duplicator\Libs\Snap;

class SnapNet
{
    /**
     * Execute a post request
     *
     * @param string $url    url
     * @param array  $params post params
     *
     * @return void
     */
    public static function postWithoutWait($url, $params)
    {
        foreach ($params as $key => &$val) {
            if (is_array($val)) {
                $val = implode(',', $val);
            }
            $post_params[] = $key . '=' . urlencode($val);
        }

        $post_string = implode('&', $post_params);

        $parts = parse_url($url);

        $fp = fsockopen($parts['host'], isset($parts['port']) ? $parts['port'] : 80, $errno, $errstr, 60);

        $out  = "POST " . $parts['path'] . " HTTP/1.1\r\n";
        $out .= "Host: " . $parts['host'] . "\r\n";
        $out .= "Content-Type: application/x-www-form-urlencoded\r\n";
        $out .= "Content-Length: " . strlen($post_string) . "\r\n";
        $out .= "Connection: Close\r\n\r\n";

        if (isset($post_string)) {
            $out .= $post_string;
        }

        fwrite($fp, $out);

        fclose($fp);
    }
}
