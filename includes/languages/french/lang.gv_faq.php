<?php
$define = [
  'NAVBAR_TITLE' => TEXT_GV_NAME . ' FAQ', // 假设 TEXT_GV_NAME 已经是法语了，否则需要替换  
  'HEADING_TITLE' => TEXT_GV_NAME . ' FAQ', // 同上  
  'TEXT_INFORMATION' => '<a id="Top"></a>  
    <a href="' . zen_href_link(FILENAME_GV_FAQ, 'faq_item=1') . '">Achat de ' . TEXT_GV_NAMES . '</a><br>  
    <a href="' . zen_href_link(FILENAME_GV_FAQ, 'faq_item=2') . '">Comment envoyer ' . TEXT_GV_NAMES . '</a><br>  
    <a href="' . zen_href_link(FILENAME_GV_FAQ, 'faq_item=3') . '">Achat avec ' . TEXT_GV_NAMES . '</a><br>  
    <a href="' . zen_href_link(FILENAME_GV_FAQ, 'faq_item=4') . '">Utilisation de ' . TEXT_GV_NAMES . '</a><br>  
    <a href="' . zen_href_link(FILENAME_GV_FAQ, 'faq_item=5') . '">Quand surviennent des problèmes</a><br>  
  ',  
  'SUB_HEADING_TITLE_1' => 'Achat de ' . TEXT_GV_NAMES,  
  'SUB_HEADING_TEXT_1' => TEXT_GV_NAMES . ' sont achetés comme n’importe quel autre article de notre magasin. Vous pouvez  
    payer pour eux utilisant les méthodes de paiement standard du magasin.  
    Une fois acheté, la valeur du ' . TEXT_GV_NAME . ' sera ajoutée à votre solde personnel de  
    ' . TEXT_GV_NAME . '. Si vous avez des fonds dans votre solde de ' . TEXT_GV_NAME . ', vous verrez que le montant s’affiche maintenant sur la page Mon Compte, et fournit également  
    un lien vers une page où vous pouvez envoyer le ' . TEXT_GV_NAME . ' à quelqu’un par courrier électronique.',  
  'SUB_HEADING_TITLE_2' => 'Comment Envoyer ' . TEXT_GV_NAMES,
  'SUB_HEADING_TITLE_2' => 'Comment envoyer ' . TEXT_GV_NAMES,  
  'SUB_HEADING_TEXT_2' => 'Vous pouvez envoyer un ' . TEXT_GV_NAME . ' depuis la page Mon compte.  
    Lorsque vous envoyez un ' . TEXT_GV_NAME . ', vous devez spécifier les informations suivantes :  
    Le nom de la personne à laquelle vous envoyez le ' . TEXT_GV_NAME . ';  
    L\'adresse email de la personne à laquelle vous envoyez le ' . TEXT_GV_NAME . ';  
    Le montant que vous souhaitez envoyer (Notez que vous n\'avez pas à envoyer le montant total qui  
    se trouve dans votre solde ' . TEXT_GV_NAME . ',  
    Un message court optionnel qui apparaîtra dans l\'email;  
    Veuillez vous assurer d\'avoir saisi toutes les informations correctement, même si  
    vous aurez la possibilité de modifier autant que vous le souhaiterez avant  
    l\'envoi du courriel.',  
  'SUB_HEADING_TITLE_3' => 'Acheter avec ' . TEXT_GV_NAMES,  
  'SUB_HEADING_TEXT_3' => 'Si vous avez des fonds dans votre solde ' . TEXT_GV_NAME . ', vous pouvez utiliser ces fonds pour  
    acheter autres articles sur notre site. À la phase de paiement, une boîte supplémentaire apparaîtra  
    montrant votre solde. Entrez le montant à déduire de vos fonds du solde ' . TEXT_GV_NAME . '.  
    Veuillez noter : vous devrez toujours sélectionner un autre mode de paiement si  
    votre solde ' . TEXT_GV_NAME . ' ne couvre pas le coût de votre achat.  
    Si vous avez plus de fonds dans votre solde ' . TEXT_GV_NAME . ' que le coût total de  
    votre achat, le solde restant sera conservé dans votre solde ' . TEXT_GV_NAME . ' pour  
    une utilisation future.',  
  'SUB_HEADING_TITLE_4' => 'Utiliser ' . TEXT_GV_NAMES,
  'SUB_HEADING_TEXT_4' => 'Si vous recevez un ' . TEXT_GV_NAME . ' par email, il contiendra les détails du personne qui vous l\'a envoyé  
  ainsi qu\'un court message de leur part. L\'email  
  contient également le ' . TEXT_GV_NAME . ' ' . TEXT_GV_REDEEM . '. Il est probablement une bonne idée d\'imprimer  
  cet email pour référence future. Vous pouvez désormais utiliser le ' . TEXT_GV_NAME . ' de deux façons :<br><br>  
  1. En cliquant sur le lien contenu dans l\'email à cette fin.  
  Cela vous mènera à la page de Récupération de ' . TEXT_GV_NAME . ' du magasin. Vous serez ensuite demandé  
  de créer un compte avant que le ' . TEXT_GV_NAME . ' soit validé et placé dans votre  
  ' . TEXT_GV_NAME . ' Balance. Vous pouvez ensuite utiliser le montant pour acheter n\'importe quel article de notre magasin.<br><br>  
  2. Pendant le processus de paiement sur la même page que vous sélectionnez un mode de paiement,  
il y aura un champ pour entrer un ' . TEXT_GV_REDEEM . '. Entrez le ' . TEXT_GV_REDEEM . ' ici, et  
cliquez sur le bouton Récupérer. Le code sera  
 validé et le montant ajouté à votre ' . TEXT_GV_NAME . ' Balance. Vous pouvez ensuite utiliser le montant pour acheter n\'importe quel article de notre magasin.',  
'SUB_HEADING_TITLE_5' => 'Lorsque problèmes se survenant.',  
'SUB_HEADING_TEXT_5' => 'Pour toute question concernant le système de ' . TEXT_GV_NAME . ', veuillez contacter le magasin  
  utilisant notre page <a href="' . zen_href_link(FILENAME_CONTACT_US) . '">Contactez-nous</a>. Veuillez fournir autant d\'informations que possible sur le problème afin que nous pouvons le résoudre entièrement.',  
'SUB_HEADING_TITLE_0' => '',  
'SUB_HEADING_TEXT_0' => 'Veuillez choisir parmi les questions ci-dessus.',  
'TEXT_GV_REDEEM_INFO' => 'Veuillez entrer votre code de récupération ' . TEXT_GV_NAME . ' : ',  
'TEXT_GV_REDEEM_ID' => 'Code de Récupération :',
];

return $define;
