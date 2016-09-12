<!-- <!DOCTYPE html> -->
<html>
<title><?php wp_title(''); ?></title>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> 
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script src="<?php echo JS; ?>/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.2/css/font-awesome.min.css"><!-- STEPHEN -->
<link href="//db.onlinewebfonts.com/c/ffd0dcc47a9002be89cc7f900d4e144f?family=AvenirNextLTW01-UltraLight" rel="stylesheet" type="text/css"/><!-- WEB FONT -->
<link rel="stylesheet" type="text/css" href="<?php echo get_bloginfo ( 'template_url' ); ?>/css/custom-michael.css" /> 
<link rel="stylesheet" type="text/css" href="<?php echo get_bloginfo ( 'template_url' ); ?>/css/custom-mike.css" /> 
<style>/*STEPHENR*/
    .boxBuyerInput
    {
         border: 2px solid #c3c3c3;
         padding:15 0px;
         display:inline;
         font-size:20px;
         min-width:100px;
         width:100%;
         text-align:center;
    }
    .dollarSign
    {
        position:absolute;
        z-index:9999;
        font-size:20px;
        top:17px;
        left:20px;
    }
    .showBorder
    {
        border:2px solid black;
    }
    i.stephen-icons
    {
         display: inline-block;
          border-radius: 60px;
          padding:10px;
          margin-bottom:15px;
          border: 2px solid #00a8e6;
    }
    .fa-money {
      color: gray;
    }
    .fa-check
    {
        color:gray;
    }
    .button-add > img
    {
        height:40px;
        width:40px;
        margin-left:10px;
        margin-top:-10px;
    }
     .stephen-nav-center {
      text-align: center;
    }
    .stephen-nav-center ul.nav {
      display: inline-block;
      width:100%;
    }
    .stephen-nav-center ul.nav li {
          display: inline-block;
    float: none;
	  margin-left: 40px;
    }
    .stephen-nav-center ul.nav li a
    {
        font-size:18px;
        padding-left: 30px;
  	    padding-right: 30px;
    }
    .slide_down li
    {
        border-right:1px solid black;
    }
    div.text1 p
    {
        font-family: "AvenirNextLTW01-UltraLight";
        font-size:18px ;
        
    }
    div.text2 p
    {
        font-family: "AvenirNextLTW01-UltraLight";
        font-size:18px ;
        
    }
    div.text3 p
    {
        font-family: "AvenirNextLTW01-UltraLight";
        font-size:18px ;
        
    }
    a.button-add
    {
    	border: 2px solid #CAA46B;
	    background-color: #cbab7a;
	    padding: 18px;
	    margin-left: -4px;
	    color: white;
	    font-weight: 500;
	    font-size: 18px;

    }
    a.button-add:hover
    {
    	text-decoration: none;
    	background-color:#CAA46B;
    }
</style>


<?php wp_head(); ?>
</head>
<body>

<div id="mainWrapper">
    <!--

    <div class="top-info">
        <div class='container'>
            <div class="col-md-6"><p>UP TO 80% OFF MEN AND WOMEN’S APPAREL, SHOES, ACCESSORIES AND HOME GOODS </p></div>
            <div class="col-md-6"><p>CONTACT:  SERVICE@LIFEAFTERPURCHASE.COM - PHONE: 1800 - 238 - 3938</p></div>
        </div>
    </div>
    -->

    <div class="">  
    <!--uk-container uk-container-center content fix-height--> 
        <div class="uk-grid uk-grid-collapse">
            <div class="uk-width-large-1-1 uk-width-medium-1-1 uk-width-small-1-1 afterPurchase" id = "SUSTAINING">                 
                <h1><b>LIFE AFTER</b> PURCHASE</h1>             
                <h2> "SUSTAINING PEOPLE. SUSTAINING PRODUCTS." </h2>
            </div>
            <!-- end of uk width 1-1 -->
           
            <div class="navigation" id="sticker"><!-- navigation menu -->
                 <div class="title-collapse"><p><b>LIFE AFTER</b> PURCHASE</p></div><div  id="icons"><span class="glyphicon glyphicon-align-justify"></span></div>
                <div class="clear"></div>
                <ul class="slide_down menu-bars" style = "    padding: 12px !important; background-color: #000;">
                    <li><a href="what-consign">EVENT INFO</a></li>

                    <li><a href="start-reducing">HOW TO CONSIGN</a></li>
    
                    <li><a href="consign">WHY CONSIGN?</a></li>

                    <li><a href="profit">POTENTIAL PROFIT</a></li>
        
                    <li><a href="accept">WHAT WE ACCEPT</a></li>

                    <li><a href="desired-items-1?id=1">SELLING GUIDE</a></li>
                    
                    <li><a href="con-shop-ven">EVENT FAQ'S</a></li>

                    <li><a href="about-us">ABOUT US</a></li> 
                </ul>

            </div>

        </div><!-- end of life after purchase -->
        
        
        <div class="container uk-width-large-1-1 uk-width-medium-1-1 uk-width-small-1-1 afterPurchaseResale">
            <article class="uk-width-large-1-1 uk-width-medium-1-1 uk-width-small-1-1 afterPurchaseContent afterPurchaseSubClass">
                <h4 class = "h-f-content">REDEFINING RESALE</h4>
                <p class = "p-f-content">Sign up to consign your new or gently used clothing, accessories and home goods at our resale event. Shoppers sign up to get notified the event date.
                    Consigner spots are limited so sign up now! <b class="highlight" >DEADLINE TO CONSIGN IS MAY 18TH, 2016</b></p>
                <div class="uk-grid uk-grid-collapse consignerBuyer">
                    <div class="uk-width-large-1-2 uk-width-medium-1-2 uk-width-small-1-1">
                        <a href="<?php echo SITEURL; ?>/new-consign/#newConsign" class="uk-button uk-float-right buttonConsigner btn2Consigner">CONSIGN NOW</a>                      
                    </div><!-- end of width 1-2 -->
                    <div class="uk-width-large-1-2 uk-width-medium-1-2 uk-width-small-1-1">
                        <a href="<?php echo SITEURL; ?>/new-shopper/#newShopper" class="uk-button uk-float-left buttonBuyer btn2Buyer" >GET NOTIFIED</a>
                    </div><!-- end of width 1-2 -->
                </div><!-- end onf consigner buyer -->                
            </article><!-- end of purchase content -->
            
        </div><!--end of resale -->         
    </div><!-- end of content -->    


