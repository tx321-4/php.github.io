<title>PHP function--添加多个参数</title>
<?php

function writeName($fname,$punctuation){
    echo $fname . " Refsnes" . $punctuation . "<br />";
}

echo "My name is ";
writeName("Kai Jim",".");
echo "My sister's name is ";
writeName("Hege","!");
echo "My brother's name is ";
writeName("Stale","?");

?>