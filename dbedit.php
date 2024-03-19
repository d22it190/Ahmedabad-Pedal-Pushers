<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
 
$con = mysqli_connect('localhost', 'ahm_p_p', 'Nivpari0#','ahm_p_p');

if(isset($_POST['_wpnonce']))
{
 $fn=$_POST['account_first_name'];
 $ln=$_POST['account_last_name'];
 $em=$_POST['account_email'];
 $pc=$_POST['password_current'];
 $pass1=$_POST['password_1'];
 $pass2=$_POST['password_2'];
 
 $sql = "INSERT INTO edit (  `fname`, `lname`, `email`,  `cpass`, `npass`, `conpass`) VALUES ('$fn','$ln','$em','$pc','$pass1','$pass2')";
 
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
function_alert("Data Edited Successfully");



}
 }
  
 ?>
 <!DOCTYPE html>

<html class="no-js" lang="en-US">

<!--<![endif]-->
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="Expires" content="30">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    
    				<script>document.documentElement.className = document.documentElement.className + ' yes-js js_active js'</script>
			<title>Ahmedabad Pedal Pusher | Dashboard </title>
                        <script>
                            /* You can add more configuration options to webfontloader by previously defining the WebFontConfig with your options */
                            if ( typeof WebFontConfig === "undefined" ) {
                                WebFontConfig = new Object();
                            }
                            WebFontConfig['google'] = {families: ['Montserrat', 'Oswald', 'Open+Sans', 'Montserrat-Regular']};

                            (function() {
                                var wf = document.createElement( 'script' );
                                wf.src = 'https://ajax.googleapis.com/ajax/libs/webfont/1.5.3/webfont.js';
                                wf.type = 'text/javascript';
                                wf.async = 'true';
                                var s = document.getElementsByTagName( 'script' )[0];
                                s.parentNode.insertBefore( wf, s );
                            })();
                        </script>
                        <script type="text/javascript">
   
    window.ReactiveTemplates = {};
    window.ReactiveTemplateCategories = {};
    window.ReactiveLayouts = [];
    window.ReactiveCategories = [];
    window.ReactiveSearchTemplate = {};
    window.ReactiveMarkerTemplate = {};
    window.ReactiveMarkerIcon = {};
    window.ReactiveTheme = {};
    window.ReactiveCategoryTemplate = {};
    window.IsotopeGrid = " ";
    window.searchArray = [];
    window.ReactiveFanoutData = {};
    ReactiveMap = {};
  
    </script>

<script type="application/ld+json" class="aioseop-schema">{"@context":"https://schema.org","@graph":[{"@type":"Organization","@id":"https://www.citycycling.in/#organization","url":"https://www.citycycling.in/","name":"Ahmedabad Pedal Pushers","sameAs":[]},{"@type":"WebSite","@id":"https://www.citycycling.in/#website","url":"https://www.citycycling.in/","name":"Ahmedabad Pedal Pushers","publisher":{"@id":"https://www.citycycling.in/#organization"}},{"@type":"WebPage","@id":"https://www.citycycling.in#webpage","url":"https://www.citycycling.in","inLanguage":"en-US","name":"Ahmedabad Pedal Pushers","isPartOf":{"@id":"https://www.citycycling.in/#website"},"breadcrumb":{"@id":"https://www.citycycling.in#breadcrumblist"},"description":"Rent a Cycle","datePublished":"2016-06-18T16:08:34+00:00","dateModified":"2020-07-18T13:38:10+00:00","about":{"@id":"https://www.citycycling.in/#organization"}},{"@type":"BreadcrumbList","@id":"https://www.citycycling.in#breadcrumblist","itemListElement":[{"@type":"ListItem","position":1,"item":{"@type":"WebPage","@id":"https://www.citycycling.in/","url":"https://www.citycycling.in/","name":"Ahmedabad Pedal Pusher"}}]}]}</script>

