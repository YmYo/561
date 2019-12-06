<?php
header("Content-type:text/html;charset=UTF-8");
require "../../mysql.php";
session_start();
$username=$_GET['username'];

$fname=$_POST['Fname'];
$lname=$_POST['Lname'];
$gender=$_POST['gender'];
$service=$_POST['service'];
$day=$_POST['day'];
$time=$_POST['time'];
$tel=$_POST['tel'];
$email=$_POST['email'];

 
//if(checkUser($email)){
	$conn=new Mysql();
    $sql = "INSERT INTO appointment (afname,alname,agender,service,adat,atim,aemail,atel) VALUES ('$fname','$lname','$gender','$service','$day','$time','$email','$tel')";
	$result=$conn->sql($sql);
	if($result){
        echo "<script language=\"javascript\">alert('Book successful!');location.href='doctor-schedule.php?username=$username'</script>";
    }
    else{
        echo "<script language=\"javascript\">alert('Book failed!');location.href='book-appointment.php?username=$username'</script>";
    }
    $conn->close();
//}
 
//function checkUser($email){
    //$conn=new Mysql();
    //$sql="select * from doctor where Demail='{$email}';";
    //$result=$conn->sql($sql);
    //if($result){
		//echo '<html><head><Script Language="JavaScript">alert("Email alread exist");</Script></head></html>' . "<meta http-//equiv=\"refresh\" content=\"0; url=add-doctor.html\">";
        
    //}
    //else{
        //return true;
    //}
    //$conn->close();
//}