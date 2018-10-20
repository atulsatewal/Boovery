<?php

$form8 = "<html lang='en'>
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
      <div>FR:-&nbsp; &nbsp; &nbsp; &nbsp; PHQ's memo No. _____________/Admn.(1V)/PHQ, dated ______________ , recieved from ACP/HQ,(G), Delhi</div>
          <div  style='margin-top:8px;'>Subject:- <b>Reimbursement of medical claim in respect of the following police personnel treatment taken from CGHS recognized hospitals in</b></div> 
      <div style='margin-left:80px;'><b>emergency.</b></div>
      <p style='text-indent:12%'>FR may kindly be persued vide which ACP/HQ (G), Delhi has conveyed ex-post-facto permission(s) of the Spl. Comissioner of Police/General administration, Delhi in accordance with CGHS instruction issued vide memo No. S-12020/4/97-CGHS(P) dated 07.03.2000 circulated vide PHQ's endst. No. 7692-8032/Admin. (1V)PHQ, dated 11.04.2000 for the period as noted against each for treatment taken by their own/dependent family members in CGHS recognized hospitals in emergency:-</p>
      <table>
       <tr>
        <td>S. No.</td>
        <td>Rank, Name & No. and treatment taken by</td> 
        <td>Name of Hospital</td>
        <td>Period</td>
        <td>Admissible Amount</td>   
       </tr>
      <tr>
       <td>1.</td>
       <td>$value[rank]<br>$value[applicant_name]<br>$value[id_no]</td>
        <td>$value[hospital_name]</td>
        <td>$value[startdate] to $value[enddate]</td>
        <td>$value[amt_granted]</td> 
     </tr>
     </table>
      <p style='text-indent:12%'>The admissible amount has been calculated as per CGHS rate list dated 17.08.2010 & 01.10.2014 to make payment to above police personnelaccording to their entitlement.</p>  
       <p style='text-indent:12%'>Keeping in view of the above, the Additional Deputy Commisioner of Police, South-East District may like to accord ex-post-facto sanction of the amount as mentioned above against each police officers/men for making payment to him/them.</p>  
       <p style='text-indent:12%'>The expenditure involved should be met from the funds under head '01.01.06 Medical Treatment' during the current financial year 2016-2017.</p>  
       <p style='text-indent:12%'>Submitted for kind perusal and para 3/N above may kindly be approved please.</p>  
      <div style='margin-top:30px;'><b><u>HAG/SE</u></b></div>
      <div style='margin-top:15px;'><b><u>INSPR. ADMN.</u></b></div>
      <div style='margin-top:15px;'><b><u>ACP/HQ</u></b></div>
      <div style='margin-top:15px;'><b><u>DCP/SED</u></b></div>
      <p style='text-indent:12%'>Reference paras 1-6/N above. Necessary fair draft order(s) is/are placed below for favour of signature, if approved please.</p>  
      <div style='margin-top:30px;'><b><u>HAG</u></b></div>
      <div style='margin-top:15px;'><b><u>INSPR. ADMN.</u></b></div>
      <div style='margin-top:15px;'><b><u>ACP/HQ</u></b></div>
      </div>      
  </body>
</html>";

?>