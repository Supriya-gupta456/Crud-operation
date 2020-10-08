<?php

$connection = mysqli_connect("localhost", "root", "", "crud1");

if(!$connection){
	die('Connect Error');
}else{
	echo "connected";
}
?>