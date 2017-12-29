<?php /* Smarty version Smarty-3.1.19, created on 2017-12-26 17:52:01
         compiled from "C:\xampp\htdocs\prestashop\admin186wpsjhn\themes\default\template\helpers\list\list_action_preview.tpl" */ ?>
<?php /*%%SmartyHeaderCode:86215a423ee91a5198-46934783%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e2b8ce1346563812a4db6d2d36e9d376040b4ac3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\admin186wpsjhn\\themes\\default\\template\\helpers\\list\\list_action_preview.tpl',
      1 => 1504502862,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '86215a423ee91a5198-46934783',
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
  'unifunc' => 'content_5a423ee9225267_72242097',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a423ee9225267_72242097')) {function content_5a423ee9225267_72242097($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" target="_blank">
	<i class="icon-eye"></i> <?php echo $_smarty_tpl->tpl_vars['action']->value;?>

</a>
<?php }} ?>
