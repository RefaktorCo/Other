<div class="article-nav">
  <?php if ($node->status == '1'): ?>
	  <?php if ( other_node_pagination($node, 'p') != NULL ) : ?>
		  <a href="<?php print url('node/' . other_node_pagination($node, 'p'), array('absolute' => TRUE)); ?>" class="post-nav"><i class="icon-angle-left"></i></a>
		<?php endif; ?>
		<a href="#" class="close"><i class="icon-angle-right"></i><i class="icon-angle-left"></i></a>
		<?php if ( other_node_pagination($node, 'n') != NULL ) : ?>
		  <a href="<?php print url('node/' . other_node_pagination($node, 'n'), array('absolute' => TRUE)); ?>" class="post-nav"><i class="icon-angle-right"></i></a>
		<?php endif; ?>
	<?php endif; ?>
</div>

<div class="video-title team">
  <?php if (render($content['field_team_date'])): ?>
	<h2><small><?php echo t('Since'); ?> <?php print render($content['field_team_date']); ?></small><?php print $title; ?><small><?php print render($content['field_team_position']); ?></small></h2>
	<?php endif; ?>
	<?php if (render($content['field_team_tagline'])): ?>
	<h6 class="remove-bottom"><?php print render($content['field_team_tagline']); ?></h6>
	<?php endif; ?>
</div>

<?php print render($content['field_team_image']); ?>

<article>
  
<?php print render($content['body']); ?>

</article>