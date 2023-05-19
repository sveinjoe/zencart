<?php
// $Id: easypopulate_4.php, v4.0.37.7.ZC 06-30-2019 mc12345678 $

// $display_output defines

// file uploads display - output via $display_output
define('EASYPOPULATE_4_DISPLAY_SPLIT_LOCATION','You can also download your split files from your %s directory<br />');
define('EASYPOPULATE_4_DISPLAY_HEADING','<br /><h3><u>Import Results</u></h3><br />');
define('EASYPOPULATE_4_DISPLAY_UPLOADED_FILE_SPEC','<p class=smallText>File uploaded.<br />Temporary filename: %s<br /><b>User filename: %s</b><br />Size: %s<br />'); // open paragraph
define('EASYPOPULATE_4_DISPLAY_UPLOADED_FILE_TOO_LARGE', '<br /><b>Uploaded file is too large (%1$d bytes) and exceeds the Maximum File Upload Size of %2$d bytes. If necessary, split the file, increase the size limit or check settings.</b>');
define('EASYPOPULATE_4_DISPLAY_LOCAL_FILE_SPEC','<p class=smallText><b>Filename: %s</b><br />'); // open paragraph

// upload results display - output via $display_output
define('EASYPOPULATE_4_DISPLAY_RESULT_DELETED','<br /><font color="fuchsia"><b>DELETED! - %2$s:</b> %1$s</font>');
define('EASYPOPULATE_4_DISPLAY_RESULT_DELETE_NOT_FOUND','<br /><font color="darkviolet"><b>NOT FOUND! - %2$s:</b> %1$s - cant delete...</font>');
define('EASYPOPULATE_4_DISPLAY_RESULT_CATEGORY_NOT_FOUND', '<br /><font color="red"><b>SKIPPED! - %3$s:</b> %1$s - No category provided for this%2$s product</font>');
define('EASYPOPULATE_4_DISPLAY_RESULT_CATEGORY_ID_NOT_FOUND', '<br /><font color="red"><b>SKIPPED! - Category ID: </b>%1$s - Not Found!</font>');
define('EASYPOPULATE_4_DISPLAY_RESULT_CATEGORY_NAME_LONG','<br /><font color="red"><b>SKIPPED! - %4$s:</b> %1$s - Category name: "%2$s" exceeds max. length: %3$s</font>');
define('EASYPOPULATE_4_DISPLAY_RESULT_EXPORT_NO_OPTION_VALUE', 'NO OPTION VALUE (File, Text)');
define('EASYPOPULATE_4_DISPLAY_RESULT_PRODUCTS_URL_LONG','<br /><font color="red"><b>WARNING! - %4$s:</b> %1$s - URL: "%2$s" exceeds max. length: %3$s</font>');
define('EASYPOPULATE_4_DISPLAY_RESULT_MANUFACTURER_NAME_LONG','<br /><font color="red"><b>MANUFACTURER SKIPPED! - Manufacturer:</b> %1$s - Manufacturer name exceeds max. length: %2$s</font>');
define('EASYPOPULATE_4_DISPLAY_RESULT_PRODUCTS_MODEL_LONG','<br /><font color="red"><b>SKIPPED! - %3$s: </b>%1$s - Products model exceeds max. length: %2$s</font>');
define('EASYPOPULATE_4_DISPLAY_RESULT_PRODUCTS_NAME_LONG','<br /><font color="red"><b>WARNING! - %4$s: </b>%1$s - Products name: "%2$s" exceeds max. length: %3$s</font>');
define('EASYPOPULATE_4_DISPLAY_RESULT_NEW_PRODUCT', '<br /><font color="green"><b>NEW PRODUCT! - %2$s:</b> %1$s</font> | ');
define('EASYPOPULATE_4_DISPLAY_RESULT_NEW_PRODUCT_FAIL', '<br /><font color="red"><b>ADD NEW PRODUCT FAILED! - %2$s:</b> %1$s - SQL error. Check Easy Populate error log in uploads directory</font>');
define('EASYPOPULATE_4_DISPLAY_RESULT_UPDATE_PRODUCT', '<br /><font color="mediumblue"><b>UPDATED! - %2$s:</b> %1$s</font> | ');
define('EASYPOPULATE_4_DISPLAY_RESULT_NO_CATEGORY_UPDATE', '<br /><font color="blue"><b>Nothing to update! - %1$s:</b> Did not contain information to support an update. Moved to next record.</font> | ');
define('EASYPOPULATE_4_DISPLAY_RESULT_UPDATE_PRODUCT_FAIL', '<br /><font color="red"><b>UPDATE PRODUCT FAILED! - %2$s:</b> %1$s - SQL error. Check Easy Populate error log in uploads directory</font>');
define('EASYPOPULATE_4_DISPLAY_RESULT_NO_MODEL', '<br /><font color="red"><b>No %1$s field data in record. This line was not imported</b></font>');
define('EASYPOPULATE_4_DISPLAY_RESULT_UPLOAD_IMPORT', ' file to database or see below for more.');
define('EASYPOPULATE_4_DISPLAY_RESULT_UPLOAD_COMPLETE','<br /><b>File uploaded Successfully</b>: %1$s %2$s');
define('EASYPOPULATE_4_DISPLAY_RESULT_UPLOAD_EMPTY','<br /><b>Upload button was pressed, but no file had been selected.  Click Browse... to select a file to upload.</b>');
define('EASYPOPULATE_4_DISPLAY_RESULT_UPLOAD_NO_CSV', ' file is not a CSV file. See below for options.');
define('EASYPOPULATE_4_DISPLAY_RESULT_ARTISTS_NAME_EMPTY', '<br /><font color="red"><b>SKIPPED! - Artist Name for:</b> %1$s - not provided when using primary Key: %2$s</font>');
define('EASYPOPULATE_4_DISPLAY_RESULT_ARTISTS_NAME_LONG','<br /><font color="red"><b>SKIPPED! - Artist Name:</b> %1$s - exceeds max. length: %2$s</font>');
define('EASYPOPULATE_4_DISPLAY_RESULT_RECORD_COMPANY_NAME_EMPTY', '<br /><font color="red"><b>SKIPPED! - Record Company Name for:</b> %1$s - not provided when using primary Key: %2$s</font>');
define('EASYPOPULATE_4_DISPLAY_RESULT_RECORD_COMPANY_NAME_LONG','<br /><font color="red"><b>SKIPPED! - Record Company Name:</b> %1$s - exceeds max. length: %2$s</font>');
define('EASYPOPULATE_4_DISPLAY_RESULT_MUSIC_GENRE_NAME_EMPTY', '<br /><font color="red"><b>SKIPPED! - Music Genre Name for:</b> %1$s - not provided when using primary Key: %2$s</font>');
define('EASYPOPULATE_4_DISPLAY_RESULT_MUSIC_GENRE_NAME_LONG','<br /><font color="red"><b>SKIPPED! - Music Genre Name:</b> %1$s - exceeds max. length: %2$s</font>');
define('EASYPOPULATE_4_DISPLAY_RESULT_SBA_DETAIL_NOT_FOUND','<br /><font color="red"><b>SKIPPED! - Attribute Entry on %2$s: </b>%1$s - Not Found!</font>');
define('EASYPOPULATE_4_DISPLAY_RESULT_BASIC_ATTRIB_NEW','<br /><font color="green"><b>NEW ATTRIBUTE! - %1$s:</b> %2$s, <b>Option:</b> %3$s, <b>Values:</b> %4$s</font>');
define('EASYPOPULATE_4_DISPLAY_RESULT_BASIC_ATTRIB_UPDATE','<br /><font color="blue"><b>UPDATED ATTRIBUTE! - %1$s:</b> %2$s <b>Option:</b> %3$s, <b>Values:</b> %4$s</font>');
define('EASYPOPULATE_4_DISPLAY_RESULT_BASIC_ATTRIB_SKIPPED', '<br /><font color="red"><b>SKIPPED! - Primary key: %1$s:</b>%2$s - Not Found! Unable to apply attributes.</font>');
define('EASYPOPULATE_4_DISPLAY_RESULT_BASIC_ATTRIB_NO_PRIMARY_KEY', '<br /><font color="red"><b>SKIPPED! - Primary key: %1$s:</b> - Not Found in the file! Unable to import attributes.</font>');
define('EASYPOPULATE_4_DISPLAY_RESULT_BASIC_ATTRIB_NEW_PRODUCT_OPTION_NO_PRODUCTS_OPTIONS_TYPE', '<br /><font color="blue"><b>WARNING! - Primary key: %1$s:</b>%2$S - File did not have a v_products_attributes_type field. Using default of %3$d.</font>');

