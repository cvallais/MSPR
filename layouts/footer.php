
	<footer class="container mt-5">

			<p>Les évenements à Nantes| <?php echo date("Y") ?></p>
			<p>
				<?php
					//si connecté..
					if($_SESSION['connected']){
						echo "Vous êtes connectés  ".$_SESSION['user_id'];
					}
					//si pas connecté ..
					else {
						echo "Vous n'etes pas connectés";
						;
					}
				?>
			</p>
		</footer>
	</div>

<?php require_once('javascript.php'); ?>

</body>
</html>
