<?php

//set language variable
require_once('ipdetect.php');
if(!isset($_SESSION['lang'])) $_SESSION['lang'] = 'english';
if(isset($_POST['lang']) && !empty($_POST['lang'])){
    $_SESSION['lang'] = $_POST['lang'];

    if(isset($_SESSION['lang']) && $_SESSION['lang'] != $_POST['lang']){
        $_SESSION['lang'] = $_POST['lang'];
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
    <title><?php echo $lang['title_pricing'];?></title>
    
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
                            <li><a href="#" data-lang="english"><img src="images/en.png" width="28px"> EN</a></li>
                            <li><a href="#" data-lang="spanish"><img src="images/es.png" width="28px"> ES</a></li>
                        </ul>
                    </div>
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
    
  
    
    <!-- Pages Banner Area -->   
    <section class="pages_banner" id="parallax">   
       <img src="images/bannar-shap-1.png" alt="" class="layer layer_1" data-depth="0.10">
       <img src="images/bannar-shap-2.png" alt="" class="layer layer_2" data-depth="0.35">
        <div class="container">
            <img src="images/pages-banner-1.png" alt="" class="bannar_img wow fadeInRight">
            <h2 class="wow fadeInUp"><?php echo $lang['banner1'];?></h2>
            <p class="wow fadeInUp" data-wow-delay="0.3s"><?php echo $lang['banner1_content'];?></p>
           <img src="images/p-banner-shap.png" alt="" class="layer_3">
        </div> 
    </section>
    <!-- End Pages Banner Area -->  
     
    <!-- Pricing plan Area -->  
    <section class="pricing_plan_area">
        <div class="container">
           <div class="tittle"> 
                <h2><?php echo $lang['pricing_plan_h2'];?></h2>
                <ul class="nav tab_list">
                    <li><a class="nav-link active" data-toggle="pill" href="#basic" role="tab"><?php echo $lang['Basic'];?></a></li>
                    <li><a class="nav-link" data-toggle="pill" href="#premium" role="tab"><?php echo $lang['Premium'];?></a></li>
                </ul>
           </div>
            <div class="tab-content">
                <div class="tab-pane fade show active" id="basic" role="tabpanel"> 
                    <div class="row pricing_row"> 
                        <div class="col-xl-4 col-md-6 wow fadeIn">
                            <div class="fantasy fantasy_2">  
                              <center>  <span class="amount">$3000 USD<img src="images/casinoprice.png" width="100" height="71"></span>
                                <a href="#" class="heding"><?php echo $lang['Bronze_Casino_V1'];?></a>
                                <p><?php echo $lang['Bronze_p'];?></p>
                                <ul class="fantasy_list">
                                <li><?php echo $lang['Bronze_li1'];?> <img alt="" src="images/check.png"></li>
                                <li><?php echo $lang['Bronze_li2'];?> <img alt="" src="images/check.png"></li>
                                <li><?php echo $lang['Bronze_li3'];?> <img alt="" src="images/check.png"></li>
                                <li><?php echo $lang['Bronze_li4'];?> <img alt="" src="images/check.png"></li>
                                <li><?php echo $lang['Bronze_li5'];?> <img alt="" src="images/check.png"></li>
                                <li><?php echo $lang['Bronze_li6'];?> <img alt="" src="images/check.png"></li>
                            	<li><span><?php echo $lang['Bronze_li7'];?> <img alt="" src="images/check.png"></span></li>
								<li><?php echo $lang['Bronze_li8'];?> <img alt="" src="images/cross.png"></li>
                                </ul><br>
                <a href="https://casinosoft.vip/whmcs/cart.php?a=add&pid=1" class="theme_btn"><?php echo $lang['BUY_NOW'];?></a></center>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 wow fadeIn" data-wow-delay="0.3s">
                            <div class="fantasy">  <center>
                                <span class="amount">$4500 USD                                  <img src="images/bestchoice.png" width="100" height="71">
</span>
                                <a href="#" class="heding"><?php echo $lang['Silver_Casino_V2'];?> </a>
                                <p><?php echo $lang['Silver_p'];?></p>
                                <ul class="fantasy_list">
                                <li><?php echo $lang['Silver_li1'];?> <img alt="" src="images/check.png"></li>
                                <li><?php echo $lang['Silver_li2'];?> <img alt="" src="images/check.png"></li>
                                <li><?php echo $lang['Silver_li3'];?> <img alt="" src="images/check.png"></li>
                                <li><?php echo $lang['Silver_li4'];?> <img alt="" src="images/check.png"></li>
                                <li><?php echo $lang['Silver_li5'];?> <img alt="" src="images/check.png"></li>
                                <li><?php echo $lang['Silver_li6'];?> <img alt="" src="images/check.png"></li>
                            	<li><span><?php echo $lang['Silver_li7'];?> <img alt="" src="images/check.png"></span></li>

								<li><?php echo $lang['Silver_li8'];?> <img alt="" src="images/cross.png"></li>
                                </ul><br>
                <a href="https://casinosoft.vip/whmcs/cart.php?a=add&pid=2" class="theme_btn"><?php echo $lang['BUY_NOW'];?></a></center>
                            </div>
                        </div>  
                        <div class="col-xl-4 col-md-6 wow fadeIn" data-wow-delay="0.6s">
                            <div class="fantasy fantasy_3">  <center>
                                <span class="amount">$12000 USD<img alt="" src="images/treasure.png"></span>
                                <a href="#" class="heding"><?php echo $lang['Gold_Casino_V3'];?></a>
                                <p><?php echo $lang['Gold_p'];?></p>
                                <ul class="fantasy_list">
                                <li><?php echo $lang['Gold_li1'];?> <img alt="" src="images/check.png"></li>
                                <li><?php echo $lang['Gold_li2'];?> <img alt="" src="images/check.png"></li>
                                <li><?php echo $lang['Gold_li3'];?> <img alt="" src="images/check.png"></li>
                                <li><?php echo $lang['Gold_li4'];?> <img alt="" src="images/check.png"></li>
								<li><?php echo $lang['Gold_li5'];?> <img alt="" src="images/check.png"></li>
                                <li><?php echo $lang['Gold_li6'];?> <img alt="" src="images/check.png"></li>
								<li><span><?php echo $lang['Gold_li7'];?> <img alt="" src="images/check.png"></span></li>
								<li><?php echo $lang['Gold_li8'];?> <img alt="" src="images/check.png"></li>
                                </ul><br>
                <a href="https://casinosoft.vip/whmcs/cart.php?a=add&pid=3" class="theme_btn"><?php echo $lang['BUY_NOW'];?></a></center>
                            </div>
                        </div>  
                    </div>
                </div>
                <div class="tab-pane fade" id="premium" role="tabpanel"> 
                    <div class="row pricing_row"> 
                        <div class="col-xl-4 col-md-6">
                            <div class="fantasy">  <center>
                                <span class="amount">$25000 USD<img alt="" src="images/platinum-3.png" width="70" height="71"></span>
                                <a href="#" class="heding"><?php echo $lang['Platinum_Casino'];?></a>
                                <p><?php echo $lang['Platinum_p'];?></p>
                                <ul class="fantasy_list">
                                <li><?php echo $lang['Platinum_li1'];?> <img alt="" src="images/cross.png"></li>
								<li><?php echo $lang['Platinum_li2'];?> <img alt="" src="images/check.png"></li>
                                <li><?php echo $lang['Platinum_li3'];?> <img alt="" src="images/check.png"></li>
                                <li><?php echo $lang['Platinum_li4'];?> <img alt="" src="images/check.png"></li>
                                <li><?php echo $lang['Platinum_li5'];?> <img alt="" src="images/check.png"></li>
                                <li><?php echo $lang['Platinum_li6'];?> <img alt="" src="images/check.png"></li>
                                <li><?php echo $lang['Platinum_li7'];?> <img alt="" src="images/check.png"></li>
                                <li><?php echo $lang['Platinum_li8'];?> <img alt="" src="images/check.png"></li>
								<li><span><?php echo $lang['Platinum_li9'];?> <img alt="" src="images/check.png"></span></li>
								<li><?php echo $lang['Platinum_li10'];?> <img alt="" src="images/check.png"></li>
                                </ul><br>
                <a href="https://casinosoft.vip/whmcs/cart.php?a=add&pid=4" class="theme_btn"><?php echo $lang['BUY_NOW'];?></a></center>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="fantasy fantasy_2">  <center>
                                <span class="amount"><?php echo $lang['MEGA'];?> <img alt="" src="images/platinum-3.png" width="70" height="71"></span>
                                <a href="#" class="heding"><?php echo $lang['Premium'];?></a>
                                <p><?php echo $lang['Premium_p'];?></p>
                                <ul class="fantasy_list">
                                <li><?php echo $lang['Premium_li1'];?> <img alt="" src="images/check.png"></li>
                                <li><?php echo $lang['Premium_li2'];?> <img alt="" src="images/check.png"></li>
                                <li><?php echo $lang['Premium_li3'];?> <img alt="" src="images/check.png"></li>
                                <li><?php echo $lang['Premium_li4'];?> <img alt="" src="images/check.png"></li>
                                <li><?php echo $lang['Premium_li5'];?> <img alt="" src="images/check.png"></li>
                                <li><?php echo $lang['Premium_li6'];?> <img alt="" src="images/check.png"></li>
                                <li><?php echo $lang['Premium_li7'];?> <img alt="" src="images/check.png"></li>
                                <li><?php echo $lang['Premium_li8'];?> <img alt="" src="images/check.png"></li>
                                <li><?php echo $lang['Premium_li9'];?> <img alt="" src="images/check.png"></li>
								<li><span><?php echo $lang['Premium_li10'];?> <img alt="" src="images/check.png"></span></li>
								<li><?php echo $lang['Premium_li11'];?> <img alt="" src="images/check.png"></li>
                                </ul><br>
                <a href="https://casinosoft.vip/whmcs/contact.php" class="theme_btn"><?php echo $lang['GET_PROPOSAL'];?></a></center>
                            </div>
                        </div>  
                        <div class="col-xl-4 col-md-6"><center>
                            <div class="fantasy fantasy_3">  
                                <span class="amount"><?php echo $lang['Ultra'];?> <img alt="" src="images/platinum-3.png" width="70" height="71"></span>
                                <a href="#" class="heding"><?php echo $lang['Premium'];?></a>
                                <p><?php echo $lang['Premium_p'];?></p>
                                <ul class="fantasy_list">
                                <li><?php echo $lang['Premium_li1'];?> <img alt="" src="images/check.png"></li>
                                <li><?php echo $lang['Premium_li2'];?> <img alt="" src="images/check.png"></li>
                                <li><?php echo $lang['Premium_li3'];?> <img alt="" src="images/check.png"></li>
                                <li><?php echo $lang['Premium_li4'];?> <img alt="" src="images/check.png"></li>
                                <li><?php echo $lang['Premium_li5'];?> <img alt="" src="images/check.png"></li>
                                <li><?php echo $lang['Premium_li6'];?> <img alt="" src="images/check.png"></li>
                                <li><?php echo $lang['Premium_li7'];?> <img alt="" src="images/check.png"></li>
                                <li><?php echo $lang['Premium_li8'];?> <img alt="" src="images/check.png"></li>
                                <li><?php echo $lang['Premium_li9']?> <img alt="" src="images/check.png"></li>
								<li><span><?php echo $lang['Premium_li10'];?> <img alt="" src="images/check.png"></span></li>
								<li><?php echo $lang['Premium_li11'];?> <img alt="" src="images/check.png"></li>

                                </ul><br>
                <a href="https://casinosoft.vip/whmcs/contact.php" class="theme_btn"><?php echo $lang['GET_PROPOSAL'];?></a></center>
                            </div>
                        </div>  
                    </div>
                </div> 
            </div>
        </div>
    </section>
    <!-- End Pricing plan Area -->  
    
    <!-- Included in all plans -->  
    <section class="included_plans">
        <div class="container">
            <h2><?php echo $lang['Included_in_all_plans'];?></h2>
            <div class="row"> 
               <div class="col-lg-4 col-md-6">
                    <ul class="included_list">
                       <li> <?php echo $lang['Domain_for_your_casino'];?></li>
                       <li><?php echo $lang['Business_plan_advice'];?></li>
                    </ul>
               </div>
               <div class="col-lg-4 col-md-6 p-0">  
                    <ul class="included_list il_1">
                        <li><?php echo $lang['Hosting_server'];?></li>
                        <li><?php echo $lang['Access_to_future_updates'];?></li>
                    </ul>
               </div>
               <div class="col-lg-4 col-md-6"> 
                    <ul class="included_list il_2">
                        <li><?php echo $lang['Events'];?></li>
                       <li><?php echo $lang['Events_cont'];?></li>
                    </ul>
               </div>
            </div>
        </div>
    </section>
    <!-- End Included in all plans -->  
    
    <!-- Our Work Area --> 
    <section class="our_works_area">
        <div class="row">
            <div class="col-lg-7">
                <div class="work_img">
                   <div class="work_home_img">
                        <img src="images/work-1.jpg" alt="">
                   </div>
                    <img src="images/work-2.jpg" alt="" class="work_img_2">
                </div>
            </div>
            <div class="col-lg-5 work_contant">                 
                <div class="carousel slide work_slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <h4><?php echo $lang['Our_Work'];?></h4>
                            <h2><?php echo $lang['Our_Work_h2'];?></h2>
                            <p><?php echo $lang['Our_Work_p'];?></p>
                        </div>
                        <div class="carousel-item"> 
                            <h4><?php echo $lang['your_idea'];?></h4>
                            <h2><?php echo $lang['your_idea_h21'];?> <br><?php echo $lang['your_idea_h22'];?></h2>
                            <p><?php echo $lang['your_idea_p1'];?></p>
							<p><?php echo $lang['your_idea_p2'];?></p>
                        </div> 
                    </div>  
                    <ol class="carousel-indicators">
                        <li data-target=".work_slide" data-slide-to="0" class="active"></li>
                        <li data-target=".work_slide" data-slide-to="1"></li> 
                    </ol>
                </div> 
                
                <h4><?php echo $lang['Our_Values'];?></h4>
                <h2><?php echo $lang['Our_Values_h21'];?> <br> <?php echo $lang['Our_Values_h22'];?> </h2>
                <p><?php echo $lang['Our_Values_p'];?> </p>
            </div>  </div>
			<center>
			                       <img src="images/questions.png" alt="">
								    <div class="carousel-item active">
                            <h4><?php echo $lang['FAQ'];?></h4>
                            <h2><?php echo $lang['What_is_the_GCR'];?></h2>
                            <p><?php echo $lang['GCR1'];?><br>
                            <?php echo $lang['GCR2'];?></p>
								<br>
								<h2><?php echo $lang['FAQ2_title'];?></h2>
                            <p><?php echo $lang['FAQ2_p1'];?> <br> <?php echo $lang['FAQ2_p2'];?></p>
								<br>
								<h2><?php echo $lang['FAQ3_title'];?></h2>
                            <p><?php echo $lang['FAQ3_p1'];?> <br><?php echo $lang['FAQ3_p2'];?></p>
                        </div>
														   <a href="https://casinosoft.vip/whmcs/index.php?rp=/knowledgebase/1/Frequent-questions"><img src="images/learn_more.png" width="350" height="125" alt=""></a>



                                </center>
      
    </section>
    <!-- End Our Work Area --> 
    
    
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
                    <div class="language_select">
                        <select class="post_select" name="lang" id="lang" onchange="changeLang();">
                            <option value="english" <?php if(isset($_SESSION['lang']) && $_SESSION['lang'] == 'english'){ echo "selected"; } ?>>English (US)</option>
                            <option value="spanish" <?php if(isset($_SESSION['lang']) && $_SESSION['lang'] == 'spanish'){ echo "selected"; } ?>>Español</option>
                        </select>
                    </div>
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
        $.ajax({
            type:"POST",
            url:"<?php echo $_SERVER['PHP_SELF'];?>",
            data:{lang:lang},
            success:function () {
                location.reload();
            }
        });
    });

    function changeLang() {
        let lang = $('#lang').val();
        $.ajax({
            type:"POST",
            url:"<?php echo $_SERVER['PHP_SELF'];?>",
            data:{lang:lang},
            success:function () {
                location.reload();
            }
        });
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