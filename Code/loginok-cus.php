<?php
session_start(); 
?>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
</head>

<body>
<?php 
$link = mysql_connect("localhost","root","123456") or die("Cannot connetct to Database".mysql_error());

$db_selected = mysql_select_db("561",$link);
if(!$db_selected){
	echo "Fail to connect database";
}

mysql_query("set names gb2312");

$username = $_POST[username];
$password = $_POST[password];


	 $query = "SELECT * FROM customers WHERE cuser = '$username' and cpass ='$password'";
	 $result = mysql_query($query);
	
	 mysql_free_result($result);
	 if( $username == "")
	 {
		 echo "<script language=\"javascript\">alert('wrong！');location.href='login-cus.html'</script>";
	 }
	 else{
		
		$_SESSION["username"]=$username;  
		echo "<script language=\"javascript\">alert('successful！');location.href='main/main.html'</script>";
		
	 }




mysql_close($link);
	
?>

</body>