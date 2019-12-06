<?php
header("Content-type:text/html;charset=UTF-8");
require "../../mysql.php";
session_start();
$username=$_POST['username'];
$password=$_POST['password'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$age=$_POST['age'];
$gender=$_POST['gender'];
$marital=$_POST['marital'];
$address=$_POST['address'];
$city=$_POST['city'];
$state=$_POST['state'];
$zipcode=$_POST['zipcode'];
$country=$_POST['country'];
$tel=$_POST['tel'];
$email=$_POST['email'];
 
if(checkUser($email)){
	$conn=new Mysql();
    $sql = "INSERT INTO customers (cuser,cpass,cemail,cfname,clname,cage,cgender,marital,ctel,cstreet,ccity,cstate,ccountry,czip) VALUES ('$username','$password','$email','$fname','$lname','$age','$gender','$marital','$tel','$address','$city','$state','$country','$zipcode')";
	$result=$conn->sql($sql);
	if($result){	
        echo "<script language=\"javascript\">alert('Register successful!');location.href='../../login-cus.html'</script>";
    }
    else{
        echo "<script language=\"javascript\">alert('Register failed!');location.href='index.html'</script>";
    }
    $conn->close();
}
 
function checkUser($email){
    $conn=new Mysql();
    $sql="select * from customers where cemail='{$email}';";
    $result=$conn->sql($sql);
    if($result){
		echo '<html><head><Script Language="JavaScript">alert("Email alread exist");</Script></head></html>' . "<meta http-equiv=\"refresh\" content=\"0; url=index.html\">";
        
    }
    else{
        return true;
    }
    $conn->close();
}
