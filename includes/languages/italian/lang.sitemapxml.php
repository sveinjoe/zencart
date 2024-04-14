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

    'TEXT_EXECUTION_TIME' => 'Totale: Tempo di esecuzione %s, Query al database %s, Tempo delle query al database %s.',  
    'TEXT_TOTAL_SITEMAP' => 'Totale: file %s, elementi %s (%s byte), tempo di esecuzione %s, query al database %s, tempo delle query al database %s.',  
    'TEXT_FILE_SITEMAP_INFO' => 'File <a href="%s" target="_blank">%s</a>. Scritti %s elementi (%s byte), Dimensione file: %s byte',  
    'TEXT_WRITTEN' => 'Scritti %s elementi (%s byte), Dimensione file: %s byte',  
      
    'TEXT_URL_FILE' => 'URL - ',  
    'TEXT_INCLUDE_FILE' => 'Include ',  
    'TEXT_FILE_NOT_CHANGED' => 'non sono cambiati - utilizzando il file(i) esistente(i)',  
    'TEXT_FAILED_TO_OPEN' => 'Errore nell\'apertura del file "%s"!!!',  
    'TEXT_FAILED_TO_CREATE' => 'Impossibile creare il file "%s". Potrebbe essere necessario utilizzare il pannello di controllo del tuo hosting web/gestore file per cambiare efficacemente i permessi.',  
    'TEXT_FAILED_TO_CHMOD' => 'Il file "%s" è di sola lettura. Potrebbe essere necessario utilizzare il pannello di controllo del tuo hosting web/gestore file per cambiare efficacemente i permessi.',  
      
    'TEXT_HEAD_SITEMAP_INDEX' => 'Indice Sitemap',  
    'TEXT_HEAD_SITEMAP_INDEX_NONE' => 'Indice Sitemap non generato: nessun sitemap trovato (nessun plugin selezionato)',  
      
    'TEXT_ERROR_CURL_NOT_FOUND' => 'Funzioni CURL non trovate - necessarie per le funzioni ping/checkURL',  
    'TEXT_ERROR_CURL_INIT' => 'Errore cURL: inizializzazione cURL',  
    'TEXT_ERROR_CURL_EXEC' => 'Errore cURL: "<b>%s</b>" lettura di "%s"',  
    'TEXT_ERROR_CURL_NO_HTTPCODE' => 'Errore cURL: Nessun http_code nella lettura di "%s"',  
    'TEXT_ERROR_CURL_ERR_HTTPCODE' => 'Errore cURL: Codice http_code errato "<b>%s</b>" nella lettura di "%s"',  
    'TEXT_ERROR_CURL_0_DOWNLOAD' => 'Errore cURL: Dimensione dello download zero nella lettura di "%s"',  
    'TEXT_ERROR_CURL_ERR_DOWNLOAD' => 'Errore cURL: Dimensione dello download inferiore alla dimensione della pagina "%s". Download = %s, Lunghezza del contenuto = %s.',

    'TEXT_HEAD_PRODUCTS' => 'Mappa del sito Prodotti',  
    'TEXT_HEAD_CATEGORIES' => 'Mappa del sito Categorie',  
    'TEXT_HEAD_CATS2MAN' => 'Mappa del sito Categorie a Produttori',  
    'TEXT_HEAD_MANUFACTURERS' => 'Mappa del sito Produttori',  
    'TEXT_HEAD_MAINPAGE' => 'Mappa del sito Pagina Principale',  
    'TEXT_HEAD_EZPAGES' => 'Mappa del sito Pagine EZ',  
    'TEXT_HEAD_REVIEWS' => 'Mappa del sito Recensioni',  
    'TEXT_HEAD_PRODUCTS_REVIEWS' => 'Mappa del sito Recensioni Prodotti',  
    'TEXT_HEAD_TESTIMONIALS' => 'Mappa del sito Testimonianze',  
      
    'TEXT_HEAD_NEWS' => 'Mappa del sito Notizie',  
    'TEXT_HEAD_NEWS_ARTICLES' => 'Mappa del sito Articoli Notizie',  
      
    'TEXT_HEAD_PRODUCTS_VIDEO' => 'Mappa del sito Video Prodotti',  
      
    'TEXT_ERRROR_EZPAGES_OUTOFBASE' => 'Pagina EZ ignorata (fuori dalla base url): "<b>%s</b>" (%s)',  
    'TEXT_ERRROR_EZPAGES_ROBOTS' => 'Pagina EZ ignorata (trovata in ROBOTS_PAGES_TO_SKIP): "<b>%s</b>" (%s)',  
      
    'TEXT_HEAD_BOXNEWS' => 'Mappa del sito Gestore News Box',
];
return $define;
