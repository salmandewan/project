<?php
session_start();
require_once("db.php");
require_once("common.php");
require_once("logout_redirect_ajax.php");
if(isset($_POST['form_submit_btn'])){

	$service_name=trim($_POST['service_name']);
	$service_desc=trim($_POST['service_desc']);
	// $_FILES['service_image'];


     //var_dump($_FILES);

     //var_dump($_FILES['service_image']['error']);


	$currentDir = getcwd();
    $uploadDirectory = "/uploads/services/";

    $errors = []; // Store all foreseen and unforseen errors here

    $fileExtensions = ['jpeg','jpg','png','gif']; // Get all the file extensions

    $fileName = $_FILES['service_image']['name'];
    $fileSize = $_FILES['service_image']['size'];
    $fileTmpName  = $_FILES['service_image']['tmp_name'];
    $fileType = $_FILES['service_image']['type'];
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

        	$service_name=$conn -> real_escape_string($service_name);
        	$service_desc=$conn -> real_escape_string($service_desc);

        	
            $sql="INSERT INTO `services`(`service_name`,`service_desc`,`service_image`) VALUES(  '".$service_name."','".$service_desc."','".$image_name_new."')";

            
        	$result_insert=mysqli_query($conn,$sql) or die(mysqli_error($conn));

        	echo '<span class="success">Done !!</span>';


        }


}


?>