<?php
	$book_isbn = $_GET['bookisbn'];

	require_once "./functions/database_functions.php";
	$con = db_connect();

	$query = "DELETE FROM books WHERE book_isbn = '$book_isbn'";
	$result = mysqli_query($conn, $query);
	if(!$result){
		echo "delete data unsuccessfully " . mysqli_error($conn);
		exit;
	}
	header("Location:dashboard_admin.php");
?>