<?php /* Smarty version Smarty-3.1.7, created on 2016-03-18 16:51:26
         compiled from "/var/www/vhosts/vtigercrm/includes/runtime/../../layouts/vlayout/modules/Vtiger/ListViewHeader.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20298757745645ebdd7fd2a8-88301050%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eb5f06dd0e4791cd874da304a615937aa7877d7b' => 
    array (
      0 => '/var/www/vhosts/vtigercrm/includes/runtime/../../layouts/vlayout/modules/Vtiger/ListViewHeader.tpl',
      1 => 1458148374,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20298757745645ebdd7fd2a8-88301050',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5645ebdd9c96d',
  'variables' => 
  array (
    'LISTVIEW_MASSACTIONS' => 0,
    'LISTVIEW_LINKS' => 0,
    'MODULE' => 0,
    'LISTVIEW_MASSACTION' => 0,
    'LISTVIEW_ADVANCEDACTIONS' => 0,
    'LISTVIEW_BASICACTION' => 0,
    'ROLEID' => 0,
    'CUSTOM_VIEWS' => 0,
    'GROUP_LABEL' => 0,
    'GROUP_CUSTOM_VIEWS' => 0,
    'CUSTOM_VIEW' => 0,
    'CURRENT_USER_MODEL' => 0,
    'VIEWID' => 0,
    'FOLDERS' => 0,
    'FOLDER' => 0,
    'FOLDER_NAME' => 0,
    'DEFAULT_CUSTOM_FILTER_ID' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5645ebdd9c96d')) {function content_5645ebdd9c96d($_smarty_tpl) {?>
<div class="listViewPageDiv"><div class="listViewTopMenuDiv noprint"><div class="listViewActionsDiv row-fluid"><span class="btn-toolbar span4"><span class="btn-group listViewMassActions"><?php if (count($_smarty_tpl->tpl_vars['LISTVIEW_MASSACTIONS']->value)>0||count($_smarty_tpl->tpl_vars['LISTVIEW_LINKS']->value['LISTVIEW'])>0){?><button class="btn dropdown-toggle" data-toggle="dropdown"><strong><?php echo vtranslate('LBL_ACTIONS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong>&nbsp;&nbsp;<i class="caret"></i></button><ul class="dropdown-menu"><?php  $_smarty_tpl->tpl_vars["LISTVIEW_MASSACTION"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["LISTVIEW_MASSACTION"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['LISTVIEW_MASSACTIONS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars["LISTVIEW_MASSACTION"]->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars["LISTVIEW_MASSACTION"]->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars["LISTVIEW_MASSACTION"]->key => $_smarty_tpl->tpl_vars["LISTVIEW_MASSACTION"]->value){
$_smarty_tpl->tpl_vars["LISTVIEW_MASSACTION"]->_loop = true;
 $_smarty_tpl->tpl_vars["LISTVIEW_MASSACTION"]->iteration++;
 $_smarty_tpl->tpl_vars["LISTVIEW_MASSACTION"]->last = $_smarty_tpl->tpl_vars["LISTVIEW_MASSACTION"]->iteration === $_smarty_tpl->tpl_vars["LISTVIEW_MASSACTION"]->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['actionCount']['last'] = $_smarty_tpl->tpl_vars["LISTVIEW_MASSACTION"]->last;
?><li id="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
_listView_massAction_<?php echo Vtiger_Util_Helper::replaceSpaceWithUnderScores($_smarty_tpl->tpl_vars['LISTVIEW_MASSACTION']->value->getLabel());?>
"><a href="javascript:void(0);" <?php if (stripos($_smarty_tpl->tpl_vars['LISTVIEW_MASSACTION']->value->getUrl(),'javascript:')===0){?>onclick='<?php echo substr($_smarty_tpl->tpl_vars['LISTVIEW_MASSACTION']->value->getUrl(),strlen("javascript:"));?>
;'<?php }else{ ?> onclick="Vtiger_List_Js.triggerMassAction('<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_MASSACTION']->value->getUrl();?>
')"<?php }?> ><?php echo vtranslate($_smarty_tpl->tpl_vars['LISTVIEW_MASSACTION']->value->getLabel(),$_smarty_tpl->tpl_vars['MODULE']->value);?>
</a></li><?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['actionCount']['last']==true){?><li class="divider"></li><?php }?><?php } ?><?php if (count($_smarty_tpl->tpl_vars['LISTVIEW_LINKS']->value['LISTVIEW'])>0){?><?php  $_smarty_tpl->tpl_vars['LISTVIEW_ADVANCEDACTIONS'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['LISTVIEW_ADVANCEDACTIONS']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['LISTVIEW_LINKS']->value['LISTVIEW']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['LISTVIEW_ADVANCEDACTIONS']->key => $_smarty_tpl->tpl_vars['LISTVIEW_ADVANCEDACTIONS']->value){
$_smarty_tpl->tpl_vars['LISTVIEW_ADVANCEDACTIONS']->_loop = true;
?><li id="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
_listView_advancedAction_<?php echo Vtiger_Util_Helper::replaceSpaceWithUnderScores($_smarty_tpl->tpl_vars['LISTVIEW_ADVANCEDACTIONS']->value->getLabel());?>
"><a <?php if (stripos($_smarty_tpl->tpl_vars['LISTVIEW_ADVANCEDACTIONS']->value->getUrl(),'javascript:')===0){?>href="javascript:void(0);"onclick='<?php echo substr($_smarty_tpl->tpl_vars['LISTVIEW_ADVANCEDACTIONS']->value->getUrl(),strlen("javascript:"));?>
;'<?php }else{ ?>href='<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_ADVANCEDACTIONS']->value->getUrl();?>
'<?php }?>><?php echo vtranslate($_smarty_tpl->tpl_vars['LISTVIEW_ADVANCEDACTIONS']->value->getLabel(),$_smarty_tpl->tpl_vars['MODULE']->value);?>
</a></li><?php } ?><?php }?></ul><?php }?></span><?php  $_smarty_tpl->tpl_vars['LISTVIEW_BASICACTION'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['LISTVIEW_BASICACTION']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['LISTVIEW_LINKS']->value['LISTVIEWBASIC']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['LISTVIEW_BASICACTION']->key => $_smarty_tpl->tpl_vars['LISTVIEW_BASICACTION']->value){
$_smarty_tpl->tpl_vars['LISTVIEW_BASICACTION']->_loop = true;
?><span class="btn-group"><button id="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
_listView_basicAction_<?php echo Vtiger_Util_Helper::replaceSpaceWithUnderScores($_smarty_tpl->tpl_vars['LISTVIEW_BASICACTION']->value->getLabel());?>
" class="btn addButton" <?php if (stripos($_smarty_tpl->tpl_vars['LISTVIEW_BASICACTION']->value->getUrl(),'javascript:')===0){?> onclick='<?php echo substr($_smarty_tpl->tpl_vars['LISTVIEW_BASICACTION']->value->getUrl(),strlen("javascript:"));?>
;'<?php }else{ ?> onclick='window.location.href="<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_BASICACTION']->value->getUrl();?>
"'<?php }?>><i class="icon-plus icon-white"></i>&nbsp;<strong><?php echo vtranslate($_smarty_tpl->tpl_vars['LISTVIEW_BASICACTION']->value->getLabel(),$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></button></span><?php } ?><!-- jmangarret BOTONES DE ACCION POR LOTE EN EL HEADER dic2015, ene2016 !--><?php if ($_smarty_tpl->tpl_vars['MODULE']->value=='Localizadores'){?><span class="btn-group"><a href="javascript:void(0);"><button id="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
_listView_basicAction_Process" class="btn addButton"><i class="icon-plus icon-white"></i>&nbsp;<strong>Procesar</strong></button></a></span><script type="text/javascript">$(document).ready(function() {$('#<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
_listView_basicAction_Process').click(function(){var ids1 = new Array();$("input[class=listViewEntriesCheckBox]:checked").each(function() {ids1.push($(this).val());});var ajax_data1 = {"userid" : $("#current_user_id").val(),"accion" : "procesarLocalizadores","id" : ids1};jQuery.ajax({data: ajax_data1,url: 'modules/Localizadores/ajaxProcesarList_Loc.php',type: 'get',success: function(response){if (response!='')bootbox.alert(response);}});});});</script><?php }?><?php if ($_smarty_tpl->tpl_vars['MODULE']->value=='Boletos'){?><span class="btn-group"><a href="javascript:void(0);"><button id="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
_listView_basicAction_Anular" class="btn addButton"><i class="icon-plus icon-white"></i>&nbsp;<strong>Anular</strong></button></a></span><script type="text/javascript">$('#<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
_listView_basicAction_Anular').click(function(){var ids2 = new Array();$("input[class=listViewEntriesCheckBox]:checked").each(function() {ids2.push($(this).val());});var ajax_data2 = {"userid" : $("#current_user_id").val(),"accion" : "anularBoletosPorLote","id" : ids2};jQuery.ajax({data: ajax_data2,url: 'modules/Boletos/ajaxProcesarList_Boletos.php',type: 'get',success: function(response){if (response!='')bootbox.alert(response);}});});</script><?php }?><!-- fin jmangarret dic2015, ene2016 !--></span><span class="btn-toolbar span4"><span class="customFilterMainSpan btn-group"><!--Modified by jmangarret 16jun2015 --><?php if ($_smarty_tpl->tpl_vars['ROLEID']->value!='H9'){?><?php if (count($_smarty_tpl->tpl_vars['CUSTOM_VIEWS']->value)>0){?><select id="customFilter" style="width:350px;"><?php  $_smarty_tpl->tpl_vars['GROUP_CUSTOM_VIEWS'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['GROUP_CUSTOM_VIEWS']->_loop = false;
 $_smarty_tpl->tpl_vars['GROUP_LABEL'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['CUSTOM_VIEWS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['GROUP_CUSTOM_VIEWS']->key => $_smarty_tpl->tpl_vars['GROUP_CUSTOM_VIEWS']->value){
$_smarty_tpl->tpl_vars['GROUP_CUSTOM_VIEWS']->_loop = true;
 $_smarty_tpl->tpl_vars['GROUP_LABEL']->value = $_smarty_tpl->tpl_vars['GROUP_CUSTOM_VIEWS']->key;
?><optgroup label=' <?php if ($_smarty_tpl->tpl_vars['GROUP_LABEL']->value=='Mine'){?> &nbsp; <?php }else{ ?> <?php echo vtranslate($_smarty_tpl->tpl_vars['GROUP_LABEL']->value);?>
 <?php }?>' ><?php  $_smarty_tpl->tpl_vars["CUSTOM_VIEW"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["CUSTOM_VIEW"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['GROUP_CUSTOM_VIEWS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["CUSTOM_VIEW"]->key => $_smarty_tpl->tpl_vars["CUSTOM_VIEW"]->value){
$_smarty_tpl->tpl_vars["CUSTOM_VIEW"]->_loop = true;
?><option  data-editurl="<?php echo $_smarty_tpl->tpl_vars['CUSTOM_VIEW']->value->getEditUrl();?>
" data-deleteurl="<?php echo $_smarty_tpl->tpl_vars['CUSTOM_VIEW']->value->getDeleteUrl();?>
" data-approveurl="<?php echo $_smarty_tpl->tpl_vars['CUSTOM_VIEW']->value->getApproveUrl();?>
" data-denyurl="<?php echo $_smarty_tpl->tpl_vars['CUSTOM_VIEW']->value->getDenyUrl();?>
" data-editable="<?php echo $_smarty_tpl->tpl_vars['CUSTOM_VIEW']->value->isEditable();?>
" data-deletable="<?php echo $_smarty_tpl->tpl_vars['CUSTOM_VIEW']->value->isDeletable();?>
" data-pending="<?php echo $_smarty_tpl->tpl_vars['CUSTOM_VIEW']->value->isPending();?>
" data-public="<?php echo $_smarty_tpl->tpl_vars['CUSTOM_VIEW']->value->isPublic()&&$_smarty_tpl->tpl_vars['CURRENT_USER_MODEL']->value->isAdminUser();?>
" id="filterOptionId_<?php echo $_smarty_tpl->tpl_vars['CUSTOM_VIEW']->value->get('cvid');?>
" value="<?php echo $_smarty_tpl->tpl_vars['CUSTOM_VIEW']->value->get('cvid');?>
" data-id="<?php echo $_smarty_tpl->tpl_vars['CUSTOM_VIEW']->value->get('cvid');?>
" <?php if ($_smarty_tpl->tpl_vars['VIEWID']->value!=''&&$_smarty_tpl->tpl_vars['VIEWID']->value!='0'&&$_smarty_tpl->tpl_vars['VIEWID']->value==$_smarty_tpl->tpl_vars['CUSTOM_VIEW']->value->getId()){?> selected="selected" <?php }elseif(($_smarty_tpl->tpl_vars['VIEWID']->value==''||$_smarty_tpl->tpl_vars['VIEWID']->value=='0')&&$_smarty_tpl->tpl_vars['CUSTOM_VIEW']->value->isDefault()=='true'){?> selected="selected" <?php }?> class="filterOptionId_<?php echo $_smarty_tpl->tpl_vars['CUSTOM_VIEW']->value->get('cvid');?>
"><?php if ($_smarty_tpl->tpl_vars['CUSTOM_VIEW']->value->get('viewname')=='All'){?><?php echo vtranslate($_smarty_tpl->tpl_vars['CUSTOM_VIEW']->value->get('viewname'),$_smarty_tpl->tpl_vars['MODULE']->value);?>
 <?php echo vtranslate($_smarty_tpl->tpl_vars['MODULE']->value,$_smarty_tpl->tpl_vars['MODULE']->value);?>
<?php }else{ ?><?php echo vtranslate($_smarty_tpl->tpl_vars['CUSTOM_VIEW']->value->get('viewname'),$_smarty_tpl->tpl_vars['MODULE']->value);?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['GROUP_LABEL']->value!='Mine'){?> [ <?php echo $_smarty_tpl->tpl_vars['CUSTOM_VIEW']->value->getOwnerName();?>
 ]  <?php }?></option><?php } ?></optgroup><?php } ?><?php if ($_smarty_tpl->tpl_vars['FOLDERS']->value!=''){?><optgroup id="foldersBlock" label='<?php echo vtranslate('LBL_FOLDERS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
' ><?php  $_smarty_tpl->tpl_vars['FOLDER'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['FOLDER']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['FOLDERS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['FOLDER']->key => $_smarty_tpl->tpl_vars['FOLDER']->value){
$_smarty_tpl->tpl_vars['FOLDER']->_loop = true;
?><option data-foldername="<?php echo $_smarty_tpl->tpl_vars['FOLDER']->value->getName();?>
" <?php if (decode_html($_smarty_tpl->tpl_vars['FOLDER']->value->getName())==$_smarty_tpl->tpl_vars['FOLDER_NAME']->value){?> selected=""<?php }?> data-folderid="<?php echo $_smarty_tpl->tpl_vars['FOLDER']->value->get('folderid');?>
" data-deletable="<?php echo !($_smarty_tpl->tpl_vars['FOLDER']->value->hasDocuments());?>
" class="filterOptionId_folder<?php echo $_smarty_tpl->tpl_vars['FOLDER']->value->get('folderid');?>
 folderOption<?php if ($_smarty_tpl->tpl_vars['FOLDER']->value->getName()=='Default'){?> defaultFolder <?php }?>" id="filterOptionId_folder<?php echo $_smarty_tpl->tpl_vars['FOLDER']->value->get('folderid');?>
" data-id="<?php echo $_smarty_tpl->tpl_vars['DEFAULT_CUSTOM_FILTER_ID']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['FOLDER']->value->getName();?>
</option><?php } ?></optgroup><?php }?></select><span class="filterActionsDiv hide"><hr><ul class="filterActions"><li data-value="create" id="createFilter" data-createurl="<?php echo $_smarty_tpl->tpl_vars['CUSTOM_VIEW']->value->getCreateUrl();?>
"><i class="icon-plus-sign"></i> <?php echo vtranslate('LBL_CREATE_NEW_FILTER');?>
 </li></ul></span><img class="filterImage" src="<?php echo vimage_path('filter.png');?>
" style="display:none;height:13px;margin-right:2px;vertical-align: middle;"><?php }else{ ?><input type="hidden" value="0" id="customFilter" /><?php }?><?php }?><!-- fin jmangarret 16jun2015 !--></span></span><span class="hide filterActionImages pull-right"><i title="<?php echo vtranslate('LBL_DENY',$_smarty_tpl->tpl_vars['MODULE']->value);?>
" data-value="deny" class="icon-ban-circle alignMiddle denyFilter filterActionImage pull-right"></i><i title="<?php echo vtranslate('LBL_APPROVE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
" data-value="approve" class="icon-ok alignMiddle approveFilter filterActionImage pull-right"></i><i title="<?php echo vtranslate('LBL_DELETE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
" data-value="delete" class="icon-trash alignMiddle deleteFilter filterActionImage pull-right"></i><i title="<?php echo vtranslate('LBL_EDIT',$_smarty_tpl->tpl_vars['MODULE']->value);?>
" data-value="edit" class="icon-pencil alignMiddle editFilter filterActionImage pull-right"></i></span><span class="span4 btn-toolbar"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('ListViewActions.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</span></div></div><div class="listViewContentDiv" id="listViewContents"><!-- jmangarret BUSQUEDA POR REPORTE PARA SATELITES feb2016!--><?php if ($_smarty_tpl->tpl_vars['MODULE']->value=='Localizadores'){?><form action="" name="frmBuscar" method="post" onSubmit="return false"><table class="table showInlineTable"><tr><td class="fieldLabel wide"><span> Localizador: </span><br><input type="text" name="text-localizador" id="text-localizador"></td><td class="fieldLabel wide"><span> Nº de Boleto: </span><br><input type="text" name="text-boleto" id="text-boleto"></td><td class="fieldLabel wide"><span> Estatus: </span><br><select class="option-estatus" id="option-estatus"><option value="">--Seleccione--</option></select></td><td class="fieldLabel wide"><span> Satelite: </span><br><select class="chzn-single" id="chzn-single"><option value="">--Seleccione--</option></select></td><td class="fieldLabel wide"><span> Desde: </span><br><input type="date" class="dateField" value="" data-date-format="dd-mm-yyyy" name="fechaemision1" id="fechaemision1"></td><td class="fieldLabel wide"><!--<span class="add-on"><i class="icon-calendar"></i></span>--><span> Hasta: </span><br><input type="date" class="dateField" value="" data-date-format="dd-mm-yyyy" name="fechaemision2" id="fechaemision2"></td></tr><tr><td class="fieldLabel wide"><!--<span class="add-on"><i class="icon-calendar"></i></span>--><span> GDS: </span><br><select class="gds-select" id="gds-select"><option value="">--Seleccione--</option></select></td><td class="fieldLabel wide"><span> Procesados: </span><input type="checkbox" name="checkbox-procesado" id="checkbox-procesado"> </td><td class="fieldLabel wide"><a href="javascript:void(0);"><button id="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
_listView_basicAction_Buscar" class="btn"><strong>Buscar</strong></button></a><span id="searchIcon" class="add-on search-icon"><i class="icon-white icon-search "></i></span></td></tr></table></form><script type="text/javascript">$(document).ready(function() {var ajax_data1 ={"accion": "select_satelite"};jQuery.ajax({data: ajax_data1,url: 'modules/Localizadores/ajaxReporteSatelites.php',type: 'get',success: function(responses){$("#chzn-single").append(responses);}});var ajax_data2 ={"accion" : "select_gds"};jQuery.ajax({data: ajax_data2,url: 'modules/Localizadores/ajaxReporteSatelites.php',type: 'get',success: function(responses){$("#gds-select").append(responses);}});var ajax_data3={"accion" : "select_status"};jQuery.ajax({data: ajax_data3,url: 'modules/Localizadores/ajaxReporteSatelites.php',type: 'get',success: function(responses){$("#option-estatus").append(responses);}});$('#<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
_listView_basicAction_Buscar').click(function(){var ajax_data = {"userid"      : $("#current_user_id").val(),"accion"      : "listarBusqueda","satelite"    : $("#chzn-single").val(),"gds"  	 	  : $("#gds-select").val(),"proc"	  	  : $('#checkbox-procesado').is(':checked'),"fecha_desde" : $("#fechaemision1").val(),"fecha_hasta" : $("#fechaemision2").val(),"localizador" : $("#text-localizador").val(),"boleto"	  : $("#text-boleto").val(),"estatus"	  : $("#option-estatus").val()};jQuery.ajax({data: ajax_data,url: 'modules/Localizadores/ajaxReporteSatelites.php',type: 'get',success: function(response){$("div.listViewEntriesDiv.contents-bottomscroll").html(response);}});});});</script><?php }?><!--fin jmangarret BUSQUEDA POR REPORTE PARA SATELITES feb2016!--><?php }} ?>