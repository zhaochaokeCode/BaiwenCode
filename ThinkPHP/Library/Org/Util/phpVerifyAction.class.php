<?php 
//初始化
ini_set("display_startup_errors",1);
error_reporting(E_ALL);
//匹配非空
function pregNL($text){
    $str = trim($text);      
    return !empty($str) ? true : false);
}

//匹配手机号码 
function pregPN($test)
{  
    $rule  = "/^((13[0-9])|147|(15[0-35-9])|180|182|(18[5-9]))[0-9]{8}$/A";  
    preg_match($rule,$test,$result);  
    return $result;  
}  

//匹配邮箱 
function pregE($test)
{  
    $zhengze = '/^[a-zA-Z0-9][a-zA-Z0-9._-]*\@[a-zA-Z0-9]+\.[a-zA-Z0-9\.]+$/A';  
    preg_match($zhengze,$test,$result);  
    return $result;  
} 

//电话号码匹配 
function pregTP($test){  
    $rule = '/^(((010)|(021)|(0\d3,4))( ?)([0-9]{7,8}))|((010|021|0\d{3,4}))([- ]{1,2})([0-9]{7,8})$/A';  
    preg_match($rule,$test,$result);  
    return $result;  
}

//匹配url 
function pregURL($test)
{  
    $rule = '/^(([a-zA-Z]+)(:\/\/))?([a-zA-Z]+)\.(\w+)\.([\w.]+)(\/([\w]+)\/?)*(\/[a-zA-Z0-9]+\.(\w+))*(\/([\w]+)\/?)*(\?(\w+=?[\w]*))*((&?\w+=?[\w]*))*$/';  
    preg_match($rule,$test,$result);  
    return $result;  
}

//匹配身份证号
function pregIC($test)
{  
    $rule = '/^(([0-9]{15})|([0-9]{18})|([0-9]{17}x))$/';         
    preg_match($rule,$test,$result);  
    return $result;  
}  

//匹配邮编 
function pregPOS($test)
{  
    $rule ='/^[1-9]\d{5}$/';  
    preg_match($rule,$test,$result);  
    return $result;  
}  

//匹配ip 
function pregIP($test)
{  
    $rule = '/^((([1-9])|((0[1-9])|([1-9][0-9]))|((00[1-9])|(0[1-9][0-9])|((1[0-9]{2})|(2[0-4][0-9])|(25[0-5]))))\.)((([0-9]{1,2})|(([0-1][0-9]{2})|(2[0-4][0-9])|(25[0-5])))\.){2}(([1-9])|((0[1-9])|([1-9][0-9]))|(00[1-9])|(0[1-9][0-9])|((1[0-9]{2})|(2[0-4][0-9])|(25[0-5])))$/';  
    preg_match($rule,$test,$result);  
    return $result;  
}  

//匹配时间 
function pregTI($test)
{  
    $rule ='/^(([1-2][0-9]{3}-)((([1-9])|(0[1-9])|(1[0-2]))-)((([1-9])|(0[1-9])|([1-2][0-9])|(3[0-1]))))( ((([0-9])|(([0-1][0-9])|(2[0-3]))):(([0-9])|([0-5][0-9]))(:(([0-9])|([0-5][0-9])))?))?$/';  
    preg_match($rule,$test,$result);  
    return $result;  
}  

//utf8下匹配中文 
function pregCh($test)
{  
    $rule ='/([\x{4e00}-\x{9fa5}]){1}/u';  
    preg_match_all($rule,$test,$result);  
    return $result;
}

//验证长度 
function pregLE($test,$lower = 0,$Upper = 9999){
    $len = mb_strlen($test);
    $rule = '/^.{'.$lower.','.$Upper.'}$/';
    preg_match_all($rule,$test,$result); 
    return $result;
}

//验证日文
function pregJP($test){
    $rule = '/^[\u0800-\u4e00\w\.\s]$/';
    preg_match_all($rule,$test,$result);  
    return $result;
}