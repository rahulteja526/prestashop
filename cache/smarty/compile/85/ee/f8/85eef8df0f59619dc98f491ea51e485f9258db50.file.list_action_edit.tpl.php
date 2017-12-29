<?php /* Smarty version Smarty-3.1.19, created on 2017-12-26 17:51:54
         compiled from "C:\xampp\htdocs\prestashop\admin186wpsjhn\themes\default\template\helpers\list\list_action_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:220315a423ee28703d4-81575279%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '85eef8df0f59619dc98f491ea51e485f9258db50' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\admin186wpsjhn\\themes\\default\\template\\helpers\\list\\list_action_edit.tpl',
      1 => 1504502862,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '220315a423ee28703d4-81575279',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a423ee28af758_87473758',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a423ee28af758_87473758')) {function content_5a423ee28af758_87473758($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="edit">
	<i class="icon-pencil"></i> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>

</a><?php }} ?>
