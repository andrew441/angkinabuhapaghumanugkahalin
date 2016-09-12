<?php
/**
     * Template Name: database
 */
if(isset($_POST['login_now'])) {
    global $wpdb;
    $username1 = $_POST['user_name'];
    $password1 = $_POST['user_pass'];


//    $query = $wpdb->get_results("SELECT * FROM wp_users WHERE user_email = '$username1' AND user_pass = '$password1'",OBJECT);

    $rows = $wpdb->get_row("SELECT * FROM wp_users WHERE user_email = '$username1' AND user_pass = '$password1'",OBJECT);

    if ($rows > 0) {
        echo "success";
    } else {
        echo "Invalid password or username";
    }
}

else if(isset($_POST["join_now"])) {
    global $wpdb;
    $user_name = $_POST['user_name'];
    $user_email = $_POST['user_email'];
    $user_pass = $_POST['user_password'];
    $user_gender = $_POST['user_gender'];
    $user_promocode = $_POST['promo_code'];

    $rows = $wpdb->get_row("SELECT * FROM `wp_users`where user_email = '".$user_email."'",ARRAY_A);
    if($rows == 0 ){
        if($user_name == "" || $user_email == "" || $user_pass == "" ||$user_gender == ""|| $user_promocode == ""){
            echo "The field must be fill out";
        }else{
            dataBaser($user_name, $user_email, $user_pass, $user_gender, $user_promocode);
        }
    }else{
        echo "email is already exist!";
    }
}else{
    echo " Sorry! I cant get you in there";
}

function dataBaser($user_name, $user_email, $user_pass, $user_gender, $user_promocode){
    global $wpdb;
    $arrayData = array (
        'user_nicename' => $user_name,
        'user_email' =>$user_email,
        'user_pass' =>$user_pass,
        'user_status' =>1,
        'user_gender' =>$user_gender,
        'user_promocode' =>$user_promocode,
    );
    $values_type = array(
        '%s',
        '%s',
        '%s',
        '%s',
        '%d',
        '%s',
        '%s',
    );
    $trows = $wpdb->insert(
        'wp_users',
        $arrayData ,
        $values_type
    );
    if($trows > 0) {
        print " Success!";
    } else {
        print " failed to sign up ";
    }
}


?>