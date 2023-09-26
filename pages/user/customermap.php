<?php



     session_start();

    require_once "../../db.php";



if(!isset($_SESSION['use']))   // Checking whether the session is already there or not if 

                              // true then header redirect it to the home page directly 

 {

    header("Location: ../public/login.php");

 }

 ?>

<?php include '../../db.php'; 



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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>


    <link rel="shortcut icon" href="icon.ico" />



    <title><?php echo $title; ?></title>




    <link rel="stylesheet" type="text/css" href="../../assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="../../assets/css/font-awesome.css">

    <link rel="stylesheet" type="text/css" href="../../assets/css/templatemo-art-factory.css">

    <link rel="stylesheet" type="text/css" href="../../assets/css/owl-carousel.css">

    <!-- Custom fonts for this template-->

    <link href="../../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">



    <!-- Custom styles for this template -->

    <link href="../../css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/leaflet-sidebar-v2@3.0.0/dist/leaflet-sidebar.min.css" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">



    <!-- Custom styles for this page -->

    <link href="../../vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.7.1/leaflet.min.css" integrity="sha512-Kc2oUMHmGvCvySiFTlLhxqhe3Kj1fumvY2DdRhlzR1AFpRsNtKvP/dLywbBCiVTgn1E+L36ZTbTSGj/xBJs3qQ==" crossorigin="anonymous" />
    <!-- Leaflet JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.7.1/leaflet.min.js" integrity="sha512-z4tohFmK2QbfW8AW+fMjbkwJhU+N67zKjhd6ir/Hnd6UOtR6CYKWeNwOalO8NcTecTAY/3Pq3Jilgxmxlfdy2Q==" crossorigin="anonymous"></script>
    <!-- Your map.js file -->

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css" integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=" crossorigin="" />

  <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js" integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=" crossorigin=""></script>

    </head>
    <style>

#map {
    height: 500px;
    width: 1070px;
    position: relative;
    margin-top: -10px;
    margin-left: 10px;
    z-index: 0;
    transform: scale(1.2);
  }

  #sidebar {
  position: absolute;
  top: 0;
  right: 0;
  width: 300px; /* Adjust the width as needed */
  height: 100%aa; /* Set the height to 100% to fill the entire screen height */
  background-color: #f1f1f1;
  padding: 20px;
  display: none;
  z-index: 99999;
}


    #sidebar-title {
      margin-top: 0;
    }

    #sidebar-info {
      margin-bottom: 0;
    }

    #legend {
      margin-left: 30px;
      margin-bottom: 40px;
      position: absolute;
      bottom: 10px;
      left: 10px;
      background-color: white;
      padding: 10px;
      z-index: 9999;
    }

    .legend-icon {
      display: inline-block;
      width: 10px;
      height: 10px;
      margin-right: 5px;
    }

    .map-container {
      position: relative;
    }

    .map-overlay {
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      z-index: 1;
    }

    .sidebar-overlay {
      position: absolute;
      top: 0;
      right: 0;
      bottom: 0;
      width: 500px;
      z-index: 2;
      background-color: rgba(0, 0, 0, 0.5);
      display: none;
    }

    .sidebar-overlay.show {
      display: block;
    }
  </style>
    

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

              

                        <li class="scroll-to-section"><a href="customerdashboard.php" >Home</a></li>
                       
                        <li class="scroll-to-section"><a href="customermap.php#map_area" class="active">Map</a></li>

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



   

        <div class="header-text">

            <div class="container">

                <div class="row">

                    <div class="left-text col-lg-6 col-md-6 col-sm-12 col-xs-12" data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">

                    <center>   <h4 style ="color: #223892;"><?php echo $header1;?></h4></center>

                   

                     <br>

                     <p style=" color: #242F52; text-align:justify"><?php echo $description1;?></p>

                       

                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" data-scroll-reveal="enter right move 30px over 0.6s after 0.4s">



                    <?php include '../../db.php'; 



$query="SELECT * from tblcontent";

$result= mysqli_query($conn,$query);

while($row = mysqli_fetch_assoc($result))

{



    ?>

    <img class="rounded img-fluid d-block mx-auto" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['headerimage1']); ?>" />

    <?php

}

?>
  
                    </div>

                </div>

            </div>

        </div>



    </div>


       


<div class="container mt-3">



<br>



<section class="section" id="map_area">
<div class="container-fluid">
<div class="map-container">8
<div id="map" class="map-overlay">
      <div id="legend"></div>
  </div>
  <div id="sidebar" class="bg-light" style="margin-top: -80px;">
    <h2 id="sidebar-title"></h2>
    <img id="sidebar-image" src="" alt="Marker Image" class="img-fluid marker-image">
    <br><br>
  <p id="sidebar-dateofbirth"></p>
      <p id="sidebar-dateofdeath"></p>
      <p id="sidebar-rentdate"></p>
  <p id="sidebar-duedate"></p>
      <br>
      <form action="uploadimage.php" method="post" enctype="multipart/form-data" id="upload-form">
          <input type="file" name="fileToUpload" id="fileToUpload" style="display: none;">
          <input type="hidden" name="grave" id="graveId" value="">
      </form>
      
      <button id="getDirectionsBtn" class="btn btn-primary" style="height: 100%;">Get Directions</button>
  </div>
  <div id="sidebar-overlay" class="sidebar-overlay"></div>
</div>



</div>

  </section>        

     

      

<br>

    


<!-- 
    <footer>

        <div class="container">

            <div class="row">

                <div class="col-lg-7 col-md-12 col-sm-12">

                <p class="copyright">Copyright &copy; <span id="year"></span>  <?php echo $title; ?>

            

                </div>


            </div>

        </div>

    </footer> -->

    



    <script src="../../assets/js/jquery-2.1.0.min.js"></script>

    <script>

    document.getElementById("year").innerHTML = new Date().getFullYear();

</script>







    <script src="../../assets/js/popper.js"></script>

    <script src="../../assets/js/bootstrap.min.js"></script>











    <script src="../../assets/js/owl-carousel.js"></script>

    <script src="../../assets/js/scrollreveal.min.js"></script>

    <script src="../../assets/js/waypoints.min.js"></script>

    <script src="../../assets/js/jquery.counterup.min.js"></script>

    <script src="../../assets/js/imgfix.min.js"></script> 

    

 

    <script src="../../assets/js/custom.js"></script>

    <script src="../../vendor/datatables/jquery.dataTables.min.js"></script>

  <script src="../../vendor/datatables/dataTables.bootstrap4.min.js"></script>



  <!-- Page level custom scripts -->

  <script src="../../js/demo/datatables-demo.js"></script>





  </body>
  
  <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <!-- Leaflet and Leaflet Sidebar JS -->
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/leaflet-sidebar-v2@3.0.0/dist/leaflet-sidebar.min.js"></script>

    <?php
include '../../db.php';

// Set error reporting mode to exception
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

// Assuming you have an array of desired grave IDs
$graveIds = array(1, 2, 3, 4, 5, 6, 7, 8, 9,10,11,12,13,14,15,16,17,18,19,20);

// Initialize an empty array to store the grave data
$graveData = array();

// Query the database for each grave ID
foreach ($graveIds as $graveId) {
  try {
      $query = "SELECT * FROM tbldeceased WHERE grave = $graveId";
      $result = mysqli_query($conn, $query);
      
      // Fetch the data from the query result
      $row = mysqli_fetch_assoc($result);

      if ($row) {
          // Store the fetched data in the $graveData array
          $graveData[$graveId] = array(
              'grave' => $row['grave'],
              'name' => $row['name'],
              'date_of_birth' => $row['date_of_birth'],
              'date' => $row['date'],
              'startDate' => $row['startDate'],
              'expiredDate' => $row['expiredDate'],
              
              
            
              'imagepath' => $row['imagepath']
          );
      } else {
          // If the row is null, provide a fallback value for the grave data
          $graveData[$graveId] = array(
              'grave' => $graveId,
              'name' => 'Grave is Available',
              'date_of_birth' => '',
              'date' => 'Contact us for more information',
              'startDate' => '',
              'expiredDate' => '',
              'imagepath' => 'mapping/assets/img/grave_img/def.png'

          );
      }
  } catch (mysqli_sql_exception $e) {
      // Handle the exception here (e.g., log the error)
      // You can also provide a fallback value for the grave data if needed
      $graveData[$graveId] = array(
          'grave' => $graveId,
          'name' => 'No Deceased',
              'date_of_birth' => '',
              'date' => 'Contact us for more information',
              'startDate' => '',
              'expiredDate' => '',
          'imagepath' => 'mapping/assets/img/grave_img/def.png'
      );
  }
}

// Now you have the grave data stored in the $graveData array
// You can access individual grave data using the grave ID as the key, for example:
$grave1 = isset($graveData[1]) ? $graveData[1] : null;
$grave2 = isset($graveData[2]) ? $graveData[2] : null;
$grave3 = isset($graveData[3]) ? $graveData[3] : null;
$grave4 = isset($graveData[4]) ? $graveData[4] : null;
$grave5 = isset($graveData[5]) ? $graveData[5] : null;
$grave6 = isset($graveData[6]) ? $graveData[6] : null;
$grave7 = isset($graveData[7]) ? $graveData[7] : null;
$grave8 = isset($graveData[8]) ? $graveData[8] : null;
$grave9 = isset($graveData[9]) ? $graveData[9] : null;
$grave10 = isset($graveData[10]) ? $graveData[10] : null;
$grave11 = isset($graveData[11]) ? $graveData[11] : null;
$grave12 = isset($graveData[12]) ? $graveData[12] : null;
$grave13 = isset($graveData[13]) ? $graveData[13] : null;
$grave14 = isset($graveData[14]) ? $graveData[14] : null;
$grave15 = isset($graveData[15]) ? $graveData[15] : null;
$grave16 = isset($graveData[16]) ? $graveData[16] : null;
$grave17 = isset($graveData[17]) ? $graveData[17] : null;
$grave18 = isset($graveData[18]) ? $graveData[18] : null;
$grave19 = isset($graveData[19]) ? $graveData[19] : null;
$grave20 = isset($graveData[20]) ? $graveData[20] : null;
?>

    <script>

      // Create the legend HTML content
  var legendContent = '<h4>Legend</h4>' +
    '<div><span class="legend-icon" style="background-color: red;"></span> Occupied</div>' +
    '<div><span class="legend-icon" style="background-color: blue;"></span> Available</div>'
    +
    '<div><span class="legend-icon" style="background-color: orange;"></span> Near Expiration</div>'
    +
    '<div><span class="legend-icon" style="background-color: black;"></span> Expired</div>';

  // Set the HTML content of the legend div
  document.getElementById('legend').innerHTML = legendContent;

      // Define the image bounds and coordinates
      var imageUrl = '../../mapping/assets/img/grave_img/map-removebg.png';
      var imageBounds = [[12.63275, 123.93373], [12.63041, 123.93023]];

      // Create the map
      var map = L.map('map').setView([12.63158,123.93185], 19);

      // Add the OpenStreetMap layer
      L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 19,
      }).addTo(map);

      // Add the image overlay
      var imageOverlay = L.imageOverlay(imageUrl, imageBounds).addTo(map);

      // Define marker icons for available and occupied graves
      var availableIcon = L.icon({
        iconUrl: '../../mapping/assets/img/grave_img/avail.png',
        iconSize: [25, 25],
      });

      var occupiedIcon = L.icon({
        iconUrl: '../../mapping/assets/img/grave_img/occupied.png',
        iconSize: [25, 25],
      });
      
      var starterIcon = L.icon({
        iconUrl: '../../mapping/assets/img/grave_img/start.gif',
      iconSize: [100, 100], // Adjust the width and height of the icon
        });

      // Define the grave markers
      // Define the grave markers
