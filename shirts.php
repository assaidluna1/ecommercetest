<?php include('inc/product_list.php'); 
$pageTitle = "Mike's Full Catalog of Shirts";
$section = "shirts";
include('inc/header.php'); ?>

<div class="section shirts page">

	<div class="wrapper">

		<h1>Mike's Full Catalog Of Shirts</h1>

		<ul class = "products">
		<?php include('inc/form.php');

			echo list_products_html($products);
			
		?>

		</ul>

	</div>

</div>

<?php include('inc/footer.php'); ?>