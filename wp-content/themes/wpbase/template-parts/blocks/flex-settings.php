<?php 

	$rowId = get_sub_field('row_id') ? get_sub_field('row_id') : 'row-'.get_row_index();
	$copy_color_scheme = get_sub_field('copy_color_scheme');
	$row_background_color = get_sub_field('row_background_color') ? get_sub_field('row_background_color') : 'transparent';
	$row_classes = get_sub_field('row_classes') ? get_sub_field('row_classes') : '';

	if(get_sub_field('row_custom_padding')) {
	
	$dektopPaddingTopDefault = 110; $tabletPaddingTopDefault = 90; $mobilePaddingTopDefault = 40;
	$dektopPaddingBottomDefault = 110; $tabletPaddingBottomDefault = 90; $mobilePaddingBottomDefault = 40;

	$section_padding_top_desktop = ( get_sub_field('row_section_padding_top_desktop') || get_sub_field('row_section_padding_top_desktop') == 0 ) ? get_sub_field('row_section_padding_top_desktop') : $dektopPaddingTopDefault;
	$section_padding_top_tablet = (get_sub_field('row_section_padding_top_tablet') || get_sub_field('row_section_padding_top_tablet') == 0) ? get_sub_field('row_section_padding_top_tablet') : $tabletPaddingTopDefault;
	$section_padding_top_mobile = (get_sub_field('row_section_padding_top_mobile') || get_sub_field('row_section_padding_top_mobile') == 0) ? get_sub_field('row_section_padding_top_mobile') :  $mobilePaddingTopDefault;
	$section_padding_bottom_desktop = (get_sub_field('row_section_padding_bottom_desktop') || get_sub_field('row_section_padding_bottom_desktop') == 0) ? get_sub_field('row_section_padding_bottom_desktop') : $dektopPaddingBottomDefault;
	$section_padding_bottom_tablet = (get_sub_field('row_section_padding_bottom_tablet') || get_sub_field('row_section_padding_bottom_tablet') == 0) ? get_sub_field('row_section_padding_bottom_tablet') : $tabletPaddingBottomDefault;
	$section_padding_bottom_mobile = (get_sub_field('row_section_padding_bottom_mobile') || get_sub_field('row_section_padding_bottom_mobile') == 0) ? get_sub_field('row_section_padding_bottom_mobile') : $mobilePaddingBottomDefault;	 
?>
 
<style>

#<?php echo $rowId; ?> {
	padding-top: calc( (100% * <?php echo $section_padding_top_desktop; ?>)/320);
	padding-bottom: calc( (100% * <?php echo $section_padding_bottom_mobile; ?>)/320); 
}

@media (min-width: 768px) {
	#<?php echo $rowId; ?> { 
		padding-top: calc( (100% * <?php echo $section_padding_top_tablet; ?>)/768);
		padding-bottom: calc( (100% * <?php echo $section_padding_bottom_tablet; ?>)/768);	
	} 
}

@media (min-width: 1200px) {

	#<?php echo $rowId; ?> {
		padding-top: calc( (100% * <?php echo $section_padding_top_desktop; ?>)/1200);
		padding-bottom: calc( (100% * <?php echo $section_padding_bottom_desktop; ?>)/1200);
	} 
}


@media (min-width: 1366px) {

	#<?php echo $rowId; ?> {
		padding-top: calc( (100% * <?php echo $section_padding_top_desktop; ?>)/1366);
		padding-bottom: calc( (100% * <?php echo $section_padding_bottom_desktop; ?>)/1366);
	} 
}

@media (min-width: 1800px) {

	#<?php echo $rowId; ?> {
		padding-top: calc( (100% * <?php echo $section_padding_top_desktop; ?>)/1920);
		padding-bottom: calc( (100% * <?php echo $section_padding_bottom_desktop; ?>)/1920);
	} 
}

</style>

<?php } ?>