<?php
/* Smarty version 3.1.39, created on 2022-02-09 11:16:06
  from 'C:\xampp\htdocs\bookshop\dev\themes\nature\templates\page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62039466c0ef54_11496357',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '63a6700e8e6c2d21a32ba2af84a2735166bef7c7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\bookshop\\dev\\themes\\nature\\templates\\page.tpl',
      1 => 1644401578,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62039466c0ef54_11496357 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_88348418162039466c08812_68618028', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_100229711562039466c09052_79962495 extends Smarty_Internal_Block
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
class Block_165475292962039466c08bd7_80730187 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_100229711562039466c09052_79962495', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_66976746062039466c0d085_79219473 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_103929150362039466c0d5a4_05349981 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_177967658062039466c0ccd3_48463597 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_66976746062039466c0d085_79219473', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_103929150362039466c0d5a4_05349981', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_78516289262039466c0e476_62032134 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_67741782462039466c0e154_54699227 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_78516289262039466c0e476_62032134', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_88348418162039466c08812_68618028 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_88348418162039466c08812_68618028',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_165475292962039466c08bd7_80730187',
  ),
  'page_title' => 
  array (
    0 => 'Block_100229711562039466c09052_79962495',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_177967658062039466c0ccd3_48463597',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_66976746062039466c0d085_79219473',
  ),
  'page_content' => 
  array (
    0 => 'Block_103929150362039466c0d5a4_05349981',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_67741782462039466c0e154_54699227',
  ),
  'page_footer' => 
  array (
    0 => 'Block_78516289262039466c0e476_62032134',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_165475292962039466c08bd7_80730187', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_177967658062039466c0ccd3_48463597', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_67741782462039466c0e154_54699227', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