<!-- fsheen -->
    <div id="what-consign2" id="consign2" style="display:block;position:relative;top:-50px;visibility:hidden;"></div>
    <article class = "div-container">
        <div class="container ">
            <div class="row first_section">             
             <div class = "w-c-s-column" style="margin-bottom:100px;">
                <h4 class="text-center consign-sale-a" style="color:black;" ><span style="color:black;" id = "what-consign">WHAT'S A CONSIGNMENT SALE?</span></h4>             
                <p class="text-left pw-c-s-column1 text-lp">A consignment sale is a 3 day event where you sale,  shop and save on new and gently used men and women clothing, shoes, accessories and home goods.</p>
                <p class="text-left pw-c-s-column" >Shopping a consignment event is a great way to shop high quality name brand items at <b>25-70%</b> off retail! Selling your items at the event is amazingly easy.  As a consignor you register to sale your items. With our tiered commission structure, you can earn as much as <b>50%-80%</b> of the selling price. Prior to the sale you, the consignor, simply register and submit your items online for approval. You deliver your items to us prior to the event for inspection. We advertise, set up the location for the sale, set up all consigned items at the sale site, and sell your items!</p>
                <div class="border-right brd-right"></div>     
            </div>
 
            <div class="container-fluid row-column3">
                <div class="row row-col21">
                    <!--    
                    <div class="col-sm-4 wp-private-resale"  >  
                        <div class = "text1" >  
                            <h5> PRIVATE PRESALE</h5> 
                            <p class = "q-l-private">Score the best items by shopping before the public!</p></br>
                            <h5 class="text-center a-private"  style = "font-family:'AvenirNextLTW01-UltraLight' !important">Thusday, June 23rd 2016</h5> 
                            <p>Get in Before the public </br>Available to Anyone <br/>for Purcahse <br/>Passes required for everyone 13+</p> 
                            <h5 class="text-center m-private" style = "font-family:'AvenirNextLTW01-UltraLight' !important">Tickets are NON-REFUNDABLE</h5>  <br/><br/>
                            <h5 class="text-center b-private" style = "font-family:'AvenirNextLTW01-UltraLight' !important">Cost: $10.00-$20.00</h5></br> 
                            <a href="#" class="">BUY A TICKET</a>   
                        </div>
                    </div>
                    <div class="col-sm-4 wp-private-resale" >  
                        <div class = "text2" style = "background:#ff6600 !important;"> 
                            <h5 class="text-center " >PUBLIC SHOPPING</h5>
                            <p>Shop the entire site for the best deals.</p></br>
                            <h5 class="text-center c-private" style = "font-family:AvenirNextLTW01-UltraLight !important">Friday, June 24th</h5>
                            <p>9am-7pm</p></br>
                            <h5 class="text-center d-private" style = "font-family:AvenirNextLTW01-UltraLight !important">Saturday, June 25th</h5>
                            <p class = "e-p-private">9am-5pm</p>
                            <p>15% off Many Items</p></br>
                            <h5 class="text-center f-private" style = "font-family:AvenirNextLTW01-UltraLight !important">Sunday, June 25th</h5>
                            <p class = "g-p-private" >9am-5pm</p>
                            <p >25% off Many Items</p><br/>
                            <a href="new-shopper" >GET NOTIFIED</a>   
                        </div>  
                    </div>
                    <div class="col-sm-4 wp-private-resale" >  
                        <div class = "text3"> 
                            <h5 class="text-center" style = "font-family: 'Didot'" >CONSIGNER DATES</h5>
                            <p class = "r-l-private">Sore the best deal by shopping before the public</p><br>
                            <h5 class="text-center h-private" style = "font-family:AvenirNextLTW01-UltraLight !important" >Tuesday, June 21st</h5>
                            <p class = "i-h-private">Merchantise Drop-Off - 12pm-8pm</p><br>
                            <h5 class="text-center j-private" style = "font-family:AvenirNextLTW01-UltraLight !important">Wednes day, April 21st</h5>
                            <p class = "k-p-private">Merchantise Drop-Off - 12pm-8pm</p><br>
                            <h5 class="text-center l-private" style = "font-family:AvenirNextLTW01-UltraLight !important">Sunday,April 24th</h5>
                            <p class = "l-p-private">Consignor Pick-up-4:30-7:30pm SHARP (no exceptions)</p><br> 
                            <a href="new-consign" class="">CONSIGN NOW</a>  
                            
                        </div>
                    </div>
                    -->
                    <div class="col-sm-4 wp-private-resale col1"  >
                        <div class = "texts1" > 
                            <h5 style = "font-family: 'Didot'" > PRIVATE PRESALE</h5> 
                            <p>Score the best items by shopping before the public!</p> 
                            <h5 style = "font-family:'AvenirNextLTW01-UltraLight' !important">Thusday, June 23rd 2016</h5> 
                            <p>Get in Before the public </p>
                            <p>Available to Anyone for Purcahse </p>
                            <p>Passes required for everyone 13+</p> 
                            <p>Tickets are NON-REFUNDABLE</p> 
                            <h5  class = "cost"style = "margin-bottom: 0px;padding-top: 68px;font-family:'AvenirNextLTW01-UltraLight' !important">Cost: $10.00-$20.00</h5> 
                            
                        </div>
                        <div class="footer" style = "background-color: #F3F3F3 !important; ">
                            <a href="#" class="footer1">
                                BUY A TICKET
                            </a>
                        </div>
                     </div> 
                    
                    <div class="col-sm-4 wp-private-resale col2"  >
                        <div class = "texts2" > 
                            <h5  style = "font-family: 'Didot'"  >PUBLIC SHOPPING</h5>
                            <p>Shop the entire site for the best deals.</p> 
                            <h5  style = "font-family:AvenirNextLTW01-UltraLight !important">Friday, June 24th</h5>
                            <p>9am-7pm</p> 
                            <h5  style = "font-family:AvenirNextLTW01-UltraLight !important">Saturday, June 25th</h5>
                            <p >9am-5pm</p>
                            <p>15% off Many Items</p> 
                            <h5 style = "font-family:AvenirNextLTW01-UltraLight !important">Sunday, June 25th</h5>
                            <p >9am-5pm</p>
                            <p >25% off Many Items</p> 
                            
                        </div>
                        <div class="footer" style = "background:#ff6600 !important;">
                            <a href="new-shopper" class="footer2">
                                GET NOTIFIED
                            </a> 
                        </div>
                    </div> 
                    
                    <div class="col-sm-4 wp-private-resale col3"  >
                        <div class = "texts3" > 
                            <h5 style = "font-family: 'Didot'" >CONSIGNER DATES</h5>
                            <p >Sore the best deal by shopping before the public</p> 
                            <h5 style = "font-family:AvenirNextLTW01-UltraLight !important" >Tuesday, June 21st</h5>
                            <p >Merchantise Drop-Off - 12pm-8pm</p> 
                            <h5 style = "font-family:AvenirNextLTW01-UltraLight !important">Wednes day, April 21st</h5>
                            <p >Merchantise Drop-Off - 12pm-8pm</p> 
                            <h5 style = "font-family:AvenirNextLTW01-UltraLight !important">Sunday,April 24th</h5>
                            <p>Consignor Pick-up-4:30-7:30pm</p><p> SHARP (no exceptions)</p> 
                            
                        </div>
                        <div class="footer" style = "background-color: #E8E8E8 !important;"> 
                            <a href="new-consign" class="footer3">
                                CONSIGN NOW
                            </a> 
                        </div>
                    </div> 
                </div>
            </div>
             <!--      
                <div class="col-md-6">
                    <h4 class="text-center"><span class="red">WHATS A CONSIGNMENT SALE?</span></h4>             
                    <p class="text-left">A consignment sale is a 3 day event where you sale,  shop and save on new and gently used men and women clothing, shoes, accessories and home goods.</p>
                    <p class="text-left">Shopping a consignment event is a great way to shop high quality name brand items at 40-80% off retail! Selling your items at the event is amazingly easy.  As a consignor you register to sale your items. You then receive 60% of the proceeds from the sale. Prior to the sale you, the consignor, simply register and submit your items online for approval. You deliver your items to us prior to the event for inspecton. We advertise, set up the location for the sale, set up all consigned items at the sale site, and sell your items!</p>
                    <div class="border-right">    
                    </div>
                </div>
              
                 <div class="col-md-6 gothic">
                    <h4 class="text-center"><span class="red">SHOP THE SUMMER SALE </span></h4>
                    <p>JUNE 20th - 23rd 2016</p>
                    <p>72-680 Dinah Shore Dr. <br/>Palm Desert, Ca 92211</p>
                    <p>ADMISSION: FREE</p>
                    <p>THURSDAY - 3PM-7PM<br/>
                        FRIDAY - 12PM-8PM<br/>
                        SATURDAY - 11AM-6PM<br/>
                        SUNDAY - 10AM-4PM
                    </p>    
                    <p>PAYMENT TYPES ACCEPTED: VISA, MASTERCARD, DISCOVER, AMEX</p>
                </div>
            -->
            </div>
        </div>
    </article> 
    <div id="start-reducing2"></div>
    <div class="uk-grid uk-grid-collapse start start-reduce-div" >
        <div class="uk-container uk-container-center content" >  
            <article class="titleHead">
                <h4 id="start-reducing" class = "strt-reducing">START REDUCING WHAT'S IN YOUR PLACE AND</br> START INCREASING WHAT'S IN YOUR POCKET.</h4>
            </article><!-- end of article -->
            <div class="uk-grid uk-grid-collapse  qouteWrapper qouteStrtReWrapper">
                <div class="uk-width-large-1-4 uk-width-medium-1-2 uk-width-small-1-1 quote paddingLeft-zero">
                    <p class="quoteNumber"><span class="red">1.</span></p>
                    <p class="fontSize-18px"><span class="white"><a >CONSIGN ITEMS</a></span></p>
                    <p><span class="quoteTextContent" style="padding-top:6px">Sign up and fill out basic information about your item, along with a  few photos. We will respond within <b>48</b> <br>hours.</span></p>
                    <p class="fontSize-18px" ><a data-toggle="modal" data-target="#consignItems">LEARN MORE</a></p>
                </div><!-- end of width 1-4 -->
                <div class="uk-width-large-1-4 uk-width-medium-1-2 uk-width-small-1-1 quote">
                    <p class="quoteNumber"><span class="red">2.</span></p>
                    <p class="fontSize-18px"><span class="white"><a  >REVIEW OUR OFFER</a></span></p>
                    <p><span class="quoteTextContent">We will let you know if we will accept your items and how much you could make. If you agree you then pay the <b>$15</b> non refundable consignor fee.</span></p>
                    <p class="fontSize-18px" ><a data-toggle="modal" data-target="#reviewOurOffer">LEARN MORE</a></p>
                </div><!-- end of width 1-4 -->
                <div class="uk-width-large-1-4 uk-width-medium-1-2 uk-width-small-1-1 quote">
                    <p class="quoteNumber"><span class="red">3.</span></p>
                    <p class="fontSize-18px"><span class="white"><a>RECIEVING ITEMS</a></span></p>
                    <p><span class="quoteTextContent">If you would like to move fowrard with consigning you can schedule a time to drop the item(s) off or you have your items picked up for an addition fee.</span></p>
                    <p class="fontSize-18px" ><a data-toggle="modal" data-target="#recievingItems">LEARN MORE</a></p>
                </div><!-- end of width 1-4 -->
                <div class="uk-width-large-1-4 uk-width-medium-1-2 uk-width-small-1-1 quote paddingRight-zero">
                    <p class="quoteNumber"><span class="red">4.</span></p>
                    <p class="fontSize-18px"><span class="white"><a>RECIEVE PAYMENT</a></span></p>
                    <p><span class="quoteTextContent">Once we inspected your item for authenticity and quality, we will prep items for the sale. Payment for sold items will be paid out within <b>7-14</b> days.</span></p>
                    <p class="fontSize-18px"  ><a data-toggle="modal" data-target="#recievePayment">LEARN MORE</a></p>
                </div><!-- end of width 1-4 -->
            <!-- MODAL FOR START REDUCING ~StephenR--> 
                <div class="modal fade" id="consignItems" role="dialog"><!-- CONSIGN ITEMS -->
                <div class="modal-dialog">                
                  <!-- Modal content-->
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <h4 class="modal-title">Instructions here.</h4>
                    </div>
                    <div class="modal-body">
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo harum quam doloremque quidem aliquid quibusdam ipsa ea qui ipsum eaque necessitatibus est quae accusamus modi, quisquam quasi! Ad, error enim.</p>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                  </div>
                  
                </div>
              </div>
              <div class="modal fade" id="reviewOurOffer" role="dialog"><!-- REVIEW OUR OFFER -->
                <div class="modal-dialog">                
                  <!-- Modal content-->
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <h4 class="modal-title">Instructions here.</h4>
                    </div>
                    <div class="modal-body">
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo harum quam doloremque quidem aliquid quibusdam ipsa ea qui ipsum eaque necessitatibus est quae accusamus modi, quisquam quasi! Ad, error enim.</p>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                  </div>
                  
                </div>
              </div>
              <div class="modal fade" id="recievingItems" role="dialog"><!-- RECIEVING ITEMS -->
                <div class="modal-dialog">                
                  <!-- Modal content-->
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <h4 class="modal-title">Instructions here.</h4>
                    </div>
                    <div class="modal-body">
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo harum quam doloremque quidem aliquid quibusdam ipsa ea qui ipsum eaque necessitatibus est quae accusamus modi, quisquam quasi! Ad, error enim.</p>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                  </div>
                  
                </div>
              </div>
              <div class="modal fade" id="recievePayment" role="dialog"><!-- RECIEVING PAYMENT -->
                <div class="modal-dialog">                
                  <!-- Modal content-->
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <h4 class="modal-title">Instructions here.</h4>
                    </div>
                    <div class="modal-body">
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo harum quam doloremque quidem aliquid quibusdam ipsa ea qui ipsum eaque necessitatibus est quae accusamus modi, quisquam quasi! Ad, error enim.</p>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                  </div>
                  
                </div>
              </div>
            <!-- MODAL FOR START REDUCING -->
            </div><!-- end of qoute wrapper -->
        </div><!-- end of content --> 
    </div><!-- end of start -->
    <div id="consign2" style="display:block;position:relative;top:-80px;visibility:hidden;"></div><!-- ~StephenR -->
    <div class="uk-grid uk-grid-collapse whyConsignWithUs" >
        <div class="uk-container uk-container-center content"> 
            <article class="titleHead">
                <h4><span class="black" id="consign">WHY BUY &amp; SELL AT A CONSIGNMENT EVENT?</span></h4>
            </article><!-- end of article -->
            <div class="uk-grid uk-grid-collapse consignWrapper">
                <div class="uk-width-large-1-3 uk-width-medium-1-2 uk-width-small-1-1">
                    <div class="uk-grid uk-grid-collapse servicesModule">
                        <div class="uk-width-large-1-4 uk-width-medium-1-2 uk-width-small-1-1">
                            <a ><img src="<?php echo IMG; ?>/onestop.png"></a>
                        </div>
                        <div class="uk-width-large-3-4 uk-width-medium-1-2 uk-width-small-1-1">
                            <p class="fontSize-17px" style="font-family:'Didot';letter-spacing:-1px;"><a><b>ONE STOP SHOP</b></a></p>
                            <p>Looking for clothing, accessories or home goods? Shop the hundreds of products on sale.</p>
                        </div>
                    </div><!-- end of uk grid -->
                </div><!-- end of width 1-3 -->
                <div class="uk-width-large-1-3 uk-width-medium-1-2 uk-width-small-1-1">
                    <div class="uk-grid uk-grid-collapse servicesModule">
                        <div class="uk-width-large-1-4 uk-width-medium-1-2 uk-width-small-1-1">
                            <a><img src="<?php echo IMG; ?>/deals.png"></a>
                        </div>
                        <div class="uk-width-large-3-4 uk-width-medium-1-2 uk-width-small-1-1">
                            <p class="fontSize-17px"><a style="font-family:'Didot';letter-spacing:-1px;"><b>GREAT DEALS</b></a></p>
                            <p>Maximize your money by buying new and gently used items that are 25-70% off the original price.</p>
                        </div>
                    </div><!-- end of uk grid -->
                </div><!-- end of width 1-3 -->
                <div class="uk-width-large-1-3 uk-width-medium-1-2 uk-width-small-1-1">
                    <div class="uk-grid uk-grid-collapse servicesModule">
                        <div class="uk-width-large-1-4 uk-width-medium-1-2 uk-width-small-1-1">
                            <a><img src="<?php echo IMG; ?>/handpickedItem.png"></a>
                        </div>
                        <div class="uk-width-large-3-4 uk-width-medium-1-2 uk-width-small-1-1">
                            <p class="fontSize-17px"><a style="font-family:'Didot';letter-spacing:-1px;"><b>HAND PICKED ITEMS</b></a></p>
                            <p>Shop items that have been hand picked and authenticated our team of fashion and design experts.</p>
                        </div>
                    </div><!-- end of uk grid -->
                </div><!-- end of width 1-3 -->
                <div class="uk-width-large-1-3 uk-width-medium-1-2 uk-width-small-1-1">
                    <div class="uk-grid uk-grid-collapse servicesModule">
                        <div class="uk-width-large-1-4 uk-width-medium-1-2 uk-width-small-1-1">
                            <a ><img src="<?php echo IMG; ?>/extraCash.png"></a>
                        </div>
                        <div class="uk-width-large-3-4 uk-width-medium-1-2 uk-width-small-1-1">
                            <p class="fontSize-17px"><a style="font-family:'Didot';letter-spacing:-1px;"><b>EXTRA CASH</b></a></p>
                            <p>Selling items that are high quality desired and in demand deems large profits.</p>
                        </div>
                    </div><!-- end of uk grid -->
                </div><!-- end of width 1-3 -->
                <div class="uk-width-large-1-3 uk-width-medium-1-2 uk-width-small-1-1">
                    <div class="uk-grid uk-grid-collapse servicesModule">
                        <div class="uk-width-large-1-4 uk-width-medium-1-2 uk-width-small-1-1">
                            <a ><img src="<?php echo IMG; ?>/convenience.png"></a>
                        </div>
                        <div class="uk-width-large-3-4 uk-width-medium-1-2 uk-width-small-1-1">
                            <p class="fontSize-17px"><a  style="font-family:'Didot';letter-spacing:-1px;"><b>CONVENIENCE</b></a></p>
                            <p>Save time on marketing and meeting up with potential buyers by consigning you items with us.</p>
                        </div>
                    </div><!-- end of uk grid -->
                </div><!-- end of width 1-3 -->
                <div class="uk-width-large-1-3 uk-width-medium-1-2 uk-width-small-1-1">
                    <div class="uk-grid uk-grid-collapse servicesModule">
                        <div class="uk-width-large-1-4 uk-width-medium-1-2 uk-width-small-1-1">
                            <a ><img src="<?php echo IMG; ?>/eye.png"></a>
                        </div>
                        <div class="uk-width-large-3-4 uk-width-medium-1-2 uk-width-small-1-1">
                            <p class="fontSize-17px"><a style="font-family:'Didot';letter-spacing:-1px;"><b>VISIBILITY</b></a></p>
                            <p>Get your items in front of people who are ready to buy. The more your items are seen, the better chance it will sale.</p>
                        </div>
                    </div><!-- end of uk grid -->
                </div><!-- end of width 1-3 -->
            </div><!-- end of consign wrapper -->
        </div><!-- end of content -->    
    </div><!-- end of consign -->
    <div id="profit2" style="display:block;position:relative;top:-50px;visibility:hidden;"></div>
    <div class="container">
        <article class="titleHead">
            <h4 id="profit"><span class="black">HOW MUCH YOU COULD MAKE?</span></h4>
            <h5 class = "tiered-commission">*With our tiered commission structure, you can earn as much as <strong>50 - 80%</strong> of the selling price for your items. <br> Enter the amount you will sell your item for to see how much you could make. </h5>
        </article><!-- end of article -->
         <!-- YOULL MAKE START-->
    <div class="row col-md-12" style="margin-top:10px;padding-bottom: 60px;">
        <div class="col-sm-6" style="padding-top:10%;padding-bottom:10%;background-color:#f2f2f2;"><!-- SELLING PRICE -->
            <i class="fa fa-2x fa-money stephen-icons" style="color:#00a8e6;" aria-hidden="true"></i>
            <h4><b>SELLING PRICE</b></h4>
            <input type="text" onkeyup="computeDays()" name="selling_price" id="selling_price" class="uk-block boxBuyerInput" value="" style="width:50%" placeholder="$0.00">
            <a class="button-add" id="button_add" onclick="clearField()">CLEAR<!-- <img src="<?php echo IMG; ?>/plus.png"  alt=""> --></a>
       		<h4 style="margin-top:30px;"><b><span id="showAddedPrice">$0</span> - <span id="showPercentage">0%</span> COMMISSION FEE</b></h4>
        </div>
        <div class="col-sm-6" style="padding-top:10%; padding-left: 0px;padding-right: 0px;"><!-- YOULL MAKE -->
            <i class="fa fa-2x fa-check stephen-icons" style="color:#00a8e6;" ></i>
            <h4><b>YOU'LL MAKE <i class="fa fa-2x fa-question-circle-o" style="color:#444;font-size:25px;margin-left:5px;cursor:pointer;" data-toggle="modal" data-target="#myModal"></i></b><!-- <img src="<?php echo IMG; ?>/questionmark.png" data-toggle="modal" data-target="#myModal" alt="" style="margin-top:-20px;margin-left:10px;cursor:pointer;" width="32" height="32"> --></h4>
            <!--MODAL START-->
                <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog">
                
                  <!-- Modal content-->
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <h4 class="modal-title">Instructions here.</h4>
                    </div>
                    <div class="modal-body">
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo harum quam doloremque quidem aliquid quibusdam ipsa ea qui ipsum eaque necessitatibus est quae accusamus modi, quisquam quasi! Ad, error enim.</p>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                  </div>
                  
                </div>
              </div>
            <!--MODAL END -->
            <div class="stephen-nav-center">
            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#day1">Day 1</a></li>
                <li><a data-toggle="tab" href="#day2">Day 2</a></li>
                <li><a data-toggle="tab" href="#day3">Day 3</a></li>
              </ul>
            </div>
              <div class="tab-content">
                <div id="day1" class="tab-pane fade in active">
                  <h3 id="day1field" style="margin-top:20px;">$0.00 </h3>                          
                </div>
                <div id="day2" class="tab-pane fade">
                  <h3 id="day2field" style="margin-top:20px;" >$0.00</h3>
                </div>
                <div id="day3" class="tab-pane fade">
                  <h3 id="day3field" style="margin-top:20px;">$0.00</h3>
                </div>
              </div>
        </div>
    </div>
    </div>
    <!-- SCRIPT FOR YOULL MAKE ~StephenR -->
    <script>
    //FOR CLEARING FIELDS
    function clearField(x)
    {
        var selling_price = document.getElementById("selling_price");
        var button_add = document.getElementById("button_add");
        var day1field = document.getElementById("day1field");
        var day2field = document.getElementById("day2field");
        var day3field = document.getElementById("day3field");
        var showAddedPrice = document.getElementById("showAddedPrice");
        var showPercentage = document.getElementById("showPercentage");
        if(selling_price.value != "")
        {
            selling_price.value = "";
            day1field.innerHTML = "$0.00";
            day2field.innerHTML = "$0.00";
            day3field.innerHTML = "$0.00";
            showAddedPrice.innerHTML = "$0.00";
            showPercentage.innerHTML = "0%";
        }

    }
    //FOR CALCULATIONS
    function computeDays()
    {
        var selling_price = document.getElementById("selling_price").value;
        var day1field = document.getElementById("day1field");
        var day2field = document.getElementById("day2field");
        var day3field = document.getElementById("day3field");
        var showPercentage = document.getElementById("showPercentage");
        var day1total = 0;
        var day2total = 0;
        var day3total = 0;
        var day2total_final = 0;
        var day3total_final = 0;
        var percentage = 0;
        var day2percentage = .15;
        var day3percentage = .30;
        var showAddedPrice = document.getElementById("showAddedPrice");
        showAddedPrice.innerHTML = "$"+parseInt(selling_price).toFixed(2); //COMMISSION FEE PART
        day1Output = selling_price*.80;
        day1field.innerHTML="$"+parseInt(day1Output).toFixed(2)+" / <span style='color:red;'>Discounted 0%</span>";
        //COMMISSION FEE PERCENTAGE
        if(selling_price >= 500)
        {       
            showPercentage.innerHTML="20%";
        }else
         if(selling_price >= 350)
        {           
        	showPercentage.innerHTML="30%";
        }else
        if(selling_price >= 200)
        {            
        	showPercentage.innerHTML="40%";
        }else
        if(selling_price >= 20)
        {           
       		showPercentage.innerHTML="50%";
        }

        //day 2 calculation
        var day_2_initial = selling_price*day2percentage; //Percentage calculation 15%
        var day_2_category = selling_price-day_2_initial; //Generate answer to determine what category        
        if(day_2_category >= 500)
        {
            percentage = .80;
            day_2_total = day_2_category*percentage;
            day2field.innerHTML = day_2_total.toFixed(2)+" / <span style='color:red;'>Discounted 15%</span>";
        }else
         if(day_2_category >= 350)
        {
            percentage = .70;
            day_2_total = day_2_category*percentage;
            day2field.innerHTML = "$"+day_2_total.toFixed(2)+" / <span style='color:red;'>Discounted 15%</span>";
        
        }else
        if(day_2_category >= 200)
        {
            percentage = .60;
            day_2_total = day_2_category*percentage;
            day2field.innerHTML = "$"+day_2_total.toFixed(2)+" / <span style='color:red;'>Discounted 15%</span>";
        }else
        if(day_2_category >= 20)
        {
            percentage = .50;
            day_2_total = day_2_category*percentage;
            day2field.innerHTML = "$"+day_2_total.toFixed(2)+" / <span style='color:red;'>Discounted 15%</span>";
        }
        //day 3 calculation
        var day_3_initial = selling_price*day3percentage; //Percentage calculation 30%
        var day_3_category = selling_price-day_3_initial; //Generate answer to determine what category
        if(day_3_category >= 500)
        {
            percentage = .80;
            day_3_total = day_3_category*percentage;
            day3field.innerHTML = day_3_total.toFixed(2)+" / <span style='color:red;'>Discounted 30%</span>";
        }else
         if(day_3_category >= 350)
        {
            percentage = .70;
            day_3_total = day_3_category*percentage;
            day3field.innerHTML = "$"+day_3_total.toFixed(2)+" / <span style='color:red;'>Discounted 30%</span>";
        }else
        if(day_3_category >= 200)
        {
            percentage = .60;
            day_3_total = day_3_category*percentage;
            day3field.innerHTML = "$"+day_3_total.toFixed(2)+" / <span style='color:red;'>Discounted 30%</span>";
        }else
        if(day_3_category >= 20)
        {
            percentage = .50;
            day_3_total = day_3_category*percentage;
            day3field.innerHTML = "$"+day_3_total.toFixed(2)+" / <span style='color:red;'>Discounted 30%</span>";
        }



    }
    </script>
    
  <!-- YOULL MAKE END-->
  <div id="accept2" style="display:block;position:relative;top:270px;visibility:hidden;"></div>
    <div class="brands">
        <div class="uk-container uk-container-center content"> 
            <article class="titleHead">
                <h4><span class="black" id="accept">BRANDS WE ACCEPT</span></h4>
                <h5>*Our customers shop at stores like J Crew, Zara, Bloomindales, Karmaloop, Neiman Marcus and Z Gallerie.</h5>
            </article><!-- end of article --> 
            <div style = "margin:0px auto">
                <div class="uk-grid uk-grid-collapse brandTab "> 
                        <ul class="brandSelector" style = "width: 100%"data-uk-switcher="{connect:'#brandsContent'}">
                            
                                <div class="uk-width-large-1-2 uk-width-medium-1-2 uk-width-small-1-1 uk-float-left" style = "text-align: right;">
                                    <a href="javascript:void(0)" class="buttonWomen" data-uk-switcher-item="0">WOMEN</a>
                                </div> 
                        <!-- end of width 1-2 -->
                             
                                <div class="uk-width-large-1-2 uk-width-medium-1-2 uk-width-small-1-1 uk-float-right " style = "text-align: left;">
                                    <a href="javascript:void(0)" class="buttonMen" data-uk-switcher-item="0">MEN</a>
                                </div><!-- end of width 1-2 -->
                             
                        </ul>   
                    <!-- Start of Tab Content Here --> 
                        <ul class="uk-switcher " id="brandsContent">
                        <li>
                            <div id="brandsContent">
                                <div class="uk-grid uk-grid-collapse">
                                    <div class="uk-width-large-1-3 uk-width-medium-1-2 uk-width-small-1-1 brandHolder">
                                        <div class="brandWrapper">
                                            <p class="brandCategories">CASUAL BRANDS - W</p>
                                            <p class="brandShortInformation">Most items must retailed for  <span class="black">$50</span> or more
                                            </p>
                                            <ul class="brandNames" >
                                                <li>Alexander Wang</li>
                                                <li>Balenciaga</li>
                                                <li>Bottega Veneta</li>
                                                <li>Burberry</li>
                                                <li>Cartier</li>
                                                <li>Celine</li>
                                                <li>Chanel</li>
                                                <li>Chloe</li>
                                                <li>Christian Dior</li>
                                                <li>Coach</li>
                                                <li>Dolce & Gabbana</li>
                                                <li>Emilio Pucci</li>
                                                <li>Fendi</li>
                                                <li>Goyard</li>
                                                <li>Gucci</li> 
                                            </ul>
                                            <p class="footerInformation brandCategories"><a href="http://lifeafterpurchase.com/desired-items?id=1">DISIRED ITEMS</a></p>
                                        </div><!-- end of brand holder -->
                                    </div><!-- end of uk container -->
                                    <div class="uk-width-large-1-3 uk-width-medium-1-2 uk-width-small-1-1 brandHolder">
                                        <div class="brandWrapper">
                                            <p class="brandCategories">CHIC BRANDS</p>
                                            <p class="brandShortInformation">Most items must retailed for <span class="black">$50</span> or more 
                                            </p>
                                            <ul class="brandNames">
                                                <li>Alexander Wang</li>
                                                <li>Balenciaga</li>
                                                <li>Bottega Veneta</li>
                                                <li>Burberry</li>
                                                <li>Cartier</li>
                                                <li>Celine</li>
                                                <li>Chanel</li>
                                                <li>Chloe</li>
                                                <li>Christian Dior</li>
                                                <li>Coach</li>
                                                <li>Dolce & Gabbana</li>
                                                <li>Emilio Pucci</li>
                                                <li>Fendi</li>
                                                <li>Goyard</li>
                                                <li>Gucci</li>
                                            </ul>
                                            <p class="footerInformation brandCategories"><a href="http://lifeafterpurchase.com/desired-items?id=2">DISIRED ITEMS</a></p>
                                        </div><!-- end of brand holder -->
                                    </div><!-- end of uk container -->
                                    <div class="uk-width-large-1-3 uk-width-medium-1-2 uk-width-small-1-1 brandHolder">
                                        <div class="brandWrapper">
                                            <p class="brandCategories">PREPPY BRANDS</p>
                                            <p class="brandShortInformation">Most items must retailed for  <span class="black">$50</span> or more
                                            </p>
                                            <ul class="brandNames">
                                                <li>Alexander Wang</li>
                                                <li>Balenciaga</li>
                                                <li>Bottega Veneta</li>
                                                <li>Burberry</li>
                                                <li>Cartier</li>
                                                <li>Celine</li>
                                                <li>Chanel</li>
                                                <li>Chloe</li>
                                                <li>Christian Dior</li>
                                                <li>Coach</li>
                                                <li>Dolce & Gabbana</li>
                                                <li>Emilio Pucci</li>
                                                <li>Fendi</li>
                                                <li>Goyard</li>
                                                <li>Gucci</li>
                                            </ul>
                                            <p class="footerInformation brandCategories"><a href="http://lifeafterpurchase.com/desired-items?id=3">DISIRED ITEMS</a></p>
                                        </div><!-- end of brand holder -->
                                    </div><!-- end of uk container -->    
                                    <div class="uk-width-large-1-3 uk-width-medium-1-2 uk-width-small-1-1 brandHolder">
                                        <div class="brandWrapper">
                                            <p class="brandCategories">STREETWEAR BRANDS</p>
                                            <p class="brandShortInformation">Most items must retailed for <span class="black">$50</span> or more
                                            </p>
                                            <ul class="brandNames">
                                                <li>Alexander Wang</li>
                                                <li>Balenciaga</li>
                                                <li>Bottega Veneta</li>
                                                <li>Burberry</li>
                                                <li>Cartier</li>
                                                <li>Celine</li>
                                                <li>Chanel</li>
                                                <li>Chloe</li>
                                                <li>Christian Dior</li>
                                                <li>Coach</li>
                                                <li>Dolce & Gabbana</li>
                                                <li>Emilio Pucci</li>
                                                <li>Fendi</li>
                                                <li>Goyard</li>
                                                <li>Gucci</li>
                                            </ul>
                                            <p class="footerInformation brandCategories"><a href="http://lifeafterpurchase.com/desired-items?id=4">DISIRED ITEMS</a></p>
                                        </div><!-- end of brand holder -->
                                    </div><!-- end of uk container -->
                                    <div class="uk-width-large-1-3 uk-width-medium-1-2 uk-width-small-1-1 brandHolder">
                                        <div class="brandWrapper">
                                            <p class="brandCategories">DESIGNER BRANDS</p>
                                            <p class="brandShortInformation">Most items must retailed for <span class="black">$50</span> or more
                                            </p>
                                            <ul class="brandNames">
                                                <li>Alexander Wang</li>
                                                <li>Balenciaga</li>
                                                <li>Bottega Veneta</li>
                                                <li>Burberry</li>
                                                <li>Cartier</li>
                                                <li>Celine</li>
                                                <li>Chanel</li>
                                                <li>Chloe</li>
                                                <li>Christian Dior</li>
                                                <li>Coach</li>
                                                <li>Dolce & Gabbana</li>
                                                <li>Emilio Pucci</li>
                                                <li>Fendi</li>
                                                <li>Goyard</li>
                                                <li>Gucci</li>
                                            </ul>
                                            <p class="footerInformation brandCategories"><a href="http://lifeafterpurchase.com/desired-items?id=5">DISIRED ITEMS</a></p>
                                        </div><!-- end of brand holder -->
                                    </div><!-- end of uk container -->
                                    <div class="uk-width-large-1-3 uk-width-medium-1-2 uk-width-small-1-1 brandHolder">
                                        <div class="brandWrapper">
                                            <p class="brandCategories">HOME BRANDS</p>
                                            <p class="brandShortInformation">Most items must retailed for <span class="black">$50</span> or more
                                            </p>
                                            <ul class="brandNames">
                                                <li>Alexander Wang</li>
                                                <li>Balenciaga</li>
                                                <li>Bottega Veneta</li>
                                                <li>Burberry</li>
                                                <li>Cartier</li>
                                                <li>Celine</li>
                                                <li>Chanel</li>
                                                <li>Chloe</li>
                                                <li>Christian Dior</li>
                                                <li>Coach</li>
                                                <li>Dolce & Gabbana</li>
                                                <li>Emilio Pucci</li>
                                                <li>Fendi</li>
                                                <li>Goyard</li>
                                                <li>Gucci</li>
                                            </ul>
                                            <p class="footerInformation brandCategories"><a href="http://lifeafterpurchase.com/desired-items?id=6">DISIRED ITEMS</a></p>
                                        </div><!-- end of brand holder -->
                                    </div><!-- end of uk container --> 
                                </div><!-- end of uk-grid -->
                            </div><!-- End of WOMEN TAB -->
                        </li>
                        <li><!-- Start of MEN TAB -->
                            <div id="brandsContent">
                                <div class="uk-grid uk-grid-collapse">
                                    <div class="uk-width-large-1-3 uk-width-medium-1-2 uk-width-small-1-1 brandHolder">
                                        <div class="brandWrapper">
                                            <p class="brandCategories">CASUAL BRANDS</p>
                                            <p class="brandShortInformation">Most items must retailed for <span class="black">$50</span> or more 
                                            </p>
                                            <ul class="brandNames">
                                                <li>Alexander Wang</li>
                                                <li>Balenciaga</li>
                                                <li>Bottega Veneta</li>
                                                <li>Burberry</li>
                                                <li>Cartier</li>
                                                <li>Celine</li>
                                                <li>Chanel</li>
                                                <li>Chloe</li>
                                                <li>Christian Dior</li>
                                                <li>Coach</li>
                                                <li>Dolce & Gabbana</li>
                                                <li>Emilio Pucci</li>
                                                <li>Fendi</li>
                                                <li>Goyard</li>
                                                <li>Gucci</li>
                                            </ul>
                                            <p class="footerInformation brandCategories"><a href="http://lifeafterpurchase.com/desired-items?id=7">DISIRED ITEMS</a></p>
                                        </div><!-- end of brand holder -->
                                    </div><!-- end of uk container -->
                                    <div class="uk-width-large-1-3 uk-width-medium-1-2 uk-width-small-1-1 brandHolder">
                                        <div class="brandWrapper">
                                            <p class="brandCategories">MENSWEAR</p>
                                            <p class="brandShortInformation">Most items must retailed for <span class="black">$50</span> or more 
                                            </p>
                                            <ul class="brandNames">
                                                <li>Alexander Wang</li>
                                                <li>Balenciaga</li>
                                                <li>Bottega Veneta</li>
                                                <li>Burberry</li>
                                                <li>Cartier</li>
                                                <li>Celine</li>
                                                <li>Chanel</li>
                                                <li>Chloe</li>
                                                <li>Christian Dior</li>
                                                <li>Coach</li>
                                                <li>Dolce & Gabbana</li>
                                                <li>Emilio Pucci</li>
                                                <li>Fendi</li>
                                                <li>Goyard</li>
                                                <li>Gucci</li>
                                            </ul>
                                            <p class="footerInformation brandCategories"><a href="http://lifeafterpurchase.com/desired-items?id=8">DISIRED ITEMS</a></p>
                                        </div><!-- end of brand holder -->
                                    </div><!-- end of uk container -->
                                    <div class="uk-width-large-1-3 uk-width-medium-1-2 uk-width-small-1-1 brandHolder">
                                        <div class="brandWrapper">
                                            <p class="brandCategories">PREPPY BRANDS</p>
                                            <p class="brandShortInformation">Most items must retailed for <span class="black">$50</span> or more 
                                            </p>
                                            <ul class="brandNames">
                                                <li>Alexander Wang</li>
                                                <li>Balenciaga</li>
                                                <li>Bottega Veneta</li>
                                                <li>Burberry</li>
                                                <li>Cartier</li>
                                                <li>Celine</li>
                                                <li>Chanel</li>
                                                <li>Chloe</li>
                                                <li>Christian Dior</li>
                                                <li>Coach</li>
                                                <li>Dolce & Gabbana</li>
                                                <li>Emilio Pucci</li>
                                                <li>Fendi</li>
                                                <li>Goyard</li>
                                                <li>Gucci</li>
                                            </ul>
                                            <p class="footerInformation brandCategories"><a href="http://lifeafterpurchase.com/desired-items?id=9">DISIRED ITEMS</a></p>
                                        </div><!-- end of brand holder -->
                                    </div><!-- end of uk container -->    
                                    <div class="uk-width-large-1-3 uk-width-medium-1-2 uk-width-small-1-1 brandHolder">
                                        <div class="brandWrapper">
                                            <p class="brandCategories">STREETWEAR BRANDS</p>
                                            <p class="brandShortInformation">Most items must retailed for <span class="black">$50</span> or more
                                            </p>
                                            <ul class="brandNames">
                                                <li>Alexander Wang</li>
                                                <li>Balenciaga</li>
                                                <li>Bottega Veneta</li>
                                                <li>Burberry</li>
                                                <li>Cartier</li>
                                                <li>Celine</li>
                                                <li>Chanel</li>
                                                <li>Chloe</li>
                                                <li>Christian Dior</li>
                                                <li>Coach</li>
                                                <li>Dolce & Gabbana</li>
                                                <li>Emilio Pucci</li>
                                                <li>Fendi</li>
                                                <li>Goyard</li>
                                                <li>Gucci</li>
                                            </ul>
                                            <p class="footerInformation brandCategories"><a href="http://lifeafterpurchase.com/desired-items?id=10">DISIRED ITEMS</a></p>
                                        </div><!-- end of brand holder -->
                                    </div><!-- end of uk container -->
                                    <div class="uk-width-large-1-3 uk-width-medium-1-2 uk-width-small-1-1 brandHolder">
                                        <div class="brandWrapper">
                                            <p class="brandCategories">DESIGNER BRANDS</p>
                                            <p class="brandShortInformation">Most items must retailed for <span class="black">$50</span> or more 
                                            </p>
                                            <ul class="brandNames">
                                                <li>Alexander Wang</li>
                                                <li>Balenciaga</li>
                                                <li>Bottega Veneta</li>
                                                <li>Burberry</li>
                                                <li>Cartier</li>
                                                <li>Celine</li>
                                                <li>Chanel</li>
                                                <li>Chloe</li>
                                                <li>Christian Dior</li>
                                                <li>Coach</li>
                                                <li>Dolce & Gabbana</li>
                                                <li>Emilio Pucci</li>
                                                <li>Fendi</li>
                                                <li>Goyard</li>
                                                <li>Gucci</li>
                                            </ul>
                                            <p class="footerInformation brandCategories"><a href="http://lifeafterpurchase.com/desired-items?id=11">DISIRED ITEMS</a></p>
                                        </div><!-- end of brand holder -->
                                    </div><!-- end of uk container -->
                                    <div class="uk-width-large-1-3 uk-width-medium-1-2 uk-width-small-1-1 brandHolder">
                                        <div class="brandWrapper">
                                            <p class="brandCategories">HOME BRANDS</p>
                                            <p class="brandShortInformation">Most items must retailed for <span class="black">$50</span> or more 
                                            </p>
                                            <ul class="brandNames">
                                                <li>Alexander Wang</li>
                                                <li>Balenciaga</li>
                                                <li>Bottega Veneta</li>
                                                <li>Burberry</li>
                                                <li>Cartier</li>
                                                <li>Celine</li>
                                                <li>Chanel</li>
                                                <li>Chloe</li>
                                                <li>Christian Dior</li>
                                                <li>Coach</li>
                                                <li>Dolce & Gabbana</li>
                                                <li>Emilio Pucci</li>
                                                <li>Fendi</li>
                                                <li>Goyard</li>
                                                <li>Gucci</li>
                                            </ul>
                                            <p class="footerInformation brandCategories"><a href="http://lifeafterpurchase.com/desired-items?id=12">DISIRED ITEMS</a></p>
                                        </div><!-- end of brand holder -->
                                    </div><!-- end of uk container --> 
                                </div><!-- end of uk-grid -->
                            </div><!-- End of MEN TAB -->
                        </li>
                        </ul> 
                </div>
            <div> 
        </div><!-- End of brands Content -->
    </div><!-- End of brand -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
