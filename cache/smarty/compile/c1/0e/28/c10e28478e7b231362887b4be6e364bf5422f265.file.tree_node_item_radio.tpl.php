<?php /* Smarty version Smarty-3.1.19, created on 2017-02-12 16:13:26
         compiled from "E:\DevServer\OpenServer\domains\stamp-expert.ru\admin\themes\default\template\helpers\tree\tree_node_item_radio.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2332658a05f76b7c3b1-71944181%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c10e28478e7b231362887b4be6e364bf5422f265' => 
    array (
      0 => 'E:\\DevServer\\OpenServer\\domains\\stamp-expert.ru\\admin\\themes\\default\\template\\helpers\\tree\\tree_node_item_radio.tpl',
      1 => 1486904921,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2332658a05f76b7c3b1-71944181',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'node' => 0,
    'input_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58a05f76b9f298_43086180',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58a05f76b9f298_43086180')) {function content_58a05f76b9f298_43086180($_smarty_tpl) {?>
<li class="tree-item<?php if (isset($_smarty_tpl->tpl_vars['node']->value['disabled'])&&$_smarty_tpl->tpl_vars['node']->value['disabled']==true) {?> tree-item-disable<?php }?>">
	<span class="tree-item-name">
		<input type="radio" name="<?php echo $_smarty_tpl->tpl_vars['input_name']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['node']->value['id_category'];?>
"<?php if (isset($_smarty_tpl->tpl_vars['node']->value['disabled'])&&$_smarty_tpl->tpl_vars['node']->value['disabled']==true) {?> disabled="disabled"<?php }?> />
		<i class="tree-dot"></i>
		<label class="tree-toggler"><?php echo $_smarty_tpl->tpl_vars['node']->value['name'];?>
</label>
	</span>
</li><?php }} ?>
