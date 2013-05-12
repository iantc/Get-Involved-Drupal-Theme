<?php

/**
 * @file
 * Default theme implementation for displaying search results.
 *
 * This template collects each invocation of theme_search_result(). This and
 * the child template are dependent to one another sharing the markup for
 * definition lists.
 *
 * Note that modules may implement their own search type and theme function
 * completely bypassing this template.
 *
 * Available variables:
 * - $search_results: All results as it is rendered through
 *   search-result.tpl.php
 * - $module: The machine-readable name of the module (tab) being searched, such
 *   as "node" or "user".
 *
 *
 * @see template_preprocess_search_results()
 *
 * @ingroup themeable
 */
?>
<div id="search-results-wrapper">
  <?php
  global $pager_page_array, $pager_total, $pager_total_items;


  if ($pager_total_items <> 0){
    $results_per_page=10;
    $from = 1+(($pager_page_array[0])*$results_per_page);
    if ( ($pager_page_array[0]+1) == $pager_total[0]){
      // we are on the last page
      $to =   $pager_total_items[0];
    }
    else {
      $to = 1+(($pager_page_array[0])*$results_per_page)+$results_per_page-1;
    }
    print "Displaying $from - $to of ".format_plural($pager_total_items[0], '1 result', '@count results');
  }
  ?>
  <?php if ($search_results): ?>
    <ol class="search-results <?php print $module; ?>-results">
      <?php print $search_results; ?>
    </ol>
    <?php print $pager; ?>
  <?php else : ?>
    <h2><?php print t('Your search yielded no results');?></h2>
    <?php print search_help('search#noresults', drupal_help_arg()); ?>
  <?php endif; ?>
</div>
search-results.tpl.php
