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
    public static function format(int $size, int $precision = 2) {
        if ($size < 1000) {
            return $size . ' B';
        }

        $factor = floor(log($size, 1000));
        return sprintf("%.{$precision}f ", $size / pow(1000, $factor)) . ['B', 'KB', 'MB', 'GB', 'TB', 'PB'][$factor];
    }

    /**
     * Formats filesize with base of 1024
     *
     * @param int $size
     * @param int $precision
     * @return string
     */
    public static function binary(int $size, int $precision = 2) {
        if ($size < 1024) {
            return $size . ' B';
        }

        $factor = floor(log($size, 1024));
        return sprintf("%.{$precision}f ", $size / pow(1024, $factor)) . ['B', 'KB', 'MB', 'GB', 'TB', 'PB'][$factor];
    }

}