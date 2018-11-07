<?php require("secure/db_connect.php");
require("secure/functions.php");
require("secure/config.php");
sec_session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Checkout</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Sublime project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/checkout.css">
<link rel="stylesheet" type="text/css" href="styles/checkout_responsive.css">
</head>
<body>

<div class="super_container">

    <?php include ("includes/header_user.php");?>
	
	<!-- Home -->

	<div class="home">
		<div class="home_container">
			<div class="home_background" style="background-image:url(images/cart.jpg)"></div>
			<div class="home_content_container">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="home_content">
								<div class="breadcrumbs">
									<ul>
										<li><a href="index.html">Home</a></li>
										<li><a href="cart.php">Shopping Cart</a></li>
										<li>Checkout</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Checkout -->
	
	<div class="checkout">
		<div class="container">
			<div class="row">

				<!-- Billing Info -->
				<div class="col-lg-6">
					<div class="billing checkout_section">
						<div class="section_title">Billing Address</div>
						<div class="section_subtitle">Enter your address info</div>
						<div class="checkout_form_container">
							<form action="app_functions/checkout.php" id="checkout_form"  method="post" class="checkout_form">
                                <input type="hidden" id="user_id" name="user_id" class="checkout_input" value="<?php echo $_SESSION['user_id'] ;?>">
								<div>
									<!-- Company -->
									<label for="name">Name</label>
									<input type="text" id="name" name="name" class="checkout_input" required="required" value="<?php echo $_SESSION['username'] ;?>">
								</div>
								<div>
									<!-- Country -->
									<label for="checkout_country">Country*</label>
									<select name="checkout_country" id="checkout_country" name="checkout_country" class="dropdown_item_select checkout_input" required="required">
										<option></option>
                                        <option>India</option>
                                        <option>USA</option>
                                        <option>Australia</option>
										<option>Lithuania</option>
										<option>Sweden</option>
										<option>UK</option>
										<option>Italy</option>
									</select>
								</div>
								<div>
									<!-- Address -->
									<label for="checkout_address">Address*</label>
									<input type="text" id="checkout_address" name="checkout_address" class="checkout_input" required="required">
									<input type="text" id="checkout_address_2" name="checkout_address_2" class="checkout_input checkout_address_2" required="required">
								</div>
								<div>
									<!-- Zipcode -->
									<label for="checkout_zipcode">Zipcode*</label>
									<input type="text" id="checkout_zipcode" name="checkout_zipcode" class="checkout_input" required="required">
								</div>
								<div>
									<!-- City / Town -->
									<label for="checkout_city">City/Town*</label>
									<select name="checkout_city" id="checkout_city" name="checkout_city" class="dropdown_item_select checkout_input" require="required">
										<option></option>
										<option>City</option>
										<option>City</option>
										<option>City</option>
										<option>City</option>
									</select>
								</div>
								<div>
									<!-- Phone no -->
									<label for="checkout_phone">Phone no*</label>
									<input type="phone" id="checkout_phone" name="checkout_phone" class="checkout_input" required="required">
								</div>
								<div>
									<!-- Email -->
									<label for="checkout_email">Email Address*</label>
									<input type="phone" id="checkout_email" name="checkout_email" class="checkout_input" required="required" readonly="readonly" value="<?php echo $_SESSION['user_email'];?>">
								</div>
                                <button type="submit" class="btn btn-outline-secondary">Place Order</button>
                            </form>
						</div>
					</div>
				</div>

				<!-- Order Info -->

				<div class="col-lg-6">
					<div class="order checkout_section">
						<div class="section_title">Your order</div>
						<div class="section_subtitle">Order details</div>

						<!-- Order details -->
						<div class="order_list_container">
							<div class="order_list_bar d-flex flex-row align-items-center justify-content-start">
								<div class="order_list_title">Product</div>
								<div class="order_list_value ml-auto">Total</div>
							</div>
							<ul class="order_list">
                                <?php
                                $sql = "SELECT items.id, cart.id, items.name, items.description, items.price, cart_items.quantity , items.author, items.isbn, category.category_name, items.img_url 
                        FROM items, category, cart_items, cart 
                        WHERE cart.user_id = ? 
                        AND cart.status = 'open' 
                        AND cart.id = cart_items.cart_id 
                        AND items.id = cart_items.item_id 
                        AND items.category_id = category.id ";

                                $total = 0;

                                if($stmt1 = $mysqli->prepare($sql)){
                                    $stmt1->bind_param('s', $_SESSION['user_id']);
                                    $stmt1->execute();
                                    $stmt1->store_result();
                                    $stmt1->bind_result( $id, $cartId,  $name, $description,  $price, $quantity, $author, $isbn, $category_name, $img_url );

                                }else if(DEBUG) echo $mysqli->error();

                                while($stmt1->fetch())
                                {
                                ?>

                                    <li class="d-flex flex-row align-items-center justify-content-start">
                                        <div class="order_list_title"><?php echo $name; ?> </div>
                                        <div class="order_list_value ml-auto">Rs <?php echo $price * $quantity; ?></div>
                                    </li>

                                <?php
                                    $total += $price * $quantity;

                                }?>

								<li class="d-flex flex-row align-items-center justify-content-start">
									<div class="order_list_title">Subtotal</div>
									<div class="order_list_value ml-auto">Rs <?php echo $total; ?></div>
								</li>
								<li class="d-flex flex-row align-items-center justify-content-start">
									<div class="order_list_title">Shipping</div>
									<div class="order_list_value ml-auto">Free</div>
								</li>
								<li class="d-flex flex-row align-items-center justify-content-start">
									<div class="order_list_title">Total</div>
									<div class="order_list_value ml-auto">Rs <?php echo $total; ?></div>
								</li>
							</ul>
						</div>

						<!-- Payment Options -->
						<div class="payment">
							<div class="payment_options">
								<label class="payment_option clearfix">Cash on delivery
									<input type="radio" checked="checked" name="radio">
									<span class="checkmark"></span>
								</label>
								<label class="payment_option clearfix">Credit card
									<input type="radio" name="radio">
									<span class="checkmark"></span>
								</label>
								<label class="payment_option clearfix">Direct bank transfer
									<input type="radio"  name="radio">
									<span class="checkmark"></span>
								</label>
							</div>
						</div>

						<!-- Order Text -->
						<div class="order_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin pharetra temp or so dales. Phasellus sagittis auctor gravida. Integ er bibendum sodales arcu id te mpus. Ut consectetur lacus.</div>

					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Footer -->
	
	<div class="footer_overlay"></div>
	<footer class="footer">
		<div class="footer_background" style="background-image:url(images/footer.jpg)"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="footer_content d-flex flex-lg-row flex-column align-items-center justify-content-lg-start justify-content-center">
						<div class="footer_logo"><a href="#">Sublime.</a></div>
						<div class="copyright ml-auto mr-auto"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
						<div class="footer_social ml-lg-auto">
							<ul>
								<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<!--<script src="js/checkout.js"></script> -->
</body>
</html>