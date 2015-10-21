var request;
if (window.XMLHttpRequest) {
	request = new XMLHttpRequest();
} else {
	request = new ActiveXObject("Microsoft.XMLHTTP");
};
request.open('GET', 'data.json');
request.onreadystatechange = function() {
	if ((request.status === 200) && (request.readyState === 4)) {
		var items = JSON.parse(request.responseText);
		console.log(items);
	};
}
request.send();