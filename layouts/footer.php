
	<footer>

			<p>Les évenements à Nantes| <?php echo date("Y") ?></p>
			<p>
				<?php 
					//pas connecté
					if (empty($_SESSION['pseudo'])) {
						echo "Vous n'etes pas connectés";
					}
					//si connecté !
					else {
						echo "Vous êtes connectés en tant que".$_SESSION['users']['pseudo'];
					}
				?>
			</p>
		</footer>
	</div>
</body>
</html>