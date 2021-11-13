<!DOCTYPE html>
<html lang="en">

<head>

    <title>Document</title>
    <?php include("boostrap-files.php");?>
</head>

<body>

    <?php include("header.php");?>
    <div class="aboutus">
        <img height="auto" width="100%" src="img/about-background.jpg">



        <div class="content ">
            <h1>Wishlist</h1>
            <div class="more-links">
                <a href="index.php">Home</a>
                <i class=" fa fa-angle-double-right" style="font-size:15px; "></i>
                <span class="about-link">Wishlist</span>
            </div>
        </div>
    </div>
    <div class="container-fluid" style="position:relative;">
        <div class="row  justify-content-around">
            <div class="col-lg-3  col-md-5 mt-3 col-sm-2 col-10 wishlist-cards">
                <div class="d-flex">

                    <img width="200px" height="200px" src="image/special-bergur3.png" alt="">

                    <div class="mt-5 ml-2">
                        <p class="heading-h3">Cheese Butter</p>
                      
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star "></span>
                        
                        <p class="heading-h3 mt-2" style="font-size:25px">₹ 120/-</p>
                        <p class="heading-h3" style="font-size:14px">Order it now </p>
                        <p class="text-success" style="font-size:14px">In stock </p>


                    </div>


                </div>
                <div class="d-flex justify-content-around">
                    <a href="Add-to-cart.php" type="button" role="button" class=" remove-from-wishlist-btn  "
                        style="width:32%">Remove</a>
                    <a href="Add-to-cart.php" type="button" role="button" class=" add-to-cart-btn  "
                        style="width:32%">Add to cart</a>
                </div>



            </div>
            <div class="col-lg-3 col-md-5 mt-3 col-sm-2 col-10 wishlist-cards">
                <div class="d-flex">
                    <img width="200px" height="200px" src="image/indian-thali.png" alt="">
                    <div class="mt-5 ml-2">
                        <p class="heading-h3">Cheese Butter</p>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star "></span>
                        <p class="heading-h3 mt-2" style="font-size:25px">₹ 120/-</p>
                        <p class="heading-h3" style="font-size:14px">Order it now </p>
                        <p class="text-success" style="font-size:14px">In stock </p>

                    </div>
                </div>
                <div class="d-flex justify-content-around">
                    <a href="Add-to-cart.php" type="button" role="button" class=" remove-from-wishlist-btn  "
                        style="width:32%">Remove</a>
                    <a href="Add-to-cart.php" type="button" role="button" class=" add-to-cart-btn  "
                        style="width:32%">Add to cart</a>
                </div>
            </div>
            <div class="col-lg-3  col-md-5 mt-3 col-sm-2 col-10 wishlist-cards">
                <div class="d-flex">
                    <img width="200px" height="200px" src="image/festival-special.jpg" alt="">
                    <div class="mt-5 ml-2">
                        <p class="heading-h3">Cheese Butter</p>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star "></span>
                        <p class="heading-h3 mt-2" style="font-size:25px">₹ 120/-</p>
                        <p class="heading-h3" style="font-size:14px">Order it now </p>
                        <p class="text-success" style="font-size:14px">In stock </p>


                    </div>

                </div>
                <div class="d-flex justify-content-around">
                    <a href="remove-from-wishlist.php" type="button" role="button" class=" remove-from-wishlist-btn  "
                        style="width:32%">Remove</a>
                    <a href="Add-to-cart.php" type="button" role="button" class=" add-to-cart-btn  "
                        style="width:32%">Add to cart</a>
                </div>
            </div>

        </div>

    </div>
    <?php include('footer.php');?>
</body>

</html>