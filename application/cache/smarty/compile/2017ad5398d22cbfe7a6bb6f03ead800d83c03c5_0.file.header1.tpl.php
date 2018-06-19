<?php
/* Smarty version 3.1.32, created on 2018-06-19 01:57:46
  from '/Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/application/views/smarty/Index/header1.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b28a96abaf8a7_82185653',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2017ad5398d22cbfe7a6bb6f03ead800d83c03c5' => 
    array (
      0 => '/Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/application/views/smarty/Index/header1.tpl',
      1 => 1529391366,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b28a96abaf8a7_82185653 (Smarty_Internal_Template $_smarty_tpl) {
?><header>
    <!--menu begin-->
    <div class="menu">
        <nav class="nav" id="topnav">
            <h1 class="logo"><a href="http://www.yangqq.com">个人博客</a></h1>
            <li><a href="/index">网站首页</a> </li>
            <li><a href="/about/index">关于我</a> </li>
            <li><a href="/share/index">博客分享</a>
                <ul class="sub-nav">
                    <li><a href="/share/index">个人博客模板</a></li>
                    <li><a href="/share/index">国外Html5模板</a></li>
                    <li><a href="/share/index">企业网站模板</a></li>
                </ul>
            </li>
            <li><a href="/list/index">学无止境</a>
                <ul class="sub-nav">
                    <li><a href="/list/index">心得笔记</a></li>
                    <li><a href="/list/index">CSS3|Html5</a></li>
                    <li><a href="/list/index">网站建设</a></li>
                    <li><a href="/list/index">推荐工具</a></li>
                    <li><a href="/list/index">JS实例索引</a></li>
                </ul>
            </li>
            <li><a href="/life/index">慢生活</a>
                <ul class="sub-nav">
                    <li><a href="/life/index">日记</a></li>
                    <li><a href="/life/index">欣赏</a></li>
                    <li><a href="/life/index">程序人生</a></li>
                    <li><a href="/life/index">经典语录</a></li>
                </ul>
            </li>
            <li><a href="/time/index">时间轴</a> </li>
            <li><a href="/gbook/index">留言</a> </li>

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
        <h2><a href="http://www.yangqq.com" class="mlogo">个人博客</a><span class="navicon"></span></h2>
        <dl class="list_dl">
            <dt class="list_dt"> <a href="/index">网站首页</a> </dt>
            <dt class="list_dt"> <a href="/about/index">关于我</a> </dt>
            <dt class="list_dt"> <a href="#">模板分享</a> </dt>
            <dd class="list_dd">
                <ul>
                    <li><a href="/share/index">个人博客模板</a></li>
                    <li><a href="/share/index">国外Html5模板</a></li>
                    <li><a href="/share/index">企业网站模板</a></li>
                </ul>
            </dd>
            <dt class="list_dt"> <a href="#">学无止境</a> </dt>
            <dd class="list_dd">
                <ul>
                    <li><a href="/list/index">心得笔记</a></li>
                    <li><a href="/list/index">CSS3|Html5</a></li>
                    <li><a href="/list/index">网站建设</a></li>
                    <li><a href="/list/index">推荐工具</a></li>
                    <li><a href="/list/index">JS实例索引</a></li>
                </ul>
            </dd>
            <dt class="list_dt"> <a href="#">慢生活</a> </dt>
            <dd class="list_dd">
                <ul>
                    <li><a href="/life/index">日记</a></li>
                    <li><a href="/life/index">欣赏</a></li>
                    <li><a href="/life/index">程序人生</a></li>
                    <li><a href="/life/index">经典语录</a></li>
                </ul>
            </dd>
            <dt class="list_dt"> <a href="/time/index">时间轴</a> </dt>
            <dt class="list_dt"> <a href="/gbook/index">留言</a> </dt>
        </dl>
    </div>
    <!--mnav end-->
</header><?php }
}
