<?php



     session_start();

    require_once "../../db.php";



if(!isset($_SESSION['use']))   // Checking whether the session is already there or not if 

                              // true then header redirect it to the home page directly 

 {

    header("Location: ../public/login.php");

 }

 ?>
 
<?php 



$query="SELECT * from tblcontent";

$result= mysqli_query($conn,$query);

while($row = mysqli_fetch_assoc($result))

{



    $title = $row['title'];

    $navtitle = $row['navtitle'];

    $header1 = $row['header1'];

    $description1 = $row['description1'];

    $header2 = $row['header2'];

    $description2 = $row['description2'];

    }

?>

<!DOCTYPE html>

<html lang="en">



  <head>



  <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="description" content="">

    <meta name="author" content="Template Mo">

    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>

    <link rel="shortcut icon" href="icon.ico" />

    <title><?php echo $title; ?></title>



 

    <link rel="stylesheet" type="text/css" href="../../assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="../../assets/css/font-awesome.css">

    <link rel="stylesheet" type="text/css" href="../../assets/css/templatemo-art-factory.css">

    <link rel="stylesheet" type="text/css" href="../../assets/css/owl-carousel.css">

   

        <script src='//cdnjs.cloudflare.com/ajax/libs/moment.js/2.8.3/moment.min.js'></script>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>   



    </head>

    

    <body>

    



    <div id="preloader">

        <div class="jumper">

            <div></div>

            <div></div>

            <div></div>

        </div>

    </div>  



    <header class="header-area header-sticky">

        <div class="container">

            <div class="row">

                <div class="col-12">

                    <nav class="main-nav">

           

                 

                    

                    <?php include '../../db.php'; 



$query="SELECT * from tblcontent";

$result= mysqli_query($conn,$query);

while($row = mysqli_fetch_assoc($result))

{



    ?>

    <img class="pt-1 logo" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['navlogo']); ?>" style="width: 70px;"/>

   

    <?php

}

?>   
   


                    <a class="logo" href="customerdashboard.php" style="font-size:15px; margin-left: 10px;"><?php echo $navtitle; ?></a>
              

                    <ul class="nav">
                    <div class="col-md-8" style="margin-left: -160px; display: flex; justify-content: center; align-items: center;">
      <div class="table-responsive">
        
        <div class="input-group">
          <input id="search-name" class="form-control" type="search" placeholder="Enter relative's name..." name="search-name">
          <div class="input-group-append">
            <button class="btn btn-success btn-sm" id="filter-name">
              <i class="fas fa-search" aria-hidden="true"></i> Search
            </button>
            <button onClick="window.location.reload();" class="btn btn-info btn-sm" id="refresh-name">
              <i class="fa fa-refresh" aria-hidden="true"></i> Reset
            </button>
          </div>
        </div><!-- /input-group -->
      </div>
    </div>
  <li class="scroll-to-section"><a href="customerdashboard.php" class="active">Home</a></li>
  <li class="scroll-to-section"><a href="customermap.php#map_area">Map</a></li>
  <li class="scroll-to-section"><a href="customerprofile.php">Profile</a></li>
  <li class="scroll-to-section"><a href="customerlogout.php">Logout</a></li>
</ul>



                        <a class='menu-trigger'>

                            <span>Menu</span>

                        </a>

                      

                    </nav>

                </div>

            </div>

        </div>

    </header>





<br>

<br>

<br>



    <div class="welcome-area" id="welcome">



    <div class="container mt-3" style="margin-bottom: -500px;!important">
<div class="container" style="margin-top: -340px;!important">
  <div class="row">
    
  </div>
</div>



<style>
  .hidden-title {
    display: none;
  }
</style>

<h1 class="hidden-title" id="tableTitle">DECEASED PERSONS</h1>

                <table class="table table-striped " id="dataTable" width="100%" cellspacing="0">

                  <thead>

                    <tr>

                    <th>Year Died</th>

                    <th>Name of Deceased </th>

                    <th>Grave</th>

                    <th>Find</th>

                    </tr>

                  </thead>
<!-- 
                  <tfoot>

                    <tr>

                    <th>Year Died</th>

                    <th>Name of Deceased </th>

                    <th>Grave</th>

                    <th>Find</th>

                    </tr>

                  </tfoot> -->

                  <tbody>

                

                  <?php

                                require_once "../../db.php";

                                $sql = "SELECT * FROM tbldeceased";

                                $result = $conn->query($sql);

                    if ($result->num_rows > 0) {

                        // output data of each row

                        while($row = $result->fetch_assoc()) {

                            

                                      $date= $row['date'];

                                      $name= $row['name'];

                                      $grave= $row['grave'];

                                      ?>

                                      <tr>
                                        

                      <td><?php echo  $date ?></td>

                      <td><?php echo  $name ?></td>

                      <td><?php echo  $grave ?></td>

                      <td>

                   

                      <a href="customermap.php?grave=<?php echo $grave ?>#map_area" class="btn btn-success btn-sm locate" id="myButton"><i class="fas fa-map-marker-alt"></i> Locate</a>

                     

                      </td>

                        </tr>

           

            <?php }?>

          </tbody>


            <?php } else { echo "<br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp No record found"; }?>

  

    </table>
    <br><br><br>
    <div style="text-align: center;">
  <div style="display: inline-block; vertical-align: middle; width: 100%; border-top: 2px solid #333;"></div>
  <h1 style="font-size: 100px; font-weight: bold; display: inline-block; margin: 0 10px; vertical-align: middle;">ANNOUNCEMENTS</h1>
  <div style="display: inline-block; vertical-align: middle; width: 60%; border-top: 2px solid #333;"></div>
