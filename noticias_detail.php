<?php include_once 'connection/dbconfig.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />

	 <?php include 'head.php'; ?>

	<style id="colorChanges" type="text/css"></style>
</head>
<body class="clearfix" data-smooth-scrolling="1">
<div class="met_page_wrapper">

<header class="met_content">
	 <?php include 'header.php'; ?>
</header><!-- Header Ends  -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.4&appId=1429258377355507";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
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

                          <?php

                             if(isset($_GET['id'])) {
                             	$id = $_GET['id'];


							 $query = "SELECT * FROM principal where id=$id LIMIT 1";
						        $stmt =  $DB_con->prepare($query);
						        $stmt->execute();    
						        if($stmt->rowCount()>0)
						        {
						            while($row=$stmt->fetch(PDO::FETCH_ASSOC))
						            {
						            	 
						                ?> 
				

<div class="met_content">
	<div class="row-fluid">
		<div class="span12">
			<div class="met_page_header met_bgcolor5 clearfix">
				<h1 class="met_bgcolor met_color2"><?php print($row['titulo']); ?></h1>
				<h2 class="met_color2"><?php print( substr($row['subtitulo'], 0, 20).'...' ); ?></h2>

				<ul>
					<li><a href="index.html" class="met_color2">Inicio</a></li>
					<li><a href="noticias.php" class="met_color2">Noticias</a></li>
					<li class="met_color2"> Detalle noticia</li>
				</ul>
			</div>
		</div>
	</div>

	<div class="row-fluid">
		<div class="span12">
			<img src="<?php print($row['slider']); ?>" alt=""/>
		</div>
	</div>

	<div class="row-fluid">
		<div class="span3">
			<div class="met_portfolio_service_box">
				<h3 class="met_bold_one">¿Quieres tu Pagina Web?</h3>
				<h4 class="met_bold_one">Comunicate con Nosotros</h4>
				<a class="met_portfolio_service" href="https://www.facebook.com/ealvarezing">Esneyder Alvarez</a>
				<a class="met_portfolio_service" href="https://www.facebook.com/juanguillermo.norenazulaga">Juan Guillermo Noreña</a>
				 
			</div>

			<div class="met_portfolio_tag_box">
				<h3 class="met_bold_one">TAGS</h3>
				<a class="met_tag_size1" href="#">Finanzas</a>
				 <a href="portfolio.html">Indicadores</a>
				<a class="met_tag_size1" href="#">El Tiempo</a>
				 
			</div>

			<div class="met_portfolio_share_box">¡
				<h3 class="met_bold_one">Compartir</h3>
				<a class="met_color_transition" 
				target="_blank" href="http://www.facebook.com/sharer.php?u=http://acirsas.com/noticia.php?id=<?php print($row['id']); ?>"><i class="icon-facebook"></i></a>
				<a class="met_color_transition" target="_blank" href="http://twitter.com/home?status=Get Acirsas - http://acirsas.com/noticia.php?id=<?php print($row['id']); ?>"><i class="icon-twitter"></i></a>
				 <a class="met_color_transition" target="_blank" href="https://plus.google.com/share?url=http://acirsas.com/noticia.php?id=<?php print($row['id']); ?>"><i class="icon-google-plus"></i></a>
				<a class="met_color_transition" href="#"><i class="icon-rss"></i></a>
			</div>

			<div class="met_portfolio_posted_by">
				Posted by <a href="#">Acirsas</a><br>
				<?php print($row['fecha']); ?>
			</div>
		</div>
		<div class="span9 met_portfolio_detail_box">
			 <?php print($row['texto']); ?>
          

	    </div>
	    <div class="n">
    <div id="fb-root" class="fb_reset">
        <div style="position: absolute; top: -10000px; height: 0px; width: 0px;">
        </div>
    </div>
    <div class="fb-comments" data-href="https://www.facebook.com/pages/Tu-Contador/140399802639703" data-width="735" data-numposts="5"></div>
</div>
	</div>
</div>

                           <?php
						            }
						        }
						        else
						        {
						            
						      echo "No hay datos para mostrar.. ";

						        }
						        }

						         ?>

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