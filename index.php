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
						<h2>Hey, I&rsquo;m MC!</h2>
						<p>Check Out My Shirts</p>
					</a>
				</div>
			</div>

		</div>

		<div class="section shirts latest">

			<div class="wrapper">

				<h2>Mike&rsquo;s Latest Shirts</h2>

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