<?php
/* Smarty version 3.1.39, created on 2022-02-09 08:55:55
  from 'C:\xampp\htdocs\bookshop\prod\themes\classic\templates\catalog\_partials\product-flags.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6203738b0213d1_90255026',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4dad762baee5e23a68a5c68400083d0202709696' => 
    array (
      0 => 'C:\\xampp\\htdocs\\bookshop\\prod\\themes\\classic\\templates\\catalog\\_partials\\product-flags.tpl',
      1 => 1644393085,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6203738b0213d1_90255026 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->compiled->nocache_hash = '7865637826203738b01eca8_94867101';
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10041280246203738b01fa35_07720323', 'product_flags');
?>

<?php }
/* {block 'product_flags'} */
class Block_10041280246203738b01fa35_07720323 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_flags' => 
  array (
    0 => 'Block_10041280246203738b01fa35_07720323',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <ul class="product-flags js-product-flags">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['flags'], 'flag');
$_smarty_tpl->tpl_vars['flag']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['flag']->value) {
$_smarty_tpl->tpl_vars['flag']->do_else = false;
?>
            <li class="product-flag <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['flag']->value['type'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['flag']->value['label'], ENT_QUOTES, 'UTF-8');?>
</li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
<?php
}
}
/* {/block 'product_flags'} */
}
