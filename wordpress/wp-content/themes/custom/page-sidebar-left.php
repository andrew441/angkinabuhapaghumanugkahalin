<?php
/**
 * Template Name: Sidebar Left
 */ 
require_once('header.php');// query
//$under_review= $wpdb->get_row( "SELECT count(*) FROM wp_item WHERE ID = 40", ARRAY_A );
$user_status_id = $_SESSION['user_status'];
$user_id = $_SESSION['user_id'];

?>
<!-- Bootstrap Core CSS -->
    <link href="<?php echo  bloginfo("template_url") ?>/css/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="http://lifeafterpurchase.com/wp-content/themes/custom/css/bootstrap/css/simple-sidebar.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="http://lifeafterpurchase.com/wp-content/themes/custom/css/custom-list.css" />
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <script src="<?php echo JS; ?>/profilePop-up.js"></script>
    <div class="container" >

        <input type="hidden" id = "profilePop" value="<?php echo get_site_url(); ?>/profilepop-up">

        <!--member pop-up-->
        <!--this is under review pop-up-->
        <!-- Trigger the modal with a button -->
        <!-- Modal -->
        <div class="modal fade" id="myModal3" role="dialog">
            <div class="modal-dialog modal-rev-size" style="margin: auto !important;">
                <!-- Modal content-->
                <div class="modal-content">
                    <div style="" >
                        <div class="modal-body colmn-padds">
                            <div class = "close-btn-review">
                                <button type="button" class="close" data-dismiss="modal">
                                    &times;
                                </button>
                            </div>
                            <!---->
                            <!--                        <div id='idName'></div>-->
                            <input type='hidden' id="imageUnderreviewSite" value="<?php echo get_bloginfo ( 'template_url' ); ?>/images/uploads/">

                            <form role="form" style = "margin: 0px">
                                <div  class="col-lg-4 col-md-6 col-sm-6 col-xs-12 colmn-padds review-image-popup" >
                                    <div class="texts1">
                                        <img  style="width: 253px;display:none" class="imgsrcUnderreview panel1 active-tab" alt="...">
                                        <img  style="width: 253px; display:none" class="imgsrcUnderreview1 panel2" alt="...">
                                        <img  style="width: 253px; display:none" class="imgsrcUnderreview2 panel3" alt="...">
                                        <img  style="width: 253px; display:none" class="imgsrcUnderreview3 panel4" alt="...">
                                    </div>
                                    <div class="texts1 review-padds">

                                        <img  style="width: 60px; opacity: 0.5 " class="imgsrcUnderreview4 panelid1 opacity" rel="panel1" dapanelid = "panelid1" alt="...">
                                        <img  style="width: 60px; opacity: 0.5" class="imgsrcUnderreview5 panelid2" rel="panel2" dapanelid = "panelid2" alt="...">
                                        <img  style="width: 60px; opacity: 0.5" class="imgsrcUnderreview6 panelid3" rel="panel3" dapanelid = "panelid3" alt="...">
                                        <img  style="width: 60px; opacity: 0.5" class="imgsrcUnderreview7 panelid4" rel="panel4" dapanelid = "panelid4" alt="...">

                                    </div>
                                    <div class="footer review-padds">

                                        <input type="hidden" id = "myModal3ID" >
                                        <button type="button" class="btn btn-default btn-lg footer-popup-btn" data-toggle="modal" onclick="underReviewFunction()" data-target="#myModal3" >UPDATE</button>
                                        <button type="button" class="btn btn-default btn-lg footer-popup-btn" data-toggle="modal" onclick="underReviewCancelFunction()" data-target="#myModal3" >
                                            CANCEL
                                        </button>
                                    </div>
                                </div>
                                <div class="col-lg-7 col-md-6 col-sm-6 col-xs-12 colmn-padds" style = "margin-top: 20px;" >
                                    <div  class="col-lg-9 col-md-6 col-sm-6 col-xs-12 colmn-padds column-right-pads column-padds-iphon6 " style = "text-align: left;"  >
                                        <div class = "review-pop-up-text">
                                            <h1 class="subCategory_nameUnderreview"></h1>
                                            <p class="brandUnderreview"></p>
                                        </div>
                                        <div>
                                            <label>Type: </label><p class="itemUnderreview"></p>
                                            Condition: <p class="signs_of_wear_and_tearUnderreview"></p>
                                        </div>
                                        <div>
                                            <p class="descriptionUnderreview"></p>
                                        </div>
                                    </div>
                                    <div  class="col-lg-3 col-md-6 col-sm-6 col-xs-12 colmn-padds" >
                                        <div class="col-md-3 new-cosigner-pads colmn-padds column-padds-iphon6" style="width: initial">
                                            <div class="form-group" style = "margin: 0px">
                                                <label for="inputdefault1" class = "column-margnbotops" style = "margin-top: 25px;">Retail Price</label>
                                                <input class="form-control" id="inputdefault1" type="number">
                                                <!--                                            <input class="form-control" id="inputdefault1" type="number" value = "--><?php // echo $user_info['retail_value'];?><!--">-->
                                            </div>

                                            <div class="form-group" style = "margin: 0px">
                                                <label for="inputdefault2" class = "column-margnbotops"  >Asking Price</label>
                                                <input class="form-control"  id="inputdefault2"  type="number">
                                            </div>

                                            <div class="form-group" style = "margin: 0px">
                                                <label for="inputdefault3" class = "column-margnbotops" >Best Offer Price</label>
                                                <input class="form-control" id="inputdefault3" type="number">
                                            </div>

                                            <div class="form-group" style = "margin: 0px">
                                                <label for="inputdefault3" class = "column-margnbotops">Website</label>
                                                <button type="button" class="btn btn-default btn-lg visit" >
                                                    <a id="storewebsiteUnderreview" target = "_blank" style="color: white;">
                                                        VISIT
                                                    </a>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-7 col-md-6 col-sm-6 col-xs-12 colmn-padds column-padds-iphon6" >
                                    <div class="form-group" style = "text-align: left">
                                        <label for="comment" class = "column-margnbotops" style = "margin-top: 1% !important;">Review:</label><textarea class="form-control textarea-column" rows="5" id="note-comment"  style = "overflow:auto;text-align: left" ></textarea>
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
                                        <img  style="width: 253px;display:none" class="imgsrcApprovals panel1 active-tab" alt="...">
                                        <img  style="width: 253px;display:none" class="imgsrcApprovals1 panel2" alt="...">
                                        <img  style="width: 253px;display:none" class="imgsrcApprovals2 panel3" alt="...">
                                        <img  style="width: 253px;display:none" class="imgsrcApprovals3 panel4" alt="...">

                                    </div>
                                    <div class="texts1 review-padds">
                                        <img  style="width: 60px;" class="imgsrcApprovals4"  rel="panel1" alt="...">
                                        <img  style="width: 60px;" class="imgsrcApprovals5" rel="panel2" alt="...">
                                        <img  style="width: 60px;" class="imgsrcApprovals6" rel="panel3" alt="...">
                                        <img  style="width: 60px;" class="imgsrcApprovals7"  rel="pane4"  alt="...">
                                    </div>
                                    <div class="footer review-padds">
                                        <input type="hidden" id = "myModal4ID" >
                                        <button type="button" class="btn btn-default btn-lg footer-popup-btn click_approvalsid_forMenu_admin " data-toggle="modal" data-target="#myModal4" onclick="approvalsFunction()" >ACCEPT OFFER</button>
                                        <button type="button" class="btn btn-default btn-lg footer-popup-btn click_approvalsid_forMenu_admin " data-toggle="modal" data-target="#myModal4" onclick="approvalsDenyFunction()"  >DENY OFFER</button>
                                    </div>
                                </div>
                                <div class="col-lg-7 col-md-6 col-sm-6 col-xs-12 colmn-padds" style = "margin-top: 20px;" >
                                    <div  class="col-lg-9 col-md-6 col-sm-6 col-xs-12 colmn-padds column-right-pads column-padds-iphon6 " style = "text-align: left;"  >
                                        <div class = "review-pop-up-text">
                                            <h1 class="subCategory_nameUnderreview1"></h1>
                                            <p class="brandUnderreview1"></p>
                                        </div>
                                        <div>

                                            <label>Type: </label><p class="itemUnderreview1"></p>
                                            Condition: <p class="signs_of_wear_and_tearUnderreview1"></p>
                                            <!--                                        <p>Type: --><?php // echo $user_info['item'];?><!--<br>-->
                                            <!--                                            Condition: --><?php // echo $user_info['signs_of_wear_and_tear'];?><!--.</p>-->
                                        </div>
                                        <div>
                                            <!--                                        <p> --><?php // echo $user_info['description'];?><!--</p>-->
                                            <p class="descriptionUnderreview1"></p>
                                        </div>
                                    </div>
                                    <div  class="col-lg-3 col-md-6 col-sm-6 col-xs-12 colmn-padds" >
                                        <div class="col-md-3 new-cosigner-pads colmn-padds column-padds-iphon6" style="width: initial">
                                            <div class="form-group" style = "margin: 0px">
                                                <label for="" class = "column-margnbotops" style = "margin-top: 25px;">Retail Price</label>
                                                <input class="form-control" id="retailPrice1" type="number" disabled >
                                                <!--                                            value="--><?php // echo $user_info['retail_value'];?><!--"-->
                                            </div>

                                            <div class="form-group" style = "margin: 0px">
                                                <label for="" class = "column-margnbotops" >Asking Price</label>
                                                <input class="form-control" id="askingPrice1" type="text" disabled >
                                                <!--                                            value = "--><?php // echo $user_info['selling_price'];?><!--"-->
                                            </div>
                                            <div class="form-group" style = "margin: 0px">
                                                <label for="" class = "column-margnbotops" >Best Offer Price</label>
                                                <input class="form-control" id="bestPrice1" type="text" disabled >
                                                <!--                                            value = "$9,500"-->
                                            </div>
                                            <div class="form-group" style = "margin: 0px">
                                                <label for="" class = "column-margnbotops">Website</label>
                                                <button type="button" class="btn btn-default btn-lg visit" >
                                                    <!--                                                <a href = "--><?php //echo $user_info['store_website'];?><!--" target = "_blank">VISIT</a>-->
                                                    <a id="storewebsiteApprovals" target = "_blank" style="color: white;">
                                                        VISIT
                                                    </a>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-7  col-md-6 col-sm-6 col-xs-12 colmn-padds column-padds-iphon6" >
                                    <div class="form-group" style = "text-align: left">
                                        <label for="comment" class = "column-margnbotops" style = "margin-top: 1% !important;">Response:</label>
                                        <textarea class="form-control textarea-column" rows="5" id="comment"  style = "overflow:auto;text-align: left" ></textarea>
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
        <!-- Modal-->
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
                                        <img  style="width: 253px; display:none" class="imgsrcForsale panel1 active-tab" alt="...">
                                        <img  style="width: 253px; display:none" class="imgsrcForsale1 panel2" alt="...">
                                        <img  style="width: 253px; display:none" class="imgsrcForsale2 panel3" alt="...">
                                        <img  style="width: 253px; display:none" class="imgsrcForsale3 panel4" alt="...">
                                        <!--                                    <img  style="width: 253px;" src = "--><?php //echo get_bloginfo ( 'template_url' ); ?><!--/img/nameohio-size2000x2000-shotflat-colorgrey.png" alt="...">-->
                                    </div>
                                    <div class="texts1 review-padds">
                                        <img  style="width: 60px;"  class="imgsrcForsale4" rel="panel1" alt="...">
                                        <img  style="width: 60px;"  class="imgsrcForsale5" rel="panel2" alt="...">
                                        <img  style="width: 60px;"  class="imgsrcForsale6" rel="panel3" alt="...">
                                        <img  style="width: 60px;" class="imgsrcForsale7" rel="panel4" alt="...">
                                    </div>
                                    <div class="footer review-padds">

                                        <input type="hidden" id = "myModal5ID" >
                                        <button type="button" class="btn btn-default btn-lg footer-popup-btn click_forsaleMember_forMenu_admin" data-toggle="modal" data-target="#myModal5" onclick="forSaleFunction()"  >UPDATE</button>
                                        <button type="button" class="btn btn-default btn-lg footer-popup-btn click_forsaleMember_forMenu_admin" data-toggle="modal" data-target="#myModal5" >CANCEL</button>
                                    </div>
                                </div>
                                <div class="col-lg-7 col-md-6 col-sm-6 col-xs-12 colmn-padds" style = "margin-top: 20px;" >
                                    <div  class="col-lg-9 col-md-6 col-sm-6 col-xs-12 colmn-padds column-right-pads column-padds-iphon6 " style = "text-align: left;"  >
                                        <div class = "review-pop-up-text">
                                            <!--                                        <h1>--><?php // echo $user_info['subCategory_name'];?><!--</h1>-->
                                            <!--                                        <p> --><?php // echo $user_info['brand'];?><!--</p>-->
                                            <h1 class="subCategory_nameForsale"></h1>
                                            <p class="brandForsale"></p>
                                        </div>
                                        <div>
                                            <!--                                        <p>Type: --><?php // echo $user_info['item'];?><!--<br>-->
                                            <!--                                            Condition: --><?php // echo $user_info['signs_of_wear_and_tear'];?><!--.</p>-->
                                            <label>Type: </label><p class="itemForsale"></p>
                                            Condition: <p class="signs_of_wear_and_tearForsale"></p>
                                        </div>
                                        <div>
                                            <p class="descriptionForsale"></p>
                                        </div>
                                    </div>
                                    <div  class="col-lg-3 col-md-6 col-sm-6 col-xs-12 colmn-padds" >
                                        <div class="col-md-3 new-cosigner-pads colmn-padds column-padds-iphon6" style="width: initial">
                                            <div class="form-group" style = "margin: 0px">
                                                <label for="inputdefaultForsale1" class = "column-margnbotops" style = "margin-top: 25px;">Retail Price</label>
                                                <input class="form-control" id="inputdefaultForsale1" type="number" disabled >
                                                <!--                                            value = "--><?php // echo $user_info['retail_value'];?><!--"-->
                                            </div>

                                            <div class="form-group" style = "margin: 0px">
                                                <label for="inputdefaultForsale2" class = "column-margnbotops" >Asking Price</label>
                                                <input class="form-control" id="inputdefaultForsale2" type="number" >
                                            </div>

                                            <div class="form-group" style = "margin: 0px">
                                                <label for="inputdefaultForsale3" class = "column-margnbotops" >Best Offer Price</label>
                                                <input class="form-control" id="inputdefaultForsale3" type="number">
                                            </div>

                                            <div class="form-group" style = "margin: 0px">
                                                <label for="" class = "column-margnbotops">Website</label>
                                                <button type="button" class="btn btn-default btn-lg visit" >
                                                    <a id="storewebsiteForsale" target = "_blank" style="color: white;">
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
                                        <textarea class="form-control textarea-column" rows="5" id="comment2"  style = "overflow:auto;text-align: left" ></textarea>
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
                                        <img  style="width: 253px;display:none" class="imgsrcSold panel1 active-tab" alt="...">
                                        <img  style="width: 253px;display:none" class="imgsrcSold1 panel2" alt="...">
                                        <img  style="width: 253px;display:none" class="imgsrcSold2 panel3" alt="...">
                                        <img  style="width: 253px;display:none" class="imgsrcSold3 panel4" alt="...">
                                        <!--                                    <img  style="width: 253px;" src = "--><?php //echo get_bloginfo ( 'template_url' ); ?><!--/img/nameohio-size2000x2000-shotflat-colorgrey.png" alt="...">-->
                                    </div>
                                    <div class="texts1 review-padds">
                                        <img  style="width: 60px;" class="imgsrcSold4" rel="panel1" alt="...">
                                        <img  style="width: 60px;" class="imgsrcSold5" rel="panel2" alt="...">
                                        <img  style="width: 60px;" class="imgsrcSold6" rel="panel3" alt="...">
                                        <img  style="width: 60px;" class="imgsrcSold7" rel="panel4" alt="...">
                                    </div>
                                    <div class="footer review-padds">
                                        <button type="button" class="btn btn-default btn-lg footer-popup-btn" data-toggle="modal" data-target="#myModal6">VIEW PAGE</button>
                                    </div>
                                </div>
                                <div class="col-lg-7 col-md-6 col-sm-6 col-xs-12 colmn-padds" style = "margin-top: 20px;" >
                                    <div  class="col-lg-9 col-md-6 col-sm-6 col-xs-12 colmn-padds column-right-pads column-padds-iphon6 " style = "text-align: left;"  >
                                        <div class = "review-pop-up-text">
                                            <h1 class="subCategory_nameSold"></h1>
                                            <p class="brandSold"></p>
                                        </div>
                                        <div>
                                            <label>Type: </label><p class="itemSold"></p>
                                            Condition: <p class="signs_of_wear_and_tearSold"></p>
                                        </div>
                                        <div>
                                            <p class="descriptionSold"></p>
                                        </div>
                                    </div>
                                    <div  class="col-lg-3 col-md-6 col-sm-6 col-xs-12 colmn-padds" >
                                        <div class="col-md-3 new-cosigner-pads colmn-padds column-padds-iphon6" style="width: initial">
                                            <div class="form-group" style = "margin: 0px">
                                                <label for="" class = "column-margnbotops" style = "margin-top: 25px;">Retail Price</label>
                                                <input class="form-control" id="retailpriceSold" type="text" disabled >
                                                <!--                                            value = "--><?php // echo $user_info['retail_value'];?><!--"-->
                                            </div>

                                            <div class="form-group" style = "margin: 0px">
                                                <label for="" class = "column-margnbotops" >Asking Price</label>
                                                <input class="form-control" id="askingpriceSold" type="text" disabled >
                                                <!--                                            value = "--><?php // echo $user_info['selling_price'];?><!--   "-->
                                            </div>

                                            <div class="form-group" style = "margin: 0px">
                                                <label for="" class = "column-margnbotops" >Best Offer Price</label>
                                                <input class="form-control" id="bestpriceSold" type="text" disabled >
                                                <!--                                            value = "$9,500"-->
                                            </div>

                                            <div class="form-group" style = "margin: 0px">
                                                <label for="" class = "column-margnbotops">Website</label>
                                                <button type="button" class="btn btn-default btn-lg visit" >
                                                    <!--                                                <a href = "--><?php //echo $user_info['store_website'];?><!--" target = "_blank">-->
                                                    <!--                                                    VISIT-->
                                                    <!--                                                </a>-->

                                                    <a id="storewebsiteSold" target = "_blank" style="color: white;">
                                                        VISIT
                                                    </a>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-7  col-md-6 col-sm-6 col-xs-12 colmn-padds column-padds-iphon6" >
                                    <div class="form-group" style = "text-align: left">
                                        <label for="comment" class = "column-margnbotops" style = "margin-top: 1% !important;">Comment:</label>
                                        <textarea class="form-control textarea-column" disabled rows="5" id="note-comment"  style = "overflow:auto;text-align: left" ></textarea>
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

        <!--admin pop-up-->
        <!--new items pop-up-->
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

                                        <img  style="width: 253px;display:none" class="imgsrcNewItems panel1 active-tab" alt="...">
                                        <img  style="width: 253px;display:none" class="imgsrcNewItems1 panel2" alt="...">
                                        <img  style="width: 253px;display:none" class="imgsrcNewItems2 panel3" alt="...">
                                        <img  style="width: 253px;display:none" class="imgsrcNewItems3 panel4" alt="...">
                                        <!--                                    <img  style="width: 253px;" src = "--><?php //echo get_bloginfo ( 'template_url' ); ?><!--/img/nameohio-size2000x2000-shotflat-colorgrey.png" alt="...">-->
                                    </div>
                                    <div class="texts1 review-padds">
                                        <img  style="width: 60px;" class="imgsrcNewItems4 "  rel="panel1" alt="...">
                                        <img  style="width: 60px;" class="imgsrcNewItems5"  rel="panel2" alt="...">
                                        <img  style="width: 60px;" class="imgsrcNewItems6"  rel="panel3" alt="...">
                                        <img  style="width: 60px;" class="imgsrcNewItems7"  rel="panel4" alt="...">
                                      </div>
                                    <div class="footer review-padds">
                                        <input type="hidden" id = "myModal7ID" >
                                        <button type="button" class="btn btn-default btn-lg footer-popup-btn click_id_forMenu_admin" data-toggle="modal" value="<?php echo $user_info['ID']; ?>" id="ID" onclick="newItemsFunction()" data-target="#myModal7" >ACCEPT OFFER</button>
                                        <button type="button" class="btn btn-default btn-lg footer-popup-btn click_id_forMenu_admin" data-toggle="modal" data-target="#myModal7" value="<?php echo $user_info['ID']; ?>" id="IDs" onclick="newItemsDeny()" >DENY OFFER</button>
                                    </div>
                                </div>
                                <div class="col-lg-7 col-md-6 col-sm-6 col-xs-12 colmn-padds" style = "margin-top: 20px;" >
                                    <div  class="col-lg-9 col-md-6 col-sm-6 col-xs-12 colmn-padds column-right-pads column-padds-iphon6 " style = "text-align: left;"  >
                                        <div class = "review-pop-up-text">
                                            <!--                                        <h1>--><?php // echo $user_info['subCategory_name'];?><!--</h1>-->
                                            <!--                                        <p> --><?php // echo $user_info['brand'];?><!--</p>-->

                                            <h1 class="subCategory_nameNewItems"></h1>
                                            <p class="brandNewItems"></p>
                                        </div>
                                        <div>
                                            <label>Type: </label><p class="itemNewItems"></p>
                                            Condition: <p class="signs_of_wear_and_tearNewItems"></p>
                                        </div>
                                        <div>
                                            <p class="descriptionNewItems"></p>
                                        </div>
                                    </div>
                                    <div  class="col-lg-3 col-md-6 col-sm-6 col-xs-12 colmn-padds" >
                                        <div class="col-md-3 new-cosigner-pads colmn-padds column-padds-iphon6" style="width: initial">
                                            <div class="form-group" style = "margin: 0px">
                                                <label for="" class = "column-margnbotops" style = "margin-top: 25px;">Retail Price</label>
                                                <input class="form-control" id="retailpriceNewItems" disabled type="number">
                                            </div>

                                            <div class="form-group" style = "margin: 0px">
                                                <label for="" class = "column-margnbotops" >Asking Price</label>
                                                <input class="form-control" id="askingpriceNewItems" type="number">
                                            </div>

                                            <div class="form-group" style = "margin: 0px">
                                                <label for="" class = "column-margnbotops" >Best Offer Price</label>
                                                <input class="form-control" id="bestpriceNewItems" type="number" disabled>
                                            </div>

                                            <div class="form-group" style = "margin: 0px">
                                                <label for="" class = "column-margnbotops">Website</label>
                                                <button type="button" class="btn btn-default btn-lg visit" >
                                                    <a  id="storewebsiteNewItems" target = "_blank">VISIT</a>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-7  col-md-6 col-sm-6 col-xs-12 colmn-padds column-padds-iphon6" >
                                    <div class="form-group" style = "text-align: left">
                                        <label for="comment" class = "column-margnbotops" style = "margin-top: 1% !important;">Comment:</label>
                                        <textarea class="form-control textarea-column" rows="5" id="comment1"  style = "overflow:auto;text-align: left" ></textarea>
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
        </div>
        <!--End of approved pop-up-->
        <!--this is received/pendingpop-up-->
        <!-- Trigger the modal with a button -->
        <!-- Modal -->
        <div>
        </div>
        <!--End of received/pending pop-up-->

        <div class="form-group">




            <div class="col-lg-12  col-md-12 col-sm-12 col-xs-12 cover-photo-dev" style="margin-bottom: -125px;" >


                <?php
                global $wpdb;
                $name_cp_profile = "";
                $oldImageCoverIcon =  $wpdb->get_results("SELECT * FROM wp_coverphoto WHERE user_id = '" . $user_id . "' ORDER BY ID ASC ", ARRAY_A);

                foreach($oldImageCoverIcon as $value){
                    $name_cp_profile =  $value['cp_name'];
                }



                if($name_cp_profile == "") {
                    ?>

                    <img class="oldImageCoverIcon" style = "height:350px; width: 1110px; border: 1px solid black;" src = "<?php echo get_bloginfo ( 'template_url'); ?>/img/gaukukh-nandanban-logo.jpg"  alt="...">


                    <?php

                }else{
                    ?>

                    <img class="oldImageCoverIcon" style = "height:350px; width: 1110px; border: 1px solid black;" id="oldImageCoverIcon" src = "<?php echo get_bloginfo ( 'template_url'); ?>/images/cp_uploads/<?php echo $name_cp_profile?>"  alt="...">


                    <?php
                }
                ?>

