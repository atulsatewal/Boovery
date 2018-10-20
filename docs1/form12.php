<?php
$string = "$value[relation]";
if($value['relation']=="own"){
    $string = "self";
}
$form12 = "<html lang='en'>
  <head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link href='css/bootstrap.min.css' rel='stylesheet'>
    <title>Medical Claim</title>
  </head>
  <body style='margin-left:2cm'>
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js'></script>
    <script src='js/bootstrap.min.js'></script>
      <div class='container' style='margin-bottom:70px; margin-top:40px; font-size:1.3em;'>
          <h3 style='text-align:center; margin-bottom:40px;'><b><u>NOTE SHEET</u></b></h3>
          <div>FR:-&nbsp; &nbsp; &nbsp; &nbsp; Diary No. $value[diary_no]/Genl. Br. (SED) dated $value[diary_date]</div>

           <div>
          <table style='width:100%;margin-top:10px;'>
          <tr>
          <td style='vertical-align:top'>Subject:-</td>
          <td style='text-align:justify;'><b>An application submitted by $value[rank] $value[applicant_name], No. $value[police_station_no] (PIS No. $value[pis]) regarding grant of permission for taking treatment in empanelled hospital under CGHS.</b></td>
          </tr>
          </table>
        </div>


        <p style='text-indent:12%;text-align:justify;'>FR along with its enclosures may kindly be persued vide which $value[rank] $value[applicant_name] No. $value[police_station_no] (PIS No. $value[pis]) has requested that he/she may be granted permission for taking treatment of his/her $string (relation of the patient) in $value[ref_hospital_name] as CMO-CGHS Dispensary/Govt. Hospital. $value[hospital_name] has referred to his/her $value[relation](relation of patient) treatment at any CGHS approved Hospital.</p>
       <p style='text-indent:12%;text-align:justify;'>In this connection, it is submitted that the CMO-CGHS Dispensary/Govt. Hospital has referred to any CGHS approved Hospital. As such, Addl. DCP/SED (H.O.O) may like to accord permission to $value[rank] $value[applicant_name], No. $value[police_station_no] (PIS No. $value[pis]) for treatment of his/her $string in $value[ref_hospital_name]. He/She is a CGHS beneficiary having a valid CGHS card ID No. $value[a_cghs_no]. He/She is entitled for $value[a_cghs_category] ward category (calculated as per basic pay of Govt. Servant).
         Permission is valid for __________________ w.e.f. $value[startdate].</p>
      <div style='margin-top:75px;'><b><u>HAG/SE</u></b></div>
      <div style='margin-top:15px;'><b><u>INSPR. ADMN.</u></b></div>
      <div style='margin-top:15px;'><b><u>ACP/HQ</u></b></div>
      <div style='margin-top:15px;'><b><u>ADDL. DCP/SED</u></b></div>
      </div>
  </body>
</html>";

?>

