<title>PHP 常量</title>
<?php

//区分大小写的常量名
define("GREETING","欢迎访问 XXXX.COM");
echo GREETING ; //输出 ：'欢迎访问 xxxx.com'
echo "<br />";
echo greeting; //输出：'greeting'

//不区分大小写的常量名
//define("GREETING","欢迎访问 XXXX.COM", true);
//echo greeting; //输出 ：'欢迎访问 xxxx.com'



?>