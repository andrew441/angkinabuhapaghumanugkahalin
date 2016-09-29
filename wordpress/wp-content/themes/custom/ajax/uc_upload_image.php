<?php
/**
 *
 * Template Name: uc_upload_image
*/

session_start();
$user_id = $_SESSION['user_id'];
if(!empty($_FILES['updateProfile']['name']) == ""){
    echo "<p style = 'color:red'>Please select images</p>";
}else {

    $uploadOk = 1;
    if (count($_FILES["updateProfile"]["name"]) > 1) {
        echo "<p style = 'color:red'>You can upload image at least one image only.</p>";
    } else {
//		 echo "this is current id ".$_SESSION['last_id_item']. "<br>";
        global $wpdb;
            $target_dirs = get_theme_root() . "/custom/images/uc_uploads/";
            $target_file = $target_dirs . basename($_FILES["updateProfile"]["name"]);
            $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
            $imageFileName = pathinfo($target_file, PATHINFO_FILENAME);
            // Check if image file is a actual image or fake image
            if (!empty($_FILES["updateProfile"]["name"])){
                $check = getimagesize($_FILES["updateProfile"]["tmp_name"]);
                if ($check !== false) {



                    $file_name = $imageFileName;
                    $file_type = basename($_FILES["updateProfile"]["type"]);
                    $file_tmp_name = basename($_FILES["updateProfile"]["tmp_name"]);
                    $file_size = basename($_FILES["updateProfile"]["size"]);


                    $table_name = 'wp_profile';
                    $data_array = array(
                        'user_id'           => $user_id,
                        'profile_name' 	    => $file_name,
                        'profile_type' 	    => $file_type,
                        'profile_tmp_name'  => $file_tmp_name,
                        'profile_size' 	    => $file_size
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


                    echo "File is an image - " . $check["mime"] . ". (operationsplitedtext)";
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
            if ($_FILES["updateProfile"]["size"]> 1000000) {
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
                $get_val = '';
                $query = $wpdb->get_results("SELECT * FROM wp_profile WHERE profile_name = '" . $file_name . "'", ARRAY_A);
//				 echo "<pre>";
//				 	print_r( $query);
//				 echo "<pre>";
                foreach ($query as $result) {
                    $get_val = $result['ID'];
                }

                if (move_uploaded_file($_FILES["updateProfile"]["tmp_name"], $target_file)) {

                    $imageFileType1 = pathinfo($target_file, PATHINFO_FILENAME);
                    rename($target_file, $target_dirs . '' . $imageFileType1 . '-' . $get_val . '.' . $imageFileType);

                    $renameFileName = $imageFileType1 . '-' . $get_val . '.' . $imageFileType;

                    $r = array(
                        'ID' => $get_val
                    );
                    $r_data = array(
                        'profile_name' => $renameFileName
                    );
                    $r_data_val = array(
                        '%s'
                    );
                    $r_val = array(
                        '%d'
                    );
                    $trows = $wpdb->update(
                        'wp_profile',
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