<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>文玩论坛</title>
	<base href="./"/>
	<link rel="stylesheet" type="text/css" href="./css/style_1_common.css" />
	<link rel="stylesheet" type="text/css" href="./css/style_1_forum_index.css" />
	<link rel="stylesheet" id="css_extstyle" type="text/css" href="./css/style.css" />
</head>
<body id="nv_forum" class="pg_index" onkeydown="if(event.keyCode==27) return false;">
<div id="append_parent"></div>
<div id="ajaxwaitid"></div>
<div id="toptb" class="cl">
	<div class="wp">
		<div class="z">
			<a href="javascript:;"  onclick="setHomepage('#');">设为首页</a>
			<a href="#"  onclick="addFavorite(this.href, '文玩论坛');return false;">收藏本站</a>
		</div>
		<div class="y">
		<a href="javascript:;" onclick="widthauto(this)">切换到宽版</a>
		</div>
	</div>
</div>
<div id="qmenu_menu" class="p_pop blk" style="display: none;">
	<div class="ptm pbw hm">
	请 <a href="javascript:;" class="xi2" onclick="lsSubmit()"><strong>登录</strong></a> 后使用快捷导航<br />没有帐号？<a href="member.php?mod=register.php" class="xi2 xw1">注册</a>
	</div>
</div>
<div id="hd">
<div class="wp">
<div class="hdc cl"><h2><a href="./" title="网大论坛"><img src="./img/logo.png" alt="网大论坛" border="0" /></a></h2>

<script src="static/js/logging.js?dLt" type="text/javascript"></script>
<form method="post" autocomplete="off" id="lsform" action="logincheck2.php" onsubmit="return lsSubmit()">
	<div class="fastlg cl">
		<span id="return_ls" style="display:none"></span>
		<div class="y pns">
			<?php if(empty($_SESSION['user'])){
				?>
			<table cellspacing="0" cellpadding="0">
				<tr>
				<td>
				<span class="ftid">
				<select name="fastloginfield" id="ls_fastloginfield" width="40" tabindex="900">
				<option value="username">用户名</option>
				<!--option value="uid">UID</option
				<option value="email">Email</option>-->
				</select>
				</span>
				<script type="text/javascript">simulateSelect('ls_fastloginfield')</script>
				</td>
				<td><input type="text" name="username" id="ls_username" autocomplete="off" class="px vm" tabindex="901" /></td>
				<td class="fastlg_l">
					<!--<label for="ls_cookietime"><input type="checkbox" name="cookietime" id="ls_cookietime" class="pc" value="2592000" tabindex="903" />自动登录</label>-->
					<button type="button" class="pn vm" tabindex="904" style="width: 75px;" onclick="javascript:window.location.href='register.php?url=forum1.html'"><em>注册</em></button>
				</td>
				<!--<td>&nbsp;<a href="javascript:;" onclick="showWindow('login', 'member.php?mod=logging&action=login&viewlostpw=1')">找回密码</a></td>-->
				</tr>
				<tr>
				<td><label for="ls_password" class="z psw_w">密码</label></td>
				<td><input type="password" name="password" id="ls_password" class="px vm" autocomplete="off" tabindex="902" /></td>
				<td class="fastlg_l"><button type="submit" class="pn vm" tabindex="904" style="width: 75px;"><em>登录</em></button></td>
				<!--<td>&nbsp;<a href="member.php?mod=register.php" class="xi2 xw1">注册</a></td>-->
				</tr>
			</table>
			<?php
		}
		else{?>
			<table cellspacing="0" cellpadding="0">
				<tr>
				<td class="fastlg_l"><button type="button" class="pn vm" tabindex="904" style="width: 75px;"><em><?php echo $_SESSION['user'];?></em></button></td>
				<td class="fastlg_l"><button type="button" class="pn vm" tabindex="904" style="width: 75px;" onclick="javascript:window.location.href='logout2.php'"><em>退出登录</em></button></td>
				<!--<td>&nbsp;<a href="member.php?mod=register.php" class="xi2 xw1">注册</a></td>-->
				</tr>
			</table>
			<?php
		}
		?>
			<input type="hidden" name="quickforward" value="yes" />
			<input type="hidden" name="handlekey" value="ls" />
		</div>

		<!--
		<div class="fastlg_fm y" style="margin-right: 10px; padding-right: 10px">
			<p><a href="http://bbsnew.netbig.com/connect.php?mod=login&op=init&referer=forum.php&statfrom=login_simple"><img src="./img/qq_login.gif" class="vm" alt="QQ登录" /></a></p>
			<p class="hm xg1" style="padding-top: 2px;">只需一步，快速开始</p>
		</div>
		-->
	</div>
</form>
</div>

