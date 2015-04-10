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
<div class="email-signup">
<a href="https://inq.applyyourself.com/?id=COL-SCEMS&amp;pid=1686" class="track" id="<?php if ($desc) {
		print $desc;
      if (strstr($term->name, 'certificate')) {
        print ' Certification';
        }
} else {
	print 'Untagged page';	
}
?>" title="Request for Information" target="_blank">
<img src="http://assets.ce.columbia.edu/i/ce/shared/cu-stamp-icon.png" alt="Sign up for email updates" />

<h3>Request more information</h3>
<p>Ask questions, receive updates.</p>
</a>
</div>

</section> <!-- /.block -->