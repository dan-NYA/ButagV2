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

  <title><?php echo $nav; ?> Create Announcement</title>



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

           <div class="sidebar-brand-text mx-3"><?php echo $nav; ?></div>

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

     



   

      

       <li class="nav-item active">

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

                

                



        

             





            <!-- Nav Item - User Information -->

            <li class="nav-item dropdown no-arrow">

              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Hello, <?php echo $_SESSION['admin']; ?>!</span>



              </a>

              <!-- Dropdown - User Information -->

              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">

                <a class="dropdown-item" href="adminsettings.php">

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

            

              <?php include '../../db.php'; 



$que="SELECT * from tblannouncement WHERE id = 1";

$res= mysqli_query($conn,$que);

while($data = mysqli_fetch_assoc($res))

{

  $aid = $data['id'];

  $atitle = $data['title'];

    $amessage = $data['announcement'];

    $postedby = $data['postedby'];

}

?>

                  <div class="card shadow mb-4">

                <div class="card-header py-3">

                  <h6 class="m-0 font-weight-bold text-primary">CREATE ANNOUNCEMENT #1</h6>

                </div>

                <div class="card-body">

                <form action="" method="post" enctype="multipart/form-data">

  

                 <input type="hidden" name="aid" id="aid" value=<?php echo $aid; ?>>



                <div class="form-group row">

                 <label for="atitle">Title</label>

                 <input type="text" id="atitle" class="form-control" name="atitle" placeholder="title" value="<?php echo $atitle; ?>">

                 </div>



                 <div class="form-group row">

                 <label for="amessage">Message</label>

                 <textarea class="form-control" style="resize: none;" rows="5" id="amessage" name="amessage" ><?php echo $amessage; ?></textarea>

                 </div>



                  <div class="form-group row">

                 <label for="postedby">Posted by</label>

                 <input type="text" id="postedby" class="form-control" name="postedby" value="<?php echo $postedby; ?>" >

                 </div>

                 

    



                 <input type="submit" name= "update" id="update" value="Post Announcement" class="form-control btn btn-block btn-primary">

                 

             

                 </form>

                  </div>

                  

            

      

            </div>



            

      </div>

      <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

      <?php



require_once '../../db.php';





if (isset($_POST['update'])) {

  $aid=$_POST['aid'];

  $atitle = $_POST['atitle'];

  $amessage = $_POST['amessage'];

  $postedby = $_POST['postedby'];

 



    $sql = "UPDATE tblannouncement SET 

            title='$atitle', 

            announcement='$amessage', 

            postedby='$postedby'

            WHERE id='$aid'";

if ($conn->query($sql) === TRUE) {

  ?>

  <script>

   swal("Success!", "Announcement posted successfully!","success").then( () => {

     location.href = 'announcement.php'

 })

             

             </script>

             

            <?php

} else {

  echo "Error updating record: " . $conn->error;

}

 }

?>


<div class="container-fluid">

            

<?php include '../../db.php'; 



$que="SELECT * from tblannouncement WHERE id = 2";
$res= mysqli_query($conn,$que);

while($data = mysqli_fetch_assoc($res))

{

$aid = $data['id'];

$atitle = $data['title'];

$amessage = $data['announcement'];

$postedby = $data['postedby'];

}

?>

    <div class="card shadow mb-4">

  <div class="card-header py-3">

    <h6 class="m-0 font-weight-bold text-primary">CREATE ANNOUNCEMENT #2</h6>

  </div>

  <div class="card-body">

  <form action="" method="post" enctype="multipart/form-data">



   <input type="hidden" name="aid" id="aid" value=<?php echo $aid; ?>>



  <div class="form-group row">

   <label for="atitle">Title</label>

   <input type="text" id="atitle" class="form-control" name="atitle" placeholder="title" value="<?php echo $atitle; ?>">

   </div>



   <div class="form-group row">

   <label for="amessage">Message</label>

   <textarea class="form-control" style="resize: none;" rows="5" id="amessage" name="amessage" ><?php echo $amessage; ?></textarea>

   </div>



    <div class="form-group row">

   <label for="postedby">Posted by</label>

   <input type="text" id="postedby" class="form-control" name="postedby" value="<?php echo $postedby; ?>" >

   </div>

   





   <input type="submit" name= "update" id="update" value="Post Announcement" class="form-control btn btn-block btn-primary">

   



   </form>

    </div>

    





</div>





</div>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<?php



require_once '../../db.php';





if (isset($_POST['update'])) {

$aid=$_POST['aid'];

$atitle = $_POST['atitle'];

$amessage = $_POST['amessage'];

$postedby = $_POST['postedby'];





$sql = "UPDATE tblannouncement SET 

title='$atitle', 

announcement='$amessage', 

postedby='$postedby'

WHERE id='$aid'";

if ($conn->query($sql) === TRUE) {

?>

<script>

swal("Success!", "Announcement posted successfully!","success").then( () => {

location.href = 'announcement.php'

})



</script>



<?php

} else {

echo "Error updating record: " . $conn->error;

}

}

?>


<div class="container-fluid">

            

<?php include '../../db.php'; 



$que="SELECT * from tblannouncement WHERE id = 3";

$res= mysqli_query($conn,$que);

while($data = mysqli_fetch_assoc($res))

{

$aid = $data['id'];

$atitle = $data['title'];

$amessage = $data['announcement'];

$postedby = $data['postedby'];

}

?>

    <div class="card shadow mb-4">

  <div class="card-header py-3">

    <h6 class="m-0 font-weight-bold text-primary">CREATE ANNOUNCEMENT #3</h6>

  </div>

  <div class="card-body">

  <form action="" method="post" enctype="multipart/form-data">



   <input type="hidden" name="aid" id="aid" value=<?php echo $aid; ?>>



  <div class="form-group row">

   <label for="atitle">Title</label>

   <input type="text" id="atitle" class="form-control" name="atitle" placeholder="title" value="<?php echo $atitle; ?>">

   </div>



   <div class="form-group row">

   <label for="amessage">Message</label>

   <textarea class="form-control" style="resize: none;" rows="5" id="amessage" name="amessage" ><?php echo $amessage; ?></textarea>

   </div>



    <div class="form-group row">

   <label for="postedby">Posted by</label>

   <input type="text" id="postedby" class="form-control" name="postedby" value="<?php echo $postedby; ?>" >

   </div>

   





   <input type="submit" name= "update" id="update" value="Post Announcement" class="form-control btn btn-block btn-primary">

   



   </form>

    </div>

    





</div>





</div>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<?php



require_once '../../db.php';





if (isset($_POST['update'])) {

$aid=$_POST['aid'];

$atitle = $_POST['atitle'];

$amessage = $_POST['amessage'];

$postedby = $_POST['postedby'];





$sql = "UPDATE tblannouncement SET 

title='$atitle', 

announcement='$amessage', 

postedby='$postedby'

WHERE id='$aid'";

if ($conn->query($sql) === TRUE) {

?>

<script>

swal("Success!", "Announcement posted successfully!","success").then( () => {

location.href = 'announcement.php'

})



</script>



<?php

} else {

echo "Error updating record: " . $conn->error;

}

}

?>








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

  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>



  <!-- Custom scripts for all pages-->

  <script src="../../js/sb-admin-2.min.js"></script>



  <!-- Page level plugins -->

  <script src="../../vendor/datatables/jquery.dataTables.min.js"></script>

  <script src="../../vendor/datatables/dataTables.bootstrap4.min.js"></script>



  <!-- Page level custom scripts -->

  <script src="../../js/demo/datatables-demo.js"></script>





</body>



</html>

