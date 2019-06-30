<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:32:"./template/default/user_set.html";i:1507637612;s:36:"./template/default/index_header.html";i:1561033910;s:37:"./template/default/public_gradeh.html";i:1504321936;s:35:"./template/default/public_user.html";i:1504166226;s:36:"./template/default/index_footer.html";i:1514127398;}*/ ?>
<!DOCTYPE html>
<html>
<head>  
<title>基本设置 - <?php echo config('web.WEB_AUT'); ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link href="/favicon.ico" rel="shortcut icon">
<link rel="stylesheet" href="__ADMIN__/layui/css/layui.css">
<link rel="stylesheet" href="__HOME__/css/style.css">
<link rel="stylesheet" href="__ADMIN__/style_css/index.css">
<link rel="stylesheet" href="__ADMIN__/font/css/font-awesome.min.css">
<script src="__ADMIN__/js/jquery-1.9.1.min.js"></script>
<script src="__HOME__/js/lanrenzhijia.js"></script>
<script src="__ADMIN__/layui/layui.js"></script>
<style type="text/css">
	
</style>
</head>
<body><!-- <img src="__HOME__/img/logo.png"> -->
<div class="tpt-header">
<div class="tpt-wp cl">
<!-- <div class="tpt-logo"><a href="__ROOT__/" ><font id="abcdef" size="5"></font></a></div> -->
<input id="nav-btn" type="checkbox">
<label class="tpt-nav-btn" for="nav-btn"></label>
<ul class="tpt-nav">
<li>
<a class="tpt-nav-li" href="__ROOT__/">网站首页</a>
<ul class="tpt-nav-ul"></ul>
</li>
<?php if(is_array($tptop) || $tptop instanceof \think\Collection || $tptop instanceof \think\Paginator): $k = 0; $__LIST__ = $tptop;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;if($vo['shows'] == 1): ?>
<li>
<?php if($vo['links'] != ''): ?>
<a <?php if($vo['blank'] == 1): ?>target="_blank"<?php endif; ?> class="tpt-nav-li" href="<?php echo $vo['links']; ?>"><?php echo $vo['name']; ?></a>
<?php else: ?>
<input id="nav-<?php echo $vo['id']; ?>" type="checkbox"><label class="tpt-nav-li" for="nav-<?php echo $vo['id']; ?>"><?php echo $vo['name']; ?></label>
<?php endif; ?>
<ul class="tpt-nav-ul">
<?php if(is_array($tptops) || $tptops instanceof \think\Collection || $tptops instanceof \think\Paginator): $k = 0; $__LIST__ = $tptops;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vs): $mod = ($k % 2 );++$k;if($vo['id'] == $vs['tid']): if($vs['shows'] == 1): ?><li><a <?php if($vs['blank'] == 1): ?>target="_blank"<?php endif; ?> href="<?php echo $vs['links']; ?>"><?php echo $vs['name']; ?></a></li><?php endif; endif; endforeach; endif; else: echo "" ;endif; ?>
</ul>
</li>
<?php endif; endforeach; endif; else: echo "" ;endif; ?>
</ul>
<div class="tpt-status tpt-none-768 tpt-none-1024">
<?php if(\think\Session::get('validate') != ''): ?>
<h2><a href="__ROOT__/home/<?php echo $tptuser['userid']; ?>.html"><img id="logohead" src="<?php echo $tptuser['userhead']; ?>"><?php echo $tptuser['username']; ?></a></h2>
<?php if($tptuser['reply'] != 0): ?>
<a class="mes" href="__ROOT__/user/message.html"><?php echo $tptuser['reply']; ?></a>
<?php endif; ?>
<ul>
<li><a href="__ROOT__/home/<?php echo $tptuser['userid']; ?>.html"><i class="layui-icon">&#xe612;</i>我的主页</a></li>
<li><a href="javascript:void(0)"><i class="layui-icon">&#xe658;</i><?php if($tptuser['userid'] == 1): ?>
<em>管理员</em>
<?php else: if($tptuser['point'] >= config('point.GRADE_AVIP') and $tptuser['point'] < config('point.GRADE_BVIP')): ?>
<em><?php echo config('point.GRADE_CVIP'); ?></em>
<?php endif; if($tptuser['point'] >= config('point.GRADE_DVIP') and $tptuser['point'] < config('point.GRADE_EVIP')): ?>
<em><?php echo config('point.GRADE_FVIP'); ?></em>
<?php endif; if($tptuser['point'] >= config('point.GRADE_GVIP') and $tptuser['point'] < config('point.GRADE_HVIP')): ?>
<em><?php echo config('point.GRADE_IVIP'); ?></em>
<?php endif; if($tptuser['point'] >= config('point.GRADE_JVIP')): ?>
<em><?php echo config('point.GRADE_KVIP'); ?></em>
<?php endif; endif; ?></a></li>
<li><a href="__ROOT__/user/set.html"><i class="layui-icon">&#xe614;</i>设置</a></li>
<li><a class="logout" href="javascript:void(0)"><i class="iconfont" style="top: 2px;">&#xe671;</i>退出</a></li>
</ul>
<?php else: if(config('web.WEB_LOG') == 1): ?>
<a class="rega" href="__ROOT__/user/login.html">登录</a>
<a class="regb" href="__ROOT__/user/reg.html">注册</a>
<?php endif; if(config('web.WEB_LOG') == 2): ?>
<a class="login" href="javascript:void(0)"><i class="iconfont">&#xe627;</i>立即登录</a>
<?php endif; if(config('web.WEB_LOG') == 3): ?>
<a class="login" href="javascript:void(0)"><i class="iconfont">&#xe627;</i></a>
<a class="rega" href="__ROOT__/user/login.html">登录</a>
<a class="regb" href="__ROOT__/user/reg.html">注册</a>
<?php endif; endif; ?>
</div>
</div>
</div>
<div class="tpt-none-1200 tpt-none-1920">
<?php if(\think\Session::get('validate') != ''): ?>
<div class="PathInner" id="PathMenu">
<div class="PathMain"><div onclick="PathRun();">
<?php if($tptuser['reply'] != 0): ?>
<a class="tpt-message" href="__ROOT__/user/message.html"><?php echo $tptuser['reply']; ?></a>
<?php endif; ?>
<img src="<?php echo $tptuser['userhead']; ?>"></div></div>
<div class="PathItem"><a class="cola link logout"><i class="iconfont">&#xe671;</i></a></div>
<div class="PathItem"><a class="colb link" href="__ROOT__/user/set.html"><i class="layui-icon">&#xe614;</i></a></div>
<div class="PathItem"><a class="cold link tougao"><i class="layui-icon">&#xe609;</i></a></div>
<div class="PathItem"><a class="colc link" href="__ROOT__/home/<?php echo $tptuser['userid']; ?>.html"><i class="layui-icon">&#xe612;</i></a></div>
</div>
<?php else: ?>
<div class="PathInner" id="PathMenu">
<div class="PathMain"><div onclick="PathRun();"><em>登录</em></div></div>
<?php if(config('web.WEB_LOG') == 1): ?>
<div class="PathItem"><a class="colb link" href="__ROOT__/user/login.html"><i class="iconfont" style="font-size: 20px;">&#xe646;</i></a></a></div>
<div class="PathItem"></div>
<div class="PathItem"></div>
<div class="PathItem"></div>
<?php endif; if(config('web.WEB_LOG') == 2): ?>
<div class="PathItem"><a class="cola link login" href="javascript:void(0)"><i class="iconfont" style="font-size: 22px;">&#xe613;</i></a></div>
<div class="PathItem"></div>
<div class="PathItem"></div>
<div class="PathItem"></div>
<?php endif; if(config('web.WEB_LOG') == 3): ?>
<div class="PathItem"><a class="cola link login" href="javascript:void(0)"><i class="iconfont" style="font-size: 22px;">&#xe613;</i></a></div>
<div class="PathItem"><a class="colb link" href="__ROOT__/user/login.html"><i class="iconfont" style="font-size: 20px;">&#xe646;</i></a></div>
<div class="PathItem"></div>
<div class="PathItem"></div>
<?php endif; endif; ?>
</div>
</div>
<link rel="stylesheet" href="__HOME__/css/user.css">
<div class="tpt-wp cl">
<div class="tpt-user cl">
<ul class="layui-nav layui-nav-tree tpt-none-768 tpt-none-1024" id="menu" lay-filter="user">
<li class="layui-nav-item"><a href="__ROOT__/home/<?php echo $tptuser['userid']; ?>.html"><i class="layui-icon">&#xe609;</i>我的主页</a></li>
<li class="layui-nav-item"><a href="__ROOT__/user/index.html"><i class="layui-icon">&#xe612;</i>我的内容</a></li>
<li class="layui-nav-item"><a href="__ROOT__/user/comment.html"><i class="layui-icon">&#xe611;</i>我的评论</a></li>
<li class="layui-nav-item"><a href="__ROOT__/user/message.html"><i class="layui-icon">&#xe616;</i>评论我的</a></li>
<li class="layui-nav-item"><a href="__ROOT__/user/set.html"><i class="layui-icon">&#xe620;</i>基本设置</a></li>
</ul>