<!-- All In One SEO Pack -->
<link rel='dns-prefetch' href='//ajax.googleapis.com' />
<link rel='dns-prefetch' href='//cdn.linearicons.com' />
<link rel='dns-prefetch' href='//fonts.googleapis.com' />
<link rel='dns-prefetch' href='//s.w.org' />
	<script type="text/javascript">
			window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/12.0.0-1\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/12.0.0-1\/svg\/","svgExt":".svg","source":{"concatemoji":"https:\/\/www.citycycling.in\/wp-includes\/js\/wp-emoji-release.min.js?ver=5.4.9"}};
			/*! This file is auto-generated */
			!function(e,a,t){var n,r,o,i=a.createElement("canvas"),p=i.getContext&&i.getContext("2d");function s(e,t){var a=String.fromCharCode;p.clearRect(0,0,i.width,i.height),p.fillText(a.apply(this,e),0,0);e=i.toDataURL();return p.clearRect(0,0,i.width,i.height),p.fillText(a.apply(this,t),0,0),e===i.toDataURL()}function c(e){var t=a.createElement("script");t.src=e,t.defer=t.type="text/javascript",a.getElementsByTagName("head")[0].appendChild(t)}for(o=Array("flag","emoji"),t.supports={everything:!0,everythingExceptFlag:!0},r=0;r<o.length;r++)t.supports[o[r]]=function(e){if(!p||!p.fillText)return!1;switch(p.textBaseline="top",p.font="600 32px Arial",e){case"flag":return s([127987,65039,8205,9895,65039],[127987,65039,8203,9895,65039])?!1:!s([55356,56826,55356,56819],[55356,56826,8203,55356,56819])&&!s([55356,57332,56128,56423,56128,56418,56128,56421,56128,56430,56128,56423,56128,56447],[55356,57332,8203,56128,56423,8203,56128,56418,8203,56128,56421,8203,56128,56430,8203,56128,56423,8203,56128,56447]);case"emoji":return!s([55357,56424,55356,57342,8205,55358,56605,8205,55357,56424,55356,57340],[55357,56424,55356,57342,8203,55358,56605,8203,55357,56424,55356,57340])}return!1}(o[r]),t.supports.everything=t.supports.everything&&t.supports[o[r]],"flag"!==o[r]&&(t.supports.everythingExceptFlag=t.supports.everythingExceptFlag&&t.supports[o[r]]);t.supports.everythingExceptFlag=t.supports.everythingExceptFlag&&!t.supports.flag,t.DOMReady=!1,t.readyCallback=function(){t.DOMReady=!0},t.supports.everything||(n=function(){t.readyCallback()},a.addEventListener?(a.addEventListener("DOMContentLoaded",n,!1),e.addEventListener("load",n,!1)):(e.attachEvent("onload",n),a.attachEvent("onreadystatechange",function(){"complete"===a.readyState&&t.readyCallback()})),(n=t.source||{}).concatemoji?c(n.concatemoji):n.wpemoji&&n.twemoji&&(c(n.twemoji),c(n.wpemoji)))}(window,document,window._wpemojiSettings);
		</script>
		<style type="text/css">
img.wp-smiley,
img.emoji {
	display: inline !important;
	border: none !important;
	box-shadow: none !important;
	height: 1em !important;
	width: 1em !important;
	margin: 0 .07em !important;
	vertical-align: -0.1em !important;
	background: none !important;
	padding: 0 !important;
}
</style>
	<style id='contact-form-7-inline-css' type='text/css'>
.wpcf7 .wpcf7-recaptcha iframe {margin-bottom: 0;}.wpcf7 .wpcf7-recaptcha[data-align="center"] > div {margin: 0 auto;}.wpcf7 .wpcf7-recaptcha[data-align="right"] > div {margin: 0 0 0 auto;}
</style>
<style id='woocommerce-inline-inline-css' type='text/css'>
.woocommerce form .form-row .required { visibility: visible; }
</style>
<style id='yith-wfbt-style-inline-css' type='text/css'>

                .yith-wfbt-submit-block .yith-wfbt-submit-button {
                        background: #222222;
                        color: #DEB887;
                }
                .yith-wfbt-submit-block .yith-wfbt-submit-button:hover {
                        background: #777777;
                        color: #ffffff;
                }
</style>
<link rel='stylesheet' id='turbo-style-css'  href='https://www.citycycling.in/wp-content/themes/turbo/assets/dist/css/turbo.style.css?ver=5.4.9' type='text/css' media='all' />
<link rel='stylesheet' id='js_composer_front-css'  href='https://www.citycycling.in/wp-content/plugins/js_composer/assets/css/js_composer.min.css?ver=5.0.1' type='text/css' media='all' />
<style id='dashicons-inline-css' type='text/css'>
[data-font="Dashicons"]:before {font-family: 'Dashicons' !important;content: attr(data-icon) !important;speak: none !important;font-weight: normal !important;font-variant: normal !important;text-transform: none !important;line-height: 1 !important;font-style: normal !important;-webkit-font-smoothing: antialiased !important;-moz-osx-font-smoothing: grayscale !important;}
</style>
<link rel='stylesheet' id='psfw-font-css'  href='//fonts.googleapis.com/css?family=Bitter%7CHind%7CPlayfair+Display%3A400%2C400i%2C700%2C700i%2C900%2C900i%7COpen+Sans%3A400%2C500%2C600%2C700%2C900%7CLato%3A300%2C400%2C700%2C900%7CMontserrat%7CDroid+Sans%7CRoboto%7CLora%3A400%2C400i%2C700%2C700i%7CRoboto+Slab%7CRubik%7CMerriweather%3A300%2C400%2C700%2C900%7CPoppins%7CRopa+Sans%7CPlayfair+Display%7CRubik%7CSource+Sans+Pro%7CRoboto+Condensed%7CRoboto+Slab%3A300%2C400%2C700%7CAmatic+SC%3A400%2C700%7CQuicksand%7COswald%7CQuicksand%3A400%2C500%2C700&#038;ver=5.4.9' type='text/css' media='all' />
<link rel='stylesheet' id='psfw-linearicons-css'  href='https://cdn.linearicons.com/free/1.0.0/icon-font.min.css?ver=5.4.9' type='text/css' media='all' />
<script type="text/template" id="tmpl-variation-template">
	<div class="woocommerce-variation-description">{{{ data.variation.variation_description }}}</div>
	<div class="woocommerce-variation-price">{{{ data.variation.price_html }}}</div>
	<div class="woocommerce-variation-availability">{{{ data.variation.availability_html }}}</div>
