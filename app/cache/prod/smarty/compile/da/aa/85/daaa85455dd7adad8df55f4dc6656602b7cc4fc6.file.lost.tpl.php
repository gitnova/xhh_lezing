<?php /* Smarty version Smarty-3.1.19, created on 2017-11-21 01:44:14
         compiled from "C:\xampp\htdocs\prestashop\modules\welcome\views\templates\lost.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18554902815a1337967ce683-16743434%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'daaa85455dd7adad8df55f4dc6656602b7cc4fc6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\modules\\welcome\\views\\templates\\lost.tpl',
      1 => 1508764876,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18554902815a1337967ce683-16743434',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a1337967d2506_40524587',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a1337967d2506_40524587')) {function content_5a1337967d2506_40524587($_smarty_tpl) {?>

<div class="onboarding onboarding-popup bootstrap">
  <div class="content">
    <p><?php echo smartyTranslate(array('s'=>'Hey! Are you lost?','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</p>
    <p><?php echo smartyTranslate(array('s'=>'To continue, click here:','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</p>
    <div class="text-center">
      <button class="btn btn-primary onboarding-button-goto-current"><?php echo smartyTranslate(array('s'=>'Continue','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</button>
    </div>
    <p><?php echo smartyTranslate(array('s'=>'If you want to stop the tutorial for good, click here:','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</p>
    <div class="text-center">
      <button class="btn btn-alert onboarding-button-stop"><?php echo smartyTranslate(array('s'=>'Quit the Welcome tutorial','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</button>
    </div>
  </div>
</div>
<?php }} ?>
