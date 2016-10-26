var vals1;
var retailTags = "";
var donationType = "";
var categories = "";
var subCategory = "";
var store_website = "";
var under_review_tabs_id = "";

//function listItems(){
//    var $j = jQuery.noConflict();
//    var item = document.getElementById('item').value;
//    var brand= document.getElementById('brand').value;
//    var size = document.getElementById('size').value;
//    var retail_value = document.getElementById('retail_value').value;
//    var selling_price = document.getElementById('selling_price').value;
//    var age_of_item = document.getElementById('age_of_item').value;
//    store_website = document.getElementById('store_website').value;
//    var description = document.getElementById('description').value;
//    var user_id = document.getElementById('user_id').value;
//    var signs_of_wear_and_tear = "";
//    var days = document.getElementsByClassName('btnClick5')[0].innerText;
//    var day = days.split(" ");
//    var day_var = day[0];
//    var submit = document.getElementById('cs-bttn2').value;
//    var testDebugging = document.getElementById('testDebugging').value;
//    var fileDragUpload = document.getElementById('fileDragUpload').value;
//
//    var listanitem = $("#listanitem").val();
//    //category
//    if(categories == "" ){
//        categories = "womens clothing";
//    }
//    var post_data = {
//        item: item,
//        brand: brand,
//        size: size,
//        retail_value:retail_value,
//        selling_price:selling_price,
//        age_of_item:age_of_item,
//        store_website:store_website,
//        description:description,
//        retail_tags:retailTags,
//        signs_of_wear_and_tear:vals1,
//        donation_to:donationType,
//        days:day_var,
//        submit:submit,
//        subCategory_name:subCategory,
//        categories_name:categories,
//        user_id:user_id
//    };
//
//    $.post(testDebugging,post_data )
//        .done(function( data ) {
//            var data1 = document.getElementById("sigInDemo").innerHTML = data;
//
//            console.log(data);
//            //if(data1){
//            //    window.location.href = listanitem;
//            //}
//        });
//}

//Under review pop up for member
function underReviewFunction(){

    //var under_review_tabs_id = document.getElementById('under_review_tabs_id').value;
    var inputdefault1 = document.getElementById('inputdefault1').value;
    var inputdefault2 = document.getElementById('inputdefault2').value;
    var inputdefault3 = document.getElementById('inputdefault3').value;
    var noteComment = document.getElementById('note-comment').value;
    var testDebugging = document.getElementById('testDebugging').value;
    var myModal3ID = document.getElementById('myModal3ID').value;
    console.log(myModal3ID);
    var id= 0;
    var updateUnderReview = "updateUnderReview";
    console.log(myModal3ID);
    var post_data = {
        ID                  :myModal3ID,
        retail_value        :inputdefault1,
        asking_price        :inputdefault2,
        selling_price       :inputdefault3,
        description         :noteComment,
        updateUnderReview   :updateUnderReview
    }
    $.post(testDebugging,post_data)
        .done(function( data ) {
            var data1 = document.getElementById("sigInDemo").innerHTML = data;
            console.log(data1);
            document.getElementById('note-comment').value = "";
        });
    //console.log("this is it "+under_review_tabs_id);
}
function underReviewCancelFunction(){
    document.getElementById('note-comment').value = "";
}

//new Items for admin accept item
function newItemsFunction(){
    var noteComment1 = document.getElementById('comment1').value;
    var id= 1;
    var testDebugging = document.getElementById('testDebugging').value;
    var ID = document.getElementById('myModal7ID').value;
    var new_items='new_items';
    var item_details = "approve";

    var post_data = {
        ID          :ID,
        item_details:item_details,
        item_status :id,
        comment     :noteComment1,
        new_items   :new_items
    };

    $.post(testDebugging,post_data )
        .done(function( data ) {
            console.log(data);
            if(data == "success - new_items"){
                $('#'+ID).css("display", "none");
            }
        });
}

//new Items for admin deny item
function newItemsDeny(){
    var noteComment1 = document.getElementById('comment1').value;
    var id= 1;
    var testDebugging = document.getElementById('testDebugging').value;
    var ID = document.getElementById('myModal7ID').value;
    var new_items_deny='new_items_deny';
    var item_details = "deny";
    var post_data = {
        ID          :ID,
        item_status :id,
        item_details:item_details,
        comment     :noteComment1,
        new_items_deny   :new_items_deny
    };
    $.post(testDebugging,post_data )
        .done(function( data ) {
            console.log(data);
            if(data == "success - new_items_deny"){
                $('#'+ID).css("display", "none");
            }

        });
}


