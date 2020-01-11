             
   <div class="post-preview">
	  <a href="<?php the_permalink(); ?>">
	    <h2 class="post-title">
	      <?php the_title(); ?>
	    </h2>

	    <?php if(function_exists('the_subtitle')): ?>
	        <h3 class="post-subtitle">
		      <?php the_subtitle(); ?>
		    </h3>
        <?php endif; ?>

	  </a>
	  <p class="post-meta">Postado por
	    <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a>
	    em  <?php echo get_the_date();?></p>
   </div>
	<hr>