<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>


	<div class="left-tittle s1 bg-white brands" id="brands">
		<div class="container">
			<div class="row">
			<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=1afc112cb916c79f27ee696b60759294&action=lists&catid=4&siteid=%24siteid&moreinfo=1&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'4','siteid'=>$siteid,'moreinfo'=>'1','order'=>'listorder ASC','limit'=>'20',));}?>
				<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
				<div class="brands-text col-md-6">
					<h1><?php echo $r['title'];?><span> / <?php echo $r['money'];?></span></h1><hr>
					<p><?php echo $r['content'];?></p>
				</div>
				<div class="brands-pic col-md-6"><img src="<?php echo $r['thumb'];?>" width="90%"/></div>
				<?php $n++;}unset($n); ?>
			<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?> 
			</div>
		</div>
	</div>

	
<!-- counter -->

	<div class="counter" id="counter">
		<div class="container">
			<div class="counter-box row">
			<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=f177d15f6604dba30ade10fbeb6bad52&action=lists&catid=3&num=4&moreinfo=1&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'3','moreinfo'=>'1','order'=>'listorder ASC','limit'=>'4',));}?>
				<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
				<div class="col-xs-3 counter-col">
					<span class="counter-icon">
						<i class="iconfont"><?php echo $r['mes'];?></i> 
					</span>
					<span class="timer" id="counter-number" data-to="<?php echo $r['content'];?>" data-speed="3500"></span>
					<span id="counter-title"><?php echo $r['title'];?></span>
				</div>
				<?php $n++;}unset($n); ?>
			<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>	
				<!--<div class="col-xs-3 counter-col">
					<span class="counter-icon">
						<i class="iconfont">&#xe623;</i> 
					</span>
					<span class="timer count-title" id="counter-number" data-to="222" data-speed="3500"></span>
					<span id="counter-title">企业团队规模</span>
				</div>
				<div class="col-xs-3 counter-col">
					<span class="counter-icon">
						<i class="iconfont">&#xe623;</i> 
					</span>
					<span class="timer count-title" id="counter-number" data-to="333" data-speed="3500"></span>
					<span id="counter-title">公司品牌实力</span>
				</div>
				<div class="col-xs-3 counter-col">
					<span class="counter-icon">
						<i class="iconfont">&#xe623;</i> 
					</span>
					<span class="timer count-title" id="counter-number" data-to="1200" data-speed="3500"></span>
					<span id="counter-title">自主研发产品</span>
				</div>-->
			</div>
		</div>
	</div>

	
