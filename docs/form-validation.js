function validateForm(){
    var formObject = document.forms["myForm"];
    var stDate = document.forms["myForm"]["startDate"].value;
    var edDate = document.forms["myForm"]["endDate"].value;
    var rel = document.forms["myForm"]["relation"].value;
    var appexpdt = document.forms["myForm"]["appCGHSexp"].value;
    var refexpdt = document.forms["myForm"]["refCGHSexp"].value;
    
    if(rel=="")
{
    formObject.elements["relation"].value = 'NULL';
    formObject.elements["refCGHSno"].value = 'NULL';
    formObject.elements["refCGHSexp"].value = '0000-00-00';
    
    }
    
    if(stDate > edDate)
        alert("Invalid period of treatment");
    if(stDate > appexpdt)
        alert("CGHS Card of Applicant has expired");
    if(stDate > refexpdt)
        alert("CGHS Card of Dependent has expired");
    
    refProcess();
}