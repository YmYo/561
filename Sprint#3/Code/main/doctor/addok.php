<?php
header("Content-type:text/html;charset=UTF-8");
require "../../mysql.php";
session_start();
$username=$_GET['username'];

$password=$_POST['password'];
$fname=$_POST['Fname'];
$lname=$_POST['Lname'];
$DoB=$_POST['DoB'];
$gender=$_POST['gender'];
$Speciality=$_POST['Speciality'];
$tel=$_POST['tel'];
$email=$_POST['email'];
$note=$_POST['note'];
 
//if(checkUser($email)){
	$conn=new Mysql();
    $sql = "INSERT INTO doctor (Duser,Dpass,Demail,DFname,DLname,DDoB,Gender,Speciality,Dtel,Note) VALUES ('$username','$password','$email','$fname','$lname','$DoB','$gender','$Speciality','$tel','$note')";
	$result=$conn->sql($sql);
	if($result){
		//$_SESSION['username']=$username;
        echo "<script language=\"javascript\">alert('Register successful!');location.href='index.php?username=$username'</script>";
    }
    else{
        echo "<script language=\"javascript\">alert('Register failed!');location.href='sign-in.html'</script>";
    }
    $conn->close();
//}
 
/*function checkUser($email){
    $conn=new Mysql();
    $sql="select * from doctor where Demail='{$email}';";
    $result=$conn->sql($sql);
    if($result){
		echo '<html><head><Script Language="JavaScript">alert("Email alread exist");</Script></head></html>' . "<meta http-equiv=\"refresh\" content=\"0; url=add-doctor.html\">";
        
    }
    else{
        return true;
    }
    $conn->close();
}*/
