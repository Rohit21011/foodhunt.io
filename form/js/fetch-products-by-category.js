$(document).ready(function() {

        
    var display = "#pizza-details";
    var category = "pizza";
    getData(category,display);
    //  var id=$("a[href$='#pizza']").val("pizza");
    function getData(category,display) {
        var str = "";
        $.ajax({
            url: "api/fetch-product.php",
            type: "POST",
            data:{"category":category} ,
                
            
            dataType: "JSON",
            success: function(data) {
                console.log(data);
                $.each(data, function(key, value) {
                    str += `<div class=" col-11 col-sm-5  col-lg-2 column-background ">

                            <div class="row div-background">
                                <div class=" col-10   div-col" id="pizza-image">
                               
                                    <img style="border-radius:140px" width="260px" height="260px" src="image/${value.product_image}"> 
                                </div>
                                
                                <div class=" col-2 wishlist">
                                    <i class="fa fa-heart" prod_id="${value.product_id}" ></i>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col " >
                                    <p class="price">${value.product_ratting}/5</p>
                                    <h3 class="heading-h3" id="pizza-name">${value.product_name}</h3>
                                    <div class="short-description" id="pizza-description">${value.product_description}</div>
                                    <a href=""><i class="fas fa-shopping-basket add-to-cart"  id="${value.product_id}"></i></a>
                                    <span class="price" style="float: left; " id="pizza-price">₹${value.product_price}/-</span>


                                </div>

                            </div>
                        </div>`;

                  
                   

                });
                $(display).append(str); 
            }
           

        });
        
    }
    
    function burger(){
        var category = "burger";
        var display = "#burger-details";
       
        // $("#burger-details").append(str);
        getData(category,display);
    }
    burger();
    // $("a[href$='#burger']").click(function() {

    //     var category = "burger";
    //     var display = "#burger-details";
    //     $("#pizza-details").empty();
    //     // $("#burger-details").append(str);
    //     getData(category,display);

    // });

    function deserts(){
        var category = "desert";
        var display = "#deserts-details";
       
        // $("#burger-details").append(str);
        getData(category,display);
    }
    deserts();

    function nonveg(){
        var category = "Non-veg";
        var display = "#nonveg-details";
       
        // $("#burger-details").append(str);
        getData(category,display);
    }
    nonveg();


});