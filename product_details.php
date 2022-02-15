<!DOCTYPE html>
<html lang="en">

<head>

    <title>product details</title>
    <?php include("boostrap-files.php");?>
</head>

<body>
    <?php include("header.php");?>
    <div class="aboutus">
        <img height="auto" width="100%" src="img/about-background.jpg">
        <div class="content" style="font-size:23px">

            <div class="more-links">
                <a href="index.php">Home</a>
                <i class=" fa fa-angle-double-right" style="font-size:15px; "></i>
                <span class="about-link">pizza</span>
                <i class=" fa fa-angle-double-right" style="font-size:15px; "></i>
                <span class="about-link">Apricot chicken</span>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="product-image-segment">
                    <div class="product-image-background">
                        <div>
                            <img style="position:relative;" height="95%" width="95%" src="image/Apricot chicken.png"
                                alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 ">
                <div>
                    <h1 style="font-size:50px;font-weight:bold">Apricot chicken</h1>
                    <p class="prod-description">Crispy bacon, tasty ham, pineapple, onion and stretchy mozzarella,
                        finished with a BBQ swirl.</p>
                    <span class="price" style="font-size:35px;position:relative;top:10px"> ₹ 80/-</span>
                </div>
                <div class="w-100  mt-5 horizontal-line">
                    <a href="add-to-cart.php">
                        <div class="add-to-cart add-to-cart-product-btn" style="border-radius:10px !important">
                            <i class="fas fa-shopping-basket"></i>
                            <span>ADD TO CART</span>

                        </div>
                    </a>
                    <a href="add-to-wishlist.php">
                        <div class="prod-wishlist">
                            <i class="fa fa-heart"></i>
                        </div>
                    </a>
                </div>
                <div class="imp-points mt-5">
                    <ul class="point-list">
                        <li>Free global shipping on all orders</li>
                        <li>30 days easy returns if you change your mind</li>
                        <li>Order before noon for same day dispatch
                        </li>
                    </ul>
                </div>
                <div class=" mt-5 " style="font-weight: bold;">
                 <span class="mr-3">Guaranteed Safe Checkout</span>
                 <img src="img/trust-symbols.png" alt="trust symbols">
                </div>




            </div>

        </div>
    </div>
    <?php include("footer.php");?>
</body>

</html>