<div class="fly-tab tpt-none-1200 tpt-none-1920 cl">
<ul>
<li><a href="__ROOT__/user/index.html"><i style="margin-right: 5px;" class="layui-icon">&#xe612;</i>我的内容</a></li>
<li><a href="__ROOT__/user/message.html"><i style="margin-right: 5px;" class="layui-icon">&#xe616;</i>评论我的</a></li>
<li><a href="__ROOT__/user/set.html"><i style="margin-right: 5px;" class="layui-icon">&#xe620;</i>基本设置</a></li>
</ul>
</div>

<script type="text/javascript">
  var urlstr = location.href;
  var urlstatus=false;
  $("#menu a").each(function () {
    if ((urlstr + '/').indexOf($(this).attr('href')) > -1&&$(this).attr('href')!='') {
      $(this).addClass('cur'); urlstatus = true;
    } else {
      $(this).removeClass('cur');
    }
  });
  if (!urlstatus) {$("#menu a").eq(0).addClass('cur'); }
</script>
<div class="tpt-tab cl">
<div class="layui-tab layui-tab-brief" lay-filter="docDemoTabBrief">
<ul class="layui-tab-title">
<li class="layui-this">基本资料</li>
<li>修改头像</li>
<li>修改密码</li>
<li>实名认证</li>
</ul>
<div class="layui-tab-content" style="padding: 20px 0;">
<div class="layui-tab-item layui-show">
<form class="layui-form layui-form-pane" method="post">
<blockquote style="border:none;margin-bottom:15px;color:#333;" class="layui-elem-quote">
<?php if($tptuser['type'] == 0): ?><a style="cursor: pointer;color:#4F99CF;" class="bqq">立即绑定</a> ，即可使用QQ帐号直接登录<?php endif; if($tptuser['type'] == 1): ?>已成功绑定，您可以使用QQ帐号直接登录，也可以 <a style="cursor: pointer;color:#4F99CF;" class="jqq">解除绑定</a><?php endif; ?>
</blockquote>
<div class="layui-form-item">
<label class="layui-form-label">昵称</label>
<div class="layui-input-inline">
<input type="text" name="username" required lay-verify="required|names" autocomplete="off" value="<?php echo $tptc['username']; ?>" class="layui-input">
</div>
</div>
<div class="layui-form-item">
<label class="layui-form-label">邮箱</label>
<div class="layui-input-inline">
<input type="text" name="usermail" autocomplete="off" value="<?php echo $tptc['usermail']; ?>" class="layui-input">
</div>
</div>
<div class="layui-form-item">
<label class="layui-form-label">QQ</label>
<div class="layui-input-inline">
<input type="text" name="userqq" autocomplete="off" value="<?php echo $tptc['userqq']; ?>" class="layui-input">
</div>
</div>
<div class="layui-form-item">
<label class="layui-form-label">城市</label>
<div class="layui-input-inline">
<input type="text" name="userhome" lay-verify="homes" autocomplete="off" value="<?php echo $tptc['userhome']; ?>" class="layui-input">
</div>
</div>
<div class="layui-form-item layui-form-text">
<label class="layui-form-label">签名</label>
<div class="layui-input-block">
<textarea placeholder="随便写些什么刷下存在感" name="description" lay-verify="descrs" autocomplete="off" class="layui-textarea" style="height: 80px;"><?php echo $tptc['description']; ?></textarea>
</div>
</div>
<div class="layui-form-item">
<button class="layui-btn" lay-submit="" lay-filter="user_sets">确认修改</button>
</div>
</form>
</div>

