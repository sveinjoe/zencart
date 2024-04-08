(function(){
	var bJump = false;
	var sLang = (navigator.language ? navigator.language : navigator.userLanguage).toLowerCase();	
	var sOSLang = (navigator.systemLanguage ? navigator.systemLanguage : sLang).toLowerCase();		
	var iZone = -(new Date()).getTimezoneOffset() / 60;	
	const whoamiExistsWithValueWedo = checkCookieExistsWithValue('whoami', 'wedo');  
	console.log(whoamiExistsWithValueWedo)
	if(!whoamiExistsWithValueWedo){
		if((sLang.indexOf('zh-cn') != -1 && sOSLang.indexOf('zh-cn') != -1)||(iZone == 8))
		{
			location.href = "/nddbc.html";
		}
	}
})()

function checkCookieExistsWithValue(name, value) {  
    const cookies = document.cookie.split('; ');  
    for (let i = 0; i < cookies.length; i++) {  
        const cookie = cookies[i];  
        const cookieName = cookie.split('=')[0];  
        if (cookieName === name) {  
            const cookieValue = decodeURIComponent(cookie.split('=')[1]); 
            if (cookieValue === value) {  
                return true;  
            }  
        }  
    }  
    return false;  
}  