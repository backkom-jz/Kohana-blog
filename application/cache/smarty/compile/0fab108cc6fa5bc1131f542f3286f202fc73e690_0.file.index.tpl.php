<?php
/* Smarty version 3.1.32, created on 2018-06-19 02:28:01
  from '/Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/application/views/smarty/Index/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b28b081a71c78_63233304',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0fab108cc6fa5bc1131f542f3286f202fc73e690' => 
    array (
      0 => '/Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/application/views/smarty/Index/index.tpl',
      1 => 1529393276,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./header.tpl' => 1,
    'file:./header1.tpl' => 1,
    'file:./sidebar.tpl' => 1,
    'file:./footer.tpl' => 1,
  ),
),false)) {
function content_5b28b081a71c78_63233304 (Smarty_Internal_Template $_smarty_tpl) {
?><html >
<head>
    <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
    <?php $_smarty_tpl->_subTemplateRender('file:./header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</head>
<body>
    <?php $_smarty_tpl->_subTemplateRender('file:./header1.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

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
            <h3 class="blogtitle"><a href="index/detail?id=<?php echo $_smarty_tpl->tpl_vars['dataA']->value['id'];?>
" target=""> <?php echo $_smarty_tpl->tpl_vars['dataA']->value['small_title'];?>
</a></h3>
            <p class="blogtext"><?php echo $_smarty_tpl->tpl_vars['dataA']->value['content'];?>
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

    <?php $_smarty_tpl->_subTemplateRender('file:./sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</article>
    <?php $_smarty_tpl->_subTemplateRender('file:./footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<a href="#" class="cd-top">Top</a>
</body>
</html>
<?php }
}
