<div class="article">
  <h3 class="article-name mt-4">
    <a href="<?php the_permalink(); ?>">
      <?php the_title(); ?>
    </a>
    <small class="when">
      <?php the_date(); ?>
    </small>
  </h3>
  <div class="article-content">
    <?php
    if (is_single()) {
      the_content();
    } else {
      the_excerpt();
      echo '<a href="' .get_permalink(). '">Read More</a> <br /><br />';
    }
    ?>
  </div>
</div>