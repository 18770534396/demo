<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:42:"./application/admin\view\navtop_index.html";i:1504417136;s:42:"./application/admin\view\index_header.html";i:1514021724;s:42:"./application/admin\view\index_footer.html";i:1504421378;}*/ ?>
<!DOCTYPE html>
<html>
<head>  
  <title>内容管理系统 - 内容管理系统</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link href="/favicon.ico" rel="shortcut icon">
  <link rel="stylesheet" href="__ADMIN__/layui/css/layui.css">
  <link rel="stylesheet" href="__ADMIN__/css/global.css">
  <script src="__ADMIN__/js/jquery-1.9.1.min.js" type="text/javascript"></script>
  <script src="__ADMIN__/layui/layui.js" type="text/javascript"></script>
</head>
<body>
<div class="fly-panel fly-panel-user">
<div class="tpt—admin">
<div class="tpt—btn">
<a href="<?php echo url('navtop/add'); ?>"><i class="layui-icon">&#xe61f;</i> 添加导航</a>
</div>
<form class="cl">
<table width="100%">
<tr>
<th width="5%" align="center">排序</th>
<th width="15%" align="center">名称</th>
<th width="10%" align="center">显示</th>
<th width="10%" align="center">窗口</th>
<th width="10%" align="center">外链</th>
<th width="10%" align="center">图片</th>
<th width="20%" align="center">连接</th>
<th width="10%" align="center">时间</th>
<th width="10%" align="center">基本操作</th>
</tr>
<?php if(is_array($tptc) || $tptc instanceof \think\Collection || $tptc instanceof \think\Paginator): $i = 0; $__LIST__ = $tptc;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
<tr>
<td align="center"><?php echo $vo['sort']; ?></td>
<td style="padding-left: 20px;"><?php if($vo['level'] != 0): ?>|----------<?php endif; ?><?php echo $vo['name']; ?></td>
<td align="center">
<a change="<?php echo $vo['id']; ?>" onclick="changeshows(this);" <?php if($vo['shows'] == 1): ?>class="layui-unselect layui-form-switch layui-form-onswitch"<?php else: ?>class="layui-unselect layui-form-switch"<?php endif; ?>>
<em>显示</em><i></i>
</a>
</td>
<td align="center">
<a change="<?php echo $vo['id']; ?>" onclick="changeblank(this);" <?php if($vo['blank'] == 1): ?>class="layui-unselect layui-form-switch layui-form-onswitch"<?php else: ?>class="layui-unselect layui-form-switch"<?php endif; ?>>
<em>新窗</em><i></i>
</a>
</td>
<td align="center">
<a change="<?php echo $vo['id']; ?>" onclick="changesurl(this);" <?php if($vo['surl'] == 1): ?>class="layui-unselect layui-form-switch layui-form-onswitch"<?php else: ?>class="layui-unselect layui-form-switch"<?php endif; ?>>
<em>外链</em><i></i>
</a>
</td>
<td align="center"><?php if($vo['pic'] != ''): ?><img style="border: 1px solid #CDCDCD;padding: 3px;border-radius: 2px;" src="__ROOT__<?php echo $vo['pic']; ?>" height="25"><?php else: ?>暂无图片<?php endif; ?></td>
<td class="tpt-rap"><?php if($vo['links'] != ''): ?><?php echo $vo['links']; else: ?><span style="color:#FF5722;">暂无连接</span><?php endif; ?></td>
<td align="center"><?php echo date("Y-m-d",$vo['time']); ?></td>
<td align="center">
<a class="layui-btn layui-btn-mini layui-btn-warm" href="<?php echo url('navtop/edit',array('id'=>$vo['id'])); ?>">修改</a> <a class="layui-btn layui-btn-mini layui-btn-danger del_btn" style="cursor: pointer;" member-id="<?php echo $vo['id']; ?>" title="删除" nickname="<?php echo $vo['name']; ?>">删除</a>
</td>
</tr>
<?php endforeach; endif; else: echo "" ;endif; ?>
</table>
</form> 
<script>
function changeshows(o){
  var change=$(o).attr("change");
  $.ajax({
	  type:"post",
	  dataType:"json",
      data:{change:change},
	  url:"<?php echo url('navtop/changeshows'); ?>",
	  success:function(data){
		  if(data == 1){
			  $(o).attr("class","layui-unselect layui-form-switch");
	      }else{
			  $(o).attr("class","layui-unselect layui-form-switch layui-form-onswitch");
	      }
	  }
  });
}
function changeblank(o){
  var change=$(o).attr("change");
  $.ajax({
	  type:"post",
	  dataType:"json",
      data:{change:change},
	  url:"<?php echo url('navtop/changeblank'); ?>",
	  success:function(data){
		  if(data == 1){
			  $(o).attr("class","layui-unselect layui-form-switch");
	      }else{
			  $(o).attr("class","layui-unselect layui-form-switch layui-form-onswitch");
	      }
	  }
  });
}
function changesurl(o){
  var change=$(o).attr("change");
  $.ajax({
	  type:"post",
	  dataType:"json",
      data:{change:change},
	  url:"<?php echo url('navtop/changesurl'); ?>",
	  success:function(data){
		  if(data == 1){
			  $(o).attr("class","layui-unselect layui-form-switch");
	      }else{
			  $(o).attr("class","layui-unselect layui-form-switch layui-form-onswitch");
	      }
	  }
  });
}
</script>
<script>
layui.use('form',function(){
  var form = layui.form,
  jq = layui.jquery;

  jq('.del_btn').click(function(){
    var name = jq(this).attr('nickname');
    var id = jq(this).attr('member-id');
    layer.confirm('确定删除【'+name+'】?', function(index){
      loading = layer.load(2, {
        shade: [0.2,'#000']
      });
      jq.post('<?php echo url("navtop/dels"); ?>',{'id':id},function(data){
        if(data.code == 200){
          layer.close(loading);
          layer.msg(data.msg, {icon: 1, time: 1000}, function(){
            location.reload();
          });
        }else{
          layer.close(loading);
          layer.msg(data.msg, {icon: 2, anim: 6, time: 1000});
        }
      });
    });
  });

})
</script>
</div>
</div>
<script>
layui.use(['layer','jquery'], function(){
  var layer = layui.layer,
  jq = layui.jquery;

  jq('.logi_logout').click(function(){
    loading = layer.load(2, {
      shade: [0.2,'#000']
    });
    jq.getJSON('<?php echo url("login/logout"); ?>',function(data){
      if(data.code == 200){
        layer.close(loading);
        layer.msg(data.msg, {icon: 1, time: 1000}, function(){
          location.reload();
        });
      }else{
        layer.close(loading);
        layer.msg(data.msg, {icon: 2, anim: 6, time: 1000});
      }
    });
  });

})
</script>
</body>
</html>



