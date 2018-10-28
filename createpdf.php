<?php
   
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

require 'includes/dbcon.php';
require 'utils.php';
ini_set('display_errors', 1);

require_once 'dompdf/autoload.inc.php';
/*foreach (glob("classes/*.php") as $filename)
{
    include $filename;
}*/
use Dompdf\Dompdf;

 $id = $_POST['id'];
 $sql = "SELECT * FROM order WHERE id = $id";
// instantiate and use the dompdf class
$result=mysqli_query($con, $sql);
$name ="";
$value = array();  
//generate( '2');

if ($result = mysqli_query($con, $sql)) {

    /* fetch associative array */
    while ($row = $result->fetch_assoc()) {
        $value = $row;
        generate($value);
    }

    /* free result set */
    $result->free();
}

function generate($value){
    $rupee_word = rupee_to_word($value['amt_granted']);
    require 'docs/orderPDF.php';

    $dompdf = new Dompdf();
    $dompdf->loadHtml($orderPDF);
    $dompdf->setPaper('A4', 'portrait');
    $dompdf->render();
    $dompdf->stream("file.pdf");

}

?>
