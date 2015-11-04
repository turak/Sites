<?php /* Smarty version Smarty-3.1.19, created on 2015-10-21 20:04:20
         compiled from "/home/ultimegu/www/presta/modules/blockbestsellers/views/templates/hook/blockbestsellers-home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1284936355627d3a41cbd01-86660396%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '73024979ed9ec6a0a601351a4c2b1829a06fae16' => 
    array (
      0 => '/home/ultimegu/www/presta/modules/blockbestsellers/views/templates/hook/blockbestsellers-home.tpl',
      1 => 1440056612,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1284936355627d3a41cbd01-86660396',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'best_sellers' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5627d3a41da8a7_40170970',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5627d3a41da8a7_40170970')) {function content_5627d3a41da8a7_40170970($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['best_sellers']->value)&&$_smarty_tpl->tpl_vars['best_sellers']->value) {?>
	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array('products'=>$_smarty_tpl->tpl_vars['best_sellers']->value,'class'=>'blockbestsellers tab-pane','id'=>'blockbestsellers'), 0);?>

<?php } else { ?>
<ul id="blockbestsellers" class="blockbestsellers tab-pane">
	<li class="alert alert-info"><?php echo smartyTranslate(array('s'=>'No best sellers at this time.','mod'=>'blockbestsellers'),$_smarty_tpl);?>
</li>
</ul>
<?php }?>
<?php }} ?>
