<?php

/* FIELDSET Prénom */
$prenom = $_POST['prenom'];
$nom = STRTOUPPER($_POST['nom']);

/* FIELDSET Fonction */
$fct_fr = $_POST['fct_fr'];
$fct_en = $_POST['fct_en'];

// On définit la liste des caractères à remplacer :
$caracteres=array('é','è','à','ë','ê','û','ü','ù','î','ï', 'ô', 'ö');
// On définit les entités qui les remplaceront :
$entities=array('&eacute;', '&egrave;', '&agrave;', '&euml;', '&ecirc;', '&ucirc;', '&uuml;', '&ugrave;', '&icirc;', '&iuml;', '&ocirc;', '&ouml;');
// On applique le remplacement :
$fct_fr = str_replace($caracteres,$entities,$fct_fr);



/* FIELDSET EMAIL */
$email = $_POST['email'];

/* FIELDSET Telephone */
$com_tel_prefix = $_POST['com_tel_prefix'];
$com_fax_prefix = $_POST['com_fax_prefix'];

$com_mobile = $_POST['com_mobile'];
$com_tel = $_POST['com_tel'];
$com_fax = $_POST['com_fax'];

// Checkbox si la case n'est pas coché aucune valeur n'est envoyée dans le formulaire
// Si case non cochée valeur = NULL
// Si case est cochée valeur = on
$chk_tel = $_POST['chk_tel'];
$chk_fax = $_POST['chk_fax'];
$chk_mobile = $_POST['chk_mobile'];

/* FIELDSET OPTIONS */
$opt_eco = $_POST['opt_eco'];
$opt_devise = $_POST['opt_devise'];
$opt_logos = $_POST['opt_logos'];





/* CREATION D'UN ID UNIQUE */
$fileid = uniqid();
?>