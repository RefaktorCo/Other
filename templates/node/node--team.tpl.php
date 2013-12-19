<?php
/**
 * Initialize pagination.
 */
$next = other_pagination($node, 'n');
$prev = other_pagination($node, 'p');

if ($next != NULL) { 
  $next_url = url('node/' . $next, array('absolute' => TRUE));
}
if ($prev != NULL) { 
  $prev_url = url('node/' . $prev, array('absolute' => TRUE));
}

?>

<div class="article-nav">
  <?php if ($prev != NULL): ?>
	  <a href="<?php echo $prev_url; ?>" class="post-nav"><i class="icon-angle-left"></i></a>
	<?php endif; ?>
	<a href="#" class="close"><i class="icon-angle-right"></i><i class="icon-angle-left"></i></a>
	<?php if ($next != NULL): ?>
	  <a href="<?php echo $next_url; ?>" class="post-nav"><i class="icon-angle-right"></i></a>
	<?php endif; ?>
</div>

<div class="video-title team">
	<h2><small><?php echo t('Since'); ?> <?php print render($content['field_team_date']); ?></small><?php print $title; ?><small><?php print render($content['field_team_position']); ?></small></h2>
	<h6 class="remove-bottom"><?php print render($content['field_team_tagline']); ?></h6>
</div>

<?php print render($content['field_team_image']); ?>

<article>
  
<?php print render($content['body']); ?>

</article>