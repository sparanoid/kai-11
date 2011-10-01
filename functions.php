<?php
/**
 * Twenty Eleven Kai functions and definitions
 */

function add_twentyeleven_credits() {
  echo '<a href="http://ray.io/dev/590/">Twenty Eleven Kai</a><span class="sep"> | </span>';
}

add_action('twentyeleven_credits', 'add_twentyeleven_credits');
?>