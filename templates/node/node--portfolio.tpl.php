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

/**
 * Slideshow variables.
 */
if ($items = field_get_items('node', $node, 'field_portfolio_slideshow')) {
  if (count($items) == 1) {
    $image_slide = 'false';
  }
  elseif (count($items) > 1) {
    $image_slide = 'true';
  }
}

$img_count = 0;
$counter = count($items);
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

<?php if (render($content['field_portfolio_video'])): ?>
<div class="video-container">
	<?php print render($content['field_portfolio_video']); ?>
</div>
<?php endif; ?>

<?php if (!render($content['field_portfolio_video']) && ($image_slide == 'true')): ?>
  <ul class="rslides">
  <?php while ($img_count < $counter) { ?>
    <li><img src="<?php echo file_create_url($node->field_portfolio_slideshow['und'][$img_count]['uri']); ?>" alt="" /></li>
  <?php $img_count++; } ?>		
  </ul>  
  <div class="clear break small"></div>
<?php endif; ?>

<?php if (!render($content['field_portfolio_video']) && ($image_slide == 'false')): ?>
  <div class="single-portfolio-img">
    <?php print render($content['field_portfolio_image']); ?>
  </div>
  <div class="clear break small"></div>
<?php endif; ?>

<article>
  <div class="video-title">
	  <h2><?php print $title; ?></h2>
		<h6 class="remove-bottom"><?php print render($content['field_portfolio_tagline']); ?></h6>
	</div>
	
	<div class="three_fourths">
		<?php print render($content['body']); ?>
	</div>
	
	<div class="one_fourth last">
			<h6><?php echo t('Project Details'); ?></h6>
			<p><strong><?php echo t('CLIENT'); ?> :</strong> <?php print render($content['field_portfolio_client']); ?></p>
			<p><strong><?php echo t('DATE'); ?>:</strong> <?php print format_date($node->created, 'custom', 'M d, Y'); ?></p>
			<p><strong><?php echo t('TAGS'); ?> :</strong> <?php print render($content['field_portfolio_category']); ?></p>
			<p><strong><?php echo t('WEBSITE'); ?> :</strong> <a href="<?php print render($content['field_portfolio_website']); ?>" target="_blank"><?php print render($content['field_portfolio_website']); ?></a></p>
		</div>
		
		<div class="clear"></div><!--CLEAR FLOATS-->
</article>