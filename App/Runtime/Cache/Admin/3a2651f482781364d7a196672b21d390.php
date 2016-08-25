<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
<link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/public.css" />
<script type="text/javascript" src="__PUBLIC__/Js/jquery-1.7.2.min.js"></script> 
</head>
<body>
      <table class='table'>
            <tr>
                 <th>ID</th>
                 <th>发布者</th>
                 <th>愿望</th>
                 <th>发布时间</th>
                 <th>操作</th>
            </tr>
            <?php if(is_array($wish)): foreach($wish as $key=>$v): ?><tr>
                      <td><?php echo ($v["id"]); ?></td>
                      <td><?php echo ($v["username"]); ?></td>
                      <td><?php echo (replace_phiz($v["content"])); ?></td>
                      <td><?php echo (date('y-m-d H:i',$v["time"])); ?></td>
                      <td><a href="<?php echo U('Admin/MsgManage/delete',array('id' => $v['id']));?>">删除愿望</a></td>
                 </tr><?php endforeach; endif; ?>
            
            <tr>
                 <td colspan='5' align="center">
                 <?php echo ($page); ?>
                 </td>
            </tr>
      </table>
</body>
</html>