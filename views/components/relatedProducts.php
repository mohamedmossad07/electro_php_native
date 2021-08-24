<?php
ob_start();
$data = \Models\Product::all();
$cats = \Models\Category::all();
//_dd($data);
?>

<!-- Section -->
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <div class="col-md-12">
                <div class="section-title text-center">
                    <h3 class="title">Related Products</h3>
                </div>
            </div>
            <?php foreach ($data as $product): ?>

                <!-- product -->
                <div class="col-md-3 col-xs-6">
                    <div class="product">
                        <div class="product-img">
                            <img src="<?= _url('public/' . $product->pImg) ?>" alt="">
                            <div class="product-label">
                                <span class="sale">-<?= $product->pDiscount ?>%</span>
                            </div>
                        </div>
                        <div class="product-body">
                            <p class="product-category"><?= $product->cName ?></p>
                            <h3 class="product-name"><a
                                        href="<?= _url('product?id=' . $product->pId) ?>"><?= $product->pName ?></a>
                            </h3>
                            <h4 class="product-price">$<?= $product->pPrice ?>
                                <del class="product-old-price">$<?= $product->pOld_Price ?></del>
                            </h4>
                            <div class="product-rating">
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
                </div>
                <!-- /product -->
            <?php endforeach; ?>
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /Section -->

<?php
ob_flush();

?>
