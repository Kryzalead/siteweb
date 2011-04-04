<?php
	mysql_connect('localhost','root','');
	mysql_selectdb('aw');
		$sql = 'SELECT * FROM news_offres';
		$req = mysql_query($sql) or exit(mysql_error());
			while($data = mysql_fetch_assoc($req))
?>

<div id="news_offres">
		<?php
				$sql = 'SELECT * FROM news_offres';
				$req = mysql_query($sql) or die('Erreur SQL !'.$sql.'<br />'.mysql_error());
				while ($data = mysql_fetch_assoc($req)){
			?>
				<p>
					<div class="titre"><?php echo $data['titre'];?></div>
					<?php echo $data['commentaire']?> A partir du : <?php setlocale(LC_TIME,"fr_FR"); echo '' . strftime("%A %d %B %Y");?>		
				</p>
				<br/>
				
			<?php
			}
			?>


</div>