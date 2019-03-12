<title>PHP asort()</title>
<?php
// 根据数组的值，对数值进行升序排列
$age =array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
asort($age);

print_r ($age);

?>