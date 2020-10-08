
	<?php
  require 'config.php';

if(isset($_GET['iid'])){
  $iid= $_GET['iid'];

  
   $det=mysqli_query($connection,"select * from registeration where UId=$iid ");

  
   $content =mysqli_fetch_assoc($det);

}

if(isset($_POST['submit'])){
  $iid = $_POST['userId']; 
	$fname =  $_POST['fname'];
	$lname =  $_POST['lname'];
	$bdate =  $_POST['bdate'];
	$email =  $_POST['email'];
	$contact = $_POST['contact'];
	

   
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
   
	  $edit= mysqli_query($connection,"UPDATE registeration SET fname='$fname', lname='$lname',
	   bdate='$bdate', email='$email' WHERE UId='$iid'  ");
	  if($edit===true){
	  
    
      echo "<script>
alert('updated successfully');
window.location.href='register.php';
</script>";


	  }
else{
	echo"sorry updation failed";
}
}
	?>
	<!DOCTYPE html>
<html>
<head>
	<title>editpage</title>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>


</head>
<body  style=" text-align:center;">
	<h1 style="font-size: 55px;"><u>EDITING FORM!!!</u></h1>
	<form action="edit.php" method="post"   class="form-horizontal">

<div style="font-size: 20px;padding: 5px;"  class="form-group">


 <input type="hidden" value="<?php echo $content["UId"]; ?>" name="userId">
	<label  class="control-label ">FirstName :</label>
	<input type="text" value="<?php echo $content["fname"]; ?>" id="fname" name="fname" ><br><br>

	<label  class="control-label ">LastName :</label>
	<input type="text" value="<?php echo $content["lname"]; ?>" id="lname" name="lname" ><br><br>

   <label  class="control-label  ">BirthDate:</label>
    <input type="date" value="<?php echo $content["bdate"]; ?>" id="bdate" name="bdate"><br><br>

	<label  class="control-label ">Contact :</label>
	<input type="text" value="<?php echo $content["contact"]; ?>" id="contact" name="contact"><br><br>

	<label  class="control-label ">UserId :</label>
	<input type="email"   value="<?php echo $content["email"]; ?>" id="email" name="email" ><br><br>

	
</div>
	<input type="submit" name="submit" id="submit" value="UPDATE"  class="btn btn-primary"  style="font-size: 20px;font-style: bold;background-color: powderblue;font-color:black;">


<script type="text/javascript">

	$(document).ready(function(){
		var contact=$("#contact").val();

		$("#submit").click(function(){
			
			var fname=$("#fname").val();
			var lname=$("#lname").val();
			var bdate=$("#bdate").val();
			
			var email=$("#email").val();
			
			valid=true;

	if(valid && fname==''|| lname==''||bdate==''||contact==''||email==''||password=='')
	{
			alert("Please fill all the fields");
	}
		

})

        $("#fname").on('blur',function(e)
        {
          var regex = new RegExp("^[a-zA-Z ]*$");
            if (regex.test(e.target.value)==0)
             {
            	alert("only alphabets!! ")
            }
               })
    
$("#lname").on('blur',function(e)
{
          var regex = new RegExp("^[a-zA-Z ]*$");
            if (regex.test(e.target.value)==0) 
            {
            	alert("only alphabets!!");
            }
               })
 $("#contact").on('blur',function(e)
 {
 	var regex= new RegExp("^[1-9]{1}[0-9]{9}$");
 	console.log(e.target.value, regex.test(e.target.value))
     if(regex.test(e.target.value)==0 || (contact.length)<10)
     {
 		alert("format is wrong");
		
}
})
$("#email").on('blur',function(e)
{
   var regex= new RegExp("^[A-Z0-9a-z._%+-]+@[A-Za-z.-]+\\.[A-Za-z]{2,64}");
   if(regex.test(e.target.value)==0)
   {
   	   alert("email is in wrong format");
   	   
   }
})
})
</script><br><br>




</form>
</body>
</html>