<script>
    $(document).ready(function(){ 
        $('#nav-first').hide(); 
        $('#con-shop-ven').click(function(){
            $('#nav-first').slideToggle(1000).css({
                padding:'50px 0px !important'
            });     
        });  
    });
</script>
    <article>
    <div id="con-shop-ven2" style="display:block;position:relative;top:-50px;visibility:hidden;"></div>
        <div class="c_s_f_v_info"> 
            <div class="container consigner_shoper_panel">
                <div class="row">
                    <h4 class = "c-s-ven"><span class="white" id = "con-shop-ven">CONSIGNERS, SHOPPERS AND VENDORS INFO</span></h4>
                </div>
            <div id = "nav-first">
                 <div class="row" >
                    <nav class="navfirst">
                        <ul>
                            <li class="active" rel="panel_first">CONSIGNERS</li>
                            <li rel="panel_second">SHOPPERS</li>
                            <li rel="panel_third">VENDORS</li>
                        </ul>
                    </nav>
                </div>
                
                <!--first panel-->
            
                <div class="panel_for_second_nav active" id="panel_first">
                    <div class="row">
                        <nav class="navsecond">
                            <ul>
                                <li class="active" rel="child_panel_1">ACCEPTED ITEMS</li>
                                <li class="child_panel" rel="child_panel_2 ">ITEMS PREP</li>
                                <li class="child_panel" rel="child_panel_3">DROP OFF GUIDE</li>
                                <li class="child_panel" rel="child_panel_4">FAQ’S</li>
                            </ul>
                        </nav>
                    </div >
                    <div class="devider"></div>
                    <div class="child_panel_main">
                        <div class="row items c_item_1 active" id="child_panel_1" style="padding:20px;">
                            <h2>ITEMS FOR LIFE AFTER PURCHASE CONSIGNER EVENTS</h2>
                            <p class="text-left">
                                Life After Purchase host a gently used consignment event. All items must be new or in new like condition free from signs of wear and tear, excessive use, no damage and in current style and trend to be accepted for our Sale(s). You will check in every item being sold at your selected appointment on your Drop off Day, any unacceptable items will be sent home with the consignor. This is for quality control purposes so that we maintain the highest level of quality items being sold at our events. Please understand that we do not mean to offend our consignors these high standards are in place to assure those shopping the event are purchasing gently used high quality items. <b>We reserve the right to refuse items that we feel are not acceptable</b>.
                            </p> 
                            <h3 class="text-left items-header">ACCEPTED ITEMS</h3>
                            <p class="text-left">
                                Our shoppers are mainly between the ages of 18-40 who are looking for items for clothes, shoes and accessories for everyday wear, work and special occasions. Shoppers are also looking for items to complete or dress up their home. 
                            </p> 
                            <h4 class="text-left">
                                <a href="#">
                                    Clothing
                                </a>
                            </h4> 
                            <p class="text-left">
                                Clothing sizes from Petite to Plus Size and Extra Small to Big &amp; Tall.<br/><br/>
                                Seasonally Appropriate Items<br/>
                                Spring/Summer Sale: No fall/winter clothes, shoes and accessories. <br/>
                                Fall/Winter Sale: No Spring/Summer clothes, shoes and accessories.
                                <br/><br/>
                                Due to the weather conditions in the Tampa Bay are we accept both short/long sleeve shirts, sandals, long pants/jeans, cotton sweaters/sweatshirts and light-weight jackets at both sales.
                            </p>   
                            <h4 class="text-left">
                                <a href="#">
                                    Shoes 
                                </a>
                            </h4>
                            <p class="text-left">
                                We accept all adult shoe sizes for both men and women.  
                            </p> 
                             <h4 class="text-left">
                                <a href="#"> 
                                    Bedding
                                </a>
                            </h4>
                            <p class="text-left">
                                Duvet Covers, Comforters, Sheets, Quilts &amp; Coverlets, Blankets &amp; Throws, Decorative Pillows and Bedding Basics. 
                            </p>
                             <h4 class="text-left">
                                <a href="#"> 
                                    Decor 
                                </a>
                            </h4>
                            <p class="text-left">
                                Lighting, Wall Art, Mirrors, Curtains &amp; Hardware, Accents, Pillows &amp; Throws
                                Picture Frames. 
                            </p> 
                             <h4 class="text-left">
                                <a href="#">  
                                    Dinning 
                                </a>
                            </h4>
                            <p class="text-left">
                                Dinnerware, Flatware, Glassware &amp; Stemware, Bar &amp; Wine Accessories, Serveware, Table Linen and Kitchen Accessories.
                            </p> 
                            <h4 class="text-left">
                                <a href="#"> 
                                    Furniture 
                                </a>
                            </h4>
                            <p class="text-left">
                                Coffee Tables, Ottomans, Stools, Entry Tables, Side Tables, Small Benches and Accent Tables. 
                            </p>    
                            <h4 class="text-left">
                                <a href="#"> 
                                   NOT ACCEPTED
                                </a>
                            </h4>
                            <p class="text-left"> 
                                We strive to offer Tampa Bay an unsurpassed opportunity to purchase gently used, high quality and brand name items at a fraction of the retail price. This is the very reason that Life After Purchase will not accept the following items.     
                                <br/><br/>
                                Clothing that is stained, faded, pilled, torn, has holes, missing or mismatched buttons or snaps, broken zippers or clothing with unpleasant odors..
                                <br/><br/>
                                Clothing that is older than 3 years or out of date styles.  Our Shoppers are looking for
                                brand name items in current style and trend. 
                                <br/><br/>
                                Shoes that are dirty, on the top, inside, and on the bottom/sole. They must be free of scuffs, stains, tears, or odors. Soles must be free of all debris. Shoes can't have laces that have pilling or breaks. 
                                <br/><br/>
                                No children clothes, shoes and accessories.
                                <br/><br/>
                                Undergarments. (bras or underwear) 
                                <br/><br/>
                                Items from Target, Kmart, Walmart, Forever 21, H&amp;M, Aeropostale, Traffic, Papaya, Rainbow or any clothing store that sells items that retailed. These brands retail "new" at affordable prices.  Because of this they are not likely sold a second time at these events. We do accept some items from H&amp;M, but do strongly suggest the item be priced low in order to sell unless it was apart of a collaboration collection.
                                <br/><br/>
                                Any furniture that is: ripped, dirty, scratched, has been broken and re-glued, unless done by a professional, has started to come apart and/or chip, has orders or water damage, loose veneer, deep scratches/ gouges, extensive scratches, discolorations, sun-fading, table leaves that aren't the same color as the table top, etc. Is not accepted. 
                                <br/><br/>
                                We do not accept bedding that is not new and in the original casing. All pieces of bedding must be included or stated as otherwise.
                                <br/><br/>    
                                We do not accept any home decor that is not new or in like new condition.
                                <br/><br/>
                                If we find any items do not meet these high quality standards for safety and quality purposes these items will not be accepted at drop-off.
                                <br/><br/> 
                                ~ If you have any questions about items you can consign please contact us at 
                                <br/>
                                <a href = "service@lifeafterpurchase.com">service@lifeafterpurchase.com </a>
                            </p> 
                        </div>
                        <div class="row items c_item_2" id="child_panel_2" style="padding:20px;">
                            <h2>
                               PREPPING YOUR ITEMS FOR CONSIGNMENT
                            </h2>
                            <p class="text-left">
                                When preparing your items be mindful that the better your items look the more likely they are to sell and the more money you will get for them. Thoroughly inspect the items you are including in the sale. Make sure they are in gently used condition free from damage and excessive wear.
                            </p>
                            <h4 class="text-left" >
                                <a href="#" >
                                    Remember if You Wouldn't Buy it, Don't Sell it.
                                </a>
                            </h4>
                            <span class="text-left" style="display: block;  font-size: 18px; font-family: GOTHIC1; color:#fff ; padding-left: 10px; ">
                                It's a good idea to keep a donation box close by when preparing your items. If you find an item is not something you would purchase or buy it is probably not suitable for the sale but best for donating to Goodwill or Salvation Army.
                            </span>

                            <h3 class="text-left items-header">
                                The following Guidelines will help you Prepare your items.
                            </h3>     

                            <h4 class="text-left">
                                <a href="#">
                                    Clothing 
                                </a>
                            </h4>
                            <p class="text-left">
                                Clothing needs to be carefully inspected. Accepted clothing cannot be stained, soiled, faded, pilled, torn, have holes, missing buttons or snaps, broken zippers or clothing that has unpleasant odors.
                                <br><br>
                                Freshly launder all garments removing all stains. Zip all zippers, fasten and snap all snaps. Replace missing buttons and button all items. 
                                <br><br>
                                Place all small accessories to be sold  (jewelry, belts or etc) in a zip-loc bag and secure with packaging tape. 
                            </p>
                            <h4 class="text-left">
                                <a href="#">
                                    Shoes
                                </a>
                            </h4>
                            <p class="text-left"> 
                                Shoes must be clean, on the top, inside, and on the bottom/sole. They must be in great condition free of scuffs, stains, tears, or odors. Soles must be free of all debris. Shoes must have laces free of pilling and or breaks. (Scuffs can be removed from shoes with Mr. Clean Magic Eraser). No shoeboxes will be allowed.
                            </p>
                            <h4 class="text-left">
                                <a href="#">
                                    Bedding &amp; Blankets
                                </a>
                            </h4>
                            <p class="text-left">
                                Must be freshly laundered. Free of stains, rips, and tears. Please note that you will be held liable for a refund in the event the item is damaged when removed from the bag (if noticed within the 1st 24 hours after purchase). All pieces of bedding must be included or stated as otherwise.Fold all bedding and blankets must be new and in it's original package.
                                <br/><br/>
                                All other items. Make sure to thoroughly clean and inspect all other items. ( accessories and home goods ) 
                            </p>
                            <h4 class="text-left">
                                <a href="#"> 
                                    Furniture   
                                </a>
                            </h4>
                            <p class="text-left"> 
                                Clean furniture to ensure its free of stains.
                            </p> 
                            <h4 class="text-left">
                                <a href="#"> 
                                    Decor  
                                </a>
                            </h4>
                            <p class="text-left"> 
                                Lighting must be working and wiring must be in casing. Wall Art must be free of damage. Curtains must be free of odors and stains. Pillows &amp; Throws must be free of pulling, missing buttons and stains.
                            </p>
                            <h4 class="text-left">
                                <a href="#"> 
                                    Dinning &amp; Entertaining  
                                </a>
                            </h4>
                            <p class="text-left"> 
                                Dinnerware, Flatware, Glassware &amp; Stemware, Bar &amp; Wine Accessories, Serveware, Table Linen and Kitchen Accessories all must be clean and free of rust or cracks.
                            </p>     
                            <h4 class="text-left">
                                <a href="#"> 
                                    Bedding ( must be new ) 
                                </a>
                            </h4>
                            <p class="text-left"> 
                            </p>    
                        </div>
                        <div class="row items c_item_3" id="child_panel_3" style="padding:20px;">
                            <h2> 
                                DROP OFF PROCEDURES
                            </h2>
                             <h4 class="text-left">
                                <a href = "#">
                                    Drop Offs for the 2016 Summer Sales Event are:
                                </a>
                            </h4>
                            <span class="text-left" style="display: block;  font-size: 18px; font-family: GOTHIC1; color:#fff ; padding-left: 10px; ">
                                Monday, April 11, 2016 12pm- 9:00pm <br/> 
                                Tuesday, April 12, 2016 9am - 9:00pm <br/>  
                                Wednesday, April13, 2016 9am – 9:00pm <br/> 
                            </span>
                            <h4 class="text-left">
                                <a href="#"> 
                                    Drop off should take no more than 30 minutes depending on the number of items you are consigning.
                                </a>
                            </h4>
                            <p class="text-left">
                                Be sure you registered for a drop off appointment.<br/>
                                Arrive 5 minutes before your scheduled appointment
                            </p>
                            <h4 class="text-left">
                                <a href="#"> 
                                    You will Need:
                                </a>
                            </h4>
                            <p class="text-left"> 
                                All items ready for the sale floor in accordance with what we pre approved.
                                Items sorted by gender and size. (Please note that if your items are not sorted you will be asked to step aside and do so while we take the next appointment.)
                                Assemble All Large Items and Furniture prior to your Drop Off time.
                                <br><br>  
                                If you arrive late or you do not have your items fully prepared, per the item preparation guide, at your scheduled drop-off appointment time you will be asked to move to the waiting line. We will do our best to check in your items as quickly as there is availability.
                             </p>
                            <h3 class="text-left items-header">
                                We ask that you please make every effort to make it to your scheduled appointment, but if you are unable or arrive late you can still come and wait in line and we will fit you in as quickly as possible.
                            </h3>
                            <h4 class="text-left">
                                <a href="#"> 
                                    1. Bring your items to an Inspection station
                                </a>
                            </h4>
                            <p class="text-left">  
                                Staff will ask for your printed inventory report and begin inspection of your items. Items will be approved or declined according to our accepted items guidelines.  All items are accepted and declined at the staffs discretion and ultimately the owners of Life After Purchase. Your printed inventory list will then be changed to reflect the items not accepted, an inventory count will be completed and you will sign your release on the consignor agreement.
                                <br><br> 
                                Consignors must be present while their items are being inspected.
                                Please don’t be offended if we turn away some of your items, keeping our quality level standards extremely high is beneficial for all buyers and sellers. We will share with you the reason we are not accepting the item.  You will be given the opportunity to clean and meet the accepted guidelines.
                            </p>
                            <h4 class="text-left">
                                <a href="#"> 
                                    2. Checkout 
                                </a>
                            </h4>
                            <p class="text-left"> 
                                We verify that all signatures are complete on your consignor release. You will fill out your consignor information and receive your Pre-Sale pass. Lastly you will also schedule your Pick Up appointment.
                            </p>
                             <h3 class="text-left items-header">
                                Pick-Ups will be Sunday, June 26, 2016 from 5:30pm - 7:30pm &amp; Monday, June 27, 2016 from 9am -12pm.
                            </h3>
                        </div>
                        <div class="row items c_item_4" id="child_panel_4" style="padding:20px;">
                            <h2> 
                                FREQUENTLY ASKED QUESTIONS
                            </h2>
                            <h4 class="text-left">
                                <a href="#"> 
                                    What is consignment?
                                </a>
                            </h4>
                            <span class="text-left" style="display: block;  font-size: 18px; font-family: GOTHIC1; color:#fff ; padding-left: 10px; ">
                                Consignment means that we sell your gently used items for you. In turn we receive a percentage of your selling price. Our seasonal consignment event offers you a great way to make more money on your items with less work than garage sales, Craigslist, eBay, or apps like Letgo and Offer Up. An added bonus is that in 3 days time your items can sell rather than take weeks or even months with other methods. Life After Purchase will organize your items and display your pieces just like a retail store but in our Event location.
                            </span>
                            <h4 class="text-left">
                                <a href="#"> 
                                    Why are you so strict about quality?
                                </a>
                            </h4>
                            <p class="text-left">
                                We offer the highest quality items that are in new or like new condition at our event. Please don’t be offended if we turn away some of your items, keeping our quality level extremely high is beneficial for all buyers and sellers.
                            </p>
                            <h4 class="text-left">
                                <a href="#"> 
                                  How can I consign my items?
                                </a>
                            </h4>
                            <p class="text-left">
                                Consignors first create an account on Life After Purchase website. Once registered you will need to fill out some personal information and then submit your item(s) for approval. Once your items past the first stage of approval and you agree to continue, there will be a $15 non-refundable registration fee. You are responsible for preparing and bringing your items to the location prior to the consignment event.
                            </p> 
                            <h4 class="text-left">
                                <a href="#"> 
                                   Why is there a $15 Registration Fee?
                                </a>
                            </h4>
                            <p class="text-left"> 
                                Your $15 registration fee goes toward the site rental, insurance, marketing of the event, cost of hanger, tags, bags and administrative costs of the event. This  $15 fee will be charged during registration and can be paid through PayPal with your debit or credit card.
                            </p>
                             <h4 class="text-left">
                                <a href="#"> 
                                    What if I registered to consign but am no longer able to participate?
                                </a>
                            </h4>
                            <p class="text-left"> 
                                If you registered to consign but are no longer able to participate your registration is nonrefundable.  In some cases we will transfer your registration to the following sale, this is a case by case decision made at the discretion of owners of Life After Purchase.
                            </p>
                            <h4 class="text-left">
                                <a href="#"> 
                                    How many items may I consign?
                                </a>
                            </h4>
                            <p class="text-left"> 
                               At this time we have a maximum numbers of 15 items that you can consign but a minimum of $250 worth of items.
                            </p>
                            <h4 class="text-left">
                                <a href="#"> 
                                    Why do I need to give a detailed description about my item?
                                </a>
                            </h4>
                            <p class="text-left"> 
                                Giving a detailed description of your items helps when a tag becomes separated from an item. We have a much better chance of locating the item in the database (and selling it) when the items are tagged with detailed descriptions. We won’t be able to determine whom the “item” belongs to, but will have a good chance of locating and replacing the tag when a detailed description is provided.
                            </p>
                            <h4 class="text-left">
                                <a href="#"> 
                                   How do I price my items?
                                </a>
                            </h4>
                            <p class="text-left"> 
                                There are two ways you can price your items... You can price for max profit or quick cash. 
                                <br/><br/>
                                If you are not in need of quick cash price your items based on the suggested to resale value. or 25-40% off the original price. 
                                <br/><br/>
                                If you are in need of cash pricing your items 50-70% off the original price to help move the items faster.
                                <br/><br/>
                                Also take into account the condition of the item, if the tags are still on the piece, and the Brand of the item you are pricing.
                            </p>
                            <h4 class="text-left">
                                <a href="#">  
                                    What is the Drop Off/ Check-in process?
                                </a>
                            </h4>
                            <p class="text-left"> 
                                Drop-Off is 2-3 days prior to the start of the sale. You can expect your drop off to be approximately 15-30 minutes. Simply bring your items to check-in at your predetermined time (chosen during registration) grouped by size &amp; gender for clothing and other similar items grouped together. We then thoroughly inspect your all of your items. To maintain the high quality our shoppers expect we will not accept items with stains, rips, frayed, piled, missing or broken pieces, or items that are out of style or season. All items will be accepted and or denied at our discretion. You will need to sign a release of liability for any missing or damaged items (an extremely rare occurrence). You can schedule your DROP OFF HERE.
                                <br/><br/>
                                Please bring your items in a bin labeled with your consignor number on the front. Your items will be inspected and check-in completed. Please note that all consignors must be present while their items are being inspected. Visit the Drop Off Guide for more information.
                            </p>
                            <h4 class="text-left">
                                <a href="#">     
                                    Do I need to be present at the sale to consign my items?
                                </a>
                            </h4>
                            <p class="text-left">                            
                                Consignors do not have to stay with their items during the sale. Simply prepare then bring the items to check-in. We do the rest!
                            </p>
                            <h4 class="text-left">
                                <a href="#"> 
                                     How much will I make?
                                </a>
                            </h4>
                            <p class="text-left">  
                                With our tiered commission structure, you can earn as much as 50 - 80% of the selling price for your items.
                                <br/><br/>
                                <em>Selling price</em>
                                <br/><br/>
                                $500+ 80% of the selling price<br/>
                                $350-$499 70% of the selling price<br/>
                                $200-$349 60% of the selling price<br/>
                                $20-$199 50% of the selling price
                            </p>
                            <h4 class="text-left">
                                <a href="#"> 
                                   How can I find out which items sold?
                                </a>
                            </h4>
                            <p class="text-left"> 
                                If you logged into your account  48 - 72 hours after the sale you can, view each item that sold and you can see your total payout and when the check or payment was mailed or processed.
                            </p>
                            <h4 class="text-left">
                                <a href="#"> 
                                    When will I get my money?
                                </a>
                            </h4>
                            <p class="text-left"> 
                                Checks will be mailed to the address you entered when you registered within seven to fourteen days from the end of the sale. If you choose to have your money deposited via Paypal you will receive your money after your total has been calculated. Paypal takes a few days to post.
                            </p>
                            <h4 class="text-left">
                                <a href="#"> 
                                    Can I sell in more than one of your sales?
                                </a>
                            </h4>
                            <p class="text-left"> 
                                Please do! Once you have registered you are a “Life After purchase” Consignor.  
                            <h4 class="text-left">
                                <a href="#"> 
                                    What if I can’t pick up my items the last day of the sale? 
                                </a>
                            </h4>
                            <p class="text-left"> 
                                You can be picked up by a friend, family member or fellow consignor. We will just need to have your authorization with the persons name to release your unsold inventory. We will not release any items to someone other than you without prior authorization. There are no EXCEPTIONS made.
                            </p>
                            <h4 class="text-left">
                                <a href="#"> 
                                    Can I donate my unsold items?
                                </a>
                            </h4>
                            <p class="text-left"> 
                                We think that is wonderful and very appreciated. We will handle the donation for you. You will simply mark your items as “donate” when submitting for review, a notation will be printed on your tag and you will have a record for your taxes. We then arrange the donation pick up with our local charities at the end of the sale.
                            </p>
                        </div>
                    </div>
                </div> 
                <!--second panel-->
                
                <div class="panel_for_second_nav" id="panel_second">
                    <div class="row">
                        <nav class="navsecond">
                            <ul>
                                <li class="active" rel="child_panel_1">SHOPPING GUIDE</li>
                                <li class="child_panel" rel="child_panel_2 ">PRESALE INFO</li>
                                <li class="child_panel" rel="child_panel_3">FAQ’S</li> 
                            </ul>
                        </nav>
                    </div >
                    
                    <div class="devider"></div>
                    <div class="child_panel_main">
                        <div class="row items c_item_1 active" id="child_panel_1" style="padding:20px;">
                            <h2>SHOPPING GUIDE</h2>
                            <p class="text-left">
                                So often we accumulate clothing and home goods we out grown or simply don't use or wear often enough to keep. Life After Purchase provides many people the opportunity to buy and sell these items that are new or in like new condition. Particularly in these tough economic times… being able to make and save money is always a great thing!
                                <br/><br/>
                                Life After Purchase is a phenomenal way to shop for high quality gently used clothing and home goods items!  Shopping our consignment event is a great way to buy high quality name brand items at 25-70% off retail! You will find clothing of all sizes, items for work, everyday or special occasions and home decor to decorate your place.
                                <br/><br/>
                                All of the merchandise is conveniently tagged, organized, and displayed by category. Clothes are all displayed on racks by gender, size, style and occasion. Shopping our consignment event couldn't be easier! You won't believe the incredible inventory and unbeatable prices.
                            </p>
                            <h3 class="text-left items-header"><center> HERE ARE A FEW TIPS TO MAXIMIZE YOUR SHOPPING EXPERIENCE:</center></h3>
                            <p class="text-left">
                                Expect a crowd…. This is an amazing sale so download our <font color = "#39aecf">Ultimate Wardrobe Checklist</font> to be prepared with a list of items you need.
                                <br/><br/>
                                Purchase a Pre Sale Pass to SHOP before the Public. <br/>
                                Items with missing or altered tags cannot be sold. <br/>
                                No food or beverage is allowed at the sale.<br/>
                                Many items are marked 25% off on the last day of the sale!
                            </p>
                            <h4 class="text-left">
                                <a href="#">
                                    Shopping Bags
                                </a>
                            </h4> 
                            <p class="text-left">
                                We will offer shoppers large shopping bags to hold your items in while you are shopping! We will also offer a holding area for larger items or if you have too many items to hold in the shopping bag. Please note that there is a 1 hour time limit on items placed in the holding area.
                            </p>
                            <h4 class="text-left">
                                <a href="#">
                                    Hold Items
                                </a>
                            </h4> 
                            <p class="text-left"> 
                                We will offer a holding area. The holding area is for larger items or for multiple items that can’t be carried. There are so many great items at amazingly LOW prices that often shoppers simply can’t carry everything around while they continue to shop. Please note that there is a 1 hour time limit on items placed in the holding area. Also, please be mindful that the holding area is for items that you intend to purchase. We want to be fair to all of our shoppers by making inventory available for everyone to view and to have the chance to purchase. It is our policy to return all items to the sale floor at the end of the day. No items will be held over night or throughout the day for returning customers. Items are sold on a first come first shop basis.
                            </p>
                            <h4 class="text-left">
                                <a href="#">
                                    Payment Information
                                </a>
                            </h4>
                            <p class="text-left">
                                Accepted Forms of Payment
                                <br/><br/>
                                We accept cash, Visa, Mastercard, Discover and AMEX.  We appreciate cash payments, especially for totals under $10. We do not accept personal checks. <a href = "#"><font color = "#ff3500">Be advised that all sales are final</font></a>.
                                <br/><br/>
                                Sales Tax
                                <br/><br/>
                                A 7% sales tax will be applied to all items sold at the Consignment Event.
                                <br/><br/>
                            </p>
                            <h4 class="text-left">
                                <a href="#"> 
                                    All Sales Are Final 
                                </a>
                            </h4>
                            <p class="text-left">
                                We are sorry but ALL SALES ARE FINAL. We do not accept any returns or exchanges so please inspect and consider your purchases carefully before checking out.  Please note that it is a Life After Purchase policy that all items are carefully inspected during consignor check-in however, all items sold at the event are sold "as-is".  
                            </p> 
                        </div>
                        
                        <div class="row items c_item_2" id="child_panel_2" style="padding:20px;">
                            <h2>
                               WANT TO SHOP BEFORE THE PUBLIC AND SCORE THE BEST DEALS?
                            </h2>
                            <p class="text-left">
                                PRE SALE DATE
                                <br/><br/>
                                Thursday, June 23rd, 2016
                                <br/><br/>
                                $20 ticket: 2-9pm<br/>
                                $15 ticket: 3-9pm<br/>
                                $10 ticket: 4-9pm<br/>
                                Consignors: 5-9pm<br/>
                                <br/><br/>
                                By purchasing a pre sale pass you SHOP BEFORE the 9am Friday public shopping begins. You’ll save and snag up the best items by being be one of the first to shop the incredible inventory and unbeatable prices on the all of items available at Life After Purchase. Not to mention, each pre sale has a limited number of tickets available, allowing for a more relaxed shopping experience with limited shoppers and shorter lines.
                                <br/><br/>
                                Pre sale Passes are purchased through Eventbrite and cost $10-$20 depending on the entry time you purchase. Please note that passes admit only one person per purchased pass.  Attendees 16 and over MUST purchase a ticket for admission.
                            </p>
                            <h3 class="text-left items-header">ALL TICKET SALES ARE FINAL.</h3>
                        </div>
                        <div class="row items c_item_3" id="child_panel_3" style="padding:20px;">
                            <h2> 
                                FREQUENTLY ASKED QUESTIONS
                            </h2>
                            <h4 class="text-left">
                                <a href="#"> 
                                   How can I shop early?
                                </a>
                            </h4>
                            <span class="text-left" style="display: block;  font-size: 18px; font-family: GOTHIC1; color:#fff ; padding-left: 10px; ">
                                Consigners shop first. You can also purchase a PreSale Pass. 
                            </span>
                            <h4 class="text-left">
                                <a href="#"> 
                                    Do I have to pay for admission to the sale?
                                </a>
                            </h4>
                            <p class="text-left">
                                Admission is free to all Life After Purchase sales unless you want to shop before the public sale. We do not charge to shop or park at our sales.
                            </p>
                            <h4 class="text-left">
                                <a href="#"> 
                                    What can I expect to find at the sale?
                                </a>
                            </h4>
                            <p class="text-left">
                                Each sale offers a different variety of merchandise. Generally speaking, there will be women and men clothing sizes from Petite to Plus Size and Extra Small to Big &amp; Tall, shoes and accessories and home goods!! When shopping our event you can expect to pay 25-70% less than retail on High Quality name brand merchandise.
                            </p>
                             <h4 class="text-left">
                                <a href="#"> 
                                    Can I try items on?
                                </a>
                            </h4>
                            <p class="text-left"> 
                                Trying on clothes will not be permitted.
                            </p>
                            <h4 class="text-left">
                                <a href="#"> 
                                    Are all Items discounted to 15% on the 2nd day and 25% on the final day?
                                </a>
                            </h4>
                            <p class="text-left"> 
                                NO. Consignors determine if they would like to mark their items down for discount. There will be a very large selection of discounted items to choose from but not all inventories will be 15% or 25% off.
                            </p>
                            <h4 class="text-left">
                                <a href="#"> 
                                    What payment methods are accepted?  
                                </a>
                            </h4>
                            <p class="text-left"> 
                                We accept cash, Visa, Mastercard, or American Express. We appreciate cash payments, especially for transactions under $10. We do not accept personal checks. And be advised that all sales are final.
                            </p>
                            <h4 class="text-left">
                                <a href="#"> 
                                    What if I change my mind on a purchase when I get home? Or I notice that there is a defect on my purchased item?
                                </a>
                            </h4>
                            <p class="text-left"> 
                                We are sorry but ALL SALES ARE FINAL. We do not accept any returns or exchanges so please inspect and consider your purchases carefully. In the event you change your mind we suggest that you plan to consign the item(s) at our next Event.
                            </p>
                             
                        </div>    
                        <div class="row items c_item_4" id="child_panel_4" > 
                        </div>
                    </div>
                </div>
                <!--third panel-->

                <div class="panel_for_second_nav" id="panel_third">
                    <div class="row">
                        <nav class="navsecond">
                            <ul>
                                <li class="active" rel="child_panel_1">ACCEPTED ITEMS</li>
                                <li class="child_panel" rel="child_panel_2 ">ITEMS PREP</li>
                                <li class="child_panel" rel="child_panel_3">DROP OFF GUIDE</li>
                                <li class="child_panel" rel="child_panel_4">FAQ’S</li>
                            </ul>
                        </nav>
                    </div >
                    
                    <div class="devider"></div>
                    <div class="child_panel_main">
                        <div class="row items c_item_1 active" id="child_panel_1" style="padding:20px;">
                              <h2> Items for life after purchase Consigner Events</h2>
                            <p class="text-left">
                                Life After Purchase host a gently used consignment event. All items must be new or in new like condition free from signs of wear and tear, excessive use, no damage and in current style and trend to be accepted for our Sale(s). You will check in every item being sold at your selected appointment on your Drop off Day, any unacceptable items will be sent home with the consignor. This is for quality control purposes so that we maintain the highest level of quality items being sold at our events. Please understand that we do not mean to offend our consignors these high standards are in place to assure those shopping the event are purchasing gently used high quality items. We reserve the right to refuse items that we feel are not acceptable.
                            </p> 
                            <h3 class="text-left items-header">Accepted Items</h3>
                            <p class="text-left">
                                Our shoppers are mainly between the ages of 18-40 who are looking for items for clothes, shoes and accessories for everyday wear, work and special occasions. Shoppers are also looking for items to complete or dress up their home. 
                            </p> 
                            <h4 class="text-left">
                                <a href="#">
                                    Clothing
                                </a>
                            </h4> 
                            <p class="text-left">
                                Clothing sizes from Petite to Plus Size and Extra Small to Big &amp; Tall.
                            </p> 
                            <h4 class="text-left">
                                <a href="#">
                                    Seasonally Appropriate Items
                                </a>
                            </h4> 
                            <p class="text-left"> 
                                Spring/Summer Sale: No fall/winter clothes, shoes and accessories. Fall/Winter Sale: No Spring/Summer clothes, shoes and accessories. <br/><br/>
                                Due to the weather conditions in the Tampa Bay are we accept both short/long sleeve shirts, sandals, long pants/jeans, cotton sweaters/sweatshirts and light-weight jackets at both sales. 
                            </p> 
                            <h4 class="text-left">
                                <a href="#">
                                    Shoes
                                </a>
                            </h4>
                            <p class="text-left">
                                We accept all adult shoe sizes for both men and women. 
                            </p> 
                            <h4 class="text-left">
                                <a href="#"> 
                                    Furniture 
                                </a>
                            </h4>
                            <p class="text-left">
                                Coffee Tables, Ottomans, Stools, Entry Tables, Side Tables, Small Benches and Accent Tables. 
                            </p> 
                            <h4 class="text-left">
                                <a href="#"> 
                                    Decor 
                                </a>
                            </h4>
                            <p class="text-left">
                                Lighting, Wall Art, Mirrors, Curtains &amp; Hardware, Accents, Pillows &amp; Throws
                                Picture Frames. 
                            </p>     
                            <h4 class="text-left">
                                <a href="#">  
                                    Dinning &amp; Entertaining
                                </a>
                            </h4>
                            <p class="text-left">
                                Dinnerware, Flatware, Glassware &amp; Stemware, Bar &amp; Wine Accessories, Serveware, Table Linen and Kitchen Accessories.
                            </p>  
                            <h4 class="text-left">
                                <a href="#"> 
                                    Bedding<!--  <label style = "font-weight: normal;">( must be new )</label> -->
                                </a>
                            </h4>
                            <p class="text-left">
                                Duvet Covers, Comforters, Sheets, Quilts &amp; Coverlets, Blankets &amp; Throws, Decorative Pillows and Bedding Basics. 
                            </p>
                            <h4 class="text-left">
                                <a href="#"> 
                                   NOT ACCEPTED <!-- (No Exceptions) -->
                                </a>
                            </h4>
                            <p class="text-left"> 
                               We strive to offer Tampa Bay an unsurpassed opportunity to purchase gently used, high quality and brand name items at a fraction of the retail price. This is the very reason that Life After Purchase will not accept the following items.     
                                <br/><br/>
                                Clothing that is stained, faded, pilled, torn, has holes, missing or mismatched buttons or snaps, broken zippers or clothing with unpleasant odors..
                                <br/><br/>
                                Clothing that is older than 3 years or out of date styles.  Our Shoppers are looking for
                                brand name items in current style and trend. 
                                <br/><br/>
                                Shoes that are dirty, on the top, inside, and on the bottom/sole. They must be free of scuffs, stains, tears, or odors. Soles must be free of all debris. Shoes can't have laces that have pilling or breaks. 
                                <br/><br/>
                                No children clothes, shoes and accessories.
                                <br/><br/>
                                Undergarments. (bras or underwear) 
                                <br/><br/>
                                Items from Target, Kmart, Walmart, Forever 21, H&amp;M, Aeropostale, Traffic, Papaya, Rainbow or any clothing store that sells items that retailed. These brands retail "new" at affordable prices.  Because of this they are not likely sold a second time at these events. We do accept some items from H&amp;M, but do strongly suggest the item be priced low in order to sell unless it was apart of a collaboration collection.
                                <br/><br/>
                                Any furniture that is: ripped, dirty, scratched, has been broken and re-glued, unless done by a professional, has started to come apart and/or chip, has orders or water damage, loose veneer, deep scratches/ gouges, extensive scratches, discolorations, sun-fading, table leaves that aren't the same color as the table top, etc. Is not accepted. 
                                <br/><br/>
                                We do not accept bedding that is not new and in the original casing. All pieces of bedding must be included or stated as otherwise.
                                <br/><br/>    
                                We do not accept any home decor that is not new or in like new condition.
                                <br/><br/>
                                If we find any items do not meet these high quality standards for safety and quality purposes these items will not be accepted at drop-off.
                                <br/><br/> 
                                ~ If you have any questions about items you can consign please contact us at 
                                <br/>
                                <a href = "service@lifeafterpurchase.com">service@lifeafterpurchase.com </a>
                            </p>
                        </div>

                        <div class="row items c_item_2" id="child_panel_2" style="padding:20px;"> 
                             <h2>
                                Prepping Your Items for Consignment
                            </h2>
                            <p class="text-left">
                                When preparing your items be mindful that the better your items look the more likely they are to sell and the more money you will get for them. Thoroughly inspect the items you are including in the sale. Make sure they are in gently used condition free from damage and excessive wear.
                            </p>
                            <h4 class="text-left">
                                <a href="#">
                                    Remember if You Wouldn't Buy it, Don't Sell it.
                                </a>
                            </h4>
                            <span class="text-left" style="display: block;  font-size: 18px; font-family: GOTHIC1; color:#808080 ; padding-left: 10px; ">
                                It's a good idea to keep a donation box close by when preparing your items. If you find an item is not something you would purchase or buy it is probably not suitable for the sale but best for donating to Goodwill or Salvation Army.
                            </span>
                            <h3 class="text-left items-header">
                                The following Guidelines will help you Prepare your items.
                            </h3>     
                            <h4 class="text-left">
                                <a href="#">
                                    Clothing 
                                </a>
                            </h4>
                            <p class="text-left">
                               Clothing needs to be carefully inspected. Accepted clothing cannot be stained, soiled, faded, pilled, torn, have holes, missing buttons or snaps, broken zippers or clothing that has unpleasant odors. 
                                <br><br>
                                Freshly launder all garments removing all stains. Zip all zippers, fasten and snap all snaps. Replace missing buttons and button all items. 
                                <br><br>
                                Place all small accessories to be sold  (jewelry, belts or etc) in a zip-loc bag and secure with packaging tape. 
                            </p>
                            <h4 class="text-left">
                                <a href="#">
                                    Shoes
                                </a>
                            </h4>
                            <p class="text-left"> 
                                Shoes must be clean, on the top, inside, and on the bottom/sole. They must be in great condition free of scuffs, stains, tears, or odors. Soles must be free of all debris. Shoes must have laces free of pilling and or breaks. (Scuffs can be removed from shoes with Mr. Clean Magic Eraser). No shoeboxes will be allowed.
                            </p>
                            <h4 class="text-left">
                                <a href="#">
                                    Bedding &amp; Blankets
                                </a>
                            </h4>
                            <p class="text-left">
                                Must be freshly laundered. Free of stains, rips, and tears. Please note that you will be held liable for a refund in the event the item is damaged when removed from the bag (if noticed within the 1st 24 hours after purchase). All pieces of bedding must be included or stated as otherwise.Fold all bedding and blankets must be new and in it's original package.    
                                All other items. Make sure to thoroughly clean and inspect all other items. ( accessories and home goods ) 
                            </p>
                            <h4 class="text-left">
                                <a href="#"> 
                                    Furniture   
                                </a>
                            </h4>
                            <p class="text-left"> 
                                Clean furniture to ensure its free of stains.
                            </p> 
                            <h4 class="text-left">
                                <a href="#"> 
                                    Decor  
                                </a>
                            </h4>
                            <p class="text-left"> 
                                Lighting must be working and wiring must be in casing. Wall Art must be free of damage. Curtains must be free of odors and stains. Pillows &amp; Throws must be free of pulling, missing buttons and stains.
                            </p>
                            <h4 class="text-left">
                                <a href="#"> 
                                    Dinning &amp; Entertaining  
                                </a>
                            </h4>
                            <p class="text-left"> 
                                Dinnerware, Flatware, Glassware &amp; Stemware, Bar &amp; Wine Accessories, Serveware, Table Linen and Kitchen Accessories all must be clean and free of rust or cracks.
                            </p>     
                            <h4 class="text-left">
                                <a href="#"> 
                                    Bedding <!-- ( must be new )  -->
                                </a>
                            </h4>
                            <p class="text-left"> 
                            </p>  
                        </div>
                        <div class="row items c_item_3" id="child_panel_3" style="padding:20px;">
                             <h2> 
                                Drop Off Procedures
                            </h2>
                            <h4 class="text-left">
                                <a href="#"> 
                                    Drop Offs for the 2016 Summer Sales Event are:
                                </a>
                            </h4>
                            <span class="text-left" style="display: block;  font-size: 18px; font-family: GOTHIC1; color:#fff !important; padding-left: 10px; ">
                                Sunday, April 10, 2016 5pm- 8:30pm <br/>
                                Monday, April 11, 2016 9am- 9:30pm <br/>
                                Tuesday, April 12, 2016 8am - 9:30pm <br/>  
                                Wednesday, April13, 2016 8am – 9:30pm <br/>
                                Thursday, April 14, 2016 from 7am – 12pm <br/>
                            </span> 
                            <h4 class="text-left">
                                <a href="#"> 
                                    Drop off should take no more than 30 minutes depending on the number of items you are consigning.
                                </a>
                            </h4>
                            <p class="text-left">
                                Be sure you registered for a drop off appointment.
                                Print out your ACCURATE entered inventory and Consignor Agreement. Be advised that there is a $3 service fee if you do not bring the printed items to your drop off appointment.
                                Arrive 5 minutes before your scheduled appointment.
                            </p>
                            <h4 class="text-left">
                                <a href="#"> 
                                    You will Need:
                                </a>
                            </h4>
                            <p class="text-left">
                                All your entered and tagged items
                                All items ready for the sale floor in accordance with the preparation and tagging guidelines
                                Have clothing items sorted by gender and size.  (Please note that if your items are not sorted you will be asked to step aside and do so while we take the next appointment.)
                                Assemble All Large Items and Furniture prior to your Drop Off time.
                                <br><br>  
                                If you arrive late or you do not have your items fully prepared, per the item preparation guide, at your scheduled drop-off appointment time you will be asked to move to the waiting line.  We will do our best to check in your items as quickly as there is averageilability.
                             </p>
                            <h3 class="text-left items-header">
                                We ask that you please make every effort to make it to your scheduled appointment, but if you are unable or arrive late you can still come and wait in line and we will fit you in as quickly as possible.
                            </h3>      
                            <h4 class="text-left">
                                <a href="#"> 
                                    1. Bring your items to an Inspection station
                                </a>
                            </h4>
                            <p class="text-left"> 
                                Staff will ask for your printed inventory report and begin inspection of your items. Items will be approved or declined according to our accepted items guidelines.  All items are accepted and declined at the staffs discretion and ultimately the owners of Life After Purchase. Your printed inventory list will then be changed to reflect the items not accepted, an inventory count will be completed and you will sign your release on the consignor agreement.
                                <br><br> 
                                Consignors must be present while their items are being inspected.
                                Please don’t be offended if we turn away some of your items, keeping our quality level standards extremely high is beneficial for all buyers and sellers. We will share with you the 
                                reason we are not accepting the item.  You will be given the opportunity to clean and meet the accepted guidelines.
                            </p>
                            <h4 class="text-left">
                                <a href="#"> 
                                    2. Checkout 
                                </a>
                            </h4>
                            <p class="text-left"> 
                                We verify that all signatures are complete on your consignor release. You will fill out your consignor information and receive your Pre-Sale pass. Lastly you will also schedule your Pick Up appointment. 
                            </p>
                             <h3 class="text-left items-header">
                                Pick-Ups will be Sunday, April 17, 2016 from 8pm - 10pm &amp; Monday, April 18, 2016 from 9am -12pm.
                            </h3>  
                        </div> 
                        <div class="row items c_item_4" id="child_panel_4" > 
                        </div>
                    </div>
                </div>
            </div>         
        </div> 
    </div>
