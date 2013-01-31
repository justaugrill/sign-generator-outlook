<?php
function creerFichier($fichierChemin, $fichierNom, $fichierExtension, $fichierContenu, $droit=""){
$fichierCheminComplet = "/homez.501/vonox/www/__CODE/sign-generator/output/".$fichierNom;
if($fichierExtension!=""){
$fichierCheminComplet = $fichierCheminComplet.".".$fichierExtension;
}
 
// création du fichier sur le serveur
$leFichier = fopen($fichierCheminComplet, "wb");
fwrite($leFichier,utf8_encode($fichierContenu));
fclose($leFichier);
 
// la permission
if($droit==""){
$droit="0777";
}
 
// on vérifie que le fichier a bien été créé
$t_infoCreation['fichierCreer'] = false;
if(file_exists($fichierCheminComplet)==true){
$t_infoCreation['fichierCreer'] = true;
}
 
// on applique les permission au fichier créé
$retour = chmod($fichierCheminComplet,intval($droit,8));
$t_infoCreation['permissionAppliquer'] = $retour;
 
return $t_infoCreation;
}
?>