<div class="layui-tab-item">
<form class="layui-form" method="post">
<div class="layui-form-item">
<div class="avatar-add">
<p>建议尺寸200*200，支持jpg、png、gif，最大不能超过500KB</p>
<div class="upload-img">
<button type="button" class="layui-btn layui-btn-primary" id="head"><i class="layui-icon">&#xe67c;</i>上传头像</button>
<input type="hidden" name="userhead" value="<?php echo $tptc['userhead']; ?>" class="layui-input">
</div>
<img style="width: 200px;height: 200px;" id="userhead" src="__UPLO__<?php echo $tptc['userhead']; ?>">
</div>
</div>
<div class="layui-form-item">
<button class="layui-btn" lay-submit="" lay-filter="user_headedit">确认修改</button>
</div>
</form>
</div>

<div class="layui-tab-item">
<form class="layui-form layui-form-pane" method="post">
<div class="layui-form-item">
<label class="layui-form-label">修改密码</label>
<div class="layui-input-inline">
<input type="password" name="password" required lay-verify="required|pass" placeholder="请输入内容" autocomplete="off" class="layui-input">
</div>
</div>
<div class="layui-form-item">
<label class="layui-form-label">确认密码</label>
<div class="layui-input-inline">
<input type="password" name="passwords" required lay-verify="required|pass" placeholder="请输入内容" autocomplete="off" class="layui-input">
</div>
</div>
<div class="layui-form-item">
<button class="layui-btn" lay-submit="" lay-filter="user_pass">确认修改</button>
</div>
</form>
</div>

