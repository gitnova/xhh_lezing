<?php /* Smarty version Smarty-3.1.19, created on 2017-11-21 01:37:14
         compiled from "module:ps_searchbar/ps_searchbar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2935535445a1335f2b64563-80550057%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '110ec72aa9921d2c382ad628bdb2f0bc5105a617' => 
    array (
      0 => 'module:ps_searchbar/ps_searchbar.tpl',
      1 => 1508764756,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '2935535445a1335f2b64563-80550057',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'search_controller_url' => 0,
    'search_string' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a1335f2b683e0_47334542',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a1335f2b683e0_47334542')) {function content_5a1335f2b683e0_47334542($_smarty_tpl) {?>
<!-- Block search module TOP -->
<div id="search_widget" class="col-lg-4 col-md-5 col-sm-12 search-widget" data-search-controller-url="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search_controller_url']->value, ENT_QUOTES, 'UTF-8');?>
">
	<form method="get" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search_controller_url']->value, ENT_QUOTES, 'UTF-8');?>
">
		<input type="hidden" name="controller" value="search">
		<input type="text" name="s" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search_string']->value, ENT_QUOTES, 'UTF-8');?>
" placeholder="<?php echo smartyTranslate(array('s'=>'Search our catalog','d'=>'Shop.Theme.Catalog'),$_smarty_tpl);?>
" aria-label="<?php echo smartyTranslate(array('s'=>'Search','d'=>'Shop.Theme.Catalog'),$_smarty_tpl);?>
">
		<button type="submit">
			<i class="material-icons search">&#xE8B6;</i>
      <span class="hidden-xl-down"><?php echo smartyTranslate(array('s'=>'Search','d'=>'Shop.Theme.Catalog'),$_smarty_tpl);?>
</span>
		</button>
	</form>
</div>
<!-- /Block search module TOP -->
<?php }} ?>