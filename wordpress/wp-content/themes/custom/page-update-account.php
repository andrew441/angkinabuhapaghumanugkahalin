<?php
/**
 *  Template Name: Update Account
 */
require_once('header.php');
?>


<style>
    #mainWrapper{border-bottom:0 !important;}
    select.form-control{display:inline !important;font-size:18px !important;padding: 5px !important;}
</style>

    <link rel="stylesheet" type="text/css" href="<?php echo get_bloginfo ( 'template_url' ); ?>/css/custom-list.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="<?php echo JS; ?>/tops.js"></script>
<div  id="frmbuyer" >
<div class="popupFrm" style="width:80%;">
<!-- Modal content-->
    <div class="contentPopup" style = "padding:0px;">
        <div class="contents">
        <div class="headerPopup">
            <h4 class="titleLabelPopup font-column-head" style="font-family: 'Didot' !important;letter-spacing: 1px; "> FILL OUT DETAILS ABOUT YOURSELF</h4>
        </div>
        <div class="headerPopup font-column-mar" style = "margin:50px 0px 20px 0px" >
            <h2 class="titleLabelPopup"  style = "text-align: left !important;display:none" >ABOUT YOU</h2>
        </div>



        <form action="" method="POST" id="myform" enctype="multipart/form-data"  style="margin-bottom: 0px;>
        <input type="hidden" name="form_title" value="NewShopper">
            <div class="popup-body">
                <div class="form-horizontal">
                    <div class="form-group column-marginbot">
                        <div class="col-md-4 float-text ">
                            <label for = "firs_name" class = "column-margnbotops" style = "font-weight: bolder;float: left !important;font-family: 'AvenirNextLTW01-UltraLight' !important;">First Name </label>
                            <input type="text" required name="firs_name" class="form-control" id = "first_name" value="" ></div>

                        <div class="col-md-4 float-text">
                            <label for = "last_name" class = "column-margnbotops"  style = "font-weight: bolder;float: left !important;font-family: 'AvenirNextLTW01-UltraLight' !important;">Last Name </label>
                            <input type="text" required name="last_name" class="form-control" id = "last_name" value="" >
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
                                <input type="text" required name="s_fname" id = "age"class="form-control" value=""  >
                            </div>

                            <div class="col-md-4 float-text">
                                <label for = "email" class = "column-margnbotops" style = "font-weight: bolder;float: left !important;font-family: 'AvenirNextLTW01-UltraLight' !important;">Email</label>
                                <input type="email" required name="s_email" id = "email"class="form-control" value=""  >
                            </div>

                            <div class="col-md-4 float-text">
                                <label for = "mailingAddress" class = "column-margnbotops" style = "font-weight: bolder;float: left !important;font-family: 'AvenirNextLTW01-UltraLight' !important;">Mailing Address</label>
                                <input type="email" required name="s_email" id="mailingAddress"class="form-control" value="" >
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

                        <div class="col-md-3 new-cosigner-pads" style="padding-left:0 !important;">
                            <p class="col-sm-1" style = "padding:0px;">Shirt</p>
                            <div style="margin-bottom: 10px;">
                                <input name="shirt_size" id = "shirt" placeholder =" " required id="" class="form-control">
                            </div>

                            <p class="col-sm-1" style = " padding:0px;">*Shoes</p>
                            <div>
                                <input name="shirt_size_num" placeholder =" " id="shoes" required class="form-control">
                                <!--<option value="">Size num</option>
                                <option value="34-36">34-36</option>
                                <option value="36-38">36-38</option>
                                <option value="38-40">38-40</option>
                                <option value="40-42">40-42</option>
                                <option value="42-44">42-44</option>
                                <option value="44-46">44-46</option>
                                <option value="46-48">46-48</option>
                            </select>-->
                            </div>
                        </div>
                        <div class="col-md-3 new-cosigner-pads">
                            <p class="col-sm-1 column-margnbotops" style = "padding:0px;" >Pants</p>
                            <div style="margin-bottom: 10px;">
                                <input name="pants_size" id="pants" placeholder =" " required class="form-control">
                                <!--<option value="">Size</option>
                                <option disabled style='font-size:bold;color:black;'>STANDARD</option>
                                <option value="OS (one size)">OS (one size)</option>
                                <option value="23 (00, XXS)">23 (00, XXS)</option>
                                <option value="24 (0, XS)">24 (0, XS)</option>
                                <option value="25 (2, XS)">25 (2, XS)</option>
                                <option value="26 (2, XS)">26 (2, XS)</option>
                                <option value="27 (4, S)">27 (4, S)</option>
                                <option value="28 (4,S)">28 (4,S)</option>
                                <option value="29 (6, M)">29 (6, M)</option>
                                <option value="30 (6, M)">30 (6, M)</option>
                                <option value="31 (6, M)">31 (6, M)/option>
                                <option value="32 (8, M)">32 (8, M)</option>
                                <option value="33 (10, M)">33 (10, M)</option>
                                <option value="34 (12, L)">34 (12,m L)</option>
                                <option value="35 (14, L)">35 (14, L)</option>
                                <option value="36 (14, L)">36 (14, L)</option>
                                <option disabled style='font-size:bold;color:black;'>PLUS</option>
                                <option value="16 (XL, PLUS 0x)">16 (XL, PLUS 0x)</option>
                                <option value="18 (XL, Plus 0x)">18 (XL, Plus 0x)</option>
                                <option value="20 (Plus 1x)">20 (Plus 1x)</option>
                                <option value="22 (Plus 2x)">22 (Plus 2x)</option>
                                <option value="24 (Plus 2x)">24 (Plus 2x)</option>
                                <option value="26 (Plus 3x)">26 (Plus 3x)</option>
                                <option value="28 (Plus 3x)">28 (Plus 3x)</option>
                            </select>-->
                            </div>

                            <div  class=" new-cosigner-pads"     >

                                <p class="col-sm-1" style = "padding:0px;display:none;">*Shoes</p>
                                <input name="pants_size_num" placeholder =" " style = "display:none;"   class="form-control">

                                <p class="col-sm-1" style = "padding:0px;"   >    </p>
                                <p data-toggle="modal" class="form-control select-style euro-size" data-target="#showShoeSizes" style=" cursor:pointer;font-size:18px;border:1px solid #dddddd;line-height: 0 !important;"  title="Click to view">Euro size chart <i class="fa fa-question-circle" aria-hidden="true"></i></p>

                                <!--<option value="">Size num</option>
                                <option value="26">26</option>
                                <option value="28">28</option>
                                <option value="29">29</option>
                                <option value="30">30</option>
                                <option value="31">31</option>
                                <option value="32">32</option>
                                <option value="33">33</option>
                                <option value="34">34</option>
                                <option value="36">36</option>
                                <option value="38">38</option>
                                <option value="40">40</option>
                            </select>-->
                            </div>
                        </div>
                        <div class="col-md-3 new-cosigner-pads">
                            <p id="dress_jacket" class="col-sm-1  column-margnbotops" style = "padding:0px;">Jacket</p>
                            <div style="margin-bottom: 10px;" >
                                <input name="dress_jacket_size" placeholder =" " id="jacket" class="form-control">
                                <!--<option value="">Size</option>

                            </select>-->
                            </div>

                            <p class="col-sm-1" style = "padding:0px;"  style = "display:none;">    </p>
                            <!--
                                                        <p data-toggle="modal" class="form-control select-style" data-target="#showShoeSizes" style="cursor:pointer;font-size:18px;border:1px solid #dddddd;line-height: 0 !important;"  title="Click to view">Euro size chart <i class="fa fa-question-circle" aria-hidden="true"></i></p>
                                                        <!--MODAL START-->
                            <div class="modal fade" id="showShoeSizes" role="dialog">
                                <div class="modal-dialog">

                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">Euro size chart.</h4>
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



                            <!--<div >

                                <input name="dress_jacket_size_num" id="" class="form-control">
                                <!--<option value="">Size num</option>
                                <option value="31">31</option>
                                <option value="32">32</option>
                                <option value="33">33</option>
                                <option value="35">35</option>
                                <option value="37">37</option>
                                <option value="39">39</option>
                                <option value="41">41</option>
                                <option value="44">44</option>
                            </select>
                            </div>-->
                        </div>
                        <div class="col-md-3 new-cosigner-pads" style="display:none;text-align:left;padding-right:0 !important;">
                            <p class="col-sm-12" style = "padding:0px;" >SHOE</p>
                            <div >

                                <input required name="shoes_size_num"  placeholder ="Size" class="form-control" id="shoeSelect">
                                <!--<option value="">Size</option>
                            </select>-->
                            </div>
                        </div>
                        <div class="col-lg-12  col-md-12 col-sm-12 col-xs-12 "></div>
                        <div class="border_b">
                            <p class="textInsideSsectionsPopup col-md-4 font-column-Subhead" >LIST YOUR FAVORITE BRANDS:</p>
                            <input type="text" name="brands" class="col-md-8 form-control acsbrands" id="brand" style="width: 99%;margin-left: 7px;    font-size: 16px;" placeholder="A comma separates the brands.">
                        </div>
                            <div class="sectionsPopup column-textCenter" id="newShopper" style = "padding-bottom: 0px">
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
                                                <img class="img-responsive" src="http://lifeafterpurchase.com/wp-content/themes/custom/img/images_modal.png">
                                            </div>
                                            <div class="col-md-3">
                                                <img class="img-responsive" src="http://lifeafterpurchase.com/wp-content/themes/custom/img/images_modal.png">
                                            </div>
                                            <div class="col-md-3">
                                                <img class="img-responsive" src="http://lifeafterpurchase.com/wp-content/themes/custom/img/images_modal.png">
                                            </div>
                                            <div class="col-md-3">
                                                <img class="img-responsive" src="http://lifeafterpurchase.com/wp-content/themes/custom/img/images_modal.png">
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
                                                <img class="img-resposive" src="http://lifeafterpurchase.com/wp-content/themes/custom/img/preppr.png">
                                            </div>
                                            <div class="col-md-3">
                                                <img class="img-resposive" src="http://lifeafterpurchase.com/wp-content/themes/custom/img/preppr.png">
                                            </div>
                                            <div class="col-md-3">
                                                <img class="img-resposive" src="http://lifeafterpurchase.com/wp-content/themes/custom/img/preppr.png">
                                            </div>
                                            <div class="col-md-3">
                                                <img class="img-resposive" src="http://lifeafterpurchase.com/wp-content/themes/custom/img/preppr.png">
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
                                                <img class="img-resposive" src="http://lifeafterpurchase.com/wp-content/themes/custom/img/streetwear.png">
                                            </div>
                                            <div class="col-md-3">
                                                <img class="img-resposive" src="http://lifeafterpurchase.com/wp-content/themes/custom/img/streetwear.png">
                                            </div>
                                            <div class="col-md-3">
                                                <img class="img-resposive" src="http://lifeafterpurchase.com/wp-content/themes/custom/img/streetwear.png">
                                            </div>
                                            <div class="col-md-3">
                                                <img class="img-resposive" src="http://lifeafterpurchase.com/wp-content/themes/custom/img/streetwear.png">
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

                                </div>


                                <div class="col-lg-12  col-md-12 col-sm-12 col-xs-12 btn-select-update" style="text-align: center;">

                                    <button type="button" class="btn btn-default btn-lg" style = " background-color:black; color:white;border-radius: 0px;padding: 10px 60px !important;margin-bottom: 40px;margin-top: 40px;">SELECT</button>
                                </div>

                                <div class="col-lg-12  col-md-12 col-sm-12 col-xs-12 " style = "border-top:1px solid black;margin-bottom: 40px;">
                                 </div>





                                <!--Start column Profile-->
                                <div class="col-lg-12  col-md-12 col-sm-12 col-xs-12 colmn-padds1 column-textCenter "  >
                                    <form role="form">
                                        <div class="form-group">
                                            <div class="col-lg-12  col-md-12 col-sm-12 col-xs-12 "  >
                                                <img style = "border: 1px solid black;height:30%" src = "<?php echo get_bloginfo ( 'template_url' ); ?>/img/Balenciaga.jpg" alt="...">
                                            </div>

                                            <div class="col-lg-12  col-md-12 col-sm-12 col-xs-12 btn-select-update"  >

                                                <button type="button" class="btn btn-default btn-lg" style = " background-color:black; color:white;border-radius: 0px;padding: 10px 60px !important;margin-bottom: 40px;margin-top: 40px;">UPDATE</button>
                                            </div>
                                        </div>
                                    </form>

                                    <form role="form">
                                        <div class="form-group">
                                            <div class="col-lg-12  col-md-12 col-sm-12 col-xs-12 "  >
                                                <img class = "cover-photoH" style="border: 1px solid black;height:300px" src = "<?php echo get_bloginfo ( 'template_url'); ?>/img/gaukukh-nandanban-logo.jpg"  alt="...">

                                            </div>
                                            <!--
                                            <div class="col-lg-12  col-md-12 col-sm-12 col-xs-12 " >

                                                <button type="button" class="btn btn-default btn-lg" style = " background-color:black; color:white;border-radius: 0px;padding: 10px 60px !important;">UPDATE</button>
                                            </div>-->
                                        </div>
                                    </form>

                                </div>
                                <div class="btn-select-update" >
                                    <input type="text" class="hidden" name="formtype" value="Shopper">

                                    <!--<input class="submit"type="button" name="submit" style = "padding: 10px 40px !important; " value="UPDATE">
                                    -->

                                    <button type="button" class="btn btn-default btn-lg" onclick="updateAccount();" style = " background-color:black; color:white;border-radius: 0px;padding: 10px 60px !important;    margin-bottom: 40px;margin-top: 40px;">UPDATE</button>
                                </div>
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



