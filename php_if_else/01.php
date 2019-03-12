<title>PHP if</title>
<?php

$t = date("H");
echo $t . "<br />";
if($t < "5")
{
    echo "Have a good morning!";
}else if($t < "20"){
    echo "Have a good day!";
}
else{
    echo "Have a good night!";
}



?>