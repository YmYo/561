<?php
class Mysql{
         private static $host="localhost";
         private static $user="root";
         private static $password="12345678";
         private static $dbName="hospital";
         private static $charset="utf8";
         private  $conn=null;
         function __construct(){
             $this->conn=new mysqli(self::$host,self::$user,self::$password,self::$dbName);
             if(!$this->conn)
             {
                   die("数据库连接失败！".$this->conn->connect_error);
             }else{
                 echo "连接成功！";
             }
             $this->conn->query("set names".self::$charset);
         }
         
         //执行sql语句
         function sql($sql){
             $res=$this->conn->query($sql);
         if(!$res)
              {
                   echo "数据操作失败";
              }
              else
              {
                   if($this->conn->affected_rows>0)
                   {
                         return $res;
                   }
                   else
                   {
                        echo "0行数据受影响！";
                   }
              }
              
         }
         
         //返回受影响数据行数
         function getResultNum($sql){
	           $res=$this->conn->query($sql);
	           return mysqli_num_rows($res);
           }
         
         //关闭数据库
         public function close()
         {
             @mysqli_close($this->conn);
         }
}
?>