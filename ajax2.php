<!DOCTYPE html>
<html>
<head>
	<title>ajax form file</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">
	</script>
</head>
<body>
<div id="details">
	FirstName :<input type="text" name="fname" id="fulln">
	LastName :<input type="text" name="Lname" id="lastn">
	DOB :<input type="date" name="birthday">
</div>
	<button id="submit" type="submit" >Submit</button>
	<p></p>
<script type="text/javascript">
	$(document).ready(function() {
		$("#submit").click(function(){
			var fname= $("#fulln").val();
			var lname= $("#lastn").val();
		$.ajax({
        url: 'form.php', // point to server-side PHP script 
        data : {fname: fname, lname:lname },
        type: 'post',
        success: function (response){
            $("p").text(response);
        }
        });
	});
	});
	
		
		
		// console.log('df');
		

			//$.get("form.php" ,function form (data){
			//	 alert("Data: " + data + "\nStatus: " + status);
             // $("p").text("fullname is");
             

</script>


</body>
</html>