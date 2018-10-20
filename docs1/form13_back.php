<?php 
$string1 = "";
$string2 = $value['a_cghs_no'];
if($value['r_cghs_no']!=0){
    $string1 = $value['relation']." of";
    $string2 = $value['r_cghs_no'];
}
$form13 = "<html lang='en'>
  <head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>Medical Claim</title>

    <link href='css/bootstrap.min.css' rel='stylesheet'>
    <style>
         h5{
            text-align: center;
            text-decoration: underline;
            font-weight: bold;
            padding:0px;
            margin:0px;
        }
        .container{
            font-size: 1.3em;
        }

    </style>
  </head>
  <body>
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js'></script>
    <script src='js/bootstrap.min.js'></script>
      <div class='container' style='font: 20px, arial, Times New Roman;'>
        <h5 style='text-align:center;'><u>OFFICE OF THE DEPUTY COMMISIONER OF POLICE SOUTH EAST DISTRICT,</u></h5>
        <h5 style='text-align:center;'><u> IST FLOOR, POLICE STATION SARITA VIHAR, NEW DELHI-110076.</u></h5>
        <div style='margin-top:10px;'>No.__________/ Genl. Br. (SED) dated New Delhi, the___________/2017 </div>
        <div>To,</div>
        <div><div style='margin-left:100px;'>The Medical Superintendent,</div>
        <div style='margin-left:100px;'>$value[ref_hospital_name]</div>
        <div style='margin-left:100px;'>$value[hospital_address]</div>
        </div>
        <div style='margin-top:20px;'>Subject:- &nbsp;&nbsp;&nbsp;Regarding permission for taking treatment in respect of
        <div style='margin-left:100px;margin-top:20px;'>$string1 $value[rank] $value[applicant_name], No. $value[police_station_no] (PIS: $value[pis])</div>
        <div>Sir,</div>
        <p style='text-indent:12%;text-align:justify;'>
            In accordance with Ministry of Health & Family Welfare, Govt. Of India, Nirman Bhawan, New Delhi's O.M. No. S.11011/23/2009-CGHS D.II/Hospital Cell/CGHS(Part-1), dated 17.08.2010 at para-4 on the subject cited above. The Addl. Deputy Commissioner of Police (H.O.O.) South-East District, New Delhi is pleased to accord permission to $value[applicant_name] No. $value[police_station_no] (PIS No. $value[pis]) for treatment in respect of his/her $value[relation] at above said Hospital for a period of______________ w.e.f. $value[startdate].</p>
          <p style='text-indent:12%;text-align:justify;'>He/She is a member of CGHS having token card No. $string2. He/She is entitled for $value[a_cghs_category] ward category.</p>
      <div style='text-align:right;margin-bottom:40px;margin-top:30px;'>Yours faithfully,</div>
      <div style='text-align:right;margin-top:60px;'>ASSTT. COMMINISSONER OF POLICE (HQ),</div>
      <div style='text-align:right'>SOUTH EAST DISTRICT, NEW DELHI.</div>
      <div style='margin-top:20px;'>No.___________ Genl. Br. (SED) dated, New Delhi, the____________/2017 </div>    
       <div style='margin-left:60px;margin-bottom:20px;margin-top:20px;'>Copy forwarded to the :-</div>
       <div>1. &nbsp; &nbsp; &nbsp; I/C CMO, CGHS Dispensary No. ___________________ for information.</div> 
       <div style='margin-top:10px;'>2. &nbsp; &nbsp; &nbsp; ACP/SHO/Inspector/RI/SO/PA ___________________ to deliver the same to the applicant and he/she may be directed to take the medicines from his concerned CGHS dispensary/wellness center as prescribed by the Hospital authority.</div>   
      </div>
  </body>
</html>";

?>
