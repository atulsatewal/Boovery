<?

$form20 = "<html lang='en'>
  <head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>Medical Claim</title>
    <link href='css/bootstrap.min.css' rel='stylesheet'>
      <style>
          td{
              border:1px solid black;
          }
      </style>
  </head>
  <body>
      <div class='container' style='margin:30px 50px; font-size:1.3em;'>
          <h3 style='text-align:center;'><b><u>OFFICE OF THE DEPUTY COMMISSIONER OF POLICE, SOUTH EAST DISTRICT,</u></b></h3>
          <h3 style='text-align:center;'> <b><u>IST FLOOR, POLICE STATION SARITA VIHAR, NEW DELHI-110076.</u></b></h3>
          <div style='text-align:center'>No. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  / Genl. Br. (SED) dated New Delhi, the </div>
        <div>To</div>
        <div style='margin:20px 114px;'>The Dy Commissioner of Police,</div>
        <div style='margin:20px 114px;'>Headquarters, Delhi</div>
          <div>Subject:- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <b>Regarding adjustment of medical advance of Rs. $value[amt_granted] already sanctioned to $value[applicant_name] , No. $value[police_station_no] (PIS No. $value[pis]) for the treatment of his $value[relation] at HOSPITAL from $value[startdate]  to $value[enddate] after referred from $value[hospital_name] and taking permission of Head of Office.</b></div>
        <div>Memo</div>
          <p style='text-indent:12%;text-align:justify;'>
              Enclosed please find herewith a medical re-imbursement claim along with all original papers submitted by $value[applicant_name], No. $value[police_station_no] vide which he has intimated that his $value[relation] was under treatment at $value[ref_hospital_name] (on panel of CGHS) for $value[disease] with prior permission of Head of Office. For the purpose, he was granted $value[amt_granted] as medical advance vide PHQ's order No. _______________________ dated  ________________________. As per the M.A. Rules, calculation statement has been prepared which is enclosed herewith. The details of the claim is as under:-</p>
  <table>
          
          <tr>
      
      <td>Rank, Name, No. and treatment taken by</td>
              <td>Name of the Hospital</td>
              <td>Name of disease</td>
              <td>Period of treatment</td>
              <td>Amount Claimed</td>
              <td>Admissible Amount</td>
      </tr>
      <tr>
          <td>$value[rank]  $value[police_station_no]  $value[applicant_name]</td>
          <td>$value[ref_hospital_name]</td>
          <td>$value[disease]</td>
          <td>$value[startdate] To $value[enddate]</td>
          <td>$value[amt_asked]</td>
          <td>$value[amt_granted]</td>
      </tr>
          </table>
      <p style='text-indent:12%;text-align:justify;'>It is, therefore, requested that his medical claim may kindly be considered sympathetically and necessary es-post-facto sanction of the competent authority may kindly be obtained and conveyed to this office at an early date. The documents recieved  along with the application are sent herewith for ready reference and return requested.</p>
          <div style='text-align:right;font-weight:bold;margin-top:40px;'><b>ACP/HQ</b></div>
<div class='row'>
    <div class='col-md-4'>Encls ;- <strong><u>As above</u></strong></div>
    <div class='col-md-8' style='text-align:right'>For DY. COMMISIONER OF POLICE</div>
</div>
<div style='text-align:right'>SOUTH EAST DISTT., NEW DELHI</div>
</div>
  </body>
</html>"

?>
