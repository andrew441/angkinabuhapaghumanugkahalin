var vals1;
var retailTags = "";
var donationType = "";
var categories = "";
var subCategory = "";
var store_website = "";

function listItems(){
    var $j = jQuery.noConflict();
    var item = document.getElementById('item').value;
    var brand= document.getElementById('brand').value;
    var size = document.getElementById('size').value;
    var retail_value = document.getElementById('retail_value').value;
    var selling_price = document.getElementById('selling_price').value;
    var age_of_item = document.getElementById('age_of_item').value;
    store_website = document.getElementById('store_website').value;
    var description = document.getElementById('description').value;
    //var retail_tags = document.getElementById('retail_tags').innerText;
    var signs_of_wear_and_tear = "";
    var days = document.getElementsByClassName('btnClick5')[0].innerText;
    //split the numbers of days if needed if needed
    //var res = days.split(" ");
    //var days1 = res[0];
    var submit = document.getElementById('cs-bttn2').value;
    var testDebugging = document.getElementById('testDebugging').value;
    //category
    if(categories == "" ){
        categories = "womens clothing";
    }

    var post_data = {
        item: item, brand: brand,size: size,retail_value:retail_value,selling_price:selling_price,age_of_item:age_of_item,
        store_website:store_website,description:description,retail_tags:retailTags,signs_of_wear_and_tear:vals1,
        donationType:donationType,days:days,submit:submit,subCategory:subCategory,categoryType:categories
    }

    //http://localhost/development/rico/wordpress/test-debugging/

    $.post(testDebugging,post_data )
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
        $j('.active-tab').slideUp(500,showNextTabs);
        function showNextTabs(){
            var counter = $j('.active-tab').val();
            counter++ ;
            if(counter == 1){
                $j(this).removeClass('active-tab');
                $j('.'+tabs).slideDown(500, function(){
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
function updateAccount(){
    var $j = jQuery.noConflict();
    genderUpdate = genderUpdate;
    var first_name = $j('#first_name').val();
    var last_name = $j('#last_name').val();
    var age = $j('#age').val();
    var email = $j('#email').val();
    var mailingAddress = $j('#mailingAddress').val();
    var shirt = $j('#shirt').val();
    var pants = $j('#pants').val();
    var shoes = $j('#shoes').val();
    var jacket = $j('#jacket').val();
    var brand = $j('#brand').val();


    //console.log(first_name+last_name+genderUpdate+age+email+mailingAddress+shirt+pants+shoes+jacket+brand );
    //
    //var post_data = {
    //    first_name: first_name, last_name: last_name,genderUpdate: genderUpdate,age:age,email:email,mailingAddress:mailingAddress,
    //    shirt:shirt,pants:pants,jacket:jacket,shoes:shoes,brand:brand
    //}
    //$.post(ajaxurl,post_data )
    //    .done(function( data ) {
    //        var data1 = document.getElementById("sigInDemo").innerHTML = data;
    //        console.log(data1);
    //    });
}