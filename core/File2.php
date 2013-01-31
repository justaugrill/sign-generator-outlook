<?php
$fichierContenu = $content_rep;
$fichierChemin = '';
$fichierExtension = 'htm';
$droit = '0777';
$fichierNom2 = "rep_".$fileid;

$t_infoCreation = creerFichier($fichierChemin, $fichierNom2, $fichierExtension, $fichierContenu, $droit);


?>