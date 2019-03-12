<title>PHP $_REQUEST</title>

<form action="<?php echo $_SERVER['PHP_SELF'];?>">
    name ： <input type="text" name="fname" />
    <input type="submit">
</form>

<?php
$name = $_REQUEST['fname'];
echo $name;

?>