// Define the grave markers
// Define the grave markers
// Define the grave markers
var startMarker = L.marker([12.63137, 123.93114], { icon: starterIcon }).addTo(map);

var grave1Icon = '<?php echo $grave1 && $grave1["name"] === "Grave is Available" ? "availableIcon" : "occupiedIcon"; ?>';
var grave2Icon = '<?php echo $grave2 && $grave2["name"] === "Grave is Available" ? "availableIcon" : "occupiedIcon"; ?>';
var grave3Icon = '<?php echo $grave3 && $grave3["name"] === "Grave is Available" ? "availableIcon" : "occupiedIcon"; ?>';
var grave4Icon = '<?php echo $grave4 && $grave4["name"] === "Grave is Available" ? "availableIcon" : "occupiedIcon"; ?>';
var grave5Icon = '<?php echo $grave5 && $grave5["name"] === "Grave is Available" ? "availableIcon" : "occupiedIcon"; ?>';
var grave6Icon = '<?php echo $grave6 && $grave6["name"] === "Grave is Available" ? "availableIcon" : "occupiedIcon"; ?>';
var grave7Icon = '<?php echo $grave7 && $grave7["name"] === "Grave is Available" ? "availableIcon" : "occupiedIcon"; ?>';
var grave8Icon = '<?php echo $grave8 && $grave8["name"] === "Grave is Available" ? "availableIcon" : "occupiedIcon"; ?>';
var grave9Icon = '<?php echo $grave9 && $grave9["name"] === "Grave is Available" ? "availableIcon" : "occupiedIcon"; ?>';
var grave10Icon = '<?php echo $grave10 && $grave10["name"] === "Grave is Available" ? "availableIcon" : "occupiedIcon"; ?>';
var grave11Icon = '<?php echo $grave11 && $grave11["name"] === "Grave is Available" ? "availableIcon" : "occupiedIcon"; ?>';
var grave12Icon = '<?php echo $grave12 && $grave12["name"] === "Grave is Available" ? "availableIcon" : "occupiedIcon"; ?>';
var grave13Icon = '<?php echo $grave13 && $grave13["name"] === "Grave is Available" ? "availableIcon" : "occupiedIcon"; ?>';
var grave14Icon = '<?php echo $grave14 && $grave14["name"] === "Grave is Available" ? "availableIcon" : "occupiedIcon"; ?>';
var grave15Icon = '<?php echo $grave15 && $grave15["name"] === "Grave is Available" ? "availableIcon" : "occupiedIcon"; ?>';
var grave16Icon = '<?php echo $grave16 && $grave16["name"] === "Grave is Available" ? "availableIcon" : "occupiedIcon"; ?>';
var grave17Icon = '<?php echo $grave17 && $grave17["name"] === "Grave is Available" ? "availableIcon" : "occupiedIcon"; ?>';
var grave18Icon = '<?php echo $grave18 && $grave18["name"] === "Grave is Available" ? "availableIcon" : "occupiedIcon"; ?>';
var grave19Icon = '<?php echo $grave19 && $grave19["name"] === "Grave is Available" ? "availableIcon" : "occupiedIcon"; ?>';
var grave20Icon = '<?php echo $grave20 && $grave20["name"] === "Grave is Available" ? "availableIcon" : "occupiedIcon"; ?>';

// Create the grave markers with the appropriate icons
var grave1 = L.marker([12.63166, 123.93184], { icon: window[grave1Icon] }).addTo(map);
var grave2 = L.marker([12.63137, 123.93158], { icon: window[grave2Icon] }).addTo(map);
var grave3 = L.marker([12.63149, 123.93184], { icon: window[grave3Icon] }).addTo(map);
var grave4 = L.marker([12.63179, 123.93194], { icon: window[grave4Icon] }).addTo(map);
var grave5 = L.marker([12.63163, 123.93162], { icon: window[grave5Icon] }).addTo(map);
var grave6 = L.marker([12.63170, 123.93210], { icon: window[grave6Icon] }).addTo(map);
var grave7 = L.marker([12.63158, 123.93200], { icon: window[grave7Icon] }).addTo(map);
var grave8 = L.marker([12.63182, 123.93174], { icon: window[grave8Icon] }).addTo(map);
var grave9 = L.marker([12.63153, 123.93192], { icon: window[grave9Icon] }).addTo(map);
var grave10 = L.marker([12.63144,123.93127], { icon: window[grave10Icon] }).addTo(map);
var grave11 = L.marker([12.63136,123.93130], { icon: window[grave11Icon] }).addTo(map);

var grave12 = L.marker([12.63154,123.93147], { icon: window[grave12Icon] }).addTo(map);

var grave13 = L.marker([12.63165,123.93196], { icon: window[grave13Icon] }).addTo(map);

var grave14 = L.marker([12.63163,123.93172], { icon: window[grave14Icon] }).addTo(map);

var grave15 = L.marker([12.63173,123.93164], { icon: window[grave15Icon] }).addTo(map);

var grave16 = L.marker([12.63138,123.93144], { icon: window[grave16Icon] }).addTo(map);

var grave17 = L.marker([12.63149,123.93136], { icon: window[grave17Icon] }).addTo(map);

var grave18 = L.marker([12.63179,123.93183], { icon: window[grave18Icon] }).addTo(map);

var grave19 = L.marker([12.63151,123.93158], { icon: window[grave19Icon] }).addTo(map);

var grave20 = L.marker([12.63145,123.93171], { icon: window[grave20Icon] }).addTo(map);

// Assuming graves 4 to 9 are stored in an array
var graves = [grave1, grave2, grave3, grave4, grave5, grave6, grave7, grave8, grave9, grave10, grave11, grave12, grave13, grave14, grave15, grave16, grave17, grave18, grave19, grave20];

// Assuming you have an array of expiration dates for graves 4 to 9
var expirationDates = [
  '<?php echo $grave1['expiredDate']; ?>',
  '<?php echo $grave2['expiredDate']; ?>',
  '<?php echo $grave3['expiredDate']; ?>',
  '<?php echo $grave4['expiredDate']; ?>',
  '<?php echo $grave5['expiredDate']; ?>',
  '<?php echo $grave6['expiredDate']; ?>',
  '<?php echo $grave7['expiredDate']; ?>',
  '<?php echo $grave8['expiredDate']; ?>',
  '<?php echo $grave9['expiredDate']; ?>',
  '<?php echo $grave10['expiredDate']; ?>',
  '<?php echo $grave11['expiredDate']; ?>',
  '<?php echo $grave12['expiredDate']; ?>',
  '<?php echo $grave13['expiredDate']; ?>',
  '<?php echo $grave14['expiredDate']; ?>',
  '<?php echo $grave15['expiredDate']; ?>',
  '<?php echo $grave16['expiredDate']; ?>',
  '<?php echo $grave17['expiredDate']; ?>',
  '<?php echo $grave18['expiredDate']; ?>',
  '<?php echo $grave19['expiredDate']; ?>',
  '<?php echo $grave20['expiredDate']; ?>'
];

for (var i = 0; i < graves.length; i++) {
  var currentDate = new Date();
  currentDate.setDate(currentDate.getDate() + 3);

  var year = currentDate.getFullYear();
  var month = (currentDate.getMonth() + 1).toString().padStart(2, '0');
  var day = currentDate.getDate().toString().padStart(2, '0');
  var formattedDate = year + '-' + month + '-' + day;

  var currentDate1 = new Date();
  currentDate1.setDate(currentDate1.getDate() + 2);

  var year1 = currentDate1.getFullYear();
  var month1 = (currentDate1.getMonth() + 1).toString().padStart(2, '0');
  var day1 = currentDate1.getDate().toString().padStart(2, '0');
  var formattedDate1 = year1 + '-' + month1 + '-' + day1;

  var currentDate2 = new Date();
  currentDate2.setDate(currentDate2.getDate() + 1);

  var year2 = currentDate2.getFullYear();
  var month2 = (currentDate2.getMonth() + 1).toString().padStart(2, '0');
  var day2 = currentDate2.getDate().toString().padStart(2, '0');
  var formattedDate2 = year2 + '-' + month2 + '-' + day2;

if (formattedDate === expirationDates[i]){
  graves[i].setIcon(new L.Icon({
    iconUrl: '../../mapping/assets/img/grave_img/madali.png', // Replace with your expired icon image URL
    iconSize: [25, 25] // Adjust the icon size as needed
  }));
  } else if (formattedDate1 === expirationDates[i]) {
    graves[i].setIcon(new L.Icon({
    iconUrl: '../../mapping/assets/img/grave_img/madali.png', // Replace with your expired icon image URL
    iconSize: [25, 25] // Adjust the icon size as needed
  }));
  } else if (formattedDate2 === expirationDates[i]) {
    graves[i].setIcon(new L.Icon({
    iconUrl: '../../mapping/assets/img/grave_img/madali.png', // Replace with your expired icon image URL
    iconSize: [25, 25] // Adjust the icon size as needed
  }));
  } 
  else if (currentDate >= new Date(expirationDates[i])) {
    graves[i].setIcon(new L.Icon({
    iconUrl: '../../mapping/assets/img/grave_img/expired.png', // Replace with your expired icon image URL
    iconSize: [25, 25] // Adjust the icon size as needed
  }));
  }
}



