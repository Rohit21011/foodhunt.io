<!DOCTYPE html>
<html lang="en">

<head>
    <title>shop</title>
    <?php include("boostrap-files.php");?>
</head>

<body>
    <?php include("header.php");?>
    <div class="aboutus">
        <img height="auto" width="100%" src="img/about-background.jpg">



        <div class="content ">
            <h1>Shop</h1>
            <div class="more-links">
                <a href="index.php">Home</a>
                <i class=" fa fa-angle-double-right" style="font-size:15px; "></i>
                <a href="shop.php">Shop</a>
                <i class=" fa fa-angle-double-right" style="font-size:15px; "></i>
                <span class="about-link"><?php echo $_GET['id'];?></span>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row justify-content-around">
            <form class="d-block d-md-none sorting">
                <select name="category" id="select">
                    <option value="all">All</option>
                    <option value="burger">Burger</option>
                    <option value="pizza">Pizza</option>
                    <option value="non-veg">Non-veg</option>

                    <option value="cold-drinks">Cold Drinks</option>
                </select>
            </form>
            <div class="col-2 ml-3 d-none d-md-block  category-layout ">

                <h5 class="mt-2 ml-3">Categories</h5>

                <ul class="category-background">
                    <li class="product-category ">
                        <a href="#" id="burger">
                            <i class="	fas fa-hamburger "></i>
                            <span>Burger</span>
                        </a>
                        <span class="count"></span>
                    </li>
                    <li class="product-category">
                        <a href="#" id="pizza">
                            <i class="	fas fa-pizza-slice "></i>
                            <span>Pizza</span>
                        </a>
                        <span class="count"></span>
                    </li>
                    <li class="product-category">
                        <a href="#" id="non-veg">
                            <i class="fas fa-drumstick-bite "></i>
                            <span>None Veg</span>
                        </a>
                        <span class="count"></span>
                    </li>
                    <li class="product-category">
                        <a href="#" id="cold-drinks">
                            <i class="	fas fa-glass-martini-alt "></i>
                            <span>Cold Drinks</span>
                        </a>
                        <span class="count"></span>
                    </li>
                    <li class="product-category">
                        <a href="#" id="other">
                            <i class="	fas fa-utensils "></i>
                            <span>Other</span>
                        </a>
                        <span class="count">(0)</span>
                    </li>
                </ul>

            </div>
            <div class="col-lg-9 ml-4">
                <div class="row justify-content-around" id="show-all-products">

                </div>
            </div>
        </div>
    </div>

    <div class="d-flex justify-content-around mt-5 p">
        <ul class="pagination " id="pagination">

        </ul>
    </div>
    <script src="form/js/count-products.js"></script>
    <script>
    $(document).ready(function() {

        $("#select").on("change", function() {

            var cat = $("#select").val();
            if (cat != "all") {
                getData(cat);
            } else {
                window.open("shop.php", "_parent");
            }

        });
        var customer_mobile = sessionStorage.getItem('customer_id');
        var category = "<?php echo $_GET['id'];?>";

        $(" #select  [ value=" + category + "]").attr("selected", "selected");
        $("#" + category).parent().removeClass("show-active-link");
        $("#" + category).parent().addClass("show-active-link");
        getData(category);
        //  var id=$("a[href$='#pizza']").val("pizza");
        function getData(category) {
            var str = "";
            $.ajax({
                url: "api/fetch-product.php",
                type: "POST",
                data: {
                    "category": category
                },


                dataType: "JSON",
                success: function(data) {
                    console.log(data);
                    $("#show-all-products").empty();
                    $.each(data, function(key, value) {
                        str += `<div class=" col-11 col-sm-5  col-lg-2 column-background ">

                        <div class="row div-background">
                            <div class=" col-10   div-col" id="pizza-image">
                           
                                <img style="border-radius:140px" width="260px" height="260px" src="image/${value.product_image}"> 
                            </div>
                            <div class=" col-2 wishlist">
                                <i class="fa fa-heart" prod_id="${value.product_id}"></i>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <p class="price">${value.product_ratting}/5</p>
                                <h3 class="heading-h3" id="pizza-name">${value.product_name}</h3>
                                <div class="short-description" id="pizza-description">${value.product_description}</div>
                                <a href="add-to-cart.php"><i class="fas fa-shopping-basket add-to-cart" id="${value.product_id}"></i></a>
                                <span class="price" style="float: left; " id="pizza-price">₹${value.product_price}/-</span>


                            </div>

                        </div>
                    </div>`;




                    });
                    $("#show-all-products").append(str);
                    if (customer_mobile != null) {
                        // var customer_mobile = sessionStorage.getItem('customer_id');
                        $.ajax({
                            url: "api/fetch-wishlist.php",
                            type: "POST",
                            data: {
                                customer_mobile: customer_mobile
                            },
                            dataType: "JSON",
                            success: function(data) {

                                $.each(data, function(key, value) {
                                    console.log(value.product_id);

                                    $(".wishlist [prod_id=" + value.product_id +
                                        "]").css("color", "red");
                                });
                            }

                        });
                    }
                }


            });

        }

        $(".product-category a").click(function() {
            var prod_name = $(this).attr("id");
            $(".about-link").html(prod_name);
            $(".product-category").removeClass("show-active-link");
            $("#" + prod_name).parent().addClass("show-active-link");
            getData(prod_name);
        });

        $(document).on("click", ".wishlist i", function() {
            if (customer_mobile != null) {

                var prod_id = $(this).attr("prod_id");
                var product_details = "product_details";
                console.log(prod_id);
                $.ajax({
                    url: "api/add-wishlist.php",
                    type: "POST",
                    dataType: "JSON",
                    data: {
                        prod_id: prod_id,
                        customer_phone: customer_mobile
                    },
                    success: function(data) {
                        if (data == 1) {

                            $(".wishlist [prod_id=" + prod_id + "]").css("color", "red");

                        } else {
                            alert("no");
                        }
                    }
                });
            } else {
                window.location.assign("sign_in.php");
            }
        });

        $(document).on("click", "a .add-to-cart", function(e) {
            e.preventDefault();
            if (customer_mobile != null) {
                var prod_id = $(this).attr("id");
                console.log(prod_id);
                $.ajax({
                    url: "api/add-to-cart-main.php",
                    type: "POST",
                    dataType: "JSON",
                    data: {
                        prod_id: prod_id,customer_phone:customer_mobile
                    },
                    success: function(data) {
                        if (data == 1) {

                            alert("product added to your cart successfully");

                        } else {
                            alert("This item already in cart");
                        }
                    }
                });
            } else {
                window.location.assign("sign_in.php");
            }
        });

    });
    </script>

    <?php include('footer.php');?>
</body>

</html>