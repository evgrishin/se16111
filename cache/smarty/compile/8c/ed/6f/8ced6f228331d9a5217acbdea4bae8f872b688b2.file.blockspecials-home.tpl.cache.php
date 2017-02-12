<?php /* Smarty version Smarty-3.1.19, created on 2017-02-12 16:40:59
         compiled from "E:\DevServer\OpenServer\domains\stamp-expert.ru\modules\blockspecials\views\templates\hook\blockspecials-home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1739758a065eb9cca99-62316960%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8ced6f228331d9a5217acbdea4bae8f872b688b2' => 
    array (
      0 => 'E:\\DevServer\\OpenServer\\domains\\stamp-expert.ru\\modules\\blockspecials\\views\\templates\\hook\\blockspecials-home.tpl',
      1 => 1486904841,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1739758a065eb9cca99-62316960',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'specials' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58a065eba448b6_24818058',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58a065eba448b6_24818058')) {function content_58a065eba448b6_24818058($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['specials']->value)&&$_smarty_tpl->tpl_vars['specials']->value) {?>
	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array('products'=>$_smarty_tpl->tpl_vars['specials']->value,'class'=>'blockspecials tab-pane','id'=>'blockspecials'), 0);?>

<?php } else { ?>
<ul id="blockspecials" class="blockspecials tab-pane">
	<li class="alert alert-info"><?php echo smartyTranslate(array('s'=>'No special products at this time.','mod'=>'blockspecials'),$_smarty_tpl);?>
</li>
</ul>
<?php }?>
<?php }} ?>
