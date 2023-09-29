<?php
  
	$rowId = get_sub_field('row_id') ? get_sub_field('row_id') : 'row-'.get_row_index();
	$copy_color_scheme = get_sub_field('copy_color_scheme');
	$row_background_color = get_sub_field('row_background_color') ? get_sub_field('row_background_color') : 'transparent';
	$background_image = get_sub_field('background_image');
	$row_classes = get_sub_field('row_classes') ? get_sub_field('row_classes') : '';

	if(have_rows('banner_slides')):
	

?>

<section id="<?php echo $rowId; ?>" class="siteBanner  <?php echo $background_image ? 'hasBg '.$row_classes.' '.$copy_color_scheme : $row_classes.' '.$copy_color_scheme; ?>" style="background-color: <?php echo $row_background_color; ?>">
		
	<?php if($background_image): ?>
		<div class="imgWrap bgImge">
			<?php echo wp_get_attachment_image($background_image, 'full'); ?>
		</div>
	<?php endif; ?>

	<div class="sslider">
	<?php while(have_rows('banner_slides')): the_row(); 
		$section_title = get_sub_field('section_title');
		$section_description = get_sub_field('section_description');
		$slide_background_image = get_sub_field('slide_background_image');
	?>
 		
 		<div class="sslide dflex vcenter hasBg">
 			<?php if($slide_background_image): ?>
 				<div class="imgWrap bgImge z2">
		 			<?php echo wp_get_attachment_image($slide_background_image, 'full'); ?>
				</div>
			 <?php endif; ?>
		 	
		 	<div class="wrapper z3">
			 	<div class="contWrap">
		 			<h1 class="head"><?php echo $section_title; ?></h1>
		 			<div class="desc font28"><?php echo $section_description; ?>
	 			</div>
	 			<?php if( have_rows('slide_ctas') ) : ?>
				<div class="button-wrap">
					<?php while ( have_rows('slide_ctas') ) : the_row(); ?>
						<?php 
							$link = get_sub_field('cta_item');
							if( $link ): 
							    $link_url = $link['url'];
							    $link_title = $link['title'];
							    $link_target = $link['target'] ? $link['target'] : '_self';
							    ?>
							<a href="<?php echo esc_url( $link_url ); ?>" class="button" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
							<?php endif; ?>
					<?php endwhile; ?>
				</div>
				<?php endif; ?>
				</div>
			</div>
 		</div>
 	<?php endwhile; ?>
	</div>
</section>

<?php endif; ?>
