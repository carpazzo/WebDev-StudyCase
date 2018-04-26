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
            <div class="topnav">
            	<a class="active" href="C:/xampp/htdocs/wordpress/wp-content/themes/mytheme/page.html">Home</a>
                <a href="C:/xampp/htdocs/wordpress/wp-content/themes/mytheme/internethistory.html">Internet History</a>
                <a href="C:/xampp/htdocs/wordpress/wp-content/themes/mytheme/socialimpact.html">Social Impact</a>
                <a href="C:/xampp/htdocs/wordpress/wp-content/themes/mytheme/surfalungt.html">Surfalungt</a>
                <a href="C:/xampp/htdocs/wordpress/wp-content/themes/mytheme/webtech.html">WebTech</a>
                <a href="C:/xampp/htdocs/wordpress/wp-content/themes/mytheme/aboutme.html">About Me</a>
                <a href="C:/xampp/htdocs/wordpress/wp-content/themes/mytheme/formulary.html">Contact</a>
            </div>

			<aside>
				<p>Eventuell sidoinformation såsom kontaktuppgifter.Eller knappar för sociala medier</p>
			</aside>
		</header>
		<nav>
			<ul>
				<li class="page_item"><a href="<?php echo home_url(); ?>">Home</a></li>
				<?php wp_list_pages( '&title_li=&exclude=63' ); ?>
			</ul>
		</nav>
        