<?php
require_once("mysql_connect.php");
$pid = $_SESSION['p_id'];
$sql = "SELECT * FROM `guest` WHERE `pc_id` = $pid";
if(mysqli_query($con,"SET NAMES UTF8")){
    
    if($result=mysqli_query($con,$sql)){
        
        while($row=mysqli_fetch_array($result, MYSQLI_ASSOC)){
            printf("<div class=\"list-group\">
                   <li class=\"list-group-item\">%s&nbsp;<small>%s</small>&nbsp;&nbsp;评论于<span style=\"color:#999;\">%s</span><hr><br/>%s</li>                     
            </div>",$row['name'],$row['email'],$row['comment_time'],$row['comment_content']);
        }
        
        mysqli_close($con);
    }
    else{
        printf("<div class=\"list-group\">
        <h5 class=\"list-group-item\">暂时还没有评论，来抢个沙发吧！</h5>     
        </div>");
        mysqli_close($con);
    }
}
else{
    echo "数据库编码设置失败！";
}



?>