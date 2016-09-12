<?php
/**
 * Template Name: Sidebar Left
 */
require_once('header.php');// query
$user_info = $wpdb->get_row( "SELECT * FROM wp_top WHERE ID = 24", ARRAY_A );
$under_review= $wpdb->get_row( "SELECT count(*) FROM wp_top WHERE ID = 24", ARRAY_A );
?>
<!-- Bootstrap Core CSS -->
<link href="<?php echo  bloginfo("template_url") ?>/css/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<!-- Custom CSS -->
    <link href="http://lifeafterpurchase.com/wp-content/themes/custom/css/bootstrap/css/simple-sidebar.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="http://lifeafterpurchase.com/wp-content/themes/custom/css/custom-list.css" />
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>

<script src="<?php echo JS; ?>/tops.js"></script>
<div class="container" >
    <!--this is review pop-up-->
    <!-- Trigger the modal with a button -->
    <!-- Modal -->
    <div class="modal fade" id="myModal3" role="dialog">
        <div class="modal-dialog modal-rev-size" style="margin: auto !important;">
            <!-- Modal content-->
            <div class="modal-content">
               <!-- <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">SIGN UP <i>to</i> CONSIGN</h4>
                    <p>Life After Purchase is a easy and convenient way to sell your new and used goods.</p>
                </div>-->
                <div style="" >
                    <div class="modal-body colmn-padds">
                        <div class = "close-btn-review">
                            <button type="button" class="close" data-dismiss="modal">
                                &times;
                            </button>
                        </div>
                        <form role="form" style = "margin: 0px">
                            <div  class="col-lg-4 col-md-6 col-sm-6 col-xs-12 colmn-padds review-image-popup" >
                                <div class="texts1">
                                    <img  style="width: 253px;" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/nameohio-size2000x2000-shotflat-colorgrey.png" alt="...">
                                </div>
                                 <div class="texts1 review-padds">
                                     <img  style="width: 60px;" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/nameohio-size2000x2000-shotflat-colorgrey.png" alt="...">
                                     <img  style=" opacity:0.5;width: 60px;" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/nameohio-size2000x2000-shotflat-colorgrey.png" alt="...">
                                     <img  style="opacity:0.5;width: 60px;" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/nameohio-size2000x2000-shotflat-colorgrey.png" alt="...">
                                     <img  style="opacity:0.5;width: 60px;" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/nameohio-size2000x2000-shotflat-colorgrey.png" alt="...">
                                 </div>
                                <div class="footer review-padds">
                                    <button type="button" class="btn btn-default btn-lg footer-popup-btn" data-toggle="modal" data-target="#myModal3">UPDATE</button>
                                    <button type="button" class="btn btn-default btn-lg footer-popup-btn" data-toggle="modal" data-target="#myModal3" >CANCEL</button>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-6 col-sm-6 col-xs-12 colmn-padds" style = "margin-top: 20px;" >
                                <div  class="col-lg-9 col-md-6 col-sm-6 col-xs-12 colmn-padds column-right-pads column-padds-iphon6 " style = "text-align: left;"  >
                                    <div class = "review-pop-up-text">
                                        <h1><?php  echo $user_info['subCategory-type'];?></h1>
                                        <p> <?php  echo $user_info['brand'];?></p>
                                    </div>
                                    <div>
                                        <p>Type: <?php  echo $user_info['item'];?><br>
                                        Condition: <?php  echo $user_info['signs_of_wear_and_tear'];?>.</p>
                                    </div>
                                    <div>
                                        <p> <?php  echo $user_info['description'];?></p>
                                    </div>
                                </div>
                                <div  class="col-lg-3 col-md-6 col-sm-6 col-xs-12 colmn-padds" >
                                    <div class="col-md-3 new-cosigner-pads colmn-padds column-padds-iphon6" style="width: initial">
                                        <div class="form-group" style = "margin: 0px">
                                            <label for="inputdefault1" class = "column-margnbotops" style = "margin-top: 25px;">Retail Price</label>
                                            <input class="form-control" id="inputdefault1" type="text" value = "<?php  echo $user_info['retail_value'];?>">
                                        </div>

                                        <div class="form-group" style = "margin: 0px">
                                            <label for="inputdefault2" class = "column-margnbotops" >Asking Price</label>
                                            <input class="form-control" id="inputdefault2" type="text" value = "<?php  echo $user_info['selling_price'];?>   ">
                                        </div>

                                        <div class="form-group" style = "margin: 0px">
                                            <label for="inputdefault3" class = "column-margnbotops" >Best Offer Price</label>
                                            <input class="form-control" id="inputdefault3" type="text" value = "$9,500">
                                        </div>

                                        <div class="form-group" style = "margin: 0px">
                                            <label for="inputdefault3" class = "column-margnbotops">Website</label>
                                            <button type="button" class="btn btn-default btn-lg visit" >
                                                <a href = "<?php echo $user_info['store_website'];?>" target = "_blank" style="color: white;">
                                                    VISIT
                                                </a>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                </div>
                            <div class="col-lg-7  col-md-6 col-sm-6 col-xs-12 colmn-padds column-padds-iphon6" >
                                <div class="form-group" style = "text-align: left">
                                    <label for="comment" class = "column-margnbotops" style = "margin-top: 1% !important;">Review:</label>
                                    <textarea class="form-control textarea-column" rows="5" id="note-comment"  style = "overflow:auto;text-align: left" >
                                    </textarea>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div style = "clear:both"></div>
                <div class="modal-footer">
                </div>
            </div>
        </div>
    </div>
