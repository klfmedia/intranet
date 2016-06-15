<?php
/**
 * The template for displaying question archive pages
 *
 * @package DW Question & Answer
 * @since DW Question & Answer 1.4.3
 */
?>
<div class="dwqa-questions-archive">
<!-- WE COMMENT OUT THE NEXT LINE TO REMOVE THE SEARCH BAR AND THE FILTER FROM THE HOMEPAGE QUESTIONS BOX -->
	<?php // do_action( 'dwqa_before_questions_archive' ) ?>

		<div class="dwqa-questions-list">
		<?php do_action( 'dwqa_before_questions_list' ) ?>
		<?php if ( dwqa_has_question() ) : ?>
			<?php while ( dwqa_has_question() ) : dwqa_the_question(); ?>
		<!-- WE ADD THE STATUS VARIABLE AND ASSIGN THE CURRENT QUESTION STATUS -->				
				<?php $status = get_post_meta( get_the_ID(), '_dwqa_status', true ); ?>
		<!-- WE COMPARE IF THE QUESTION'S STATUS IS OTHER THAN RESOLVED or CLOSED TO ShOW IT -->				
				<?php if ( $status != 'resolved' && $status != 'close' && (get_post_status() == 'publish' || ( get_post_status() == 'private' && dwqa_current_user_can( 'edit_question', get_the_ID() ) ) )	) : ?>
					<?php dwqa_load_template( 'content', 'question' ) ?>
				<?php endif; ?>
			<?php endwhile; ?>
		<?php else : ?>
			<?php dwqa_load_template( 'content', 'none' ) ?>
		<?php endif; ?>
		<?php do_action( 'dwqa_after_questions_list' ) ?>
		</div>
		<div class="dwqa-questions-footer">
			<?php dwqa_question_paginate_link() ?>
			<?php if ( dwqa_current_user_can( 'post_question' ) ) : ?>
				<div class="dwqa-ask-question"><a href="<?php echo dwqa_get_ask_link(); ?>"><?php _e( 'Ask Question', 'dwqa' ); ?></a></div>
			<?php endif; ?>
		</div>

	<?php do_action( 'dwqa_after_questions_archive' ); ?>
</div>
