<?php include('inc/product_list.php');

if(isset($_GET["id"])) {
	$product_id = $_GET["id"];

	if(isset($products[$product_id])) {
		$product = $products[$product_id];
	}
}

if (!isset($product)) {
	header("Location: shirts.php");
}
	
	$section = "shirts";
	$pageTitle = $product["name"];

	include('inc/header.php');
	?>

	<div class="section page">

		<div class="wrapper">

			<div class="breadcrumb">
				<a href="shirts.php">Playeras</a> &gt <?php echo $product["name"]; ?>
			</div>

			<div class="shirt-picture">
				<span>
					<img src="<?php echo $product["img"]; ?>" alt="<?php echo $product["name"]; ?>">
				</span>
			</div>

			<div class="shirt-details">
				<h1><span class="price">$<?php echo $product["price"]; ?></span>
										<?php echo $product["name"]; ?></h1>

			<?php include('inc/form.php');								
			echo generate_paypal_form($product); ?>

				<p class="note-designer">* Todas las playeras.</p>
			
			</div>	

		</div>

	</div>

	<?php include('inc/footer.php'); ?>