<?php
/* Smarty version 3.1.39, created on 2022-02-09 08:55:55
  from 'C:\xampp\htdocs\bookshop\prod\themes\classic\templates\_partials\helpers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6203738b5b6615_71249005',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '182d1987487b59f20d7ed9fecbfd3da682f45de9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\bookshop\\prod\\themes\\classic\\templates\\_partials\\helpers.tpl',
      1 => 1644393085,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6203738b5b6615_71249005 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => 'C:\\xampp\\htdocs\\bookshop\\prod\\var\\cache\\prod\\smarty\\compile\\classiclayouts_layout_full_width_tpl\\18\\2d\\19\\182d1987487b59f20d7ed9fecbfd3da682f45de9_2.file.helpers.tpl.php',
    'uid' => '182d1987487b59f20d7ed9fecbfd3da682f45de9',
    'call_name' => 'smarty_template_function_renderLogo_1412554056203738b5b14a4_01764792',
  ),
));
?> 

<?php }
/* smarty_template_function_renderLogo_1412554056203738b5b14a4_01764792 */
if (!function_exists('smarty_template_function_renderLogo_1412554056203738b5b14a4_01764792')) {
function smarty_template_function_renderLogo_1412554056203738b5b14a4_01764792(Smarty_Internal_Template $_smarty_tpl,$params) {
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
/*/ smarty_template_function_renderLogo_1412554056203738b5b14a4_01764792 */
}
