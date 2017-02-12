<?php /* Smarty version Smarty-3.1.19, created on 2017-02-12 16:13:26
         compiled from "E:\DevServer\OpenServer\domains\stamp-expert.ru\admin\themes\default\template\helpers\tree\tree_toolbar_search.tpl" */ ?>
<?php /*%%SmartyHeaderCode:285858a05f76c8bac7-23067559%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1c6ca9298a199c36efa243e5f39e8e54c3e1db1d' => 
    array (
      0 => 'E:\\DevServer\\OpenServer\\domains\\stamp-expert.ru\\admin\\themes\\default\\template\\helpers\\tree\\tree_toolbar_search.tpl',
      1 => 1486904921,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '285858a05f76c8bac7-23067559',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'label' => 0,
    'id' => 0,
    'name' => 0,
    'class' => 0,
    'typeahead_source' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58a05f76cd5654_05017919',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58a05f76cd5654_05017919')) {function content_58a05f76cd5654_05017919($_smarty_tpl) {?>

<!-- <label for="node-search"><?php echo smartyTranslate(array('s'=>$_smarty_tpl->tpl_vars['label']->value),$_smarty_tpl);?>
</label> -->
<div class="pull-right">
	<input type="text"
		<?php if (isset($_smarty_tpl->tpl_vars['id']->value)) {?>id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8', true);?>
"<?php }?>
		<?php if (isset($_smarty_tpl->tpl_vars['name']->value)) {?>name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8', true);?>
"<?php }?>
		class="search-field<?php if (isset($_smarty_tpl->tpl_vars['class']->value)) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['class']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php }?>"
		placeholder="<?php echo smartyTranslate(array('s'=>'search...'),$_smarty_tpl);?>
" />
</div>

<?php if (isset($_smarty_tpl->tpl_vars['typeahead_source']->value)&&isset($_smarty_tpl->tpl_vars['id']->value)) {?>

<script type="text/javascript">
	$(function() {

		function startTypeahead() {
			if (typeof $.fn.typeahead === 'undefined') {
				setTimeout(startTypeahead, 100);
				return;
			}
			$("#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8', true);?>
").typeahead(
			{
				name: "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8', true);?>
",
				valueKey: 'name',
				local: [<?php echo $_smarty_tpl->tpl_vars['typeahead_source']->value;?>
]
			});

			$("#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8', true);?>
").keypress(function (event) {
				if (event.which == 13) {
					event.stopPropagation();
				}
			});
		}

		startTypeahead();
	});
</script>
<?php }?>
<?php }} ?>
