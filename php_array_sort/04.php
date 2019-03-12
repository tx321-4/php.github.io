<title>PHP ksort()</title>
<?php
// 根据数组的键，对数值进行升序排列
$age =array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
ksort($age);

print_r ($age);

?>