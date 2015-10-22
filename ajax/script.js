$.getJSON('data.json', function(data) {
	var output = '<ul>';
	$.each(data, function(key, val) {
		output += '<li>' + val.id + '</li>';
	});
	output += '</ul>';
	// console.log(data);

	$('#update').prepend(output);
});