<title>PHP global关键字</title>
<p>global关键字用于函数访问全局变量</p>
<?php
$x = 5;
$y = 10;
function myTest(){
    global $x,$y;
    $y = $x + $y;
}

myTest();
echo $y; //输出15

echo '<br />';
 
function myTest2()
{
    $GLOBALS['y']=$GLOBALS['x']+$GLOBALS['y'];
} 
 
myTest2();
echo $y;

?>