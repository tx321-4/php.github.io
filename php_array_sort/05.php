<title>PHP arsort()</title>
<?php
// 根据数组的值，对数值进行降序排列
$age =array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
arsort($age);

print_r ($age);

?>