</script>
<script type="text/template" id="tmpl-unavailable-variation-template">
	<p>Sorry, this cycle is unavailable.</p>
</script>
<script type='text/javascript' src='https://www.citycycling.in/wp-includes/js/jquery/jquery.js?ver=1.12.4-wp'></script>
<script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js?ver=5.4.9'></script>
<script type='text/javascript'>

var myScript = {"pluginsUrl":"https:\/\/www.citycycling.in\/wp-content\/plugins"};

</script>
<script type='text/javascript'>

var wpmenucart_ajax_assist = {"shop_plugin":"woocommerce","always_display":"1"};

</script>
<script type='text/javascript'>

var wc_add_to_cart_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%","i18n_view_cart":"View cart","cart_url":"https:\/\/www.app.in\/cart\/","is_cart":"","cart_redirect_after_add":"no"};

</script>
<script type='text/javascript'>

var _wpUtilSettings = {"ajax":{"url":"\/wp-admin\/admin-ajax.php"}};

</script>
<script type='text/javascript'>

var wc_add_to_cart_variation_params = {"wc_ajax_url":"\/?wc-ajax=%%endpoint%%","i18n_no_matching_variations_text":"Sorry, no products matched your selection. Please choose a different combination.","i18n_make_a_selection_text":"Please select some product options before adding this product to your cart.","i18n_unavailable_text":"Sorry, this product is unavailable. Please choose a different combination."};

</script>
<script type='text/javascript' src='https://cdn.linearicons.com/free/1.0.0/svgembedder.min.js?ver=5.4.9'></script>
<script type='text/javascript'>

</script>
<script type='text/javascript'>

</script>
<script type='text/javascript'>

var easy_testimonials_reveal = {"show_less_text":"Show Less"};

</script>
<meta name="generator" content="WordPress 5.4.9" />
<meta name="generator" content="WooCommerce 4.3.4" />
<link rel='shortlink' href='https://www.app.in/' />
<meta name="generator" content="Custom Login v3.2.9" />
<style type="text/css">
		ul.cnss-social-icon li.cn-fa-icon a:hover{opacity: 0.7!important;color:#ffffff!important;}
		</style>
        
	 <div class="random-quote"></div></div><style type="text/css">

.random-quote {
    display: block;
    position: absolute;
    bottom: 10%;
    margin: 0;
    color:#222;
    text-align: center;
    width: 100%;
    padding-left: 20px;
    padding-right: 20px;
    font-size: 20px;
}

.loader-image {
  display: block;
  margin: auto;
  padding-top: calc(55vh - 172px);
  width: 172px;
}

.loader-img-ani{
    animation: loaderani-img 1s infinite;
    width: 172px;
}

</style>

<style></style><script></script><style>

        </style>	<noscript><style>.woocommerce-product-gallery{ opacity: 1 !important; }</style></noscript>
	<meta name="generator" content="Powered by Visual Composer - drag and drop page builder for WordPress."/>

<link rel="icon" href="https://www.app.in/wp-content/uploads/2020/07/cropped-d6688db2-34c0-47f0-9661-dab56b9ec120-192x192.jpg" sizes="192x192" />
<link rel="apple-touch-icon" href="https://www.app.in/wp-content/uploads/2020/07/cropped-d6688db2-34c0-47f0-9661-dab56b9ec120-180x180.jpg" />
<meta name="msapplication-TileImage" content="https://www.app.in/wp-content/uploads/2020/07/cropped-d6688db2-34c0-47f0-9661-dab56b9ec120-270x270.jpg" />
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
	background-color: #DEB887;
}
		</style>
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
 <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
     <style type="text/css">
     
#bilal_loader { position: fixed; left:0px; top: 0px; height: 100%; width: 100%; background: #fff; z-index:99999999; }

#bilal_loader img { top: 50%; margin: -100px 0 0 -100px; width: 200px !important; height: auto!important; left: 50%; z-index:999999; }

 </style>  
  </head>

  <body data-rsssl=1 class="home page-template page-template-page-templates page-template-home-page page-template-page-templateshome-page-php page page-id-92 theme-turbo woocommerce-no-js wpb-js-composer js-comp-ver-5.0.1 vc_responsive">  
      <!-- <div class="loader loader-default is-active" data-text="Loading ... "></div> -->

    <!-- Start main wrapper  -->
    <div id="main-wrapper">
 <nav class="navbar navbar-default" id="sticker" style="background-image: url() ; background-color: #000; background-repeat: repeat-x; -webkit-background-size: cover; background-size: cover; background-position: center center; background-attachment: scroll;">


