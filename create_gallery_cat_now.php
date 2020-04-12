<?php
session_start();
require_once("db.php");
require_once("common.php");
require_once("logout_redirect_ajax.php");
if(isset($_POST['form_submit_btn'])){

	$cat_name=trim($_POST['cat_name']);
	
	
    
    
    

        	$cat_name=$conn -> real_escape_string($cat_name);


            $result_all = mysqli_query($conn, "SELECT * FROM  gallery_category ") or die(mysqli_error($conn));
            $cat_found=0;
            while($row=$result_all->fetch_assoc()){

                $cat_db=$row['cat_name'];

                if(is_same_string($cat_db,$cat_name)){

                    $cat_found=1;

                } 


            }//end of while loop
        	

            if($cat_found){

               echo '<span class="error">Category already exists</span>';

            }else{

            
            $sql="INSERT INTO `gallery_category`(`cat_name`) VALUES(  '".$cat_name."')";

            
            $result_insert=mysqli_query($conn,$sql) or die(mysqli_error($conn));

            echo '<span class="success">Done !!</span>';     

            }

        	
            


       


}


?>