<?php exit('Desgin By http://addon.discuz.com/?@51353.developer Access Denied ');?>
<!--{template common/header}-->
<style id="diy_style" type="text/css"></style>
<div class="banner_bg cl">
	<div class="banner_box">
	<!--[diy=diy_topfocus]-->
	<div id="diy_topfocus" class="area wp"></div>
	<!--[/diy]-->
	</div>
</div>
<div class="wp cl">
	<div class="diy_top cl">
		<!--[diy=top_left]-->
		<div id="top_left" class="area"></div>
		<!--[/diy]-->
		<div class="top_right">
			<!--{if $_G['setting']['search'] && $_G['setting']['srchhotkeywords']}-->
			<div id="srchhot" class="sd_box bm">
				<div class="bm_h cl">
					<h1 class="xw1">热门标签</h1>
				</div>
				<div class="bm_c">
				<!--{eval $i=1;}-->
				<!--{loop $_G['setting']['srchhotkeywords'] $val}-->
					<!--{if ($val=trim($val)) && $i < 16}-->
					<!--{eval $valenc=rawurlencode($val);}-->
					<!--{block srchhotkeywords[]}-->
						<!--{if !empty($searchparams[url])}-->
						<a href="$searchparams[url]?q=$valenc&source=hotsearch{$srchotquery}" target="_blank" class="keyword{$i}" sc="1">$val</a>
						<!--{else}-->
						<a href="search.php?mod=forum&srchtxt=$valenc&formhash={FORMHASH}&searchsubmit=true&source=hotsearch" target="_blank" class="keyword{$i}" sc="1">$val</a>
						<!--{/if}-->
					<!--{/block}-->
					<!--{eval $i++;}-->
					<!--{/if}-->
				<!--{/loop}-->
				<!--{echo implode('', $srchhotkeywords);}-->
				</div>
			</div>
			<!--{/if}-->
			<div id="service" class="sd_box bm">
				<div class="bm_h cl">
					<h1 class="xw1">售后服务</h1>
				</div>
				<div class="bm_c">
					<ul>
						<li class="service_qq"><a href="javascript:void(0);" onclick="javascript:window.open('http://b.qq.com/webc.htm?new=0&amp;sid=4006789688&amp;eid=218808P8z8p8Q8K8K8z8x&amp;o=www.vivo.com.cn&amp;q=7&amp;ref='+document.location, '_blank', 'height=544, width=644,toolbar=no,scrollbars=no,menubar=no,status=no');ga(['send','event','BBS','Interact','OnlineChat']);return false;">QQ</a></li>
						<li id="service_wechat" class="service_wechat"><a href="javascript:void(0);">微信</a></li>
						<li class="service_weibo"><a href="http://e.weibo.com/vivomobile" target="_blank">微博</a></li>
					</ul>
					<h2>24小时售后服务热线 :400-888-9688</h2>
				</div>
				<div class="vivo-weixin-overbox"><img src="$_G['style']['styleimgdir']/vivo-weixin-ico.jpg"><b></b></div>
			</div>
			<!--[diy=top_right]-->
			<div id="top_right" class="area"></div>
			<!--[/diy]-->
		</div>
	</div>
	<!--[diy=diy_bottom]-->
	<div id="diy_bottom" class="area"></div>
	<!--[/diy]-->
</div>



<!--{template common/footer}-->


