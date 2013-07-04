<!DOCTYPE html>
<!--[if IEMobile 7]><html class="iem7" <?php print $html_attributes; ?>><![endif]-->
<!--[if (lte IE 6)&(!IEMobile)]><html class="ie6 ie6-7 ie6-8" <?php print $html_attributes; ?>><![endif]-->
<!--[if (IE 7)&(!IEMobile)]><html class="ie7 ie6-7 ie6-8" <?php print $html_attributes; ?>><![endif]-->
<!--[if (IE 8)&(!IEMobile)]><html class="ie8 ie6-8" <?php print $html_attributes; ?>><![endif]-->
<!--[if (gte IE 9)|(gt IEMobile 7)]><!--><html <?php print $html_attributes . $rdf_namespaces; ?>><!--<![endif]-->
<head>
  <?php print $head; ?>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="MobileOptimized" content="width">
  <meta name="HandheldFriendly" content="true">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta http-equiv="cleartype" content="on">
  <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
  <title><?php print $head_title; ?></title>
  <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/css/bootstrap-combined.no-icons.min.css" rel="stylesheet">
  <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css" rel="stylesheet">
  <?php print $styles; ?>
  <?php print $scripts; ?>
  <script type="text/javascript">
    jQuery(document).ready(function(){
      jQuery('#menu-bar .menu').addClass('nav nav-tabs');
      jQuery('#menu-bar .menu a.active').parent().addClass('active');
      jQuery('#search-form').next('ul').wrap('<div class="alert alert-info" id="search-help">');
      jQuery('#search-help').prepend('<h3>Need Help?</h3>');
      jQuery('.facetapi-limit-link').prepend('<i class="icon-collapse"></i> ');
      jQuery('.facetapi-limit-link').toggle(
        function(){
          jQuery(this).prepend('<i class="icon-collapse-top"></i> ');
        },
        function(){
          jQuery(this).prepend('<i class="icon-collapse"></i> ');
        }
      );
    });
  </script>
  <!--[if lt IE 9]>
  <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
</head>
<body class="<?php print $classes; ?>"<?php print $attributes; ?>>
  <div id="skip-link">
    <a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>
  </div>
  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>
</body>
</html>
