$(document).ready(function() { 
    var page_no=1;
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
                                    <i class="fa fa-heart"></i>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <p class="price">${value.product_ratting}/5</p>
                                    <h3 class="heading-h3" id="pizza-name">${value.product_name}</h3>
                                    <div class="short-description" id="pizza-description">${value.product_description}</div>
                                    <a href="add-to-cart.php"><i class="fas fa-shopping-basket add-to-cart"></i></a>
                                    <span class="price" style="float: left; " id="pizza-price">₹${value.product_price}/-</span>


                                </div>

                            </div>
                        </div>`;
                    });
                    $("#show-all-products").append(str);
                
                


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
    
});