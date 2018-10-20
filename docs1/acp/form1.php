<?php

$form1 = "<html lang='en'>
  <head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>Medical Claim</title>

    <link href='css/bootstrap.min.css' rel='stylesheet'>
    <style>
        h3{
            text-align: center;
            text-decoration: underline;
            font-weight: bold;
        }
        #no,#date,#para2,#para3,#para4,#para5{
            border-bottom: 1px solid black;
            width:10%;
            display: inline-block;
        }  
        #medsup{
            border-bottom: 1px solid black;
            width:25%;
            margin-top: 30px;
            margin-bottom: 30px;
        }
        #sub{
            border-bottom: 1px solid black;
            width:82%;
            margin-top: 30px;
            margin-bottom: 30px;
            margin-left: 90px;
        }
        #meds{
            margin-left: 100px;
        }
        .container{
            font-size: 1.5em;
            margin-bottom: 100px;
        }
        #para1{
            border-bottom: 1px solid black;
            display: inline-block;
            width:80%;
        }
    </style>
  </head>
  <body>
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js'></script>
    <script src='js/bootstrap.min.js'></script>
      <div class='container'>
        <h3 >OFFICE OF THE DEPUTY COMMISIONER OF POLICE SOUTH EAST DISTRICT,</h3>
          <h3 style='margin-bottom:30px'> IST FLOOR, POLICE STATION SARITA VIHAR, NEW DELHI-110076.</h3>
        <div style='text-align:center'>No. <div id='no'></div>/ Genl. Br. (SED) dated New Delhi, the <div id='date'></div> /2016.</div>
        <div>To</div>
        <div id='meds'><div>The Medical Superintendent</div>
        <div id='medsup'></div>
        <div id='medsup'></div>
        </div>
        <div>Subject:-  Regarding to provide credit facility for the treatment of</div>
        <div id='sub'></div>
        <div id='sub'></div>
        <div>Sir,</div>
		<div style='display:inline-block;margin-left:85px'><p>It is stated that $value[applicant_name] is admitted in your Hospital since $value[startdate] in emergency condition due to mentioned in emergency certificate. He/She is a CGHS beneficiary and having a valid CGHS Plastic card ID No. $value[a_cghs_no]. The applicant has requested for providing credit facility because he is not in the position to bear the expenditure to be occurred on his/her $value[disease] treatment. Hence, he may be provided credit facility as per CGHS instructions vide MH&FW O.M. No. S.11045/36/2012-CGHS(HEC), dated 01.10.2014 vide para-4 and bill duly prepared according to the CGHS approved rate list may be sent in stipulated period from the date of discharge to this office (in triplicate) for reimbursement. The Govt. Servant is entitled for $value[a_cghs_category] ward category.</p></div>
        <div style='text-align:center;margin-top:40px;margin-bottom:70px'>This has the approval of Addl. DCP/SE district</div>
      <div style='text-align:right;margin-bottom:100px'>Yours faithfully,</div>
      <div style='text-align:right'>ASST. COMMINISSONER OF POLICE (HQ),</div>
      <div style='text-align:right'>SOUTH EAST DISTRICT, NEW DELHI.</div>
      </div>
  </body>
</html>";

?>

