<section class="bt-main-row bt-section-space <?php balloon_get_content_class( 'main', $balloon_sidebar_position ); ?>" role="main" itemprop="mainEntity" itemscope="itemscope" itemtype="http://schema.org/Blog">
   <div class="container">
      <div class="row">
         <div class="bt-content-area <?php balloon_get_content_class( 'content', $balloon_sidebar_position ); ?>">
            <div class="bt-col-inner"  >
               <div class="entry-content" itemprop="text">
                  <div id="cs-content" class="cs-content">
                     <div id="x-section-1" class="x-section" style="margin: 0px;padding: 45px 0px; background-color: transparent;">
                        <div class="x-container max width" style="margin: 0px auto;padding: 0px;">
                           <div class="woocommerce">
                              <div class="col-sm-4" style="padding-left: 0px;">
                                 <nav class="woocommerce-MyAccount-navigation">
                                    <ul style="padding: 0px;">
                                       <?php foreach ( wc_get_account_menu_items() as $endpoint => $label ) : ?>
                                       <li class="<?php echo wc_get_account_menu_item_classes( $endpoint ); ?> custom-navigation">
                                          <a href="<?php echo esc_url( wc_get_account_endpoint_url( $endpoint ) ); ?>"><?php echo esc_html( $label ); ?></a>
                                       </li>
                                       <?php endforeach; ?>
                                    </ul>
                                 </nav>
                              </div>
                           </div>
                           <?php  
                                $args = array(
                                      'post_type'      => 'product',
                                      'posts_per_page' => 16,
                                      'product_cat'    => 'single-spoon'
                              
                                  );
                              
                                  $loop = new WP_Query( $args );
                              
                                $product_id = array();
                                $product_title = array();
                                  while ( $loop->have_posts() ) : $loop->the_post();
                                $product_id[] = $product->get_id();
                                   global $product;
                               //single spoon
                              endwhile;
                              wp_reset_query();
                              ?>
                           <div class="col-sm-8">
                              <div class="x-container max width">
                                 <div class="x-column x-sm x-1-1">
                                    <ul class="x-nav x-nav-tabs four-up top" data-x-element="tab_nav" data-x-params="{&quot;orientation&quot;:&quot;horizontal&quot;}">
                                       <li class="x-nav-tabs-item active"><a data-cs-tab-toggle="1">30 & 40 Spoons Pack</a></li>
                                        
                                       <li class="x-nav-tabs-item"><a data-cs-tab-toggle="2">60 & 120 Spoons<br> Pack</a></li>
                                        
                                       <li class="x-nav-tabs-item"><a data-cs-tab-toggle="3">300 Spoons<br> Pack</a></li>
