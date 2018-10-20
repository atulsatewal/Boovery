//adds extra table rows
var i=$('table tr').length;
$(".addmore").on('click',function(){

	html = '<tr>';
	html += '<td><input class="case" type="checkbox"/></td>';
	html += '<td><input type="text" data-type="productCode" name="itemNo[]" id="itemNo_'+i+'" class="form-control autocomplete_txt" autocomplete="off"></td>';
    html += '<td><input type="text" data-type="hospName" name="itemHosp[]" id="itemHosp_'+i+'" class="form-control autocomplete_txt" autocomplete="off"></td>';
    html += '<td><input type="text" data-type="text" name="itemDate[]" id="itemDate_'+i+'" class="form-control autocomplete_txt" autocomplete="off"></td>';
	html += '<td><input type="text" data-type="productName" name="itemName[]" id="itemName_'+i+'" class="form-control autocomplete_txt" autocomplete="off"></td>';
    
    html += '<td><input type="number" step="any" name="total_asked[]" id="total_asked_'+i+'" class="form-control totalAskedPrice" autocomplete="off" onkeypress="return IsNumeric(event);" ondrop="return false;" onpaste="return false;"></td>';
    
	html += '<td><input type="number" step="any" name="total[]" id="total_'+i+'" class="form-control totalLinePrice" autocomplete="off" onkeypress="return IsNumeric(event);" ondrop="return false;" onpaste="return false;"></td>';
	html += '</tr>';

if ($("#CalculationSheet input:checkbox:checked").length > 0)
{
   //.append(html);
    var row =  $('.case:checkbox:checked').parents("tr"); // get the parent row of the clicked button
        $(html).insertAfter(row);
      
}
else
{
   $('table').append(html);
}
i++;
});

//to check all checkboxes
$(document).on('change','#check_all',function(){
	$('input[class=case]:checkbox').prop("checked", $(this).is(':checked'));
});

//deletes the selected table rows
$(".delete").on('click', function() {
	$('.case:checkbox:checked').parents("tr").remove();
	$('#check_all').prop("checked", false); 
	calculateTotal();
});


//autocomplete script
$(document).on('focus','.autocomplete_txt',function(){
	type = $(this).data('type');
	
	if(type =='productCode' )autoTypeNo=0;
	if(type =='productName' )autoTypeNo=1; 	
    var h_type;
    if(document.getElementById('nabh_nabl').checked) {
  //Nabh radio button is checked
        h_type = "nabh_nabl"
}else if(document.getElementById('non_nabh_nabl').checked) {
  //Non Nabh radio button is checked
    h_type = "non_nabh_nabl"
}
    else{
        alert("Please select Hospital Type");
    }
    
    var e = document.getElementById("appCGHScategory");
var category = e.options[e.selectedIndex].value;
    
	
	$(this).autocomplete({
		source: function( request, response ) {
			$.ajax({
				url : 'ajax/get_calcsheet_item.php',
				dataType: "json",
				method: 'post',
				data: {
				   name_startsWith: request.term,
				   type: type,
                   h_type: h_type,
                    category: category
				},
				 success: function( data ) {
					 response( $.map( data, function( item ) {
					 	var code = item.split("|");
						return {
							label: code[autoTypeNo],
							value: code[autoTypeNo],
							data : item
						}
					}));
				}
			});
		},
		autoFocus: true,	      	
		minLength: 0,
		select: function( event, ui ) {
			var names = ui.item.data.split("|");						
			id_arr = $(this).attr('id');
	  		id = id_arr.split("_");
			$('#itemNo_'+id[1]).val(names[0]);
			$('#itemName_'+id[1]).val(names[1]);
			$('#total_'+id[1]).val( 1*names[2] );
			calculateTotal();
		}		      	
	});
});


//recalcuclte total price on line price change
$(document).on('change keyup blur','.totalLinePrice',function(){
	calculateTotal();
});


$(document).on('change keyup blur','.totalAskedPrice',function(){
	calculateTotalAsked();
});


//price change
$(document).on('change keyup blur','.changesNo',function(){
	id_arr = $(this).attr('id');
	id = id_arr.split("_");
	quantity = $('#quantity_'+id[1]).val();
	price = $('#price_'+id[1]).val();
	if( quantity!='' && price !='' ) $('#total_'+id[1]).val( (parseFloat(price)*parseFloat(quantity)).toFixed(2) );	
	calculateTotal();
});

$(document).on('change keyup blur','#tax',function(){
	calculateTotal();
});

//total price calculation 
function calculateTotal(){
	subTotal = 0 ; total = 0; 
	$('.totalLinePrice').each(function(){
		if($(this).val() != '' )subTotal += parseFloat( $(this).val() );
	});
	$('#subTotal').val( subTotal.toFixed(2) );
}

//total price calculation 
function calculateTotalAsked(){
	subTotal = 0 ; total = 0; 
	$('.totalAskedPrice').each(function(){
		if($(this).val() != '' )subTotal += parseFloat( $(this).val() );
	});
	$('#askedTotal').val( subTotal.toFixed(2) );
}


//It restrict the non-numbers
var specialKeys = new Array();
specialKeys.push(8,46); //Backspace
function IsNumeric(e) {
    var keyCode = e.which ? e.which : e.keyCode;
    console.log( keyCode );
    var ret = ((keyCode >= 45 && keyCode <= 57) || specialKeys.indexOf(keyCode) != -1);
    return ret;
}


