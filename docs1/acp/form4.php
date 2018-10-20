<?php

$form4 ="<html>
  <head>
   <style>
        .container{
            font-size: 1.5em;
            margin-bottom: 100px;
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
  <body>
      <div class='container'>
       <h3>CALCULATION SHEET</h3>
          <p>Details of expenditures incurred on the treatment of $value[applicant_name] (Name of the patient) W/O, S/O, D/O, F/O, M.O $value[relation] (Name of the police officer/men) Belt No. $value[id_no] at $value[hospital_name] (Name of the Hospital) Where he/she remained admitted/under treatment from $value[startdate] to $value[enddate].
          </p>
       <table class='table'>
      <tbody>
      <tr>
        <td>Sr. No.</td>
        <td>Bill no. & Name of the Hospital</td>
        <td>Date of Bill</td>
        <td>Name of the Tests/Medicines etc.</td>
        <td>Amount claimed</td>
        <td>Admissible Amount(for office use only)</td>
      </tr>
      <tr>
        <td>1.</td>
        <td>$value[hospital_name]</td>
        <td></td>
        <td></td>
        <td>$value[amt_asked]</td>
        <td>$value[amt_granted]</td> 
      </tr>
    </tbody>
  </table>
<p style='text-indent:12%;'>It is certified that the bills have been checked in totality and rates claimed by the treating hospitals are Matched/restricted to CGHS approved rates. The claim for the tests/pathology is cross referenced for checking the rates with the tests actually conducted.</p>
<div>Signature of Dealing Assistant</div>
<div>Signature of Head Assistant</div>
<div>Signature of Inspector Administration</div>
<div style='text-align:center;margin-bottom:30px;margin-top:30px;'>VERIFIED</div>
<div style='text-align:center;font-weight:bold'>ASSTT. COMMISIONER OF POLICE (HQ),</div>
<div style='text-align:center;font-weight:bold'>SOUTH-EAST DISTRICT, NEW DELHI.</div>
</div>
</body>
</html>";

?>