//approvals for member approve
function approvalsFunction(){

    var noteComment = document.getElementById('comment').value;
    var id= 2;
    var testDebugging = document.getElementById('testDebugging').value;
    var ID = document.getElementById('myModal4ID').value;
    var approvals_submit='approvals_submit';
    var item_details='approve';
    var post_data = {
        ID          :ID,
        item_details:item_details,
        item_status :id,
        comment     :noteComment,
        approvals_submit   :approvals_submit
    };
    $.post(testDebugging,post_data )
        .done(function( data ) {
            console.log(data);
            if(data == "success - approvals_submit"){
                $('#'+ID).css("display", "none");
                document.getElementById('comment').value = "";
            }
        });

}
//approvals for member for deny
function approvalsDenyFunction(){
    var noteComment = document.getElementById('comment').value;
    var id= 2;
    var testDebugging = document.getElementById('testDebugging').value;
    var ID = document.getElementById('myModal4ID').value;
    var deny_submit='deny_submit';
    var item_details='deny';
    var post_data = {
        ID          :ID,
        item_details:item_details,
        item_status :id,
        comment     :noteComment,
        deny_submit   :deny_submit
    };
    $.post(testDebugging,post_data )
        .done(function( data ) {
            console.log(data);

            if(data == "success - deny_submit"){
                $('#'+ID).css("display", "none");
                document.getElementById('comment').value = "";
            }
        });
}


//approved for admin

$(function () {


    //approved for admin

    var testDebugging = document.getElementById('testDebugging').value;
    $('.texts1-rev > #myModal8ID').on('click', function () {
        var myModal8ID = $(this).attr('rel');
        var id= 3;
        var approved_to_deliver='approved_to_deliver';

        //console.log(myModal8ID);
        var post_data = {
            ID          :myModal8ID,
            item_status :id,
            // comment     :noteComment,
            approved_to_deliver   :approved_to_deliver
        };
        $.post(testDebugging,post_data )
            .done(function( data ) {
                console.log(data);
                if(data == "success - approved_to_deliver"){
                    $('#'+myModal8ID).css("display", "none");
                }
            });
    });



    //received/pending admin
    $('.texts1-rev > #myModal9ID').on('click', function () {
        var myModal9ID = $(this).attr('rel');
        var id= 4;
        var received_pending='received_pending ';
        //console.log(ID);
        var post_data = {
            ID          :myModal9ID,
            item_status :id,
            received_pending   :received_pending
        };
        $.post(testDebugging,post_data )
            .done(function( data ) {
                console.log(data);
                if(data == "success - received_pending"){
                    $('#'+myModal9ID).css("display", "none");
                }
            });
    });

//forsale admin
    $('.texts1-rev > #myModal10ID').on('click', function () {
        var myModal10ID = $(this).attr('rel');
        id = 7;
        var ID = myModal10ID;
        var for_sale_delete='for_sale_delete ';
        var post_data = {
            ID          :ID,
            item_status :id,
            for_sale_delete   :for_sale_delete
        };
        $.post(testDebugging,post_data )
            .done(function( data ) {
                console.log(data);

                if(data == "success - for_sale_delete"){
                   $('#'+myModal10ID).css("display", "none");
                }

            });


    });
});


//function approvedFunction(){
//
//
//}





//for sale member
function forSaleFunction(){

    var inputdefault2 = document.getElementById('inputdefaultForsale2').value;
    var inputdefault3 = document.getElementById('inputdefaultForsale3').value;
    var comment2 = document.getElementById('comment2').value;
    var testDebugging = document.getElementById('testDebugging').value;
    var ID = document.getElementById('myModal5ID').value;

    var id= 4;
    var for_sale = "for_sale";  
    var post_data = {
        ID                  :ID, 
        item_status         :id,
        asking_price        :inputdefault2,
        selling_price       :inputdefault3,
        comment             :comment2,
        for_sale            :for_sale
    }

    $.post(testDebugging,post_data)
        .done(function( data ) {
            var data1 = document.getElementById("sigInDemo").innerHTML = data;
            console.log(data1);
        });
}

