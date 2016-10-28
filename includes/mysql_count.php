<?php
$sqlfcount = "SELECT COUNT(passage_id) FROM page";
$countresult = mysqli_query($con,$sqlfcount) OR die("sql语句注入失败");
$countrow = mysqli_fetch_array($countresult,MYSQLI_NUM);
?>