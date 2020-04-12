 <?php

 require_once("common.php");

 $root=pathUrl();

//Log out Back
header("Cache-Control: no-cache, no-store, must-revalidate"); // HTTP 1.1.
header("Pragma: no-cache"); // HTTP 1.0.
header("Expires: 0"); // Proxies.

require_once("logout_redirect.php");

//$root = (!empty($_SERVER['HTTPS']) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . '/';
// echo " rot = ".$root;
 ?>
 <header>
 <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Brand -->
  <!-- <a class="navbar-brand" href="<?php echo $root."admin.php"; ?>">Logo</a> -->

  <!-- Links -->
  <ul class="navbar-nav">

    <li class="nav-item">
      <a class="nav-link" href="<?php echo $root."admin.php"; ?>">Home</a>
    </li>

   

    <!-- Dropdown -->
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Services
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="create_service.php">Create</a>
        <a class="dropdown-item" href="edit_service.php">Edit</a>
        <a class="dropdown-item" href="delete_service.php">Delete</a>
      </div>
    </li>




  <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Gallery Category
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="create_gallery_cat.php">Create</a>
        <a class="dropdown-item" href="edit_gallery_cat.php">Edit</a>
        <a class="dropdown-item" href="delete_gallery_cat.php">Delete</a>
      </div>
    </li>



      <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Gallery
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="create_gallery.php">Create</a>
        <a class="dropdown-item" href="edit_gallery.php">Edit</a>
        <a class="dropdown-item" href="delete_gallery.php">Delete</a>
      </div>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="change_password.php">Change Password </a>
    </li>

    <li class="nav-item">
        <span id="logout_result"></span>
        <a id="logout" class="pull-right" href="javascript:void(0)">Logout</a>
    </li>



  </ul>
  
</nav> 


</header>

<script type="text/javascript">
  
   $(document).ready(function(){

       $("#logout").click(function(){


           $.ajax({

              method:"POST",
              url:"logout_now.php",
              success:function(response){

                $("#logout_result").html(response);
              },

              error: function(response){
                

                if(window.console){

                  console.log(response);

                }
             
              }
           });

       });


   });

</script>