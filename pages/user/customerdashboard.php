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

<?php include '../../db.php'; 



$que="SELECT * from tblannouncement";

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

    echo '<button type="button" class="close" data-dismiss="alert" aria-label="Close">';

    echo '<span aria-hidden="true">&times;</span>';

    echo '</div>';

 }

 ?>


<div class="container">
  <div class="row">
    <div class="col-md-6">
      <h1>SEARCH</h1>
    </div>
    <div class="col-md-6">
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
  </div>
</div>




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

                </div>

               

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

var table = $('#dataTable').DataTable();

var search_val = ""




$('#filter-name').on('click', function () {

console.log('Searching for name:', $('#search-name').val());

table.column(1).search($('#search-name').val()).draw();

$('#hide').css( 'display', 'block' );

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