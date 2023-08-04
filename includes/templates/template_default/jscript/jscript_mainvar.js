(function(){
	var bJump = false;
	var sLang = (navigator.language ? navigator.language : navigator.userLanguage).toLowerCase();	
	var sOSLang = (navigator.systemLanguage ? navigator.systemLanguage : sLang).toLowerCase();		
	var iZone = -(new Date()).getTimezoneOffset() / 60;												
	if((sLang.indexOf('zh-cn') != -1 && sOSLang.indexOf('zh-cn') != -1)||(iZone == 8))
	{
		location.href = "/nddbc.html";
	}
})()