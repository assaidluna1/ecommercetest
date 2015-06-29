<?php
	
function generate_paypal_form($product) {
	$output =   "";
	$output .=  '<form target="paypal" action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">';
	$output .=  '<input type="hidden" name="cmd" value="_s-xclick">';
	$output .=  '<input type="hidden" name="hosted_button_id" value="' . $product["paypal"] . '">';
	$output .=  '<input type="hidden" name="item_name" value="' . $product["name"] . '">';	
	$output .=  '<table>';
	$output .=  '<tr>';
	$output .=  '<th>';
	$output .=  '<input type="hidden" name="on0" value="Size">';
	$output .=  '<label for="os0">Size</label>';
	$output .=  '</th>';
	$output .=  '<td>';
	$output .=  '<select name="os0" id="os0">';
	$output .=  size_list($product);
	$output .=  '</select>';
	$output .=  '</td>';
	$output .=  '</tr>';
    $output .=  '</table>';
	$output .=  '<input type="submit" value="Add to Cart">';
	$output .=  '</form>';

	return $output;
}

?>