<?php
/*********************************************************************************
 * The contents of this file are subject to the SugarCRM Public License Version 1.1.2
 * ("License"); You may not use this file except in compliance with the
 * License. You may obtain a copy of the License at http://www.sugarcrm.com/SPL
 * Software distributed under the License is distributed on an  "AS IS"  basis,
 * WITHOUT WARRANTY OF ANY KIND, either express or implied. See the License for
 * the specific language governing rights and limitations under the License.
 * The Original Code is:  SugarCRM Open Source
 * The Initial Developer of the Original Code is SugarCRM, Inc.
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.;
 * All Rights Reserved.

 ********************************************************************************
*  Module       : Sales Orders
*  Language     : Español
*  Version      : 504
*  Created Date : 2007-03-30
*  Author       : Rafael Soler
*  Last change  : 2008-09-20
*  Author       : Joe Bordes JPL TSolucio, S.L.
 ********************************************************************************/

$mod_strings = Array(
'LBL_MODULE_NAME'=>'Ordenes de Venta',
'SINGLE_SalesOrder'=>'Orden de Venta',
'LBL_SO_MODULE_NAME'=>'Ordenes de Venta',
'LBL_RELATED_PRODUCTS'=>'Elementos',
'LBL_MODULE_TITLE'=>'Orden de Venta: Inicio',
'LBL_SEARCH_FORM_TITLE'=>'Buscar Ordenes de Venta',
'LBL_LIST_SO_FORM_TITLE'=>'Lista de Ordenes de Venta',
'LBL_NEW_FORM_SO_TITLE'=>'Nueva Orden de Venta',
'LBL_MEMBER_ORG_FORM_TITLE'=>'Organizaciones Miembro',

'LBL_LIST_ACCOUNT_NAME'=>'Nombre de la Cuenta',
'LBL_LIST_CITY'=>'Población',
'LBL_LIST_WEBSITE'=>'Página Web',
'LBL_LIST_STATE'=>'Provincia',
'LBL_LIST_PHONE'=>'Teléfono',
'LBL_LIST_EMAIL_ADDRESS'=>'Email',
'LBL_LIST_CONTACT_NAME'=>'Persona de Contacto',

//DON'T CONVERT THESE THEY ARE MAPPINGS
'db_name' => 'LBL_LIST_ACCOUNT_NAME',
'db_website' => 'LBL_LIST_WEBSITE',
'db_billing_address_city' => 'LBL_LIST_CITY',

//END DON'T CONVERT

'LBL_ACCOUNT'=>'Cuenta:',
'LBL_ACCOUNT_NAME'=>'Nombre de la Cuenta:',
'LBL_PHONE'=>'Teléfono:',
'LBL_WEBSITE'=>'Página Web:',
'LBL_FAX'=>'Fax:',
'LBL_TICKER_SYMBOL'=>'Ticker de bolsa:',
'LBL_OTHER_PHONE'=>'Tel. Directo:',
'LBL_ANY_PHONE'=>'Tel. Adicional:',
'LBL_MEMBER_OF'=>'Miembro de:',
'LBL_EMAIL'=>'Email:',
'LBL_EMPLOYEES'=>'Empleados:',
'LBL_OTHER_EMAIL_ADDRESS'=>'Email (Otro):',
'LBL_ANY_EMAIL'=>'Email (Alternativo):',
'LBL_OWNERSHIP'=>'Propietario:',
'LBL_RATING'=>'Valoración:',
'LBL_INDUSTRY'=>'Actividad:',
'LBL_SIC_CODE'=>'CIF:',
'LBL_TYPE'=>'Tipo:',
'LBL_ANNUAL_REVENUE'=>'Facturación Anual:',
'LBL_ADDRESS_INFORMATION'=>'Información de la Dirección',
'LBL_Quote_INFORMATION'=>'Información de la Cuenta',
'LBL_CUSTOM_INFORMATION'=>'Información personalizada',
'LBL_BILLING_ADDRESS'=>'Dirección (Factura:',
'LBL_SHIPPING_ADDRESS'=>'Dirección (Envío):',
'LBL_ANY_ADDRESS'=>'Dirección (Alternativa):',
'LBL_CITY'=>'Población:',
'LBL_STATE'=>'Provincia:',
'LBL_POSTAL_CODE'=>'Código Postal:',
'LBL_COUNTRY'=>'País:',
'LBL_DESCRIPTION_INFORMATION'=>'Información adicional',
'LBL_TERMS_INFORMATION'=>'Condiciones Generales',
'LBL_DESCRIPTION'=>'Descripción:',
'NTC_COPY_BILLING_ADDRESS'=>'Copiar Factura a Entvío',
'NTC_COPY_SHIPPING_ADDRESS'=>'Copiar Entvío a Factura',
'NTC_REMOVE_MEMBER_ORG_CONFIRMATION'=>'¿Está seguro que desea quitar este expediente como organización del miembro?',
'LBL_DUPLICATE'=>'Posibles Cuentas Duplicadas ',
'MSG_DUPLICATE' => 'Al dar de alta esta cuenta puede que se cree una cuenta duplicada. Puede seleccionar una cuenta del listado inferior o hacer click en Crear Nueva Cuenta para continuar creando la cuenta con los datos introducidos.',

'LBL_INVITEE'=>'Contactos',
'ERR_DELETE_RECORD'=>'Debe especificar un registro para eliminar la cuenta.',

'LBL_SELECT_ACCOUNT'=>'Seleccionar Cuenta',
'LBL_GENERAL_INFORMATION'=>'Información General',

//for v4 release added
'LBL_NEW_POTENTIAL'=>'Nueva Oportunidad',
'LBL_POTENTIAL_TITLE'=>'Oportunidad',

'LBL_NEW_TASK'=>'Nueva Tarea',
'LBL_TASK_TITLE'=>'Tarea',
'LBL_NEW_CALL'=>'Nueva Llamada',
'LBL_CALL_TITLE'=>'Llamadas',
'LBL_NEW_MEETING'=>'Nueva Reunión',
'LBL_MEETING_TITLE'=>'Reuniones',
'LBL_NEW_EMAIL'=>'Nuevo Email',
'LBL_EMAIL_TITLE'=>'Emails',
'LBL_NEW_CONTACT'=>'Nuevo Contacto',
'LBL_CONTACT_TITLE'=>'Contactos',

//Added vtiger_fields after RC1 - Release
'LBL_ALL'=>'Toda',
'LBL_PROSPECT'=>'Investigador',
'LBL_INVESTOR'=>'Inversionista',
'LBL_RESELLER'=>'Revendedor',
'LBL_PARTNER'=>'Socio',

// Added for 4GA
'LBL_TOOL_FORM_TITLE'=>'Herramientas de la Cuenta',
//Added for 4GA
'Subject'=>'Referencia',
'Quote Name'=>'Referencia del Presupuesto',
'Vendor Name'=>'Nombre del Proveedor',
'Requisition No'=>'Referencia de la orden',
'Tracking Number'=>'Nº de seguimiento',
'Contact Name'=>'Persona de Contacto',
'Due Date'=>'Fecha de vencimiento',
'Carrier'=>'Transportista',
'Type'=>'Tipo',
'Sales Tax'=>'Impuesto de Ventas',
'Sales Commission'=>'Comisión sobre Ventas',
'Excise Duty'=>'Impuestos Exentos',
'Total'=>'Total',
'Product Name'=>'Nombre del Producto',
'Assigned To'=>'Asignado a',
'Billing Address'=>'Dirección (Factura)',
'Shipping Address'=>'Dirección (Envío)',
'Billing City'=>'Población (Factura)',
'Billing State'=>'Provincia (Factura)',
'Billing Code'=>'Código Postal (Factura)',
'Billing Country'=>'País (Factura)',
'Billing Po Box'=>'Apdo. de Correos (Factura)',
'Shipping Po Box'=>'Apdo. de Correos (Envío)',
'Shipping City'=>'Población (Envío)',
'Shipping State'=>'Provincia (Envío)',
'Shipping Code'=>'Código Postal (Envío)',
'Shipping Country'=>'País (Envío)',
'City'=>'Población',
'State'=>'Provincia',
'Code'=>'Código Postal',
'Country'=>'País',
'Created Time'=>'Creado',
'Modified Time'=>'Modificado',
'Description'=>'Descripción',
'Potential Name'=>'Oportunidad',
'Customer No'=>'Código del Cliente',
'Purchase Order'=>'Orden de Compra',
'Vendor Terms'=>'Términos del Proveedor',
'Pending'=>'Pendiente',
'Account Name'=>'Nombre de Cuenta',
'Terms & Conditions'=>'Condiciones Generales',
//Quote Info
'LBL_SO_INFORMATION'=>'Información de la Orden',
'LBL_SO'=>'Orden de Venta:',

 //Added for 5.0 GA
'LBL_SO_FORM_TITLE'=>'Ventas',
'LBL_SUBJECT_TITLE'=>'Referencia',
'LBL_VENDOR_NAME_TITLE'=>'Nombre del Proveedor',
'LBL_TRACKING_NO_TITLE'=>'Nº de seguimiento:',
'LBL_SO_SEARCH_TITLE'=>'Buscar Orden de Venta',
'LBL_QUOTE_NAME_TITLE'=>'Referencia del presupuesto',
'Order No'=>'Referencia de la Orden de Venta',//Order Id
'LBL_MY_TOP_SO'=>'Mis Ordenes de Venta Pendientes',
'Status'=>'Estado',
'SalesOrder'=>'Ordenes de Venta',

//Added for existing Picklist Entries

'FedEx'=>'FedEx',
'UPS'=>'UPS',
'USPS'=>'Seur',
'DHL'=>'DHL',
'BlueDart'=>'Correos',

'Created'=>'Creado',
'Approved'=>'Aprobado',
'Delivered'=>'Enviado',
'Cancelled'=>'Cancelado',
'Adjustment'=>'Ajustes',
'Sub Total'=>'Sub Total',
'AutoCreated'=>'Automática',
'Sent'=>'Enviada',
'Credit Invoice'=>'Rectificativa',
'Paid'=>'Pagada',

//Added for Reports (5.0.4)
'Tax Type'=>'Impuesto',
'Discount Percent'=>'Descuento %',
'Discount Amount'=>'Descuento Importe',
'Terms & Conditions'=>'Condiciones Generales',
'S&H Amount'=>'Importe Envío y Manipulado',

//Added after 5.0.4 GA
'SalesOrder No'=>'No Orden de Venta',

'Recurring Invoice Information' => 'Información Facturación Recurrente',
'Enable Recurring' => 'Habilitar facturación recurrente',
'Frequency' => 'Frecuencia',
'--None--'=>'--Ninguna--',
'Daily'=>'Diario',
'Weekly'=>'Semanal',
'Monthly'=>'Mensual',
'Quarterly'=>'Trimestral',
'Yearly'=>'Anual',
'Start Period' => 'Inicio Periodo',
'End Period' => 'Final Periodo',
'Payment Duration' => 'Duración',
'Invoice Status' => 'Estado Factura',
'Net 30 days' => '30 días',
'Net 45 days' => '45 días',
'Net 60 days' => '60 días',

);

?>
