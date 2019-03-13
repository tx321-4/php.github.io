<title>PHP checkbox复选框</title>

<?php
$q = isset($_POST['q']) ? $_POST['q'] : '';
if(is_array($q)){
    $sites = array(
        'RUNOOB' => 'xx教程 xxxx.com<br />',
        'GOOGLE' => 'google搜索 xxxxx.com<br />',
        'TAOBAO' => '淘宝 aaaa.com<br />',
    );
    foreach ($q as $val) {
        //PHP_EOL 为常量，用于换行
        echo $sites[$val] .PHP_EOL;
    }
}else{

?>   
<form action="" method="post">
<input type="checkbox" name="q[]" value="RUNOOB">Runoob
<input type="checkbox" name="q[]" value="GOOGLE">google
<input type="checkbox" name="q[]" value="TAOBAO">taobao
<input type="submit" name="" value="提交" id="">
</form>

<?php
}
?>