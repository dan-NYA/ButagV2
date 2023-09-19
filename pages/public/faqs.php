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

    <link href="../../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    

    <link rel="shortcut icon" href="icon.png" />

    <title><?php echo $title; ?></title>



 

    <link rel="stylesheet" type="text/css" href="../../assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="../../assets/css/font-awesome.css">

    <link rel="stylesheet" type="text/css" href="../../assets/css/templatemo-art-factory.css">

    <link rel="stylesheet" type="text/css" href="../../assets/css/owl-carousel.css">



    </head>

    

    <body id="page-top">



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

                    <a class="logo" href="index.php" style="font-size:15px; margin-left: 10px;"><?php echo $navtitle; ?></a>

                    

                     

                        <ul class="nav">

                        <li class="scroll-to-section"><a href="index.php#welcome" >Home</a></li>

                        <li class="scroll-to-section"><a href="faqs.php#faqs" class="active">FAQS</a></li>

                        <li class="scroll-to-section"><a href="index.php#about">About</a></li>

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

    <br>



    <section class="section" id="faqs">

        <div class="container">



            <div class="row">

                <div class="col-lg-12">

                    <div class="section-heading">

                        <h2>Frequently Asked Questions</h2>

                    </div>

                </div>

                <div class="offset-lg-3 col-lg-6">

                    <div class="section-heading">

                        <p>We've crafted this FAQ page to answer many of your frequently asked questions.</p>

                    </div>

                </div>

            </div>

            <?php

            include "../../db.php";

            $sql1="SELECT * from tblfaq";

            $res= mysqli_query($conn,$sql1);

            while($rows = mysqli_fetch_assoc($res))

            {

            

                $id = $rows['id'];

                $question = $rows['question'];

                $answer = $rows['answer'];

            ?>

    

                    <div class="accordions is-first-expanded">

                   

                    <article class="accordion">

                    

                            <div class="accordion-head">

                                <span><?php echo $question; ?></span>

                                <span class="icon">

                                    <i class="icon fa fa-chevron-right"></i>

                                </span>

                            </div>

                            <div class="accordion-body">

                                <div class="content">

                                    <p><?php echo $answer; ?></p>

                                

                                </div>

                            </div>

                        </article>



                           

                        <?php }?>



                       

                      

                    </div>

                    

                </div>

                

            </div>

     

    </section>







   

  

        <br>

        <a href="#page-top" class="btn btn-light btn-lg page-top" role="button" style="float:right; margin-right:10px;"><i class="fas fa-chevron-up"></i></a>

        <?php

require_once "../../db.php";

if(isset($_POST['insert'])){

  $email = $_POST['email'];

  $message = $_POST['message'];

  $sql = "INSERT INTO tblcontact (email, message) VALUE ('$email', '$message')";

  if ($conn->query($sql) === TRUE) {

    echo "<script type='text/javascript'>alert('Questions/Inquiries successfully sent!');</script>";

      echo '<script>window.location.href="index.php"</script>';

  } else {

      echo "Error inserting record: " . $conn->error;

  }

}

?>

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