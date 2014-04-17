<?php get_header(); ?>
<div class="contenu2">
  <p class="titrecontenu"><?php single_cat_title(); ?></p>
  <?php get_template_part('loop'); ?>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
<?php include 'pad.php'; ?>

