<?php
/* Smarty version 3.1.39, created on 2022-02-09 09:06:40
  from 'C:\xampp\htdocs\bookshop\dev\admin341m0hjuh\themes\default\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_620376106fced4_50683984',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'deff99f25b55323a6cbced345df729ddd836f0a1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\bookshop\\dev\\admin341m0hjuh\\themes\\default\\template\\content.tpl',
      1 => 1644393529,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_620376106fced4_50683984 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>

<div class="row">
	<div class="col-lg-12">
		<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }
}
