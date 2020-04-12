<?php
session_start();
require_once("logout_redirect.php");
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
				service_name: "required",
				service_image: "required",
				service_desc: "required",
				
				
			},
			messages: {
				service_name: "Please enter your service name",
				service_image: "Please select an image ",
				service_desc: " Please enter description"
				
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
      
        <div id="admin_form_area"  style="min-height:550px; height:550px;">
        	<div id="form_title" class="text-center">Create Services</div>


     <div id="result" class="text-center"></div>

<form id="admin_form" name="admin_form" action="create_service_now.php" enctype="multipart/form-data" method="POST"> 

  
  <div class="form-group">
    <label for="service_name">Service Name:</label>
    <input type="text" class="form-control"  required="required" id="service_name" name="service_name">
  </div>
  

  <div class="form-group">
    <label for="service_desc">Description:</label>
    <textarea  required="required" rows="6" class="form-control" id="service_desc" name="service_desc"></textarea>
  </div>
  

  <div class="form-group">
    <label for="service_image">Image:</label>
    <input type="file" class="form-control"  required="required" id="service_image" 
    name="service_image" />
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