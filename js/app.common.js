
// 페이지 타이틀
var docTitle   = "With Public";

document.title = docTitle;
$('#docTitle').html(docTitle);

// url 호출
var get      = getRequest();

var menu     = get['menu'];
var routeid  = get['routeid'];

//if(!routeid) routeid = "";

if(!menu) menu = "0";
$('#menuOn_'+menu).attr('class','on');


// Funtion
function getRequest() {
	if (location.search.length > 1) {
		var get = new Object();
		var ret = location.search.substr(1).split('&');
		for (var i = 0; i < ret.length; i++) {
			var r = ret[i].split('=');
			get[r[0]] = r[1];
		}
		return get;
	} else {
		return false;
	}
}