</article>
    
    <article class="slider-article" >
        <div class="container">
            <div class="row slider-article" >
            <div class="col-md-6  padding_zero">
                <div class="slider">   
                    <img class="img-responsive" src="<?php echo IMG; ?>/slider4.jpg" style="min-height:375px;">   
                    <img class="img-responsive" src="<?php echo IMG; ?>/slider.png" style="min-height:375px;">    
                </div>
            </div>
                <div class="col-md-6 dright">
                    <h1> MAKE <span class="white">MONEY<br/>SAVE</span> MONEY</h1>
                    <h3 class="text-left"> Need extra cash? Looking to save on the latest additions to your fashion  and home collection? </h3>
                    <div class="uk-grid uk-grid-collapse consignerBuyer div1-consignerBuyer">
                        <div class="uk-width-large-1-2 uk-width-medium-1-2 uk-width-small-1-1">
                            <a href="<?php echo SITEURL; ?>/new-consign/" class="uk-button uk-float-right buttonConsigner final-sign-cosigner f-cosign-b" style = "background-color: #FF6326 !important;">CONSIGN NOW</a>                       
                        </div><!-- end of width 1-2 -->
                        <div class="uk-width-large-1-2 uk-width-medium-1-2 uk-width-small-1-1">
                            <a href="<?php echo SITEURL;?>/new-shopper/" class="uk-button uk-float-left buttonBuyer final-sign-shopper f-getNotified-b" style = "background-color: #FAC66A !important;" >GET NOTIFIED</a>
                        </div><!-- end of width 1-2 -->
                    </div><!-- end onf consigner buyer -->
                </div>
            </div>
        </div>
    </article>
    
    <article>  
    <div id="about-us2" style="display:block;position:relative;top:-50px;visibility:hidden;"></div>
       <div class="container"  >
            <div class="row about_us" style = " height:0px;">

                <center id = "about-us"> <h4 class="text-left abt-us"  style="font-size:25px;"><span class="black"  >&nbsp;ABOUT US</span></h4></center>               
            </div> 
        </div>

        <div class="container" style = " padding-top:10px; ">
            <div class="row about_us">

                <h4 class="text-left" style = "border-top:1px solid black;" ></h4>
               
                    <h1 style = "font-size:18px;display:inline"> 
                        <span style="font-family:'Didot';">
                            <b style="font-weight: 700;">
                                LIFE AFTER
                            </b>
                        </span> 
                        <span style="font-family:'Didot Regular';">
                            PURCHASE
                        </span>
                    </h1>
                     
                    <span style = "font-size:18px !important;font-family: AvenirNextLTW01-UltraLight" > 
                        <font>
                        , Is the brainchild of Maurico, who’s one half of the Two Luxury Leo’s. After realizing that the consignment stores in the Tampa Bay area did not offer a diverse set of desired new and pre-owned goods or the seller could’nt get a good return on thier item, he knew there was a void he needed to fill. Stores that offer a great selection of new and pre-owned goods accepts only high-end or luxury goods. The issue is the average consigner/consumer don’t own or can’t afford to casually buy high-end or luxury goods but they would love to own quality affordable items.
                        </font>
                    </span> 
                 
            </div>
        </div>
    </article>
     
    <div class="pageBreak"></div>
   <footer >  
        <div class = "footer-div1 container">
            <h3 class="col-sm-4 copyRight">Copyright © Life After Purchase 2016</h3>
            <h3 class="col-sm-4" style="background-color:white;font-size:14px"> 
                <img src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/american-express.png" alt="american-express" width = "30px" height = "20px" />     
                <img src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/discover.png" alt="discover" width = "30px" height = "20px" />     
                <img src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/dollar.png" alt="dollar" width = "30px" height = "20px" />     
                <img src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/masterCard.png" alt="masterCard" width = "30px" height = "20px" />     
                <img src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/paypal.png" alt="paypal" width = "30px" height = "20px" />
                <img src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/visa.png" alt="visa" width = "30px" height = "20px" />   
            </h3>
            <h3 class="col-sm-4 sercive-lap" >Service&#174;lifeafterpurchase.com - 180 - 238 - 3938</h3> 
        </div>    
        <div style = "margin-top:0px;">
            <font color = "white">.</font>
        </div>
   </footer>
</div><!-- end of main wrapper -->
<?php wp_footer(); ?>

<script src="<?Php echo JS; ?>/uikit.js"></script>
<script src="<?Php echo JS; ?>/core/tab.js"></script>
<script src="<?Php echo JS; ?>/core/switcher.js"></script>
<script src="<?Php echo JS; ?>/core/toggle.js"></script>
<script src="<?Php echo JS; ?>/scroll.js"     ></script> 

</body>
</html>
