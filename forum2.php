<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>文玩论坛</title>
	<base href=".">
	<link rel="stylesheet" type="text/css" href="./css/style_1_common.css">
	<link rel="stylesheet" type="text/css" href="./css/style_1_forum_viewthread.css">
	<link rel="stylesheet" id="css_extstyle" type="text/css" href="./css/style.css">
	<style type="text/css" adt="123"></style>
	<style type="text/css">object,embed{                -webkit-animation-duration:.001s;-webkit-animation-name:playerInserted;                -ms-animation-duration:.001s;-ms-animation-name:playerInserted;                -o-animation-duration:.001s;-o-animation-name:playerInserted;                animation-duration:.001s;animation-name:playerInserted;}                @-webkit-keyframes playerInserted{from{opacity:0.99;}to{opacity:1;}}                @-ms-keyframes playerInserted{from{opacity:0.99;}to{opacity:1;}}                @-o-keyframes playerInserted{from{opacity:0.99;}to{opacity:1;}}                @keyframes playerInserted{from{opacity:0.99;}to{opacity:1;}}</style>
</head>
<body id="nv_forum" class="pg_viewthread" onkeydown="if(event.keyCode==27) return false;">
<div id="append_parent"><div id="ls_fastloginfield_ctrl_menu" class="sltm" style="display: none; width: 40px;"><ul><li class="current">用户名</li><li>Email</li></ul></div></div><div id="ajaxwaitid"></div>

<div id="toptb" class="cl">
<div class="wp">
<div class="z"><a href="javascript:;" onclick="setHomepage('#;);">设为首页</a><a href="#" onclick="addFavorite(this.href, '文玩论坛');return false;">收藏本站</a></div>
<div class="y">
<a href="javascript:;" onclick="widthauto(this)">切换到宽版</a>
</div>
</div>
</div>


<div id="qmenu_menu" class="p_pop blk" style="display: none;">
<div class="ptm pbw hm">
请 <a href="javascript:;" class="xi2" onclick="lsSubmit()"><strong>登录</strong></a> 后使用快捷导航<br>没有帐号？<a href="http://bbs.netbig.com/member.php?mod=register.php" class="xi2 xw1">注册</a>
</div>
</div>
<div id="hd">
<div class="wp">
<div class="hdc cl"><h2><a href="#" title="文玩论坛"><img src="./img/logo.png" alt="网大论坛" border="0"></a></h2>

<script src="./2_files/logging.js.download" type="text/javascript"></script>
<form method="post" autocomplete="off" id="lsform" action="logincheck3.php">
<div class="fastlg cl">
<span id="return_ls" style="display:none"></span>
<div class="y pns">
				<?php if(empty($_SESSION['user'])){
				?>
<table cellspacing="0" cellpadding="0">
<tbody><tr>
<td>
<span class="ftid">
<select name="fastloginfield" id="ls_fastloginfield" width="40" tabindex="900" selecti="0" style="display: none;">

<!--option value="uid">UID</option-->

<option value="username"></option></select><a href="javascript:;" id="ls_fastloginfield_ctrl" style="width:40px" tabindex="900">用户名</a>
</span>
<script type="text/javascript">simulateSelect('ls_fastloginfield')</script>
</td>
<td><input type="text" name="username" id="ls_username" autocomplete="off" class="px vm" tabindex="901"></td>
<td class="fastlg_l"><button type="button" class="pn vm" tabindex="904" style="width: 75px;" onclick="javascript:window.location.href='register.php?url=forum2.html'"><em>注册</em></button></td>
</tr>
<tr>
<td><label for="ls_password" class="z psw_w">密码</label></td>
<td><input type="password" name="password" id="ls_password" class="px vm" autocomplete="off" tabindex="902"></td>
<td class="fastlg_l">
	<button type="submit" class="pn vm" tabindex="904" style="width: 75px;"><em>登录</em></button></td>
</tr>
</tbody>
</table>
			<?php
		}
		else{?>
					<table cellspacing="0" cellpadding="0">
				<tr>
				<td class="fastlg_l"><button type="button" class="pn vm" tabindex="904" style="width: 75px;"><em><?php echo $_SESSION['user'];?></em></button></td>
				<td class="fastlg_l"><button type="button" class="pn vm" tabindex="904" style="width: 75px;" onclick="javascript:window.location.href='logout3.php'"><em>退出登录</em></button></td>
				<!--<td>&nbsp;<a href="member.php?mod=register.php" class="xi2 xw1">注册</a></td>-->
				</tr>
			</table>
			<?php
		}
		?>
<input type="hidden" name="quickforward" value="yes">
<input type="hidden" name="handlekey" value="ls">
</div>


</div>
</form>
</div>

<div id="nv">
<a href="javascript:;" id="qmenu" onmouseover="showMenu({'ctrlid':'qmenu','pos':'34!','ctrlclass':'a','duration':2});">快捷导航</a>
<ul><li class="a" id="mn_forum"><a href="#" hidefocus="true" title="BBS">论坛<span>BBS</span></a></li></ul>
</div>
<ul class="p_pop h_pop" id="plugin_menu" style="display: none">  <li><a id="mn_plink_desktopshotcut_7ree" href="http://bbs.netbig.com/plugin.php?id=toplist_7ree:desktopshotcut_7ree">下载桌面快捷访问</a></li>
 </ul>
