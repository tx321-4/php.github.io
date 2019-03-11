<title>PHP Static关键字</title>
<p>当一个函数完成时，它的所有变量通常都会被删除。然而，有时候您希望某个局部变量不要被删除。</p>
<p>要做到这一点，第一次声明变量时使用 static 关键字：</p>
<?php
function myTest(){
    static $x = 0;
    echo $x;
    $x++;
    echo PHP_EOL; //换行符
}

myTest();
myTest();
myTest();
?>