<?php
$page = $p;
$page = ($page-1)*5;
require_once("mysql_connect.php");
$sql = "SELECT `p_title`,`passage_id`,`description` FROM `page` ORDER BY `page`.`passage_id` DESC LIMIT "."$page".", 5";

if(mysqli_query($con,"SET NAMES UTF8"))
{

if($result=mysqli_query($con,$sql))
{
    while($row=mysqli_fetch_array($result, MYSQLI_ASSOC))
    {
        
            printf("<a class=\"list-group-item\" href=\"http://localhost/blog/article.php?id=%d\">		
					    <h4 class=\"list-group-item-heading\">
						%s
                        </h4>
					<p class=\"list-group-item-text\">
						%s
					</p>
				</a>",$row['passage_id'],$row['p_title'],str_replace("&lt;p&gt;","",$row['description']));
        
       
    }
    mysqli_free_result($result);
    mysqli_close($con);
}
    else{
        echo "sql语句错误！";
    }
}
else{
    echo "数据库编码设置失败!<br/>";
}


?>



