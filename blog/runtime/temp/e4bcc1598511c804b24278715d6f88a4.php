<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:41:"./application/admin\view\point_index.html";i:1504503096;s:42:"./application/admin\view\index_header.html";i:1514021724;s:42:"./application/admin\view\index_footer.html";i:1504421378;}*/ ?>
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

<fieldset class="layui-elem-field layui-field-title">
<legend>积分管理</legend>
</fieldset>

<form class="layui-form">

  <div class="layui-form-item">
    <label class="layui-form-label">注册积分</label>
    <div class="layui-input-block">
	  <input type="text" name="REG_POINT" value="<?php echo config('point.REG_POINT'); ?>" placeholder="请输入内容" autocomplete="off" class="layui-input">
    </div>
  </div>
  
  <div class="layui-form-item">
    <label class="layui-form-label">登录积分</label>
    <div class="layui-input-block">
	  <input type="text" name="LOGIN_POINT" value="<?php echo config('point.LOGIN_POINT'); ?>" placeholder="请输入内容" autocomplete="off" class="layui-input">
    </div>
  </div>

  <div class="layui-form-item">
    <label class="layui-form-label">投稿积分</label>
    <div class="layui-input-block">
	  <input type="text" name="ADD_POINT" value="<?php echo config('point.ADD_POINT'); ?>" placeholder="请输入内容" autocomplete="off" class="layui-input">
    </div>
  </div>

  <div class="layui-form-item">
    <label class="layui-form-label">回复积分</label>
    <div class="layui-input-block">
	  <input type="text" name="EDIT_POINT" value="<?php echo config('point.EDIT_POINT'); ?>" placeholder="请输入内容" autocomplete="off" class="layui-input">
    </div>
  </div>


  <div class="layui-form-item">
    <label class="layui-form-label">大于等于</label>
    <div class="layui-input-block">
	  <input type="text" name="GRADE_AVIP" value="<?php echo config('point.GRADE_AVIP'); ?>" placeholder="请输入内容" autocomplete="off" class="layui-input" style="width: 150px;float: left;">
	  <span style="float: left;line-height: 38px;margin: 0 20px;">小于</span>
	  <input type="text" name="GRADE_BVIP" value="<?php echo config('point.GRADE_BVIP'); ?>" placeholder="请输入内容" autocomplete="off" class="layui-input" style="width: 150px;float: left;">
	  <span style="float: left;line-height: 38px;margin: 0 20px;">等级</span>
	  <input type="text" name="GRADE_CVIP" value="<?php echo config('point.GRADE_CVIP'); ?>" placeholder="请输入内容" autocomplete="off" class="layui-input" style="width: 200px;float: left;">
    </div>
  </div>

  <div class="layui-form-item">
   <label class="layui-form-label">大于等于</label>
    <div class="layui-input-block">
	  <input type="text" name="GRADE_DVIP" value="<?php echo config('point.GRADE_DVIP'); ?>" placeholder="请输入内容" autocomplete="off" class="layui-input" style="width: 150px;float: left;">
	  <span style="float: left;line-height: 38px;margin: 0 20px;">小于</span>
	  <input type="text" name="GRADE_EVIP" value="<?php echo config('point.GRADE_EVIP'); ?>" placeholder="请输入内容" autocomplete="off" class="layui-input" style="width: 150px;float: left;">
	  <span style="float: left;line-height: 38px;margin: 0 20px;">等级</span>
	  <input type="text" name="GRADE_FVIP" value="<?php echo config('point.GRADE_FVIP'); ?>" placeholder="请输入内容" autocomplete="off" class="layui-input" style="width: 200px;float: left;">
    </div>
  </div>

  <div class="layui-form-item">
   <label class="layui-form-label">大于等于</label>
    <div class="layui-input-block">
	  <input type="text" name="GRADE_GVIP" value="<?php echo config('point.GRADE_GVIP'); ?>" placeholder="请输入内容" autocomplete="off" class="layui-input" style="width: 150px;float: left;">
	  <span style="float: left;line-height: 38px;margin: 0 20px;">小于</span>
	  <input type="text" name="GRADE_HVIP" value="<?php echo config('point.GRADE_HVIP'); ?>" placeholder="请输入内容" autocomplete="off" class="layui-input" style="width: 150px;float: left;">
	  <span style="float: left;line-height: 38px;margin: 0 20px;">等级</span>
	  <input type="text" name="GRADE_IVIP" value="<?php echo config('point.GRADE_IVIP'); ?>" placeholder="请输入内容" autocomplete="off" class="layui-input" style="width: 200px;float: left;">
    </div>
  </div>

  <div class="layui-form-item">
   <label class="layui-form-label">大于等于</label>
    <div class="layui-input-block">
	  <input type="text" name="GRADE_JVIP" value="<?php echo config('point.GRADE_JVIP'); ?>" placeholder="请输入内容" autocomplete="off" class="layui-input" style="width: 150px;float: left;">
	  <span style="float: left;line-height: 38px;margin: 0 20px;">等级</span>
	  <input type="text" name="GRADE_KVIP" value="<?php echo config('point.GRADE_KVIP'); ?>" placeholder="请输入内容" autocomplete="off" class="layui-input" style="width: 418px;float: left;">
    </div>
  </div>


  <div class="layui-form-item">
    <div class="layui-input-block">
	  <button class="layui-btn" lay-submit="" lay-filter="point_add">立即提交</button>
    </div>
  </div>


</form>
</div>
</div>
<script>
layui.use('form',function(){
  var form = layui.form,
  jq = layui.jquery;
  
  form.on('submit(point_add)', function(data){
    loading = layer.load(2, {
      shade: [0.2,'#000']
    });
    var param = data.field;
    jq.post('<?php echo url("point/add"); ?>',param,function(data){
      if(data.code == 200){
        layer.close(loading);
        layer.msg(data.msg, {icon: 1, time: 1000}, function(){
          location.href = '<?php echo url("point/index"); ?>';
        });
      }else{
        layer.close(loading);
        layer.msg(data.msg, {icon: 2, anim: 6, time: 1000});
      }
    });
    return false;
  });

})
</script>
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