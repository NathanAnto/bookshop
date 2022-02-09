<?php
/* Smarty version 3.1.39, created on 2022-02-09 09:05:55
  from 'C:\xampp\htdocs\bookshop\dev\themes\classic\templates\_partials\helpers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_620375e3b3c948_28887517',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '968f673a401e55a3ac25264365b690c20f6e48df' => 
    array (
      0 => 'C:\\xampp\\htdocs\\bookshop\\dev\\themes\\classic\\templates\\_partials\\helpers.tpl',
      1 => 1644393602,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_620375e3b3c948_28887517 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => 'C:\\xampp\\htdocs\\bookshop\\dev\\var\\cache\\prod\\smarty\\compile\\classiclayouts_layout_full_width_tpl\\96\\8f\\67\\968f673a401e55a3ac25264365b690c20f6e48df_2.file.helpers.tpl.php',
    'uid' => '968f673a401e55a3ac25264365b690c20f6e48df',
    'call_name' => 'smarty_template_function_renderLogo_1629805472620375e3b36b44_98002935',
  ),
));
?> 

<?php }
/* smarty_template_function_renderLogo_1629805472620375e3b36b44_98002935 */
if (!function_exists('smarty_template_function_renderLogo_1629805472620375e3b36b44_98002935')) {
function smarty_template_function_renderLogo_1629805472620375e3b36b44_98002935(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
">
    <img
      class="logo img-fluid"
      src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo_details']['src'], ENT_QUOTES, 'UTF-8');?>
"
      alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
      width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo_details']['width'], ENT_QUOTES, 'UTF-8');?>
"
      height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo_details']['height'], ENT_QUOTES, 'UTF-8');?>
">
  </a>
<?php
}}
/*/ smarty_template_function_renderLogo_1629805472620375e3b36b44_98002935 */
}
