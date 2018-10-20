<?php
if (!empty($_POST) && $_SERVER["REQUEST_METHOD"] == "POST") {

    $otp = $_POST['otp'];
    $email = $_POST['email'];

    if ($stmt = $mysqli->prepare("delete s 
from members s 
left join reset_password i on s.email = i.email 
where i.otp = ? and i.email = ?")) {
        $stmt->bind_param('ss', $otp, $email);
        if (!$stmt->execute()) {

            if (DEBUG) echo $stmt->error;
        }else echo "Please contact Ad. DCP II to complete the process";
    } else {
        if (DEBUG) echo $mysqli->error;
        $flag = false;
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

            <div class="form-group has-feedback">
                <input type="number" id="otp" name="otp" class="form-control" placeholder="OTP">
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            </div>

            <div class="control-group">
                <div class="controls">
                    <button type="submit" class="btn btn-primary btn-block btn-flat" >Reset Password</button>
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