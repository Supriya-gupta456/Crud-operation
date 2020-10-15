<?php
require 'crud.php';
$id= $_GET['id'];

$remove= new crud();
$remove->delete('registeration'," UId=$id");

// $delete = mysqli_query($connection , "DELETE FROM registeration WHERE UId = $id"); 

// if($delete===true){
//     header('Location: register.php'); 
//     exit;
// } else {
//     echo "Error deleting record";
// }
?>