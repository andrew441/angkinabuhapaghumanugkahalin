<?php
/*
 * Template Name: debugging
 */
if(isset($_POST['submit']) == true) {
    extract($_POST, EXTR_PREFIX_SAME, "wddx");
    list_an_item_insert($item, $brand,$size,$retail_value,$selling_price,$age_of_item,$store_website,$description,
        $retail_tags,$signs_of_wear_and_tear,$days,$donationType,$categoryType,$subCategory);
}else{
    echo 'field passing the submit button!';
}
function list_an_item_insert($item, $brand,$size,$retail_value,$selling_price,$age_of_item,$store_website,$description,
         $retail_tags,$signs_of_wear_and_tear,$days,$donationType,$categoryType,$subCategory){
    global $wpdb;
    $arrayData = array (
        "item"=>$item,
        'brand'=>$brand,
        'size'=>$size,
        'retail_value'=>$retail_value,
        'selling_price'=>$selling_price,
        'age_of_item'=>$age_of_item,
        'store_website'=>$store_website,
        'description'=>$description,
        'retail_tags'=>$retail_tags,
        'signs_of_wear_and_tear'=>$signs_of_wear_and_tear,
        'days'=>$days,
        'donation-type'=>$donationType,
        'categories-type'=>$categoryType,
        'subCategory-type'=>$subCategory
    );
    $values_type = array(
        '%s',
        '%s',
        '%s',
        '%s',
        '%s',
        '%s',
        '%s',
        '%s',
        '%s',
        '%s',
        '%s',
        '%s',
        '%s',
        '%s'
    );
    $trows = $wpdb->insert(
        'wp_top',
        $arrayData ,
        $values_type
    );
    if($trows > 0) {
        print  " Success!";
    } else {
        print " failed to Register";
    }
}