<div id="mu" class="cl">
</div>
<script type="text/javascript">
</script>
<div style="margin-top:5px;"><div class="a_mu"><a href="http://www.uiowa.edu.hk/dm/reply.htm" target="_blank"></a></div><div><div id="scbar" class="cl"><form id="scbar_form" method="get" autocomplete="off" onsubmit="searchFocus($('scbar_txt'))" action="http://search.discuz.qq.com/f/discuz" target="_blank">
<input type="hidden" name="mod" id="scbar_mod" value="curforum">
<input type="hidden" name="formhash" value="5f62da56">
<input type="hidden" name="srchtype" value="title">
<input type="hidden" name="srhfid" value="101" id="dzsearchforumid">
<input type="hidden" name="srhlocality" value="forum::viewthread">
<input type="hidden" name="sId" value="7472539">
<input type="hidden" name="ts" value="1494165034">
<input type="hidden" name="cuId" value="0">
<input type="hidden" name="cuName" value="">
<input type="hidden" name="gId" value="7">
<input type="hidden" name="agId" value="0">
<input type="hidden" name="egIds" value="">
<input type="hidden" name="fmSign" value="">
<input type="hidden" name="ugSign7" value="">
<input type="hidden" name="sign" value="d0dc7a9eb29b4592cb2200f5a3714f00">
<input type="hidden" name="charset" value="utf-8">
<input type="hidden" name="source" value="discuz">
<input type="hidden" name="fId" value="101" id="cloudsearchforumId">
<input type="hidden" name="q" id="cloudsearchquery" value="">
<table cellspacing="0" cellpadding="0">
<tbody><tr>
<td class="scbar_icon_td"></td>
<td class="scbar_txt_td"><input type="text" name="srchtxt" id="scbar_txt" value="请输入搜索内容" autocomplete="off" class=" xg1"></td>
<td class="scbar_type_td"><a href="javascript:;" id="scbar_type" class="showmenu xg1 xs2" onclick="showMenu(this.id)" hidefocus="true">本版</a></td>
<td class="scbar_btn_td"><button type="submit" name="searchsubmit" id="scbar_btn" class="pn pnc" value="true"><strong class="xi2 xs2">搜索</strong></button></td>
<td class="scbar_hot_td">
<div id="scbar_hot">
<strong class="xw1">热搜: </strong>

<a href="#" target="_blank" class="xi2">核桃</a>
<a href="#" target="_blank" class="xi2">核桃</a>
<a href="#" target="_blank" class="xi2">核桃</a>
<a href="#" target="_blank" class="xi2">核桃</a>
<a href="#" target="_blank" class="xi2">核桃</a>
<a href="#" target="_blank" class="xi2">核桃</a>
<a href="#" target="_blank" class="xi2">核桃</a>
<a href="#" target="_blank" class="xi2">核桃</a>
<a href="#" target="_blank" class="xi2">核桃</a>
<a href="#" target="_blank" class="xi2">核桃</a>
<a href="#" target="_blank" class="xi2">核桃</a>
<a href="#" target="_blank" class="xi2">核桃</a>
<a href="#" target="_blank" class="xi2">核桃</a>
<a href="#" target="_blank" class="xi2">核桃</a>
<a href="#" target="_blank" class="xi2">核桃</a>

</div>
</td>
</tr>
</tbody></table>
</form>
</div>
<ul id="scbar_type_menu" class="p_pop" style="display: none;"><li><a href="javascript:;" rel="curforum" class="curtype">本版</a></li><li><a href="javascript:;" rel="forum">帖子</a></li><li><a href="javascript:;" rel="user">用户</a></li></ul>
<script type="text/javascript">
initSearchmenu('scbar', 'http://search.discuz.qq.com/f/discuz');
</script>
</div>
</div>


<div id="wp" class="wp"><script type="text/javascript">var fid = parseInt('101'), tid = parseInt('2774651');</script>

<script src="./2_files/forum_viewthread.js.download" type="text/javascript"></script>
<script type="text/javascript">zoomstatus = parseInt(1);var imagemaxwidth = '800';var aimgcount = new Array();</script>

<style id="diy_style" type="text/css"></style>
<!--[diy=diynavtop]--><div id="diynavtop" class="area"></div><!--[/diy]-->
<div id="pt" class="bm cl">
<div class="z">
	<a href="#" class="nvhm" title="首页">文玩论坛</a> <em>›</em> <a href="#">论坛</a><em>›</em> <a href="#">【开盘记录】新弄个36的白狮子，练练手</a>
</div>
</div>

<style id="diy_style" type="text/css"></style>
<div class="wp">
<!--[diy=diy1]--><div id="diy1" class="area"></div><!--[/diy]-->
</div>

<div id="ct" class="wp cl">
<div id="pgt" class="pgs mbm cl ">
<div class="pgt"><div class="pg"><strong>1</strong><a href="#" class="nxt">下一页</a></div></div>
<span class="y pgb"><a href="#">返回列表</a></span>
<a id="newspecial" onmouseover="$('newspecial').id = 'newspecialtmp';this.id = 'newspecial';showMenu({'ctrlid':this.id})" onclick="showWindow('newthread', 'forum.php?mod=post&amp;action=newthread&amp;fid=101')" href="editor.php" title="发新帖"><img src="./img/pn_post.png" alt="发新帖"></a></div>



