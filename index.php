<?php include "header.php" ?>
<!-- SECTION -->
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <!-- shop -->
            <div class="col-md-4 col-xs-6">
                <div class="shop">
                    <div class="shop-img">
                        <img src="./img/huawei-matebook.png" alt="">
                    </div>
                    <div class="shop-body">
                        <h3>Laptop<br>Collection</h3>
                        <a href="#" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
            <!-- /shop -->

            <!-- shop -->
            <div class="col-md-4 col-xs-6">
                <div class="shop">
                    <div class="shop-img">
                        <img src="./img/iphone-14.png" alt="">
                    </div>
                    <div class="shop-body">
                        <h3>Phone<br>Collection</h3>
                        <a href="#" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
            <!-- /shop -->

            <!-- shop -->
            <div class="col-md-4 col-xs-6">
                <div class="shop">
                    <div class="shop-img">
                        <img src="./img/xiaomi-watch.png" alt="">
                    </div>
                    <div class="shop-body">
                        <h3>Watch<br>Collection</h3>
                        <a href="#" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
            <!-- /shop -->
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /SECTION -->

<!-- SECTION -->
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">

            <!-- section title -->
            <div class="col-md-12">
                <div class="section-title">
                    <h3 class="title">New products</h3>
                    <div class="section-nav">
                        <ul class="section-tab-nav tab-nav">
                            <li class="active"><a data-toggle="tab" href="#tab2">Laptops</a></li>
                            <li><a data-toggle="tab" href="#tab2">Smartphones</a></li>
                            <li><a data-toggle="tab" href="#tab2">Cameras</a></li>
                            <li><a data-toggle="tab" href="#tab2">Accessories</a></li>
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
                        <div id="tab2" class="tab-pane fade in active">
                            <div class="products-slick" data-nav="#slick-nav-2">
                                <?php 
                                $checkSale = true;
                                foreach ($products as $value) :
                                ?>
                                    <!-- product -->
                                    <div class="product">
                                        <div class="product-img">
                                            <img src='./img/<?php echo $value["image"]; ?>'>
                                            <div class="product-label">
                                                <?php
                                                if ($value["feature"] != 1) {
                                                    echo "<span class=\"sale\">-30%</span>";
                                                    $checkSale = true;
                                                } else {
                                                    echo "<span class=\"new\">NEW</span>";
                                                    $checkSale = false;
                                                }
                                                ?>
                                            </div>
                                            <div class="product-body">
                                                <p class="product-category"><?php echo $value["manu_name"] ?></p>
                                                <h3 class="product-name"><a href="product.php?id=<?php echo $value['id'] ?>"><?php echo $value["name"] ?></a></h3>
                                                <h4 class="product-price">
                                                    <?php echo $checkSale ? number_format($value["price"] * 0.7) : number_format($value["price"]) ?>
                                                    <del class="product-old-price"><?php echo $checkSale ? number_format($value["price"]) : "" ?></del>
                                                </h4>
                                                <div class="product-rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <div class="product-btns">
                                                    <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
                                                    <button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
                                                    <button class="quick-view">
                                                        <a href="product.php?id=<?php echo $value['id'] ?>">
                                                            <i= class="fa fa-eye"></i>
                                                        </a>
                                                        <span class="tooltipp">quick view</span>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="add-to-cart">
                                                <a href="addsession.php?id=<?php echo intval($value['id']);?>"><button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button></a>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                                <!-- /product -->
                            </div>
                            <div id="slick-nav-2" class="products-slick-nav"></div>
                        </div>
                        <!-- /tab -->
                    </div>
                </div>
            </div>
            <!-- /Products tab & slick -->
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /SECTION -->

<!-- HOT DEAL SECTION -->
<div id="hot-deal" class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <div class="col-md-12">
                <div class="hot-deal">
                    <ul class="hot-deal-countdown">
                        <li>
                            <div>
                                <h3>02</h3>
                                <span>Days</span>
                            </div>
                        </li>
                        <li>
                            <div>
                                <h3>10</h3>
                                <span>Hours</span>
                            </div>
                        </li>
                        <li>
                            <div>
                                <h3>34</h3>
                                <span>Mins</span>
                            </div>
                        </li>
                        <li>
                            <div>
                                <h3>60</h3>
                                <span>Secs</span>
                            </div>
                        </li>
                    </ul>
                    <h2 class="text-uppercase">hot deal this week</h2>
                    <p>New Collection Up to 50% OFF</p>
                    <a class="primary-btn cta-btn" href="#">Shop now</a>
                </div>
            </div>
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /HOT DEAL SECTION -->

