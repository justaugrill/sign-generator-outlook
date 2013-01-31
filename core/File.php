<?php
$fichierContenu = $content;
$fichierChemin = '';
$fichierExtension = 'htm';
$droit = '0777';
$fichierNom = "full_".$fileid;

$t_infoCreation = creerFichier($fichierChemin, $fichierNom, $fichierExtension, $fichierContenu, $droit);


?>