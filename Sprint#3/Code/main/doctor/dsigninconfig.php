<?php
session_start(); 
?>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
</head>

<body>
<?php
$con = mysql_connect("localhost","root","123456");
if (!$con)
{
    echo mysql_error();
}

mysql_select_db("561",$con);


$username=$_POST['Dusername'];
$password=$_POST['Dpassword'];

$sql="select * from `doctor` where `Dusername`='".$Dusername."' and `Dpassword`='".$Dpassword."'";
$set=mysql_query($sql);
$result=mysql_fetch_array($set);
$_SESSION['thepreson']=$Dusername;
    if ($result){

        header("Location:login-cus.html");
    }
    else  {
        echo "<script>alert('登录失败');location='sign-in.html';</script>";
    }