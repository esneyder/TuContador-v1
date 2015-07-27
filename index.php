<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />

	<?php include 'head.php'; ?>
	<script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
	<script type="text/javascript" src="http://www.applab.in/Scripts/js/jquery.carouFredSel-5.5.0-packed.js"></script>
    <script src="js/indicadores.js"></script>
    <link rel="stylesheet" href="css/indicadores.css">
</head>
<body class="clearfix" data-smooth-scrolling="1">
<div class="met_page_wrapper">
<header class="met_content">
	<?php include 'header.php'; ?>
     

	<div id="bgBody" class="bgCarouselH">
		<script type="text/javascript">
		  // <![CDATA[
		  var bgHost = "http://www.applab.in/";
		  var bgType = "CL-19288-1";
		  var bgIndi = "94|95|96|97|100|163|164|165";
		  (function(d){ 
		  	var f = bgHost+ 
		  	"apps/indicators/"+bgType+"/"+
		  	bgIndi+"/functions.js"; 
		  	
		  	d.write(unescape("%3Cscript src='"+f+
		  		"' type='text/javascript'%3E%3C/script%3E")); })(document);
		  // ]]>
		</script>
	</div>
	

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
		<div class="span9">
			<div class="met_thumbnail_slider_1_wrap et_thumbnail_slider_1_wrap_loading met_bgcolor4 clearfix">
				<div class="met_thumbnail_slider_1_big">
					<div class="met_thumbnail_slider_1_images">

					<?php 
						include_once 'module/PrincipalSlider/GetSliderPrincipal.php';
						$fVSlider= new GetSliderPrincipal();
						$listSlider= $fVSlider->GetSlider();
						foreach ($listSlider as $key => $fila) {
							echo '
							<div data-slider-format="big-1-a">
							<img src="'.$fila['imagen'].'" />
							<div class="met_thumbnail_slider_1_effects met_thumbnail_slider_1_effects_left met_thumbnail_slider_1_top">
								<div class="met_thumbnail_slider_1_title met_bgcolor4">
									'.$fila['titulo'].'
									<a href="#" class="met_bgcolor met_color2 met_bgcolor_transition2"></a>
								</div>
								<div class="met_thumbnail_slider_1_subtitle met_bgcolor5_trans">'.$fila['subtitulo'].'</div>
							</div>
						</div>';
						}

					 ?>	 
						<div data-slider-format="big-1-a">
							<img src="http://www.frentecivicosomosmayoria.es/wp-content/uploads/2013/09/comp.jpg" />
							<div class="met_thumbnail_slider_1_effects met_thumbnail_slider_1_effects_left met_thumbnail_slider_1_top">
								<div class="met_thumbnail_slider_1_title met_bgcolor4">
									Análisis Económico
									<a href="#" class="met_bgcolor met_color2 met_bgcolor_transition2"></a>
								</div>
								<div class="met_thumbnail_slider_1_subtitle met_bgcolor5_trans">Fundamentos de la economia</div>
							</div>
						</div>
						<div data-slider-format="big-1-b">
							<img src="http://www.frentecivicosomosmayoria.es/wp-content/uploads/2015/02/EUUSbridgettip.jpg" />
							<div class="met_thumbnail_slider_1_effects met_thumbnail_slider_1_effects_right met_thumbnail_slider_1_top">
								<div class="met_thumbnail_slider_1_title met_bgcolor4">
							       Finanzas Personales		
									<a href="#" class="met_bgcolor met_color2"></a>
								</div>
								<div class="met_thumbnail_slider_1_subtitle met_bgcolor5_trans">Errores financieros</div>
							</div>
						</div>
						<div data-slider-format="big-1-c">
							<img src="https://wkusaapbz93eciyl3ze4vh1a-wpengine.netdna-ssl.com/wp-content/uploads/2014/07/home_cal_pt.png" />
							<div class="met_thumbnail_slider_1_effects met_thumbnail_slider_1_effects_left met_thumbnail_slider_1_bottom">
								<div class="met_thumbnail_slider_1_title met_bgcolor4">
									Gerencia y Liderazgo
									<a href="#" class="met_bgcolor met_color2 met_bgcolor_transition2"></a>
								</div>
								<div class="met_thumbnail_slider_1_subtitle met_bgcolor5_trans">Por qué es necesaria la gerencia</div>
							</div>
						</div>
						<div data-slider-format="big-1-d">
							<img src="http://www.zupot.com/wp-content/uploads/2013/09/multicanais.png" />
							<div class="met_thumbnail_slider_1_effects met_thumbnail_slider_1_effects_right met_thumbnail_slider_1_bottom">
								<div class="met_thumbnail_slider_1_title met_bgcolor4">
									Teoría de los Costos
									<a href="#" class="met_bgcolor met_color2"></a>
								</div>
								<div class="met_thumbnail_slider_1_subtitle met_bgcolor5_trans">Los costos y los sistemas contables</div>
							</div>
						</div> 
					</div>
				</div>
				<div class="met_thumbnail_slider_1_overlay"></div>
			</div>
		</div>


