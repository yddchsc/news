<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
 <title>新闻管理</title>
 <link href="/news/public/css/bootstrap.min.css" rel="stylesheet">
 <script src="http://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js"></script>
 <script src="http://apps.bdimg.com/libs/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</head>
<body>

  <div class="table-responsive">
   <table class="table">
    <caption></caption>
    <thead>
     <tr>
      <th>标题</th>
      <th>日期</th>
      <th>作者</th>
      <th>管理</th>
    </tr>
  </thead>
  <tbody>
    <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
        <td><a href="/news/home/News/view/id/<?php echo ($vo['id']); ?>"><?php echo ($vo['title']); ?></a></td>
        <td><?php echo ($vo['date']); ?></td>
        <td><?php echo ($vo['author']); ?></td>
        <td><button class="btn btn-xs btn-default" onclick=window.location.href="/news/home/News/edit/id/<?php echo ($vo['id']); ?>">修改</button>&nbsp;&nbsp;<button class="btn btn-xs btn-danger" onClick="delcfm();window.location.href='/news/home/News/del/id/<?php echo ($vo['id']); ?>'">删除</button>&nbsp;&nbsp;<button class="btn btn-xs btn-info" onclick=window.location.href="/news/home/News/edit/id/">添加</button></td>
      </tr><?php endforeach; endif; else: echo "" ;endif; ?>
  </tbody>
</table>
<div style="text-align:center"><?php echo ($page); ?></div>
</div>      
<script type="text/javascript">
    function delcfm() {
        if (!confirm("确认要删除？")) {
            window.event.returnValue = false;
        }
    }
</script>
</body>
</html>