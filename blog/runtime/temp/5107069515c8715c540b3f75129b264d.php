<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:36:"./template/default/user_message.html";i:1504165766;s:36:"./template/default/index_header.html";i:1561033910;s:37:"./template/default/public_gradeh.html";i:1504321936;s:35:"./template/default/public_user.html";i:1504166226;s:36:"./template/default/index_footer.html";i:1514127398;}*/ ?>
<!DOCTYPE html>
<html>
<head>  
<title>评论我的 - <?php echo config('web.WEB_AUT'); ?></title>
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
<button class="del_btns tpts-btn layui-btn layui-btn-danger">清空全部消息</button>
<ul class="mine-msg">
<?php if(is_array($tptc) || $tptc instanceof \think\Collection || $tptc instanceof \think\Paginator): $i = 0; $__LIST__ = $tptc;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
<li class="messagelist">
<blockquote class="layui-elem-quote">
<a href="__ROOT__/home/<?php echo $vo['userid']; ?>.html" target="_blank">
<cite><?php echo $vo['username']; ?></cite>
</a>
回复了您的内容
<a href="__ROOT__/thread/<?php echo $vo['fid']; ?>.html" target="_blank"><cite><?php echo $vo['title']; ?></cite></a>
<?php if($vo['shows'] == 0): ?><a style="background: #D63131;" class="mine-edit">待审</a><?php endif; ?>
</blockquote>
<div style="color:#999;font-size: 13px;" class="cl">
<?php echo content_zh($vo['content'],0,120); ?>...
</div>
<p><span><?php echo date("Y-m-d",$vo['time']); ?></span><a member-id="<?php echo $vo['id']; ?>" title="清空" class="del_btn layui-btn layui-btn-small layui-btn-danger fly-delete">清空</a></p>
</li>
<?php endforeach; endif; else: echo "" ;endif; ?>
</ul>
<div class="pages cl"><?php echo $tptc->render(); ?></div>
</div>
</div>
</div>
<script type="text/javascript">
layui.use('form',function(){
var form = layui.form,
jq = layui.jquery;
jq('.del_btn').click(function(){
var id = jq(this).attr('member-id');
layer.confirm('确定清空此消息么?', function(index){
loading = layer.load(2, {
shade: [0.2,'#000']
});
jq.post('<?php echo url("index/user/messagedels"); ?>',{'id':id},function(data){
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
jq('.del_btns').click(function(){
layer.confirm('确定清空全部消息么?', function(index){
loading = layer.load(2, {
shade: [0.2,'#000']
});
jq.post('<?php echo url("index/user/messagedelss"); ?>',function(data){
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