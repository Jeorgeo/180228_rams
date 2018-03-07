<?php
/**
 * Template Name: Главная
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package mycavy_ru
 */

 $ads = get_posts(
        array(
        'numberposts' => -1,
 				'offset' => 0,
 				'orderby'     => 'date',
 				'order'       => 'DESC',
 				'category' => '',
 				'include' => '',
 				'exclude' => '',
 				'meta_key' => '',
 				'meta_value' => '',
 				'post_type' => 'ads',
 				'post_parent' => '',
 				'post_status' => 'publish'
 		)
 );
 $news	= get_posts(
        array(
      	'numberposts' => -1,
 				'offset' => 0,
 				'orderby'     => 'date',
 				'order'       => 'DESC',
 				'category' => '',
 				'include' => '',
 				'exclude' => '',
 				'meta_key' => '',
 				'meta_value' => '',
 				'post_type' => 'news',
 				'post_parent' => '',
 				'post_status' => 'publish'
 		)
 );

?>

<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>
<body>
	<div class="container">
		<div class="wrapper-container shadow-container">
			<header>
				<figure class="logo-box">
					<a href="<?php echo get_home_url(); ?>">
						<img src="<?php bloginfo('template_url'); ?>/img/logo-1.png " alt="Российская Ассоциация заводчиков и любителей морских свинок">
					</a>
				</figure>
				<nav class="header-menu">
					<?php
						wp_nav_menu( array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
						) );
					?>
				</nav>
			</header>
			<section class="main-block-1">
				<aside class="main-menu">
					<?php dynamic_sidebar( 'sidebar-menu' ); ?>
				</aside>
				<div class="main-content">
					<div class="left-side">
						<h1>
							<?php echo get_field( 'main-title' ); ?>
						</h1>
					</div>
					<div class="right-side">
						<form class="main-search" action="<?php bloginfo( 'url' ); ?>" method="get">
						<input type="text" name="s" placeholder="Введите для поиска..." value="<?php if(!empty($_GET['s'])){echo $_GET['s'];}?>"/>
						<label for="submit" class="search-btn">
							<input id="submit" class="search-btn" type="submit" value="Найти"/>
						</label>
						</form>
					</div>
          <div class="left-side">
              <?php the_post(); ?>
            	<?php the_content(); ?>
					</div>
          <div class="right-side">
						<figure>
							<img src="<?php echo get_field( 'main-img' ); ?>" alt="РАМС - крупнейший русскоязычный ресурс">
              <a href="<?php echo get_home_url(); ?>">
                <span class="color-text">
  								Mycavy.ru
  							</span>
              </a>
						</figure>
					</div>
				</div>
			</section>
		</div>
		<main>
			<section class="main-block-2">
				<aside class="main-wigets">
					<div class="ads_wiget">
						<h3 class="block-title ads">
							Купить морскую свинку
						</h3>

            <?php
            $ads_count = 0;
            foreach ($ads as $obj) {
                if($obj->post_name == 'archive'){
                    continue;
                }
                if ($ads_count > 3 ) {
                    break;
                }
            ?>

						<a class="ads_wiget__box" href="<?php echo $obj->post_name; ?>" target="_blank">
							<img src="<?php echo get_field('img-ads',$obj->ID); ?>">
							<p class="ads_wiget-date">
								<span>
                  <?php echo get_post_time('d.m.Y', false, $obj->ID, false); ?>
								</span>
								<span>
									<?php echo get_post_time('G:i', false, $obj->ID, false); ?>
								</span>
							</p>
							<p>
								<?php echo get_field( 'desription-ads',$obj->ID ); ?>
							</p>
						</a>

            <?php
              $ads_count++;
              };
             ?>

						<?php dynamic_sidebar( 'ads_wiget-btn' ); ?>
					</div>
					<div class="facebook_wiget">
						<figure>
							<img src="<?php bloginfo('template_url'); ?>/img/f_wiget.jpg" alt="">
						</figure>
					</div>
					<div class="vk_wiget">
						<figure>
							<img src="<?php bloginfo('template_url'); ?>/img/vk_wiget.jpg" alt="">
						</figure>
					</div>
				</aside>
				<div class="right-container">
					<div class="main-columns">
						<div class="main-columns__column column-1">
							<h4>
								Основы содержания
							</h4>
							<?php echo get_field( 'main-cont-1' ); ?>
						</div>
						<div class="main-columns__column column-2">
							<h4>
								Здоровье
							</h4>
							<?php echo get_field( 'main-cont-2' ); ?>
						</div>
						<div class="main-columns__column column-3">
							<h4>
								Морские свинки в природе
							</h4>
							<?php echo get_field( 'main-cont-3' ); ?>
						</div>
						<div class="main-columns__column column-1">
							<h4>
								Справочная
							</h4>
							<?php echo get_field( 'main-cont-4' ); ?>
						</div>
						<div class="main-columns__column column-2">
							<h4>
								Организации
							</h4>
							<?php echo get_field( 'main-cont-5' ); ?>
						</div>
						<div class="main-columns__column column-3">
							<h4>
								Файлы
							</h4>
							<?php echo get_field( 'main-cont-6' ); ?>
						</div>
					</div>
					<div class="main-block-3">
						<div class="main-block-3_news">
							<h3>
								<span></span>Новости сайта
							</h3>
							<a class="archive-btn" href="<?php echo get_field( 'link-archiv' ); ?>" target="_blank">
								ВЕСЬ АРХИВ
							</a>
						</div>
						<div class="news-box">
							<div class="arrows arrow-prev"></div>
              <?php

              $news_count = 0;
              foreach ($news as $obj) {
                  if($obj->post_name == 'archive'){
                      continue;
                  }
                  if ($news_count > 2 ) {
                    break;
                  }
              ?>

							<a class="new-box" href="<?php echo $obj->post_name; ?>"  target="_blank">
								<p class="new-box_time">
									<?php echo get_post_time('d.m.Y', false, $obj->ID, false); ?><span><?php echo get_post_time('G:i', false, $obj->ID, false); ?></span>
								</p>
								<p>
                  <?php echo get_field( 'description-n',$obj->ID ); ?>
								</p>
							</a>

              <?php
                $news_count++;
                };
               ?>

							<div class="arrows arrow-next"></div>
						</div>
					</div>
				</div>
			</section>
			<section class="main-block-4">
				<div class="main-columns">
					<div class="main-columns__column column-1">
						<h3 class="block-title gallery">
							Галереи
						</h3>
						<span class="title-rows">
							Новые:
						</span>
						<?php echo get_field( 'main-gal-1' ); ?>
						<span class="title-rows">
							Обновленные:
						</span>
						<?php echo get_field( 'main-gal-2' ); ?>
						<span class="title-rows">
							Популярные:
						</span>
						<?php echo get_field( 'main-gal-3' ); ?>
					</div>
					<div class="main-columns__column column-2">
						<h3 class="block-title notes">
							Дневники
						</h3>
						<span class="title-rows">
							Новые:
						</span>
						<?php echo get_field( 'main-blog-1' ); ?>
						<span class="title-rows">
							Обновленные:
						</span>
						<?php echo get_field( 'main-blog-2' ); ?>
						<span class="title-rows">
							Популярные:
						</span>
						<?php echo get_field( 'main-blog-3' ); ?>
					</div>
					<div class="main-columns__column column-3">
						<h3 class="block-title forum">
							Форумы
						</h3>
						<span class="title-rows">
							Обновленные:
						</span>
						<?php echo get_field( 'main-forum' ); ?>
					</div>
				</div>
			</section>
		</main>

<?php
get_footer();
