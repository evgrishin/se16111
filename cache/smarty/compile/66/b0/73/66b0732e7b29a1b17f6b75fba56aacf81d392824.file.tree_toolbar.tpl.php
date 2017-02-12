<?php /* Smarty version Smarty-3.1.19, created on 2017-02-12 16:13:20
         compiled from "E:\DevServer\OpenServer\domains\stamp-expert.ru\admin\themes\default\template\controllers\products\helpers\tree\tree_toolbar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3264758a05f70332399-90571465%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '66b0732e7b29a1b17f6b75fba56aacf81d392824' => 
    array (
      0 => 'E:\\DevServer\\OpenServer\\domains\\stamp-expert.ru\\admin\\themes\\default\\template\\controllers\\products\\helpers\\tree\\tree_toolbar.tpl',
      1 => 1486904917,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3264758a05f70332399-90571465',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'actions' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58a05f70348e67_59889861',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58a05f70348e67_59889861')) {function content_58a05f70348e67_59889861($_smarty_tpl) {?>
<div class="tree-actions pull-right">
	<?php if (isset($_smarty_tpl->tpl_vars['actions']->value)) {?>
	<?php  $_smarty_tpl->tpl_vars['action'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['action']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['actions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['action']->key => $_smarty_tpl->tpl_vars['action']->value) {
$_smarty_tpl->tpl_vars['action']->_loop = true;
?>
		<?php echo $_smarty_tpl->tpl_vars['action']->value->render();?>

	<?php } ?>
	<?php }?>
</div><?php }} ?>
