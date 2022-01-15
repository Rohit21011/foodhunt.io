$(document).ready(function() { 
    var page_no=1;
    var customer_mobile=sessionStorage.getItem('customer_id');
    getData(page_no);
   
    function getData(page_no) {
        var str = "";
        $.ajax({
            url: "api/fetch-all-products.php",
            type: "POST",
            data:{"page_no":page_no},
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
                                <a href=""><i class="fas fa-shopping-basket add-to-cart" id="${value.product_id}"></i></a>
                                <span class="price" style="float: left; " id="pizza-price">₹${value.product_price}/-</span>


                            </div>

                        </div>
                    </div>`;
                    });
                    $("#show-all-products").append(str);
                if(customer_mobile!=null){
                    
                    $.ajax({
                        url: "api/fetch-wishlist.php",
                        type:"POST",
                        data:{customer_mobile:customer_mobile},
                        dataType: "JSON",
                        success: function(data) {
                           
                            $.each(data, function(key, value) {
                              console.log(value.product_id);
                    
                                $(".wishlist [prod_id=" + value.product_id + "]").css("color", "red");
                            });
                        }
                    
                    });
                }


            }

        });

    }
    
    

    
    pagination();
    function pagination() {

        
        $.ajax({
            url: "api/pagination.php",
            type: "POST",
            success: function(data) {
                console.log(data);
                
                $("#pagination").html(data);
                
            }

        });
        
        
        
      
    }
    $(document).on("click","#pagination a",function(e){
        e.preventDefault();
       var page_no=$(this).attr("id");
       getData(page_no);
       $("#pagination a").removeClass("active");
       $(this).addClass("active");

       

    });
    $(document).on("click", ".wishlist i", function() {
        if(customer_mobile!=null){
        var prod_id = $(this).attr("prod_id");
        var product_details="product_details";
        console.log(prod_id);
        $.ajax({
            url: "api/add-wishlist.php",
            type: "POST",
            dataType: "JSON",
            data: {
                prod_id: prod_id,customer_phone:customer_mobile
            },
            success: function(data) {
                if (data==1) {
                    
                    $(".wishlist [prod_id=" + prod_id+ "]").css("color", "red");
    
                } else {
                    alert("technical error");
                }
            }
        });
        }
        else{
            window.location.assign("sign_in.php");
        }
    });
    $(document).on("click", "a .add-to-cart", function(e) {
        e.preventDefault();
        if(customer_mobile!=null){
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
    }
    else{
        window.location.assign("sign_in.php");
    }
    });
    
});


$(document).ready(function() {
    
});