<div id="postlist" class="pl bm">
	<table cellspacing="0" cellpadding="0">
		<tbody><tr>
			<td class="pls ptm pbm">
				<div class="hm">
					<span class="xg1">查看:</span> <span class="xi1">2367</span><span class="pipe">|</span><span class="xg1">回复:</span> <span class="xi1">2</span>
				</div>
			</td>
			<td class="plc ptm pbn">
				<div class="y">
					<a href="http://bbs.netbig.com/forum.php?mod=viewthread&amp;action=printable&amp;tid=2774651" title="打印" target="_blank"><img src="./img/print.png" alt="打印" class="vm"></a>
					<a href="http://bbs.netbig.com/forum.php?mod=redirect&amp;goto=nextoldset&amp;tid=2774651" title="上一主题"><img src="./img/thread-prev.png" alt="上一主题" class="vm"></a>
					<a href="http://bbs.netbig.com/forum.php?mod=redirect&amp;goto=nextnewset&amp;tid=2774651" title="下一主题"><img src="./img/thread-next.png" alt="下一主题" class="vm"></a>
				</div>
				<h1 class="ts">
					<a href="http://bbs.netbig.com/thread-2774651-1-1.html" id="thread_subject">【开盘记录】新弄个36的白狮子，练练手</a>
					<span class="xw0 xs1 xg1">
						<a href="http://bbs.netbig.com/thread-2774651-1-1.html" onclick="return copyThreadUrl(this)" title="您的朋友访问此链接后，您将获得相应的积分奖励">[复制链接]</a>
					</span>
				</h1>
			</td>
		</tr>
		</tbody>
	</table>


<table cellspacing="0" cellpadding="0" class="ad"><tbody><tr><td class="pls"></td><td class="plc"></td></tr></tbody></table><div id="post_3665519"><table id="pid3665519" summary="pid3665519" cellspacing="0" cellpadding="0">
<tbody><tr>
<td class="pls" rowspan="2">
 <div class="pi">
<div class="authi"><a href="#" target="_blank" class="xw1">四王府</a>

