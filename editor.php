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
    <style type="text/css">
        .btt{
            height:60px;
            width:100px;
            flow: right;
        }
    </style>
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
    <a href="#" class="nvhm" title="首页">文玩论坛</a> <em>›</em> <a href="#">论坛</a><em>›</em> <a href="#">新贴子</a>
</div>
</div>

<style id="diy_style" type="text/css"></style>
<div class="wp" style="text-align:right">
    <script id="container" name="content" type="text/plain"></script>
    <script type="text/javascript" src="./plugins/UEditor/ueditor.config.js"></script>
    <script type="text/javascript" src="./plugins/UEditor/ueditor.all.js"></script>
    <script type="text/javascript">
        var ue = UE.getEditor('container', {
            toolbars:[
                ['source','undo','redo','bold','italic', 'underline','forecolor','backcolor', 'fontfamily','fontsize','paragraph','justifyleft','justifyright','justifycenter','justifyjustify','lineheight','rowspacingtop','rowspacingbottom','link','insertorderedlist','insertunorderedlist','removeformat','cleardoc','fullscreen', 'selectall', 'preview'],
                ['simpleupload','imagenone','imageleft','imageright','imagecenter',],
                ['inserttable','mergeright','mergedown', 'deleterow', 'deletecol','splittorows','splittocols','splittocells','deletecaption','inserttitle','mergecells','deletetable','edittable','edittd','insertparagraphbeforetable',]
            ],
            autoHeightEnabled:  true,
            autoFloatEnabled:   true,
            pasteplain:         true,
            allHtmlEnabled:     true,
            initialFrameHeight: 400,
            enableAutoSave:     false,
            autoHeightEnabled:  false,
        });
    </script>
    <button class="btt" type="submit" name="post" onclick="return ;" >发布</button>
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
<!--( <a href="http://www.miitbeian.gov.cn/" target="_blank">粤ICP备08125616号</a>  )</p><div style="display:none">-->
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


</body>
</html>
