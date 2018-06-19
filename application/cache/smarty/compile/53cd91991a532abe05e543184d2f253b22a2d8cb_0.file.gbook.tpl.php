<?php
/* Smarty version 3.1.32, created on 2018-06-19 01:11:46
  from '/Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/application/views/smarty/Index/gbook.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b289ea2565f27_98997331',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '53cd91991a532abe05e543184d2f253b22a2d8cb' => 
    array (
      0 => '/Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/application/views/smarty/Index/gbook.tpl',
      1 => 1529388556,
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
function content_5b289ea2565f27_98997331 (Smarty_Internal_Template $_smarty_tpl) {
?><html>
<?php $_smarty_tpl->_subTemplateRender('file:./header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<body>
<?php $_smarty_tpl->_subTemplateRender('file:./header1.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="container">
    <h1 class="t_nav"><span>你，我生命中一个重要的过客，我们之所以是过客，因为你未曾会为我停留。</span><a href="/" class="n1">网站首页</a><a href="/" class="n2">留言</a></h1>
    <div class="news_infos">
        <ul>
            此处安装评论插件
        </ul>
    </div>
    <?php $_smarty_tpl->_subTemplateRender('file:./sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</div>
<?php $_smarty_tpl->_subTemplateRender('file:./footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<a href="#" class="cd-top">Top</a>
</body>
</html><?php }
}
