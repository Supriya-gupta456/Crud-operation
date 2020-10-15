
	<?php
  require 'crud.php';
$update= new crud();

if(isset($_GET['iid'])){
  $iid= $_GET['iid'];

  
   $id="select * from registeration where UId=$iid ";
   $detail=$update->conn->query($id);
  
   $content =mysqli_fetch_assoc($detail);

}
if(isset($_POST['submit'])){
  $iid = $_POST['userId']; 
	$fname =  $_POST['fname'];
	$lname =  $_POST['lname'];
	$bdate =  $_POST['bdate'];
	$email =  $_POST['email'];
	$contact = $_POST['contact'];
	


   
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    

    $update->edit('registeration',['fname'=>$fname,'lname'=>$lname,'bdate'=>$bdate,'contact'=>$contact,'email'=>$email] , " UId=$iid");
    

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
	<input type="text" value="<?php echo $content["fname"]; ?>" id="fname" name="fname" >
    &nbsp;<span id="fname1" style="color: red;"></span>
	<br><br>

	<label  class="control-label ">LastName :</label>
	<input type="text" value="<?php echo $content["lname"]; ?>" id="lname" name="lname" >
	&nbsp;<span id="lname1" style="color: red;"></span>
	<br><br>

   <label  class="control-label  ">BirthDate:</label>
    <input type="date" value="<?php echo $content["bdate"]; ?>" id="bdate" name="bdate">
    &nbsp;<span id="bdate1" style="color: red;"></span>
    <br><br>

	<label  class="control-label ">Contact :</label>
	<input type="text" value="<?php echo $content["contact"]; ?>" id="contact" name="contact">
	&nbsp;<span id="contact1" style="color: red;"></span>
	<br><br>

	<label  class="control-label ">UserId :</label>
	<input type="email"   value="<?php echo $content["email"]; ?>" id="email" name="email" >
	&nbsp;<span id="email1" style="color: red;"></span>
	<br><br>

	

	
</div>
	<input type="submit" name="submit" id="submit" value="UPDATE"  class="btn btn-primary"  style="font-size: 20px;font-style: bold;background-color: powderblue;font-color:black;">


<script type="text/javascript">

	$(document).ready(function(){
		

		 $("#details").hover(function(){
			
			var fname=$("#fname").val();
			var lname=$("#lname").val();
			var bdate=$("#bdate").val();
			var contact=$("#contact").val();

			var email=$("#email").val();
			
			valid=true;

	if(valid && fname==''|| lname==''||bdate==''||contact==''||email=='')
	{
			$('#errormsg').text("Please fill all the fields");
	}else{
         $('#errormsg').text("");
    }
		

})

        $("#fname").on('blur',function(e)
        {
          var regex = new RegExp("^[a-zA-Z ]*$");
            if (regex.test(e.target.value)==0)
             {
            	 $('#fname1').text("**only alphabets!!");
            }
               })
    
$("#lname").on('blur',function(e)
{
          var regex = new RegExp("^[a-zA-Z ]*$");
            if (regex.test(e.target.value)==0) 
            {
            	 $('#lname1').text("**only alphabets!!");
            }
               })
 $("#contact").on('blur',function(e)
 {
 	var regex= new RegExp("^[1-9]{1}[0-9]{9}$");
 	console.log(e.target.value, regex.test(e.target.value))
     if(regex.test(e.target.value)==0  && (contact.length)<10)
     {
         $('#contact1').text("**only 10 digits !!");
		
}
})
$("#email").on('blur',function(e)
{
   var regex= new RegExp("^[A-Z0-9a-z._%+-]+@[A-Za-z.-]+\\.[A-Za-z]{2,64}");
   if(regex.test(e.target.value)==0)
   {
   	   $('#email1').text("**format is wrong!!");
   }
})
})
</script><br><br>




</form>
</body>
</html>