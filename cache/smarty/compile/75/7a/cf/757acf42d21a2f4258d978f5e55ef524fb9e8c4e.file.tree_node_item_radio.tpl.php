<?php /* Smarty version Smarty-3.1.19, created on 2017-12-26 17:51:59
         compiled from "C:\xampp\htdocs\prestashop\admin186wpsjhn\themes\default\template\helpers\tree\tree_node_item_radio.tpl" */ ?>
<?php /*%%SmartyHeaderCode:105205a423ee7d220c9-87481505%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '757acf42d21a2f4258d978f5e55ef524fb9e8c4e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\admin186wpsjhn\\themes\\default\\template\\helpers\\tree\\tree_node_item_radio.tpl',
      1 => 1504502862,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '105205a423ee7d220c9-87481505',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'node' => 0,
    'input_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a423ee7d53ab8_02304089',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a423ee7d53ab8_02304089')) {function content_5a423ee7d53ab8_02304089($_smarty_tpl) {?>
<li class="tree-item<?php if (isset($_smarty_tpl->tpl_vars['node']->value['disabled'])&&$_smarty_tpl->tpl_vars['node']->value['disabled']==true) {?> tree-item-disable<?php }?>">
	<span class="tree-item-name">
		<input type="radio" name="<?php echo $_smarty_tpl->tpl_vars['input_name']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['node']->value['id_category'];?>
"<?php if (isset($_smarty_tpl->tpl_vars['node']->value['disabled'])&&$_smarty_tpl->tpl_vars['node']->value['disabled']==true) {?> disabled="disabled"<?php }?> />
		<i class="tree-dot"></i>
		<label class="tree-toggler"><?php echo $_smarty_tpl->tpl_vars['node']->value['name'];?>
</label>
	</span>
</li><?php }} ?>
