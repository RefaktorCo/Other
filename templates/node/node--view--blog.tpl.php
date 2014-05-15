<li class="view-article">
  <?php if (render($content['field_article_embed'])) { print render($content['field_article_embed']); } ?>
  
  <?php if (render($content['field_image'])): ?>
	<div class="more-hover">
		<?php print render($content['field_image']); ?>
		<div>
			<a href="<?php echo $node_url; ?>">
			  <span class="center">
					<h4 class="heavy remove-bottom"><?php echo $title; ?></h4>
					<p><?php print strtolower(render($content['field_tags'])); ?><?php if ($comment_count > 0): ?>, <?php echo $comment_count;?> <?php echo t('comment'); ?><?php if ($comment_count > 1) { echo "s"; }?><?php endif; ?></p>
			  </span>
			</a>
		</div>
	</div>
	<?php endif; ?>
	
	<h5><a href="<?php echo $node_url; ?>"><?php echo $title; ?></a></h5>
	<?php print render($content['body']); ?>
	<a href="<?php echo $node_url; ?>" class="no-border"><?php echo t('Continue Reading');?> &rarr;</a>
</li>