<!-- product -->	

	<div class="product s2"id="product">
		<div class="recommend container" id="recommend">
			<h1>推荐产品<span> / PRODUCT  DISPLAY</span></h1>
			<div class="row">
				<div class="recommend-box clearfloat">
					<div class="recommend-row container" id="">
						<div class="row">
							<figure class="col-xs-4" id="one">
								<figcaption>
									<a href="product.html"><img class="pic" src="<?php echo IMG_PATH;?>img/index/2016-09-10-0177.jpg" width="100%"/></a>
									<a class="big-btn" href="javascript:void(0)">
										<img id="product-img1" src="<?php echo IMG_PATH;?>img/index/public-icon.png" width="50" height="50"/>
									</a>
								</figcaption>
							</figure>
							<figure class="col-xs-4" id="two">
								<figcaption>
									<a href="product.html"><img class="pic" src="<?php echo IMG_PATH;?>img/index/2016-09-10-0185.jpg" width="100%"/></a>
									<a class="big-btn" href="javascript:void(0)"><img src="<?php echo IMG_PATH;?>img/index/public-icon.png" width="50" height="50"/></a>
								</figcaption>
							</figure>
							<figure class="col-xs-4" id="three">
								<figcaption>
									<a href="product.html"><img class="pic" src="<?php echo IMG_PATH;?>img/index/2016-09-10-0208.jpg" width="100%"/></a>
									<a class="big-btn" href="javascript:void(0)"><img src="<?php echo IMG_PATH;?>img/index/public-icon.png" width="50" height="50"/></a>
								</figcaption>
							</figure>
						</div>
					</div>
					<div class="recommend-row container">
					<div class="row">
						<figure class="col-xs-4" id="one">
							<figcaption>
								<a href="product.html"><img class="pic" src="<?php echo IMG_PATH;?>img/index/2016-09-10-0208.jpg" width="100%"/></a>
								<a class="big-btn" href="javascript:void(0)">
									<img id="product-img1" src="<?php echo IMG_PATH;?>img/index/public-icon.png" width="50" height="50"/>
								</a>
							</figcaption>
						</figure>
						<figure class="col-xs-4" id="two">
							<figcaption>
								<a href="product.html"><img class="pic" src="img/index/2016-09-10-0185.jpg" width="100%"/></a>
								<a class="big-btn" href="javascript:void(0)"><img src="img/index/public-icon.png" width="50" height="50"/></a>
							</figcaption>
						</figure>
						<figure class="col-xs-4" id="three">
							<figcaption>
								<a href="product.html"><img class="pic" src="<?php echo IMG_PATH;?>img/index/2016-09-10-0177.jpg" width="100%"/></a>
								<a class="big-btn" href="javascript:void(0)"><img src="<?php echo IMG_PATH;?>img/index/public-icon.png" width="50" height="50"/></a>
							</figcaption>
						</figure>
					</div>
				</div>
					<div class="show-arrow clearfloat">
						<div class="prev"><img src="<?php echo IMG_PATH;?>img/index/arrow1.png" alt="arrow" /></div>
						<div class="next"><img src="<?php echo IMG_PATH;?>img/index/arrow2.png" alt="arrow" /></div>
					</div>
				</div>
			</div>
		</div>	
		<div class="hot container" id="hot">
			<h1>热销产品<span> / PRODUCT   DISPLAY</span></h1>
			<div class="row">
			<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=2b6d8ff3382c0a5c9e85ad4cf2bd99c5&action=category&catid=16&num=7&order=listorder+ASC&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'16','order'=>'listorder ASC','moreinfo'=>'1','limit'=>'7',));}?>
				<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
				<div class="col-sm-3">
					<img src="<?php echo $r['image'];?>" style="<?php echo $r['Encatname'];?>"/>
					<div class="img-mask">
						<div class="mask-content">
							<h4><?php echo $r['catname'];?></h4>
							<p class="describe"><?php echo $r['description'];?></p>
							<p><a href="<?php echo $r['url'];?>"><strong>了解详情</strong></a></p>
						</div>
					</div>
				</div>
				<?php $n++;}unset($n); ?>
			<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>	
			</div>	
		</div>
	</div>

	
	
	
<!-- video -->	
	<section class="video" id="video">
		<div class="video-mask">
			<div class="container">
				<div class="row">
					<div class="video-box clearfloat">
						<div class="col-sm-12">
							<video id="video1" width="100%" controls="controls">
								<source src="<?php echo IMG_PATH;?>img/video.mp4" type="video/mp4"></source>
								<!--<source src="video/video.mp4" type="video/m4v"></source>-->
								<!--当前浏览器不支持 video直接播放，点击这里下载视频： <a href="myvideo.webm">下载视频</a>-->
							</video>
							<!--<div class="videoBtn" >
								<a href="javascript:void(0);">
									<img src="img/index/play.png" id="videoBtn"/>
								</a>
							</div>-->
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	
<!-- cate -->
<div class="product s3" id="cate">
	<h1>产品分类<span> / CATE   DISPLAY</span></h1>
	<ul class="nav">
		<li class="active1" data-filter="all">全部</li>
		<li data-filter="1">厨房</li>
		<li data-filter="2">楼面</li>
		<li data-filter="3">周转</li>
		<li data-filter="4">其他</li> 
	</ul> 	
	<div class="cate-content container">
		<div class="cate-box row">
		<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=c4c9fa887675799d491f9ef427bfb2f8&action=category&catid=6&num=9&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'6','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'9',));}?>
			<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
			<div class="filtr-item col-md-4 col-xs-6" id="last-item" data-category="<?php echo $r['Encatname'];?>">
				<a href="<?php echo $r['url'];?>">
					<div class="item-box">
						<div class="hover">
							<h2><?php echo $r['catname'];?></h2>
							<h3><?php echo $r['description'];?></h3>
						</div>
						<img src="<?php echo $r['image'];?>" alt="">
					</div>
				</a>
			</div>
			<?php $n++;}unset($n); ?>
		<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
		</div>
	</div>
	<p class="more-icon" style="text-align: center;padding: 1em 0;">
		<i class="iconfont icon-shizi"></i>
	</p>
</div>	
	
