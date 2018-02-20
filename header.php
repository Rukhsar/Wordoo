<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="description" content="<?php bloginfo( 'description' ); ?>">
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <meta name="author" content="<?php the_author_meta('display_name', 1); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <?php if ( is_singular() ) wp_enqueue_script( "comment-reply" ); ?>
    <!--    Favicon     -->
    <!--    Touch Log     -->
    <?php wp_head(); ?>
</head>
<body>

