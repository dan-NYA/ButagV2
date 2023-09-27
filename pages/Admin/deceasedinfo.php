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

<?php
// Assuming you have a database connection established
$existingGraves = []; // An array to store the existing grave numbers from the database

// Retrieve existing grave numbers from the database
$query = "SELECT grave FROM tbldeceased";
$result = mysqli_query($conn, $query);
if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        $existingGraves[] = $row['grave'];
    }
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

  <title><?php echo $nav; ?> Deceased Information</title>



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



      <li class="nav-item active">

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



        <div class="card shadow mb-4">

            <div class="card-header py-3">

              <h6 class="m-0 font-weight-bold text-primary">Deceased Information</h6>

            </div>

            <div class="card-body">

            

            <button class='btn btn-raised btn-primary addbtn' style="float: left;"><i class="fas fa-plus"></i> Add Deceased Person</button>
<br><br>
                              

              <div class="table-responsive">

                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                  <thead>

                    <tr>

                      <th>ID </th>

                    <th>Year Died </th>

                    <th>Name </th>
                    
                    <th>Gender </th>
                    
                    <th>Age </th>
                    
                    <th>Date of Birth </th>

                    <th>Relatives Name </th>

                    <th>Section</th>

                    <th>Lot</th>

                    <th>Grave</th>

                    <th>Rented Date</th>

                    <th>Expiration Date</th>

                    <th>Action</th>

                    </tr>

                  </thead>

                
                  <tbody>

                  <?php

                                require_once "../../db.php";

                                $sql = "SELECT * FROM tbldeceased";

                                $result = $conn->query($sql);

                                if (!empty($result) && $result->num_rows > 0) {

               

                        while($row = $result->fetch_assoc()) {

                            

                                     

                            $id= $row['id'];
                            
                            $date = date('F j, Y', strtotime($row['date']));

                            $name= $row['name'] ;

                            $gender= $row['gender'] ;

                            $age= $row['age'];

                            $date_of_birth = date('F j, Y', strtotime($row['date_of_birth']));
                           
                            $relatives_name= $row['relatives_name'];

                            $section= $row['section'];

                            $lot= $row['lot'];

                            $grave= $row['grave'];

                            $startDate = date('F j, Y', strtotime($row['startDate']));
                           

                            $expiredDate    = date('F j, Y', strtotime($row['expiredDate']));
                        

                                      ?>

                      <td><?php echo  $id ?></td>

                      <td><?php echo  $date ?></td>

                      <td><?php echo  $name ?></td>
                      
                      <td><?php echo  $gender ?></td>

                      <td><?php echo  $age ?></td>

                      <td><?php echo  $date_of_birth ?></td>

                      <td><?php echo  $relatives_name ?></td>

                      <td><?php echo  $section ?></td>

                      <td><?php echo  $lot ?></td>

                      <td><?php echo  $grave ?></td>

                      <td><?php echo  $startDate ?></td>

                      <td><?php echo  $expiredDate ?></td>
                  

                      <td>

                    

                            <button type='button' class='btn btn-warning btn-sm editbtn'><i class="fas fa-edit"></i> Edit</button>

                  

                      

                            <button type='button' class='btn btn-danger btn-sm archivebtn'><i class="fas fa-archive"></i> Archive</button>

                    

                      </td>

                      </tr>

           

           <?php }?>

         </tbody>

  

           <?php } else { echo "No record found"; }?>

 

   </table>

               </div>

              

           </div>

     

         </div>



     

      

  

         <div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

  <div class="modal-dialog" role="document">

    <div class="modal-content">

      <div class="modal-header">

        <h5 class="modal-title" id="exampleModalLabel">Edit Deceased Person Information</h5>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">

          <span aria-hidden="true">&times;</span>

        </button>

      </div>

      <div class="modal-body">

   

      <form method="POST" action="">

    

    <input type="hidden" id="uid" name="uid" class="form-control">


  <div class="form-group">

    <label for="date">Year Died</label>

    <input type="date" id="inputDate" name="inputDate"  class="form-control"required>

