<?php /* Smarty version Smarty-3.1.19, created on 2017-02-12 16:13:26
         compiled from "E:\DevServer\OpenServer\domains\stamp-expert.ru\admin\themes\default\template\helpers\tree\tree_node_folder.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2227958a05f76972352-93027168%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '898a6587586d4d82eb5643f79c64868860ae4042' => 
    array (
      0 => 'E:\\DevServer\\OpenServer\\domains\\stamp-expert.ru\\admin\\themes\\default\\template\\helpers\\tree\\tree_node_folder.tpl',
      1 => 1486904921,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2227958a05f76972352-93027168',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'node' => 0,
    'children' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58a05f76986280_21356135',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58a05f76986280_21356135')) {function content_58a05f76986280_21356135($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include 'E:\\DevServer\\OpenServer\\domains\\stamp-expert.ru\\tools\\smarty\\plugins\\modifier.escape.php';
?>
<li class="tree-folder">
	<span class="tree-folder-name">
		<i class="icon-folder-close"></i>
		<label class="tree-toggler"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['node']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</label>
	</span>
	<ul class="tree">
		<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['children']->value, 'UTF-8');?>

	</ul>
</li><?php }} ?>
