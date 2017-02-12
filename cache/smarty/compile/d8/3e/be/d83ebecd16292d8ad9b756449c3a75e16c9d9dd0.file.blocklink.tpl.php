<?php /* Smarty version Smarty-3.1.19, created on 2017-02-12 16:13:19
         compiled from "E:\DevServer\OpenServer\domains\stamp-expert.ru\themes\default-bootstrap\modules\blocklink\blocklink.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2348158a05f6f1e34f5-66283248%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd83ebecd16292d8ad9b756449c3a75e16c9d9dd0' => 
    array (
      0 => 'E:\\DevServer\\OpenServer\\domains\\stamp-expert.ru\\themes\\default-bootstrap\\modules\\blocklink\\blocklink.tpl',
      1 => 1486904861,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2348158a05f6f1e34f5-66283248',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'url' => 0,
    'title' => 0,
    'blocklink_links' => 0,
    'lang' => 0,
    'blocklink_link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58a05f6f22b024_18354253',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58a05f6f22b024_18354253')) {function content_58a05f6f22b024_18354253($_smarty_tpl) {?>

<!-- Block links module -->
<div id="links_block_left" class="block">
	<p class="title_block">
	<?php if ($_smarty_tpl->tpl_vars['url']->value) {?>
		<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['url']->value, ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8', true);?>
</a>
	<?php } else { ?>
		<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8', true);?>

	<?php }?>
	</p>
    <div class="block_content list-block">
        <ul>
            <?php  $_smarty_tpl->tpl_vars['blocklink_link'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['blocklink_link']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['blocklink_links']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['blocklink_link']->key => $_smarty_tpl->tpl_vars['blocklink_link']->value) {
$_smarty_tpl->tpl_vars['blocklink_link']->_loop = true;
?>
                <?php if (isset($_smarty_tpl->tpl_vars['blocklink_link']->value[$_smarty_tpl->tpl_vars['lang']->value])) {?> 
                    <li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['blocklink_link']->value['url'], ENT_QUOTES, 'UTF-8', true);?>
"<?php if ($_smarty_tpl->tpl_vars['blocklink_link']->value['newWindow']) {?> onclick="window.open(this.href);return false;"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['blocklink_link']->value[$_smarty_tpl->tpl_vars['lang']->value], ENT_QUOTES, 'UTF-8', true);?>
</a></li>
                <?php }?>
            <?php } ?>
        </ul>
    </div>
</div>
<!-- /Block links module -->
<?php }} ?>
