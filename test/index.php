<?php
  /*************************************/
 /*** Cr�ation du num�ro de commande
/*************************************/
//Num�ro de commande sous la forme AAMMJJ0001
$date = date('ymd');

//Connexion a la BD
$link = mysql_connect('127.0.0.1', 'root', '');
if (!$link) {
   die('Impossible de se connecter : ' . mysql_error());
}

$db_selected = mysql_select_db('projet', $link);
if (!$db_selected) {
   die ('Impossible de s�lectionner la base de donn�es : ' . mysql_error());
}



// Compter le nb d'entr�es avec le nom de Pierre
                

										

$requete 	= "SELECT * FROM test WHERE numero_commande like '%$date%' ORDER BY numero_commande DESC
LIMIT 1";




if ($rs = @mysql_query ($requete)) {
  if (@mysql_num_rows($rs)>0) {
    while ($tab = mysql_fetch_array($rs)) {
     echo ''.$tab['numero_commande'].'<br />';
    }
  }else {
    echo date('ymd') . '0000';
  }
} 
else {
  echo 'Erreur MySQL : '.mysql_error();
}
?>