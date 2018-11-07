
	<footer class="container mt-5">

			<p>Les évenements à Nantes| <?php echo date("Y") ?></p>
			<p>
				<?php
					//pas connecté
					if (empty($_SESSION['user'])) {
						echo "Vous n'etes pas connectés";
					}
					//si connecté !
					else {
						echo "Vous êtes connectés en tant que ".$_SESSION['user']['pseudo'];
					}
				?>
			</p>
		</footer>
	</div>

<?php require_once('javascript.php'); ?>

</body>
</html>