<div class="layui-tab-item">
<form class="layui-form layui-form-pane" method="post">
<div class="layui-form-item">
<label class="layui-form-label">姓名</label>
<div class="layui-input-inline">
<input type="text" name="userxm" required lay-verify="required" autocomplete="off" value="<?php echo $tptc['userxm']; ?>" class="layui-input">
</div>
</div>
<div class="layui-form-item">
<label class="layui-form-label">身份证号</label>
<div class="layui-input-inline">
<input type="text" name="usersid" required lay-verify="required" autocomplete="off" value="<?php echo $tptc['usersid']; ?>" class="layui-input">
</div>
</div>

<div class="layui-form-item">
<div class="avatar-add">
<p>建议尺寸400*260，支持jpg、png、gif，最大不能超过500KB</p>
<div class="upload-img">
<button type="button" class="layui-btn layui-btn-primary" id="image"><i class="layui-icon">&#xe67c;</i>上传图片</button>
<input type="hidden" name="userzm" value="<?php echo $tptc['userzm']; ?>" class="layui-input">
</div>
<?php if($tptc['userzm'] != ''): ?>
<img id="userzm" src="__UPLO__<?php echo $tptc['userzm']; ?>">
<?php else: ?>
<img id="userzm" src="__HOME__/img/1.jpg">
<?php endif; ?>
</div>
</div>
<div class="layui-form-item">
<button class="layui-btn" lay-submit="" lay-filter="user_setss">确认修改</button>
</div>
</form>
</div>

