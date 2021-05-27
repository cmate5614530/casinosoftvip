<?php
//set language variable
require_once('ipdetect.php');

if(isset($_POST['lang']) && !empty($_POST['lang'])){
    $_SESSION['lang'] = $_POST['lang'];

    if(isset($_SESSION['lang']) && $_SESSION['lang'] != $_POST['lang']){
        echo "<script type='text/javascript'> location.reload(); </script>";
    }
}

// Include Language file
if(isset($_SESSION['lang'])){
    include "language/".$_SESSION['lang'].".php";
}else{
    include "language/english.php";
}
?>
<!DOCTYPE html>
   <!-- CasinoSoft.vip © 2019 - All rights reserved -->
<html lang="en">
<head>
    <meta charset="utf-8">
	  <meta name="description" content="Online casino software provider">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:title" content="Pricing - CasinoSoft.vip - Owning a casino is possible" />
    <meta property="og:description" content="Online casino software provider - Owning a casino is possible - Get NOW!" />
    <meta property="og:image" content="https://casinosoft.vip/images/fb.jpg" />      
    <meta property="og:url" content="https://CasinoSoft.vip" />
    <link rel="icon" href="images/favicon.png" type="image/x-icon" />
    <!-- Theme tittle -->
    <title><?php echo $lang['title_terms'];?></title>
    
    <!-- Theme style CSS -->       
    <link href="css/style.css" rel="stylesheet"> 

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

   <!-- CasinoSoft.vip © 2019 - All rights reserved -->
    <!-- Header Area -->
    <header class="main_header_area">   
        <div class="searchForm">
            <form action="#" class="row">
                <div class="input-group">
                    <span class="input-group-addon"><i class="flaticon-search"></i></span>
                    <input type="search" name="search" class="form-control" placeholder="Type & Hit Enter">
                    <span class="input-group-addon form_hide"><i class="flaticon-close"></i></span>
                </div>
            </form>
        </div>
        <nav class="navbar navbar-expand-lg"> 
            <a class="navbar-brand" href="index.php"><img src="images/logo.png" alt=""></a> 
            <!-- Small Divice Menu-->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar_supported"  aria-label="Toggle navigation"> 
                <i class="fa fa-bars" aria-hidden="true"></i>
            </button>
            <!-- Right Nav bar -->
            <!-- Right Nav bar -->
            <ul class="right_nav">
                <li class="dropdown">
                    <a class="nav-link cart" href="https://casinosoft.vip/whmcs/cart.php?gid=1" role="button"><i class="flaticon-shopping-cart"></i></a>
                    
                </li>   
                <li><a href="https://casinosoft.vip/whmcs/clientarea.php" class="theme_btn"><?php echo $lang['sign_in'];?></a></li>
                <li>
                    <div class="dropdown">
                        <a aria-expanded="false" aria-haspopup="true" role="button" data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span id="selected"></span><span class="caret"></span></a>
                        <ul class="dropdown-menu" style="min-width: 6rem;">
                            <li><a style="cursor: pointer;" data-lang="english"><img src="images/en.png" width="28px"> EN</a></li>
                            <li><a style="cursor: pointer;" data-lang="spanish"><img src="images/es.png" width="28px"> ES</a></li>
                        </ul>
                    </div>
                    <form method='POST' action='' id='form_lang_top' >
                        <input type="hidden" name="lang" id="lang_top" value="english">
                    </form>
                </li>
            </ul> 
            <!-- Left Nav bar -->
            <div class="collapse navbar-collapse navbar_supported">
                <ul class="navbar-nav">
                    <li><a href="index.php"><?php echo $lang['Home'];?></a></li>
                    <li><a href="pricing.php"><?php echo $lang['Pricing'];?></a></li>
                    <li><a href="portfolio.php"><?php echo $lang['Portfolio'];?></a></li>
                    <li><a href="https://casinosoft.vip/whmcs/contact.php"><?php echo $lang['Get_Demo'];?></a></li>
                    <li><a href="https://casinosoft.vip/whmcs/contact.php"><?php echo $lang['Contact'];?></a></li>
                </ul>   
            </div>
        </nav>   
    </header>
    <!-- Header Area - UP-->  
    
  
    

     
    <!-- Pricing plan Area -->  
        <!-- Pricing plan Area -->  
    <section class="pricing_plan_area">
        <div class="container">
           <div class="tittle"> 
                <h2><?php echo $lang['terms_title'];?></h2>
                </section>
                </div>
                <center>
<label><?php echo $lang['terms_label'];?></label>
<p>&nbsp;</p>
<p><?php echo $lang['terms_p1'];?></p>
<p>&nbsp;</p>
<p><?php echo $lang['terms_p2'];?></p>
<p><?php echo $lang['terms_p3'];?></p>
<p><?php echo $lang['terms_p4'];?></p>
<p><?php echo $lang['terms_p5'];?><br /><?php echo $lang['terms_p6'];?></p>
<p><?php echo $lang['terms_p7'];?></p>
<p><?php echo $lang['terms_p8'];?><br /><?php echo $lang['terms_p9'];?><br /><?php echo $lang['terms_p10'];?></p>
<p><?php echo $lang['terms_p11'];?><br /><?php echo $lang['terms_p12'];?><br /><?php echo $lang['terms_p13'];?><br /><?php echo $lang['terms_p14'];?><br /><?php echo $lang['terms_p15'];?><br /><?php echo $lang['terms_p16'];?><br /><?php echo $lang['terms_p17'];?></p>
<p><?php echo $lang['terms_p18'];?></p>
<p><?php echo $lang['terms_p19'];?><br /><?php echo $lang['terms_p20'];?><br /><?php echo $lang['terms_p21'];?><br /><?php echo $lang['terms_p22'];?><br /><?php echo $lang['terms_p23'];?><br /><?php echo $lang['terms_p24'];?><br />
    <?php echo $lang['terms_p25'];?>
