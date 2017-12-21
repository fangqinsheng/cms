<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
<!-- 热搜关键词 -->
	<div class="search">
		<div class="container">
			<div class="search-content clearfloat">
				<ul class="search-keys clearfloat" style="float: left;">
					<li>热搜关键词：</li>
					<li><a href="#">托盘</a></li>
					<li><a href="#">保鲜盒</a></li>
					<li><a href="#">服务车</a></li>
					<li><a href="#">整理箱</a></li>
					<li><a href="#">筛</a></li>
				</ul>
				<p style="float: right;">
					<a href="#">首页</a>/<a href="#">产品中心</a>/<a href="#">所有产品</a>
				</p>
			</div>
		</div>
	</div>

<!-- details-box -->
	<div class="details-box">
		<div class="wrap clearfloat">
			<div class="left-show" id="slide" style="width: 66%;">
				<div class="max-pic" id="max-pic">
					<div class="prev1" id="prev1"><img src="<?php echo IMG_PATH;?>img/index/arrow1.png" width="28" height="51"  alt=""/></div>
					<div class="next1" id="next1"><img src="<?php echo IMG_PATH;?>img/index/arrow2.png" width="28" height="51"  alt=""/></div>
					<ul class="details-slide">
						<li><a href="javascript:;"><img src="<?php echo $thumb;?>" width="100%"/></a><div class="img-info" style="display: none;">服务车介绍</div></li>
					</ul>
				</div>
				<div class="min-pic clearfloat" id="min-pic">
					<div class="num clearfloat" id="ban_num1">
						<ul>
							<li><a href="javascript:;"><img src="<?php echo $thumb;?>" width="100%"/></a></li>
						</ul>
					</div>
				</div>
				<div class="click-icon">
					<div class="collect-icon">
						<i class="iconfont"></i>
						<a href="">添加收藏</a>
						<span>(3359)</span>
					</div>
					<div class="share-icon">
						<i class="iconfont"></i>
						<a href="">分享</a>
					</div>
				</div>
			</div>
			<?php if($money) { ?>
			<form id="formcar" name="formcar" method="post" action="<?php echo APP_PATH;?>index.php?m=order&c=cart&a=add&a_id=<?php echo $id;?>&a_catid=<?php echo $catid;?>" target="_blank">
			<div class="right-text" style="width: 34%;float: right;">
				<h2 style="color: #005ABC;">【<?php echo $CATEGORYS[$catid]['catname'];?>】<span><?php echo $title;?></span><input type="hidden" name="a_title" value="【<?php echo $CATEGORYS[$catid]['catname'];?>】" /></h2>
				<dl class="right-price">
					<dt>价格<span><?php echo $money;?><input type="hidden" name="money" value="<?php echo $money;?>" />元/套</span></dt>
					<dd>使用方便，可叠放使用。</dd>
				</dl>
				<div class="right-scoring">
					<div class="scoring-box clearfloat">
						<div class="scoring-box-txt">评分</div>
						<div class="scoring-star-box">
							<div class="scoring-star-txt">4.96</div>
							<div class="scoring-star"></div>
							<div class="scoring-star-comment">(3359条评论)</div>
						</div>
						<ul class="scoring-box-comment">
							<li>服务态度：<strong>4.97</strong>分</li>
							<li>工作速度：<strong>4.96</strong>分</li>
							<li>完成质量：<strong>4.95</strong>分</li>
						</ul>
					</div>
					<div class="scroing-info clearfloat">
						<div class="scoring-complete-time">
							订单平均完成周期<strong>9天</strong>
						</div>
						<div class="scoring-respon-time">
							订单平均响应时间<strong>2小时</strong>
						</div>
					</div>
				</div>
				<div class="right-number">
					<dl class="clearfloat">
						<dt>数量</dt>
						<dd>
							<input type="text" name="quantity" value="1" />
						</dd>
					</dl>
				</div>
				<div class="right-btn">
					<span><button type="submit" name="button" >添加购物车</button></span>
					<span><a href="<?php echo APP_PATH;?>index.php?m=order&c=cart&a=init" target="_blank">确认购买</a></span>
				</div>
				<div class="right-product-save">
					<p>荣获ISO9001：2008国际质量管理体系认证和QS认证，产品质量安全可放心使用！</p>
				</div>
				<ul class="right-product-icon">
					<li style=""></li>
					<li style="background-position-x: -82px;"></li>
					<li style="background-position-x: -164px;"></li>
					<li style="background-position-x: -246px;"></li>
				</ul>
			</div>
			</form>
			<?php } ?>
		</div>
	</div>