<div class="span3">
		<h2 class="met_bold_one met_title_with_pager met_clear_margin_top clearfix">
			 RECIENTES
			<nav class="met_recent_works_pages"></nav>
		</h2>

		<div class="met_recent_works clearfix">
			<div class="met_recent_work_item">
				<a href="portfolio_detail.html" class="met_recent_work_image"><img src="photos/recentWorks/1.jpg" alt=""></a>
				<div class="met_recent_work_overbox met_bgcolor">
					<a href="#">
						<span class="met_color2">NIFF</span>
						<i class="icon-plus met_color2"></i>
					</a>
				</div>
			</div>
			<div class="met_recent_work_item">
				<a href="portfolio_detail.html" class="met_recent_work_image"><img src="photos/recentWorks/2.jpg" alt=""></a>
				<div class="met_recent_work_overbox met_bgcolor">
					<a href="#">
						<span class="met_color2">CONTABILIDAD</span>
						<i class="icon-plus met_color2"></i>
					</a>
				</div>
			</div>
			<div class="met_recent_work_item">
				<a href="portfolio_detail.html" class="met_recent_work_image"><img src="photos/recentWorks/3.jpg" alt=""></a>
				<div class="met_recent_work_overbox met_bgcolor">
					<a href="#">
						<span class="met_color2">DOLLAR</span>
						<i class="icon-plus met_color2"></i>
					</a>
				</div>
			</div>
			<div class="met_recent_work_item">
				<a href="portfolio_detail.html" class="met_recent_work_image"><img src="photos/recentWorks/1.jpg" alt=""></a>
				<div class="met_recent_work_overbox met_bgcolor">
					<a href="#">
						<span class="met_color2">SEGURIDAD</span>
						<i class="icon-plus met_color2"></i>
					</a>
				</div>
			</div>
			<div class="met_recent_work_item">
				<a href="portfolio_detail.html" class="met_recent_work_image"><img src="photos/recentWorks/2.jpg" alt=""></a>
				<div class="met_recent_work_overbox met_bgcolor">
					<a href="#">
						<span class="met_color2">HOSTING</span>
						<i class="icon-plus met_color2"></i>
					</a>
				</div>
			</div>
			<div class="met_recent_work_item">
				<a href="portfolio_detail.html" class="met_recent_work_image"><img src="photos/recentWorks/3.jpg" alt=""></a>
				<div class="met_recent_work_overbox met_bgcolor">
					<a href="#">
						<span class="met_color2">STADISTICA</span>
						<i class="icon-plus met_color2"></i>
					</a>
				</div>
			</div>
		</div>
	</div>


	</div><!-- Slider Ends  -->

	
	<div class="row-fluid">
		<div class="span6">
			<div class="met_img_with_text clearfix">
				<div class="met_img_with_text_preview">
					<img src="http://www.deltaitservices.in/Images/domain.jpg" alt="">
					<div class="met_img_with_text_overlay met_bgcolor5_trans">
						<a href="photos/lightBoxImages/1.jpg" rel="lb_01"
						 class="met_portfolio_item_lb met_bgcolor5 met_color2"><i
						  class="icon-search"></i></a>
					</div>

					<div class="lightbox-images">
						<a rel="lb_01" href="photos/lightBoxImages/2.jpg"></a>
						<a rel="lb_01" href="photos/lightBoxImages/3.jpg"></a>
					</div>
				</div>
				<article class="met_bgcolor5 met_color2">
					<div>
						<h2 class="met_title_stack">DESARROLLO WEB</h2>
						<h3 class="met_title_stack met_bold_one">RESPONSIVE</h3>
						<br>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
					</div>
				</article>
			</div>
		</div>
		<div class="span6">
			<div class="met_img_with_text clearfix">
				<div class="met_img_with_text_preview">
					<img src="http://inergram.com.ar/wp-content/uploads/2013/11/img_box_12-270x240.png" alt="">
					<div class="met_img_with_text_overlay met_bgcolor6_trans">
						<a href="photos/lightBoxImages/1.jpg" rel="lb_02" class="met_bgcolor5 met_color2"><i class="icon-search"></i></a>
					</div>

					<div class="lightbox-images">
						<a rel="lb_02" href="photos/lightBoxImages/2.jpg"></a>
						<a rel="lb_02" href="photos/lightBoxImages/3.jpg"></a>
					</div>
				</div>
				<article class="met_bgcolor5 met_color2">
					<div>
						<h2 class="met_title_stack">CONTABILIDAD</h2>
						<h3 class="met_title_stack met_bold_one">NORMAS</h3>
						<br>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
					</div>
				</article>
			</div>
		</div>
	</div><!-- Image with Texts Ends  -->


	

	<div class="row-fluid">

