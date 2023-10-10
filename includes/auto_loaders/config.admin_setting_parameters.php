<?php
//在这里声明一下，就可以在加载数据库之后读取$autoLoadConfig
// sessions are started at 70
$autoLoadConfig[71][] = array(
    'autoType' => 'init_script',
    'loadFile' => 'init_admin_setting_parameters.php'
);
