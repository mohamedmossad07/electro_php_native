<?php
ob_start();
$data = \Models\Category::getCategoryCollection();
?>
<!-- SECTION -->
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <?php foreach ($data as $cat): ?>
                <!-- shop -->
                <div class="col-md-4 col-xs-6">
                    <div class="shop">
                        <div class="shop-img">
                            <img src="<?= _url('public/' . $cat->img) ?>" alt="">
                        </div>
                        <div class="shop-body">
                            <h3><?= $cat->name ?><br>Collection</h3>
                        </div>
                    </div>
                </div>
                <!-- /shop -->
            <?php endforeach; ?>
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /SECTION -->
<?php
ob_flush();

?>