// Set the icon for 'Grave is Available' name
if ('<?php echo $grave1 && $grave1["name"] === "Grave is Available" ? "true" : "false"; ?>' === 'true') {
  grave1.setIcon(availableIcon);
}
if ('<?php echo $grave2 && $grave2["name"] === "Grave is Available" ? "true" : "false"; ?>' === 'true') {
  grave2.setIcon(availableIcon);
}
if ('<?php echo $grave3 && $grave3["name"] === "Grave is Available" ? "true" : "false"; ?>' === 'true') {
  grave3.setIcon(availableIcon);
}
if ('<?php echo $grave4 && $grave4["name"] === "Grave is Available" ? "true" : "false"; ?>' === 'true') {
  grave4.setIcon(availableIcon);
}
if ('<?php echo $grave5 && $grave5["name"] === "Grave is Available" ? "true" : "false"; ?>' === 'true') {
  grave5.setIcon(availableIcon);
}
if ('<?php echo $grave6 && $grave6["name"] === "Grave is Available" ? "true" : "false"; ?>' === 'true') {
  grave6.setIcon(availableIcon);
}
if ('<?php echo $grave7 && $grave7["name"] === "Grave is Available" ? "true" : "false"; ?>' === 'true') {
  grave7.setIcon(availableIcon);
}
if ('<?php echo $grave8 && $grave8["name"] === "Grave is Available" ? "true" : "false"; ?>' === 'true') {
  grave8.setIcon(availableIcon);
}
if ('<?php echo $grave9 && $grave9["name"] === "Grave is Available" ? "true" : "false"; ?>' === 'true') {
  grave9.setIcon(availableIcon);
}
if ('<?php echo $grave10 && $grave10["name"] === "Grave is Available" ? "true" : "false"; ?>' === 'true') {
  grave10.setIcon(availableIcon);
}
if ('<?php echo $grave11 && $grave11["name"] === "Grave is Available" ? "true" : "false"; ?>' === 'true') {
  grave11.setIcon(availableIcon);
}
if ('<?php echo $grave12 && $grave12["name"] === "Grave is Available" ? "true" : "false"; ?>' === 'true') {
  grave12.setIcon(availableIcon);
}
if ('<?php echo $grave13 && $grave13["name"] === "Grave is Available" ? "true" : "false"; ?>' === 'true') {
  grave13.setIcon(availableIcon);
}
if ('<?php echo $grave14 && $grave14["name"] === "Grave is Available" ? "true" : "false"; ?>' === 'true') {
  grave14.setIcon(availableIcon);
}
if ('<?php echo $grave15 && $grave15["name"] === "Grave is Available" ? "true" : "false"; ?>' === 'true') {
  grave15.setIcon(availableIcon);
}
if ('<?php echo $grave16 && $grave16["name"] === "Grave is Available" ? "true" : "false"; ?>' === 'true') {
  grave16.setIcon(availableIcon);
}
if ('<?php echo $grave17 && $grave17["name"] === "Grave is Available" ? "true" : "false"; ?>' === 'true') {
  grave17.setIcon(availableIcon);
}
if ('<?php echo $grave18 && $grave18["name"] === "Grave is Available" ? "true" : "false"; ?>' === 'true') {
  grave18.setIcon(availableIcon);
}
if ('<?php echo $grave19 && $grave19["name"] === "Grave is Available" ? "true" : "false"; ?>' === 'true') {
  grave19.setIcon(availableIcon);
}
if ('<?php echo $grave20 && $grave20["name"] === "Grave is Available" ? "true" : "false"; ?>' === 'true') {
  grave20.setIcon(availableIcon);
}

      // Add more markers for other graves as needed
      // Define pop-up messages for markers
      // grave1.bindPopup('<img src="../../<?php echo $grave1["imagepath"]?>" alt="Grave 1" width="200">');
      // grave2.bindPopup('<img src="../../<?php echo $grave2["imagepath"]?>" alt="Grave 2" width="200">');
      // grave3.bindPopup('<img src="../../<?php echo $grave3["imagepath"]?>" alt="Grave 3" width="200">');
      // grave4.bindPopup('<img src="../../<?php echo $grave4["imagepath"]?>" alt="Grave 4" width="200">');
      // grave5.bindPopup('<img src="../../<?php echo $grave5["imagepath"]?>" alt="Grave 5" width="200">');
      // grave6.bindPopup('<img src="../../<?php echo $grave6["imagepath"]?>" alt="Grave 6" width="200">');
      // grave7.bindPopup('<img src="../../<?php echo $grave7["imagepath"]?>" alt="Grave 7" width="200">');
      // grave8.bindPopup('<img src="../../<?php echo $grave8["imagepath"]?>" alt="Grave 8" width="200">');
      // grave9.bindPopup('<img src="../../<?php echo $grave9["imagepath"]?>" alt="Grave 9" width="200">');

    
    
    // Bind popups to each marker individually and set up hover behavior
function bindPopupOnHover(marker, content) {
    marker.bindPopup(content, {
        closeButton: false, // Remove the close button
    });

    marker.on('mouseover', function () {
        this.openPopup();
    });

    marker.on('mouseout', function () {
        this.closePopup();
    });
}

// Example usage for each marker
bindPopupOnHover(grave1, '<div style="text-align: center; font-weight: bold; font-size: 25px;">Grave 1</div><img src="../../<?php echo $grave1["imagepath"]?>" alt="Grave 1" width="200">');
bindPopupOnHover(grave2, '<div style="text-align: center; font-weight: bold; font-size: 25px;">Grave 2</div><img src="../../<?php echo $grave2["imagepath"]?>" alt="Grave 2" width="200">');
bindPopupOnHover(grave3, '<div style="text-align: center; font-weight: bold; font-size: 25px;">Grave 3</div><img src="../../<?php echo $grave3["imagepath"]?>" alt="Grave 3" width="200">');
bindPopupOnHover(grave4, '<div style="text-align: center; font-weight: bold; font-size: 25px;">Grave 4</div><img src="../../<?php echo $grave4["imagepath"]?>" alt="Grave 4" width="200">');
bindPopupOnHover(grave5, '<div style="text-align: center; font-weight: bold; font-size: 25px;">Grave 5</div><img src="../../<?php echo $grave5["imagepath"]?>" alt="Grave 5" width="200">');
bindPopupOnHover(grave6, '<div style="text-align: center; font-weight: bold; font-size: 25px;">Grave 6</div><img src="../../<?php echo $grave6["imagepath"]?>" alt="Grave 6" width="200">');
bindPopupOnHover(grave7, '<div style="text-align: center; font-weight: bold; font-size: 25px;">Grave 7</div><img src="../../<?php echo $grave7["imagepath"]?>" alt="Grave 7" width="200">');
bindPopupOnHover(grave8, '<div style="text-align: center; font-weight: bold; font-size: 25px;">Grave 8</div><img src="../../<?php echo $grave8["imagepath"]?>" alt="Grave 8" width="200">');
bindPopupOnHover(grave9, '<div style="text-align: center; font-weight: bold; font-size: 25px;">Grave 9</div><img src="../../<?php echo $grave9["imagepath"]?>" alt="Grave 9" width="200">');
bindPopupOnHover(grave10, '<div style="text-align: center; font-weight: bold; font-size: 25px;">Grave 10</div><img src="../../<?php echo $grave10["imagepath"]?>" alt="Grave 10" width="200">');
bindPopupOnHover(grave11, '<div style="text-align: center; font-weight: bold; font-size: 25px;">Grave 11</div><img src="../../<?php echo $grave11["imagepath"]?>" alt="Grave 11" width="200">');
bindPopupOnHover(grave12, '<div style="text-align: center; font-weight: bold; font-size: 25px;">Grave 12</div><img src="../../<?php echo $grave12["imagepath"]?>" alt="Grave 12" width="200">');
bindPopupOnHover(grave13, '<div style="text-align: center; font-weight: bold; font-size: 25px;">Grave 13</div><img src="../../<?php echo $grave13["imagepath"]?>" alt="Grave 13" width="200">');
bindPopupOnHover(grave14, '<div style="text-align: center; font-weight: bold; font-size: 25px;">Grave 14</div><img src="../../<?php echo $grave14["imagepath"]?>" alt="Grave 14" width="200">');
bindPopupOnHover(grave15, '<div style="text-align: center; font-weight: bold; font-size: 25px;">Grave 15</div><img src="../../<?php echo $grave15["imagepath"]?>" alt="Grave 15" width="200">');
bindPopupOnHover(grave16, '<div style="text-align: center; font-weight: bold; font-size: 25px;">Grave 16</div><img src="../../<?php echo $grave16["imagepath"]?>" alt="Grave 16" width="200">');
bindPopupOnHover(grave17, '<div style="text-align: center; font-weight: bold; font-size: 25px;">Grave 17</div><img src="../../<?php echo $grave17["imagepath"]?>" alt="Grave 17" width="200">');
bindPopupOnHover(grave18, '<div style="text-align: center; font-weight: bold; font-size: 25px;">Grave 18</div><img src="../../<?php echo $grave18["imagepath"]?>" alt="Grave 18" width="200">');
bindPopupOnHover(grave19, '<div style="text-align: center; font-weight: bold; font-size: 25px;">Grave 19</div><img src="../../<?php echo $grave19["imagepath"]?>" alt="Grave 19" width="200">');
bindPopupOnHover(grave20, '<div style="text-align: center; font-weight: bold; font-size: 25px;">Grave 20</div><img src="../../<?php echo $grave20["imagepath"]?>" alt="Grave 20" width="200">');



var sidebar = document.getElementById('sidebar');
  var sidebarTitle = document.getElementById('sidebar-title');
  // var sidebarGraveno = document.getElementById('sidebar-graveno');
  var sidebarDateofbirth = document.getElementById('sidebar-dateofbirth');
  var sidebarDateofdeath = document.getElementById('sidebar-dateofdeath');
  var sidebarRentdate = document.getElementById('sidebar-rentdate');
  var sidebarDuedate = document.getElementById('sidebar-duedate');
  var sidebarImage = document.getElementById('sidebar-image');
  var getDirectionsBtn = document.getElementById('getDirectionsBtn');
    // graves array 
    var graves = [grave1, grave2,grave3,grave4, grave5,grave6,grave7,grave8,grave9];

    // Function to open the sidebar with marker information
    function openSidebar(title, dateofbirth,dateofdeath,rentdate,duedate, marker, imagePath, graveId) {
      sidebarTitle.textContent = title;
      sidebarDateofbirth.textContent = dateofbirth;
      sidebarDateofdeath.textContent = dateofdeath;
      sidebarRentdate.textContent = rentdate;
      sidebarDuedate.textContent = duedate;
        sidebarImage.src = imagePath;
        sidebar.style.display = 'block';
        getDirectionsBtn.onclick = function () {
            findRoute(marker);
            closeSidebar();
        };

        // Set the grave id value in the hidden input field
        document.getElementById('graveId').value = graveId;
        
        // Set the action attribute of the form to include the graveId as a query parameter
        var formAction = document.getElementById('upload-form').action;
        document.getElementById('upload-form').action = formAction;
        
        // Now you have access to the grave id
        console.log('Grave ID:', graveId);
    }

    function closeSidebar() {
        sidebar.style.display = 'none';
    }

   
 // Function to convert numeric month to its corresponding name
