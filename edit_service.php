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

    <link rel="stylesheet" type="text/css" href="js/jquery-ui-1.12.1/jquery-ui.min.css" />
    <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
    <script src="css/bootstrap-4.0.0/dist/js/bootstrap.min.js"></script>

    <script type="text/javascript" src="js/jquery-validation-1.19.1/dist/jquery.validate.min.js"></script>

    <script type="text/javascript" src="js/jquery.form.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui-1.12.1/jquery-ui.min.js"></script>

    <script type="text/javascript">
    	service_id=0;
      $service_indiv="";
    	$( document ).ready(function() {

          $(".btn_delete").click(function(){

            $this = $(this);
            $service_indiv=$this.closest('.service_indiv');
            service_id = $this.data('id');
             $( "#dialog" ).dialog();

          });


          $("#btn_yes").click(function(){

               $.ajax({
                     method:'POST',
                     url:"delete_service_now.php",
                     data:{'service_id':service_id},
                     success: function(response){

                        window.scrollTo(0,0); 

                        $( "#dialog" ).dialog('close');   
                        $("#result").html(response);
                        $service_indiv.remove();

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
      
        <div id="admin_form_area">
        	<div id="form_title" class="text-center">Delete Services</div>


          <div id="result" class="text-center"></div>

          <?php
           
           $services_all = mysqli_query($conn,"SELECT * FROM services order by id ASC") or die(mysqli_error($conn));


           while($row = $services_all->fetch_assoc()){

            ?>


                <div class="service_indiv">
                   
                   <div class="service_indiv_image text-center">

                    <img alt="image" src="uploads/services/<?php echo $row['service_image'] ?>" />
                     
                   </div><!-- end of class service_indiv_image-->

                   <div class="service_indiv_name text-center">
                     <?php  echo '<b>'.$row['service_name'].'</b>';   ?>
                   </div>

                   <div class="service_indiv_desc">
                     


                     <?php 
                            $str_full = $row['service_desc'];
                            $str = $str_full;
                            if( strlen( $str_full) > 150) {
                                
                                $str = explode( "\n", wordwrap( 
                                  $str_full, 150));
                                $str = $str[0] . '...';
                              
                              }

                              echo $str;
                            ?>
  
                   </div>

                   <div class="service_indiv_delete_area text-center">

                    <a  href="edit_service_page.php?id=<?php echo $row['id'];   ?>" >Edit</a>
                     
                   </div>

            
                </div><!-- end of class service_indiv-->

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