<li class="x-nav-tabs-item"><a data-cs-tab-toggle="4">À la carte</a></li>
                                    </ul>
                                    <div class="x-tab-content">
                                       <div data-cs-tab-index="1" class="x-tab-pane fade in active">
                                          <p><b>Note:<br>
                                          </b> Total quantity should be in multiples of 10. (eg. 10, 20, 30 etc..)<br>Individual flavours can be in any quantity. Minimum total quantity should be 10.</p>
                                          <table class="table">
                                             <thead>
                                                <tr>
                                                   <th>Product Name</th>
                                                   <th>Variation</th>
                                                   <th>price</th>
                                                   <th>Quantity</th>
                                                </tr>
                                             </thead>
                                             <tbody>
                                                <?php foreach($product_id as $id_value){
                                                   $product1 = new WC_Product_Variable($id_value);
                                                   $variations = $product1->get_available_variations();
                                                   foreach ($variations as $variation) {
                                                   
                                                   if($variation['attributes']['attribute_quantity']=="30 Spoons Pack" || $variation['attributes']['attribute_quantity']=="40 Spoons Pack") {
                                                   
                                                   ?>
                                                <tr class="variation_id-<?php echo $variation['variation_id']; ?>" id="product_id-<?php echo $id_value; ?>">
                                                   <td><?php echo $product1->name; ?></td>
                                                   <td><?php echo $variation['attributes']['attribute_quantity']; ?></td>
                                                   <td><span class="woocommerce-Price-currencySymbol"></span><?php echo $variation['price_html']; ?></td>
                                                   <?php ?>
                                                   <td><input type="text" id="quantity_<?php echo $product1->id; ?>" class="30spoon_quantity" step="1" min="1" max="" name="30spoon_quantity[]" value="" title="Qty" size="4" pattern="[0-9]*" inputmode="numeric">        
                                                      <input type="hidden" name="30spoon_product_id[]" value="<?php echo $id_value; ?>">  
                                                      <input type="hidden" name="30spoon_variation_id[]" value="<?php echo $variation['variation_id']; ?>">                                 
                                                   </td>
                                                </tr>
                                                <?php }}} ?> 
                                             </tbody>
                                          </table>
                                          <button class="wpcf7-form-control wpcf7-submit pull-right" id="30spoon_quantity" type="button">ADD TO CART</button> 
                                          <span class="error_30spoon" style="color:red"></span> 
                                          <br>
                                       </div>
                                        
                                       <div data-cs-tab-index="2" class="x-tab-pane fade in">
                                          <p><b>Note:<br>
                                          </b> Total quantity should be in multiples of 6. (eg. 6, 12, 18 etc..)<br>Individual flavours can be in any quantity. Minimum total quantity should be 6</p>
                                          <table class="table">
                                             <thead>
                                                <tr>
                                                   <th>Product Name</th>
                                                   <th>Variation</th>
                                                   <th>price</th>
                                                   <th>Quantity</th>
                                                </tr>
                                             </thead>
                                             <tbody>
                                                <?php 
                                                   //single spoon
                                                       $args = array(
                                                           'post_type'      => 'product',
                                                           'posts_per_page' => 100,
                                                           'product_cat'    => 'institution-pack'
                                                   
                                                       );
                                                   
                                                       $loop = new WP_Query( $args );
                                                   
                                                     $product_id = array();
                                                     $product_title = array();
                                                       while ( $loop->have_posts() ) : $loop->the_post();
                                                     $product_id[] = $product->get_id();
                                                        global $product;
                                                    //single spoon
                                                   endwhile;
                                                   wp_reset_query();
                                                   foreach($product_id as $id_value){
                                                                           $product1 = new WC_Product_Variable($id_value);
                                                                       $variations = $product1->get_available_variations();
                                                   foreach ($variations as $variation) {
                                                   
                                                   if($variation['attributes']['attribute_quantity']=="120 Spoons Pack" || $variation['attributes']['attribute_quantity']=="60 Spoons Pack"){
                                                   
                                                                        ?>
                                                <tr class="variation_id-<?php echo $variation['variation_id']; ?>" id="product_id-<?php echo $id_value; ?>">
                                                   <td><?php echo $product1->name; ?></td>
                                                   <td><?php echo $variation['attributes']['attribute_quantity']; ?></td>
                                                   <td><?php echo $variation['price_html']; ?></td>
                                                   <?php ?>
                                                   <td><input type="text" id="quantity_<?php echo $product1->id; ?>" class="60spoon_quantity" step="1" min="1" max="" name="60spoon_quantity[]" value="" title="Qty" size="4" pattern="[0-9]*" inputmode="numeric">        
                                                      <input type="hidden" name="60spoon_product_id[]" value="<?php echo $id_value; ?>">  
                                                      <input type="hidden" name="60spoon_variation_id[]" value="<?php echo $variation['variation_id']; ?>">                                         
                                                   </td>
                                                </tr>
                                                <?php }}} ?> 
                                             </tbody>
                                          </table>
                                          <a id="60spoon_quantity" class="wpcf7-form-control wpcf7-submit pull-right" href="#">ADD TO CART</a><span class="error_60spoon" style="color:red"></span>
                                          <br>
                                       </div>
                                        


                                       <div data-cs-tab-index="3" class="x-tab-pane fade in">
                                        <!--  <p>You have to select the minimum quantity of 10 with the combination of different products. Total quantity should be in multiples of 10.</p>-->
                                          <table class="table">
                                             <thead>
                                                <tr>
                                                   <th>Product Name</th>
                                                   <th>Variation</th>
                                                   <th>price</th>
                                                   <th>Quantity</th>
                                                </tr>
                                             </thead>
                                             <tbody>
                                                <?php 
                                                   //single spoon
                                                       $args = array(
                                                           'post_type'      => 'product',
                                                           'posts_per_page' => 16,
                                                           'product_cat'    => 'institution-pack'
                                                   
                                                       );
                                                   
                                                       $loop = new WP_Query( $args );
                                                   
                                                     $product_id = array();
                                                     $product_title = array();
                                                       while ( $loop->have_posts() ) : $loop->the_post();
                                                     $product_id[] = $product->get_id();
                                                        global $product;
                                                    //single spoon
                                                   endwhile;
                                                   wp_reset_query();
                                                   foreach($product_id as $id_value){
                                                                           $product1 = new WC_Product_Variable($id_value);
                                                                       $variations = $product1->get_available_variations();
                                                   foreach ($variations as $variation) {
                                                   
                                                   if($variation['attributes']['attribute_quantity']=="300 Spoons Pack"){
                                                   
                                                                        ?>
                                                <tr class="variation_id-<?php echo $variation['variation_id']; ?>" id="product_id-<?php echo $id_value; ?>">
                                                   <td><?php echo $product1->name; ?></td>
                                                   <td><?php echo $variation['attributes']['attribute_quantity']; ?></td>
                                                   <td><span class="woocommerce-Price-currencySymbol"></span><?php echo $variation['price_html']; ?></td>
                                                   <?php ?>
                                                   <td><input type="text" id="quantity_<?php echo $product1->id; ?>" class="300spoon_quantity" step="1" min="1" max="" name="300spoon_quantity[]" value="" title="Qty" size="4" pattern="[0-9]*" inputmode="numeric">        
                                                      <input type="hidden" name="300spoon_product_id[]" value="<?php echo $id_value; ?>">  
                                                      <input type="hidden" name="300spoon_variation_id[]" value="<?php echo $variation['variation_id']; ?>">                                       
                                                   </td>
                                                </tr>
                                                <?php }}} ?> 
                                             </tbody>
                                          </table>
                                          <a id="300spoon_quantity" class="wpcf7-form-control wpcf7-submit pull-right" href="#">ADD TO CART</a><span class="error_300spoon" style="color:red"></span>
                                          <br>
                                       </div>

