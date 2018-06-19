<?php
/* Smarty version 3.1.32, created on 2018-06-19 02:42:17
  from '/Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/application/views/smarty/Index/detail.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b28b3d9868bf7_63124078',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0f1330dd4fa6dca7d9ada67d23c422216751393a' => 
    array (
      0 => '/Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/application/views/smarty/Index/detail.tpl',
      1 => 1529393724,
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
function content_5b28b3d9868bf7_63124078 (Smarty_Internal_Template $_smarty_tpl) {
?><html>
<?php $_smarty_tpl->_subTemplateRender('file:./header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<body>
<?php $_smarty_tpl->_subTemplateRender('file:./header1.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="container">
    <h1 class="t_nav"><span>像“草根”一样，紧贴着地面，低调的存在，冬去春来，枯荣无恙。</span><a href="/" class="n1">网站首页</a><a href="/" class="n2">关于我</a></h1>
    <div class="news_infos">
        <ul>
            <p><?php echo $_smarty_tpl->tpl_vars['data']->value[0]['title'];?>
</p>
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
