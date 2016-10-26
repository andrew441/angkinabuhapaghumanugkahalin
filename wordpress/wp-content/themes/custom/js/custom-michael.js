

var genderSignUp;
function MyNewSgnIn(){
    var user_name1 = $("#email-signIn").val();
    var user_pass1 = document.getElementById("pass-signIn").value;
    var login_now = $("#login_now").val();
    var dataBaser1 = $("#dataBaser").val();
    var updateAccount = $("#updateAccount").val();
    var homePage = $("#homePage").val();

    var post_data = {
        user_name: user_name1,
        user_pass: user_pass1,
        login_now: login_now
    }
    $.post(dataBaser1,post_data)
        .done(function( data ) {

            var data1 = data;
            var data2 = data1.split(' ');


            document.getElementById("sigInDemo").innerHTML =data2[0];

            if(data2[1] == 0){
                window.location.href = updateAccount;
            }else if(data2[1] == 1){
                window.location.href = homePage;
            }

        });
}
function MyNewSgnUp(){

    var user_name = $("#user_name").val();
    var user_email = $("#user_email").val();
    var promo_code = $("#promo_code").val();
    var user_gender = $("#user_gender").val();
    var user_password = $("#user_password").val();
    var join_now = $("#join_now").val();
    var dataBaser1 = $("#dataBaser").val();

    var post_data = {
        user_name: user_name,
        user_email: user_email,
        promo_code: promo_code,
        user_gender: genderSignUp,
        user_password: user_password,
        join_now: join_now
    }


    $.post(dataBaser1,post_data)
        .done(function( data ) {
            document.getElementById("demoSignUp").innerHTML = data;
        });
}

$(function () {
    var $j = jQuery.noConflict();
//signup gender checkbox

    $j("input:checkbox").on('change touchstart', function(){
        var CheckBoxItem = $j(this).attr('rel');
        genderSignUp = $j("#"+CheckBoxItem).val();
        if(genderSignUp === "Male"){
            $j("#check1").prop('checked', true);
            $j("#check2").prop('checked', false);
        }
        else if(genderSignUp === "Female"){
            $j("#check2").prop('checked', true);
            $j("#check1").prop('checked', false);
        }
    });

// checking admin or member active tab
    var user_status_id = $j('#user_status_id').val();
    if(user_status_id == 0){
        $j('.under-review').removeClass('active-tab');
    }else {
        $j('.member-tabs').removeClass('active-tab');
    }

});









