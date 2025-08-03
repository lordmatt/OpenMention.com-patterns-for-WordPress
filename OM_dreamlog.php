<?php
/*
Plugin Name: Open Mention Dream Tags as Block Patters
Plugin URI: https://github.com/lordmatt/OpenMention.com-patterns-for-WordPress
Description: Adds patterns for OpenMention dream logging and meta webmentions
Version: 1.01
Author: Matt
Author URI: https://openmentions.com/
License: GPL2
*/



function OT_OM_dreamlog_block_pattern() {
    
    
    register_block_pattern_category( 'hashtags', array( 
        'label'       => __( 'Hash Tags (other)', 'OT_OM' ),
        'description' => __( 'Adds hashtags that rely on WebMention.', 'OT_OM' )
    ) );     
    
    register_block_pattern_category( 'webmention', array( 
        'label'       => __( 'WebMention', 'OT_OM' ),
        'description' => __( 'Content that uses WebMention.', 'OT_OM' )
    ) );         
    
    register_block_pattern_category( 'dreams', array( 
        'label'       => __( 'Dreams', 'OT_OM' )
    ) );       
    
    register_block_pattern_category( 'meta', array( 
        'label'       => __( 'Meta', 'OT_OM' )
    ) );    
    
    register_block_pattern( 
	'opentopic/dreamlog',
	array(
		'title'      => 'OpenMention: #dreamlog',
		'categories' => ['tags','text','webmention','dreams'],
		'content'    => '<!-- wp:paragraph -->
<p><a href="https://openmentions.com/topics/dream-log/">#DreamLog</a></p>
<!-- /wp:paragraph -->',
	)   
    );  
    
    register_block_pattern( 
	'opentopic/dreamlog',
	array(
		'title'      => 'Add this one to the Dream Log',
		'categories' => ['tags','text','webmention','dreams'],
		'content'    => '<!-- wp:paragraph {"align":"right"} -->
<p class="has-text-align-right"><em>Add this one to the <a href="https://openmentions.com/topics/dream-log/">Dream Log</a>.</em></p>
<!-- /wp:paragraph -->',
	)   
    );
     
    register_block_pattern( 
	'opentopic/dreamlogmeta',
	array(
		'title'      => 'OpenMention: #DreamLogMeta',
		'categories' => ['tags','text','meta','webmention'],
		'content'    => '<!-- wp:paragraph -->
<p><a href="https://openmentions.com/topics/dream-log/meta-dream-log/">#DreamLogMeta</a></p>
<!-- /wp:paragraph -->',
	)   
    ); 
    
    
   

} 

add_action( 'init', 'OT_OM_dreamlog_block_pattern' );


