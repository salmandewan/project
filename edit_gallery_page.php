<?php
  <?php
session_start();
  require_once("db.php");
require_once("logout_redirect.php");
?>

  $query_string=$_SERVER['QUERY_STRING'];
  $query_string_array=explode('=',$query_string);
  $id=$query_string_array[1];

?>
<!DOCTYPE html>

<html class="no-js">
<!--<![endif]-->


<head>
	<title>Qtyler</title>
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

          $("#cat_id").val('');
          $("#cat_name").val('');



      $("#image").change(function(){


        $("#profile-img-tag").show();
        $("#gallery_image_found").hide();
        readURL(this);

      });
    


          $("#cat_id").change(function(){

              $this = $(this);



              if($this.val().trim() !="".trim()){

                  var cat_name_found=$("#cat_id  option:selected").text();                

                  $("#cat_name").val(cat_name_found);

              }


          });


          $("#cat_name").change(function(){

             $this=$(this);

             if($this.val().trim()=="".trim()){

              $this.val('');

             }

          });

          $("#admin_form").validate({

          	rules: {
				      description: "required"
              
				
				
			},
			messages: {
        description: "Please enter description"
				
				
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
      
        <div id="admin_form_area">
        	<div id="form_title" class="text-center">Edit Gallery Category</div>


     <div id="result" class="text-center"></div>

<form id="admin_form" name="admin_form" action="edit_gallery_now.php" enctype="multipart/form-data" method="POST"> 

<div class="form-group">
    <label for="cat_name">Category Name:</label>
    
   
      <?php
          $gallery_found = mysqli_query($conn,"SELECT * FROM gallery where id = $id") or die(mysqli_error($conn));

          $gallery_desc="";
          $gallery_image="";
          $id=0;
          while($row=$gallery_found->fetch_assoc()){
      
                $gallery_desc=$row['description'];
                $gallery_image=$row['image'];
                $id=$row['id'];

             

          }// end of while loop


      ?>
      
   
  </div>
  
  <div class="form-group">
    <label for="description">Description:</label>
    <input type="text" class="form-control"  required="required" id="description" name="description" value="<?php echo $gallery_desc; ?>">
  </div>
  

  <div class="form-group">
    <label for="image">Image:</label>
    <input type="file" class="form-control"   id="image" name="image">
  </div>

  <div id="gallery_image_found" class="text-center">

    <img alt="image" src="uploads/gallery/<?php echo $gallery_image; ?>" />
  </div><!-- end of id gallery_image_found-->

  <div id="preview" class="text-center">
  
  <img src="" id="profile-img-tag" width="200px" height="200px" />

  </div>
  
  
  <input type="hidden" value="<?php echo $id; ?>" id="gallery_id" name="gallery_id" />

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