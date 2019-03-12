<title>PHP rsort()</title>
<?php
//对数组进行降序排列
$cars =array("Volvo","BMW","Toyota");
rsort($cars);

print_r ($cars);
echo "<br />";
$number = array(4,6,2,22,11);
rsort($number);
print_r ($number);
?>