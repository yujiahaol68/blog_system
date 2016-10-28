<?php
//1 传入页码
//2 根据页码取出数据：php->mysql处理
$host = "localhost";
$username = "root";
$password = "root";
$db = "test";
$con = mysqli_connect($host,$username,$password,$db) OR die('连接数据库失败'.mysqli_connect_error());
//选择要操作的数据库
//设置数据库编码格式
//编写数据库分页数据 SELECT *FROM 表名 LIMIT 起始位置，显示条数

//把sql语句传入数据库

//处理数据

?>