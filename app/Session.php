<?php


namespace App;


class Session
{

    private static $sessions = [];

    /**
     * @param $k
     * @return array
     */
    public static function getSession($k)
    {
        return $_SESSION[$k];
    }

    /**
     * @param $key
     * @param $val
     */
    public static function setSession($key, $val): void
    {
        self::$sessions[$key] = $val;
        $_SESSION[$key] = $val;
    }

    public static function start()
    {
        session_start();
    }

    public static function destroy()
    {
        self::$sessions = null;
        session_unset();
        session_destroy();
    }
}
