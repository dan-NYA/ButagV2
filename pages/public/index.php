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

    $headerimage1 = $row['headerimage1'];

    }

?>


<!DOCTYPE html>

<html lang="en">

<!-- Root element of the HTML document -->

<head>

<!-- Document metadata -->

<meta charset="utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<meta name="description" content="">


<!-- External resources -->

<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">

<link href="../../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

<link rel="shortcut icon" href="icon.png" />

<!-- Document title and CSS stylesheets -->

<title><?php echo $title; ?></title>





<link rel="stylesheet" type="text/css" href="../../assets/css/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="../../assets/css/font-awesome.css">

<link rel="stylesheet" type="text/css" href="../../assets/css/templatemo-art-factory.css">

<link rel="stylesheet" type="text/css" href="../../assets/css/owl-carousel.css">



</head>

<!-- Document body -->

<body id="page-top">


<!-- Preloader animation -->
<div id="preloader">

    <div class="jumper">

        <div></div>

        <div></div>

        <div></div>

    </div>

</div>  





<header class="header-area header-sticky">

   <!-- Document header with logo and navigation menu -->

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

<a class="logo" href="index.php" style="font-size:15px; margin-left: 10px;"><?php echo $navtitle; ?></a>

                

            

                     <!-- Navigation menu toggle button -->

                    <ul class="nav">

                        <li class="scroll-to-section"><a href="#welcome" class="active">Home</a></li>

                        <li class="scroll-to-section"><a href="faqs.php#faqs">FAQS</a></li>

                        <li class="scroll-to-section"><a href="#about">About</a></li>

                        <li class="scroll-to-section"><a href="contactus.php#contact-us">Contact Us</a></li>
                        
                        <li class="scroll-to-section"><a href="login.php">Sign In</a></li>
                        

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


<!-- Welcome section with image and text -->

    <div class="header-text">

        <div class="container">

            <div class="row">

                <div class="left-text col-lg-6 col-md-6 col-sm-12 col-xs-12" data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">

                
                    <!-- Cemetery name -->
                    <center>   <h4 style ="color: #223892;"><?php echo $header1;?></h4></center>

                    <br>

                
                    <!-- Cemetery description -->
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



<section class="section" id="about">

    
    <!-- About section with cemetery mapping system information -->
    <div class="container">

        <div class="row">

            <div class="col-lg-7 col-md-12 col-sm-12" data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">

            

            <?php include '../../db.php'; 



$query="SELECT * from tblcontent";

$result= mysqli_query($conn,$query);

while($row = mysqli_fetch_assoc($result))

{



    ?>

    <img class="rounded img-fluid d-block mx-auto" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['headerimage2']); ?>" />

    <?php

}

?>

            </div>

            <div class="right-text col-lg-5 col-md-12 col-sm-12 mobile-top-fix">

                <div class="left-heading">

            <!-- Cemetery mapping system description -->

            <h5><?php echo $header2;?></h5>

                </div>

                <div class="left-text">

                    <p style="text-align:justify">	

            <!-- Cemetery mapping system association description -->
            <?php echo $description2;?></p>

                

                </div>

            </div>

        </div>

        <div class="row">

            <div class="col-lg-12">

                <div class="hr"></div>

            </div>

        </div>

    </div>

</section>



<section class="section" id="about2">

    <div class="container">

        <div class="row">

            <div class="left-text col-lg-5 col-md-12 col-sm-12 mobile-bottom-fix">

                <div class="left-heading">

                    <h5>BENEFITS</h5>

                </div>

                

                <ul>

                    <li>
            
                    <img src="https://img.icons8.com/nolan/64/1A6DFF/C822FF/walking.png"/>

                        <div class="text">

                            <h6>Locate graves much faster and more efficiently</h6>

                            

                        </div>

                    </li>

                    <li>

                    <img src="https://img.icons8.com/nolan/64/search.png"/>

                        <div class="text">

                            <h6>Searching your loved one information on your cell phone, tablet, or any other device</h6>

                            

                        </div>

                    </li>

                    <li>

                    <img src="https://img.icons8.com/nolan/64/waypoint-map.png"/>

                        <div class="text">

                            <h6>Digital map will guide you step-by-step to the gravesite</h6>

                            

                        </div>

                    </li>

                    <li>

                    <img src="https://img.icons8.com/nolan/64/1A6DFF/C822FF/delivery-time.png"/>

                        <div class="text">

                            <h6>Energy and time saving</h6>

                            

                        </div>

                    </li>

                </ul>

            </div>

            <div class="right-image col-lg-7 col-md-12 col-sm-12 mobile-bottom-fix-big" data-scroll-reveal="enter right move 30px over 0.6s after 0.4s">

                <img src="../../assets/images/gif.gif" class="rounded img-fluid d-block mx-auto" alt="App">

            </div>

        </div>

    </div>

</section>



</section>











    <br>

    <a href="#page-top" class="btn btn-light btn-lg page-top" role="button" style="float:right; margin-right:10px;"><i class="fas fa-chevron-up"></i></a>



</section>



<footer>

    <div class="container">

        <div class="row">

            <div class="col-lg-7 col-md-12 col-sm-12">

            <p class="copyright">Copyright &copy; <span id="year"></span>  <?php echo $title; ?>

        

            </div>

        </div>

    </div>

</footer>





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



</body>

</html>