<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="../form/css/extra-css.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link
        href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@400;800&family=Prata&family=Red+Hat+Display&family=Rokkitt:wght@100;900&display=swap&family=Poppins:wght@200&display=swap&family=Orbitron:wght@900&display=swap&family=Zilla+Slab:wght@300&display=swap"
        rel="stylesheet">
        
           
           
</head>

<body style="height:100%">

    <div class="d-flex justify-content-center">
        <img src="../img/food-logo1.png" width="250px" alt="">
    </div>
    <div class="container">

        <div class="row justify-content-center">

            <div class="col-lg-4 col-md-4  col-11 sign-up-layout">
                <div class="ml-sm-4 mr-sm-4">
                    <h3 class="mt-4 ">Product details</h3>
                    <form  id="form" class="form-group " style="font-size: 13px;" enctype="multipart/form-data" >
                        
                    <label for="category"> Select category</label>
                    <select name="select" id="category">
                        <option value="select"> Select</option>
                        <option value="pizza"> Pizza</option>
                        <option value="burger"> Burger</option>
        
                        <option value="desert"> Desert</option>
                        
                        <option value="non-veg"> Non-veg</option>
                    </select><br>
                        
                        <!-- <p id="error" style=" font-size:13px;color:#c70000;"></p><br> -->
                        <label for="product-name" class="mt-2">Product name </label>
                        <input type="text" name="p_name" class="form-control "  id="product-name"  >
                        
                        <label for="product-image" class="mt-2">Product-image</label>
                        <input type="file" name="file"  id="product-image" >
                        
                        <label for="product-price" class="mt-2">Product price</label>
                        <input type="number" name="p_price" class="form-control" id="product-price">
                           
                        <label for="product-ratting" class="mt-2">Product ratting</label>
                        <input type="number" name="p_ratting" class="form-control" id="product-ratting">

                        <label for="product-info" class="mt-2">Product description</label>
                        <textarea name="p_description"  id="product-info" class="form-control" cols="5" rows="5"></textarea>
                            
                        <button  type="submit"  class="sign-in border-0 mt-4 w-100 " id="add">Add product</button>
                       

                    </form>
                    <div class="alert" id="added"></div>

                    
                </div>

            </div>

        </div>
        

    </div>

    <div class="container-fluid  h-25">

    </div>
    <script src="../form/js/index.js"></script>
   <script>
       $(document).ready(function(){
        $("#add").click(function(){
           
$("#form").submit(function(e){
    e.preventDefault();
 
    var formData=new FormData(this);
        // var p_name=$("#product-name").val();
        // var p_image=$("#product-image").val();
        // var p_price=$("#product-price").val();
        // var p_ratting=$("#product-ratting").val();
        // var p_description=$("#product-info").val();
            $.ajax({
            url:"../api/add-products.php",
            type:"POST",
            data:formData,
            contentType:false,
            processData:false,
            success:function(data){
                if(data==0){
               
               $("#added").addClass("alert-danger").html("Cannot add item");
                $("#form")[0].reset();
                }else{
                    $("#added").addClass("alert-success").html("item added successfully");
                $("#form")[0].reset();
                setTimeout(() => {
                    $("#added").removeClass("alert-success").html("");
                }, 4000);

                }
            }
});
//}

        });
        
        
        
});
       });
 
        

   </script>
  


</body>

</html>