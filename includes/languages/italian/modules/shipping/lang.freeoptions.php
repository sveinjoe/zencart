<?php
$define = [
    'MODULE_SHIPPING_FREEOPTIONS_TEXT_TITLE' => 'Opzioni di spedizione gratuita',
    'MODULE_SHIPPING_FREEOPTIONS_TEXT_DESCRIPTION' => '
    Opzioni Gratuite viene utilizzato per visualizzare una opzione di spedizione gratuita quando vengono mostrati altri moduli di spedizione.
    Può essere basato su: Visualizza sempre, Totale ordine, Peso ordine o Numero articoli ordine.
    Il modulo Opzioni Gratuite non viene visualizzato quando viene mostrato Free Shipper.<br><br>
    Impostando il Totale su >= 0.00 e lasciando vuoto il campo corrispondente (lasciare in bianco) si attiverà questo modulo per mostrare tutti i moduli di spedizione, eccetto la spedizione gratuita - freeshipper.<br><br>
    NOTA: Lasciando tutte le impostazioni per Totale, Peso e Numero articoli ordine vuote, si disattiverà questo modulo.<br><br>
    NOTA: Opzioni di spedizione gratuita non viene visualizzata se la spedizione gratuita è utilizzata basandosi sul peso 0 come spedizione gratuita.
    Vedere: freeshipper
    ',
    'MODULE_SHIPPING_FREEOPTIONS_TEXT_WAY' => 'Spedizione gratuita',
];

return $define;