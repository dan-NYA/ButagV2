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



  <title><?php echo $nav; ?> Notification</title>







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







      <li class="nav-item active">



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







        <div class="card shadow mb-4">



            <div class="card-header py-3">



              <h6 class="m-0 font-weight-bold text-primary">Notification</h6>



            </div>



            <div class="card-body">



         


            <br>




              <div class="table-responsive">



                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">



                  <thead>



                    <tr>



                    <th>ID</th>



                    <th>Fullname </th>



                    <th>Email</th>



                    <th>Mobile</th>
                    

                    <th>Grave Assigned</th>



                    <th>Notification</th>



                    </tr>



                  </thead>



                  <tfoot>



                    <!-- <tr>



                    <th>ID</th>



                    <th>Fullname </th>



                    <th>Email</th>



                    <th>Mobile</th>


                    <th>Assigned Grave</th>

                    
                    <th>Notification</th>



                    </tr> -->



                  </tfoot>



                  <tbody>



                



                  <?php



                                require_once "../../db.php";



                                $sql = "SELECT * FROM tblregistration";



                                $result = $conn->query($sql);



                    if ($result->num_rows > 0) {



                        // output data of each row



                        while($row = $result->fetch_assoc()) {



                            



                                      $id= $row['id'];



                                      $fullname= $row['fullname'];



                                      $email= $row['email'];



                                      $mobile= $row['mobile'];


                                      $assigned_grave= $row['assigned_grave'];


                        



                                      ?>



                                      <tr>



                      <td><?php echo  $id ?></td>



                      <td><?php echo  $fullname ?></td>



                      <td><?php echo  $email ?></td>



                      <td><?php echo  $mobile ?></td>

                      <td><?php echo  $assigned_grave ?></td>


                      <td>



                   



                            <button type='button' class='btn btn-success btn-sm notifybtn'><i class="fas fa-edit"></i> Notify</button>








                            <style>
    /* Center the modal content */
    .modal-check {
      display: flex;
      align-items: center;
      justify-content: center;
      min-height: 100%;
      margin: 0;
      padding-left: 500px;
      padding-right: 500px;
    }
    
    
    /* Arrange checkboxes in two columns */
    .checkbox-columns {
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      gap: 1rem;
      max-width: 400px; /* Adjusted width */
      margin: 0 auto;
    }
    
    /* Style for separate columns */
    .column {
      grid-column: span 1;
    }
  </style>


<!-- Your content -->
<button type="button" class="btn btn-primary btn-sm assignbtn" data-toggle="modal" data-target="#graveModal">
  <i class="fas fa-check"></i> Assign Grave
</button>

<!-- Modal -->
<div class="modal fade" id="graveModal" tabindex="-1" role="dialog" aria-labelledby="graveModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="graveModalLabel">Assign Grave</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Select grave numbers:</p>
        <form class="checkbox-columns" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
          <div class="form-group column">
            <label class="form-check-label">
              <input type="checkbox" class="form-check-input" name="selected_graves[]" value="1"> Grave 1
            </label>
          </div>
          <div class="form-group column">
            <label class="form-check-label">
              <input type="checkbox" class="form-check-input" name="selected_graves[]" value="2"> Grave 2
            </label>
          </div>
          <div class="form-group column">
            <label class="form-check-label">
              <input type="checkbox" class="form-check-input" name="selected_graves[]" value="3"> Grave 3
            </label>
          </div>
          <div class="form-group column">
            <label class="form-check-label">
              <input type="checkbox" class="form-check-input" name="selected_graves[]" value="4"> Grave 4
            </label>
          </div>
          <div class="form-group column">
            <label class="form-check-label">
              <input type="checkbox" class="form-check-input" name="selected_graves[]" value="5"> Grave 5
            </label>
          </div>
          <div class="form-group column">
            <label class="form-check-label">
              <input type="checkbox" class="form-check-input" name="selected_graves[]" value="6"> Grave 6
            </label>
          </div>
          <div class="form-group column">
            <label class="form-check-label">
              <input type="checkbox" class="form-check-input" name="selected_graves[]" value="7"> Grave 7
            </label>
          </div>
          <div class="form-group column">
            <label class="form-check-label">
              <input type="checkbox" class="form-check-input" name="selected_graves[]" value="8"> Grave 8
            </label>
          </div>
          <div class="form-group column">
            <label class="form-check-label">
              <input type="checkbox" class="form-check-input" name="selected_graves[]" value="9"> Grave 9
            </label>
          </div>
          <div class="form-group column">
            <label class="form-check-label">
              <input type="checkbox" class="form-check-input" name="selected_graves[]" value="10"> Grave 10
            </label>
          </div>
          <div class="form-group column">
            <label class="form-check-label">
              <input type="checkbox" class="form-check-input" name="selected_graves[]" value="11"> Grave 11
            </label>
          </div>
          <div class="form-group column">
            <label class="form-check-label">
              <input type="checkbox" class="form-check-input" name="selected_graves[]" value="12"> Grave 12
            </label>
          </div>
          <div class="form-group column">
            <label class="form-check-label">
              <input type="checkbox" class="form-check-input" name="selected_graves[]" value="13"> Grave 13
            </label>
          </div>
          <div class="form-group column">
            <label class="form-check-label">
              <input type="checkbox" class="form-check-input" name="selected_graves[]" value="14"> Grave 14
            </label>
          </div>
          <div class="form-group column">
            <label class="form-check-label">
              <input type="checkbox" class="form-check-input" name="selected_graves[]" value="15"> Grave 15
            </label>
          </div>
          <div class="form-group column">
            <label class="form-check-label">
              <input type="checkbox" class="form-check-input" name="selected_graves[]" value="16"> Grave 16
            </label>
          </div>
          <div class="form-group column">
            <label class="form-check-label">
              <input type="checkbox" class="form-check-input" name="selected_graves[]" value="17"> Grave 17
            </label>
          </div>
          <div class="form-group column">
            <label class="form-check-label">
              <input type="checkbox" class="form-check-input" name="selected_graves[]" value="18"> Grave 18
            </label>
          </div>
          <div class="form-group column">
            <label class="form-check-label">
              <input type="checkbox" class="form-check-input" name="selected_graves[]" value="19"> Grave 19
            </label>
          </div>
          <div class="form-group column">
            <label class="form-check-label">
              <input type="checkbox" class="form-check-input" name="selected_graves[]" value="20"> Grave 20
            </label>
          </div>
          <!-- Add more checkboxes for other graves -->
          <div class="modal-footer">
            <input type="hidden" name="id" id="id" value="">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="assign" class="btn btn-primary" value="assign">Assign</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['assign'])) {
    // Your database connection and update code here
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "db_butagfixed";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $id = $_POST['id'];
    $selectedGraves = isset($_POST['selected_graves']) ? $_POST['selected_graves'] : array();
    $assignedGraves = implode(",", $selectedGraves); 

    $sql = "UPDATE tblregistration SET assigned_grave='$assignedGraves' WHERE id='$id'";
    
    if ($conn->query($sql) === TRUE) {
        echo '<script>
            alert("Grave assigned successfully!");
            window.location.href = "notification.php";
        </script>';
    } else {
        echo "Error updating record: " . $conn->error;
    }

    $conn->close();
}
?>

