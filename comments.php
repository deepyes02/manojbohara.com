<?php
/**
 * The template for displaying Comments.
 *
 * The area of the page that contains comments and the comment form.
 *
 * @package WordPress
 * @subpackage MojPhotography
 * @since MojPhotography 1.0
 */
 
/*
 * If the current post is protected by a password and the visitor has not yet
 * entered the password we will return early without loading the comments.
 */
?>
  <div id="comments" class="comments-area">
 
  <?php if ( have_comments() ) : ?>
      <h2 class="comments-title">
          <?php
              printf( _nx( 'One thought on "%2$s"', '%1$s thoughts on "%2$s"', get_comments_number(), 'comments title', 'twentythirteen' ),
                  number_format_i18n( get_comments_number() ), '<span>' . get_the_title() . '</span>' );
          ?>
      </h2>

      <ol class="comment-list">
          <?php
              wp_list_comments( array(
                  'style'       => 'ol',
                  'short_ping'  => true,
                  'avatar_size' => 74,
              ) );
          ?>
      </ol><!-- .comment-list -->

      <?php
          // Are there comments to navigate through?
          if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) :
      ?>
      <nav class="navigation comment-navigation" role="navigation">
          <h1 class="screen-reader-text section-heading"><?php _e( 'Comment navigation', 'MojPhotography' ); ?></h1>
          <div class="nav-previous"><?php previous_comments_link( __( '&amp;larr; Older Comments', 'MojPhotography' ) ); ?></div>
          <div class="nav-next"><?php next_comments_link( __( 'Newer Comments &amp;rarr;', 'MojPhotography' ) ); ?></div>
      </nav><!-- .comment-navigation -->
      <?php endif; // Check for comment navigation ?>

      <?php if ( ! comments_open() && get_comments_number() ) : ?>
      <p class="no-comments"><?php _e( 'Comments are closed.' , 'MojPhotography' ); ?></p>
      <?php endif; ?>

  <?php endif; ?>

  <?php 
  $comments_args = array (
        'title_reply'   =>    __('Write a Reply or Comment', 'textdomain'),
        'label_submit'  => __('Send', 'textdomain'),
        'comment_field' => '<p><label for="comment_checkbox">I am not a robot</label><input type="checkbox" name="comment_checkbox" required/></p><p class="comment-form-comment"><label for="comment">' . _x( 'Comment', 'noun' ) . '</label><br /><textarea id="comment" name="comment" aria-required="true"></textarea></p>'
  );
  comment_form($comments_args); ?>

</div><!-- #comments -->