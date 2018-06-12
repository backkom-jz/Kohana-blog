<?php
/* Smarty version 3.1.32, created on 2018-06-11 22:15:43
  from '/Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/application/views/smarty/Admin/article/add.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b1f3adfa749a2_51900733',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8ce9557af3527f9af29fa2661aad1c99fc85ded0' => 
    array (
      0 => '/Users/wangjiuzhou/PhpstormProjects/Hello_PHP/Kohana-blog/application/views/smarty/Admin/article/add.tpl',
      1 => 1528773274,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../common/_meta.tpl' => 1,
    'file:../common/_footer.tpl' => 1,
  ),
),false)) {
function content_5b1f3adfa749a2_51900733 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:../common/_meta.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<title>新增文章 - 资讯管理 - H-ui.admin v3.0</title>
<meta name="keywords" content="H-ui.admin ">
<meta name="description" content="H-ui.admin v3.0">
</head>
<body>
<article class="page-container">
	<form class="form form-horizontal" id="form-article-add">
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>文章标题：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="" placeholder="" id="article_title" name="">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">简略标题：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="" placeholder="" id="article_small_title" name="">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>分类栏目：</label>
			<div class="formControls col-xs-8 col-sm-9"> <span class="select-box">
				<select name="article_plate" class="select" id="article_plate">
					<option value="0">全部栏目</option>
					<option value="1">新闻资讯</option>

				</select>
				</span> </div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>文章类型：</label>
			<div class="formControls col-xs-8 col-sm-9"> <span class="select-box">
				<select name="article_type" class="select" id="article_type">
					<option value="0">全部类型</option>
					<option value="1">帮助说明</option>
					<option value="2">新闻资讯</option>
				</select>
				</span> </div>
		</div>

		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">关键词：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="" placeholder="" id="article_keyword" name="">
			</div>
		</div>

		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">是否原创：</label>
			<div class="formControls col-xs-8 col-sm-9 skin-minimal">
				<div class="check-box">
					<input type="checkbox" id="is_original">
					<label for="checkbox-pinglun">&nbsp;</label>
				</div>
			</div>
		</div>

		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">文章内容：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<div id="editor">
					<p>欢迎使用 <b>wangEditor</b> 富文本编辑器</p>
				</div>
			</div>
		</div>
		<div class="row cl">
			<div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-2">
				<button onClick="article_save_submit();" class="btn btn-primary radius" type="submit"><i class="Hui-iconfont">&#xe632;</i> 保存并提交审核</button>
				<button onclick="javascript:history.back(-1);"  class="btn btn-default radius" type="button">&nbsp;&nbsp;取消&nbsp;&nbsp;</button>
			</div>
		</div>
	</form>
</article>

<?php $_smarty_tpl->_subTemplateRender('file:../common/_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!--请在下方写此页面业务相关的脚本-->
<?php echo '<script'; ?>
 type="text/javascript" src="/lib/ueditor/wangEditor.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
    var E = window.wangEditor
    var editor = new E('#editor')
    // 或者 var editor = new E( document.getElementById('editor') )
    editor.create()
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
    function article_save_submit(){
//
        var title = $("#article_title").val();
        var small_title = $("#article_small_title").val();
        var plate = $("#article_plate option:selected").val();
        var type = $("#article_type option:selected").val();

        var keyword = $("#article_keyword").val();
        var is_original = $("#is_original").val();

        $.post("/admin/article_index/real_add",
            {
				title:title,
                small_title:small_title,
                plate:plate,
                type:type,
                keyword:keyword,
                is_original:is_original,
                content:editor.txt.text()
            },
            function(data,status){
                alert("数据: \n" + data + "\n状态: " + status);
            });
    }
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
$(function(){
	$('.skin-minimal input').iCheck({
		checkboxClass: 'icheckbox-blue',
		radioClass: 'iradio-blue',
		increaseArea: '20%'
	});



	
});
<?php echo '</script'; ?>
>
<!--/请在上方写此页面业务相关的脚本-->
</body>
</html><?php }
}
