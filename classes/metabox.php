<?php

namespace seotags;

class metabox
{
    public function __construct()
    {
        add_action( 'add_meta_boxes', array($this, 'addSeoTagsMetabox' ) );
        add_action( 'save_post', array($this, 'saveMetaDescription') );

    }

    function addSeoTagsMetabox()
    {
        add_meta_box('STMetabox', 'SEO Tags', 'SEOTagsMetaboxCallback', null);
    }

    function saveMetaDescription( $post_id ) {
        if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
        if ( $parent_id = wp_is_post_revision( $post_id ) ) {
            $post_id = $parent_id;
        }
        $fields = [
            'metadesc',
        ];
        foreach ( $fields as $field ) {
            if ( array_key_exists( $field, $_POST ) ) {
                update_post_meta( $post_id, $field, sanitize_text_field( $_POST[$field] ) );
            }
        }
    }
}

