<?php
	session_start();
	require_once 'conn.php';
	$username = $_POST['username'];
	$password = $_POST['password'];
	if(empty($username) || empty($password)){
		echo "用户名或密码不能为空"."<a href='forum1.php'>点击返回</a>";
		exit(0);
	}
	//echo $username.' '.$password;
	$sql_query  = "select * from usr where username = '$username' and password = '$password'";
	$result = mysql_query($sql_query);
	if(mysql_num_rows($result)>0){//数据库中有此用户
		//echo 'user exits';
		$_SESSION['user'] = $username;
		//echo '登录成功';
		header('Location:forum1.php');
	}
	else
	{
		echo "用户名或密码错误"."<a href='forum1.php'>点击返回</a>";
		exit(0);
	}
?>