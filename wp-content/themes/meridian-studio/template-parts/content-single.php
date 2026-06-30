<?php
/**
 * Template part for displaying single post content
 *
 * @package Meridian_Studio
 */
?>
<main class="site-main page-padding">
	<article class="single-post-wrapper reveal-section">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<header class="post-header">
				<div class="post-eyebrow">
					<?php
					$categories = get_the_category();
					if ( ! empty( $categories ) ) {
						echo esc_html( strtoupper( $categories[0]->name ) ) . ' &middot; ';
					}
					echo esc_html( get_the_date( 'F Y' ) );
					$word_count = str_word_count( strip_tags( get_the_content() ) );
					$read_time = max( 1, ceil( $word_count / 200 ) );
					echo ' &middot; ' . esc_html( $read_time ) . ' MIN READ';
					?>
				</div>
				<h1 class="display-title post-title"><?php the_title(); ?></h1>
				<div class="post-author">
					<?php esc_html_e( 'By', 'meridian' ); ?> <?php the_author(); ?>
				</div>
			</header>

			<?php if ( has_post_thumbnail() ) : ?>
				<div class="post-hero-image">
					<?php the_post_thumbnail( 'full', array( 'alt' => get_the_title() ) ); ?>
				</div>
			<?php else : ?>
				<div class="post-hero-image">
					<div class="image-placeholder aspect-article-hero">
						<svg viewBox="0 0 1240 540" width="100%" height="100%">
							<rect width="100%" height="100%" fill="var(--color-mist)" />
							<text x="50%" y="50%" dominant-baseline="middle" text-anchor="middle" font-family="var(--font-mono)" font-size="20" fill="var(--color-stone)">1240×540 · article-hero.jpg</text>
						</svg>
					</div>
				</div>
			<?php endif; ?>

			<div class="post-content-container">
				<div class="entry-content">
					<?php the_content(); ?>
				</div>
			</div>
		<?php endwhile; else : ?>
			<header class="post-header">
				<div class="post-eyebrow">STRATEGY &middot; MAY 2026 &middot; 6 MIN READ</div>
				<h1 class="display-title post-title">The case for slower brands</h1>
				<div class="post-author">
					<?php esc_html_e( 'By Elena Marsh — Strategy Lead', 'meridian' ); ?>
				</div>
			</header>
			<div class="post-hero-image">
				<div class="image-placeholder aspect-article-hero">
					<svg viewBox="0 0 1240 540" width="100%" height="100%">
						<rect width="100%" height="100%" fill="var(--color-mist)" />
						<text x="50%" y="50%" dominant-baseline="middle" text-anchor="middle" font-family="var(--font-mono)" font-size="20" fill="var(--color-stone)">1240×540 · article-hero.jpg</text>
					</svg>
				</div>
			</div>
			<div class="post-content-container">
				<div class="entry-content">
					<p>Most brand failures aren't loud. They're a slow drift — a logo tweaked here, a tone shifted there — until nothing quite fits together. The antidote isn't more activity. It's restraint, and a system you trust enough to leave alone.</p>
					<blockquote class="pull-quote">
						<p>&ldquo;The brands that endure are rarely the ones in the biggest hurry.&rdquo;</p>
					</blockquote>
					<p>A slower brand makes fewer, better decisions and lets them compound. It treats consistency as a feature, not a constraint — and that is exactly what a good design system protects.</p>
				</div>
			</div>
		<?php endif; ?>
	</article>
</main>
