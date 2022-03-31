<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0 ">
    <!--bootstrap files-->
    <link rel="stylesheet" type="text/css" href="../form/css/extra-css.css">
    <link rel="stylesheet" type="text/css" href="../form/css/admin-pannel.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">


    <!-- Material Design Bootstrap -->
    <script src="../form/js/index.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>

<link
        href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@400;800&family=Prata&family=Red+Hat+Display&family=Rokkitt:wght@100;900&display=swap&family=Poppins:wght@200&display=swap&family=Orbitron:wght@900&display=swap&family=Zilla+Slab:wght@300&display=swap"
        rel="stylesheet">

    <title>Dashboard</title>
</head>

<body>
    
    <div class="container-fluid ">
        <div class="row">

            <div class="col-3">
                <div class="sidebar">
                    <img src="../img/food-logo1.png" alt="" width="238px" height="84px">
                    <ul class="nav nav-tabs flex-column mt-5 ml-3  border-0" role="tablist">
                        <li class="active">
                            <div class="d-flex ml-3">
                                <i class="fab fa-dashcube dash-icons"></i><a role="tab" data-toggle="tab"
                                    href="#dashboard">Dashboard</a>
                            </div>
                        </li>
                        <li>
                            <div class="d-flex ml-3 mt-3">
                                <i class="	fab fa-product-hunt dash-icons"></i><a role="tab" data-toggle="tab"
                                    href="#products">Add products</a>
                            </div>
                        </li>
                        <li>
                            <div class="d-flex ml-3 mt-3">
                                <i class="fas fa-utensils dash-icons"></i><a role="tab" data-toggle="tab"
                                    href="#menu">Add menu</a>
                            </div>

                        </li>
                    </ul>

                </div>
            </div>
            <div class="col">
                <div class="row justify-content-start">
                    <!-- tab pane -->
                    <div class="tab-content tabs">
                        <div role="tabpanel" class="  tab-pane fade in active show" id="dashboard">
                            <h2 style="text-align:center">Orders</h2>
                            <table class="table table-striped table-style"  id="show-orders" >
                                <tr>
                                
                                    <th> Product Id</th>
                                    <th>Product Name</th>
                                   
                                    <th>Product Price</th>

                                    <th>Quantity</th>
                                    <th>Total</th>
                                    <th>Customer Mobile</th>
                                   
                                    <th>Customer Address</th>
                                    <th>Date/Time</th>

                                </tr>
                               

                                
                            </table>
                        </div>
                        <div role="tabpanel" class="tab-pane fade  " id="products">


                            <div class=" sign-up-layout">
                                <div class="ml-sm-4 mr-sm-4">

                                    <form id="product-form" class="form-group " style="font-size: 13px;"
                                        enctype="multipart/form-data">

                                        <label for="category"> Select category</label>
                                        <select name="select" id="category">
                                            <option value="select"> Select</option>
                                            <option value="pizza"> Pizza</option>
                                            <option value="burger"> Burger</option>

                                            <option value="desert"> Desert</option>

                                            <option value="non-veg"> Non-veg</option>
                                        </select><br>


                                        <label for="product-name" class="mt-2">Product name </label>
                                        <input type="text" name="p_name" class="form-control " id="product-name">

                                        <label for="product-image" class="mt-2">Product-image</label>
                                        <input type="file" name="file" id="product-image"><br>

                                        <label for="product-price" class="mt-2">Product price</label>
                                        <input type="number" name="p_price" class="form-control" id="product-price">

                                        <label for="product-ratting"  class="mt-2">Product ratting</label>
                                        <input type="number" name="p_ratting" step="0.01" class="form-control" id="product-ratting">

                                        <label for="product-info" class="mt-2">Product description</label>
                                        <textarea name="p_description" id="product-info" class="form-control" cols="5"
                                            rows="5"></textarea>

                                        <button type="submit" class="sign-in border-0 mt-4 w-100 " id="add-product">Add
                                            product</button>


                                    </form>
                                    <div class="alert" id="added"></div>


                                </div>

                            </div>


                        </div>
                        <div role="tabpanel" class="tab-pane fade " id="menu">


                            <div class=" sign-up-layout">
                                <div class="ml-sm-4 mr-sm-4">

                                    <form id="menu-form" class="form-group " style="font-size: 13px;"
                                        enctype="multipart/form-data">

                                        <label for="category"> Select category</label>
                                        <select name="menu_category" id="category">
                                            <option value="select"> Select</option>
                                            <option value="break-fast">Breakfast</option>
                                            <option value="lunch">Lunch</option>

                                            <option value="dinner">Dinner</option>


                                        </select><br>


                                        <label for="product-name" class="mt-2">Product name </label>
                                        <input type="text" name="m_name" class="form-control " id="product-name">

                                        <label for="product-image" class="mt-2">Product-image</label>
                                        <input type="file" name="m_file" id="product-image"><br>

                                        <label for="product-price" class="mt-2">Product price</label>
                                        <input type="number" name="m_price" class="form-control" id="product-price">





                                        <button type="submit" class="sign-in border-0 mt-4 w-100 " id="add-menu">Add
                                            menu</button>


                                    </form>
                                    <div class="alert" id="menu-added"></div>


                                </div>

                            </div>


                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>

    <script>
    $(document).ready(function() {
        var order="";
        $.ajax({
            url:"../api/view-orders.php",
            type:"POST",
            dataType:"JSON",
            success:function(data){
                console.log(data);
               $.each(data,function(key,value){  
                var date = new Date();
                var date_format=date.getDate()+"/"+date.getMonth()+"/"+date.getFullYear()+"<br>"+date.getHours()+":"+date.getMinutes()+":"+date.getSeconds();
                  
                   var total=parseInt(value.product_price) * parseInt(value.Qty);
                  
                order+=`<tr><td>${value.product_id}</td>
                <td>${value.product_name}</td>
                
                <td>${value.product_price}</td>
                <td>${value.Qty}</td>
                <td>${total}</td>
                <td>${value.customer_phone}</td>
                <td>${value.address}</td>
                <td>${date_format}</td>
                </tr>`;
               });
               $("#show-orders").append(order);
                    
                }
                

            
        });
        $("#add-product").click(function() {

            $("#product-form").submit(function(e) {
                e.preventDefault();

                var formData = new FormData(this);

                $.ajax({
                    url: "../api/add-products.php",
                    type: "POST",
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function(data) {
                        if (data == 0) {
                          
                            $("#added").addClass("alert-danger").html(
                                "Cannot add item");
                            $("#product-form")[0].reset();
                            
                        } else {
                           
                            $("#added").addClass("alert-success").html(
                                "item added successfully");
                            $("#product-form")[0].reset();
                            setTimeout(() => {
                                $("#added").removeClass("alert-success")
                                    .html("");
                                   
                            }, 4000);

                        }
                    }
                });
              

            });



        });
        $("#add-menu").click(function() {
            $("#menu-form").submit(function(e) {
                e.preventDefault();
                var menu = new FormData(this);
                $.ajax({
                    url: "../api/add-menu.php",
                    type: "POST",
                    data: menu,
                    contentType: false,
                    processData: false,
                    success: function(data) {
                        if (data == 0) {
                            
                            $("#menu-added").addClass("alert-danger").html(
                                "Image already exist");
                            $("#menu-form")[0].reset();
                        } 
                         else{
                            
                            $("#menu-added").addClass("alert-success").html(
                                "item added successfully");
                            $("#menu-form")[0].reset();
                            setTimeout(() => {
                                $("#menu-added").removeClass(
                                    "alert-success").html("");
                                    location.reload();
                            }, 4000);
                            
                        }
                    }
                });
            });
        });

        
    });
    </script>
</body>

</html>