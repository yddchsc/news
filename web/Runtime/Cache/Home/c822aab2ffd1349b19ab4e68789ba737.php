<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here <?php echo ($data["web_tit"]); ?></title>
</head>
<body>

<br/>
列表页面<br/>

<?php if(is_array($list)): foreach($list as $key=>$vo): ?>ID: <?php echo ($vo["id"]); ?> <br/>
   Title:<?php echo ($vo["title"]); ?><br/>
   Date：<?php echo ($vo["date"]); ?><br/>
   <hr><?php endforeach; endif; ?>
</body>
</html>