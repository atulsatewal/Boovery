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
         table, th, td {
    border: 1px solid black;
}
table {
    border-collapse: collapse;
    margin-bottom:15px;
}
td {
   font-size: 80%;
}
th {
   font-size: 95%;
}
      </style> 
  </head>
  <body style='margin-left:2cm'>
      <div class='container'>
       <h3>CALCULATION SHEET</h3>
          <p style='text-align:justify;'>Details of expenditures incurred on the treatment of<b> $string Belt No. $value[police_station_no] at $value[hospital_name] (Name of the Hospital)</b> where he/she remained admitted/under treatment from<b> $value[startdate] to $value[enddate]</b>.
          </p>
       <table class='table' style='margin-right:3px;'>
      <tbody>
      <tr>
        <th width='2%'>Sr. No.</td>
        <th width='20%'>Bill No.</td>
        <th width='15%'>Date of Bill</td>
        <th width='35%'>Name of the Tests/Medicines etc.</td>
        <th width='14%'>Amount <br> claimed</td>
        <th width='14%'>Admissible <br> Amount</td>
      </tr>
     $data
     <tr>
      <td></td>
        <td ></td>
        <td></td>
        <td><b>Total</b></td>
        <td >$value[amt_asked]</td>
        <td>$value[amt_granted]</td>
        </tr>
    </tbody>
  </table>
<p style='text-indent:12%;text-align:justify;'>It is certified that the bills have been checked in totality and rates claimed by the treating hospitals are Matched/restricted to CGHS approved rates. The claim for the tests/pathology is cross referenced for checking the rates with the tests actually conducted.</p>
<div style='margin-top:20px;'>Signature of Dealing Assistant     ____________________</div>
<div style='margin-top:10px;'>Signature of Head Assistant         ____________________</div>
<div style='margin-top:10px;'>Signature of Inspector Administration___________________</div>
<div style='text-align:center;margin-bottom:10px;margin-top:10px;'>VERIFIED</div>
<div style='text-align:center;font-weight:bold;margin-top:30px;'>ASSTT. COMMISIONER OF POLICE (HQ),</div>
<div style='text-align:center;font-weight:bold'>SOUTH-EAST DISTRICT, NEW DELHI.</div>
</div>
</body>
</html>";

?>
