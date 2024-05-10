<?php
if(ni_need_login()){
    zen_redirect(zen_href_link(FILENAME_LOGIN, '', 'SSL'));
    exit();
}

//
function ni_need_login(){
    if(ni_is_bot()){
        $arr_page_need_login = array(
            'about_us',
            'ask_a_question',
            'conditions',
            'privacy',
            'shippinginfo',
            'contact_us',
        );
        $main_page = ni_get_main_page();
        if(in_array($main_page, $arr_page_need_login)){
            return true;
        }
    }
}

function ni_get_main_page(){
    $main_page = $_GET['main_page'];
    $arr = explode('.', $main_page);
    if(!empty($arr[0])){
        return strtolower($arr[0]);
    }else{
        return 'index';
    }
}

function ni_is_bot() {  

	if(empty($_SERVER["HTTP_ACCEPT_LANGUAGE"])){ /**语言为空就是爬虫 */
		return true;
	}
    $user_agent = $_SERVER['HTTP_USER_AGENT'];  
  
    // 这里是一个简单的爬虫列表，你可以根据需要添加或修改  
    $bots = [  
        'Googlebot',  
        'Bingbot',  
        'Baiduspider',  
        'YandexBot',  
        // ... 其他爬虫  
    ];  
  
    foreach ($bots as $bot) {  
        if (strpos($user_agent, $bot) !== false) {  
            return true; // 找到了匹配的爬虫  
        }  
    }  
  
    return false; // 没有找到匹配的爬虫  
}  