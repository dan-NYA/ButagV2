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

  <title><?php echo $nav; ?> Customer Inquiries</title>



  <!-- Custom fonts for this template-->

  <link href="../../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">



  <!-- Custom styles for this template -->

  <link href="../../css/sb-admin-2.min.css" rel="stylesheet">



  <!-- Custom styles for this page -->

  <link href="../../vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

  <link href="https://cdn.datatables.net/buttons/1.6.4/css/buttons.dataTables.min.css" rel="stylesheet">



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



      <li class="nav-item active">

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

        <div class="card shadow mb-4">

            <div class="card-header py-3">

              <h6 class="m-0 font-weight-bold text-primary">Customer's Inquiries</h6>

            </div>

            <div class="card-body">

              <div class="table-responsive">

                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                  <thead>

                    <tr>

                    <th>ID</th>

                    <th>Email </th>

                    <th>Message </th>

                    <th>Action </th>

                    </tr>

                  </thead>

                  <!-- <tfoot>

                    <tr>

                    <th>ID</th>

                    <th>Email </th>

                    <th>Message </th>

                    <th>Action </th>

                    </tr>

                  </tfoot> -->

                  <tbody>

                

                  <?php

                                require_once "../../db.php";

                                $sql = "SELECT * FROM tblcontact";

                                $result = $conn->query($sql);

                    if ($result->num_rows > 0) {

                        // output data of each row

                        while($row = $result->fetch_assoc()) {

                            

                                      $id= $row['id'];

                                      $email= $row['email'];

                                      $message= $row['message'] ;

                                      ?>

                                      <tr>

                      <td><?php echo  $id ?></td>

                      <td><?php echo  $email ?></td>

                      <td><?php echo  $message ?></td>

                      <td>

                   

                   <button type='button' class='btn btn-info emailbtn'><i class="fas fa-envelope"></i> Email</button>

                   <button type='button' class='btn btn-danger archivebtn'><i class="fas fa-archive"></i> Archive</button>

             </td>

                        </tr>

           

            <?php }?>

          </tbody>

   

            <?php } else { echo "No record found"; }?>

  

    </table>

                </div>

               </div>

            </div>

       

      </div>

      </div>



      <div class="modal fade" id="emailmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

  <div class="modal-dialog" role="document">

    <div class="modal-content">

      <div class="modal-header">

        <h5 class="modal-title" id="exampleModalLabel">Email</h5>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">

          <span aria-hidden="true">&times;</span>

        </button>

      </div>

      <div class="modal-body">

      <form method="POST" action="">

      <input type="hidden" name="id" id="id">

     

<div class="form-group">

    <label for="email">Email</label>

    <input type="email" class="form-control" name="email" id="email" readonly>

</div>



<div class="form-group">

    <label for="msg">Message</label>

    <textarea class="form-control" id="message" rows="6" name="message">Thank you for sending your inquiries/questions.</textarea>

  </div>



      </div>

      <div class="modal-footer">

      <button type="submit" class="btn btn-success" name="submit" id="submit">Send</button>

        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>

      </div>

    </div>

  </div>

</div>

</form>



<div id="archivemodal" class="modal fade" role="dialog">

                        <div class="modal-dialog">

                            <form method="post">

                                <!-- Modal content-->

                              

                                <div class="modal-content">

                                    <div class="modal-header">

                                    <h4 class="modal-title">Archive</h4>

                                        <button type="button" class="close" data-dismiss="modal">&times;</button>

                                        

                                    </div>

                                    <div class="modal-body">

                               

                                        <input type="hidden" name="did" id="did">

                                        <div class="alert alert-danger">Are you sure you want to archive it? <strong>

                                          </div>

                                         

                                        <div class="modal-footer">

                                       

                                            <button type="submit" name="archive" id="archive" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> YES</button>

                                            <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle"></span> NO</button>

                                        </div>

                                    </div>

                                </div>

                                </div>

                        </div>

                             

      <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

                        <?php

        if(isset($_POST['archive'])){

          $did = $_POST['did'];

        

        $query = "SELECT * FROM tblcontact WHERE id='$did'";

        $result = mysqli_query($conn,$query);

        while($fetch = mysqli_fetch_array($result)){

          if($fetch['id'] === $did){

            mysqli_query($conn, "INSERT INTO archivecontact VALUE ('','$fetch[email]','$fetch[message]')") or die(mysqli_error());

            mysqli_query($conn, "DELETE FROM tblcontact WHERE id = '$fetch[id]'") or die(mysqli_error());

           ?>

           <script>

  swal("Success!", "Inquiries/Questions archived successfully!","success").then( () => {

    location.href = 'inquiries.php'

})

            

            </script>

            

           <?php

           

          }

          }

      } 

  ?>

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

            $(document).ready(function () {

              $('.emailbtn').on('click', function() {



                $('#emailmodal').modal('show');



                $tr = $(this).closest('tr');



                var data = $tr.children('td').map(function() {

                  return $(this).text();

                }).get();



                console.log(data);



                $('#id').val(data[0]);

                $('#email').val(data[1]);

              });

            });



        </script>



