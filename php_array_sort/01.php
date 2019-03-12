<title>PHP sort()</title>
<?php
//对数组进行升序排列
$cars =array("Volvo","BMW","Toyota");
sort($cars);

print_r ($cars);
echo "<br />";
$number = array(4,6,2,22,11);
sort($number);
print_r ($number);
?>