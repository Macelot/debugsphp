<?php
$user="root2";
$pass="usbw";
$host="localhost:3306";
$banco="test";
try{
	$conn=new PDO("mysql:host=$host;dbname=$banco",$user,$pass);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $erro){
	echo $erro;
}