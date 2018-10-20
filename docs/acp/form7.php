<?php
$patient_name ="";
$rel_string="";
if($value[r_cghs_no]!=0)
{
    $patient_name="____________________________";
    $rel_string="$value[relation]";
    
}
else {
    $patient_name="$value[applicant_name]";
}
$form7 = "<html lang='en'>
  <head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>Medical Claim</title>
    <link href='css/bootstrap.min.css' rel='stylesheet'>
  </head>
  <style>
  table, th, td {
    border: 1px solid black;
}
</style>
  <body>
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js'></script>
    <script src='js/bootstrap.min.js'></script>
      <div class='container' style='margin:30px 50px 20px 20px; font-size:1.0em;'>
          <h3 style='text-align:center;'><b><u>OFFICE OF THE DEPUTY COMMISIONER OF POLICE SOUTH EAST DISTRICT, IST FLOOR, POLICE STATION SARITA VIHAR, NEW DELHI-110076.</u></b></h3>
          <div style='text-align:center'>No. __________ / Genl. Br. (SED) dated New Delhi, the ________________ /2017.</div>
        <div>To</div>
        <div style='margin-top:10px;margin-left:75px;'>The Deputy Commissioner of Police</div>
        <div style='margin-bottom:10px;margin-left:75px;'>General Administration/PHQ, Delhi</div>
          <div>Subject:- &nbsp; &nbsp; Regarding medical re-imbursement claim in respect of <b>$value[rank] $value[applicant_name] No. $value[police_station_no]</b>.</div>
        <div style='margin-top:10px;'>Memo</div>
          <p style='text-indent:12%'>
              Enclosed please find herewith a medical re-imbursement claim along with all the original papers in respect of <b>$value[applicant_name] No. $value[id_no] </b>vide wich she/he has intimated that the condition of his/her <b>$value[relation]</b> has suddenly become deteriorated and she/he was admitted in private hospital in emergency.  As per the M.A. Rules, calculation sheet has been prepared which is enclosed herewith.</p>
      <table class='table'>
    <tbody>
      <tr>
        <td>Rank, Name & No. of the beneficiary</th>
        <td>Name of Hospital</td>
        <td>Name of disease</td>
        <td>Period of treatment</td>
        <td>Amount claimed</td>
        <td>Amount admissible</td>
      </tr>
      <tr>
        <td>$value[rank]<br>$value[applicant_name]<br>No. $value[police_station_no]<br>$rel_string</td>
        <td>$value[hospital_name]</td>
        <td>$value[disease]</td>
        <td>$value[startdate] to $value[enddate]</td>
        <td>$value[amt_asked]</td>
        <td>$value[amt_granted]</td>
      </tr>
    </tbody>
  </table>
    <p style='text-indent:12%'>
        It is therefore, requested that his/her medical re-imbursement claim may be considered sympathetically and necessary ex-post facto permission/ sanction of the competent authority may kindly be obtained and conveyed to this office at an early date. Funds are available under head '01.01.06 Medical Treament' during the current financial year 2016-2017. </p>
<div style='text-align:right;font-weight:bold;margin-top:40px;'>ACP/HQ</div>
<div class='row'>
    <div class='col-md-4'>Encls.:- <strong><u>As above</u></strong></div>
    <div class='col-md-8' style='text-align:right'>For DY. COMMISIONER OF POLICE</div>
</div>
<div style='text-align:right'>SOUTH EAST DISTT., NEW DELHI</div>
</div>
  </body>
</html>";

?>