// JavaScript Document
$('#search-key').click(function() {
	var obj = $('#search').val();
	window.location = "search.php?source="+obj;
});