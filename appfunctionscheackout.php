<?php
include '../secure/db_connect.php';
require("../secure/functions.php");
require("../secure/config.php");

// SELECT COUNT(*) FROM cart_items, cart WHERE cart_items.cart_id = cart.id AND cart.user_id = ?

sec_session_start();
$userId = $_POST['user_id'];
$name = $_POST['name'];
$checkout_country = $_POST['checkout_country'];
$checkout_address = $_POST['checkout_address'];
$checkout_address_2 = $_POST['checkout_address_2'];
$checkout_zipcode = $_POST['checkout_zipcode'];
$checkout_city = $_POST['checkout_city'];
$checkout_phone = $_POST['checkout_phone'];
$checkout_email = $_POST['checkout_email'];
$paymentMethod = "cash";

$currentUserId = $_SESSION['user_id'];

try {

    $mysqli->autocommit(FALSE); // i.e., start transaction

    // Find open carts of the user
    $openCart = "SELECT cart.id FROM cart where cart.user_id = ? AND cart.status = 'open' LIMIT 1";

    $closeCart = "UPDATE cart SET status = 'closed' WHERE id = ?";

    $insertOrder = "INSERT INTO orders(cart_id, name, country, addressLine1, addressLine2, zipCode, city, phoneNo, paymentMethod, email) VALUES ( ?, ?, ?, ?, ?, ?, ? ,?, ?, ?)";

    $cartId = null;

echo "CHALO KHEL SHURU KARE<br>";
    // Find open cart id of the user
    if($stmt1 = $mysqli->prepare($openCart)){
        $stmt1->bind_param('s', $currentUserId);
        $stmt1->execute();
        $stmt1->store_result();
        $stmt1->bind_result( $existingCartId);
        $num_rows = $stmt1->num_rows;

        echo "CURRENT USER ID $currentUserId <br> NUM ROWS $num_rows <br> ";

        if($num_rows == 0){
            // No cart exists. This is an error.
            echo "CART h hi ni<br>";
            throw new Exception("Cart not exists");
        }

        else {
            if($stmt1->fetch())
                $cartId = $existingCartId;
                echo "EXISTING CART ID $existingCartId<br>";
        }

    }else{
        echo "CART ID NI MILA<br>";
        throw new Exception($mysqli->error);

    }


    // close the cart
    if($stmt1 = $mysqli->prepare($closeCart)){
        $stmt1->bind_param('s', $cartId);
        if(!$stmt1->execute()){
            throw new Exception($mysqli->error);
        }
    }else{
        echo "CART CLOSE NI HUA<br>";
        throw new Exception($mysqli->error);
    }


    // Create order
    if($stmt1 = $mysqli->prepare($insertOrder)){
        $stmt1->bind_param('ssssssssss', $cartId, $name, $checkout_country, $checkout_address, $checkout_address_2, $checkout_zipcode, $checkout_city, $checkout_phone, $paymentMethod, $checkout_email);
        if(!$stmt1->execute()){
            throw new Exception($mysqli->error);
        }

    }else{
        echo "INSERT NI HUA<br>";
        throw new Exception($mysqli->error);
    }




    $mysqli->commit();
    $mysqli->autocommit(TRUE); // i.e., end transaction

    echo "SAB BADIA H<br>";
}
catch ( Exception $e ) {

    // before rolling back the transaction, you'd want
    // to make sure that the exception was db-related
    $mysqli->rollback();
    $mysqli->autocommit(TRUE); // i.e., end transaction

    echo "GADBAD<br>";
}
header("Refresh:05; url=thankyou.php");
?>