</p></center>
    </div>
      <!-- Contact Us Area --> 
    <section class="contact_us">
        <div class="container">
            <div class="contact_inner">
                <h2><?php echo $lang['contact_inner_h'];?></h2>
                <p><?php echo $lang['contact_inner_p'];?></p>
                <a href="https://casinosoft.vip/whmcs/contact.php" class="theme_btn"><?php echo $lang['Contact_NOW'];?></a>
            </div>
        </div>
    </section> 
    <!-- End Contact Us Area -->  
    
    <!-- Footer Area -->  
    <footer class="footer_area"> 
        <img src="images/footer-shap.png" alt="" class="shap">
        <div class="round_shap"></div>
        <div class="footer_inner row">   
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 footer_logo wow fadeIn">
                <a href="index.php"><img src="images/logo.png" alt=""></a> 
                <div class="language">
                    <h6><?php echo $lang['Language'];?></h6>
                    <form method='POST' action='' id='form_lang' >
                        <div class="language_select">
                            <select class="post_select" name="lang" id="lang" onchange="changeLang();">
                                <option value="english" <?php if(isset($_SESSION['lang']) && $_SESSION['lang'] == 'english'){ echo "selected"; } ?>>English (US)</option>
                                <option value="spanish" <?php if(isset($_SESSION['lang']) && $_SESSION['lang'] == 'spanish'){ echo "selected"; } ?>>Español</option>
                            </select>
                        </div>
                    </form>
                </div> 
                <ul class="footer_menu">
                    <li><a href="index.php"><?php echo $lang['Home'];?></a></li>
                    <li><a href="https://casinosoft.vip/whmcs/contact.php"><?php echo $lang['Contact'];?></a></li>
                    <li><a href="portfolio.php"><?php echo $lang['Portfolio'];?></a></li>
                </ul>
                <ul class="footer_social"> 
				   <li><a href="https://instagram.com/casinosoftvip"><i class="fa fa-instagram"></i></a></li>
                   <li><a href="https://twitter.com/casinosoftvip"><i class="fa fa-twitter"></i></a></li> 
				   <!-- <li><a href="https://www.facebook.com/casinosoftvip"><i class="fa fa-facebook"></i></a></li> -->
                </ul>
            </div>
            <div class="footer_widget fw_1 col-xl-2 col-lg-3 col-md-3 col-sm-6 wow fadeIn" data-wow-delay="0.2s">
                <h4><?php echo $lang['Core_Link'];?></h4>
                <ul class="footer_nav">
                    <li><a href="https://casinosoft.vip/whmcs/contact.php"><?php echo $lang['Contact'];?></a></li>
                    <li><a href="pricing.php"><?php echo $lang['Pricing_plan'];?></a></li>
                    <li><a href="index.php"><?php echo $lang['Home'];?></a></li>
                </ul>
            </div>  
            <div class="footer_widget fw_2 col-xl-2 col-lg-3 col-md-3 col-sm-6 wow fadeIn" data-wow-delay="0.4s">
                <h4><?php echo $lang['Information'];?></h4>
                <address>
                    <a href="mailto:info@casinosoft.vip" class="email">Email : info@casinosoft.vip</a>
                    <a href="https://t.me/CasinoSoftVIP" class="telegram">Telegram : @CasinoSoftVIP</a>
                    <a href="https://wa.me/5491136626106" class="whatsapp">Whatsapp : +54 9 11 3662-6106</a>
                    <p><?php echo $lang['skype'];?></p>
                </address>
            </div>   
            
           
        </div> 
     
        <p class="copy_right">CasinoSoft.vip © 2018 - 2021 - All rights reserved</p>
    </footer>
    <!-- End Footer Area --> 
    
   <!-- Scroll Top Button -->
    <button class="scroll-top">
        <i class="fa fa-angle-double-up"></i>
    </button>
    
<!-- Preloader  down  -->  
   <!-- <div class="preloader"></div> -->
    
    
    <!-- jQuery v3.3.1 -->
    <script src="js/jquery-3.3.1.min.js"></script>    
    <!-- Bootstrap v4.0.0 -->
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>  
    <!-- Extra Plugin -->
    <script src="vendors/animate-css/wow.min.js"></script> 
    <script src="vendors/parallaxmouse/parallax.min.js"></script> 
    <script src="vendors/counterup/jquery.waypoints.min.js"></script> 
   <!-- <script src="vendors/counterup/jquery.counterup.min.js"></script>   -->
    <script src="vendors/parallaxmouse/jquery.jqlouds.min.js"></script>  
    <script src="vendors/magnify-popup/jquery.magnific-popup.min.js"></script> 
    <script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
    <script src="vendors/isotope/isotope.pkgd.min.js"></script>     
    <script src="vendors/bootstrap-selector/jquery.nice-select.min.js"></script>  
    <!-- Theme js / Custom js -->
    <script src="js/theme.js"></script> 
	<!--Start of Tawk.to Script-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    var session = '<?php echo $_SESSION['lang'];?>';
    $(document).ready(function(){
        if(session == 'english') $('#selected').html('<img src="images/en.png" width="28px"> EN');
        else $('#selected').html('<img src="images/es.png" width="28px"> ES');
    });
    $('.dropdown-menu a').click(function(){
        $('#selected').html($(this).html());
        let lang = $(this).data('lang');
        $('#lang_top').val(lang);
        $('#form_lang_top').submit();

    });

    function changeLang(){
        $('#form_lang').submit();
    }
</script>
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5c482af951410568a107ee91/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-136474572-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-136474572-1');
</script>


   <!-- CasinoSoft.vip © 2019 - All rights reserved -->
</body>
</html>