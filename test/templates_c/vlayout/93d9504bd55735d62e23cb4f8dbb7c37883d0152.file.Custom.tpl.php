<?php /* Smarty version Smarty-3.1.7, created on 2015-02-04 16:35:57
         compiled from "/var/www/vhosts/registro.tuagencia24.com/vtigercrm/includes/runtime/../../layouts/vlayout/modules/Settings/ModuleDesigner/Custom.tpl" */ ?>
<?php /*%%SmartyHeaderCode:162555461554d24a6df3c614-87300083%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '93d9504bd55735d62e23cb4f8dbb7c37883d0152' => 
    array (
      0 => '/var/www/vhosts/registro.tuagencia24.com/vtigercrm/includes/runtime/../../layouts/vlayout/modules/Settings/ModuleDesigner/Custom.tpl',
      1 => 1423067389,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '162555461554d24a6df3c614-87300083',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
    'QUALIFIED_MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_54d24a6e069f3',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54d24a6e069f3')) {function content_54d24a6e069f3($_smarty_tpl) {?><script type="text/javascript" src="layouts/vlayout/modules/Settings/<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
/resources/CustomScript.js"></script>

<h2><?php echo vtranslate('LBL_CUSTOM_VALUES',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</h2>

<table>
<tr>
<td colspan="2">
<?php echo vtranslate('LBL_CUSTOM_VALUES_DESCRIPTION',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>

</td>
</tr>
<tr>
<td><?php echo vtranslate('LBL_MY_VARIABLE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</td>
<td>
<select name="myVariable">
<option value="value1"><?php echo vtranslate('LBL_MY_VALUE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
 1</option>
<option value="value2"><?php echo vtranslate('LBL_MY_VALUE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
 2</option>
</select>
</td>
</tr>
</table><?php }} ?>