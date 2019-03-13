<title>PHP __TRAIT__</title>
<?php

class Base {
    public function sayHello(){
        echo 'Hello ';
    }
}
trait Sayworld{
    public function sayHello(){
        parent::sayHello();
        echo "World!";
    }
}

class MyHelloWorld extends Base{
    use Sayworld;
}

$o = new MyHelloWorld();
$o->sayHello();

?>