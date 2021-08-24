<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Electro</title>

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="<?= _url('public/css/bootstrap.min.css') ?>"/>

    <!-- Slick -->
    <link type="text/css" rel="stylesheet" href="<?= _url('public/css/slick.css') ?>"/>
    <link type="text/css" rel="stylesheet" href="<?= _url('public/css/slick-theme.css') ?>"/>

    <!-- nouislider -->
    <link type="text/css" rel="stylesheet" href="<?= _url('public/css/nouislider.min.css') ?>"/>

    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="<?= _url('public/css/font-awesome.min.css') ?>">

    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="<?= _url('public/css/style.css') ?>"/>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>

<!-- HEADER -->
<header>
    <!-- TOP HEADER -->
    <div id="top-header">
        <div class="container">
            <ul class="header-links pull-left">
                <li><a href="#"><i class="fa fa-phone"></i> +20 10 612 183 41</a></li>
                <li><a href="#"><i class="fa fa-envelope-o"></i> mohamedmossadelkady@gmail.com</a></li>
                <li><a href="#"><i class="fa fa-map-marker"></i> Cairo,nasr city</a></li>
            </ul>
            <ul class="header-links pull-right">
                <?php if (!\Models\User::logined()) : ?>
                    <li><a href="<?= _url('login') ?>"><i class="fa fa-user"></i>Login</a></li>
                    <li><a href="<?= _url('register') ?>"><i class="fa fa-sign-in"></i> Register</a></li>
                <?php else: ?>
                    <li><a href="#"><i class="fa fa-user"></i><?= \App\Session::getSession('user')->email ?></a></li>
                    <li><a href="<?= _url('logout') ?>" id="logout"
                           data-user-id="<?= \App\Session::getSession('user')->id ?>"><i class="fa fa-sign-in"></i>Logout</a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
    <!-- /TOP HEADER -->
