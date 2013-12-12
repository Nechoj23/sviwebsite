<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">
<head>
<jdoc:include type="head" />
<?php
/*--------------------------------------------------------------------------------
# ah-68-Technik 2.5 - Februar 2013 (J2.5)
# Copyright (C) 2006-2013 www.ah-68.de All Rights Reserved.
----------------------------------------------------------------------------------*/
	
// No Direct Access
defined( '_JEXEC' ) or die;	
// Setting Variable For Template Base url
$template_baseurl = $this->baseurl . '/templates/' . $this->template;
require("php/color.php"); 
require("php/module.php");
?>
<link href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/reset.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/template.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/image.hover.css" rel="stylesheet" type="text/css" media="all" />
<link rel="SHORTCUT ICON" href="/images/logo_small.jpg" />
<!-- Enabling HTML5 support for Internet Explorer -->
<!--[if lt IE 9]>
          <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<script type="text/javascript" src='<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/jquery-1.8.2.min.js'></script>
<script type='text/javascript' src='<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/jquery.x.js'></script>
<script type='text/javascript' src='<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/jquery.easing.js'></script>
<script type='text/javascript' src='<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/jquery.hoverIntent.minified.js'></script>
<link rel="stylesheet" type="text/css" media="screen" href="<?php echo $template_baseurl; ?>/css/superfish.css" />
<script type='text/javascript' src='<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/superfish.js'></script>
<script type='text/javascript' src='<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/supersubs.js'></script>
<script type='text/javascript' src='<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/supposition.js'></script>
</head><body>
<?php if ($this->countModules('sidebar')) : ?>
<div id="sidebar">
  <div class="sidebar">
    <jdoc:include type="modules" name="sidebar" style="raw" />
  </div>
</div>
<?php endif; ?>
<!-- Start Topnav -->
<div id="topnav">
  <div class="topnav-inner">
    <?php if ($this->countModules('superfish')) : ?>
    <div class="topnav">
      <jdoc:include type="modules" name="superfish" style="raw" />
    </div>
    <?php endif; ?>
    <?php if ($this->countModules('search')) : ?>
    <!-- Start Search -->
    <div id="search">
      <div class="search">
        <jdoc:include type="modules" name="search" style="raw" />
      </div>
    </div>
    <!-- Ende Search -->
    <?php endif; ?>
  </div>
