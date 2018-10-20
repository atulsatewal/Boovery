<?php

$form17 ="<html>
  <head>
   <style>
              .container{
            font-size: 1.0em;
            margin-bottom: 30px;
            margin-top: 10px;
            margin-left:30px;
            margin-right:40px;
        }
        
        p{
            text-indent: 12%;
            margin-top: 15px;
        }
      
         h3{
            text-align: center;
            text-decoration: underline;
            font-weight: bold;
        }
         td{
            text-align:center;
         }
      </style>
  </head>
  <body>
      <div class='container'>
     <h3>OFFICE OF THE DEPUTY COMMISIONER OF POLICE SOUTH EAST DISTRICT,</h3>
          <h3 style='margin-bottom:30px'> IST FLOOR, POLICE STATION SARITA VIHAR, NEW DELHI-110076.</h3>
           <div>No. _________________/ Genl. Br. (SED) dated New Delhi, the ___________________ /2016.</div>
        <div style='padding-top:20px;'>To</div>
        <div id='dep'>The Deputy Commissioner of Police</div>
        <div id='dep'>General Administration/PHQ, Delhi</div>
        <br><br>
          <div style='display:inline;'>Subject:-</div><div style='margin-left:1.5em;margin-bottom:15px;display:inline;font-weight:bold;line-height:30px;'>  Regarding medical re-imbursement claim in respect of  ________________________________________________No. <br>
        __________________________</div>
       
        <div style='margin-top:15px;'>Memo</div>
          <p>
             It is informed that $value[applicant_name] was admitted in $value[hospital_name] Hospital in emergency. The treatment was taken by the patient in CGHS recognized Hospital on credit basis. Now, the hospital authority has submitted a medical claim (in duplicate) for reimbursement. As per the C.S.M.A. Rules, calculations statement has been prepared which is enclosed herewith. The details of the claim is as under:-
          </p>
    
      <table style='width:100%;height:20%;border:1px solid black;'>
    <tbody>
      <tr>
        <th>Rank, Name & No. of the beneficiary</th>
        <th>Name of Hospital</th>
        <th>Name of disease</th>
        <th>Period of treatment</th>
        <th>Amount claimed</th>
        <th>Amount admissible</th>
      </tr>
      <tr>
        <td>$value[rank]<br>$value[applicant_name]</td>
        <td>$value[hospital_name]</td>
        <td>$value[disease]</td>
        <td>$value[startdate] to $value[enddate]</td>
        <td>$value[amt_asked]</td>
        <td>$value[amt_granted]</td>
      </tr>

    </tbody>
  </table>
    <p style='margin-top:15px;'>
        It is therefore, requested that necessary ex-past facto permission may kindly be obtained from the component authority and conveyed to this office at an early date. Funds are available under head “01.01.06 Medical Treatment” during the current financial year 2017-18.
    </p>
<div style='text-align:right;font-weight:bold;margin-top:25px;'>ACP/HQ</div>
<div class='row'>
    <div >Encls - <strong><u>As Above</u></strong></div>
    <div style='text-align:right'>For DY. COMMISIONER OF POLICE</div>
</div>
<div style='text-align:right'>SOUTH EAST DISTRICT, NEW DELHI</div>
</div>
  </body>
</html>";

?>
     
     