<div class="col-md-12 col-sm-12 widget-list top-container">
<div class="container t-center"><div class="menu-header_top_menu-container"><ul id="menu-header_top_menu" class="menu">

<li id="menu-item-911" class="menu-item menu-item-type-post_type menu-item-object-page dropdown"><a href="http://localhost/nivea/LAR.php" class="dropdown-toggle" role="button" data-toggle="" aria-haspopup="true" aria-expanded="false">Customer Form</a></li>
            <li id="menu-item-911" class="menu-item menu-item-type-post_type menu-item-object-page dropdown"><a href="http://localhost/nivea/LAR2.php" class="dropdown-toggle" role="button" data-toggle="" aria-haspopup="true" aria-expanded="false">Owner Form </a></li>
            <li id="menu-item-1390" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children has-submenu dropdown"><a href="http://localhost/nivea/aboutus.php" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">About Us<span></span></a>

<li id="menu-item-911" class="menu-item menu-item-type-post_type menu-item-object-page dropdown"><a href="http://localhost/nivea/edit.php" class="dropdown-toggle" role="button" data-toggle="" aria-haspopup="true" aria-expanded="false">Edit</a></li>
<ul class="dropdown-menu">
	</ul>
</li>
<li id="menu-item-911" class="menu-item menu-item-type-post_type menu-item-object-page dropdown"><a href="http://localhost/nivea/logout.php" class="dropdown-toggle" role="button" data-toggle="" aria-haspopup="true" aria-expanded="false">LogOut </a></li>
</ul>

            
            <ul class="nav navbar-nav navbar-right">

                                                            <li class="login-register-link right-side-link">
                            <a  title="Login / Register"><i class="icon_lock-open_alt"></i>Login / Register</a>
                        </li>
                                
        </div>
    
		<div ng-app="fetch" class="ftch">
		<h2></h2>
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
</div></div></div></div></div></div></div></div><div class="vc_row wpb_row vc_row-fluid"><div class="vc_row wpb_row vc_row-fluid p-t-75 p-b-75 how-it-works des-rns vc_custom_1509104460796 vc_row-has-fill"><div class="container-pull t-center wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner "><div class="wpb_wrapper"><div class="vc_row wpb_row vc_inner vc_row-fluid"><div class="wpb_column vc_column_container vc_col-sm-4"><div class="vc_column-inner "><div class="wpb_wrapper">
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
            <div class="col-md-3 col-sm-3 widget-list">			<div class="textwidget"><p></p>
</div>
		</div>            </div>
            <div class="footer-tree-list col-md-6">
            <ul class="widg">
              <li id="nav_menu-5" class="widget widget_nav_menu"><h2 class="widgettitle">Categories</h2>
<div class="menu-footer2_menu-container"><ul id="menu-footer2_menu" class="menu"><li id="menu-item-1451" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1451 dropdown">Basic Cycles</a></li>
<li id="menu-item-1452" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1452 dropdown">Gear Cycles</a></li>
<li id="menu-item-1453" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1453 dropdown">Toddlers Cycles</a></li>

</ul></div></li>
<li id="nav_menu-2" class="widget widget_nav_menu"><h2 class="widgettitle">Information</h2>
<div class="menu-footer_menu-container"><ul id="menu-footer_menu" class="menu">
<li id="menu-item-1307" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1307 dropdown"><a href="http://localhost/nivea/contactus.php">Contact Us</a></li>
<li id="menu-item-1252" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1252 dropdown"><a href="http://localhost/nivea/t&c.php">Terms & Condition</a></li>
</ul></div></li>
<li id="nav_menu-3" class="widget widget_nav_menu"><h2 class="widgettitle"> Account</h2>
<div class="menu-turbo-left-menu-container"><ul id="menu-turbo-left-menu" class="menu"><li id="menu-item-1169" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1169 dropdown"></li>
<li id="menu-item-1826" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1826 dropdown"><a href="http://localhost/nivea/dboard.php">My Account</a></li>
</ul></div></li>
  
              </ul>
            </div>
            
		</li>
 
               </ul>
            </div>
        </div>
    </div>
</div>

<div class="rq-copyright-section" style="background-image: url() ; background-color: #191919; background-repeat: repeat-x; -webkit-background-size: cover; background-size: cover; background-position: center center; background-attachment: scroll;">
    <div class="container">
        <div class="copyright-content">
            <p>
                                            </p>
            <ul class="list-unstyled social-list"><li><a href="" target="_blank"><i class=""></i></a></li></ul>        </div>
    </div>
</div>
    </footer>

	
 <script>


</script>
<div class="psfw-display-popup">
</div>
<div class="psfw-attributes-container">

