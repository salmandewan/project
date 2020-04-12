<?php
session_start();
require_once("db.php");
require_once("common.php");
require_once("logout_redirect_ajax.php");

$cat_id = $_POST['cat_id'];
$cat_name=$_POST['cat_name'];
$cat_name=$conn-> real_escape_string($cat_name);



$result_delete=mysqli_query($conn," UPDATE gallery_category SET cat_name= '".$cat_name."' WHERE id = ".$cat_id) or die(mysqli_error($conn));

echo '<span class="success">Done !!</span>'; 



?>


<script type="text/javascript">
	
   $(document).ready(function(){

      var cat_id ='<?php echo $cat_id; ?>';
      var cat_name ='<?php echo $cat_name; ?>';
      $('#cat_id option[value='+cat_id+']' ).text(cat_name);



   });

</script>