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
    <!-- <h3 class="text-center mt-5" style="text-shadow:5px 5px 10px gray; color: green;font-size: 30px;font-weight:bold;font-family: 'Orbitron', sans-serif;">Food hunt</h3><br> -->
    <div class="d-flex justify-content-center mt-5">
        <img src="img/food-logo1.png" width="250px" alt="">
    </div>
    <div class="container">

        <div class="row justify-content-center">

            <div class="col-lg-4 col-md-5  col-11 sign-up-layout">
                <div class="ml-sm-4 mr-sm-4">
                    <h3 class="mt-4 ">Create account</h3>
                    <form  class="form-group" id="form" onsubmit="return user_login()">
                        
                    <label for="phone" class="mt-2">Mobile number </label>
                        <input type="text" class="form-control "  id="phone" maxlength="10" oninput="  user_phone()">
                        <label for="phone"  class="error-msg" id="error1" style=""></label><br>
                        <label for="password1" class="mt-2">Password</label>
                        <input type="password" class="form-control" id="password1"
                            placeholder="At least 6 characters" oninput="user_password1()">
                            <label for="password1"  class="error-msg" id="error3" style="display:none">please enter password</label><br>
                            <div id="login-error" class="alert" style="font-family:'poppins',sans-sarif;font-size:14px"></div>
                        <button type="submit" class="sign-in border-0 mt-4 w-100 " id="login">continue</button>
                        <p style="font-weight:normal;font-size:15px;margin-top:20px">By continuing, you agree to Food
                            Hunt's Conditions of Use and Privacy Notice.</p>
                    </form>

                </div>

            </div>

        </div>
        <div class="row justify-content-center mt-4">
            <div class="col-lg-4 col-md-4 col-11">
                <h5 class="text-center mt-2">OR</h5>
                <a href="new-account.php" type="button" role="button" class=" create-account w-100 ">Create new
                    account</a>
            </div>
        </div>

    </div>
    <div class="container-fluid  h-25">

    </div>
<script src="form/js/index.js"></script>
<script>
    $(document).ready(function(){
     $("#login").click(function(){
         $("#form").submit(function(e){
             e.preventDefault();
             var formVal=user_login();
             var phone=$("#phone").val();
             var password=$("#password1").val();
             if(formVal==true){
             $.ajax({
                 url:"api/login.php",
                 type:"POST",
                 data:{phone:phone,password:password},
                 success:function(data){
                if(data==0)
                 $("#login-error").addClass("alert-danger").html("unknown credentials");
                 else
                window.location.assign("index.php");
                 }
             })
            }
         });
     });
    });
</script>
</body>

</html>