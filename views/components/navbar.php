<?php
ob_start();
$data = \Models\Category::all();
?>
<!-- NAVIGATION -->
<nav id="navigation">
    <!-- container -->
    <div class="container">
        <!-- responsive-nav -->
        <div id="responsive-nav">
            <!-- NAV -->
            <ul class="main-nav nav navbar-nav">
                <li><a href="<?= _url('home') ?>">Home</a></li>
                <?php foreach ($data as $c) : ?>
                    <li><a href="#"><?= $c->name ?> </a></li>
                <?php endforeach; ?>
            </ul>
            <!-- /NAV -->
        </div>
        <!-- /responsive-nav -->
    </div>
    <!-- /container -->
</nav>
<!-- /NAVIGATION -->
<?php
ob_flush();
?>
