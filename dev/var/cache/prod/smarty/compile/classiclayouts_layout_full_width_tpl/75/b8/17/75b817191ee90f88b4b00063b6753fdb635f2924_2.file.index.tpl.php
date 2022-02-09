<?php
/* Smarty version 3.1.39, created on 2022-02-09 09:05:55
  from 'C:\xampp\htdocs\bookshop\dev\themes\classic\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_620375e3756569_06974524',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '75b817191ee90f88b4b00063b6753fdb635f2924' => 
    array (
      0 => 'C:\\xampp\\htdocs\\bookshop\\dev\\themes\\classic\\templates\\index.tpl',
      1 => 1644393602,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_620375e3756569_06974524 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_325427481620375e3754a43_38060631', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_1269858895620375e3754e29_21779276 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_870990426620375e3755711_76916497 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_348435144620375e37553e4_52803483 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_870990426620375e3755711_76916497', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_325427481620375e3754a43_38060631 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_325427481620375e3754a43_38060631',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_1269858895620375e3754e29_21779276',
  ),
  'page_content' => 
  array (
    0 => 'Block_348435144620375e37553e4_52803483',
  ),
  'hook_home' => 
  array (
    0 => 'Block_870990426620375e3755711_76916497',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1269858895620375e3754e29_21779276', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_348435144620375e37553e4_52803483', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
