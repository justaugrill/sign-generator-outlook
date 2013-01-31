<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<title>Générateur de signature</title>
		<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">
	</head>
	
<body>
<?php include './vars.php'; ?>
<?php include('./createFile.php'); ?>
</br>
<div style="margin-left: 100px;margin-right: 100px;">
<fieldset><legend>Récapitulatif</legend></fieldset></br>
<!-- Options -->
	<!-- OK -->
		<?php if($chk_tel == 'on'){echo '<a class="btn btn-success" href="#"><i class="icon-user icon-white"></i> Téléphone Fixe</a>&nbsp;';}; ?>
		<?php if($chk_fax == 'on'){echo '<a class="btn btn-success" href="#"><i class="icon-list-alt icon-white"></i> Fax</a>&nbsp;';}; ?>
		<?php if($chk_mobile == 'on'){echo '<a class="btn btn-success" href="#"><i class="icon-globe icon-white"></i> Mobile</a>';}; ?>
		<?php if($opt_eco == 'on'){echo '<a class="btn btn-success" href="#"><i class="icon-leaf icon-white"></i> Message écologique</a>&nbsp;';}; ?>
		<?php if($opt_devise == 'on'){echo '<a class="btn btn-success" href="#"><i class="icon-comment icon-white"></i> Afficher la devise du GIMA</a>&nbsp;';}; ?>
		<?php if($opt_logos == 'on'){echo '<a class="btn btn-success" href="#"><i class="icon-picture icon-white"></i> Logos Partenaires</a>';}; ?>
		</br></br>
	<!-- NOK -->
		<?php if($chk_tel === NULL){echo '<a class="btn btn-danger" href="#"><i class="icon-user icon-white"></i> Pas de numéro de Fixe</a>&nbsp;';}; ?>
		<?php if($chk_fax === NULL){echo '<a class="btn btn-danger" href="#"><i class="icon-list-alt icon-white"></i> Pas de numéro de Fax</a>&nbsp;';}; ?>
		<?php if($chk_mobile === NULL){echo '<a class="btn btn-danger" href="#"><i class="icon-globe icon-white"></i> Pas de numéro de Mobile</a>';}; ?>
		<?php if($opt_eco === NULL){echo '<a class="btn btn-danger" href="#"><i class="icon-leaf icon-white"></i> Pas de message écologique</a>&nbsp;';}; ?>
		<?php if($opt_devise === NULL){echo '<a class="btn btn-danger" href="#"><i class="icon-comment icon-white"></i> Ne pas afficher la devise</a>&nbsp;';}; ?>
		<?php if($opt_logos === NULL){echo '<a class="btn btn-danger" href="#"><i class="icon-picture icon-white"></i> Pas de logos Partenaires</a>';}; ?>
		</br></br>
		
<fieldset><legend>Aperçu ( Signature nouveau Mail )</legend></fieldset></br>
<!-- ########################### APERCU ################################ -->
<div style="display:block;border: 1px solid grey;padding:15px;margin-left:auto;" id="signature_full">
<?php ob_start(); ?>
<table style="font-family: Arial,sans-serif;border:none;font-size:8Pt;">
 <tr>
  <td valign="top" width="68px">
  <img width="68px" height="80px" src="http://vonox.fr/__CODE/sign-generator/img/logo_principal.png" alt="logo principal"/>
  </td>
  <td style="color:black;">
  <b><div><?php echo $prenom; ?> <?php echo $nom; ?> <span style="color: #005FC4;">| MS - Ma Soci&eacute;t&eacute;</span></div>
  <div><?php echo $fct_fr; ?> / <?php echo $fct_en; ?></div></b>
  <span style="color: #7D7D7D;">
  <div>00 Rue du moulin</div>
  <div>BP 00000</div>
  <div>00000 Maville CEDEX</div>
  <div>France</div>
  <div style="margin-top: 6px;">
  <?php if($chk_tel == 'on'){echo '<div>T&eacute;l: +33 (0)3 44 '.$com_tel_prefix.' '.$com_tel.'</div>';}; ?>
  <?php if($chk_fax == 'on'){echo '<div>Fax: +33 (0)3 44 '.$com_fax_prefix.' '.$com_fax.'</div>';}; ?>
  <?php if($chk_mobile == 'on'){echo '<div>Mobile: '.$com_mobile.'</div>';}; ?>
  </div>
  </span>
  <div><b><a style="color:black;" href="mailto:<?php echo $email;?>"><?php echo $email;?></a></b></div>
  </td>
 </tr>
