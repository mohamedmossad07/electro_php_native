<?php
ob_start();
$data = \Models\Product::all();
$cats = \Models\Category::all();

//_dd($data);
?>
<!-- SECTION -->
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">

            <!-- section title -->
            <div class="col-md-12">
                <div class="section-title">
                    <h3 class="title">New Products</h3>
                    <div class="section-nav">
                        <ul class="section-tab-nav tab-nav">
                            <li data-filter="*" class="active grid-nav"><a data-toggle="tab" href="#tab1">All</a></li>

                            <?php foreach ($cats as $c) : ?>
                                <!--                            <li class="active"><a data-toggle="tab" href="#tab1">Laptops</a></li>-->
                                <li data-filter="<?= '.' . $c->name ?>" class="grid-nav"><a data-toggle="tab"
                                                                                            href="#tab1"><?= $c->name ?></a>
                                </li>

                            <?php endforeach; ?>

                        </ul>
                    </div>
                </div>
            </div>
            <!-- /section title -->

            <!-- Products tab & slick -->
            <div class="col-md-12">
                <div class="row">
                    <div class="products-tabs">
                        <!-- tab -->
                        <div id="tab1" class="tab-pane active">
                            <div class="products-slick  grid newProducts" data-nav="#slick-nav-1">
                                <?php foreach ($data as $product): ?>
                                    <!-- product -->
                                    <div class="<?= $product->cName ?> grid-item product">
                                        <div class="product-img">
                                            <img src="<?= _url('public/' . $product->pImg) ?>" alt="">
                                            <div class="product-label">
                                                <span class="sale">-<?= $product->pDiscount ?>%</span>
                                                <?php if ($product->pStatus == 'new'): ?>
                                                    <span class="new">NEW</span>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <div class="product-body">
                                            <p class="product-category"><?= $product->cName ?></p>
                                            <h3 class="product-name"><a
                                                        href="<?= _url('product?id=' . $product->pId) ?>"><?= $product->pName ?></a>
                                            </h3>
                                            <h4 class="product-price"><?= $product->pPrice ?>
                                                <del class="product-old-price"> <?= $product->pOld_Price ?></del>
                                            </h4>
                                            <div class="product-rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <div class="product-btns">
                                                <button class="quick-view"><i class="fa fa-eye"></i><span
                                                            class="tooltipp">quick view</span></button>
                                            </div>
                                        </div>
                                        <div class="add-to-cart">
                                            <button class="add-to-cart-btn" data-product-id="<?= $product->pId ?>"><i
                                                        class="fa fa-shopping-cart"></i> add to cart
                                            </button>
                                        </div>
                                    </div>
                                    <!-- /product -->
                                <?php endforeach; ?>
                            </div>
                            <div id="slick-nav-1" class="products-slick-nav"></div>
                        </div>
                        <!-- /tab -->
                    </div>
                </div>
            </div>
            <!-- Products tab & slick -->

        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /SECTION -->

<?php
ob_flush();

?>
