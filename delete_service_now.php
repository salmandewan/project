<?php
session_start();
require_once("db.php");
require_once("common.php");
require_once("logout_redirect_ajax.php");

$service_id = $_POST['service_id'];

$result_select=mysqli_query($conn, "SELECT * FROM services WHERE id = ".$service_id) or die(mysqli_error($conn));

$image="";
while($row=$result_select->fetch_assoc()){

  $image=$row['service_image'];


}

$image_with_full_path='uploads/services/'.$image;

if(file_exists($image_with_full_path)){

unlink($image_with_full_path);
}


$result_delete=mysqli_query($conn," DELETE FROM  services WHERE id = ".$service_id) or die(mysqli_error($conn));

echo '<span class="success">Deleted !</span>';

?>