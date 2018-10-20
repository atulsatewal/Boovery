function emgProcess() {
    
var data = $('#emgCheck').serialize();

// AJAX code to submit form.
$.ajax({
type: "POST",
url: "formHandler.php",
data: data,
cache: false,
success: function(html) {
alert(html);
window.open ('checklist.php','_self',false);
},
error: function() {
alert("Could not load data...");
}    
});
   // document.getElementById("emgCheck").reset();

}

 function form_submit() {
    document.getElementById("search_form").submit();
   }   

function refProcess() {
    
var data = $('#refCheck').serialize();

// AJAX code to submit form.
$.ajax({
type: "POST",
url: "formHandler.php",
data: data,
cache: false,
success: function(html) {
alert(html);
window.open ('checklist.php','_self',false);
},
error: function() {
alert("Could not load data...");
}
});

   // document.getElementById("refCheck").reset();
    

}
function advanceProcess() {
    
var data = $('#advanceCheck').serialize();

// AJAX code to submit form.
$.ajax({
type: "POST",
url: "advAdjust.php",
data: data,
cache: false,
success: function(html) {
alert(html);
/*window.open ('checklist.php','_self',false);*/
},
error: function() {
alert("Could not load data...");
}
});

   // document.getElementById("refCheck").reset();
    

}


function permissionProcess() {
    
var data = $('#permissionCheck').serialize();

// AJAX code to submit form.
$.ajax({
type: "POST",
url: "formHandler.php",
data: data,
cache: false,
success: function(html) {
alert(html);
},
error: function() {
alert("Could not load data...");
}  
});

document.getElementById("permissionCheck").reset();
    
alert("New Record created Successfully");

}

function creditProcess() {
    
var data = $('#creditCheck').serialize();

// AJAX code to submit form.
$.ajax({
type: "POST",
url: "formHandler.php",
data: data,
cache: false,
success: function(html) {
alert(html);
},
error: function() {
alert("Could not load data...");
}  
});

document.getElementById("creditCheck").reset();


}


function calcSheetProcess() {
    var data = $('#CalculationSheet').serialize
    var amt_granted = document.getElementById("CalculationSheet").elements.namedItem("subTotal").value;
    
$.ajax({
type: "POST",
url: "calcSheet.php",
data: data,
cache: false,
success: function(html) {
alert(html);
}
});
    
 

   // window.open ('dealinghome.php','_self',false);
    
}
