<?php

    if( have_rows('flex_content') ){

        

        while ( have_rows('flex_content') ) : the_row();
        get_template_part("template-parts/blocks/flex","settings");
        	if(get_sub_field('row_visibility')) {
        		get_template_part( 'template-parts/blocks/flex', get_row_layout());
        	}

            
        endwhile;
    }
?>