<div id="nv">
	<a href="javascript:;" id="qmenu" onmouseover="showMenu({'ctrlid':'qmenu','pos':'34!','ctrlclass':'a','duration':2});">快捷导航</a>
	<ul>
		<li class="a" id="mn_forum" ><a href="forum1.html" hidefocus="true" title="BBS"  >论坛<span>BBS</span></a></li>
	</ul>
</div>
<ul class="p_pop h_pop" id="plugin_menu" style="display: none">  <li><a id="mn_plink_desktopshotcut_7ree" href="plugin.php?id=toplist_7ree:desktopshotcut_7ree">下载桌面快捷访问</a></li>
 </ul>
<div id="mu" class="cl">
</div>
<script type="text/javascript">
</script>
<div style="margin-top:5px;">
		<!--<div class="a_mu">-->
			<!--<a href="http://www.uiowa.edu.hk/dm/reply.htm" target="_blank">-->
				<!--<img src="http://bbsnew.netbig.com/data/attachment/common/cf/145404qg0qn0fm808nubci.gif" height="90" width="960" alt="www.uiowa.edu.hk/dm/inquirybbs" border="0">-->
			<!--</a>-->
		<!--</div>-->
		<div>
		<div id="scbar" class="cl">
			<form id="scbar_form" method="post" autocomplete="off" onsubmit="searchFocus($('scbar_txt'))" action="search.php?searchsubmit=yes" target="_blank">
				<input type="hidden" name="mod" id="scbar_mod" value="search" />
				<input type="hidden" name="formhash" value="a41cd1dc" />
				<input type="hidden" name="srchtype" value="title" />
				<input type="hidden" name="srhfid" value="" id="dzsearchforumid" />
				<input type="hidden" name="srhlocality" value="forum::index" />
				<input type="hidden" name="sId" value="7472539" />
				<input type="hidden" name="ts" value="1494252774" />
				<input type="hidden" name="cuId" value="0" />
				<input type="hidden" name="cuName" value="" />
				<input type="hidden" name="gId" value="7" />
				<input type="hidden" name="agId" value="0" />
				<input type="hidden" name="egIds" value="" />
				<input type="hidden" name="fmSign" value="" />
				<input type="hidden" name="ugSign7" value="" />
				<input type="hidden" name="sign" value="90ebe88a4a560ad815be8d556001e61b" />
				<input type="hidden" name="charset" value="utf-8" />
				<input type="hidden" name="source" value="discuz" />
				<input type="hidden" name="fId" value=""  id="cloudsearchforumId" />
				<input type="hidden" name="q" id="cloudsearchquery" value="" />
			<table cellspacing="0" cellpadding="0">
				<tr>
					<td class="scbar_icon_td"></td>
					<td class="scbar_txt_td"><input type="text" name="srchtxt" id="scbar_txt" value="请输入搜索内容" autocomplete="off" /></td>
					<td class="scbar_type_td"><a href="javascript:;" id="scbar_type" class="showmenu xg1 xs2" onclick="showMenu(this.id)" hidefocus="true">搜索</a></td>
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
						</div>
						</td>
				</tr>
			</table>
			</form>
		</div>
		<ul id="scbar_type_menu" class="p_pop" style="display: none;"><li><a href="javascript:;" rel="forum" class="curtype">帖子</a></li><li><a href="javascript:;" rel="user">用户</a></li></ul>
<script type="text/javascript">
initSearchmenu('scbar', 'http://search.discuz.qq.com/f/discuz');
</script>
</div>
</div>


<div id="wp" class="wp"><div id="pt" class="bm cl">
<div class="z">
	<a href="./" class="nvhm" title="首页">文玩论坛</a><em>&raquo;</em><a href="#">论坛</a>
</div>
<div class="z">
<iframe id="connectlike" allowtransparency="true" scrolling="no" border="0" width="280" height="25" frameborder="0"></iframe>
<script type="text/javascript">_attachEvent(window, 'load', function () { $('connectlike').src = 'api/connect/like.php';}, document);</script>
</div>
</div>



<style id="diy_style" type="text/css"></style>

<div class="wp">
<!--[diy=diy1]--><div id="diy1" class="area"></div><!--[/diy]-->
</div>

<div id="ct" class="wp cl">
<div id="chart" class="bm bw0 cl">
<p class="chart z">今日: <em>1624</em><span class="pipe">|</span>昨日: <em>1780</em><span class="pipe">|</span>帖子: <em>1995525</em><span class="pipe">|</span>会员: <em>2226336</em><span class="pipe">|</span>欢迎新会员: <em><a href="space-username-%E5%93%88%E5%B0%94%E6%BB%A8%E8%80%81%E7%8E%8B.html" target="_blank" class="xi2">哈尔滨老王</a></em></p>
<div class="y">
<a href="search.php?mod=forum&amp;srchfrom=782000&amp;searchsubmit=yes" title="查看新帖" class="xi2">查看新帖</a></div>
</div>

