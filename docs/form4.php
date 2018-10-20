<?php
$string ="";
if($value['r_cghs_no']!=0)
{
    $string=" $value[relative_name] (Name of the patient) W/O, S/O, D/O, F/O, M/O $value[rank] $value[applicant_name] (Name of the police officer/men) ";
}
else {
	$string="$value[rank] $value[applicant_name]";
}
$form4 ="<html>
  <head>
   <style>
        .container{
            font-size: 1.2em;
            margin-bottom: 10px;
            margin-top: 10px;
        }
    
         h3{
            text-align: center;
            text-decoration: underline;
            font-weight: bold;
             margin-bottom: 30px;
        }
       
      </style> 
  </head>
  <body style='margin-left:2cm'>
      <div class='container'>
       <h3>CALCULATION SHEET</h3>
          <p style='text-align:justify;'>Details of expenditures incurred on the treatment of<b> $string Belt No. $value[police_station_no] at $value[hospital_name] (Name of the Hospital)</b> where he/she remained admitted/under treatment from<b> $value[startdate] to $value[enddate]</b>.
          </p>
       <table class='table' style='margin-right:3px; border: 1px solid black;border-collapse: collapse;
    margin-bottom:15px;width:100%;'>
      <tbody>
      <tr>
        <th width='2%' style='border: 1px solid black; font-size: 95%;'>S. No.</td>
        <th width='20%' style='border: 1px solid black; font-size: 95%;'>Bill no.</td>
        <th width='15%' style='border: 1px solid black; font-size: 95%;'>Date of Bill</td>
        <th width='35%' style='border: 1px solid black; font-size: 95%;'>Name of the Tests/Medicines etc.</td>
        <th width='14%' style='border: 1px solid black; font-size: 95%;'>Amount <br> claimed</td>
        <th width='14%' style='border: 1px solid black; font-size: 95%;'>Admissible <br> Amount</td>
      </tr>
     $data
     <tr>
      <td style='border: 1px solid black; font-size: 80%;'></td>
        <td style='border: 1px solid black; font-size: 80%;'></td>
        <td style='border: 1px solid black; font-size: 80%;'></td>
        <td style='border: 1px solid black; font-size: 80%;'><b>Total</b></td>
        <td style='border: 1px solid black; font-size: 80%;'>$value[amt_asked]</td>
        <td style='border: 1px solid black; font-size: 80%;'>$value[amt_granted]</td>
        </tr>
    </tbody>
  </table>
<p style='text-indent:12%;text-align:justify;'>It is certified that the bills have been checked in totality and rates claimed by the treating hospitals are Matched/restricted to CGHS approved rates. The claim for the tests/pathology is cross referenced for checking the rates with the tests actually conducted.</p>

<table style='width:100%;margin-top:5px;border: 0px;'>
           <tr>
          <td style='vertical-align:top'>Signature of Dealing Assistant</td>
          <td style='text-align:justify;'>___________________</td>
          </tr>
          <tr>
          <td style='vertical-align:top'>Signature of Head Assistant</td>
          <td style='text-align:justify;'>___________________</td>
          </tr>
          <tr>
          <td style='vertical-align:top'>Signature of Inspector Administration</td>
          <td style='text-align:justify;'>___________________</td>
          </tr>
</table>
          
          
<div style='text-align:center;margin-bottom:10px;margin-top:10px;'>VERIFIED</div>
<div style='text-align:center;font-weight:bold;margin-top:30px;'>ASSTT. COMMISIONER OF POLICE (HQ),</div>
<div style='text-align:center;font-weight:bold'>SOUTH-EAST DISTRICT, NEW DELHI.</div>
</div>
</body>
</html>";

?>
