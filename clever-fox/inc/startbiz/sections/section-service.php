<?php
 if ( ! function_exists( 'startkit_service_plu' ) ) :
	function startkit_service_plu() {
	$hide_show_service	= get_theme_mod('hide_show_service','1'); 
	$service_title		= get_theme_mod('service_title',__('Services','clever-fox'));
	$service_subttl		= get_theme_mod('service_subttl',__('<span>Service</span> <h6>Lorem is dummy text.</h6>','clever-fox'));
	$service_description= get_theme_mod('service_description',__('Publishing packages and web page editors now use Lorem Ipsum as their default model text','clever-fox'));
	$service_contents	= get_theme_mod('service_contents',startkit_get_service_default());	
if($hide_show_service == '1') {?>
<section id="services" class="section-padding">
	<div class="container">
	<?php  
	if( ($service_title) || ($service_subttl)!='' || ($service_description)!='' ) { ?>
	    <!-- Section Title -->
		<div class="row">
			<div class="col-md-6 offset-md-3 text-center">
				<div class="section-header">
					<?php if ( ! empty( $service_subttl ) ) : ?>
					<div class="subtitle"><?php echo wp_kses_post( $service_subttl ); ?></div>
					<?php endif; ?>
					<?php if ( ! empty( $service_title ) || is_customize_preview() ) : ?>
					<h2>
					<?php echo esc_html($service_title); ?>
					</h2>
					<?php endif; ?>
					<hr class="liner">
					<?php if($service_description) { ?>					
					<p class="wow fadeInUp" data-wow-delay="0.1s">
					<?php echo esc_html($service_description); ?>
					</p>
					<?php } ?>
				</div>
			</div>
		</div>
		<!-- /Section Title -->
		<?php } ?>
	<div class="row text-center servicesss">
		<?php
	
		if ( ! empty( $service_contents ) ) {
		$allowed_html = array(
		'br'     => array(),
		'em'     => array(),
		'strong' => array(),
		'b'      => array(),
		'i'      => array(),
		);
		$service_contents = json_decode( $service_contents );
		foreach ( $service_contents as $service_item ) {
			$icon = ! empty( $service_item->icon_value ) ? apply_filters( 'startkit_translate_single_string', $service_item->icon_value, 'service section' ) : '';
			$title = ! empty( $service_item->title ) ? apply_filters( 'startkit_translate_single_string', $service_item->title, 'service section' ) : '';
			$text = ! empty( $service_item->text ) ? apply_filters( 'startkit_translate_single_string', $service_item->text, 'service section' ) : '';
			$text2 = ! empty( $service_item->text2) ? apply_filters( 'startkit_translate_single_string', $service_item->text2,'service section' ) : '';
			$link = ! empty( $service_item->link ) ? apply_filters( 'startkit_translate_single_string', $service_item->link, 'service section' ) : '';
			$image = ! empty( $service_item->image_url ) ? apply_filters( 'startkit_translate_single_string', $service_item->image_url, 'service section' ) : '';
			?>
			<div class="col-lg-4 col-md-6 col-sm-6 col-12 mb-lg-0 mb-4">
				<div class="features-startbiz wow fadeInUp" data-wow-delay="0.4s">
  					<div class="features-contented">
    					<div class="features-icon">
							<?php if ( ! empty( $icon ) ) :?>
								<i class="fa <?php echo esc_html( $icon ); ?> txt-pink"></i>
							<?php endif; ?>
						</div>
						<?php if ( ! empty( $title ) ) : ?>
							<h5><a href="#"><?php echo esc_html( $title ); ?></a></h5>
						<?php endif; ?>
						<?php if ( ! empty( $text ) ) : ?>
							<p class="features-desc"><?php echo wp_kses( html_entity_decode( $text ), $allowed_html ); ?></p>
						<?php endif; ?>
						
						<?php if ( ! empty( $text2 ) ) : ?>
							<a href="<?php echo esc_url( $link ); ?>" class="features-link">
								<span><?php echo esc_html( $text2 ); ?></span>
								<i class="fa fa-arrow-right "></i>
							</a>
						<?php endif; ?>
					</div>
					<?php if(!empty($image)): ?>
						<div class="features-overlay" style="background-image: url(<?php echo esc_url($image); ?>); background-size: cover; background-position: center center;"></div>
					<?php endif; ?>
				</div>
			</div>
			<?php
			} }
			?>
			
		</div>
	</div>
	</section>		
<?php 
	}}
endif;
if ( function_exists( 'startkit_service_plu' ) ) {
$section_priority = apply_filters( 'startkit_section_priority', 13, 'startkit_service_plu' );
add_action( 'startkit_sections', 'startkit_service_plu', absint( $section_priority ) );

}
	?>
