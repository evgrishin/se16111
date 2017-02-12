<?php /* Smarty version Smarty-3.1.19, created on 2017-02-12 16:13:21
         compiled from "E:\DevServer\OpenServer\domains\stamp-expert.ru\themes\default-bootstrap\modules\referralprogram\views\templates\hook\order-confirmation.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2208058a05f718162a9-33251933%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a0a972277280f29fecf238a6b3152c22a5c49e32' => 
    array (
      0 => 'E:\\DevServer\\OpenServer\\domains\\stamp-expert.ru\\themes\\default-bootstrap\\modules\\referralprogram\\views\\templates\\hook\\order-confirmation.tpl',
      1 => 1486904863,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2208058a05f718162a9-33251933',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sponsor_firstname' => 0,
    'sponsor_lastname' => 0,
    'discount' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58a05f71829310_56874929',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58a05f71829310_56874929')) {function content_58a05f71829310_56874929($_smarty_tpl) {?>

<p class="success">
	<?php echo smartyTranslate(array('s'=>'Thanks to your order, your sponsor %1$s %2$s will earn a voucher worth %3$d off when this order is confirmed.','sprintf'=>array($_smarty_tpl->tpl_vars['sponsor_firstname']->value,$_smarty_tpl->tpl_vars['sponsor_lastname']->value,$_smarty_tpl->tpl_vars['discount']->value),'mod'=>'referralprogram'),$_smarty_tpl);?>

</p>
<br/><?php }} ?>
