<?php /* Smarty version Smarty-3.1.19, created on 2017-02-12 16:13:25
         compiled from "E:\DevServer\OpenServer\domains\stamp-expert.ru\admin\themes\default\template\helpers\list\list_action_duplicate.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2437358a05f7515db34-78110962%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fa36dfde7f7672c4b3223b74ded1ee50fbdcb9a5' => 
    array (
      0 => 'E:\\DevServer\\OpenServer\\domains\\stamp-expert.ru\\admin\\themes\\default\\template\\helpers\\list\\list_action_duplicate.tpl',
      1 => 1486904921,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2437358a05f7515db34-78110962',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'action' => 0,
    'confirm' => 0,
    'location_ok' => 0,
    'location_ko' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58a05f7518dea2_13228316',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58a05f7518dea2_13228316')) {function content_58a05f7518dea2_13228316($_smarty_tpl) {?>
<a href="#" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" onclick="<?php if ($_smarty_tpl->tpl_vars['confirm']->value) {?>confirm_link('', '<?php echo $_smarty_tpl->tpl_vars['confirm']->value;?>
', '<?php echo smartyTranslate(array('s'=>'Yes'),$_smarty_tpl);?>
', '<?php echo smartyTranslate(array('s'=>'No'),$_smarty_tpl);?>
', '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location_ok']->value, ENT_QUOTES, 'UTF-8', true);?>
', '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location_ko']->value, ENT_QUOTES, 'UTF-8', true);?>
')<?php } else { ?>document.location = '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location_ko']->value, ENT_QUOTES, 'UTF-8', true);?>
'<?php }?>">
	<i class="icon-copy"></i> <?php echo $_smarty_tpl->tpl_vars['action']->value;?>

</a>
<?php }} ?>
