<!DOCTYPE html>
<html lang="en">

<head>
    <title>Contact-us</title>
    <?php include("boostrap-files.php");?>
    <script src="form/js/new-account-validation.js"></script>
</head>
<body>
    <?php include("header.php");?>

    <div class="aboutus">
        <img width="100%" src="img/about-background.jpg">



        <div class="content ">
            <h1>Contact Us</h1>
            <div class="more-links">
                <a href="index.php">Home</a>
                <i class=" fa fa-angle-double-right" style="font-size:15px; "></i>
                <span class="about-link">Contact Us</span>
            </div>
        </div>
    </div>
    <div class="container " style="margin-top:10%">
        <div class="row justify-content-around">
            <div class="col-md-6 col-8 ">

                <h3 style="font-weight:bold">Contact Us</h3>
                <div class="row">
                    <div class="col">
                        <div class="contact-info">
                            <i class="fa fa-home"></i>
                            <h5>Address</h5>
                        </div>
                        <p>570 8th Ave, New York, NY 10018 United States</p>
                        <div class="seperator"></div>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col">
                        <div class="contact-info">
                            <i class="fa fa-phone-square"></i>
                            <h5>Contact</h5>
                        </div>
                        <p>Mobile: (08) 123 456 789<br>Hotline: 1009 678 456</p>

                        <div class="seperator"></div>
                    </div>
                </div>
                <div class="row mt-5 ">
                    <div class="col">
                        <div class="contact-info ">
                            <i class="far fa-envelope-open"></i>
                            <h5>Email</h5>
                        </div>
                        <p>yourmail@domain.com<br>
                            support@roadthemes.com</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-10">
                <h3 style="font-weight:bold">Tell Us Your Massage</h3>

                <form class="form-group " onsubmit="return new_account_validation()">
                    <div class="form-group">
                    <label for="name"> Your name</label>
                    
                    <input type="text" class="form-control"  id="name" oninput=" user_name()" >
                    <label for="name" class="error-msg" id="error" style="display:none">please enter your name</label><br>
                    </div>
                    <div class="form-group">
                    <label for="email" class="mt-2">Email(optional)</label>
                        <input type="email" class="form-control"  id="email" oninput=" user_email()">
                        <label for="email"  class="error-msg" id="error2" style="display:none">please enter valid email-id</label><br>
                    </div>
                    <div class="form-group">
                        <label for="your_subject">Subject</label>
                        <input type="text" class="form-control" name="customer_subject" id="your_subject">
                    </div>
                    <div class="form-group">
                        <label for="your_massage">Massage</label>
                        <textarea name="customer_massage" class="form-control" id="your_massage" rows="10"
                            cols="20"></textarea>
                    </div>
                </form>
                <button type="button" class="sign-in border-0 w-25 mt-5">send</button>

            </div>
        </div>
    </div>




    <?php
			include("footer.php");
			?>
</body>

</html>