// $messageStack defines
// checks - msg stack alerts - output via $messageStack
define('EASYPOPULATE_4_MSGSTACK_TEMP_FOLDER_MISSING','<b>Easy Populate "Uploads Folder" missing!</b><br />Your uploads folder is missing. Your configuration indicates that your uploads folder is named <b>%1$s</b>, and is located in <b>%2$s</b>.<br>');
define('EASYPOPULATE_4_MSGSTACK_TEMP_FOLDER_NOT_WRITABLE','<b>Easy Populate "Uploads Folder" is not writable!</b><br />Your uploads folder is not writable. Folder permissions for <b>%1$s</b> must be "777" or "755" depending on your server setup.<br>You must correct folder permissions before contining.<br>');
define('EASYPOPULATE_4_MSGSTACK_TEMP_FOLDER_PERMISSIONS_SUCCESS','Easy Populate successfully adjusted the permissions on your uploads folder! You can now upload files using Easy Populate...');
define('EASYPOPULATE_4_MSGSTACK_TEMP_FOLDER_PERMISSIONS_SUCCESS_777','Easy Populate successfully adjusted the permissions on your uploads folder, but the folder is now publically viewable. Please ensure that you added the index.html file to this directory to prevent public browsing/downloading of your Easy Populate files.');
define('EASYPOPULATE_4_MSGSTACK_MODELSIZE_DETECT_FAIL','Easy Populate cannot determine the maximum size permissible for the products_model field in your products table. Please ensure that the length of your model data field does not exceed the Zen Cart default value of 32 characters for any given product. Failure to heed this warning may have unintended consequences for your data.');
define('EASYPOPULATE_4_MSGSTACK_ERROR_SQL', 'An SQL error has occured. Please check your input data for tabs within fields and delete these. If this error continues, please forward your error log to the Easy Populate maintainer');
define('EASYPOPULATE_4_MSGSTACK_DROSS_DELETE_FAIL', '<b>Deleting of product data debris failed!</b> Please see the debug log in your uploads directory for further information.');
define('EASYPOPULATE_4_MSGSTACK_DROSS_DELETE_SUCCESS', 'Deleting of product data debris succeeded!');
define('EASYPOPULATE_4_MSGSTACK_DROSS_DETECTED', '<b>%1$s partially deleted product(s) found!</b> Delete this dross to prevent unwanted zencart behaviour by clicking <a href="%2$s">here.</a><br />You are seeing this because there are references in tables to a product that no longer exists, which is usually caused by an incomplete product deletion. This can cause Zen Cart to misbehave in certain circumstances.');
define('EASYPOPULATE_4_MSGSTACK_DATE_FORMAT_FAIL', '%1$s is not a valid date format. If you upload any date other than raw format (such as from Excel) you will mangle your dates. Please fix this by correcting your date format in the Easy Populate config.');
define('EASYPOPULATE_4_ORDERS_DROPDOWN_FIRST', 'Order Type');
define('EASYPOPULATE_4_ORDERS_FULL', 'Orders Full');
define('EASYPOPULATE_4_ORDERS_NEWFULL', 'Orders New Full');
define('EASYPOPULATE_4_ORDERS_NO_ATTRIBS', 'Orders No Attributes');
define('EASYPOPULATE_4_ORDERS_ATTRIBS', 'Orders Attributes Only');
define('EASYPOPULATE_4_ORDERS_DROPDOWN_TITLE', '<b>Filterable Orders Exports:</b><br/>');

