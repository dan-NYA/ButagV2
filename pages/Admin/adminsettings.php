<?php

session_start();

      if(!isset($_SESSION['admin'])) // If session is not set then redirect to Login Page

       {

           header("Location:adminlogin.php");  

       }

       ?>



<?php 

   include '../../db.php'; 



$queries="SELECT * from tbladmincontent";

$results= mysqli_query($conn,$queries);

while($rows = mysqli_fetch_assoc($results))

{

 $aid = $rows['aid'];

 $nav = $rows['navtitles'];

}

?>

<!DOCTYPE html>

<html lang="en">



<head>



  <meta charset="utf-8">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <meta name="description" content="">

  <meta name="author" content="">

  <link rel="shortcut icon" href="icon.ico" />

  <title><?php echo $nav; ?> Settings</title>



  <!-- Custom fonts for this template-->

  <link href="../../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">



  <!-- Custom styles for this template -->

  <link href="../../css/sb-admin-2.min.css" rel="stylesheet">



  <!-- Custom styles for this page -->

  <link href="../../vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">



</head>



<body id="page-top">



  <!-- Page Wrapper -->

  <div id="wrapper">

  <style>
 #accordionSidebar {
  position: fixed;
  top: 0;
  left: 0;
  bottom: 0;
  width: 250px; /* You can adjust the width as needed */
  background-color: #343a40; /* Set your desired background color */
  overflow-y: auto; /* Add scrollbars if content overflows */
  z-index: 9999; /* Set a high z-index value to make it appear in front of all other elements */
}

#content {
  margin-left: 225px; /* Match the width of the sidebar */
  transition: margin 0.3s; /* Add a smooth transition effect */
}




