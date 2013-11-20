<li>
  <?php if (render($content['field_article_embed'])) { print render($content['field_article_embed']); } ?>
  
  <?php if (render($content['field_image'])): ?>
	<div class="more-hover">
		<img src="<?php echo file_create_url($node->field_image['und'][0]['uri']); ?>" alt="">
		<div>
			<a href="<?php echo $node_url; ?>">
				<h4 class="heavy remove-bottom"><?php echo $title; ?></h4>
				<p><?php print render($content['field_tags']); ?></p>
			</a>
		</div>
	</div>
	<?php endif; ?>
	
	<h5><a href="single.html"><?php echo $title; ?></a></h5>
	<p><?php print render($content['body']); ?></p>
	<a href="<?php echo $node_url; ?>" class="no-border"><?php echo t('Continue Reading');?> &rarr;</a>
</li>