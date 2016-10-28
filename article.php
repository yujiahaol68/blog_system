<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" charset="utf-8">
    <title>articleName</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<script src="includes/jquery-3.1.1.min.js"></script>
<script src="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/js/bootstrap.min.js"></script>
     <link rel="stylesheet" href="css/font-awesome.css">
     <link rel="stylesheet" href="css/article_stylesheet.css">
     <link rel="stylesheet" href="css/article_custom_form.css">
  </head>
  <body>
    <div class="container">
	<div class="row clearfix">
		<div class="col-md-12 column">
			<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
				<div class="navbar-header">
					 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button> <a class="navbar-brand" href="#">MyBlog</a>
				</div>
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li class="active">
							 <a href="index.php">首页</a>
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
							<input type="text" class="form-control" />
						</div> <button type="submit" class="btn btn-primary">搜索</button>
					</form>
				</div>
			</nav>
			<ul class="breadcrumb">
				<li>
					 <a href="#">Home</a>
				</li>
				<li>
					 <a href="#">Library</a>
				</li>
				<li class="active">
					Data
				</li>
			</ul>
		</div>
	</div>
    
	<div class="row clearfix">
		<div class="col-md-8 column">
			<?php
            include("includes/fetch_article_data.php");
            ?>
			<hr>
			
		</div>
		<div class="col-md-4 column">
		<div id="blank"></div>
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
        		
		<div class="col-md-8 column">
		    <?php
            
            
            include("includes/fetch_comment_data.php");
		    echo "<br/><br/><br/>";
            echo '如果你愿意在下面发表你的评论:';
            echo "<br/><br/><br/>";
		  ?>
			<form class="form-horizontal" role="form">
				<div class="input-group input-group-lg">
					 <span for="inputName" class="input-group-addon" id="sizing-addon1"><i class="fa fa-user" aria-hidden="true" style="color:black;"></i>姓名</span>
						<input type="text" name="name" id="name" class="form-control state1" placeholder="Guestname" aria-describedby="sizing-addon1" style="width:240px;height:50px;" size="20" onclick="this.style.color='black';"/>&nbsp;&nbsp; <span></span>
				</div>
				<br/>
				<div class="input-group input-group-lg">
					 <span for="inputName" class="input-group-addon" id="sizing-addon1"><i class="fa fa-envelope" aria-hidden="true" style="color: black;"></i>电子邮箱</span>
                    <input type="text" name="email" id="email" class="form-control state1" placeholder="example@xx.com" aria-describedby="sizing-addon1" style="width:200px;height:50px;" onclick="this.style.color='black';"/> &nbsp;&nbsp;<span></span>
				</div>
				<?php
                echo "<br/><br/>";
                echo "<p class=\"lead\">评论</p>";
                echo "<br/>";
                ?>
				<div class="input-group">
					<textarea name="comment" id="comment" cols="50" rows="10" class="state1" onclick="this.style.color='black';"></textarea> &nbsp;&nbsp;<span></span>
				</div>
				<?php
                echo "<br/><br/><br/>";
                ?>
				<div class="form-group">
						 <button type="submit" class="btn btn-primary" name="submit" id="submit" class="submit">提交评论</button>			 				
				</div>
			</form>
		</div>
	</div>
</div>  
<script type="text/javascript" src="includes/form_validate_ajax_post.js"></script>
  </body>
</html>