<title>PHP 单选按钮表单</title>

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
        <input name="q" type="radio" value="RUNOOB">Runoob
        <input name="q" type="radio" value="GOOGLE">google
        <input name="q" type="radio" value="TAOBAO">taobao
        <input type="submit" name="" value="提交" id="">
</form>

<?php
}
?>