<html class="no-js" lang="en-US">
<!DOCTYPE html>
 
  <head>
    
    <link rel="pingback" href="https://www.citycycling.in/xmlrpc.php">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
            
      <title>Register </title>
                       
<link rel="canonical" href="http://localhost/nivea/fregister.php />
<link rel="alternate" type="application/rss+xml" title="app &raquo; Register Comments Feed" href="http://localhost/nivea/fregister.php" />
   
<style id='yith-wfbt-style-inline-css' type='text/css'>
 
                .yith-wfbt-submit-block .yith-wfbt-submit-button {
                        background: #222222;
                        color: #ffffff;
                }
                .yith-wfbt-submit-block .yith-wfbt-submit-button:hover {
                        background: #777777;
                        color: #ffffff;
                }
</style>
 
<link rel='stylesheet' id='turbo-style-css'  href='https://www.citycycling.in/wp-content/themes/turbo/assets/dist/css/turbo.style.css?ver=5.4.9' type='text/css' media='all' />
 
<link rel='stylesheet' id='wppb_stylesheet-css'  href='https://www.citycycling.in/wp-content/plugins/profile-builder/assets/css/style-front-end.css?ver=3.1.9' type='text/css' media='all' />

   <div class="random-quote"></div></div><style type="text/css">
<style>
.main
{
 width:30%;
 margin:2em auto;
 border:2px solid black;
 padding:1em;
}
.main input[type="submit"]
{
 width:10%;
 border:1px solid black;
 padding:.5em;
 margin:.5em;
}
.main input[type="password"]
{
 width:75%;
 border:1px solid black;
 padding:.5em;
 margin:.5em;
}
.main input[type="text"],.main input[type="email"]
{
 width:75%;
 border:1px solid black;
 padding:.5em;
 margin:.5em;
}
</style> 
</style>

 <style type="text/css">
 .variation-SecurityDeposit > p {
    display: none;
}
 
 form#searchForm input {
    opacity:  1 !important;
}
form#searchForm {position:  relative;}
     
#bilal_loader { position: fixed; left:0px; top: 0px; height: 100%; width: 100%; background: #fff; z-index:99999999; }
 
#bilal_loader img { top: 50%; margin: -100px 0 0 -100px; width: 200px !important; height: auto!important; left: 50%; z-index:999999; }
.btn{display:none;}
 
 </style>
    
  </head>
 
  <body data-rsssl=1 class="page-template-default page page-id-2744 theme-turbo woocommerce-no-js wpb-js-composer js-comp-ver-5.0.1 vc_responsive">  
    <?php 

$uname = "";  
$fname = "";  
$lname = "";  
$email = "";
$gender = "";  
$mn= ""; 
$operator = "";  
$pass = "";
$rpass = "";
?>
    <div id="main-wrapper">

<nav class="navbar navbar-default" id="sticker" style="background-image: url() ; background-color: #; background-repeat: repeat-x; -webkit-background-size: cover; background-size: cover; background-position: center center; background-attachment: scroll;">
<div class="col-md-12 col-sm-12 widget-list top-container"><div class="container t-center"><div class="menu-header_top_menu-container">
<ul id="menu-header_top_menu" class="menu" style="display: flex; list-style: none; padding: 0; justify-content: flex-end;">
    <li id="menu-item-1224" class="nmr-logged-out menu-item menu-item-type-post_type menu-item-object-page menu-item-1224 dropdown" style="margin-right: 10px;"><a href="http://localhost/nivea/f1login.php">Login</a></li>
    <li id="menu-item-911" class="menu-item menu-item-type-post_type menu-item-object-page dropdown"><a href="http://localhost/nivea/aboutus.php" class="dropdown-toggle" role="button" data-toggle="" aria-haspopup="true" aria-expanded="false">About Us<span ></span></a></li>
</ul>

 </div>
         
      </div>
</nav>
 
       <div class="rq-content-block">
                    <div class="container">
 
 
  <div class="main">

<form method="post" action="dbregister.php">

<center><h2>Register</h2></center>
<hr>
<h3> About Yourself </h3><br>
 <label for="uname">User Name<span class="wppb-required" title="This field is required">*</span></label>
<input type="text" name="uname" id="uname" value="<?php echo $uname;?>" placeholder="User Name"   required ><br>
<label for="fname">First Name<span class="wppb-required" title="This field is required">*</span></label>
<input type="text" name="fname" id="fname" value="<?php echo $fname;?>" placeholder="First Name"  required ><br>
<label for="last_name">Last Name<span class="wppb-required" title="This field is required">*</span></label>
 <input type="text" name="lname" id="lname" value="<?php echo $lname;?>" placeholder="Last Name"  required><br>
 <label for="email">  E-mail Acc<span class="wppb-required" title="This field is required">*</span></label>
 <input type="email" name="email" id="email" value="<?php echo $email;?>" placeholder="Email" required><br>
 <label for="mn">Mobile-no.<span class="wppb-required" title="This field is required">*</span></label>
  <input type="text" id="mn" name="mn" placeholder="Mobile Number"  pattern="^\d{10}$" title="Must contain 10 numbers only" required><br>

 <hr>
 <h3>Gender</h3><br>
 <b> Select Gender: <span class="wppb-required" title="This field is required">*</span></b><br> 
 <input type="radio" name="gender" id="gender" <?php if (isset($gender) && $gender=="male")  echo "checked";?> value="male" required>Male<br>
 <input type="radio" name="gender" id="gender" <?php if (isset($gender) &&  $gender=="female") echo "checked";?> value="female" required>Female<br>
 <hr>
  <h3>Operator Type</h3><br>
  <b> Select type: <span class="wppb-required" title="This field is required">*</span></b><br>
  <input type="radio" name="usertype" id="usertype" <?php if (isset($usertype) &&  $usertype=="owner") echo "checked";?> value="owner" required>Owner<br>
  <input type="radio" name="usertype" id="usertype" <?php if (isset($usertype) &&  $usertype=="customer") echo "checked";?> value="customer" required>Customer<br>

 <hr>
 <h3>Enter Password</h3><br>
 <label for="pass">Password <span class="wppb-required" title="This field is required">*</span></label>
 <input type="password" id="pass" name="pass" placeholder="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required><br>
 <label for="rpass"> Re- Enter <span class="wppb-required" title="This field is required">*</span></label>
 <input type="Password" name="rpass" id="rpass" placeholder="Reapeat Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required><br>
 <hr>
 <h4>
            Already having an account?
            <a href="f1login.php" >
                Login Here!
            </a>
    </h4>
 <center><input type="submit" name="submit" id="submit" value="Register"></center>
