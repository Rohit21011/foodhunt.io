<style>
.scrollToTop {
    text-decoration: none;

    position: fixed;
    bottom: 2%;
    opacity: 1;
    color: white !important;
    right: 5%;
    z-index: 9;
    width: 40px;
    height: 40px;
    line-height: 40px;
    text-align: center;
    background: #fb524f;

    border-radius: 100%;
    font-size: 18px;

}

.sign-in {
    color: white;
    padding: 10px;
    background-color: #ffc107;
    border-radius: 10px;
    display: flex;
    justify-content: center;
    font-family: 'Poppins', sans-serif;
    font-weight: 700;
    color: black
}

.sign-in:hover {
    color: white;
    text-decoration: none;
}
</style>
<script>
$(document).ready(function() {
    $('[data-toggle="popover"]').popover({
        html: true
    });

});
</script>
<header>
    <div class="container-fluid ">
        <nav class="navbar p-2 navbar-light navbar-expand-lg bg-white fixed-top ">
            <button class="navbar-toggler " data-toggle="collapse" data-target="#mynavbar">
                <span class="navbar-toggler-icon "></span>
            </button>
            <a href="" class="navbar-brand ml-5  float-lg-left"><img class="navbar-brand ml-5 d-sm-block d-none float-lg-left" src="img/food-logo1.png"
                    width="180px" height="auto" alt=""></a>
            <ul class="nav ">
                <li class="nav-item">
                    <div style="position:relative;">
                        <input id="search" type="search" class="form-control border-0  search-box"
                            placeholder="search products..." />
                        <span><i class="fa fa-search" style="position:absolute;top: 10px;right:15px;"></i></span>
                    </div>
                

            </ul>

            <div class="collapse navbar-collapse " id="mynavbar">
                <ul class="navbar-nav ml-auto mr-5" >
                    <li class="nav-item  custom-active"><a href="index.php" class="nav-link nav-links ">Home</a></li>
                    <li class="nav-item  custom-active"><a href="menu.php" class="nav-link nav-links">Menu</a></li>
                    <li class="nav-item  custom-active"><a href="shop.php" class="nav-link nav-links">Shop</a></li>
                    <li class="nav-item custom-active" custom-active><a href="aboutUs.php"
                            class="nav-link nav-links">About</a></li>
                    <li class="nav-item custom-active"><a href="contact.php" class="nav-link nav-links">Contact</a></li>
                    <ul class="d-flex nav-col ">
                        <li class="nav-item ml-3 ml-lg-0"><a class="nav-link login " id="customer_id" href="#" data-toggle="popover"
                                data-placement="bottom"
                                data-content=" <a href='sign_in.php' class='sign-in'>Sign in</a><br>new user? <a href='new-account.php'>create new account</a>"
                                data-html="true"><i class="fas fa-user "></i></a><span
                                class="d-lg-none d-block nav-links">Login</span></li>
                        <li class="nav-item ml-3 ml-lg-0" ><a href="my-wishlist.php"
                                class="nav-link login"><i class="fas fa-heart "></i></a><span
                                class="d-lg-none d-block nav-links">Wishlist</span></li>
                        <li class="nav-item ml-3 ml-lg-0" > <a href="add-to-cart.php"
                                class="nav-link login sticky-basket"><i class="fas fa-shopping-basket   "></i></a><span
                                class="d-lg-none d-block nav-links">My cart</span></li>
                    </ul>
                </ul>

            </div>

        </nav>

    </div>


</header>

<script>
    $(document).ready(function(){
        console.log(sessionStorage.getItem('customer_id'));
        if(sessionStorage.getItem('customer_id')!=null){
     $("#customer_id").attr("data-content","l<a href='my-orders.php'>My orders</a><br><a href='' id='destroy' >logout</a>");
    
       }

      $(document).on("click","#destroy",function(){
         
        sessionStorage.removeItem('customer_id');
          console.log("click");
       
      });
    });
</script>
<a href="#" class="scrollToTop"><i class="fas fa-arrow-up"></i></a>