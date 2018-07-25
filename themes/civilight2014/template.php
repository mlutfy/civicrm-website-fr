<?php

/**
 * @file
 * template.php
 */

/**
 * Implements hook_links().
 */
function civilight2014_links($links, $attributes = array()) {
  // Hide "foo's blog" in links below blog teasers.
  // Confusing and serves little purpose.
  unset($links['blog_usernames_blog']);
  return theme_links($links, $attributes);
}