</div>

  <div class="form-group">

    <label for="name">Name</label>

    <input type="text" onkeypress='return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode == 32))' class="form-control" name="name" id="name" aria-describedby="name"  required>

  </div>


  <div class="form-group">
    <label for="gender">Gender</label>
    <select class="form-control" name="gender" id="gender">
        <option value="Male">Male</option>
        <option value="Female">Female</option>
        <option value="Other">Other</option>
    </select>
</div>


  <div class="form-group">
    <label for="age">Age</label>
    <input type="number" class="form-control" name="age" id="age" placeholder="Age">
  </div>

  <div class="form-group">
    <label for="dateOfBirth">Date of Birth</label>
    <input type="date" id="dateOfBirth" name="dateOfBirth" class="form-control">
  </div>

  <div class="form-group">
    <label for="relativeName">Closest Relative or Parent's Name</label>
    <input type="text" class="form-control" name="relativeName" id="relativeName" placeholder="Relative or Parent's Name">
  </div>



  <div class="form-group">

    <label for="section">Section</label>

    <input type="text" class="form-control" name="section" id="section" aria-describedby="section" >

  </div>



  <div class="form-group">

    <label for="lot">Lot</label>

    <input type="text" class="form-control" name="lot" id="lot" aria-describedby="lot">

  </div>

  <div class="form-group">
    <label for="grave">Grave</label>
    <select class="form-control" name="grave" id="grave" aria-describedby="grave">
    <!-- <option id="graveOption"></option> -->
    <!-- <option value ="">1</option> -->

    <?php
    for($i = 1; $i <= 20; $i++) {
       
    if (!in_array($i, $existingGraves)) {
        echo '<option value="' . $i . '">' . $i . '</option>';
    }
  }
?>


</select>
</div>

<script>
function editUser(userId) {
  // Make an AJAX request to pass the user ID to the PHP script
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      // Display the response (grave number) in a suitable location on your page
      document.getElementById("graveNumber").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "get_grave_number.php?userId=" + userId, true);
  xhttp.send();
}
</script>




  <div class="form-group">

    <label for="date">Rent Date</label>

    <input type="date" id="startDate" name="start_date"  class="form-control"required>
    
</div>
<div class="form-group">

<label for="date">Expiration Date</label>

<input type="date" id="expiredDate" name="end_date"  class="form-control"required>

</div>


      </div>

      <div class="modal-footer">

      <button type="submit" name="update" id="update" class="btn btn-success" value="update">Update</button>

        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>

      </div>

      

    </div>

  </div>

</div>

</form>



<div class="modal fade" id="addmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

  <div class="modal-dialog" role="document">

    <div class="modal-content">

      <div class="modal-header">

        <h5 class="modal-title" id="exampleModalLabel">Add Deceased Person Information</h5>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">

          <span aria-hidden="true">&times;</span>

        </button>

      </div>

      <div class="modal-body">

   

      <form method="POST" action="">

    

    <input type="hidden" id="id" name="id" class="form-control">

    

  <div class="form-group">

    <label for="date">Year Died</label>

    <input type="date" id="inputDate" name="inputDate"  class="form-control"required>

</div>

  <div class="form-group">

    <label for="name">Name</label>

    <input type="text" onkeypress='return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode == 32) || (event.charCode == 44))' class="form-control" name="name" id="name" aria-describedby="name" placeholder="Surname Firstname Middle Initial" required>

  </div>

  <div class="form-group">
    <label for="gender">Gender</label>
    <select class="form-control" name="gender" id="gender">
        <option value="Male">Male</option>
        <option value="Female">Female</option>
        <option value="Other">Other</option>
    </select>
