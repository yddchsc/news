<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>新闻<?php echo ($act["actstr"]); ?>页面</title>
    <style>
    #content{
        padding:20px;
        background-color: #f5f5f5;
    }
    form{
        width: 800px;
        margin: 0 auto;
    }
    textarea {
        display: block;
    }
    button{
        float: right;
    }
    form a{
        color: #ffffff;
    }
</style>
<link href="/news/public/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="/news/Public/kindeditor/themes/default/default.css" />
<script charset="utf-8" src="/news/Public/kindeditor/kindeditor-min.js"></script>
<script charset="utf-8" src="/news/Public/kindeditor/lang/zh_CN.js"></script>
<script>
    var editor;
    KindEditor.ready(function(K) {
        editor = K.create('textarea[name="actcontent"]', {
            allowFileManager : true
        });
    });
</script>
</head>
<body>
    <div id="content">
    <form class="form-horizontal" action="/news/Home/News/save" method="post">
        <input name="actlx" type="hidden" value="<?php echo ($act["actlx"]); ?>">
        <input name="actid" type="hidden" value="<?php echo ($act["actid"]); ?>">
        <div class="input-group">
            <span class="input-group-addon">标题</span>
            <input name="acttitle" type="text" class="form-control" placeholder="title" value="<?php echo ($act["title"]); ?>">
        </div><br>
        <div class="input-group">
            <span class="input-group-addon">作者</span>
            <input name="actauthor" type="text" class="form-control" placeholder="author" value="<?php echo ($act["author"]); ?>">
        </div><br>
        <textarea name="actcontent" style="width:800px;height:400px;visibility:hidden;"><?php echo ($act["content"]); ?>
        </textarea>
        <br />
        <button type="submit" class="btn btn-primary">保存<?php echo ($act["actstr"]); ?></button>
        <button type="button" class="btn btn-primary" onclick=window.location.href="/news/Home/News">返回列表</button>
    </form>
    </div>
</body>
</html>