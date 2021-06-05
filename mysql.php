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

function insert($con,$arr,$table){
	$key="`".join("`,`",array_keys($arr))."`";  //将键值连接          
	$value="'".join("','",array_values($arr))."'";
	$sql="insert into `{$table}`({$key}) values({$value})";
	echo $sql;die();
	$result=mysqli_query($con,$sql);
    return mysqli_insert_id();


}


function update($arr,$where){
	foreach ($arr as $k => $v) {
		$str[]='`'.$k."`='".$v."'";
	}
    
    foreach ($where as $k => $v) {
    	$condition[]='`'.$k."`=".$v;
    }
	$strs=implode(',',$str);
	$conditions=implode(' and ',$condition);
	$sql="update {$table} set {$strs} where {$conditions}";
	$a=mysqli_query($sql);
	if($a){
         return true;
	}else{
		return false;
	}

}

?>