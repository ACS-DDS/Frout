<form action="pagePersonalisation.php" method="post">
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
					echo "<option value=\"$ep\">".$ep." mm"."</option>";
				} ?>
				</select>
			<button type="submit" name="ref" value="<?php echo $catalogue[$i]->getId();?>">Découpe</button>
		</div>
	</article>
</form>