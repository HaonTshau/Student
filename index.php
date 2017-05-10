<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>文玩</title>
<link rel="stylesheet" type="text/css" href="css/I_index.css" />
<link rel="stylesheet" type="text/css" href="css/lrtk.css" />
<script type="text/javascript" src="js/pptBox.js"></script>
<meta name="keywords" content="文玩,文玩天下,文玩核桃,菩提,橄榄核雕,收藏,文玩葫芦,翡翠,和田玉,折扇,竹木雕刻,琥珀价格,沉香,白玉,翡翠价格,籽料,文玩交易,文玩拍卖,文玩商城" />
<meta name="description" content="文玩天下是中国最聚人气的艺术收藏类文玩论坛,是古玩论坛里最知名的互联网品牌。提供文玩交流,鉴赏,交易,拍卖,团购,商城,店铺等服务.电话:400-630-0305.如文玩核桃,麻核桃,橄榄核雕,翡翠白玉和田玉籽料鉴别交易等. " />
</head>

<body>
<div class="I_header">
    <div class="I_header_c">
        <div class="I_header_l">
            <a href="#"><img src="images/I_logo.gif" border="0" /></a>
        </div>
        <div class="I_header_r">

            <?php
            session_start();
                if(empty($_SESSION['user'])){//未登录
                    ?>

                    <a href="./login.php" target="_blank" class="b">登录</a>
                    <?php
                }
                else{
                    ?>
                    <a href="#" class="b"><?php echo $_SESSION['user'];?></a>
                    <a href="./logout.php" target="_blank" class="b">退出登录</a>
                     <?php

                }
            ?>

            <a href="register.php" target="_blank" class="b">注册</a>



        </div>
        <div class="clear"></div>
    </div>
    <div class="I_menu_s" id="I_menu_t"  style="position:static;top:0px;z-index: 1000;">
        <div class="I_menu">
            <ul>
                <li><a href="#" class="w">首页</a></li>
                <li><a href="forum1.html" class="w" target="_blank">文玩论坛</a></li>
                <li><a href="buy/index.html" class="w" target="_blank">文玩商城</a></li>
                <!--<li><a href="#" class="w" target="_blank">文玩资讯</a></li>-->
            </ul>
        </div>
    </div>
    <SCRIPT>
        var showdiv = document.getElementById('I_menu_t');
        window.onscroll = function() {
            var topscroll = document.body.scrollTop
                    || document.documentElement.scrollTop;
            if (topscroll > 90) {
                showdiv.style.position = 'fixed';
                showdiv.style.top = '0px';
                showdiv.style.zIndex = '1000';
            } else {
                showdiv.style.position = 'static';
            }
        };
    </SCRIPT>
</div>

