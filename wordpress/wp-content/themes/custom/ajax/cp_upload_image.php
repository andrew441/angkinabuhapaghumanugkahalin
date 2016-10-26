<?php session_start();
/**
 * Template Name: cp_upload_image
*/

$user_id = $_SESSION['user_id'];



if(!empty($_FILES['updateCoverPhoto']['name']) == ""){
    echo "<p style = 'color:red'>Please select images</p>";
}else {

    $uploadOk = 1;
    if (count($_FILES["updateCoverPhoto"]["name"]) > 1) {
        echo "<p style = 'color:red'>You can upload image at least one image only.</p>";
    } else {
//		 echo "this is current id ".$_SESSION['last_id_item']. "<br>";
        global $wpdb;
        $target_dirs = get_theme_root() . "/custom/images/cp_uploads/";
        $target_file = $target_dirs . basename($_FILES["updateCoverPhoto"]["name"]);
        $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
        $imageFileName = pathinfo($target_file, PATHINFO_FILENAME);
        // Check if image file is a actual image or fake image
        if (!empty($_FILES["updateCoverPhoto"]["name"])){
            $check = getimagesize($_FILES["updateCoverPhoto"]["tmp_name"]);
            if ($check !== false) {



                $file_name = $imageFileName;
                $file_type = basename($_FILES["updateCoverPhoto"]["type"]);
                $file_tmp_name = basename($_FILES["updateCoverPhoto"]["tmp_name"]);
                $file_size = basename($_FILES["updateCoverPhoto"]["size"]);

                $table_name = 'wp_coverphoto';

                $data_array = array(
                    'user_id'       => $user_id,
                    'cp_name' 	    => $file_name,
                    'cp_type' 	    => $file_type,
                    'cp_tmp_name'   => $file_tmp_name,
                    'cp_size' 	    => $file_size
                );
                $wpdb_get_value_type = array(
                    '%d',
                    '%s',
                    '%s',
                    '%s',
                    '%s'
                );

                $responseInsert = $wpdb->insert(
                    $table_name,
                    $data_array,
                    $wpdb_get_value_type
                );
//                if($responseInsert >0 ){
//                    print"Error!";
//                }else{
//                    echo "error ni !";
//                }

                echo "Image has been uploaded. (operationsplitedtextcoverphoto)";
//                echo "File is an image - " . $check["mime"] . ".(operationsplitedtextcoverphoto)";
                $uploadOk = 1;

            } else {
                echo "File is not an image.";
                $uploadOk = 0;
            }
        }
        // Check if file already exists
        if (file_exists($target_file)) {
            echo "<p style = 'color:red'>Sorry, file already exists.</p>";
            $uploadOk = 0;
        }
        // Check file size
        if ($_FILES["updateCoverPhoto"]["size"]> 1000000) {
            echo "<p style = 'color:red'>Sorry, file file is too large.</p>";
            $uploadOk = 0;
        }
        // Allow certain file formats
        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif"
        ) {
            echo "<p style = 'color:red'>Sorry, only JPG, JPEG, PNG & GIF files are allowed.</p>";
            $uploadOk = 0;
        }
        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "<p style = 'color:red'>Sorry, your file was not uploaded.</p>";
            // if everything is ok, try to upload file
        } else {
            global $wpdb;
            $get_val1 = '';
            $query = $wpdb->get_results("SELECT * FROM wp_coverphoto WHERE cp_name = '" . $file_name . "'", ARRAY_A);
//				 echo "<pre>";
//				 	print_r( $query);
//				 echo "<pre>";
//
//            if($query > 0){
//                echo 'success';
//            }else{
//                echo "field";
//            }


            foreach ($query as $result) {
                $get_val1 = $result['ID'];
            }

            if (move_uploaded_file($_FILES["updateCoverPhoto"]["tmp_name"], $target_file)) {

                $imageFileType1 = pathinfo($target_file, PATHINFO_FILENAME);
                rename($target_file, $target_dirs . '' . $imageFileType1 . '-' . $get_val1 . '.' . $imageFileType);

                $renameFileName = $imageFileType1 . '-' . $get_val1 . '.' . $imageFileType;
//                echo 'this is my id '.$get_val1. '<br>';
                $r = array(
                    'ID' => $get_val1
                );
                $r_data = array(
                    'cp_name' => $renameFileName
                );
                $r_data_val = array(
                    '%s'
                );
                $r_val = array(
                    '%d'
                );
                $trows = $wpdb->update(
                    'wp_coverphoto',
                    $r_data,
                    $r,
                    $r_data_val,
                    $r_val
                );

                echo $renameFileName;

            } else {
                echo "<p style = 'color:red'>Sorry, there was an error uploading your file.</p>";
            }
        }
    }
}