</div>
</div>
<div class="p_pop blk bui" id="userinfo3665519" style="display: none; margin-top: -11px;">
<div class="m z">
<div id="userinfo3665519_ma"></div>
</div>
<div class="i y">
<div>
<strong><a href="#" target="_blank" class="xi2">四王府</a></strong>
<em>当前在线</em>
</div>
<dl class="cl"><dt>最后登录</dt><dd>2017-5-7</dd><dt>在线时间</dt><dd>1385 小时</dd><dt>荣誉</dt><dd>5 星</dd><dt>注册时间</dt><dd>2016-2-1</dd><dt>积分</dt><dd>3876</dd><dt>帖子</dt><dd><a href="http://bbs.netbig.com/home.php?mod=space&amp;uid=2472234&amp;do=thread&amp;type=reply&amp;view=me&amp;from=space" target="_blank" class="xi2">3316</a></dd><dt>主题</dt><dd><a href="http://bbs.netbig.com/home.php?mod=space&amp;uid=2472234&amp;do=thread&amp;type=thread&amp;view=me&amp;from=space" target="_blank" class="xi2">269</a></dd><dt>精华</dt><dd>1</dd><dt>UID</dt><dd>2472234</dd></dl>
<div class="imicn">
<a href="#" target="_blank" title="查看详细资料"><img src="./2_files/userinfo.gif" alt="查看详细资料"></a>
</div>
<div id="avatarfeed"><span id="threadsortswait"></span></div>
</div>
</div>
<div>
<div class="avatar" onmouseover="showauthor(this, 'userinfo3665519')"><a href="http://bbs.netbig.com/space-uid-2472234.html" target="_blank"><img src="./img/noavatar_middle.gif"></a></div>
<p><em><a href="#" target="_blank">本站元老</a></em></p>
</div>
<p id="g_up3665519" onmouseover="showMenu({'ctrlid':this.id, 'pos':'12!'});"><img src="./img/star_level3.gif" alt="Rank: 12"><img src="./img/star_level3.gif" alt="Rank: 12"><img src="./img/star_level3.gif" alt="Rank: 12"></p>
<div id="g_up3665519_menu" class="tip tip_4" style="display: none;">
<div class="tip_horn"></div>
<div class="tip_c">本站元老, 积分 3876, 距离下一级还需 2124 积分</div>
</div>
<dl class="pil cl"><dt>精华</dt><dd>99 </dd><dt>积分</dt><dd>3876</dd></dl><ul class="xl xl2 o cl">
<li class="callon"><a href="http://bbs.netbig.com/space-uid-2472234.html" target="_blank" title="串个门" class="xi2">串个门</a></li>
<li class="buddy"><a href="http://bbs.netbig.com/home.php?mod=spacecp&amp;ac=friend&amp;op=add&amp;uid=2472234&amp;handlekey=addfriendhk_2472234" id="a_friend_li_3665519" onclick="showWindow(this.id, this.href, 'get', 1, {'ctrlid':this.id,'pos':'00'});" title="加好友" class="xi2">加好友</a></li>
<li class="poke2"><a href="http://bbs.netbig.com/home.php?mod=spacecp&amp;ac=poke&amp;op=send&amp;uid=2472234" id="a_poke_li_3665519" onclick="showWindow(this.id, this.href, 'get', 0);" title="打招呼" class="xi2">打招呼</a></li>
<li class="pm2"><a href="http://bbs.netbig.com/home.php?mod=spacecp&amp;ac=pm&amp;op=showmsg&amp;handlekey=showmsg_2472234&amp;touid=2472234&amp;pmid=0&amp;daterange=2&amp;pid=3665519&amp;tid=2774651" onclick="showWindow('sendpm', this.href);" title="发消息" class="xi2">发消息</a></li>
</ul>
</td>
<td class="plc">
<div class="pi">
<div id="fj" class="y">
<label class="z">电梯直达</label>
<input type="text" class="px p_fre z" size="2" onkeyup="$('fj_btn').href='forum.php?mod=redirect&amp;ptid=2774651&amp;authorid=0&amp;postno='+this.value" onkeydown="if(event.keyCode==13) {window.location=$('fj_btn').href;return false;}" title="跳转到指定楼层">
<a href="javascript:;" id="fj_btn" class="z" title="跳转到指定楼层"><img src="./img/fj_btn.png" alt="跳转到指定楼层" class="vm"></a>
</div>
<strong>
<a href="http://bbs.netbig.com/thread-2774651-1-1.html" title="您的朋友访问此链接后，您将获得相应的积分奖励" id="postnum3665519" onclick="setCopy(this.href, '帖子地址复制成功');return false;"><em>1</em><sup>#</sup></a>
</strong>
<div class="pti">
<div class="pdbt">
</div>
<div class="authi">
<img class="authicn vm" id="authicon3665519" src="./img/online_member.gif">
<em id="authorposton3665519">发表于 <span title="2017-5-7 07:23:20">14&nbsp;小时前</span></em>
<span class="xg1">来自手机</span>
<span class="pipe">|</span><a href="http://bbs.netbig.com/forum.php?mod=viewthread&amp;tid=2774651&amp;page=1&amp;authorid=2472234" rel="nofollow">只看该作者</a>
<span class="pipe">|</span><a href="http://bbs.netbig.com/forum.php?mod=viewthread&amp;tid=2774651&amp;extra=page%3D1&amp;ordertype=1">倒序浏览</a>
</div>
</div>
</div><div class="pct"><style type="text/css">.pcb{margin-right:0}</style><div class="pcb">
<div class="t_fsz">
<table cellspacing="0" cellpadding="0"><tbody><tr><td class="t_f" id="postmessage_3665519">
<i class="pstatus"> 本帖最后由 四王府 于 2017-5-7 07:24 编辑 </i><br>
<br>
手小，只能买小号的，大小刚刚好。<br>
小狮子练手非常好<br>
<img src="./img/112642qurrnm76u97pkxey.jpg">
</td></tr></tbody></table>
</div>
<div id="comment_3665519" class="cm">
</div>

<div id="relate_subject"></div>
<div id="post_rate_div_3665519"></div>
</div></div>

</td></tr>
<tr><td class="plc plm">
<div id="p_btn" class="mtw mbm cl">
<div class="tshare cl">
<strong>分享到:</strong>


<a href="javascript:void(0);" id="k_qqshare" onclick="postToQzone();" title="QQ空间"><i><img src="./img/qzone.gif" alt="QQ空间">QQ空间</i></a>
<a href="javascript:void(0)" onclick="postToWb();" id="k_weiboshare" title="腾讯微博"><i><img src="./img/weibo.png" alt="腾讯微博">腾讯微博</i></a>
<a href="javascript:void(0);" onclick="postToPengyou();" id="k_pengyoushare" title="腾讯朋友"><i><img src="./img/pengyou.png" alt="腾讯朋友">腾讯朋友</i></a>

</div>
<a href="http://bbs.netbig.com/home.php?mod=spacecp&amp;ac=favorite&amp;type=thread&amp;id=2774651" id="k_favorite" onclick="showWindow(this.id, this.href, 'get', 0);" onmouseover="this.title = $('favoritenumber').innerHTML + ' 人收藏'"><i><img src="./img/fav.gif" alt="收藏">收藏<span id="favoritenumber">0</span></i></a>
</div>
</td>
</tr>
<tr>
<td class="pls"></td>
<td class="plc">
<div class="po">
<div class="pob cl">
<em>
</em>

<p>
<a href="javascript:;" id="mgc_post_3665519" onmouseover="showMenu(this.id)" class="showmenu">使用道具</a>
<a href="javascript:;" onclick="showWindow('miscreport3665519', 'misc.php?mod=report&amp;rtype=post&amp;rid=3665519&amp;tid=2774651&amp;fid=101', 'get', -1);return false;">举报</a>
</p>

