<?php

if(function_exists('mytheme_filter_sale_flash')){
	return;
}

/*function mytheme_filter_sale_flash($html){
   echo "HELLO SALES FLASH";

	$str = __("Sale");
	return ""; //str_replace("Sale!", "Rea", $html);
}

/*add_filter("woocommerce_sale_flash", "mytheme_filter_sale_flash", 100);*/


function mytheme_before_shop_loop_item(){
	echo '<span class="new">Nyhet</span>';
}

//add_action("woocommerce_before_shop_loop_item", "mytheme_before_shop_loop_item");

remove_action("woocommerce_before_shop_loop_item", "woocommerce_template_loop_product_thumbnail");


/*div omsluter bild*/
function mytheme_template_loop_product_thumbnail(){
	echo "<div class='image-frame>";

	// finns det ett rea-pris eller ej?
	global $product;

	if(!isset($product)){
		return;
	}

	// if($product->is_onsale()){
	// 	echo '<span class="onsale">Rea</span>';
	// }

	$categories = $product->get_category_ids();


	foreach($categories as $category){
		$term = get_term_by('id', $category, 'product_cat');
		if($term->name == "Nyheter"){
			echo '<span class="new">Nyheter</span>';
			break;
		}
	}

	echo '<span class="new">Nyhet</span>';
	echo woocommerce_get_product_thumbnail();
	echo "</div>";
}
add_action("woocommerce_before_shop_loop_item_title", "mytheme_template_loop_product_thumbnail");


function mytheme_shop_loop_item_title(){

	global $product;
	if($product->is_on_sale()){
		$regular = $product->get_regular_price();
		$sale = $product->sale_sale_price();
		$percent = intval((1.0 - ($sale / $regular)) * 100);
		echo '<span class"perfect-off">-' . $percent . '%</span>';
	}


}

add_action("woocommerce_shop_loop_item_title", "mytheme_shop_loop_item_title");



remove_action("woocommerce_after_shop_loop_item_title", "woocommerce_template_loop_rating", 5);

function mytheme_after_shop_loop_item_title(){

	global $product;
	$rating = $product->get_average_rating();
	echo $rating;
	$width = ($rating/5) * 100;

	echo '<div class="rating">
			<div class="fill" style="width:' . $width . '%;"></div>
		  </div>';

}
add_action("woocommerce_after_shop_loop_item_title", "mytheme_after_shop_loop_item_title", 5);