<!-- Include jQuery and Bootstrap JS dependencies here -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
$(document).ready(function () {
  $('.assignbtn').on('click', function () {
    $tr = $(this).closest('tr');
    var data = $tr.children('td').map(function () {
      return $(this).text();
    }).get();
    $('#id').val(data[0]);

    $('#graveModal').modal('show');
  });
});
</script>
                      </td>



                        </tr>



           



            <?php }?>



          </tbody>



   



            <?php } else { echo "No record found"; }?>



  



    </table>



                </div>



               



            </div>



      



          </div>



        







<div class="modal fade" id="notifmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">



  <div class="modal-dialog" role="document">



    <div class="modal-content">



      <div class="modal-header">



        <h5 class="modal-title" id="exampleModalLabel">EMAIL NOTIFICATION</h5>



        <button type="button" class="close" data-dismiss="modal" aria-label="Close">



          <span aria-hidden="true">&times;</span>



        </button>



      </div>



      <div class="modal-body">



      <form method="POST" action="">



      <input type="hidden" name="id" id="id">



   
<div class="form-group">
  <label for="cnumber">Email</label>
  <input type="email" id="cnumber" class="form-control" name="cnumber" maxlength="50" required>
</div>


<div class="form-group">

    <label for="grave">Grave no. </label>

    <input type="text" placeholder="1,2,3...." class="form-control" name="grave" id="grave" aria-describedby="grave" required>

</div>








      </div>



      <div class="modal-footer">



      <button type="submit" class="btn btn-success">Send</button>



        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>



      </div>



    </div>



  </div>



