<?php /* Smarty version Smarty-3.1.19, created on 2017-02-12 16:40:59
         compiled from "E:\DevServer\OpenServer\domains\stamp-expert.ru\modules\blockbestsellers\views\templates\hook\blockbestsellers-home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2385258a065eb9526d9-23324792%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9b6aa8a03100983e59b89e852892ab91c37ba3c2' => 
    array (
      0 => 'E:\\DevServer\\OpenServer\\domains\\stamp-expert.ru\\modules\\blockbestsellers\\views\\templates\\hook\\blockbestsellers-home.tpl',
      1 => 1486904834,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2385258a065eb9526d9-23324792',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'best_sellers' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58a065eb9685e5_39892597',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58a065eb9685e5_39892597')) {function content_58a065eb9685e5_39892597($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['best_sellers']->value)&&$_smarty_tpl->tpl_vars['best_sellers']->value) {?>
	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array('products'=>$_smarty_tpl->tpl_vars['best_sellers']->value,'class'=>'blockbestsellers tab-pane','id'=>'blockbestsellers'), 0);?>

<?php } else { ?>
<ul id="blockbestsellers" class="blockbestsellers tab-pane">
	<li class="alert alert-info"><?php echo smartyTranslate(array('s'=>'No best sellers at this time.','mod'=>'blockbestsellers'),$_smarty_tpl);?>
</li>
</ul>
<?php }?>
<?php }} ?>