<!--End of review pop-up-->

    <!--this is approvals pop-up-->
    <!-- Trigger the modal with a button -->
    <!-- Modal -->
    <div class="modal fade" id="myModal4" role="dialog">
        <div class="modal-dialog modal-rev-size" style="margin: auto !important;">
            <!-- Modal content-->
            <div class="modal-content">
                <!-- <div class="modal-header">
                     <button type="button" class="close" data-dismiss="modal">&times;</button>
                     <h4 class="modal-title">SIGN UP <i>to</i> CONSIGN</h4>
                     <p>Life After Purchase is a easy and convenient way to sell your new and used goods.</p>
                 </div>-->
                <div style=""  >
                    <div class="modal-body colmn-padds">
                        <div class = "close-btn-review">
                            <button type="button" class="close" data-dismiss="modal">
                                &times;
                            </button>
                        </div>
                        <form role="form" style = "margin: 0px">
                            <div  class="col-lg-4 col-md-6 col-sm-6 col-xs-12 colmn-padds review-image-popup" >
                                <div class="texts1">
                                    <img  style="width: 253px;" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/nameohio-size2000x2000-shotflat-colorgrey.png" alt="...">
                                </div>
                                <div class="texts1 review-padds">
                                    <img  style="width: 60px;" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/nameohio-size2000x2000-shotflat-colorgrey.png" alt="...">
                                    <img  style=" opacity:0.5;width: 60px;" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/nameohio-size2000x2000-shotflat-colorgrey.png" alt="...">
                                    <img  style="opacity:0.5;width: 60px;" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/nameohio-size2000x2000-shotflat-colorgrey.png" alt="...">
                                    <img  style="opacity:0.5;width: 60px;" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/nameohio-size2000x2000-shotflat-colorgrey.png" alt="...">
                                </div>
                                <div class="footer review-padds">
                                    <button type="button" class="btn btn-default btn-lg footer-popup-btn" data-toggle="modal" data-target="#myModal3">ACCEPT OFFER</button>
                                    <button type="button" class="btn btn-default btn-lg footer-popup-btn" data-toggle="modal" data-target="#myModal3" >DENY OFFER</button>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-6 col-sm-6 col-xs-12 colmn-padds" style = "margin-top: 20px;" >
                                <div  class="col-lg-9 col-md-6 col-sm-6 col-xs-12 colmn-padds column-right-pads column-padds-iphon6 " style = "text-align: left;"  >
                                    <div class = "review-pop-up-text">
                                        <h1><?php  echo $user_info['subCategory-type'];?></h1>
                                        <p> <?php  echo $user_info['brand'];?></p>
                                    </div>
                                    <div>
                                        <p>Type: <?php  echo $user_info['item'];?><br>
                                            Condition: <?php  echo $user_info['signs_of_wear_and_tear'];?>.</p>
                                    </div>
                                    <div>
                                        <p> <?php  echo $user_info['description'];?></p>
                                    </div>
                                </div>
                                <div  class="col-lg-3 col-md-6 col-sm-6 col-xs-12 colmn-padds" >
                                    <div class="col-md-3 new-cosigner-pads colmn-padds column-padds-iphon6" style="width: initial">
                                        <div class="form-group" style = "margin: 0px">
                                            <label for="inputdefault1" class = "column-margnbotops" style = "margin-top: 25px;">Retail Price</label>
                                            <input class="form-control" id="inputdefault1" type="text" disabled value = "<?php  echo $user_info['retail_value'];?>">
                                        </div>

                                        <div class="form-group" style = "margin: 0px">
                                            <label for="inputdefault2" class = "column-margnbotops" >Asking Price</label>
                                            <input class="form-control" id="inputdefault2" type="text" disabled value = "<?php  echo $user_info['selling_price'];?>   ">
                                        </div>

                                        <div class="form-group" style = "margin: 0px">
                                            <label for="inputdefault3" class = "column-margnbotops" >Best Offer Price</label>
                                            <input class="form-control" id="inputdefault3" type="text" disabled value = "$9,500">
                                        </div>

                                        <div class="form-group" style = "margin: 0px">
                                            <label for="inputdefault3" class = "column-margnbotops">Website</label>
                                            <button type="button" class="btn btn-default btn-lg visit" ><a href = "<?php echo $user_info['store_website'];?>" target = "_blank">VISIT</a></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7  col-md-6 col-sm-6 col-xs-12 colmn-padds column-padds-iphon6" >
                                <div class="form-group" style = "text-align: left">
                                    <label for="comment" class = "column-margnbotops" style = "margin-top: 1% !important;">Response:</label>
                                    <textarea class="form-control textarea-column" rows="5" id="note-comment"  style = "overflow:auto;text-align: left" >
                                    </textarea>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div style = "clear:both"></div>
                <div class="modal-footer">
                </div>
            </div>
        </div>
    </div>
    <!--End of approvals pop-up-->

    <!--this is for sale pop-up-->
    <!-- Trigger the modal with a button -->
    <!-- Modal -->
    <div class="modal fade" id="myModal5" role="dialog">
        <div class="modal-dialog modal-rev-size" style="margin: auto !important;">
            <!-- Modal content-->
            <div class="modal-content">
                <!-- <div class="modal-header">
                     <button type="button" class="close" data-dismiss="modal">&times;</button>
                     <h4 class="modal-title">SIGN UP <i>to</i> CONSIGN</h4>
                     <p>Life After Purchase is a easy and convenient way to sell your new and used goods.</p>
                 </div>-->
                <div style=""  >
                    <div class="modal-body colmn-padds">
                        <div class = "close-btn-review">
                            <button type="button" class="close" data-dismiss="modal">
                                &times;
                            </button>
                        </div>
                        <form role="form" style = "margin: 0px">
                            <div  class="col-lg-4 col-md-6 col-sm-6 col-xs-12 colmn-padds review-image-popup" >
                                <div class="texts1">
                                    <img  style="width: 253px;" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/nameohio-size2000x2000-shotflat-colorgrey.png" alt="...">
                                </div>
                                <div class="texts1 review-padds">
                                    <img  style="width: 60px;" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/nameohio-size2000x2000-shotflat-colorgrey.png" alt="...">
                                    <img  style=" opacity:0.5;width: 60px;" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/nameohio-size2000x2000-shotflat-colorgrey.png" alt="...">
                                    <img  style="opacity:0.5;width: 60px;" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/nameohio-size2000x2000-shotflat-colorgrey.png" alt="...">
                                    <img  style="opacity:0.5;width: 60px;" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/nameohio-size2000x2000-shotflat-colorgrey.png" alt="...">
                                </div>
                                <div class="footer review-padds">
                                    <button type="button" class="btn btn-default btn-lg footer-popup-btn" data-toggle="modal" data-target="#myModal3">UPDATE</button>
                                    <button type="button" class="btn btn-default btn-lg footer-popup-btn" data-toggle="modal" data-target="#myModal3" >CANCEL</button>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-6 col-sm-6 col-xs-12 colmn-padds" style = "margin-top: 20px;" >
                                <div  class="col-lg-9 col-md-6 col-sm-6 col-xs-12 colmn-padds column-right-pads column-padds-iphon6 " style = "text-align: left;"  >
                                    <div class = "review-pop-up-text">
                                        <h1><?php  echo $user_info['subCategory-type'];?></h1>
                                        <p> <?php  echo $user_info['brand'];?></p>
                                    </div>
                                    <div>
                                        <p>Type: <?php  echo $user_info['item'];?><br>
                                            Condition: <?php  echo $user_info['signs_of_wear_and_tear'];?>.</p>
                                    </div>
                                    <div>
                                        <p> <?php  echo $user_info['description'];?></p>
                                    </div>
                                </div>
                                <div  class="col-lg-3 col-md-6 col-sm-6 col-xs-12 colmn-padds" >
                                    <div class="col-md-3 new-cosigner-pads colmn-padds column-padds-iphon6" style="width: initial">
                                        <div class="form-group" style = "margin: 0px">
                                            <label for="inputdefault1" class = "column-margnbotops" style = "margin-top: 25px;">Retail Price</label>
                                            <input class="form-control" id="inputdefault1" type="text" disabled value = "<?php  echo $user_info['retail_value'];?>">
                                        </div>

                                        <div class="form-group" style = "margin: 0px">
                                            <label for="inputdefault2" class = "column-margnbotops" >Asking Price</label>
                                            <input class="form-control" id="inputdefault2" type="text" value = "<?php  echo $user_info['selling_price'];?>   ">
                                        </div>

                                        <div class="form-group" style = "margin: 0px">
                                            <label for="inputdefault3" class = "column-margnbotops" >Best Offer Price</label>
                                            <input class="form-control" id="inputdefault3" type="text" >
                                        </div>

                                        <div class="form-group" style = "margin: 0px">
                                            <label for="inputdefault3" class = "column-margnbotops">Website</label>
                                            <button type="button" class="btn btn-default btn-lg visit" ><a href = "<?php echo $user_info['store_website'];?>" target = "_blank">VISIT</a></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7  col-md-6 col-sm-6 col-xs-12 colmn-padds column-padds-iphon6" >
                                <div class="form-group" style = "text-align: left">
                                    <label for="comment" class = "column-margnbotops" style = "margin-top: 1% !important;">Review:</label>
                                    <textarea class="form-control textarea-column" rows="5" id="note-comment"  style = "overflow:auto;text-align: left" >
                                    </textarea>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div style = "clear:both"></div>
                <div class="modal-footer">
                </div>
            </div>
        </div>
    </div>
    <!--End of for sale pop-up-->

    <!--this is sold pop-up-->
    <!-- Trigger the modal with a button -->
    <!-- Modal -->
    <div class="modal fade" id="myModal6" role="dialog">
        <div class="modal-dialog modal-rev-size" style="margin: auto !important;">
            <!-- Modal content-->
            <div class="modal-content">
                <!-- <div class="modal-header">
                     <button type="button" class="close" data-dismiss="modal">&times;</button>
                     <h4 class="modal-title">SIGN UP <i>to</i> CONSIGN</h4>
                     <p>Life After Purchase is a easy and convenient way to sell your new and used goods.</p>
                 </div>-->
                <div style=""  >
                    <div class="modal-body colmn-padds">
                        <div class = "close-btn-review">
                            <button type="button" class="close" data-dismiss="modal">
                                &times;
                            </button>
                        </div>
                        <form role="form" style = "margin: 0px">
                            <div  class="col-lg-4 col-md-6 col-sm-6 col-xs-12 colmn-padds review-image-popup" >
                                <div class="texts1">
                                    <img  style="width: 253px;" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/nameohio-size2000x2000-shotflat-colorgrey.png" alt="...">
                                </div>
                                <div class="texts1 review-padds">
                                    <img  style="width: 60px;" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/nameohio-size2000x2000-shotflat-colorgrey.png" alt="...">
                                    <img  style=" opacity:0.5;width: 60px;" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/nameohio-size2000x2000-shotflat-colorgrey.png" alt="...">
                                    <img  style="opacity:0.5;width: 60px;" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/nameohio-size2000x2000-shotflat-colorgrey.png" alt="...">
                                    <img  style="opacity:0.5;width: 60px;" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/nameohio-size2000x2000-shotflat-colorgrey.png" alt="...">
                                </div>
                                <div class="footer review-padds">
                                    <button type="button" class="btn btn-default btn-lg footer-popup-btn" data-toggle="modal" data-target="#myModal3">VIEW PAGE</button>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-6 col-sm-6 col-xs-12 colmn-padds" style = "margin-top: 20px;" >
                                <div  class="col-lg-9 col-md-6 col-sm-6 col-xs-12 colmn-padds column-right-pads column-padds-iphon6 " style = "text-align: left;"  >
                                    <div class = "review-pop-up-text">
                                        <h1>HERMES</h1>
                                        <p>Rubis Togo Kelly 28cm Gold Hardware Shoulder Bag</p>
                                    </div>
                                    <div>
                                        <p>Type: Shoulder Bags
                                            Condition: New with tags  <br>This item has original tags and shows no visible signs wear.</p>
                                    </div>
                                    <div>
                                        <p>The bag in the Retourne style feature tonal stitching, front<br> toggle closure, clochette with lock and two keys, single tolled handle and optional shoulder strap.</p>
                                    </div>
                                </div>
                                <div  class="col-lg-3 col-md-6 col-sm-6 col-xs-12 colmn-padds" >
                                    <div class="col-md-3 new-cosigner-pads colmn-padds column-padds-iphon6" style="width: initial">
                                        <div class="form-group" style = "margin: 0px">
                                            <label for="inputdefault1" class = "column-margnbotops" style = "margin-top: 25px;">Retail Price</label>
                                            <input class="form-control" id="inputdefault1" type="text" disabled value = "<?php  echo $user_info['retail_value'];?>">
                                        </div>

                                        <div class="form-group" style = "margin: 0px">
                                            <label for="inputdefault2" class = "column-margnbotops" >Asking Price</label>
                                            <input class="form-control" id="inputdefault2" type="text" disabled value = "<?php  echo $user_info['selling_price'];?>   ">
                                        </div>

                                        <div class="form-group" style = "margin: 0px">
                                            <label for="inputdefault3" class = "column-margnbotops" >Best Offer Price</label>
                                            <input class="form-control" id="inputdefault3" type="text" disabled value = "$9,500">
                                        </div>

                                        <div class="form-group" style = "margin: 0px">
                                            <label for="inputdefault3" class = "column-margnbotops">Website</label>
                                            <button type="button" class="btn btn-default btn-lg visit" ><a href = "<?php echo $user_info['store_website'];?>" target = "_blank">VISIT</a></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7  col-md-6 col-sm-6 col-xs-12 colmn-padds column-padds-iphon6" >
                                <div class="form-group" style = "text-align: left">
                                    <label for="comment" class = "column-margnbotops" style = "margin-top: 1% !important;">Comment:</label>
                                    <textarea class="form-control textarea-column" disabled rows="5" id="note-comment"  style = "overflow:auto;text-align: left" >
                                    </textarea>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div style = "clear:both"></div>
                <div class="modal-footer">
                </div>
            </div>
        </div>
    </div>
    <!--End of sold pop-up-->






    <!--this is admin pop-up-->
    <!--this is new items pop-up-->
    <!-- Trigger the modal with a button -->
    <!-- Modal -->
    <div class="modal fade" id="myModal7" role="dialog">
        <div class="modal-dialog modal-rev-size" style="margin: auto !important;">
            <!-- Modal content-->
            <div class="modal-content">
                <!-- <div class="modal-header">
                     <button type="button" class="close" data-dismiss="modal">&times;</button>
                     <h4 class="modal-title">SIGN UP <i>to</i> CONSIGN</h4>
                     <p>Life After Purchase is a easy and convenient way to sell your new and used goods.</p>
                 </div>-->
                <div style=""  >
                    <div class="modal-body colmn-padds">
                        <div class = "close-btn-review">
                            <button type="button" class="close" data-dismiss="modal">
                                &times;
                            </button>
                        </div>
                        <form role="form" style = "margin: 0px">
                            <div  class="col-lg-4 col-md-6 col-sm-6 col-xs-12 colmn-padds review-image-popup" >
                                <div class="texts1">
                                    <img  style="width: 253px;" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/nameohio-size2000x2000-shotflat-colorgrey.png" alt="...">
                                </div>
                                <div class="texts1 review-padds">
                                    <img  style="width: 60px;" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/nameohio-size2000x2000-shotflat-colorgrey.png" alt="...">
                                    <img  style=" opacity:0.5;width: 60px;" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/nameohio-size2000x2000-shotflat-colorgrey.png" alt="...">
                                    <img  style="opacity:0.5;width: 60px;" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/nameohio-size2000x2000-shotflat-colorgrey.png" alt="...">
                                    <img  style="opacity:0.5;width: 60px;" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/nameohio-size2000x2000-shotflat-colorgrey.png" alt="...">
                                </div>
                                <div class="footer review-padds">
                                    <button type="button" class="btn btn-default btn-lg footer-popup-btn" data-toggle="modal" data-target="#myModal3">ACCEPT OFFER</button>
                                    <button type="button" class="btn btn-default btn-lg footer-popup-btn" data-toggle="modal" data-target="#myModal3" >DENY OFFER</button>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-6 col-sm-6 col-xs-12 colmn-padds" style = "margin-top: 20px;" >
                                <div  class="col-lg-9 col-md-6 col-sm-6 col-xs-12 colmn-padds column-right-pads column-padds-iphon6 " style = "text-align: left;"  >
                                    <div class = "review-pop-up-text">
                                        <h1>HERMES</h1>
                                        <p>Rubis Togo Kelly 28cm Gold Hardware Shoulder Bag</p>
                                    </div>
                                    <div>
                                        <p>Type: Shoulder Bags
                                            Condition: New with tags  <br>This item has original tags and shows no visible signs wear.</p>
                                    </div>
                                    <div>
                                        <p>The bag in the Retourne style feature tonal stitching, front<br> toggle closure, clochette with lock and two keys, single tolled handle and optional shoulder strap.</p>
                                    </div>
                                </div>
                                <div  class="col-lg-3 col-md-6 col-sm-6 col-xs-12 colmn-padds" >
                                    <div class="col-md-3 new-cosigner-pads colmn-padds column-padds-iphon6" style="width: initial">
                                        <div class="form-group" style = "margin: 0px">
                                            <label for="inputdefault1" class = "column-margnbotops" style = "margin-top: 25px;">Retail Price</label>
                                            <input class="form-control" id="inputdefault1" type="text" value = "<?php  echo $user_info['retail_value'];?>">
                                        </div>

                                        <div class="form-group" style = "margin: 0px">
                                            <label for="inputdefault2" class = "column-margnbotops" >Asking Price</label>
                                            <input class="form-control" id="inputdefault2" type="text" value = "<?php  echo $user_info['selling_price'];?>   ">
                                        </div>

                                        <div class="form-group" style = "margin: 0px">
                                            <label for="inputdefault3" class = "column-margnbotops" >Best Offer Price</label>
                                            <input class="form-control" id="inputdefault3" type="text" value = "$9,500">
                                        </div>

                                        <div class="form-group" style = "margin: 0px">
                                            <label for="inputdefault3" class = "column-margnbotops">Website</label>
                                            <button type="button" class="btn btn-default btn-lg visit" ><a href = "<?php echo $user_info['store_website'];?>" target = "_blank">VISIT</a></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7  col-md-6 col-sm-6 col-xs-12 colmn-padds column-padds-iphon6" >
                                <div class="form-group" style = "text-align: left">
                                    <label for="comment" class = "column-margnbotops" style = "margin-top: 1% !important;">Comment:</label>
                                    <textarea class="form-control textarea-column" rows="5" id="note-comment"  style = "overflow:auto;text-align: left" >
                                    </textarea>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div style = "clear:both"></div>
                <div class="modal-footer">
                </div>
            </div>
        </div>
    </div>
    <!--End of NEW ITEMS pop-up-->

    <!--this is approved pop-up-->
    <!-- Trigger the modal with a button -->
    <!-- Modal -->
    <div>
