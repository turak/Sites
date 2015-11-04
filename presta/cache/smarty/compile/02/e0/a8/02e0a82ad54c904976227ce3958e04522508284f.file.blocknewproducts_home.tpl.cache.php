<?php /* Smarty version Smarty-3.1.19, created on 2015-10-21 20:04:19
         compiled from "/home/ultimegu/www/presta/modules/blocknewproducts/views/templates/hook/blocknewproducts_home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6091759205627d3a373f627-87165502%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '02e0a82ad54c904976227ce3958e04522508284f' => 
    array (
      0 => '/home/ultimegu/www/presta/modules/blocknewproducts/views/templates/hook/blocknewproducts_home.tpl',
      1 => 1440056614,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6091759205627d3a373f627-87165502',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'new_products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5627d3a3753e31_09016767',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5627d3a3753e31_09016767')) {function content_5627d3a3753e31_09016767($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['new_products']->value)&&$_smarty_tpl->tpl_vars['new_products']->value) {?>
	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array('products'=>$_smarty_tpl->tpl_vars['new_products']->value,'class'=>'blocknewproducts tab-pane','id'=>'blocknewproducts'), 0);?>

<?php } else { ?>
<ul id="blocknewproducts" class="blocknewproducts tab-pane">
	<li class="alert alert-info"><?php echo smartyTranslate(array('s'=>'No new products at this time.','mod'=>'blocknewproducts'),$_smarty_tpl);?>
</li>
</ul>
<?php }?>
<?php }} ?>
