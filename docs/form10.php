<?php
$string = "";
$rel = "";
$cghs="";
if($value['relation'] == "own" || $value['relation'] == "self"){
    $string = "";
    $rel = "";
}

else{
    $string = "$value[relation] of ";
    $rel = "$value[relation]'s";
}

if($value['r_cghs_no']==0)
{
    $cghs="He/She is having a valid CGHS card ID No. <b> $value[a_cghs_no]</b> ";
}
else {
    $cghs="The applicant and patient are CGHS beneficiary having token cards No.<b> $value[a_cghs_no]</b> &<b> $value[r_cghs_no]</b> respectively ";
}

$form10 = "<html lang='en'>
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
      <div class='container' style='margin-bottom:10px; margin-top:20px; font-size:1.3em;'>
          <h4 style='text-align:center; margin-bottom:30px;'><b><u>NOTE SHEET</u></b></h4>
          <div>
          <table style='width:100%;margin-top:10px;'>
           <tr>
          <td style='vertical-align:top'>FR:-</td>
          <td style='text-align:justify;'>Diary No. <b>$value[diary_no]</b>/Genl. Br. (SED) dated <b>$value[diary_date]</b></td>
          </tr>
          <tr>
          <td style='vertical-align:top'>Subject:-</td>
          <td style='text-align:justify;'><b>An application submitted by $value[rank] $value[applicant_name] to provide credit facilty to his/her $rel treatment.</b></td>
          </tr>
          </table>
        </div>

          
          <p style='text-indent:12%; text-align:justify;'>FR along with its enclosure may kindly be persued vide which <b>$value[rank] $value[applicant_name] No. $value[police_station_no] (PIS No. $value[pis])</b> has submitted an application requesting therein that his/her <b>$value[relation]</b> (relation of the patient) is admitted in <b>$value[hospital_name]</b> on <b>$value[startdate]</b> in emergency due to condition as mentioned in emergency certificate issued by the Hospital authority. Hospital is empanelled under CGHS. Further, the Govt. Servant has requested that he/she is not in a position to bear the medical expenses for the treatment and requested for providing credit facilty from the said hospital. $cghs and entitle for<b> $value[a_cghs_category]</b> ward category (calculated as per basic pay of Govt. Servant).</p>
      <p style='text-indent:12%;text-align:justify;'>In this regard, the above said hospital is under CGHS recognized and according to CGHS instructions vide MH&FM O.M. No. S.11045/2012-CGHS (HEC) dated 01.10.2014 vide para-4 therein mentioned that all CGHS beneficiaries are entitled to take treatment on credit basis in CGHS recognized hospital in emergency.</p>
       <p style='text-indent:12%; text-align:justify;'>In view of the position explained above, if approved we may issue a letter to Medical Superintendent/<b>$value[hospital_name]</b> for providing medical treatment to <b>$string $value[applicant_name]</b> on credit basis and requested to furnish the medical bills thereafter along with all relevant documents (in duplicate) to this office for making payment to the hospital concerned. Accordingly, a fair draft letter is placed below for favour of signature, if approved please.</p>
      <div style='margin-top:20px;'><b><u>HAG/SE</u></b></div>
      <div style='margin-top:15px;'><b><u>INSPR. ADMN.</u></b></div>
      <div style='margin-top:15px;'><b><u>ACP/HQ</u></b></div>
      <div style='margin-top:15px;'><b><u>ADDL. DCP/SED</u></b></div>
      </div>
  </body>
</html>";

?>