function getMonthName(month) {
    const months = [
        "January", "February", "March", "April", "May", "June",
        "July", "August", "September", "October", "November", "December"
    ];
    return months[month - 1];  // Months are 0-based in JavaScript dates
}

grave1.on('click', function () {
    openSidebar(
        '<?php echo $grave1['name']; ?>',
        '<?php echo $grave1['date_of_birth']; ?>',
        '<?php echo $grave1['date']; ?>',
        '<?php echo $grave1['startDate']; ?>',
        '<?php echo $grave1['expiredDate']; ?>',
        grave1,
        '../../<?php echo $grave1["imagepath"]?>',
        1);

    // Check if values are empty or null before adding labels and values
    if ('<?php echo $grave1['name']; ?>' !== '' &&
        '<?php echo $grave1['date_of_birth']; ?>' !== '' &&
        '<?php echo $grave1['date']; ?>' !== '' &&
        '<?php echo $grave1['startDate']; ?>' !== '' &&
        '<?php echo $grave1['expiredDate']; ?>' !== '') {

        // Format the date strings
        var dateOfBirth = new Date('<?php echo $grave1['date_of_birth']; ?>');
        var dateOfDeath = new Date('<?php echo $grave1['date']; ?>');
        var rentDate = new Date('<?php echo $grave1['startDate']; ?>');
        var dueDate = new Date('<?php echo $grave1['expiredDate']; ?>');

        // Convert numeric month to its name
        var monthOfBirth = getMonthName(dateOfBirth.getMonth() + 1);
        var monthOfDeath = getMonthName(dateOfDeath.getMonth() + 1);
        var monthRentDate = getMonthName(rentDate.getMonth() + 1);
        var monthDueDate = getMonthName(dueDate.getMonth() + 1);

        // Update HTML elements with formatted dates
        $("#sidebar-dateofbirth").html("<strong>Date of Birth:</strong> " + monthOfBirth + " " + dateOfBirth.getDate() + ", " + dateOfBirth.getFullYear());
        $("#sidebar-dateofdeath").html("<strong>Date of Death:</strong> " + monthOfDeath + " " + dateOfDeath.getDate() + ", " + dateOfDeath.getFullYear());
        $("#sidebar-rentdate").html("<strong>Rental Date:</strong> " + monthRentDate + " " + rentDate.getDate() + ", " + rentDate.getFullYear());
        $("#sidebar-duedate").html("<strong>Expiration Date:</strong> " + monthDueDate + " " + dueDate.getDate() + ", " + dueDate.getFullYear());
    }
});

grave2.on('click', function () {
    openSidebar(
        '<?php echo $grave2['name']; ?>',
        '<?php echo $grave2['date_of_birth']; ?>',
        '<?php echo $grave2['date']; ?>',
        '<?php echo $grave2['startDate']; ?>',
        '<?php echo $grave2['expiredDate']; ?>',
        grave2,
        '../../<?php echo $grave2["imagepath"]?>',
        2);

    // Check if values are empty or null before adding labels and values
    if ('<?php echo $grave2['name']; ?>' !== '' &&
        '<?php echo $grave2['date_of_birth']; ?>' !== '' &&
        '<?php echo $grave2['date']; ?>' !== '' &&
        '<?php echo $grave2['startDate']; ?>' !== '' &&
        '<?php echo $grave2['expiredDate']; ?>' !== '') {

        // Format the date strings
        var dateOfBirth = new Date('<?php echo $grave2['date_of_birth']; ?>');
        var dateOfDeath = new Date('<?php echo $grave2['date']; ?>');
        var rentDate = new Date('<?php echo $grave2['startDate']; ?>');
        var dueDate = new Date('<?php echo $grave2['expiredDate']; ?>');

        // Convert numeric month to its name
        var monthOfBirth = getMonthName(dateOfBirth.getMonth() + 1);
        var monthOfDeath = getMonthName(dateOfDeath.getMonth() + 1);
        var monthRentDate = getMonthName(rentDate.getMonth() + 1);
        var monthDueDate = getMonthName(dueDate.getMonth() + 1);

        // Update HTML elements with formatted dates
        $("#sidebar-dateofbirth").html("<strong>Date of Birth:</strong> " + monthOfBirth + " " + dateOfBirth.getDate() + ", " + dateOfBirth.getFullYear());
        $("#sidebar-dateofdeath").html("<strong>Date of Death:</strong> " + monthOfDeath + " " + dateOfDeath.getDate() + ", " + dateOfDeath.getFullYear());
        $("#sidebar-rentdate").html("<strong>Rental Date:</strong> " + monthRentDate + " " + rentDate.getDate() + ", " + rentDate.getFullYear());
        $("#sidebar-duedate").html("<strong>Expiration Date:</strong> " + monthDueDate + " " + dueDate.getDate() + ", " + dueDate.getFullYear());
    }
});


grave3.on('click', function () {
    openSidebar(
        '<?php echo $grave3['name']; ?>',
        '<?php echo $grave3['date_of_birth']; ?>',
        '<?php echo $grave3['date']; ?>',
        '<?php echo $grave3['startDate']; ?>',
        '<?php echo $grave3['expiredDate']; ?>',
        grave3,
        '../../<?php echo $grave3["imagepath"]?>',
        3);

    // Check if values are empty or null before adding labels and values
    if ('<?php echo $grave3['name']; ?>' !== '' &&
        '<?php echo $grave3['date_of_birth']; ?>' !== '' &&
        '<?php echo $grave3['date']; ?>' !== '' &&
        '<?php echo $grave3['startDate']; ?>' !== '' &&
        '<?php echo $grave3['expiredDate']; ?>' !== '') {

        // Format the date strings
        var dateOfBirth = new Date('<?php echo $grave3['date_of_birth']; ?>');
        var dateOfDeath = new Date('<?php echo $grave3['date']; ?>');
        var rentDate = new Date('<?php echo $grave3['startDate']; ?>');
        var dueDate = new Date('<?php echo $grave3['expiredDate']; ?>');

        // Convert numeric month to its name
        var monthOfBirth = getMonthName(dateOfBirth.getMonth() + 1);
        var monthOfDeath = getMonthName(dateOfDeath.getMonth() + 1);
        var monthRentDate = getMonthName(rentDate.getMonth() + 1);
        var monthDueDate = getMonthName(dueDate.getMonth() + 1);

        // Update HTML elements with formatted dates
        $("#sidebar-dateofbirth").html("<strong>Date of Birth:</strong> " + monthOfBirth + " " + dateOfBirth.getDate() + ", " + dateOfBirth.getFullYear());
        $("#sidebar-dateofdeath").html("<strong>Date of Death:</strong> " + monthOfDeath + " " + dateOfDeath.getDate() + ", " + dateOfDeath.getFullYear());
        $("#sidebar-rentdate").html("<strong>Rental Date:</strong> " + monthRentDate + " " + rentDate.getDate() + ", " + rentDate.getFullYear());
        $("#sidebar-duedate").html("<strong>Expiration Date:</strong> " + monthDueDate + " " + dueDate.getDate() + ", " + dueDate.getFullYear());
    }
});

grave4.on('click', function () {
    openSidebar(
        '<?php echo $grave4['name']; ?>',
        '<?php echo $grave4['date_of_birth']; ?>',
        '<?php echo $grave4['date']; ?>',
        '<?php echo $grave4['startDate']; ?>',
        '<?php echo $grave4['expiredDate']; ?>',
        grave4,
        '../../<?php echo $grave4["imagepath"]?>',
        4);

    // Check if values are empty or null before adding labels and values
    if ('<?php echo $grave4['name']; ?>' !== '' &&
        '<?php echo $grave4['date_of_birth']; ?>' !== '' &&
        '<?php echo $grave4['date']; ?>' !== '' &&
        '<?php echo $grave4['startDate']; ?>' !== '' &&
        '<?php echo $grave4['expiredDate']; ?>' !== '') {

        // Format the date strings
        var dateOfBirth = new Date('<?php echo $grave4['date_of_birth']; ?>');
        var dateOfDeath = new Date('<?php echo $grave4['date']; ?>');
        var rentDate = new Date('<?php echo $grave4['startDate']; ?>');
        var dueDate = new Date('<?php echo $grave4['expiredDate']; ?>');

        // Convert numeric month to its name
        var monthOfBirth = getMonthName(dateOfBirth.getMonth() + 1);
        var monthOfDeath = getMonthName(dateOfDeath.getMonth() + 1);
        var monthRentDate = getMonthName(rentDate.getMonth() + 1);
        var monthDueDate = getMonthName(dueDate.getMonth() + 1);

        // Update HTML elements with formatted dates
        $("#sidebar-dateofbirth").html("<strong>Date of Birth:</strong> " + monthOfBirth + " " + dateOfBirth.getDate() + ", " + dateOfBirth.getFullYear());
        $("#sidebar-dateofdeath").html("<strong>Date of Death:</strong> " + monthOfDeath + " " + dateOfDeath.getDate() + ", " + dateOfDeath.getFullYear());
        $("#sidebar-rentdate").html("<strong>Rental Date:</strong> " + monthRentDate + " " + rentDate.getDate() + ", " + rentDate.getFullYear());
        $("#sidebar-duedate").html("<strong>Expiration Date:</strong> " + monthDueDate + " " + dueDate.getDate() + ", " + dueDate.getFullYear());
    }
});

grave5.on('click', function () {
    openSidebar(
        '<?php echo $grave5['name']; ?>',
        '<?php echo $grave5['date_of_birth']; ?>',
        '<?php echo $grave5['date']; ?>',
        '<?php echo $grave5['startDate']; ?>',
        '<?php echo $grave5['expiredDate']; ?>',
        grave5,
        '../../<?php echo $grave5["imagepath"]?>',
        5);

    // Check if values are empty or null before adding labels and values
    if ('<?php echo $grave5['name']; ?>' !== '' &&
        '<?php echo $grave5['date_of_birth']; ?>' !== '' &&
        '<?php echo $grave5['date']; ?>' !== '' &&
        '<?php echo $grave5['startDate']; ?>' !== '' &&
        '<?php echo $grave5['expiredDate']; ?>' !== '') {

        // Format the date strings
        var dateOfBirth = new Date('<?php echo $grave5['date_of_birth']; ?>');
        var dateOfDeath = new Date('<?php echo $grave5['date']; ?>');
        var rentDate = new Date('<?php echo $grave5['startDate']; ?>');
        var dueDate = new Date('<?php echo $grave5['expiredDate']; ?>');

        // Convert numeric month to its name
        var monthOfBirth = getMonthName(dateOfBirth.getMonth() + 1);
        var monthOfDeath = getMonthName(dateOfDeath.getMonth() + 1);
        var monthRentDate = getMonthName(rentDate.getMonth() + 1);
        var monthDueDate = getMonthName(dueDate.getMonth() + 1);

        // Update HTML elements with formatted dates
        $("#sidebar-dateofbirth").html("<strong>Date of Birth:</strong> " + monthOfBirth + " " + dateOfBirth.getDate() + ", " + dateOfBirth.getFullYear());
        $("#sidebar-dateofdeath").html("<strong>Date of Death:</strong> " + monthOfDeath + " " + dateOfDeath.getDate() + ", " + dateOfDeath.getFullYear());
        $("#sidebar-rentdate").html("<strong>Rental Date:</strong> " + monthRentDate + " " + rentDate.getDate() + ", " + rentDate.getFullYear());
        $("#sidebar-duedate").html("<strong>Expiration Date:</strong> " + monthDueDate + " " + dueDate.getDate() + ", " + dueDate.getFullYear());
    }
});

