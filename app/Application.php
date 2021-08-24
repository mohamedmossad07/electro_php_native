<?php

namespace App;


class Application
{

// load the application
    public static function load()
    {
        Session::start();
        self::catchAllRoutes();
        Request::redirectFromIndexToHome();
    }

//    catch all routes when site loaded
    private static function catchAllRoutes()
    {
        self::loadView();
    }

    private static function loadView()
    {
        /*get view name */
        $view = Route::urlArray();

        $view = end($view);

        //check if view exists
        if (file_exists(_viewsPath($view))) {
            self::includeView($view);
        } else {
            self::includeView('errors/404');
        }
    }

    private static function includeView($view)
    {
        @include(_viewsPath($view));
    }
}
