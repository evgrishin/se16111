<?php /* Smarty version Smarty-3.1.19, created on 2017-02-12 16:13:16
         compiled from "E:\DevServer\OpenServer\domains\stamp-expert.ru\admin\themes\default\template\controllers\cms_content\content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2667458a05f6cb47271-00231094%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '40e6eefff377e017fe90ea8ca2e33bdcd7218345' => 
    array (
      0 => 'E:\\DevServer\\OpenServer\\domains\\stamp-expert.ru\\admin\\themes\\default\\template\\controllers\\cms_content\\content.tpl',
      1 => 1486904913,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2667458a05f6cb47271-00231094',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cms_breadcrumb' => 0,
    'content' => 0,
    'url_prev' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58a05f6cb64028_99499245',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58a05f6cb64028_99499245')) {function content_58a05f6cb64028_99499245($_smarty_tpl) {?>

<?php if (isset($_smarty_tpl->tpl_vars['cms_breadcrumb']->value)) {?>
	<ul class="breadcrumb cat_bar">
		<?php echo $_smarty_tpl->tpl_vars['cms_breadcrumb']->value;?>

	</ul>
<?php }?>

<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php if (isset($_smarty_tpl->tpl_vars['url_prev']->value)) {?>
	<script type="text/javascript">
	$(document).ready(function () {
		var re = /url_preview=(.*)/;
		var url = re.exec(window.location.href);
		if (typeof url !== 'undefined' && url !== null && typeof url[1] !== 'undefined' && url[1] === "1")
			window.open("<?php echo $_smarty_tpl->tpl_vars['url_prev']->value;?>
", "_blank");
	});
	</script>
<?php }?>
<?php }} ?>
