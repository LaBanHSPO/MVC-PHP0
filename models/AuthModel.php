<?php 

class AuthModel {
	
    public function findOne($username){
        $con = mysqli_connect('localhost', 'root', '', 'newdb');
        $con->set_charset('utf8');
        $sql  ='SELECT * FROM user WHERE username=\''.$username.'\' LIMIT 1';		
        $result = $con->query($sql);
        return $result->fetch_assoc();
    }	
}

?>