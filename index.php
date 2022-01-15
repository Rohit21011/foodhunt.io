<!DOCTYPE html>
<html lang="en">
<html>

<head>
    <title>Home</title>

    <?php include("boostrap-files.php");?>

</head>


<body>

    <?php include("header.php"); ?>

    <!--menu ends-->
    <div style="position:relative;top: 50px;" id="demo" class="carousel slide" data-ride="carousel">
        <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>

        </ul>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/image2.jpg" width="100%" alt="Los Angeles" class="d-block  ">
                <div class="carousel-caption">
                    <h3>Los Angeles</h3>
                    <p>We had such a great time in LA!</p>
                </div>
            </div>

            <div class="carousel-item">
                <img src="img/scroll-image.jpg" alt="New York" class="d-block w-100">
                <div class="carousel-caption">
                    <h3>New York</h3>
                    <p>We love the Big Apple!</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>

    <br><br>
    <div class="container mt-5">
        <div class="row justify-content-around  ">
            <div class=" col-lg-2 col-md-4   col-6 mt-4">

                <div class="text-center">
                    <a href="#">
                        <img src="img/small-burger.png" width="108px" height="95px" alt="Cold Drinks"></a>
                    <h5 class="product-title " href="#">COMBO</h5>
                </div>
            </div>
            <div class="col-lg-2 col-md-4  col-6 mt-4">
                <div class="text-center">
                    <a href="#">
                        <img width="108px" height="95px" src="img/kids-menus.png" alt="Pasta"></a>
                    <h5 class="product-title" href="#">KIDS MENUS</h5>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-6  mt-4">
                <div class="text-center">
                    <a href="#">
                        <img width="108px" height="95px" src="img/pizzas.png" alt="Pizza"></a>
                    <h5 class="product-title" href="#">PIZZA</h5>
                </div>
            </div>
            <div class=" col-lg-2 col-md-4  col-6  mt-4">
                <div class="text-center">
                    <a href="#">
                        <img width="108px" height="95px" src="img/box-meal.png" alt="Burgers"></a>
                    <h5 class="product-title" href="#">BOX MEALS</h5>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-6  mt-4">
                <div class="text-center">
                    <a href="#">
                        <img width="108px" height="95px" src="img/sauses.png" alt="Cold Drinks"></a>
                    <h5 class="product-title" href="#">SAUSES</h5>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-6   mt-4">
                <div class="text-center">
                    <a href="#">
                        <img width="108px" height="95px" src="img/hot-drinks.png" alt="Hot Drinks"></a>

                    <h5 class="product-title" href="#">DRINKS</h5>
                </div>
            </div>
        </div>

    </div>
    <br><br><br>
    <div class="col offset-lg-4">
        <img width="186" height="168" src="img/discount.png" alt="">
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="col-lg-6 col-md-12 ">
                    <img width="647" class="burger-img" height="527" src="img/bergur.png">
                </div>
            </div>
            <div class=" col-lg-6 col-md-12">
                <h4 class="font-h4">About Our Food</h4>
                <h2 style="font-size: 36px;
    line-height: 40px;
    letter-spacing: -1px;">From Texas with American Love</h2>
                <div style="color: gray;letter-spacing: 1px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                    nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
                <div class="m-5 ">


                    <button class="btn btn-lg btn-warning " style="color:white;">ordered now</button>
                </div>


            </div>
        </div>

    </div>
    <div id="sampele"></div>
    <div style="padding:100px 50px 50px 50px;text-align: center;">
        <h2>Special Dishes</h2>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <ul class="nav nav-pills justify-content-center " id="mytab">
                    <li class="nav-item ml-4 mt-2">

                        <a class="nav-link active special-dish " data-toggle="pill" href="#pizza">PIZZA</a>
                    </li>
                    <li class="nav-item ml-4 mt-2">
                        <a class="nav-link special-dish " data-toggle="pill" href="#burger">BURGER</a>
                    </li>
                    <li class="nav-item ml-4 mt-2">
                        <a class="nav-link special-dish " data-toggle="pill" href="#deserts">DESERTS</a>
                    </li>
                    <li class="nav-item ml-4 mt-2">
                        <a class="nav-link  special-dish " data-toggle="pill" href="#non-veg">NONVEG</a>
                    </li>
                </ul>
                <!-- pizza-->
                <div class="tab-content ">
                    <div class="tab-pane fade show active" id="pizza">
                        <div class="row justify-content-around " id="pizza-details">


                        </div>
                    </div>

                    <!-- Burger-->
                    <div class="tab-pane fade " id="burger">
                        <div class="row justify-content-around" id="burger-details">

                        </div>
                    </div>
                    <!-- DESRTS-->
                    <div class="tab-pane fade " id="deserts">
                        <div class="row justify-content-around" id="deserts-details">


                        </div>
                    </div>
                    <!-- non-veg-->
                    <div class="tab-pane fade " id="non-veg">
                        <div class="row justify-content-around" id="nonveg-details">


                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <br><br>
    <div class=" container-fluid">
        <div class="row justify-content-around">
            <div class="col-lg-3  col-sm-5  col-10  div-pad">
                <div class="row ">
                    <div class="col features">

                        <div>
                            <img src="img/scooter.png" height="90px" width="90px">
                        </div>
                        <div>
                            <h3 class="heading">Free shipping</h3>
                            <span class="pizza-description ml-3 ">Sign up for updates and get free shipping</span>
                        </div>


                    </div>
                </div>
            </div>
            <div class="col-lg-3  col-sm-5  col-10 div-pad">
                <div class="row ">
                    <div class="col features">

                        <div>
                            <img src="img/watch.png" height="90px" width="90px">
                        </div>
                        <div>
                            <h3 class="heading">30 Minutes Delivery</h3>
                            <span class="pizza-description ml-3">Everything you order will be quickly delivered to your
                                door.</span>

                        </div>

                    </div>
                </div>
            </div>
            <div class=" col-lg-3  col-sm-5  col-10 div-pad">
                <div class="row ">
                    <div class="col features">

                        <div>
                            <img src="img/pizza.png" height="90px" width="90px">
                        </div>
                        <div>
                            <h3 class="heading">Best Quality Guarantee</h3>
                            <span class="pizza-description ml-3">Poco is an international chain of family
                                restaurants.</span>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br><br><br><br>
    <!--container 1 starts-->
    <div class="container-fluid" style="background-image: url('img/background-image.jpg');">
        <div class="row" style="height: 170px;">
            <div class="col-4  ">
                <img width="150" height="220" style="margin-left: -60px;" src="img/side-leaf.png">
            </div>
            <div class="col-4 ">
                <img class="discount" src="img/discount2.png">
            </div>

        </div>
        <div class="row">
            <div class="col-lg-6">
                <img class="big-pizza" src="img/big-pizza.png">
            </div>
            <div class="col-lg-6 ">
                <div class="text-center">
                    <h3 class="pizza-title"> super</h3>
                    <h3 class="pizza-title">Delisious</h3>
                </div>
                <h1 class="pizza-title1">Pizza</h1>

                <h3 class="pizza-description-1">Feel Hunger! Order Your Favouriate Food.</h3>
            </div>

            <div class="col">


            </div>
        </div>

    </div>

    <div class="container-fluid client-review-background">

        <h1 class="review-heading">What Our Client Says!</h1>





        <div id="demo1" class="carousel slide " data-ride="carousel">

            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row justify-content-around">
                        <div class="col-md-3 col-5 client-review">
                            <div class="row">
                                <div class="col">
                                    <img width="80" class="rounded-circle" height="80" src="img/lara.jpg">
                                    <i class="fas fa-quote-left colon p-2"></i>
                                    <span class="client-name ">Lara</span>
                                    <div class="ml-3 mt-2 d-sm-inline d-flex">
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked "></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                    </div>
                                </div>

                            </div>
                            <div class="row ">
                                <p class=" client-discription  "> "I am completely blown away. I would also like to say
                                    thank you to all your staff. It's really wonderful."</p>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row justify-content-around">
                        <div class="col-md-3 col-5 client-review">
                            <div class="row">
                                <div class="col">
                                    <img width="80" height="80" class="rounded-circle" src="img/rose.jpg">
                                    <i class="fas fa-quote-left colon p-2"></i>
                                    <span class="client-name ">Rose</span>
                                    <div class="ml-3 mt-2 d-sm-inline d-flex">

                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked "></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star"></span>
                                    </div>
                                </div>

                            </div>
                            <div class="row ">
                                <p class=" client-discription  "> “Forget the trendy pizza shops, This hidden spot makes
                                    the best New York-style pizza slice in naples”</p>

                            </div>
                        </div>
                    </div>
                </div>



                <div class="carousel-item ">
                    <div class="row justify-content-around">
                        <div class="col-md-3 col-6 client-review">
                            <div class="row">
                                <div class="col">
                                    <img width="80" height="80" class="rounded-circle" src="img/john doe.jpg">
                                    <i class="fas fa-quote-left colon p-2"></i>
                                    <span class="client-name ">john</span>
                                    <div class="ml-3 mt-2 d-sm-inline d-flex">
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked "></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star"></span>
                                    </div>
                                </div>

                            </div>
                            <div class="row ">
                                <p class=" client-discription  "> “Forget the trendy pizza shops, This hidden spot makes
                                    the best New York-style pizza slice in naples”</p>

                            </div>
                        </div>
                    </div>
                </div>

                <a class="carousel-control-prev" href="#demo1" data-slide="prev">
                    <span class="carousel-control-prev-icon bg-warning" style="height: 30px;width: 30px;"></span>
                </a>
                <a class="carousel-control-next" href="#demo1" data-slide="next">
                    <span class="carousel-control-next-icon bg-warning" style="height: 30px;width: 30px;"></span>
                </a>

            </div>
            <ul class="carousel-indicators ">
                <li data-target="#demo1" data-slide-to="0" class=" indicators active"></li>
                <li data-target="#demo1" data-slide-to="1" class=" indicators "></li>
                <li data-target="#demo1" data-slide-to="2" class=" indicators "></li>

            </ul>
        </div>

    </div>


    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 col-sm-6 col-12 img-hover">
                <img src="img/hover-image1.jpg">
            </div>
            <div class="col-md-3 col-sm-6 col-12 img-hover">
                <img src="img/hover-image2.jpg">
            </div>
            <div class="col-md-3 col-sm-6 col-12 img-hover">
                <img src="img/hover-image3.jpg">
            </div>
            <div class="col-md-3 col-sm-6 col-12 img-hover">
                <img src="img/hover-image4.jpg">
            </div>
        </div>
    </div>

    <script src="form/js/fetch-products-by-category.js">
        
    </script>

    <script src="form/js/fetch-wishlist.js"></script>


    <?php
			include("footer.php");
			?>





</body>

</html>