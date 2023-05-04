<?php
$pageTitle = "Playeras MC";
$section = "main";
?>

<?php include('inc/header.php'); ?>

		<div class="section banner">

			<div class="wrapper">

				<img class="hero" src="img/mike-the-frog.png" alt="Mike the Frog says:">
				<div class="button">
					<a href="shirts.php">
						<h2>Hola, soy MC!</h2>
						<p>Revisa mi tienda</p>
					</a>
				</div>
			</div>

		</div>

		<div class="section shirts latest">

			<div class="wrapper">

				<h2>Lo último en playeras MC</h2>

				<?php include("inc/product_list.php");
					include("inc/form.php"); ?>
				<ul class="products">
					<?php
						echo list_products_html($products);

					 ?>			
				</ul>

			</div>

		</div>

	</div>

<?php include('inc/footer.php'); ?>

</html>