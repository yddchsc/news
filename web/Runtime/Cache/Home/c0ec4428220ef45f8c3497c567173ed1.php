<?php if (!defined('THINK_PATH')) exit();?> <!doctype html>
 <html lang="zh">
 <head>
 	<meta charset="UTF-8">
 	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<title>新闻列表</title>
 	<link rel="stylesheet" type="text/css" href="<?php echo (CSS_URL); ?>normalize.css" />
 	<link rel="stylesheet" type="text/css" href="<?php echo (CSS_URL); ?>default.css">
 	<link href="<?php echo (CSS_URL); ?>bootstrap.min.css" rel="stylesheet" type="text/css" />
 	<link href="<?php echo (CSS_URL); ?>bootstrap-theme.min.css" rel="stylesheet" type="text/css" />
 	<link href="<?php echo (CSS_URL); ?>site.css" rel="stylesheet" type="text/css" />
 	 	
 	<script src="http://libs.useso.com/js/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>
	<!--[if IE]>
		<script src="http://libs.useso.com/js/html5shiv/3.7/html5shiv.min.js"></script>
		<![endif]-->
		<style type="text/css">
			
			.col-md-4{
				float: left;
			}
			#content{
				float: left;
				margin: 0 0 0 0;
				padding:30px 20px;
				background-color: #f5f5f5;
				border-style:solid;
  				border-width:1px;
				border-color: #ddd;
				text-align: center;
			}
			#content img{
				max-width: 400px;
			}
			#content p{
				font-size: 20px;
			}
		</style>
	</head>
	<body>
		<div class="htmleaf-container">
			<div class="container mp30">
				<div class="row">
				<div class="col-md-4">
					<div class="panel panel-default">
						<div class="panel-heading">
							<span class="glyphicon glyphicon-list-alt"></span><b>新闻</b></div>
							<div class="panel-body">
								<div class="row">
									<div class="col-xs-12">
										<ul class="demo1">
											<?php if(is_array($list)): foreach($list as $key=>$vo): ?><li class="news-item">
													<table cellpadding="4">
														<tr>
															<td><img src="<?php echo (IMG_URL); echo ($vo['id']%$num[0]+$num[1]); ?>.png" width="60" class="img-circle" /></td>
															<td><p><?php echo ($vo['title']); ?></p><p><?php echo ($vo['date']); ?></p> 
																<form class="form-<?php echo ($vo['id']); ?>">
																	<input value="<?php echo ($vo['id']); ?>" name="id<?php echo ($vo['id']); ?>" type="hidden">
																	<button type="submit" class="btn btn-info btn-sm">点击阅读</button>
																</form>
																<script type="text/javascript">
																	$(".form-<?php echo ($vo['id']); ?>").submit(function(){
																		var id = $("input[name=id<?php echo ($vo['id']); ?>]").val();

																		$.ajax({
             																url: "/news/home/News/view/id/"+id,//提交访问的URL
             																type: 'GET',//提交的方法
             																dataType: 'text',//返回的内容的类型，由于PHP文件是直接echo的，那么这里就是text
             																timeout: 1000,//超时时间
             																error: function(){ //如果出错，执行函数
             																	alert('Error loading XML document');
             																},
             																success: function(data){
             																	//alert(data);//如果成功，弹出数据
             																	var news = eval('(' + data + ')');
             																	$("#content").html(news.content);
             																}
             															});
																		return false;
																	});
																</script>
															</td>
														</tr>
													</table>
												</li><?php endforeach; endif; ?>
										</ul>
									</div>
								</div>
							</div>
							<div class="panel-footer">

							</div>
						</div>
					</div>
					<div id = "content" class="col-md-8">
						<p>欢迎来到暨南大学CTF练习平台</p>
					</div>
					</div>
				</div>
			</div>
			<script src="<?php echo (JS_URL); ?>jquery.bootstrap.newsbox.min.js" type="text/javascript"></script>
			<script type="text/javascript">
				$(function () {
					$(".demo1").bootstrapNews({
						newsPerPage: 5,
						autoplay: true,
						pauseOnHover:true,
						direction: 'up',
						newsTickerInterval: 4000,
						onToDo: function () {
                			//console.log(this);
                		}
                	});
				});
			</script>
		</body>
		</html>