</div>
<!-- Ende Topnav -->
<!-- Start Topline -->
<div class="top-line"></div>
<!-- Ende Topline -->
<!-- Start Wrapper -->
<div id="wrapper">
  <!-- Start Wrap -->
  <div id="wrap">
    <!-- Start Contentframe -->
    <div id="contentframe">
      <!-- Start Header -->
      <div id="header">
        <!-- Start Logo -->
    <!--    <div class="logo">
          <?php if (($this->params->get('logouploadchoice')) !=1) : ?>
          <a href="index.php" title="<?php echo $this->params->get('logotitle');?>"><img alt="Logo" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/images/logo/<?php echo ($this->params->get('logo'));?>"/></a>
          <?php endif;?>
          <?php if (($this->params->get('logouploadchoice')) !=0) : ?>
          <a href="index.php" title="<?php echo $this->params->get('logotitle');?>"><img alt="Logo" src="<?php echo $this->params->get('logoupload');?>"/></a>
          <?php endif;?>
      -->
        </div>
        <!-- Ende Logo -->
      </div>
      <!-- Ende Header -->
      <?php if ($this->countModules('slider')) : ?>
      <!-- Start Slider -->
      <div id="slider">
        <jdoc:include type="modules" name="slider" style="raw" />
      </div>
      <!-- Ende Slider -->
      <?php endif; ?>
      <!-- Start Content-Frame -->
      <div class="content-frame">
        <?php if($this->countModules('top1 or top2 or top3 or top4')) : ?>
        <!-- Start Top Module -->
        <div id="top_container">
          <?php if ($this->countModules('top1')) : ?>
          <div class="<?php echo $top_container; ?>">
            <jdoc:include type="modules" name="top1" style="xhtml" />
          </div>
          <?php endif; ?>
          <?php if ($this->countModules('top2')) : ?>
          <div class="<?php echo $top_container; ?>">
            <jdoc:include type="modules" name="top2" style="xhtml" />
          </div>
          <?php endif; ?>
          <?php if ($this->countModules('top3')) : ?>
          <div class="<?php echo $top_container; ?>">
            <jdoc:include type="modules" name="top3" style="xhtml" />
          </div>
          <?php endif; ?>
          <?php if ($this->countModules('top4')) : ?>
          <div class="<?php echo $top_container; ?>">
            <jdoc:include type="modules" name="top4" style="xhtml" />
          </div>
          <?php endif; ?>
        </div>
        <!-- Ende Top Module -->
        <?php endif; ?>
        <?php if ($this->countModules('left')) : ?>
        <!-- Start leftframe -->
        <div id="leftframe">
          <jdoc:include type="modules" name="left" style="rounded" />
        </div>
        <!-- Ende Leftframe -->
        <?php endif; ?>
        <!-- Start Content -->
        <div class="<?php echo $content; ?>">
          <?php if($this->countModules('content-top1 or content-top2 or content-top3')) : ?>
          <!-- Start Content Top Module -->
          <div id="content-top">
            <div id="content_top_container">
              <?php if ($this->countModules('content-top1')) : ?>
              <div class="<?php echo $content_top_container; ?>">
                <jdoc:include type="modules" name="content-top1" style="xhtml" />
              </div>
              <?php endif; ?>
              <?php if ($this->countModules('content-top2')) : ?>
              <div class="<?php echo $content_top_container; ?>">
                <jdoc:include type="modules" name="content-top2" style="xhtml" />
              </div>
              <?php endif; ?>
              <?php if ($this->countModules('content-top3')) : ?>
              <div class="<?php echo $content_top_container; ?>">
                <jdoc:include type="modules" name="content-top3" style="xhtml" />
              </div>
              <?php endif; ?>
            </div>
          </div>
          <!-- Ende Content Top Module -->
          <?php endif; ?>
          <div id="content">
            <jdoc:include type="message" />
            <jdoc:include type="component" />
          </div>
          <?php if($this->countModules('content-bottom1 or content-bottom2 or content-bottom3')) : ?>
          <!-- Start Content Bottom Module -->
          <div id="content-bottom">
            <div id="content_bottom_container">
              <?php if ($this->countModules('content-bottom1')) : ?>
              <div class="<?php echo $content_bottom_container; ?>">
                <jdoc:include type="modules" name="content-bottom1" style="xhtml" />
              </div>
              <?php endif; ?>
              <?php if ($this->countModules('content-bottom2')) : ?>
              <div class="<?php echo $content_bottom_container; ?>">
                <jdoc:include type="modules" name="content-bottom2" style="xhtml" />
              </div>
              <?php endif; ?>
              <?php if ($this->countModules('content-bottom3')) : ?>
              <div class="<?php echo $content_bottom_container; ?>">
                <jdoc:include type="modules" name="content-bottom3" style="xhtml" />
              </div>
              <?php endif; ?>
            </div>
          </div>
          <!-- Ende Content Bottom Module -->
          <?php endif; ?>
        </div>
        <!-- Ende Content -->
        <?php if ($this->countModules('right')) : ?>
        <!-- Start Rightframe -->
        <div id="rightframe">
          <jdoc:include type="modules" name="right" style="rounded" />
        </div>
        <!-- Ende Rightframe -->
        <?php endif; ?>
        <?php if($this->countModules('bottom1 or bottom2 or bottom3 or bottom4')) : ?>
        <!-- Start Bottom Module -->
        <div id="bottom_container">
          <?php if ($this->countModules('bottom1')) : ?>
          <div class="<?php echo $bottom_container; ?>">
            <jdoc:include type="modules" name="bottom1" style="xhtml" />
          </div>
          <?php endif; ?>
          <?php if ($this->countModules('bottom2')) : ?>
          <div class="<?php echo $bottom_container; ?>">
            <jdoc:include type="modules" name="bottom2" style="xhtml" />
          </div>
          <?php endif; ?>
          <?php if ($this->countModules('bottom3')) : ?>
          <div class="<?php echo $bottom_container; ?>">
            <jdoc:include type="modules" name="bottom3" style="xhtml" />
          </div>
          <?php endif; ?>
          <?php if ($this->countModules('bottom4')) : ?>
          <div class="<?php echo $bottom_container; ?>">
            <jdoc:include type="modules" name="bottom4" style="xhtml" />
          </div>
          <?php endif; ?>
        </div>
        <!-- Ende Bottom Module -->
        <?php endif; ?>
      </div>
      <!-- Ende Content-Frame -->
      <!-- Start Footer -->
      <div id="footer">
        <div id="breadcrumbs">
          <div class="breadcrumbs">
            <jdoc:include type="module" name="breadcrumbs" style="raw" />
          </div>
        </div>
        <?php if($this->countModules('footer1 or footer2 or footer3 or footer4')) : ?>
        <!-- Start Footer Module -->
        <div id="footer_container">
          <?php if ($this->countModules('footer1')) : ?>
          <div class="<?php echo $footer_container; ?>">
            <jdoc:include type="modules" name="footer1" style="xhtml" />
          </div>
          <?php endif; ?>
          <?php if ($this->countModules('footer2')) : ?>
          <div class="<?php echo $footer_container; ?>">
            <jdoc:include type="modules" name="footer2" style="xhtml" />
          </div>
          <?php endif; ?>
          <?php if ($this->countModules('footer3')) : ?>
          <div class="<?php echo $footer_container; ?>">
            <jdoc:include type="modules" name="footer3" style="xhtml" />
          </div>
          <?php endif; ?>
          <?php if ($this->countModules('footer4')) : ?>
          <div class="<?php echo $footer_container; ?>">
            <jdoc:include type="modules" name="footer4" style="xhtml" />
          </div>
          <?php endif; ?>
        </div>
        <!-- Ende Footer Module -->
        <?php endif; ?>
        <!-- Start Copyright -->
        <div id="copyright">
          <div class="copyright"> &copy; <?php echo  $this->params->get('copyrightText');  ?> <a href="<?php echo  $this->params->get('copyrightURL');  ?>" target="_self"><?php echo  $this->params->get('copyrightLink');  ?></a> </div>
          <!-- Start Copyright by ah-68 - Dieser Link darf nicht ohne meine schriftliche Einwilligung entfernt oder veraendert werden. / You are not allowed to remove or change this link without my written permission. -->
          <div class="copyright-ah-68"> Template Design <a href="http://www.ah-68.de/" target="_blank">ah-68</a> </div>
          <!-- Ende Copyright by ah-68 -->
        </div>
        <!-- Ende Copyright -->
      </div>
      <!-- Ende Footer -->
    </div>
    <!-- Ende Contentframe -->
  </div>
  <!-- Ende Wrap -->
