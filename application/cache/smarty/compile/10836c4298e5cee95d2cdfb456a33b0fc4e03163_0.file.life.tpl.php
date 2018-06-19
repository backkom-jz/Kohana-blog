<?php
/* Smarty version 3.1.32, created on 2018-06-19 02:42:37
  from '/Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/application/views/smarty/Index/life.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b28b3edcb1489_87333282',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '10836c4298e5cee95d2cdfb456a33b0fc4e03163' => 
    array (
      0 => '/Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/application/views/smarty/Index/life.tpl',
      1 => 1529392182,
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
function content_5b28b3edcb1489_87333282 (Smarty_Internal_Template $_smarty_tpl) {
?><html>
<?php $_smarty_tpl->_subTemplateRender('file:./header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<body>
<?php $_smarty_tpl->_subTemplateRender('file:./header1.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="container">
    <h1 class="t_nav"><span>慢生活，不是懒惰，放慢速度不是拖延时间，而是让我们在生活中寻找到平衡。</span><a href="/" class="n1">网站首页</a><a href="/" class="n2">慢生活</a></h1>
    <!--blogsbox begin-->
    <div class="blogsbox">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'dataA');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['dataA']->value) {
?>

        <div class="blogs" data-scroll-reveal="enter bottom over 1s" >
            <h3 class="blogtitle"><a href="detail?id=<?php echo $_smarty_tpl->tpl_vars['dataA']->value['id'];?>
" target=""> <?php echo $_smarty_tpl->tpl_vars['dataA']->value['small_title'];?>
</a></h3>
            <span class="blogpic"><a href="/" title=""><img src="/public/index/images/toppic01.jpg" alt=""></a></span>
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
</div>
<?php $_smarty_tpl->_subTemplateRender('file:./footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<a href="#" class="cd-top">Top</a>
</body>
</html><?php }
}
