<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="users";
// 创建连接
$con = mysqli_connect($servername, $username, $password,$dbname);
// 检测连接
if (!$con){
	die("连接失败:".mysqli_connect_error());
}
//mysqli_query($con,"set Names 'UTF8'");
// 创建数据表
$sql = "create table problem(
course varchar(120),
text_content varchar(120),
people_id varchar(12),
reply_num varchar(12),
state varchar(12),
time varchar(12)
)";

if (mysqli_query($con, $sql)) {
	echo "数据表创建成功";
} else {
	echo "数据表创建失败:".mysqli_error($con);
}


mysqli_close($con);
?> 