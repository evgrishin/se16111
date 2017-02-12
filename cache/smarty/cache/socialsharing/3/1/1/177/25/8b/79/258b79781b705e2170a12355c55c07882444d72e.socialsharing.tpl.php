<?php /*%%SmartyHeaderCode:1399358a0667d4c43c2-08976071%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '258b79781b705e2170a12355c55c07882444d72e' => 
    array (
      0 => 'E:\\DevServer\\OpenServer\\domains\\stamp-expert.ru\\modules\\socialsharing\\views\\templates\\hook\\socialsharing.tpl',
      1 => 1486904848,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1399358a0667d4c43c2-08976071',
  'variables' => 
  array (
    'PS_SC_TWITTER' => 0,
    'PS_SC_FACEBOOK' => 0,
    'PS_SC_GOOGLE' => 0,
    'PS_SC_PINTEREST' => 0,
    'module_dir' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58a0667d5658e1_76199360',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58a0667d5658e1_76199360')) {function content_58a0667d5658e1_76199360($_smarty_tpl) {?>
	<p class="socialsharing_product list-inline no-print">
					<button data-type="twitter" type="button" class="btn btn-default btn-twitter social-sharing">
				<i class="icon-twitter"></i> Твит
				<!-- <img src="http://stamp-expert.ru/modules/socialsharing/img/twitter.gif" alt="Tweet" /> -->
			</button>
							<button data-type="facebook" type="button" class="btn btn-default btn-facebook social-sharing">
				<i class="icon-facebook"></i> Поделиться
				<!-- <img src="http://stamp-expert.ru/modules/socialsharing/img/facebook.gif" alt="Facebook Like" /> -->
			</button>
							<button data-type="google-plus" type="button" class="btn btn-default btn-google-plus social-sharing">
				<i class="icon-google-plus"></i> Google+
				<!-- <img src="http://stamp-expert.ru/modules/socialsharing/img/google.gif" alt="Google Plus" /> -->
			</button>
							<button data-type="pinterest" type="button" class="btn btn-default btn-pinterest social-sharing">
				<i class="icon-pinterest"></i> Pinterest
				<!-- <img src="http://stamp-expert.ru/modules/socialsharing/img/pinterest.gif" alt="Pinterest" /> -->
			</button>
			</p>
<?php }} ?>