<!--    <div class="modal fade" id="myModal8" role="dialog">-->
<!--        <div class="modal-dialog modal-rev-size" style="margin: auto !important;">-->
<!--            <!-- Modal content-->
<!--            <div class="modal-content">-->
<!--                <!-- <div class="modal-header">-->
<!--                     <button type="button" class="close" data-dismiss="modal">&times;</button>-->
<!--                     <h4 class="modal-title">SIGN UP <i>to</i> CONSIGN</h4>-->
<!--                     <p>Life After Purchase is a easy and convenient way to sell your new and used goods.</p>-->
<!--                 </div>-->
<!--                <div style=""  >-->
<!--                    <div class="modal-body colmn-padds">-->
<!--                        <div class = "close-btn-review">-->
<!--                            <button type="button" class="close" data-dismiss="modal">-->
<!--                                &times;-->
<!--                            </button>-->
<!--                        </div>-->
<!--                        <form role="form" style = "margin: 0px">-->
<!--                            <div  class="col-lg-4 col-md-6 col-sm-6 col-xs-12 colmn-padds review-image-popup" >-->
<!--                                <div class="texts1">-->
<!--                                    <img  style="width: 253px;" src = "--><?php //echo get_bloginfo ( 'template_url' ); ?><!--/img/nameohio-size2000x2000-shotflat-colorgrey.png" alt="...">-->
<!--                                </div>-->
<!--                                <div class="texts1 review-padds">-->
<!--                                    <img  style="width: 60px;" src = "--><?php //echo get_bloginfo ( 'template_url' ); ?><!--/img/nameohio-size2000x2000-shotflat-colorgrey.png" alt="...">-->
<!--                                    <img  style=" opacity:0.5;width: 60px;" src = "--><?php //echo get_bloginfo ( 'template_url' ); ?><!--/img/nameohio-size2000x2000-shotflat-colorgrey.png" alt="...">-->
<!--                                    <img  style="opacity:0.5;width: 60px;" src = "--><?php //echo get_bloginfo ( 'template_url' ); ?><!--/img/nameohio-size2000x2000-shotflat-colorgrey.png" alt="...">-->
<!--                                    <img  style="opacity:0.5;width: 60px;" src = "--><?php //echo get_bloginfo ( 'template_url' ); ?><!--/img/nameohio-size2000x2000-shotflat-colorgrey.png" alt="...">-->
<!--                                </div>-->
<!--                                <div class="footer review-padds">-->
<!--                                    <button type="button" class="btn btn-default btn-lg footer-popup-btn" data-toggle="modal" data-target="#myModal3">UPDATE</button>-->
<!--                                    <button type="button" class="btn btn-default btn-lg footer-popup-btn" data-toggle="modal" data-target="#myModal3" >CANCEL</button>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="col-lg-7 col-md-6 col-sm-6 col-xs-12 colmn-padds" style = "margin-top: 20px;" >-->
<!--                                <div  class="col-lg-9 col-md-6 col-sm-6 col-xs-12 colmn-padds column-right-pads column-padds-iphon6 " style = "text-align: left;"  >-->
<!--                                    <div class = "review-pop-up-text">-->
<!--                                        <h1>--><?php // echo $user_info['subCategory-type'];?><!--</h1>-->
<!--                                        <p> --><?php // echo $user_info['brand'];?><!--</p>-->
<!--                                    </div>-->
<!--                                    <div>-->
<!--                                        <p>Type: --><?php // echo $user_info['item'];?><!--<br>-->
<!--                                            Condition: --><?php // echo $user_info['signs_of_wear_and_tear'];?><!--.</p>-->
<!--                                    </div>-->
<!--                                    <div>-->
<!--                                        <p> --><?php // echo $user_info['description'];?><!--</p>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div  class="col-lg-3 col-md-6 col-sm-6 col-xs-12 colmn-padds" >-->
<!--                                    <div class="col-md-3 new-cosigner-pads colmn-padds column-padds-iphon6" style="width: initial">-->
<!--                                        <div class="form-group" style = "margin: 0px">-->
<!--                                            <label for="inputdefault1" class = "column-margnbotops" style = "margin-top: 25px;">Retail Price</label>-->
<!--                                            <input class="form-control" id="inputdefault1" type="text" disabled value = "--><?php // echo $user_info['retail_value'];?><!--">
<!--                                        </div>-->
<!---->
<!--                                        <div class="form-group" style = "margin: 0px">-->
<!--                                            <label for="inputdefault2" class = "column-margnbotops" >Asking Price</label>-->
<!--                                            <input class="form-control" id="inputdefault2" type="text" value = "--><?php // echo $user_info['selling_price'];?><!--   ">-->
<!--                                        </div>-->
<!---->
<!--                                        <div class="form-group" style = "margin: 0px">-->
<!--                                            <label for="inputdefault3" class = "column-margnbotops" >Best Offer Price</label>-->
<!--                                            <input class="form-control" id="inputdefault3" type="text" >-->
<!--                                        </div>-->
<!---->
<!--                                        <div class="form-group" style = "margin: 0px">-->
<!--                                            <label for="inputdefault3" class = "column-margnbotops">Website</label>-->
<!--                                            <button type="button" class="btn btn-default btn-lg visit" ><a href = "--><?php //echo $user_info['store_website'];?><!--" target = "_blank">VISIT</a></button>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="col-lg-7  col-md-6 col-sm-6 col-xs-12 colmn-padds column-padds-iphon6" >-->
<!--                                <div class="form-group" style = "text-align: left">-->
<!--                                    <label for="comment" class = "column-margnbotops" style = "margin-top: 1% !important;">Review:</label>-->
<!--                                    <textarea class="form-control textarea-column" rows="5" id="note-comment"  style = "overflow:auto;text-align: left" >-->
<!--                                    </textarea>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </form>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div style = "clear:both"></div>-->
<!--                <div class="modal-footer">-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->

        </div>
    <!--End of approved pop-up-->


    <!--this is received/pendingpop-up-->
    <!-- Trigger the modal with a button -->
    <!-- Modal -->
    <div>
