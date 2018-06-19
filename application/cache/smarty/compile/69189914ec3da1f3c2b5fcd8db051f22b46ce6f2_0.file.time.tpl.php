<?php
/* Smarty version 3.1.32, created on 2018-06-19 04:16:42
  from '/Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/application/views/smarty/Index/time.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b28c9fa8e4af6_85941302',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '69189914ec3da1f3c2b5fcd8db051f22b46ce6f2' => 
    array (
      0 => '/Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/application/views/smarty/Index/time.tpl',
      1 => 1529399800,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./header.tpl' => 1,
    'file:./header1.tpl' => 1,
  ),
),false)) {
function content_5b28c9fa8e4af6_85941302 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html>
<?php $_smarty_tpl->_subTemplateRender('file:./header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<body>
<?php $_smarty_tpl->_subTemplateRender('file:./header1.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="pagebg timer"> </div>
<div class="container">
    <h1 class="t_nav"><span>时光飞逝，机会就在我们眼前，何时找到了灵感，就要把握机遇，我们需要智慧和勇气去把握机会。</span><a href="/" class="n1">网站首页</a><a href="/" class="n2">时间轴</a></h1>
    <div class="timebox">
        <ul id="list" style="display:none;">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'dataA');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['dataA']->value) {
?>
            <li>
                <span><?php echo date("Y-m-d",strtotime($_smarty_tpl->tpl_vars['dataA']->value['created_at']));?>
</span>
                <a href="index/detail?id="."<?php echo $_smarty_tpl->tpl_vars['dataA']->value['id'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['dataA']->value['title'];?>
">
                    <?php echo $_smarty_tpl->tpl_vars['dataA']->value['title'];?>

                </a>
            </li>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>
        <ul id="list2">
        </ul>
        <?php echo '<script'; ?>
 src="/public/index/js/page2.js"><?php echo '</script'; ?>
>
    </div>
</div>
<footer>
    <p>Design by <a href="http://www.yangqq.com" target="_blank">杨青个人博客</a> <a href="/">蜀ICP备11002373号-1</a></p>
</footer>
<a href="#" class="cd-top">Top</a>
</body>
</html>
<?php }
}
