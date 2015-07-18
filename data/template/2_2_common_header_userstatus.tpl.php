<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); ?>
<style type="text/css">
.deanlogin .pipe{ display:none;} 
.deanlogin dl a{ padding:0;}
</style>
<div class="deanlogin">                 
        <?php if($_G['uid']) { ?>
        <?php if(!empty($_G['setting']['pluginhooks']['global_usernav_extra1'])) echo $_G['setting']['pluginhooks']['global_usernav_extra1'];?>
            <?php if(!empty($_G['setting']['pluginhooks']['global_usernav_extra2'])) echo $_G['setting']['pluginhooks']['global_usernav_extra2'];?>
                    <?php if(!empty($_G['setting']['pluginhooks']['global_usernav_extra3'])) echo $_G['setting']['pluginhooks']['global_usernav_extra3'];?>
        <div class="allmember" style="float:right; position:relative;line-height: 25px;">
        	<div class="deantongzhi"><a href="home.php?mod=space&amp;do=notice" id="myprompt"<?php if($_G['member']['newprompt']) { ?> class="new"<?php } ?>>提醒<?php if($_G['member']['newprompt']) { ?><span><?php echo $_G['member']['newprompt'];?></span><?php } ?></a></div>
            <div class="deantongzhi" style="margin-right:45px;"><a href="home.php?mod=space&amp;do=pm" id="pm_ntc"<?php if($_G['member']['newpm']) { ?> class="new"<?php } ?>>消息</a></div>
            <div class="clear"></div>
            <div id="deanmemberinfo"><span><a class="deanvwmy" href="home.php?mod=space&amp;uid=<?php echo $_G['uid'];?>" target="_blank" title="访问我的空间"><?php echo avatar($_G[uid],small);?></a></span><div class="clear"></div></div>
        <div class="clear"></div>
            <div id="deanmembercontent">
                <dl>
                    
                    <dd><a class="deanadmin" href="home.php?mod=space&amp;uid=<?php echo $_G['uid'];?>" target="_blank" title="访问我的空间"><?php echo $_G['member']['username'];?></a></dd>
                    <dd><div class="loginout"><a href="member.php?mod=logging&amp;action=logout&amp;formhash=<?php echo FORMHASH;?>">退出</a></div></dd>
                   <dd><?php if(!empty($_G['setting']['pluginhooks']['global_usernav_extra4'])) echo $_G['setting']['pluginhooks']['global_usernav_extra4'];?><a href="home.php?mod=spacecp">设置</a></dd>
                   <dd><?php if($_G['setting']['taskon'] && !empty($_G['cookie']['taskdoing_'.$_G['uid']])) { ?><a href="home.php?mod=task&amp;item=doing" id="task_ntc" class="new">进行中的任务</a><?php } ?></dd>
                    <?php if(($_G['group']['allowmanagearticle'] || $_G['group']['allowpostarticle'] || $_G['group']['allowdiy'] || getstatus($_G['member']['allowadmincp'], 4) || getstatus($_G['member']['allowadmincp'], 6) || getstatus($_G['member']['allowadmincp'], 2) || getstatus($_G['member']['allowadmincp'], 3))) { ?>
                       <dd><a href="portal.php?mod=portalcp"><?php if($_G['setting']['portalstatus'] ) { ?>门户管理<?php } else { ?>模块管理<?php } ?></a></dd>
                    <?php } ?>
                    <?php if($_G['uid'] && $_G['group']['radminid'] > 1) { ?>
                       <dd><a href="forum.php?mod=modcp&amp;fid=<?php echo $_G['fid'];?>" target="_blank"><?php echo $_G['setting']['navs']['2']['navname'];?>管理</a></dd>
                    <?php } ?>
                    <?php if($_G['uid'] && $_G['adminid'] == 1 && $_G['setting']['cloud_status']) { ?>
                        <dd><a href="admin.php?frames=yes&amp;action=cloud&amp;operation=applist" target="_blank">云平台</a></dd>
                    <?php } ?>
                    <?php if($_G['uid'] && getstatus($_G['member']['allowadmincp'], 1)) { ?>
                      <dd><a href="admin.php" target="_blank">管理中心</a></dd>
                    <?php } ?>
                    
                    <?php $upgradecredit = $_G['uid'] && $_G['group']['grouptype'] == 'member' && $_G['group']['groupcreditslower'] != 999999999 ? $_G['group']['groupcreditslower'] - $_G['member']['credits'] : false;?>                    <dd><a href="home.php?mod=spacecp&amp;ac=usergroup"<?php if($upgradecredit !== 'false') { ?> id="g_upmine" class="xi2"<?php } ?>><?php echo $_G['group']['grouptitle'];?></a></dd>
                </dl>
            </div>
            <script type="text/javascript">
                jq("#deanmemberinfo").hover(
                    function(){
                        jq(this).siblings("#deanmembercontent").show();
                        },
                    function(){
                        jq(this).siblings("#deanmembercontent").hide();
                        })
                jq("#deanmembercontent").hover(
                    function(){
                        jq(this).show();
                        jq(this).siblings("#deanmemberinfo").addClass("curs");
                        },
                    function(){
                        jq(this).hide();
                        jq(this).siblings("#deanmemberinfo").removeClass("curs");
                        })
            </script>
        </div>
   <ul>
     <?php } elseif(!empty($_G['cookie']['loginuser'])) { ?>
        <li><a id="loginuser" class="noborder"><?php echo dhtmlspecialchars($_G['cookie']['loginuser']); ?></a></li>
        <li><a href="member.php?mod=logging&amp;action=login" onClick="showWindow('login', this.href)">激活</a></li>
        <li><a href="member.php?mod=logging&amp;action=logout&amp;formhash=<?php echo FORMHASH;?>">退出</a></li>
    <?php } elseif(!$_G['connectguest']) { ?>
    <style tpye="text/css">
    	
    </style>
    	 <div class="deandenglu">
            <ul>
                <li><a href="member.php?mod=logging&amp;action=login" onclick="showWindow('login', this.href)">登陆</a></li>
                <li><a href="member.php?mod=<?php echo $_G['setting']['regname'];?>">注册</a></li>
                <div class="clear"></div>
            </ul>
        </div>
                    
     <?php } else { ?>
        <div id="um">
        	<dl>
                <dd class="vwmy qq"><?php echo $_G['member']['username'];?></dd>
                <dd><?php if(!empty($_G['setting']['pluginhooks']['global_usernav_extra1'])) echo $_G['setting']['pluginhooks']['global_usernav_extra1'];?></dd>
                <dd><a href="member.php?mod=logging&amp;action=logout&amp;formhash=<?php echo FORMHASH;?>">退出</a></dd>
                <dd><a href="home.php?mod=spacecp&amp;ac=credit&amp;showcredit=1">积分: 0</a></dd>
                <dd>用户组: <?php echo $_G['group']['grouptitle'];?></li>
            </dl>
        </div>
        <?php } ?>
    </ul>
</div>