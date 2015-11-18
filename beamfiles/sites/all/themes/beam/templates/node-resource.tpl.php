<div class="node <?php print $classes; ?>" id="node-<?php print $node->nid; ?>">
  <div class="node-inner">

    <?php if (!$page): ?>
      <h2 class="title"><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
    <?php endif; ?>

    <?php print $picture; ?>

    <?php if ($submitted && !$teaser): ?>
      <div class="submitted"><span><?php print $submitted; ?></span></div>
    <?php endif; ?>

    <div class="content">
      <?php print $content; ?>
    </div>

    <div>&nbsp;</div>
    <!--Display related blog entries-->
    <?php
      print views_embed_view('related_blogs','block_1',$nid);
    ?>

    <?php if ($terms): ?>
      <div class="taxonomy"><?php print $terms; ?></div>
    <?php endif;?>

    <?php if ($links): ?> 
      <div class="links"> <?php print $links; ?></div>
    <?php endif; ?>




  </div> <!-- /node-inner -->
</div> <!-- /node-->