
<?php

require 'config.php';

if (isset($_POST['submit'])){
    
    
    $fname =  $_POST['fname'];
    $lname =  $_POST['lname'];
    $bdate =  $_POST['bdate'];
    $email =  $_POST['email'];
    $contact = $_POST['contact'];
    

   
    $email = filter_var($email, FILTER_SANITIZE_EMAIL); // Sanitizing email(Remove unexpected symbol like <,>,?,#,!, etc.)
    
    
   if($fname !=''||$email !=''||$password !=''||$contact !=''||$bdate !='')
    {
    
    $result=mysqli_query($connection,"select * from registeration where email='$email' ");
    if(mysqli_num_rows($result)>0){
    
        echo "username already exist";
    }
    else {
        
    
    // //Insert Query of SQL
    $query = mysqli_query ($connection, "insert into registeration(fname,lname,bdate,contact,email) values 
        ('$fname', '$lname', '$bdate' ,'$contact', '$email')");
    if ($query===true){
    echo "<br/><br/><span>Data Inserted successfully...!!</span>";
     header("refresh:2;");
    }}
   }
   else{
    echo "<p>Insertion Failed <br/> Some Fields are Blank....!!</p>";
    }
}
 


?>
<!DOCTYPE html>
<html>
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">
    </script>
    <title>CRUD operation</title>
    <meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
    <link rel="stylesheet" type="text/css" href="css.css">

    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>


</head>
<body style="text-align: center;" >

  

   <h1 id="rid"><u>Kindly Register !!!</u></h1>


<form  action="register.php" method="POST"  id="details">

    FirstName :<input type="text" name= "fname" id="fname" ><br><br>
    LastName  :<input type="text"  name="lname" id="lname" ><br><br>
    BirthDate:<input type="date"   name="bdate" id="bdate"><br><br>
    Contact : <input type="text"  name="contact" id="contact"><br><br>
    Email:<input type="email"   name="email" id="email"><br><br>
    

<input type="submit" name="submit" id="submit" value="SignUp"  class="btn btn-primary"  style="font-size: 20px;font-style: bold;background-color: powderblue;">

</form>
<script type="text/javascript">
    $(document).ready(function(){
        $("#submit").click(function(){
            
            var fname=$("#fname").val();
            var lname=$("#lname").val();
            var bdate=$("#bdate").val();
            var contact=$("#contact").val();
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
    
$("#lname").on('blur',function(e){
          var regex = new RegExp("^[a-zA-Z ]*$");
            if (regex.test(e.target.value)==0) {
                alert("only alphabets!!");
            }
               })
 $("#contact").on('keyup',function(e){
    var regex= new RegExp("^[1-9]{1}[0-9]{9}$");
    console.log(e.target.value, regex.test(e.target.value))
     if(regex.test(e.target.value)==0|| (contact.length)<10){
        alert(" contact format is wrong");
        
}
})
$("#email").on('blur',function(e){
   var regex= new RegExp("^[A-Z0-9a-z._%+-]+@[A-Za-z.-]+\\.[A-Za-z]{2,64}");
   if(regex.test(e.target.value)==0){
       alert("email is in wrong format");
       
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
    
    // if (isset($GLOBALS["success"])) {
    //  if ($GLOBALS["success"]) {
    //      echo "<script>alert('ASfdghgfgh ')</script>";
    //  }
    // }
    $result1=mysqli_query($connection,"select * from registeration  ");
    while ($row =mysqli_fetch_assoc($result1)) 
    {
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

</body></html>



