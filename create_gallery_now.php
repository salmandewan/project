<?php
session_start();
require_once("db.php");
require_once("common.php");
require_once("logout_redirect_ajax.php");
if(isset($_POST['form_submit_btn'])){

	$cat_name=trim($_POST['cat_name']);
	$cat_desc=trim($_POST['cat_desc']);
	// $_FILES['cat_image'];


     //var_dump($_FILES);

     //var_dump($_FILES['cat_image']['error']);


	$currentDir = getcwd();
    $uploadDirectory = "/uploads/gallery/";

    $errors = []; // Store all foreseen and unforseen errors here

    $fileExtensions = ['jpeg','jpg','png','gif']; // Get all the file extensions

    $fileName = $_FILES['cat_image']['name'];
    $fileSize = $_FILES['cat_image']['size'];
    $fileTmpName  = $_FILES['cat_image']['tmp_name'];
    $fileType = $_FILES['cat_image']['type'];
    $fileNameArray = explode('.',$fileName);
    $fileExtension = strtolower(end($fileNameArray));

    //$uploadPath = $currentDir . $uploadDirectory . basename($fileName); 
    $image_name_new=rand(1,100000).rand(5000000,900000000).'.'.$fileExtension;

   
    $uploadPath = $currentDir . $uploadDirectory . $image_name_new; 

    $uploaded=0;

    //if (isset($_POST['submit'])) {

        if (! in_array($fileExtension,$fileExtensions)) {
            $errors[] = "This file extension is not allowed. Please upload a JPEG , GIF or PNG file";
        }

        if ($fileSize > 2000000) {
            $errors[] = "This file is more than 2MB. Sorry, it has to be less than or equal to 2MB";
        }

        if (empty($errors)) {
            $didUpload = move_uploaded_file($fileTmpName, $uploadPath);

            if ($didUpload) {
                //echo "The file " . basename($fileName) . " has been uploaded";
                $uploaded=1;
            } else {
                echo "An error occurred somewhere. Try again or contact the admin";
            }
        } else {
            foreach ($errors as $error) {
                echo $error . "These are the errors" . "\n";
            }
        }
   // }

        if($uploaded){

        	$cat_name=$conn -> real_escape_string($cat_name);
        	$cat_desc=$conn -> real_escape_string($cat_desc);

        	
            $sql="INSERT INTO `gallery`(`cat_id`,`description`,
            `image`) VALUES(  '".$cat_name."','".$cat_desc."','".$image_name_new."')";

            
        	$result_insert=mysqli_query($conn,$sql) or die(mysqli_error($conn));

        	echo '<span class="success">Done !!</span>';


        }


}


?>