<div data-cs-tab-index="4" class="x-tab-pane fade in" id="product-2165-1">
<b>Select your own a la carte pack.</b>
<p>An a la carte pack has 300 spoons with five units of 60 spoons each. Choose the 60 spoon units of your choice to make your own a la carte combinations.</p>
<div class="">
    <div class="total-count">Your are selected <span id="unitcount">0</span>/5 Units</div>  
</div>
<div class="form-group">
    <input type="hidden" id="tamil" class="form-control" value="0" max="100"/>    
</div>
<div class="clearfix"></div>
<div class="progress">
    <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
   
    </div>
</div>
 <?php echo do_shortcode( '[product_page id="2165"]' ); ?>
</div>




                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- /.bt-col-inner -->
         </div>
         <!-- /.bt-content-area -->
         <?php get_sidebar(); ?>
      </div>
      <!-- /.row -->
   </div>
   
   <!-- /.container -->
</section>

<script>
   jQuery(document).ready(function(jQuery) {
   
   jQuery("input[name='30spoon_quantity[]']").keyup(function() {
   
     var values = jQuery("input[name='30spoon_quantity[]']")
         .map(function() {
             return jQuery(this).val();
         }).get();
   
     var total = 0;
     for (var i = 0; i < values.length; i++) {
         total += values[i] << 0;
     }
   
     var remainder = total % 10;
   
     if (total > 0 && remainder == 0) {
         jQuery('#30spoon_quantity').prop("disabled", false);
         jQuery('.error_30spoon').html('');
   
     } else {
         jQuery('#30spoon_quantity').prop("disabled", true);
         jQuery('.error_30spoon').html('Kindly select a minimum quantity of 10. or in multiples of 10.<br> Eg.10, 20,30..');
    myFunction("Kindly select a minimum quantity of 10. or in multiples of 10.<br> Eg.10, 20,30..");
     }
   
   });
   
   
   jQuery('#30spoon_quantity').click(function(e) {
   
   
   
   var values = jQuery("input[name='30spoon_quantity[]']")
         .map(function() {
             return jQuery(this).val();
         }).get();
   
     var total = 0;
     for (var i = 0; i < values.length; i++) {
         total += values[i] << 0;
     }
   
     var remainder = total % 10;
   
     if (total > 0 && remainder == 0) {
         jQuery('#30spoon_quantity').prop("disabled", false);
         jQuery('.error_30spoon').html('');
   
   
     var addtocartproduct = [];
   
     var values = jQuery("input[name='30spoon_product_id[]']")
         .map(function() {
             return jQuery(this).val();
         }).get();
     var values1 = jQuery("input[name='30spoon_variation_id[]']")
         .map(function() {
             return jQuery(this).val();
         }).get();
     var values2 = jQuery("input[name='30spoon_quantity[]']")
         .map(function() {
             return jQuery(this).val();
         }).get();
     var spn = ['30 Spoons Pack'];
   
     addtocartproduct = values1 + "-" + values2;
   
     var data = {
         'action': 'my_action',
         'product_id': values,
         'variation_id': values1,
         'quantity': values2
     };
   
     jQuery.post('<?php echo  admin_url('admin-ajax.php'); ?>', data,
         function(response) {
             //alert('Got this from the server: ' + response);
             setTimeout(function() {
                 //window.location.href = "http://www.demo.oruspoon.com/cart";
                 /*confirm message start*/
   jQuery.confirm({
   title: 'Product Added to your cart',
   type: 'green',
   boxWidth: '500px',
   typeAnimated: true,
   buttons: {
     tryAgain: {
         text: 'View Cart',
         btnClass: 'wpcf7-form-control wpcf7-submit pull-right',
         action: function(){
   
     window.location.href = "https://www.oruspoon.com/cart/";
         }
     },
     close: {
   text: 'Continue Shopping',
         btnClass: 'wpcf7-form-control wpcf7-submit pull-right',
   action: function () {
     }
   }
   }
   });
   /*confirm message end*/
             }, 2000);
         });
     e.preventDefault();
   
   
     return true;
   } else {
         jQuery('#30spoon_quantity').prop("disabled", true);
         jQuery('.error_30spoon').html('Kindly select a minimum quantity of 10. Example 10, 20, 30.');
   myFunction("Kindly select a minimum quantity of 10. Example 10, 20, 30.");
     }
   
   
   });
   
   
   
   
   
   /*60 spoon pack start*/
   jQuery("input[name='60spoon_quantity[]']").keyup(function() {
   
     var values = jQuery("input[name='60spoon_quantity[]']")
         .map(function() {
             return jQuery(this).val();
         }).get();
   
     var total = 0;
     for (var i = 0; i < values.length; i++) {
         total += values[i] << 0;
     }
   
     var remainder = total % 6;
   
     if (total > 0 && remainder == 0) {
         jQuery('#60spoon_quantity').prop("disabled", false);
         jQuery('.error_60spoon').html('');
   
     } else {
         jQuery('#60spoon_quantity').prop("disabled", true);
         jQuery('.error_60spoon').html('Kindly select a minimum quantity of 6. or in multiples of 6.<br> Eg.6, 12,18..');
   myFunction("Kindly select a minimum quantity of 6. or in multiples of 6.<br> Eg.6, 12,18..");
     }
   
   });
   
   
   jQuery('#60spoon_quantity').click(function(e) {
   
     var values = jQuery("input[name='60spoon_quantity[]']")
         .map(function() {
             return jQuery(this).val();
         }).get();
   
     var total = 0;
     for (var i = 0; i < values.length; i++) {
         total += values[i] << 0;
     }
   
     var remainder = total % 6;
   
     if (total > 0 && remainder == 0) {
         jQuery('#60spoon_quantity').prop("disabled", false);
         jQuery('.error_60spoon').html('');
   
   
         var addtocartproduct = [];
   
         var values = jQuery("input[name='60spoon_product_id[]']")
             .map(function() {
                 return jQuery(this).val();
             }).get();
         var values1 = jQuery("input[name='60spoon_variation_id[]']")
             .map(function() {
                 return jQuery(this).val();
             }).get();
         var values2 = jQuery("input[name='60spoon_quantity[]']")
             .map(function() {
                 return jQuery(this).val();
             }).get();
         var spn = ['60 Spoons Pack'];
   
         addtocartproduct = values1 + "-" + values2;
   
         var data = {
             'action': 'my_action',
             'product_id': values,
             'variation_id': values1,
             'quantity': values2
         };
   
         jQuery.post('<?php echo  admin_url('admin-ajax.php'); ?>', data,
             function(response) {
                 //alert('Got this from the server: ' + response);
                 setTimeout(function() {
                     //window.location.href = "http://www.demo.oruspoon.com/cart";
                     /*confirm message start*/
   jQuery.confirm({
   title: 'Product Added to your cart',
   type: 'green',
   boxWidth: '500px',
   typeAnimated: true,
   buttons: {
     tryAgain: {
         text: 'View Cart',
         btnClass: 'wpcf7-form-control wpcf7-submit pull-right',
         action: function(){
   
     window.location.href = "https://www.oruspoon.com/cart/";
         }
     },
     close: {
   text: 'Continue Shopping',
         btnClass: 'wpcf7-form-control wpcf7-submit pull-right',
   action: function () {
     }
   }
   }
   });
   /*confirm message end*/
                 }, 2000);
             });
         e.preventDefault();
   
   
         return true;
   
   
     } else {
         jQuery('#60spoon_quantity').prop("disabled", true);
         jQuery('.error_60spoon').html('Kindly select a minimum quantity of 6. Example 12, 18, 24.');
   myFunction("Kindly select a minimum quantity of 6. Example 12, 18, 24.");
     }
   
   
   });
   
   /*60 spoon end*/
   
   /*120 spoon pack start*/
   
    
   
   /*300 spoon pack start*/
   
   jQuery("input[name='300spoon_quantity[]']").keyup(function() {
   
     var values = jQuery("input[name='300spoon_quantity[]']")
         .map(function() {
             return jQuery(this).val();
         }).get();
     var total = 0;
     for (var i = 0; i < values.length; i++) {
         total += values[i] << 0;
     }
     var remainder = total % 1;
     if (total > 0 && remainder == 0) {
         jQuery('#300spoon_quantity').prop("disabled", false);
         jQuery('.error_300spoon').html('');
   
     } else {
         jQuery('#300spoon_quantity').prop("disabled", true);
         jQuery('.error_300spoon').html('Kindly select a minimum quantity of 1. Example 1, 2, 3.');
         myFunction("Kindly select a minimum quantity of 1. Example 1, 2, 3.");
     }
   });
   
   
   jQuery('#300spoon_quantity').click(function(e) {
   
   
     var values = jQuery("input[name='300spoon_quantity[]']")
         .map(function() {
             return jQuery(this).val();
         }).get();
     var total = 0;
     for (var i = 0; i < values.length; i++) {
         total += values[i] << 0;
     }
     var remainder = total % 1;
     if (total > 0 && remainder == 0) {
         jQuery('#300spoon_quantity').prop("disabled", false);
         jQuery('.error_300spoon').html('');
   
   
         var addtocartproduct = [];
   
         var values = jQuery("input[name='300spoon_product_id[]']")
             .map(function() {
                 return jQuery(this).val();
             }).get();
         var values1 = jQuery("input[name='300spoon_variation_id[]']")
             .map(function() {
                 return jQuery(this).val();
             }).get();
         var values2 = jQuery("input[name='300spoon_quantity[]']")
             .map(function() {
                 return jQuery(this).val();
             }).get();
         var spn = ['300 Spoons Pack'];
   
         addtocartproduct = values1 + "-" + values2;
   
         var data = {
             'action': 'my_action',
             'product_id': values,
             'variation_id': values1,
             'quantity': values2
         };
   
         jQuery.post('<?php echo  admin_url('admin-ajax.php'); ?>', data,
             function(response) {
                 //alert('Got this from the server: ' + response);
                 setTimeout(function() {
   
   
   /*confirm message start*/
   jQuery.confirm({
   title: 'Product Added to your cart',
   type: 'green',
   boxWidth: '500px',
   typeAnimated: true,
   buttons: {
     tryAgain: {
         text: 'View Cart',
         btnClass: 'wpcf7-form-control wpcf7-submit pull-right',
         action: function(){
   
     window.location.href = "https://www.oruspoon.com/cart/";
         }
     },
     close: {
   text: 'Continue Shopping',
         btnClass: 'wpcf7-form-control wpcf7-submit pull-right',
   action: function () {
     }
   }
   }
   });
   /*confirm message end*/
                       
                 }, 2000);
             });
         e.preventDefault();
   
         return true;
     } else {
         jQuery('#300spoon_quantity').prop("disabled", true);
         jQuery('.error_300spoon').html('Kindly select a minimum quantity of 1. Example 1, 2, 3.');
           myFunction("Kindly select a minimum quantity of 1. Example 1, 2, 3.");
     }
   
   });
   
   
   /*300 spoon end*/
   
   });
   
   
   
   
   
   
   jQuery(document).ready(function() {
   
   jQuery(".30spoon_quantity").keydown(function (e) {
      
     if (jQuery.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
         
         (e.keyCode === 65 && (e.ctrlKey === true || e.metaKey === true)) || 
          
         (e.keyCode >= 35 && e.keyCode <= 40)) {
          
              return;
     }
   
     if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
         e.preventDefault();
     }
   });

   jQuery(".60spoon_quantity").keydown(function (e) {
      
     if (jQuery.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
         
         (e.keyCode === 65 && (e.ctrlKey === true || e.metaKey === true)) || 
          
         (e.keyCode >= 35 && e.keyCode <= 40)) {
          
              return;
     }
   
     if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
         e.preventDefault();
     }
   });
   jQuery(".300spoon_quantity").keydown(function (e) {
      
     if (jQuery.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
         
         (e.keyCode === 65 && (e.ctrlKey === true || e.metaKey === true)) || 
          
         (e.keyCode >= 35 && e.keyCode <= 40)) {
          
              return;
     }
   
     if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
         e.preventDefault();
     }
   });
   
   
   
   
   });
  
  
   
   jQuery('input#tamil').keyup(function(){
    var value = this.value;
    jQuery('.progress-bar').css('width', value+'%').attr('aria-valuenow', value);    
}).keyup();

