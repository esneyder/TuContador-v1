<!DOCTYPE html>
<html lang="en">
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
				<h1 class="met_bgcolor met_color2">CONTACTAR</h1>
				<h2 class="met_color2">Usted siempre puede contactar con nosotros!</h2>

				<ul>
					<li><a href="index.php" class="met_color2">Inicio</a></li>
					<li class="met_color2">Contacto</li>
				</ul>
			</div>
		</div>
	</div>

	<div class="row-fluid">
	<div class="span6">
		<div id="map"></div>
	</div>
		<div class="span6">
			 
			<div class=" met_bgcolor3 met_color2 met_contact">
				<div class="met_contact_info">
					<h3 class="met_bold_one met_color">INFORMACIÓN DE CONTACTO</h3>
					<i class="icon-phone"></i> <span>Telephone</span>: 5811564-3116535619 <br>
					<i class="icon-envelope"></i> <span>E-Mail</span>: info@acirsas.com<br>
					<i class="icon-map-marker"></i> <span>Address</span>: Calle 35C N° 86a-46
				</div>

				<div class="met_contact_socials clearfix">					
					<a class="met_color2 met_color_transition" target="_blank" href="https://www.facebook.com/pages/Tu-Contador/140399802639703?fref=ts"><i class="icon-facebook"></i></a>
					<a class="met_color2 met_color_transition" target="_blank" href="https://twitter.com/acirsas"><i class="icon-twitter"></i></a>
					 
					<a class="met_color2 met_color_transition" target="_blank" href="https://plus.google.com/100703969437273280569/posts"><i class="icon-google-plus"></i></a>
					 
				</div>

				<div class="met_contact_form">
					<h5 class="met_bold_one met_color">FORMULARIO DE CONTACTO</h5>
					<form method="post" action="?" class="met_contact_form clearfix">
						<input type="text" name="NameSurname" required="" placeholder="* Nombre">
						<input type="email" name="EMail" required="" placeholder="* E-Mail">
						<textarea name="Message" class="area" required="" placeholder="* Mensaje"  rows="30" cols="10"></textarea>
						 
						<div class="met_contact_thank_you">Hemos procesado su mensaje.
						                                   <br>Gracias!</div>
						<input type="submit" value="Enviar" class="met_bgcolor met_color2">
					</form>
				</div>

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