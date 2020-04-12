<?php
session_start();
require_once("common.php");
$root=pathUrl();


if(isset($_SESSION['admin_logged_in'])){
	header("Location:".$root."admin_home.php");

}
?><!DOCTYPE html>

<html class="no-js">
<!--<![endif]-->


<head>
	<title>Buying House</title>
	<meta charset="utf-8">
	<!--[if IE]>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<![endif]-->
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<META HTTP-EQUIV="CACHE-CONTROL" CONTENT="NO-CACHE">
	  <link rel="stylesheet" href="css/bootstrap.min.css">
  
  <link rel="stylesheet" href="css/fonts.css">
  <link rel="stylesheet" href="css/admin.css" class="color-switcher-link">
  <link rel="stylesheet" type="text/css" href="css/bootstrap-4.0.0/dist/css/bootstrap.min.css"></link>
    <link rel="stylesheet" type="text/css" href="css/sticky-footer-navbar.css" /> 

    <link rel="stylesheet" type="text/css" href="js/jquery-validation-1.19.1/demo/css/screen.css">
    <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
    <script src="css/bootstrap-4.0.0/dist/js/bootstrap.min.js"></script>

    <script type="text/javascript" src="js/jquery-validation-1.19.1/dist/jquery.validate.min.js"></script>

    <script type="text/javascript" src="js/jquery.form.min.js"></script>


    <script type="text/javascript">
    	
        $(document).ready(function(){


               $("#admin_form").validate({

            rules: {
             email: {
             	"required":true,
                 "email":true
             },
             password: "required"
        
      },
      messages: {
        email: "Please enter your email",
        password: "Please enter password "
        
        
      },

         submitHandler: function(form) {

            $("#admin_form").ajaxSubmit({
              target:'#result'
            }); 

      
    }



          });


        });

    </script>


</head>

<body>


<?php
   //require_once("admin_header.php");
?>

    <!-- Begin page content -->
    <main role="main" class="container">
     


      <div id="admin_form_area"  style="height:275px; min-height: 275px; margin-top: 120px;">
          <div id="form_title" class="text-center">Admin Panel Login</div>


     <div id="result" class="text-center"></div>

<form id="admin_form" name="admin_form" action="login_now.php" enctype="multipart/form-data" method="POST"> 

  
  <div class="form-group">
    <label for="email">Email:</label>
    <input type="text" class="form-control"  required="required" id="email" name="email"  value="">
  </div>
  

  <div class="form-group">
    <label for="service_desc">Password:</label>
    <input type="password" required="required" rows="6" class="form-control" id="pasword" name="password" />
  </div>

  


  
 
  
  <button type="submit" id="form_submit_btn" value="Submit"  name="form_submit_btn" class="btn btn-default">Submit</button>


</form>
          

        </div><!-- end of id admin_form_area -->
      
    </main>


<?php
   require_once("admin_footer.php");
?>
   
    
    

	
	
</body>

</html>