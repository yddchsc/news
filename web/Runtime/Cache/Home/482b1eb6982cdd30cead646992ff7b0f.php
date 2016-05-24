<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here <?php echo ($data["web_tit"]); ?></title>
</head>
<body>

<br/>
<font size="+1"><?php echo ($act["actstr"]); ?>页面</font><br/>

<form action="/index.php/Home/News/save" method="post">
<input name="actlx" type="hidden" value="<?php echo ($act["actlx"]); ?>">
<input name="actid" type="hidden" value="<?php echo ($act["actid"]); ?>">
<table width="374" border="0">
  <tr>
    <td width="96" height="37" align="right">&nbsp;文本标题：</td>
    <td width="268">&nbsp;<input name="acttitle" type="text" value="<?php echo ($act["title"]); ?>" ></td>
  </tr>
  <tr>
    <td align="right" valign="top">&nbsp;文本内容：</td>
    <td>&nbsp;<textarea cols="" rows="5" name="actcontent">
<?php echo ($act["content"]); ?>
</textarea></td>
  </tr>
  <tr>
    <td height="36" colspan="2" align="center"><input type="submit" name="button" id="button" value="提交">
      &nbsp;&nbsp;
      <input type="reset" name="button2" id="button2" value="重置"></td>
    </tr>
</table>


</form>


<a href="/index.php/Home/News">返回列表</a>
</body>
</html>