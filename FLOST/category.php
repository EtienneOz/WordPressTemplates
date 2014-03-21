<?php get_header(); ?>
<div class="contenu">
  <p class="titrecontenu"><?php single_cat_title(); ?></p>
  <?php get_template_part('loop'); ?>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
<?php include 'pad.php'; ?>
<a class="license" href="https://fr.wikipedia.org/wiki/Creative_Commons" target="_blank"><img src="img/CC.png" class="cc"></a>
