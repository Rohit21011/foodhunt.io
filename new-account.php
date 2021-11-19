<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="form/css/extra-css.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link
        href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@400;800&family=Prata&family=Red+Hat+Display&family=Rokkitt:wght@100;900&display=swap&family=Poppins:wght@200&display=swap&family=Orbitron:wght@900&display=swap&family=Zilla+Slab:wght@300&display=swap"
        rel="stylesheet">
        <script src="form/js/new-account-validation.js"></script>
          
           
           
</head>

<body style="height:100%">

    <div class="d-flex justify-content-center">
        <img src="img/food-logo1.png" width="250px" alt="">
    </div>
    <div class="container">

        <div class="row justify-content-center">

            <div class="col-lg-4 col-md-4  col-11 sign-up-layout">
                <div class="ml-sm-4 mr-sm-4">
                    <h3 class="mt-4 ">Create account</h3>
                    <form  id="form" class="form-group " style="font-size: 13px;" onsubmit="return new_account_validation()">
                        
                    <label for="name"> Your name</label>
                    
                        <input type="text" class="form-control"  id="name" oninput=" user_name()" >
                        <label for="name" class="error-msg" id="error" style="display:none">please enter your name</label><br>
                        <!-- <p id="error" style=" font-size:13px;color:#c70000;"></p><br> -->
                        <label for="phone" class="mt-2">Mobile number </label>
                        <input type="text" class="form-control "  id="phone" maxlength="10" oninput="  user_phone()">
                        <label for="phone"  class="error-msg" id="error1" style=""></label><br>
                        <label for="email" class="mt-2">Email(optional)</label>
                        <input type="email" class="form-control"  id="email" oninput=" user_email()">
                        <label for="email"  class="error-msg" id="error2" style="display:none">please enter valid email-id</label><br>
                        <label for="password1" class="mt-2">Password</label>
                        <input type="password" class="form-control" id="password1"
                            placeholder="At least 6 characters" oninput="user_password1()">
                            <label for="password1"  class="error-msg" id="error3" style="display:none">please enter password</label><br>
                            <label for="password2" class="mt-2">Confirm Password</label>
                        <input type="password" class="form-control"  id="password2"
                            placeholder="At least 6 characters" oninput=" user_password2()">
                            <label for="password2"  class="error-msg" id="error4"></label><br>
                            <div id="massage" class="alert" style="font-family:'poppins',sans-sarif;font-size:14px"></div>
                        <p style="font-weight:normal;font-size:14px;margin-top:20px">We will send you a text to verify
                            your phone.
                            Message and Data rates may apply.</p>
                        <button  type="submit"  class="sign-in border-0 mt-4 w-100 " id="submit">continue</button>
                        <p style="font-weight:normal;font-size:13px;margin-top:20px">Already have an account? <a
                                href="sign_in.php">Sign in</a></p>

                    </form>
                </div>

            </div>

        </div>
        

    </div>

    <div class="container-fluid  h-25">

    </div>
    <script src="form/js/index.js"></script>
   <script>
       $(document).ready(function(){
        $("#submit").click(function(){
           
$("#form").submit(function(e){
    e.preventDefault();
   var formVal=new_account_validation();
    if(formVal==true){
    var name=$("#name").val();
        var phone=$("#phone").val();
        var email=$("#email").val();
        var password=$("#password1").val();
        
            $.ajax({
            url:"api/register.php",
            type:"POST",
            data:{name: name, phone: phone, email: email, password: password},
            success:function(data){
                if(data==1){
               
                   
                    $("#massage").addClass("alert-success").removeClass("alert-danger").html("You have successfully register");
                    $("#form")[0].reset();
                }else{
                   
                $("#massage").addClass("alert-danger").html("duplicate record found");
                $("#form")[0].reset();

                }
            }
});
} 

        });
        
        
        
});
       });
 
        

   </script>
</body>

</html>