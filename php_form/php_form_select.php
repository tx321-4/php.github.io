<title>PHP 下拉菜单单选</title>

<?php
$q = isset($_GET['q']) ? htmlspecialchars($_GET['q']) : '';
if($q){
    if($q== 'RUNOOB'){
        echo 'xx教程<br />xxxx.com';
    }else if($q == 'GOOGLE'){
        ECHO 'google搜索<br />xxxxx.com';
    }else if($q == 'TAOBAO'){
        ECHO '淘宝<br />aaaa.com';
    }
}else{

?>   
<form action="" method="get">
    <select name="q" id="">
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