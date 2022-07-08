<?php
/**
 * The template for displaying singular post-types: posts, pages and user-defined custom post types.
 *
 * @package HelloElementor
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>
<?php
while ( have_posts() ) :
	the_post();
	?>

  <main id="content"class="col-8" role="main">
  <header class="page-header">
  <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		</header>
		<div class="page-content">
		<?php the_content(); ?>
	</div>	
	</main>
	<aside class="col-4"role="aside">
		<div class ="">
			<h4>月次アーカイブ</h4>
			<ul class="">
				<?php echo wp_get_archives("type-monthly&snow_post_count=teue"); ?>
			</ul>
		</div>
		<div class ="">
			<h4>カテゴリーアーカイブ</h4>
			<?php $categories = get_categories(); ?>
			<ul class="">
				<?php foreach ($categories as $category) : ?>
			<li>
				<a href="#"><?php echo $category->name ?></a>
			</li>
			<?php endforeach; ?>
		</div>
	</aside>
  </div>
</div>

<main id="content" <?php post_class( 'site-main' ); ?> role="main">
	<?php if ( apply_filters( 'hello_elementor_page_title', true ) ) : ?>
		<header class="page-header">
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		</header>
	<?php endif; ?>
	<div class="page-content">
		<?php the_content(); ?>
		<div class="post-tags">
			<?php the_tags( '<span class="tag-links">' . __( 'Tagged ', 'hello-elementor' ), null, '</span>' ); ?>
		
		</div>
		<?php wp_link_pages(); ?>
	</div>
endwhile;
