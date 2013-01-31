<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<title>Générateur de signature</title>
		<link rel="stylesheet" type="text/css" href="./css/bootstrap.css">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">
	</head>
	
<body>

<div style="margin-left: 100px;margin-right: 100px;">


<form class="form-horizontal" method="post" action="./core/preview.php">

<!-- ######################    FIELDSET: NOM ET PRENOM    ######################## -->
		<fieldset>
			<legend>Votre nom</legend></br>
			<div class="form-inline"  style="padding-left: 50px;">
				<input type="text" class="input-medium" placeholder="Prénom" name="prenom" id="prenom">
				<input type="text" class="input-medium" placeholder="Nom" name="nom" id="nom">
				<pre style="margin-top:5px;"><i class="icon-warning-sign"> </i> Veuillez respecter les minuscules et les majuscules</pre>
			</div></br>
		</fieldset>
<!-- #############################################################################  -->


<!-- ######################    FIELDSET: EMAIL    ######################## -->
		<fieldset>
			<legend>Adresse E-Mail</legend></br>
				<div class="input-prepend" style="padding-left: 50px;">
					<span class="add-on"><i class="icon-envelope"></i></span><input class="span2" id="email" name="email" type="text" placeholder="prenom.nom@gima.fr">
				</div></br>
		</fieldset>
<!-- #############################################################################  -->


<!-- ########################    FIELDSET: Fonction     ########################## -->
		<fieldset>
			<legend>Votre Fonction</legend></br>
			<div class="form-inline" style="padding-left: 50px;">
				<input type="text" class="input-medium" placeholder="Français" name="fct_fr" id="fct_fr">
				<input type="text" class="input-medium" placeholder="Anglais" name="fct_en" id="fct_en">
				<pre style="margin-top:5px;"><i class="icon-warning-sign"> </i> Veuillez respecter les minuscules et les majuscules</pre>
			</div></br>
		</fieldset>
<!-- #############################################################################  -->


<!-- ########################    FIELDSET: TELEPHONE    ########################## -->
		<fieldset>
			<legend>Téléphone & Fax</legend></br>
			<!-- TELEPHONE FIXE -->
				<div class="form-inline" style="margin-bottom:10px;padding-left: 50px;">
					<label class="checkbox"><input type="checkbox" checked="checked" name="chk_tel" id="chk_tel">Téléphone :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;03.44.</label>
					<input type="text" class="input-mini" name="com_tel_prefix" id="com_tel_prefix" >.
					<input type="text" class="input-small" placeholder="Poste"  name="com_tel" id="com_tel" >
				</div>
			
			<!-- FAX -->
				<div class="form-inline" style="margin-bottom:10px;padding-left: 50px;">
					<label class="checkbox"><input type="checkbox" checked="checked" name="chk_fax" id="chk_fax">Fax  :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;03.44.</label>
					<input type="text" class="input-mini" name="com_fax_prefix" id="com_fax_prefix">.
					<input type="text" class="input-small" placeholder="Poste" name="com_fax" id="com_fax">
				</div>
			
			<!-- Mobile -->
				<label class="checkbox" style="padding-left: 67px;"><input type="checkbox" name="chk_mobile" id="chk_mobile">Mobile : <input type="text" class="input-medium" placeholder="0688989898" name="com_mobile" id="com_mobile"></label>

		</fieldset>
<!-- #############################################################################  -->


<!-- #########################    FIELDSET: OPTIONS    ########################### -->
		<fieldset>
			<legend>Options</legend></br>
				<div style="padding-left: 50px;">
			<!-- MESSAGE ECOLO -->
				<label class="checkbox"><input type="checkbox" checked="checked" name="opt_eco" id="opt_eco"> Message écologique</label>
			<!-- DEVISE DU GIMA -->
				<label class="checkbox"><input type="checkbox" checked="checked" name="opt_devise" id="opt_devise"> Devise</label>
			<!-- LOGOS -->
				<label class="checkbox"><input type="checkbox" checked="checked" name="opt_logos" id="opt_logos"> Logos AGCO et CLAAS</label>
				
				</div>
		</fieldset>
<!-- #############################################################################  -->


<!-- ##############################    BOUTONS    ################################ -->
			<div class="form-actions">
				<button type="submit" class="btn btn-primary"><i class="icon-chevron-right"> </i> Aperçu</button>
				<button type="reset" class="btn btn-warning"><i class="icon-repeat"> </i> Reset</button>
			</div>
<!-- #############################################################################  -->
</form>

</div>
</body>
</html>