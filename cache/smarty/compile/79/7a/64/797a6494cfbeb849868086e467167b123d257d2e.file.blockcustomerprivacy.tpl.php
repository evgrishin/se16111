<?php /* Smarty version Smarty-3.1.19, created on 2017-02-12 16:13:18
         compiled from "E:\DevServer\OpenServer\domains\stamp-expert.ru\themes\default-bootstrap\modules\blockcustomerprivacy\blockcustomerprivacy.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2886158a05f6ec008c4-63917165%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '797a6494cfbeb849868086e467167b123d257d2e' => 
    array (
      0 => 'E:\\DevServer\\OpenServer\\domains\\stamp-expert.ru\\themes\\default-bootstrap\\modules\\blockcustomerprivacy\\blockcustomerprivacy.tpl',
      1 => 1486904861,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2886158a05f6ec008c4-63917165',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'privacy_message' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58a05f6ec0ba78_75406491',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58a05f6ec0ba78_75406491')) {function content_58a05f6ec0ba78_75406491($_smarty_tpl) {?>

<div class="error_customerprivacy" style="color:red;"></div>
<fieldset class="account_creation customerprivacy">
	<h3 class="page-subheading">
		<?php echo smartyTranslate(array('s'=>'Customer data privacy','mod'=>'blockcustomerprivacy'),$_smarty_tpl);?>

	</h3>
	<div style="width:21px; float:left;">
		<div class="required checkbox">
			<input type="checkbox" value="1" id="customer_privacy" name="customer_privacy" autocomplete="off"/>
		</div>
	</div>
	<div style="width: 92%; float: left; margin-top: 8px;">
        <label for="customer_privacy" style="font-weight: normal;"><?php echo $_smarty_tpl->tpl_vars['privacy_message']->value;?>
</label>				
	</div>
</fieldset><?php }} ?>
