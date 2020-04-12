<?php
session_start();
  require_once("db.php");
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

    <link rel="stylesheet" type="text/css" href="js/jquery-ui-1.12.1/jquery-ui.min.css" />
    <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
    <script src="css/bootstrap-4.0.0/dist/js/bootstrap.min.js"></script>

    <script type="text/javascript" src="js/jquery-validation-1.19.1/dist/jquery.validate.min.js"></script>

    <script type="text/javascript" src="js/jquery.form.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui-1.12.1/jquery-ui.min.js"></script>

    <script type="text/javascript">
    	gallery_category_id=0;
      $gallery_category_indiv="";
    	$( document ).ready(function() {

          $(".btn_delete").click(function(){

            $this = $(this);
            $gallery_category_indiv=$this.closest('.gallery_category_indiv');
            gallery_category_id = $this.data('id');
             $( "#dialog" ).dialog();
             $("#result").html('');

          });

            $("#btn_no").click(function(){

              $( "#dialog" ).dialog('close');

          });


          $("#btn_yes").click(function(){

            $("#result").html('<span class="success">Please wait....</span>');

               $.ajax({
                     method:'POST',
                     url:"delete_gallery_category_now.php",
                     data:{'gallery_category_id':gallery_category_id},
                     success: function(response){

                        window.scrollTo(0,0); 

                        $( "#dialog" ).dialog('close');   
                        $("#result").html(response);

                        if(parseInt(response)==1){

                            $gallery_category_indiv.remove();  

                            $("#result").html('<span class="success">Deleted !!</span>');

                        }
                        

                     },
                     error: function(errors){

                      if(window.console){

                        console.log(errors);

                      }

                     }

               });


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
      
        <div id="admin_form_area" style="min-height: 150px !important;">
        	<div id="form_title" class="text-center">Delete Services</div>


          <div id="result" class="text-center"></div>

          <?php
           
           $services_all = mysqli_query($conn,"SELECT * FROM gallery_category order by id ASC") or die(mysqli_error($conn));


           while($row = $services_all->fetch_assoc()){

            ?>


                <div class="gallery_category_indiv">
                   
                  

                   
                     <?php  echo '<b>'.$row['cat_name'].'</b>';   ?>
                   

                        &nbsp;&nbsp;&nbsp;&nbsp;
                  

                    <button type="button" class="btn_delete" data-id="<?php echo $row['id']; ?>" value="Delete">Delete</button>
                     
                  

            
                </div><!-- end of class gallery_category_indiv-->

            <?php



           }//end of while loop


          ?>

          

        	

        </div><!-- end of id admin_form_area -->

<div id="dialog" title="Confirm">
  <p>Are you sure to delete this  ?
    <br/>
    <button type="button" id="btn_yes" value="&nbsp;Yes&nbsp;">&nbsp;Yes&nbsp;</button>&nbsp;
      <button type="button" id="btn_no" value="&nbsp;No&nbsp;">&nbsp;No&nbsp;</button>
  </p>
</div>
    </main>

    <?php
   require_once("admin_footer.php");
?>

    

	
	
</body>

</html>