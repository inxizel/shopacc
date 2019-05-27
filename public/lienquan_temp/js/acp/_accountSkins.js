$(document).ready(function () {
	$.get('/Content/lienquan/skins', function (data) {
		$('#skinFilter').typeahead({source: data,});
	}, "json");
	$.get('/Content/lienquan/champions', function (data) {
		$('#champFilter').typeahead({source: data,});
	}, "json");
});