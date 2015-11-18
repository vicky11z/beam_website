<div id="featured-content-container">
<div id="featured-content-image">
<?php
	print theme('imagecache', 'featured_content', $field_bg_image[0]['filepath'], $field_bg_image[0]['alt'], $field_bg_image[0]['title'],  $attributes);
?>
</div>

<div id="featured-content-badge">
	<div class="featured-content-header">
		<?php print $title ?>
	</div>

	<?php print $content ?>

</div>
</div>