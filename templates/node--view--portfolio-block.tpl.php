<li class="<?php print str_replace(',-', ' ', str_replace(' ', '-',strip_tags(render($content['field_portfolio_category'])))); ?>">
	<img src="<?php echo file_create_url($node->field_portfolio_image['und'][0]['uri']); ?>" alt="" />
	<div>
		<a href="<?php print $node_url; ?>">
			<h4 class="heavy remove-bottom"><?php print $title; ?></h4>
			<p><?php print strtolower(render($content['field_portfolio_category'])); ?></p>
		</a>
	</div>
</li>