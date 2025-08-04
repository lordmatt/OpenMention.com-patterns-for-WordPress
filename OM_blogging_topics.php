<?php
/*
Plugin Name: Blogging topics as Block Patterns
Plugin URI: https://github.com/lordmatt/OpenMention.com-patterns-for-WordPress
Description: A curated list of open ended questions to get your blogging juices flowing. Adds patterns for webmention targets that ask interesting questions. All patterns are found in the questions category. Grab one at random and see where it takes you.
Version: 1.00
Author: Matt
Author URI: https://openmentions.com/
License: GPL2
*/



function OT_OM_blog_n_journal_Qs_block_pattern() {
    
          
    
    register_block_pattern_category( 'questions', array( 
        'label'       => __( 'Blogging and Journaling Questions', 'OT_OM' )
    ) );    
    
    register_block_pattern( 
	'opentopic-qs/rss',
	array(
		'title'      => 'What RSS should we follow?',
		'categories' => ['questions'],
		'content'    => '<!-- wp:paragraph -->
<p>Open Mentions asked, <a href="https://openmentions.com/news/question-of-the-week/what-is-a-blog-or-rss-feed-you-think-more-people-should-subscribe-to/">What is a blog or RSS feed you think more people should subscribe to?</a></p>
<!-- /wp:paragraph -->',
	)   
    );     
    register_block_pattern( 
	'opentopic-qs/what-r-u-blogging',
	array(
		'title'      => 'What are you blogging now?',
		'categories' => ['questions'],
		'content'    => '<!-- wp:paragraph -->
<p>Shall We Talk asked, <a href="https://chat.authorbuzz.co.uk/general-chatter/what-are-you-blogging-now/">What are you blogging now?</a></p>
<!-- /wp:paragraph -->',
	)   
    );      
    register_block_pattern( 
	'opentopic-qs/your-slogan',
	array(
		'title'      => 'If you were a product, what would the marketing slogan for you be?',
		'categories' => ['questions'],
		'content'    => '<!-- wp:paragraph -->
<p>Open Mentions asked, <a href="https://openmentions.com/news/question-of-the-week/if-you-were-a-product-what-would-the-marketing-slogan-for-you-be/">If you were a product, what would the marketing slogan for you be?</a></p>
<!-- /wp:paragraph -->',
	)   
    );       
    register_block_pattern( 
	'opentopic-qs/praise-them',
	array(
		'title'      => 'Who deserves praise?',
		'categories' => ['questions'],
		'content'    => '<!-- wp:paragraph -->
<p>Shall We Talk asked, <a href="https://chat.authorbuzz.co.uk/general-chatter/who-in-your-life-deserves-praise/">Who in your life deserves praise?</a></p>
<!-- /wp:paragraph -->',
	)   
    );       
    register_block_pattern( 
	'opentopic-qs/what-from-life',
	array(
		'title'      => 'What do you want from life?',
		'categories' => ['questions'],
		'content'    => '<!-- wp:paragraph -->
<p>Shall We Talk asked, <a href="https://chat.authorbuzz.co.uk/general-chatter/what-do-you-want-from-life/">What do you want from life?</a></p>
<!-- /wp:paragraph -->',
	)   
    );       
    register_block_pattern( 
	'opentopic-qs/uplifting',
	array(
		'title'      => 'uplifting',
		'categories' => ['questions'],
		'content'    => '<!-- wp:paragraph -->
<p>Shall We Talk asked, <a href="https://chat.authorbuzz.co.uk/general-chatter/whats-an-uplifting-and-happy-fact/">What’s an uplifting and happy fact?</a></p>
<!-- /wp:paragraph -->',
	)   
    );        
    register_block_pattern( 
	'opentopic-qs/influences',
	array(
		'title'      => 'influences',
		'categories' => ['questions'],
		'content'    => '<!-- wp:paragraph -->
<p>Shall We Talk asked, <a href="https://chat.authorbuzz.co.uk/art/what-or-who-is-are-your-greatest-influences/">What or who is/are your greatest influences?</a></p>
<!-- /wp:paragraph -->',
	)   
    );  
         
    register_block_pattern( 
	'opentopic-qs/be-a-writer-op',
	array(
		'title'      => 'When are you a writer?',
		'categories' => ['questions'],
		'content'    => '<!-- wp:paragraph -->
<p>Shall We Talk asked, <a href="https://chat.authorbuzz.co.uk/general-chatter/when-should-you-consider-yourself-a-writer/">When should you consider yourself a writer?</a></p>
<!-- /wp:paragraph -->',
	)   
    );    
    register_block_pattern( 
	'opentopic-qs/what-the-world-needs',
	array(
		'title'      => 'What do you need more of?',
		'categories' => ['questions'],
		'content'    => '<!-- wp:paragraph -->
<p>Open Mentions asked, <a href="https://openmentions.com/news/question-of-the-week/what-does-the-world-need-more-of/">What does the world need more of?</a></p>
<!-- /wp:paragraph -->',
	)   
    );    
    register_block_pattern( 
	'opentopic-qs/r-u-mems',
	array(
		'title'      => 'Are you your memories?',
		'categories' => ['questions'],
		'content'    => '<!-- wp:paragraph -->
<p>The Endless Rooms asked, <a href="https://endless-rooms.isbrill.com/other/2025/04/are-you-your-memories/">Are you your memories? Is you minus your memories still you?</a></p>
<!-- /wp:paragraph -->',
	)   
    );     
    register_block_pattern( 
	'opentopic-qs/what-r-u-mems',
	array(
		'title'      => 'What is are memories?',
		'categories' => ['questions'],
		'content'    => '<!-- wp:paragraph -->
<p>Replying asked, <a href="https://replying.isbrill.com/getting-to-know-you/whats-your-earliest-memory/">What’s your earliest memory?</a></p>
<!-- /wp:paragraph -->',
	)   
    );   
    register_block_pattern( 
	'opentopic-qs/guilty-pleasures',
	array(
		'title'      => 'Guilty pleasures',
		'categories' => ['questions'],
		'content'    => '<!-- wp:paragraph -->
<p>Replying asked, <a href="https://replying.isbrill.com/getting-to-know-you/whats-your-guilty-pleasure/">What’s your guilty pleasure?</a></p>
<!-- /wp:paragraph -->',
	)   
    );    
    register_block_pattern( 
	'opentopic-qs/chaotic-page-james',
	array(
		'title'      => 'What is the most chaotic page on your website?',
		'categories' => ['questions'],
		'content'    => '<!-- wp:paragraph -->
<p>James asked, <a href="https://jamesg.blog/2025/06/05/chaotic-websites/">What is the most chaotic page on your website?</a></p>
<!-- /wp:paragraph -->',
	)   
    );  
    register_block_pattern( 
	'opentopic-qs/want-web-james',
	array(
		'title'      => 'What do you want for the web?',
		'categories' => ['questions'],
		'content'    => '<!-- wp:paragraph -->
<p>James asked, <a href="https://jamesg.blog/2024/11/24/what-do-you-want-for-the-web/">What do you want for the web?</a></p>
<!-- /wp:paragraph -->',
	)   
    );  
    register_block_pattern( 
	'opentopic-qs/hate',
	array(
		'title'      => 'Hate',
		'categories' => ['questions'],
		'content'    => '<!-- wp:paragraph -->
<p>Replying asked, <a href="https://replying.isbrill.com/getting-to-know-you/what-do-you-hate/">What do you hate?</a></p>
<!-- /wp:paragraph -->',
	)   
    );  
    register_block_pattern( 
	'opentopic-qs/money-q',
	array(
		'title'      => 'Money',
		'categories' => ['questions'],
		'content'    => '<!-- wp:paragraph -->
<p>Open Mentions asked, <a href="https://openmentions.com/news/question-of-the-week/if-i-gave-you-200-how-would-you-turn-it-into-300/">If I gave you £200 how would you turn it into £300?</a></p>
<!-- /wp:paragraph -->',
	)   
    );  
    register_block_pattern( 
	'opentopic-qs/dogma-q',
	array(
		'title'      => 'What is the dogma of today that you are challenging?',
		'categories' => ['questions'],
		'content'    => '<!-- wp:paragraph -->
<p>Heresy asked, <a href="https://heresy.isbrill.com/heresy-prompts/what-is-the-dogma-of-today-that-you-are-challenging/">What is the dogma of today that you are challenging?</a></p>
<!-- /wp:paragraph -->',
	)   
    );    
    register_block_pattern( 
	'opentopic-qs/super-power',
	array(
		'title'      => 'Your super power',
		'categories' => ['questions'],
		'content'    => '<!-- wp:paragraph -->
<p>Open Mentions asked, <a href="https://openmentions.com/news/question-of-the-week/what-is-your-superpower/">What is your superpower?</a></p>
<!-- /wp:paragraph -->',
	)   
    );    
    register_block_pattern( 
	'opentopic-qs/favourate-obscure-movie',
	array(
		'title'      => 'your favourate obscure movie',
		'categories' => ['questions'],
		'content'    => '<!-- wp:paragraph -->
<p>Open Mentions asked, <a href="https://openmentions.com/news/question-of-the-week/whats-your-favourate-obscure-movie/">What’s your favourate obscure movie?</a></p>
<!-- /wp:paragraph -->',
	)   
    );  
    register_block_pattern( 
	'opentopic-qs/world-needs-more',
	array(
		'title'      => 'What does the world need more of?',
		'categories' => ['questions'],
		'content'    => '<!-- wp:paragraph -->
<p>Open Mentions asked, <a href="https://openmentions.com/news/question-of-the-week/what-does-the-world-need-more-of/">What does the world need more of?</a></p>
<!-- /wp:paragraph -->',
	)   
    );  

    register_block_pattern( 
	'opentopic-qs/stressnomore',
	array(
		'title'      => 'stress',
		'categories' => ['questions'],
		'content'    => '<!-- wp:paragraph -->
<p>Open Mentions asked, <a href="https://openmentions.com/news/question-of-the-week/how-do-you-recognize-when-you-are-stressed/">How do you recognize when you are stressed?</a></p>
<!-- /wp:paragraph -->',
	)   
    );   

    register_block_pattern( 
	'opentopic-qs/change-world',
	array(
		'title'      => 'Change the world',
		'categories' => ['questions'],
		'content'    => '<!-- wp:paragraph -->
<p>Open Mentions asked, <a href="https://openmentions.com/news/question-of-the-week/what-are-your-ideas-to-change-the-world/">What are your ideas to change the world?</a></p>
<!-- /wp:paragraph -->',
	)   
    );  

    register_block_pattern( 
	'opentopic-qs/succeeded-wild',
	array(
		'title'      => '>What’s something that succeeded beyond your wildest dreams?',
		'categories' => ['questions'],
		'content'    => '<!-- wp:paragraph -->
<p>Open Mentions asked, <a href="https://openmentions.com/news/question-of-the-week/whats-something-that-succeeded-beyond-your-wildest-dreams/">What’s something that succeeded beyond your wildest dreams?</a></p>
<!-- /wp:paragraph -->',
	)   
    );  

    register_block_pattern( 
	'opentopic-qs/til',
	array(
		'title'      => 'Today I Learned That...',
		'categories' => ['questions'],
		'content'    => '<!-- wp:paragraph -->
<p>Open Mentions asked, <a href="https://openmentions.com/news/question-of-the-week/what-did-you-learn-today/">What did you learn today?</a></p>
<!-- /wp:paragraph -->',
	)   
    );    

    register_block_pattern( 
	'opentopic-qs/few-know-this',
	array(
		'title'      => 'What is something few people know about you?',
		'categories' => ['questions'],
		'content'    => '<!-- wp:paragraph -->
<p>Open Mentions asked, <a href="https://openmentions.com/news/question-of-the-week/what-is-something-few-people-know-about-you/">What is something few people know about you?</a></p>
<!-- /wp:paragraph -->',
	)   
    );    

    register_block_pattern( 
	'opentopic-qs/uselss-skill-of-mine',
	array(
		'title'      => 'What is the most useless talent you possess?',
		'categories' => ['questions'],
		'content'    => '<!-- wp:paragraph -->
<p>Open Mentions asked, <a href="https://openmentions.com/news/question-of-the-week/what-is-the-most-useless-talent-you-possess/">What is the most useless talent you possess?</a></p>
<!-- /wp:paragraph -->',
	)   
    );     

    register_block_pattern( 
	'opentopic-qs/lieslieslies',
	array(
		'title'      => 'What’s the smallest lie you told with the biggest consequences?',
		'categories' => ['questions'],
		'content'    => '<!-- wp:paragraph -->
<p>Open Mentions asked, <a href="https://openmentions.com/news/question-of-the-week/whats-the-smallest-lie-you-told-with-the-biggest-consequences/">What’s the smallest lie you told with the biggest consequences?</a></p>
<!-- /wp:paragraph -->',
	)   
    );    

    register_block_pattern( 
	'opentopic-qs/dreamdreamdream',
	array(
		'title'      => 'Tell us about a dream you had',
		'categories' => ['questions'],
		'content'    => '<!-- wp:paragraph -->
<p>Tell us about a dream you had. File it under <a href="https://openmentions.com/topics/dream-log/">#DreamLog</a></p>
<!-- /wp:paragraph -->',
	)   
    );     

    register_block_pattern( 
	'opentopic-qs/jam-ur',
	array(
		'title'      => 'What’s your jam?',
		'categories' => ['questions'],
		'content'    => '<!-- wp:paragraph -->
<p>Open Mentions asked, <a href="https://openmentions.com/news/question-of-the-week/whats-your-jam/">What’s your jam?</a></p>
<!-- /wp:paragraph -->',
	)   
    );    

    register_block_pattern( 
	'opentopic-qs/projects-ur-on-now',
	array(
		'title'      => 'What project(s) are you working on right now?',
		'categories' => ['questions'],
		'content'    => '<!-- wp:paragraph -->
<p>Open Mentions asked, <a href="https://openmentions.com/news/question-of-the-week/what-projects-are-you-working-on-right-now/">What project(s) are you working on right now?</a></p>
<!-- /wp:paragraph -->',
	)   
    );    

    register_block_pattern( 
	'opentopic-qs/your-domain-name',
	array(
		'title'      => 'What’s the story of your domain name?',
		'categories' => ['questions'],
		'content'    => '<!-- wp:paragraph -->
<p>Open Mentions asked, <a href="https://openmentions.com/news/question-of-the-week/whats-the-story-of-your-domain-name/">What’s the story of your domain name?</a></p>
<!-- /wp:paragraph -->',
	)   
    );    

    register_block_pattern( 
	'opentopic-qs/your-no-look-food',
	array(
		'title'      => 'What food tastes better than it looks?',
		'categories' => ['questions'],
		'content'    => '<!-- wp:paragraph -->
<p>Open Mentions asked, <a href="https://openmentions.com/news/question-of-the-week/what-food-tastes-better-than-it-looks/">What food tastes better than it looks?</a></p>
<!-- /wp:paragraph -->',
	)   
    );  

    register_block_pattern( 
	'opentopic-qs/life-winner',
	array(
		'title'      => 'What does it mean to win at life?',
		'categories' => ['questions'],
		'content'    => '<!-- wp:paragraph -->
<p>Question: <a href="https://openmentions.com/news/question-of-the-week/what-does-it-mean-to-win-at-life/">What does it mean to win at life?</a></p>
<!-- /wp:paragraph -->',
	)   
    );   

    register_block_pattern( 
	'opentopic-qs/life-odd',
	array(
		'title'      => 'What is something that you still cannot explain?',
		'categories' => ['questions'],
		'content'    => '<!-- wp:paragraph -->
<p>Open Mentions asked, <a href="https://openmentions.com/news/question-of-the-week/what-is-something-that-you-still-cannot-explain/">What is something that you still cannot explain?</a></p>
<!-- /wp:paragraph -->',
	)   
    );   

    register_block_pattern( 
	'opentopic-qs/life-loophole',
	array(
		'title'      => 'What loophole did you abuse?',
		'categories' => ['questions'],
		'content'    => '<!-- wp:paragraph -->
<p>Open Mentions asked, <a href="https://openmentions.com/news/question-of-the-week/what-loophole-did-you-abuse/">What loophole did you abuse?</a></p>
<!-- /wp:paragraph -->',
	)   
    );    

    register_block_pattern( 
	'opentopic-qs/life-success',
	array(
		'title'      => 'What does success mean to you?',
		'categories' => ['questions'],
		'content'    => '<!-- wp:paragraph -->
<p>Open Mentions asked, <a href="https://openmentions.com/news/question-of-the-week/what-does-success-mean-to-you/">What does success mean to you?</a></p>
<!-- /wp:paragraph -->',
	)   
    );     

    register_block_pattern( 
	'opentopic-qs/life-fear',
	array(
		'title'      => 'What scares you?',
		'categories' => ['questions'],
		'content'    => '<!-- wp:paragraph -->
<p>Open Mentions asked, <a href="https://openmentions.com/news/question-of-the-week/what-scares-you/">What scares you?</a></p>
<!-- /wp:paragraph -->',
	)   
    );       

    register_block_pattern( 
	'opentopic-qs/life-authentic',
	array(
		'title'      => 'What does it mean to be authentic?',
		'categories' => ['questions'],
		'content'    => '<!-- wp:paragraph -->
<p>Open Mentions asked, <a href="https://openmentions.com/news/question-of-the-week/what-does-it-mean-to-be-authentic/">What does it mean to be authentic?</a></p>
<!-- /wp:paragraph -->',
	)   
    );   
    
    
   

} 

add_action( 'init', 'OT_OM_blog_n_journal_Qs_block_pattern' );