grave6.on('click', function () {
    openSidebar(
        '<?php echo $grave6['name']; ?>',
        '<?php echo $grave6['date_of_birth']; ?>',
        '<?php echo $grave6['date']; ?>',
        '<?php echo $grave6['startDate']; ?>',
        '<?php echo $grave6['expiredDate']; ?>',
        grave6,
        '../../<?php echo $grave6["imagepath"]?>',
        6);

    // Check if values are empty or null before adding labels and values
    if ('<?php echo $grave6['name']; ?>' !== '' &&
        '<?php echo $grave6['date_of_birth']; ?>' !== '' &&
        '<?php echo $grave6['date']; ?>' !== '' &&
        '<?php echo $grave6['startDate']; ?>' !== '' &&
        '<?php echo $grave6['expiredDate']; ?>' !== '') {

        // Format the date strings
        var dateOfBirth = new Date('<?php echo $grave6['date_of_birth']; ?>');
        var dateOfDeath = new Date('<?php echo $grave6['date']; ?>');
        var rentDate = new Date('<?php echo $grave6['startDate']; ?>');
        var dueDate = new Date('<?php echo $grave6['expiredDate']; ?>');

        // Convert numeric month to its name
        var monthOfBirth = getMonthName(dateOfBirth.getMonth() + 1);
        var monthOfDeath = getMonthName(dateOfDeath.getMonth() + 1);
        var monthRentDate = getMonthName(rentDate.getMonth() + 1);
        var monthDueDate = getMonthName(dueDate.getMonth() + 1);

        // Update HTML elements with formatted dates
        $("#sidebar-dateofbirth").html("<strong>Date of Birth:</strong> " + monthOfBirth + " " + dateOfBirth.getDate() + ", " + dateOfBirth.getFullYear());
        $("#sidebar-dateofdeath").html("<strong>Date of Death:</strong> " + monthOfDeath + " " + dateOfDeath.getDate() + ", " + dateOfDeath.getFullYear());
        $("#sidebar-rentdate").html("<strong>Rental Date:</strong> " + monthRentDate + " " + rentDate.getDate() + ", " + rentDate.getFullYear());
        $("#sidebar-duedate").html("<strong>Expiration Date:</strong> " + monthDueDate + " " + dueDate.getDate() + ", " + dueDate.getFullYear());
    }
});

grave7.on('click', function () {
    openSidebar(
        '<?php echo $grave7['name']; ?>',
        '<?php echo $grave7['date_of_birth']; ?>',
        '<?php echo $grave7['date']; ?>',
        '<?php echo $grave7['startDate']; ?>',
        '<?php echo $grave7['expiredDate']; ?>',
        grave7,
        '../../<?php echo $grave7["imagepath"]?>',
        7);

    // Check if values are empty or null before adding labels and values
    if ('<?php echo $grave7['name']; ?>' !== '' &&
        '<?php echo $grave7['date_of_birth']; ?>' !== '' &&
        '<?php echo $grave7['date']; ?>' !== '' &&
        '<?php echo $grave7['startDate']; ?>' !== '' &&
        '<?php echo $grave7['expiredDate']; ?>' !== '') {

        // Format the date strings
        var dateOfBirth = new Date('<?php echo $grave7['date_of_birth']; ?>');
        var dateOfDeath = new Date('<?php echo $grave7['date']; ?>');
        var rentDate = new Date('<?php echo $grave7['startDate']; ?>');
        var dueDate = new Date('<?php echo $grave7['expiredDate']; ?>');

        // Convert numeric month to its name
        var monthOfBirth = getMonthName(dateOfBirth.getMonth() + 1);
        var monthOfDeath = getMonthName(dateOfDeath.getMonth() + 1);
        var monthRentDate = getMonthName(rentDate.getMonth() + 1);
        var monthDueDate = getMonthName(dueDate.getMonth() + 1);

        // Update HTML elements with formatted dates
        $("#sidebar-dateofbirth").html("<strong>Date of Birth:</strong> " + monthOfBirth + " " + dateOfBirth.getDate() + ", " + dateOfBirth.getFullYear());
        $("#sidebar-dateofdeath").html("<strong>Date of Death:</strong> " + monthOfDeath + " " + dateOfDeath.getDate() + ", " + dateOfDeath.getFullYear());
        $("#sidebar-rentdate").html("<strong>Rental Date:</strong> " + monthRentDate + " " + rentDate.getDate() + ", " + rentDate.getFullYear());
        $("#sidebar-duedate").html("<strong>Expiration Date:</strong> " + monthDueDate + " " + dueDate.getDate() + ", " + dueDate.getFullYear());
    }
});

grave8.on('click', function () {
    openSidebar(
        '<?php echo $grave8['name']; ?>',
        '<?php echo $grave8['date_of_birth']; ?>',
        '<?php echo $grave8['date']; ?>',
        '<?php echo $grave8['startDate']; ?>',
        '<?php echo $grave8['expiredDate']; ?>',
        grave8,
        '../../<?php echo $grave8["imagepath"]?>',
        8);

    // Check if values are empty or null before adding labels and values
    if ('<?php echo $grave8['name']; ?>' !== '' &&
        '<?php echo $grave8['date_of_birth']; ?>' !== '' &&
        '<?php echo $grave8['date']; ?>' !== '' &&
        '<?php echo $grave8['startDate']; ?>' !== '' &&
        '<?php echo $grave8['expiredDate']; ?>' !== '') {

        // Format the date strings
        var dateOfBirth = new Date('<?php echo $grave8['date_of_birth']; ?>');
        var dateOfDeath = new Date('<?php echo $grave8['date']; ?>');
        var rentDate = new Date('<?php echo $grave8['startDate']; ?>');
        var dueDate = new Date('<?php echo $grave8['expiredDate']; ?>');

        // Convert numeric month to its name
        var monthOfBirth = getMonthName(dateOfBirth.getMonth() + 1);
        var monthOfDeath = getMonthName(dateOfDeath.getMonth() + 1);
        var monthRentDate = getMonthName(rentDate.getMonth() + 1);
        var monthDueDate = getMonthName(dueDate.getMonth() + 1);

        // Update HTML elements with formatted dates
        $("#sidebar-dateofbirth").html("<strong>Date of Birth:</strong> " + monthOfBirth + " " + dateOfBirth.getDate() + ", " + dateOfBirth.getFullYear());
        $("#sidebar-dateofdeath").html("<strong>Date of Death:</strong> " + monthOfDeath + " " + dateOfDeath.getDate() + ", " + dateOfDeath.getFullYear());
        $("#sidebar-rentdate").html("<strong>Rental Date:</strong> " + monthRentDate + " " + rentDate.getDate() + ", " + rentDate.getFullYear());
        $("#sidebar-duedate").html("<strong>Expiration Date:</strong> " + monthDueDate + " " + dueDate.getDate() + ", " + dueDate.getFullYear());
    }
});

grave9.on('click', function () {
    openSidebar(
        '<?php echo $grave9['name']; ?>',
        '<?php echo $grave9['date_of_birth']; ?>',
        '<?php echo $grave9['date']; ?>',
        '<?php echo $grave9['startDate']; ?>',
        '<?php echo $grave9['expiredDate']; ?>',
        grave9,
        '../../<?php echo $grave9["imagepath"]?>',
        2);

    // Check if values are empty or null before adding labels and values
    if ('<?php echo $grave9['name']; ?>' !== '' &&
        '<?php echo $grave9['date_of_birth']; ?>' !== '' &&
        '<?php echo $grave9['date']; ?>' !== '' &&
        '<?php echo $grave9['startDate']; ?>' !== '' &&
        '<?php echo $grave9['expiredDate']; ?>' !== '') {

        // Format the date strings
        var dateOfBirth = new Date('<?php echo $grave9['date_of_birth']; ?>');
        var dateOfDeath = new Date('<?php echo $grave9['date']; ?>');
        var rentDate = new Date('<?php echo $grave9['startDate']; ?>');
        var dueDate = new Date('<?php echo $grave9['expiredDate']; ?>');

        // Convert numeric month to its name
        var monthOfBirth = getMonthName(dateOfBirth.getMonth() + 1);
        var monthOfDeath = getMonthName(dateOfDeath.getMonth() + 1);
        var monthRentDate = getMonthName(rentDate.getMonth() + 1);
        var monthDueDate = getMonthName(dueDate.getMonth() + 1);

        // Update HTML elements with formatted dates
        $("#sidebar-dateofbirth").html("<strong>Date of Birth:</strong> " + monthOfBirth + " " + dateOfBirth.getDate() + ", " + dateOfBirth.getFullYear());
        $("#sidebar-dateofdeath").html("<strong>Date of Death:</strong> " + monthOfDeath + " " + dateOfDeath.getDate() + ", " + dateOfDeath.getFullYear());
        $("#sidebar-rentdate").html("<strong>Rental Date:</strong> " + monthRentDate + " " + rentDate.getDate() + ", " + rentDate.getFullYear());
        $("#sidebar-duedate").html("<strong>Expiration Date:</strong> " + monthDueDate + " " + dueDate.getDate() + ", " + dueDate.getFullYear());
    }
});