</div>

  <div class="form-group">
    <label for="age">Age</label>
    <input type="number" class="form-control" name="age" id="age" placeholder="Age">
  </div>

  <div class="form-group">
    <label for="dateOfBirth">Date of Birth</label>
    <input type="date" id="dateOfBirth" name="dateOfBirth" class="form-control">
  </div>

  <div class="form-group">
    <label for="relativeName">Closest Relative or Parent's Name</label>
    <input type="text" class="form-control" name="relativeName" id="relativeName" placeholder="Relative or Parent's Name">
  </div>



  <div class="form-group">

    <label for="section">Section</label>

    <input type="text" class="form-control" name="section" id="section" aria-describedby="section" placeholder="Section">

  </div>



  <div class="form-group">

    <label for="lot">Lot</label>

    <input type="text" class="form-control" name="lot" id="lot" aria-describedby="lot" placeholder="Lot">

  </div>



  <div class="form-group">
    <label for="grave">Grave</label>
    <select class="form-control" name="grave" id="grave" aria-describedby="grave">
        <?php for ($i = 1; $i <= 20; $i++) {
            if (!in_array($i, $existingGraves)) {
                echo '<option value="' . $i . '">' . $i . '</option>';
            }
        } ?>
    </select>
</div>  

  <div class="form-group">

    <label for="start-date">Rent Date</label>

    <input type="date" id="start-date" name="start_date"  class="form-control"required>

</div>

<div class="date-input">
                <label for="years">Number of Years:</label>
                <select id="years" name="selected_years">
                    <option value="5" selected>5 years</option>
                    <option value="10">10 years</option>
                    <option value="15">15 years</option>
                    <option value="20">20 years</option>
                    <option value="25">25 years</option>
                    <option value="30">30 years</option>
                </select>
            </div>

            <div class="date-result">
    <p id="end-date"></p>
    <input type="hidden" id="end-date-input" name="end_date">
</div>


      </div>
      <input type="hidden" name="submission_datetime" value="<?php echo date('Y-m-d H:i:s'); ?>">

      <div class="modal-footer">

      <button type="submit" name="insert" id="insert" class="btn btn-success" value="submit">Submit</button>

        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>

      </div>

      

    </div>

  </div>

</div>

</form>
<script>
        document.addEventListener("DOMContentLoaded", function () {
            const startDateInput = document.getElementById("start-date");
            const yearsSelect = document.getElementById("years");
            const endDateDisplay = document.getElementById("end-date");

            // Set the default value of the years select to 5
            yearsSelect.value = "5";

            // Function to calculate the end date
            function calculateEndDate() {
                const startDate = new Date(startDateInput.value);
                const selectedYears = parseInt(yearsSelect.value);

                if (!isNaN(startDate.getTime()) && selectedYears > 0) {
                    const endDate = new Date(startDate);
                    endDate.setFullYear(startDate.getFullYear() + selectedYears);

                    const year = endDate.getFullYear();
                    const month = (endDate.getMonth() + 1).toString().padStart(2, "0");
                    const day = endDate.getDate().toString().padStart(2, "0");

                    const formattedEndDate = `${year}-${month}-${day}`; // Format as YYYY-MM-DD
                    endDateDisplay.textContent = `End Date: ${formattedEndDate}`;

                    // Set the value of the hidden input field with the calculated end_date
                    document.getElementById("end-date-input").value = formattedEndDate;
                } else {
                    endDateDisplay.textContent = "Please enter a valid start date.";
                }
            }

            // Add an event listener to the "start-date" input element
            startDateInput.addEventListener("change", calculateEndDate);

            // Add an event listener to the "years" select element
            yearsSelect.addEventListener("change", calculateEndDate);

            // Add an event listener to the "Insert Data" button
            document.getElementById("insert").addEventListener("click", function () {
                // Call the function to calculate the end date
                calculateEndDate();

                // Manually submit the form
                document.querySelector("form").submit();
            });

            // Trigger the initial calculation when the page loads
            calculateEndDate();
        });
    </script>


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

    



      

      <!-- End of Main Content -->

      

      <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

      <?php



