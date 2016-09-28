
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



        }else{

                var newitemCounter = $('#newitemCounter').val();
                var approvedCounter = $('#approvedCounter').val();
                var pendingCounter = $('#pendingCounter').val();
                var adminforsaleCounter = $('#adminforsaleCounter').val();
                var minusParenthesis = document.getElementById('newitemCounteroutput').innerText = newitemCounter;


                document.getElementById('approvedCounteroutput').innerText = approvedCounter;
                document.getElementById('pendingCounteroutput').innerText = pendingCounter;
                document.getElementById('adminforsaleCounteroutput').innerText = adminforsaleCounter;
                var newminusParenthesis = "";
                //condition for the negative
                $('.click_id_forMenu_admin').on('click', function(){
                        var myModal7IDs= document.getElementById('myModal7ID').value;

                        var itemTotal = parseInt($('#newitemCounteroutput').text());
                        if($('#myModal7ID')){
                                newminusParenthesis= itemTotal-1;

                                if(newminusParenthesis < 0)
                                   newminusParenthesis = 0

                            console.log(newminusParenthesis);
                           // document.getElementById('newitemCounteroutput').innerText = newminusParenthesis;
                                document.getElementById('newitemCounteroutput').innerText = newminusParenthesis;
                        }else{
                                console.log("error");
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


                <!--approved tabs -->
                //approvedID = document.getElementById('myModal8ID').value = res2[0];



            });



    });



//counter for the menu tabs on account members and admin

});





