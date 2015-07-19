<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); hookscriptoutput('index');
block_get('18,19,20,21,22,28,29,23,24,25,26,27');?><?php include template('common/header'); ?><style id="diy_style" type="text/css"></style>
<div class="banner_bg cl">
<div class="banner_box">
<!--[diy=diy_topfocus]--><div id="diy_topfocus" class="area"><div id="frameobzao2" class="frame move-span cl frame-1"><div id="frameobzao2_left" class="column frame-1-c"><div id="frameobzao2_left_temp" class="move-span temp"></div><?php block_display('18');?></div></div></div><!--[/diy]-->
</div>
</div>
<div class="wp cl">
<div class="diy_top cl">
<!--[diy=top_left]--><div id="top_left" class="area"><div id="framea1E21a" class="xfs xfs_nbd frame move-span cl frame-1"><div id="framea1E21a_left" class="column frame-1-c"><div id="framea1E21a_left_temp" class="move-span temp"></div><?php block_display('19');?><?php block_display('20');?></div></div><div id="frameyRb0Tx" class="xfs xfs_nbd frame move-span cl frame-1"><div class="title frame-title"><span class="titletext">V粉评测</span></div><div id="frameyRb0Tx_left" class="column frame-1-c"><div id="frameyRb0Tx_left_temp" class="move-span temp"></div><?php block_display('21');?><?php block_display('22');?></div></div></div><!--[/diy]-->
<div class="top_right">
<?php if($_G['setting']['search'] && $_G['setting']['srchhotkeywords']) { ?>
<div id="srchhot" class="sd_box bm">
<div class="bm_h cl">
<h1 class="xw1">热门标签</h1>
</div>
<div class="bm_c"><?php $i=1;?><?php if(is_array($_G['setting']['srchhotkeywords'])) foreach($_G['setting']['srchhotkeywords'] as $val) { if(($val=trim($val)) && $i < 16) { $valenc=rawurlencode($val);?><?php
$__FORMHASH = FORMHASH;$srchhotkeywords[] = <<<EOF


EOF;
 if(!empty($searchparams['url'])) { 
$srchhotkeywords[] .= <<<EOF

<a href="{$searchparams['url']}?q={$valenc}&source=hotsearch{$srchotquery}" target="_blank" class="keyword{$i}" sc="1">{$val}</a>

EOF;
 } else { 
$srchhotkeywords[] .= <<<EOF

<a href="search.php?mod=forum&amp;srchtxt={$valenc}&amp;formhash={$__FORMHASH}&amp;searchsubmit=true&amp;source=hotsearch" target="_blank" class="keyword{$i}" sc="1">{$val}</a>

EOF;
 } 
$srchhotkeywords[] .= <<<EOF


EOF;
?><?php $i++;?><?php } } echo implode('', $srchhotkeywords);; ?></div>
</div>
<?php } ?>
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
<div class="vivo-weixin-overbox"><img src="<?php echo $_G['style']['styleimgdir'];?>/vivo-weixin-ico.jpg"><b></b></div>
</div>
<!--[diy=top_right]--><div id="top_right" class="area"><div id="frameWUwQVE" class="cl_frame_bm frame move-span cl frame-1"><div id="frameWUwQVE_left" class="column frame-1-c"><div id="frameWUwQVE_left_temp" class="move-span temp"></div><?php block_display('28');?><?php block_display('29');?></div></div></div><!--[/diy]-->
</div>
</div>
<!--[diy=diy_bottom]--><div id="diy_bottom" class="area"><div id="framea6Qi43" class="xfs xfs_nbd frame move-span cl frame-1"><div class="title frame-title"><span class="titletext">手机摄影</span></div><div id="framea6Qi43_left" class="column frame-1-c"><div id="framea6Qi43_left_temp" class="move-span temp"></div><?php block_display('23');?><?php block_display('24');?><?php block_display('25');?><?php block_display('26');?><?php block_display('27');?></div></div></div><!--[/diy]-->
</div><?php include template('common/footer'); ?>