// install - msg stack alerts - output via $messageStack
define('EASYPOPULATE_4_MSGSTACK_INSTALL_DELETE_SUCCESS','Redundant file <b>%1$s</b> was deleted from <b>YOUR_ADMIN%2$s</b> directory.');
define('EASYPOPULATE_4_MSGSTACK_INSTALL_DELETE_FAIL','Easy Populate was unable to delete redundant file <b>%1$s</b> from <b>YOUR_ADMIN%2$s</b> directory. Please delete this file manually.');
define('EASYPOPULATE_4_MSGSTACK_INSTALL_CHMOD_FAIL','<b>Please run the Easy Populate install again after fixing your uploads directory problem.</b>');
define('EASYPOPULATE_4_MSGSTACK_INSTALL_CHMOD_SUCCESS','<b>Configuration Variables Installation Successfull!</b>');
define('EASYPOPULATE_4_MSGSTACK_INSTALL_KEYS_FAIL','<b>Easy Populate Configuration Missing.</b>  Please install your configuration by clicking %1$sInstall EP4%2$s');

// file handling - msg stack alerts - output via $messageStack
define('EASYPOPULATE_4_MSGSTACK_FILE_EXPORT_SUCCESS', 'File <b>%1$s.csv</b> successfully exported! The file is ready for download in your /%2$s directory.');

