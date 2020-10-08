<?php
$output = getName();
echo $output;

function getName(){
$a[]="supriya";
$a[]="sujata";
$a[]="riya";
$a[]="vidhi";
$a[]="suraj";
$a[]="ritu";
$a[]="riya";
$a[]="uttam";
$a[]="piyush";
$a[]="ankit";
//get query string
$q = $_REQUEST["q"];
$suggest = "";
//get suggestion
if($q!==""){
	$q=strtolower($q);
	$len=strlen($q);
	foreach($a as $name){
		if(stristr($q,substr($name,0, $len)))
   {
	if($suggest===""){
      $suggest=$name;
	}else{
		$suggest.=",$name";
	}
}	
}
return $suggest;
}
}
?>