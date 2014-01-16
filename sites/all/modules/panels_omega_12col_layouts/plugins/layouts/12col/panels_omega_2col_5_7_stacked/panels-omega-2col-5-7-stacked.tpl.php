<?php
/**
 * @file
 * Panels Omega 2 Col 5-7 Stacked Template
 *
 */
?>

<div class="panel-display omega-2col-5-7-stacked" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>

	<?php if ($content['top']): ?>
	  <div class="panel-panel grid-12 panel-region-preface">
	    <div class="inside"><?php print $content['top']; ?></div>
	  </div>
	<?php endif; ?>

  <div class="panel-panel grid-5 panel-region-sidebar-first">
    <div class="inside"><?php print $content['left']; ?></div>
  </div>
  <div class="panel-panel grid-7 panel-region-content">
    <div class="inside"><?php print $content['right']; ?></div>
  </div>
  
  <?php if ($content['bottom']): ?>
	  <div class="panel-panel grid-12 panel-region-postscript">
	    <div class="inside"><?php print $content['bottom']; ?></div>
	  </div>
	<?php endif; ?>

</div>
