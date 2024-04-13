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
    
    'TEXT_EXECUTION_TIME' => 'Total : Temps d\'exécution %s, Requêtes DB %s, Temps des requêtes DB %s.',  
    'TEXT_TOTAL_SITEMAP' => 'Total : fichiers %s, éléments %s (%s octets), temps d\'exécution %s, requêtes DB %s, temps des requêtes DB %s.',  
    'TEXT_FILE_SITEMAP_INFO' => 'Fichier <a href="%s" target="_blank">%s</a>. Écrit %s éléments (%s octets), Taille du fichier : %s octets',  
    'TEXT_WRITTEN' => 'Écrit %s éléments (%s octets), Taille du fichier : %s octets',  
      
    'TEXT_URL_FILE' => 'URL - ',  
    'TEXT_INCLUDE_FILE' => 'Inclure ',  
    'TEXT_FILE_NOT_CHANGED' => 'n\'a pas changé - utilisation du fichier(s) existant(s)',  
    'TEXT_FAILED_TO_OPEN' => 'Impossible d\'ouvrir le fichier "%s" !!!',  
    'TEXT_FAILED_TO_CREATE' => 'Impossible de créer le fichier "%s". Vous devrez peut-être utiliser le panneau de contrôle de votre hébergement/gestionnaire de fichiers pour modifier les permissions efficacement.',  
    'TEXT_FAILED_TO_CHMOD' => 'Le fichier "%s" est en lecture seule. Vous devrez peut-être utiliser le panneau de contrôle de votre hébergement/gestionnaire de fichiers pour modifier les permissions efficacement.',  
      
    'TEXT_HEAD_SITEMAP_INDEX' => 'Index du sitemap',  
    'TEXT_HEAD_SITEMAP_INDEX_NONE' => 'Index du sitemap non généré : aucun sitemap trouvé (aucun plugin sélectionné)',  
      
    'TEXT_ERROR_CURL_NOT_FOUND' => 'Les fonctions CURL non trouvées - nécessaires pour les fonctions ping/checkURL',  
    'TEXT_ERROR_CURL_INIT' => 'Erreur cURL : initialisation de cURL',  
    'TEXT_ERROR_CURL_EXEC' => 'Erreur cURL : "<b>%s</b>" lecture de "%s"',  
    'TEXT_ERROR_CURL_NO_HTTPCODE' => 'Erreur cURL : Aucun code http lors de la lecture de "%s"',  
    'TEXT_ERROR_CURL_ERR_HTTPCODE' => 'Erreur cURL : Erreur code http "<b>%s</b>" lors de la lecture de "%s"',  
    'TEXT_ERROR_CURL_0_DOWNLOAD' => 'Erreur cURL : Taille de téléchargement égale à zéro lors de la lecture de "%s"',  
    'TEXT_ERROR_CURL_ERR_DOWNLOAD' => 'Erreur cURL : Lecture inférieure à la taille de la page "%s". Téléchargement = %s, Longueur du contenu = %s.',  
      
    'TEXT_HEAD_PRODUCTS' => 'Sitemap des produits',  
    'TEXT_HEAD_CATEGORIES' => 'Sitemap des catégories',  
    'TEXT_HEAD_CATS2MAN' => 'Sitemap des catégories aux fabricants',  
    'TEXT_HEAD_MANUFACTURERS' => 'Sitemap des fabricants',  
    'TEXT_HEAD_MAINPAGE' => 'Sitemap de la page principale',
    'TEXT_HEAD_EZPAGES' => 'Plan du site Ezpages',  
    'TEXT_HEAD_REVIEWS' => 'Plan du site Avis',  
    'TEXT_HEAD_PRODUCTS_REVIEWS' => 'Plan du site Avis sur les produits',  
    'TEXT_HEAD_TESTIMONIALS' => 'Plan du site Témoignages',  
      
    'TEXT_HEAD_NEWS' => 'Plan du site Actualités',  
    'TEXT_HEAD_NEWS_ARTICLES' => 'Plan du site Articles',  
      
    'TEXT_HEAD_PRODUCTS_VIDEO' => 'Plan du site Vidéos des produits',  
      
    'TEXT_ERRROR_EZPAGES_OUTOFBASE' => 'Page EZ ignorée (hors de la base d\'URL) : "<b>%s</b>" (%s)',  
    'TEXT_ERRROR_EZPAGES_ROBOTS' => 'Page EZ ignorée (trouvée dans ROBOTS_PAGES_TO_SKIP) : "<b>%s</b>" (%s)',  
      
    'TEXT_HEAD_BOXNEWS' => 'Plan du site Gestion de la boîte d\'actualités',
];
return $define;
