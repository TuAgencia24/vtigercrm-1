<?php /* Smarty version Smarty-3.1.7, created on 2015-02-04 16:36:16
         compiled from "/var/www/vhosts/registro.tuagencia24.com/vtigercrm/includes/runtime/../../layouts/vlayout/modules/Settings/ModuleDesigner/UploadModulePopup.tpl" */ ?>
<?php /*%%SmartyHeaderCode:202677561454d24a805f31a5-97168964%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '242d5abc1cbe1d0b152b5c17effa76a8ca817bf5' => 
    array (
      0 => '/var/www/vhosts/registro.tuagencia24.com/vtigercrm/includes/runtime/../../layouts/vlayout/modules/Settings/ModuleDesigner/UploadModulePopup.tpl',
      1 => 1423067389,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '202677561454d24a805f31a5-97168964',
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
  'unifunc' => 'content_54d24a8068481',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54d24a8068481')) {function content_54d24a8068481($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
<script type="text/javascript" src="libraries/jquery/jquery.min.js"></script>
<script type="text/javascript" src="layouts/vlayout/modules/Settings/<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
/resources/jqueryForm.js"></script>

<style>
form { display: block; margin: 20px auto; background: #eee; border-radius: 10px; padding: 15px }
#progress { position:relative; width:400px; border: 1px solid #ddd; padding: 1px; border-radius: 3px; }
#bar { background-color: #B4F5B4; width:0%; height:20px; border-radius: 3px; }
#percent { position:absolute; display:inline-block; top:3px; left:48%; }
</style>
</head>

<body>
<div style="font-family: Arial,Verdana,'Times New Roman',sans-serif;">
<h2><?php echo vtranslate('LBL_UPLOAD_MODULE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</h2>

 
<form id="myForm" action="index.php?module=<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
&action=UploadFile&parent=Settings" method="post" enctype="multipart/form-data">
     <input type="file" size="60" name="myfile">
     <input type="submit" value="<?php echo vtranslate('LBL_UPLOAD',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
">
 </form>
 
 <div id="progress">
        <div id="bar"></div>
        <div id="percent">0%</div >
</div>
<br/>
 
<div id="message"></div>
 

</div>


<script>
$(document).ready(function()
{
 
    var options = { 
    beforeSend: function() 
    {
        $("#progress").show();
        //clear everything
        $("#bar").width('0%');
        $("#message").html("");
        $("#percent").html("0%");
    },
    uploadProgress: function(event, position, total, percentComplete) 
    {
        $("#bar").width(percentComplete+'%');
        $("#percent").html(percentComplete+'%');
 
    },
    success: function() 
    {
        $("#bar").width('100%');
        $("#percent").html('100%');
 
    },
    complete: function(response) 
    {
    	data = $.parseJSON(response.responseText);
    	
    	if(data.success)
    	{
    		//window.parent.md_selectDirectoryTemplate(undefined, data.result.module.name, data.result.basedir);
			window.parent.md_loadModule(data.result.file, true)
			window.parent.md_closePopup();
    	}
       
    },
    error: function()
    {
        $("#message").html("<font color='red'> ERROR: unable to upload files</font>");
    }
 
}; 
 
     $("#myForm").ajaxForm(options);
 
});
 
</script>

</body>
</html><?php }} ?>