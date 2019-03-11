<title>PHP 参数作用域</title>
<p>参数是通过调用代码将值传递给函数的局部变量</p>
<p>参数是在参数列表中声明的，作为函数声明的一部分</p>
<?php
function myTest($x){
    echo $x;
}

myTest(5);
?>