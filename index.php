<?php

use App\Application;

//auto load all files depend on namespace using composer psr-4
require('vendor/autoload.php');

//load the app and catch all routes
Application::load();
