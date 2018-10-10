<?php
/* 
   Vous créez un tableau PHP contenant les pays suivants : France, Italie, Espagne, inconnu, Allemagne auxquels vous associez les valeurs Paris, Rome, Madrid, '?', Berlin.

   Vous parcourez ce tableau pour afficher la phrase "La capitale X se situe en Y" dans un paragraphe (où X remplace la capitale et Y le pays).

   Pour le pays "inconnu" vous afficherez "Ca n'existe pas !" à la place de la phrase précédente. 	

*/

$payVilles = array(
    'France' => 'Paris', 
    'Italie' => 'Rome', 
    'Espagne' => 'Madrid', 
    'inconnu' => '?', 
    'Allemagne' =>'Berlin'
);

foreach($payVilles as $pays => $capitale){
    if($pays == 'inconnu'){
        echo '<p> Ca n\'existe pas !</p>';
    } else{
        echo "<p>La capitale $capitale se situe en $pays </p>";
    }
}