<ul id="mgc_post_3665519_menu" class="p_pop mgcmn" style="display: none;">
<li><a href="http://bbs.netbig.com/home.php?mod=magic&amp;mid=bump&amp;idtype=tid&amp;id=2774651" id="a_bump" onclick="showWindow(this.id, this.href)"><img src="./2_files/bump.small.gif">提升卡</a></li>
<li><a href="http://bbs.netbig.com/home.php?mod=magic&amp;mid=stick&amp;idtype=tid&amp;id=2774651" id="a_stick" onclick="showWindow(this.id, this.href)"><img src="./2_files/stick.small.gif">置顶卡</a></li>
<li><a href="http://bbs.netbig.com/home.php?mod=magic&amp;mid=highlight&amp;idtype=tid&amp;id=2774651" id="a_stick" onclick="showWindow(this.id, this.href)"><img src="./2_files/highlight.small.gif">变色卡</a></li>
<li><a href="http://bbs.netbig.com/home.php?mod=magic&amp;mid=sofa&amp;idtype=tid&amp;id=2774651" id="a_stick" onclick="showWindow(this.id, this.href)"><img src="./2_files/sofa.small.gif">抢沙发</a></li>
<li><a href="http://bbs.netbig.com/home.php?mod=magic&amp;mid=jack&amp;idtype=tid&amp;id=2774651" id="a_jack" onclick="showWindow(this.id, this.href)"><img src="./2_files/jack.small.gif">千斤顶</a></li>
</ul>
<script type="text/javascript" reload="1">checkmgcmn('post_3665519')</script>
</div>
</div>

</td>
</tr>
<tr class="ad">
<td class="pls"></td>
<td class="plc">
</td>
</tr>
</tbody></table>
</div><div id="post_3665529"><table id="pid3665529" summary="pid3665529" cellspacing="0" cellpadding="0">
<tbody><tr>
<td class="pls" rowspan="2">
 <div class="pi">
<div class="authi"><a href="http://bbs.netbig.com/space-uid-2311707.html" target="_blank" class="xw1">aqaz</a>

</div>
</div>
<div class="p_pop blk bui" id="userinfo3665529" style="display: none; margin-top: -11px;">
<div class="m z">
<div id="userinfo3665529_ma"></div>
</div>
<div class="i y">
<div>
<strong><a href="http://bbs.netbig.com/space-uid-2311707.html" target="_blank" class="xi2">aqaz</a></strong>
<em>当前在线</em>
</div>
<dl class="cl"><dt>最后登录</dt><dd>2017-5-7</dd><dt>在线时间</dt><dd>9745 小时</dd><dt>荣誉</dt><dd>0 星</dd><dt>注册时间</dt><dd>2009-10-4</dd><dt>积分</dt><dd>21233</dd><dt>帖子</dt><dd><a href="http://bbs.netbig.com/home.php?mod=space&amp;uid=2311707&amp;do=thread&amp;type=reply&amp;view=me&amp;from=space" target="_blank" class="xi2">4896</a></dd><dt>主题</dt><dd><a href="http://bbs.netbig.com/home.php?mod=space&amp;uid=2311707&amp;do=thread&amp;type=thread&amp;view=me&amp;from=space" target="_blank" class="xi2">518</a></dd><dt>精华</dt><dd>0</dd><dt>UID</dt><dd>2311707</dd></dl>
<div class="imicn">
<a href="http://bbs.netbig.com/home.php?mod=space&amp;uid=2311707&amp;do=profile" target="_blank" title="查看详细资料"><img src="./2_files/userinfo.gif" alt="查看详细资料"></a>
</div>
<div id="avatarfeed"><span id="threadsortswait"></span></div>
</div>
</div>
<div>
<div class="avatar" onmouseover="showauthor(this, 'userinfo3665529')"><a href="#" target="_blank"><img src="./img/noavatar_middle.gif"></a></div>
<p><em><a href="#" target="_blank">开国大老</a></em></p>
</div>
<p><img src="./img/star_level3.gif" alt="Rank: 13"><img src="./img/star_level3.gif" alt="Rank: 13"><img src="./img/star_level3.gif" alt="Rank: 13"><img src="./img/star_level1.gif" alt="Rank: 13"></p>
<dl class="pil cl"><dt>精华</dt><dd>1148 </dd><dt>积分</dt><dd>21233</dd></dl><ul class="xl xl2 o cl">
<li class="callon"><a href="#" target="_blank" title="串个门" class="xi2">串个门</a></li>
<li class="buddy"><a href="http://bbs.netbig.com/home.php?mod=spacecp&amp;ac=friend&amp;op=add&amp;uid=2311707&amp;handlekey=addfriendhk_2311707" id="a_friend_li_3665529" onclick="showWindow(this.id, this.href, 'get', 1, {'ctrlid':this.id,'pos':'00'});" title="加好友" class="xi2">加好友</a></li>
<li class="poke2"><a href="http://bbs.netbig.com/home.php?mod=spacecp&amp;ac=poke&amp;op=send&amp;uid=2311707" id="a_poke_li_3665529" onclick="showWindow(this.id, this.href, 'get', 0);" title="打招呼" class="xi2">打招呼</a></li>
<li class="pm2"><a href="http://bbs.netbig.com/home.php?mod=spacecp&amp;ac=pm&amp;op=showmsg&amp;handlekey=showmsg_2311707&amp;touid=2311707&amp;pmid=0&amp;daterange=2&amp;pid=3665529&amp;tid=2774651" onclick="showWindow('sendpm', this.href);" title="发消息" class="xi2">发消息</a></li>
</ul>
</td>
<td class="plc">
<div class="pi">
<strong>
<a href="http://bbs.netbig.com/forum.php?mod=redirect&amp;goto=findpost&amp;ptid=2774651&amp;pid=3665529" title="您的朋友访问此链接后，您将获得相应的积分奖励" id="postnum3665529" onclick="setCopy(this.href, '帖子地址复制成功');return false;"><em>2</em><sup>#</sup></a>
</strong>
<div class="pti">
<div class="pdbt">
</div>
<div class="authi">
<img class="authicn vm" id="authicon3665529" src="./img/online_member.gif">
<em id="authorposton3665529">发表于 <span title="2017-5-7 07:30:53">14&nbsp;小时前</span></em>
<span class="pipe">|</span><a href="http://bbs.netbig.com/forum.php?mod=viewthread&amp;tid=2774651&amp;page=1&amp;authorid=2311707" rel="nofollow">只看该作者</a>
</div>
</div>
</div><div class="pct"><div class="pcb">
<div class="t_fsz">
<table cellspacing="0" cellpadding="0"><tbody><tr><td class="t_f" id="postmessage_3665529">
小而精 不错的一对儿</td></tr></tbody></table>
</div>
<div id="comment_3665529" class="cm">
</div>
<div id="post_rate_div_3665529"></div>
</div></div>

