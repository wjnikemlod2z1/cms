<?php
// $con=mysqli_connect('localhost','root','root','p301');
// if(!$con){
//   echo '<script>alert("连接数据库失败");history.go(-1);</script>';
//   die();
// }
// mysqli_query($con,'set names utf8');


function connect($host,$username,$password,$dabase){
		$con=mysqli_connect($host,$username,$password,$dabase);
		if(!$con){
		  echo '<script>alert("连接数据库失败");history.go(-1);</script>';
		  die();
		}
		mysqli_query($con,'set names utf8');
		return $con;	
}


function selectOne($con,$sql){
    $result=mysqli_query($con,$sql);
    if($result){
        $date=mysqli_fetch_assoc($result);
        if(!empty($date)){
          return $date;
        }
        

    }else{
    	return false;
    }
}

function insert($arr,$table){
	$key=join(',',array_keys($arr));  //将键值连接
	$date=implode(',',$arr);
	print_r($arr);
	die();
	// $sql='insert into'.$table
	//$result=mysqli_query($con,$sql);
}

?>