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
      <caption>新闻管理</caption>
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
                <td><a href="/news/home/News/edit/id/<?php echo ($vo['id']); ?>">修改</a>&nbsp;&nbsp;<a href="/news/home/News/del/id/<?php echo ($vo['id']); ?>">删除</a>&nbsp;&nbsp;<a href="/news/home/News/edit/id/">添加</a></td>
            </tr><?php endforeach; endif; else: echo "" ;endif; ?>
      </tbody>
   </table>
</div>      

</body>
</html>