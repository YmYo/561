<?php
$link = mysql_connect("localhost","root","123456") or die("Cannot connetct to Database".mysql_error());
$db_selected = mysql_select_db("561",$link);
if(!$db_selected){
	echo "Fail to connect database";
}
mysql_query("set names gb2312");
$username = $_POST[username];
$email = $_POST[Email];
$pw1 = $_POST[Password];
	
$query = "SELECT * FROM customers WHERE cemail = '$email'";
$result = mysql_query($query);
if( $result > 0)
{
	echo "<script language=\"javascript\">alert('Email already exist£¡');</script>";
}
else{
		
	$myinset = "INSERT INTO customers (cuser,cpass,cemail) VALUES ('$username','$pw1','$email')";
	$sql = mysql_query($myinset);
	if($sql){
		echo $myinset;
		echo "<script language=\"javascript\">alert('regist successful£¡');location.href='main/main.php'</script>";
	}else{
		echo $myinset;
		echo "<script language=\"javascript\">alert('Failed£¡');</script>";
   		}
		
	}
mysql_close($link);
?>
