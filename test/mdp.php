<?php

// ---------------------------------------------------------------------
//  G�n�rer un mot de passe al�atoire
// ---------------------------------------------------------------------
function genererMDP ($longueur = 8){
    // initialiser la variable $mdp
    $mdp = "";
 
    // D�finir tout les caract�res possibles dans le mot de passe,
    // Il est possible de rajouter des voyelles ou bien des caract�res sp�ciaux
    $possible = "2346789bcdfghjkmnpqrtvwxyzBCDFGHJKLMNPQRTVWXYZ";
 
    // obtenir le nombre de caract�res dans la cha�ne pr�c�dente
    // cette valeur sera utilis� plus tard
    $longueurMax = strlen($possible);
 
    if ($longueur > $longueurMax) {
        $longueur = $longueurMax;
    }
 
    // initialiser le compteur
    $i = 0;
 
    // ajouter un caract�re al�atoire � $mdp jusqu'� ce que $longueur soit atteint
    while ($i < $longueur) {
        // prendre un caract�re al�atoire
        $caractere = substr($possible, mt_rand(0, $longueurMax-1), 1);
 
        // v�rifier si le caract�re est d�j� utilis� dans $mdp
        if (!strstr($mdp, $caractere)) {
            // Si non, ajouter le caract�re � $mdp et augmenter le compteur
            $mdp .= $caractere;
            $i++;
        }
    }
 
    // retourner le r�sultat final
    return $mdp;
}

$newmdp = genererMDP();

echo $newmdp;

?>