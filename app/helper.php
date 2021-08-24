<?php

if (!function_exists('_basePath')) {
    function _basePath()
    {
        return dirname($_SERVER['SCRIPT_FILENAME']);
    }
}

if (!function_exists('_appPath')) {
    function _appPath($path = '')
    {
        return _basePath() . '/app/' . $path . '.php';
    }
}

if (!function_exists('_modelsPath')) {
    function _modelsPath($path = '')
    {
        return _basePath() . '/Models/' . $path . '.php';
    }
}

if (!function_exists('_publicPath')) {
    function _publicPath($path = '')
    {
        return _basePath() . '/public/' . $path . '.php';
    }
}


if (!function_exists('_viewsPath')) {
    function _viewsPath($path = '')
    {
        return _basePath() . '/views/' . $path . '.php';
    }
}

if (!function_exists('_dd')) {
    function _dd(...$data)
    {
        echo "<pre>";
        var_dump(...$data);
        echo "</pre>";
        die(0);
    }
}


if (!function_exists('_url')) {
    function _url($url)
    {
        $root = isset($_SERVER['HTTPS']) ? "https://" : 'http://';
        $root .= $_SERVER['HTTP_HOST'];

        $fUrl = $url != '/' ? $url : '';

//        _dd($root . '/' . explode('/', $_SERVER['PHP_SELF'])[1] . '/' . $url);
        //    get current url
        return $url ? $root . '/' . explode('/', $_SERVER['PHP_SELF'])[1] . '/' . $fUrl : $root . $_SERVER['REQUEST_URI'];
    }
}

if (!function_exists('_404View')) {
    function _404View($v = '404')
    {
        return _viewsPath('errors/' . $v);
    }
}

if (!function_exists('_include')) {
    function _include($f)
    {
        @include $f;
    }
}
if (!function_exists('_hash')) {
    function _hash($data)
    {
        hash('md5', $data);
    }
}