// $specials_print defines
// results of specials in $specials_print
define('EASYPOPULATE_4_SPECIALS_HEADING', '<b><u>Specials Summary</u></b><p class=smallText>'); // open paragraph
define('EASYPOPULATE_4_SPECIALS_PRICE_FAIL', '<font color="red"><b>SKIPPED! - %3$s:</b> %1$s | %2$s - specials price higher than normal price...</font><br />');
define('EASYPOPULATE_4_SPECIALS_NEW', '<font color="green"><b>NEW! - %5$s:</b> %1$s</font> | %2$s | %3$s | <font color="green"><b>%4$s</b></font> |<br />');
define('EASYPOPULATE_4_SPECIALS_UPDATE', '<font color="mediumblue"><b>UPDATED! - %5$s:</b> %1$s</font> | %2$s | %3$s | <font color="green"><b>%4$s</b></font> |<br />');
define('EASYPOPULATE_4_SPECIALS_DELETE', '<font color="fuchsia"><b>DELETED! - %3$s:</b> %1$s</font> | %2$s |<br />');
define('EASYPOPULATE_4_SPECIALS_DELETE_FAIL', '<font color="darkviolet"><b>NOT FOUND! - %2$s:</b> %1$s - cannot delete special...</font><br />');
define('EASYPOPULATE_4_SPECIALS_FOOTER', '</p>'); // close paragraph

define('EP_DESC_PLURAL', 'Sie werden');
define('EP_DESC_SING', 'Es wird');
define('FEATURED_EP_DESC','Prefix: %1$s. %2$s durch die featured Filter ausgeführt werden.');
define('PRICEQTY_EP_DESC','Prefix: %1$s. %2$s durch die Price Quantity Filter ausgeführt werden.');
define('PRICEBREAKS_EP_DESC','Prefix: %1$s. %2$s durch die Price Breaks Filter ausgeführt werden.');
define('CATEGORY_EP_DESC','Prefix: %1$s. %2$s durch die Category Filter ausgeführt werden.');
define('CATEGORYMETA_EP_DESC','Prefix: %1$s. %2$s durch die Category Meta Filter ausgeführt werden.');
define('ATTRIB_BASIC_EP','Prefix: %1$s. %2$s durch die Basic Attribute Filter ausgeführt werden.');
define('ATTRIB_DETAILED_EP_DESC','Prefix: %1$s. %2$s durch die Detailed Attributes Filter ausgeführt werden.');
define('SBA_DETAILED_EP_DESC','Prefix: %1$s. %2$s durch die Detailed Stock by Attributes Filter ausgeführt werden.');
define('SBA_STOCK_EP_DESC','Prefix: %1$s. %2$s durch die Stock by Attributes Stock Modification Filter ausgeführt werden.');
define('ORDERS_EP_DESC', 'Prefix: %1$s. %2$s will not be processed for import.');
define('CATCHALL_EP_DESC', 'Alle anderen. %2$s durch die upload ein full data file Filter ausgeführt werden.');
define('ORDERSEXPORT_LINK_SAVE1', 'ORDERSEXPORT_LINK_SAVE1');
define('ORDERSEXPORT_LINK_SAVE1B', 'ORDERSEXPORT_LINK_SAVE1B');
define('ORDERSEXPORT_LINK_SAVE2', 'ORDERSEXPORT_LINK_SAVE2');
define('ORDERSEXPORT_LINK_SAVE3', 'ORDERSEXPORT_LINK_SAVE3');

