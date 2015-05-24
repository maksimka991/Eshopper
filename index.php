<!DOCTYPE html>
<html lang="en">
	<head>
		
		<!-- -->
		<meta charset="utf-8">
		<!--  підключення стандртної тблиці  -->
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
		
		<title>
		<?php if ( is_home() ) { ?><?php bloginfo('name'); ?>&nbsp;|&nbsp;<?php bloginfo('description'); ?><?php } ?>
		<?php if ( is_search() ) { ?><?php bloginfo('name'); ?>&nbsp;|&nbsp;Результаты&nbsp; поиска<?php } ?>
		<?php if ( is_author() ) { ?><?php bloginfo('name'); ?>&nbsp;|&nbsp;Архив автора<?php } ?>
		<?php if ( is_single() ) { ?><?php wp_title(''); ?>&nbsp;|&nbsp;<?php bloginfo('name'); ?><?php } ?>
		<?php if ( is_page() ) { ?><?php bloginfo('name'); ?>&nbsp;|&nbsp;<?php wp_title(''); ?><?php } ?>
		<?php if ( is_category() ) { ?><?php bloginfo('name'); ?>&nbsp;|&nbsp;Архив&nbsp;| &nbsp;<?php single_cat_title(); ?><?php } ?>
		<?php if ( is_month() ) { ?><?php bloginfo('name'); ?>&nbsp;|&nbsp;Архив&nbsp; <?php the_time('F'); ?><?php } ?>
		<?php if (function_exists('is_tag')) { if ( is_tag() ) { ?><?php bloginfo('name'); ?>&nbsp;|&nbsp;Метки&nbsp;|&nbsp;<?php  single_tag_title("", true); } } ?>
		
		<!-- -->
		
		
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">
		<title>Home | E-Shopper</title>
		
		<link href="wp-content/themes/Eshopper/css/bootstrap.min.css" rel="stylesheet">
		<link href="wp-content/themes/Eshopper/css/font-awesome.min.css" rel="stylesheet">
		<link href="wp-content/themes/Eshopper/css/prettyPhoto.css" rel="stylesheet">
		<link href="wp-content/themes/Eshopper/css/price-range.css" rel="stylesheet">
		<link href="wp-content/themes/Eshopper/css/animate.css" rel="stylesheet">
		<link href="wp-content/themes/Eshopper/css/animate2.css" rel="stylesheet">
		<script src="wp-content/themes/Eshopper/js/wow.min.js"></script>
		<script>new WOW().init();</script>
		<link href="wp-content/themes/Eshopper/css/main.css" rel="stylesheet">
		<link href="wp-content/themes/Eshopper/css/responsive.css" rel="stylesheet">
		<!--[if lt IE 9]>
		<script src="wp-content/themes/Eshopper/js/html5shiv.js"></script>
		<script src="wp-content/themes/Eshopper/js/respond.min.js"></script>
		<![endif]-->
		<link rel="shortcut icon" href="images/ico/favicon.ico">
		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
		<link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
		
		</head><!--/head-->
		<body>
			<header id="header"><!--header-->
			
			
			<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					
					
					<div class="logo  col-sm-4">
						<img src="wp-content/themes/Eshopper/images/home/logl2.png" alt="" />
					</div>
					<div class="unic col-sm-4">
						Магазин профессиональных надувных лодок  из высокопрочной ПВХ-ткани.
					</div>
					
					
					
					<div class="cont col-sm-4">
						<h3> Виникли питання?  </h3>
						<p>
							Телефонуйте, допоможемо!<br>
							(050) 773-85-52<br> (067) 323-84-80
							Без вихідних 24/7<br>
							Вам передзвонити?
						</p>
					</div>
					
				</div>
				
				
				
			</div>
			</div><!--/header-middle-->
			
			</header><!--/header-->
			
			<section id="slider"><!--slider-->
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<div id="slider-carousel" class="carousel slide" data-ride="carousel">
							<ol class="carousel-indicators">
								<li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
								<li data-target="#slider-carousel" data-slide-to="1"></li>
								<li data-target="#slider-carousel" data-slide-to="2"></li>
							</ol>
							
							<div class="carousel-inner">
								<div class="item active">
									<div class="col-sm-6">
										<h1><span>AQUA</span>-STAR</h1>
										<h2>Риболовля</h2>
										<p> В-249 - ідеально піджодить для відпочинку і рибальства
										Злови найбілбшу рибину за своє життя разом з нами </p>
										<button type="button" class="btn btn-default get">Get it now</button>
									</div>
									<div class="col-sm-6">
										<img src="wp-content/themes/Eshopper/us.jpg" class="girl img-responsive" alt="" />
										
									</div>
								</div>
								<div class="item">
									<div class="col-sm-6">
										<h1><span>AQUA</span>-STAR</h1>
										<h2>Відпочинок</h2>
										<p> В-249 - ідеально піджодить для відпочинку і рибальства
										Злови найбілбшу рибину за своє життя разом з нами </p>
										<button type="button" class="btn btn-default get">Get it now</button>
									</div>
									<div class="col-sm-6">
										<img src="wp-content/themes/Eshopper/us.jpg" class="girl img-responsive" alt="" />
										
									</div>
								</div>
								
								<div class="item">
									<div class="col-sm-6">
										<h1><span>AQUA</span>-STAR</h1>
										<h2>Полювання</h2>
										<p> В-249 - ідеально піджодить для відпочинку і рибальства
										Злови найбілбшу рибину за своє життя разом з нами </p>
										<button type="button" class="btn btn-default get">Get it now</button>
									</div>
									<div class="col-sm-6">
										<img src="wp-content/themes/Eshopper/us.jpg" class="girl img-responsive" alt="" />
										
									</div>
								</div>
								
							</div>
							
							<a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
								<i class="fa fa-angle-left"></i>
							</a>
							<a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
								<i class="fa fa-angle-right"></i>
							</a>
						</div>
						
					</div>
				</div>
			</div>
			</section><!--/slider-->
			
			<section>
				<div class="container">
					<div class="row">
						<div class="col-sm-3">
							
							<aside id="aside1">
								<div class="left-sidebar">
									
									<h2>Акція</h2>
									<div  class="panel-group category-products" id="accordian"><!--category-productsr-->
									
									до кінця акції залишилось ик	
								5:24:22 <br>
								знижка 15% 	<br>
								+ <br>
                                  безкоштовна доставка<br>
									
									</div><!--/category-products-->
								</div>
							</aside>
						</div>
						
						<div class="col-sm-9 padding-right">
							
							<div class="features_items"><!--featur _items-->
							<!--  *****************veslo*****************  -->
							<h2 class="title text-center"   > Лодка на веслах 	</h2>
							<!-- проверить есть ли у вас пост;  -->
							<?php if(have_posts()) : ?>
							<?php while(have_posts() ) : the_post(); ?>
							<?php if (in_category('veslo')) : ;?>
							<div class="col-sm-4">
								<div class="product-image-wrapper ">
									
									<div class="productinfo text-center">
										<h2>  <?php the_title( $before = '', $after = '', $echo = true ) ?>   </h2>
										<?php
										the_content(   );
										?>
										<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Купить</a>
									</div>
									
									<div class="choose">
										<ul class="nav nav-pills nav-justified">
											<li><a href="#"><i class="fa fa-plus-square"></i>характеристики</a></li>
											
										</ul>
									</div>
								</div>
							</div>
							<?php endif; ?>
							<?php endwhile; ?>
							<?php endif; ?>
							<!--  *****************end  veslo*****************  -->
							<!--  *****************motor*****************  -->
							<h2 class="title text-center"   >Моторні човни	</h2>
							<!-- проверить есть ли у вас пост;  -->
							<?php if(have_posts()) : ?>
							<?php while(have_posts() ) : the_post(); ?>
							<?php if (in_category('motor')) : ;?>
							<div class="col-sm-4">
								<div class="product-image-wrapper ">
									
									<div class="productinfo text-center">
										<h2>  <?php the_title( $before = '', $after = '', $echo = true ) ?>   </h2>
										<?php
										the_content(   );
										?>
										<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Купить</a>
									</div>
									
									<div class="choose">
										<ul class="nav nav-pills nav-justified">
											<li><a href="#"><i class="fa fa-plus-square"></i>характеристики</a></li>
											
										</ul>
									</div>
								</div>
							</div>
							<?php endif; ?>
							<?php endwhile; ?>
							<?php endif; ?>
							<!--  *****************end  motor*****************  -->
							<!--  *****************kil*****************  -->
							<h2 class="title text-center"   >Човни з кілем</h2>
							<!-- проверить есть ли у вас пост;  -->
							<?php if(have_posts()) : ?>
							<?php while(have_posts() ) : the_post(); ?>
							<?php if (in_category('kil')) : ;?>
							<div class="col-sm-4">
								<div class="product-image-wrapper ">
									
									<div class="productinfo text-center">
										<h2>  <?php the_title( $before = '', $after = '', $echo = true ) ?>   </h2>
										<?php
										the_content(   );
										?>
										<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Купить</a>
									</div>
									
									<div class="choose">
										<ul class="nav nav-pills nav-justified">
											<li><a href="#"><i class="fa fa-plus-square"></i>характеристики</a></li>
											
										</ul>
									</div>
								</div>
							</div>
							<?php endif; ?>
							<?php endwhile; ?>
							<?php endif; ?>
							<!--  *****************end  kil*****************  -->
						</div>
						
						</div><!--features_items-->
						
						
						
					</div>
				</div>
				
			</section>
			
			<footer id="footer" class="footer"><!--Footer-->
			
			<div class="container">
				<div class="row ">
					
					<div class="perevag-prod">
						
						<div class="p-s-title " > Преимущества  лодок AQUA-STAR		</div>
						<div class="perevag-prod-img">	 <img class="perevag-prod-img " 		src="wp-content/themes/Eshopper/boats_prior.png" alt="">
						</div>
					</div>
				</div>
			</div>
			<!-- video-->
			
			<div class="row ">
				
				<div class="video-h ">
					
					<div class="p-s-title">  Лодка на воде	</div>
					
					<div  class="videoo ">
						<video poster="star.png" autoplay="autoplay" loop="loop" controls="controls" tabindex="0">
							<source src="wp-content/themes/Eshopper/movie.mp4" type="video/mp4">
							<source src="movie.webm" type='video/webm; codecs="vp8, vorbis"' />
							<source src="movie.ogv" type='video/ogg; codecs="theora, vorbis"' />
						</video
					</div>
					
				</div>
			</div>
			
			<!-- end video -->
			<!--    -->
			<div class="row professional-ervices">
				
				<div class="">
					
					<div class="p-s-title " > Преимущества покупки лодок AQUA-STAR у нас	</div>
					
					
					<div class="OTSTUP  col-sm-4    " data-wow-delay="1s">
						<img src="wp-content/themes/Eshopper/images/icon/aperture-8x.png" alt="">
						<div class="per-title">  ТОВАР ЗАВЖДИ   В НАЯВНОСТІ</div>
						
					</div>
					<div class="OTSTUP  col-sm-4    " data-wow-delay="1s">
						<img src="wp-content/themes/Eshopper/images/icon/aperture-8x.png" alt="">
						<div class="per-title"> СУМКА-РЮКЗАК В ПОДАРОК </div>
						
						
					</div>
					<div class="OTSTUP  col-sm-4    " data-wow-delay="1s">
						<img src="wp-content/themes/Eshopper/images/icon/aperture-8x.png" alt="">
						<div class="per-title"> БЕЗКОШТОВНА ДОСТАВКА </div>
						
					</div>
					<div class="OTSTUP  col-sm-4    " data-wow-delay="1s">
						<img src="wp-content/themes/Eshopper/images/icon/aperture-8x.png" alt="">
						<div class="per-title"> ЦІНИ ВІД ВИРОБНИКА</div>
						
					</div>
					<div class="OTSTUP  col-sm-4    " data-wow-delay="1s">
						<img src="wp-content/themes/Eshopper/images/icon/aperture-8x.png" alt="">
						<div class="per-title">ПЕРЕВІРЯЄМО ТОВАР НА НАЯВНІСТЬ БРАКУ</div>
						
					</div>
					<div class="OTSTUP  col-sm-4 " data-wow-delay="1s">
						<img src="wp-content/themes/Eshopper/images/icon/aperture-8x.png" alt="">
						<div class="per-title">ПЕРСОНАЛЬНІ  КОНСУЛЬТАЦІЯ </div>
						
						
					</div>
					
					
				</div>
			</div>
			<div class="row ">
				
				<!--   our_awesome_clients-->
				<div class="our_awesome_clients">
					<br>
					<div class="p-s-title">  Що клієнти кажуть про нас</div>
					
					<br>
					
					<div class="comment">
						<div class="comment-photo bounceInLeft wow" > <img src="wp-content/uploads/kl/gml.png" alt="">	 </div>
						<div class="comment-padding"> </div>
						<div class="comment-text bounceInRight wow">“ Proin iaculis purus consequat sem cure  digni ssim
							donec porttitora entum suscipit aenean rhoncus. ”
							<br>
							<span>- <a href="https://twitter.com/maksimka9112007"> Грекало Максим Леонідович</a></span>
						</div>
					</div>
				</div>
				<div class="comment">
					
					
					<div class="comment-text bounceInLeft wow">“ Proin iaculis purus consequat sem cure  digni ssim
						donec porttitora entum suscipit aenean rhoncus. ”
						<br>
						<span>-  <a href="http://vk.com/id51827463">Інна Горобченко</a> </span>
					</div>
					
					<div class="comment-padding"> </div>
					<div class="comment-photo bounceInRight wow"> <img src="wp-content/uploads/kl/giv.jpg " alt=""> </div>
				</div>
				<div class="comment">
					<div class="comment-photo bounceInLeft wow"><img src="wp-content/uploads/kl/gml.png" alt=""></div>
					<div class="comment-padding"> </div>
					<div class="comment-text bounceInRight wow" >“ Proin iaculis purus consequat sem cure  digni ssim
						donec porttitora entum suscipit aenean rhoncus. ”
						<br>
						<span>- Jamie Richardson, Founder of Cocoa Media</span>
					</div>
				</div>
				<div class="comment">
					
					
					<div class="comment-text bounceInLeft wow">“ Proin iaculis purus consequat sem cure  digni ssim
						donec porttitora entum suscipit aenean rhoncus. ”
						<br>
						<span>- Jamie Richardson, Founder of Cocoa Media</span>
					</div>
					<div class="comment-padding"> </div>
					<div class="comment-photo bounceInRight wow"> <img src="wp-content/uploads/kl/giv.jpg" alt=""></div>
					
					
					
				</div>
			</div>
			<!-- -->
			
			<div class="row ">
				
				<div class="logistic">
					
					<<img src="wp-content/themes/Eshopper/logistic2.jpg" alt="">
					
					
				</div>
			</div>
			<!-- -->
			<!-- end our_awesome_clients-->
			
			
		</div>
		
	</div>
	</footer><!--/Footer-->
	<script src="wp-content/themes/Eshopper/js/jquery.js"></script>
	<script src="wp-content/themes/Eshopper/js/bootstrap.min.js"></script>
	<script src="wp-content/themes/Eshopper/js/jquery.scrollUp.min.js"></script>
	<script src="wp-content/themes/Eshopper/js/price-range.js"></script>
	<script src="wp-content/themes/Eshopper/js/jquery.prettyPhoto.js"></script>
	<script src="wp-content/themes/Eshopper/js/main.js"></script>
	<script>
	(function(){  // анонимная функция (function(){ })(), чтобы переменные "a" и "b" не стали глобальными
	var a = document.querySelector('#aside1'), b = null;  // селектор блока, который нужно закрепить
	window.addEventListener('scroll', Ascroll, false);
	document.body.addEventListener('scroll', Ascroll, false);  // если у html и body высота равна 100%
	function Ascroll() {
	if (b == null) {  // добавить потомка-обёртку, чтобы убрать зависимость с соседями
	var Sa = getComputedStyle(a, ''), s = '';
	for (var i = 0; i < Sa.length; i++) {  // перечисляются стили CSS, которые нужно скопировать с родителя
	if (Sa[i].indexOf('box-sizing') == 0 || Sa[i].indexOf('overflow') == 0 || Sa[i].indexOf('width') == 0 || Sa[i].indexOf('padding') == 0 || Sa[i].indexOf('border') == 0 || Sa[i].indexOf('outline') == 0 || Sa[i].indexOf('box-shadow') == 0 || Sa[i].indexOf('background') == 0) {
	s += Sa[i] + ': ' +Sa.getPropertyValue(Sa[i]) + '; '
	}
	}
	a.innerHTML = '<div style="'+s+'">'+a.innerHTML+'</div>';
	b = a.children[0];
	}
	if (a.getBoundingClientRect().top <= 30) { // elem.getBoundingClientRect() возвращает в px координаты элемента относительно верхнего левого угла области просмотра окна браузера
	b.className = 'sticky';
	} else {
	b.className = '';
	}
	}
	})()
	</script>
</body>
</html>