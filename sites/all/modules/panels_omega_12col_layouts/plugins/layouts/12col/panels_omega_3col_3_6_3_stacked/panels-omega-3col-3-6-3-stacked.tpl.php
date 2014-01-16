<?php
/**
 * @file
 * Panels Omega 3 Col 3-6-3 Stacked Template
 *
 */

?>
<div class="panel-display omega-3col-3-6-3" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>

	<?php if ($content['top']): ?>
	  <div class="panel-panel grid-12 panel-region-preface">
		  <div class="inside"><?php print $content['top']; ?></div>
	  </div>
	<?php endif; ?>
  
  <div class="panel-panel grid-3 panel-region-sidebar-first">
	  <div class="inside"><?php print $content['left']; ?></div>
  </div>
  <div class="panel-panel grid-6 panel-region-content">
	  <div class="inside"><?php print $content['middle']; ?></div>
  </div>
  <div class="panel-panel grid-3 panel-region-sidebar-second">
	  <div class="inside"><?php print $content['right']; ?></div>
  </div>
  
	<?php if ($content['bottom']): ?>
	  <div class="panel-panel grid-12 panel-region-postscript">
	    <div class="inside"><?php print $content['bottom']; ?></div>
	  </div>
	<?php endif; ?>

</div>
