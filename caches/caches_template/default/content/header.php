<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html>
<html>
<head>
<title><?php if(isset($SEO['title']) && !empty($SEO['title'])) { ?><?php echo $SEO['title'];?><?php } ?><?php echo $SEO['site_title'];?></title>
<meta name="keywords" content="<?php echo $SEO['keyword'];?>">
<meta name="description" content="<?php echo $SEO['description'];?>">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<meta charset="UTF-8"/>
<link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>css/bootstrap.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>css/welshine.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>css/iconfont.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>css/slider.css"/>
<style type="text/css">
#myCarousel .carousel-inner .item img {
  height: 760px;
}
</style> 
<script src="<?php echo JS_PATH;?>js/jquery-2.1.1.min.js" type="text/javascript" charset="utf-8"></script>
<script src="<?php echo JS_PATH;?>js/bootstrap.js" type="text/javascript" charset="utf-8"></script>
<script src="<?php echo JS_PATH;?>js/common.js" type="text/javascript" charset="utf-8"></script>
<script src="<?php echo JS_PATH;?>js/increase.js" type="text/javascript" charset="utf-8"></script>  <!-- 数字递增 -->
<script src="<?php echo JS_PATH;?>js/jquery.smint.js" type="text/javascript" charset="utf-8"></script>  <!-- 粘性导航 -->
<script src="<?php echo JS_PATH;?>js/scroll.js" type="text/javascript" charset="utf-8"></script>
<script src="<?php echo JS_PATH;?>js/iconfont.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript">
$(document).ready( function() {
    $('.menu').smint({
    	'scrollSpeed' : 1000
    });
});
</script>
</head>
<body> 
	
<!-- 主页背景 -->
	<div class="index-bg"></div>

<!--//右侧悬浮窗口-->

	<div class="float-box clearfix">
		<div class="float-menu">
		<ul>
		   	<li class="float-top">返回顶部</li>
		    <li class="float-phone">400-838-8198</li>
		    <li class="float-QQ">
		    	<a target="_blank" href="tencent://message/?uin=目标QQ号&Site=qq&Menu=yes" title="即刻发送您的需求">在线咨询</a>
		    </li>
		    <li class="float-code" style="height:53px;">微信二维码 <br>
		     	<img class="hd_qr" src="<?php echo IMG_PATH;?>img/index/code.png" width="90%" alt="关注你附近">
		    </li>
		</ul>
		</div>
	</div> 
	
<!-- bar -->

	<div class="bar sTop">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<li class="col-md-2"><a href="">全国<span>[切换城市]</span></a></li>
					<li class="col-md-2"><a href="">微信公众号</a></li>
					<li class="col-md-3" style="margin-left: -1.25em;"><a href="">京东/阿里巴巴商城</a></li>
					<li class="col-md-4" style="margin-left: -2em;"><a href="">广州市仟益贸易有限公司</a></li>
				</div>
				<div class="col-md-3 col-md-offset-1">
					<li class="col-md-6"><a href="">经销商</a>/<a>终端</a></li>
					<li class="col-md-6">请<a href="Admin/login.php" class="orange">登录</a>/<a class="orange">注册</a></li>
				</div>
			</div>
		</div>
	</div>

<!-- 品牌LOGO -->

	<nav class="navbar navbar-default logo">
	  	<div class="container">
	    	<div class="row"> 
	    		<div class="navbar-brand">
	    			<a href="#">
		        		<img src="<?php echo IMG_PATH;?>img/index/logo.png" alt="Brand" height="100%"/>
		      		</a>
	    		</div>
	      		<div class="navbar-text">
					<span class="navbar-title">信诚待客，共同发展</span><br>
					<span class="navbar-eng">Sincere hospitality, common development</span>
				</div>
				<div class="navbar-tel">
					<i class="iconfont icon-dianhua"></i>
					<div class="right-text">
						<span>服务热线:</span>
						<p>400-838-8198</p>
					</div>
				</div>
				<div class="navbar-icon" >
					<i class="icon-caidanlanmuicon iconfont"></i>
				</div> 
	    	</div>
	  </div>
	</nav>

<!-- 粘性菜单 -->

	<div class="menu">
		<div class="container clearfix">
			<div class="row">
				<div class="subMenu col-md-8 clearfix">
				<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=d57e36a9d64428417083b39ad72c2cee&action=category&catid=2&num=6&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'2','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'6',));}?>
					<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
				 	<a href="<?php echo $r['url'];?>" class="subNavBtn col-sm-2" style="transition-delay: 0.2s;"><?php echo $r['catname'];?></a>
				 	<?php $n++;}unset($n); ?>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
				</div>
				<div class="search-box col-md-4">
					<input type="submit" name="search-btn" id="search-btn" value="搜索" class="col-md-3"/>
					<input type="text" name="" id="" value="" class="col-md-8" placeholder="输入想要的产品" onfocus="this.placeholder=''" onblur="this.placeholder='输入想要的产品'"/>
				</div>
			</div>
		</div>
	</div>
		
<!-- slider --> 

	<div id="myCarousel" class="carousel slide">
		<ol class="carousel-indicators">
		    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		    <li data-target="#myCarousel" data-slide-to="1"></li>
		    <li data-target="#myCarousel" data-slide-to="2"></li>
		    <li data-target="#myCarousel" data-slide-to="3"></li>
		</ol>   
		<div class="carousel-inner">
		    <div class="item active">
		        <a><img src="<?php echo IMG_PATH;?>img/index/slider1.jpg" width="100%" alt="First slide"></a>
		    </div>
		    <div class="item">
		        <a><img src="<?php echo IMG_PATH;?>img/index/slider2.jpg" width="100%" alt="Second slide"></a>
		    </div>
		    <div class="item">
		        <a><img src="<?php echo IMG_PATH;?>img/index/slider3.jpg" width="100%" alt="Third slide"></a>
		    </div>
		    <div class="item">
		        <a><img src="<?php echo IMG_PATH;?>img/index/slider4.jpg" width="100%" alt="fourth slide"></a>
		    </div>
		</div>
		<div class="arrow">
	    <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
	    <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
		</div>  
	</div>
	
	
	<!--<div id="myCarousel" class="carousel slide">
		<ol class="carousel-indicators">
		    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		    <li data-target="#myCarousel" data-slide-to="1"></li>
		    <li data-target="#myCarousel" data-slide-to="2"></li>
		    <li data-target="#myCarousel" data-slide-to="3"></li>
		</ol>   
		<div class="carousel-inner">
		<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=e6daaf81f06d7c90b093afda2f3c33aa&action=position&posid=21&order=id+DESC&catid=%24catid\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'21','order'=>'id DESC','catid'=>$catid,'limit'=>'20',));}?>
				<?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
		    <div class="item active">
		        <a href="{$v[url]"><img src="<?php echo $v['thumb'];?>" width="100%" alt="First slide"></a>
		    </div>
		    <?php $n++;}unset($n); ?>
		<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
		</div>
		<div class="arrow">
	    <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
	    <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
		</div>  
	</div>-->