grave10.on('click', function () {
    openSidebar(
        '<?php echo $grave10['name']; ?>',
        '<?php echo $grave10['date_of_birth']; ?>',
        '<?php echo $grave10['date']; ?>',
        '<?php echo $grave10['startDate']; ?>',
        '<?php echo $grave10['expiredDate']; ?>',
        grave10,
        '../../<?php echo $grave10["imagepath"]?>',
        10);

    // Check if values are empty or null before adding labels and values
    if ('<?php echo $grave10['name']; ?>' !== '' &&
        '<?php echo $grave10['date_of_birth']; ?>' !== '' &&
        '<?php echo $grave10['date']; ?>' !== '' &&
        '<?php echo $grave10['startDate']; ?>' !== '' &&
        '<?php echo $grave10['expiredDate']; ?>' !== '') {

        // Format the date strings
        var dateOfBirth = new Date('<?php echo $grave10['date_of_birth']; ?>');
        var dateOfDeath = new Date('<?php echo $grave10['date']; ?>');
        var rentDate = new Date('<?php echo $grave10['startDate']; ?>');
        var dueDate = new Date('<?php echo $grave10['expiredDate']; ?>');

        // Convert numeric month to its name
        var monthOfBirth = getMonthName(dateOfBirth.getMonth() + 1);
        var monthOfDeath = getMonthName(dateOfDeath.getMonth() + 1);
        var monthRentDate = getMonthName(rentDate.getMonth() + 1);
        var monthDueDate = getMonthName(dueDate.getMonth() + 1);

        // Update HTML elements with formatted dates
        $("#sidebar-dateofbirth").html("<strong>Date of Birth:</strong> " + monthOfBirth + " " + dateOfBirth.getDate() + ", " + dateOfBirth.getFullYear());
        $("#sidebar-dateofdeath").html("<strong>Date of Death:</strong> " + monthOfDeath + " " + dateOfDeath.getDate() + ", " + dateOfDeath.getFullYear());
        $("#sidebar-rentdate").html("<strong>Rental Date:</strong> " + monthRentDate + " " + rentDate.getDate() + ", " + rentDate.getFullYear());
        $("#sidebar-duedate").html("<strong>Expiration Date:</strong> " + monthDueDate + " " + dueDate.getDate() + ", " + dueDate.getFullYear());
    }
});

grave11.on('click', function () {
    openSidebar(
        '<?php echo $grave11['name']; ?>',
        '<?php echo $grave11['date_of_birth']; ?>',
        '<?php echo $grave11['date']; ?>',
        '<?php echo $grave11['startDate']; ?>',
        '<?php echo $grave11['expiredDate']; ?>',
        grave11,
        '../../<?php echo $grave11["imagepath"]?>',
        11);

    // Check if values are empty or null before adding labels and values
    if ('<?php echo $grave11['name']; ?>' !== '' &&
        '<?php echo $grave11['date_of_birth']; ?>' !== '' &&
        '<?php echo $grave11['date']; ?>' !== '' &&
        '<?php echo $grave11['startDate']; ?>' !== '' &&
        '<?php echo $grave11['expiredDate']; ?>' !== '') {

        // Format the date strings
        var dateOfBirth = new Date('<?php echo $grave11['date_of_birth']; ?>');
        var dateOfDeath = new Date('<?php echo $grave11['date']; ?>');
        var rentDate = new Date('<?php echo $grave11['startDate']; ?>');
        var dueDate = new Date('<?php echo $grave11['expiredDate']; ?>');

        // Convert numeric month to its name
        var monthOfBirth = getMonthName(dateOfBirth.getMonth() + 1);
        var monthOfDeath = getMonthName(dateOfDeath.getMonth() + 1);
        var monthRentDate = getMonthName(rentDate.getMonth() + 1);
        var monthDueDate = getMonthName(dueDate.getMonth() + 1);

        // Update HTML elements with formatted dates
        $("#sidebar-dateofbirth").html("<strong>Date of Birth:</strong> " + monthOfBirth + " " + dateOfBirth.getDate() + ", " + dateOfBirth.getFullYear());
        $("#sidebar-dateofdeath").html("<strong>Date of Death:</strong> " + monthOfDeath + " " + dateOfDeath.getDate() + ", " + dateOfDeath.getFullYear());
        $("#sidebar-rentdate").html("<strong>Rental Date:</strong> " + monthRentDate + " " + rentDate.getDate() + ", " + rentDate.getFullYear());
        $("#sidebar-duedate").html("<strong>Expiration Date:</strong> " + monthDueDate + " " + dueDate.getDate() + ", " + dueDate.getFullYear());
    }
});

grave12.on('click', function () {
    openSidebar(
        '<?php echo $grave12['name']; ?>',
        '<?php echo $grave12['date_of_birth']; ?>',
        '<?php echo $grave12['date']; ?>',
        '<?php echo $grave12['startDate']; ?>',
        '<?php echo $grave12['expiredDate']; ?>',
        grave12,
        '../../<?php echo $grave12["imagepath"]?>',
        12);

    // Check if values are empty or null before adding labels and values
    if ('<?php echo $grave12['name']; ?>' !== '' &&
        '<?php echo $grave12['date_of_birth']; ?>' !== '' &&
        '<?php echo $grave12['date']; ?>' !== '' &&
        '<?php echo $grave12['startDate']; ?>' !== '' &&
        '<?php echo $grave12['expiredDate']; ?>' !== '') {

        // Format the date strings
        var dateOfBirth = new Date('<?php echo $grave12['date_of_birth']; ?>');
        var dateOfDeath = new Date('<?php echo $grave12['date']; ?>');
        var rentDate = new Date('<?php echo $grave12['startDate']; ?>');
        var dueDate = new Date('<?php echo $grave12['expiredDate']; ?>');

        // Convert numeric month to its name
        var monthOfBirth = getMonthName(dateOfBirth.getMonth() + 1);
        var monthOfDeath = getMonthName(dateOfDeath.getMonth() + 1);
        var monthRentDate = getMonthName(rentDate.getMonth() + 1);
        var monthDueDate = getMonthName(dueDate.getMonth() + 1);

        // Update HTML elements with formatted dates
        $("#sidebar-dateofbirth").html("<strong>Date of Birth:</strong> " + monthOfBirth + " " + dateOfBirth.getDate() + ", " + dateOfBirth.getFullYear());
        $("#sidebar-dateofdeath").html("<strong>Date of Death:</strong> " + monthOfDeath + " " + dateOfDeath.getDate() + ", " + dateOfDeath.getFullYear());
        $("#sidebar-rentdate").html("<strong>Rental Date:</strong> " + monthRentDate + " " + rentDate.getDate() + ", " + rentDate.getFullYear());
        $("#sidebar-duedate").html("<strong>Expiration Date:</strong> " + monthDueDate + " " + dueDate.getDate() + ", " + dueDate.getFullYear());
    }
});

grave13.on('click', function () {
    openSidebar(
        '<?php echo $grave13['name']; ?>',
        '<?php echo $grave13['date_of_birth']; ?>',
        '<?php echo $grave13['date']; ?>',
        '<?php echo $grave13['startDate']; ?>',
        '<?php echo $grave13['expiredDate']; ?>',
        grave13,
        '../../<?php echo $grave13["imagepath"]?>',
        13);

    // Check if values are empty or null before adding labels and values
    if ('<?php echo $grave13['name']; ?>' !== '' &&
        '<?php echo $grave13['date_of_birth']; ?>' !== '' &&
        '<?php echo $grave13['date']; ?>' !== '' &&
        '<?php echo $grave13['startDate']; ?>' !== '' &&
        '<?php echo $grave13['expiredDate']; ?>' !== '') {

        // Format the date strings
        var dateOfBirth = new Date('<?php echo $grave13['date_of_birth']; ?>');
        var dateOfDeath = new Date('<?php echo $grave13['date']; ?>');
        var rentDate = new Date('<?php echo $grave13['startDate']; ?>');
        var dueDate = new Date('<?php echo $grave13['expiredDate']; ?>');

        // Convert numeric month to its name
        var monthOfBirth = getMonthName(dateOfBirth.getMonth() + 1);
        var monthOfDeath = getMonthName(dateOfDeath.getMonth() + 1);
        var monthRentDate = getMonthName(rentDate.getMonth() + 1);
        var monthDueDate = getMonthName(dueDate.getMonth() + 1);

        // Update HTML elements with formatted dates
        $("#sidebar-dateofbirth").html("<strong>Date of Birth:</strong> " + monthOfBirth + " " + dateOfBirth.getDate() + ", " + dateOfBirth.getFullYear());
        $("#sidebar-dateofdeath").html("<strong>Date of Death:</strong> " + monthOfDeath + " " + dateOfDeath.getDate() + ", " + dateOfDeath.getFullYear());
        $("#sidebar-rentdate").html("<strong>Rental Date:</strong> " + monthRentDate + " " + rentDate.getDate() + ", " + rentDate.getFullYear());
        $("#sidebar-duedate").html("<strong>Expiration Date:</strong> " + monthDueDate + " " + dueDate.getDate() + ", " + dueDate.getFullYear());
    }
});

grave14.on('click', function () {
    openSidebar(
        '<?php echo $grave14['name']; ?>',
        '<?php echo $grave14['date_of_birth']; ?>',
        '<?php echo $grave14['date']; ?>',
        '<?php echo $grave14['startDate']; ?>',
        '<?php echo $grave14['expiredDate']; ?>',
        grave14,
        '../../<?php echo $grave14["imagepath"]?>',
        14);

    // Check if values are empty or null before adding labels and values
    if ('<?php echo $grave14['name']; ?>' !== '' &&
        '<?php echo $grave14['date_of_birth']; ?>' !== '' &&
        '<?php echo $grave14['date']; ?>' !== '' &&
        '<?php echo $grave14['startDate']; ?>' !== '' &&
        '<?php echo $grave14['expiredDate']; ?>' !== '') {

        // Format the date strings
        var dateOfBirth = new Date('<?php echo $grave14['date_of_birth']; ?>');
        var dateOfDeath = new Date('<?php echo $grave14['date']; ?>');
        var rentDate = new Date('<?php echo $grave14['startDate']; ?>');
        var dueDate = new Date('<?php echo $grave14['expiredDate']; ?>');

        // Convert numeric month to its name
        var monthOfBirth = getMonthName(dateOfBirth.getMonth() + 1);
        var monthOfDeath = getMonthName(dateOfDeath.getMonth() + 1);
        var monthRentDate = getMonthName(rentDate.getMonth() + 1);
        var monthDueDate = getMonthName(dueDate.getMonth() + 1);

        // Update HTML elements with formatted dates
        $("#sidebar-dateofbirth").html("<strong>Date of Birth:</strong> " + monthOfBirth + " " + dateOfBirth.getDate() + ", " + dateOfBirth.getFullYear());
        $("#sidebar-dateofdeath").html("<strong>Date of Death:</strong> " + monthOfDeath + " " + dateOfDeath.getDate() + ", " + dateOfDeath.getFullYear());
        $("#sidebar-rentdate").html("<strong>Rental Date:</strong> " + monthRentDate + " " + rentDate.getDate() + ", " + rentDate.getFullYear());
        $("#sidebar-duedate").html("<strong>Expiration Date:</strong> " + monthDueDate + " " + dueDate.getDate() + ", " + dueDate.getFullYear());
    }
});

