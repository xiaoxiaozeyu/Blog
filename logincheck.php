<?php
	session_start();
	try{
		$dsn="mysql:host=54.250.182.87;dbname=blog";
		$db=new PDO($dsn, 'root', '13141314');
		$db->query('set names utf8');
		}catch( PDOException $e){
			echo "数据库连接失败:". $e->getMessage() . '<br>';
			exit();
			}
	$username=$_POST['username'];
	$password=$_POST['password'];
	
	$sql="select * from userinfo where username='$username' and password='$password'";
	$result=$db -> query($sql);
	if($result->rowCount()==0){
		unset($_SESSION['username']);
		echo "<script>alert('您输入的用户名或密码不正确！');history.go(-1)</script>";
		exit();
		}
		else{
			$row=$result->fetch(1);
			$_SESSION['username']=$row['username'];
			echo "<script>alert('Login success！');</script>";
			echo "<script>location.href='index.php';</script>";

			}
       
?>
