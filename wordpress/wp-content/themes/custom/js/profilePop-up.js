
$(function () {

        var user_status_id= document.getElementById('user_status_id').value;
        if(user_status_id == 1){
                var underReviewCounter = $('#underReviewCounter').val();
                var approvalsCounter = $('#approvalsCounter').val();
                var forsaleCounter = $('#forsaleCounter').val();
                var soldCounter = $('#soldCounter').val();

                document.getElementById('underReveiwCounterOutput').innerText = underReviewCounter;
                document.getElementById('approvalsCounterOutput').innerText = approvalsCounter;
                document.getElementById('forsaleCounterOutput').innerText = forsaleCounter;
                document.getElementById('soldCounterOutput').innerText = soldCounter;

                var approvalsminusParenthesis = "";
                var forsaleMemberminusParenthesis = "";

                $('.click_approvalsid_forMenu_admin').on('click', function(){
                        var itemTotal = parseInt($('#approvalsCounterOutput').text());

                        if($('#myModal4ID')){
                                approvalsminusParenthesis = itemTotal-1;
                                if(approvalsminusParenthesis < 0)
                                        approvalsminusParenthesis = 0;
                                document.getElementById('approvalsCounterOutput').innerText = approvalsminusParenthesis;
                        }
                });
                $('.click_forsaleMember_forMenu_admin').on('click', function(){
                        var itemTotal = parseInt($('#forsaleCounterOutput').text());

                        if($('#myModal4ID')){
                                forsaleMemberminusParenthesis = itemTotal-1;
                                if(forsaleMemberminusParenthesis < 0)
                                        forsaleMemberminusParenthesis = 0;
                                document.getElementById('forsaleCounterOutput').innerText = forsaleMemberminusParenthesis;
                        }
                });

        }else{

                var newitemCounter = $('#newitemCounter').val();
                var approvedCounter = $('#approvedCounter').val();
                var pendingCounter = $('#pendingCounter').val();
                var adminforsaleCounter = $('#adminforsaleCounter').val();
                document.getElementById('newitemCounteroutput').innerText = newitemCounter;
                document.getElementById('approvedCounteroutput').innerText = approvedCounter;
                document.getElementById('pendingCounteroutput').innerText = pendingCounter;
                document.getElementById('adminforsaleCounteroutput').innerText = adminforsaleCounter;
                var newminusParenthesis = "";
                var approvedminusParenthesis = "";
                var pendingminusParenthesis = "";
                var adminminusParenthesis = "";
                        //condition for the negative
                $('.click_id_forMenu_admin').on('click', function(){
                        var myModal7IDs= document.getElementById('myModal7ID').value;

                        var itemTotal = parseInt($('#newitemCounteroutput').text());
                        if($('#myModal7ID')){
                                newminusParenthesis= itemTotal-1;

                                if(newminusParenthesis < 0)
                                   newminusParenthesis = 0;
                            //console.log(newminusParenthesis);
                           // document.getElementById('newitemCounteroutput').innerText = newminusParenthesis;
                                document.getElementById('newitemCounteroutput').innerText = newminusParenthesis;
                        }else {
                                console.log("Error");
                        }
                });
                $('.click_approvepar_forMenu_admin').on('click', function(){
                        //var val = $('#myModal8ID').val();
                        //console.log(val);

                        var itemTotal = parseInt($('#approvedCounteroutput').text());

                        if($('#myModal8ID')){
                                approvedminusParenthesis = itemTotal-1;
                                if(approvedminusParenthesis < 0)
                                        approvedminusParenthesis = 0;

                                document.getElementById('approvedCounteroutput').innerText = approvedminusParenthesis;
                        }
                });
                $('.click_pending_forMenu_admin').on('click', function(){

                        var itemTotal = parseInt($('#pendingCounteroutput').text());

                        if($('#myModal8ID')){
                                pendingminusParenthesis = itemTotal-1;
                                if(pendingminusParenthesis < 0)
                                        pendingminusParenthesis = 0;

                                document.getElementById('pendingCounteroutput').innerText = pendingminusParenthesis;
                        }
                });

                $('.click_forsaleAdmin_forMenu_admin').on('click', function(){

                        var itemTotal = parseInt($('#adminforsaleCounteroutput').text());
                        if($('#myModal10ID')){
                                adminminusParenthesis = itemTotal-1;
                                if(adminminusParenthesis < 0)
                                        adminminusParenthesis = 0;

                                document.getElementById('adminforsaleCounteroutput').innerText = adminminusParenthesis;
                        }

                });


        }



        //$.fn.loadNewTotal = function () {
        //
        //        var newitemCounter = $('#newitemCounteroutput').text();
        //        var minusParenthesis = document.getElementById('newitemCounteroutput').innerText = newitemCounter;
        //        console.log("load new total" + newitemCounter);
        //}

    $('.texts1-rev > #underReviewId').on('click', function () {

            //$.fn.loadNewTotal();
        under_review_tabs_id = $(this).val();
        //console.log(under_review_tabs_id);
        var profilePop = document.getElementById('profilePop').value;
        var imageUnderreviewSite = document.getElementById('imageUnderreviewSite').value;
        //document.getElementById("idName").innerText = under_review_tabs_id;
        var data = {
            under_review_tabs_id: under_review_tabs_id
        }
        $.post(profilePop, data)
            .done( function(entry){ 
                var res = entry;
                var res2 = res.split("(operationalsplit)");
                //console.log(res2);
                <!--this is under review pop-up-->
                document.getElementById('myModal3ID').value = res2[0];
                document.getElementsByClassName('subCategory_nameUnderreview')[0].innerText = res2[21];
                document.getElementsByClassName('brandUnderreview')[0].innerHTML = res2[6];
                document.getElementsByClassName('itemUnderreview')[0].innerHTML = res2[5];
                document.getElementsByClassName('signs_of_wear_and_tearUnderreview')[0].innerHTML = res2[16];
                document.getElementsByClassName('descriptionUnderreview')[0].innerHTML = res2[12];
                document.getElementById('inputdefault1').value = res2[8];
                document.getElementById('inputdefault2').value = res2[15];
                document.getElementById('inputdefault3').value = res2[9];
                document.getElementById('storewebsiteUnderreview').href = res2[11];
                document.getElementsByClassName('imgsrcUnderreview')[0].src = imageUnderreviewSite + res2[23];
                document.getElementsByClassName('imgsrcUnderreview1')[0].src = imageUnderreviewSite + res2[47];
                document.getElementsByClassName('imgsrcUnderreview2')[0].src = imageUnderreviewSite + res2[71];
                document.getElementsByClassName('imgsrcUnderreview3')[0].src = imageUnderreviewSite + res2[95];
                document.getElementsByClassName('imgsrcUnderreview4')[0].src = imageUnderreviewSite + res2[23];
                document.getElementsByClassName('imgsrcUnderreview5')[0].src = imageUnderreviewSite + res2[47];
                document.getElementsByClassName('imgsrcUnderreview6')[0].src = imageUnderreviewSite + res2[71];
                document.getElementsByClassName('imgsrcUnderreview7')[0].src = imageUnderreviewSite + res2[95];

                <!--this is approvals pop-up-->
                document.getElementById('myModal4ID').value = res2[0];
                document.getElementsByClassName('subCategory_nameUnderreview1')[0].innerText = res2[21];
                document.getElementsByClassName('brandUnderreview1')[0].innerHTML = res2[6];
                document.getElementsByClassName('itemUnderreview1')[0].innerHTML = res2[5];
                document.getElementsByClassName('signs_of_wear_and_tearUnderreview1')[0].innerHTML = res2[16];
                document.getElementsByClassName('descriptionUnderreview1')[0].innerHTML = res2[12];
                document.getElementById('retailPrice1').value = res2[8];
                document.getElementById('askingPrice1').value = res2[15];
                document.getElementById('bestPrice1').value = res2[9];
                document.getElementById('storewebsiteApprovals').href = res2[11];
                document.getElementsByClassName('imgsrcApprovals')[0].src = imageUnderreviewSite + res2[23];
                document.getElementsByClassName('imgsrcApprovals1')[0].src = imageUnderreviewSite + res2[47];
                document.getElementsByClassName('imgsrcApprovals2')[0].src = imageUnderreviewSite + res2[71];
                document.getElementsByClassName('imgsrcApprovals3')[0].src = imageUnderreviewSite + res2[95];
                document.getElementsByClassName('imgsrcApprovals4')[0].src = imageUnderreviewSite + res2[23];
                document.getElementsByClassName('imgsrcApprovals5')[0].src = imageUnderreviewSite + res2[47];
                document.getElementsByClassName('imgsrcApprovals6')[0].src = imageUnderreviewSite + res2[71];
                document.getElementsByClassName('imgsrcApprovals7')[0].src = imageUnderreviewSite + res2[95];



                <!--this is for sale pop-up member-->
                document.getElementById('myModal5ID').value = res2[0];
                document.getElementsByClassName('subCategory_nameForsale')[0].innerText = res2[21];
                document.getElementsByClassName('brandForsale')[0].innerHTML = res2[6];
                document.getElementsByClassName('itemForsale')[0].innerHTML = res2[5];
                document.getElementsByClassName('signs_of_wear_and_tearForsale')[0].innerHTML = res2[16];
                document.getElementsByClassName('descriptionForsale')[0].innerHTML = res2[12];
                document.getElementById('inputdefaultForsale1').value = res2[8];
                document.getElementById('inputdefaultForsale2').value = res2[15];
                document.getElementById('inputdefaultForsale3').value = res2[9];
                document.getElementById('storewebsiteForsale').href = res2[11];
                document.getElementsByClassName('imgsrcForsale')[0].src = imageUnderreviewSite + res2[23];
                document.getElementsByClassName('imgsrcForsale1')[0].src = imageUnderreviewSite + res2[47];
                document.getElementsByClassName('imgsrcForsale2')[0].src = imageUnderreviewSite + res2[71];
                document.getElementsByClassName('imgsrcForsale3')[0].src = imageUnderreviewSite + res2[95];
                document.getElementsByClassName('imgsrcForsale4')[0].src = imageUnderreviewSite + res2[23];
                document.getElementsByClassName('imgsrcForsale5')[0].src = imageUnderreviewSite + res2[47];
                document.getElementsByClassName('imgsrcForsale6')[0].src = imageUnderreviewSite + res2[71];
                document.getElementsByClassName('imgsrcForsale7')[0].src = imageUnderreviewSite + res2[95];

                <!--this is sold pop-up-->

                document.getElementsByClassName('subCategory_nameSold')[0].innerText = res2[21];
                document.getElementsByClassName('brandSold')[0].innerHTML = res2[6];
                document.getElementsByClassName('itemSold')[0].innerHTML = res2[5];
                document.getElementsByClassName('signs_of_wear_and_tearSold')[0].innerHTML = res2[16];
                document.getElementsByClassName('descriptionSold')[0].innerHTML = res2[12];
                document.getElementById('retailpriceSold').value = res2[8];
                document.getElementById('askingpriceSold').value = res2[15];
                document.getElementById('bestpriceSold').value = res2[9];
                document.getElementById('storewebsiteSold').href = res2[11];
                document.getElementsByClassName('imgsrcSold')[0].src = imageUnderreviewSite + res2[23];
                document.getElementsByClassName('imgsrcSold1')[0].src = imageUnderreviewSite + res2[47];
                document.getElementsByClassName('imgsrcSold2')[0].src = imageUnderreviewSite + res2[71];
                document.getElementsByClassName('imgsrcSold3')[0].src = imageUnderreviewSite + res2[95];
                document.getElementsByClassName('imgsrcSold4')[0].src = imageUnderreviewSite + res2[23];
                document.getElementsByClassName('imgsrcSold5')[0].src = imageUnderreviewSite + res2[47];
                document.getElementsByClassName('imgsrcSold6')[0].src = imageUnderreviewSite + res2[71];
                document.getElementsByClassName('imgsrcSold7')[0].src = imageUnderreviewSite + res2[95];

                <!--new items pop-up-->
                document.getElementById('myModal7ID').value = res2[0];
                document.getElementsByClassName('subCategory_nameNewItems')[0].innerText = res2[21];
                document.getElementsByClassName('brandNewItems')[0].innerHTML = res2[6];
                document.getElementsByClassName('itemNewItems')[0].innerHTML = res2[5];
                document.getElementsByClassName('signs_of_wear_and_tearNewItems')[0].innerHTML = res2[16];
                document.getElementsByClassName('descriptionNewItems')[0].innerHTML = res2[12];
                document.getElementById('retailpriceNewItems').value = res2[8];
                document.getElementById('askingpriceNewItems').value = res2[15];
                document.getElementById('bestpriceNewItems').value = res2[9];
                document.getElementById('storewebsiteNewItems').href = res2[11];
                document.getElementsByClassName('imgsrcNewItems')[0].src = imageUnderreviewSite + res2[23];
                document.getElementsByClassName('imgsrcNewItems1')[0].src = imageUnderreviewSite + res2[47];
                document.getElementsByClassName('imgsrcNewItems2')[0].src = imageUnderreviewSite + res2[71];
                document.getElementsByClassName('imgsrcNewItems3')[0].src = imageUnderreviewSite + res2[95];
                document.getElementsByClassName('imgsrcNewItems4')[0].src = imageUnderreviewSite + res2[23];
                document.getElementsByClassName('imgsrcNewItems5')[0].src = imageUnderreviewSite + res2[47];
                document.getElementsByClassName('imgsrcNewItems6')[0].src = imageUnderreviewSite + res2[71];
                document.getElementsByClassName('imgsrcNewItems7')[0].src = imageUnderreviewSite + res2[95];


                <!--approved tabs -->
                //approvedID = document.getElementById('myModal8ID').value = res2[0];



            });



    });



//counter for the menu tabs on account members and admin



        $('div.review-padds > img').on('click', function(){
                var datapanel = $(this).attr("rel");
                var dapanelid =$(this).attr("dapanelid");


                $('.active-tab').removeClass('active-tab');
                $('.opacity').removeClass('opacity');
                $('.'+datapanel).addClass('active-tab');
                $('.'+dapanelid).addClass('opacity');

        });

        $('.dataPanelshowItem1').hide(500);
        $('.dataPanelshowItem2').hide(500);
        $('.dataPanelshowItem3').hide(500);
        $('.dataPanelshowItem4').hide(500);
        $('.dataPanelshowItem5').hide(500);
        $('.dataPanelshowItem6').hide(500);
        $('.dataPanelshowItem7').hide(500);
        $('.dataPanelshowItem8').hide(500);

        $('.showmorItem').on('click',function(){

                var displayITem = $(this).attr('rel');

                $('.'+displayITem).show(500, function(){
                        var dataPanelid = $(this).attr('dataPanelid');
                        $('.'+dataPanelid).hide(500);
                });

        });

});





