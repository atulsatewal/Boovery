<?php

$form10 = "<html lang='en'>
  <head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link href='css/bootstrap.min.css' rel='stylesheet'>
    <title>Medical Claim</title>
  </head>
  <body>
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js'></script>
    <script src='js/bootstrap.min.js'></script>
      <div class='container' style='margin-bottom:10px; margin-top:40px; font-size:1.3em;'>
          <h3 style='text-align:center; margin-bottom:40px;'><b><u>NOTE SHEET</u></b></h3>
          <div>FR:-&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Diary No. $value[diary_no]/Genl. Br. (SED) dated ______________</div>
          <div  style='margin-top:8px;'>Subject:- &nbsp; &nbsp;<b>An application submitted by $value[applicant_name] to provide credit facilty to his/her $value[relation] treatment.</b></div> 
          <p style='text-indent:12%'>FR along with its enclosures may kindly be persued vide which $value[applicant_name] No. $value[id_no] (PIS No. $value[pis]) has submitted an application requesting therein that his/her $value[relation] (relation of the patient) is admitted in $value[hospital_name] on $value[startdate] in emergency due to condition as mentioned in emergency certificate issued by the Hospital authority. Hospital is empanelled under CGHS. Further, the Govt. Servant has requested that he/she is not in a position to bear the medical expenses for the treatment and requested for providing credit facilty from the said hospital. He/She is having a valid CGHS card ID No. $value[a_cghs_no] and entitles for $value[a_cghs_category] ward category (calculated as per basic pay of Govt. Servant).</p>
      <p style='text-indent:12%'>In this regard, the above said hospital is under CGHS recognized and according to CGHS instructions vide MH&FM O.M. No. S.11045/2012-CGHS (HEC) dated 01.10.2014 vide para-4 therein mentioned that all CGHS beneficiaries are entitled to take treatment on credit basis in CGHS recognized hospital in emergency.</p>  
       <p style='text-indent:12%'>In view of the position explained above, if approved we may issue a letter to Medical Superintendent/ ____________________ for providing medical treatment to $value[applicant_name] on credit basis and requested to furnish the medical bills thereafter along with all relevant documents (in duplicate) to this office for making payment to the hospital concerned. Accordingly, a fair draft letter is placed below for favour of signature, if approved please.</p>  
      <div style='margin-top:55px;'><b><u>HAG/SE</u></b></div>
      <div style='margin-top:20px;'><b><u>INSPR. ADMN.</u></b></div>
      <div style='margin-top:20px;'><b><u>ACP/HQ</u></b></div>
      <div style='margin-top:20px;'><b><u>ADDL. DCP/SED</u></b></div>
      </div>      
  </body>
</html>";

?>