</div><script type="text/javascript">
jQuery('.yith-wcwl-add-to-wishlist').on('click', function(e){
e.preventDefault()
jQuery('#yith-wcwl-popup-message, #yith-wcwl-message').hide();
jQuery('#yith-wcwl-popup-message').css('background','none');
jQuery('#yith-wcwl-popup-message').css('border','none');
window.location = "https://www.app.in/my-account";
});
</script>

	<script type="text/javascript">
		var c = document.body.className;
		c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
		document.body.className = c;
	</script>
	<link rel='stylesheet' id='metaslider-public-css'  href='https://www.citycycling.in/wp-content/plugins/ml-slider/assets/metaslider/public.css?ver=3.16.4' type='text/css' media='all' property='stylesheet' />
<link rel='stylesheet' id='vc_google_fonts_abril_fatfaceregular-css'  href='//fonts.googleapis.com/css?family=Abril+Fatface%3Aregular&#038;ver=5.4.9' type='text/css' media='all' />
<link rel='stylesheet' id='prettyphoto-css'  href='https://www.app.in/wp-content/plugins/js_composer/assets/lib/prettyphoto/css/prettyPhoto.min.css?ver=5.0.1' type='text/css' media='all' />
<script type='text/javascript'>

var yith_wcwl_l10n = {"ajax_url":"\/wp-admin\/admin-ajax.php","redirect_to_cart":"no","multi_wishlist":"","hide_add_button":"1","enable_ajax_loading":"","ajax_loader_url":"https:\/\/www.citycycling.in\/wp-content\/plugins\/yith-woocommerce-wishlist\/assets\/images\/ajax-loader-alt.svg","remove_from_wishlist_after_add_to_cart":"1","is_wishlist_responsive":"1","labels":{"cookie_disabled":"We are sorry, but this feature is available only if cookies on your browser are enabled.","added_to_cart_message":"<div class=\"woocommerce-notices-wrapper\"><div class=\"woocommerce-message\" role=\"alert\">Product added to cart successfully<\/div><\/div>"},"actions":{"add_to_wishlist_action":"add_to_wishlist","remove_from_wishlist_action":"remove_from_wishlist","reload_wishlist_and_adding_elem_action":"reload_wishlist_and_adding_elem","load_mobile_action":"load_mobile","delete_item_action":"delete_item","save_title_action":"save_title","save_privacy_action":"save_privacy","load_fragments":"load_fragments"}};

</script>
<script type='text/javascript'>


</script>
<script type='text/javascript'>

</script>
<script type='text/javascript'>

var woocommerce_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%"};

</script>
<script type='text/javascript'>

var wc_cart_fragments_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%","cart_hash_key":"wc_cart_hash_e60ef925325ff3a8dc09735f4cb3bafb","fragment_name":"wc_fragments_e60ef925325ff3a8dc09735f4cb3bafb","request_timeout":"5000"};

</script>
<script type='text/javascript'>

</script>
<script type='text/javascript'>

var yith_woocompare = {"ajaxurl":"\/?wc-ajax=%%endpoint%%","actionadd":"yith-woocompare-add-product","actionremove":"yith-woocompare-remove-product","actionview":"yith-woocompare-view-table","actionreload":"yith-woocompare-reload-product","added_label":"Added","table_title":"Product Comparison","auto_open":"yes","loader":"https:\/\/www.app.in\/wp-content\/plugins\/yith-woocommerce-compare\/assets\/images\/loader.gif","button_text":"Compare","cookie_name":"yith_woocompare_list","close_label":"Close"};

</script>
<script type='text/javascript'>

</script>
<script type='text/javascript'>

