<?php
//    if(!session_id()) {
//        session_start();
//    }
session_start();

?>
<!DOCTYPE html>
<html>
<title><?php wp_title(''); ?></title>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo get_bloginfo ( 'template_url' ); ?>/css/custom-michael.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo get_bloginfo ( 'template_url' ); ?>/css/custom-list.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
     <script src="<?php echo JS; ?>/jquery.min.js"></script>
    <script src="<?php echo JS; ?>/respond.min.js"></script>
    <script src="<?php echo JS; ?>/custom-michael.js"></script>
    <script src="<?php echo JS; ?>/tops.js"></script>
    <script src="<?php echo JS; ?>/bootstrap.min.js"></script>
    <?php wp_head(); ?>
</head>
<body>
<div id="mainWrapper">

        <input type="hidden" id = "updateAccount" value="<?php  echo get_site_url();?>/update-account">
        <input type="hidden" id = "homePage" value="<?php  echo get_site_url();?>/home">
    <input type="hidden" id = "testDebugging" value="<?php  echo get_site_url();?>/test-debugging">
    <input type="hidden" id = "dataBaser" value="<?php  echo get_site_url(); ?>/database">
    <input type="hidden" id = "fileDragUpload" value="<?php echo get_site_url(); ?>/filedragupload">
    <input type="hidden" id = "listanitem" value="<?php echo get_site_url(); ?>/listanitem">

	<div class="top-info" style = "display:block;background-color: white">
        <div class='container'>
        <!--this is for sign up-->
        <div class="container" style="/*width: 100%;right: 6%;*/position: relative;text-align: center;">
        <!--this is for sign in -->
        <!-- Trigger the modal with a button -->
        <a style = "    font-size: 24px;color:black;font-family: 'AvenirNextLTW01-UltraLight' !important; text-decoration: none;font-size: 20px" data-toggle="modal" data-target="#myModal2">Sign in</a> <p style="color:#19b0c6;display: inline-block;">or</p>

        <!-- Modal -->
        <div class="modal fade" id="myModal2" role="dialog">
            <div class="modal-dialog modal-col-width">
                <!-- Modal content-->
                <div class="modal-content modal-sub-content">
                    <div class="modal-header modal-signup-for-h4-and-p">
                        <button type="button" class="close" data-dismiss="modal" style="font-size: 28px;opacity: 10;position: relative;left: 17px;">
                            &times;
                        </button>
                        <h4 class="modal-title" style="letter-spacing: 0px;margin-top: 20px;">
                            Login to your Account
                        </h4>

                        <p style="text-align: center;font-family: 'AvenirNextLTW01-UltraLight', 'Didot', 'Didot Regular & Avenir Next Medium' !important;color: black;list-style-type: none;font-weight: bolder;
    margin-right: 16px;
    color: #000 !important;
    text-decoration: none;
    font-size: 16px;
    letter-spacing: 2px;">
                            Don't have an account?
                            <span>
                                <a href = "#">
                                    Sign up now
                                </a>
                            </span>
                        </p>
                    </div>
                    <div class="modal-body" style="height: auto;padding: 0;">
                        <form role="form" method = "POST" action = "" style="margin:0px">
                            <div class="col-lg-12  col-md-12 col-sm-12 col-xs-12 sign-ing-cls ">
                                <div class="form-group ">
                                    <label for="email-signIn" >
                                        Email
                                    </label>
                                    <input type="email" name = "user_name" class="form-control" id="email-signIn"  >
                                </div>
                                <div class="form-group">
                                    <label for="pass-signIn" >Password</label>
                                    <input type="password" class="form-control" id="pass-signIn"  >

                                </div>
                                <div class="form-group">
                                    <label for="pwd" style = " color: #ccc !important;  ">I forgot my password!</label>
                                    <button type="button" id = "login_now" value = "login_now" onclick = "MyNewSgnIn();" class="btn btn-primary btn-lg form-sub" style="font-size:14px !important;padding: 10px 30px !important;position: relative; top: -26px;font-family: 'AvenirNextLTW01-UltraLight' !important;">LOG IN</button>
                                    <div id = "sigInDemo" style = "color: red"></div>
                                    <input type = "hidden" id = "updated_acc" style = "color: red"></input>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div style="clear:both">  </div>
                    <div class="modal-footer">
                        <div class = "modal-fr" style="margin-top: -30px;margin-bottom: 20px;">
                            <p  style = "
                                font-family: 'AvenirNextLTW01-UltraLight', 'Didot', 'Didot Regular & Avenir Next Medium' !important;
                            color: black;
                            list-style-type: none;
                            font-weight: bolder;
                            margin-right: 0px !important;
                            margin-left: 0px !important;
                            color: #000 !important;
                                line-height: 25px;
                            text-decoration: none;
                            font-size: 16px;
                            letter-spacing: 2px;position: inherit;top: -15px !important;">By creating an account, I accept Life After Purchase's
                                <span>
                                    <a href = "#">
                                        Terms of Service
                                    </a>
                                </span>
                                and
                                <span>
                                    <a href = "#">
                                        Privacy Policy
                                    </a>
                                </span>
                            </p>
                        </div>
                        <!--<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
                    </div>
                </div>
            </div>
        </div>

        <!-- Trigger the modal with a button -->
            <a style = "font-size: 24px;color:black;font-family: 'AvenirNextLTW01-UltraLight' !important; text-decoration: none;font-size: 20px" class=" " data-toggle="modal" data-target="#myModal1">Sign up</a>

            <!-- Modal -->
            <div class="modal fade" id="myModal1" role="dialog">
                <div class="modal-dialog modal-for-width">
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header modal-signup-for-h4-and-p">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title" >SIGN UP <i>to</i> CONSIGN</h4>
                            <p>Life After Purchase is a easy and convenient way to sell your new and used goods.</p>
                        </div>
                        <div class="modal-body modal-signup-p" style="padding-bottom: 0px;">
                            <form role="form" method = "POST" action = "">
                                <div  class="col-lg-6 col-md-6 col-sm-6 col-xs-12 column-padds-leftright " style="padding-left: 0px;" >
                                    <div class="form-group">
                                        <label for="user_name" class = "column-margnbotops">First Name</label>
                                        <input type="text" name = "user_name" class="form-control" id="user_name" required ="field">
                                    </div>
                                    <div class="form-group">
                                        <label for="user_email" class = "column-margnbotops"  >Email</label>
                                        <input type="email" name = "user_email" class="form-control" id="user_email" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="promo_code" class = "column-margnbotops" >Promo Code</label>
                                        <input type="number" name = "user_promocode"  class="form-control" id="promo_code">
                                    </div>
                                </div>
                                <div class="col-lg-6  col-md-6 col-sm-6 col-xs-12 column-padds-leftright pads-right" >
                                    <div class="form-group">
                                        <label for="usr" class = "column-margnbots" style="margin-bottom: -21px;">Gender</label><br>
                                        <div class = "gender-col" ">
                                        <label class="checkbox-inline">
                                            <input type="checkbox"  class = "btn-check " value = "Male" rel = "check1" id = "check1" name="user_gender">Male
                                        </label>
                                        <label class="checkbox-inline">
                                            <input type="checkbox" class = "btn-check "  value = "Female" rel = "check2" id = "check2" name="user_gender">Female
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="pwd" class = "column-margnbotops">Password:</label>
                                    <input type="password" name = "user_pass" class="form-control" id="user_password">
                                </div>
                                <div class="form-group">
                                    <label for="sbt" class = "column-margnbotops">Already have an account?</label>
                                    <button type = "button" onclick = "MyNewSgnUp()" value = "join_now" name = "button-signUp" class="btn-check form-control form-sub" id="join_now" >JOIN NOW</button>
                                    <div id = "demoSignUp"></div>
                                </div>
                            </div>
                        </form>
                        <div style="clear:both">  </div>
                        <p>By creating an account, I accept Life After Purchase's <span><a href = "#" style = "color:red">Terms of Service</a></span> and <span><a href = "#" style = "color:red">Privacy Policy</a></span></p>
                        <!--<button type="button" class="btn btn-default" data-dismiss="modal"> Close</button>-->
                    </div>
                </div>

            </div>
        </div>
        </div>
        <!--    <div class="col-md-6"><p>UP TO 80% OFF MEN AND WOMEN’S APPAREL, SHOES, ACCESSORIES AND HOME GOODS </p></div>
            <div class="col-md-6"><p>CONTACT:  SERVICE@LIFEAFTERPURCHASE.COM - PHONE: 1800 - 238 - 3938</p></div>
        </div>
    </div>

	<div class="">   
		<!--this is the class uk-container uk-container-center content fix-height-->
        <div class="uk-grid uk-grid-collapse">
            <div class="uk-width-large-1-1 uk-width-medium-1-1 uk-width-small-1-1 afterPurchase head-pad-top">
				<a href="<?php echo SITEURL; ?>/landing-page/"><h1 class = "column-header-logo" style = "    margin-top: 0px;/*font-size: 75px;*/"><b>LIFE AFTER</b> PURCHASE</h1></a>
				<h2 class = "sub-header-title column-margnbotops font-column-subheader"> "SUSTAINING PEOPLE. SUSTAINING PRODUCTS." </h2>
			</div>
			<!-- end of uk width 1-1 -->
           
			<div class="navigation" id="sticker"><!-- navigation menu -->
                 <div class="title-collapse"><p><b>LIFE AFTER</b> PURCHASE</p></div><div  id="icons"><span class="glyphicon glyphicon-align-justify"></span></div>
				<div class="clear"></div> 
                <ul class="slide_down menu-bars" style = "    padding: 12px !important; background-color: #000;">

                    <?php

                        if( is_page( array( 'listanitem', 'home', 'update-account' ))){ ?>

                            <li><a href="home">HOME</a></li>

                            <li><a href = '<?php  echo get_site_url();?>/listanitem'>LIST AN ITEM</a></li>

                            <li style = "border-right:0px solid black !important;"><a href = 'update-account'>UPDATE ACCOUNT</a></li>
                    <?php
                        }else {
                            ?>

                            <li><a href="http://lifeafterpurchase.com/landing-page/#what-consign2">EVENT INFO</a></li>

                            <li><a href="http://lifeafterpurchase.com/landing-page/#start-reducing2">HOW TO CONSIGN</a></li>

                            <li><a href="http://lifeafterpurchase.com/landing-page/#consign2">WHY CONSIGN?</a></li>

                            <li><a href="http://lifeafterpurchase.com/landing-page/#profit2">POTENTIAL PROFIT</a></li>

                            <li><a href="http://lifeafterpurchase.com/landing-page/#accept2">WHAT WE ACCEPT</a></li>

                            <li><a href="http://lifeafterpurchase.com/desired-items-1?id=1">SELLING GUIDE</a></li>

                            <li><a href="http://lifeafterpurchase.com/landing-page/#con-shop-ven2">EVENT FAQ'S</a></li>

                            <li style="border: none !important;"><a href="http://lifeafterpurchase.com/landing-page/#about-us2">ABOUT US</a></li>


                            <?php
                        }
                        ?>




				</ul>

			</div>










		</div><!-- end of life after purchase -->
	</div>	