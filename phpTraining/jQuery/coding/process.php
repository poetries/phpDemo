<?php 

header('Content-type:text/html;charset=utf-8');

// $username = $_POST['username'];
$username = $_GET['username'];

if($username == 'admin'){
	echo '用户名不能是admin';
}else {
	echo '用户名可以注册';
}

 ?>