//Check box for the  wear and tear.

$(function () { 


    var $j = jQuery.noConflict();


    $j('input[type=checkbox]').click(function () {
        //var chks = document.getElementById('check122').value;
        var check120 = $j(this).attr('rel');
        if(check120 == 'check121'){
            $j("#check121").prop('checked', true);
            $j("#check122").prop('checked', false);
            $j("#check123").prop('checked', false);
            $j("#check124").prop('checked', false);
            var newWithDefects = document.getElementsByClassName('new-with-defects')[0].innerText;
            vals1 = newWithDefects;
        }else if(check120 == 'check122'){
            $j("#check121").prop('checked', false);
            $j("#check122").prop('checked', true);
            $j("#check123").prop('checked', false);
            $j("#check124").prop('checked', false);
            var excellent = document.getElementsByClassName('excellent')[0].innerText;
            vals1 = excellent;
        }else if(check120 == 'check123'){
            $j("#check121").prop('checked', false);
            $j("#check122").prop('checked', false);
            $j("#check123").prop('checked', true);
            $j("#check124").prop('checked', false);
            var good = document.getElementsByClassName('good')[0].innerText;
            vals1 = good;
        }else if(check120 == 'check124'){
            $j("#check121").prop('checked', false);
            $j("#check122").prop('checked', false);
            $j("#check123").prop('checked', false);
            $j("#check124").prop('checked', true);
            var fare = document.getElementsByClassName('fare')[0].innerText;
            vals1 = fare;
        }
    });
});
var modHeight1;
$(document).ready(function(){
    var $j = jQuery.noConflict();
//top clicked btn
    $j('#women').fadeOut(1000).delay(500).fadeIn(100);
    $j('#women').on('click touchstart',function(){
        $j(this).css({
            color: 'red'
        });
    });
    $j('.col-centered img').on('click touchstart',function(){
        $j("#sub-top").fadeOut().fadeIn();
    });
    $j('.col-centered > #hover-top').on('click touchstart',function(){
        var data = $j(this).attr("rel");
        //console.log(data);
        var hoverCategory = $j('#' + data).text();
        subCategory=hoverCategory;
        //$j.fn.hiddenVariable(hoverCategory);
    });
    $j('.col-centered > #hover-top').mouseenter(function(){
        var data = $j(this).attr("rel");
        $j(this).css({
            backgroundColor: '#000000',
            opacity: '.9'
        });
        $j('#'+data).css({
            display:'block'
        });
    });
    $j('.col-centered > #hover-top').mouseleave(function(){
        var data = $j(this).attr("rel");
        $j(this).css({
            backgroundColor: '#000000',
            opacity: '1'
        });
        $j('#'+data).css({
            display:'none'
        })
    });
//first button (YER & NO)
    $j('.btnColor1').on('click touchstart',function(){
        var btnYs = $j(this).attr("rel");
        $j('.btnClick1').removeClass('btnClick1');
        $j('#'+btnYs).addClass('btnClick1');
        if($j(this).attr("rel") === 'brn-cl1'){
            $j('.show-store-website').fadeIn(1000);
            $j('.tds-col'). height ( 535 );
            modHeight1 = 575;
        }else{
            $j('.show-store-website').fadeOut(1000);
            $j('.tds-col') . height ( 465 );
           store_website = $j('#store_website').val("");

        }
    });
//second button (YER & NO)
    $j('.btnColor2').on('click touchstart',function(){
        var btnColor = $j(this).attr("rel");
        $j('.btnClick2').removeClass('btnClick2');
        $j('#'+btnColor).addClass('btnClick2');
    });
//Third button (YER & NO)
    $j('.btnColor3').on('click touchstart',function(){
        var btnColor = $j(this).attr("rel");
        $j('.btnClick3').removeClass('btnClick3');
        $j('#'+btnColor).addClass('btnClick3');
        retailTags =$j('#'+btnColor).val();
    });
//Fourth button (YES & NO)
    $j('.btnColor4').on('click touchstart',function(){
        var btnColor = $j(this).attr("rel");
        $j('.btnClick4').removeClass('btnClick4');
        $j('#'+btnColor).addClass('btnClick4');
        if($(this).attr("rel") === 'btn-yl1'){
            $j('.show-condition').fadeIn(1000);
            $j('.tds-col').height( 575 );
            modHeight1 = 575;
            if(modHeight1 == 575){
                modHeight1 = 0;
            }
        }else{
            $j('.show-condition').fadeOut(1000);
            $j('.tds-col').height( 450 );
            $j("#check121").prop('checked', false);
            $j("#check122").prop('checked', false);
            $j("#check123").prop('checked', false);
            $j("#check124").prop('checked', false);
            vals1 = "";
        }
    });
//Fifth button (YES & NO)
    $j('.btnColor5').on('click touchstart',function(){
        var btnColor = $j(this).attr("rel");
        $j('.btnClick5').removeClass('btnClick5');
        $j('#'+btnColor).addClass('btnClick5');
    });
//six button (YES & NO)
    $j('.form-group > .btnColor-cosign-term').on('click touchstart',function(){
        var btnColor = $j(this).attr("rel");
        $j('.btnClick6').removeClass('btnClick6');
        $j('#'+btnColor).addClass('btnClick6');
        donationType = $j('#'+btnColor).val();
    });
//This is for the header btn
    $j('.ftd ul li button').on('click touchstart',function(){

        var btnWomen = $j(this).attr("rel");
        $j('.wm-active').removeClass('wm-active');
        $j('#'+btnWomen).addClass('wm-active');
        var category = $j('#'+btnWomen).val();
        categories = category;
        $j('.categories').removeClass('categories');
        $j('.'+btnWomen).addClass('categories');
        $j("#sub-top").fadeOut();
    });
//Checkbox in condition
    $j('input[type="checkbox"]').on('change', function() {
        $j(this).siblings('input[type="checkbox"]').prop('checked', false);
    });
//cancel and submit button on list an item
    $j('div > .cs-cancel-submit').on('click touchstart',function(){
        var submitCancel = $j(this).attr("rel");


        $j('.cs-cancel-submit-active').removeClass('cs-cancel-submit-active');
        $j('#'+submitCancel).addClass('cs-cancel-submit-active');




    });





//Profile account menu

    $j(".clicking-menu-profile > li").on('click touchstart', function(){


        //figure out which li to show
        $j(".clicking-menu-profile > li").removeClass('active-underline');
        $j(this).addClass('active-underline');
        var tabs = $j(this).attr('rel');
        //hide current panel
        $j('.active-tab').slideUp(300,showNextTabs);
        function showNextTabs(){
            var counter = $j('.active-tab').val();
            counter++ ;
            if(counter == 1){
                $j(this).removeClass('active-tab');
                $j('.'+tabs).slideDown(300, function(){
                    $j(this).addClass('active-tab');

                });
            }else{
                console.log("You got an error by clicking the tabs");
            }
        }
    });


    // $j('#note-comment').elastic(); 
});






