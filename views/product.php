<?php

ob_start();
if (\App\Request::query('id')) {
//include top header
    include('components/topHeader.php');


//include brand header
    include('components/brandHeader.php');

//include navbar
    include('components/navbar.php');


//include navbar
    include('components/product.php');

//include navbar
    include('components/relatedProducts.php');

//include top header
    include('components/footer.php');
} else {
    _include(_404View());

}
ob_flush();
