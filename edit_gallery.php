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
    	gallery_id=0;
      $gallery_indiv="";
    	$( document ).ready(function() {


          $("#btn_show").click(function(){
             
           var cat_id = $("#cat_name").val();

           if(cat_id.trim() =="".trim()){

            $("#result").html('<span class="error">Please select a category</span>');

           }else{


              $("#result").html('');

              $.ajax({

                    method:"POST",
                    url:"show_gallery_for_edit_now.php",
                    data:"cat_id="+cat_id,
                    success: function(response){

                      $("#gallery_show_all").html(response);


                    }

              });

           }  



          });

          

          $(document).on('click','.btn_delete', function(){

            $this = $(this);
            $gallery_indiv=$this.closest('.gallery_indiv');
            gallery_id = $this.data('id');
             $( "#dialog" ).dialog();

          });


          $("#btn_yes").click(function(){

               $.ajax({
                     method:'POST',
                     url:"delete_gallery_now.php",
                     data:{'gallery_id':gallery_id},
                     success: function(response){

                        window.scrollTo(0,0); 

                        $( "#dialog" ).dialog('close');   
                        $("#result").html(response);
                        $gallery_indiv.remove();

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
        	<div id="form_title" class="text-center">Edit Gallery</div>


          <div id="result" class="text-center"></div>

          <?php
           
           $gallery_all = mysqli_query($conn,"SELECT * FROM gallery_category order by id ASC") or die(mysqli_error($conn));

           ?>

            <select id="cat_name" name="cat_name" class="form_control">
              <option value="">Select a category</option>
              
            
           <?php

           while($row = $gallery_all->fetch_assoc()){

            ?>

            <option value="<?php echo $row['id']; ?>"><?php echo $row['cat_name'];  ?></option>
             

            <?php



           }//end of while loop


          ?>

       </select>      

        	 <div class="gallery_indiv_delete_area text-center">

                    <button type="button" id="btn_show"  value="&nbsp;Show Gallery Items&nbsp;">&nbsp;Show Gallery Items&nbsp;</button>
                     
          </div>

        </div><!-- end of id admin_form_area -->



        <div id="gallery_show_all">
          


        </div><!-- end of id gallery_show_all-->

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