var option_data = {"last_tab":"10","show_breadcrubmbs":"1","turbo_global_date_format":"m\/d\/Y","home_cal_language_domain":"en","home_cal_pickup_text":"Pickup Date","home_cal_return_text":"Return Date","turbo-custom-css":"","turbo-custom-js":"","header-logo":{"url":"","id":"","height":"","width":"","thumbnail":""},"show_menu_right_section":"yes","show_header_login":"yes","show_header_language":"yes","turbo-language":["EN","DE","IT","FR"],"turbo-wpml-select":"name","show_header_currency_switcher":"yes","turbowp_search_page":"","turbo_choose_listing_sidebar":"sidebar-one","listing_details_link_text":"Details","listing_day_or_night_text":"Days","listing_price_starting_from":"From","featured-img":{"url":"","id":"","height":"","width":"","thumbnail":""},"turbo_banner_switch":"on","turbo_multi_banner":"banner-one","banner_height":"35","banner_height_unit":"vh","turbo_breadcrumbs_switch":"on","turbo_breadcrumbs_alignment":"text-center","show_product_top_banner":"1","show_product_location_map":"1","location_map_heading":"Location","book_now_heading":"Book Car Now","show_related_product":"1","show_product_tab_section":"1","show_faqs_related_products_together":"1","show_horizontal_related_products":"","related_products_heading":"Related Cars","no_of_related_product":"","show_horizontal_upsell_products":"","upsell_products_heading":"You may also like !","no_of_upsell_product":"","show_horizontal_cross_sell_products":"1","cross_sell_products_heading":"You may also like !","no_of_cross_sell_product":"","turbo_product_banner_switch":"on","turbo_product_multi_banner":"product-banner-two","turbo_set_product_banner_bg":"feature_image","turbo_product_banner_background":{"background-color":"#FFF","background-repeat":"","background-size":"","background-attachment":"","background-position":"","background-image":"","media":{"id":"","height":"","width":"","thumbnail":""}},"turbo_show_gallery_in_container":"on","product_banner_height":"50","product_banner_height_unit":"vh","turbo_product_breadcrumbs_alignment":"text-center","login_title":"Login Your Account","login_sub_title":"Login to your accounts to discover the great features in this template","login_reg_promotion_text":"","signup_promotion_title":"","google-map-key":"","map_marker":{"url":"","id":"","height":"","width":"","thumbnail":""},"turbo_social_profile_switch":"on","turbo_open_social_link":"_blank","turbo_social_profile":[{"title":"","description":"","url":"","sort":"0","attachment_id":"","thumb":"","image":"","height":"","width":""}],"turbo_footer_switch":"on","turbo_multi_footer":"footer-one","turbo_footer_widget_onoff":"on","turbo_no_of_widgets":"3","turbo_footer_copyright_switch":"on","turbo_copyright_image":{"url":"","id":"","height":"","width":"","thumbnail":""},"turbo_copyright_background":{"background-color":"#191919","background-repeat":"","background-size":"","background-attachment":"","background-position":"","background-image":"","media":{"id":"","height":"","width":"","thumbnail":""}},"turbo_copyright_text":"","turbo_body_background":{"background-color":"#f5f5f5","background-repeat":"","background-size":"","background-attachment":"","background-position":"","background-image":"","media":{"id":"","height":"","width":"","thumbnail":""}},"turbo_header_background":{"background-color":"#000","background-repeat":"","background-size":"","background-attachment":"","background-position":"","background-image":"","media":{"id":"","height":"","width":"","thumbnail":""}},"turbo_banner_background":{"background-color":"#212020","background-repeat":"","background-size":"","background-attachment":"","background-position":"","background-image":"","media":{"id":"","height":"","width":"","thumbnail":""}},"turbo_container_background":{"background-color":"#FFF","background-repeat":"","background-size":"","background-attachment":"","background-position":"","background-image":"","media":{"id":"","height":"","width":"","thumbnail":""}},"turbo_sidebar_background":{"background-color":"#FFF","background-repeat":"","background-size":"","background-attachment":"","background-position":"","background-image":"","media":{"id":"","height":"","width":"","thumbnail":""}},"turbo_main_content_background":{"background-color":"#FFF","background-repeat":"","background-size":"","background-attachment":"","background-position":"","background-image":"","media":{"id":"","height":"","width":"","thumbnail":""}},"turbo_footer_background":{"background-color":"#212020","background-repeat":"","background-size":"","background-attachment":"","background-position":"","background-image":"","media":{"id":"","height":"","width":"","thumbnail":""}},"scholar_body_typography":{"font-family":"","font-options":"","google":"1","font-backup":"","font-weight":"","font-style":"","text-align":"","line-height":"","color":""},"scholar_header_typography":{"font-family":"Montserrat","font-options":"","google":"1","font-backup":"","font-weight":"","font-style":"400","subsets":"","text-align":"","font-size":"12px","line-height":"20px","color":"#f5f5f5"},"scholar_header_menu_dropdown_typography":{"font-family":"Montserrat","font-options":"","google":"1","font-backup":"","font-weight":"","font-style":"400","subsets":"","text-align":"","font-size":"12px","line-height":"20px","color":"#f5f5f5"},"scholar_banner_title_typography":{"font-family":"Oswald","font-options":"","google":"1","font-backup":"","font-weight":"","font-style":"400","subsets":"","text-align":"","font-size":"24px","line-height":"44px","color":"#000000"},"scholar_content_title_typography":{"font-family":"Montserrat","font-options":"","google":"1","font-backup":"","font-weight":"","font-style":"400","subsets":"","text-align":"","font-size":"16px","line-height":"16px","color":"#000"},"scholar_content_typography":{"font-family":"Open Sans","font-options":"","google":"1","font-backup":"","font-weight":"","font-style":"400","subsets":"","text-align":"","font-size":"13px","line-height":"24px","color":"#666"},"scholar_blog_widget_title_typography":{"font-family":"Montserrat","font-options":"","google":"1","font-backup":"","font-weight":"","font-style":"400","subsets":"","text-align":"","font-size":"18px","line-height":"44px","color":"#000"},"scholar_blog_widget_content_typography":{"font-family":"Open Sans","font-options":"","google":"1","font-backup":"","font-weight":"","font-style":"400","subsets":"","text-align":"","font-size":"14px","line-height":"24px","color":"#666"},"scholar_widgets_title_typography":{"font-family":"Montserrat-Regular","font-options":"","google":"1","font-backup":"","font-weight":"","font-style":"400","subsets":"","text-align":"","font-size":"18px","line-height":"44px","color":"#fff"},"scholar_widgets_content_typography":{"font-family":"Open Sans","font-options":"","google":"1","font-backup":"","font-weight":"","font-style":"400","subsets":"","text-align":"","font-size":"13px","line-height":"24px","color":"#999"},"scholar_copyright_typography":{"font-family":"Montserrat-Regular","font-options":"","google":"1","font-backup":"","font-weight":"","font-style":"400","subsets":"","text-align":"","font-size":"14px","line-height":"24px","color":"#666"},"REDUX_last_saved":"1595097132","REDUX_LAST_SAVE":"1595097132","REDUX_COMPILER":"1500446381","REDUX_LAST_COMPILER":"1500446381"};

