<?php include_once 'connection/dbconfig.php'; ?>
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
				<h1 class="met_bgcolor met_color2">Noticias</h1>
				<h2 class="met_color2">Actualidad</h2>

				<ul>
					<li><a href="index.php" class="met_color2">Inicio</a></li>
					<li class="met_color2">Noticias</li>
				</ul>
			</div>
		</div>
	</div>

	<div class="row-fluid met_portfolio_row">
         <?php   
							 $query = "SELECT * FROM principal limit 4";
						        $stmt =  $DB_con->prepare($query);
						        $stmt->execute();    
						        if($stmt->rowCount()>0)
						        {
						            while($row=$stmt->fetch(PDO::FETCH_ASSOC))
						            {
						                ?> 

		<div class="span6 clearfix">

			<div class="met_portfolio_item_preview_wrap clearfix">
				<a href="portfolio_detail.html" class="met_portfolio_item_preview">
				<img src=" <?php print($row['slider']); ?>" alt=""/></a>
				<div class="met_portfolio_item_overlay met_bgcolor6_trans">
					<a href="<?php print($row['slider']); ?>" rel="lb_03" 
					class="met_bgcolor met_color2 met_bgcolor_transition2">
					<i class="icon-film"></i></a>
					<a href="noticias_detail.php?id=<?php print($row['id']); ?>"
					 class="met_bgcolor met_color2 met_bgcolor_transition2"><i class="icon-link"></i></a>
				</div>

				<div class="lightbox-images">
					<a rel="lb_03" href="photos/lightBoxImages/2.jpg"></a>
					<a rel="lb_03" href="photos/lightBoxImages/3.jpg"></a>
				</div>
			</div>

			<div class="met_portfolio_item_details clearfix">
				<div class="met_portfolio_item_descr met_bgcolor3">
					<div class="met_color2">
						<a href="noticias_detail.php?id=<?php print($row['id']); ?>">
						<h3 class="met_color2 met_bold_one met_color_transition">
						<?php print($row['titulo']); ?></h3></a>
						<p> <?php print($row['subtitulo']); ?></p>
					</div>
				</div>
				<div class="met_portfolio_item_share met_color2 met_bgcolor">
					<span>SHARE</span>
					<div class="met_portfolio_item_socials">
						<div>
							<a class="met_color_transition" target="_blank" href="http://www.facebook.com/sharer.php?u=http://acirsas.com/noticia.php?id=<?php print($row['id']); ?>"><i class="icon-facebook"></i></a>
							<a class="met_color2" title="Tweet This on Twitter" target="_blank" href="http://twitter.com/home?status=Get Acirsas - http://acirsas.com/noticia.php?id=<?php print($row['id']); ?>"><i class="icon-twitter"></i></a>
							<a class="met_color2" title="Share This on Google+" target="_blank" href="https://plus.google.com/share?url=hhttp://acirsas.com/noticia.php?id=<?php print($row['id']); ?>"><i class="icon-google-plus"></i></a>
						</div>
					</div>
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
					 ?>	
 
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