<?php
function sanitizeString($var)
{
    if (get_magic_quotes_gpc()) 
    $var = stripslashes($var);
    $var = htmlentities($var);
    return $var;
}

session_start();
if(empty($_GET['id']))
{
    $id = $_SESSION['p_id'];
}
else{
$_SESSION['p_id'] = sanitizeString($_GET['id']);
    $id = $_SESSION['p_id'];
}

require_once("mysql_connect.php");
$sql = "SELECT * FROM `page` WHERE passage_id = $id";

if(mysqli_query($con,"SET NAMES UTF8"))
{

if($result=mysqli_query($con,$sql))
{
    if($row=mysqli_fetch_array($result, MYSQLI_ASSOC))
    {
        printf("<div class=\"page-header\">
        <h1>%s</h1><br/>
        <h5><small>%s  作者：%s</small></h5></div>
        <p>&nbsp;&nbsp;&nbsp;&nbsp;</p>
        ",$row["p_title"],$row["pub_time"],$row["writer"]);
        $content = stripslashes($row["p_content"]);
        $content = html_entity_decode($content);
        echo $content; 
    }
    else{
        echo "文章信息获取失败！<br/>";
    }

}
    else{
        echo "sql语句错误！";
    }
}
else{
    echo "数据库编码设置失败!<br/>";
}


?>