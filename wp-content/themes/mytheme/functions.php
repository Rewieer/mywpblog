<?php
function mytheme_setup() {
  // Add default posts and comments RSS feed links to head.
  add_theme_support( 'automatic-feed-links');

  // Default title handling
  add_theme_support('title-tag');
}

add_action('after_setup_theme', 'mytheme_setup');
?>