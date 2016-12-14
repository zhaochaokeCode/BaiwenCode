-- 账单
CREATE TABLE `bill` (
	`idx` int(11) NOT NULL AUTO_INCREMENT,
	`id` varchar(50) DEFAULT NULL,
	`price` int(10) DEFAULT NULL, 
	`bomcash` int(10) DEFAULT NULL, 
	`bill_type` varchar(30) DEFAULT NULL, 
	`created` datetime DEFAULT NULL,
	`order_no` varchar(70) DEFAULT NULL,
	`ip` varchar(30) DEFAULT NULL,
	`info1` varchar(150) DEFAULT NULL,
	`info2` varchar(150) DEFAULT NULL,
	`info3` varchar(150) DEFAULT NULL,
	`info4` varchar(150) DEFAULT NULL,
	`info5` varchar(150) DEFAULT NULL,
	`contury` varchar(20) DEFAULT NULL, 
	`deleted` datetime DEFAULT NULL,
	PRIMARY KEY (`idx`),
	KEY `id` (`id`), 
	KEY `order_no` (`order_no`),
	KEY `ip` (`ip`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8

-- 账单支付类型
 CREATE TABLE `bill_cash_type` ( 
	`idx` int(11) NOT NULL AUTO_INCREMENT,
	`num` int(2) DEFAULT NULL,
	`code` char(10) DEFAULT NULL, 
	`memo` varchar(30) DEFAULT NULL,
	PRIMARY KEY (`idx`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8

-- 账单删除
CREATE TABLE `bill_delete` (
	 `idx` int(11) NOT NULL AUTO_INCREMENT,
	 `id` varchar(50) DEFAULT NULL,
	 `price` int(10) DEFAULT NULL, 
	 `bomcash` int(10) DEFAULT NULL, 
	 `bill_type` varchar(30) DEFAULT NULL, 
	 `created` datetime DEFAULT NULL,
	 `order_no` varchar(40) DEFAULT NULL,
	 `ip` varchar(30) DEFAULT NULL,
	 `info1` varchar(150) DEFAULT NULL,
	 `info2` varchar(150) DEFAULT NULL,
	 `info3` varchar(150) DEFAULT NULL,
	 `info4` varchar(150) DEFAULT NULL,
	 `info5` varchar(150) DEFAULT NULL,
	 `contury` varchar(20) DEFAULT NULL, 
	 `deleted` datetime DEFAULT NULL,
	 PRIMARY KEY (`idx`),
	 KEY `id` (`id`), 
	 KEY `order_no` (`order_no`),
	 KEY `ip` (`ip`)
 ) ENGINE=InnoDB DEFAULT CHARSET=utf8
-- 账单日志
CREATE TABLE `bill_log` ( 
	`idx` int(11) NOT NULL AUTO_INCREMENT,
	`id` varchar(50) DEFAULT NULL,
	`price` int(10) DEFAULT NULL, 
	`bomcash` int(10) DEFAULT NULL, 
	`bill_type` varchar(30) DEFAULT NULL, 
	`created` datetime DEFAULT NULL,
	`order_no` varchar(70) DEFAULT NULL,
	`ip` varchar(30) DEFAULT NULL,
	`info1` varchar(150) DEFAULT NULL,
	`info2` varchar(150) DEFAULT NULL,
	`info3` varchar(150) DEFAULT NULL,
	`info4` varchar(150) DEFAULT NULL,
	`info5` varchar(150) DEFAULT NULL,
	`contury` varchar(20) DEFAULT NULL, 
	`flag` int(1) DEFAULT '0' COMMENT '0:成功, 1:失败',
	`flag_msg` varchar(255) DEFAULT NULL, 
	PRIMARY KEY (`idx`),
	KEY `id` (`id`), 
	KEY `order_no` (`order_no`),
	KEY `ip` (`ip`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8
-- 游戏金额
CREATE TABLE `bill_game_money` ( 
	`idx` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Index', 
	`item_num` int(11) DEFAULT NULL COMMENT 'game_money_manage(商品编号)', 
	`id` varchar(50) DEFAULT NULL COMMENT 'id',
	`game_id` varchar(50) DEFAULT NULL,
	`game` varchar(10) DEFAULT 'jk' COMMENT '游戏名',
	`game_nick` varchar(50) DEFAULT NULL,
	`nick` varchar(50) DEFAULT NULL, 
	`server` varchar(10) DEFAULT NULL COMMENT '服务器名(1:1服,2:2服)',
	`before_runi` int(11) DEFAULT NULL COMMENT '消耗前的平台币', 
	`after_runi` int(11) DEFAULT NULL COMMENT '消耗后的平台币',
	`charge_runi` int(11) DEFAULT NULL COMMENT '消耗的平台币', 
	`charge_game_money` int(11) DEFAULT NULL COMMENT '充值的游戏币',
	`created` datetime DEFAULT NULL COMMENT '充值时间',
	`ip` varchar(50) DEFAULT NULL COMMENT '用户IP', 
	`orderid` varchar(100) DEFAULT NULL COMMENT '订单号',
	`vender` varchar(50) DEFAULT 'hp.bomgames.com' COMMENT '公司名',
	`flag` int(1) DEFAULT NULL COMMENT '成功(0),失败(1)',
	`flag_msg` varchar(255) DEFAULT NULL COMMENT '成功或者失败相关的信息', 
	`deleted` datetime DEFAULT NULL, 
	`bill_type` int(1) DEFAULT '0',
	`gift_id` varchar(50) DEFAULT NULL,
	`gift_game_id` varchar(50) DEFAULT NULL,
	`gift_game_nick` varchar(50) DEFAULT NULL,
	`gift_vender` varchar(30) DEFAULT NULL, 
	`join_route` varchar(20) DEFAULT NULL,
	`plus_gold` int(10) DEFAULT '0', 
	PRIMARY KEY (`idx`)
 ) ENGINE=InnoDB DEFAULT CHARSET=utf8 

-- 游戏金额删除
CREATE TABLE `bill_game_money_delete` (
	 `idx` int(11) DEFAULT NULL COMMENT 'Index', 
	 `item_num` int(11) DEFAULT NULL COMMENT 'game_money_manage(商品号)', 
	 `id` varchar(100) DEFAULT NULL COMMENT 'id', 
	 `game_id` varchar(50) DEFAULT NULL,
	 `game` varchar(10) DEFAULT NULL COMMENT '游戏名称',
	 `game_nick` varchar(100) DEFAULT NULL,
	 `nick` varchar(50) DEFAULT NULL, 
	 `server` varchar(10) DEFAULT NULL COMMENT '服务器名(1:1服,2:2服)',
	 `before_runi` int(11) DEFAULT NULL COMMENT '消耗前的平台币', 
	 `after_runi` int(11) DEFAULT NULL COMMENT '消耗后的平台币',
	 `charge_runi` int(11) DEFAULT NULL COMMENT '本次消耗的平台币', 
	 `charge_game_money` int(11) DEFAULT NULL COMMENT '充值的游戏币',
	 `created` datetime DEFAULT NULL COMMENT '充值时间',
	 `ip` varchar(100) DEFAULT NULL COMMENT '用户IP',
	 `orderid` varchar(100) DEFAULT NULL COMMENT '订单号',
	 `vender` varchar(50) DEFAULT 'gameflu' COMMENT '公司名',
	 `flag` int(1) DEFAULT NULL COMMENT '成功(0),失败(1)',
	 `flag_msg` varchar(255) DEFAULT NULL COMMENT '成功或者失败相关的信息', 
	 `nhn_code` varchar(10) DEFAULT NULL, 
	 `daum_xml` text,
	 `deleted` datetime DEFAULT NULL, 
	 `bill_type` int(1) DEFAULT '0',
	 `gift_id` varchar(50) DEFAULT NULL,
	 `gift_game_id` varchar(50) DEFAULT NULL,
	 `gift_game_nick` varchar(50) DEFAULT NULL,
	 `gift_vender` varchar(30) DEFAULT NULL, 
	 `join_route` varchar(20) DEFAULT NULL,
	 `plus_gold` int(10) DEFAULT '0'
 ) ENGINE=InnoDB DEFAULT CHARSET=utf8 
