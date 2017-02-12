<?php /* Smarty version Smarty-3.1.19, created on 2017-02-12 16:43:25
         compiled from "E:\DevServer\OpenServer\domains\stamp-expert.ru\modules\productpaymentlogos\views\templates\hook\productpaymentlogos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2974258a0667d5979a4-84760667%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e52ef25df31a56183f34afbfbf5e714f049733a8' => 
    array (
      0 => 'E:\\DevServer\\OpenServer\\domains\\stamp-expert.ru\\modules\\productpaymentlogos\\views\\templates\\hook\\productpaymentlogos.tpl',
      1 => 1486904847,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2974258a0667d5979a4-84760667',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'banner_title' => 0,
    'banner_link' => 0,
    'module_dir' => 0,
    'banner_img' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58a0667d5eef31_32585382',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58a0667d5eef31_32585382')) {function content_58a0667d5eef31_32585382($_smarty_tpl) {?>
<!-- Productpaymentlogos module -->
<div id="product_payment_logos">
	<div class="box-security">
    <h5 class="product-heading-h5"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['banner_title']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</h5>
  	<?php if ($_smarty_tpl->tpl_vars['banner_link']->value!='') {?><a href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['banner_link']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" title="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['banner_title']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"><?php }?>
		<img src="<?php echo $_smarty_tpl->tpl_vars['module_dir']->value;?>
<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['banner_img']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" alt="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['banner_title']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" class="img-responsive" />
	<?php if ($_smarty_tpl->tpl_vars['banner_link']->value!='') {?></a><?php }?>
    </div>
</div>
<!-- /Productpaymentlogos module -->
<?php }} ?>
