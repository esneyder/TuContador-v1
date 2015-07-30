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
				<h1 class="met_bgcolor met_color2">SOBRE NOSOTROS</h1>
				<h2 class="met_color2">Construimos cosas de gran utilidad!</h2>

				<ul>
					<li><a href="#" class="met_color2">Inicio</a></li>
					<li class="met_color2">Nosotros</li>
				</ul>
			</div>
		</div>
	</div>

	<div class="row-fluid">
		<div class="span9">

			<div class="row-fluid">
				<div class="span12">


                     <?php   
							 $query = "SELECT * FROM about";
						        $stmt =  $DB_con->prepare($query);
						        $stmt->execute();    
						        if($stmt->rowCount()>0)
						        {
						            while($row=$stmt->fetch(PDO::FETCH_ASSOC))
						            {
						                ?>
					<div class="met_text_block">
						<h2 class="met_bold_one"><?php print($row['titulo']); ?>  </h2>
						<p> 
							 <?php print($row['texto']); ?>
						</p>
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

			<div class="row-fluid">
					 <?php   
							 $query = "SELECT * FROM personas";
						        $stmt =  $DB_con->prepare($query);
						        $stmt->execute();    
						        if($stmt->rowCount()>0)
						        {
						            while($row=$stmt->fetch(PDO::FETCH_ASSOC))
						            {
						                ?> 

				<div class="span4">
					<div class="met_team_member">

						<div class="met_team_member_preview">
							<img src="<?php print($row['imagen']); ?>" alt="<?php print($row['nombre']); ?>" />
							<div class="met_team_member_overlay">
								<div class="met_team_member_skill"><div style="width: 90%"><span class="met_bgcolor_trans met_color2"><?php print($row['caracteristica1']); ?></span></div></div>
								<div class="met_team_member_skill"><div style="width: 60%"><span class="met_bgcolor_trans met_color2"><?php print($row['caracteristica2']); ?></span></div></div>
								<div class="met_team_member_skill"><div style="width: 70%"><span class="met_bgcolor_trans met_color2"><?php print($row['caracteristica3']); ?></span></div></div>
								<div class="met_team_member_skill"><div style="width: 65%"><span class="met_bgcolor_trans met_color2"><?php print($row['caracteristica4']); ?></span></div></div>
							</div>
						</div>

						<div class="met_team_member_details met_bgcolor3 met_color2">
							<h2 class="met_title_stack"><?php print($row['cargo']); ?></h2>
							<h3 class="met_title_stack met_bold_one"><?php print($row['nombre']); ?></h3>
							<p><?php print( substr($row['descripcion'], 0, 100).'(...)' ); ?></p>
						</div>

						<div class="met_team_member_socials met_bgcolor clearfix">
							<a href="<?php print($row['facebook']); ?>" target="_blank" class="met_color2"><i class="icon-facebook"></i></a>
							<a href="<?php print($row['twitter']); ?>" target="_blank" class="met_color2"><i class="icon-twitter"></i></a>
							<a href="<?php print($row['google']); ?>" target="_blank" class="met_color2"><i class="icon-google-plus"></i></a>
							 
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
		<div class="span3">
			<div class="met_cacoon_sidebar met_color2 met_bgcolor3 clearfix">
				<h2 class="met_title_stack">Acirsas</h2>
				<h3 class="met_title_stack met_bold_one">NOTICIAS</h3>

				<div class="met_cacoon_sidebar_wrapper">
				             <?php   
							 $query = "SELECT * FROM noticias ORDER BY fecha DESC LIMIT 3";
						        $stmt =  $DB_con->prepare($query);
						        $stmt->execute();    
						        if($stmt->rowCount()>0)
						        {
						            while($row=$stmt->fetch(PDO::FETCH_ASSOC))
						            {
						                ?> 
					<div class="met_cacoon_sidebar_item clearfix">
						<div class="met_dated_blog_posts">
							<span class="met_date met_color"><span><?php print($row['fecha']); ?></span></span>
							 
							<article>
								<a href="blog_detail.php?id=<?php print($row['id']); ?>"><h3 class="met_color2"><?php print($row['titulo']); ?></h3></a>
							 <p><?php print( substr($row['intro'], 0, 200).'(...)' ); ?></p>
							 </article>
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