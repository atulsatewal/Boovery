<?php 

$form12 = "<html lang='en'>
  <head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link href='css/bootstrap.min.css' rel='stylesheet'>
    <title>Medical Claim</title>
      <style>
td{
    border: 1px solid black;;
    text-align: left;
    padding: 8px;
}
</style>
  </head>
  <body>
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js'></script>
    <script src='js/bootstrap.min.js'></script>
      <div class='container' style='margin-bottom:70px; margin-top:40px; font-size:1.3em;'>
          <h3 style='text-align:center; margin-bottom:40px;'><b><u>NOTE SHEET</u></b></h3>
          <div>FR:-&nbsp; &nbsp; &nbsp; &nbsp; Diary No.$value[diary_no]/Genl. Br. (SED) dated ________________</div>
          <div  style='margin-top:8px;'>Subject:- <b>An application submitted by $value[applicant_name] regarding grant of permission for taking treatment in empanelled hospital under CGHS.</b></div> 
              <p style='text-indent:12%'>FR along with its enclosures may kindly be persued vide which $value[applicant_name] No. $value[id_no] (PIS No. $value[pis]) has requested that he/she may be granted permission for taking treatment of his/her $value[relation] (relation of the patient) in $value[hospital_name] as CMO-CGHS Dispensary/Govt. Hospital. $value[applicant_name] has referred to his/her $value[relation](relation of patient) to any CGHS approved Hospital.</p>
       <p style='text-indent:12%'>In this connection, it is submitted that the CMO-CGHS Dispensary/Govt. Hospital has referred to any CGHS approved Hospital. As such, Addl. DCP/SED (H.O.O) may like to accord permission to $value[applicant_name] for treatment of his/her $value[relation] in $value[hospital_name]. The CGHS beneficiaries having a valid CGHS card ID No. $value[a_cghs_no]. He is entitled for $value[a_cghs_category] ward category (calculated as per basic pay of Govt. Servant).
         Permission is valid for $value[startdate] w.e.f. $value[enddate]</p>  
      <div style='margin-top:55px;'><b><u>HAG/SE</u></b></div>
      <div style='margin-top:15px;'><b><u>INSPR. ADMN.</u></b></div>
      <div style='margin-top:15px;'><b><u>ACP/HQ</u></b></div>
      <div style='margin-top:15px;'><b><u>ADDL. DCP/SED</u></b></div>
      </div>      
  </body>
</html>";

?>