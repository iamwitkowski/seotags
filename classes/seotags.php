<?php

namespace seotags;

class seotags
{
    public function __construct()
    {
        add_action( 'wp_head', array($this, 'addSeoTagsToPages'));
    }

    function addSeoTagsToPages()
    {
        global $post;
        $keywords = get_the_tags($post);
        $tags = array();
        $description = get_post_meta($post->ID, 'metadescription', true);


        foreach($keywords as $keyword) {
            $tags[] = $keyword->name.' ';
        }
        if ( is_singular() ) {
            echo '<meta name="description" content="'.$description.'" />' . "\n";
            echo '<meta name="keywords" content="'.implode($tags).'" />';
        }
        if ( is_home() ) {
            echo '<meta name="description" content="' . get_bloginfo( "description" ) . '" />' . "\n";
        }
        if ( is_category() ) {
            $des_cat = strip_tags(category_description());
            echo '<meta name="description" content="' . $des_cat . '" />' . "\n";
        }
    }
}