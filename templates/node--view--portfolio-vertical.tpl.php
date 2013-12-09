<li>
	<?php print render($content['field_portfolio_image']); ?>
	<div class="gallery-details">
		<h5 class="small-bottom"><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h5>
		<p class="meta small-bottom"><?php print strtolower(render($content['field_portfolio_category'])); ?></p>
	</div>
</li>