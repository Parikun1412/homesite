<div id="offcanvas-cart" class="offcanvas offcanvas-cart">
    <div class="inner">
        <div class="head">
            <span class="title">Cart</span>
            <button class="offcanvas-close">×</button>
        </div>
        <div class="body customScroll">
            <ul class="minicart-product-list" id="cart-items">
                <?php
                $path = dirname(__FILE__);
                require_once $path . '/../process/product.php';
                ?>

            </ul>
        </div>
        <div class="foot">
            <div class="buttons mt-30px">
                <a href="cart.php" class="btn btn-dark btn-hover-primary mb-30px">view cart</a>
            </div>
        </div>
    </div>
</div>