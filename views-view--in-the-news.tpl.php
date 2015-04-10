<?php

/**
 * @file
 * Main view template.
 *
 * Variables available:
 * - $classes_array: An array of classes determined in
 *   template_preprocess_views_view(). Default classes are:
 *     .view
 *     .view-[css_name]
 *     .view-id-[view_name]
 *     .view-display-id-[display_name]
 *     .view-dom-id-[dom_id]
 * - $classes: A string version of $classes_array for use in the class attribute
 * - $css_name: A css-safe version of the view name.
 * - $css_class: The user-specified classes names, if any
 * - $header: The view header
 * - $footer: The view footer
 * - $rows: The results of the view query, if any
 * - $empty: The empty text to display if the view is empty
 * - $pager: The pager next/prev links to display, if any
 * - $exposed: Exposed widget form/info to display
 * - $feed_icon: Feed icon to display, if any
 * - $more: A link to view more, if any
 *
 * @ingroup views_templates
 */
?>

<?php
global $base_url;
$path = current_path();
$alias = drupal_lookup_path('alias',$path);
$nid = menu_get_object();
$term = taxonomy_term_load($nid->taxonomy_vocabulary_7['und'][0]['tid']);
$programurl = $term->name;
?>

<div class="<?php print $classes; ?><?php if ((strpos($alias, 'news') == false) && (strpos($alias, 'profiles') == false) && ($alias !== 'news')): ?> news-overview <?php if ((strpos($display_id, 'profiles') !== false) || (strpos($display_id, 'news_slider') == true)) {?> featured <?php } else { ?> news-slider<?php } ?><?php endif;?><?php if ((strpos($display_id, 'list') !== false)):?> news-list <?php endif;?> <?php if ($nid->type == 'news_article'): ?>news-overview news-slider<?php endif; ?>">



  <?php print render($title_prefix); ?>
  <?php if ($title): ?>
    <?php print $title; ?>
  <?php endif; ?>
  <?php print render($title_suffix); ?>
  <?php if ($header): ?>
    <div class="view-header">
      <?php print $header; ?>
    </div>
  <?php endif; ?>

  <?php if ($exposed): ?>
    <div class="view-filters">
      <?php print $exposed; ?>
    </div>
  <?php endif; ?>

  <?php if ($attachment_before): ?>
    <div class="attachment attachment-before">
      <?php print $attachment_before; ?>
    </div>
  <?php endif; ?>

  <?php if ($rows): ?>
    <div class="view-content">
      <?php print $rows; ?>
<?php if ($display_id == 'news_slider'): ?> 
<li class="views-row view-all"><a href="/<?php print $programurl;?>/news">All News<span>View &gt;</span></a></li>    
<?php endif; ?>
<?php if ($display_id == 'news_slider_certs'): ?>
<li class="views-row view-all"><a href="/certificates/<?php print $programurl;?>/news">All News<span>View &gt;</span></a></li>    
<?php endif; ?>
<?php if ($display_id == 'news_slider_nofilter'): ?>
<li class="views-row view-all"><a href="/news">All News<span>View &gt;</span></a></li>    
<?php endif; ?>
<?php if ($display_id == 'profiles_slider'): ?>
<li class="views-row view-all"><a href="/<?php print $programurl;?>/profiles">All Profiles<span>View &gt;</span></a></li>    
<?php endif; ?>
<?php if ($display_id == 'profiles_slider_certs'): ?>
<li class="views-row view-all"><a href="/certificates/<?php print $programurl;?>/profiles">All Profiles<span>View &gt;</span></a></li>    
<?php endif; ?>


</div>
  <?php elseif ($empty): ?>
    <div class="view-empty">
      <?php print $empty; ?>
    </div>
  <?php endif; ?>

  <?php if ($pager): ?>
    <?php print $pager; ?>
  <?php endif; ?>

  <?php if ($attachment_after): ?>
    <div class="attachment attachment-after">
      <?php print $attachment_after; ?>
    </div>
  <?php endif; ?>

  <?php if ($more): ?>
    <?php print $more; ?>
  <?php endif; ?>

  <?php if ($footer): ?>
    <div class="view-footer">	    
      <?php print $footer; ?>
    </div>
  <?php endif; ?>

  <?php if ($feed_icon): ?>
    <div class="feed-icon">
      <?php print $feed_icon; ?>
    </div>
  <?php endif; ?>

</div><?php /* class view */ ?>
