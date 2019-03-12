<title>PHP $_POST</title>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    name ： <input type="text" name="fname" />
    <input type="submit">
</form>

<?php
$name = $_POST['fname'];
echo $name;

?>