if(isset($_POST['insert'])){

  $id = $_POST['id'];

  $inputDate = $_POST['inputDate'];

  $name = $_POST['name'];
  $gender = $_POST['gender'];
  $age = $_POST['age'];
  $dateOfBirth = $_POST['dateOfBirth'];
  $relativeName = $_POST['relativeName'];

  $section = $_POST['section'];
  

  $lot = $_POST['lot'];

  $grave = $_POST['grave'];

  $startDate= $_POST['start_date'];

  $expiredDate= $_POST['end_date'];

  $submissionDatetime = $_POST['submission_datetime'];


  // Set the default value for imagepath
  $imagepath = 'mapping/assets/img/grave_img/noimage.png';
  
  $dates = ['inputDate', 'start_date', 'end_date'];

  foreach ($dates as $date) {
    $dateTime = DateTime::createFromFormat('Y-m-d', $_POST[$date]);
    if (!$dateTime || $dateTime->format('Y-m-d') !== $_POST[$date]) {
      die('Invalid date format for ' . $date);
    }
  }
  
  // Continue with the rest of your code for storing the dates in the database
  

  $sql = "INSERT INTO tbldeceased (id, date, name, section, lot, grave, imagepath, startDate, expiredDate,gender,age,registration_date,date_of_birth,relatives_name) VALUES ('$id', '$inputDate', '$name', '$section', '$lot', '$grave', '$imagepath', '$startDate', '$expiredDate', '$gender', '$age','$submissionDatetime' ,'$dateOfBirth', '$relativeName')";
  if ($conn->query($sql) === TRUE) {

    ?>

    <script>

     swal("Success!", "Information added successfully!","success").then( () => {

       location.href = 'deceasedinfo.php'

   })

               

               </script>

               

              <?php

  } else {

      echo "Error inserting record: " . $conn->error;

  }

}

?>

<?php

        if(isset($_POST['update'])){

          $id = $_POST['uid'];


          $inputDate = $_POST['inputDate'];
        
          $name = $_POST['name'];

          $gender = $_POST['gender'];
          $age = $_POST['age'];
          $dateOfBirth = $_POST['dateOfBirth'];
          $relativeName = $_POST['relativeName'];
        
          $section = $_POST['section'];
          
          $lot = $_POST['lot'];
        
          $grave = $_POST['grave'];
        
          $startDate= $_POST['start_date'];
        
          $expiredDate= $_POST['end_date'];
          
          $sql = "UPDATE tbldeceased SET 

              date='$inputDate',

              name='$name',
        
              section='$section',

              lot='$lot',

              grave='$grave',

              startDate='$startDate',

              expiredDate='$expiredDate',

              gender='$gender',
              
              age='$age',
              
              date_of_birth='$dateOfBirth',
              
              relatives_name='$relativeName'

              WHERE id='$id' ";

          if ($conn->query($sql) === TRUE) {

           ?>

 <script>

  swal("Success!", "Information updated successfully!","success").then( () => {

    location.href = 'deceasedinfo.php'

})

            

            </script>

            

           <?php

             

          } else {

              echo "Error updating record: " . $conn->error;

          }

        }

?>

<?php

        if(isset($_POST['archive'])){

          $did = $_POST['did'];


        

        $query = "SELECT * FROM tbldeceased WHERE id='$did'";

        $result = mysqli_query($conn,$query);

        while($fetch = mysqli_fetch_array($result)){

          if($fetch['id'] === $did){

            mysqli_query($conn, "INSERT INTO archivedeceased VALUE ('','$fetch[date]','$fetch[name]','$fetch[section]','$fetch[lot]','$fetch[grave]','$fetch[startDate]','$fetch[expiredDate]','$fetch[gender]','$fetch[age]','$fetch[registration_date]','$fetch[date_of_birth]','$fetch[relatives_name]')") or die(mysqli_error());

            mysqli_query($conn, "DELETE FROM tbldeceased WHERE id = '$fetch[id]'") or die(mysqli_error());

           ?>

           <script>

  swal("Success!", "Information archived successfully!","success").then( () => {

    location.href = 'deceasedinfo.php'

})

            

            </script>

            

           <?php

           

          }

          }

      } 

  ?>

  </div>

  </div>

                  

                  </div>

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

  </div>

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

