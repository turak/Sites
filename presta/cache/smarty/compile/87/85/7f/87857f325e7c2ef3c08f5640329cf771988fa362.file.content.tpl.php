<?php /* Smarty version Smarty-3.1.19, created on 2015-10-19 12:52:21
         compiled from "/home/ultimegu/www/presta/admin8642/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17436368195624cb65b6be68-41882358%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '87857f325e7c2ef3c08f5640329cf771988fa362' => 
    array (
      0 => '/home/ultimegu/www/presta/admin8642/themes/default/template/content.tpl',
      1 => 1440056612,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17436368195624cb65b6be68-41882358',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5624cb65b74ae8_68663806',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5624cb65b74ae8_68663806')) {function content_5624cb65b74ae8_68663806($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div><?php }} ?>