</script>
<script type='text/javascript'>

var option_data = {"last_tab":"10","show_breadcrubmbs":"1","turbo_global_date_format":"m\/d\/Y","home_cal_language_domain":"en","home_cal_pickup_text":"Pickup Date","home_cal_return_text":"Return Date","turbo-custom-css":"","turbo-custom-js":"","header-logo":{"url":"","id":"","height":"","width":"","thumbnail":""},"show_menu_right_section":"yes","show_header_login":"yes","show_header_language":"yes","turbo-language":["EN","DE","IT","FR"],"turbo-wpml-select":"name","show_header_currency_switcher":"yes","turbowp_search_page":"","turbo_choose_listing_sidebar":"sidebar-one","listing_details_link_text":"Details","listing_day_or_night_text":"Days","listing_price_starting_from":"From","featured-img":{"url":"","id":"","height":"","width":"","thumbnail":""},"turbo_banner_switch":"on","turbo_multi_banner":"banner-one","banner_height":"35","banner_height_unit":"vh","turbo_breadcrumbs_switch":"on","turbo_breadcrumbs_alignment":"text-center","show_product_top_banner":"1","show_product_location_map":"1","location_map_heading":"Location","book_now_heading":"Book Car Now","show_related_product":"1","show_product_tab_section":"1","show_faqs_related_products_together":"1","show_horizontal_related_products":"","related_products_heading":"Related Cars","no_of_related_product":"","show_horizontal_upsell_products":"","upsell_products_heading":"You may also like !","no_of_upsell_product":"","show_horizontal_cross_sell_products":"1","cross_sell_products_heading":"You may also like !","no_of_cross_sell_product":"","turbo_product_banner_switch":"on","turbo_product_multi_banner":"product-banner-two","turbo_set_product_banner_bg":"feature_image","turbo_product_banner_background":{"background-color":"#FFF","background-repeat":"","background-size":"","background-attachment":"","background-position":"","background-image":"","media":{"id":"","height":"","width":"","thumbnail":""}},"turbo_show_gallery_in_container":"on","product_banner_height":"50","product_banner_height_unit":"vh","turbo_product_breadcrumbs_alignment":"text-center","login_title":"Login Your Account","login_sub_title":"Login to your accounts to discover the great features in this template","login_reg_promotion_text":"","signup_promotion_title":"","google-map-key":"","map_marker":{"url":"","id":"","height":"","width":"","thumbnail":""},"turbo_social_profile_switch":"on","turbo_open_social_link":"_blank","turbo_social_profile":[{"title":"","description":"","url":"","sort":"0","attachment_id":"","thumb":"","image":"","height":"","width":""}],"turbo_footer_switch":"on","turbo_multi_footer":"footer-one","turbo_footer_widget_onoff":"on","turbo_no_of_widgets":"3","turbo_footer_copyright_switch":"on","turbo_copyright_image":{"url":"","id":"","height":"","width":"","thumbnail":""},"turbo_copyright_background":{"background-color":"#191919","background-repeat":"","background-size":"","background-attachment":"","background-position":"","background-image":"","media":{"id":"","height":"","width":"","thumbnail":""}},"turbo_copyright_text":"","turbo_body_background":{"background-color":"#f5f5f5","background-repeat":"","background-size":"","background-attachment":"","background-position":"","background-image":"","media":{"id":"","height":"","width":"","thumbnail":""}},"turbo_header_background":{"background-color":"#000","background-repeat":"","background-size":"","background-attachment":"","background-position":"","background-image":"","media":{"id":"","height":"","width":"","thumbnail":""}},"turbo_banner_background":{"background-color":"#212020","background-repeat":"","background-size":"","background-attachment":"","background-position":"","background-image":"","media":{"id":"","height":"","width":"","thumbnail":""}},"turbo_container_background":{"background-color":"#FFF","background-repeat":"","background-size":"","background-attachment":"","background-position":"","background-image":"","media":{"id":"","height":"","width":"","thumbnail":""}},"turbo_sidebar_background":{"background-color":"#FFF","background-repeat":"","background-size":"","background-attachment":"","background-position":"","background-image":"","media":{"id":"","height":"","width":"","thumbnail":""}},"turbo_main_content_background":{"background-color":"#FFF","background-repeat":"","background-size":"","background-attachment":"","background-position":"","background-image":"","media":{"id":"","height":"","width":"","thumbnail":""}},"turbo_footer_background":{"background-color":"#212020","background-repeat":"","background-size":"","background-attachment":"","background-position":"","background-image":"","media":{"id":"","height":"","width":"","thumbnail":""}},"scholar_body_typography":{"font-family":"","font-options":"","google":"1","font-backup":"","font-weight":"","font-style":"","text-align":"","line-height":"","color":""},"scholar_header_typography":{"font-family":"Montserrat","font-options":"","google":"1","font-backup":"","font-weight":"","font-style":"400","subsets":"","text-align":"","font-size":"12px","line-height":"20px","color":"#f5f5f5"},"scholar_header_menu_dropdown_typography":{"font-family":"Montserrat","font-options":"","google":"1","font-backup":"","font-weight":"","font-style":"400","subsets":"","text-align":"","font-size":"12px","line-height":"20px","color":"#f5f5f5"},"scholar_banner_title_typography":{"font-family":"Oswald","font-options":"","google":"1","font-backup":"","font-weight":"","font-style":"400","subsets":"","text-align":"","font-size":"24px","line-height":"44px","color":"#000000"},"scholar_content_title_typography":{"font-family":"Montserrat","font-options":"","google":"1","font-backup":"","font-weight":"","font-style":"400","subsets":"","text-align":"","font-size":"16px","line-height":"16px","color":"#000"},"scholar_content_typography":{"font-family":"Open Sans","font-options":"","google":"1","font-backup":"","font-weight":"","font-style":"400","subsets":"","text-align":"","font-size":"13px","line-height":"24px","color":"#666"},"scholar_blog_widget_title_typography":{"font-family":"Montserrat","font-options":"","google":"1","font-backup":"","font-weight":"","font-style":"400","subsets":"","text-align":"","font-size":"18px","line-height":"44px","color":"#000"},"scholar_blog_widget_content_typography":{"font-family":"Open Sans","font-options":"","google":"1","font-backup":"","font-weight":"","font-style":"400","subsets":"","text-align":"","font-size":"14px","line-height":"24px","color":"#666"},"scholar_widgets_title_typography":{"font-family":"Montserrat-Regular","font-options":"","google":"1","font-backup":"","font-weight":"","font-style":"400","subsets":"","text-align":"","font-size":"18px","line-height":"44px","color":"#fff"},"scholar_widgets_content_typography":{"font-family":"Open Sans","font-options":"","google":"1","font-backup":"","font-weight":"","font-style":"400","subsets":"","text-align":"","font-size":"13px","line-height":"24px","color":"#999"},"scholar_copyright_typography":{"font-family":"Montserrat-Regular","font-options":"","google":"1","font-backup":"","font-weight":"","font-style":"400","subsets":"","text-align":"","font-size":"14px","line-height":"24px","color":"#666"},"REDUX_last_saved":"1595097132","REDUX_LAST_SAVE":"1595097132","REDUX_COMPILER":"1500446381","REDUX_LAST_COMPILER":"1500446381"};

