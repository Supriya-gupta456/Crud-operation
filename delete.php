<?php
require 'config.php';
$id= $_GET['id'];

$delete = mysqli_query($connection , "DELETE FROM registeration WHERE UId = $id"); 

if($delete===true){
    header('Location: register.php'); 
    exit;
} else {
    echo "Error deleting record";
}
?>