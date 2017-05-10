<?php
header("Content-type:text/html;charset=utf-8");
include 'conn.php';
//$email = $_POST['email'];//邮箱账号
//$uid = $_POST['uid'];//邀请者id
$username = $_POST['username'];//用户昵称
//$validation = $_POST['register_validation'];//验证码
$password = $_POST['password'];//密码
$password2 = $_POST['password2'];//密码

$num = mysql_num_rows(mysql_query("select * from usr where username='$username'")); 
if($num>0){  //检测用户名是否已经存在
	echo "用户名已存在,请更换用户名重新注册<a href='register.php'>点击返回</a>";
	exit(0);
}
else{
	if($password != $password2){
		echo "请重新确认密码,两次密码输入不一致<a href='register.php'>点击返回</a>";
		exit(0);
	}
	else{
		//通过验证，写入数据库
		$sqlinsert="insert into usr(username,password) values ('$username','$password')";
		if(mysql_query($sqlinsert)){
			echo "注册成功<a href='login.php'>点击登录</a>";
		}
	}
}

?>