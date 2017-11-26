<?php /* Smarty version Smarty-3.1.19, created on 2017-11-21 01:40:39
         compiled from "C:\xampp\htdocs\prestashop\themes\classic\templates\catalog\_partials\product-additional-info.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2148291715a1336bfaea2a6-17526544%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '64f6abd60dc0f12b0c3bce3eaf9c0c2d72839df0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\themes\\classic\\templates\\catalog\\_partials\\product-additional-info.tpl',
      1 => 1508764756,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2148291715a1336bfaea2a6-17526544',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a1336bfaee127_59095927',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a1336bfaee127_59095927')) {function content_5a1336bfaee127_59095927($_smarty_tpl) {?>
<div class="product-additional-info">
  <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayProductAdditionalInfo','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl);?>

</div>
<?php }} ?>
