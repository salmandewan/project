<?php

require_once("common.php");
$root=pathUrl();


if(!isset($_SESSION['admin_logged_in'])){
	header("Location:".$root."admin.php");

}

?>