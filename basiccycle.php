<!DOCTYPE html>
 
<html class="no-js" lang="en-US">
 
<!--<![endif]-->
  <head>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
      <title>Basic Cycles</title>
    
<link rel='stylesheet' id='turbo-style-css'  href='https://www.citycycling.in/wp-content/themes/turbo/assets/dist/css/turbo.style.css?ver=5.4.9' type='text/css' media='all' />
<link rel='stylesheet' id='js_composer_front-css'  href='https://www.citycycling.in/wp-content/plugins/js_composer/assets/css/js_composer.min.css?ver=5.0.1' type='text/css' media='all' />
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
                                ,{visibility: hidden;}h2.rq-title{font-family:Oswald;line-height:44px;font-weight:normal;font-style:400;color:#000000;font-size:24px;opacity: 1;visibility: visible;-webkit-transition: opacity 0.24s ease-in-out;-moz-transition: opacity 0.24s ease-in-out;transition: opacity 0.24s ease-in-out;}.wf-loading h2.rq-title,{opacity: 0;}.ie.wf-loading h2.rq-title,{visibility: hidden;}.rq-blog-list-thumb-single .rq-listing-title a{font-family:Montserrat;line-height:16px;font-weight:normal;font-style:400;color:#000;font-size:16px;opacity: 1;visibility: visible;-webkit-transition: opacity 0.24s ease-in-out;-moz-transition: opacity 0.24s ease-in-out;transition: opacity 0.24s ease-in-out;}.wf-loading .rq-blog-list-thumb-single .rq-listing-title a,{opacity: 0;}.ie.wf-loading .rq-blog-list-thumb-single .rq-listing-title a,{visibility: hidden;}.rq-blog-list-thumb-single .post-content p{font-family:"Open Sans";line-height:24px;font-weight:normal;font-style:400;color:#666;font-size:13px;opacity: 1;visibility: visible;-webkit-transition: opacity 0.24s ease-in-out;-moz-transition: opacity 0.24s ease-in-out;transition: opacity 0.24s ease-in-out;}.wf-loading .rq-blog-list-thumb-single .post-content p,{opacity: 0;}.ie.wf-loading .rq-blog-list-thumb-single .post-content p,{visibility: hidden;}.rq-sidebar h4.widget-title{font-family:Montserrat;line-height:44px;font-weight:normal;font-style:400;color:#000;font-size:18px;opacity: 1;visibility: visible;-webkit-transition: opacity 0.24s ease-in-out;-moz-transition: opacity 0.24s ease-in-out;transition: opacity 0.24s ease-in-out;}.wf-loading .rq-sidebar h4.widget-title,{opacity: 0;}.ie.wf-loading .rq-sidebar h4.widget-title,{visibility: hidden;}.rq-sidebar ul li a{font-family:"Open Sans";line-height:24px;font-weight:normal;font-style:400;color:#666;font-size:14px;opacity: 1;visibility: visible;-webkit-transition: opacity 0.24s ease-in-out;-moz-transition: opacity 0.24s ease-in-out;transition: opacity 0.24s ease-in-out;}.wf-loading .rq-sidebar ul li a,{opacity: 0;}.ie.wf-loading .rq-sidebar ul li a,{visibility: hidden;}.rq-main-footer h4.widget-title{font-family:Montserrat-Regular;line-height:44px;font-weight:normal;font-style:400;color:#fff;font-size:18px;opacity: 1;visibility: visible;-webkit-transition: opacity 0.24s ease-in-out;-moz-transition: opacity 0.24s ease-in-out;transition: opacity 0.24s ease-in-out;}.wf-loading .rq-main-footer h4.widget-title,{opacity: 0;}.ie.wf-loading .rq-main-footer h4.widget-title,{visibility: hidden;}.rq-main-footer ul li a{font-family:"Open Sans";line-height:24px;font-weight:normal;font-style:400;color:#999;font-size:13px;opacity: 1;visibility: visible;-webkit-transition: opacity 0.24s ease-in-out;-moz-transition: opacity 0.24s ease-in-out;transition: opacity 0.24s ease-in-out;}.wf-loading .rq-main-footer ul li a,{opacity: 0;}.ie.wf-loading .rq-main-footer ul li a,{visibility: hidden;}.copyright-content p{font-family:Montserrat-Regular;line-height:24px;font-weight:normal;font-style:400;color:#666;font-size:14px;opacity: 1;visibility: visible;-webkit-transition: opacity 0.24s ease-in-out;-moz-transition: opacity 0.24s ease-in-out;transition: opacity 0.24s ease-in-out;}.wf-loading .copyright-content p,{opacity: 0;}.ie.wf-loading .copyright-content p,{visibility: hidden;}</style><noscript><style type="text/css"> .wpb_animate_when_almost_visible { opacity: 1; }</style></noscript>    
  </head>
 
  <body data-rsssl=1 class="page-template-default page page-id-166 theme-turbo woocommerce-no-js wpb-js-composer js-comp-ver-5.0.1 vc_responsive">  
    <div id="main-wrapper">
 
<nav class="navbar navbar-default" id="sticker" style="background-image: url() ; background-color: #fffff; background-repeat: repeat-x; -webkit-background-size: cover; background-size: cover; background-position: center center; background-attachment: scroll;">
<div class="col-md-12 col-sm-12 widget-list top-container"><div class="container t-center"><div class="menu-header_top_menu-container">
  <ul id="menu-header_top_menu" class="menu">     
  <ul id="menu-header_top_menu" class="menu" style="display: flex; list-style: none; padding: 0; justify-content: flex-end;">
   <li style="margin-left: 20px;" > <a href="http://localhost/nivea/aboutus.php" >About Us<span></span></a>
   <li style="margin-left: 20px;" > <a href="http://localhost/nivea/logout.php">Logout</a>
</li>
 
</ul>
 
            
            
        </div>
         
  
      </div>
</nav>
 
       <div class="rq-content-block">
                    <div class="container">
 
  <h3 class="head_title"><b><i>Basic Cycles</b></i></h3>
  
<div class="rq-shopping-content-block">
    <div class="post-content">
        <div class="vc_row wpb_row vc_row-fluid"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner "><div class="wpb_wrapper">
 
   <div class="about-us-content-single">
     <div class="row">
       <div class="col-md-4">
        <h2 class="brand-title"><span class="dot">.</span></h2>
       </div>
       <div class="col-md-8">
         <div class="about-us-text">
           <p style= font-weight: bold><strong> At AHEMDABAD PEDAL PUSHERS we look for giving the first push to people who would like to experience the joy of cycling. </strong></p>
           <p>A bicycle, also called a pedal cycle, bike or cycle, is a human-powered or motor-powered assisted, pedal-driven, single-track vehicle, having two wheels attached to a frame, one behind the other. A bicycle rider is called a cyclist, or bicyclist.Basic Cycles are used for multipurposes , can be used by various age of people and is easy to use , without any complex features.</p>
         </div>
       </div>
     </div>
   </div>
</div></div></div></div>

<style>
* {
  box-sizing: border-box;
}

.column {
  float: left;
  width: 33.33%;
  padding: 5px;
}

/* Clearfix (clear floats) */
.row::after {
  content: "";
  clear: both;
  display: table;
}
</style>
</head>
<body>

<h2><center><i><b>Demo Images Of Basic Cycles</b></i></center></h2>
<p></p>

<div class="row">
  <div class="column">
    <img src="https://i.pinimg.com/originals/60/6d/cf/606dcf7629c7bfca130b2adec84de8ce.jpg"  style="width:100%">
  </div>
  <div class="column">
    <img src="https://i.pinimg.com/originals/c7/f0/5f/c7f05fd703ab4102e004f7e47dce098f.jpg"  style="width:100%">
  </div>
  <div class="column">
    <img src="https://images-na.ssl-images-amazon.com/images/I/41PkqDVMGZL._SR500,500_.jpg" style="width:100%">
  </div>
</div>

        <div class="link-pages">
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

