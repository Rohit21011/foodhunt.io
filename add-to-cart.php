<!DOCTYPE html>
<html lang="en">

<head>

    <title>add to cart</title>
    <?php include("boostrap-files.php");?>
</head>

<body class="background-color">
    <?php include("header.php");?>
    <div class="aboutus">
        <img height="auto" width="100%" src="img/about-background.jpg">



        <div class="content ">
            <h1>My Cart</h1>
            <div class="more-links">
                <a href="index.php">Home</a>
                <i class=" fa fa-angle-double-right" style="font-size:15px; "></i>
                <span class="about-link">My Cart</span>
            </div>
        </div>
    </div>

    <div class=" float-left  cart-container " id="show-cart">

    </div>
    <div id="checkout">

    </div>


<script src="form/js/new-account-validation.js"></script>
    <script>
    $(document).ready(function() {

        var customer_mobile = sessionStorage.getItem('customer_id');
        var str = "";
        $.ajax({
            url: "api/fetch-cart-items.php",
            type: "POST",
            data: {
                customer_mobile: customer_mobile
            },
            dataType: "JSON",

            success: function(data) {
                console.log(data);
                if (JSON.stringify(data) !== '[]') {

                    var count = 0;

                    var total_price = 0;
                    $.each(data, function(key, value) {


                        total_price = parseInt(total_price) + parseInt(value.product_price);
                        

                        // console.log(total_price);
                        str += `<div class="row ">

<div class="col ml-sm-5" >
<div class="d-flex ">

<img width="230px" height="230px" src="image/${value.product_image}" alt="">

<div class="mt-5 ml-2">
<p class="heading-h3">${value.product_name}</p>
<p class="heading-h3 mt-2" style="font-size:25px">₹ ${value.product_price}/-</p>
<p class="heading-h3" style="font-size:14px">Order it now</p>
<p class="text-success" style="font-size:14px">In stock</p>
<div class="wrap-elements">
<span class=" quantity">


<label for="dropdown" class="ml-3 mt-2">Qty</label>
<select name="" id="dropdown" prod_price="${value.product_price}" prod_id="${value.product_id}"  class="custome-select" >
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
</select>
</span>

<a href="#" class="ml-4 delete-btn"  id="${value.product_id}">Delete</a>

</div>
</div>

</div>

</div>
</div>`;

                      
                        var text = $(".custome-select option:selected").text();

                        count++;



                    });
                   
                    var final_total=total_price;
                    $(document).on("change", "#dropdown", function() {
                      
                            var quantity = $(this).val();
                            var prod_price = $(this).attr("prod_price");
                            console.log(prod_price);
                           final_total = final_total + parseInt(prod_price) *
                                parseInt(quantity - 1);
                            console.log(final_total);
                           
                            $("#total").html(final_total + "/-");
                        });
                       

                    var checkout = `<div class="d-lg-block d-none float-right mr-4" style="background:white;width:22%;height:180px !important">
<h5 style="font-weight:normal" class="mt-5 text-center" >Subtotal<span
style="font-family: 'Poppins', sans-serif ;font-weight:bold" >(${count})</span><br><span id="total">₹ ${total_price}/-</span></h5>
<a href="#" type="button" data-target="#myModal" data-toggle="modal" role="button" class="p-2 add-to-cart-btn w-75 mt-4 " style="margin-left:35px">
Proceed to Checkout</a>



</div>`;
                    $("#checkout").append(checkout);
                    $("#show-cart").append(str);

                }
                $(document).on("click","#check",function(){
                    
                  
                 $.each(data,function(key,value){
                   var c_phone=sessionStorage.getItem("customer_id");
                    var   Qty=$("[prod_id=" + value.product_id + "]").val();
                    var address=$("#Address").val();
                    
                    $.ajax({
                        url:"api/orders.php",
                        type:"POST",
                        data:{c_phone:c_phone,c_address:address,id:value.product_id,image:value.product_image,name:value.product_name,price:value.product_price,Qty:Qty},
                        success:function(data1){
                           if(data1==1){
                               
                            $("#confirm").show();
                            
                           }
                           else{
                               console.log(data1);
                           }
                        }
                     
                    })
                      
                 });

        });
            }
        });


        $(document).on("click", ".delete-btn", function(e) {
            e.preventDefault();
            var id = $(this).attr("id");
            console.log(id);
            $.ajax({
                url: "api/delete-cart-items.php",
                type: "POST",
                data: {
                    id: id
                },
                success: function(data) {
                    console.log(data);
                    $("#" + id).closest('.row').remove();
                }
            });
        });
        
    });
    </script>
    <div class="modal" id="myModal" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Address</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        
        <form class="form-group "  >
                    <div class="form-group">
                  
                <label for="Address">Address</label>
                        <textarea name="customer_massage" class="form-control" id="Address" rows="4"
                            cols="3" ></textarea>
</form>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
      <a href="#" type="button" id="check"  role="button" class="p-2 add-to-cart-btn w-25 mt-4 " style="margin-left:35px">
Checkout</a>
      </div>
      
    </div>
  </div>
</div>

<div class="modal" id="confirm" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">

    <div class="modal-header">
       
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body text-center">
        <h2 style="color:green">Your Order is placed!</h2>
        <h5>Thanks for order!</h5>
        
      </div>

      <!-- Modal footer -->
      
      <button type="button" class="btn btn-danger w-25 " style="margin-left:350px" data-dismiss="modal">Close</button>
    </div>
  </div>
</div>
</body>

</html>