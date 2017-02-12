<?php /* Smarty version Smarty-3.1.19, created on 2017-02-12 16:13:21
         compiled from "E:\DevServer\OpenServer\domains\stamp-expert.ru\admin\themes\default\template\controllers\shop\helpers\tree\shop_tree_node_folder.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2629758a05f71d38f85-70754449%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3f29b6ff4393bca6ad945692a6eff9578738d1d6' => 
    array (
      0 => 'E:\\DevServer\\OpenServer\\domains\\stamp-expert.ru\\admin\\themes\\default\\template\\controllers\\shop\\helpers\\tree\\shop_tree_node_folder.tpl',
      1 => 1486904918,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2629758a05f71d38f85-70754449',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'url_shop_group' => 0,
    'node' => 0,
    'children' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58a05f71d538e3_42804266',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58a05f71d538e3_42804266')) {function content_58a05f71d538e3_42804266($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include 'E:\\DevServer\\OpenServer\\domains\\stamp-expert.ru\\tools\\smarty\\plugins\\modifier.escape.php';
?>
<li class="tree-folder">
	<span class="tree-folder-name">
		<i class="icon-folder-close"></i>
		<label class="tree-toggler"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['url_shop_group']->value, ENT_QUOTES, 'UTF-8', true);?>
&amp;id_shop_group=<?php echo $_smarty_tpl->tpl_vars['node']->value['id'];?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['node']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</a></label>
	</span>
	<ul class="tree">
		<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['children']->value, 'UTF-8');?>

	</ul>
</li><?php }} ?>
