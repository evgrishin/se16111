<?php /* Smarty version Smarty-3.1.19, created on 2017-02-12 16:40:58
         compiled from "E:\DevServer\OpenServer\domains\stamp-expert.ru\modules\blockfacebook\blockfacebook.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1840758a065eac51d32-27289021%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ff53a6feea0cf42383c0a8d25af2ae3a75b4d87d' => 
    array (
      0 => 'E:\\DevServer\\OpenServer\\domains\\stamp-expert.ru\\modules\\blockfacebook\\blockfacebook.tpl',
      1 => 1486904837,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1840758a065eac51d32-27289021',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'facebookurl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58a065eacc9ae1_94325480',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58a065eacc9ae1_94325480')) {function content_58a065eacc9ae1_94325480($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['facebookurl']->value!='') {?>
<div id="fb-root"></div>
<div id="facebook_block" class="col-xs-4">
	<h4 ><?php echo smartyTranslate(array('s'=>'Follow us on Facebook','mod'=>'blockfacebook'),$_smarty_tpl);?>
</h4>
	<div class="facebook-fanbox">
		<div class="fb-like-box" data-href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['facebookurl']->value, ENT_QUOTES, 'UTF-8', true);?>
" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="false" data-show-border="false">
		</div>
	</div>
</div>
<?php }?>
<?php }} ?>
