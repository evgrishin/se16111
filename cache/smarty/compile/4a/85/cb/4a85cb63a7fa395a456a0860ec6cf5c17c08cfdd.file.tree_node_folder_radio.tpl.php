<?php /* Smarty version Smarty-3.1.19, created on 2017-02-12 16:13:17
         compiled from "E:\DevServer\OpenServer\domains\stamp-expert.ru\admin\themes\default\template\controllers\groups\helpers\tree\tree_node_folder_radio.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2299158a05f6d384e27-51901360%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4a85cb63a7fa395a456a0860ec6cf5c17c08cfdd' => 
    array (
      0 => 'E:\\DevServer\\OpenServer\\domains\\stamp-expert.ru\\admin\\themes\\default\\template\\controllers\\groups\\helpers\\tree\\tree_node_folder_radio.tpl',
      1 => 1486904914,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2299158a05f6d384e27-51901360',
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
  'unifunc' => 'content_58a05f6d3acfe1_55863318',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58a05f6d3acfe1_55863318')) {function content_58a05f6d3acfe1_55863318($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include 'E:\\DevServer\\OpenServer\\domains\\stamp-expert.ru\\tools\\smarty\\plugins\\modifier.escape.php';
?>
<li class="tree-folder">
	<span class="tree-folder-name<?php if (isset($_smarty_tpl->tpl_vars['node']->value['disabled'])&&$_smarty_tpl->tpl_vars['node']->value['disabled']==true) {?> tree-folder-name-disable<?php }?>">
		<input type="radio" name="id_category" value="<?php echo $_smarty_tpl->tpl_vars['node']->value['id_category'];?>
"<?php if (isset($_smarty_tpl->tpl_vars['node']->value['disabled'])&&$_smarty_tpl->tpl_vars['node']->value['disabled']==true) {?> disabled="disabled"<?php }?> />
		<i class="icon-folder-close"></i>
		<label class="tree-toggler"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['node']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</label>
	</span>
	<ul class="tree">
		<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['children']->value, 'UTF-8');?>

	</ul>
</li><?php }} ?>
