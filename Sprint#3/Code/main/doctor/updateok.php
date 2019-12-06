<?php
header("Content-type:text/html;charset=UTF-8");
require "../../mysql.php";
session_start();
$username=$_GET['username'];

$fname=$_POST['Fname'];
$lname=$_POST['Lname'];
$DoB=$_POST['DoB'];
$gender=$_POST['gender'];
$Speciality=$_POST['Speciality'];
$tel=$_POST['tel'];
$email=$_POST['email']; 
 
//if(checkUser($email)){
	$conn=new Mysql();
    $sql = "UPDATE doctor SET Demail = '$email',DFname = '$fname',DLname = '$lname',DDoB = '$DoB',Gender = '$gender',Speciality = '$Speciality',Dtel = '$tel' WHERE Duser = '$username'";
	$result=$conn->sql($sql);
	if($result){
		
        echo "<script language=\"javascript\">alert('Update successful!');location.href='index.php?username=$username'</script>";
    }
    else{
        echo "<script language=\"javascript\">alert('Update failed!');location.href='profile.php?username=$username'</script>";
    }
    $conn->close();
//}
 
function checkUser($email){
    $conn=new Mysql();
    $sql="select * from doctor where Demail='{$email}';";
    $result=$conn->sql($sql);
    if($result>2){
		echo '<html><head><Script Language="JavaScript">alert("Email alread exist");</Script></head></html>' . "<meta http-equiv=\"refresh\" content=\"0; url=profile.php?username=$username\">";
        
    }
    else{
        return true;
    }
    $conn->close();
}