</script>
<script type='text/javascript'>

var newsletter = {"messages":{"email_error":"The email is not correct","name_error":"The name is not correct","surname_error":"The last name is not correct","profile_error":"","privacy_error":"You must accept the privacy statement"},"profile_max":"20"};

</script>
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
<script type="text/javascript">
    jQuery('.vc_custom_1500380747817').attr('data-parallax','scroll')
    jQuery('.vc_custom_1500380747817').attr('data-image-src','https://www.app.in/wp-content/uploads/2016/06/full-img-1.png?id=819')
    var cartt = jQuery('#wpmenucartli a span').text();
    cartt = cartt.split(' ');
    cartt = cartt[0]
    jQuery('#wpmenucartli a span').html(cartt);
    console.log(cartt)

jQuery( ".dropdown-toggle" ).on( "click", function(e) {
  e.preventDefault()
  var pageURL = jQuery(this).attr("href"); 
 
  jQuery(location).attr('href', pageURL)
});

</script>
<script type="text/javascript">
  $( "#searchForm" ).submit(function( event ) {
  
    var frmdate = $('.frmdate').val();
    var todate = $('.todate').val();
    if(frmdate != '' && todate != ''){
      $( "#searchForm" ).submit();
      }
    event.preventDefault();
    

    if(frmdate == ''){
      $('#startdateerror').html('<p style="color:red">Enter Start Date</p>');
    }
    else{
      $('#startdateerror').html('');  
    }
    if(todate == ''){
      $('#enddateerror').html('<p style="color:red">Enter End Date</p>');
    }
    else{
      $('#enddateerror').html('');  
    }
    
});

</script>
<style>
.widget_text h2 {
    color: #fff;
}
.widget_text p {
    color: #fff;
}
</style>