</form>

</div>     <input type="hidden" id="register_unspecified_nonce_field" name="register_unspecified_nonce_field" value="8acf02f070" /><input type="hidden" name="_wp_http_referer" value="/register/" />    </form>
    <br />
<ul id="" class="cnss-social-icon " style="text-align:left;"><li class="cn-fa-facebook cn-fa-icon " style="display:inline-block;"><a class="cnss-facebook" target="_blank" href="https://www.facebook.com/citycycling/" title="Facebook" style="width:46px;height:46px;padding:8px 0;margin:2px;color: #ffffff;border-radius: 50%;"><i title="Facebook" style="font-size:30px;" class="fa fa-facebook"></i></a></li><li class="cn-fa-twitter cn-fa-icon " style="display:inline-block;"><a class="cnss-twitter" target="_blank" href="https://twitter.com/" title="Twitter" style="width:46px;height:46px;padding:8px 0;margin:2px;color: #ffffff;border-radius: 50%;"><i title="Twitter" style="font-size:30px;" class="fa fa-twitter"></i></a></li><li class="cn-fa-google- cn-fa-icon " style="display:inline-block;"><a class="cnss-google-plus" target="_blank" href="https://plus.google.com/+CityCyclingBangalore" title="Google+" style="width:46px;height:46px;padding:8px 0;margin:2px;color: #ffffff;border-radius: 50%;"><i title="Google+" style="font-size:30px;" class="fa fa-google-plus"></i></a></li></ul></p>
<div class="social-login"></div>
</div>
        <div class="link-pages">
                    </div>
    </div>
    </div>

    <footer class="rq-footer site-footer">
  
<div class="rq-main-footer" style="background-image: url() ; background-color: #212020; background-repeat: repeat-x; -webkit-background-size: cover; background-size: cover; background-position: center center; background-attachment: scroll;">
    <div class="container-fluid">
    <button class="toggle-widget"></button>
        <div class="row">
            <div class="footer-logo col-md-3">
            <div class="col-md-3 col-sm-3 widget-list">   
    </div>            </div>

    <div class="footer-tree-list col-md-6" style="display: flex; justify-content: space-between; color: white;">

<!-- Categories -->
<ul class="widg" style="margin-right: auto; display: flex;">
    <li id="nav_menu-5" class="widget widget_nav_menu">
        <h2 class="widgettitle">Categories</h2>
        <div class="menu-footer2_menu-container">
            <ul id="menu-footer2_menu" class="menu" style="display: flex; flex-direction: column;">
                <li id="menu-item-1452"><a href="http://localhost/nivea/basiccycle.php">Basic Cycles</a></li>
                <li id="menu-item-1453"><a href="http://localhost/nivea/gearcycle.php">Gear Cycles</a></li>
                <li id="menu-item-1454"><a href="http://localhost/nivea/toddlercycle.php">Toddlers Cycles</a></li>
            </ul>
        </div>
    </li>
</ul>

<!-- Information -->
<ul class="widg" style="margin: 0 auto; display: flex;">
    <li id="nav_menu-2" class="widget widget_nav_menu">
        <h2 class="widgettitle">Information</h2>
        <div class="menu-footer_menu-container">
            <ul id="menu-footer_menu" class="menu" style="display: flex; flex-direction: column;">
                <li id="menu-item-1307"><a href="http://localhost/nivea/contactus.php">Contact Us</a></li>
                <li id="menu-item-1252"><a href="http://localhost/nivea/t&c.php">Terms & Conditions</a></li>
            </ul>
        </div>
    </li>
</ul>

<!-- Account -->
<ul class="widg" style="margin-left: auto; display: flex;">
    <li id="nav_menu-3" class="widget widget_nav_menu">
        <h2 class="widgettitle">Account</h2>
        <div class="menu-turbo-left-menu-container">
            <ul id="menu-turbo-left-menu" class="menu" style="display: flex; flex-direction: column;">
                <li id="menu-item-1826"><a href="http://localhost/nivea/myacc.php">My Account</a></li>
            </ul>
        </div>
    </li>
</ul>

</div>

            
        </div>
    </div>
</div>
    </footer>
    
  <link rel="stylesheet" type="text/css" href="https://www.citycycling.in/wp-content/themes/turbo-child/css/custom-style.css">
 
  </body>
</html>

