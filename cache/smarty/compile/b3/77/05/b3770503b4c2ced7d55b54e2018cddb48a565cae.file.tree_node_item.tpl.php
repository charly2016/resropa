<?php /* Smarty version Smarty-3.1.19, created on 2016-08-11 21:20:25
         compiled from "C:\xampp\htdocs\ropa\admin\themes\default\template\helpers\tree\tree_node_item.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1971057accff949b814-40885951%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b3770503b4c2ced7d55b54e2018cddb48a565cae' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ropa\\admin\\themes\\default\\template\\helpers\\tree\\tree_node_item.tpl',
      1 => 1466020874,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1971057accff949b814-40885951',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'node' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57accff94d8713_98150040',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57accff94d8713_98150040')) {function content_57accff94d8713_98150040($_smarty_tpl) {?>

<li class="tree-item">
	<span class="tree-item-name">
		<i class="tree-dot"></i>
		<label class="tree-toggler"><?php echo $_smarty_tpl->tpl_vars['node']->value['name'];?>
</label>
	</span>
</li><?php }} ?>
