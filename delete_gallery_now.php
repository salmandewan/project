<?php
session_start();
require_once("db.php");
require_once("common.php");
require_once("logout_redirect_ajax.php");

$gallery_id = $_POST['gallery_id'];

$result_select=mysqli_query($conn, "SELECT * FROM gallery WHERE id = ".$gallery_id) or die(mysqli_error($conn));

$image="";
while($row=$result_select->fetch_assoc()){

  $image=$row['image'];


}

$image_with_full_path='uploads/gallery/'.$image;

if(file_exists($image_with_full_path)){

unlink($image_with_full_path);
}


$result_delete=mysqli_query($conn," DELETE FROM  gallery WHERE id = ".$gallery_id) or die(mysqli_error($conn));

echo '<span class="success">Deleted !</span>';

?>