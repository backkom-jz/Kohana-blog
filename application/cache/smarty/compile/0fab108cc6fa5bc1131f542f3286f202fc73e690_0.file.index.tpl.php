<?php
/* Smarty version 3.1.32, created on 2018-06-04 05:47:03
  from '/Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/application/views/smarty/Index/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b1518a79f8575_69343837',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0fab108cc6fa5bc1131f542f3286f202fc73e690' => 
    array (
      0 => '/Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/application/views/smarty/Index/index.tpl',
      1 => 1528109192,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./header.tpl' => 1,
  ),
),false)) {
function content_5b1518a79f8575_69343837 (Smarty_Internal_Template $_smarty_tpl) {
?><html >
<head>
    <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
    <?php $_smarty_tpl->_subTemplateRender('file:./header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</head>
<body>
<header>
    <!--menu begin-->
    <div class="menu">
        <nav class="nav" id="topnav">
            <h1 class="logo"><a href="http://www.yangqq.com">杨青博客</a></h1>
            <li><a href="<?php echo '<?php ';?>echo url::site('index/index');<?php echo '?>';?>">网站首页</a> </li>
            <li><a href="<?php echo '<?php ';?>echo url::site('index/about');<?php echo '?>';?>">关于我</a> </li>
            <li><a href="<?php echo '<?php ';?>echo url::site('index/share');<?php echo '?>';?>">模板分享</a>
                <ul class="sub-nav">
                    <li><a href="share.php">个人博客模板</a></li>
                    <li><a href="share.php">国外Html5模板</a></li>
                    <li><a href="share.php">企业网站模板</a></li>
                </ul>
            </li>
            <li><a href="<?php echo '<?php ';?>echo url::site('index/list');<?php echo '?>';?>">学无止境</a>
                <ul class="sub-nav">
                    <li><a href="list.html">心得笔记</a></li>
                    <li><a href="list.html">CSS3|Html5</a></li>
                    <li><a href="list.html">网站建设</a></li>
                    <li><a href="list.html">推荐工具</a></li>
                    <li><a href="list.html">JS实例索引</a></li>
                </ul>
            </li>
            <li><a href="<?php echo '<?php ';?>echo url::site('index/life');<?php echo '?>';?>">慢生活</a>
                <ul class="sub-nav">
                    <li><a href="life.php">日记</a></li>
                    <li><a href="life.php">欣赏</a></li>
                    <li><a href="life.php">程序人生</a></li>
                    <li><a href="life.php">经典语录</a></li>
                </ul>
            </li>
            <li><a href="<?php echo '<?php ';?>echo url::site('index/time');<?php echo '?>';?>">时间轴</a> </li>
            <li><a href="<?php echo '<?php ';?>echo url::site('index/gbook');<?php echo '?>';?>">留言</a> </li>
            <li><a href="<?php echo '<?php ';?>echo url::site('index/info');<?php echo '?>';?>">内容页</a> </li>
            <!--search begin-->
            <div id="search_bar" class="search_bar">
                <form  id="searchform" action="[!--news.url--]e/search/index.php" method="post" name="searchform">
                    <input class="input" placeholder="想搜点什么呢..." type="text" name="keyboard" id="keyboard">
                    <input type="hidden" name="show" value="title" />
                    <input type="hidden" name="tempid" value="1" />
                    <input type="hidden" name="tbname" value="news">
                    <input type="hidden" name="Submit" value="搜索" />
                    <span class="search_ico"></span>
                </form>
            </div>
            <!--search end-->
        </nav>
    </div>
    <!--menu end-->
    <!--mnav begin-->
    <div id="mnav">
        <h2><a href="http://www.yangqq.com" class="mlogo">杨青博客</a><span class="navicon"></span></h2>
        <dl class="list_dl">
            <dt class="list_dt"> <a href="index.html">网站首页</a> </dt>
            <dt class="list_dt"> <a href="about.php">关于我</a> </dt>
            <dt class="list_dt"> <a href="#">模板分享</a> </dt>
            <dd class="list_dd">
                <ul>
                    <li><a href="share.php">个人博客模板</a></li>
                    <li><a href="share.php">国外Html5模板</a></li>
                    <li><a href="share.php">企业网站模板</a></li>
                </ul>
            </dd>
            <dt class="list_dt"> <a href="#">学无止境</a> </dt>
            <dd class="list_dd">
                <ul>
                    <li><a href="list.html">心得笔记</a></li>
                    <li><a href="list.html">CSS3|Html5</a></li>
                    <li><a href="list.html">网站建设</a></li>
                    <li><a href="list.html">推荐工具</a></li>
                    <li><a href="list.html">JS实例索引</a></li>
                </ul>
            </dd>
            <dt class="list_dt"> <a href="#">慢生活</a> </dt>
            <dd class="list_dd">
                <ul>
                    <li><a href="life.php">日记</a></li>
                    <li><a href="life.php">欣赏</a></li>
                    <li><a href="life.php">程序人生</a></li>
                    <li><a href="life.php">经典语录</a></li>
                </ul>
            </dd>
            <dt class="list_dt"> <a href="time.php">时间轴</a> </dt>
            <dt class="list_dt"> <a href="gbook.php">留言</a> </dt>
        </dl>
    </div>
    <!--mnav end-->
</header>
<article>
    <!--banner begin-->
    <div class="picsbox">
        <div class="banner">
            <div id="ban" class="fader">
                <li class="slide" ><a href="/" target="_blank"><img src="public/index/images/banner01.jpg"><span class="imginfo">别让这些闹心的套路，毁了你的网页设计!</span></a></li>
                <li class="slide" ><a href="/" target="_blank"><img src="public/index/images/banner02.jpg "><span class="imginfo">网页中图片属性固定宽度，如何用js改变大小</span></a></li>
                <li class="slide" ><a href="/" target="_blank"><img src="public/index/images/banner03.jpg"><span class="imginfo">个人博客，属于我的小世界！</span></a></li>
                <div class="fader_controls">
                    <div class="page prev" data-target="prev">&lsaquo;</div>
                    <div class="page next" data-target="next">&rsaquo;</div>
                    <ul class="pager_list">
                    </ul>
                </div>
            </div>
        </div>
        <!--banner end-->
        <div class="toppic">
            <li> <a href="/" target="_blank"> <i><img src="public/index/images/toppic01.jpg"></i>
                    <h2>别让这些闹心的套路，毁了你的网页设计!</h2>
                    <span>学无止境</span> </a> </li>
            <li> <a href="/" target="_blank"> <i><img src="public/index/images/zd01.jpg"></i>
                    <h2>个人博客，属于我的小世界！</h2>
                    <span>学无止境</span> </a> </li>
        </div>
    </div>
    <div class="blank"></div>
    <!--blogsbox begin-->
    <div class="blogsbox">


        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'dataA');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['dataA']->value) {
?>

        <div class="blogs" data-scroll-reveal="enter bottom over 1s" >
            <h3 class="blogtitle"><a href="detail?id=<?php echo $_smarty_tpl->tpl_vars['dataA']->value['id'];?>
" target=""> <?php echo $_smarty_tpl->tpl_vars['dataA']->value['smallbody'];?>
</a></h3>
            <p class="blogtext"><?php echo $_smarty_tpl->tpl_vars['dataA']->value['body'];?>
</p>
            <div class="bloginfo">
                <ul>
                    <li class="author"><a href="index/detail?id="."<?php echo $_smarty_tpl->tpl_vars['dataA']->value['id'];?>
"> <?php echo $_smarty_tpl->tpl_vars['dataA']->value['name'];?>
</a></li>
                    <li class="lmname"><a href="/">学无止境</a></li>
                    <li class="timer"><?php echo $_smarty_tpl->tpl_vars['dataA']->value['updated_at'];?>
</li>
                    <li class="view">4567已阅读</li>
                    <li class="like">9999</li>
                </ul>
            </div>
        </div>

        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <?php echo $_smarty_tpl->tpl_vars['pagination']->value;?>



    </div>
    <!--blogsbox end-->
    <div class="sidebar">
        <div class="zhuanti">
            <h2 class="hometitle">特别推荐</h2>
            <ul>
                <li> <i><img src="public/index/images/banner03.jpg"></i>
                    <p>帝国cms调用方法 <span><a href="/">阅读</a></span> </p>
                </li>
                <li> <i><img src="public/index/images/b04.jpg"></i>
                    <p>5.20 我想对你说 <span><a href="/">阅读</a></span></p>
                </li>
                <li> <i><img src="public/index/images/b05.jpg"></i>
                    <p>个人博客，属于我的小世界！ <span><a href="/">阅读</a></span></p>
                </li>
            </ul>
        </div>
        <div class="tuijian">
            <h2 class="hometitle">推荐文章</h2>
            <ul class="tjpic">
                <i><img src="public/index/images/toppic01.jpg"></i>
                <p><a href="/">别让这些闹心的套路，毁了你的网页设计</a></p>
            </ul>
            <ul class="sidenews">
                <li> <i><img src="public/index/images/toppic01.jpg"></i>
                    <p><a href="/">别让这些闹心的套路，毁了你的网页设计</a></p>
                    <span>2018-05-13</span> </li>
                <li> <i><img src="public/index/images/toppic02.jpg"></i>
                    <p><a href="/">给我模板PSD源文件，我给你设计HTML！</a></p>
                    <span>2018-05-13</span> </li>
                <li> <i><img src="public/index/images/v1.jpg"></i>
                    <p><a href="/">别让这些闹心的套路，毁了你的网页设计</a></p>
                    <span>2018-05-13</span> </li>
                <li> <i><img src="public/index/images/v2.jpg"></i>
                    <p><a href="/">给我模板PSD源文件，我给你设计HTML！</a></p>
                    <span>2018-05-13</span> </li>
            </ul>
        </div>
        <div class="tuijian">
            <h2 class="hometitle">点击排行</h2>
            <ul class="tjpic">
                <i><img src="public/index/images/toppic01.jpg "></i>
                <p><a href="/">别让这些闹心的套路，毁了你的网页设计</a></p>
            </ul>
            <ul class="sidenews">
                <li> <i><img src="public/index/images/toppic01.jpg"></i>
                    <p><a href="/">别让这些闹心的套路</a></p>
                    <span>2018-05-13</span> </li>
                <li> <i><img src="public/index/images/toppic02.jpg "></i>
                    <p><a href="/">给我模板PSD源文件，我给你设计HTML！</a></p>
                    <span>2018-05-13</span> </li>
                <li> <i><img src="public/index/images/v1.jpg"></i>
                    <p><a href="/">别让这些闹心的套路，毁了你的网页设计</a></p>
                    <span>2018-05-13</span> </li>
                <li> <i><img src="public/index/images/v2.jpg"></i>
                    <p><a href="/">给我模板PSD源文件，我给你设计HTML！</a></p>
                    <span>2018-05-13</span> </li>
            </ul>
        </div>
        <div class="cloud">
            <h2 class="hometitle">标签云</h2>
            <ul>
                <a href="/">陌上花开</a> <a href="/">校园生活</a> <a href="/">html5</a> <a href="/">SumSung</a> <a href="/">青春</a> <a href="/">温暖</a> <a href="/">阳光</a> <a href="/">三星</a><a href="/">索尼</a> <a href="/">华维荣耀</a> <a href="/">三星</a> <a href="/">索尼</a>
            </ul>
        </div>
        <div class="links">
            <h2 class="hometitle">友情链接</h2>
            <ul>
                <li><a href="http://www.yangqq.com" target="_blank">杨青博客</a></li>
                <li><a href="http://www.yangqq.com" target="_blank">D设计师博客</a></li>
                <li><a href="http://www.yangqq.com" target="_blank">优秀个人博客</a></li>
            </ul>
        </div>
        <div class="guanzhu" id="float">
            <h2 class="hometitle">关注我们 么么哒！</h2>
            <ul>
                <li class="sina"><a href="/" target="_blank"><span>新浪微博</span>杨青博客</a></li>
                <li class="tencent"><a href="/" target="_blank"><span>腾讯微博</span>杨青博客</a></li>
                <li class="qq"><a href="/" target="_blank"><span>QQ号</span>476847113</a></li>
                <li class="email"><a href="/" target="_blank"><span>邮箱帐号</span>dancesmiling@qq.com</a></li>
                <li class="wxgzh"><a href="/" target="_blank"><span>微信号</span>yangqq_1987</a></li>
                <li class="wx"><img src="public/index/images/wx.jpg"></li>
            </ul>
        </div>
    </div>
</article>
<footer>
    <p>Design by <a href="http://www.yangqq.com" target="_blank">杨青个人博客</a> <a href="/">蜀ICP备11002373号-1</a></p>
</footer>
<a href="#" class="cd-top">Top</a>
</body>
</html>
<?php }
}
