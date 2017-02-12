<?php /* Smarty version Smarty-3.1.19, created on 2017-02-12 16:13:21
         compiled from "E:\DevServer\OpenServer\domains\stamp-expert.ru\themes\default-bootstrap\modules\referralprogram\views\templates\front\rules.tpl" */ ?>
<?php /*%%SmartyHeaderCode:882958a05f71778f25-38535005%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1c99491088f1c1bd93b5b0d7d3968ccbc89b43be' => 
    array (
      0 => 'E:\\DevServer\\OpenServer\\domains\\stamp-expert.ru\\themes\\default-bootstrap\\modules\\referralprogram\\views\\templates\\front\\rules.tpl',
      1 => 1486904863,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '882958a05f71778f25-38535005',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'xml' => 0,
    'paragraph' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58a05f71796534_76216583',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58a05f71796534_76216583')) {function content_58a05f71796534_76216583($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include 'E:\\DevServer\\OpenServer\\domains\\stamp-expert.ru\\tools\\smarty\\plugins\\modifier.replace.php';
?>

<h3><?php echo smartyTranslate(array('s'=>'Referral program rules','mod'=>'referralprogram'),$_smarty_tpl);?>
</h3>

<?php if (isset($_smarty_tpl->tpl_vars['xml']->value)) {?>
<div id="referralprogram_rules">
	<?php if (isset($_smarty_tpl->tpl_vars['xml']->value->body->{$_smarty_tpl->tpl_vars['paragraph']->value})) {?><div class="rte"><?php echo smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['xml']->value->body->{$_smarty_tpl->tpl_vars['paragraph']->value},"\'","'"),'\"','"');?>
</div><?php }?>
</div>
<?php }?>
<?php }} ?>