<!--                <img style="height:300px; width: 1110px; " src = "--><?php //echo get_bloginfo ( 'template_url'); ?><!--/img/gaukukh-nandanban-logo.jpg"  alt="...">-->
            </div>
            <div class = "cover-pht-div" >
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12  cover-pht-div-img"  >
                    <?php
                    global $wpdb;
                    $name_uc_profile = "";
                        $oldImageProfileIcon =  $wpdb->get_results("SELECT * FROM wp_profile WHERE user_id = '" . $user_id . "' ORDER BY ID ASC ", ARRAY_A);

                    foreach($oldImageProfileIcon as $value){
                        $name_uc_profile =  $value['profile_name'];
                    }
                    ?>

                    <?php
                    if($name_uc_profile == ""){
                        ?>
                        <img class="oldImageProfileIcon" style = "width: 50%;border: 1px solid black;height:50%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/Balenciaga.jpg" alt="...">
                        <?php
                    }else{
                        ?>
                        <img class="oldImageProfileIcon" style = "width: 50%;border: 1px solid black;height:50%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/images/uc_uploads/<?php echo $name_uc_profile?>" id="oldImageProfileIcon1" alt="...">
                        <?php
                    }
                    ?>
<!--                    <img  src = "--><?php //echo get_bloginfo ( 'template_url' ); ?><!--/img/Balenciaga.jpg" alt="...">-->

                </div>
                <div class="col-lg-5 col-md-5 col-sm-8 col-xs-12 cover-p-name" style="position: relative;top: 20px;left: 50px;" >

                    <?php
                    $user_nicename = "";
                    $profileImage =  $wpdb->get_results("SELECT * FROM wp_users WHERE ID =$user_id", ARRAY_A);

                    foreach($profileImage as $val21){
                        echo "<h1>". $user_nicename =  $val21['user_nicename'].'</h1>';
                    }


                    ?>

                    <h4>PROFIT SINCE 6/20/2016<br>$7,218</h4>
                </div>
            </div>

            <input type = "hidden" value="<?php echo $user_status_id ?>" id="user_status_id">
            <div class="col-lg-12  col-md-12 col-sm-12 col-xs-12 sub-menuBar "  >
                <!-- start menu  -->
                <div class=" navigation rev-navigation colmn-padds1" id="sticker"><!-- navigation menu-->
                    <ul class=" menu-bars clicking-menu-profile" style = "display: block !important;">
