
	<footer class="container mt-5">

			<p>Les évenements à Nantes| <?php echo date("Y") ?></p>
			<p>
				<?php
					//pas connecté
					if(!$_SESSION['connected']){
						echo "Vous n'etes pas connectés";
					}
					//si connecté !
					else {
						echo "Vous êtes connectés  "//.$_SESSION['user_id']
						;
					}
				?>
			</p>
		</footer>
	</div>

<?php require_once('javascript.php'); ?>

</body>
</html>
