<?php include_once 'connection/dbconfig.php'; ?>
  

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8" />

	 	<?php include 'head.php'; ?>
	<style id="colorChanges" type="text/css"></style>
</head>
<body class="clearfix" data-smooth-scrolling="1">
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.4&appId=1429258377355507";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
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
					<h1 class="met_bgcolor met_color2">ACTUALIDAD</h1>
					<h2 class="met_color2">Auditoria</h2>

					<ul>
						<li><a href="index.html" class="met_color2">Inicio</a></li>
						<li><a href="blog.html" class="met_color2">Blog</a></li>
						<li class="met_color2">Qué ofrecemos?</li>
					</ul>
				</div>
			</div>
		</div>

		<div class="row-fluid">
			<div class="span9">

                             <?php

                             if(isset($_GET['id'])) {
                             	$id = $_GET['id'];


							 $query = "SELECT * FROM noticias where id=$id ";
						        $stmt =  $DB_con->prepare($query);
						        $stmt->execute();    
						        if($stmt->rowCount()>0)
						        {
						            while($row=$stmt->fetch(PDO::FETCH_ASSOC))
						            {
						            	$categori=$row['categoria'];
						                ?> 
				

				<div class="row-fluid">
					<div class="span12">
						<div href="blog_detail.html" class="met_blog_list_preview">
							<img src="<?php print($row['imagen']); ?> " alt="" />
						</div>

						<span class="met_blog_title">
						<div class="fb-like"></div>
						<a class="twitter-share-button"
  href="https://twitter.com/intent/tweet">
Tweet</a>
						<h2 class="met_bold_one met_color_transition"><?php print($row['titulo']); ?> </h2></span>
						 <p><?php print($row['intro']); ?> </p>
						 <p><?php print($row['texto']); ?> </p>
						<div class="met_blog_miscs clearfix">
							<div class="met_blog_socials">
								<a class="met_color_transition" target="_blank" href="https://www.facebook.com/pages/Tu-Contador/140399802639703?fref=ts"><i class="icon-facebook"></i></a>
								<a class="met_color_transition" target="_blank" href="#"><i class="icon-twitter"></i></a>
								<a class="met_color_transition" href="javascript:void((function(){var e=document.createElement('script'); e.setAttribute('type','text/javascript'); e.setAttribute('charset','UTF-8'); e.setAttribute('src','http://assets.pinterest.com/js/pinmarklet.js?r='+Math.random()*99999999);document.body.appendChild(e)})());"><i class="icon-pinterest"></i></a>
								<a class="met_color_transition" target="_blank" href="#"><i class="icon-google-plus"></i></a>
								<a class="met_color_transition" href="#"><i class="icon-rss"></i></a>
							</div>

							<div class="met_blog_posted_by">Publicado por <a href="acirsas.com">Acirsas</a></div>

							<div class="met_blog_posted_by"><?php print($row['fecha']); ?> </div>
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

				<!--zona de comentarios -->
<div class="n">
    <div id="fb-root" class="fb_reset">
        <div style="position: absolute; top: -10000px; height: 0px; width: 0px;">
        </div>
    </div>
    <div class="fb-comments" data-href="https://www.facebook.com/pages/Tu-Contador/140399802639703" data-width="735" data-numposts="5"></div>
</div>
<!--zona de comentarios-->

				 

				 

			</div>
			<div class="span3">
				<div class="row-fluid">
					<div class="span12">
						<div class="met_blog_categories met_bgcolor3">
							<h2 class="met_title_stack">BLOG</h2>
							<h3 class="met_title_stack met_bold_one">CATEGORIAS</h3>

							 <?php   
							  $query = "SELECT * FROM categorias where estado=1";
						        $stmt =  $DB_con->prepare($query);
						        $stmt->execute();    
						        if($stmt->rowCount()>0)
						        {
						            while($row=$stmt->fetch(PDO::FETCH_ASSOC))
						            {
						                ?> 
							<a href="blog.php"><?php print($row['nombre']); ?></a>
							 
							 <?php
						            }
						        }
						        else
						        { 
						      echo "No hay datos para mostrar.. ";

						        }
						         ?>
						</div>
					</div>
				</div>
				<div class="row-fluid">

 <div class="span12">
		<div class="met_twitter_widget met_color2 met_bgcolor clearfix">
			<h2 class="met_title_stack">ACTUALIDAD</h2>
			 
			
			 <a class="twitter-timeline" href="https://twitter.com/acirsas" data-widget-id="624617618352275456">Tweets por el @acirsas.</a>
             <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

 
		</div>
	</div><!-- Twitter Ticker Ends -->

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