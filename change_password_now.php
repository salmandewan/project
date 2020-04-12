<?php
session_start();
require_once("db.php");
require_once("logout_redirect_ajax.php");

$current_pass = $_POST['current_pass'];
$new_pass = $_POST['new_pass'];
$confirm_pass = $_POST['confirm_pass'];

$current_pass_hashed = md5(sha1($current_pass));


$result_user = mysqli_query($conn,"SELECT * FROM users WHERE `password`='".$current_pass_hashed."'")  or die(mysqli_error($conn));

if(!mysqli_num_rows($result_user)){

   echo '<span class="error">Current password input is wrong </span>';

}elseif(strlen($new_pass)<5){

      echo '<span class="error">Password length should be at least 5 </span>';

    }elseif(strcasecmp($new_pass, $confirm_pass)!=0){

      echo '<span class="error">Password inputs do not match </span>';

    }else{

         $new_pass_hashed = md5(sha1($new_pass));
         $result_update = mysqli_query($conn, "UPDATE users SET `password`= '".$new_pass_hashed."'")  or die(mysqli_error($conn));

         echo '<span class="success">Done !</span>';


    }



?>