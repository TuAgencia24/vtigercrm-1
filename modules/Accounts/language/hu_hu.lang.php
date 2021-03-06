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
 * Contributor(s): ______________________________________.
 ********************************************************************************/
/*********************************************************************************
 * $Header: E:\D_root\Dokumentumok\vtiger520\hungarian52\trunk\modules\Accounts\language\hu_hu.lang.php - 18:10 2010.05.21. $
 * Description:  Defines the Hungarian language pack for the Account module vtiger 5.2.0
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): Istvan Holbok,  e-mail: holbok@gmail.com , mobil: +3670-3420900 , Skype: holboki
 ********************************************************************************/
 
$mod_strings = Array(
'LBL_MODULE_NAME'=>'Cégek',
'LBL_MODULE_TITLE'=>'Cégek: Kezdőlap',
'LBL_SEARCH_FORM_TITLE'=>'Cég Keresés',
'LBL_LIST_FORM_TITLE'=>'Cég Lista',
'LBL_NEW_FORM_TITLE'=>'Új Cég',
'LBL_MEMBER_ORG_FORM_TITLE'=>'Szervezeti tagság',
// Label for Top Accounts in Home Page, added for 4.2 GA
'LBL_TOP_ACCOUNTS'=>'Legjobb cégeim', 
'LBL_TOP_AMOUNT'=>'Összeg',
'LBL_LIST_ACCOUNT_NAME'=>'Cég neve',
'LBL_LIST_CITY'=>'Város',
'LBL_LIST_WEBSITE'=>'Weboldal',
'LBL_LIST_STATE'=>'Állam/megye',
'LBL_LIST_PHONE'=>'Telefon',
'LBL_LIST_EMAIL_ADDRESS'=>'Email cím',
'LBL_LIST_CONTACT_NAME'=>'Kapcsolat neve',
'LBL_LIST_AMOUNT' => 'Teljes összeg',

//DON'T CONVERT THESE THEY ARE MAPPINGS
'db_name' => 'LBL_LIST_ACCOUNT_NAME',
'db_website' => 'LBL_LIST_WEBSITE',
'db_billing_address_city' => 'LBL_LIST_CITY',

//END DON'T CONVERT

'LBL_ACCOUNT'=>'Cég:',
'LBL_ACCOUNT_NAME'=>'Cég neve:',
'LBL_PHONE'=>'Telefon:',
'LBL_WEBSITE'=>'Weboldal:',
'LBL_FAX'=>'Fax:',
'LBL_TICKER_SYMBOL'=>'Tőzsdei rövidítés:',
'LBL_OTHER_PHONE'=>'Telefon, másik:',
'LBL_ANY_PHONE'=>'Telefon, bármely:',
'LBL_MEMBER_OF'=>'Tagja:',
'LBL_EMAIL'=>'Email:',
'LBL_EMPLOYEES'=>'Alkalmazottak:',
'LBL_OTHER_EMAIL_ADDRESS'=>'Email, másik:',
'LBL_ANY_EMAIL'=>'Email, bármelyik:',
'LBL_OWNERSHIP'=>'Tulajdonos:',
'LBL_RATING'=>'Értékelés:',
'LBL_INDUSTRY'=>'Iparág:',
'LBL_SIC_CODE'=>'SIC Kód:',
'LBL_TYPE'=>'Típus:',
'LBL_ANNUAL_REVENUE'=>'Éves forgalom:',
'LBL_ADDRESS_INFORMATION'=>'Cím Információ',
'LBL_ACCOUNT_INFORMATION'=>'Cég Információ',
'LBL_CUSTOM_INFORMATION'=>'Egyedi Információ',
'LBL_BILLING_ADDRESS'=>'Számlázási cím:',
'LBL_SHIPPING_ADDRESS'=>'Szállítási Cím:',
'LBL_ANY_ADDRESS'=>'Cím, bármely:',
'LBL_CITY'=>'Város:',
'LBL_STATE'=>'Állam:',
'LBL_POSTAL_CODE'=>'Írányítószám:',
'LBL_COUNTRY'=>'Ország:',
'LBL_DESCRIPTION_INFORMATION'=>'Leíró Információ',
'LBL_DESCRIPTION'=>'Leírás:',
'NTC_COPY_BILLING_ADDRESS'=>'Számlázási cím másolása a szállítási címbe',
'NTC_COPY_SHIPPING_ADDRESS'=>'Szállítási cím másolása a számlázási címbe',
'NTC_REMOVE_MEMBER_ORG_CONFIRMATION'=>'Biztos vagy abban, hogy ezt a rekorodot mint tagszervezetet törölni akarod?',
'LBL_DUPLICATE'=>'Lehetséges Cég Duplikáció',
'MSG_DUPLICATE' => 'Ennek a Cégnek a létrehozása valószínűleg duplikálni fog egy már létező Céget a rendszerben. Kiválaszthatsz egy már létező Céget a listáról innen alább, vagy kattinthatsz az Új Cég gombra, hogy folytasd a cég létrehozását a már bevitt adatokkal.',

'LBL_INVITEE'=>'Kapcsolatok',
'ERR_DELETE_RECORD'=>"Egy rekord azonosítót meg kell adnon a vtiger_account törléséhez.",

'LBL_SELECT_ACCOUNT'=>'Cég Kiválasztása',
'LBL_GENERAL_INFORMATION'=>'Általános információ',

//for v4 release added
'LBL_NEW_POTENTIAL'=>'Új Lehetőség',
'LBL_POTENTIAL_TITLE'=>'Lehetőségek',

'LBL_NEW_TASK'=>'Új Feladat',
'LBL_TASK_TITLE'=>'Feladatok',
'LBL_NEW_CALL'=>'Új Hívás',
'LBL_CALL_TITLE'=>'Hívások',
'LBL_NEW_MEETING'=>'Új Megbeszélés',
'LBL_MEETING_TITLE'=>'Megbeszélések',
'LBL_NEW_EMAIL'=>'Új Email',
'LBL_EMAIL_TITLE'=>'Emailek',
'LBL_NEW_CONTACT'=>'Új Kapcsolat',
'LBL_CONTACT_TITLE'=>'Kapcsolatok',

//Added vtiger_fields after RC1 - Release
'LBL_ALL'=>'Minden',
'LBL_PROSPECT'=>'Vevő jelölt',
'LBL_INVESTOR'=>'Befektető',
'LBL_RESELLER'=>'Viszonteladó',
'LBL_PARTNER'=>'Partner',

// Added for 4GA
'LBL_TOOL_FORM_TITLE'=>'Cég eszközök',
//Added for 4GA
'Account Name'=>'Cég neve',
'Phone'=>'Telefon',
'Website'=>'Weboldal',
'Fax'=>'Fax',
'Ticker Symbol'=>'Tőzsdei rövidítés',
'Other Phone'=>'Telefon, másik',
'Member Of'=>'Tagja',
'Email'=>'Email',
'Employees'=>'Alkalmazottak',
'Other Email'=>'Email, másik',
'Ownership'=>'Tulajdonos',
'Rating'=>'Értékelés',
'industry'=>'Iparág',
'SIC Code'=>'TEÁOR',
'Type'=>'Típus',
'Annual Revenue'=>'Éves forgalom',
'Assigned To'=>'Felelős',
'Billing Address'=>'Számlázási cím - Utca',
'Shipping Address'=>'Szállítási cím - Utca',
'Billing City'=>'Számlázási cím - Város',
'Shipping City'=>'Szállítási cím - Város',
'Billing State'=>'Számlázási cím - Állam/Megye',
'Shipping State'=>'Szállítási cím - Állam/Megye',
'Billing Code'=>'Számlázási cím - Irányítószám',
'Shipping Code'=>'Szállítási cím - Irányítószám',
'Billing Country'=>'Számlázási cím - Ország',
'Shipping Country'=>'Szállítási cím - Ország',
'Created Time'=>'Létrehozva',
'Modified Time'=>'Módosítva',
'Description'=>'Megjegyzés',
'Shipping Po Box'=>'Szállítási cím - Postafiók',
'Billing Po Box'=>'Számlázási cím - Postafiók',

//Added after 4.2 patch 2
'Email Opt Out'=>'Email Leiratkozva',
'LBL_EMAIL_OPT_OUT'=>'Email Leiratkozva:',

//Added after 5Alpha5
'Notify Owner'=>'Értesítsd a tulajdonost',

//Added for existing picklist entries

'--None--'=>'--',

'Acquired'=>'Megszerzett',
'Active'=>'Aktív',
'Market Failed'=>'Rossz célpiac',
'Project Cancelled'=>'Törölt projekt',
'Shutdown'=>'Halott akta',

'Apparel'=>'Ruházat - Felszerelés',
'Banking'=>'Bank',
'Biotechnology'=>'Biotechnológia',
'Chemicals'=>'Vegyipar',
'Communications'=>'Kommunikáció',
'Construction'=>'Építőipar',
'Consulting'=>'Tanácsadás',
'Education'=>'Oktatás',
'Electronics'=>'Elektronika',
'Energy'=>'Energia szektor',
'Engineering'=>'Mérnöki tevékenység',
'Entertainment'=>'Szórakoztató ipar',
'Environmental'=>'Környezetvédelem',
'Finance'=>'Pénzügyek',
'Food & Beverage'=>'Élelmiszer ipar',
'Government'=>'Államigazgatás',
'Healthcare'=>'Egészségügy',
'Hospitality'=>'Vendéglátás',
'Insurance'=>'Biztosítás',
'Machinery'=>'Gépipar',
'Manufacturing'=>'Gyártás',
'Media'=>'Média',
'Not For Profit'=>'Non-Profit',
'Recreation'=>'Wellness',
'Retail'=>'Kiskereskedelem',
'Shipping'=>'Szállítás',
'Technology'=>'Technológia',
'Telecommunications'=>'Telekommunikáció',
'Transportation'=>'Közlekedés',
'Utilities'=>'Szolgáltatás',
'Other'=>'Egyéb',

'Analyst'=>'Elemző',
'Competitor'=>'Versenytárs',
'Customer'=>'Vevő',
'Integrator'=>'Integrátor',
'Investor'=>'Befektető',
'Partner'=>'Partner',
'Press'=>'Sajtó',
'Prospect'=>'Vevőjelölt',
'Reseller'=>'Viszonteladó',
'LBL_START_DATE' => 'Kezdő dátum',
'LBL_END_DATE' => 'Záró dátum',

// Added/Updated for vtiger CRM 5.0.4

//added to fix the issue #4081
'LBL_ACCOUNT_EXIST' => 'Cég név már létezik!',

// mailer export
'LBL_MAILER_EXPORT' => 'Levelezés Exportálása',
'LBL_MAILER_EXPORT_CONTACTS_TYPE'=>'Kapcsolatok kiválasztása:',
'LBL_MAILER_EXPORT_CONTACTS_DESCR'=>'A Kapcsolatok kiválaszthatók egyedi mezőkön és néhány standard mezőn keresztül is.',
'LBL_MAILER_EXPORT_RESULTS_TYPE'=>'Az export típus kiválasztása:',
'LBL_MAILER_EXPORT_RESULTS_DESCR'=>'Az adatokat a Cégekből és a hozzájuk tartozó Kapcsolatokból szedtük össze, amik a megelőző keresés eredményeképpen rendelkezésünkre álltak.',
'LBL_EXPORT_RESULTS_EMAIL' => 'E-levelező adatok exportálása',
'LBL_EXPORT_RESULTS_EMAIL_CORP'=>'Email adatok exportálása a "Cég Email" mezőből, amennyiben a Kapcsolatok "Email" mező üres',
'LBL_EXPORT_RESULTS_FULL'=>'Adatok exportálása a Kapcsolatok, E-Mail, Cégnév, Cím, Telefon, stb. adatokkal',
'LBL_EXPORT_RESULTS_GO'=>'Exportálás',
'LBL_MAILER_EXPORT_IGNORE' => '- mindegy -',
'LBL_MAILER_EXPORT_CHECKED' =>'Igen',
'LBL_MAILER_EXPORT_NOTCHECKED' => 'Nem',

// Added after 5.0.4 GA

//Module Sequence Numbering
'Account No'=>'Cég sorszám',

// Account Hierarchy
'LBL_SHOW_ACCOUNT_HIERARCHY' => 'Cég Hierarchiát mutat',

// Added for 5.2.0 
'Send SMS' => 'SMS küldés',
// END
);

?>
