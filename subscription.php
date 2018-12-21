
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
        
    $email=$_POST['email'];
    


$sql="INSERT INTO Subscription(email) VALUES('$email')";

if(!mysqli_query($con,$sql))
{
    echo 'NOT SUBMITTED';
}
else
{
    echo 'SUBMITTED';
}
header("refresh:1; url=dashboard_user.php");//

?>


