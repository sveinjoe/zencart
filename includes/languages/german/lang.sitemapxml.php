<?php
/**
 * Sitemap XML Feed
 *
 * @package Sitemap XML Feed
 * @copyright Copyright 2005-2015 Andrew Berezin eCommerce-Service.com
 * @copyright Copyright 2003-2015 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @link http://www.sitemaps.org/
 * @version $Id: sitemapxml.php, v 3.8 07.07.2016 12:39:33 AndrewBerezin $
 */
$define = [
    'NAVBAR_TITLE' => 'SiteMapXML',
    'HEADING_TITLE' => 'SiteMapXML (' . SITEMAPXML_VERSION . ')',

    'TEXT_EXECUTION_TIME' => 'Gesamt: Ausführungszeit %s, DB-Abfragen %s, DB-Abfragezeit %s.',  
    'TEXT_TOTAL_SITEMAP' => 'Gesamt: Dateien %s, Einträge %s (%s Bytes), Ausführungszeit %s, DB-Abfragen %s, DB-Abfragezeit %s.',  
    'TEXT_FILE_SITEMAP_INFO' => 'Datei <a href="%s" target="_blank">%s</a>. Schrieben %s Einträge (%s Bytes), Dateigröße: %s Bytes',  
    'TEXT_WRITTEN' => 'Schrieben %s Einträge (%s Bytes), Dateigröße: %s Bytes',  
      
    'TEXT_URL_FILE' => 'URL - ',  
    'TEXT_INCLUDE_FILE' => 'Include ',  
    'TEXT_FILE_NOT_CHANGED' => 'haben sich nicht verändert - vorhandene Datei(en) verwendet',  
    'TEXT_FAILED_TO_OPEN' => 'Datei "%s" konnte nicht geöffnet werden!!!',  
    'TEXT_FAILED_TO_CREATE' => 'Datei "%s" konnte nicht erstellt werden. Sie müssen möglicherweise über das Webhost-Control-Panel/Dateimanager die Berechtigungen ändern.',  
    'TEXT_FAILED_TO_CHMOD' => 'Datei "%s" ist schreibgeschützt. Sie müssen möglicherweise über das Webhost-Control-Panel/Dateimanager die Berechtigungen ändern.',  
      
    'TEXT_HEAD_SITEMAP_INDEX' => 'Sitemap-Index',  
    'TEXT_HEAD_SITEMAP_INDEX_NONE' => 'Sitemap-Index wurde nicht generiert: keine Sitemaps gefunden (keine Plugins ausgewählt)',  
      
    'TEXT_ERROR_CURL_NOT_FOUND' => 'CURL-Funktionen nicht gefunden - erforderlich für Ping/checkURL-Funktionen',  
    'TEXT_ERROR_CURL_INIT' => 'cURL-Fehler: Initialisieren von cURL',  
    'TEXT_ERROR_CURL_EXEC' => 'cURL-Fehler: "<b>%s</b>" beim Lesen von "%s"',  
    'TEXT_ERROR_CURL_NO_HTTPCODE' => 'cURL-Fehler: Kein http_code beim Lesen von "%s"',  
    'TEXT_ERROR_CURL_ERR_HTTPCODE' => 'cURL-Fehler: Fehler http_code "<b>%s</b>" beim Lesen von "%s"',  
    'TEXT_ERROR_CURL_0_DOWNLOAD' => 'cURL-Fehler: Null Downloadgröße beim Lesen von "%s"',  
    'TEXT_ERROR_CURL_ERR_DOWNLOAD' => 'cURL-Fehler: Weniger als die Seitengröße "%s" wurde gelesen. Download = %s, Content-Length = %s.',  
      
    'TEXT_HEAD_PRODUCTS' => 'Produkte Sitemap',  
    'TEXT_HEAD_CATEGORIES' => 'Kategorien Sitemap',  
    'TEXT_HEAD_CATS2MAN' => 'Kategorien zu Herstellern Sitemap',  
    'TEXT_HEAD_MANUFACTURERS' => 'Hersteller Sitemap',  
    'TEXT_HEAD_MAINPAGE' => 'Hauptseite Sitemap',
    'TEXT_HEAD_EZPAGES' => 'Ezpages Seitenübersicht',  
    'TEXT_HEAD_REVIEWS' => 'Bewertungen Seitenübersicht',  
    'TEXT_HEAD_PRODUCTS_REVIEWS' => 'Produktbewertungen Seitenübersicht',  
    'TEXT_HEAD_TESTIMONIALS' => 'Zeugenaussagen Manager Seitenübersicht',  
    
    'TEXT_HEAD_NEWS' => 'News Seitenübersicht',  
    'TEXT_HEAD_NEWS_ARTICLES' => 'Newsartikel Seitenübersicht',  
    
    'TEXT_HEAD_PRODUCTS_VIDEO' => 'Produktvideos Seitenübersicht',  
    
    'TEXT_ERRROR_EZPAGES_OUTOFBASE' => 'EZ-Seite ignoriert (außerhalb der Basis-URL): "<b>%s</b>" (%s)',  
    'TEXT_ERRROR_EZPAGES_ROBOTS' => 'EZ-Seite ignoriert (in ROBOTS_PAGES_TO_SKIP gefunden): "<b>%s</b>" (%s)',  
    
    'TEXT_HEAD_BOXNEWS' => 'News Box Manager Seitenübersicht',
];
return $define;
