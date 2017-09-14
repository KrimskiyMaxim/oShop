// JavaScript Document
//var i = 2;
//$("#addAttr").click(function() {
// 	$("#attrList").append("<li><input type='text' id='text"+i+"' name='text"+i+"'<li>");
//	i++;
//});
function funcSuccC(data) {
	var begin = JSON.parse(data);
	$('#category_name').attr("placeholder", "Имя: "+begin['name']);
	$('#category_sort').attr("placeholder", "Номер сортировки: "+begin['sort_order']);
	$('#category_status option[value="'+begin['status']+'"]').prop('selected', true);
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
