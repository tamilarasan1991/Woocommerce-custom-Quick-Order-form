//bulk add to cart
add_action( 'wp_ajax_my_action', 'my_action' );
add_action( 'wp_ajax_nopriv_my_action', 'my_action' );
function my_action() {
	
global $woocommerce;
  //$woocommerce->cart->empty_cart();
 
$product_id = $_POST['variation_id'] ;
$quantity= $_POST['quantity'] ;

//print_r($quantity[6]);
$i=0;
	foreach($product_id  as $p) {

$woocommerce->cart->add_to_cart($p,$quantity[$i]);
$i++;
}
 	wp_die();
}