<div class="span6">
		<div class="met_icon_tabs">
			<nav class="met_bgcolor5 clearfix">
				<a href="#tab_html5" class="met_active_tab"><i class="icon-html5"></i></a>
				<a href="#tab_css3"><i class="icon-css3"></i></a>
				<a href="#tab_responsive"><i class="icon-resize-small"></i></a>
				<a href="#tab_documentation"><i class="icon-question"></i></a>
				<a href="#tab_support"><i class="icon-group"></i></a>
			</nav>
			<div class="met_icon_tabs_descrs">
				<article id="tab_html5" class="met_open_tab">
					<h2 class="met_bold_one">DESARROLLO HTML5</h2>
					<p> 
                     Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae eligendi accusamus voluptates, distinctio iure totam quae officia vitae non tempora nisi fugiat adipisci veritatis, facilis at repudiandae! Ratione vel temporibus autem fuga corrupti iure, consectetur, nam similique atque, nostrum commodi molestias necessitatibus. Ea veritatis quod in, deserunt quaerat libero fugit autem pariatur laudantium aperiam id inventore, laboriosam quo, eos asperiores dolore eius sapiente amet molestiae excepturi facere tenetur recusandae illo ut. Modi, dolores aspernatur nisi dolorum mollitia. Voluptatibus vitae earum ipsam nulla quia adipisci at saepe. Ea doloremque architecto dignissimos quia consequatur, adipisci, quaerat rerum perspiciatis voluptas libero eligendi, nam perferendis voluptatem sint. Repudiandae dolore fuga, perspiciatis optio adipisci voluptas, similique voluptate explicabo placeat eum laudantium commodi harum. Repellat, quos!
					</p>
				</article>
				<article id="tab_css3">
					<h2 class="met_bold_one">RESPONSIVE CSS3</h2>
					<p>Sed arcu mi, hendrerit eget nunc vel, pretium euismod purus. Praesent lobortis id purus id egestas.
						<br><br>
					   Integer id malesuada sapien, id faucibus enim. Vestibulum laoreet eros odio, at consectetur odio viverra quis. Curabitur nec nulla eu libero porttitor dictum. Nullam nec diam eu dolor hendrerit tempor. Nulla sed nunc ligula. Ut vel ipsum tellus. In imperdiet enim vel eros fringilla, a dignissim augue tristique. Cras aliquam aliquet sem in molestie. Phasellus euismod odio luctus libero auctor volutpat. Donec consequat nulla sed sem rhoncus, nec ornare libero lobortis. Pellentesque ac ultrices nulla. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer at sem eros. Proin fringilla arcu vitae ligula vulputate blandit.
					</p>
				</article>
				<article id="tab_responsive">
					<h2 class="met_bold_one">COMPATIBILIDAD MOBIL</h2>
					<p>Aenean interdum, neque vel interdum accumsan, nunc est viverra mi, vel molestie libero tellus eget quam. Integer condimentum, tellus vitae volutpat aliquam, turpis leo condimentum massa, sit amet vehicula turpis diam eget lorem. In velit metus, porta sed justo ut, dapibus porta odio. Aenean at lectus vel purus interdum vestibulum. Sed semper mauris eget orci ultricies, eget convallis sem feugiat. In hac habitasse platea dictumst. Vivamus semper tincidunt feugiat. Aliquam erat volutpat.
						<br><br>
					   Nullam viverra turpis vitae suscipit sodales. Phasellus eu fringilla felis, vel congue mauris.
					</p>
				</article>
				<article id="tab_documentation">
					<h2 class="met_bold_one">PREGUNTE POR NUESTROS SERVICIOS</h2>
					<p>Vivamus congue augue at enim iaculis tincidunt. Nam libero odio, fermentum eget gravida eu, aliquet vel enim. Quisque hendrerit ornare faucibus. Quisque in erat vitae orci pulvinar tincidunt. Etiam posuere odio sit amet orci consectetur vehicula. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque id consectetur nulla.
						<br><br>
					   Sed eu bibendum lectus. Ut augue ante, bibendum sed diam placerat, eleifend hendrerit orci. Aliquam nunc augue, malesuada vel placerat non, accumsan ultrices turpis. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Vivamus cursus euismod purus vel aliquet. Quisque ac vulputate libero. Ut a sem nec magna aliquet dictum.
					</p>
				</article>
				<article id="tab_support">
					<h2 class="met_bold_one">SOPORTE PERSONALIZADO</h2>
					<p>Sed sit amet dapibus orci. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Praesent sit amet euismod eros. Morbi at libero tortor. Vivamus venenatis elementum sem. Maecenas eros leo, gravida auctor ipsum quis, pellentesque tempus nisl.
						<br><br>
					   Donec auctor turpis erat, a feugiat nibh mattis egestas. Duis scelerisque vulputate imperdiet. Mauris diam nisl, pulvinar at urna et, rhoncus egestas nisl. Donec tortor urna, ullamcorper id consectetur sed, pharetra ut sem. Nulla sit amet augue odio.
					</p>
				</article>
			</div>
		</div>
	</div>
	


	<div class="span6">
		<div class="met_twitter_widget met_color2 met_bgcolor clearfix">
			<h2 class="met_title_stack">ACTUALIDAD</h2>
 

			 <a class="twitter-timeline" href="https://twitter.com/acirsas" data-widget-id="624617618352275456">Tweets por el @acirsas.</a>
             <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>



		</div>
	</div><!-- Twitter Ticker Ends -->

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