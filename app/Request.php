<?php


namespace App;


class Request
{
    public static function query($q = '')
    {
//        get query string
        $query = explode('&', $_SERVER['QUERY_STRING']);
        $fQ = [];//final query array will return
        foreach ($query as &$qu) {
            $qArr = explode('=', $qu);//explode every query string by =
            if (count($qArr) == 2)
                $fQ[$qArr[0]] = $qArr[1];
            else
                $fQ[$qArr[0]] = '';
        }
        return $q != '' ? $fQ[$q] ?? null : $fQ;
    }

    public static function method()
    {
        return strtolower($_SERVER['REQUEST_METHOD']);
    }

    public static function postData($data = '')
    {
        return $data != '' ? $_POST[$data] : $_POST;
    }

    public static function ajax()
    {
        return isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest';
    }

    public static function redirectFromIndexToHome()
    {
        if (Route::url() == _url('/')) {
            self::redirect('home');
        }
    }

    public static function redirect($url)
    {
        if (Route::url($url) != Route::url())//check if current url is`t same
        {

            header('Location:' . Route::url($url));
        }
    }
}
