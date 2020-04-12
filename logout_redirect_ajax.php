<?php

if(!isset($_SESSION['admin_logged_in'])){
	?>

<script type="text/javascript">
	
	window.location.href="admin.php";
</script>


	<?php
exit;
}
?>