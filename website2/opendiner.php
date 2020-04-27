<?php

$host="localhost";
$user="root"
$password="";
$db="demo";

mysql_connect($host,$user,$password);
mysql_select_db($db);

if(isset($_post['username']))
{
   $uname=$_post['username'];
   $password=$_post['password'];

   $sql="select * from loginform where user='".$uname."'AND pass='".$password."'limit 1";

   $result=mysql_query($sql);

   if (mysql_num_rows($result)==1) {
   	echo "you have succesfully loged in";
   	exit();
   }
   else{
   	echo "you have entered incorrect pass";
   	exit();
   }
   	# code...
   }



} 


?>
