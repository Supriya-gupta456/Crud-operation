<?php 
require "crud.php";

$crud= new crud();
// $edit= new crud();

if(isset($_POST['submit'])){	

	$fname =  $_POST['fname'];
	$lname =  $_POST['lname'];
	$bdate =  $_POST['bdate'];
	$email =  $_POST['email'];
	$contact = $_POST['contact'];
	$password = $_POST['password'];


	if($fname!=''||$lname!=''||$bdate!=''||$contact!=''||$email!=''||$password!=''){
	$crud->insert('registeration',['fname'=>$fname,'lname'=>$lname,'bdate'=>$bdate,'contact'=>$contact,'email'=>$email,'password'=>$password ]);
	


}else{
	 echo "<script>
window.location.href='register.php';
</script> ";
}	
}
?>
