<?php

namespace App;


class Route
{

    private static $root;

    public static function url($url = '')
    {
        //    get current url
        return $url ? self::getRootUrl() . '/' . explode('/', $_SERVER['PHP_SELF'])[1] . '/' . $url : self::getRootUrl() . $_SERVER['REQUEST_URI'];
    }

    /**
     * @return mixed
     */
    public static function getRootUrl()
    {
        self::setRootUrl(self::makeRootUrl());
        //    get root url like http|s://localhost/
        return self::$root;
    }

    /**
     * @param mixed $root
     */
    public static function setRootUrl($root)
    {
        self::$root = $root;
    }

    private static function makeRootUrl()
    {
        $root = isset($_SERVER['HTTPS']) ? "https://" : 'http://';
        return $root .= $_SERVER['HTTP_HOST'];
    }

    public static function urlArray()
    {
        $url = array_filter(explode('/', $_SERVER['REQUEST_URI']), fn($e) => $e != '');//explode the url by / and filter empty string
        if (strrpos($_SERVER['REQUEST_URI'], '?')) {//check if url has qs
            $url[count($url)] = explode('?', end($url))[0];
        }
        return $url;
    }

}
