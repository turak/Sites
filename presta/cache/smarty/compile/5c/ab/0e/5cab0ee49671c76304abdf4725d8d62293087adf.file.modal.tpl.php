<?php /* Smarty version Smarty-3.1.19, created on 2015-10-19 12:52:12
         compiled from "/home/ultimegu/www/presta/admin8642/themes/default/template/helpers/modules_list/modal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7545826005624cb5c1f2fe0-53163511%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5cab0ee49671c76304abdf4725d8d62293087adf' => 
    array (
      0 => '/home/ultimegu/www/presta/admin8642/themes/default/template/helpers/modules_list/modal.tpl',
      1 => 1440056610,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7545826005624cb5c1f2fe0-53163511',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5624cb5c1f7b27_06334795',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5624cb5c1f7b27_06334795')) {function content_5624cb5c1f7b27_06334795($_smarty_tpl) {?><div class="modal fade" id="modules_list_container">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3 class="modal-title"><?php echo smartyTranslate(array('s'=>'Recommended Modules and Services'),$_smarty_tpl);?>
</h3>
			</div>
			<div class="modal-body">
				<div id="modules_list_container_tab_modal" style="display:none;"></div>
				<div id="modules_list_loader"><i class="icon-refresh icon-spin"></i></div>
			</div>
		</div>
	</div>
</div>
<?php }} ?>
