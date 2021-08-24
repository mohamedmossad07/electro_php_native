<?php
$data = \Models\User::cart();
$subTotalPrice = 0;
?>
<!-- SECTION -->
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <!-- Order Details -->
            <div class="col-md-offset-3 col-md-6  order-details">
                <div class="section-title text-center">
                    <h3 class="title">Your Order</h3>
                </div>
                <div class="order-summary">
                    <div class="order-col">
                        <div><strong>PRODUCT</strong></div>
                        <div><strong>TOTAL</strong></div>
                    </div>
                    <div class="order-products">
                        <?php foreach ($data as $pro):
                            $subTotalPrice += $pro->cQ * $pro->pPrice;
                            ?>
                            <div class="order-col">
                                <div><?= $pro->cQ ?>x <?= $pro->pName ?></div>
                                <div>$<?= $pro->cQ * $pro->pPrice ?></div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <div class="order-col">
                        <div>Shiping</div>
                        <div><strong>FREE</strong></div>
                    </div>
                    <div class="order-col">
                        <div><strong>TOTAL</strong></div>
                        <div><strong class="order-total">$<?= $subTotalPrice ?></strong></div>
                    </div>
                </div>
                <a href="#" class="primary-btn order-submit">Place order</a>
            </div>
            <!-- /Order Details -->
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /SECTION -->
