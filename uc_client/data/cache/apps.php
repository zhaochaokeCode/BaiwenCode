<?php
$_CACHE['apps'] = array (
  1 => 
  array (
    'appid' => '1',
    'type' => 'DISCUZX',
    'name' => 'Discuz!',
    'url' => 'http://localhost/discuz',
    'ip' => '',
    'viewprourl' => '',
    'apifilename' => 'uc.php',
    'charset' => 'utf-8',
    'dbcharset' => 'utf8',
    'synlogin' => '1',
    'recvnote' => '1',
    'extra' => false,
    'tagtemplates' => '<?xml version="1.0" encoding="ISO-8859-1"?>
<root>
	<item id="template"><![CDATA[<a href="{url}" target="_blank">{subject}</a>]]></item>
	<item id="fields">
		<item id="subject"><![CDATA[标题]]></item>
		<item id="uid"><![CDATA[用户 ID]]></item>
		<item id="username"><![CDATA[发帖者]]></item>
		<item id="dateline"><![CDATA[日期]]></item>
		<item id="url"><![CDATA[主题地址]]></item>
	</item>
</root>',
    'allowips' => '',
  ),
  2 => 
  array (
    'appid' => '2',
    'type' => 'OTHER',
    'name' => '三生三世十里桃花',
    'url' => 'http://localhost/th',
    'ip' => '127.0.0.1',
    'viewprourl' => '/space.php?uid=%s',
    'apifilename' => 'uc.php',
    'charset' => '',
    'dbcharset' => '',
    'synlogin' => '1',
    'recvnote' => '1',
    'extra' => false,
    'tagtemplates' => '<?xml version="1.0" encoding="ISO-8859-1"?>
<root>
	<item id="template"><![CDATA[]]></item>
</root>',
    'allowips' => '',
  ),
);

?>