grave15.on('click', function () {
    openSidebar(
        '<?php echo $grave15['name']; ?>',
        '<?php echo $grave15['date_of_birth']; ?>',
        '<?php echo $grave15['date']; ?>',
        '<?php echo $grave15['startDate']; ?>',
        '<?php echo $grave15['expiredDate']; ?>',
        grave15,
        '../../<?php echo $grave15["imagepath"]?>',
        15);

    // Check if values are empty or null before adding labels and values
    if ('<?php echo $grave15['name']; ?>' !== '' &&
        '<?php echo $grave15['date_of_birth']; ?>' !== '' &&
        '<?php echo $grave15['date']; ?>' !== '' &&
        '<?php echo $grave15['startDate']; ?>' !== '' &&
        '<?php echo $grave15['expiredDate']; ?>' !== '') {

        // Format the date strings
        var dateOfBirth = new Date('<?php echo $grave15['date_of_birth']; ?>');
        var dateOfDeath = new Date('<?php echo $grave15['date']; ?>');
        var rentDate = new Date('<?php echo $grave15['startDate']; ?>');
        var dueDate = new Date('<?php echo $grave15['expiredDate']; ?>');

        // Convert numeric month to its name
        var monthOfBirth = getMonthName(dateOfBirth.getMonth() + 1);
        var monthOfDeath = getMonthName(dateOfDeath.getMonth() + 1);
        var monthRentDate = getMonthName(rentDate.getMonth() + 1);
        var monthDueDate = getMonthName(dueDate.getMonth() + 1);

        // Update HTML elements with formatted dates
        $("#sidebar-dateofbirth").html("<strong>Date of Birth:</strong> " + monthOfBirth + " " + dateOfBirth.getDate() + ", " + dateOfBirth.getFullYear());
        $("#sidebar-dateofdeath").html("<strong>Date of Death:</strong> " + monthOfDeath + " " + dateOfDeath.getDate() + ", " + dateOfDeath.getFullYear());
        $("#sidebar-rentdate").html("<strong>Rental Date:</strong> " + monthRentDate + " " + rentDate.getDate() + ", " + rentDate.getFullYear());
        $("#sidebar-duedate").html("<strong>Expiration Date:</strong> " + monthDueDate + " " + dueDate.getDate() + ", " + dueDate.getFullYear());
    }
});

grave16.on('click', function () {
    openSidebar(
        '<?php echo $grave16['name']; ?>',
        '<?php echo $grave16['date_of_birth']; ?>',
        '<?php echo $grave16['date']; ?>',
        '<?php echo $grave16['startDate']; ?>',
        '<?php echo $grave16['expiredDate']; ?>',
        grave16,
        '../../<?php echo $grave16["imagepath"]?>',
        16);

    // Check if values are empty or null before adding labels and values
    if ('<?php echo $grave16['name']; ?>' !== '' &&
        '<?php echo $grave16['date_of_birth']; ?>' !== '' &&
        '<?php echo $grave16['date']; ?>' !== '' &&
        '<?php echo $grave16['startDate']; ?>' !== '' &&
        '<?php echo $grave16['expiredDate']; ?>' !== '') {

        // Format the date strings
        var dateOfBirth = new Date('<?php echo $grave16['date_of_birth']; ?>');
        var dateOfDeath = new Date('<?php echo $grave16['date']; ?>');
        var rentDate = new Date('<?php echo $grave16['startDate']; ?>');
        var dueDate = new Date('<?php echo $grave16['expiredDate']; ?>');

        // Convert numeric month to its name
        var monthOfBirth = getMonthName(dateOfBirth.getMonth() + 1);
        var monthOfDeath = getMonthName(dateOfDeath.getMonth() + 1);
        var monthRentDate = getMonthName(rentDate.getMonth() + 1);
        var monthDueDate = getMonthName(dueDate.getMonth() + 1);

        // Update HTML elements with formatted dates
        $("#sidebar-dateofbirth").html("<strong>Date of Birth:</strong> " + monthOfBirth + " " + dateOfBirth.getDate() + ", " + dateOfBirth.getFullYear());
        $("#sidebar-dateofdeath").html("<strong>Date of Death:</strong> " + monthOfDeath + " " + dateOfDeath.getDate() + ", " + dateOfDeath.getFullYear());
        $("#sidebar-rentdate").html("<strong>Rental Date:</strong> " + monthRentDate + " " + rentDate.getDate() + ", " + rentDate.getFullYear());
        $("#sidebar-duedate").html("<strong>Expiration Date:</strong> " + monthDueDate + " " + dueDate.getDate() + ", " + dueDate.getFullYear());
    }
});

grave17.on('click', function () {
    openSidebar(
        '<?php echo $grave17['name']; ?>',
        '<?php echo $grave17['date_of_birth']; ?>',
        '<?php echo $grave17['date']; ?>',
        '<?php echo $grave17['startDate']; ?>',
        '<?php echo $grave17['expiredDate']; ?>',
        grave17,
        '../../<?php echo $grave17["imagepath"]?>',
        17);

    // Check if values are empty or null before adding labels and values
    if ('<?php echo $grave17['name']; ?>' !== '' &&
        '<?php echo $grave17['date_of_birth']; ?>' !== '' &&
        '<?php echo $grave17['date']; ?>' !== '' &&
        '<?php echo $grave17['startDate']; ?>' !== '' &&
        '<?php echo $grave17['expiredDate']; ?>' !== '') {

        // Format the date strings
        var dateOfBirth = new Date('<?php echo $grave17['date_of_birth']; ?>');
        var dateOfDeath = new Date('<?php echo $grave17['date']; ?>');
        var rentDate = new Date('<?php echo $grave17['startDate']; ?>');
        var dueDate = new Date('<?php echo $grave17['expiredDate']; ?>');

        // Convert numeric month to its name
        var monthOfBirth = getMonthName(dateOfBirth.getMonth() + 1);
        var monthOfDeath = getMonthName(dateOfDeath.getMonth() + 1);
        var monthRentDate = getMonthName(rentDate.getMonth() + 1);
        var monthDueDate = getMonthName(dueDate.getMonth() + 1);

        // Update HTML elements with formatted dates
        $("#sidebar-dateofbirth").html("<strong>Date of Birth:</strong> " + monthOfBirth + " " + dateOfBirth.getDate() + ", " + dateOfBirth.getFullYear());
        $("#sidebar-dateofdeath").html("<strong>Date of Death:</strong> " + monthOfDeath + " " + dateOfDeath.getDate() + ", " + dateOfDeath.getFullYear());
        $("#sidebar-rentdate").html("<strong>Rental Date:</strong> " + monthRentDate + " " + rentDate.getDate() + ", " + rentDate.getFullYear());
        $("#sidebar-duedate").html("<strong>Expiration Date:</strong> " + monthDueDate + " " + dueDate.getDate() + ", " + dueDate.getFullYear());
    }
});

grave18.on('click', function () {
    openSidebar(
        '<?php echo $grave18['name']; ?>',
        '<?php echo $grave18['date_of_birth']; ?>',
        '<?php echo $grave18['date']; ?>',
        '<?php echo $grave18['startDate']; ?>',
        '<?php echo $grave18['expiredDate']; ?>',
        grave18,
        '../../<?php echo $grave18["imagepath"]?>',
        18);

    // Check if values are empty or null before adding labels and values
    if ('<?php echo $grave18['name']; ?>' !== '' &&
        '<?php echo $grave18['date_of_birth']; ?>' !== '' &&
        '<?php echo $grave18['date']; ?>' !== '' &&
        '<?php echo $grave18['startDate']; ?>' !== '' &&
        '<?php echo $grave18['expiredDate']; ?>' !== '') {

        // Format the date strings
        var dateOfBirth = new Date('<?php echo $grave18['date_of_birth']; ?>');
        var dateOfDeath = new Date('<?php echo $grave18['date']; ?>');
        var rentDate = new Date('<?php echo $grave18['startDate']; ?>');
        var dueDate = new Date('<?php echo $grave18['expiredDate']; ?>');

        // Convert numeric month to its name
        var monthOfBirth = getMonthName(dateOfBirth.getMonth() + 1);
        var monthOfDeath = getMonthName(dateOfDeath.getMonth() + 1);
        var monthRentDate = getMonthName(rentDate.getMonth() + 1);
        var monthDueDate = getMonthName(dueDate.getMonth() + 1);

        // Update HTML elements with formatted dates
        $("#sidebar-dateofbirth").html("<strong>Date of Birth:</strong> " + monthOfBirth + " " + dateOfBirth.getDate() + ", " + dateOfBirth.getFullYear());
        $("#sidebar-dateofdeath").html("<strong>Date of Death:</strong> " + monthOfDeath + " " + dateOfDeath.getDate() + ", " + dateOfDeath.getFullYear());
        $("#sidebar-rentdate").html("<strong>Rental Date:</strong> " + monthRentDate + " " + rentDate.getDate() + ", " + rentDate.getFullYear());
        $("#sidebar-duedate").html("<strong>Expiration Date:</strong> " + monthDueDate + " " + dueDate.getDate() + ", " + dueDate.getFullYear());
    }
});

grave19.on('click', function () {
    openSidebar(
        '<?php echo $grave19['name']; ?>',
        '<?php echo $grave19['date_of_birth']; ?>',
        '<?php echo $grave19['date']; ?>',
        '<?php echo $grave19['startDate']; ?>',
        '<?php echo $grave19['expiredDate']; ?>',
        grave19,
        '../../<?php echo $grave19["imagepath"]?>',
        19);

    // Check if values are empty or null before adding labels and values
    if ('<?php echo $grave19['name']; ?>' !== '' &&
        '<?php echo $grave19['date_of_birth']; ?>' !== '' &&
        '<?php echo $grave19['date']; ?>' !== '' &&
        '<?php echo $grave19['startDate']; ?>' !== '' &&
        '<?php echo $grave19['expiredDate']; ?>' !== '') {

        // Format the date strings
        var dateOfBirth = new Date('<?php echo $grave19['date_of_birth']; ?>');
        var dateOfDeath = new Date('<?php echo $grave19['date']; ?>');
        var rentDate = new Date('<?php echo $grave19['startDate']; ?>');
        var dueDate = new Date('<?php echo $grave19['expiredDate']; ?>');

        // Convert numeric month to its name
        var monthOfBirth = getMonthName(dateOfBirth.getMonth() + 1);
        var monthOfDeath = getMonthName(dateOfDeath.getMonth() + 1);
        var monthRentDate = getMonthName(rentDate.getMonth() + 1);
        var monthDueDate = getMonthName(dueDate.getMonth() + 1);

        // Update HTML elements with formatted dates
        $("#sidebar-dateofbirth").html("<strong>Date of Birth:</strong> " + monthOfBirth + " " + dateOfBirth.getDate() + ", " + dateOfBirth.getFullYear());
        $("#sidebar-dateofdeath").html("<strong>Date of Death:</strong> " + monthOfDeath + " " + dateOfDeath.getDate() + ", " + dateOfDeath.getFullYear());
        $("#sidebar-rentdate").html("<strong>Rental Date:</strong> " + monthRentDate + " " + rentDate.getDate() + ", " + rentDate.getFullYear());
        $("#sidebar-duedate").html("<strong>Expiration Date:</strong> " + monthDueDate + " " + dueDate.getDate() + ", " + dueDate.getFullYear());
    }
});

