<?php get_header(); ?>	 <!-- include header.php -->
<main>

<div class="orange-heading">
    <div class="container">
        <h2 class="text-left">Sitemap</h2>
    </div>
</div>

<div class="container map-list">
    <?php echo do_shortcode( '[wp_sitemap_page only="page"  display_title="false"]' ); ?>
</div>
</main>
<?php get_footer(); ?> <!-- include footer.php -->