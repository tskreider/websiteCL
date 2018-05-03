var today = new Date();
var dateString = today.toString();
dateString = dateString.substring(0,15);

var el = document.getElementById('date');

el.innerHTML = "<a id='date'>" + dateString + '</a>';