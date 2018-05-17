<?php
/**
 * Created by PhpStorm.
 * User: mkebza
 * Date: 17/05/2018
 * Time: 19:53
 */

class FilesizeFormatterExtension extends \Twig_Extension
{
    public function getFilters()
    {
        return [
            new Twig_SimpleFilter('filesize_binary', [$this, 'filesizeBinary'])
        ];
    }

    public function filesizeBinary($value, $decimals = 2) {
        return 'AAA';
    }


}