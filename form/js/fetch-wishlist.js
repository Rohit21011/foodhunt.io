$(document).on("click", ".wishlist i", function() {

    var prod_id = $(this).attr("prod_id");
   
    $.ajax({
        url: "api/add-wishlist.php",
        type: "POST",
        dataType: "JSON",
        data: {
            prod_id: prod_id
        },
        success: function(data) {
            if (data==1) {
              
                $(".wishlist [prod_id=" + prod_id+ "]").css("color", "red");

            } else {
                alert("no");
            }
        }
    });

});

$(document).on("click", "a .add-to-cart", function(e) {
e.preventDefault();

    var prod_id = $(this).attr("id");
   console.log(prod_id);
    $.ajax({
        url: "api/add-to-cart-main.php",
        type: "POST",
        dataType: "JSON",
        data: {
            prod_id: prod_id
        },
        success: function(data) {
            if (data==1) {
            
                alert("product added to your cart successfully");

            } else {
                alert("This item already in cart");
            }
        }
    });

});
$(document).ready(function() {
    $.ajax({
    url: "api/fetch-wishlist.php",
    dataType: "JSON",
    success: function(data) {
       
        $.each(data, function(key, value) {
          console.log(value.product_id);

            $(".wishlist [prod_id=" + value.product_id + "]").css("color", "red");
        });
    }

});
});