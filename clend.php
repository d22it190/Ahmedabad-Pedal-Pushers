
<!DOCTYPE html>

<html class="no-js" lang="en-US">
  <head>
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
                              <title> Cycle Lending </title>
                        
<link rel='stylesheet' id='turbo-style-css'  href='https://www.citycycling.in/wp-content/themes/turbo/assets/dist/css/turbo.style.css?ver=5.4.9' type='text/css' media='all' />
<link rel='stylesheet' id='wppb_stylesheet-css'  href='https://www.citycycling.in/wp-content/plugins/profile-builder/assets/css/style-front-end.css?ver=3.1.9' type='text/css' media='all' />

  </head>

  <body data-rsssl=1 class="page-template-default page page-id-164 logged-in admin-bar no-customize-support theme-turbo woocommerce-account woocommerce-page woocommerce-customer-logout woocommerce-no-js wpb-js-composer js-comp-ver-5.0.1 vc_responsive">  
       <div id="main-wrapper">

<nav class="navbar navbar-default" id="sticker" style="background-image: url() ; background-color: #000; background-repeat: repeat-x; -webkit-background-size: cover; background-size: cover; background-position: center center; background-attachment: scroll;">
<div class="col-md-12 col-sm-12 widget-list top-container"><div class="container t-center"><div class="menu-header_top_menu-container">
  <ul id="menu-header_top_menu" class="menu">
<li id="menu-item-1220" ><a href="http://localhost/nivea/dboard.php">Dashboard</a></li>
<li id="menu-item-1220" ><a href="http://localhost/nivea/logout.php">LOGOUT</a></li>

</div></div></div>             
        
        </div>
</nav>


       <div class="rq-content-block">
                    <div class="container">
   
  
    <h3 class="head_title">Lend Your Cycle</h3>
    
<div class="rq-shopping-content-block">
    <div class="post-content">
        <div class="login-left"><div class="woocommerce">
    <div class="rental-notice">
       <div class="woocommerce-message"> You Have To Lend Your Cycle To This Person.</div>
    </div>


<div class="col-md-3">
    
    <div class="user-account">
        <div class="user-account-portrait">
            <img src="https://previews.123rf.com/images/cteconsulting/cteconsulting1507/cteconsulting150700061/42815338-abstract-person-riding-a-bicycle-while-wearing-a-helmet-.jpg?fj=1" width="100" height="100" alt="Avatar" class="avatar avatar-100 wp-user-avatar wp-user-avatar-100 photo avatar-default" />           
        </div>      
    </div>

    <nav class="woocommerce-MyAccount-navigation">
        <ul class="nav nav-stacked rq-elements-menu">
                            <li class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--orders">
                    <a href="http://localhost/nivea/contactus.php">Contact Us</a>
                </li>
                            <li class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--dashboard">
                    <a href="http://localhost/nivea/t&c.php">Terms & Conditions</a>
                </li>
                            
                            <li class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--edit-account">
                    <a href="http://localhost/nivea/edit.php">Edit Account details</a>
                </li>
                            
                            
                    </ul>
    </nav>
</div>

<div class="col-md-9">
    <div class="woocommerce-MyAccount-content">
        <div class="woocommerce-notices-wrapper"></div>
<div class='personal-my-account'>
<h2>Customer Details </h2>
<div class='form-acc-item'>
  <label>Name:</label><p>Avinash Singh</p></div><div class='form-acc-item'>
    <label>Address :</label><p>109-Avalon Heights , behind BB Talav , Godasar - 380094 .</p></div>
    <div class='form-acc-item'>
      <label>Email</label><p>
      avisingh2022@gmail.com</p></div>
      <div class='form-acc-item'><label>Contact Number:</label>
<p>+91-9845397610.</p>
</div>
</div>
<div class="social-login"></div>
</div>
        <div class="link-pages">
                    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
</div> 

    </footer>


 

        
  <link rel="stylesheet" type="text/css" href="https://www.citycycling.in/wp-content/themes/turbo-child/css/custom-style.css">

  </body>
</html>

<div id="CartMes" class="modal">
  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span class="close">&times;</span>
      <h2>Modal Header</h2>
    </div>
    <div class="modal-body">
      <div class="cartMes-p"></div>
    </div>
    <div class="modal-footer">
      <h3>Modal Footer</h3>
    </div>
  </div>
</div>


<script>

  if (window.matchMedia("(max-width:720px)").matches) {
jQuery( ".dropdown-toggle" ).on( "click", function(e) {
 

  jQuery(this).next("ul").toggle();

});
}else{
  
jQuery( ".dropdown-toggle" ).on( "click", function(e) {
  e.preventDefault()
  var pageURL = jQuery(this).attr("href"); 
  jQuery(location).attr('href', pageURL)
});

}

$('.close').on('click', function(){
    $('.modal').hide();
})



</script>


<script type="text/javascript">


  
 if(jQuery('body').find('.rental-notice').length > 0){
  jQuery('#CartMes').show();
  jQuery('.cartMes-p').html(jQuery('.rental-notice').html())
  jQuery('.rental-notice').hide()
 }
 jQuery('<p>', {
  class : 'dateTobeShowed'
 }).wrap().appendTo('.eventday');

 jQuery('<p>', {
  class : 'dateTobeShowed_second'
 }).wrap().appendTo('.eventday');


$('.eventday').each(function(){
  var dae = $(this).find('span.cld-title:last(2)').html()
  //console.log(dae)
  $(this).find('p.dateTobeShowed').html(dae);

  var dae_2 = $(this).find('span.cld-title:nth-child(1)').html()
  //console.log(dae_2)
  $(this).find('p.dateTobeShowed_second').html(dae_2);
})


</script>