grave20.on('click', function () {
    openSidebar(
        '<?php echo $grave20['name']; ?>',
        '<?php echo $grave20['date_of_birth']; ?>',
        '<?php echo $grave20['date']; ?>',
        '<?php echo $grave20['startDate']; ?>',
        '<?php echo $grave20['expiredDate']; ?>',
        grave20,
        '../../<?php echo $grave20["imagepath"]?>',
        20);

    // Check if values are empty or null before adding labels and values
    if ('<?php echo $grave20['name']; ?>' !== '' &&
        '<?php echo $grave20['date_of_birth']; ?>' !== '' &&
        '<?php echo $grave20['date']; ?>' !== '' &&
        '<?php echo $grave20['startDate']; ?>' !== '' &&
        '<?php echo $grave20['expiredDate']; ?>' !== '') {

        // Format the date strings
        var dateOfBirth = new Date('<?php echo $grave20['date_of_birth']; ?>');
        var dateOfDeath = new Date('<?php echo $grave20['date']; ?>');
        var rentDate = new Date('<?php echo $grave20['startDate']; ?>');
        var dueDate = new Date('<?php echo $grave20['expiredDate']; ?>');

        // Convert numeric month to its name
        var monthOfBirth = getMonthName(dateOfBirth.getMonth() + 1);
        var monthOfDeath = getMonthName(dateOfDeath.getMonth() + 1);
        var monthRentDate = getMonthName(rentDate.getMonth() + 1);
        var monthDueDate = getMonthName(dueDate.getMonth() + 1);

        // Update HTML elements with formatted dates
        $("#sidebar-dateofbirth").html("<strong>Date of Birth:</strong> " + monthOfBirth + " " + dateOfBirth.getDate() + ", " + dateOfBirth.getFullYear());
        $("#sidebar-dateofdeath").html("<strong>Date of Death:</strong> " + monthOfDeath + " " + dateOfDeath.getDate() + ", " + dateOfDeath.getFullYear());
        $("#sidebar-rentdate").html("<strong>Rental Date:</strong> " + monthRentDate + " " + rentDate.getDate() + ", " + rentDate.getFullYear());
        $("#sidebar-duedate").html("<strong>Expiration Date:</strong> " + monthDueDate + " " + dueDate.getDate() + ", " + dueDate.getFullYear());
    }
});

      // Event listener for map click (to close the sidebar)
      map.on('click', function () {
        closeSidebar();
      });


  // Graph representation (adjacency list)
  var graph = {
      startMarker: {C: 1, E: 2, A:0},
   
      grave2: {C: 1},
      C: { startMarker: 1, grave2: 1, grave17: 1,grave16: 1,grave12: 1,grave19: 1,  E:1},
      grave1: { startMarker: 3, C: 2, E: 1, grave3:1},
      E: { startMarker: 2, C: 1, grave1:1, grave5:1,grave14:1, G:1},
      grave3: { grave1:1,grave20:1}, 
      G: {grave8:1,E:1,grave15:1,grave18:1,H:1},
      grave5: { E:1,grave1:1},
      grave4: {H:1},
      grave6:{grave4:1, H:1},
      grave8: { G:1, grave5:1 },
      grave7: {grave9:1},
      grave9 :{grave7:1,F:1},
      H:{grave4:1, G:1,grave6:1,F:1},
      grave9 :{grave7:1,F:1},
      A: {startMarker: 0, grave10: 1,grave11: 1,C:1, E:1},
      grave10 :{A:1},
      grave11 :{A:1},
      grave12 :{C:1},
      grave13 :{F:1},
      grave14 :{E:1},
      grave15 :{G:1},
      grave16 :{C:1},
      grave17 :{C:1},
      grave18 :{G:1},
      grave19 :{C:1},
      grave20 :{grave3:1},
      F:{grave9:1,grave1:1,grave13:1}
    };

      // Dijkstra's algorithm implementation
      function findRoute(marker, fromsearch=false) {
        // Find the shortest path using Dijkstra's algorithm
        function dijkstra(graph, startNode, endNode) {
          var distances = {};
          var previous = {};
          var queue = [];
          var visited = {};

          // Initialize distances and previous nodes
          for (var node in graph) {
            distances[node] = Infinity;
            previous[node] = null;
          }

          distances[startNode] = 0;
          queue.push({ node: startNode, distance: 0 });

          while (queue.length > 0) {
            // Sort the queue by distance in ascending order
            queue.sort(function (a, b) {
              return a.distance - b.distance;
            });

            var currentNode = queue.shift().node;

            if (currentNode === endNode) {
              break;
            }

            if (visited[currentNode]) {
              continue;
            }

            visited[currentNode] = true;

            for (var neighbor in graph[currentNode]) {
              var distance = graph[currentNode][neighbor];
              var totalDistance = distances[currentNode] + distance;

              if (totalDistance < distances[neighbor]) {
                distances[neighbor] = totalDistance;
                previous[neighbor] = currentNode;
                queue.push({ node: neighbor, distance: totalDistance });
              }
            }
          }

          // Build the route from end to start
          var route = [];
          var current = endNode;

          while (current !== null) {
            route.unshift(current);
            current = previous[current];
          }

          return route;
        }

        // Clear previous polylines
        map.eachLayer(function (layer) {
          if (layer instanceof L.Polyline) {
            map.removeLayer(layer);
          }
        });
        if(!fromsearch){
          alert('Getting directions to the marker...');
        }
        // Get the start and end markers' coordinates
        var startLatLng = startMarker.getLatLng();
        var endLatLng = marker.getLatLng();

        // Find the nearest nodes in the graph to the start and end markers
        var nearestStartNode = findNearestNode(startLatLng);
        var nearestEndNode = findNearestNode(endLatLng);

        // Perform Dijkstra's algorithm to find the shortest path
        var shortestPath = dijkstra(graph, nearestStartNode, nearestEndNode);

        // Convert node names to coordinates for creating the polyline
        var latLngs = shortestPath.map(function (node) {
          return getNodeCoordinates(node);
        });

        // Create a polyline between the markers
        var polyline = L.polyline(latLngs, { color: 'blue' }).addTo(map);
        map.fitBounds(polyline.getBounds());
      }

      // Helper functions

      // Calculate the distance between two LatLng coordinates using the Haversine formula
      function calculateDistance(latlng1, latlng2) {
        const R = 6371; // Radius of the Earth in kilometers
        const lat1 = latlng1.lat;
        const lon1 = latlng1.lng;
        const lat2 = latlng2.lat;
        const lon2 = latlng2.lng;

        const dLat = toRad(lat2 - lat1);
        const dLon = toRad(lon2 - lon1);
        const a =
          Math.sin(dLat / 2) * Math.sin(dLat / 2) +
          Math.cos(toRad(lat1)) *
          Math.cos(toRad(lat2)) *
          Math.sin(dLon / 2) *
          Math.sin(dLon / 2);
        const c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1 - a));
        const distance = R * c;
        return distance;
      }

      // Convert degrees to radians
      function toRad(degrees) {
        return degrees * (Math.PI / 180);
      }

      // Find the nearest node in the graph to the given coordinates
      function findNearestNode(coordinates) {
        var nearestNode = null;
        var nearestDistance = Infinity;

        for (var node in graph) {
          var nodeCoordinates = getNodeCoordinates(node);
          var distance = calculateDistance(coordinates, nodeCoordinates);

          if (distance < nearestDistance) {
            nearestNode = node;
            nearestDistance = distance;
          }
        }

        return nearestNode;
      }

      // Get the LatLng coordinates of a node
      function getNodeCoordinates(node) {
      switch (node) {
        case 'startMarker':
          return { lat: 12.63133, lng: 123.93114 };
        case 'grave2':
          return { lat: 12.63137, lng: 123.93156 };
        case 'C':
          return { lat: 12.63147, lng: 123.93141 };
        case 'grave1':
          return { lat: 12.63166, lng: 123.93184};
          case 'E':
          return { lat: 12.63159,lng: 123.93164 };
          case 'grave3':
          return { lat: 12.63149, lng: 123.93185 };
          case 'G':
          return { lat: 12.63178, lng: 123.93170};
          case 'F':
          return { lat: 12.63166, lng: 123.93188 };
          case 'H':
          return { lat: 12.63176, lng: 123.93190};
          case 'grave4':
          return { lat: 12.63179, lng: 123.93194 };
          case 'grave5':
          return { lat: 12.63163,lng: 123.93162 };
          case 'grave6':
          return { lat: 12.63170, lng: 123.93210 };
          case 'grave7':
          return { lat: 12.63158, lng: 123.93200 };
          case 'grave8':
          return { lat: 12.63182, lng: 123.93174 };
          case 'grave9':
          return { lat: 12.63153, lng: 123.93192 };
          case 'A':
          return { lat: 12.63136, lng: 123.93122 };
          case 'grave10':
          return { lat: 12.63144, lng: 123.93127 };
          case 'grave11':
          return { lat: 12.63136, lng: 123.93130 };
          case 'grave12':
          return { lat: 12.63154, lng: 123.93147 };
          case 'grave13':
          return { lat: 12.63165, lng: 123.93196 };
          case 'grave14':
          return { lat: 12.63163, lng: 123.93172 };
          case 'grave15':
          return { lat: 12.63173, lng: 123.93164 };
          case 'grave16':
          return { lat: 12.63138, lng: 123.93144 };
          case 'grave17':
          return { lat: 12.63149, lng: 123.93136 };
          case 'grave18':
          return { lat: 12.63179, lng: 123.93183 };
          case 'grave19':
          return { lat: 12.63151, lng: 123.93158 };
          case 'grave20':
          return { lat: 12.63145, lng: 123.93171 };
        default:
          return null;
      }
    }

    </script>
    <?php 
      if(isset($_GET['grave'])){
        ?>
           <script>
              window.onload = ()=>{
                findRoute(graves[<?php echo ($_GET['grave']-1)?>], true)
              }
            </script>
        <?php
      }
    ?>

</html>