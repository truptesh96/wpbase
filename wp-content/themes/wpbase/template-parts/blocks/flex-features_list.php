<?php 

$rowId = get_sub_field('row_id') ? get_sub_field('row_id') : 'row-'.get_row_index();
$copy_color_scheme = get_sub_field('copy_color_scheme');
$row_background_color = get_sub_field('row_background_color') ? get_sub_field('row_background_color') : 'transparent';
$background_image = get_sub_field('background_image');
$row_classes = get_sub_field('row_classes') ? get_sub_field('row_classes') : '';

$section_title = get_sub_field('section_title') ? get_sub_field('section_title') : '';
$section_title_tag = get_sub_field('section_title_tag') ? get_sub_field('section_title_tag') : 'h2';

    if(have_rows('features')):
?>

<section id="<?php echo $rowId; ?>" class="features <?php echo $background_image ? 'hasBg '.$row_classes.' '.$copy_color_scheme : $row_classes.' '.$copy_color_scheme; ?>" style="background-color: <?php echo $row_background_color; ?>">
        
    <?php if($background_image): ?>
		<div class="imgWrap bgImge">
			<?php echo wp_get_attachment_image($background_image, 'full'); ?>
		</div>
	<?php endif; ?>

    <div class="wrapper">
    <<?php echo $section_title_tag; ?> class="secHead" ><?php echo $section_title; ?></<?php echo $section_title_tag; ?>>

    <div class="dflex inWrap">
    <?php while(have_rows('features')): the_row();
        $icon = get_sub_field('icon');
		$title = get_sub_field('title');
		$description = get_sub_field('description');
	?>
    <article class="wid33 wid100">
        <div class="card">
            <?php if($icon): ?>
            <div class="imgWrap icon">
                <?php echo wp_get_attachment_image($icon, 'full'); ?>
            </div>
            <?php endif; ?>
            <h3 class="head font23"><?php echo $title; ?></h3>
            <div class="desc font26"><?php echo $description; ?></div>
        </div>
    </article>
 	<?php endwhile; ?>
    </div>

    </div>
    
</section>
<?php endif; ?>