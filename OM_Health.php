<?php
/*
Plugin Name: Open Mention Health Tags as Block Patters
Plugin URI: https://github.com/lordmatt/OpenMention.com-patterns-for-WordPress
Description: Adds a pattern for tagging OpenTopic health tags
Version: 1.1
Author: Matt
Author URI: https://openmentions.com/
License: GPL2
*/



function OT_OM_health_block_pattern() {
    
    
    register_block_pattern_category( 'hashtags', array( 
        'label'       => __( 'Hash Tags (other)', 'OT_OM' ),
        'description' => __( 'Adds hashtags that rely on WebMention.', 'OT_OM' )
    ) );     
    
    register_block_pattern_category( 'webmention', array( 
        'label'       => __( 'WebMention', 'OT_OM' ),
        'description' => __( 'Content that uses WebMention.', 'OT_OM' )
    ) );    
    
    register_block_pattern_category( 'health', array( 
        'label'       => __( 'Health', 'OT_OM' ),
        'description' => __( 'Health related content.', 'OT_OM' )
    ) );     
    
    register_block_pattern_category( 'mentalhealth', array( 
        'label'       => __( 'Mental Health', 'OT_OM' ),
        'description' => __( 'Mental health related content.', 'OT_OM' )
    ) );       
    
    register_block_pattern_category( 'meta', array( 
        'label'       => __( 'Meta', 'OT_OM' )
    ) );    
    
    register_block_pattern( 
	'opentopic/healthtag',
	array(
		'title'      => 'OpenMention: #health',
		'categories' => ['tags','health','text','webmention'],
		'content'    => '<!-- wp:paragraph -->
<p><a href="https://openmentions.com/topics/health/">#Health</a></p>
<!-- /wp:paragraph -->',
	)   
    );
    
    register_block_pattern( 
	'opentopic/mentalhealthtag',
	array(
		'title'      => 'OpenMention: #MentalHealth',
		'categories' => ['tags','health','text','mental-health','webmention'],
		'content'    => '<!-- wp:paragraph -->
<p><a href="https://openmentions.com/topics/health/mental-health/">#MentalHealth</a></p>
<!-- /wp:paragraph -->',
	)   
    ); 
    
    
    register_block_pattern( 
	'opentopic/healthtagmeta',
	array(
		'title'      => 'OpenMention: Health meta',
		'categories' => ['tags','health','text','webmention','meta'],
		'content'    => '<!-- wp:paragraph -->
<p><a href="https://openmentions.com/topics/health/mental-health/">#MentalHealth</a></p>
<!-- /wp:paragraph -->',
	)   
    );    

} 
add_action( 'init', 'OT_OM_health_block_pattern' );



