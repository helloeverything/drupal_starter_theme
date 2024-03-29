<div class="wrapper">
<header class="cf">
      <?php if ($logo): ?>
        <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" class="logo">
          <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
        </a>
      <?php endif; ?>
      <?php print render($page['header']); ?>
</header>

<nav class="cf">
<?php print render($page['navigation']); ?>
</nav>


<?php if ($breadcrumb): ?>
<section class="breadcrumbs cf"><?php print $breadcrumb; ?></section>
<?php endif; ?>


<?php print $messages; ?>

<section class="cms-content <?php if ($page['sidebar_first']): ?>has-sidebar-first<?php endif; ?> <?php if ($page['sidebar_second']): ?>has-sidebar-second<?php endif; ?> cf">
    <?php if ($page['highlighted']): ?><div id="highlighted"><?php print render($page['highlighted']); ?></div><?php endif; ?>
    <a id="main-content"></a>
    <?php print render($title_prefix); ?>
    <?php if ($title): ?><h1 class="title" id="page-title"><?php print $title; ?></h1><?php endif; ?>
    <?php print render($title_suffix); ?>
    <?php if ($tabs): ?><div class="tabs"><?php print render($tabs); ?></div><?php endif; ?>
    <?php print render($page['help']); ?>
    <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
    <?php print render($page['content']); ?>
    <?php print $feed_icons; ?>
</section>

<?php if ($page['sidebar_first']): ?>
	<aside class="sidebar-first"><?php print render($page['sidebar_first']); ?></aside>
<?php endif; ?>

<?php if ($page['sidebar_second']): ?>
	<aside class="sidebar-second"><?php print render($page['sidebar_second']); ?></aside>
<?php endif; ?>

<footer class="cf">
<?php print render($page['footer']); ?>
</footer>

</div> <!-- End Wrapper -->