<?php
/*
Plugin Name: Open Mention WordPress Dev as Block Patterns
Plugin URI: https://github.com/lordmatt/OpenMention.com-patterns-for-WordPress
Description: Adds patterns for OpenMention tagging of WordPress Dev and meta webmentions
Version: 1.0
Author: Matt
Author URI: https://openmentions.com/
License: GPL2
*/

function OT_OM_WPDev_block_pattern() {
    
    
    register_block_pattern_category( 'hashtags', array( 
        'label'       => __( 'Hash Tags (other)', 'OT_OM' ),
        'description' => __( 'Adds hashtags that rely on WebMention.', 'OT_OM' )
    ) );     
    
    register_block_pattern_category( 'webmention', array( 
        'label'       => __( 'WebMention', 'OT_OM' ),
        'description' => __( 'Content that uses WebMention.', 'OT_OM' )
    ) );         
    
    register_block_pattern_category( 'wordpressdev', array( 
        'label'       => __( 'WordPress Dev', 'OT_OM' )
    ) );       
    
    register_block_pattern_category( 'meta', array( 
        'label'       => __( 'Meta', 'OT_OM' )
    ) );    
    
    register_block_pattern( 
	'opentopic/ThisIsWPDev',
	array(
		'title'      => 'OpenMention: This is WordPress Development',
		'categories' => ['tags','text','webmention','wordpressdev'],
		'content'    => '<!-- wp:paragraph -->
<p>This is a <a href="https://openmentions.com/topics/code-and-development/wordpress-development/">WordPress Development</a> post.</p>
<!-- /wp:paragraph -->',
	)   
    );  
    
    register_block_pattern( 
	'opentopic/WPDevHashTag',
	array(
		'title'      => 'OpenMention: #WordPressDevelopment',
		'categories' => ['tags','text','webmention','wordpressdev'],
		'content'    => '<!-- wp:paragraph -->
<p><a href="https://openmentions.com/topics/code-and-development/wordpress-development/">#WordPressDevelopment</a></p>
<!-- /wp:paragraph -->',
	)   
    ); 
    
    register_block_pattern( 
	'opentopic/WPDevHashTagShort',
	array(
		'title'      => 'OpenMention: #WordPressDev',
		'categories' => ['tags','text','webmention','wordpressdev'],
		'content'    => '<!-- wp:paragraph -->
<p><a href="https://openmentions.com/topics/code-and-development/wordpress-development/">#WordPressDev</a></p>
<!-- /wp:paragraph -->',
	)   
    );   

    register_block_pattern( 
	'opentopic/ThisIsWPDevMeta',
	array(
		'title'      => 'OpenMention: This is WordPress Development',
		'categories' => ['tags','text','webmention','meta'],
		'content'    => '<!-- wp:paragraph -->
<p>This post is about the <a href="https://openmentions.com/topics/code-and-development/wordpress-development/meta-wordpress-development/">WordPress Development tag (meta)</a>.</p>
<!-- /wp:paragraph -->',
	)   
    );  
    
} 

add_action( 'init', 'OT_OM_WPDev_block_pattern' );
