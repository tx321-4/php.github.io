<title>PHP krsort()</title>
<?php
// 根据数组的键，对数值进行降序排列
$age =array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
krsort($age);

print_r ($age);

?>