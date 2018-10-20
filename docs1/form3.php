<?php
$patient_name ="";
$rel_string="";
if($value['r_cghs_no']!=0)
{
    $patient_name="$value[relative_name]";
    $rel_string="$value[relation]";
    
}
else {
    $patient_name="$value[applicant_name]";
}
$form3 ="<html>
  <head>
   <style>
              .container{
            font-size: 1.3em;
            margin-top: 5px;
        }    
         h5{
            text-align: center;
            text-decoration: underline;
            font-weight: bold;
             padding:0px;
            margin:0px;
        }
         table, th, td {
    border: 1px solid black;
    margin-top:5px;
    margin-bottom:5px;
}
table {
    border-collapse: collapse;
}
      </style>
  </head>
  <body>
      <div class='container'>
    <h5 style='text-align:center;'><b><u>OFFICE OF THE DEPUTY COMMISIONER OF POLICE SOUTH EAST DISTRICT,</u></b></h5>
          <h5><u><b>IST FLOOR, POLICE STATION SARITA VIHAR, NEW DELHI-110076.</u></b></h5>
          <div style='margin-top:10px;'>No. ____________ / Genl. Br. (SED) dated New Delhi, the _________/2017 </div>
        <div>To</div>
        <div style='margin-top:15px;margin-left:92px;'>The Deputy Commissioner of Police</div>
        <div style='margin-bottom:10px;margin-left:92px;'>General Administration/PHQ, Delhi</div>
          <div>Subject:- &nbsp;&nbsp;Regarding medical re-imbursement claim in respect of <b>$value[rank] $value[applicant_name] No. $value[police_station_no] </b>.</div>
        <div style='margin-top:5px;'>Memo</div>
          <p style='text-indent:12%;text-align:justify;'>
             It is informed that <b> $patient_name</b> was admitted in <b> $value[hospital_name] </b> Hospital in emergency. The treatment was taken by the patient in CGHS recognized Hospital on credit basis. Now, the hospital authority has submitted a medical claim (in duplicate) for reimbursement. As per the C.S.M.A. Rules, calculation statement has been prepared which is enclosed herewith. The details of the claim is as under:-
          </p>
    
      <table>
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
       <td>$value[rank]<br>$value[applicant_name],<br>No. $value[police_station_no]<br>$rel_string</td>
        <td>$value[hospital_name]</td>
        <td>$value[disease]</td>
        <td>$value[startdate] to $value[enddate]</td>
        <td align='right'>$value[amt_asked]</td>
        <td align='right'>$value[amt_granted]</td>
      </tr>

    </tbody>
  </table>
  <br>
    <p style='text-indent:12%;text-align:justify;'>
        It is therefore, requested that necessary ex-past facto sanction may kindly be obtained from the component authority and conveyed to this office at an early date. Funds are available under head “01.01.06 Medical Treatment” during the current financial year 2017-18.
    </p>
   
    <div class='row'>
    
     <div style='text-align:right;font-weight:bold;margin-top:25px;'>ACP/HQ</div>
    <div style='text-align:right'>For DY. COMMISIONER OF POLICE</div>
    </div>
    <div style='text-align:right'>SOUTH EAST DISTRICT, NEW DELHI</div>
    <div style='text-align:left; margin-top: -10px;'>Encls - <strong><u>As Above</u></strong></div>
    </div>
  </body>
</html>";

?>
     
     