</td></tr>
<tr><td class="plc plm">
</td>
</tr>
<tr>
<td class="pls"></td>
<td class="plc">
<div class="po">
<div class="pob cl">
<em>
</em>

<p>
<a href="javascript:;" id="mgc_post_3665529" onmouseover="showMenu(this.id)" class="showmenu" style="display: none;"></a>
<a href="javascript:;" onclick="showWindow('miscreport3665529', 'misc.php?mod=report&amp;rtype=post&amp;rid=3665529&amp;tid=2774651&amp;fid=101', 'get', -1);return false;">举报</a>
</p>

<ul id="mgc_post_3665529_menu" class="p_pop mgcmn" style="display: none;">
</ul>
<script type="text/javascript" reload="1">checkmgcmn('post_3665529')</script>
</div>
</div>

</td>
</tr>
<tr class="ad">
<td class="pls"></td>
<td class="plc">
</td>
</tr>
</tbody></table>
</div>
<div id="postlistreply" class="pl"><div id="post_new" class="viewthread_table" style="display: none"></div></div>
</div>


<form method="post" autocomplete="off" name="modactions" id="modactions">
<input type="hidden" name="formhash" value="5f62da56">
<input type="hidden" name="optgroup">
<input type="hidden" name="operation">
<input type="hidden" name="listextra" value="page%3D1">
<input type="hidden" name="page" value="1">
</form>


<div class="pgs mtm mbm cl">
<div class="pg"><strong>1</strong><a href="#" class="nxt">下一页</a></div><span class="pgb y"><a href="#">返回列表</a></span>
<a id="newspecialtmp" onmouseover="$('newspecial').id = 'newspecialtmp';this.id = 'newspecial';showMenu({'ctrlid':this.id})" onclick="showWindow('newthread', 'forum.php?mod=post&amp;action=newthread&amp;fid=101')" href="editor.php" title="发新帖"><img src="./img/pn_post.png" alt="发新帖"></a></div>

<!--[diy=diyfastposttop]--><div id="diyfastposttop" class="area"></div><!--[/diy]-->
<script type="text/javascript">
var postminchars = parseInt('10');
var postmaxchars = parseInt('900000');
var disablepostctrl = parseInt('0');
</script>

<div id="f_pst" class="pl bm bmw">
<form method="post" autocomplete="off" id="fastpostform" action="http://bbs.netbig.com/forum.php?mod=post&amp;action=reply&amp;fid=101&amp;tid=2774651&amp;extra=page%3D1&amp;replysubmit=yes&amp;infloat=yes&amp;handlekey=fastpost" onsubmit="return fastpostvalidate(this)">
<table cellspacing="0" cellpadding="0">
<tbody><tr>
<td class="pls">
</td>
<td class="plc">

<span id="fastpostreturn"></span>


<div class="cl">
<div id="fastsmiliesdiv" class="y"><div id="fastsmiliesdiv_data"><div id="fastsmilies"></div></div></div><div class="hasfsl" id="fastposteditor">
<div class="tedt mtn">
<div class="bar">
<span class="y">
<a href="http://bbs.netbig.com/forum.php?mod=post&amp;action=reply&amp;fid=101&amp;tid=2774651" onclick="return switchAdvanceMode(this.href)">高级模式</a>
</span><script src="./2_files/seditor.js.download" type="text/javascript"></script>
<div class="fpd">
<a href="javascript:;" title="文字加粗" class="fbld">B</a>
<a href="javascript:;" title="设置文字颜色" class="fclr" id="fastpostforecolor">Color</a>
<a id="fastpostimg" href="javascript:;" title="图片" class="fmg">Image</a>
<a id="fastposturl" href="javascript:;" title="添加链接" class="flnk">Link</a>
<a id="fastpostquote" href="javascript:;" title="引用" class="fqt">Quote</a>
<a id="fastpostcode" href="javascript:;" title="代码" class="fcd">Code</a>
<a href="javascript:;" class="fsml" id="fastpostsml">Smilies</a>
</div></div>
<div class="area">
<div class="pt hm">您需要登录后才可以回帖 <a href="http://bbs.netbig.com/member.php?mod=logging&amp;action=login" onclick="showWindow('login', this.href)" class="xi2">登录</a> | <a href="#" class="xi2">注册</a>
<a href="http://bbs.netbig.com/connect.php?mod=login&amp;op=init&amp;referer=forum.php%3Fmod%3Dviewthread%26tid%3D2774651%26extra%3Dpage%253D1%26page%3D1&amp;statfrom=login" target="_top" rel="nofollow"><img src="./img/qq_login.gif" class="vm"></a>
</div>
</div>
</div>
</div>
</div>

