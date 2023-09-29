<?php 

$rowId = get_sub_field('row_id') ? get_sub_field('row_id') : 'row-'.get_row_index();
$copy_color_scheme = get_sub_field('copy_color_scheme');
$row_background_color = get_sub_field('row_background_color') ? get_sub_field('row_background_color') : 'transparent';
$background_image = get_sub_field('background_image');
$row_classes = get_sub_field('row_classes') ? get_sub_field('row_classes') : '';

$section_title = get_sub_field('section_title') ? get_sub_field('section_title') : '';
$section_title_tag = get_sub_field('section_title_tag') ? get_sub_field('section_title_tag') : 'h2';

    if(have_rows('faqs_list')):
?>

<section id="<?php echo $rowId; ?>" class="faqList <?php echo $background_image ? 'hasBg '.$row_classes.' '.$copy_color_scheme : $row_classes.' '.$copy_color_scheme; ?>" style="background-color: <?php echo $row_background_color; ?>">
	
    <?php if($background_image): ?>
		<div class="imgWrap bgImge">
			<?php echo wp_get_attachment_image($background_image, 'full'); ?>
		</div>
	<?php endif; ?>

    <div class="wrapper">
    <<?php echo $section_title_tag; ?> class="secHead" ><?php echo $section_title; ?></<?php echo $section_title_tag; ?>>
    <?php while(have_rows('faqs_list')): the_row(); 
		$faq_title = get_sub_field('faq_title');
		$answer_description = get_sub_field('answer_description');
	?>
    <div class="faqItem">
        <h3 class="question"><?php echo $faq_title; ?><i class="plusIcon"></i></h3>
        <div class="wysingCont answerCont"><?php echo $answer_description; ?></div>
    </div>
 	<?php endwhile; ?>
    </div>
    
</section>
<?php endif; ?>