<!-- SECTION -->
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">

            <!-- section title -->
            <div class="col-md-12">
                <div class="section-title">
                    <h3 class="title">Top selling</h3>
                    <div class="section-nav">
                        <ul class="section-tab-nav tab-nav">
                            <li class="active"><a data-toggle="tab" href="#tab2">Laptops</a></li>
                            <li><a data-toggle="tab" href="#tab2">Smartphones</a></li>
                            <li><a data-toggle="tab" href="#tab2">Cameras</a></li>
                            <li><a data-toggle="tab" href="#tab2">Accessories</a></li>
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
                        <div id="tab2" class="tab-pane fade in active">
                            <div class="products-slick" data-nav="#slick-nav-2">
                                <?php
                                $product = new Product;
                                $products = $product->getTopSelling();
                                $checkSale = true;
                                foreach ($products as $value) :
                                ?>
                                    <!-- product -->
                                    <div class="product">
                                        <div class="product-img">
                                            <img src='./img/<?php echo $value["image"]; ?>'>
                                            <div class="product-label">
                                                <?php
                                                if ($value["feature"] != 1) {
                                                    echo "<span class=\"sale\">-30%</span>";
                                                    $checkSale = true;
                                                } else {
                                                    echo "<span class=\"new\">NEW</span>";
                                                    $checkSale = false;
                                                }
                                                ?>
                                            </div>
                                            <div class="product-body">
                                                <p class="product-category"><?php echo $value["manu_name"] ?></p>
                                                <h3 class="product-name"><a href="product.php?id=<?php echo $value['id'] ?>"><?php echo $value["name"] ?></a></h3>
                                                <h4 class="product-price">
                                                    <?php echo $checkSale ? number_format($value["price"] * 0.7) : number_format($value["price"]) ?>
                                                    <del class="product-old-price"><?php echo $checkSale ? number_format($value["price"]) : "" ?></del>
                                                </h4>
                                                <div class="product-rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <div class="product-btns">
                                                    <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
                                                    <button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
                                                    <button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
                                                </div>
                                            </div>
                                            <div class="add-to-cart">
                                            <a href="addsession.php?id=<?php echo intval($value['id']);?>"><button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button></a>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                                <!-- /product -->
                            </div>
                            <div id="slick-nav-2" class="products-slick-nav"></div>
                        </div>
                        <!-- /tab -->
                    </div>
                </div>
            </div>
            <!-- /Products tab & slick -->
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /SECTION -->


