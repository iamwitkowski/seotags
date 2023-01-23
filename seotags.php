<?php

/*
Plugin Name: Seotags
Plugin URI: http://mateuszwitkowski.pl
Description: Simple plugin adding tags as meta keywords and your custom meta description
Version: 1.0
Author: mateuszwitkowski
Author URI: https://mateuszwitkowski.pl
License: A "Slug" license name e.g. GPL2
*/

require_once ('config.php');

include ('classes/admin.php');
include ('classes/metabox.php');
include ('classes/seotags.php');


use seotags\admin;
use seotags\metabox;
use seotags\seotags;


$admin = new admin();
$metabox = new metabox();
$seotags = new seotags();

function seoTagsSettingsPage()
{
    include plugin_dir_path( __FILE__ ) . './templates/hello.php';
}

function SEOTagsMetaboxCallback( $post )
{
    include plugin_dir_path( __FILE__ ) . './templates/form.php';
}

