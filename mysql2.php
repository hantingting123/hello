<?php
header("content-Type:text/html;charset=utf8");

$db = new mysqli("localhost","root","","Test2");
$db->query("SET NAMES utf8");
$sql="create database Test2";
if($db->query($sql) === TRUE){//ab对象调用方法
	echo "创建成功";
}else{
	echo "创建失败".$db->error;
}
?>