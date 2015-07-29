<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8" />

	 <?php include 'head.php'; ?>
</head>
<body class="clearfix" data-smooth-scrolling="1">
<div class="met_page_wrapper">

<header class="met_content">
	<?php include 'header.php'; ?>
</header><!-- Header Ends  -->

<nav class="met_content met_main_nav met_bgcolor3 clearfix" data-fixed="1">
	 <?php include 'nav.php'; ?>
    <?php include 'librery.php'; ?>

	<div class="pull-right met_bgcolor met_menu_search_wrapper">
		<form class="met_menu_search" method="post" action="?">
			<input type="text" name="search" class="met_menu_search_text" required="" placeholder="Search">
			<div class="met_menu_search_submit"><i class="icon-search"></i></div>
		</form>
	</div>
</nav><!-- Menu Ends  -->



<div class="met_content">
	<div class="row-fluid">
		<div class="span12">
			<div class="met_page_header met_bgcolor5 clearfix">
				<h1 class="met_bgcolor met_color2">Nuestros Clientes</h1>
				<h2 class="met_color2">Clientes que han depositado su confianza</h2>

				<ul>
					<li><a href="index.php" class="met_color2">Inicio</a></li>
					<li class="met_color2">Clientes</li>
				</ul>
			</div>
		</div>
	</div>

	<div class="row-fluid met_gallery">
		 
		 
		<div class="span3">
			<div class="met_gallery_wrap clearfix">
				<a href="#"><img src="photos/gallery/thumbnails/7.jpg" alt=""></a>
				<div class="met_gallery_overlay met_bgcolor6_trans">
					<a href="photos/lightBoxImages/1.jpg" class="met_bgcolor met_bgcolor_transition2 met_color2" rel="lb_07"><i class="icon-picture"></i></a>
				</div>

				<div class="lightbox-images">
					<a rel="lb_07" href="photos/lightBoxImages/2.jpg"></a>
					<a rel="lb_07" href="photos/lightBoxImages/3.jpg"></a>
				</div>
			</div>
		</div>
		<div class="span3">
			<div class="met_gallery_wrap clearfix">
				<a href="#"><img src="photos/gallery/thumbnails/8.jpg" alt=""></a>
				<div class="met_gallery_overlay met_bgcolor6_trans">
					<a href="photos/lightBoxImages/1.jpg" class="met_bgcolor met_bgcolor_transition2 met_color2" rel="lb_08"><i class="icon-picture"></i></a>
				</div>

				<div class="lightbox-images">
					<a rel="lb_08" href="photos/lightBoxImages/2.jpg"></a>
					<a rel="lb_08" href="photos/lightBoxImages/3.jpg"></a>
				</div>
			</div>
		</div>
	</div>
	<div class="row-fluid">
		<div class="span12">
			<div class="met_pagination">
				<a href="#" class="met_bgcolor_transition met_pagination_prev"></a>
				<a href="#" class="met_bgcolor_transition">2</a>
				 
				<a href="#" class="met_bgcolor_transition met_pagination_next"></a>
			</div>
		</div>
	</div>
</div>



<div class="met_twitter_ticker_wrap met_bgcolor">
	<div class="met_content clearfix">
		<i class="icon-twitter icon-2x pull-left met_color2"></i>
		<div class="met_twitter_ticker_pager pull-right">
			<a href="#"><i class="icon-angle-left icon-large"></i></a>
			<a href="#"><i class="icon-angle-right icon-large"></i></a>
		</div>

		<div class="met_news_ticker_wrapper clearfix">
			<div class="met_twitter_ticker">

			</div>
		</div>
	</div>
</div>

 <?php include 'footer.php'; ?>


</div>
</body>
</html>