<?php
require("../../db.php");
$q = "SELECT firstname, lastname FROM adminreg WHERE username='".$_SESSION["admin"]."'";
$r = mysqli_query($conn,$q);
$a = mysqli_fetch_assoc($r);

?>

  

<!-- Bootstrap core JavaScript-->

<script src="../../vendor/jquery/jquery.min.js"></script>

  <script src="../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>



  <script>
// Prevent form submission
var inputDate = document.getElementById("inputDate").value;
var startDate = document.getElementById("startDate").value;
var expiredDate = document.getElementById("expiredDate").value;

// Make an AJAX request to store the dates in the database
var xhr = new XMLHttpRequest();
xhr.open("POST", "", true);
xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
xhr.onreadystatechange = function() {
  if (xhr.readyState === 4 && xhr.status === 200) {
    // Dates stored successfully, calculate the number of years and create the graph
    var currentDate = new Date();
    var inputYear = new Date(inputDate).getFullYear();
    var startYear = new Date(startDate).getFullYear();
    var expiredYear = new Date(expiredDate).getFullYear();
    var currentYear = currentDate.getFullYear();
    var yearsDifferenceInput = currentYear - inputYear;
    var yearsDifferenceStart = currentYear - startYear;
    var yearsDifferenceExpired = currentYear - expiredYear;

    createGraph(yearsDifferenceInput, yearsDifferenceStart, yearsDifferenceExpired);
  }
};
xhr.send("inputDate=" + inputDate + "&startDate=" + startDate + "&expiredDate=" + expiredDate);

</script>

 

  <script>

$(document).ready(function () {
    $('.editbtn').on('click', function () {
        $('#editmodal').modal('show');
        $tr = $(this).closest('tr');
        var data = $tr.children('td').map(function () {
            return $(this).text();
        }).get();
        console.log(data);

        // Debugging: Log the date format
        console.log("Original Date Format: " + data[1]);

        // Split the date string into day, month, and year
        var dateParts = data[1].split(" ");
        var day = dateParts[1].replace(",", ""); // Remove comma
        var month = dateParts[0]; // Month
        var year = dateParts[2]; // Year

        // Convert the month name to its numeric equivalent
        var months = {
            "January": "01",
            "February": "02",
            "March": "03",
            "April": "04",
            "May": "05",
            "June": "06",
            "July": "07",
            "August": "08",
            "September": "09",
            "October": "10",
            "November": "11",
            "December": "12"
        };
        var monthNumeric = months[month];

        // Formatted date as "yyyy-mm-dd"
        var formattedDate = year + "-" + monthNumeric + "-" + day;

        // Debugging: Log the formatted date
        console.log("Formatted Date: " + formattedDate);

        // Set the formatted date in the input fields
        $('#uid').val(data[0]);
        $('#inputDate').val(formattedDate);
        $('#name').val(data[2]);
        $('#gender').val(data[3]);
        $('#age').val(data[4]);

        // Format Date of Birth
        var dobParts = data[5].split(" ");
        var dobDay = dobParts[1].replace(",", "");
        var dobMonth = dobParts[0];
        var dobYear = dobParts[2];
        var dobMonthNumeric = months[dobMonth];
        var formattedDOB = dobYear + "-" + dobMonthNumeric + "-" + dobDay;
        $('#dateOfBirth').val(formattedDOB);

        $('#relativeName').val(data[6]);
        $('#section').val(data[7]);
        $('#lot').val(data[8]);
        $('#grave').val(data[9]);

        // Format Start Date
        var startDateParts = data[10].split(" ");
        var startDateDay = startDateParts[1].replace(",", "");
        var startDateMonth = startDateParts[0];
        var startDateYear = startDateParts[2];
        var startDateMonthNumeric = months[startDateMonth];
        var formattedStartDate = startDateYear + "-" + startDateMonthNumeric + "-" + startDateDay;
        $('#startDate').val(formattedStartDate);

        // Format Expiration Date
        var expireDateParts = data[11].split(" ");
        var expireDateDay = expireDateParts[1].replace(",", "");
        var expireDateMonth = expireDateParts[0];
        var expireDateYear = expireDateParts[2];
        var expireDateMonthNumeric = months[expireDateMonth];
        var formattedExpireDate = expireDateYear + "-" + expireDateMonthNumeric + "-" + expireDateDay;
        $('#expiredDate').val(formattedExpireDate);

        // Remove any existing selected options
        document.querySelectorAll("#grave").forEach(option => {
            option.removeAttribute("selected");
            if (option.classList.contains("to-remove")) option.remove();
        });

        // Create the dropdown selection
        let optionHtml = document.createElement("option");
        optionHtml.value = data[9];
        optionHtml.innerHTML = data[9];
        optionHtml.setAttribute("selected", "selected");
        optionHtml.classList.add("to-remove");
        optionHtml.style.display = "none";
        document.querySelector("#grave").append(optionHtml);
    });
});



        </script>



