<?php session_start();
/**
 * Template Name: fileDragDropUploadImg
 */
header('Content-Type: application/json');


//
//
//$uploaded = array();
//
//if(!empty($_FILES['file']['name'][0])){
//
//    foreach($_FILES['file']['name'] as $position=>$name){
//        $target_dirs = get_theme_root() . "/custom/images/filedragDropImg/";
//
//
//        if(move_uploaded_file($_FILES['file']['tmp_name'][$position], $target_dirs. $name)){
//
//            $uploaded[] = array(
//                'name' => $name,
//                'file' => 'filedragDropImg/'. $name
//            );
//
//
//
//
//        }else{
//            echo "Yes I almost there";
//        }
//    }
//}
//
//
//
//
//echo json_encode($uploaded);
//
//
//
//
//exit();


//$_SESSION['filesss'] = $_FILES;

exit;
if(!empty($_FILES['file']['name'][0]) == ""){

    echo "<p style = 'color:red'>Please select images</p>";
}else {

    $uploadOk = 1;
    if (count($_FILES["file"]["name"]) > 5) {
        echo "<p style = 'color:red'>You can upload image at least five only.</p>";
    } else {
//		 echo "this is current id ".$_SESSION['last_id_item']. "<br>";
        global $wpdb;
        for ($i = 0; $i < count($_FILES["file"]["name"]); $i++) {
            $target_dirs = get_theme_root() . "/custom/images/uploads/";
            $target_file = $target_dirs . basename($_FILES["file"]["name"][$i]);
            $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
            $imageFileName = pathinfo($target_file, PATHINFO_FILENAME);
            // Check if image file is a actual image or fake image
            if (!empty($_FILES["file"]["name"][$i])) {
                $check = getimagesize($_FILES["file"]["tmp_name"][$i]);
                if ($check !== false) {

                    $file_name = $imageFileName;
                    $file_type = basename($_FILES["file"]["type"][$i]);
                    $file_tmp_name = basename($_FILES["file"]["tmp_name"][$i]);
                    $file_size = basename($_FILES["file"]["size"][$i]);

                    $table_name = 'wp_img';
                    $data_array = array(
//                        'item_id'	=> $item_last_id,
                        'name' 	=> $file_name,
                        'type' 	=> $file_type,
                        'tmp_name' => $file_tmp_name,
                        'size' 	=> $file_size
                    );
                    $wpdb_get_value_type = array(
//                        '%d',
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

                    echo "File is an image - " . $check["mime"] . ".";
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
            if ($_FILES["file"]["size"][$i] > 1000000) {
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
                //get result the data from database
                global $wpdb;
                $get_val = '';
                $query = $wpdb->get_results("SELECT * FROM wp_img WHERE name = '" . $file_name . "'", ARRAY_A);


                foreach ($query as $result) {
                    $get_val = $result['ID'];
                }


                if (move_uploaded_file($_FILES["file"]["tmp_name"][$i], $target_file)) {

                    $imageFileType1 = pathinfo($target_file, PATHINFO_FILENAME);
                    rename($target_file, $target_dirs . '' . $imageFileType1 . '-' . $get_val . '.' . $imageFileType);

                    $renameFileName = $imageFileType1 . '-' . $get_val . '.' . $imageFileType;


                    $r = array(
                        'ID' => $get_val
                    );
                    $r_data = array(
                        'name' => $renameFileName
                    );
                    $r_data_val = array(
                        '%s'
                    );
                    $r_val = array(
                        '%d'
                    );
                    $trows = $wpdb->update(
                        'wp_img',
                        $r_data,
                        $r,
                        $r_data_val,
                        $r_val
                    );

                    echo "The file " . basename($_FILES["file"]["name"][$i]) . " has been uploaded.";

                } else {
                    echo "<p style = 'color:red'>Sorry, there was an error uploading your file.</p>";
                }
            }
        }

    }
}

















exit();
$output='';
echo "Hello ";
if(is_array($_FILES)){

    foreach ($_FILES['files']['name'] as $name=>$value) {
        echo $name + " " + $value + "<br>";
        $file_name = explode(".", $_FILES['files'][$name]);

        $allowed_ext = array("jpg","jpeg","png","gif");

        if(in_array($file_name[1], $allowed_ext)){
            $new_name =md5(rand()) . ' . ' . $file_name;

            $sourcePath=$_FILES['files']['tmp_name'][$name];

            $targetPath =  'uploads/'.$new_name;

            if(move_uploaded_file($sourcePath, $targetPath)){
                $output .= '<img src="'.$targetPath.'" width = "50px" height="80px" />';
            }else{
                echo "error2";
            }
        }else{

            echo "error";
        }
    }


    echo $output;
}

