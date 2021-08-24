<?php
$data = \Models\User::cart();
$subTotalPrice = 0;
?>
<!-- MAIN HEADER -->
<div id="header">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <!-- LOGO -->
            <div class="col-md-3">
                <div class="header-logo">
                    <a href="<?= _url('home') ?>" class="logo">
                        <img src="<?= _url('public/img/logo.png') ?>" alt="">
                    </a>
                </div>
            </div>
            <!-- /LOGO -->

            <!-- SEARCH BAR -->
            <div class="col-md-6">
            </div>
            <!-- /SEARCH BAR -->

            <!-- ACCOUNT -->
            <div class="col-md-3 clearfix">
                <div class="header-ctn">
                    <!-- Cart -->
                    <div class="dropdown">
                        <a class="dropdown-toggle pointer" data-toggle="dropdown" aria-expanded="true">
                            <i class="fa fa-shopping-cart"></i>
                            <span>Your Cart</span>
                            <div class="qty"><?= \Models\User::logined() ? count($data) : 0 ?></div>
                        </a>
                        <div class="cart-dropdown">
                            <?php if (\Models\User::logined()): ?>
                                <div class="cart-list">
                                    <?php foreach ($data as $pro):
                                        $subTotalPrice += $pro->cQ * $pro->pPrice;
                                        ?>
                                        <div class="product-widget">
                                            <div class="product-img">
                                                <img src="<?= _url('public/' . $pro->pImg) ?>" alt="">
                                            </div>
                                            <div class="product-body">
                                                <h3 class="product-name"><a
                                                            href="<?= _url('product?id=' . $pro->pId) ?>"><?= $pro->pName ?></a>
                                                </h3>
                                                <h4 class="product-price"><span
                                                            class="qty"><?= $pro->cQ ?>x</span>$<?= $pro->cQ * $pro->pPrice ?>
                                                </h4>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                                <div class="cart-summary">
                                    <small><?= count($data) ?> Item(s) selected</small>
                                    <h5>SUBTOTAL: $<?= $subTotalPrice ?></h5>
                                </div>
                                <div class="cart-btns">
                                    <a href="<?= _url('checkout') ?>">Checkout <i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            <?php else: ?>
                                <div class="cart-list">
                                    <div class="product-widget">
                                        <h3 class="product-name text-center">Login first</h3>
                                    </div>
                                </div>
                                <div class="cart-btns">
                                    <a href="<?= _url('login') ?>">Login <i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                    <!-- /Cart -->

                    <!-- Menu Toogle -->
                    <div class="menu-toggle">
                        <a href="#">
                            <i class="fa fa-bars"></i>
                            <span>Menu</span>
                        </a>
                    </div>
                    <!-- /Menu Toogle -->
                </div>
            </div>
            <!-- /ACCOUNT -->
        </div>
        <!-- row -->
    </div>
    <!-- container -->
</div>
<!-- /MAIN HEADER -->
</header>
<!-- /HEADER -->