</style>

    <!-- Sidebar -->

    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">



      <!-- Sidebar - Brand -->

      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="dashboard.php">

          <i class="fas fa-user"></i>

           <div class="sidebar-brand-text mx-3"><?php echo $nav;?></div>

      </a>



      <!-- Divider -->

      <hr class="sidebar-divider my-0">



      <!-- Nav Item - Dashboard -->

      <li class="nav-item">

        <a class="nav-link" href="dashboard.php">

          <i class="fas fa-fw fa-tachometer-alt"></i>

          <span>Dashboard</span></a>

      </li>



      <!-- Divider -->

     

      

         <li class="nav-item">

        <a class="nav-link" href="announcement.php">

          <i class="fas fa-fw fa-bullhorn"></i>

          <span>Create Announcement</span></a>



      </li>





      <li class="nav-item">

        <a class="nav-link" href="users.php">

          <i class="fas fa-fw fa-user"></i>

          <span>Users</span></a>

      </li>



      <li class="nav-item">

        <a class="nav-link" href="deceasedinfo.php">

          <i class="fas fa-fw fa-book"></i>

          <span>Deceased Information</span></a>

      </li>



      <li class="nav-item">

        <a class="nav-link" href="notification.php">

          <i class="fas fa-fw fa-sms"></i>

          <span>Notification</span></a>

      </li>



      <li class="nav-item">

        <a class="nav-link" href="contract.php">

          <i class="fas fa-fw fa-file-contract"></i>

          <span>Contract</span></a>

      </li>







      <li class="nav-item">

        <a class="nav-link" href="map.php">

          <i class="fas fa-fw fa-map"></i>

          <span>Map</span></a>

      </li>



      <li class="nav-item">

        <a class="nav-link" href="inquiries.php">

          <i class="fas fa-fw fa-question-circle"></i>

          <span>Customer's Inquiries</span></a>

      </li>



      <li class="nav-item">

        <a class="nav-link" href="faq.php">

          <i class="fas fa-fw fa-question"></i>

          <span>FAQ</span></a>

      </li>



    



      <li class="nav-item">

        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities3" aria-expanded="true" aria-controls="collapseUtilities3">

          <i class="fas fa-fw fa-archive"></i>

          <span>Archive</span>

        </a>

        <div id="collapseUtilities3" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">

          <div class="bg-white py-2 collapse-inner rounded">

          <h6 class="collapse-header">Data</h6>

            <a class="collapse-item" href="archivedeceased.php">Deceased Information</a>

            <a class="collapse-item" href="archiveinquiries.php">Customer's Inquiries</a>

            <a class="collapse-item" href="archivefaq.php">FAQ</a>

        

          </div>

        </div>

      </li>





      <!-- Divider -->

      <hr class="sidebar-divider d-none d-md-block">



      <!-- Sidebar Toggler (Sidebar) -->

      <div class="text-center d-none d-md-inline">

        <button class="rounded-circle border-0" id="sidebarToggle"></button>

      </div>



    </ul>

    <!-- End of Sidebar -->



    <!-- Content Wrapper -->

    <div id="content-wrapper" class="d-flex flex-column">



      <!-- Main Content -->

      <div id="content">



        <!-- Topbar -->

        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">



          <!-- Sidebar Toggle (Topbar) -->

          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">

            <i class="fa fa-bars"></i>

          </button>



        

          <!-- Topbar Navbar -->

          <ul class="navbar-nav ml-auto">



            



            <!-- Nav Item - Alerts -->

            <li class="nav-item dropdown no-arrow mx-1">

              

              

              <!-- Dropdown - Alerts -->

              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">

                

                



            <!-- Nav Item - Messages -->

            <li class="nav-item dropdown no-arrow mx-1">

              <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

              

              

              </a>

             





            <!-- Nav Item - User Information -->

            <li class="nav-item dropdown no-arrow">

              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Hello, <?php echo $_SESSION['admin']; ?>!</span>



              </a>

              <!-- Dropdown - User Information -->

              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">

                <a class="dropdown-item" href="#">

                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>

                  Settings

                </a>



                <a class="dropdown-item" href="indexcontentmanager.php">

                  <i class="fas fa-file fa-sm fa-fw mr-2 text-gray-400"></i>

                  Content Manager

                </a>



            

            

              

                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">

                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>

                  Logout

                </a>

              </div>

            </li>



          </ul>



        </nav>

        <!-- End of Topbar -->



        <!-- Begin Page Content -->

        <div class="container-fluid">



       

        <div class="card mb-4">

                            <div class="card-header"><i class="fas fa-cog mr-1"></i>Admin Settings </div>

                            <div class="card-body">

                            <?php

       

       include("../../db.php");

 

         $Username=$_SESSION['admin'];

 

 

         $sql = "SELECT * FROM adminreg WHERE username='$Username'";

         $result = mysqli_query ($conn,$sql) or die (mysql_error ());

         while ($row = mysqli_fetch_array ($result)){

 

         ?>



<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

          <?php

 if(isset($_POST['update']))

 {

        $id = $_POST['id'];

          $lname = trim($_POST['lastname']);

          $fname = trim($_POST['firstname']);

          $mname = trim($_POST['middlename']);

          $email = trim($_POST['email']);

          $mobile = trim($_POST['mobile']);

          $username = trim($_POST['username']);

           

 $sql = "UPDATE adminreg SET 

              lastname='$lname',

              firstname='$fname',

              middlename='$mname',

              email='$email',

              mobile='$mobile',

               username='$username'

              WHERE id='$id'";

 if ($conn->query($sql) === TRUE) {

  ?>

  <script>

   swal("Success!", "Information updated successfully!","success").then( () => {

     location.href = 'adminsettings.php'

 })

             

             </script>

             

            <?php

          } else {

              echo "Error updating record: " . $conn->error;

          }

             }

 

 ?>

 

             <br>

             

             <form method="post" action="">

                             <div class="form-group row">

                             <input type="hidden" name="id" id="id" value="<?php echo $row ['id']; ?> ">

                                 <label for="lname" class="col-md-4 col-form-label text-md-right">Lastname</label>

                                 <div class="col-md-6">

                                     <input type="text"  class="form-control" name="lastname" id="lastname" required value="<?php echo $row ['lastname']; ?>"/>

                                      <span class="text-danger"><?php if (isset($lname_error)) echo $lname_error; ?></span>

                                 </div>

                             </div>

 

                             <div class="form-group row">

                                 <label for="fname" class="col-md-4 col-form-label text-md-right">Firstname</label>

                                 <div class="col-md-6">

                                     <input type="text" class="form-control" name="firstname" id="firstname" value="<?php echo $row ['firstname']; ?> " required/>

                                      <span class="text-danger"><?php if (isset($fname_error)) echo $fname_error; ?></span>

                                 </div>

                             </div>

 

                             <div class="form-group row">

                                 <label for="mname" class="col-md-4 col-form-label text-md-right">Middlename</label>

                                 <div class="col-md-6">

                                     <input type="text"  class="form-control" name="middlename" id="middlename" value="<?php echo $row ['middlename']; ?> " required/>

                                     <span class="text-danger"><?php if (isset($mname_error)) echo $mname_error; ?></span>

                                 </div>

                             </div>

 

                             <div class="form-group row">

                                 <label for="email" class="col-md-4 col-form-label text-md-right">Email</label>

                                 <div class="col-md-6">

                                     <input type="email"  class="form-control" name="email" id="email" value="<?php echo $row ['email']; ?> " required/>

                                     <span class="text-danger"><?php if (isset($email_error)) echo $email_error; ?></span>

                                 </div>

                             </div>

 

                              <div class="form-group row">

                                 <label for="mobile" class="col-md-4 col-form-label text-md-right">Mobile No.</label>

                                 <div class="col-md-6">

                                     <input type="text"  class="form-control" name="mobile" id="mobile" maxlength="11" value="<?php echo $row ['mobile']; ?> " required/>

                                      <span class="text-danger"><?php if (isset($mobile_error)) echo $mobile_error; ?></span>

                                 </div>

                             </div>

                           

 

                             <div class="form-group row">

                                 <label for="username" class="col-md-4 col-form-label text-md-right">Username</label>

                                 <div class="col-md-6">

                                     <input type="text"  class="form-control" name="username" id="username" value="<?php echo $row ['username']; ?> " required/>

                                 </div>

                             </div>



                  

 

                             <div class="col-md-6 offset-md-4">

                                 <input type="submit" name= "update" value="Update" class="btn btn-primary btn-block">

                                 <br>

                           

                                 </div>

                                 

                                 </form>

                                 <?php

         }

         ?>

        

    



    



      </div>

      </div>

      </div>

      </div>

      <!-- End of Main Content -->

      <?php include '../../db.php'; 



