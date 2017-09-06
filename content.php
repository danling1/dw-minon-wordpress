<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php if( ! has_post_format('quote') ) : ?><h2 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2><?php endif; ?>
		<?php dw_minion_entry_meta(); ?>
	</header>
	<?php if( has_post_thumbnail() ) : ?>
	<div class="entry-thumbnail"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_post_thumbnail(); ?></a></div>
	<?php endif; ?>
	</article>