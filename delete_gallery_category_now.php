<?php
session_start();
require_once("db.php");
require_once("common.php");
require_once("logout_redirect_ajax.php");

$gallery_category_id = $_POST['gallery_category_id'];

$result_gallery=mysqli_query($conn, "SELECT id FROM gallery where cat_id= ".$gallery_category_id) or die(mysqli_error($conn));

if(mysqli_num_rows($result_gallery)){

	echo '<span class="error">Category cannot be deleted as items are inserted under it.</span>';

}else{

$result_delete=mysqli_query($conn," DELETE FROM  gallery_category WHERE id = ".$gallery_category_id) or die(mysqli_error($conn));

echo '1'; 
}
?>