<div class="mn">


<!--
ID: toplist_7ree
version: 7.7
(C)2007-2012 [www.7ree.com]
This is NOT a freeware, use is subject to license terms
update 11:09 2012/07/09
Agreement: http://www.7ree.com/agreement.html
More Plugins: http://www.7ree.com/thread-7407-1-1.html
-->
<script src="source/plugin/toplist_7ree/template/images/SlideTrans.js" type="text/javascript"></script>
<style type="text/css">
.container, .container img{width:280px; height:200px;}
.container img{border:0;vertical-align:top;}
.container ul, .container li{list-style:none;margin:0;padding:0;}

.num{ position:absolute; right:5px; bottom:5px; font:12px/1.5 tahoma, arial; height:18px;}
.num li{
float: left;
color: #FFF;
text-align: center;
line-height: 16px;
width: 16px;
height: 16px;
font-family: Arial;
font-size: 11px;
cursor: pointer;
margin-left: 3px;
background-color: #8c8f8f;
}
.num li.on{
line-height: 18px;
width: 18px;
height: 18px;
font-size: 14px;
margin-top:-2px;
background-color: #52baff;
font-weight: bold;
color:#FFF;
}
</style>


            <div class="fl bm">
<div class="bm bmw cl">
<div class="bm_h cl">
<span class="o">
<img id="category__img" src="./img/collapsed_no.gif" title="收起、展开四格" alt="收起、展开四格" onclick="toggle_collapse('category_');" onload="showPrompt(null, null, '亲，快登录吧！ 登录后就可浏览更多精彩内容…… ^o^ ', '10000');"/>
</span>
<span class="y">


2017年5月8日 星期一

            </span>

<h2>

『健康时刻』
<script language="JavaScript">
<!--
var health_message_7ree="";
day = new Date( );
hr = day.getHours( );
if (( hr >= 0 ) && (hr <= 1 ))
health_message_7ree="0点~1点：进入睡眠状态，充分恢复体能。"
if (( hr >= 1 ) && (hr <= 2 ))
health_message_7ree="1点~2点：人体进入浅睡眠阶段，易醒，对痛觉特别敏感。"
if (( hr >= 2 ) && (hr <= 3 ))
health_message_7ree=" 体内大部分器官处于一天中工作最慢的时刻。肝脏紧张地工作，为人体排毒。"
if (( hr >= 3 ) && (hr <= 4 ))
health_message_7ree="3点~4点：全身处于休息状态，肌肉完全放松。"
if (( hr >= 4 ) && (hr <= 5 ))
health_message_7ree="4点~5点：血压最低，人体脑部供血最少。所以，此时老年人容易发生心脑血管意外。"
if (( hr >= 5 ) && (hr <= 6 ))
health_message_7ree="5点~6点：经历了一定时间的睡眠，人体得到了充分休息。此时起床，显得精神饱满。"
if (( hr >= 6 ) && (hr <= 7 ))
health_message_7ree="6点~7点：血压开始升高，心跳也逐渐加快。"
if (( hr >= 7 ) && (hr <= 8 ))
health_message_7ree="7点~8点：体温开始上升，人体免疫力最强。"
if (( hr >= 8 ) && (hr <= 9 ))
health_message_7ree="8点~9点：皮肤有毒物质排除殆尽，性激素含量最高。"
if (( hr >= 9 ) && (hr <= 10 ))
health_message_7ree="9点~10点：皮肤痛觉降低。此时是就医注射的好时机。"
if (( hr >= 10 ) && (hr <= 11 ))
health_message_7ree="10点~11点：精力充沛，最适宜工作。"
if (( hr >= 11 ) && (hr <= 12 ))
health_message_7ree="11点~12点：精力最旺盛，人体不易感觉疲劳。"
if (( hr >= 12 ) && (hr <= 13 ))
health_message_7ree="12点~13点：经历了一个上午的工作，人体需要休息。"
if (( hr >= 13 ) && (hr <= 14 ))
health_message_7ree="13点~14点：胃液分泌最多，胃肠加紧工作，适宜进餐，稍感疲乏，需要短时间的休息。"
if (( hr >= 14 ) && (hr <= 15 ))
health_message_7ree="14点~15点：人体应激能力下降，全身反应迟钝。"
if (( hr >= 15 ) && (hr <= 16 ))
health_message_7ree="15点~16点：体温最高，工作能力开始恢复。"
if (( hr >= 16 ) && (hr <= 17 ))
health_message_7ree="16点~17点：血糖升高，脸部最红。"
if (( hr >= 17 ) && (hr <= 18 ))
health_message_7ree="17点~18点：工作效率最高，肺部呼吸运动最活跃，适宜进行体育锻炼。"
if (( hr >= 18 ) && (hr <= 19 ))
health_message_7ree="18点~19点：人体痛觉再度降低。"
if (( hr >= 19 ) && (hr <= 20 ))
health_message_7ree="19点~20点：血压略有升高。此时，人们情绪最不稳定。"
if (( hr >= 20 ) && (hr <= 21 ))
health_message_7ree="20点~21点：记忆力最强，大脑反应异常迅速。"
if (( hr >= 21 ) && (hr <= 22 ))
health_message_7ree="21点~22点：脑神经反应活跃，适宜学习和记忆。"
if (( hr >= 22 ) && (hr <= 23 ))
health_message_7ree="22点~23点：呼吸开始减慢，体温逐渐下降。"
if (( hr >= 23 ) && (hr <= 24 ))
health_message_7ree="23点~24点：机体功能处于休息状态，一天的疲劳开始缓解。"

