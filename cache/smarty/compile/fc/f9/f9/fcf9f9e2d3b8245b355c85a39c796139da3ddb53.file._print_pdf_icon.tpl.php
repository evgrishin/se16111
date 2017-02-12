<?php /* Smarty version Smarty-3.1.19, created on 2017-02-12 16:13:19
         compiled from "E:\DevServer\OpenServer\domains\stamp-expert.ru\admin\themes\default\template\controllers\outstanding\_print_pdf_icon.tpl" */ ?>
<?php /*%%SmartyHeaderCode:687258a05f6f81a615-54290902%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fcf9f9e2d3b8245b355c85a39c796139da3ddb53' => 
    array (
      0 => 'E:\\DevServer\\OpenServer\\domains\\stamp-expert.ru\\admin\\themes\\default\\template\\controllers\\outstanding\\_print_pdf_icon.tpl',
      1 => 1486904916,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '687258a05f6f81a615-54290902',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'id_invoice' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58a05f6f834292_98298536',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58a05f6f834292_98298536')) {function content_58a05f6f834292_98298536($_smarty_tpl) {?>


<?php if (Configuration::get('PS_INVOICE')) {?>
	<span style="width:20px; margin-right:5px;">
		<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminPdf'), ENT_QUOTES, 'UTF-8', true);?>
&amp;submitAction=generateInvoicePDF&amp;id_order_invoice=<?php echo $_smarty_tpl->tpl_vars['id_invoice']->value;?>
"><img src="../img/admin/tab-invoice.gif" alt="invoice" /></a>
	</span>
<?php }?><?php }} ?>
