<?php

function rupee_to_word($number){
    
   $no = round($number);
   $point = round($number - $no, 2) * 100;
   $hundred = null;
   $digits_1 = strlen($no);
   $i = 0;
   $str = array();
   $words = array('0' => '', '1' => 'one', '2' => 'two',
    '3' => 'three', '4' => 'four', '5' => 'five', '6' => 'six',
    '7' => 'seven', '8' => 'eight', '9' => 'nine',
    '10' => 'ten', '11' => 'eleven', '12' => 'twelve',
    '13' => 'thirteen', '14' => 'fourteen',
    '15' => 'fifteen', '16' => 'sixteen', '17' => 'seventeen',
    '18' => 'eighteen', '19' =>'nineteen', '20' => 'twenty',
    '30' => 'thirty', '40' => 'forty', '50' => 'fifty',
    '60' => 'sixty', '70' => 'seventy',
    '80' => 'eighty', '90' => 'ninety');
   $digits = array('', 'hundred', 'thousand', 'lakh', 'crore');
   while ($i < $digits_1) {
     $divider = ($i == 2) ? 10 : 100;
     $number = floor($no % $divider);
     $no = floor($no / $divider);
     $i += ($divider == 10) ? 1 : 2;
     if ($number) {
        $plural = (($counter = count($str)) && $number > 9) ? 's' : null;
        $hundred = ($counter == 1 && $str[0]) ? ' and ' : null;
        $str [] = ($number < 21) ? $words[$number] .
            " " . $digits[$counter] . $plural . " " . $hundred
            :
            $words[floor($number / 10) * 10]
            . " " . $words[$number % 10] . " "
            . $digits[$counter] . $plural . " " . $hundred;
     } else $str[] = null;
  }
  $str = array_reverse($str);
  $result = implode('', $str);
  $points = ($point) ?
    "." . $words[$point / 10] . " " . 
          $words[$point = $point % 10] : '';
  return $result;
}


function get_data_for_calcSheet($id){
    
    require 'includes/dbcon.php';
        
    $sql = "SELECT * FROM medical WHERE app_id = $id ";
    $si = 0;
    $string = '';
    foreach ($con->query($sql) as $row) {
    $si++;
    $string.="<tr>
    <td style='border: 1px solid black; font-size: 80%;'>$si</td>
    <td style='border: 1px solid black; font-size: 80%;'>$row[bill_no_hosp]</td>
    <td style='border: 1px solid black; font-size: 80%;'>$row[date]</td>
    <td style='border: 1px solid black; font-size: 80%;'>$row[treatment]</td>
    <td style='border: 1px solid black; font-size: 80%;'>$row[amt_asked]</td>
    <td style='border: 1px solid black; font-size: 80%;'>$row[total]</td>
    </tr>";
    }
    
    return $string;
}
 ?> 