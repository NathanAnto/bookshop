<?php
/* Smarty version 3.1.39, created on 2022-02-09 11:16:06
  from 'C:\xampp\htdocs\bookshop\dev\modules\steavisgarantis\views\templates\front\displayHeader.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_620394663d5484_85636367',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4637e97d7cdd3737f7ede08f377f7aaf7357c75d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\bookshop\\dev\\modules\\steavisgarantis\\views\\templates\\front\\displayHeader.tpl',
      1 => 1644398559,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_620394663d5484_85636367 (Smarty_Internal_Template $_smarty_tpl) {
?>
<link href="//fonts.googleapis.com/css?family=Open+Sans:600,400,400i|Oswald:700" rel="stylesheet" type="text/css" media="all">
<?php if ($_smarty_tpl->tpl_vars['displayJSWidget']->value) {?> 
<?php echo '<script'; ?>
 type="text/javascript">
    var agSiteId="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['shopID']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
";
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['domain']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
wp-content/plugins/ag-core/widgets/JsWidget.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php }?>

<style>
    <?php if ($_smarty_tpl->tpl_vars['customCSS']->value) {?>
    <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['customCSS']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>

    <?php }?>
</style><?php }
}
