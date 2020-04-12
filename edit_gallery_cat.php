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

          $("#cat_id").val('');
          $("#cat_name").val('');
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
				      cat_id: "required",
              cat_name: "required"
				
				
			},
			messages: {
        cat_id: "Please select  a category ",
				cat_name: "Please enter category name"
				
				
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

<form id="admin_form" name="admin_form" action="edit_gallery_cat_now.php" enctype="multipart/form-data" method="POST"> 

<div class="form-group">
    <label for="cat_name">Category Name:</label>
    
    <select class="form-control" id="cat_id" name="cat_id" required="required">
      <option value="">Select a category</option>

      <?php
          $cats_all = mysqli_query($conn,"SELECT * FROM gallery_category order by id asc") or die(mysqli_error($conn));

          while($row=$cats_all->fetch_assoc()){


            ?>

            <option value="<?php echo $row['id']; ?>"><?php echo $row['cat_name'];  ?></option>

            <?php



          }// end of while loop


      ?>
      
    </select>

  </div>
  
  <div class="form-group">
    <label for="cat_name">Category Name:</label>
    <input type="text" class="form-control"  required="required" id="cat_name" name="cat_name">
  </div>
  

  

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