<?php
header('content-type:application/json;charset=utf-8');
echo file_get_contents('info.json');
/*
$value = $_POST['name'];

$nameArr = array('jack','tom','rose');
$res = in_array($value,$nameArr);


if($res == true){
	echo '对不起,名字"'.$value.'"已经被占用';
}else{
    echo '恭喜您！可以使用名字"'.$value;
}
sleep(1);
*/
?>