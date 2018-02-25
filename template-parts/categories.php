<?php

    hierarchical_category_tree( 0 ); // the function call; 0 for all categories; or cat ID  

    function hierarchical_category_tree( $cat ) {
            // wpse-41548 // alchymyth // a hierarchical list of all categories //

        $next = get_categories('hide_empty=false&orderby=name&order=ASC&parent=' . $cat);

        if( $next ) :    
            foreach( $next as $cat ) :
            echo '<ul><li>';
            echo ' <a href="' . get_category_link( $cat->term_id ) . '" title="' . sprintf( __( "View all posts in %s" ), $cat->name ) . '" ' . '>'. $cat->name .' </a>  '; 
            hierarchical_category_tree( $cat->term_id );
            endforeach;    
        endif;

        echo '</li></ul>'; echo "\n";
    }

?>