<?php /* Smarty version Smarty-3.1.7, created on 2021-06-03 06:19:31
         compiled from "C:\xampp_php_7_1\htdocs\vtiger_cia_tecnica\includes\runtime/../../layouts/vlayout\modules\Calendar\CalendarViewPreProcess.tpl" */ ?>
<?php /*%%SmartyHeaderCode:178491109460b87473560b80-54834176%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0e819be1515479a2e594ca37ee52f6d14a74ae6c' => 
    array (
      0 => 'C:\\xampp_php_7_1\\htdocs\\vtiger_cia_tecnica\\includes\\runtime/../../layouts/vlayout\\modules\\Calendar\\CalendarViewPreProcess.tpl',
      1 => 1468488064,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '178491109460b87473560b80-54834176',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE_NAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_60b8747358ecc',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60b8747358ecc')) {function content_60b8747358ecc($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("Header.tpl",$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("BasicHeader.tpl",$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<div class="bodyContents"><div class="mainContainer row-fluid"><div class="span2 row-fluid"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("SideBar.tpl",$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div><div class="contentsDiv span10 marginLeftZero"><?php }} ?>