<?php
require_once("db.php");
$cat_id = $_POST['cat_id'];

$gallery_all = mysqli_query($conn, "SELECT * FROM gallery WHERE cat_id = ".$cat_id) or die(mysqli_error($conn));

while($row = $gallery_all->fetch_assoc()){


	?>

<div class="gallery_indiv">
	
	<div class="gallery_indiv_image">
		<img alt="image" src="uploads/gallery/<?php echo $row['image']; ?>" />
	</div><!-- end of class gallery_indiv_image-->

	<div class="gallery_indiv_text text-center">

		<?php  echo $row['description']; ?>


		
	</div><!-- end of class gallery_indiv_text -->

	 <div class="gallery_indiv_delete_area text-center">

                    

                    <a href="edit_gallery_page.php?id=<?php echo $row['id'];?>">Go to edit page</a>
                     
          </div>

</div><!-- end of class gallery_indiv-->

	<?php


}//end of while loop


?>

<br/><br/><br/><br/>
