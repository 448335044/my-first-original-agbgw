<?php


$value = $_GET['name'];

$nameArr = array('jack','tom','rose');
$res = in_array($value,$nameArr);


if($res == true){
	echo '很遗憾,名字"'.$value.'"已经被占用';
}else{
    echo '恭喜您！可以使用名字"'.$value;
}

?>