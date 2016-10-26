<?php
/**
 *  Template Name: Update Account
 */
require_once('header.php');


session_start();
$user_id = $_SESSION['user_id'];
?>


<style>
    #mainWrapper{border-bottom:0 !important;}
    select.form-control{display:inline !important;font-size:18px !important;padding: 5px !important;}
</style>

<link rel="stylesheet" type="text/css" href="<?php echo get_bloginfo ( 'template_url' ); ?>/css/custom-list.css" />
<!-- Custom CSS -->
<link href="http://lifeafterpurchase.com/wp-content/themes/custom/css/bootstrap/css/simple-sidebar.css" rel="stylesheet">
<script src="<?php echo JS; ?>/uploadimage.js"></script>
<script src="<?php echo JS; ?>/uc_upload_image.js"></script>
<script src="<?php echo JS; ?>/jquery.min.js"></script>
<script src="<?php echo JS; ?>/html5shiv.js"></script>

<div  id="frmbuyer" >
<div class="popupFrm" style="width:80%;">


    <input type="hidden" id = "uc_upload_image" value="<?php echo get_site_url(); ?>/uc_upload_image/">
    <input type="hidden" id = "cp_upload_image" value="<?php echo get_site_url(); ?>/cp_upload_image/">

<!-- Modal content-->
    <div class="contentPopup" style = "padding:0px;">
        <div class="contents">
        <div class="headerPopup">
            <h4 class="titleLabelPopup font-column-head" style="font-family: 'Didot' !important;letter-spacing: 1px; "> FILL OUT DETAILS ABOUT YOURSELF</h4>
        </div>
        <div class="headerPopup font-column-mar" style = "margin:50px 0px 20px 0px" >
            <h2 class="titleLabelPopup"  style = "text-align: left !important;display:none" >ABOUT YOU</h2>
        </div> 
        <form action="dutere" method="POST" id="myform" enctype="multipart/form-data"  style="margin-bottom: 0px;">
            <input type="hidden" name="form_title" value="NewShopper">
            <div class="popup-body">
                <div class="form-horizontal">
                    <div class="form-group column-marginbot">
                        <div class="col-md-4 float-text ">
                            <label for = "firs_name" class = "column-margnbotops" style = "font-weight: bolder;float: left !important;font-family: 'AvenirNextLTW01-UltraLight' !important;">First Name </label>
                            <input type="text" required name="firs_name" class="form-control" id = "first_name1" value="" ></div>

                        <div class="col-md-4 float-text">
                            <label for = "last_name" class = "column-margnbotops"  style = "font-weight: bolder;float: left !important;font-family: 'AvenirNextLTW01-UltraLight' !important;">Last Name </label>
                            <input type="text" required name="last_name" class="form-control" id = "last_name1" value="" >
                        </div>
                        <div class="col-md-4 float-text">
                            </div>
                        <div class="col-md-4 " style="height: 38px !important;">

                            <label for = "age" class = "column-margnbotops" style = "font-weight: bolder;float: left !important;font-family: 'AvenirNextLTW01-UltraLight' !important;">Gender </label>
                            <div class="col-xs-12 form-control column-font"    data-toggle="buttons" style="height: 41px !important;">

                                <label class="btn col-xs-6"  style="padding:0px;" >
                                    <input id="genderMale" onChange="dress_jacket();" class = "gender" type="radio" value="Male" name='gender'>
                                    <i class="fa fa-square-o fa-2x">

                                    </i>
                                    <i class="fa fa-check-square-o fa-2x" style="position: relative; top: -2px;">

                                    </i>
                                    <span style="color:black; position:relative;top:-7px;">
                                        MALE
                                    </span>
                                </label>
                                <label class="btn col-xs-6" style="padding:0px;">
                                    <input id="genderFemale" onChange="dress_jacket();" class = "gender"  type="radio" value="Female" name='gender'>
                                    <i class="fa fa-square-o fa-2x">

                                    </i>

                                    <i class="fa fa-check-square-o fa-2x" style="position: relative; top: -2px;"></i>
                                    <span  style="color:black; position:relative;top:-7px;">
                                        FEMALE
                                    </span>
                                </label>
                            </div>
                        </div>

                    </div>
                </div>

                <!--end of the first column--> 
                <input type="hidden" name="form_title" value="NewShopper">
                    <div class="popup-body">
                    <div class="form-horizontal">
                        <div class="form-group">
                            <div class="col-md-4 float-text">
                                <label for = "age" class = "column-margnbotops" style = "font-weight: bolder;float: left !important;font-family: 'AvenirNextLTW01-UltraLight' !important;">Your Age</label>
                                <input type="number" required name="age" id = "age1" class="form-control" value=""  >
                            </div>

                            <div class="col-md-4 float-text">
                                <label for = "email" class = "column-margnbotops" style = "font-weight: bolder;float: left !important;font-family: 'AvenirNextLTW01-UltraLight' !important;">Email</label>
                                <input type="email" required name="s_email" id = "email1" class="form-control" value=""  >
                            </div>

                            <div class="col-md-4 float-text">
                                <label for = "mailingAddress" class = "column-margnbotops" style = "font-weight: bolder;float: left !important;font-family: 'AvenirNextLTW01-UltraLight' !important;">Mailing Address</label>
                                <input type="email" required name="s_email" id="mailingAddress1" class="form-control" value="" >
                            </div>
                        </div>
                    </div>

                    <!--End of the second column-->


                    <div class="form-group column-textLeft" style = "margin-bottom: 0px;position: relative;top: -30px;">
                        <div class="headerPopup colmn-padds1" style = "margin:35px 0px 0px 0px" >
                            <p class="textInsideSsectionsPopup titleLabelPopup font-column-Subhead head-pad-top colmn-padds1"  style="margin-bottom: 0px;font-family: 'AvenirNextLTW01-UltraLight', 'Avenir', 'Didot' !important;font-weight: bold;letter-spacing: 1px; margin-left: -9px; width: auto;text-align: left">
                                SELECT YOUR SIZES
                            </p>

                        </div>

                <!--end of the 3rd column--> 

                        <div class="col-md-3 new-cosigner-pads" style="padding-left:0 !important;">
                            <p class="col-sm-1" style = "padding:0px;">Shirt</p>
                            <div style="margin-bottom: 10px;">
                                <input name="shirt_size" id = "shirt_name" placeholder =" " required id="" class="form-control">
                            </div>

                            <p class="col-sm-1" style = " padding:0px;">*Shoes</p>
                            <div>
                                <input name="shirt_size_num" placeholder =" " id="shoes_size" required class="form-control">
                            </div>
                        </div>

                        <div class="col-md-3 new-cosigner-pads">
                            <p class="col-sm-1 column-margnbotops" style = "padding:0px;" >Pants</p>
                            <div style="margin-bottom: 10px;">
                                <input name="pants_size" id="pants" placeholder =" " required class="form-control"> 
                            </div>

                            <div  class=" new-cosigner-pads">
                                <p class="col-sm-1" style = "padding:0px;display:none;">*Shoes</p>
                                <input name="pants_size_num" placeholder =" " style = "display:none;"   class="form-control">

                                <p class="col-sm-1" style = "padding:0px;"   >    </p>
                                <p data-toggle="modal" class="form-control select-style euro-size" data-target="#showShoeSizes" style=" cursor:pointer;font-size:18px;border:1px solid #dddddd;line-height: 0 !important;"  title="Click to view">Euro size chart <i class="fa fa-question-circle" aria-hidden="true"></i></p> 
                            </div>
                        </div>




                        <div class="col-md-3 new-cosigner-pads">
                            <p id="dress_jacket" class="col-sm-1  column-margnbotops" style = "padding:0px;">Jacket</p>
                            <div style="margin-bottom: 10px;" >
                                <input name="dress_jacket_size" placeholder =" " id="jacket" class="form-control"> 
                            </div>






                            <p class="col-sm-1" style = "padding:0px;"  style = "display:none;"></p> 







                            <div class="modal fade" id="showShoeSizes" role="dialog">


                                <div class="modal-dialog">




                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">sEuro size chart.</h4>
                                        </div>

                                        <div class="modal-body">
                                            <ul class="nav nav-tabs" style="text-align:center;">
                                                <li class="active"><a data-toggle="tab" href="#manTable"><b>MAN</b></a></li>
                                                <li><a data-toggle="tab" href="#womanTable"><b>WOMAN</b></a></li>
                                            </ul>

                                            <div class="tab-content">

                                                <div id="manTable" class="tab-pane fade in active">
                                                    <table class="table table-hover">
                                                        <thead style="background-color:#f2f2f2;">
                                                        <th>US</th>
                                                        <th>EU</th>
                                                        </thead>
                                                        <tbody>
                                                        <tr>
                                                            <td>6</td>
                                                            <td>38.5</td>
                                                        </tr>
                                                        <tr>
                                                            <td>6.5</td>
                                                            <td>39</td>
                                                        </tr>
                                                        <tr>
                                                            <td>7</td>
                                                            <td>40</td>
                                                        </tr>
                                                        <tr>
                                                            <td>7.5</td>
                                                            <td>40.5</td>
                                                        </tr>
                                                        <tr>
                                                            <td>8</td>
                                                            <td>41</td>
                                                        </tr>
                                                        <tr>
                                                            <td>8.5</td>
                                                            <td>42</td>
                                                        </tr>
                                                        <tr>
                                                            <td>9</td>
                                                            <td>42.5</td>
                                                        </tr>
                                                        <tr>
                                                            <td>9.5</td>
                                                            <td>43</td>
                                                        </tr>
                                                        <tr>
                                                            <td>10</td>
                                                            <td>44</td>
                                                        </tr>
                                                        <tr>
                                                            <td>10.5</td>
                                                            <td>44.5</td>
                                                        </tr>
                                                        <tr>
                                                            <td>11</td>
                                                            <td>45</td>
                                                        </tr>
                                                        <tr>
                                                            <td>11.5</td>
                                                            <td>45.5</td>
                                                        </tr>
                                                        <tr>
                                                            <td>12</td>
                                                            <td>46</td>
                                                        </tr>
                                                        <tr>
                                                            <td>12.5</td>
                                                            <td>46</td>
                                                        </tr>
                                                        <tr>
                                                            <td>13</td>
                                                            <td>47.5</td>
                                                        </tr>
                                                        <tr>
                                                            <td>13.5</td>
                                                            <td>48</td>
                                                        </tr>
                                                        <tr>
                                                            <td>14</td>
                                                            <td>48.5</td>
                                                        </tr>
                                                        <tr>
                                                            <td>15</td>
                                                            <td>49</td>
                                                        </tr>
                                                        <tr>
                                                            <td>16</td>
                                                            <td>50.5</td>
                                                        </tr>
                                                        <tr>
                                                            <td>17</td>
                                                            <td>51.5</td>
                                                        </tr>

                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="tab-pane fade" id="womanTable">
                                                    <table class="table table-hover">
                                                        <thead style="background-color:#f2f2f2;">
                                                        <th>US</th>
                                                        <th>EU</th>
                                                        </thead>
                                                        <tbody>
                                                        <tr>
                                                            <td>4 & 4.5</td>
                                                            <td>35</td>
                                                        </tr>
                                                        <tr>
                                                            <td>5 & 5.5</td>
                                                            <td>36</td>
                                                        </tr>
                                                        <tr>
                                                            <td>6 & 6.5</td>
                                                            <td>37</td>
                                                        </tr>
                                                        <tr>
                                                            <td>7 & 7.5</td>
                                                            <td>38</td>
                                                        </tr>
                                                        <tr>
                                                            <td>8 & 8.5</td>
                                                            <td>39</td>
                                                        </tr>
                                                        <tr>
                                                            <td>9 & 9.5</td>
                                                            <td>40</td>
                                                        </tr>
                                                        <tr>
                                                            <td>10 & 10.5</td>
                                                            <td>41</td>
                                                        </tr>
                                                        <tr>
                                                            <td>11 & 11.5</td>
                                                            <td>42</td>
                                                        </tr>
                                                        <tr>
                                                            <td>12 & 12.5</td>
                                                            <td>43</td>
                                                        </tr>
                                                        <tr>
                                                            <td>13 & 13.5</td>
                                                            <td>44</td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!--MODAL END -->

                        </div> 


                <!--end of the 4rth column--> 

                        <div class="col-lg-12  col-md-12 col-sm-12 col-xs-12 "></div>

                        <div class="border_b">
                            <p class="textInsideSsectionsPopup col-md-4 font-column-Subhead" >LIST YOUR FAVORITE BRANDS:</p>
                            <input type="text" name="brands" class="col-md-8 form-control acsbrands" id="listing_brand" style="width: 99%;margin-left: 7px;    font-size: 16px;" placeholder="A comma separates the brands.">
                        </div>
                            

                            <div class="sectionsPopup column-textCenter" id="newShopper" style = "padding-bottom: 0px"></div>

                                <h2 class="textInsideSectionsPopup select_style_wear  font-column-select-style"> SELECT THE STYLES YOU WEAR</h2>
                                <h3 class="textInsideSectionsPopup font-column-Subhead " style="display: initial;font-family: 'AvenirNextLTW01-UltraLight', 'Avenir', 'Didot' !important;font-weight: bold;letter-spacing: 1px;font-size: 19px; margin-left: -9px; width: auto;text-align: left">
                                    CLICK ON THE CATEGORY LINK TO SEE EXAMPLES OF EACH
                                </h3>
                                <div class="tab_panels">
                                    <nav class="modal_nav">
                                        <ul class="tabs">
                                            <li rel="panel1" class="actived"><a href="javascript:void(0);" style = "font-size: 16px;">CASUAL</a></li>
                                            <li id="panel2li" rel="panel2" style="display:none;"><a href="javascript:void(0);" style = "font-size: 16px;">CHIC</a></li>
                                            <li id="panel6li" rel="panel6" style="display:none;"><a href="javascript:void(0);"  style = "font-size: 16px;">MENS WEAR</a></li>
                                            <li rel="panel3"><a href="javascript:void(0);" style = "font-size: 16px;">PREPPY</a></li>
                                            <li rel="panel4"><a href="javascript:void(0);" style = "font-size: 16px;">STREETWEAR</a></li>


                                        </ul>
                                    </nav>

                                    <div id="panel1" class="panell actived text-center panel">
                                        <div class="row">
                                            <div class="hover_append"  style="cursor:pointer;z-index:9999;" id="imageContainer">
                                                <label for="casualCheck" onclick="changeSelected()"><h4  class="stephen_selectButton" id="casualSelect">SELECT</h4></label>
                                                <input type="checkbox" id="casualCheck" class="hidden" name="itemtypeconsign[]" value="CASUAL">
                                            </div>
                                            <div class="col-md-3">
                                                <img class="img-responsive" src="<?php echo get_bloginfo('template_url')?>/img/images_modal.png">
                                            </div>
                                            <div class="col-md-3">
                                                <img class="img-responsive" src="<?php echo get_bloginfo('template_url')?>/img/images_modal.png">
                                            </div>
                                            <div class="col-md-3">
                                                <img class="img-responsive" src="<?php echo get_bloginfo('template_url')?>/img/images_modal.png">
                                            </div>
                                            <div class="col-md-3">
                                                <img class="img-responsive" src="<?php echo get_bloginfo('template_url')?>/img/images_modal.png">
                                            </div>
                                        </div>
                                    </div>


                                    <div id="panel3" class="panell text-center ">
                                        <div class="row">
                                            <div class="hover_append"  style="cursor:pointer;z-index:9999;" id="imageContainerpreppy">
                                                <label for="preppyCheck" onclick="changeSelected()"><h4  class="stephen_selectButton" id="preppySelect">SELECT</h4></label>
                                                <input type="checkbox" id="preppyCheck" class="hidden" name="itemtypeconsign[]" value="PREPPY">
                                            </div>
                                            <div class="col-md-3">
                                                <img class="img-resposive" src="<?php echo get_bloginfo('template_url')?>/img/preppr.png">
                                            </div>
                                            <div class="col-md-3">
                                                <img class="img-resposive" src="<?php echo get_bloginfo('template_url')?>/img/preppr.png">
                                            </div>
                                            <div class="col-md-3">
                                                <img class="img-resposive" src="<?php echo get_bloginfo('template_url')?>/img/preppr.png">
                                            </div>
                                            <div class="col-md-3">
                                                <img class="img-resposive" src="<?php echo get_bloginfo('template_url')?>/img/preppr.png">
                                            </div>
                                        </div>
                                    </div>

                                    <div id="panel4" class="panell text-center ">
                                        <div class="row">
                                            <div class="hover_append"  style="cursor:pointer;z-index:9999;" id="imageContainerstreetwear">
                                                <label for="streetwearCheck" onclick="changeSelected()"><h4  class="stephen_selectButton" id="streetwearSelect">SELECT</h4></label>
                                                <input type="checkbox" id="streetwearCheck" class="hidden" name="itemtypeconsign[]" value="STREETWEAR">
                                            </div>
                                            <div class="col-md-3">
                                                <img class="img-resposive" src="<?php echo get_bloginfo('template_url')?>/img/streetwear.png">
                                            </div>
                                            <div class="col-md-3">
                                                <img class="img-resposive" src="<?php echo get_bloginfo('template_url')?>/img/streetwear.png">
                                            </div>
                                            <div class="col-md-3">
                                                <img class="img-resposive" src="<?php echo get_bloginfo('template_url')?>/img/streetwear.png">
                                            </div>
                                            <div class="col-md-3">
                                                <img class="img-resposive" src="<?php echo get_bloginfo('template_url')?>/img/streetwear.png">
                                            </div>
                                        </div>
                                    </div>

                                    <div id="panel2" class="panell text-center " style="visibility:hidden">
                                        <div class="row">
                                            <div class="hover_append"  style="cursor:pointer;z-index:9999;" id="imageContainerchic">
                                                <label for="chicCheck" onclick="changeSelected()"><h4  class="stephen_selectButton" id="chicSelect">SELECT</h4></label>
                                                <input type="checkbox" id="chicCheck" class="hidden" name="itemtypeconsign[]" value="CHIC">
                                            </div>
                                            <div class="col-md-3">
                                                <img class="img-resposive" src="http://lifeafterpurchase.com/wp-content/themes/custom/img/chic.png">
                                            </div>
                                            <div class="col-md-3">
                                                <img class="img-resposive" src="http://lifeafterpurchase.com/wp-content/themes/custom/img/chic.png">
                                            </div>
                                            <div class="col-md-3">
                                                <img class="img-resposive" src="http://lifeafterpurchase.com/wp-content/themes/custom/img/chic.png">
                                            </div>
                                            <div class="col-md-3">
                                                <img class="img-resposive" src="http://lifeafterpurchase.com/wp-content/themes/custom/img/chic.png">
                                            </div>
                                        </div>
                                    </div>

                                    <div id="panel6" class="panell text-center " style="visibility:hidden">
                                        <div class="row">
                                            <div class="hover_append"  style="cursor:pointer;z-index:9999;" id="imageContainerMensWear">
                                                <label for="mensWearCheck" onclick="changeSelected()"><h4  class="stephen_selectButton" id="mensWearSelect">SELECT</h4></label>
                                                <input type="checkbox" id="mensWearCheck" class="hidden" name="itemtypeconsign[]" value="MENS WEAR">
                                            </div>
                                            <div class="col-md-3">
                                                <img class="img-resposive" src="<?php echo get_bloginfo('template_url')?>/img/chic.png">
                                            </div>
                                            <div class="col-md-3">
                                                <img class="img-resposive" src="<?php echo get_bloginfo('template_url')?>/img/chic.png">
                                            </div>
                                            <div class="col-md-3">
                                                <img class="img-resposive" src="<?php echo get_bloginfo('template_url')?>/img/chic.png">
                                            </div>
                                            <div class="col-md-3">
                                                <img class="img-resposive" src="<?php echo get_bloginfo('template_url')?>/img/chic.png">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-12  col-md-12 col-sm-12 col-xs-12 btn-select-update" style="text-align: center;">
                                    <button type="button" class="btn btn-default btn-lg" onclick="updateAccountaaa();" style = " background-color:black; color:white;border-radius: 0px;padding: 10px 60px !important;margin-bottom: 40px;margin-top: 40px;">SELECT</button>
                                </div> 
                                <div class="col-lg-12  col-md-12 col-sm-12 col-xs-12 " style = "border-top:1px solid black;margin-bottom: 40px;"></div>
                        </form>
                            <input type='hidden' id="uc_uploads" value="<?php echo get_bloginfo ( 'template_url' ); ?>/images/uc_uploads/">
                            <input type='hidden' id="cp_uploads" value="<?php echo get_bloginfo ( 'template_url' ); ?>/images/cp_uploads/">


                                <!--Start column Profile-->
                                <div class="col-lg-12  col-md-12 col-sm-12 col-xs-12 colmn-padds1 column-textCenter "  >


                                    <?php
                                    global $wpdb;
                                    $name_uc_profile = "";
                                    $oldImageProfileIcon =  $wpdb->get_results("SELECT * FROM wp_profile WHERE user_id = '" . $user_id . "' ORDER BY ID ASC ", ARRAY_A);

                                    foreach($oldImageProfileIcon as $value){
                                        $name_uc_profile =  $value['profile_name'];
                                    }

                                    ?>


                                    <form  id="uploadProfile1Form" method="post" >
                                        <div class="form-group">
                                            <div id="singleImage"></div> 
                                            <div class="col-lg-12  col-md-12 col-sm-12 col-xs-12 "  >

                                                <?php
                                                if($name_uc_profile == ""){
                                                ?>
                                                    <img class="oldImageProfileIcon" id="oldImageProfileIcon1" style = "width:19%;height:182px;border: 1px solid black;height:30%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/Balenciaga.jpg" alt="...">
<!--                                                    <img class="oldImageProfileIcon" id="oldImageProfileIcon1" style = "width:19%;height:182px;border: 1px solid black;height:30%" src = "--><?php //echo get_bloginfo ( 'template_url' ); ?><!--/img/Balenciaga.jpg" alt="...">-->
                                                    <?php
                                                }else{
                                                    ?>
                                                    <img class="oldImageProfileIcon" style = "width: 19%;height:182px;border: 1px solid black;height:30%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/images/uc_uploads/<?php echo $name_uc_profile?>" id="oldImageProfileIcon1" alt="...">
                                                    <?php
                                                }
                                                ?>