$query="SELECT * from tblcontent";

$result= mysqli_query($conn,$query);

while($row = mysqli_fetch_assoc($result))

{



    $title = $row['title'];

    

    }

?>

      <!-- Footer -->

      <footer class="sticky-footer bg-white">

        <div class="container my-auto">

          <div class="copyright text-center my-auto">

          <span class="copyright">Copyright &copy; <span id="year"></span>  <?php echo $title; ?></span>

          </div>

        </div>

      </footer>

      <!-- End of Footer -->



    </div>

    <!-- End of Content Wrapper -->



  </div>

  <!-- End of Page Wrapper -->



  <!-- Scroll to Top Button-->

  <a class="scroll-to-top rounded" href="#page-top">

    <i class="fas fa-angle-up"></i>

  </a>



  <!-- Logout Modal-->

  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

    <div class="modal-dialog" role="document">

      <div class="modal-content">

        <div class="modal-header">

          <h5 class="modal-title" id="exampleModalLabel">Confirmation</h5>

          <button class="close" type="button" data-dismiss="modal" aria-label="Close">

            <span aria-hidden="true">×</span>

          </button>

        </div>

        <form action="logout.php" method="post">

        <div class="modal-body">Are you sure you want to logout?</div>

        <div class="modal-footer">

          <button class="btn btn-danger" type="button" data-dismiss="modal">Cancel</button>

          <input type="submit" name="Login" class="btn btn-success" value="Logout">  

        </div>

      </div>

    </div>

  </div>

</form>



  

<!-- Bootstrap core JavaScript-->

<script src="../../vendor/jquery/jquery.min.js"></script>

  <script src="../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>



  <script>

    document.getElementById("year").innerHTML = new Date().getFullYear();

</script>



  <!-- Core plugin JavaScript-->

  <script src="../../vendor/jquery-easing/jquery.easing.min.js"></script>



  <!-- Custom scripts for all pages-->

  <script src="../../js/sb-admin-2.min.js"></script>



  <!-- Page level plugins -->

  <script src=../../vendor/datatables/jquery.dataTables.min.js"></script>

  <script src="../../vendor/datatables/dataTables.bootstrap4.min.js"></script>



  <!-- Page level custom scripts -->

  <script src="../../js/demo/datatables-demo.js"></script>





</body>



</html>

