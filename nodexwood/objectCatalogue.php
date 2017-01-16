<form action="pagePersonalisation.php" method="post">
<article class="vignette">
	<h2 class="essence"><?php echo $catalogue[$i]->getMatiere();?></h2>
	<p class="reference"><?php echo "Réf. " .$catalogue[$i]->getId();?></p>
	<div>
		<img class="img-matiere" src="http://quentinp.dijon.codeur.online/nodexwood/img/boiscatalogue.jpg" name="img">
	</div>
			<p class="dimension" name="longueur"><?php echo "Dimensions : L.".$catalogue[$i]->getLongueur()." x l.".$catalogue[$i]->getLargeur(). " mm" ?></p>
		<div class="bas_vignette">
			<select class="epaisseur" name="epaisseur">
			<?php foreach ($catalogue[$i]->getEpaisseurs() as $ep) {
				echo "<option class=\"option\">".$ep." mm"."</option>";
			} ?>
			</select>
		<button class="decoupe" type="submit" name="ref" value="<?php echo $catalogue[$i]->getId();?>">Découpe</button>
	</div>
</article>
</form>