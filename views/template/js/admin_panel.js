// JavaScript Document
//var i = 2;
//$("#addAttr").click(function() {
// 	$("#attrList").append("<li><input type='text' id='text"+i+"' name='text"+i+"'<li>");
//	i++;
//});

$('#key_add_category').click(function() {
	$('#attrListDiv').append("<div class='text_div'><input type='text' name='category_name'	id='category_name' placeholder='Свойство'><i class='fa fa-times-circle-o' title='Удалить' onClick='$(this).parent(\"*\").remove();' style='cursor: pointer;' aria-hidden='true'></i></div>");
});
$('#key_edit_category').click(function() {
	$('#AddAttrListDiv').append("<div class='text_div'><input type='text' name='category_name'	id='category_name' placeholder='Свойство'><i class='fa fa-times-circle-o' title='Удалить' onClick='$(this).parent(\"*\").remove();' style='cursor: pointer;' aria-hidden='true'></i></div>");
});
function funcSuccC(data) {
	var begin = JSON.parse(data);
	$('#category_name').attr("value", begin[0]['name']);
	$('#category_sort').attr("value", begin[0]['sort_order']);
	$('#category_status option[value="'+begin[0]['status']+'"]').prop('selected', true);
	
	$('#attrListDiv').html("");
	for (var i = 0; i < begin[1].length; i++){
		if (i == 0) {
			$('#attrListDiv').append("<div class='text_div'><input type='text' name='category_name'	id='category_name' placeholder='Свойство' value='"+begin[1][i]['name']+"'></div>");
		} else {
			$('#attrListDiv').append("<div class='text_div'><input type='text' name='category_name'	id='category_name' placeholder='Свойство' value='"+begin[1][i]['name']+"'><i class='fa fa-times-circle-o' title='Удалить' onClick='$(this).parent(\"*\").remove();' style='cursor: pointer;' aria-hidden='true'></i></div>");
		}
		
	}
}
function funcSuccB(data) {
	var begin = JSON.parse(data);
	$('#brand_name').attr("placeholder", "Имя: "+begin['name']);
}
$("#opt_category").change(function() {
	$.ajax ({
		url: "/views/template/ajax/ajax_admin_panel.php",
		type: "POST",
		data: {varia: $("#opt_category").val(), sw: 'category'},
		dataType: "html",
		success: funcSuccC,
	});
});
$("#opt_brand").change(function() {
	$.ajax ({
		url: "/views/template/ajax/ajax_admin_panel.php",
		type: "POST",
		data: {varia: $("#opt_brand").val(), sw: 'brand'},
		dataType: "html",
		success: funcSuccB,
	});
});
