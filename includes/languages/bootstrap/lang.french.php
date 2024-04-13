<?php 
$locales = ['fr_FR.UTF8', 'fr-FR', 'French_France.1252', 'fr'];  
@setlocale(LC_TIME, $locales);  
$define = [  
    'DATE_FORMAT' => 'd/m/Y',  
    'DOB_FORMAT_STRING' => 'dd/mm/aaaa',  
    'ENTRY_DATE_OF_BIRTH_ERROR' => 'La date de naissance doit avoir le format :JJ/MM/AAAA (ex. 21/05/1970) ou AAAA-MM-JJ (ex. 1970-05-21)',  
    'ENTRY_DATE_OF_BIRTH_TEXT' => '* (ex. 21/05/1970 ou 1970-05-21)',  
    'LANGUAGE_CURRENCY' => 'EUR',  
    'TEXT_PRODUCT_WEIGHT_UNIT' => ' kg',  
    'TEXT_SHIPPING_WEIGHT' => ' kg',  
];

return $define;