jQuery(document).ready(function(){
jQuery("select option[value='wccpf_none']").attr("class","hello");
jQuery('.hello').prop('disabled', true);
});


jQuery( ".wccpf-field " ).change(function() {
  console.log( jQuery(this).val() );
  
  jQuery(this).parent().children('input').val('20');
  
   var test = jQuery(this).parent().children('input').val();
  
   
   var values = jQuery("input[name='progress']")
         .map(function() {
             return jQuery(this).val();
         }).get();
     var total = 0;
     for (var i = 0; i < values.length; i++) {
         total += values[i] << 0;
     }
   
 
   
   var progerss = jQuery('input#tamil').val();
   
   //total = parseInt(progerss)+parseInt(test);
   
   
  
  
   jQuery('input#tamil').val(total);
  
   var value = jQuery('input#tamil').val();
   jQuery('.progress-bar').css('width', value+'%').attr('aria-valuenow', value);
    if(value == "20"){
       jQuery('#unitcount').html('1');
       myFunction("You are selected 1/5 Units");
   } 
     if(value == "40"){
       jQuery('#unitcount').html('2');
       myFunction("You are selected 2/5 Units");
   } 
      if(value == "60"){
       jQuery('#unitcount').html('3');
       myFunction("You are selected 3/5 Units");
   } 
     if(value == "80"){
       jQuery('#unitcount').html('4');
       myFunction("You are selected 4/5 Units");
   } 
     if(value == "100"){
       jQuery('#unitcount').html('5');
       myFunction("You are selected 5/5 Units");
   }   
  
});


function myFunction(text) {
   var x = document.getElementById("snackbar")
   x.className = "show";
   document.getElementById("snackbar").innerText=text
   setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
}
 

</script>