<script>

            $(document).ready(function () {

              $('.addbtn').on('click', function() {



                $('#addmodal').modal('show');



               

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

  <script src="https://cdn.datatables.net/fixedheader/3.1.8/js/dataTables.fixedHeader.min.js"></script>
  



 <script>
  $(document).ready(function() {
  var table = $('#dataTable').DataTable({
    destroy: true,
    orderCellsTop: true, // Keep the original table headers at the top
    fixedHeader: true, // Enable fixed headers
    dom: 'Bfrtip',
    stateSave: true,
    language: {
      emptyTable: 'No data available in the table',
      zeroRecords: 'No matching records found - showing all records',
    },
    buttons: [
      {
        extend: 'print',
        title: 'Butag Cemetery',
        messageTop: 'List of Deceased',
        messageBottom:
          'Prepared by: <?php date_default_timezone_set("Asia/Hong_Kong"); echo $a["firstname"] ." ". $a["lastname"] ." ". date("l, F j Y h:i:s A"); ?>',
        customize: function(win) {
          $(win.document.body)
            .css('font-size', '10pt')
            .prepend(
              '<img src="http://localhost/ButagV2/pages/Admin/BC.png" style="float:left; width:50px; height:50px; top:0; left:0;" />'
            );

          $(win.document.body)
            .find('table')
            .addClass('compact')
            .css('font-size', 'inherit');
        },
        exportOptions: {
          columns: function(idx, data, node) {
            return idx !== 12 ? true : false; // Exclude the 13th column (index 12)
          },
        },
      },
      {
        extend: 'excelHtml5',
        messageTop: 'List of Deceased',
        messageBottom:
          'Prepared by: <?php date_default_timezone_set("Asia/Hong_Kong"); echo $a["firstname"] ." ". $a["lastname"] ." ". date("l, F j Y h:i:s A"); ?>',
        exportOptions: {
          columns: function(idx, data, node) {
            return idx !== 12 ? true : false; // Exclude the 13th column (index 12)
          },
        },
      },
      {
        extend: 'pdfHtml5',
        messageTop: 'List of Deceased',
        messageBottom:
          'Prepared by: <?php date_default_timezone_set("Asia/Hong_Kong"); echo $a["firstname"] ." ". $a["lastname"] ." ". date("l, F j Y h:i:s A"); ?>',
        exportOptions: {
          columns: function(idx, data, node) {
            return idx !== 12 ? true : false; // Exclude the 13th column (index 12)
          },
        },
      },
      'colvis', // Column visibility
    ],
    columns: [
      null, // You should specify the number of columns you have here
      null,
      null,
      null,
      null,
      null,
      null,
      null,
      null,
      null,
      null,
      null,
      { visible: false } // This hides the 13th column
    ]
  });
});

 </script>



  



  <!-- Page level custom scripts -->

  <script src="../../js/demo/datatables-demo.js"></script>





</body>



</html>