<div class="I_main">

    <marquee scrollamount=2 behavior=alternate onmouseover=this.stop() onmouseout=this.start()>
        <div style="float:left;width:200px;height:200px;align:center;margin-right:30px;">
            <img style="margin-bottom:10px;" src="images/ipnjfjnv8090.jpg" height="140" width="200" />
            <p align="center">玉琮</p>
            <p align="center">500万</p>
        </div>
        <div style="float:left;width:200px;height:200px;align:center;margin-right:30px;">
            <img style="margin-bottom:10px;" src="images/fadfasfdeeee.jpg" height="140" width="200" />
            <p align="center">绿宝石</p>
            <p align="center">350万</p>
        </div>
        <div style="float:left;width:200px;height:200px;align:center;margin-right:30px;">
            <img style="margin-bottom:10px;" src="images/dafafdasfdsafdfadsf.jpg" height="140" width="200" />
            <p align="center">玉雕</p>
            <p align="center">80万</p>
        </div>
        <div style="float:left;width:200px;height:200px;align:center;margin-right:30px;">
            <img style="margin-bottom:10px;" src="images/548740406836.jpg" height="140" width="200" />
            <p align="center">玉扳指</p>
            <p align="center">280万</p>
        </div>
        <div style="float:left;width:200px;height:200px;align:center;margin-right:30px;">
            <img style="margin-bottom:10px;" src="images/2637967530791.jpg" height="140" width="200" />
            <p align="center">唐代观音像</p>
            <p align="center">98万</p>
        </div>

        <div class="clear"></div>
    </marquee>

    <div class="clear"></div>
    <div class="I_main_l">


        <!--<table align="left" width="700" cellpadding="0" cellspacing="10" style="margin-top:20px;border:1px solid #eeeeee;border-top:5px solid #ff5b36;background-color:#fdfdfd;">
            <tr>
                <td width="350"><a href="http://bbs.wwtx.cn/thread-3745873-1-1.html" target="_blank"><img src="images/daypai.gif" width="330" style="border:1px solid #eeeeee;" /></a></td>
                <td width="350"><a href="http://bbs.wwtx.cn/zhuanti/hediaoji/" target="_blank"><img src="images/dayhd.gif" width="330" style="border:1px solid #eeeeee;" /></a></td>
            </tr>
            <tr>
                <td width="350"><a href="http://bbs.wwtx.cn/thread-3657335-1-1.html" target="_blank"><img src="images/daybzj.gif" width="330" style="border:1px solid #eeeeee;" /></a></td>
                <td width="350"><a href="http://bbs.wwtx.cn/thread-3688848-1-1.html" target="_blank"><img src="images/dayzj.gif" width="330" style="border:1px solid #eeeeee;" /></a></td>
            </tr>
        </table>-->
        <div class="clear"></div>
        <div class="I_title">
            <div class="I_title_bt"></div>
            <div class="I_title_c">
                <ul>
                    <li>
                        <div class="I_title_l">
                            <a href="http://bbs.wwtx.cn/yishuzhan/"><img src="images/754f7ebfly1fffanxbzh2j20g40ardg5.jpg" border="0" height="140" width="210"></a>
                        </div>
                        <div class="I_title_r">
                            <div class="I_r_b">
                                <a href="http://bbs.wwtx.cn/yishuzhan/" class="h1">第五届北京国际文玩博览会</a>
                            </div>
                            <div class="I_r_n">
                                <p>
                                    由中国文玩行业唯一专业协会——中国文玩行业协会联合行业门户网站——"文玩天下"网站以及品牌组展公司——北京文行国际会展有限公司三方共同打造的第四届北京国际文玩博览会将在前三届展会成功举办的基础上，实现规模翻番，以专业的展会操作，丰富的贸易观众资源...<a href="http://bbs.wwtx.cn/yishuzhan/" class="h">[详细]</a>
                                </p>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </li>
                    <li>
                        <div class="I_title_l">
                            <a href="http://shop33017915.taobao.com/" target="_blank"><img src="images/754f7ebfly1fffb59xkcaj20fm0kut9a.jpg" border="0" height="140" width="210"></a>
                        </div>
                        <div class="I_title_r">
                            <div class="I_r_b">
                                <a href="http://shop33017915.taobao.com/" class="h1" target="_blank">文玩天下官方淘宝店</a>
                            </div>
                            <div class="I_r_n">
                                <p>
                                    文玩天下淘宝店铺是由文玩天下创立的官方淘宝店铺，旗下共分为半日堂、吉祥天、天下汇三个品牌， 半日堂取文玩天下论坛总管理猫空半日之名，主要是以经营琥珀、南红、松石核雕为主，旗下产品包括、石、珀、核、竹、木、道几大类...<a href="http://shop33017915.taobao.com/" class="h" target="_blank">[详细]</a>
                                </p>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </li>
                    <li>
                        <div class="I_title_l">
                            <a href="http://bbs.wwtx.cn/forum-1427-1.html" target="_blank"><img src="images/754f7ebfly1fffwun9kxrj20g209zmxf.jpg" border="0" height="140" width="210"></a>
                        </div>
                        <div class="I_title_r">
                            <div class="I_r_b">
                                <a href="http://bbs.wwtx.cn/forum-1427-1.html" class="h1" target="_blank">坛友闲置&nbsp;自由交易区</a>
                            </div>
                            <div class="I_r_n">
                                <p>
                                    坛友闲置，自由交易区。<a href="http://bbs.wwtx.cn/forum-1427-1.html" class="h" target="_blank">[详细]</a>
                                </p>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </li>
                    <li>
                        <div class="I_title_l">
                            <a href="http://bbs.wwtx.cn/thread-3604603-1-1.html" target="_blank"><img src="images/754f7ebfly1ffg00vy3laj20hr0bnthj.jpg" border="0" height="140" width="210"></a>
                        </div>
                        <div class="I_title_r">
                            <div class="I_r_b">
                                <a href="http://bbs.wwtx.cn/thread-3604603-1-1.html" class="h1" target="_blank">文玩天下诚邀社会各界商家公开合作</a>
                            </div>
                            <div class="I_r_n">
                                <p>
                                    文玩天下论坛从2005年创建成立至今，已经经过八年时间。八年的时间，我们从一个简单的bbs论坛变成一个拥有集论坛、商城、拍卖、资讯为一体的综合型了论坛。这几年，通过员工的不断的努力和网友的热心支持，文玩天下已经成为国内最大的文玩收藏平台。但是我们深知独木难支的道理，我们希望...<a href="http://bbs.wwtx.cn/thread-3604603-1-1.html" class="h" target="_blank">[详细]</a>
                                </p>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </li>
                    <li>
                        <div class="I_title_l">
                            <a href="http://bbs.wwtx.cn/forum-1625-1.html" target="_blank"><img src="images/806760.jpg" border="0" height="140" width="210"></a>
                        </div>
                        <div class="I_title_r">
                            <div class="I_r_b">
                                <a href="http://bbs.wwtx.cn/forum-1625-1.html" class="h1" target="_blank">玩以补蹉跎</a>
                            </div>
                            <div class="I_r_n">
                                <p>
                                    在这里有黑嘴子、爆猛料、防诈骗、炒冷饭、揭黑幕、伪科学、识做旧、认塑料，当然也能捎带手学点知识.......<a href="http://bbs.wwtx.cn/forum-1625-1.html" class="h" target="_blank">[详细]</a>
                                </p>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </li>
                    <li>
                        <div class="I_title_l">
                            <a href="http://bbs.wwtx.cn/forum-72-1.html" target="_blank"><img src="images/364687730.jpg" border="0" height="140" width="210"></a>
                        </div>
                        <div class="I_title_r">
                            <div class="I_r_b">
                                <a href="http://bbs.wwtx.cn/forum-72-1.html" class="h1" target="_blank">清凉菩提</a>
                            </div>
                            <div class="I_r_n">
                                <p>生活本有百般味，</p>
                                <p>品味可得平常心。</p>
                                <p>心境如如只个是，</p>
                                <p>何虑菩提道不成。<a href="http://bbs.wwtx.cn/forum-72-1.html" class="h" target="_blank">[详细]</a></p>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </li>
                    <li>
                        <div class="I_title_l">
                            <a href="http://bbs.wwtx.cn/forum-wenwanhetaoquan-1.html" target="_blank"><img src="images/69448166469772190.jpg" border="0" height="140" width="210"></a>
                        </div>
                        <div class="I_title_r">
                            <div class="I_r_b">
                                <a href="http://bbs.wwtx.cn/forum-wenwanhetaoquan-1.html" class="h1" target="_blank">文玩核桃</a>
                            </div>
                            <div class="I_r_n">
                                <p>文韬武略股掌间，</p>
                                <p>玩笑谈吐人中仙。</p>
                                <p>天帝种得虬龙果，</p>
                                <p>下至凡尘作神丹。<a href="http://bbs.wwtx.cn/forum-wenwanhetaoquan-1.html" class="h" target="_blank">[详细]</a></p>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </li>
                    <li>
                        <div class="I_title_l">
                            <a href="http://bbs.wwtx.cn/forum-28-1.html" target="_blank"><img src="images/weidiaojldfj0.jpg" border="0" height="140" width="210"></a>
                        </div>
                        <div class="I_title_r">
                            <div class="I_r_b">
                                <a href="http://bbs.wwtx.cn/forum-28-1.html" class="h1" target="_blank">橄榄核雕</a>
                            </div>
                            <div class="I_r_n">
                                <p>小小核雕盘在手，乾坤世界我拥有；</p>
                                <p>八仙菩萨罗汉头，让人痴迷解烦愁；</p>
                                <p>玩乐茶余与饭后，快乐人生要享受；</p>
                                <p>姑苏核雕有高手，华夏玩家到处有。<a href="http://bbs.wwtx.cn/forum-28-1.html" class="h" target="_blank">[详细]</a></p>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </li>
                    <li>
                        <div class="I_title_l">
                            <a href="http://bbs.wwtx.cn/forum-hupo-1.html" target="_blank"><img src="images/fd7183982671577.jpg" border="0" height="140" width="210"></a>
                        </div>
                        <div class="I_title_r">
                            <div class="I_r_b">
                                <a href="http://bbs.wwtx.cn/forum-hupo-1.html" class="h1" target="_blank">琥珀蜜蜡</a>
                            </div>
                            <div class="I_r_n">
                                <p>曾为老茯神，</p>
                                <p>本是寒松液。</p>
                                <p>蚊蚋落其中，</p>
                                <p>千年犹可觑。<a href="http://bbs.wwtx.cn/forum-hupo-1.html" class="h" target="_blank">[详细]</a></p>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </li>
                    <li>
                        <div class="I_title_l">
                            <a href="http://bbs.wwtx.cn/thread-3640471-1-1.html" target="_blank"><img src="images/3293385063469390.jpg" border="0" height="140" width="210"></a>
                        </div>
                        <div class="I_title_r">
                            <div class="I_r_b">
                                <a href="http://bbs.wwtx.cn/thread-3640471-1-1.html" class="h1" target="_blank">南红系列知识帖【二】识南红</a>
                            </div>
                            <div class="I_r_n">
                                <p>
                                    一、南红的品种<br>从我们所比较常见的南红看，特别是按照南红的颜色来划分，其品种大体上可以归纳为以下几类，即：锦红、玫瑰红、朱砂红、红白料、缟红料。<a href="http://bbs.wwtx.cn/thread-3640471-1-1.html" class="h" target="_blank">[详细]</a>
                                </p>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </li>
              </ul>
            </div>
        </div>


  </div>

    <div class="clear"></div>

</div>
<div class="clear" style="width:100%;height:20px;"></div>


</body>
</html>
