<?php exit('Desgin By http://addon.discuz.com/?@51353.developer Access Denied ');?>
<!--{if $_G['uid']}-->
<div id="um" class="cl">
	<div class="avt"><a href="home.php?mod=space&uid=$_G[uid]" target="_blank" title="{lang visit_my_space}"><!--{avatar($_G[uid],middle)}--></a></div>
	<p>
		<a id="username" href="home.php?mod=space&uid=$_G[uid]" target="_blank" title="{lang visit_my_space}" class="vip">{$_G[member][username]}</a>
	</p>
	<p>
		<a href="home.php?mod=spacecp&ac=credit&showcredit=1" id="extcreditmenu"><span>{lang credits}: </span>$_G[member][credits]</a>
		<span class="pipe">|</span><a href="home.php?mod=spacecp&ac=usergroup" id="g_upmine"><span>{lang usergroup}:</span> $_G[group][grouptitle]<!--{if $_G[member]['freeze']}--><span class="xi1">({lang freeze})</span><!--{/if}--></a>
	</p>
</div>
<!--{/if}-->

