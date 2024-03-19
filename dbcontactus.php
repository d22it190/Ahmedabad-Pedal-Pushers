<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
 
$con = mysqli_connect('localhost', 'ahm_p_p', 'Nivpari0#','ahm_p_p');

if(isset($_POST['submit']))
{
 
 $em=$_POST['email'];
 $subh=$_POST['subh'];
 $msg=$_POST['textarea'];
 
 $sql = "INSERT INTO contactus (  `email`,  `subhead`, `message`) VALUES ('$em','$subh','$msg')";
 
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
function_alert("Message submitted Successfully");



}
 }
  
 ?>
<!DOCTYPE html>

<html class="no-js" lang="en-US">
  <head>
    
            <title>Ahmedabad Pedal Pusher | Dashboard </title>

            <link rel='stylesheet' id='turbo-style-css'  href='https://www.citycycling.in/wp-content/themes/turbo/assets/dist/css/turbo.style.css?ver=5.4.9' type='text/css' media='all' />

            <link rel='stylesheet' id='js_composer_front-css'  href='https://www.citycycling.in/wp-content/plugins/js_composer/assets/css/js_composer.min.css?ver=5.0.1' type='text/css' media='all' />

            <script type='text/javascript' src='https://www.citycycling.in/wp-includes/js/jquery/jquery.js?ver=1.12.4-wp'></script>

        <style type="text/css" title="dynamic-css" class="options-output">body{opacity: 1;visibility: visible;-webkit-transition: opacity 0.24s ease-in-out;-moz-transition: opacity 0.24s ease-in-out;transition: opacity 0.24s ease-in-out;}.wf-loading body,{opacity: 0;}.ie.wf-loading body,{visibility: hidden;}
                                    .navbar .container .navbar-nav li a,
                                    .navbar .container-fluid .navbar-nav li a
                                {font-family:Montserrat;line-height:20px;font-weight:normal;font-style:400;color:#f5f5f5;font-size:12px;opacity: 1;visibility: visible;-webkit-transition: opacity 0.24s ease-in-out;-moz-transition: opacity 0.24s ease-in-out;transition: opacity 0.24s ease-in-out;}.wf-loading 
                                    .navbar .container .navbar-nav li a,
                                    .navbar .container-fluid .navbar-nav li a
                                ,{opacity: 0;}.ie.wf-loading 
                                    .navbar .container .navbar-nav li a,
                                    .navbar .container-fluid .navbar-nav li a
                                ,{visibility: hidden;}
                                    .navbar .container .navbar-nav li .dropdown-menu li a,
                                    .navbar .container .navbar-nav .dropdown-menu li a,
                                    .navbar .container-fluid .navbar-nav .dropdown-menu li a,
                                    .headroom-sticky.sticky-scroll .navbar.navbar-default .navbar-nav li .dropdown-menu a
                                {font-family:Montserrat;line-height:20px;font-weight:normal;font-style:400;color:#f5f5f5;font-size:12px;opacity: 1;visibility: visible;-webkit-transition: opacity 0.24s ease-in-out;-moz-transition: opacity 0.24s ease-in-out;transition: opacity 0.24s ease-in-out;}.wf-loading 
                                    .navbar .container .navbar-nav li .dropdown-menu li a,
                                    .navbar .container .navbar-nav .dropdown-menu li a,
                                    .navbar .container-fluid .navbar-nav .dropdown-menu li a,
                                    .headroom-sticky.sticky-scroll .navbar.navbar-default .navbar-nav li .dropdown-menu a
                                ,{opacity: 0;}.ie.wf-loading 
                                    .navbar .container .navbar-nav li .dropdown-menu li a,
                                    .navbar .container .navbar-nav .dropdown-menu li a,
                                    .navbar .container-fluid .navbar-nav .dropdown-menu li a,
                                    .headroom-sticky.sticky-scroll .navbar.navbar-default .navbar-nav li .dropdown-menu a
                                ,{visibility: hidden;}h2.rq-title{font-family:Oswald;line-height:44px;font-weight:normal;font-style:400;color:#000000;font-size:24px;opacity: 1;visibility: visible;-webkit-transition: opacity 0.24s ease-in-out;-moz-transition: opacity 0.24s ease-in-out;transition: opacity 0.24s ease-in-out;}.wf-loading h2.rq-title,{opacity: 0;}.ie.wf-loading h2.rq-title,{visibility: hidden;}.rq-blog-list-thumb-single .rq-listing-title a{font-family:Montserrat;line-height:16px;font-weight:normal;font-style:400;color:#000;font-size:16px;opacity: 1;visibility: visible;-webkit-transition: opacity 0.24s ease-in-out;-moz-transition: opacity 0.24s ease-in-out;transition: opacity 0.24s ease-in-out;}.wf-loading .rq-blog-list-thumb-single .rq-listing-title a,{opacity: 0;}.ie.wf-loading .rq-blog-list-thumb-single .rq-listing-title a,{visibility: hidden;}.rq-blog-list-thumb-single .post-content p{font-family:"Open Sans";line-height:24px;font-weight:normal;font-style:400;color:#666;font-size:13px;opacity: 1;visibility: visible;-webkit-transition: opacity 0.24s ease-in-out;-moz-transition: opacity 0.24s ease-in-out;transition: opacity 0.24s ease-in-out;}.wf-loading .rq-blog-list-thumb-single .post-content p,{opacity: 0;}.ie.wf-loading .rq-blog-list-thumb-single .post-content p,{visibility: hidden;}.rq-sidebar h4.widget-title{font-family:Montserrat;line-height:44px;font-weight:normal;font-style:400;color:#000;font-size:18px;opacity: 1;visibility: visible;-webkit-transition: opacity 0.24s ease-in-out;-moz-transition: opacity 0.24s ease-in-out;transition: opacity 0.24s ease-in-out;}.wf-loading .rq-sidebar h4.widget-title,{opacity: 0;}.ie.wf-loading .rq-sidebar h4.widget-title,{visibility: hidden;}.rq-sidebar ul li a{font-family:"Open Sans";line-height:24px;font-weight:normal;font-style:400;color:#666;font-size:14px;opacity: 1;visibility: visible;-webkit-transition: opacity 0.24s ease-in-out;-moz-transition: opacity 0.24s ease-in-out;transition: opacity 0.24s ease-in-out;}.wf-loading .rq-sidebar ul li a,{opacity: 0;}.ie.wf-loading .rq-sidebar ul li a,{visibility: hidden;}.rq-main-footer h4.widget-title{font-family:Montserrat-Regular;line-height:44px;font-weight:normal;font-style:400;color:#fff;font-size:18px;opacity: 1;visibility: visible;-webkit-transition: opacity 0.24s ease-in-out;-moz-transition: opacity 0.24s ease-in-out;transition: opacity 0.24s ease-in-out;}.wf-loading .rq-main-footer h4.widget-title,{opacity: 0;}.ie.wf-loading .rq-main-footer h4.widget-title,{visibility: hidden;}.rq-main-footer ul li a{font-family:"Open Sans";line-height:24px;font-weight:normal;font-style:400;color:#999;font-size:13px;opacity: 1;visibility: visible;-webkit-transition: opacity 0.24s ease-in-out;-moz-transition: opacity 0.24s ease-in-out;transition: opacity 0.24s ease-in-out;}.wf-loading .rq-main-footer ul li a,{opacity: 0;}.ie.wf-loading .rq-main-footer ul li a,{visibility: hidden;}.copyright-content p{font-family:Montserrat-Regular;line-height:24px;font-weight:normal;font-style:400;color:#666;font-size:14px;opacity: 1;visibility: visible;-webkit-transition: opacity 0.24s ease-in-out;-moz-transition: opacity 0.24s ease-in-out;transition: opacity 0.24s ease-in-out;}.wf-loading .copyright-content p,{opacity: 0;}.ie.wf-loading .copyright-content p,{visibility: hidden;}</style><style type="text/css" data-type="vc_shortcodes-custom-css">.vc_custom_1509104460796{background-image: url(https://www.pixelstalk.net/wp-content/uploads/2016/11/Cool-Cycling-Background.jpg?id=819) !important;}</style><noscript><style type="text/css"> .wpb_animate_when_almost_visible { opacity: 1; }</style></noscript>    <script type='text/javascript' src='https://www.citycycling.in/wp-content/themes/turbo-child/js/parallax.js'></script>
  </head>

  <body data-rsssl=1 class="home page-template page-template-page-templates page-template-home-page page-template-page-templateshome-page-php page page-id-92 theme-turbo woocommerce-no-js wpb-js-composer js-comp-ver-5.0.1 vc_responsive">  
      <div id="main-wrapper">

<nav class="navbar navbar-default" id="sticker" style="background-image: url() ; background-color: #000; background-repeat: repeat-x; -webkit-background-size: cover; background-size: cover; background-position: center center; background-attachment: scroll;">

<div class="col-md-12 col-sm-12 widget-list top-container">
<div class="container t-center"><div class="menu-header_top_menu-container"><ul id="menu-header_top_menu" class="menu">

<li id="menu-item-911" ><a href="http://localhost/nivea/LAR.php" >Customer Form</a></li>
            <li id="menu-item-911" ><a href="http://localhost/nivea/LAR2.php" >Owner Form </a></li>
            <li id="menu-item-1390" ><a href="http://localhost/nivea/aboutus.php" >About Us<span></span></a>
            <li id="menu-item-1390" ><a href="http://localhost/nivea/edit.php" >Edit<span></span></a></li>
<li id="menu-item-911" ><a href="http://localhost/nivea/logout.php" >LogOut </a></li>
</ul>

            
                                    
        </div>

        </div>
</nav>
 
<div class="vc_row wpb_row vc_row-fluid"><div class="left-hiro-text wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner "><div class="wpb_wrapper"><div class="vc_row wpb_row vc_inner vc_row-fluid"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner "><div class="wpb_wrapper">
    <div class="wpb_text_column wpb_content_element ">
        <div class="wpb_wrapper">
            <div id="metaslider-id-916" style="width: 100%;" class="ml-slider-3-16-4 metaslider metaslider-flex metaslider-916 ml-slider">
    <div id="metaslider_container_916">
        <div id="metaslider_916">
            <ul aria-live="polite" class="slides">
                <li style="display: block; width: 100%;" class="slide-933 ms-image"><img src="https://www.pixelstalk.net/wp-content/uploads/2016/10/Free-Bicycle-Photo.jpg" height="700" width="1900" alt="" class="slider-916 slide-933" /><div class="caption-wrap"><div class="caption"></div></div></li>
                <li style="display: none; width: 100%;" class="slide-934 ms-image"><img src="https://free4kwallpapers.com/uploads/originals/2015/10/03/cycle-lake-shore.jpg" height="700" width="1900" alt="" class="slider-916 slide-934" /><div class="caption-wrap"><div class="caption">
</div></div></li>
                <li style="display: none; width: 100%;" class="slide-935 ms-image"><img src="http://www.cadencemag.co.uk/wp-content/uploads/2019/04/kids-cycling.jpg" height="700" width="1900" alt="" class="slider-916 slide-935" /><div class="caption-wrap"><div class="caption">
</div></div></li>
            </ul>
        </div>
        
    </div>
</div>
<div>
    
    
    <div class="container"><div class="navbar"><a  class="navbar-brand">
                <img src="https://previews.123rf.com/images/cteconsulting/cteconsulting1507/cteconsulting150700061/42815338-abstract-person-riding-a-bicycle-while-wearing-a-helmet-.jpg?fj=1" alt="Site logo">
            </a>
            <div>
            <h2><center><b><i> Ahmedabad   Pedal   Pushers.</i></b> </center></h2><br>
            
            <h4><center><b> -------------Press the Pedal and left the sorrows------------</b> </center></h4>
    </div>
        </div>
 

        </div>
    </div>
</div></div></div></div></div></div></div></div>

<div class="vc_row wpb_row vc_row-fluid"><div class="vc_row wpb_row vc_row-fluid p-t-75 p-b-75 how-it-works des-rns vc_custom_1509104460796 vc_row-has-fill"><div class="container-pull t-center wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner "><div class="wpb_wrapper"><div class="vc_row wpb_row vc_inner vc_row-fluid"><div class="wpb_column vc_column_container vc_col-sm-4"><div class="vc_column-inner "><div class="wpb_wrapper">
<div class="wpb_single_image wpb_content_element vc_align_left">
        
        <figure class="wpb_wrapper vc_figure">
            <div class="vc_single_image-wrapper   vc_box_border_grey"><img width="140" height="138" src="https://www.citycycling.in/wp-content/uploads/2016/06/cx.png" class="vc_single_image-img attachment-thumbnail" alt="" srcset="https://www.citycycling.in/wp-content/uploads/2016/06/cx.png 140w, https://www.citycycling.in/wp-content/uploads/2016/06/cx-100x100.png 100w" sizes="(max-width: 140px) 100vw, 140px" /></div>
        </figure>
    </div>

    <div class="wpb_text_column wpb_content_element ">
        <div class="wpb_wrapper">
            <h3>Book Online</h3>
<p>Choose Your Cycle.</p>

        </div>
    </div>
</div></div></div><div class="wpb_column vc_column_container vc_col-sm-4"><div class="vc_column-inner "><div class="wpb_wrapper">
    <div class="wpb_single_image wpb_content_element vc_align_left">
        
        <figure class="wpb_wrapper vc_figure">
            <div class="vc_single_image-wrapper   vc_box_border_grey"><img width="133" height="109" src="https://www.citycycling.in/wp-content/uploads/2016/06/cc.png" class="vc_single_image-img attachment-thumbnail" alt="" /></div>
        </figure>
    </div>

    <div class="wpb_text_column wpb_content_element ">
        <div class="wpb_wrapper">
            <h3>Pick up cycle</h3>
<p>Pick Up from our pick up location.</p>

        </div>
    </div>
</div></div></div><div class="wpb_column vc_column_container vc_col-sm-4"><div class="vc_column-inner "><div class="wpb_wrapper">
    <div class="wpb_single_image wpb_content_element vc_align_left">
        
        <figure class="wpb_wrapper vc_figure">
            <div class="vc_single_image-wrapper   vc_box_border_grey"><img width="142" height="113" src="https://www.citycycling.in/wp-content/uploads/2016/06/ss-1.png" class="vc_single_image-img attachment-thumbnail" alt="" /></div>
        </figure>
    </div>

    <div class="wpb_text_column wpb_content_element ">
        <div class="wpb_wrapper">
            <h3>Enjoy your ride</h3>
<p>Ride as long as you want and spread the love.</p>

        </div>
    </div>
</div></div></div></div>
        

<div class="rq-main-footer" style="background-image: url() ; background-color: #212020; background-repeat: repeat-x; -webkit-background-size: cover; background-size: cover; background-position: center center; background-attachment: scroll;">
    <div class="container-fluid">
    <button class="toggle-widget"></button>
        <div class="row">
        <div class="footer-logo col-md-3">
            <div class="col-md-3 col-sm-3 widget-list">         <div class="textwidget"><p></p>
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
<div class="menu-footer_menu-container"><ul id="menu-footer_menu" class="menu">
<li id="menu-item-1307" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1307 dropdown"><a href="http://localhost/nivea/contactus.php">Contact Us</a></li>
<li id="menu-item-1252" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1252 dropdown"><a href="http://localhost/nivea/t&c.php">Terms & Condition</a></li>
</ul></div></li>
<li id="nav_menu-3" class="widget widget_nav_menu"><h2 class="widgettitle"> Account</h2>
<div class="menu-turbo-left-menu-container"><ul id="menu-turbo-left-menu" class="menu"><li id="menu-item-1169" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1169 dropdown"></li>
<li id="menu-item-1826" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1826 dropdown"><a href="http://localhost/nivea/myacc.php">My Account</a></li>
</ul></div></li>
  
              </ul>
            </div>
            
        </li>
 
               </ul>
            </div>
        </div>
    </div>
</div>

    </footer>

<link rel='stylesheet' id='metaslider-public-css'  href='https://www.citycycling.in/wp-content/plugins/ml-slider/assets/metaslider/public.css?ver=3.16.4' type='text/css' media='all' property='stylesheet' />
<script type='text/javascript' src='https://www.citycycling.in/wp-content/plugins/ml-slider/assets/sliders/flexslider/jquery.flexslider.min.js?ver=3.16.4'></script>
<script type='text/javascript'>
var metaslider_916 = function($) {$('#metaslider_916').addClass('flexslider');
            $('#metaslider_916').flexslider({ 
                slideshowSpeed:3000,
                animation:"fade",
                controlNav:true,
                directionNav:true,
                pauseOnHover:false,
                direction:"horizontal",
                reverse:false,
                animationSpeed:600,
                prevText:"&lt;",
                nextText:"&gt;",
                fadeFirstSlide:false,
                slideshow:false
            });
            $(document).trigger('metaslider/initialized', '#metaslider_916');
        };
        var timer_metaslider_916 = function() {
            var slider = !window.jQuery ? window.setTimeout(timer_metaslider_916, 100) : !jQuery.isReady ? window.setTimeout(timer_metaslider_916, 1) : metaslider_916(window.jQuery);
        };
        timer_metaslider_916();
</script>

  <link rel="stylesheet" type="text/css" href="https://www.citycycling.in/wp-content/themes/turbo-child/css/custom-style.css">

    </body>
</html>

