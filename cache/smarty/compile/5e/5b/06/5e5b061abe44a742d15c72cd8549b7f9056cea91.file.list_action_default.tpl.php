<?php /* Smarty version Smarty-3.1.19, created on 2017-02-12 16:13:25
         compiled from "E:\DevServer\OpenServer\domains\stamp-expert.ru\admin\themes\default\template\helpers\list\list_action_default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:966258a05f75097de1-90656314%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5e5b061abe44a742d15c72cd8549b7f9056cea91' => 
    array (
      0 => 'E:\\DevServer\\OpenServer\\domains\\stamp-expert.ru\\admin\\themes\\default\\template\\helpers\\list\\list_action_default.tpl',
      1 => 1486904921,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '966258a05f75097de1-90656314',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
    'name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58a05f750b9711_91148903',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58a05f750b9711_91148903')) {function content_58a05f750b9711_91148903($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
"<?php if (isset($_smarty_tpl->tpl_vars['name']->value)) {?> name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8', true);?>
"<?php }?> class="default">
	<i class="icon-asterisk"></i> <?php echo $_smarty_tpl->tpl_vars['action']->value;?>

</a><?php }} ?>
