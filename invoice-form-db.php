<?php
//db connection
$con =mysqli_connect('localhost','root','');
mysqli_select_db($con,'atul');
?>
<html>
    <head>
        <title>invoice genrator</title>
        
    </head>
    <body>
    select invoice:
        <form method="get" action="inovoice-db.php">
            
    <select name='invoiceID'>
            <?php 
        //show inovies list as options//
        $query= mysqli_query($con,"select * from orders");
        while($invoice =mysqli_fetch_array($query)){
            echo "<option value>
        }
        
        
        ?>
            
            
            </select>
        
        
        </form>
    
    
    
    </body>
    
    
    
    
</html>