<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require '../../PHPMailer/src/Exception.php';
require '../../PHPMailer/src/PHPMailer.php';
require '../../PHPMailer/src/SMTP.php';


   require_once "../../db.php";

if(isset($_REQUEST['pwdrst']))
{
  $email = $_REQUEST['email'];
  $check_email = mysqli_query($conn,"select email from adminreg where email='$email'");
  $res = mysqli_num_rows($check_email);


  if($res>0)
  {
    $message = '<div>
     <p><b>Hello!</b></p>
     <p>You are recieving this email because we recieved a password reset request for your account.</p>
     <br>
     <p><button class="btn btn-primary"><a href="http://'.$_SERVER['SERVER_NAME'].'/CemeteryButag/pages/Admin/changepassword.php?secret='.base64_encode($email).'">Reset Password</a></button></p>
     <br>
     <p>If you did not request a password reset, no further action is required.</p>
    </div>';


$email = $email; 

$mail = new PHPMailer;

        $mail->isSMTP();  
$mail->SMTPAuth = true;                 
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;   
$mail->Host = 'smtp.gmail.com';
$mail->Port = 587; 
$mail->Username = 'snpalacay@gmail.com';                 // SMTP username
$mail->Password = 'wzzxzketzftzsjsc';    
$mail->FromName = "Butag Cemtery";
$mail->AddAddress($email);
$mail->Subject = "Reset Password";
$mail->isHTML( TRUE );
$mail->Body =$message;
if($mail->send())
{
  $msg = "We have e-mailed your password reset link!";
}
}
else
{
  $msg = "We can't find a user with that email address";
}
}

?>

<script>

window.setTimeout(function() {

    $(".alert").fadeTo(500, 0).slideUp(500, function(){

        $(this).remove(); 

    });

}, 4000);



</script>



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



    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>

    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>





    <!doctype html>

    <html lang="en">

    <head>

 

        <meta charset="utf-8">

        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="shortcut icon" href="icon.ico" />



        <link rel="dns-prefetch" href="https://fonts.gstatic.com">

        <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">





        <link rel="icon" href="Favicon.png">



   

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

        <link rel="shortcut icon" href="icon.ico" />

        <title><?php echo $nav; ?></title>

    </head>

    <body>



    <nav class="navbar navbar-expand-lg navbar-light navbar-laravel">

        <div class="container">

        <a class="navbar-brand" href="adminlogin.php"><?php echo $nav; ?></a>

        </div>

    </nav>





    <main class="login-form">

        <div class="cotainer">

            <div class="row justify-content-center">

                <div class="col-md-8">

                    <div class="card">

                   

                        <div class="card-header">Forgot Password</div>

                        <div class="card-body">

                        <p>Please enter your email address. We will send you a link to reset your password.</p>

                        <?php if(isset($msg)){


?>
<script>

swal({

  title: "Success!",

  text: "We have e-mailed your password reset link!",

  icon: "success",

  button: "Close!",

});

</script>
<?php




}



?>

<?php if(isset($errMsg)){



echo $errMsg;

}



?>

                            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" autocomplete="off">

                                <div class="form-group row">

                                    <label for="email" class="col-md-4 col-form-label text-md-right">Email</label>

                                    <div class="col-md-6">

                                        <input type="email" id="email" class="form-control" name="email" required autofocus>

                                        

                                    </div>

                                </div>



                        





                                <div class="col-md-6 offset-md-4">

                                    <input type="submit" name="pwdrst" class="btn btn-block btn-primary" value="Send Reset Link">



                

                                </div>

                        </div>

                        </form>

                    </div>

                </div>

            </div>

        </div>

        </div>



    </main>









    </body>

    </html>