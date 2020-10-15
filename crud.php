<?php

class crud{
	private $dbhost='localhost';
	private $dbuser='root';
	private $dbpass='';
	private $dbname='crud1';

	// private $conn=false;
	  public $conn;


    public function __construct()
	{
			$this->conn = new mysqli($this->dbhost,$this->dbuser,$this->dbpass,$this->dbname);
			if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
            }
			
	}

	public function insert($table,$data = array()){
		$tablefields=implode(',',array_keys($data));
		
		$tablevalues=implode("','",array_values($data));
		$sql="insert into $table($tablefields)values('$tablevalues');";
		if($this->conn->query($sql)===TRUE){
			 echo "<script>
window.location.href='login.php';
</script> inserted successfully";
		
		}


	}
    public function edit($table,$data = array(),$where){
    	$args= array();
    	foreach ($data as $key => $value) {
    		$args[]="$key = '$value'";

    	}
          $updateddata=implode(',',$args);
    	$sql="UPDATE $table SET $updateddata WHERE $where;";
        if($this->conn->query($sql)===TRUE){
			 echo "<script>
window.location.href='register.php';
</script> ";
		
		}
    	// echo $table;/
    	
    }
    public function delete($table,$where){
    	$sql="DELETE FROM $table WHERE $where;";
    	if($this->conn->query($sql)===TRUE){
			 echo "<script>
window.location.href='register.php';
</script> ";
		
    }

}

public function entry($table,$where,$pass){
	$sql="SELECT * FROM $table WHERE $where;";
	
    // $entry=$this->conn->query($sql);
    if($this->conn->query($sql)===TRUE){
    	echo "yup";
    	if($entry->num_rows==0){
    		echo"<p> Invalid username or password</p>";
    	}else{

    		$passcode= mysqli_fetch_assoc($entry);
    		$passcode1=$passcode[password];
    		echo $passcode1;
    		if($passcode1==$pass){
    		echo "<script>
            window.location.href='home.php';
            </script> ";
            }
    	}
    }
    }



	// private function tableExists($table){
	// 	$sql="show tables from $this->dbname like '$table'";
	// 	$tableInDb=$this->mysqli->query($sql);
	// 	if($tableInDb){
	// 		if($tableInDb->num_rows==1){
	// 			return true;
	// 		}
	// 		else{
	// 			return false;
	// 		}
	// 	}
	// }



}
?>