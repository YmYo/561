<?php
header("Content-type:text/html;charset=UTF-8");
require "../../mysql.php";
session_start();
$username=$_POST['username'];
$password=$_POST['password'];
 
if(checkUser($username,$password)){
	echo '<html><head><Script Language="JavaScript">alert("Welcome!");</Script></head></html>' . "<meta http-equiv=\"refresh\" content=\"0;url=index.php?username=$username\">";
}
	
    //header("location: index.php ");
 
function checkUser($username,$password){
    $conn=new Mysql();
    $sql="select * from doctor where Duser='{$username}' and Dpass='{$password}';";
    $result=$conn->sql($sql);
    if($result){
        return true;
    }
    else{
        echo '<html><head><Script Language="JavaScript">alert("User not exist or wrong username/password!");</Script></head></html>' . "<meta http-equiv=\"refresh\" content=\"0;url=sign-in.html\">";
    }
    $conn->close();
}
?>