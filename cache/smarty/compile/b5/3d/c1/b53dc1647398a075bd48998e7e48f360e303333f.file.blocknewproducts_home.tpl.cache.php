<?php /* Smarty version Smarty-3.1.19, created on 2017-02-12 16:40:59
         compiled from "E:\DevServer\OpenServer\domains\stamp-expert.ru\modules\blocknewproducts\views\templates\hook\blocknewproducts_home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:338558a065eb40e449-03195247%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b53dc1647398a075bd48998e7e48f360e303333f' => 
    array (
      0 => 'E:\\DevServer\\OpenServer\\domains\\stamp-expert.ru\\modules\\blocknewproducts\\views\\templates\\hook\\blocknewproducts_home.tpl',
      1 => 1486904839,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '338558a065eb40e449-03195247',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'new_products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58a065eb43a578_03372365',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58a065eb43a578_03372365')) {function content_58a065eb43a578_03372365($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['new_products']->value)&&$_smarty_tpl->tpl_vars['new_products']->value) {?>
	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array('products'=>$_smarty_tpl->tpl_vars['new_products']->value,'class'=>'blocknewproducts tab-pane','id'=>'blocknewproducts'), 0);?>

<?php } else { ?>
<ul id="blocknewproducts" class="blocknewproducts tab-pane">
	<li class="alert alert-info"><?php echo smartyTranslate(array('s'=>'No new products at this time.','mod'=>'blocknewproducts'),$_smarty_tpl);?>
</li>
</ul>
<?php }?>
<?php }} ?>
