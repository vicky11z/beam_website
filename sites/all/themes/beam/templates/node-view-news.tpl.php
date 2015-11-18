<div class="node <?php print $classes; ?>" id="node-<?php print $node->nid; ?>">
  <div class="node-inner">
  
    <?php if (!$page): ?>
      <h5 class="title"><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h5>
    <?php endif; ?>

    <?php print $picture; ?>

    <?php if ($submitted && !$teaser): ?>
      <span class="submitted"><?php print $submitted; ?></span>
    <?php endif; ?>

    <?php if (!$teaser): ?>
		<div class="content">
			<?php print $content; ?>
		</div>
	<?php endif; ?>

    <!--<?php if ($terms): ?>
      <div class="taxonomy"><?php print $terms; ?></div>
    <?php endif;?>

    <?php if ($links): ?> 
      <div class="links"> <?php print $links; ?></div>
    <?php endif; ?>-->

  </div> <!-- /node-inner -->
</div> <!-- /node-->