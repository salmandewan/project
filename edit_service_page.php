<?php
session_start();
  require_once("db.php");
  require_once("logout_redirect.php");

$query_string=$_SERVER['QUERY_STRING'];
$query_string_array = explode('=',$query_string);
$id=$query_string_array[1];
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


     function readURL(input) {

           if (input.files && input.files[0]) {

            var reader = new FileReader();

            

            reader.onload = function (e) {

                $('#profile-img-tag').attr('src', e.target.result);

            }

            reader.readAsDataURL(input.files[0]);

        }

    }

      
      $( document ).ready(function() {

      $("#image").val('');    

      $("#image").change(function(){


        $("#profile-img-tag").show();
        $("#image_found").hide();
        readURL(this);

      });

          $("#admin_form").validate({

            rules: {
        service_name: "required",
        image: "required",
        service_desc: "required",
        
        
      },
      messages: {
        service_name: "Please enter your service name",
        image: "Please select an image ",
        service_desc: " Please enter description"
        
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
   require_once("admin_header.php");
?>





    <!-- Begin page content -->
    <main role="main" class="container">

          <?php

            $result_service = mysqli_query($conn, "SELECT * FROM services WHERE id = ".$id)  or die(mysqli_error($conn));

            $service_name="";
            $service_desc="";
            $image="";

            while($row = $result_service->fetch_assoc()){

                $service_name=$row['service_name'];
                $service_desc= $row['service_desc'];
                $image=$row['service_image'];

            }// end of while loop


          ?>      
        <div id="admin_form_area">
          <div id="form_title" class="text-center">Edit Services</div>


     <div id="result" class="text-center"></div>

<form id="admin_form" name="admin_form" action="edit_service_now.php" enctype="multipart/form-data" method="POST"> 

  
  <div class="form-group">
    <label for="service_name">Service Name:</label>
    <input type="text" class="form-control"  required="required" id="service_name" name="service_name"  value="<?php echo $service_name; ?>">
  </div>
  

  <div class="form-group">
    <label for="service_desc">Description:</label>
    <textarea  required="required" rows="6" class="form-control" id="service_desc" name="service_desc"><?php echo $service_desc;  ?></textarea>
  </div>

  <div class="form-group">
    <label for="image">Image:</label>
    <input type="file" class="form-control"  required="required" id="image" 
    name="image" />

  </div>


  <div id="image_found" class="text-center">

    <img alt="image" src="uploads/services/<?php echo $image; ?>" />
  </div><!-- end of id image_found-->

  <div id="preview" class="text-center">
  
  <img src="" id="profile-img-tag" width="100px" height="100px" />

  </div>

   <input type="hidden" value="<?php echo  $id;  ?>" id="service_id" name="service_id" />

  <br/>
  <br/>
  
 
  
  <button type="submit" id="form_submit_btn" value="Submit"  name="form_submit_btn" class="btn btn-default">Submit</button>


</form>
          

        </div><!-- end of id admin_form_area -->


    </main>

    <?php
   require_once("admin_footer.php");
?>

    

  
  
</body>

</html>