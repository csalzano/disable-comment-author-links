<?php
/*
Plugin Name: Disable comment author links
Plugin URI: http://www.tacticaltechnique.com/wordpress/disable-comment-author-links/
Description: Removes home page links from comment author user names
Author: Corey Salzano
Email: coreysalzano@gmail.com
Version: 0.110826
Author URI: http://www.tacticaltechnique.com/
*/

	if( !function_exists("disable_comment_author_links")){
		function disable_comment_author_links( $author_link ){
			return strip_tags( $author_link );
		}
		add_filter( 'get_comment_author_link', 'disable_comment_author_links' );
	}

?>