<?php
$con=mysqli_connect('localhost','root','root','p301');
if(!$con){
  echo '<script>alert("连接数据库失败");history.go(-1);</script>';
  die();
}
mysqli_query($con,'set names utf8');

?>