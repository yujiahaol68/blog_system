<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <title>新文章发布</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">        
    </head>
    <body>
       <div class="container">
          <div class="row clearfix">
             <div class="col-md-12 column">
                 <form method="post" action="upload.php">
                    <label for="input_title">标题</label>
                     <input type="text" name="p_title" style="width:500px;">
                     <label for="input_writer">作者</label>
                     <input type="text" name="writer" style="width:150px">
                     <br/>
                     <br/>
                    <label for="input_title">内容</label>
                    <br/>
                     <textarea name="p_content" cols="100" rows="40"></textarea>
                     <br/>
                     <button class="btn btn-primary" type="submit" name="Submit">提交</button>
                 </form>
             </div>
              
          </div>
           
       </div>
        
        <?php
        function sanitizeString($var)
        {
            if (get_magic_quotes_gpc()) 
            $var = stripslashes($var);
            $var = htmlentities($var);
            return $var;
        }
        
        if(isset($_POST['Submit'])){
            $errors = array();
            if(empty($_POST['p_title'])){
                $errors[] = '你忘记输入标题了';
            }
            if(empty($_POST['p_content'])){
                $errors[] = '文章内容不能为空';
            }
            if(empty($_POST['writer'])){
                $errors = '请填上作者名';
            }
            if(empty($errors)){
                require_once("includes/mysql_connect.php");
                include("includes/mysql_count.php");
                $count = $countrow[0] + 1;
                $a = sanitizeString($_POST['p_content']);
                $b = sanitizeString($_POST['p_title']);
                $c = sanitizeString($_POST['writer']);    
                $des = explode("。",$a);
                $sql="INSERT INTO `page` (`passage_id`, `p_content`, `p_title`, `pub_time`, `writer`, `description`) VALUES ('$count', '$a', '$b', NOW(), '$c', '$des[0]')";
                if(mysqli_query($con,"SET NAMES UTF8"))
                {
                    echo "数据库编码设置成功";
                }
                else{
                    echo "数据库编码设置失败！";
                    mysqli_close($con);
                }
                $result = mysqli_query($con,$sql);
                if($result){
                    echo "<h2>提交成功!</h2>";
                    mysqli_close($con);
                }
                else{
                    echo "<h1>出错啦！</h1><br/>";
                    foreach($errors as $msg){
                        echo"-$msg<br/><br/>";
                        mysqli_close($con);
                    }
                    
                }
            }
            
        }
        
        ?>
        
    </body>
    
</html>