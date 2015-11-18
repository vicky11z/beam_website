<div style="height: 20px;">&nbsp;</div>
<div id="home-left">

	<div id="home-headline" class="beam-accent-headline">
		<?php print $node->field_num_mentors[0]['view']; ?> Cal students.<br/>
		<?php print $node->field_num_schools[0]['view']; ?> schools.<br/>
		Active learning.
	</div>
	
	<div class="beam-accent"> 
	
		<?php print $node->field_blurb[0]['view']; ?>
	<?php echo 1111111111111; ?>
	</div>
	<br/><br/>
	<!-- <a href="/get-involved" onmouseover="document.getinvolved.src='/<?php print $base_path . path_to_theme() ?>/images/get_involved_hover.png'" onmouseout="document.getinvolved.src='/<?php print $base_path . path_to_theme() ?>/images/get_involved.png'"><img name="getinvolved" src="/<?php print $base_path . path_to_theme() ?>/images/get_involved.png" /></a> -->

</div>

<div id="home-right">

<!--<img src="/drupal/<?php print $base_path . path_to_theme() ?>/images/front.jpg" width="500px" />-->
<?php
	print views_embed_view('featured_content');
?>


</div>

<div id="home-lower-content">

	<div id="home-news">
		<h4 class="home-lower-content-header">News and Events</h4>
		<?php
			print views_embed_view('news');
		?>
	</div>
	
	<div style="width: 12px; float:left;">&nbsp;</div>
	
	<div id="home-student-links" class="home-quick-menu">
		<h4 class="home-lower-content-header">For Cal Students</h4>
		<?php
		$menu = menu_tree_all_data('menu-home-students');

		foreach($menu as $item) {
			print "<li><a href=\"" . url($item['link']['link_path']) . "\">" . $item['link']['link_title'] . "</a></li>";
		}
		?>
	</div><div style="width: 10px; float:left;">&nbsp;</div>
	
	<div id="home-parent-links" class="home-quick-menu">
		<h4 class="home-lower-content-header">For Parents</h4>
		<?php
		$menu = menu_tree_all_data('menu-home-parents');

		foreach($menu as $item) {
			print "<li><a href=\"" . url($item['link']['link_path']) . "\">" . $item['link']['link_title'] . "</a></li>";
		}
		?>
	</div><div style="width: 10px; float:left;">&nbsp;</div>
	
	<div id="home-educator-links" class="home-quick-menu">
		<h4 class="home-lower-content-header">For Educators</h4>
		<?php
		$menu = menu_tree_all_data('menu-home-educators');

		foreach($menu as $item) {
			print "<li><a href=\"" . url($item['link']['link_path']) . "\">" . $item['link']['link_title'] . "</a></li>";
		}
		?>
	</div><div style="width: 10px; float:left;">&nbsp;</div>

	<div id="home-connect-links" class="home-quick-menu">
		<h4 class="home-lower-content-header">Connect</h4>
		<ul style="padding-left: 0;">
			<li><img src="/sites/all/themes/beam/images/fb_icon.png" width="20px"/>&nbsp; <a href="http://www.facebook.com/beam.teach" target="_blank">Facebook</a></li>
			<li><img src="/sites/all/themes/beam/images/flickr_icon.png" width="20px"/>&nbsp; <a href="http://www.flickr.com/photos/55031716@N05/" target="_blank">Flickr</a></li>
			<li><img src="/sites/all/themes/beam/images/picasa_icon.png" width="20px"/>&nbsp; <a href="https://picasaweb.google.com/beam.teach" target="_blank">Picasa</a></li>
		</ul>
	</div>

</div>

<!--Google analytics tracker, linked to beam.teach@gmail.com's Google Analytics account. Will be useful to determine userbase and reach. Added by Robert Chen on May 9, 2013.-->

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-40787874-1', 'berkeley.edu');
  ga('send', 'pageview');

</script>