</table>
</br>
<?php if ($opt_devise == 'on'){ echo '
<table style="font-family: Arial,sans-serif;border:none;font-size:8Pt;">
 <tr>
  <td width="68px">
  <img style="margin-left:5px;" src="http://vonox.fr/__CODE/sign-generator/img/logo_secondaire.png" alt="logo secondaire"/>
  </td>
  <td style="color: #7D7D7D;">
  <div><b>Notre vision:</b> &lsquo;En s&rsquo;appuyant sur nos comp&eacute;tences, am&eacute;liorons ensemble la performance</div>
  <div>globale de notre entreprise, pour satisfaire nos clients.&rsquo;</div>
  </td>
 </tr>
</table>
</br>
';}; ?>
<?php if ($opt_logos == 'on'){ echo '
<table style="margin-top:5px;font-family: Arial,sans-serif;border:none;font-size:7Pt;color: #7D7D7D;">
 <tr>
  <td>
  Filiale de TOTO et de TITI
  </td>
 </tr>
</table>
';}; ?>
<?php if ($opt_eco == 'on'){ echo '
<table style="font-family: Arial,sans-serif;border:none;font-size:7Pt;color: #206100;">
 <tr>
  <td>
  <img valign="middle" src="http://vonox.fr/__CODE/sign-generator/img/arbre.png" />
  Pr&eacute;servez l&rsquo;environnement: n&rsquo;imprimez cette page que si c&rsquo;est vraiment n&eacute;cessaire
  </td>
 </tr>
</table>'
;}; ?>
<?php $content = ob_get_contents(); // Fin de l'enregistrement?>
<?php include './File.php'; ?>
</br><a class="btn btn-info" href="http://bvl06500/output/<?php echo $fichierNom;?>.htm"><i class="icon-download icon-white"></i> Télécharger</a>
</div>





</br></br>
<fieldset><legend>Aperçu ( Signature Mail de Réponse )</legend></fieldset></br>
<!-- ########################### APERCU ################################ -->
<div style="display:block;border: 1px solid grey;padding:15px;margin-left:auto;">
<?php ob_start(); ?>
<table style="font-family: Arial,sans-serif;border:none;font-size:8Pt;">
 <tr>
  <td valign="top" width="68px">
  <img width="68px" height="80px" src="http://vonox.fr/__CODE/sign-generator/img/logo_principal.png" alt="logo principal"/>
  </td>
  <td style="color:black;">
  <b><div><?php echo $prenom; ?> <?php echo $nom; ?> <span style="color: #005FC4;">| MS - Ma Soci&eacute;t&eacute;</span></div>
  <div><?php echo $fct_fr; ?> / <?php echo $fct_en; ?></div></b>
  <span style="color: #7D7D7D;">
  <div style="margin-top: 6px;">
  <?php if($chk_tel == 'on'){echo '<div>T&eacute;l: +33 (0)3 44 '.$com_tel_prefix.' '.$com_tel.'</div>';}; ?>
  <?php if($chk_fax == 'on'){echo '<div>Fax: +33 (0)3 44 '.$com_fax_prefix.' '.$com_fax.'</div>';}; ?>
  <?php if($chk_mobile == 'on'){echo '<div>Mobile: '.$com_mobile.'</div>';}; ?>
  </div>
  </span>
  <div><b><a style="color:black;" href="mailto:<?php echo $email;?>"><?php echo $email;?></a></b></div>
  </td>
 </tr>
</table>
</br>
<?php if ($opt_eco == 'on'){ echo '
<table style="font-family: Arial,sans-serif;border:none;font-size:7Pt;color: #206100;">
 <tr>
  <td>
  <img valign="middle" src="http://vonox.fr/__CODE/sign-generator/img/arbre.png" />
  Pr&eacute;servez l&rsquo;environnement: n&rsquo;imprimez cette page que si c&rsquo;est vraiment n&eacute;cessaire
  </td>
 </tr>
</table>'
;}; ?>
<?php $content_rep = ob_get_contents(); // Fin de l'enregistrement?>
<?php include './File2.php'; ?>
</br><a class="btn btn-info" href="http://bvl06500/output/<?php echo $fichierNom2;?>.htm"><i class="icon-download icon-white"></i> Télécharger</a>
</div>

</div>
</br>

</body>
</html>