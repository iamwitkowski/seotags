<?php

namespace seotags;

class admin
{

    function __construct()
    {
        add_action( 'admin_menu', array($this, 'addSeoTagsPage' ));

    }
    public function addSeoTagsPage()
    {
        add_menu_page(
            'SeoTags',
            'SEOtags',
            'administrator',
            __FILE__,
            'seoTagsSettingsPage',
            get_stylesheet_directory_uri('stylesheet_directory') . "/images/icon.png");
    }
}