<!--                                                    <img class="oldImageProfileIcon2" style = "border: 1px solid black;height:30%" src = "--><?php //echo get_bloginfo ( 'template_url' ); ?><!--/images/uc_uploads/--><?php //echo $name_uc_profile?><!--" alt="...">-->


                                                <div class="imageProfileIcon" style="display:none;width: 19%;text-align: center;margin: auto;position: relative;padding: 2px 0px;" onclick="document.getElementById('ppID').click(); return false;" >
                                                    <img style = "margin: auto;display: block;height:30px" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/cp_icon.png" alt="...">
                                                </div>
                                            </div>
                                            <input type="file" id="ppID" name="updateProfile" id="elem" style="visibility: hidden;"/>
                                            <div class="col-lg-12  col-md-12 col-sm-12 col-xs-12 btn-select-update"  >
                                                <input type="submit" id="uploadProfile1submit" class="btn btn-default btn-lg"  style = "background-color:black; color:white;border-radius: 0px;padding: 10px 60px !important;" value="UPDATE">
                                            </div>
                                        </div>
                                    </form>
                                    <div id="gallery_update_account"></div>
                                </div>


                                <div style="clear: both"></div>
                                <form id="uploadCoverPhoto" action="dutere" method="post">
                                    <div class="form-group">
                                        <div class="col-lg-12  col-md-12 col-sm-12 col-xs-12 "  >



                                            <?php
                                            global $wpdb;
                                            $name_cp_profile = "";
                                            $oldImageCoverIcon =  $wpdb->get_results("SELECT * FROM wp_coverphoto WHERE user_id = '" . $user_id . "' ORDER BY ID ASC ", ARRAY_A);

                                            foreach($oldImageCoverIcon as $value){
                                                $name_cp_profile =  $value['cp_name'];
                                            }



                                            if($name_cp_profile == "") {
                                                ?>

                                                <img class="oldImageCoverIcon" id="oldImageCoverIcon" style = "height:350px; width: 1110px; border: 1px solid black;" src = "<?php echo get_bloginfo ( 'template_url'); ?>/img/gaukukh-nandanban-logo.jpg"  alt="...">


                                                <?php

                                            }else{
                                                ?>

                                                <img class="oldImageCoverIcon" id="oldImageCoverIcon" style = "height:350px; width: 1110px; border: 1px solid black;"  src = "<?php echo get_bloginfo ( 'template_url'); ?>/images/cp_uploads/<?php echo $name_cp_profile ?>"  alt="...">


                                                <?php
                                            }
                                            ?>
