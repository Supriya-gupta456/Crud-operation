<?php
require 'crud.php';
$login= new crud();
echo "hii";
if(isset($_POST['login'])){
	$userid =  $_POST['userid'];
	$password =  $_POST['password'];
echo"wow";
	if($userid!=''){
		echo"yo";
      $login->entry('registeration', " email=$userid","$password");
	}
}