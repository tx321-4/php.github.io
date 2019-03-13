<title>PHP 下拉菜单多选</title>

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
    <select name="q[]" id="" multiple="multiple">
        <option value="">选择一个站点</option>
        <option value="RUNOOB">Runoob</option>
        <option value="GOOGLE">google</option>
        <option value="TAOBAO">taobao</option>
    </select>
    <input type="submit" name="" value="提交" id="">
</form>

<?php
}
?>