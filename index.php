<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Myblog</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<script src="http://cdn.static.runoob.com/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <link rel="stylesheet" href="css/index_stylesheet.css">
 <link rel="stylesheet" href="css/font-awesome.css">
  </head>
  
  <body>
    <div class="container">
	<div class="row clearfix">
		<div class="col-md-12 column">
			<nav class="navbar navbar-default navbar-fixed-top bg-inverse" role="navigation">
				<div class="navbar-header">
					 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button> <a class="navbar-brand" href="#" id="bigtitle">Myblog</a>
				</div>
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li class="active">
							 <a href="#">首页</a>
						</li>
						<li>
							 <a href="#">关于</a>
						</li>
						<li class="dropdown">
							 <a href="#" class="dropdown-toggle" data-toggle="dropdown">文章分类<strong class="caret"></strong></a>
							<ul class="dropdown-menu">
								<li>
									 <a href="#">前端</a>
								</li>
								<li>
									 <a href="#">后端</a>
								</li>
								<li>
									 <a href="#">安卓</a>
								</li>
								</li>
								<li>
									 <a href="#">云计算</a>
								</li>
								<li class="divider">
								</li>
								<li>
									 <a href="#">畅谈人生</a>
								</li>
							</ul>
						</li>
					</ul>
					<form class="navbar-form navbar-right" role="search">
						<div class="form-group">
							<input type="text" class="form-control" placeholder="请输入要搜索的标题" />
						</div> <button type="submit" class="btn btn-default">搜索</button>
					</form>
					
				</div>
			</nav>
			<div id="blank"></div>
            </nav>
		</div>
	</div>
	<div class="row clearfix">
   <div class="col-md-8 column">
       
			<div class="list-group">
                <div class="list-group-item active"><h4>最新文章</h4></div>
				
				<?php
                if(!@$p=$_GET['p'])
                {
                    echo "<script>location.href=\"index.php?p=1\"</script>";
                }
                //session_start();
               // $_SESSION['pag'] = $p;
                require_once("includes/fetch_page.php");
                ?>
				
			</div>
			<nav style="text-align: center">
			<ul class="pagination">
			<?php
                $pre = "$_SERVER[PHP_SELF]"."?p=".($p-1);
                $next = "$_SERVER[PHP_SELF]"."?p=".($p+1);
                include("includes/mysql_connect.php");
                include("includes/mysql_count.php");
                $total_page = ceil($countrow[0]/5.0);
                if($p==1){
                    echo "<ul class=\"pagination\">
                        <li class=\"page-item disable\"><a class=\"page-link\" href=\"#\" tabindex=\"-1\" aria-label=\"Previous\">
                        <span aria-hidden=\"true\">&laquo;</span>
                        <span class=\"sr-only\">Previous</span>
                        </a></li>";
                            for($i=1;$i<=$total_page;$i++)
                            {
                                if($i==$p){
                                  echo "<li class=\"page-item active\"><a class=\"page-link\">$i<span class=\"sr-only\">(current)</span></a></li>";
                                }
                                else{
                                  echo "<li class=\"page-item\"><a class=\"page-link\" href=\"http://localhost/blog/index.php?p=$i\">$i</a></li>";
                                }
                            }
                    echo "<li class=\"page-item\"><a class=\"page-link\" href=\"".$next."\" tabindex=\"-1\" aria-label=\"Next\">
                        <span aria-hidden=\"true\">&raquo;</span>
                        <span class=\"sr-only\">Next</span>
                        </a></li>
                    </ul>";
                }
                else if($p==$total_page){
                    echo "<ul class=\"pagination\">
                        <li class=\"page-item\"><a class=\"page-link\" href=\"".$pre."\" tabindex=\"-1\" aria-label=\"Previous\">
                        <span aria-hidden=\"true\">&laquo;</span>
                        <span class=\"sr-only\">Previous</span>
                        </a></li>";
                            for($i=1;$i<=$total_page;$i++)
                            {
                                if($i==$p){
                                  echo "<li class=\"page-item active\"><a class=\"page-link\">$i<span class=\"sr-only\">(current)</span></a></li>";
                                }
                                else{
                                  echo "<li class=\"page-item\"><a class=\"page-link\" href=\"http://localhost/blog/index.php?p=$i\">$i</a></li>";
                                }
                            }
                    echo "<li class=\"page-item disable\"><a class=\"page-link\" href=\"#\" tabindex=\"-1\" aria-label=\"Next\">
                        <span aria-hidden=\"true\">&raquo;</span>
                        <span class=\"sr-only\">Next</span>
                        </a></li>
                    </ul>";
                }
                else{
                    echo "<ul class=\"pagination\">
                        <li class=\"page-item\"><a class=\"page-link\" href=\"".$pre."\" tabindex=\"-1\" aria-label=\"Previous\">
                        <span aria-hidden=\"true\">&laquo;</span>
                        <span class=\"sr-only\">Previous</span>
                        </a></li>";
                            for($i=1;$i<=$total_page;$i++)
                            {
                                if($i==$p){
                                  echo "<li class=\"page-item active\"><a class=\"page-link\">$i<span class=\"sr-only\">(current)</span></a></li>";
                                }
                                else{
                                  echo "<li class=\"page-item\"><a class=\"page-link\" href=\"http://localhost/blog/index.php?p=$i\">$i</a></li>";
                                }
                            }
                    echo "<li class=\"page-item\"><a class=\"page-link\" href=\"".$next."\" tabindex=\"-1\" aria-label=\"Next\">
                        <span aria-hidden=\"true\">&raquo;</span>
                        <span class=\"sr-only\">Next</span>
                        </a></li>
                    </ul>";
                }
			 /*echo "<li>
				    <a href=\"$pre\">上一页</a>
				    </li>			
				    <li>
					 <a href=\"$next\">下一页</a>
				        </li>"; */
            ?>
			</ul>
        </nav>
   </div>
			
        <div class="col-md-4 column">
			<ul>
				<li>
					Lorem ipsum dolor sit amet
				</li>
				<li>
					Consectetur adipiscing elit
				</li>
				<li>
					Integer molestie lorem at massa
				</li>
				<li>
					Facilisis in pretium nisl aliquet
				</li>
				<li>
					Nulla volutpat aliquam velit
				</li>
				<li>
					Faucibus porta lacus fringilla vel
				</li>
				<li>
					Aenean sit amet erat nunc
				</li>
				<li>
					Eget porttitor lorem
				</li>
			</ul>
			<ol>
				<li>
					Lorem ipsum dolor sit amet
				</li>
				<li>
					Consectetur adipiscing elit
				</li>
				<li>
					Integer molestie lorem at massa
				</li>
				<li>
					Facilisis in pretium nisl aliquet
				</li>
				<li>
					Nulla volutpat aliquam velit
				</li>
				<li>
					Faucibus porta lacus fringilla vel
				</li>
				<li>
					Aenean sit amet erat nunc
				</li>
				<li>
					Eget porttitor lorem
				</li>
			</ol>
		</div>
	</div>
</div>
    
</div>
  </body>
</html>
