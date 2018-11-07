<?php
include '../secure/db_connect.php';
require("../secure/functions.php");
require("../secure/config.php");


sec_session_start();

$currentUserId = $_SESSION['user_id'];

try {

    // Find open carts of the user
    $openCart = "SELECT cart.id FROM cart where cart.user_id = ? AND cart.status = 'open' LIMIT 1";

    $deleteCartItems = "DELETE FROM cart_items WHERE cart_id = ?";

    $cartId = null;

    // Find open cart id of the user
    if($stmt1 = $mysqli->prepare($openCart)){
        $stmt1->bind_param('s', $currentUserId);
        $stmt1->execute();
        $stmt1->store_result();
        $stmt1->bind_result( $existingCartId);
        $num_rows = $stmt1->num_rows;

        if($num_rows == 0){
            // No cart exists therefore we don't have to clear anything
        }

        else {
            if($stmt1->fetch())
                $cartId = $existingCartId;

                // Delete items for that cart

                if($stmt2 = $mysqli->prepare($deleteCartItems)) {
                    $stmt2->bind_param('s', $cartId);
                    $stmt2->execute();
                }

        }

    }

}
catch ( Exception $e ) {

}

// redirect to whoever requested this page
$page = $_SERVER['HTTP_REFERER'];
header("Location:$page");

?>