<?php
return array(
	//'配置项'=>'配置值'
	/* 数据库设置 */
	'DB_TYPE'               =>  'mysql',     // 数据库类型
	'DB_HOST'               =>  '42.96.162.7', // 服务器地址
	'DB_NAME'               =>  'gn',          // 数据库名
	'DB_USER'               =>  'root',      // 用户名
	'DB_PWD'                =>  '6168f940a1',          // 密码
	'DB_PORT'               =>  '3306',        // 端口
	'DB_PREFIX'             =>  'gn_',    // 数据库表前缀
	'DB_PARAMS'          =>  array(), // 数据库连接参数
	// 'DB_DEBUG'  =>  TRUE, // 数据库调试模式 开启后可以记录SQL日志
	// 'DB_LITE'             =>  false,    // 使用数据库Lite模式
	'DB_FIELDS_CACHE'       =>  false,        // 启用字段缓存
	'DB_CHARSET'            =>  'utf8',      // 数据库编码默认采用utf8
	// 'DB_DEPLOY_TYPE'        =>  0, // 数据库部署方式:0 集中式(单一服务器),1 分布式(主从服务器)
	// 'DB_RW_SEPARATE'        =>  false,       // 数据库读写是否分离 主从式有效
	// 'DB_MASTER_NUM'         =>  1, // 读写分离后 主服务器数量
	// 'DB_SLAVE_NO'           =>  '', // 指定从服务器序号
	// 显示页面Trace信息
    'SHOW_PAGE_TRACE' => true, 
    'RBAC_SUPERADMIN'=>'admin',

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
);