<script>

            $(document).ready(function () {

              $('.archivebtn').on('click', function() {



                $('#archivemodal').modal('show');

                $tr = $(this).closest('tr');



              var data = $tr.children('td').map(function() {

                return $(this).text();

              }).get();



              console.log(data);



              $('#did').val(data[0]);

             

                });

               

              });



        </script>

   <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;


require '../../PHPMailer/src/Exception.php';
require '../../PHPMailer/src/PHPMailer.php';
require '../../PHPMailer/src/SMTP.php';




 

   

    if (isset($_POST['submit'])) {

       

  $email = $_POST['email'];

  $output = $_POST['message'];





        $mail = new PHPMailer;



//$mail->SMTPDebug = 3;                               // Enable verbose debug output




$mail->isSMTP();                                     // Set mailer to use SMTP

$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers

$mail->SMTPAuth = true;          // Enable SMTP authentication

$mail->Username = 'reyeshachi132@gmail.com';                 // SMTP username

$mail->Password = 'iuvglpeotfcuxpot';                         // SMTP password

$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;                             // Enable TLS encryption, `ssl` also accepted

$mail->Port = 587;    

                                // TCP port to connect to


 $mail->FromName = "Butag Cemtery";

$mail->addAddress($email);     // Add a recipient



                              
$mail->isHTML(true);    



$mail->Subject = 'BC INQUIRIES/QUESTIONS';

$mail->Body    = $output;





if(!$mail->send()) {

    echo 'Message could not be sent.';

    echo 'Mailer Error: ' . $mail->ErrorInfo;

} else{

 ?>

<script>

     swal("Success!", "Email sent successfully!","success").then( () => {

       location.href = 'inquiries.php'

   })

               

               </script>

 <?php



}

       }

    

?>





  <!-- Core plugin JavaScript-->

  <script src="../../vendor/jquery-easing/jquery.easing.min.js"></script>



  <!-- Custom scripts for all pages-->

  <script src="../../js/sb-admin-2.min.js"></script>



  <!-- Page level plugins -->

  <script src="../../vendor/datatables/jquery.dataTables.min.js"></script>

  <script src="../../vendor/datatables/dataTables.bootstrap4.min.js"></script>



  <script src="https://cdn.datatables.net/buttons/1.6.4/js/dataTables.buttons.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>

  <script src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.html5.min.js"></script>

  <script src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.print.min.js"></script>

  <script src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.colVis.min.js"></script>



  <script>

    document.getElementById("year").innerHTML = new Date().getFullYear();

</script>



  <script>

$(document).ready(function() {

    $('#dataTable').DataTable( {

        dom: 'Bfrtip',

        buttons: [

            {

                extend: 'print',

                exportOptions: {

                  columns: function (idx, data, node) {
                    return idx !== 3 ? true : false;
                }

                }

            },

            {

                extend: 'excelHtml5',

                exportOptions: {

                  columns: function (idx, data, node) {
                    return idx !== 3 ? true : false;
                }

                }

            },

            {

                extend: 'pdfHtml5',

                exportOptions: {

                  columns: function (idx, data, node) {
                    return idx !== 3 ? true : false;
                }

                }

            },

            'colvis'

        ]

    } );

} );

  </script>



  <!-- Page level custom scripts -->

  <script src="../../js/demo/datatables-demo.js"></script>





</body>



</html>

