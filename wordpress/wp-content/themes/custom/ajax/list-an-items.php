<?php session_start();
/*
 * Template Name: debugging
 */


require_once( get_template_directory() . '/classes/WPDB_QUERIES.php');

$lastID =array();
echo "<pre>";
		print_r($_POST);
	echo "</pre>";
if(isset($_POST['submit']) == true) {
    unset($_POST['submit']);
    $queries_custom =  new APP\WPDB_QUERIES('wp_item');

    if($queries_custom->wpdb_insert($_POST)) {
        print " success - ";
//		echo $wp_item_id = $wpdb->insert_id;
        $_SESSION['last_id_item'] = $wpdb->insert_id;
    } else {
        print "failed - ";
    }
}else if(isset($_POST['updateUnderReview']) == true) {
    unset($_POST['updateUnderReview']);  
    $ID = $_POST['ID'];
    $queries_custom =  new APP\WPDB_QUERIES('wp_item'); 
    if($queries_custom->wpdb_update($_POST, $ID)){
        print "success - "; 
    }else{
        echo "Hello failed ka dong! ";
    }
}else if(isset($_POST['new_items']) === true){
    unset($_POST['new_items']);
    $ID = $_POST['ID'];

//    echo '<pre>';
//    print_r($_POST);
//    echo '<pre>';
    $queries_custom =  new APP\WPDB_QUERIES('wp_item');
    if($queries_custom->wpdb_update($_POST, $ID)){
        print "success - new_items";
    }else{
        echo "Hello failed ka dong! ";
    }

}else if(isset($_POST['new_items_deny']) === true){
    unset($_POST['new_items_deny']);
    $ID = $_POST['ID'];

//    echo '<pre>';
//        print_r($_POST);
//    echo '<pre>';
    $queries_custom =  new APP\WPDB_QUERIES('wp_item');
    if($queries_custom->wpdb_update($_POST, $ID)){
        print "success - new_items_deny";
    }else{
        echo "Hello failed ka dong! ";
    }
}else if(isset($_POST['approvals_submit']) === true){
    unset($_POST['approvals_submit']);
    $ID = $_POST['ID'];
    $queries_custom =  new APP\WPDB_QUERIES('wp_item');
    if($queries_custom->wpdb_update($_POST, $ID)){
        print "success - approvals_submit";
    }else{
        echo "Hello failed ka dong! ";
    }
}else if(isset($_POST['deny_submit']) === true){
    unset($_POST['deny_submit']);
    $ID = $_POST['ID'];
    $queries_custom =  new APP\WPDB_QUERIES('wp_item');
    if($queries_custom->wpdb_update($_POST, $ID)){
        print "success - deny_submit";
    }else{
        echo "Hello failed ka dong! ";
    }
}










else if(isset($_POST['approved_to_deliver']) === true){
    unset($_POST['approved_to_deliver']);
    $ID = $_POST['ID'];   
    $queries_custom =  new APP\WPDB_QUERIES('wp_item');

    if($queries_custom->wpdb_update($_POST, $ID)){


        global $wpdb;
        $approved_rab = $wpdb->get_results("SELECT img.name,item.ID as itemID, u.user_email as userEmail FROM
                                wp_item as item  INNER JOIN wp_img as img
                                ON item.ID=img.item_id INNER JOIN wp_users as u ON u.ID=item.user_id
                                WHERE item.ID=$ID", ARRAY_A);


        foreach($approved_rab as $val6) {
//            //recipient
            $to = $val6['userEmail'];
            //subject
            $subject = "delivering your items";
            //message
            $message = "<h1>Hi There</h1><p>Your item has been pending...</p>";
            //header
            $headers = "from: Sender Name: <Lifeafterpurchase.com>\r\n";
            $headers .= "Reply To: norely\r\n";
            $headers .= "Content-type: text/html\r\n";

            //send mail
            wp_mail($to, $subject, $message, $headers);

        }
        print "success - approved_to_deliver";
    }else{
        echo "Hello failed ka dong! ";
    }





}else if(isset($_POST['received_pending']) === true){    
    unset($_POST['received_pending']);  
    $ID = $_POST['ID'];   
    $queries_custom =  new APP\WPDB_QUERIES('wp_item'); 
    if($queries_custom->wpdb_update($_POST, $ID)){

        global $wpdb;
        $received_pending = $wpdb->get_results("SELECT img.name,item.ID as itemID, u.user_email as userEmail FROM
                                wp_item as item  INNER JOIN wp_img as img
                                ON item.ID=img.item_id INNER JOIN wp_users as u ON u.ID=item.user_id
                                WHERE item.ID=$ID", ARRAY_A);


        foreach($received_pending as $val7){

            //recipient
            $to = $val7['userEmail'];
            //subject
            $subject = "";
            //message
            $message = "<h1>Hi There</h1><p>Your item is now on sale.</p>";
            //header
            $headers ="from: Sender Name: <Lifeafterpurchase.com>\r\n";
            $headers .="Reply To: norely\r\n";
            $headers .= "Content-type: text/html\r\n";

            //send mail
            wp_mail($to, $subject, $message,$headers);

        }

        print "success -";
    }else{
        echo "Hello failed ka dong! ";
    }  
}else if(isset($_POST['for_sale']) === true){    
    unset($_POST['for_sale']);  
    $ID = $_POST['ID'];   
    $queries_custom =  new APP\WPDB_QUERIES('wp_item'); 
    if($queries_custom->wpdb_update($_POST, $ID)){
        print "success - for_sale"; 
    }else{
        echo "Hello failed ka dong! ";
    }  
}else if(isset($_POST['for_sale_delete']) === true){    
    unset($_POST['for_sale_delete']);  
    $ID = $_POST['ID'];

    $queries_custom =  new APP\WPDB_QUERIES('wp_item'); 
    if($queries_custom->wpdb_update($_POST, $ID)){
        print "success - for_sale_delete"; 
    }else{
        echo "Hello failed ka dong! ";
    }  
}else if(isset($_POST['update_registration_account']) === true){

    // echo "hey";

    unset($_POST['update_registration_account']);  
    $ID = $_POST['ID'];
 
    $queries_custom =  new APP\WPDB_QUERIES('wp_registration'); 
    if($queries_custom->wpdb_update($_POST, $ID)){

        $id = $_SESSION['user_id'];
        $trows = $wpdb->update(
            'wp_users',
            array('updated_acc'=>1),
            array('ID'=>$id),
            array('%d'),
            array('%d')
        );
        print "success -";
    }else{
        echo "Hello failed ka dong! do";
    } 
}else{
    echo 'field passing the submit button!';
}

















