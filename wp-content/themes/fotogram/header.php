<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html <?php language_attributes('xhtml'); ?> xmlns="http://www.w3.org/1999/xhtml">
<head profile="http://gmpg.org/xfn/11">


<meta http-equiv="content-type" content="<?php bloginfo('html_type')?>;charset=<?php bloginfo('charset'); ?>"/>
	
<title><?php wp_title( '|', true, 'left' ); ?></title>

<link rel="profile" href=" http://gmpg.org/xfn/11" />

<?php wp_head()?>
</head>
<body <?php body_class()?>>
<div id="page">
<div id="wrapper">

	<div id="header"><h1><a href="<?php echo site_url()?>" title="<?php bloginfo('name')?>"><?php bloginfo('name')?></a></h1></div>

<div id="headerimage" style="width:<?php echo HEADER_IMAGE_WIDTH; ?>px; height:<?php echo HEADER_IMAGE_HEIGHT; ?>px;"><a href="<?php echo site_url()?>" title="<?php bloginfo('name')?>"><img src="<?php header_image(); ?>" width="<?php echo HEADER_IMAGE_WIDTH; ?>" height="<?php echo HEADER_IMAGE_HEIGHT; ?>" alt="<?php bloginfo('name')?>"/></a></div>


	<div id="middle">
		<div id="container">
			<div id="content">