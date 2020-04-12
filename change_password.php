<?php
session_start();
  require_once("db.php");
require_once("logout_redirect.php");

?>
<!DOCTYPE html>

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
	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
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
    	
    	$( document ).ready(function() {

          $("#admin_form").validate({

          	rules: {
          		current_pass: "required",
				new_pass: {
					"required":true,
					"minlength":5
				},
				confirm_pass:{

				 "required":true,
				 equalTo: "#new_pass"

				}
				
				
			},
			messages: {
				current_pass:"Please enter current password ",
				new_pass: {
					required:"Please enter password",
					minlength:"Password length should be at least 5",

				},
				confirm_pass:{
					required:"Please enter password again",
					equalTo:" Password inputs should be same "
				}
				
				
			},

			/*errorPlacement: function(error, element) {
                error.appendTo( element.parent("td").next("td") );
            },
            
            debug:true,*/


          submitHandler: function(form) {

          	$("#admin_form").ajaxSubmit({
          		target:'#result'
          	}); 

          /*$.ajax({
            url: form.action,
            type: form.method,
            data: $(form).serialize(),
            success: function(response) {
                $('#result').html(response);
            }            
           });*/
    }



          });



    	});


    </script>


</head>

<body>



<?php
   require_once("admin_header.php");
?>





    <!-- Begin page content -->
    <main role="main" class="container">
      
        <div id="admin_form_area"  style="height:400px; min-height: 400px;">
        	<div id="form_title" class="text-center">Change Password</div>


     <div id="result" class="text-center"></div>

<form id="admin_form" name="admin_form" action="change_password_now.php" enctype="multipart/form-data" method="POST"> 

  
  <div class="form-group">
    <label for="current_pass">Current password:</label>
    <input type="password" class="form-control"  required="required" id="current_pass" 
    name="current_pass">
  </div>
  

  <div class="form-group">
    <label for="new_pass">New password:</label>
    <input type="password" class="form-control"  required="required" id="new_pass" 
    name="new_pass">
  </div>

  <div class="form-group">
    <label for="confirm_pass">Confirm new password:</label>
    <input type="password" class="form-control"  required="required" id="confirm_pass" 
    name="confirm_pass">
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