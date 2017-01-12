
<article>
	<h2><?php echo $catalogue[$i]->getMatiere();?></h2>
	<p><?php echo $catalogue[$i]->getId();?></p>
	<div>
		<img src="#" name="img" style="height: 200px; width: 200px;">
	</div>
		<div>
			<p name="longueur"><?php echo "Dimension : L.".$catalogue[$i]->getLongueur()." x l.".$catalogue[$i]->getLargeur() ?></p>
			<select name="epaisseur">
			<?php foreach ($catalogue[$i]->getEpaisseurs() as $ep) {
				echo "<option>".$ep." mm"."</option>";
			} ?>
			</select>
		<input type="radio" name="selected">
	</div>
</article>