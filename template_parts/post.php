             
   <div class="post-preview">
	  <a href="<?php the_permalink(); ?>">
	    <h2 class="post-title">
	      <?php the_title(); ?>
	    </h2>
	    <h3 class="post-subtitle">
	      Problems look mighty small from 150 miles up
	    </h3>
	  </a>
	  <p class="post-meta">Postado por
	    <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a>
	    on September 24, 2017</p>
   </div>
	<hr>