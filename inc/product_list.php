<?php

// PRODUCT ARRAY

$products = array();

			$products[101] = array(
				"name" => "Logo Shirt, Red",
				"img" => "img/shirts/shirt-101.jpg",
				"price" => 18,
				"paypal" => "BJDE2BMPHMQ7Q",
				"sizes" => array("Small", "Medium", "Large", "X-Large")
			);

			$products[102] = array(
			    "name" => "Mike the Frog Shirt, Black",
			    "img" => "img/shirts/shirt-102.jpg",
			    "price" => 20,
			    "paypal" => "2H6VLSYHY3QC8",
				"sizes" => array("Small", "Medium", "Large", "X-Large")
			);

			$products[103] = array(
			    "name" => "Mike the Frog Shirt, Blue",
			    "img" => "img/shirts/shirt-103.jpg",    
			    "price" => 20,
			    "paypal" => "MDP23L74U3F4L",
				"sizes" => array("Small", "Medium", "Large", "X-Large")
			);

			$products[104] = array(
			    "name" => "Logo Shirt, Green",
			    "img" => "img/shirts/shirt-104.jpg",    
			    "price" => 18,
			    "paypal" => "Q39L2XSPANB3Y",
				"sizes" => array("Small", "Medium", "Large", "X-Large")
			);

			$products[105] = array(
			    "name" => "Mike the Frog Shirt, Yellow",
			    "img" => "img/shirts/shirt-105.jpg",    
			    "price" => 25,
			    "paypal" => "7LVQ78CEPSKVN",
				"sizes" => array("Small", "Medium", "Large", "X-Large")
			);

			$products[106] = array(
			    "name" => "Logo Shirt, Gray",
			    "img" => "img/shirts/shirt-106.jpg",    
			    "price" => 20,
			    "paypal" => "G9A9UEVWCTDQN",
				"sizes" => array("Small", "Medium", "Large", "X-Large")
			);

			$products[107] = array(
			    "name" => "Logo Shirt, Turquoise",
			    "img" => "img/shirts/shirt-107.jpg",
			    "price" => 20,
			    "paypal" => "NNERMRTJSTG6Q",
				"sizes" => array("Small", "Medium", "Large", "X-Large")
			);

			$products[108] = array(
			    "name" => "Logo Shirt, Orange",
			    "img" => "img/shirts/shirt-108.jpg",    
			    "price" => 25,
			    "paypal" => "DCZEESJYBK88W",
				"sizes" => array("Large", "X-Large")
			);

// ARRAY FUNCTIONS

function list_products_html($products) {
	//If page is INDEX.PHP, show only last 4 products in reverse order with PayPal drop-down and Add To Cart
	if ($_SERVER['PHP_SELF'] == "/treehousephp/index.php") {
		$products_reverse = array_reverse($products, true);
		$products_new = array_slice($products_reverse, 0, 4, true);

		foreach ($products_new as $key => $product) {
			echo list_product_html($key, $product);
			//echo generate_paypal_form($product);
			echo '</li>';
			}

	//Else, show all products
	} else {
		foreach ($products as $key => $product) {
			echo list_product_html($key, $product);
			//echo generate_paypal_form($product);
			echo '</li>';
		}
	}
}

function list_product_html($key, $product) {
	$output =   "";
	$output .=  "<li>";
	$output .=  '<a href="shirt.php?id=' . $key . '">';
	$output .=  '<img src="' . $product["img"] . '" alt="' . $product["name"] . '">';
	$output .=  "</a>";
	$output .=  "<p>View Details</p>";
	return $output;
}

function size_list($product) {
	$output = "";

// Step out of output for the foreach loop
	foreach ($product["sizes"] as $shirt_sizes) {
		$output .= '<option value="' . $shirt_sizes . '">' . $shirt_sizes . '</option>';
	}

	return $output;
}

?>