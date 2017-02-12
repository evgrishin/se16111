<?php /* Smarty version Smarty-3.1.19, created on 2017-02-12 16:13:17
         compiled from "E:\DevServer\OpenServer\domains\stamp-expert.ru\themes\default-bootstrap\modules\bankwire\views\templates\hook\payment.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2920358a05f6deeeed0-01812154%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd556a4d998a1f50c6fad59e71d4d4ced32f8a6e2' => 
    array (
      0 => 'E:\\DevServer\\OpenServer\\domains\\stamp-expert.ru\\themes\\default-bootstrap\\modules\\bankwire\\views\\templates\\hook\\payment.tpl',
      1 => 1486904860,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2920358a05f6deeeed0-01812154',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58a05f6df0a0f6_43177454',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58a05f6df0a0f6_43177454')) {function content_58a05f6df0a0f6_43177454($_smarty_tpl) {?>
<div class="row">
	<div class="col-xs-12">
		<p class="payment_module">
			<a class="bankwire" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('bankwire','payment'), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Pay by bank wire','mod'=>'bankwire'),$_smarty_tpl);?>
">
				<?php echo smartyTranslate(array('s'=>'Pay by bank wire','mod'=>'bankwire'),$_smarty_tpl);?>
 <span><?php echo smartyTranslate(array('s'=>'(order processing will be longer)','mod'=>'bankwire'),$_smarty_tpl);?>
</span>
			</a>
		</p>
	</div>
</div>
<?php }} ?>