// error log defines - for ep_debug_log.txt
define('EASYPOPULATE_4_ERRORLOG_SQL_ERROR', 'MySQL error %1$s: %2$s\nWhen executing:\n%3$sn');

define('EASYPOPULATE_4_REMOVE_SETTINGS', 'Easy Populate 4 deinstallieren' );
define('EASYPOPULATE_4_CONFIG_SETTINGS', 'Konfigurationseinstellungen');
define('EASYPOPULATE_4_CONFIG_UPLOAD', 'Upload Verzeichnis: ');
define('EASYPOPULATE_4_CONFIG_PRIMARY', 'Primary Key: ');
define('EASYPOPULATE_4_CONFIG_TEXT_IMPORT_OVERRIDE', 'Import Language Override: ');
define('EASYPOPULATE_4_UPDATE_SETTINGS', 'Update EP4 Database');
define('EASYPOPULATE_4_DISPLAY_SPLIT_SHORT', 'Einträge aufteilen: ');
define('EASYPOPULATE_4_DISPLAY_EXEC_TIME', 'Ausführungszeit: ');
define('EASYPOPULATE_4_DISPLAY_ENABLE_META', 'Metatags der Artikel aktivieren:  ');
define('EASYPOPULATE_4_DISPLAY_ENABLE_MUSIC', 'Artikeltyp Musik aktivieren: ');
define('EASYPOPULATE_4_DISPLAY_CUSTOM_PRODUCT_FIELDS', 'Individuelle zusätzliche Artikelfelder von verschiedenen Erweiterungen');
define('EASYPOPULATE_4_DISPLAY_STATUS_PRODUCT_SHORT_DESC', 'Artikel Kurzbeschreibung (Products Short Descriptions): ');
define('EASYPOPULATE_4_DISPLAY_STATUS_PRODUCT_UNIT_MEAS', 'Product Unit of Measure: ');
define('EASYPOPULATE_4_DISPLAY_STATUS_PRODUCT_UPC', 'Product UPC Code: ');
define('EASYPOPULATE_4_DISPLAY_STATUS_PRODUCT_GOOGLE_CAT', 'Google Produkt Kategorie: ');
define('EASYPOPULATE_4_DISPLAY_STATUS_PRODUCT_MSRP', 'Manufacturer\'s Suggested Retail Price: ');
define('EASYPOPULATE_4_DISPLAY_STATUS_PRODUCT_MAP', 'Manufacturer\'s Advertised Price: ');
define('EASYPOPULATE_4_DISPLAY_STATUS_PRODUCT_GP', 'Gruppenpreise pro Artikel: ');
define('EASYPOPULATE_4_DISPLAY_STATUS_PRODUCT_EXCLUSIVE', 'Exclusive Products Mod:');
define('EASYPOPULATE_4_DISPLAY_STATUS_PRODUCT_SBA', 'Stock By Attributes: ');
define('EASYPOPULATE_4_DISPLAY_STATUS_PRODUCT_CEON', 'CEON URI: ');
define('EASYPOPULATE_4_DISPLAY_STATUS_PRODUCT_DPM', 'Dual Pricing: ');
define('EASYPOPULATE_4_DISPLAY_USER_DEF_FIELDS', 'Weitere individuelle Artikelfelder: ');
define('EASYPOPULATE_4_DISPLAY_INSTALLED_LANG', 'Installierte Sprachen');
define('EASYPOPULATE_4_DISPLAY_INSTALLED_LANG_DEF', 'Standard Sprache: ');
define('EASYPOPULATE_4_DISPLAY_INT_CHAR_ENC', 'Internal Character Encoding: ');
define('EASYPOPULATE_4_DISPLAY_DB_COLL', 'Datenbank Kollation: ');
define('EASYPOPULATE_4_DISPLAY_DB_FLD_LGTH', 'Datenbank Feldlängen');
define('EASYPOPULATE_4_DISPLAY_TITLE_UPLOAD', 'Datei für den Import hochladen');
define('EASYPOPULATE_4_DISPLAY_MAX_UP_SIZE', 'Http Maximale Dateigröße für den Upload: %1$d bytes (%2$d Mbytes)');
define('EASYPOPULATE_4_DISPLAY_UPLOAD_BUTTON_TEXT', 'Hochladen');
define('EASYPOPULATE_4_DD_STATUS_DEFAULT', 'Status (aktiv)');
define('EASYPOPULATE_4_DD_STATUS_ACTIVE', 'aktiv');
define('EASYPOPULATE_4_DD_STATUS_INACTIVE', 'inaktiv');
define('EASYPOPULATE_4_DD_STATUS_ALL', 'alle');
define('EASYPOPULATE_4_DD_DOWNLOAD_DEFAULT', 'Download Typ');
define('EASYPOPULATE_4_DD_DOWNLOAD_COMPLETE', 'Alle Artikel');
define('EASYPOPULATE_4_DD_DOWNLOAD_QUANTITY', 'Artikelnummer/Preis/Anzahl');
define('EASYPOPULATE_4_DD_DOWNLOAD_BREAKS', 'Artikelnummer/Preis/Staffelpreise');
define('EASYPOPULATE_4_DD_DOWNLOAD_COMPLETE_SINGLE', 'Alle Artikel Ohne Linked');
define('EASYPOPULATE_4_DD_FILTER_CATEGORIES', 'Kategorien');
define('EASYPOPULATE_4_DD_FILTER_EXPORT', 'Exportieren');

