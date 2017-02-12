<?php /* Smarty version Smarty-3.1.19, created on 2017-02-12 16:13:21
         compiled from "E:\DevServer\OpenServer\domains\stamp-expert.ru\admin\themes\default\template\controllers\shop\content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1981558a05f71c21916-19966412%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6f78089076a95ba0f6f8f31a038792f285c7326b' => 
    array (
      0 => 'E:\\DevServer\\OpenServer\\domains\\stamp-expert.ru\\admin\\themes\\default\\template\\controllers\\shop\\content.tpl',
      1 => 1486904918,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1981558a05f71c21916-19966412',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'shops_tree' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58a05f71c2e312_50154452',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58a05f71c2e312_50154452')) {function content_58a05f71c2e312_50154452($_smarty_tpl) {?>

<div class="row">
	<div class="col-lg-4">
		<?php echo $_smarty_tpl->tpl_vars['shops_tree']->value;?>

	</div>
	<div class="col-lg-8"><?php echo $_smarty_tpl->tpl_vars['content']->value;?>
</div>
</div><?php }} ?>
