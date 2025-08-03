<?php
/*
Plugin Name: Open Mention Writer Tags as Block Patterns
Plugin URI: https://github.com/lordmatt/OpenMention.com-patterns-for-WordPress
Description: Adds patterns for OpenMention writer, author, and book webmentions
Version: 1.0
Author: Matt
Author URI: https://openmentions.com/
License: GPL2
*/



function OT_OM_writers_block_pattern() {
    
    
    register_block_pattern_category( 'hashtags', array( 
        'label'       => __( 'Hash Tags (other)', 'OT_OM' ),
        'description' => __( 'Adds hashtags that rely on WebMention.', 'OT_OM' )
    ) );     
    
    register_block_pattern_category( 'webmention', array( 
        'label'       => __( 'WebMention', 'OT_OM' ),
        'description' => __( 'Content that uses WebMention.', 'OT_OM' )
    ) );         
    
    register_block_pattern_category( 'writers_and_writing', array( 
        'label'       => __( 'Writers and Writing', 'OT_OM' )
    ) );          
    
    register_block_pattern_category( 'books', array( 
        'label'       => __( 'Books', 'OT_OM' )
    ) );             
    
    register_block_pattern_category( 'authors', array( 
        'label'       => __( 'Authors', 'OT_OM' )
    ) );             
    
    register_block_pattern_category( 'ideas', array( 
        'label'       => __( 'Ideas', 'OT_OM' )
    ) );         
    
    register_block_pattern( 
	'opentopic/BookReviews',
	array(
		'title'      => 'OpenMention: #BookReviews',
		'categories' => ['tags','text','webmention','books'],
		'content'    => '<!-- wp:paragraph -->
<p><a href="https://openmentions.com/topics/art-and-literature/books-and-reading/book-reviews/">#BookReviews</a></p>
<!-- /wp:paragraph -->',
	)   
    );  
    
    register_block_pattern( 
	'opentopic/Poetry',
	array(
		'title'      => 'OpenMention: #Poetry',
		'categories' => ['tags','text','webmention','writers_and_writing'],
		'content'    => '<!-- wp:paragraph -->
<p><a href="https://openmentions.com/topics/art-and-literature/poetry/">#Poetry</a></p>
<!-- /wp:paragraph -->',
	)   
    );    
    
    register_block_pattern( 
	'opentopic/Agents',
	array(
		'title'      => 'OpenMention: #Agents',
		'categories' => ['tags','text','webmention','books','authors'],
		'content'    => '<!-- wp:paragraph -->
<p><a href="https://openmentions.com/topics/art-and-literature/books-and-reading/writing-and-authorship/agents/">#Agents</a></p>
<!-- /wp:paragraph -->',
	)   
    );      
    
    register_block_pattern( 
	'opentopic/AuthorPlatforms',
	array(
		'title'      => 'OpenMention: #AuthorPlatforms',
		'categories' => ['tags','text','webmention','authors'],
		'content'    => '<!-- wp:paragraph -->
<p><a href="https://openmentions.com/topics/art-and-literature/books-and-reading/writing-and-authorship/author-platforms/">#AuthorPlatforms</a> <a href="https://authorplatforms.authorbuzz.co.uk/2022/04/29/this-blog-should-be-the-author-platforms-directory-host/">#AuthorPlatformsGuide</a></p>
<!-- /wp:paragraph -->',
	)   
    );       
    
       
    register_block_pattern( 
	'opentopic/BetaReading',
	array(
		'title'      => 'OpenMention: #BetaReading',
		'categories' => ['tags','text','webmention','books','authors'],
		'content'    => '<!-- wp:paragraph -->
<p><a href="https://openmentions.com/topics/art-and-literature/books-and-reading/writing-and-authorship/beta-reading/">#BetaReading</a></p>
<!-- /wp:paragraph -->',
	)   
    );     
    
       
    register_block_pattern( 
	'opentopic/CreativeWriting',
	array(
		'title'      => 'OpenMention: #CreativeWriting',
		'categories' => ['tags','text','webmention','writers_and_writing'],
		'content'    => '<!-- wp:paragraph -->
<p><a href="https://openmentions.com/topics/art-and-literature/books-and-reading/writing-and-authorship/creative-writing/">#CreativeWriting</a></p>
<!-- /wp:paragraph -->',
	)   
    );  
         
    register_block_pattern( 
	'opentopic/StoryTelling',
	array(
		'title'      => 'OpenMention: #StoryTelling',
		'categories' => ['tags','text','webmention','writers_and_writing'],
		'content'    => '<!-- wp:paragraph -->
<p><a href="https://openmentions.com/topics/art-and-literature/books-and-reading/writing-and-authorship/story-telling/">#StoryTelling</a></p>
<!-- /wp:paragraph -->',
	)   
    );  
         
    register_block_pattern( 
	'opentopic/WritingPrompt',
	array(
		'title'      => 'OpenMention: #WritingPrompt',
		'categories' => ['tags','text','webmention','writers_and_writing','ideas'],
		'content'    => '<!-- wp:paragraph -->
<p><a href="https://openmentions.com/topics/art-and-literature/writing/writing-prompts/">#WritingPrompt</a></p>
<!-- /wp:paragraph -->',
	)   
    );   
         
    register_block_pattern( 
	'opentopic/Writers',
	array(
		'title'      => 'OpenMention: #Writers',
		'categories' => ['tags','text','webmention','writers_and_writing'],
		'content'    => '<!-- wp:paragraph -->
<p><a href="https://openmentions.com/topics/art-and-literature/writing/writers/">#Writers</a></p>
<!-- /wp:paragraph -->',
	)   
    );  
         
    register_block_pattern( 
	'opentopic/Writing',
	array(
		'title'      => 'OpenMention: #Writing',
		'categories' => ['tags','text','webmention','writers_and_writing'],
		'content'    => '<!-- wp:paragraph -->
<p><a href="https://openmentions.com/topics/art-and-literature/writing/">#Writing</a></p>
<!-- /wp:paragraph -->',
	)   
    );  
   

} 

add_action( 'init', 'OT_OM_writers_block_pattern' );