</div>
</div>
</div>
</div>
</div>
<script type="text/javascript">
layui.use(['form', 'upload'],function(){
var form = layui.form,
upload = layui.upload,
jq = layui.jquery;
jq('.bqq').click(function(){
layer.open({
type: 2,
title: 'QQ登陆',
maxmin: false,
shadeClose: true,
shade: 0.1,
area: ['500px', '500px'],
content: '<?php echo config("web.WEB_COM"); ?>/user/qq.html',
end: function(){location.reload();}
});
});
jq('.jqq').click(function(){
layer.confirm('确定解除绑定么?', function(index){
loading = layer.load(2, {
shade: [0.2,'#000']
});
jq.post('<?php echo url("index/user/jqq"); ?>',function(data){
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
upload.render({
url: '<?php echo url("index/upload/upimage"); ?>'
,elem:'#image'
,ext: 'jpg|png|gif'
,area: ['500', '500px']
,before: function(input){
loading = layer.load(2, {
shade: [0.2,'#000']
});
}
,done: function(res){
layer.close(loading);
jq('input[name=userzm]').val(res.path);
userzm.src = "__UPLO__"+res.path;
layer.msg(res.msg, {icon: 1, time: 1000});
}
});
upload.render({
url: '<?php echo url("index/upload/upimage"); ?>'
,elem:'#head'
,ext: 'jpg|png|gif'
,area: ['200', '200px']
,before: function(input){
loading = layer.load(2, {
shade: [0.2,'#000']
});
}
,done: function(res){
layer.close(loading);
jq('input[name=userhead]').val(res.path);
userhead.src = "__UPLO__"+res.path;
layer.msg(res.msg, {icon: 1, time: 1000});
}
}); 
form.verify({
names: function(value){
if(value.length > 12){
return '昵称必须小于12位';
}
}
,homes: function(value){
if(value.length > 6){
return '城市必须小于6位';
}
}
,descrs: function(value){
if(value.length > 16){
return '签名必须小于16位';
}
}
,pass: [/(.+){6,12}$/, '密码必须6到12位']
,content: function(value){
layedit.sync(editIndex);
}
});
form.on('submit(user_sets)', function(data){
loading = layer.load(2, {
shade: [0.2,'#000']
});
var param = data.field;
jq.post('<?php echo url("index/user/sets"); ?>',param,function(data){
if(data.code == 200){
layer.close(loading);
layer.msg(data.msg, {icon: 1, time: 1000}, function(){
location.href = '<?php echo url("index/user/set"); ?>';
});
}else{
layer.close(loading);
layer.msg(data.msg, {icon: 2, anim: 6, time: 1000});
}
});
return false;
});
form.on('submit(user_setss)', function(data){
loading = layer.load(2, {
shade: [0.2,'#000']
});
var param = data.field;
jq.post('<?php echo url("index/user/setss"); ?>',param,function(data){
if(data.code == 200){
layer.close(loading);
layer.msg(data.msg, {icon: 1, time: 1000}, function(){
location.href = '<?php echo url("index/user/set"); ?>';
});
}else{
layer.close(loading);
layer.msg(data.msg, {icon: 2, anim: 6, time: 1000});
}
});
return false;
});
form.on('submit(user_headedit)', function(data){
loading = layer.load(2, {
shade: [0.2,'#000']
});
var param = data.field;
jq.post('<?php echo url("index/user/headedit"); ?>',param,function(data){
if(data.code == 200){
layer.close(loading);
layer.msg(data.msg, {icon: 1, time: 1000}, function(){
location.href = '<?php echo url("index/user/set"); ?>';
});
}else{
layer.close(loading);
layer.msg(data.msg, {icon: 2, anim: 6, time: 1000});
}
});
return false;
});
form.on('submit(user_pass)', function(data){
loading = layer.load(2, {
shade: [0.2,'#000']
});
var param = data.field;
jq.post('<?php echo url("index/user/pass"); ?>',param,function(data){
if(data.code == 200){
layer.close(loading);
layer.msg(data.msg, {icon: 1, time: 1000}, function(){
location.href = '<?php echo url("index/user/set"); ?>';
});
}else{
layer.close(loading);
layer.msg(data.msg, {icon: 2, anim: 6, time: 1000});
}
});
return false;
});
});
</script>
<div class="tpt-footer footer tpt-mat-30 cl">
	<div class="tpt-wp cl">
		<div class="tpt-md-1">
			<div class="tpt-mds">
				<p class="bq">
Copyright© 2014-2017
					<span class="pipe">|</span>
                    <a class="banquan" target="_blank" href="<?php echo config('web.WEB_COM'); ?>">Powered by <?php echo config('web.WEB_AUT'); ?></a>
					<span class="tpt-none-768 tpt-none-1024">
					<span class="pipe">|</span>
					<a href="http://www.miitbeian.gov.cn/" target="_blank"><?php echo config('web.WEB_ICP'); ?></a>
					<span class="pipe">|</span>
					<a href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo config('web.WEB_QQ'); ?>&site=qq&menu=yes" target="_blank">QQ:<?php echo config('web.WEB_QQ'); ?></a>
					</span>
				</p>
			</div>
		</div>
	</div>
</div>
<div id="zanzhus" class="tpt-zan cl" style="display: none;">
<div class="layui-tab">
  <h2>感谢您的支持，我会继续努力的</h2>
  <div class="layui-tab-content">
    <div class="layui-tab-item layui-show"><img src="__HOME__/img/alipay.png"></div>
    <div class="layui-tab-item"><img src="__HOME__/img/weipay.png"></div>
	<p>感谢您的打赏</p>
  </div>
  <ul class="layui-tab-title">
    <li class="layui-this"><span class="zanbox"></span><img src="__HOME__/img/ali.jpg" alt="支付宝"></li>
    <li><span class="zanbox"></span><img src="__HOME__/img/wei.jpg" alt="微信"></li>
  </ul>
  <h3>打开支付宝或微信扫一扫，即可进行扫码打赏哦</h3>
</div>
</div>
<script type="text/javascript">
layui.use(['layer','jquery','element'], function(){
  var layer = layui.layer,
  element = layui.element,
  jq = layui.jquery;
  jq('.logout').click(function(){
    loading = layer.load(2, {
      shade: [0.2,'#000']
    });
    jq.getJSON('<?php echo url("index/login/logout"); ?>',function(data){
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
	var W = document.documentElement.clientWidth || document.body.clientWidth;
	if(W < 1008){
	jq('.login').click(function(){
	   layer.open({
			type: 2,
			title: 'QQ登陆',
			maxmin: false,
			shadeClose: true,
			shade: 0.1,
			area: ['260px', '260px'],
			content: '<?php echo config("web.WEB_COM"); ?>/user/qq.html',
			end: function(){location.reload();}
		});
	  });
	}else{
	jq('.login').click(function(){
	   layer.open({
			type: 2,
			title: 'QQ登陆',
			maxmin: false,
			shadeClose: true,
			shade: 0.1,
			area: ['500px', '500px'],
			content: '<?php echo config("web.WEB_COM"); ?>/user/qq.html',
			end: function(){location.reload();}
		});
	});
	}
  jq('.zanzhu').click(function(){    
       layer.open({
			type:1,
			title:'',
			shadeClose:true,
			area:['450px','400px'],
			content:$('#zanzhus')
	   });
  });
  jq('.tougao').click(function(){
	var exp = "<?php echo \think\Session::get('validate'); ?>"
	if(exp == ""){
	    layer.msg('亲！请登录', {icon: 2, anim: 6, time: 1000});
	}else{
		if('<?php echo config("web.WEB_ADD"); ?>' == 1 && '<?php echo $tptuser['status']; ?>' == 1){
		   location.href = '__ROOT__/add.html';
		}else{
		   layer.msg('已关闭投稿', {icon: 2, anim: 6, time: 1000});
		}
	}
  });
})
</script>
</body>
</html>