
<!DOCTYPE html>
<html>
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">
    </script>
    <title>CRUD operation</title>
    <meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
    <!-- <link rel="stylesheet" type="text/css" href="css.css">
 -->
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>


</head>
<body style="text-align: center;" >

  

   <h1 id="rid"><u>Kindly Register !!!</u></h1>


<form  action="function.php" method="POST"  id="details">

    FirstName :<input type="text" name= "fname" id="fname" >
    &nbsp;<span id="fname1" style="color: red;"></span>
    <br><br>

    LastName  :<input type="text"  name="lname" id="lname" >
    &nbsp;<span id="lname1" style="color: red;"></span>
    <br><br>

    BirthDate:<input type="date"   name="bdate" id="bdate">
    &nbsp;<span id="bdate1" style="color: red;"></span>
    <br><br>
    
    Contact : <input type="text"  name="contact" id="contact">
    &nbsp;<span id="contact1" style="color: red;"></span>
    <br><br>

    Email:<input type="email"   name="email" id="email">
    &nbsp;<span id="email1" style="color: red;"></span>
    <br><br>

    Password:<input type="password"   name="password" id="password">
    &nbsp;<span id="password1" style="color: red;"></span>
    <br><br>
    
    
    
<!-- <span id="errormsg" style="text-align: center;color: red;"></span>
 --><input type="submit" name="submit" id="submit" value="SignUp"  class="btn btn-primary"  style="font-size: 20px;font-style: bold;background-color: powderblue;">
<!-- p style="text-align: center;" id="finalmsg"></p> -->

</form>
<span id="errormsg" style="text-align: center;color: red;"></span>

<script type="text/javascript">
    $(document).ready(function(){
        
        $("#details").hover(function(){
            
            var fname=$("#fname").val();
            var lname=$("#lname").val();
            var bdate=$("#bdate").val();
            var contact=$("#contact").val();
            var email=$("#email").val();
            var password=$("#password").val();
            
            valid=true;

    if(valid && fname==''|| lname==''||bdate==''||contact==''||email==''||password=='')
    {
           $('#errormsg').text("**Please fill all the fields");
    // }else if( password < 8){
    //      $('#password1').text("**minimum 8 inputs are required");
    // }
}

    else{
         $('#errormsg').text("");
    }
       
        

      })
        $("#fname").on('blur',function(e)
        {
          var regex = new RegExp("^[a-zA-Z ]*$");
            if (regex.test(e.target.value)==0)
             {
                $('#fname1').text("**only alphabets!!");
                // alert("only alphabets!! ")
            }
               })
    
$("#lname").on('blur',function(e){
          var regex = new RegExp("^[a-zA-Z ]*$");
            if (regex.test(e.target.value)==0) {
                 $('#lname1').text("**only alphabets!!");
                // alert("only alphabets!!");
            }
               })
 $("#contact").on('blur',function(e){
    var regex= new RegExp("^[1-9]{1}[0-9]{9}$");
    console.log(e.target.value, regex.test(e.target.value))
     if(regex.test(e.target.value)==0 && (contact.length)<10){
         $('#contact1').text("**only 10 digits !!");
        // alert(" contact format is wrong");
        
}
})
$("#email").on('blur',function(e){
   var regex= new RegExp("^[A-Z0-9a-z._%+-]+@[A-Za-z.-]+\\.[A-Za-z]{2,64}");
   if(regex.test(e.target.value)==0){
     $('#email1').text("**format is wrong!!");
       // alert("email is in wrong format");
       
   }
}) $("#password").on('blur',function(e){

if( $("#password").val() < 8){
         $('#password1').text("**minimum 8 inputs are required");
    }

})
})


</script><br><br>

<table align='center' border="8px solid black" style="width: 800px; line-height: 40px; text-decoration-style: bold;font-size: 30px; ">
    <tr>
        <th colspan="6"><h2> <u>RECORD ENTERED!! </u></h2></th>
    </tr>
    <tr>
        <th><u> ID</u> </th>
        <th> <u>Name </u></th>
        <th><u> D.O.B</u></th>
        <th> <u>Contact</u></th>
        <th><u>Email </u></th>
        <th><u>Actions</u></th>
    </tr>
 <?php
 require "crud.php";

    $table= new crud();

     $result1="select * from registeration  ";
     $result2=$table->conn->query($result1);
     $counter=0;

    while ($row =mysqli_fetch_assoc($result2)) 
    {
     $counter++;
     ?>    
         <tr style="font-size: 20px; font-family: arial;"><b>
            <td> <?php echo $row['UId'] ; ?></td>
            <td> <?php echo $row['fname'] ;?></td>
            <td> <?php echo $row['bdate'] ; ?></td>
            <td> <?php echo $row['contact'] ; ?></td>
            <td> <?php echo $row['email'] ; ?></td>
            <td> <button name="edit" > <a href="edit.php?iid=<?php echo $row ["UId"]; ?>">   EDIT </a></button>&nbsp;
                <button  name="delete" ><a href="delete.php?id=<?php echo $row["UId"]; ?>"> DELETE </a></button>
            </td></b>
         </tr>
 <?php

}

 ?>
</table> 

</body>
</html> 



