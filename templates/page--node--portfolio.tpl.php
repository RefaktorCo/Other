<div id="mobile-nav">
	<i class="icon-reorder"></i>
	<?php if ($logo): ?>
		<a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" class="mobile-logo">
	    <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
	  </a>
	<?php endif; ?>
</div>

<header>
	<div id="logo">
		<a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home">
      <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
    </a>
	</div>
	
	<?php if ($site_name || $site_slogan): ?>
    <div id="name-and-slogan"<?php if ($disable_site_name && $disable_site_slogan) { print ' class="hidden"'; } ?>>

      <?php if ($site_name): ?>
        <?php if ($title): ?>
          <div id="site-name"<?php if ($disable_site_name) { print ' class="hidden"'; } ?>>
            <strong>
              <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><span><?php print $site_name; ?></span></a>
            </strong>
          </div>
        <?php else: /* Use h1 when the content title is empty */ ?>
          <h1 id="site-name"<?php if ($disable_site_name) { print ' class="hidden"'; } ?>>
            <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><span><?php print $site_name; ?></span></a>
          </h1>
        <?php endif; ?>
      <?php endif; ?>

      <?php if ($site_slogan): ?>
        <div id="site-slogan"<?php if ($disable_site_slogan) { print ' class="hidden"'; } ?>>
          <?php print $site_slogan; ?>
        </div>
      <?php endif; ?>

    </div> <!-- /#name-and-slogan -->
  <?php endif; ?>  
	
	<?php if ($page['site_nav']): ?>
	  <nav>
      <?php print render($page['site_nav']); ?>
	  </nav>
	<?php endif; ?>
	
	<?php if ($page['sidebar_primary']): ?>
    <?php print render($page['sidebar_primary']); ?>
	<?php endif; ?>
	
	<?php if ($page['sidebar_secondary']): ?>
    <?php print render($page['sidebar_secondary']); ?>
	<?php endif; ?>
</header>

<section id="single-portfolio" class="content">
  
  <?php print render($page['content']); ?>
</section>		