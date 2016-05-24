<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="Refresh"
content="<?php echo ($tishi["time"]); ?>;url=http://<?php echo ($tishi["url"]); ?>">
<title>提示信息</title>
</head>
<body>
<h4>提示信息</h4>
<?php echo ($tishi["tishi"]); ?><br>
<hr>
<?php echo ($tishi["xinxi"]); ?>

<a href="/news/Home/News">返回列表</a>
</body>
</html>