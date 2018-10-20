<?php
include '../secure/db_connect.php';
require("../secure/functions.php");
require("../secure/config.php");

// SELECT COUNT(*) FROM cart_items, cart WHERE cart_items.cart_id = cart.id AND cart.user_id = ?

sec_session_start();
$itemId = $_POST['itemId']; 
$quantity = $_POST['quantity'];


$user_id = $_SESSION['user_id'];

// Find open carts of the user
$sql = "SELECT cart.id FROM cart where cart.user_id = ? AND cart.status = 'open' LIMIT 1";

	if($stmt1 = $mysqli->prepare($sql)){
                    $stmt1->bind_param('s', $user_id);
                    $stmt1->execute();
                    $stmt1->store_result();
                    $stmt1->bind_result( $existingCartId);
                    $num_rows = $stmt1->num_rows;

                    if($num_rows == 0){
                    	// Create a new Cart
                    	$cartId = createNewCart($mysqli, $user_id);

                    	echo $cartId;

                    	// Additems to newly created cart
                    	addItemToCart($mysqli, $cartId, $itemId, $quantity);

                    }

                    else {
                    	if($stmt1->fetch())
                    		addItemToCart($mysqli, $existingCartId, $itemId, $quantity);
                    }
                    	
    }else if(DEBUG) echo $mysqli->error();


function createNewCart($mysqli, $user_id){

$cartId = null;

$sql = "INSERT INTO `cart`(`status`, `user_id`) VALUES ('open', ?)";

if($stmt1 = $mysqli->prepare($sql)){
                   $stmt1->bind_param('s', $user_id);
                if($stmt1->execute()){
					$cartId = $stmt1->insert_id;
                }
                	
                
                    	
}else if(DEBUG) echo $mysqli->error();

return $cartId;

}


function addItemToCart($mysqli, $cartId, $itemId, $quantity){

	// INSERT INTO ..... ON DUPLICATE KEY UPDATE quantity ....
$sql = "INSERT INTO `cart_items`(`cart_id`, `item_id`, `quantity`) VALUES (?, ?, ?) ON DUPLICATE KEY UPDATE quantity=VALUES(quantity)";

				$stmt1 = $mysqli->prepare($sql);
                   $stmt1->bind_param('sss', $cartId, $itemId, $quantity );
                $stmt1->execute();
                	
                
                    	

}



?>