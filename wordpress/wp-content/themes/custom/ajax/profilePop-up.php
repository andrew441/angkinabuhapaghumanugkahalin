<?php
/**
 * Template Name: profilePop-up
 */

global $wpdb;
if(isset($_POST['under_review_tabs_id'])){

   $idreviewtab = $_POST['under_review_tabs_id'];

    $user_info=$wpdb->get_results("SELECT *,
                item.ID as itemID,
                item.user_id as itemusersid,
                img.ID as imgID,
                img.item_id as imgitemid,
                u.ID as uID
                FROM
                wp_item as item
                INNER JOIN
                wp_img as img
                ON item.ID=img.item_id
                INNER JOIN
                wp_users as u ON u.ID=item.user_id
                WHERE
                item.ID=".$idreviewtab,
        ARRAY_A);
    foreach($user_info as $result){
        echo $result['itemID']. '(operationalsplit)'.
        $result['itemusersid']. '(operationalsplit)'.
        $result['imgID']. '(operationalsplit)'.
        $result['imgitemid']. '(operationalsplit)'.
        $result['uID']. '(operationalsplit)'.
        $result['item']. '(operationalsplit)'.
        $result['brand']. '(operationalsplit)'.
        $result['size']. '(operationalsplit)'.
        $result['retail_value']. '(operationalsplit)'.
        $result['selling_price']. '(operationalsplit)'.
        $result['age_of_item']. '(operationalsplit)'.
        $result['store_website']. '(operationalsplit)'.
        $result['description']. '(operationalsplit)'.
        $result['comment']. '(operationalsplit)'.
        $result['retail_tags']. '(operationalsplit)'.
        $result['asking_price']. '(operationalsplit)'.
        $result['signs_of_wear_and_tear']. '(operationalsplit)'.
        $result['days']. '(operationalsplit)'.
        $result['donation_to']. '(operationalsplit)'.
        $result['image_id']. '(operationalsplit)'.
        $result['categories_name']. '(operationalsplit)'.
        $result['subCategory_name']. '(operationalsplit)'.
        $result['item_details']. '(operationalsplit)'.
        $result['name']. '(operationalsplit)'.
        $result['created_at'];
    }
}