<!-- info -->
	<div class="details-info">
		<div class="wrap clearfloat">
			<div class="left-info" style="width: 74%;float: left;padding-top: 10px;">
				<div class="info-box">
					<div class="info-header">
						<ul class="clearfloat">
							<li><a href="">产品参数</a></li>
							<li><a href="">产品特色</a></li>
							<li><a href="">售后保障</a></li>
						</ul>
					</div>
					<div class="info-content">
						<ul class="clearfloat">
							<?php echo $editor;?>
						</ul>
						<div class="content-box">
							<p><?php echo $content;?></p>
						</div>
					</div>
					<h3 class="info-tittle">免责声明</h3>
					<p>惠而信商用设备有限公司所生产的所有产品均什么很么，文案文案文案文案文案文案文案文案文案文案文案文案文案文案文案文案文案文案文案文案文案文案文案文案文案文案文案文案文案文案文案文案文案文案文案文案文案文案文案文案文案文案文案文案文案文案文案文案文案文案文案文案文案文案文案文案文案文案文案文案文案文案文案</p>
				</div>
			</div>
			<div class="right-info" style="width: 25%;float: right;">
				<div class="info-brands">
					<h5 class="info-tittle">惠而信商用设备有限公司</h5>
					<div class="info-contact">
						<a href=""><img src="<?php echo IMG_PATH;?>img/details/btn2.png"/></a>
						<a href=""><img src="<?php echo IMG_PATH;?>img/details/btn1.png"/></a></a>
					</div>
					<p class="info-time">周一至周六 09：00~18：00</p>
					<div class="other-contact">
						<h6>其他联系方式</h6>
						<p>惠而信前台：<a href=""><img src="<?php echo IMG_PATH;?>img/details/button_111.gif""/></a></p>
					</div>
				</div> 
				<div class="other-products">
					<h4>本店其他产品<a href="">换一批</a></h4>
					<ul>
					<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=100e9e42efb8f90ad59f8e607eadb016&action=position&posid=18&num=4&order=listorder&return=pdata\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$pdata = $content_tag->position(array('posid'=>'18','order'=>'listorder','limit'=>'4',));}?>
					<?php $n=1;if(is_array($pdata)) foreach($pdata AS $p) { ?>
						<?php $cid = $p[catid]?> 
    					<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=10a4704b3e8e53f97eb33b6bec2eb6a3&action=lists&catid=%24cid&moreinfo=1&num=1&return=cdata\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$cdata = $content_tag->lists(array('catid'=>$cid,'moreinfo'=>'1','limit'=>'1',));}?>
						<?php $n=1;if(is_array($cdata)) foreach($cdata AS $c) { ?>
						<li class="clearfloat">
							<div class="productsPic">
								<a href="<?php echo $c['url'];?>"><img src="<?php echo $c['thumb'];?>" width="100%"/></a>
							</div>
							<div class="productsTxt">
								<a href=""><h1>【<?php echo $CATEGORYS[$c['catid']]['catname'];?>】<span><?php echo $c['title'];?></span></h1></a>
								<p class="product-pricce">￥<?php echo $c['money'];?></p>
								<p>成交<span>168</span>次</p>
							</div>
						</li>
						<?php $n++;}unset($n); ?>
    					<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
					<?php $n++;}unset($n); ?>
					<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
						<!--<li class="clearfloat">
							<div class="productsPic">
								<a href=""><img src="<?php echo IMG_PATH;?>img/index/code.png" width="100%"/></a>
							</div>
							<div class="productsTxt">
								<a href=""><h1>【多功能服务车】2002服务车  | 周转运输</h1></a>
								<p class="product-pricce">￥68</p>
								<p>成交<span>168</span>次</p>
							</div>
						</li>
						<li class="clearfloat">
							<div class="productsPic">
								<a href=""><img src="<?php echo IMG_PATH;?>img/index/code.png" width="100%"/></a>
							</div>
							<div class="productsTxt">
								<a href=""><h1>【多功能服务车】2002服务车  | 周转运输</h1></a>
								<p class="product-pricce">￥68</p>
								<p>成交<span>168</span>次</p>
							</div>
						</li>
						<li class="clearfloat">
							<div class="productsPic">
								<a href=""><img src="<?php echo IMG_PATH;?>img/index/code.png" width="100%"/></a>
							</div>
							<div class="productsTxt">
								<a href=""><h1>【多功能服务车】2002服务车  | 周转运输</h1></a>
								<p class="product-pricce">￥68</p>
								<p>成交<span>168</span>次</p>
							</div>
						</li>-->
						
					</ul>
				</div>
			</div> 
		</div>
	</div>
	
<?php include template("content","footer"); ?>