<!--                        <input type = "hidden" id="user_status_id_hidden" value = "--><?php //echo $user_status_id ?><!--" >-->
                        <?php if($user_status_id == 0){ ?>

                            <!--                        <!--if admin -->
                            <li class = "link-menu-bars active-underline" rel = "member-tabs">
                                <a>
                                    MEMBERS
                                </a>
                            </li>
                            <li class = "link-menu-bars" rel = "new-items">
                                <a>
                                    NEW ITEMS
                                    <span id="newitemCounteroutput"></span>
                                </a>
                            </li>

                            <li class = "link-menu-bars" rel = "approved">
                                <a>
                                    APPROVED
                                    <span id="approvedCounteroutput"></span>
                                </a>
                            </li>
                            <li class = "link-menu-bars" rel = "received_pending">
                                <a>
                                    RECEIVED/PENDING
                                    <span id="pendingCounteroutput"></span>
                                </a>
                            </li>
                            <li class = "link-menu-bars" rel = "for_sale">
                                <a>
                                    FOR SALE
                                        <span id="adminforsaleCounteroutput"></span>
                                </a>
                            </li>

                            <?php
                        }else if($user_status_id == 1){
                            ?>
                            <!-- else users-->
                            <li class = "link-menu-bars active-underline" rel = "under-review">
                                <a>
                                    UNDER REVIEW
                                    <span id="underReveiwCounterOutput"></span>
                                </a>

                            </li>
                            <li class = "link-menu-bars" rel = "approvals">
                                <a  >
                                    APPROVALS
                                    <span id="approvalsCounterOutput"></span>
                                </a>
                            </li>
                            <li class = "link-menu-bars" rel = "for-sale">
                                <a>
                                    FOR SALE
                                    <span id="forsaleCounterOutput"></span>
                                </a>
                            </li>
                            <li class = "link-menu-bars" rel = "sold">
                                <a>
                                    SOLD
                                    <span id="soldCounterOutput"></span>
                                </a>
                            </li>
                            <?php
                        }else{
                            echo "<h1>Please Sign Up or Sign In</h1>";
                            exit();
                        }
                        ?>

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
        </div>


        <div class=" col-lg-12  col-md-12 col-sm-12 col-xs-12 col-pop-rev "  >
            <!--member account -->
            <!--Under review tabs -->
            <div class="col-lg-12  col-md-12 col-sm-12 col-xs-12 centered under-review active-tab" style="display: none" >


                <div class="clearfix visible-sm"></div>
                <div class="clearfix visible-xs "></div>

                <div style = "margin:auto">
                    <?php
                    global $wpdb;

                    //            $user_info = $wpdb->get_row( "SELECT * FROM wp_users as u  INNER JOIN wp_item as i ON i.user_id = u.ID LIMIT 1", ARRAY_A );
                    $UndeReview_tabs = $wpdb->get_results("SELECT img.name,img.ID,item.ID as itemID FROM
                            wp_item as item  INNER JOIN wp_img as img
                            ON item.ID=img.item_id INNER JOIN wp_users as u ON u.ID=item.user_id
                            WHERE item.item_status=0 AND img.item_inc=1 AND u.ID ='".$user_id."'", ARRAY_A);
                        $underReviewCounter = "";

                    $showmoreCounter = 0;
                    $displayITem ="";
                    foreach($UndeReview_tabs as $value1){

                        if($underReviewCounter && $underReviewCounter%4 == 0){

                            echo "<br><br>";

                            if($showmoreCounter == 0){
                                ?>

                                <div class="showmorItem dataPanelHideItem1" rel="dataPanelshowItem1" >See more </div>

                                <?php
                                $showmoreCounter++;
                            }
                            $displayITem1 ="dataPanelshowItem1";
                        }

                        $underReviewCounter++;
                        $underReviewCounteroutput = $underReviewCounter;
                        ?>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-5 col-pop-rev-img <?php echo $displayITem1; ?> " dataPanelid = "dataPanelHideItem1" >
                            <div class="texts1-rev">
                                <img   style = "" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/images/uploads/<?php echo $value1['name'];?>" alt="">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style = "border-top: 1px solid black"></div>
                                <button type="button" class="btn btn-default btn-lg" data-toggle="modal" data-target="#myModal3" id = "underReviewId" value = "<?php echo $value1['itemID'] ?>" >EDIT</button>
                            </div>
                        </div>
                    <?php } ?>
                    <input type="hidden" id="underReviewCounter" value="<?php echo $underReviewCounteroutput; ?>" >
                </div>
            </div>

            <!--Approvals tabs -->

            <div class="col-lg-12  col-md-12 col-sm-12 col-xs-12 centered approvals" style = "display: none">

                <div class="clearfix visible-sm"></div>
                <div class="clearfix visible-xs "></div>

                <div style = "margin:auto">

                    <?php
                    global $wpdb;

                    //            $user_info = $wpdb->get_row( "SELECT * FROM wp_users as u  INNER JOIN wp_item as i ON i.user_id = u.ID LIMIT 1", ARRAY_A );
                    $approvals_tabs = $wpdb->get_results("SELECT img.name,item.item_details,item.ID as itemID FROM
                            wp_item as item  INNER JOIN wp_img as img
                            ON item.ID=img.item_id INNER JOIN wp_users as u ON u.ID=item.user_id
                            WHERE item.item_status=1 AND img.item_inc=1 AND u.ID ='".$user_id."'", ARRAY_A);
                    //            echo '<pre>';
                    //                print_r($newItem_tabs);
                    //            echo '<pre>';

                    $approvalsCounter = "";
                    $showmoreCounter = 0;
                    $displayITem ="";
                    foreach($approvals_tabs as $value2){
                        if($approvalsCounter && $approvalsCounter%4 == 0){

                            echo "<br><br>";

                            if($showmoreCounter == 0){
                                ?>

                                <div class="showmorItem dataPanelHideItem2" rel="dataPanelshowItem2">See more </div>

                                <?php
                                $showmoreCounter++;
                            }
                            $displayITem2 ="dataPanelshowItem2";
                        }
                        $approvalsCounter++;
                        $approvalsCounteroutput = $approvalsCounter;

                        ?>
<!--                                            <input type="hidden" id="approvalsCounter" value="--><?php //echo count($value2); ?><!--" >-->

                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-5 col-pop-rev-img <?php echo $displayITem2; ?> "  dataPanelid = "dataPanelHideItem2" id="<?php echo $value2['itemID'] ?>" >
                            <?php
                            if($value2['item_details'] === 'deny'){
                                ?>
                                <div class="approved" style="margin: auto;left: 44px;top: 14px;opacity: 1;position: absolute !important;">
                                    <img   src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/denied.png" style="position: relative;top: 10px" alt="...">
                                </div>
                                <?php
                            }else if($value2['item_details'] === 'approve'){
                                ?>
                                <div class="approved" style="opacity: 1;position: absolute !important;">
                                    <img   src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/approved.png" style="position: relative;top: 40px" alt="...">
                                </div>
                                <?php
                            }
                            ?>
                            <div class="texts1-rev" >
                                <img   style = "" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/images/uploads/<?php echo $value2['name'];?>" alt="">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style = "border-top: 1px solid black"></div>
                                <button type="button" class="btn btn-default btn-lg" data-toggle="modal" data-target="#myModal4" id = "underReviewId" value = "<?php echo $value2['itemID'] ?>" >REVIEW</button>
                            </div>
                        </div>
                    <?php } ?>

                    <input type="hidden" id="approvalsCounter" value="<?php echo $approvalsCounteroutput; ?>" >
                </div>
            </div>

            <!--for-sale tabs -->
            <div class="col-lg-12  col-md-12 col-sm-12 col-xs-12 centered for-sale" style = "display: none">
                <div class="clearfix visible-sm"></div>
                <div class="clearfix visible-xs "></div>
                <div style = "margin:auto">
                    <?php
                    global $wpdb;
                    //            $user_info = $wpdb->get_row( "SELECT * FROM wp_users as u  INNER JOIN wp_item as i ON i.user_id = u.ID LIMIT 1", ARRAY_A );
                    $for_sale = $wpdb->get_results("SELECT img.name,item.ID as itemID FROM
                            wp_item as item  INNER JOIN wp_img as img
                            ON item.ID=img.item_id INNER JOIN wp_users as u ON u.ID=item.user_id
                            WHERE item.item_status=4 AND img.item_inc=1 AND u.ID ='".$user_id."'", ARRAY_A);
                    //            echo '<pre>';
                    //                print_r($newItem_tabs);
                    //            echo '<pre>';
                    $forsaleCounter = "";
                    $showmoreCounter = 0;
                    $displayITem ="";
                    foreach($for_sale as $value3){
                        if($forsaleCounter && $forsaleCounter%4 == 0){
                            echo "<br><br>";
                            if($showmoreCounter == 0){
                                ?>

                                <div class="showmorItem dataPanelHideItem3" rel="dataPanelshowItem3">See more </div>

                                <?php
                                $showmoreCounter++;
                            }
                            $displayITem3 ="dataPanelshowItem3";
                        }
                        $forsaleCounter++;
                        $forsaleCounteroutput = $forsaleCounter;

                        ?>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-5 col-pop-rev-img <?php echo $displayITem3; ?>" dataPanelid = "dataPanelHideItem3" >
                            <div class="texts1-rev">
                                <img   style = "" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/images/uploads/<?php echo $value3['name'];?>" alt="">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style = "border-top: 1px solid black"></div>
                                <button type="button" class="btn btn-default btn-lg" data-toggle="modal" data-target="#myModal5" id = "underReviewId" value = "<?php echo $value3['itemID'] ?>" >EDIT</button>
                            </div>
                        </div>
                    <?php } ?>


                    <input type="hidden" id="forsaleCounter" value="<?php echo $forsaleCounteroutput; ?>" >


                </div>
            </div>
            <!--sold tabs -->
            <div class="col-lg-12  col-md-12 col-sm-12 col-xs-12 centered sold" style = "display: none">
                <div class="clearfix visible-sm"></div>
                <div class="clearfix visible-xs "></div>
                <div style = "margin:auto">
                    <?php
                    global $wpdb;
                    //            $user_info = $wpdb->get_row( "SELECT * FROM wp_users as u  INNER JOIN wp_item as i ON i.user_id = u.ID LIMIT 1", ARRAY_A );
                    $for_sale = $wpdb->get_results("SELECT img.name,item.ID as itemID FROM
                            wp_item as item  INNER JOIN wp_img as img
                            ON item.ID=img.item_id INNER JOIN wp_users as u ON u.ID=item.user_id
                            WHERE item.item_status=6 AND img.item_inc=1 AND u.ID ='".$user_id."'", ARRAY_A);
                    //            echo '<pre>';
                    //                print_r($newItem_tabs);
                    //            echo '<pre>';
                        $soldCounter = "";
                        $showmoreCounter = 0;
                        $displayITem ="";
                    foreach($for_sale as $value4){
                        if($soldCounter && $soldCounter%4 == 0){
                            echo "<br><br>";
                            if($showmoreCounter == 0){
                                ?>

                                <div class="showmorItem dataPanelHideItem4" rel="dataPanelshowItem4">See more </div>

                                <?php
                                $showmoreCounter++;
                            }
                            $displayITem4 ="dataPanelshowItem4";

                        }
                        $soldCounter++;
                        $soldCounteroutput = $soldCounter;
                        ?>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-5 col-pop-rev-img <?php echo $displayITem4; ?>" dataPanelid = "dataPanelHideItem4" >
                            <div class="texts1-rev">
                                <img   style = "" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/images/uploads/<?php echo $value4['name'];?>" alt="">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style = "border-top: 1px solid black"></div>
                                <button type="button" class="btn btn-default btn-lg" data-toggle="modal" data-target="#myModal6" id = "underReviewId" value = "<?php echo $value4['itemID'] ?>" >RECEIPT</button>
                            </div>
                        </div>
                    <?php } ?>
                    <input type="hidden" id="soldCounter" value="<?php echo $soldCounteroutput; ?>" >
                </div>
            </div>


            <!--admin account -->
            <!--members tabs -->
            <div class="col-lg-12  col-md-12 col-sm-12 col-xs-12 centered member-tabs active-tab " style = "display: none">
                <div class="clearfix visible-sm"></div>
                <div class="clearfix visible-xs "></div>
            </div>

            <!--NEW ITEMS tabs -->
            <div class="col-lg-12  col-md-12 col-sm-12 col-xs-12 centered new-items" style = "display: none">
                <div class="clearfix visible-sm"></div>
                <div class="clearfix visible-xs "></div>
                <div style = "margin:auto">
                    <?php
                    global $wpdb;
                    $new_items_tabs = $wpdb->get_results("SELECT img.name,item.ID as itemID FROM
                                wp_item as item  INNER JOIN wp_img as img
                                ON item.ID=img.item_id INNER JOIN wp_users as u ON u.ID=item.user_id
                                WHERE item.item_status=0 AND img.item_inc=1 ", ARRAY_A);
                    $newitemCounter = "";
                    $showmoreCounter = 0;
                    $displayITem ="";
                    foreach($new_items_tabs as $value5){
                        if($newitemCounter && $newitemCounter%4 == 0){
                            echo "<br><br>";
                            if($showmoreCounter == 0){
                                ?>

                                <div class="showmorItem dataPanelHideItem5" rel="dataPanelshowItem5">See more </div>

                                <?php
                                $showmoreCounter++;
                            }
                            $displayITem5 ="dataPanelshowItem5";

                        }
                        $newitemCounter++;
                        $newitemCounteroutput = $newitemCounter;

                        ?>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-5 col-pop-rev-img <?php echo $displayITem5; ?>" dataPanelid = "dataPanelHideItem5" id="<?php echo $value5['itemID'] ?>" >
                            <div class="texts1-rev">
                                <img   style = "" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/images/uploads/<?php echo $value5['name'];?>" alt="">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style = "border-top: 1px solid black"></div>
                                <button type="button" class="btn btn-default btn-lg" data-toggle="modal" data-target="#myModal7" id = "underReviewId" value = "<?php echo $value5['itemID'] ?>" >REVIEW</button>
                            </div>
                        </div>
                    <?php } ?>


                    <input type="hidden" id="newitemCounter" value="<?php echo $newitemCounteroutput; ?>" >
                </div>
            </div>




            <!--approved tabs -->
            <div class="col-lg-12  col-md-12 col-sm-12 col-xs-12 centered approved" style = "display: none">
                <div class="clearfix visible-sm"></div>
                <div class="clearfix visible-xs "></div>

                <div style = "margin:auto">
                    <?php
                    global $wpdb;
                    $approved = $wpdb->get_results("SELECT img.name,item.item_details,item.ID as itemID FROM
                                wp_item as item  INNER JOIN wp_img as img
                                ON item.ID=img.item_id INNER JOIN wp_users as u ON u.ID=item.user_id
                                WHERE item.item_status=2 AND img.item_inc=1", ARRAY_A);
                    $approvedCounter = "";
                    $showmoreCounter = 0;
                    $displayITem ="";
                    foreach($approved as $value6){
                        if($approvedCounter && $approvedCounter%4 == 0){
                            echo "<br><br>";
                            if($showmoreCounter == 0){
                                ?>

                                <div class="showmorItem dataPanelHideItem6" rel="dataPanelshowItem6">See more </div>

                                <?php
                                $showmoreCounter++;
                            }
                            $displayITem6 ="dataPanelshowItem6";
                        }
                        $approvedCounter++;
                        $approvedCounteroutput = $approvedCounter;
                        ?>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-5 col-pop-rev-img <?php echo $displayITem6; ?>" dataPanelid = "dataPanelHideItem6" id="<?php echo $value6['itemID'] ?>" >
                            <?php
                            if($value6['item_details'] == 'deny'){
                                ?>
                                <div class="approved" style="margin: auto;left: 44px;top: 14px;opacity: 1;position: absolute !important;">
                                    <img   src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/denied.png" style="position: relative;top: 10px" alt="...">
                                </div>
                                <?php
                            }else if($value6['item_details'] == 'approve'){
                                ?>
                                <div class="approved" style="opacity: 1;position: absolute !important;">
                                    <img   src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/approved.png" style="position: relative;top: 40px" alt="...">
                                </div>
                                <?php
                            }
                            ?>
                            <div class="texts1-rev">

<!--                                <input type="hidden" id = "myModal5ID" value="">-->
                                <img   style = "" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/images/uploads/<?php echo $value6['name'];?>" alt="">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style = "border-top: 1px solid black"></div>
                                <!--                            <input type="hidden" id="myModal8ID" value="--><?php //echo $value6['itemID'] ?><!--" >-->
                                <!--                            id="underReviewId"  onclick="approvedFunction()"  -->
                                <button type="button" class="btn btn-default btn-lg click_approvepar_forMenu_admin" data-toggle="modal" data-target="#myModal8" id="myModal8ID" rel="<?php echo $value6['itemID'] ?>" value="<?php echo $value6['itemID'] ?>" >DELIVER</button>
                                <!--                            value="--><?php //echo $user_info['ID']; ?><!--" id="ID"-->
                            </div>
                        </div>
                    <?php } ?>
                    <input type="hidden" id="approvedCounter" value="<?php echo $approvedCounteroutput; ?>" >
                </div>
            </div>


            <!--received/pending tabs -->

            <div class="col-lg-12  col-md-12 col-sm-12 col-xs-12 centered received_pending" style = "display: none">

                <div class="clearfix visible-sm"></div>
                <div class="clearfix visible-xs "></div>
                <div style = "margin:auto">
                    <?php



                    global $wpdb;
                    $received_pending = $wpdb->get_results("SELECT img.name,item.ID as itemID FROM
                                wp_item as item  INNER JOIN wp_img as img
                                ON item.ID=img.item_id INNER JOIN wp_users as u ON u.ID=item.user_id
                                WHERE item.item_status=3 AND img.item_inc=1", ARRAY_A);
                        $pendingCounter = "";
                        $displayITem ="";
                        $showmoreCounter = 0;
                    foreach($received_pending as $value7){
                        if($pendingCounter && $pendingCounter%4 == 0){
                            echo "<br><br>";
                            if($showmoreCounter == 0){
                                ?>

                                <div class="showmorItem dataPanelHideItem7" rel="dataPanelshowItem7">See more </div>

                                <?php
                                $showmoreCounter++;
                            }
                            $displayITem7 ="dataPanelshowItem7";
                        }
                        $pendingCounter++;
                        $pendingCounteroutput = $pendingCounter;
                        ?>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-5 col-pop-rev-img <?php echo $displayITem7; ?>" dataPanelid = "dataPanelHideItem7" id="<?php echo $value7['itemID'] ?>" >
                            <!--                        <div class="approved" style="opacity: 1;position: absolute !important;">-->
                            <!--                            <img   src = "--><?php //echo get_bloginfo ( 'template_url' ); ?><!--/img/approved.png" style="position: relative;top: 40px" alt="...">-->
                            <!--                        </div>-->
                            <!--  <div class="approved" style="opacity: 1;position: absolute !important;">
                        <img   src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/denied.png" style="position: relative;top: 10px" alt="...">
                        </div> -->
                            <div class="texts1-rev">
                                <img style = "" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/images/uploads/<?php echo $value7['name'];?>" alt="">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style = "border-top: 1px solid black"></div>
                                <button type="button" class="btn btn-default btn-lg click_pending_forMenu_admin" data-toggle="modal" data-target="#myModal9" id="myModal9ID" rel="<?php echo $value7['itemID'] ?>" value="<?php echo $value7['itemID'] ?>" >SALE NOW</button>

                                <!--                            onclick="receivedPendingFunction();"-->
                            </div>
                        </div>
                    <?php } ?>

                    <input type="hidden" id="pendingCounter" value="<?php echo $pendingCounteroutput; ?>" >
                </div>

            </div>
            <!--for sale tabs -->

            <div class="col-lg-12  col-md-12 col-sm-12 col-xs-12 centered for_sale" style = "display: none">
                <div class="clearfix visible-sm"></div>
                <div class="clearfix visible-xs "></div>
                <div style = "margin:auto">
                    <?php
                    global $wpdb;

                    $sql_crone_job = $wpdb->get_results("
                                      SELECT item.days as itemDay,u.user_email as userEmail FROM wp_item as item INNER JOIN wp_img as img
                                      ON item.ID=img.item_id INNER JOIN wp_users as u ON u.ID=item.user_id
                                      WHERE item.created_at<=CURRENT_DATE - INTERVAL 31 DAY img.item_inc=1 ", ARRAY_A);

                    if($sql_crone_job > 0){

                        foreach($new_items_tabs as $val){
                            $email= $val['userEmail'];
                            $itemDay= $val['itemDay'];

                            if($itemDay ){
                                //recipient
                                $to = $email;
                                //subject
                                $subject = "";
                                //message
                                $message = "<h1>Hi There</h1><p> the current price of the items has been change</p>";
                                //header
                                $headers ="from: Sender Name: <Lifeafterpurchase.com>\r\n";
                                $headers .="Reply To: norely\r\n";
                                $headers .= "Content-type: text/html\r\n";

                                //send mail
                                wp_mail($to, $subject, $message,$headers);
                            }

                        }
                    }

                    $new_items_tabs = $wpdb->get_results("SELECT img.name,item.ID as itemID FROM
                                wp_item as item  INNER JOIN wp_img as img
                                ON item.ID=img.item_id INNER JOIN wp_users as u ON u.ID=item.user_id
                                WHERE item.item_status=4 AND img.item_inc=1", ARRAY_A);
                    $adminforsaleCounter = "";
                    $displayITem ="";
                    $showmoreCounter = 0;
                    foreach($new_items_tabs as $value7){

                        if($adminforsaleCounter && $adminforsaleCounter%4 == 0){
                            echo "<br><br>";
                            if($showmoreCounter == 0){
                                ?>

                                <div class="showmorItem dataPanelHideItem8" rel="dataPanelshowItem8">See more </div>

                                <?php
                                $showmoreCounter++;
                            }
                            $displayITem8 ="dataPanelshowItem8";
                        }
                        $adminforsaleCounter++;
                        $adminforsaleCounteroutput = $adminforsaleCounter;
                        ?>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-5 col-pop-rev-img <?php echo $displayITem8; ?>" dataPanelid = "dataPanelHideItem8" id="<?php echo $value7['itemID'] ?>" >
                            <div class="texts1-rev">
                                <img   style = "" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/images/uploads/<?php echo $value7['name'];?>" alt="">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style = "border-top: 1px solid black"></div>
                                <button type="button" class="btn btn-default btn-lg click_forsaleAdmin_forMenu_admin" data-toggle="modal" id="myModal10ID" rel="<?php echo $value7['itemID'] ?>" value="<?php echo $value7['itemID'] ?>">DELETE</button>

                            </div>
                            <!--                        onclick="forsaledeleteFunction();"-->
                        </div>
                    <?php } ?>
                    <input type="hidden" id="adminforsaleCounter" value="<?php echo $adminforsaleCounteroutput; ?>" >
                </div>

            </div>
        </div>
    </div>

<?php
require_once('sub-footer.php');
//?>