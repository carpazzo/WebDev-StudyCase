<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<link href="<?php echo get_bloginfo('template_directory'); ?>/style.css" rel="stylesheet">
	<title>
		Homepage
	</title>
</head>
<body>
	<div id="wrapper">
		<header>
			<div class="banner">
				<img src="banner1.jpeg" alt="banner1" class="banner1">	
			</div>
            <div id = "navigation">
        		<div class="topnav">
            		<a href="page.html">Home</a>
           			<a href="internethistory.html">Internet History</a>
            		<a href="socialimpact.html">Social Impact</a>
           		 	<a href="surfalungt.html">Surfalungt</a>
            		<a href="webtech.html">WebTech</a>
            		<a href="aboutme.html">About Me</a>
            		<a href="formulary.html">Contact</a>
        		</div>
    		</div>

			<aside>
				<p>Some things is about to happen!</p>
			</aside>
		</header>
		<nav>
			<ul>
				<li class="page_item"><a href="<?php echo home_url(); ?>">Home</a></li>
				<?php wp_list_pages( '&title_li=&exclude=63' ); ?>
			</ul>
		</nav>
        