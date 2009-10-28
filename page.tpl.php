<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language; ?>" lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>">

<head>
  <title><?php print $head_title; ?></title>
  <?php print $head; ?>
  <?php print $styles; ?>
  <?php print $scripts; ?>
</head>
<body class="<?php print $body_classes; ?>">

  <div id="page" class="container"><div id="page-inner">

    <a name="top" id="navigation-top"></a>
    
    <div id="header" class="span-24 last"><div id="header-inner" class="clear-block span-23 prepend-1 last">
		  <div class="floatleft span-13">
	      <?php if ($logo || $site_slogan): ?>
	        <div id="logo-title">
	
	          <?php if ($logo): ?>
	            <div id="logo"><h1><a href="<?php print $front_page; ?>" title="<?php print $site_name; ?>" rel="home"><img src="<?php print $logo; ?>" alt="<?php print $site_name; ?>" id="logo-image" /></a></h1></div>
	          <?php else: ?>
	          	<div id="logo"><h1><a href="<?php print $front_page; ?>" title="<?php print $site_name; ?>" rel="home"><?php print $site_name; ?></a></h1></div>
	          <?php endif; ?>
	
	          <?php if ($site_slogan): ?>
	            <div id="site-slogan"><?php print $site_slogan; ?></div>
	          <?php endif; ?>
						
	        </div> <!-- /#logo-title -->
	      <?php endif; ?>
			</div>
			<div class="floatright span-10 last">
				<?php if ($search_box): ?>
	        <div id="search-box">
	          <?php print $search_box; ?>
	        </div> <!-- /#search-box -->
	      <?php endif; ?>
			</div>
      <?php if ($header): ?>
        <div id="header-blocks" class="region region-header">
          <?php print $header; ?>
        </div> <!-- /#header-blocks -->
      <?php endif; ?>

    </div></div> <!-- /#header-inner, /#header -->
		
		<div id="board" class="span-23 prepend-1 last">
			<?php if ($primary_links): ?>
        <div id="primary">
          <?php print theme('links', $primary_links); ?>
        </div> <!-- /#primary -->
      <?php endif; ?>
      
      <?php if ($mission): ?>
        <div id="mission"><?php print $mission; ?></div>
      <?php endif; ?>
		</div>
		
    <div id="main" class="span-24 last"><div id="main-inner" class="clear-block<?php if ($search_box || $primary_links || $secondary_links || $navbar) { print ' with-navbar'; } ?>">
			
      <div id="content" class="span-14 prepend-1 append-1"><div id="content-inner">

        

        <?php if ($breadcrumb || $title || $tabs || $help || $messages): ?>
          <div id="content-header">
            <?php print $breadcrumb; ?>
            <?php print $messages; ?>
            <?php if ($tabs): ?>
              <div class="tabs"><?php print $tabs; ?></div>
            <?php endif; ?>
            <h2><?php print $title; ?></h2>
            <?php print $help; ?>
          </div> <!-- /#content-header -->
        <?php endif; ?>

        <div id="content-area">
          <?php print $content; ?>
        </div>

        <?php if ($feed_icons): ?>
          <div class="feed-icons"><?php print $feed_icons; ?></div>
        <?php endif; ?>

        <?php if ($content_bottom): ?>
          <div id="content-bottom" class="region region-content_bottom">
            <?php print $content_bottom; ?>
          </div> <!-- /#content-bottom -->
        <?php endif; ?>

      </div></div> <!-- /#content-inner, /#content -->
			
			<?php if ($right): ?>
        <div id="sidebar-right" class="span-4"><div id="sidebar-right-inner" class="region region-right">
          <?php print $right; ?>
        </div></div> <!-- /#sidebar-right-inner, /#sidebar-right -->
      <?php endif; ?>
			
			<?php if ($ads): ?>
        <div id="sidebar-ads" class="span-4 last"><div id="sidebar-ads-inner" class="region region-ads">
          <?php print $ads; ?>
        </div></div> <!-- /#sidebar-left-inner, /#sidebar-left -->
      <?php else :?>
      	<div id="sidebar-ads" class="span-4 last"><div id="sidebar-ads-inner" class="region region-ads">
          <div class="ads">
          	<div class="centeralign">
          		110 x 110 ads
          	</div>
          </div>
          <div class="ads">
          	<div class="centeralign">
          		110 x 110 ads
          	</div>
          </div>
          <div class="ads">
          	<div class="centeralign">
          		110 x 110 ads
          	</div>
          </div>
          <div class="ads">
          	<div class="centeralign">
          		110 x 110 ads
          	</div>
          </div>
        </div></div>
      
      <?php endif; ?>
			
    </div></div> <!-- /#main-inner, /#main -->

    <?php if ($footer || $footer_message): ?>
      <div id="footer" class="span-24 last"><div id="footer-inner" class="region region-footer">

        <?php if ($footer_message): ?>
          <div id="footer-message"><?php print $footer_message; ?></div>
        <?php endif; ?>

        <?php print $footer; ?>

      </div></div> <!-- /#footer-inner, /#footer -->
    <?php endif; ?>

  </div></div> <!-- /#page-inner, /#page -->

  <?php if ($closure_region): ?>
    <div id="closure-blocks" class="region region-closure"><?php print $closure_region; ?></div>
  <?php endif; ?>

  <?php print $closure; ?>

</body>
</html>