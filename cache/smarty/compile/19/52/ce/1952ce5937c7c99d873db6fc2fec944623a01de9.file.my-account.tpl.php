<?php /* Smarty version Smarty-3.1.19, created on 2017-02-12 16:13:19
         compiled from "E:\DevServer\OpenServer\domains\stamp-expert.ru\themes\default-bootstrap\modules\blockwishlist\my-account.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2656858a05f6fe6b014-03404578%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1952ce5937c7c99d873db6fc2fec944623a01de9' => 
    array (
      0 => 'E:\\DevServer\\OpenServer\\domains\\stamp-expert.ru\\themes\\default-bootstrap\\modules\\blockwishlist\\my-account.tpl',
      1 => 1486904861,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2656858a05f6fe6b014-03404578',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58a05f6fe86fb9_44384838',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58a05f6fe86fb9_44384838')) {function content_58a05f6fe86fb9_44384838($_smarty_tpl) {?>

<!-- MODULE WishList -->
<li class="lnk_wishlist">
	<a 	href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('blockwishlist','mywishlist',array(),true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'My wishlists','mod'=>'blockwishlist'),$_smarty_tpl);?>
">
		<i class="icon-heart"></i>
		<span><?php echo smartyTranslate(array('s'=>'My wishlists','mod'=>'blockwishlist'),$_smarty_tpl);?>
</span>
	</a>
</li>
<!-- END : MODULE WishList --><?php }} ?>