<!--    <div class="modal fade" id="myModal9" role="dialog">-->
<!--        <div class="modal-dialog modal-rev-size" style="margin: auto !important;">-->
<!--            <!-- Modal content-->
<!--            <div class="modal-content">-->
<!--                <!-- <div class="modal-header">-->
<!--                     <button type="button" class="close" data-dismiss="modal">&times;</button>-->
<!--                     <h4 class="modal-title">SIGN UP <i>to</i> CONSIGN</h4>-->
<!--                     <p>Life After Purchase is a easy and convenient way to sell your new and used goods.</p>-->
<!--                 </div>-->
<!--                <div style=""  >-->
<!--                    <div class="modal-body colmn-padds">-->
<!--                        <div class = "close-btn-review">-->
<!--                            <button type="button" class="close" data-dismiss="modal">-->
<!--                                &times;-->
<!--                            </button>-->
<!--                        </div>-->
<!--                        <form role="form" style = "margin: 0px">-->
<!--                            <div  class="col-lg-4 col-md-6 col-sm-6 col-xs-12 colmn-padds review-image-popup" >-->
<!--                                <div class="texts1">-->
<!--                                    <img  style="width: 253px;" src = "--><?php //echo get_bloginfo ( 'template_url' ); ?><!--/img/nameohio-size2000x2000-shotflat-colorgrey.png" alt="...">-->
<!--                                </div>-->
<!--                                <div class="texts1 review-padds">-->
<!--                                    <img  style="width: 60px;" src = "--><?php //echo get_bloginfo ( 'template_url' ); ?><!--/img/nameohio-size2000x2000-shotflat-colorgrey.png" alt="...">-->
<!--                                    <img  style=" opacity:0.5;width: 60px;" src = "--><?php //echo get_bloginfo ( 'template_url' ); ?><!--/img/nameohio-size2000x2000-shotflat-colorgrey.png" alt="...">-->
<!--                                    <img  style="opacity:0.5;width: 60px;" src = "--><?php //echo get_bloginfo ( 'template_url' ); ?><!--/img/nameohio-size2000x2000-shotflat-colorgrey.png" alt="...">-->
<!--                                    <img  style="opacity:0.5;width: 60px;" src = "--><?php //echo get_bloginfo ( 'template_url' ); ?><!--/img/nameohio-size2000x2000-shotflat-colorgrey.png" alt="...">-->
<!--                                </div>-->
<!--                                <div class="footer review-padds">-->
<!--                                    <button type="button" class="btn btn-default btn-lg footer-popup-btn" data-toggle="modal" data-target="#myModal3">ACCEPT OFFER</button>-->
<!--                                    <button type="button" class="btn btn-default btn-lg footer-popup-btn" data-toggle="modal" data-target="#myModal3" >DENY OFFER</button>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="col-lg-7 col-md-6 col-sm-6 col-xs-12 colmn-padds" style = "margin-top: 20px;" >-->
<!--                                <div  class="col-lg-9 col-md-6 col-sm-6 col-xs-12 colmn-padds column-right-pads column-padds-iphon6 " style = "text-align: left;"  >-->
<!--                                    <div class = "review-pop-up-text">-->
<!--                                        <h1>HERMES</h1>-->
<!--                                        <p>Rubis Togo Kelly 28cm Gold Hardware Shoulder Bag</p>-->
<!--                                    </div>-->
<!--                                    <div>-->
<!--                                        <p>Type: Shoulder Bags-->
<!--                                            Condition: New with tags  <br>This item has original tags and shows no visible signs wear.</p>-->
<!--                                    </div>-->
<!--                                    <div>-->
<!--                                        <p>The bag in the Retourne style feature tonal stitching, front<br> toggle closure, clochette with lock and two keys, single tolled handle and optional shoulder strap.</p>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div  class="col-lg-3 col-md-6 col-sm-6 col-xs-12 colmn-padds" >-->
<!--                                    <div class="col-md-3 new-cosigner-pads colmn-padds column-padds-iphon6" style="width: initial">-->
<!--                                        <div class="form-group" style = "margin: 0px">-->
<!--                                            <label for="inputdefault1" class = "column-margnbotops" style = "margin-top: 25px;">Retail Price</label>-->
<!--                                            <input class="form-control" id="inputdefault1" type="text" value = "--><?php // echo $user_info['retail_value'];?><!--">-->
<!--                                        </div>-->
<!---->
<!--                                        <div class="form-group" style = "margin: 0px">-->
<!--                                            <label for="inputdefault2" class = "column-margnbotops" >Asking Price</label>-->
<!--                                            <input class="form-control" id="inputdefault2" type="text" value = "--><?php // echo $user_info['selling_price'];?><!--   ">-->
<!--                                        </div>-->
<!---->
<!--                                        <div class="form-group" style = "margin: 0px">-->
<!--                                            <label for="inputdefault3" class = "column-margnbotops" >Best Offer Price</label>-->
<!--                                            <input class="form-control" id="inputdefault3" type="text" value = "$9,500">-->
<!--                                        </div>-->
<!---->
<!--                                        <div class="form-group" style = "margin: 0px">-->
<!--                                            <label for="inputdefault3" class = "column-margnbotops">Website</label>-->
<!--                                            <button type="button" class="btn btn-default btn-lg visit" ><a href = "--><?php //echo $user_info['store_website'];?><!--" target = "_blank">VISIT</a></button>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="col-lg-7  col-md-6 col-sm-6 col-xs-12 colmn-padds column-padds-iphon6" >-->
<!--                                <div class="form-group" style = "text-align: left">-->
<!--                                    <label for="comment" class = "column-margnbotops" style = "margin-top: 1% !important;">Comment:</label>-->
<!--                                    <textarea class="form-control textarea-column" rows="5" id="note-comment"  style = "overflow:auto;text-align: left" >-->
<!--                                    </textarea>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </form>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div style = "clear:both"></div>-->
<!--                <div class="modal-footer">-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
    </div>
    <!--End of received/pending pop-up-->

    <div class="form-group">
        <div class="col-lg-12  col-md-12 col-sm-12 col-xs-12 cover-photo-dev" style="margin-bottom: -125px;" >
            <img style="height:300px; width: 1110px; " src = "<?php echo get_bloginfo ( 'template_url'); ?>/img/gaukukh-nandanban-logo.jpg"  alt="...">
        </div>
        <div class = "cover-pht-div" >
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12  cover-pht-div-img"  >
                <img  src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/Balenciaga.jpg" alt="...">

            </div>
            <div class="col-lg-5 col-md-5 col-sm-8 col-xs-12 cover-p-name" style="position: relative;top: 20px;left: 50px;" >
                <h1>MONICA SIMPSON</h1>
                <h4>PROFIT SINCE 6/20/2016<br>$7,218</h4>
            </div>
        </div>
        <div class="col-lg-12  col-md-12 col-sm-12 col-xs-12 sub-menuBar "  >
            <!-- start menu  -->
            <div class=" navigation rev-navigation colmn-padds1" id="sticker"><!-- navigation menu-->
                <ul class=" menu-bars clicking-menu-profile" style = "display: block !important;">
                    <!-- checking if users-->
