<?php /* Smarty version Smarty-3.1.19, created on 2017-02-12 16:13:22
         compiled from "E:\DevServer\OpenServer\domains\stamp-expert.ru\admin\themes\default\template\controllers\tax_rules\helpers\list\list_action_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1372158a05f723008e9-13141399%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '497724aa287f7bbe0ae0a758195c65d75151f986' => 
    array (
      0 => 'E:\\DevServer\\OpenServer\\domains\\stamp-expert.ru\\admin\\themes\\default\\template\\controllers\\tax_rules\\helpers\\list\\list_action_edit.tpl',
      1 => 1486904920,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1372158a05f723008e9-13141399',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58a05f723104a2_95481127',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58a05f723104a2_95481127')) {function content_58a05f723104a2_95481127($_smarty_tpl) {?>
<a onclick="loadTaxRule('<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8', true);?>
'); return false;" href="#" class="btn btn-default">
	<i class="icon-pencil"></i> 
	<?php echo $_smarty_tpl->tpl_vars['action']->value;?>

</a><?php }} ?>