define('EASYPOPULATE_4_ORDERS_DROPDOWN_EXPORT', 'Exportieren');

define('EASYPOPULATE_4_DELIMITER_UNKNOWN', 'Unknown Delimiter');
define('EASYPOPULATE_4_DISPLAY_IMPORT_CSV_DELIMITER_ISSUES', 'Issues with the CSV file delimiter(s)');
define('EASYPOPULATE_4_DISPLAY_IMPORT_CSV_DELIMITER_ISSUES_NO_CSV', 'File is not a CSV file and there are issues with the delimiter(s)');

define('EASYPOPULATE_4_DISPLAY_EXPORT_FILE_SPLIT', 'Splitten');
define('EASYPOPULATE_4_DISPLAY_EXPORT_FILE_IMPORT_SYNC', 'Importieren m/Sync');
define('EASYPOPULATE_4_DISPLAY_EXPORT_FILE_IMPORT', 'Importieren');
define('EASYPOPULATE_4_DISPLAY_EXPORT_FILE_DELETE', 'Datei löschen');
define('EASYPOPULATE_4_DISPLAY_EXPORT_FILE_DOWNLOAD', 'Download');
define('EASYPOPULATE_4_DISPLAY_EXPORT_FILE_NONE_SUPPORTED', '<b>Keine unterstützten Exportdateien vorhanden</b>');
define('EASYPOPULATE_4_DISPLAY_EXPORT_FILE_ERROR_FOLDER_OPEN', '<b>Fehler beim Öffnen des Exportverzeichnisses:</b>');

define('EASYPOPULATE_4_DISPLAY_EXPORT_TYPE_ERROR','error: Kein Exporttyp gewöhlt - Drücken Sie die Backspace Taste um zurückzugehen.');

define('EASYPOPULATE_4_DISPLAY_EXPORT_TABLE_TITLE_FILENAME', 'Dateiname');
define('EASYPOPULATE_4_DISPLAY_EXPORT_TABLE_TITLE_SIZE', 'Größe');
define('EASYPOPULATE_4_DISPLAY_EXPORT_TABLE_TITLE_DATE_TIME', 'Datum &amp; Uhrzeit');
define('EASYPOPULATE_4_DISPLAY_EXPORT_TABLE_TITLE_TYPE', 'Typ');
define('EASYPOPULATE_4_DISPLAY_EXPORT_TABLE_TITLE_SPLIT', 'Splitten');
define('EASYPOPULATE_4_DISPLAY_EXPORT_TABLE_TITLE_IMPORT', 'Importieren');
define('EASYPOPULATE_4_DISPLAY_EXPORT_TABLE_TITLE_DELETE', 'Löschen');
define('EASYPOPULATE_4_DISPLAY_EXPORT_TABLE_TITLE_DOWNLOAD', 'Download');

