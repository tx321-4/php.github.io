<title>PHP 常量是全局的</title>
<?php


define("GREETING","欢迎访问 XXXX.COM");

function myTest(){
    echo GREETING;
}

myTest(); //输出："欢迎访问 xxxx.com"


?>