<!--                    <li class = "link-menu-bars" rel = "under-review">-->
<!--                        <a>-->
<!--                            UNDER REVIEW <span> ( --><?php //if($under_review > 0)echo count($under_review); ?><!-- )</span>-->
<!--                        </a>-->
<!--                    </li>-->
<!--                    <li class = "link-menu-bars" rel = "approvals">-->
<!--                        <a  >-->
<!--                            APPROVALS <span> ( --><?php //if($under_review > 0)echo count($under_review); ?><!-- )</span>-->
<!--                        </a>-->
<!--                    </li>-->
<!--                    <li class = "link-menu-bars" rel = "for-sale">-->
<!--                        <a>-->
<!--                            FOR SALE <span> ( --><?php //if($under_review > 0)echo count($under_review); ?><!-- )</span>-->
<!--                        </a>-->
<!--                    </li>-->
<!--                    <li class = "link-menu-bars" rel = "sold">-->
<!--                        <a>-->
<!--                            SOLD <span> ( --><?php //if($under_review > 0)echo count($under_review); ?><!-- )</span>-->
<!--                        </a>-->
<!--                    </li>-->





<!--                        <!--else admin -->
                        <li class = "link-menu-bars" rel = "member-tabs">
                            <a>
                                MEMBERS(3)
                            </a>
                        </li>
                        <li class = "link-menu-bars" rel = "new-items">
                            <a>
                                NEW ITEMS
                            </a>
                        </li>

                        <li class = "link-menu-bars" rel = "approved">
                            <a>
                                APPROVED
                            </a>
                        </li>
                        <li class = "link-menu-bars" rel = "received_pending">
                            <a>
                                RECEIVED/PENDING
                            </a>
                        </li>
                        <li class = "link-menu-bars" rel = "for_sale">
                            <a>
                                FOR SALE
                            </a>
                        </li>
                    <!--
                    <li class = "link-menu-bars">
                        <a >
                            ADD TO WISHLIST
                        </a>
                    </li>
                    <li  class = "link-menu-bars">
                        <a  >
                            POTENTIAL PROFIT  <span class = "color-red">$2,430</span>
                        </a>
                    </li>
-->
                </ul>
            </div>
        </div>
        <!-- end of menu -->
    </div></div>
    <div class=" col-lg-12  col-md-12 col-sm-12 col-xs-12 col-pop-rev "  >
        <!--member account -->
        <!--Under review tabs -->
        <div class="col-lg-12  col-md-12 col-sm-12 col-xs-12 centered under-review " style = "display: none">

            <div class="clearfix visible-sm"></div>
            <div class="clearfix visible-xs "></div>

            <div style = "margin:auto">
            <div class="col-lg-2  col-md-2 col-sm-2 col-xs-5 col-pop-rev-img"  >
                    <div class="texts1-rev">
                        <img   src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/nameohio-size2000x2000-shotflat-colorgrey.png" alt="">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style = "border-top: 1px solid black"></div>
                        <button type="button" class="btn btn-default btn-lg" data-toggle="modal" data-target="#myModal3" >EDIT</button>
                    </div>
            </div>
            <div class="col-lg-2  col-md-2 col-sm-2 col-xs-5 col-pop-rev-img" >
                <div class="texts1-rev">
                    <img   src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/nameohio-size2000x2000-shotflat-colorgrey.png" alt="...">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style = "border-top: 1px solid black"></div>
                    <button type="button" class="btn btn-default btn-lg" data-toggle="modal" data-target="#myModal3" >EDIT</button>
                </div>
            </div>
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-5 col-pop-rev-img" >
                    <div class="texts1-rev">
                        <img  src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/nameohio-size2000x2000-shotflat-colorgrey.png" alt="...">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style = "border-top: 1px solid black"></div>
                        <button type="button" class="btn btn-default btn-lg .btn-md .btn-sm .btn-xs" data-toggle="modal" data-target="#myModal3" >EDIT</button>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-5 col-pop-rev-img" >
                    <div class="texts1-rev">
                        <img  src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/nameohio-size2000x2000-shotflat-colorgrey.png   " alt="...">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style = "border-top: 1px solid black"></div>
                        <button type="button" class="btn btn-default btn-lg .btn-md .btn-sm .btn-xs" data-toggle="modal" data-target="#myModal3" >EDIT</button>
                    </div>
                </div>

            </div>

        </div>

        <!--Approvals tabs -->

        <div class="col-lg-12  col-md-12 col-sm-12 col-xs-12 centered approvals" style = "display: none">

            <div class="clearfix visible-sm"></div>
            <div class="clearfix visible-xs "></div>

            <div style = "margin:auto">
                <div class="col-lg-2  col-md-2 col-sm-2 col-xs-5 col-pop-rev-img"  >
                    <div class="texts1-rev">
                        <img   src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/nameohio-size2000x2000-shotflat-colorgrey.png" alt="">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style = "border-top: 1px solid black"></div>
                        <button type="button" class="btn btn-default btn-lg" data-toggle="modal" data-target="#myModal4" >REVIEW</button>
                    </div>
                </div>
                <div class="col-lg-2  col-md-2 col-sm-2 col-xs-5 col-pop-rev-img" >
                    <div class="texts1-rev">
                        <img   src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/nameohio-size2000x2000-shotflat-colorgrey.png" alt="...">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style = "border-top: 1px solid black"></div>
                        <button type="button" class="btn btn-default btn-lg" data-toggle="modal" data-target="#myModal4" >REVIEW</button>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-5 col-pop-rev-img" >
                    <div class="texts1-rev">
                        <img  src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/nameohio-size2000x2000-shotflat-colorgrey.png" alt="...">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style = "border-top: 1px solid black"></div>
                        <button type="button" class="btn btn-default btn-lg .btn-md .btn-sm .btn-xs" data-toggle="modal" data-target="#myModal4" >REVIEW</button>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-5 col-pop-rev-img" >
                    <div class="texts1-rev">
                        <img  src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/nameohio-size2000x2000-shotflat-colorgrey.png   " alt="...">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style = "border-top: 1px solid black"></div>
                        <button type="button" class="btn btn-default btn-lg .btn-md .btn-sm .btn-xs" data-toggle="modal" data-target="#myModal4" >REVIEW</button>
                    </div>
                </div>

            </div>

        </div>

        <!--for-sale tabs -->

        <div class="col-lg-12  col-md-12 col-sm-12 col-xs-12 centered for-sale" style = "display: none">

            <div class="clearfix visible-sm"></div>
            <div class="clearfix visible-xs "></div>

            <div style = "margin:auto">
                <div class="col-lg-2  col-md-2 col-sm-2 col-xs-5 col-pop-rev-img"  >
                    <div class="texts1-rev">
                        <img   src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/nameohio-size2000x2000-shotflat-colorgrey.png" alt="">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style = "border-top: 1px solid black"></div>
                        <button type="button" class="btn btn-default btn-lg" data-toggle="modal" data-target="#myModal5" >EDIT</button>
                    </div>
                </div>
                <div class="col-lg-2  col-md-2 col-sm-2 col-xs-5 col-pop-rev-img" >
                    <div class="texts1-rev">
                        <img   src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/nameohio-size2000x2000-shotflat-colorgrey.png" alt="...">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style = "border-top: 1px solid black"></div>
                        <button type="button" class="btn btn-default btn-lg" data-toggle="modal" data-target="#myModal5" >EDIT</button>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-5 col-pop-rev-img" >
                    <div class="texts1-rev">
                        <img  src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/nameohio-size2000x2000-shotflat-colorgrey.png" alt="...">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style = "border-top: 1px solid black"></div>
                        <button type="button" class="btn btn-default btn-lg .btn-md .btn-sm .btn-xs" data-toggle="modal" data-target="#myModal5" >EDIT</button>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-5 col-pop-rev-img" >
                    <div class="texts1-rev">
                        <img  src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/nameohio-size2000x2000-shotflat-colorgrey.png   " alt="...">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style = "border-top: 1px solid black"></div>
                        <button type="button" class="btn btn-default btn-lg .btn-md .btn-sm .btn-xs" data-toggle="modal" data-target="#myModal5" >EDIT</button>
                    </div>
                </div>

            </div>

        </div>
        <!--sold tabs -->

        <div class="col-lg-12  col-md-12 col-sm-12 col-xs-12 centered sold" style = "display: none">

            <div class="clearfix visible-sm"></div>
            <div class="clearfix visible-xs "></div>

            <div style = "margin:auto">
                <div class="col-lg-2  col-md-2 col-sm-2 col-xs-5 col-pop-rev-img"  >
                    <div class="texts1-rev">
                        <img   src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/nameohio-size2000x2000-shotflat-colorgrey.png" alt="">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style = "border-top: 1px solid black"></div>
                        <button type="button" class="btn btn-default btn-lg" data-toggle="modal" data-target="#myModal6" >RECEIPT</button>
                    </div>
                </div>
                <div class="col-lg-2  col-md-2 col-sm-2 col-xs-5 col-pop-rev-img" >
                    <div class="texts1-rev">
                        <img   src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/nameohio-size2000x2000-shotflat-colorgrey.png" alt="...">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style = "border-top: 1px solid black"></div>
                        <button type="button" class="btn btn-default btn-lg" data-toggle="modal" data-target="#myModal6" >RECEIPT</button>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-5 col-pop-rev-img" >
                    <div class="texts1-rev">
                        <img  src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/nameohio-size2000x2000-shotflat-colorgrey.png" alt="...">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style = "border-top: 1px solid black"></div>
                        <button type="button" class="btn btn-default btn-lg .btn-md .btn-sm .btn-xs" data-toggle="modal" data-target="#myModal6" >RECEIPT</button>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-5 col-pop-rev-img" >
                    <div class="texts1-rev">
                        <img  src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/nameohio-size2000x2000-shotflat-colorgrey.png   " alt="...">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style = "border-top: 1px solid black"></div>
                        <button type="button" class="btn btn-default btn-lg .btn-md .btn-sm .btn-xs" data-toggle="modal" data-target="#myModal6" >RECEIPT</button>
                    </div>
                </div>

            </div>

        </div>


        <!--admin account -->
        <!--members tabs -->

        <div class="col-lg-12  col-md-12 col-sm-12 col-xs-12 centered member-tabs active-tab " style = "display: block">
            <div class="clearfix visible-sm"></div>
            <div class="clearfix visible-xs "></div>
        </div>

        <!--NEW ITEMS tabs -->

        <div class="col-lg-12  col-md-12 col-sm-12 col-xs-12 centered new-items" style = "display: none">

            <div class="clearfix visible-sm"></div>
            <div class="clearfix visible-xs "></div>

            <div style = "margin:auto">
                <div class="col-lg-2  col-md-2 col-sm-2 col-xs-5 col-pop-rev-img"  >
                    <div class="texts1-rev">
                        <img   src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/nameohio-size2000x2000-shotflat-colorgrey.png" alt="">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style = "border-top: 1px solid black"></div>
                        <button type="button" class="btn btn-default btn-lg" data-toggle="modal" data-target="#myModal7" >REVIEW</button>
                    </div>
                </div>
                <div class="col-lg-2  col-md-2 col-sm-2 col-xs-5 col-pop-rev-img" >
                    <div class="texts1-rev">
                        <img   src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/nameohio-size2000x2000-shotflat-colorgrey.png" alt="...">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style = "border-top: 1px solid black"></div>
                        <button type="button" class="btn btn-default btn-lg" data-toggle="modal" data-target="#myModal7" >REVIEW</button>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-5 col-pop-rev-img" >
                    <div class="texts1-rev">
                        <img  src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/nameohio-size2000x2000-shotflat-colorgrey.png" alt="...">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style = "border-top: 1px solid black"></div>
                        <button type="button" class="btn btn-default btn-lg .btn-md .btn-sm .btn-xs" data-toggle="modal" data-target="#myModal7" >REVIEW</button>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-5 col-pop-rev-img" >
                    <div class="texts1-rev">
                        <img  src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/nameohio-size2000x2000-shotflat-colorgrey.png   " alt="...">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style = "border-top: 1px solid black"></div>
                        <button type="button" class="btn btn-default btn-lg .btn-md .btn-sm .btn-xs" data-toggle="modal" data-target="#myModal7" >REVIEW</button>
                    </div>
                </div>

            </div>

        </div>

        <!--approved tabs -->

        <div class="col-lg-12  col-md-12 col-sm-12 col-xs-12 centered approved" style = "display: none">

            <div class="clearfix visible-sm"></div>
            <div class="clearfix visible-xs "></div>

            <div style = "margin:auto">
                <div class="col-lg-2  col-md-2 col-sm-2 col-xs-5 col-pop-rev-img"  >
                    <div class="texts1-rev">
                        <img   src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/nameohio-size2000x2000-shotflat-colorgrey.png" alt="">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style = "border-top: 1px solid black"></div>
                        <button type="button" class="btn btn-default btn-lg" data-toggle="modal" data-target="#myModal8" >DELIVER</button>
                    </div>
                </div>
                <div class="col-lg-2  col-md-2 col-sm-2 col-xs-5 col-pop-rev-img" >
                    <div class="texts1-rev">
                        <img   src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/nameohio-size2000x2000-shotflat-colorgrey.png" alt="...">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style = "border-top: 1px solid black"></div>
                        <button type="button" class="btn btn-default btn-lg" data-toggle="modal" data-target="#myModal8" >DELIVER</button>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-5 col-pop-rev-img" >
                    <div class="texts1-rev">
                        <img  src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/nameohio-size2000x2000-shotflat-colorgrey.png" alt="...">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style = "border-top: 1px solid black"></div>
                        <button type="button" class="btn btn-default btn-lg .btn-md .btn-sm .btn-xs" data-toggle="modal" data-target="#myModal8" >DELIVER</button>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-5 col-pop-rev-img" >
                    <div class="texts1-rev">
                        <img  src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/nameohio-size2000x2000-shotflat-colorgrey.png   " alt="...">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style = "border-top: 1px solid black"></div>
                        <button type="button" class="btn btn-default btn-lg .btn-md .btn-sm .btn-xs" data-toggle="modal" data-target="#myModal8" >DELIVER</button>
                    </div>
                </div>

            </div>

        </div>

        <!--received/pending tabs -->

        <div class="col-lg-12  col-md-12 col-sm-12 col-xs-12 centered received_pending" style = "display: none">

            <div class="clearfix visible-sm"></div>
            <div class="clearfix visible-xs "></div>

            <div style = "margin:auto">
                <div class="col-lg-2  col-md-2 col-sm-2 col-xs-5 col-pop-rev-img"  >
                    <div class="texts1-rev">
                        <img   src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/nameohio-size2000x2000-shotflat-colorgrey.png" alt="">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style = "border-top: 1px solid black"></div>
                        <button type="button" class="btn btn-default btn-lg" data-toggle="modal" data-target="#myModal9" >SALE NOW</button>
                    </div>
                </div>
                <div class="col-lg-2  col-md-2 col-sm-2 col-xs-5 col-pop-rev-img" >
                    <div class="texts1-rev">
                        <img   src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/nameohio-size2000x2000-shotflat-colorgrey.png" alt="...">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style = "border-top: 1px solid black"></div>
                        <button type="button" class="btn btn-default btn-lg" data-toggle="modal" data-target="#myModal9" >SALE NOW</button>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-5 col-pop-rev-img" >
                    <div class="texts1-rev">
                        <img  src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/nameohio-size2000x2000-shotflat-colorgrey.png" alt="...">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style = "border-top: 1px solid black"></div>
                        <button type="button" class="btn btn-default btn-lg .btn-md .btn-sm .btn-xs" data-toggle="modal" data-target="#myModal9" >SALE NOW</button>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-5 col-pop-rev-img" >
                    <div class="texts1-rev">
                        <img  src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/nameohio-size2000x2000-shotflat-colorgrey.png   " alt="...">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style = "border-top: 1px solid black"></div>
                        <button type="button" class="btn btn-default btn-lg .btn-md .btn-sm .btn-xs" data-toggle="modal" data-target="#myModal9" >SALE NOW</button>
                    </div>
                </div>

            </div>

        </div>

        <!--for sale tabs -->

        <div class="col-lg-12  col-md-12 col-sm-12 col-xs-12 centered for_sale" style = "display: none">

            <div class="clearfix visible-sm"></div>
            <div class="clearfix visible-xs "></div>

            <div style = "margin:auto">
                <div class="col-lg-2  col-md-2 col-sm-2 col-xs-5 col-pop-rev-img"  >
                    <div class="texts1-rev">
                        <img   src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/nameohio-size2000x2000-shotflat-colorgrey.png" alt="">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style = "border-top: 1px solid black"></div>
                        <button type="button" class="btn btn-default btn-lg" data-toggle="modal" >DELETE</button>
                    </div>
                </div>
                <div class="col-lg-2  col-md-2 col-sm-2 col-xs-5 col-pop-rev-img" >
                    <div class="texts1-rev">
                        <img   src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/nameohio-size2000x2000-shotflat-colorgrey.png" alt="...">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style = "border-top: 1px solid black"></div>
                        <button type="button" class="btn btn-default btn-lg" data-toggle="modal" >DELETE</button>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-5 col-pop-rev-img" >
                    <div class="texts1-rev">
                        <img  src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/nameohio-size2000x2000-shotflat-colorgrey.png" alt="...">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style = "border-top: 1px solid black"></div>
                        <button type="button" class="btn btn-default btn-lg .btn-md .btn-sm .btn-xs" data-toggle="modal"  >DELETE</button>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-5 col-pop-rev-img" >
                    <div class="texts1-rev">
                        <img  src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/nameohio-size2000x2000-shotflat-colorgrey.png   " alt="...">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style = "border-top: 1px solid black"></div>
                        <button type="button" class="btn btn-default btn-lg .btn-md .btn-sm .btn-xs" data-toggle="modal"  >DELETE</button>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <div class = "container">
        <div class="row">
            <div class="col-lg-12">
            </div>
            <div class="col-md-8">

                <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>
                        <div class="container">
                            <h4 class="page_title"><span class="black"><?php the_title(); ?></span></h4>
                        </div>
                        <?php the_content(); ?>
                    <?php endwhile; ?>
                    <!--do not delete-->
                <?php else : ?>
                    Not Found
                    Sorry, but you are looking for something that isn't here.
                    <!--do not delete-->
                <?php endif; ?>
            </div>
        </div>
    </div>

<?php
require_once('sub-footer.php');
?>