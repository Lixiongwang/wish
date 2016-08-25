<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>节点列表</title>
<link rel="stylesheet" href="__PUBLIC__/Css/public.css" />
</head>
<body>
     <div id='wrap'>
          <a href="<?php echo U('Admin/Rbac/addnode');?>">添加应用</a>
          <?php if(is_array($node)): foreach($node as $key=>$app): ?><div class='app'>
                    <p>
                         <strong><?php echo ($app["title"]); ?></strong>
                         <a href="<?php echo U('Admin/Rbac/addNode',array('pid'=>$app['id'],'level'=>2));?>">添加控制器</a>
                    </p>
               </div><?php endforeach; endif; ?>
     </div>
</body>
</html>