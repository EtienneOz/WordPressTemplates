<div class="side">
      <header id="presentation">
        <p class="titre"><a href="http://etienneozeray.fr/libre-blog/"><?php bloginfo('name'); ?></a></p>
        <p class="titre2"><?php bloginfo('description'); ?></p>
      </header>
<div class="categories">
	<p class="titrecategorie">
		Ressources
	</p>
	<p class="souscategories">
		 <?php 
		 $args = array(
			'show_option_all'    => '',
			'orderby'            => 'name',
			'order'              => 'ASC',
			'style'              => 'none',
			'show_count'         => 0,
			'hide_empty'         => 1,
			'use_desc_for_title' => 1,
			'child_of'           => 0,
			'feed'               => '',
			'feed_type'          => '',
			'feed_image'         => '',
			'exclude'            => '',
			'exclude_tree'       => '',
			'include'            => '',
			'hierarchical'       => 1,
			'title_li'           => __( 'Categories' ),
			'show_option_none'   => __('No categories'),
			'number'             => null,
			'echo'               => 1,
			'depth'              => 0,
			'current_category'   => 0,
			'pad_counts'         => 0,
			'taxonomy'           => 'category',
			'walker'             => null
		);
		wp_list_categories( $args );
		?> 
	</p>
	<p class="titrecategorie">
		<a href="http://etienneozeray.fr/libre-blog/category/ecrits/">Écrits</a>
	</p>
	<p class="souscategories">
		 <?php 
			$tags = get_tags( array(
				'orderby' 	=> 'name', 
				'order' 	=> 'ASC') 
				);
			foreach ( (array) $tags as $tag ) {
			echo '<a href="' . get_tag_link ($tag->term_id) . '" rel="tag">' . $tag->name . ' </a><br/>';
			}
		?>
	</p>
	<p class="titrecategorie">
		<a href="mailto:libre@etienneozeray.fr">Contact &amp; suggestions</a>
  		<!-- Bouton RSS -->
  		<br/>
	 	<a class="side_lien" href="<?php bloginfo('rss2_url'); ?>">Flux RSS</a>
	</p>
</div> 

  
  <!-- Formulaire de recherche -->
  <?php get_search_form(); ?>
  

</div>

