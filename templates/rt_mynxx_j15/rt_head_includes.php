<?php

// This information has been pulled out of index.php to make the template more readible.
//
// This data goes between the <head></head> tags of the template
// 
// 

?>

<link rel="shortcut icon" href="<?php echo $this->baseurl; ?>/images/favicon.ico" />
<link href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template?>/css/template.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template?>/css/<?php echo $body_style; ?>.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template?>/css/typography.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $this->baseurl ?>/templates/system/css/system.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $this->baseurl ?>/templates/system/css/general.css" rel="stylesheet" type="text/css" />
<?php if($mtype=="moomenu" or $mtype=="suckerfish") :?>
<link href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template?>/css/rokmoomenu.css" rel="stylesheet" type="text/css" />
<?php endif; ?>
<?php if (!defined('VM_THEMEURL')) :?>
	<script type="text/javascript">window.templatePath = '<?php echo JURI::base(); ?>';</script>
	<link href="<?php echo $this->baseurl; ?>/components/com_virtuemart/themes/vm_mynxx/theme.css" rel="stylesheet" type="text/css" />
	<script type="text/javascript" src="<?php echo $this->baseurl; ?>/components/com_virtuemart/themes/vm_mynxx/theme.js"></script> 	
<?php endif; ?>
<style type="text/css">
	div.wrapper,#main-body-bg { <?php echo $template_width; ?>padding:0;}
	#inset-block-left { width:<?php echo $leftinset_width; ?>px;padding:0;}
	#inset-block-right { width:<?php echo $rightinset_width; ?>px;padding:0;}
	#maincontent-block { margin-right:<?php echo $rightinset_width; ?>px;margin-left:<?php echo $leftinset_width; ?>px;}
	/*a, legend, #main-body ul.menu li a:hover, #main-body ul.menu li.parent li a:hover, #main-body ul.menu li.parent ul li.parent ul li a:hover, #main-body ul.menu li.active a, #main-body ul.menu li.parent li.active a, #main-body ul.menu li.parent li.parent li.active a, #main-body ul.menu li.cat-open a, #main-body ul.menu li.parent li.cat-open a, #main-body ul.menu li.parent li.parent li.cat-open a, .roktabs-wrapper .roktabs-links ul li.active span, .color h3 span, #vmMainPage span.catbar-text h3, div.pathway a {color: <?php echo $this->params->get( 'primaryColor' ); ?>;}*/
	/*#page-bg, .roktabs-wrapper .roktabs-links ul li.active span {border-top: 3px solid <?php echo $this->params->get( 'primaryColor' ); ?>;}*/
	.tabs-bottom .roktabs-links ul li.active span {border-bottom: 3px solid <?php echo $this->params->get( 'primaryColor' ); ?>;border-top: 0;}
</style>	
<?php if (rok_isIe()) :?>
<!--[if IE 7]>
<link href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template?>/css/template_ie7.css" rel="stylesheet" type="text/css" />	
<![endif]-->	
<?php endif; ?>
<?php if (rok_isIe(6)) :?>
<!--[if lte IE 6]>
<link href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template?>/css/template_ie6.css" rel="stylesheet" type="text/css" />
<script src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template?>/js/DD_belatedPNG.js"></script>
<script>
    DD_belatedPNG.fix('.png');
</script>
<![endif]-->
<?php endif; ?>
<?php if(rok_isIe(6) and $enable_ie6warn=="true" and $js_compatibility=="false") : ?> 
<script type="text/javascript" src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template?>/js/rokie6warn.js"></script> 
<?php endif; ?>
<script type="text/javascript" src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template?>/js/rokutils.js"></script>
<?php if($mtype=="moomenu" and $js_compatibility=="false") :?>
<script type="text/javascript" src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template?>/js/rokmoomenu.js"></script>
<script type="text/javascript" src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template?>/js/mootools.bgiframe.js"></script>

<?php endif; ?>
<?php if((rok_isIe(6) or rok_isIe(7)) and ($mtype=="suckerfish" or $mtype=="splitmenu")) :
  echo "<script type=\"text/javascript\" src=\"" . $this->baseurl . "/templates/" . $this->template . "/js/ie_suckerfish.js\"></script>\n";
endif; ?>
