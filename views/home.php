<?php
ob_start();

//include top header
include('components/topHeader.php');


//include brand header
include('components/brandHeader.php');

//include navbar
include('components/navbar.php');

//include categoryCollection
include('components/categoryCollection.php');

//include all products
include('components/newProducts.php');

//include brand header
include('components/hotDeal.php');

//include top selling
include('components/topSelling.php');


//include top header
include('components/footer.php');
ob_flush();
