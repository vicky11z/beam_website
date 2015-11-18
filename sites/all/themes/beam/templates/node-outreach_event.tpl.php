<div class="node <?php print $classes; ?>" id="node-<?php print $node->nid; ?>">
  <div class="node-inner">

    <?php if (!$page): ?>
      <h2 class="title"><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
    <?php endif; ?>

    <?php print $picture; ?>

    <!--<?php if ($submitted && !$teaser): ?>
      <span class="submitted"><?php print $submitted; ?></span>
    <?php endif; ?>--
	
	<!--<?php if ($node->field_event_datetime[0]['view'] != "") : ?>
		<p><strong>When:</strong> <?php print $node->field_event_datetime[0]['view']; ?></p>
	<?php endif; ?>
	
	<?php if ($node->field_event_location[0]['view'] != "") : ?>
		<p><strong>Where:</strong> <?php print $node->field_event_location[0]['view']; ?></p>
	<?php endif; ?>
	
	<?php if ($node->field_event_sponsor[0]['view'] != "") : ?>
		<p><strong>Sponsor:</strong> <?php print $node->field_event_sponsor[0]['view']; ?></p>
	<?php endif; ?>-->

    <div>&nbsp;</div>
    <div class="content">
      <?php print $content; ?>
    </div>

    <?php if ($terms): ?>
      <div class="taxonomy"><?php print $terms; ?></div>
    <?php endif;?>

    <?php if ($links): ?> 
      <div class="links"> <?php print $links; ?></div>
    <?php endif; ?>

  </div> <!-- /node-inner -->
</div> <!-- /node-->