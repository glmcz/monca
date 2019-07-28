<!-- <div class="motivator hero" style='width: 100%;
    height: 650px;
    background-image: url("<?php echo home_url(); ?>/wp-content/uploads/2019/06/motivator-sirka.png");
    background-repeat: no-repeat;
	background-size: cover;
    background-position: 50% 50%;
'>
</div> -->

<div class="motivator" style='width: 100%;
    height: 650px;'	  >
<?php

$url = "http://vnitrnirozvoj.cz/wp-content/uploads/2019/06/motivator-sirka.png"; 
$attachment_id = attachment_url_to_postid( $url );
$img_src = wp_get_attachment_image_url( $attachment_id, 'large' );
$img_srcset = wp_get_attachment_image_srcset( $attachment_id, 'full' );
$img_alt = get_post_meta( $attachment_id, '_wp_attachment_image_alt', true ); ?>
<?php echo rwp_picture( $attachment_id, array(
	'sizes' => array( 'medium', 'large', 'full' )) ); 
								?>
	
</div>	

