<?php /* Smarty version Smarty-3.1.19, created on 2017-02-12 16:13:17
         compiled from "E:\DevServer\OpenServer\domains\stamp-expert.ru\admin\themes\default\template\controllers\logs\employee_field.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2595258a05f6d98d298-12730000%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2fa1f09fbd807a317ac8a4a11377839866f4c6f0' => 
    array (
      0 => 'E:\\DevServer\\OpenServer\\domains\\stamp-expert.ru\\admin\\themes\\default\\template\\controllers\\logs\\employee_field.tpl',
      1 => 1486904915,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2595258a05f6d98d298-12730000',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'employee_image' => 0,
    'employee_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58a05f6d9997c1_17598662',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58a05f6d9997c1_17598662')) {function content_58a05f6d9997c1_17598662($_smarty_tpl) {?>
<span class="employee_avatar_small">
	<img class="imgm img-thumbnail" alt="" src="<?php echo $_smarty_tpl->tpl_vars['employee_image']->value;?>
" width="32" height="32" />
</span>
<?php echo $_smarty_tpl->tpl_vars['employee_name']->value;?>
<?php }} ?>
