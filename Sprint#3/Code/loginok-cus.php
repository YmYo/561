<?php
header("Content-type:text/html;charset=UTF-8");
require "mysql.php";
session_start();
$username=$_POST['username'];
$password=$_POST['password'];
 
if(checkUser($username,$password)){
	
	echo '<html><head><Script Language="JavaScript">alert("Welcome!");</Script></head></html>' . "<meta http-equiv=\"refresh\" content=\"0; url=main/main.php?username=$username\">";
}
	
    
 
function checkUser($username,$password){
    $conn=new Mysql();
    $sql="select * from customers where cuser='{$username}' and cpass='{$password}';";
    $result=$conn->sql($sql);
    if($result){
        return true;
    }
    else{
        echo '<html><head><Script Language="JavaScript">alert("User not exist or wrong username/password!");</Script></head></html>' . "<meta http-equiv=\"refresh\" content=\"0;url=login-cus.html\">";
    }
    $conn->close();
}
?>