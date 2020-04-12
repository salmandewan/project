<?php
session_start();
require_once("db.php");
$email=$_POST['email'];
$password=$_POST['password'];
$password_hashed = md5(sha1($password));

$result_login=mysqli_query($conn,"SELECT * FROM users WHERE `email`= '".$email."' AND `password` = '".$password_hashed."'") or die(mysqli_error($conn));

if(mysqli_num_rows($result_login)){

	$_SESSION['admin_logged_in']=1;

	?>

<script type="text/javascript">
	
  window.location.href="admin_home.php";

</script>


	<?php	

}else{

	echo '<span class="error">Wrong access info</span>';
}



?>