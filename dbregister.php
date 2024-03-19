<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
 
$con = mysqli_connect('localhost', 'ahm_p_p', 'Nivpari0#','ahm_p_p');

if(isset($_POST['submit']))
{
 $un=$_POST['uname'];
 $fn=$_POST['fname'];
 $ln=$_POST['lname'];
 $em=$_POST['email'];
 $mn=$_POST['mn'];
 $gender=$_POST['gender'];
 $usertype=$_POST['usertype'];
 
 $pass=$_POST['pass'];
 $rpass=$_POST['rpass'];
 
$sql = "INSERT INTO register ( `Username`, `firstname`, `lastname`, `email`, `mobile number`, `gender`, `operator type`, `password`, `rpassword`) VALUES ('$un','$fn','$ln','$em','$mn','$gender','$usertype','$pass','$rpass')";
 
// insert in database 
$rs = mysqli_query($con, $sql);
 
if($rs)
{
    // PHP program to pop an alert
// message box on the screen

// Function definition
function function_alert($message) {
	
	// Display the alert box
	echo "<script>alert('$message');</script>";
}


// Function call
function_alert("Register Successfully");


}
}
 
?>


<!DOCTYPE html>

<html class="no-js" lang="en-US">
 
  <head>
    <meta charset="UTF-8">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
      <title>Login | My Account</title>
    
<link rel='stylesheet' id='turbo-style-css'  href='https://www.citycycling.in/wp-content/themes/turbo/assets/dist/css/turbo.style.css?ver=5.4.9' type='text/css' media='all' />

    <style type="text/css" id="wp-custom-css">
 
mark {
    background: transparent;
    color: #000;
}
 
.page-template-default.page-id-164.woocommerce-account .rq-content-block .container {
    width: 50%;
    float: none !important;
}
.remember-me span.rq-checkbox {
    padding-right: 20px;
}
 
.product_container img.wpcs-thum {
    width: 300px !important;
    margin: auto;
}
.item .product_container{
  text-align:center !important;
}
.psfw-image img {
    max-height: 230px;
    min-height: 230px;
}
.psfw-main-product-wrapper.psfw-car-template-1 .psfw-inner-wrap-contain .psfw-button a{
  background-color: #95be47;
}
    </style>

  </head>
 
  <body data-rsssl=1 class="page-template-default page page-id-164 theme-turbo woocommerce-account woocommerce-page woocommerce-no-js wpb-js-composer js-comp-ver-5.0.1 vc_responsive">  
  

    <div id="main-wrapper">

<nav class="navbar navbar-default" id="sticker" style="background-image: url() ; background-color: #000; background-repeat: repeat-x; -webkit-background-size: cover; background-size: cover; background-position: center center; background-attachment: scroll;">
<div class="col-md-12 col-sm-12 widget-list top-container"><div class="container t-center"><div class="menu-header_top_menu-container">
    
        </div>
       
      </div>
</nav>
 
       <div class="rq-content-block">
                    <div class="container">
  
  <h3 class="head_title"><center>My Account</center></h3>
  
<div class="rq-shopping-content-block">
    <div class="post-content">
        <div class="login-left"><div class="woocommerce">
 
<div class="woocommerce-notices-wrapper"></div>
 
            <h4>Login To Your Account</h4>
                  <p class="subtitle"></p>
            
      <div class="rq-login-form">
        <form method="post" class="login" action="dblogin.php">
          <div class="row">
                <div class="form-group">              
              <input type="text" class="woocommerce-Input woocommerce-Input--text input-text rq-form-control" name="uname" id="uname"  placeholder=" Username"  value="" required/>
            </div>
 
            <div class="form-group">              
              <input class="woocommerce-Input woocommerce-Input--text input-text rq-form-control" type="password" name="pass"  placeholder="Password"  id="pass" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required />
            </div>
            
            <div class="">
              <input type="hidden" id="woocommerce-login-nonce" name="woocommerce-login-nonce" value="aabfe8fe5a" /><input type="hidden" name="_wp_http_referer" value="/my-account/" />             
               <input type="submit" class="rq-btn rq-btn-primary turbo-woo-login fluid border-radius" name="login" id="login" value="Login" />
                      </div>
   <div class="">
                              <span class="forgotpass woocommerce-LostPassword lost_password">
                                <a href="http://localhost/nivea/fp.php">Forgot your password ?</a>
                            </span>

                      </div>

                      </div>
<hr>
                      <h5>
            New Here?
            <a href="fregister.php">
                Click here to register!
            </a>
    </h5>
        </form>

      </div>      
 
    </div>
  </div>
</div>
</div>
</div>
    </div>
    </div>
    </div>
    </div>
    </div>
</div> 
 
    <footer class="rq-footer site-footer">
 
<div class="rq-main-footer" style="background-image: url() ; background-color: #212020; background-repeat: repeat-x; -webkit-background-size: cover; background-size: cover; background-position: center center; background-attachment: scroll;">
    <div class="container-fluid">
    <button class="toggle-widget"></button>
        <div class="row">
            <div class="footer-logo col-md-3">
            <div class="col-md-3 col-sm-3 widget-list">     <div class="textwidget"><p></p>
</div>
    </div>            </div>
            <div class="footer-tree-list col-md-6">
            <ul class="widg">
              <li id="nav_menu-5" class="widget widget_nav_menu"><h2 class="widgettitle">Categories</h2>
<div class="menu-footer2_menu-container">
<ul id="menu-footer2_menu" class="menu">
<li id="menu-item-1452" ><a href="http://localhost/nivea/basiccycle.php">Basic Cycles</li>
<li id="menu-item-1453" ><a href="http://localhost/nivea/gearcycle.php">Gear Cycles</li>
<li id="menu-item-1454" ><a href="http://localhost/nivea/toddlercycle.php">Toddlers Cycles</li>
</ul></div></li>
<li id="nav_menu-2" class="widget widget_nav_menu"><h2 class="widgettitle">Information</h2>
<div class="menu-footer_menu-container"><ul id="menu-footer_menu" class="menu"><li id="menu-item-1301" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1301 dropdown"></li>
<li id="menu-item-1307" ><a href="http://localhost/nivea/contactus.php">Contact Us</a></li>
<li id="menu-item-1252" ><a href="http://localhost/nivea/t&c.php">Terms &#038; Conditions</a></li>
<li id="menu-item-1252" ><a href="http://localhost/nivea/aboutus.php">About Us</a></li>

</ul></div></li>
<li id="nav_menu-3" class="widget widget_nav_menu"><h2 class="widgettitle"> Account</h2>
<div class="menu-turbo-left-menu-container"><ul id="menu-turbo-left-menu" class="menu">
<li id="menu-item-1826" ><a href="http://localhost/nivea/myacc.php" aria-current="page">My Account</a></li>
</ul></div></li>
  
              </ul>
            </div>
        </div>
    </div>
</div>

    </footer>
 <style type="text/css">
        </style>
    
  <link rel="stylesheet" type="text/css" href="https://www.citycycling.in/wp-content/themes/turbo-child/css/custom-style.css">
 
  </body>
</html>
