<?php
require_once("mysql_connect.php");

function sanitizeString($var)
{
    if (get_magic_quotes_gpc()) 
    $var = stripslashes($var);
    $var = htmlentities($var);
    return $var;
}
    
        
   
        session_start();
        $id = sanitizeString($_SESSION['p_id']);
        $gn = sanitizeString($_POST['name']);
        $email = sanitizeString($_POST['email']);
        $ct = sanitizeString($_POST['comment']);
        $sql = "INSERT INTO `guest`(`name`, `email`, `comment_content`, `comment_time`, `pc_id`) VALUES ('$gn', '$email', '$ct', NOW(), '$id');";
        if(mysqli_query($con,"SET NAMES UTF8"))
        {
            if($result = mysqli_query($con,$sql))
            {   
                mysqli_close($con);
                echo "评论提交成功！";
            }
            else
            {
                echo "sql 语句错误！";
                mysqli_close($con);
            }
        }
        else
        {
            echo "数据库编码设置错误！";
            mysqli_close($con);
        }
        
        
    
    



?>