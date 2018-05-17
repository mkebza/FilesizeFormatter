<?php
/**
 * Created by PhpStorm.
 * User: mkebza
 * Date: 17/05/2018
 * Time: 17:20
 */

namespace MKebza\Filesize;

class FilesizeFormatter
{
    /**
     * Formats filesize with base of 1000
     *
     * @param int $size
     * @param int $precision
     * @return string
     */
    public static function si(int $size, int $precision = 2) {
        if ($bytes < 1000) {
            return $bytes . ' B';
        }

        $factor = floor(log($bytes, 1000));
        return sprintf("%.{$precision}f ", $bytes / pow(1000, $factor)) . ['B', 'KB', 'MB', 'GB', 'TB', 'PB'][$factor];
    }

    /**
     * Formats filesize with base of 1024
     *
     * @param int $size
     * @param int $precision
     * @return string
     */
    public static function binary(int $size, int $precision = 2) {
        if ($bytes < 1024) {
            return $bytes . ' B';
        }

        $factor = floor(log($bytes, 1024));
        return sprintf("%.{$precision}f ", $bytes / pow(1024, $factor)) . ['B', 'KB', 'MB', 'GB', 'TB', 'PB'][$factor];
    }

}