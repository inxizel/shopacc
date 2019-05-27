$(document).ready(function () {
	$.get('/public/lienquan/skins', function (data) {
		$('#skinFilter').typeahead({source: data,});
	}, "json");
	$.get('/public/lienquan/champions', function (data) {
		$('#champFilter').typeahead({source: data})
	}, "json");
});