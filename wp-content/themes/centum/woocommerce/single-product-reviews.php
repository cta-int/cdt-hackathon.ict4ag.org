<?php
/**
 * Display single product reviews (comments)
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 * @modified    purethemes
 */
global $woocommerce;
?>
<?php if ( comments_open() ) : ?><div id="reviews"><?php

	echo '<div id="comments">';

	$count = $wpdb->get_var("
		SELECT COUNT(meta_value) FROM $wpdb->commentmeta
		LEFT JOIN $wpdb->comments ON $wpdb->commentmeta.comment_id = $wpdb->comments.comment_ID
		WHERE meta_key = 'rating'
		AND comment_post_ID = $post->ID
		AND comment_approved = '1'
		AND meta_value > 0
	");

	$rating = $wpdb->get_var("
		SELECT SUM(meta_value) FROM $wpdb->commentmeta
		LEFT JOIN $wpdb->comments ON $wpdb->commentmeta.comment_id = $wpdb->comments.comment_ID
		WHERE meta_key = 'rating'
		AND comment_post_ID = $post->ID
		AND comment_approved = '1'
	");

	if ( $count > 0 ) :

		$average = number_format($rating / $count, 2);

		echo '<div itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating">';

		echo '<div style="margin-top:10px" class="star-rating" title="'.sprintf(__('Rated %s out of 5', 'woocommerce'), $average).'"><span style="width:'.($average*16).'px"><span itemprop="ratingValue" class="rating">'.$average.'</span> '.__('out of 5', 'woocommerce').'</span></div>';

		echo '<h3 class="margin-down">'.sprintf( _n('%s review for %s', '%s reviews for %s', $count, 'woocommerce'), '<b itemprop="ratingCount" class="count">'.$count.'</b>', wptexturize($post->post_title) ).'</h3>';

		echo '</div>';

	else :

		echo '<h3>'.__('Reviews', 'woocommerce').'</h3>';

	endif;

	$title_reply = '';

	if ( have_comments() ) :

		echo '<ol class="commentlist">';

		wp_list_comments( array( 'callback' => 'woocommerce_comments' ) );

		echo '</ol><div class="clearfix"></div>';

		if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
			<div class="navigation">
				<div class="nav-previous"><?php previous_comments_link( __( '<span class="meta-nav">&larr;</span> Previous', 'woocommerce' ) ); ?></div>
				<div class="nav-next"><?php next_comments_link( __( 'Next <span class="meta-nav">&rarr;</span>', 'woocommerce' ) ); ?></div>
			</div>
		<?php endif;

		echo '<p class="add_review"><a href="#review_form" class="inline show_review_form button color">'.__('Add Review', 'woocommerce').'</a></p>';

		$title_reply = __('Add a review', 'woocommerce');

	else :

		$title_reply = __('Be the first to review', 'woocommerce').' &ldquo;'.$post->post_title.'&rdquo;';

		echo '<p>'.__('There are no reviews yet, would you like to <a href="#review_form" class="inline show_review_form">submit yours</a>?', 'woocommerce').'</p>';

	endif;

	$commenter = wp_get_current_commenter();

	echo '</div>
<div class="line"></div>
	<div id="review_form_wrapper"><div id="review_form">';

	$comment_form = array(
		'title_reply' => $title_reply
	);

	if ( get_option('woocommerce_enable_review_rating') == 'yes' ) {

		$comment_form['comment_field'] = '<p class="comment-form-rating"><label for="rating">' . __('Rating', 'woocommerce') .'</label><select name="rating" id="rating">
			<option value="">'.__('Rate&hellip;', 'woocommerce').'</option>
			<option value="5">'.__('Perfect', 'woocommerce').'</option>
			<option value="4">'.__('Good', 'woocommerce').'</option>
			<option value="3">'.__('Average', 'woocommerce').'</option>
			<option value="2">'.__('Not that bad', 'woocommerce').'</option>
			<option value="1">'.__('Very Poor', 'woocommerce').'</option>
		</select></p>';

	}

	$comment_form['comment_field'] .= '<p class="comment-form-comment"><label for="comment">' . __( 'Your Review', 'woocommerce' ) . '</label><textarea id="comment" name="comment" cols="45" rows="8" aria-required="true"></textarea></p>' . $woocommerce->nonce_field('comment_rating', true, false);

	comment_form( $comment_form );

	echo '</div></div>';

?><div class="clear"></div></div>
<?php endif; ?>