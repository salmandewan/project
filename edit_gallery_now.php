<?php
session_start();
require_once("db.php");
require_once("common.php");
require_once("logout_redirect_ajax.php");

$gallery_id = $_POST['gallery_id'];
$description=$_POST['description'];
$description=$conn-> real_escape_string($description);

$image_found=0;
$image_name="";
if(isset($_FILES['image'])){

   $image_found=1;
   $image_name="";



    $result_gallery_info = mysqli_query($conn, "SELECT * FROM gallery WHERE id = ".$gallery_id)  or die(mysqli_error($conn));
     
    $image_name_db=""; 
    while ($row = $result_gallery_info->fetch_assoc()) {

        $image_name_db=$row['image'];
    	
    }// end of while loop

    $file_to_be_deleted='uploads/gallery/'.$image_name_db;
    if(file_exists($file_to_be_deleted)){

    		unlink($file_to_be_deleted);
    }
    


	$currentDir = getcwd();
    $uploadDirectory = "/uploads/gallery/";

    $errors = []; // Store all foreseen and unforseen errors here

    $fileExtensions = ['jpeg','jpg','png','gif']; // Get all the file extensions

    $fileName = $_FILES['image']['name'];
    $fileSize = $_FILES['image']['size'];
    $fileTmpName  = $_FILES['image']['tmp_name'];
    $fileType = $_FILES['image']['type'];
    $fileNameArray = explode('.',$fileName);
    $fileExtension = strtolower(end($fileNameArray));

    //$uploadPath = $currentDir . $uploadDirectory . basename($fileName); 
    $image_name_new=rand(1,100000).rand(5000000,900000000).'.'.$fileExtension;

   
    $uploadPath = $currentDir . $uploadDirectory . $image_name_new; 

    $uploaded=0;



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

}
$sql=" UPDATE gallery SET `description`= '".$description."'";

if($image_found){

	$sql.=", `image`='".$image_name_new."'";

}
$sql.=" WHERE `id` = ".$gallery_id;


$result_update=mysqli_query($conn,$sql) or die(mysqli_error($conn));

echo '<span class="success">Done !!</span>'; 



?>


<script type="text/javascript">
	
   $(document).ready(function(){

      


   });

</script>