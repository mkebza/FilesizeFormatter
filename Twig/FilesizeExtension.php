<?php
/**
 * Created by PhpStorm.
 * User: mkebza
 * Date: 17/05/2018
 * Time: 19:53
 */

namespace MKebza\Filesize\Twig;

use MKebza\Filesize\FilesizeFormatter;

class FilesizeExtension extends \Twig_Extension
{
    public function getFilters()
    {
        return [
            new \Twig_SimpleFilter('filesize_binary', [$this, 'filesizeBinary']),
            new \Twig_SimpleFilter('filesize', [$this, 'filesize']),
        ];
    }

    public function filesizeBinary($value, $decimals = 2) {
        return FilesizeFormatter::binary($value, $decimals);
    }

    public function filesize($value, $decimals = 2) {
        return FilesizeFormatter::format($value, $decimals);
    }


}