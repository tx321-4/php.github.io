<title>PHP print 输出变量和字符串</title>
<?php

$txt1 = "学习 PHP";
$txt2 = "RUNOOB.COM";
$cars = array("Volvo","BMW","Toyota");

print $txt1;
print "<br />";
print "在 $txt2 学习 PHP";
print "<br />";
print "我车的品牌是{$cars[0]}";
?>