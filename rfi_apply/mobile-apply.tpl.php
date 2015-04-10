<?php 

if ($node = menu_get_object()) {
  // Get the nid
  $nid = $node->nid;
  $node = node_load($nid);
  $tid = $node->taxonomy_vocabulary_7['und'][0]['tid'];
  $term = taxonomy_term_load($tid);
  $path_alias = $base_url.'/'.$term->name;
  $desc = $term->description;
  $imgURI = $term->field_banner_image['und'][0]['uri'];
  $imgURI = parse_url($imgURI);
  $imgURL = $imgURI['path'];
}
if ($term):
?>
<section id="<?php print $block_html_id; ?>" class="<?php print $classes; ?>"<?php print $attributes; ?>>
  
<h3><a href="<?php if (strstr($term->name, 'certificate') !== false):?>/certificates<?php endif; ?><?php print $path_alias;?>/apply" class="track" id="<?php if ($desc) {
		print $desc;
      if (strstr($term->name, 'certificate')) {
      print ' Certification';
      }

} else {
	print 'Untagged page';	
}
?>" title="Mobile Apply Button">Apply Now »</a></h3>

</section> <!-- /.block -->
<?php endif; ?>