//Update account jquery
var genderUpdate;
$(function () {
    var $j = jQuery.noConflict();
    $j(".gender").on('click', function(){
        genderUpdate = $j(this).val();
    });
});

//Update Account 
function updateAccountaaa(){ 
    var first_name = document.getElementById('first_name1').value; 
    var last_name = document.getElementById('last_name1').value; 
    var age = document.getElementById('age1').value; 
    var email = document.getElementById('email1').value; 
    var mailingAddress = document.getElementById('mailingAddress1').value; 
    var shirt_name = document.getElementById('shirt_name').value; 
    var pants = document.getElementById('pants').value; 
    var shoes_size = document.getElementById('shoes_size').value; 
    var jacket = document.getElementById('jacket').value; 
    var listing_brand = document.getElementById('listing_brand').value; 
    genderUpdate = genderUpdate; 
    var testDebugging = document.getElementById('testDebugging').value;  
    var update_registration_account = 'update_registration_account';
    var ID = 1;  
    var post_data = {
        ID               :ID,
        first_name       :first_name, 
        last_name        :last_name,
        gender           :genderUpdate,
        age              :age,
        email            :email,
        mailing_address  :mailingAddress,
        shirt            :shirt_name,
        pants            :pants,
        jacket           :jacket,
        shoes            :shoes_size,
        listing_brand    :listing_brand,
        update_registration_account :update_registration_account
    }
    $.post(testDebugging, post_data )
       .done(function( data ) { 
           console.log(data);
       });
}

 
