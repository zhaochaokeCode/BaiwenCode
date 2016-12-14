<?php
define('URL_CALLBACK', 'http://www.15combo.com/index.php/Index/callback/type/');

return array(
	//'配置项'=>'配置值'
	/* 数据库设置 */
	'DB_TYPE'               =>  'mysql',     // 数据库类型
	'DB_HOST'               =>  '127.0.0.1', // 服务器地址
	'DB_NAME'               =>  'th',          // 数据库名
	'DB_USER'      	         => 'root',      // 用户名
	'DB_PWD'                =>  'root',          // 密码
	'DB_PORT'               =>  '3306',        // 端口
	'DB_PREFIX'             =>  'th_',    // 数据库表前缀
	'DB_PARAMS'          =>  array(), // 数据库连接参数
	// 'DB_DEBUG'  =>  TRUE, // 数据库调试模式 开启后可以记录SQL日志
	// 'DB_LITE'             =>  false,    // 使用数据库Lite模式
	'DB_FIELDS_CACHE'       =>  false,        // 启用字段缓存
	'DB_CHARSET'            =>  'utf8',      // 数据库编码默认采用utf8
	// 'DB_DEPLOY_TYPE'        =>  0, // 数据库部署方式:0 集中式(单一服务器),1 分布式(主从服务器)
	// 'DB_RW_SEPARATE'        =>  false,       // 数据库读写是否分离 主从式有效
	// 'DB_MASTER_NUM'         =>  1, // 读写分离后 主服务器数量
	// 'DB_SLAVE_NO'           =>  '', // 指定从服务器序号
	'SHOW_PAGE_TRACE' => true,
	//url访问模式为rewrite模式
	// 'URL_MODEL'=>'2',
	'TMPL_EXCEPTION_FILE' => "__CONTROLLER__/Public/404.html",
	// 'EMPTY_PATH' => "../View/Public/404.html",
	// 配置邮件发送服务器
    // 'MAIL_HOST' =>'smtp-mail.outlook.com',//smtp服务器的名称
    // 'SMTP_PORT'   => '587', //SMTP服务器端口
    // 'MAIL_SMTPAUTH' =>TRUE, //启用smtp认证
    // 'MAIL_USERNAME' =>'gamenoll@hotmail.com',//你的邮箱名
    // 'MAIL_FROM' =>'gamenoll@hotmail.com',//发件人地址
    // 'MAIL_FROMNAME'=>'GAMENOLL游戏平台',//发件人姓名
    // 'MAIL_PASSWORD' =>'nuoeryou123!',//邮箱密码
    // 'MAIL_CHARSET' =>'utf-8',//设置邮件编码
    // 'MAIL_ISHTML' =>TRUE, // 是否HTML格式邮件
    //开启路由重写
	'URL_ROUTER_ON'   => true, 
    //定义回调URL通用的URL
    'URL_ROUTE_RULES'=>array(
        'callback.html' => 'Index/callback'
    ),
    //取消角标
    'show_page_trace'=>false,
    
    //调用自定义常量文件
    'LOAD_EXT_CONFIG' => 'const', 

    //开启报错
    'debug' => true,
	//SINA配置
	'THINK_SDK_SINA' => array(
		'APP_KEY'    => '', //应用注册成功后分配的 APP ID
		'APP_SECRET' => '', //应用注册成功后分配的KEY
		'CALLBACK'   => URL_CALLBACK . 'sina',
	),
	//Github配置
	'THINK_SDK_GITHUB' => array(
		'APP_KEY'    => '', //应用注册成功后分配的 APP ID
		'APP_SECRET' => '', //应用注册成功后分配的KEY
		'CALLBACK'   => URL_CALLBACK . 'github',
	),
	//Google配置
	'THINK_SDK_GOOGLE' => array(
		'APP_KEY'    => '383860901353-nki0e0dh5r390h0ssggrqjn00a7ar1mc.apps.googleusercontent.com', //应用注册成功后分配的 APP ID
		'APP_SECRET' => '-Vmwa0Rv-F96CtucyxSMv-EO', //应用注册成功后分配的KEY
		'CALLBACK'   => URL_CALLBACK.'google/code/383860901353-nki0e0dh5r390h0ssggrqjn00a7ar1mc.apps.googleusercontent.com',
	),
	//Facebook配置
	'THINK_SDK_Facebook' => array(
		'APP_KEY'    => '1077417845646072', //应用注册成功后分配的 APP ID
		'APP_SECRET' => '73baef77784706f0667ea2ccd10e2354', //应用注册成功后分配的KEY
		//'CALLBACK'   => URL_CALLBACK.'facebook/code/1077417845646072',
		'CALLBACK'   => URL_CALLBACK.'facebook',
	),
	//Yahoo配置
	'THINK_SDK_Yahoo' => array(
		'APP_KEY'    => 'dj0yJmk9OVhCNVp1b2Jhd1FDJmQ9WVdrOVRGQlZNR0ZKTlRZbWNHbzlNQS0tJnM9Y29uc3VtZXJzZWNyZXQmeD05Mw--', //应用注册成功后分配的 APP ID
		'APP_SECRET' => 'f7620c57615e340d329467d9b14b0b299557c8ba', //应用注册成功后分配的KEY
		'CALLBACK'   => URL_CALLBACK . 'Yahoo',
	),
	//Twitter配置
	'THINK_SDK_Twitter' => array(
		'APP_KEY'    => 'YUsFPRBi1mZeyijDCJWYSgONz', //应用注册成功后分配的 APP ID
		'APP_SECRET' => 'BPOLYxuWorhSGTHgZgYMXyh97ZU9ZfOJGMjcEsjRbTIn1vfUvH', //应用注册成功后分配的KEY
		'CALLBACK'   => URL_CALLBACK . 'Twitter',
	),
	//腾讯QQ登录配置
	'THINK_SDK_QQ' => array(
		'APP_KEY'    => '', //应用注册成功后分配的 APP ID
		'APP_SECRET' => '', //应用注册成功后分配的KEY
		'CALLBACK'   => URL_CALLBACK . 'qq',
	),
	//腾讯微博配置
	'THINK_SDK_TENCENT' => array(
		'APP_KEY'    => '', //应用注册成功后分配的 APP ID
		'APP_SECRET' => '', //应用注册成功后分配的KEY
		'CALLBACK'   => URL_CALLBACK . 'tencent',
	),
	//新浪微博配置
	'THINK_SDK_SINA' => array(
		'APP_KEY'    => '', //应用注册成功后分配的 APP ID
		'APP_SECRET' => '', //应用注册成功后分配的KEY
		'CALLBACK'   => URL_CALLBACK . 'sina',
	),
	//网易微博配置
	'THINK_SDK_T163' => array(
		'APP_KEY'    => '', //应用注册成功后分配的 APP ID
		'APP_SECRET' => '', //应用注册成功后分配的KEY
		'CALLBACK'   => URL_CALLBACK . 't163',
	),
	//人人网配置
	'THINK_SDK_RENREN' => array(
		'APP_KEY'    => '', //应用注册成功后分配的 APP ID
		'APP_SECRET' => '', //应用注册成功后分配的KEY
		'CALLBACK'   => URL_CALLBACK . 'renren',
	),
	//360配置
	'THINK_SDK_X360' => array(
		'APP_KEY'    => '', //应用注册成功后分配的 APP ID
		'APP_SECRET' => '', //应用注册成功后分配的KEY
		'CALLBACK'   => URL_CALLBACK . 'x360',
	),
	//豆瓣配置
	'THINK_SDK_DOUBAN' => array(
		'APP_KEY'    => '', //应用注册成功后分配的 APP ID
		'APP_SECRET' => '', //应用注册成功后分配的KEY
		'CALLBACK'   => URL_CALLBACK . 'douban',
	),
	//MSN配置
	'THINK_SDK_MSN' => array(
		'APP_KEY'    => '', //应用注册成功后分配的 APP ID
		'APP_SECRET' => '', //应用注册成功后分配的KEY
		'CALLBACK'   => URL_CALLBACK . 'msn',
	),
	//点点配置
	'THINK_SDK_DIANDIAN' => array(
		'APP_KEY'    => '', //应用注册成功后分配的 APP ID
		'APP_SECRET' => '', //应用注册成功后分配的KEY
		'CALLBACK'   => URL_CALLBACK . 'diandian',
	),
	//淘宝网配置
	'THINK_SDK_TAOBAO' => array(
		'APP_KEY'    => '', //应用注册成功后分配的 APP ID
		'APP_SECRET' => '', //应用注册成功后分配的KEY
		'CALLBACK'   => URL_CALLBACK . 'taobao',
	),
	//百度配置
	'THINK_SDK_BAIDU' => array(
		'APP_KEY'    => '', //应用注册成功后分配的 APP ID
		'APP_SECRET' => '', //应用注册成功后分配的KEY
		'CALLBACK'   => URL_CALLBACK . 'baidu',
	),
	//开心网配置
	'THINK_SDK_KAIXIN' => array(
		'APP_KEY'    => '', //应用注册成功后分配的 APP ID
		'APP_SECRET' => '', //应用注册成功后分配的KEY
		'CALLBACK'   => URL_CALLBACK . 'kaixin',
	),
	//搜狐微博配置
	'THINK_SDK_SOHU' => array(
		'APP_KEY'    => '', //应用注册成功后分配的 APP ID
		'APP_SECRET' => '', //应用注册成功后分配的KEY
		'CALLBACK'   => URL_CALLBACK . 'sohu',
	),

);
