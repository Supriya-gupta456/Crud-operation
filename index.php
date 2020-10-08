
<html>
<head>
    <title>ajax</title>
    <link rel="stylesheet" href="http://bootswatch.com/cerulean">
</head>
<body>
Name:<input type="text" name="name" id="ajax" onkeyup="ajaxcall(this.value)"><br>
suggestions :<p id="demo"> </p>
<script type="text/javascript">
    function ajaxcall(str){
alert(str);
        if(str.length==0){
            document.getElementById("demo").innerHTML="";
            }
    else{
        var xhttp=new XMLHttpRequest();
        xhttp.onreadystatechange=function(){
            console.log(this);
            if(this.readyState == 4 && this.status == 200){
                document.getElementById("demo").innerHTML=this.responseText;
            }
        };
        xhttp.open("GET","ajax.php?q="+str,true);
        xhttp.send();
    }
};


    
</script>
</body>
</html>