</div>

    <?php include '../../db.php'; 



$que="SELECT * from tblannouncement WHERE id = 1";

$res= mysqli_query($conn,$que);

while($data = mysqli_fetch_assoc($res))

{

  $title = $data['title'];

    $message = $data['announcement'];

    $postedby = $data['postedby'];

    echo '<div class="alert alert-info alert-dismissible fade show" role="alert" style="margin-top: 60px;!important" >';

    echo '<h4 class="alert-heading">' .$data['title']. '</h4>';

    echo '<p>' .$data['announcement']. '</p>';

    echo '<hr>';

    echo '<p class="mb-0">' .$data['postedby']. '</p>';

    // echo '<button type="button" class="close" data-dismiss="alert" aria-label="Close">';

    // echo '<span aria-hidden="true">&times;</span>';

    echo '</div>';

 }

 ?>

<?php include '../../db.php'; 



$que="SELECT * from tblannouncement WHERE id =2";

$res= mysqli_query($conn,$que);

while($data = mysqli_fetch_assoc($res))

{

  $title = $data['title'];

    $message = $data['announcement'];

    $postedby = $data['postedby'];

    

    echo '<div class="alert alert-info alert-dismissible fade show" role="alert">';

    echo '<h4 class="alert-heading">' .$data['title']. '</h4>';

    echo '<p>' .$data['announcement']. '</p>';

    echo '<hr>';

    echo '<p class="mb-0">' .$data['postedby']. '</p>';

    // echo '<button type="button" class="close" data-dismiss="alert" aria-label="Close">';

    // echo '<span aria-hidden="true">&times;</span>';

    echo '</div>';

 }

 ?>
  <?php include '../../db.php'; 



$que="SELECT * from tblannouncement WHERE id =3";

$res= mysqli_query($conn,$que);

while($data = mysqli_fetch_assoc($res))

{

  $title = $data['title'];

    $message = $data['announcement'];

    $postedby = $data['postedby'];

    

    echo '<div class="alert alert-info alert-dismissible fade show" role="alert"';

    echo '<h4 class="alert-heading">' .$data['title']. '</h4>';

    echo '<p>' .$data['announcement']. '</p>';

    echo '<hr>';

    echo '<p class="mb-0">' .$data['postedby']. '</p>';

    // echo '<button type="button" class="close" data-dismiss="alert" aria-label="Close">';

    // echo '<span aria-hidden="true">&times;</span>';

    echo '</div>';

 }

 ?>



                </div>

               
          

       



          
<br><br><br>

    

</main>


<script src="../../assets/js/jquery-2.1.0.min.js"></script>

<script>

document.getElementById("year").innerHTML = new Date().getFullYear();

</script>







<script>

$(document).ready( function () {

$('#dataTable').wrap('<div id="hide" style="display:none"/>');
// Get the element by its ID
var welcomeElement = document.getElementById("welcome");
// Create an image element
welcomeElement.style.backgroundPosition = "center top -550px"; // Adjust the top margin size as needed

var table = $('#dataTable').DataTable();

var search_val = ""




$('#filter-name').on('click', function () {

console.log('Searching for name:', $('#search-name').val());

table.column(1).search($('#search-name').val()).draw();
 // Fade in the element
 $('#hide').css('opacity', 0).css('display', 'block');
        $('#hide').animate({ opacity: 1 }, 1000); // You can adjust the duration (e.g., 300 milliseconds) to control the speed of the fade-in effect.

// Show the title when the button is pressed with a fade effect
$('#tableTitle').removeClass('hidden-title').hide().fadeIn(500); // You can adjust the duration as needed

// Wrap the annsection in a hidden #hide element
$('#annsection').wrap('<div id="hide" style="display:none"/>');

// Get the element by its ID
var welcomeElement = document.getElementById("welcome");

// Change the background image
welcomeElement.style.backgroundImage = "none";  
// Get all elements within the "main-nav" class
var mainNavElements = document.querySelectorAll(".main-nav *");

// Set the text color to black for each element
mainNavElements.forEach(function(element) {
  element.style.color = "black";
});
// Get the currently active link (you may need to adjust the logic for determining the active link)
var activeLink = document.querySelector(".main-nav a.active");

// Set the text color of the active link to orange
if (activeLink) {
  activeLink.style.color = "#f55858";
}
});

} );



</script>







<script>

$(document).ready( function () {

$('#dataTable').dataTable( {

"bFilter": false,



"bPaginate": false,

stateSave: true,

"bDestroy": true

} );

} );



</script>



<script>

$(document).ready(function() {

$('#filter-name').prop('disabled', true);



function validateNextButton() {

var buttonDisabled = $('#search-name').val().trim() === '';

$('#filter-name').prop('disabled', buttonDisabled);

}



$('#search-name').on('keyup', validateNextButton);

});

</script>

<script>

document.getElementById("year").innerHTML = new Date().getFullYear();

</script>



<script src="../../assets/js/popper.js"></script>

    <script src="../../assets/js/bootstrap.min.js"></script>

    <script src="js/sb-admin-2.min.js"></script>





    <script src="../../assets/js/owl-carousel.js"></script>

    <script src="../../assets/js/scrollreveal.min.js"></script>

    <script src="../../assets/js/waypoints.min.js"></script>

    <script src="../../assets/js/jquery.counterup.min.js"></script>

    <script src="../../assets/js/imgfix.min.js"></script> 

    

     

    



    <script src="../../assets/js/custom.js"></script>

          

    <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>

        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>

    
<script src="../../vendor/datatables/jquery.dataTables.min.js"></script>

<script src="../../vendor/datatables/dataTables.bootstrap4.min.js"></script>

  </body>

</html>