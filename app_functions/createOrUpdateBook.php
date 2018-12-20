<?php


include '../secure/db_connect.php';



if($_POST['type']  == "update") { 
   // Update 

	$sql = "UPDATE `items` SET `name`=?,`description`= ?,`isbn`= ? ,`author`= ?,`price`= ? ,`old_price`= ? ,`img_url`= ?, `updated_at`= CURRENT_TIMESTAMP WHERE id = ?";

	if($stmt1 = $mysqli->prepare($sql)){
                    $stmt1->bind_param('ssssssss',  $_POST['name'],  $_POST['description'],  $_POST['isbn'],  $_POST['author'],  $_POST['price'], $_POST['old_price'],  $_POST['img_url'], $_POST['id']);
                    if($stmt1->execute())
                    	header("Location: ../editBook.php?success=1&id=".$_POST['id']);
                    else
                    	header("Location: ../editBook.php?error=1&id=".$_POST['id']);
                }else if(DEBUG) echo $mysqli->error();

} 

else if($_POST['type']  == "create"){ 
   // Create
    $sql = ("INSERT INTO items(name,category_id,description,isbn,author,price,old_price,img_url,created_at,updated_at) VALUES  (?,?,?,?,?,?,?,?,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP)");

	 if($stmt1 = $mysqli->prepare($sql)){
                    $stmt1->bind_param('ssssssss', $_POST["name"] , $_POST["category_id"] , $_POST["description"] , $_POST["isbn"] , $_POST["author"] , $_POST["price"] ,$_POST["old_price"] ,$_POST["img_url"]);
                    if($stmt1->execute())
                    	header("Location: ../createBook.php?success=1&id=".$_POST['id']);
                    else
                    header("Location: ../createBook.php?error=1&id=".$_POST['id']);
        }else if(DEBUG) echo $mysqli->error();

                        }
//else {
//echo'notsubmited';
//
?>