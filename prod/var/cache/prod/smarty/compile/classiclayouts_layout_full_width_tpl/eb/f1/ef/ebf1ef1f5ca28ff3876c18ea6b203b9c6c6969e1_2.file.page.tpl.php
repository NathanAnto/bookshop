<?php
/* Smarty version 3.1.39, created on 2022-02-09 08:55:55
  from 'C:\xampp\htdocs\bookshop\prod\themes\classic\templates\page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6203738b2d7780_56098566',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ebf1ef1f5ca28ff3876c18ea6b203b9c6c6969e1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\bookshop\\prod\\themes\\classic\\templates\\page.tpl',
      1 => 1644393085,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6203738b2d7780_56098566 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15605586006203738b2cfdb0_00363708', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_3088337436203738b2d08f6_12153025 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <header class="page-header">
          <h1><?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>
</h1>
        </header>
      <?php
}
}
/* {/block 'page_title'} */
/* {block 'page_header_container'} */
class Block_19903106726203738b2d0491_57622071 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3088337436203738b2d08f6_12153025', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_2085648336203738b2d5944_67274964 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_15116856826203738b2d5fa5_52942682 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_19101542556203738b2d52b7_49611966 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <div id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2085648336203738b2d5944_67274964', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15116856826203738b2d5fa5_52942682', 'page_content', $this->tplIndex);
?>

      </div>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_5107547336203738b2d6c99_35835613 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_11371481406203738b2d6983_26809851 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5107547336203738b2d6c99_35835613', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_15605586006203738b2cfdb0_00363708 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_15605586006203738b2cfdb0_00363708',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_19903106726203738b2d0491_57622071',
  ),
  'page_title' => 
  array (
    0 => 'Block_3088337436203738b2d08f6_12153025',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_19101542556203738b2d52b7_49611966',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_2085648336203738b2d5944_67274964',
  ),
  'page_content' => 
  array (
    0 => 'Block_15116856826203738b2d5fa5_52942682',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_11371481406203738b2d6983_26809851',
  ),
  'page_footer' => 
  array (
    0 => 'Block_5107547336203738b2d6c99_35835613',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19903106726203738b2d0491_57622071', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19101542556203738b2d52b7_49611966', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11371481406203738b2d6983_26809851', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
