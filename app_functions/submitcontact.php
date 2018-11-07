<?php

$con= mysqli_connect('localhost','root','');

if(!$con)
    {
     echo 'NOT CONNECTED TO SERVER';
    }
    if(!mysqli_select_db($con,'atul'))
    {
        echo 'DATABASE IS NOT SELECTED ';
    }
        
    $Name = $_POST['Name'];
    $LastName = $_POST['LastName'];
    $Email= $_POST['Email'];
    $Message= $_POST['Message'];


$sql="INSERT INTO contact_form(Name,LastName ,Email,Message) VALUES('$Name','$LastName','$Email','$Message')";

if(!mysqli_query($con,$sql))
{
    echo 'NOT SUBMITTED';
}
else
{
    echo 'SUBMITTED';
}
//header("refresh:1; url=contact.php");//

?>