<!-- news -->
	<div class="left-hr s4" id="news">
		<div class="container">
			<div class="news-header row">
				<div class="left-tittle col-md-8 col-sm-8 col-xs-8">
					<h1>行业资讯<span> / NEWS  DISPLAY</span></h1><hr>
				</div>
				<ul class="news-btn col-md-2 col-md-offset-2 col-sm-3 col-sm-offset-1 col-xs-4">
					<li><a href="javascript:void(0)" class="prev-btn"></a></li>
					<li><a href="javascript:void(0)" class="next-btn" style="background-position-x: -47px;"></a></li>
				</ul>
			</div>
			<div class="news-bottom clearfix">
			<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=c2c81d41d132534cff473d6031a450f9&action=lists&catid=7&num=4&order=id+DESC&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'7','order'=>'id DESC','moreinfo'=>'1','limit'=>'4',));}?>
				<div class="news-line"></div>
				<div class="content-box"> 
					<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
					<li class="news-content clearfix">
						<div class="news-pic col-md-2 col-sm-3"><img src="<?php echo $r['thumb'];?>" width="100%"/></div>
						<div class="news-text col-md-9">
							<h1><?php echo $r['title'];?></h1>
							<h2><span><?php echo date('Y-m-d H:i:s',$r[inputtime]);?></span>&emsp;&emsp;发布者：<span><?php echo $r['username'];?></span></h2>
							<p><?php echo $r['description'];?></p>
							<p style="margin-top: 6px;"><a href="<?php echo $r['url'];?>">查看详情</a></p>
						</div>
					</li>
					<?php $n++;}unset($n); ?>
				</div>
			<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>	
			</div>	
		</div>
	</div>				
					

<!-- footer -->

	<footer>
		<div class="s5" id="contact" style="">
			<div class="contact-content">
				<div class="container">
					<div class="row">
						<div class="contact-list col-md-6" style="">
							<div class="left-tittle" style="">
								<h1>联系我们<span> / CONTACT   US</span></h1><hr>
							</div>
							<p>营业时间为星期一至星期六早上9点到下午6点，您的反馈是我们不但改善的动力。</p>
							<ul>
								<li><i class="iconfont">&#xe60e;</i>总部地址：广州市海珠区昌岗中路166号富盈国际大厦1218室</li>
								<!--<li>厂部地址：佛山市南海区和顺桂和路石塘段和桂中路6号</li>-->
								<li><i class="iconfont">&#xe67f;</i>联系电话：400-838-8198</li>
								<li><i class="iconfont">&#xe64a;</i>传真：020-89577250</li>
								<!--<li>客服投诉：020-89577232</li>-->
								<li><i class="iconfont">&#xe660;</i>EMAIL：ｇz@welshine.com</li>
							</ul>
						</div>
						<div class="contact-email col-md-6" style="">
							<form action="#" method="post">
								<div class="col-md-6">
									<input type="text" name="name" id="name" placeholder="姓名" onfocus="this.placeholder=''" onblur="this.placeholder='姓名'"/>
								</div>
								<div class="col-md-6">
									<input type="email" name="eamil" id="email" placeholder="联系邮箱" onfocus="this.placeholder=''" onblur="this.placeholder='联系邮箱'"/>
								</div>
								<div class="col-md-12">
									<input type="text" name="tel" id="tel" placeholder="联系电话" onfocus="this.placeholder=''" onblur="this.placeholder='联系电话'"/>
								</div>
								<div class="col-md-12">
									<input type="text" name="message" id="message" placeholder="不少于15个字"/>
								</div>
								<div class="col-md-8">
									<input type="submit" name="submit" id="submit" value="确认发送" />
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="public-footer"style="transform: translateY(60px);opacity: 0;transition:1.2s all ease-in-out;">
			<p>建议使用IE4.0以上版本<br />COPYRIGHT © 2004 <a>www.welshine.com</a> Corporation. All rights reserved.<a>版权所有</a> 严禁拷贝<br />
Powered by <a>快扬网</a><br /><a>粤ICP备11003101号</a></p>
		</div>
	</footer>	 
</body>
<script src="<?php echo JS_PATH;?>js/jquery.filterizr.js" type="text/javascript" charset="utf-8"></script>  <!-- 图片筛选差价 -->
<script type="text/javascript">
	$(function() {
		$('.cate-box').filterizr();
		$('.nav li').on('click', function() { 
			$(this).toggleClass('active1').siblings().removeClass('active1');
		});
	});
</script>
</html>