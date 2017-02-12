<?php /* Smarty version Smarty-3.1.19, created on 2017-02-12 16:13:20
         compiled from "E:\DevServer\OpenServer\domains\stamp-expert.ru\themes\default-bootstrap\modules\mailalerts\views\templates\hook\my-account.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2817458a05f70e1fce2-41561765%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd8126221b47d051549f49cacd23eda96d9286efe' => 
    array (
      0 => 'E:\\DevServer\\OpenServer\\domains\\stamp-expert.ru\\themes\\default-bootstrap\\modules\\mailalerts\\views\\templates\\hook\\my-account.tpl',
      1 => 1486904863,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2817458a05f70e1fce2-41561765',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58a05f70e39d59_75805076',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58a05f70e39d59_75805076')) {function content_58a05f70e39d59_75805076($_smarty_tpl) {?>

<li class="mailalerts">
	<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('mailalerts','account',array(),true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'My alerts','mod'=>'mailalerts'),$_smarty_tpl);?>
" rel="nofollow">
    	<i class="icon-envelope"></i>
		<span><?php echo smartyTranslate(array('s'=>'My alerts','mod'=>'mailalerts'),$_smarty_tpl);?>
</span>
	</a>
</li>
<?php }} ?>
