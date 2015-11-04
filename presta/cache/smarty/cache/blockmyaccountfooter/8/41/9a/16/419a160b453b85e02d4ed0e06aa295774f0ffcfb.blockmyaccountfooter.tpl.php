<?php /*%%SmartyHeaderCode:21255136535624da318b6154-09349391%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '419a160b453b85e02d4ed0e06aa295774f0ffcfb' => 
    array (
      0 => '/home/ultimegu/www/presta/themes/default-bootstrap/modules/blockmyaccountfooter/blockmyaccountfooter.tpl',
      1 => 1440056612,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21255136535624da318b6154-09349391',
  'variables' => 
  array (
    'link' => 0,
    'returnAllowed' => 0,
    'voucherAllowed' => 0,
    'HOOK_BLOCK_MY_ACCOUNT' => 0,
    'is_logged' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5624da3193b747_60149678',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5624da3193b747_60149678')) {function content_5624da3193b747_60149678($_smarty_tpl) {?>
<!-- Block myaccount module -->
<section class="footer-block col-xs-12 col-sm-4">
	<h4><a href="http://ultime-guilde.net/presta/index.php?controller=my-account" title="Gérer mon compte client" rel="nofollow">Mon compte</a></h4>
	<div class="block_content toggle-footer">
		<ul class="bullet">
			<li><a href="http://ultime-guilde.net/presta/index.php?controller=history" title="Mes commandes" rel="nofollow">Mes commandes</a></li>
						<li><a href="http://ultime-guilde.net/presta/index.php?controller=order-slip" title="Mes avoirs" rel="nofollow">Mes avoirs</a></li>
			<li><a href="http://ultime-guilde.net/presta/index.php?controller=addresses" title="Mes adresses" rel="nofollow">Mes adresses</a></li>
			<li><a href="http://ultime-guilde.net/presta/index.php?controller=identity" title="Gérer mes informations personnelles" rel="nofollow">Mes informations personnelles</a></li>
						
            		</ul>
	</div>
</section>
<!-- /Block myaccount module -->
<?php }} ?>
