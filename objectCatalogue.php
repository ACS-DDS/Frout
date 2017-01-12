
<article style="float: right;">
	<h2><?php echo $catalogue[$i]->getMatiere(); ?></h2>
	<div>
		<img src="#" name="img" style="height: 200px; width: 200px;">
	</div>
		<div>
			<p name="longueur"><?php echo "Dimension : ".$catalogue[$i]->getLongueur()." x ".$catalogue[$i]->getLargeur() ?></p>
			<select name="epaisseur">
			<?php foreach ($catalogue[$i]->getEpaisseurs() as $ep) {
				echo "<option>".$ep." mm"."</option>";
			} ?>
			</select>
		<input type="checkbox" name="valid">
	</div>
</article>