
	<footer class="container mt-5">



			<p>Les évenements à Nantes| <?php echo date("Y") ?></p>
			<p>
				<?php
					//si connecté..
					if (empty($_SESSION['connected'])){
						echo "Vous n'etes pas connectés";
						
					}
					//si pas connecté ..
					else {
						echo "Vous êtes connectés "
						;
					}
				?>
			</p>
		</footer>
	</div>

<?php require_once('javascript.php'); ?>

</body>
</html>
