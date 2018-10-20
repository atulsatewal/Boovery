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
    <div class="login-box-body" style="display: none;">
        <p class="login-box-msg">Sign In</p>


        <form action="secure/process_login.php" method="post" name="login_form" class="form-horizontal">

            <div class="form-group has-feedback">
                <input type="email" id="email" name="email" class="form-control" placeholder="Email">
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>

            <div class="control-group">
                <div class="controls">
                    <button type="submit" class="btn btn-primary btn-block btn-flat" onclick="formhash(this.form, this.form.password);">Sign in</button>
                    <!-- if login failed show this -->
                    <?php if(isset($_GET['error'])) {?>
                        <div class="alert alert-error fade in error">
                            <button type="button" class="close" data-dismiss="alert">x</button>
                            <strong>Oops! That wasn't correct...</strong>
                        </div>
                    <?php }?>
                </div>
            </div>
        </form>


    </div>
    <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<div class="login-box">
    <!-- /.register-logo -->
    <div class="login-box-body">
        <p class="login-box-msg">Sign Up</p>

        <form action="secure/sec_reg.php" method="post" name="registration_form" class="form-horizontal">
            <div class="control-group">
                <label class="control-label" for="inputUser">Username</label>
                <div class="controls">
                    <input type="text" id="username" class="form-control" name="username" placeholder="Username">
                </div>
                <div class="control-group">
                    <label class="control-label" for="inputEmail">Email</label>
                    <div class="controls">
                        <input type="text" id="email" class="form-control" name="email" placeholder="Email">
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="inputRole">Role</label>
                    <div class="controls">
                        <input type="text" id="role" class="form-control" name="role" placeholder="Role">
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="inputPassword">Password</label>
                    <div class="controls">
                        <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                        <input type="hidden" name="p" id="p" value="">
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <button type="submit" class="btn btn btn-primary btn-block btn-flat" onclick="formhash(this.form, this.form.password, this.form.p);">Register</button>

                        <!-- If registration successfull show everything ok info -->
                        <?php if(isset($_GET['success'])) {?>
                            <div class="alert alert-success fade in" id="success">
                                <button type="button" class="close" data-dismiss="alert">x</button>
                                <strong>Registration done! <br>Please log in...</strong>
                            </div>
                        <?php }?>

                        <!-- if registration error show this -->
                        <?php if(isset($_GET['registrationfailed'])) {?>
                            <div class="alert alert-error fade in error">
                                <button type="button" class="close" data-dismiss="alert">x</button>
                                <strong>Oops! Something went wrong...</strong>
                            </div>
                        <?php }?>

                    </div>
                </div>
        </form>
    </div>
    <!-- /.register-box-body -->
</div>
<!-- /.register-box -->

<!--Scripts-->
<!-- jQuery 2.2.0 -->
<script src="plugins/jQuery/jQuery-2.2.0.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="dist/js/bootstrap.min.js"></script>
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="secure/sha512.js"></script>
<script src="secure/forms.js"></script>
<script>
    //FADE IN MESSAGES
    $(document).ready(function() {
        $(".error").fadeIn("slow");
        $("#success").fadeIn("slow");
    });
</script>

</body>

</html>