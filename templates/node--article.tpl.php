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

<div class="article-nav blog">
  <?php if ($prev != NULL): ?>
	  <a href="<?php echo $prev_url; ?>" class="post-nav"><i class="icon-angle-left"></i></a>
	<?php endif; ?>
	<a href="#" class="close"><i class="icon-angle-right"></i><i class="icon-angle-left"></i></a>
	<?php if ($next != NULL): ?>
	  <a href="<?php echo $next_url; ?>" class="post-nav"><i class="icon-angle-right"></i></a>
	<?php endif; ?>
</div>

<div class="video-title blog">
	<h2><small><?php print format_date($node->created, 'custom', 'M d, Y'); ?></small><?php echo $title; ?><small>Posted In: <?php print render($content['field_tags']); ?></small></h2>
	<h6 class="remove-bottom"><?php print render($content['field_article_tagline']); ?></h6>
</div>

<?php if (render($content['field_image'])) {print render($content['field_image']); } ?>

<?php if (render($content['field_article_embed'])) {print render($content['field_article_embed']); } ?>
<div class="clear break small"></div>

<article>
<?php print render($content['body']); ?>

<?php
  // Remove the "Add new comment" link on the teaser page or if the comment
  // form is being displayed on the same page.
  if ($teaser || !empty($content['comments']['comment_form'])) {
    unset($content['links']['comment']['#links']['comment-add']);
  }
  // Only display the wrapper div if there are links.
  $links = render($content['links']);
  if ($links):
?>
  <div class="link-wrapper">
    <?php print $links; ?>
  </div>
<?php endif; ?>

<?php print render($content['comments']); ?>
  
</article>