define('EASYPOPULATE_4_DISPLAY_EXPORT_RESULTS_TITLE','<br><u><h3>Export Ergebnisse</h3></u><br>');
define('EASYPOPULATE_4_DISPLAY_EXPORT_RESULTS_NUM_RECORDS','<br>Exportierte Einträge: %d<br>');
define('EASYPOPULATE_4_DISPLAY_EXPORT_RESULTS_MEM_USE','<br>Speicherverbrauch: %d');
define('EASYPOPULATE_4_DISPLAY_EXPORT_RESULTS_MEM_PEAK','<br>Speicherverbrauch Spitzenwert: %d');
define('EASYPOPULATE_4_DISPLAY_EXPORT_RESULTS_EXEC_TIME','<br>Ausführungszeit: %d seconds.');

define('EASYPOPULATE_4_DISPLAY_IMPORT_RESULTS_TITLE','<h3>Verarbeitung des Importdatei abgeschlossen</h3>');
define('EASYPOPULATE_4_DISPLAY_IMPORT_RESULTS_NUM_RECORDS_UPDATE','<br/>Aktualisierte Einträge: %d');
define('EASYPOPULATE_4_DISPLAY_IMPORT_RESULTS_NUM_RECORDS_IMPORT','<br/>Neu importierte Einträge: %d');
define('EASYPOPULATE_4_DISPLAY_IMPORT_RESULTS_NUM_ERRORS','<br/>Entdeckte Fehler: %d');
define('EASYPOPULATE_4_DISPLAY_IMPORT_RESULTS_NUM_WARNINGS','<br/>Entdeckte Warnungen: %d');
define('EASYPOPULATE_4_DISPLAY_IMPORT_RESULTS_MEM_USE','<br/>Speicherverbrauch: %d');
define('EASYPOPULATE_4_DISPLAY_IMPORT_RESULTS_MEM_PEAK','<br/>Speicherverbrauch Spitzenwert: %d');
define('EASYPOPULATE_4_DISPLAY_IMPORT_RESULTS_EXEC_TIME','<br/>Ausfährungszeit: %d seconds');
define('EASYPOPULATE_4_DISPLAY_IMPORT_COMPLETE_ISSUES','Dateiimport mit Problemen abgeschlossen.');
define('EASYPOPULATE_4_DISPLAY_IMPORT_COMPLETE','Dateiimport ohne Probleme abgeschlossen.');
define('EASYPOPULATE_4_DISPLAY_IMPORT_RESULTS_LEN_PRODUCTS_NAME','<br />Längstes products_name: %1$s');
define('EASYPOPULATE_4_DISPLAY_IMPORT_RESULTS_LEN_PRODUCTS_URL','<br />Längstes products_url: %1$s');
define('EASYPOPULATE_4_DISPLAY_IMPORT_RESULTS_LEN_PRODUCTS_MODEL','<br />Längstes products_model: %1$s');
define('EASYPOPULATE_4_DISPLAY_IMPORT_RESULTS_LEN_MANUFACTURERS_NAME','<br />Längstes manufacturers_name: %1$s');
define('EASYPOPULATE_4_DISPLAY_IMPORT_RESULTS_LEN_CATEGORIES_NAME','<br />Längstes categories_name: %1$s');
define('EASYPOPULATE_4_DISPLAY_IMPORT_RESULTS_LEN_ARTISTS_NAME','<br />Längstes artists_name: %1$s');
define('EASYPOPULATE_4_DISPLAY_IMPORT_RESULTS_LEN_MUSIC_GENRE_NAME','<br />Längstes music_genre_name: %1$s');
define('EASYPOPULATE_4_DISPLAY_IMPORT_RESULTS_LEN_RECORD_COMPANY_NAME','<br />Längstes record_company_name: %1$s');