<!--                                            <img class="oldImageCoverIcon" style = "border: 1px solid black;height:30%" src = "--><?php //echo get_bloginfo ( 'template_url' ); ?><!--/images/uc_uploads/--><?php //echo $name_uc_profile?><!--" alt="...">-->
<!---->
<!--                                            <img class = "oldImageCoverIcon" style="border: 1px solid black;height:300px" src = "--><?php //echo get_bloginfo ( 'template_url'); ?><!--/img/gaukukh-nandanban-logo.jpg"  alt="...">-->

                                            <div class="imageCoverIcon" style="display:none;width: 19%;text-align: center;margin: auto;position: relative;padding: 2px 0px;" onclick="document.getElementById('cpID').click(); return false;" >
                                                <img style = "margin: auto;display: block;height:30px" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/cp_icon.png" alt="...">
                                            </div>
                                        </div>
                                    </div>
                                    <input type="file" id="cpID" name="updateCoverPhoto" style="visibility: hidden;"/>
                                    <div  class="btn-select-update" >
                                        <input type="submit"  id="updateCoverPhotosubmit" class="btn btn-default btn-lg"  style = "background-color:black; color:white;border-radius: 0px;padding: 10px 60px !important;" value="UPDATE">
                                    </div>
                                </form>
                                <div id="gallery_cp"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
 
</div>

<?php

 require_once('sub-footer.php');

?>


 

