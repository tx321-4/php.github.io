<title>PHP 遍历数值数组</title>
<?php

$cars = array("Volvo","BMW","Toyota");

$arrlength = count($cars);
for($x = 0; $x< $arrlength; $x++){
    echo $cars[$x];
    echo "<br />";
}

?>