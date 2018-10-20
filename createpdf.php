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
 $sql = "SELECT * FROM form WHERE app_id = $id";
// instantiate and use the dompdf class
$result=mysqli_query($con, $sql);
$name ="";
$value = array();  
//generate( '2');

if ($result = mysqli_query($con, $sql)) {

    /* fetch associative array */
    while ($row = $result->fetch_assoc()) {
        $value = $row;
       //echo $value["app_id"]." ".$value['applicant_name']." ".$value['a_cghs_no'];
     //   generate( $value, '2');
        
        if (isset($_POST['form1_btn'])){generate($value, '1');}
         //else if (isset($_POST['form10_btn'])) {echo "form 10";}
       else if (isset($_POST['form2_btn'])) {generate($value, '2');}
          else if (isset($_POST['form3_btn'])) {generate($value, '3');}
           else if (isset($_POST['form4_btn'])) {generate($value, '4');}
           else if (isset($_POST['form5_btn'])) {echo "form 5";}
           else if (isset($_POST['form6_btn'])) {echo "form 6";}
           else if (isset($_POST['form7_btn'])) {generate($value, '7');}
           else if (isset($_POST['form8_btn'])) {echo "form 8";}
           else if (isset($_POST['form9_btn'])) {generate($value, '9');}
          else if (isset($_POST['form10_btn'])) {generate($value, '10');}
           else if (isset($_POST['form11_btn'])) {echo "form 11";}
           else if (isset($_POST['form12_btn'])) {generate($value, '12');}
           else if (isset($_POST['form13_btn'])) {generate($value, '13');}
           else if (isset($_POST['form14_btn'])) {echo "form 14";}
           else if (isset($_POST['form15_btn'])) {generate($value, '15');}
           else if (isset($_POST['form16_btn'])) {echo "form 16";}
        else if (isset($_POST['form22_btn'])) {generate($value, '22');}
    }

    /* free result set */
    $result->free();
}

function generate( $value, $s){
    $rupee_word = rupee_to_word($value['amt_granted']);
    $data = get_data_for_calcSheet($value['app_id']);
    require 'docs/form1.php';
    require 'docs/form2.php';
      require 'docs/form3.php';
      require 'docs/form4.php';
    require 'docs/form10.php';
    require 'docs/form12.php';
    require 'docs/form13.php';
    require 'docs/form15.php';
     require 'docs/form7.php';
    require 'docs/form22.php';
//require 'docs/form4.php';

  //  $html = 'vikas says hello world dsad'.$value['applicant_name'];
    
    $dompdf = new Dompdf();
$dompdf->loadHtml(${'form'.$s});
$dompdf->setPaper('A4', 'portrait');
$dompdf->render();
$dompdf->stream("file".$s.".pdf");

}

?>
