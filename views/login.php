<?php
ob_start();
//include top header
include('components/topHeader.php');


//include brand header
include('components/brandHeader.php');

//include navbar
include('components/navbar.php');

//include navbar
include('components/loginForm.php');


//include top header
include('components/footer.php');
ob_flush();
