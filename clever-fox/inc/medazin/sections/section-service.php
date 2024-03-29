<?php 
	$service_title 			= get_theme_mod('service_title',__('Out Standing Service','clever-fox'));
	$service_subtitle		= get_theme_mod('service_subtitle',__('Service','clever-fox'));
	$service_contents		= get_theme_mod('service_contents',medazin_get_service_default());  	
?>	
	<!-- Start: Service Section
            =======================-->
    <section id="service-section" class="service-section service-home wow fadeInUp">
        <div class="bg-elements">
           <img src="<?php echo esc_url(get_template_directory_uri().'/assets/images/elements/element1.png'); ?>" alt="<?php echo esc_attr__( 'Image','clever-fox' ); ?>" class="element1">
            <img src="<?php echo esc_url(get_template_directory_uri().'/assets/images/elements/element2.png'); ?>" alt="<?php echo esc_attr__( 'Image','clever-fox' ); ?>" class="element2">
            <img src="<?php echo esc_url(get_template_directory_uri().'/assets/images/elements/element3.png'); ?>" alt="<?php echo esc_attr__( 'Image','clever-fox' ); ?>" class="element3">
        </div>
        <div class="container">
			<?php if(!empty($service_title)  || !empty($service_subtitle)): ?>
				<div class="section-title text-center wow slideInDown">
					<?php if(!empty($service_subtitle)): ?>
						<span class="subtitle">
							<?php echo wp_kses_post($service_subtitle); ?>
						</span>
					<?php endif; ?>
					
					<span class="title-element"> <i class="fa fa-heartbeat"></i></span>
					
					<?php if(!empty($service_title)): ?>
						<h5>
							<?php echo wp_kses_post($service_title); ?>
						</h5>
					<?php endif; ?>
				</div>
			<?php endif; ?>
			
            <div class="service-content">
                <div class="row row-cols-2">
					<?php
						if ( ! empty( $service_contents ) ) {
						$service_contents = json_decode( $service_contents );
						$count = 1;
						foreach ( $service_contents as $service_item ) { 
							$image = ! empty( $service_item->image_url ) ? apply_filters( 'medazin_translate_single_string', $service_item->image_url, 'Service section' ) : '';
							$medazin_service_icon = ! empty( $service_item->icon_value) ? apply_filters( 'medazin_translate_single_string', $service_item->icon_value,'Service section' ) : '';
							$medazin_service_title = ! empty( $service_item->title ) ? apply_filters( 'medazin_translate_single_string', $service_item->title, 'Service section' ) : '';
							$medazin_service_text = ! empty( $service_item->text ) ? apply_filters( 'medazin_translate_single_string', $service_item->text, 'Service section' ) : '';
							$medazin_service_button = ! empty( $service_item->text2) ? apply_filters( 'medazin_translate_single_string', $service_item->text2,'Service section' ) : '';
							$medazin_service_link = ! empty( $service_item->link ) ? apply_filters( 'medazin_translate_single_string', $service_item->link, 'Service section' ) : '';
							$choice = ! empty( $service_item->choice ) ? apply_filters( 'medazin_translate_single_string', $service_item->choice, 'Service section' ) : '';
					?>
						<div class="col-lg-3 col-md-6 col-sm-6 mt-4 wow zoomIn">
							<div class="service-box">
								<?php if ( $choice =='customizer_repeater_image' ) { ?>
									<div class="service-icon">
										<img src="<?php echo esc_url($image); ?>" />
									</div>
									<div class="bg-element">
										<img src="<?php echo esc_url($image); ?>" />
									</div>
								<?php } elseif ( ! empty( $medazin_service_icon ) ) { ?>
									<div class="service-icon">
										<i class="fa <?php echo esc_attr($medazin_service_icon); ?>"></i>
									</div>
									<div class="bg-element">
										<i class="fa <?php echo esc_attr($medazin_service_icon); ?>"></i>
									</div>
								<?php } else{ ?>  
									<div class="bg-element"><svg viewBox="0 0 101 101"><path		d="M92.55,45.12a12.11,12.11,0,0,0-4.49-9.41A8.26,8.26,0,0,0,88.25,34a9.15,9.15,0,0,0-7.79-9,7.94,7.94,0,0,0-.24-4,8.55,8.55,0,0,0-2-3.24,10.17,10.17,0,0,0-5.46-3.32,1.49,1.49,0,0,0-.59-.12l-.3,0a7.89,7.89,0,0,0-1.8.11,9.66,9.66,0,0,0-3.35-5.65,9.54,9.54,0,0,0-7.6-2.06A9.81,9.81,0,0,0,51,16.44V81.8A12.14,12.14,0,0,0,63.17,94.31a12.18,12.18,0,0,0,10.67-6.24,9.57,9.57,0,0,0,1.4.2,10.94,10.94,0,0,0,11.63-10.2,10.59,10.59,0,0,0-.4-3.64A14.16,14.16,0,0,0,89,53.58,12.06,12.06,0,0,0,92.55,45.12ZM89.49,62.8a11.16,11.16,0,0,1-4.27,8.8A10.68,10.68,0,0,0,76,66.23a1.5,1.5,0,0,0,0,3,8,8,0,0,1,7.23,5.15,7.86,7.86,0,0,1,.6,3.49,8,8,0,0,1-8.44,7.4,7.8,7.8,0,0,1-1.93-.4,1.5,1.5,0,0,0-1.85.84,9.21,9.21,0,0,1-10.11,5.46A9.44,9.44,0,0,1,54,81.8V16.44a6.8,6.8,0,0,1,5.57-6.79,7.06,7.06,0,0,1,1.07-.08,6.52,6.52,0,0,1,4.17,1.49,6.66,6.66,0,0,1,2.41,4.68A9.13,9.13,0,0,0,63,23.4a1.5,1.5,0,1,0,3,0,6.14,6.14,0,0,1,5.84-6.12c1.15.11,2.48.72,4.18,2.5a5.58,5.58,0,0,1,1.32,2.09,5.31,5.31,0,0,1-.11,3.5,1.5,1.5,0,0,0-.08.51s0,.08,0,.11v0a1.5,1.5,0,0,0,1.56,1.87l.38,0A6.14,6.14,0,0,1,85.25,34a6,6,0,0,1-.32,1.85,1.5,1.5,0,0,0,.59,1.7A9.06,9.06,0,0,1,86.37,52a1.49,1.49,0,0,0-.21.23,9,9,0,0,1-5.3,1.71,9.13,9.13,0,0,1-9.12-9.12,1.5,1.5,0,1,0-3,0A12.14,12.14,0,0,0,80.85,56.92a12,12,0,0,0,5.82-1.48A11.12,11.12,0,0,1,89.49,62.8Z" /><path				d="M38.89,6.69a9.54,9.54,0,0,0-7.6,2.06,9.66,9.66,0,0,0-3.35,5.65,8,8,0,0,0-1.66-.12H26.1a1.49,1.49,0,0,0-.35,0c-1.73.19-3.73,1.06-6,3.39a8.54,8.54,0,0,0-2,3.24,7.93,7.93,0,0,0-.24,4,9.15,9.15,0,0,0-7.79,9,8.26,8.26,0,0,0,.18,1.71A12.05,12.05,0,0,0,9,53.58a14.16,14.16,0,0,0,2.58,20.84,10.59,10.59,0,0,0-.4,3.64,10.94,10.94,0,0,0,11.63,10.2,9.58,9.58,0,0,0,1.4-.2,12.18,12.18,0,0,0,10.67,6.24A12.14,12.14,0,0,0,47,81.8V16.44A9.81,9.81,0,0,0,38.89,6.69ZM44,81.8a9.44,9.44,0,0,1-7.55,9.37,9.22,9.22,0,0,1-10.11-5.46A1.5,1.5,0,0,0,25,84.79a1.48,1.48,0,0,0-.46.07,7.8,7.8,0,0,1-1.93.4,7.94,7.94,0,0,1-8.44-7.4,7.86,7.86,0,0,1,.6-3.48,8.33,8.33,0,0,1,7.49-5.15,1.5,1.5,0,1,0,0-3,11.28,11.28,0,0,0-9.42,5.38,11.13,11.13,0,0,1-1.38-16.28A12.11,12.11,0,0,0,29.53,44.8a1.5,1.5,0,0,0-3,0,9.12,9.12,0,0,1-14.45,7.41,1.48,1.48,0,0,0-.43-.21l0,0a9.06,9.06,0,0,1,.85-14.43,1.5,1.5,0,0,0,.59-1.7A6,6,0,0,1,12.75,34a6.14,6.14,0,0,1,6.19-6.12h0l.3,0a1.48,1.48,0,0,0,1.26-.53,1.5,1.5,0,0,0,.3-1.33v0s0-.08,0-.11a1.5,1.5,0,0,0-.08-.51,5.3,5.3,0,0,1-.11-3.5A5.57,5.57,0,0,1,22,19.78c1.74-1.82,3.1-2.42,4.27-2.5a6.14,6.14,0,0,1,6,6.13,1.5,1.5,0,1,0,3,0,9.13,9.13,0,0,0-4.43-7.82,6.66,6.66,0,0,1,2.39-4.53,6.59,6.59,0,0,1,5.24-1.41A6.8,6.8,0,0,1,44,16.44Z"></path></svg></div>
									<div class="service-icon"><svg viewBox="0 0 101 101"><path										d="M92.55,45.12a12.11,12.11,0,0,0-4.49-9.41A8.26,8.26,0,0,0,88.25,34a9.15,9.15,0,0,0-7.79-9,7.94,7.94,0,0,0-.24-4,8.55,8.55,0,0,0-2-3.24,10.17,10.17,0,0,0-5.46-3.32,1.49,1.49,0,0,0-.59-.12l-.3,0a7.89,7.89,0,0,0-1.8.11,9.66,9.66,0,0,0-3.35-5.65,9.54,9.54,0,0,0-7.6-2.06A9.81,9.81,0,0,0,51,16.44V81.8A12.14,12.14,0,0,0,63.17,94.31a12.18,12.18,0,0,0,10.67-6.24,9.57,9.57,0,0,0,1.4.2,10.94,10.94,0,0,0,11.63-10.2,10.59,10.59,0,0,0-.4-3.64A14.16,14.16,0,0,0,89,53.58,12.06,12.06,0,0,0,92.55,45.12ZM89.49,62.8a11.16,11.16,0,0,1-4.27,8.8A10.68,10.68,0,0,0,76,66.23a1.5,1.5,0,0,0,0,3,8,8,0,0,1,7.23,5.15,7.86,7.86,0,0,1,.6,3.49,8,8,0,0,1-8.44,7.4,7.8,7.8,0,0,1-1.93-.4,1.5,1.5,0,0,0-1.85.84,9.21,9.21,0,0,1-10.11,5.46A9.44,9.44,0,0,1,54,81.8V16.44a6.8,6.8,0,0,1,5.57-6.79,7.06,7.06,0,0,1,1.07-.08,6.52,6.52,0,0,1,4.17,1.49,6.66,6.66,0,0,1,2.41,4.68A9.13,9.13,0,0,0,63,23.4a1.5,1.5,0,1,0,3,0,6.14,6.14,0,0,1,5.84-6.12c1.15.11,2.48.72,4.18,2.5a5.58,5.58,0,0,1,1.32,2.09,5.31,5.31,0,0,1-.11,3.5,1.5,1.5,0,0,0-.08.51s0,.08,0,.11v0a1.5,1.5,0,0,0,1.56,1.87l.38,0A6.14,6.14,0,0,1,85.25,34a6,6,0,0,1-.32,1.85,1.5,1.5,0,0,0,.59,1.7A9.06,9.06,0,0,1,86.37,52a1.49,1.49,0,0,0-.21.23,9,9,0,0,1-5.3,1.71,9.13,9.13,0,0,1-9.12-9.12,1.5,1.5,0,1,0-3,0A12.14,12.14,0,0,0,80.85,56.92a12,12,0,0,0,5.82-1.48A11.12,11.12,0,0,1,89.49,62.8Z" /><path											d="M38.89,6.69a9.54,9.54,0,0,0-7.6,2.06,9.66,9.66,0,0,0-3.35,5.65,8,8,0,0,0-1.66-.12H26.1a1.49,1.49,0,0,0-.35,0c-1.73.19-3.73,1.06-6,3.39a8.54,8.54,0,0,0-2,3.24,7.93,7.93,0,0,0-.24,4,9.15,9.15,0,0,0-7.79,9,8.26,8.26,0,0,0,.18,1.71A12.05,12.05,0,0,0,9,53.58a14.16,14.16,0,0,0,2.58,20.84,10.59,10.59,0,0,0-.4,3.64,10.94,10.94,0,0,0,11.63,10.2,9.58,9.58,0,0,0,1.4-.2,12.18,12.18,0,0,0,10.67,6.24A12.14,12.14,0,0,0,47,81.8V16.44A9.81,9.81,0,0,0,38.89,6.69ZM44,81.8a9.44,9.44,0,0,1-7.55,9.37,9.22,9.22,0,0,1-10.11-5.46A1.5,1.5,0,0,0,25,84.79a1.48,1.48,0,0,0-.46.07,7.8,7.8,0,0,1-1.93.4,7.94,7.94,0,0,1-8.44-7.4,7.86,7.86,0,0,1,.6-3.48,8.33,8.33,0,0,1,7.49-5.15,1.5,1.5,0,1,0,0-3,11.28,11.28,0,0,0-9.42,5.38,11.13,11.13,0,0,1-1.38-16.28A12.11,12.11,0,0,0,29.53,44.8a1.5,1.5,0,0,0-3,0,9.12,9.12,0,0,1-14.45,7.41,1.48,1.48,0,0,0-.43-.21l0,0a9.06,9.06,0,0,1,.85-14.43,1.5,1.5,0,0,0,.59-1.7A6,6,0,0,1,12.75,34a6.14,6.14,0,0,1,6.19-6.12h0l.3,0a1.48,1.48,0,0,0,1.26-.53,1.5,1.5,0,0,0,.3-1.33v0s0-.08,0-.11a1.5,1.5,0,0,0-.08-.51,5.3,5.3,0,0,1-.11-3.5A5.57,5.57,0,0,1,22,19.78c1.74-1.82,3.1-2.42,4.27-2.5a6.14,6.14,0,0,1,6,6.13,1.5,1.5,0,1,0,3,0,9.13,9.13,0,0,0-4.43-7.82,6.66,6.66,0,0,1,2.39-4.53,6.59,6.59,0,0,1,5.24-1.41A6.8,6.8,0,0,1,44,16.44Z"></path></svg></div>
								<?php } ?>
								<div class="service-content">
								
									<?php if ( ! empty( $medazin_service_title ) ) : ?>
										<h4>
											<?php echo esc_html( $medazin_service_title ); ?>
										</h4>
									<?php endif; ?>
									
									<?php if ( ! empty( $medazin_service_text ) ) : ?>
										<p>
											<?php echo esc_html( $medazin_service_text ); ?>
										</p>
									<?php endif; ?>	
									
									<?php if ( ! empty( $medazin_service_button ) && ! empty( $medazin_service_link ) ) : ?>
										<a href="<?php echo esc_url( $medazin_service_link ); ?>">
											<span>
												<?php echo esc_html( $medazin_service_button ); ?>
											</span> 
										</a>
									<?php endif; ?>	
								</div>
							</div>
						</div>
					<?php ++$count; } }?>
                </div>
            </div>
        </div>
    </section>
    <!-- End: Service Section
            =======================-->