<input type="hidden" name="formhash" value="5f62da56">
<input type="hidden" name="subject" value="">
<p class="ptm pnpost">
<button type="button" onclick="showWindow('login', 'member.php?mod=logging&amp;action=login&amp;guestmessage=yes')" name="replysubmit" id="fastpostsubmit" class="pn pnc vm" value="replysubmit" tabindex="5"><strong>发表回复</strong></button>
<label for="fastpostrefresh"><input id="fastpostrefresh" type="checkbox" class="pc">回帖后跳转到最后一页</label>
<script type="text/javascript">if(getcookie('fastpostrefresh') == 1) {$('fastpostrefresh').checked=true;}</script>
</p>
</td>
</tr>
</tbody></table>
</form>
</div>

<script type="text/javascript">
var connect_qzone_share_url = 'http://bbs.netbig.com/home.php?mod=spacecp&ac=plugin&id=qqconnect:spacecp&pluginop=share&sh_type=1&thread_id=2774651';
var connect_weibo_share_url = 'http://bbs.netbig.com/home.php?mod=spacecp&ac=plugin&id=qqconnect:spacecp&pluginop=share&sh_type=2&thread_id=2774651';
var connect_thread_info = {
thread_url: 'http://bbs.netbig.com/thread-2774651-1-1.html',
thread_id: '2774651',
post_id: '3665519',
forum_id: '101',
author_id: '2472234',
author: '四王府'
};

connect_autoshare = '0';
connect_isbind = '';
if(connect_autoshare == 1 && connect_isbind) {
_attachEvent(window, 'load', function(){
connect_share(connect_weibo_share_url, connect_openid);
});
}
</script>


<script type="text/javascript">
new lazyload();
</script>
<script type="text/javascript">document.onkeyup = function(e){keyPageScroll(e, 0, 1, 'forum.php?mod=viewthread&tid=2774651', 1);}</script>
</div>

<div class="wp mtn">
<!--[diy=diy3]--><div id="diy3" class="area"></div><!--[/diy]-->
</div>

<script type="text/javascript">
var relatedlink = [];relatedlink[0] = {'sname':'高中', 'surl':'http://bbs.netbig.com/forum-268-1.html'};
relatedlink[1] = {'sname':'mba', 'surl':'http://bbs.netbig.com/forum-349-1.html'};
relatedlink[2] = {'sname':'大学排行', 'surl':'http://bbs.netbig.com/forum-101-1.html'};
relatedlink[3] = {'sname':'MBA', 'surl':'http://bbs.netbig.com/forum-349-1.html'};
relatedlink[4] = {'sname':'大学', 'surl':'http://bbs.netbig.com/forum-101-1.html'};
relatedlinks('postmessage_3665519');
</script>
	</div>



<script type="text/javascript">
var rel_tid = "2774651";
var rel_title = "%E7%BE%8E%E5%93%89%E8%A5%BF%E6%B9%96%EF%BC%8C%E5%A3%AE%E5%93%89%E6%B5%99%E5%A4%A7%EF%BC%81";
var rel_reltid = "0";
var rel_prepos = "";
var my_siteid = "7472539";
var rel_uid = "0";
var charset = "utf-8";
var rel_recommend = "相关推荐";
var rel_thread = "相关帖子";
var searchDomain = "http://search.discuz.qq.com/f/discuz";
var srchotquery = "&sId=7472539&ts=1494165034&cuId=0&cuName=&gId=7&agId=0&egIds=&fmSign=&ugSign7=&sign=d0dc7a9eb29b4592cb2200f5a3714f00&charset=utf-8";
</script>
<script src="./2_files/relate_subject.js.download" type="text/javascript" charset="GBK"></script>

