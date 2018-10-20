<?php
if (!empty($_POST) && $_SERVER["REQUEST_METHOD"] == "POST") {

//SMTP needs accurate times, and the PHP time zone MUST be set
//This should be done in your php.ini, but this is how to do it if you don't have access to that
    date_default_timezone_set('Etc/UTC');

    require 'PHPMailer/PHPMailerAutoload.php';
    require_once 'secure/db_connect.php';

//Create a new PHPMailer instance

    $sendTo = $_POST['email'];
    $mail = new PHPMailer;

//Tell PHPMailer to use SMTP
    $mail->isSMTP();

//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
    $mail->SMTPDebug = 0;

//Ask for HTML-friendly debug output
    $mail->Debugoutput = 'html';

//Set the hostname of the mail server
    $mail->Host = 'smtp.gmail.com';
// use
// $mail->Host = gethostbyname('smtp.gmail.com');
// if your network does not support SMTP over IPv6

//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
    $mail->Port = 587;

//Set the encryption system to use - ssl (deprecated) or tls
    $mail->SMTPSecure = 'tls';

//Whether to use SMTP authentication
    $mail->SMTPAuth = true;

//Username to use for SMTP authentication - use full email address for gmail
    $mail->Username = "vikasgenius.vikas@gmail.com";

//Password to use for SMTP authentication
    $mail->Password = "9650043051";

//Set who the message is to be sent from
    $mail->setFrom('vikasgenius.vikas@gmail.com', 'Mediclaim');

//Set an alternative reply-to address
   // $mail->addReplyTo('vikasgenius.vikas@gmail.com', 'First Last');

//Set who the message is to be sent to
    $mail->addAddress($sendTo, 'No Name');

//Set the subject line
    $mail->Subject = 'Reset Password OTP';

//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body

    $otp = mt_rand(100000, 999999);

//Replace the plain text body with one created manually
    $mail->Body = 'Your Password reset OTP is '.$otp;



//send the message, check for errors
    if (!$mail->send()) {
        echo "Mailer Error: " . $mail->ErrorInfo;
    } else {
        echo "OTP sent!";

        if ($stmt = $mysqli->prepare("INSERT INTO reset_password VALUES (?, ?)")) {
            $stmt->bind_param('ss', $sendTo, $otp);
            if (!$stmt->execute()) {
                $flag = false;
                if (DEBUG) echo $stmt->error;
            }
        } else {
            if (DEBUG) echo $mysqli->error;
            $flag = false;
        }

        header('location: new_password.php');

    }

}
?>

<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Delhi Police | Log in</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="plugins/iCheck/square/blue.css">


</head>


<body class="hold-transition login-page">
<div class="login-box">
    <div class="login-logo">
        <a href="#"><b>Delhi Police 3.0</b></a>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
        <p class="login-box-msg">Forgot Password</p>


        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post"  class="form-horizontal">

            <div class="form-group has-feedback">
                <input type="email" id="email" name="email" class="form-control" placeholder="Email">
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            </div>

            <div class="control-group">
                <div class="controls">
                    <button type="submit" class="btn btn-primary btn-block btn-flat" >Send OTP</button>
                    <!-- if login failed show this -->

                </div>
            </div>

        </form>


    </div>
    <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- /.register-box -->

<!--Scripts-->
<!-- jQuery 2.2.0 -->
<script src="plugins/jQuery/jQuery-2.2.0.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="dist/js/bootstrap.min.js"></script>
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script>
    //FADE IN MESSAGES
    $(document).ready(function() {
        $(".error").fadeIn("slow");
        $("#success").fadeIn("slow");
    });
</script>

</body>

</html>