</div>
<!-- Ende Wrapper -->
<!-- Start ToTop -->
<div id="toTop">
  <div class="gotop"><span title="nach oben">&uarr;</span></div>
</div>
<!-- Ende ToTop -->
<jdoc:include type="modules" name="debug" />
<script type="text/javascript">
jQuery(document).ready(function($) {
jQuery('ul.menusf-vmenu').supersubs({
		minWidth:    <?php echo  $this->params->get('sfvminwidth');  ?>,
		maxWidth:    <?php echo  $this->params->get('sfvmaxwidth');  ?>,
		extraWidth:  <?php echo  $this->params->get('sfvextrawidth');  ?>
}).superfish();

jQuery('ul.menusf-vmenu').superfish({
      delay:       <?php echo  $this->params->get('sfvduration');  ?>,  
      animation: {opacity:'<?php echo  $this->params->get('sfvopacity');  ?>',height:'<?php echo  $this->params->get('sfvheight');  ?>'},  
      speed:       '<?php echo  $this->params->get('sfvspeed');  ?>',
	  easing      : '<?php echo  $this->params->get('sfveasing');  ?>'
}); 
$("ul.menusf-vmenu").supposition();
});
</script>
<?php if ($this->countModules('superfish')): ?>
<script type="text/javascript">
jQuery(document).ready(function($) {

jQuery('ul.menusf-menu').supersubs({
		minWidth:    <?php echo  $this->params->get('sfminwidth');  ?>,
		maxWidth:    <?php echo  $this->params->get('sfmaxwidth');  ?>,
		extraWidth:  <?php echo  $this->params->get('sfextrawidth');  ?>
}).superfish();
jQuery('ul.menusf-menu').superfish({
      delay:       <?php echo  $this->params->get('sfduration');  ?>,  
      animation: {opacity:'<?php echo  $this->params->get('sfopacity');  ?>',height:'<?php echo  $this->params->get('sfheight');  ?>'},  
      speed:       '<?php echo  $this->params->get('sfspeed');  ?>',
	  easing      : '<?php echo  $this->params->get('sfeasing');  ?>'
}); 
$("ul.menusf-menu").supposition();
});
</script>
<?php endif; ?>
</body>
</html>