<div id="ft" class="wp cl">
<div id="flk" class="y">
<!--<p><a href="http://bbs.netbig.com/archiver/">Archiver</a><span class="pipe">|</span><a href="http://bbs.netbig.com/forum.php?mobile=yes">手机版</a><span class="pipe">|</span><a href="http://bbs.netbig.com/forum-349-1.html">mba报考条件</a><span class="pipe">|</span><a href="http://www.acc-hk.com/">Conference Centre</a><span class="pipe">|</span><a href="http://www.netbig.com/">netbig.com</a><span class="pipe">|</span><a href="http://daxue.netbig.com/">大学排名</a><span class="pipe">|</span><a href="http://edu.netbig.com/">国际学校</a><span class="pipe">|</span><a href="http://www.hyimmi.com/">欧洲移民</a><span class="pipe">|</span><a href="http://www.1828.com/">股票行情</a><span class="pipe">|</span><strong><a href="http://bbsnew.netbig.com/" target="_blank">网大论坛</a></strong>-->
<!--( <a href="http://www.miitbeian.gov.cn/" target="_blank">粤ICP备08125616号</a> )</p><div style="display:none">-->
<!--<script language="javascript" type="text/javascript" src="./2_files/4347382.js.download"></script><a href="http://www.51.la/?4347382" title="51.La 网站流量统计系统 VIP 用户" target="_blank"><img alt="51.La 网站流量统计系统 VIP 用户" src="//icon.users.51.la/icon_0.gif" style="border:none"></a>-->
<!--<a href="http://www.51.la/?4347382" title="51.La 网站流量统计系统 VIP 用户" target="_blank"><img alt="51.La 网站流量统计系统 VIP 用户" src="./2_files/icon_0.gif" style="border:none"></a>-->

<!--<script type="text/javascript">-->
<!--var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");-->
<!--document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3F6267796f6ffa0f5cc37dcf252d42467e' type='text/javascript'%3E%3C/script%3E"));-->
<!--</script><script src=" http://hm.baidu.com/h.js?6267796f6ffa0f5cc37dcf252d42467e" type="text/javascript"></script><script src="./2_files/h.js.download" type="text/javascript"></script><a href="http://tongji.baidu.com/hm-web/welcome/ico?s=6267796f6ffa0f5cc37dcf252d42467e" target="_blank"><img border="0" src="http://eiv.baidu.com/hmt/icon/21.gif" width="20" height="20"></a><a href="http://tongji.baidu.com/hm-web/welcome/ico?s=6267796f6ffa0f5cc37dcf252d42467e" target="_blank"><img border="0" src="./2_files/21.gif" width="20" height="20"></a>-->
<!--<script src="./2_files/stat.php" language="JavaScript"></script><script src="http://c.cnzz.com/core.php?web_id=3360021&amp;show=pic&amp;t=z" charset="utf-8" type="text/javascript"></script><a href="http://www.cnzz.com/stat/website.php?web_id=3360021" target="_blank" title="站长统计"><img border="0" hspace="0" vspace="0" src="http://icon.cnzz.com/img/pic.gif"></a><script src="./2_files/core.php" charset="utf-8" type="text/javascript"></script><a href="http://www.cnzz.com/stat/website.php?web_id=3360021" target="_blank" title="站长统计"><img border="0" hspace="0" vspace="0" src="http://icon.cnzz.com/img/pic.gif"></a><a href="http://www.cnzz.com/stat/website.php?web_id=3360021" target="_blank" title="站长统计"><img border="0" hspace="0" vspace="0" src="./2_files/pic.gif"></a>-->
</div><p></p>
<!--<p class="xs0">-->
<!--GMT+8, 2017-5-7 21:50<span id="debuginfo">-->
<!--</span>-->
<!--</p>-->
</div>
<!--<div id="frt">-->
<!--<p>Powered by <strong><a href="http://www.discuz.net/" target="_blank">Discuz!</a></strong> <em>X2</em></p>-->
<!--<p class="xs0">© 2001-2011 <a href="http://www.comsenz.com/" target="_blank">Comsenz Inc.</a></p>-->
<!--</div></div>-->

<div id="g_upmine_menu" class="tip tip_3" style="display:none;">
<div class="tip_c">
积分 0, 距离下一级还需  积分
</div>
<div class="tip_horn"></div>
</div>
<span id="scrolltop" onclick="window.scrollTo('0','0')" style="left: 1239px; visibility: hidden;">回顶部</span>
<!--<script type="text/javascript">_attachEvent(window, 'scroll', function(){showTopLink();});</script>-->
		<!--<div id="discuz_tips" style="display:none;"></div>-->
		<!--<script type="text/javascript">-->
			<!--var discuzSId = '7472539';-->
			<!--var discuzVersion = 'X2';-->
			<!--var discuzRelease = '20130201';-->
			<!--var discuzApi = '0.4';-->
			<!--var discuzIsFounder = '';-->
			<!--var discuzFixbug = '';-->
			<!--var discuzAdminId = '0';-->
			<!--var discuzOpenId = '';-->
			<!--var discuzUid = '0';-->
			<!--var discuzGroupId = '7';-->
			<!--var ts = '1494165034';-->
			<!--var sig = '57a59d73872a23bfab97f31b0147af38';-->
			<!--var discuzTipsCVersion = '2';-->
		<!--</script>-->
		<!--<script src="http://discuz.gtimg.cn/cloud/scripts/discuz_tips.js?v=1" type="text/javascript" charset="UTF-8"></script><script>-->
  <!--(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){-->
  <!--(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),-->
  <!--m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)-->
  <!--})(window,document,'script','//www.google-analytics.com/analytics.js','ga');-->

  <!--ga('create', 'UA-53074974-1', 'auto');-->
  <!--ga('send', 'pageview');-->
<!--</script>-->


</div></div>
</div></body>
</html>