document.write(health_message_7ree)
//--->
</script>


</h2>
</div>
<div id="category_" class="bm_c" >
	<table cellspacing="0" cellpadding="0" class="fl_tb">
	</table>
</div>
</div>
</div>




<div class="fl bm"><div class="bm bmw  cl">
<div class="bm_h cl">
	<span class="o">
	<img id="category_15_img" src="./img/collapsed_no.gif" title="收起/展开" alt="收起/展开" onclick="toggle_collapse('category_15');" />
	</span>
	<h2><a href="#" style="">文玩交流区</a></h2>
</div>
<div id="category_15" class="bm_c" style="">
	<table cellspacing="0" cellpadding="0" class="fl_tb">
		<tr>
			<td class="fl_icn"  style="width: 142px;">
			<a href="#"><img src="./img/common_12_icon.jpg" align="left" alt="" /></a>
			</td>
			<td>
				<h2><a href="forum2.php">文玩核桃</a><em class="xw0 xi1" title="今日"> (1463)</em></h2>
				<p class="xg2">文韬武略股掌间　玩笑谈吐人中仙　天帝种得虬龙果　下至凡尘作神丹</p><p>版主: <span class="xi2"><a href="">三分</a>,<a href="">幸运星</a>,<a href="">核为贵精品核桃</a></span></p></td>
			<td class="fl_i">
				<span class="xi2">145966</span><span class="xg1"> / 1794533</span></td>
			<td class="fl_by">
				<div>
					<a href="#" class="xi2">【开盘记录】</a> <cite><span title="2017-5-8 22:10:40">2&nbsp;分钟前</span> <a href="#">烟花易冷时</a></cite>
				</div>
			</td>
		</tr>
		<tr class="fl_row">
			<td class="fl_icn"  style="width: 142px;">
				<a href="forum-105-1.html"><img src="./img/common_28_icon.jpg" align="left" alt="" /></a></td>
			<td>
				<h2><a href="#">橄榄核雕</a><em class="xw0 xi1" title="今日"> (16)</em></h2>
				<p class="xg2">小小核雕盘在手 乾坤世界我拥有 八仙菩萨罗汉头 让人痴迷解烦愁 玩乐茶余与饭后</p><p>版主: <span class="xi2"><a href="#" class="notabs" c="1">whu2008</a></span></p></td>
			<td class="fl_i">
				<span class="xi2">1712</span><span class="xg1"> / 9084</span></td>
			<td class="fl_by">
				<div>
					<a href="#" class="xi2">降龙 三水作</a> <cite><span title="2017-5-7 17:58:31">昨天&nbsp;17:58</span> <a href="space-username-gayke.html">gayke</a></cite>
				</div>
			</td>
		</tr>
		<tr class="fl_row">
			<td class="fl_icn"  style="width: 142px;">
				<a href="#"><img src="./img/common_72_icon.jpg" align="left" alt="" /></a></td>
			<td>
				<h2><a href="#">清凉菩提</a><em class="xw0 xi1" title="今日"> (14)</em></h2>
				<p class="xg2">心境如如只个是，何虑菩提道不成</p><p>版主: <span class="xi2"><a href="#" class="notabs" c="1">dylanct</a></span></p></td>
			<td class="fl_i">
				<span class="xi2">8303</span><span class="xg1"> / 37280</span></td>
			<td class="fl_by">
				<div>
					<a href="#" class="xi2">[六仙僧] 小星月 大留白</a> <cite><span title="2017-5-8 05:34:00">16&nbsp;小时前</span> <a href="#">xdwh9e</a></cite>
				</div>
			</td>
		</tr>
		<tr class="fl_row">
		</tr>
	</table>
</div>
</div></div>
</div>
</div>	</div>
