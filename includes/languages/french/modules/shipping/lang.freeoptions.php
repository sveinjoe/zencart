<?php
$define = [
    'MODULE_SHIPPING_FREEOPTIONS_TEXT_TITLE' => 'Options d\'expédition gratuite',  
    'MODULE_SHIPPING_FREEOPTIONS_TEXT_DESCRIPTION' => '  
    Les options gratuites sont utilisées pour afficher une option d\'expédition gratuite lorsque les autres modules d\'expédition sont affichés.  
    Elles peuvent être basées sur: Toujours afficher, Total de la commande, Poids de la commande ou Nombre d\'articles de la commande.  
    Le module Options gratuites ne s\'affiche pas lorsque Free Shipper est affiché.<br><br>  
    Si vous réglez le total sur >= 0.00 et laisser vide (laisser vide) cela activera ce module pour afficher tous les modules d\'expédition, sauf pour la livraison gratuite - freeshipper.<br><br>  
    REMARQUE: Laisser toutes les réglages pour le total, le poids et le nombre d\'articles vides désactivera ce module.<br><br>  
    REMARQUE: Les Options d\'expédition gratuite ne s\'affichent pas si la livraison gratuite est basée sur un poids de 0 étant livraison gratuite.  
    Voir: freeshipper  
    ',  
    'MODULE_SHIPPING_FREEOPTIONS_TEXT_WAY' => 'Livraison gratuite',
];

return $define;