</div>



</form>











              <div class="modal fade" id="sendsmsmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">



  <div class="modal-dialog" role="document">



    <div class="modal-content">



      <div class="modal-header">



        <h5 class="modal-title" id="exampleModalLabel">EMAIL NOTIFICATION</h5>



        <button type="button" class="close" data-dismiss="modal" aria-label="Close">



          <span aria-hidden="true">&times;</span>



        </button>



      </div>



      <div class="modal-body">



      <form method="POST" action="">



      <input type="hidden" name="id" id="id">



 



      <div class="form-group">
  <label for="cnumber">Email</label>
  <input type="email" id="cnumber" class="form-control" name="cnumber" maxlength="50" required>
</div>



<div class="form-group">

    <label for="grave">Grave no.</label>

    <input type="text"  placeholder="1,2,3...."  class="form-control" name="grave" id="grave" aria-describedby="grave" required>

 

</div>








      </div>



      <div class="modal-footer">



      <button type="submit" id="send" name="send" class="btn btn-success">Send</button>



        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>



      </div>



    </div>



  </div>



</div>



</form> 

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<div>
<?php

$grave = $_POST['grave'] ?? 'Not Specified';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require '../../PHPMailer/src/Exception.php';
require '../../PHPMailer/src/PHPMailer.php';
require '../../PHPMailer/src/SMTP.php';


if($_POST){

  $email =  $_POST['cnumber'];
  $output = "<html>
  <head>
    <title>Butag Cemetery - Regarding Rental Payment Due Date</title>
  </head>
  <body>
    <p> This is sent to notify that you need to pay your rental (Grave no. ". $grave ." ) in two days. Kindly visit our office for further assistance. Should you have any questions or concerns, feel free to reach out to us.</p>
    <p>Thank you for your attention to this matter.</p>
    <p><em>[THIS IS AN AUTOMATED MESSAGE - PLEASE DO NOT REPLY DIRECTLY TO THIS EMAIL]</em></p>
  </body>
</html>";

$mail = new PHPMailer;


$mail->isSMTP();                                      // Set mailer to use SMTP

$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers

$mail->SMTPAuth = true;                               // Enable SMTP authentication

$mail->Username = 'reyeshachi132@gmail.com';                 // SMTP username

$mail->Password = 'iuvglpeotfcuxpot';                           // SMTP password

$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;                              // Enable TLS encryption, `ssl` also accepted

$mail->Port = 587;    



 $mail->FromName = "Butag Cemtery";

$mail->addAddress($email);     // Add a recipient


$mail->isHTML(true);    



$mail->Subject = 'BC Rental Payment Due Date';

$mail->Body    = $output;




if(!$mail->send()) {

  echo 'Message could not be sent.';

  echo 'Mailer Error: ' . $mail->ErrorInfo;

} else {

 ?>

<script>

   swal("Success!", "notification has been sent!","success").then( () => {

     location.href = ' notification.php'

 })

             

             </script>

 <?php

}



     }else{

         $errMsg='<div class="alert alert-danger">Your email address invalid!</div>';

     }

     

  

?>

<script>

window.setTimeout(function() {

    $(".alert").fadeTo(500, 0).slideUp(500, function(){

        $(this).remove(); 

    });

}, 4000);



</script>

            <div id="layoutSidenav_content">

                <main>

                    <div class="container-fluid">

                        <br>

                        <?php if(isset($errmsg)){



echo $errmsg;





}



?>







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











  <script>



            $(document).ready(function () {



              $('.notifybtn').on('click', function() {







                $('#notifmodal').modal('show')







                $tr = $(this).closest('tr');







                var data = $tr.children('td').map(function() {



                  return $(this).text();



                }).get();







                console.log(data);







                $('#id').val(data[0]);



                



                $('#cnumber').val(data[2]);


                $('#grave').val(data[4]);



              });



            });







        </script>










  <!-- Core plugin JavaScript-->



  <script src="../../vendor/jquery-easing/jquery.easing.min.js"></script>







  <!-- Custom scripts for all pages-->



  <script src="../../js/sb-admin-2.min.js"></script>







  <!-- Page level plugins -->



  <script src="../../vendor/datatables/jquery.dataTables.min.js"></script>



  <script src="../../vendor/datatables/dataTables.bootstrap4.min.js"></script>







  <!-- Page level custom scripts -->



  <script src="../../js/demo/datatables-demo.js"></script>









</body>







</html>



