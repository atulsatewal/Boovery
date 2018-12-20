<?php require("secure/db_connect.php");
require("secure/functions.php");
require("secure/config.php");
sec_session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Your orders</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Sublime project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
    <link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
    <link rel="stylesheet" type="text/css" href="styles/categories.css">
    <link rel="stylesheet" type="text/css" href="styles/categories_responsive.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link  rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Hind" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  
      <link rel="stylesheet" href="css/style.css">

  

</head>
<body>

<div class="super_container">

    <?php include ("includes/header_user.php");?> <br>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
          <aside class="profile-card">

	<header>

		<!-- here’s the avatar -->
		<a href="#">
			<img src="Profile-512.png" />
		</a>
    <?php $sql = "SELECT  orders.name , orders.phoneNo, orders.addressLine1 ,orders.addressLine2, orders.zipCode,orders.country From orders where orders.email = ?";
	 if($stmt1 = $mysqli->prepare($sql)){
                    $stmt1->bind_param('s', $_SESSION['user_email']);
                    $stmt1->execute();
                    $stmt1->store_result();
                    $stmt1->bind_result($name,$phoneNo,$addressLine1,$addressLine2,$zipCode,$country);

                }else echo mysqli_error($mysqli);

                if($stmt1->fetch())
                {
            ?>
        
		<h1>Name:<?php echo $name; ?></h1>
		<h1>PhoneNO:<?php echo $phoneNo; ?></h1>

            <?php } else {?>

                No record Found.

            <?php } ?>
		<!-- and role or location -->
		<h2>Role:USER</h2>

	</header>

	<!-- bit of a bio; who are you? -->
	<div class="profile-bio">

        <h4><?php echo  $addressLine1."<br>".$addressLine2."<br>".$zipCode."<br>".$country;?></h4>

	</div>
</aside>




<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/Isotope/isotope.pkgd.min.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/categories.js"></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
</body>
</html>