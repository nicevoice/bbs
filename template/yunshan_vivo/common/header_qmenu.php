<?php exit('Desgin By http://addon.discuz.com/?@51353.developer Access Denied ');?>
<div id="qmenu_menu" class="p_pop {if !$_G['uid']}blk{/if}" style="display: none;">
	<!--{subtemplate common/header_userstatus}-->
	<!--{hook/global_qmenu_top}-->
	<!--{if $_G['uid']}-->
		<ul class="cl nav">
			<li><a id="friendnav" href="home.php?mod=space&do=friend">好友</a></li>
			<li><a id="favoritenav" href="home.php?mod=space&do=favorite&view=me">收藏</a></li>
			<li><a id="medalnav" href="home.php?mod=medal">勋章</a></li>
			<li><a id="tasknav" href="home.php?mod=task">任务<!--{if $_G['setting']['taskon'] && !empty($_G['cookie']['taskdoing_'.$_G['uid']])}--><i>N</i>{/if}</a></li>
			<li><a id="threadnav" href="home.php?mod=space&do=thread&view=me">帖子</a></li>
			<li><a id="exchangenav" href="#">礼品兑换</a></li>
			<li><a id="ranklistnav" href="misc.php?mod=ranklist">排行榜</a></li>
			<li><a id="productsnav" href="#">产品注册</a></li>
			<li><a id="pm_ntcnav" href="home.php?mod=space&do=pm">{lang pm_center}{if $_G[member][newpm]}<i>N</i>{/if}</a></li>
			<li><a id="mypromptnav" href="home.php?mod=space&do=notice">{lang remind}<!--{if $_G[member][newprompt]}--><i>$_G[member][newprompt]</i><!--{/if}--></a></li>
			<li><a id="setupnav" href="home.php?mod=spacecp">{lang setup}</a></li>
			<li><a id="logoutnav" href="member.php?mod=logging&action=logout">{lang logout}</a></li>
			<!--{if check_diy_perm($topic)}--><li><a id="diynav" href="javascript:saveUserdata('diy_advance_mode', '');openDiy();" alt="DIY">DIY</a></li><!--{/if}-->
			<!--{if ($_G['group']['allowmanagearticle'] || $_G['group']['allowpostarticle'] || $_G['group']['allowdiy'] || getstatus($_G['member']['allowadmincp'], 4) || getstatus($_G['member']['allowadmincp'], 6) || getstatus($_G['member']['allowadmincp'], 2) || getstatus($_G['member']['allowadmincp'], 3))}--><li><a id="portalcpnav" href="portal.php?mod=portalcp"><!--{if $_G['setting']['portalstatus'] }-->{lang portal_manage}<!--{else}-->{lang portal_block_manage}<!--{/if}--></a></li><!--{/if}-->
			<!--{if $_G['uid'] && $_G['group']['radminid'] > 1}--><li><a id="modcpnav" href="forum.php?mod=modcp&fid=$_G[fid]" target="_blank">{lang forum_manager}</a></li><!--{/if}-->
			<!--{if $_G['uid'] && getstatus($_G['member']['allowadmincp'], 1)}--><li><a id="admincpnav" href="admin.php" target="_blank">{lang admincp}</a></li><!--{/if}-->
		</ul>
	<!--{elseif $_G[connectguest]}-->
		<div class="ptm pbw hm">
			{lang connect_fill_profile_to_visit}
		</div>
	<!--{else}-->
		<div class="ptm pbw hm">
			{lang my_nav_login}
		</div>
	<!--{/if}-->

	<!--{hook/global_qmenu_bottom}-->
</div>