<!-- SECTION -->
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <div class="col-md-4 col-xs-6">
                <div class="section-title">
                    <h4 class="title">Top selling laptop</h4>
                    <div class="section-nav">
                        <div id="slick-nav-3" class="products-slick-nav"></div>
                    </div>
                </div>

                <div class="products-widget-slick" data-nav="#slick-nav-3">
                    <div>
                        <?php
                        $products = $product->getTopRankSellingProtype("Laptop", 0, 3);
                        $checkSale = true;
                        foreach ($products as $value) :
                        ?>
                            <!-- product widget -->
                            <div class="product-widget">
                                <div class="product-img">
                                    <img src='./img/<?php echo $value["image"]; ?>'>
                                    <div class="product-label">
                                        <?php
                                        if ($value["feature"] != 1) {
                                            $checkSale = true;
                                        } else {
                                            $checkSale = false;
                                        }
                                        ?>
                                    </div>
                                </div>
                                <div class="product-body">
                                    <p class="product-category"><?php echo $value["manu_name"] ?></p>
                                    <h3 class="product-name"><a href="product.php?id=<?php echo $value['id'] ?>"><?php echo $value["name"] ?></a></h3>
                                    <h4 class="product-price">
                                        <?php echo $checkSale ? number_format($value["price"] * 0.7) : number_format($value["price"]) ?>
                                        <del class="product-old-price"><?php echo $checkSale ? number_format($value["price"]) : "" ?></del>
                                    </h4>
                                </div>
                            </div>

                        <?php endforeach; ?>
                        <!-- /product widget -->
                    </div>
                    <div>
                        <?php
                        $products = $product->getTopRankSellingProtype("Laptop", 3, 6);
                        $checkSale = true;
                        foreach ($products as $value) :
                        ?>
                            <!-- product widget -->
                            <div class="product-widget">
                                <div class="product-img">
                                    <img src='./img/<?php echo $value["image"]; ?>'>
                                    <div class="product-label">
                                        <?php
                                        if ($value["feature"] != 1) {
                                            $checkSale = true;
                                        } else {
                                            $checkSale = false;
                                        }
                                        ?>
                                    </div>
                                </div>
                                <div class="product-body">
                                    <p class="product-category"><?php echo $value["manu_name"] ?></p>
                                    <h3 class="product-name"><a href="product.php?id=<?php echo $value['id'] ?>"><?php echo $value["name"] ?></a></h3>
                                    <h4 class="product-price">
                                        <?php echo $checkSale ? number_format($value["price"] * 0.7) : number_format($value["price"]) ?>
                                        <del class="product-old-price"><?php echo $checkSale ? number_format($value["price"]) : "" ?></del>
                                    </h4>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>

                </div>
            </div>
            <div class="col-md-4 col-xs-6">
                <div class="section-title">
                    <h4 class="title">Top selling phone</h4>
                    <div class="section-nav">
                        <div id="slick-nav-4" class="products-slick-nav"></div>
                    </div>
                </div>

                <div class="products-widget-slick" data-nav="#slick-nav-4">
                    <div>
                        <?php
                        $products = $product->getTopRankSellingProtype("Phone", 0, 3);
                        $checkSale = true;
                        foreach ($products as $value) :
                        ?>
                            <!-- product widget -->
                            <div class="product-widget">
                                <div class="product-img">
                                    <img src='./img/<?php echo $value["image"]; ?>'>
                                    <div class="product-label">
                                        <?php
                                        if ($value["feature"] != 1) {
                                            $checkSale = true;
                                        } else {
                                            $checkSale = false;
                                        }
                                        ?>
                                    </div>
                                </div>
                                <div class="product-body">
                                    <p class="product-category"><?php echo $value["manu_name"] ?></p>
                                    <h3 class="product-name"><a href="product.php?id=<?php echo $value['id'] ?>"><?php echo $value["name"] ?></a></h3>
                                    <h4 class="product-price">
                                        <?php echo $checkSale ? number_format($value["price"] * 0.7) : number_format($value["price"]) ?>
                                        <del class="product-old-price"><?php echo $checkSale ? number_format($value["price"]) : "" ?></del>
                                    </h4>
                                </div>
                            </div>

                        <?php endforeach; ?>
                        <!-- /product widget -->
                    </div>

                    <div>
                        <?php
                        $products = $product->getTopRankSellingProtype("Phone", 3, 6);
                        $checkSale = true;
                        foreach ($products as $value) :
                        ?>
                            <!-- product widget -->
                            <div class="product-widget">
                                <div class="product-img">
                                    <img src='./img/<?php echo $value["image"]; ?>'>
                                    <div class="product-label">
                                        <?php
                                        if ($value["feature"] != 1) {
                                            $checkSale = true;
                                        } else {
                                            $checkSale = false;
                                        }
                                        ?>
                                    </div>
                                </div>
                                <div class="product-body">
                                    <p class="product-category"><?php echo $value["manu_name"] ?></p>
                                    <h3 class="product-name"><a href="product.php?id=<?php echo $value['id'] ?>"><?php echo $value["name"] ?></a></h3>
                                    <h4 class="product-price">
                                        <?php echo $checkSale ? number_format($value["price"] * 0.7) : number_format($value["price"]) ?>
                                        <del class="product-old-price"><?php echo $checkSale ? number_format($value["price"]) : "" ?></del>
                                    </h4>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>

            <div class="clearfix visible-sm visible-xs"></div>

            <div class="col-md-4 col-xs-6">
                <div class="section-title">
                    <h4 class="title">Top selling watch</h4>
                    <div class="section-nav">
                        <div id="slick-nav-5" class="products-slick-nav"></div>
                    </div>
                </div>

                <div class="products-widget-slick" data-nav="#slick-nav-5">
                    <div>
                        <?php
                        $products = $product->getTopRankSellingProtype("Watch", 0, 3);
                        $checkSale = true;
                        foreach ($products as $value) :
                        ?>
                            <!-- product widget -->
                            <div class="product-widget">
                                <div class="product-img">
                                    <img src='./img/<?php echo $value["image"]; ?>'>
                                    <div class="product-label">
                                        <?php
                                        if ($value["feature"] != 1) {
                                            $checkSale = true;
                                        } else {
                                            $checkSale = false;
                                        }
                                        ?>
                                    </div>
                                </div>
                                <div class="product-body">
                                    <p class="product-category"><?php echo $value["manu_name"] ?></p>
                                    <h3 class="product-name"><a href="product.php?id=<?php echo $value['id'] ?>"><?php echo $value["name"] ?></a></h3>
                                    <h4 class="product-price">
                                        <?php echo $checkSale ? number_format($value["price"] * 0.7) : number_format($value["price"]) ?>
                                        <del class="product-old-price"><?php echo $checkSale ? number_format($value["price"]) : "" ?></del>
                                    </h4>
                                </div>
                            </div>

                        <?php endforeach; ?>
                        <!-- /product widget -->
                    </div>

                    <div>
                        <?php
                        $products = $product->getTopRankSellingProtype("Watch", 3, 6);
                        $checkSale = true;
                        foreach ($products as $value) :
                        ?>
                            <!-- product widget -->
                            <div class="product-widget">
                                <div class="product-img">
                                    <img src='./img/<?php echo $value["image"]; ?>'>
                                    <div class="product-label">
                                        <?php
                                        if ($value["feature"] != 1) {
                                            $checkSale = true;
                                        } else {
                                            $checkSale = false;
                                        }
                                        ?>
                                    </div>
                                </div>
                                <div class="product-body">
                                    <p class="product-category"><?php echo $value["manu_name"] ?></p>
                                    <h3 class="product-name"><a href="product.php?id=<?php echo $value['id'] ?>"><?php echo $value["name"] ?></a></h3>
                                    <h4 class="product-price">
                                        <?php echo $checkSale ? number_format($value["price"] * 0.7) : number_format($value["price"]) ?>
                                        <del class="product-old-price"><?php echo $checkSale ? number_format($value["price"]) : "" ?></del>
                                    </h4>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /SECTION -->
<?php include "footer.php" ?>