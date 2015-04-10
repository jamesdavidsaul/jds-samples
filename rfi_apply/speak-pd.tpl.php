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
?>
<section id="<?php print $block_html_id; ?>" class="<?php print $classes; ?>"<?php print $attributes; ?>>

<a href="/<?php print $term->name; ?>/speak-with-the-program-director" data-mfp-source="iframe" class="popup-with-form nohover track" id="<?php if ($desc) {
		print $desc;
      if (strstr($term->name, 'certificate')) {
        print ' Certification';
        }
} else {
	print 'Untagged page';	
}
?>" title="Speak with the Program Director">
<div class="speak-with-pd">
<img src="http://assets.ce.columbia.edu/i/ce/shared/<?php if (strstr($term->name, 'perspectives')){ print 'contact'; } else { print 'speak-with'; } ?>-the-program-director@2x.png" alt="Speak with the Program Director" />
</div>
</a>
<p class="clear">&nbsp;</p>

</section> <!-- /.block -->