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
					<ul>
						<li class="main-menu_1"><?php echo get_field( 'menu-1' ); ?></li>
						<li class="main-menu_2"><?php echo get_field( 'menu-2' ); ?></li>
						<li class="main-menu_3"><?php echo get_field( 'menu-3' ); ?></li>
						<li class="main-menu_4"><?php echo get_field( 'menu-4' ); ?></li>
						<li class="main-menu_5"><?php echo get_field( 'menu-5' ); ?></li>
						<li class="main-menu_6"><?php echo get_field( 'menu-6' ); ?></li>
						<li class="main-menu_7"><?php echo get_field( 'menu-7' ); ?></li>
					</ul>
				</aside>
				<div class="main-content">
					<div class="left-side">
						<h1>
							Российская Ассоциация заводчиков и любителей морских свинок
						</h1>
						<p>
							РАМС - рупнейший русскоязычный ресурс, посвященный
							содержанию различных видов морских свинок. Нашей
							первостепенной задачей является пропаганда ответственного
							обращения с морскими свинками, правильного ухода за
							ними в условиях неволи. На сайте вы сможете найти
							множество полезных материалов о морских свинках, а на
							форуме получите грамотную консультацию
							специалистов по любым интересующим вас вопросам,
							касающимся различных аспектов содержания морских
							свинок в домашних условиях.
						</p>
					</div>
					<div class="right-side">
						<form class="main-search" action="<?php bloginfo( 'url' ); ?>" method="get">
						<input type="text" name="s" placeholder="Введите для поиска..." value="<?php if(!empty($_GET['s'])){echo $_GET['s'];}?>"/>
						<label for="submit" class="search-btn">
							<input id="submit" class="search-btn" type="submit" value="Найти"/>
						</label>
						</form>
						<figure>
							<img src="<?php bloginfo('template_url'); ?>/pics/pic-2-3.png" alt="РАМС - крупнейший русскоязычный ресурс">
							<span class="color-text">
								Mycavy.ru
							</span>
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
							Доска объявлений
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

						<a href="#" class="ads_wiget-btn">ВСЕ ОБЪЯВЛЕНИЯ</a>
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
							<ul>
								<li><a href="">Выбор морских свинок</a></li>
								<li><a href="">Покупка морской свинки</a></li>
								<li><a href="">Клетка для морской свинки</a></li>
								<li><a href="">Освещение для морской свинки</a></li>
								<li><a href="">Некоторые нюансы</a></li>
								<li><a href="">Как определить упитанность</a></li>
								<li><a href="">Корма для морской свинки</a></li>
								<li><a href="">Определение пола</a></li>
								<li><a href="">Любительское содержание</a></li>
								<li><a href="">Средства идентификации</a></li>
								<li><a href="">О методиках содержания</a></li>
							</ul>
						</div>
						<div class="main-columns__column column-2">
							<h4>
								Здоровье
							</h4>
							<ul>
								<li><a href="">Зачем, когда и как ходить к ветеринару</a></li>
								<li><a href="">Болезни птиц, опасные для человека</a></li>
								<li><a href="">Ветеринарная медицина</a></li>
								<li><a href="">Признаки заболевания</a></li>
								<li><a href="">Болезни птиц</a></li>
								<li><a href="">Аптечка владельца</a></li>
								<li><a href="">Лечение в домашних условиях</a></li>
								<li><a href="">Отравления птиц</a></li>
								<li><a href="">Рентген: как сделать и зачем он нужен</a></li>
								<li><a href="">Болезни, связанные с условиями содержания</a></li>
								<li><a href="">Лечение травм</a></li>
								<li><a href="">Паразиты у морских свинок</a></li>
								<li><a href="">Уход за стареющей морской свинкой</a></li>
							</ul>
						</div>
						<div class="main-columns__column column-3">
							<h4>
								Морские свинки в природе
							</h4>
								<ul>
								<li><a href="">Определители морских свинок</a></li>
								<li><a href="">Очерки о морских свинках и природе</a></li>
								<li><a href="">Сохранение морских свинок в природе</a></li>
								<li><a href="">Всероссийский учет морских свинок</a></li>
								<li><a href="">Влияние человека на орнитофауну</a></li>
								<li><a href="">Тайна глиняных солонцов Тампобаты</a></li>
								<li><a href="">Атлас распространения и особенности биологии</a></li>
							</ul>
						</div>
						<div class="main-columns__column column-1">
							<h4>
								Справочная
							</h4>
							<ul>
								<li><a href="">База данных орнитологов</a></li>
								<li><a href="">Юридические вопросы</a></li>
								<li><a href="">"Отцы основатели"</a></li>
								<li><a href="">Продолжительность жизни</a></li>
								<li><a href="">Литература</a></li>
								<li><a href="">Каталог монет</a></li>
								<li><a href="">Ссылки</a></li>
								<li><a href="">Анатомические и физиологические особенности морвких свинок</a></li>
							</ul>
						</div>
						<div class="main-columns__column column-2">
							<h4>
								Организации
							</h4>
							<ul>
								<li><a href="">Клубы любителей</a></li>
								<li><a href="">Питомники морских свинок</a></li>
								<li><a href="">Парки морских свинок</a></li>
								<li><a href="">Ветклиники</a></li>
								<li><a href="">Зооторговые организации</a></li>
								<li><a href="">Продукция нашей сайта</a></li>
							</ul>
						</div>
						<div class="main-columns__column column-3">
							<h4>
								Файлы
							</h4>
							<ul>
								<li><a href="">Голоса морских свинок</a></li>
								<li><a href="">Видео морских свинок</a></li>
								<li><a href="">Обои с морскими свинками</a></li>
								<li><a href="">Морские свинки на мобильных телефонах</a></li>
							</ul>
						</div>
					</div>
					<div class="main-block-3">
						<div class="main-block-3_news">
							<h3>
								<span></span>Новости сайта
							</h3>
							<a href="#" class="archive-btn">
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
						<a href="#">
							Мои, Пока 10 крыл )но я хочу Двенадцать Рокки в шоке!
						</a>
						<span class="title-rows">
							Обновленные:
						</span>
						<a href="#">
							Мои, Пока 10 крыл )но я хочу Двенадцать Рокки в шоке!
						</a>
						<span class="title-rows">
							Популярные:
						</span>
						<a href="#">
							Мои, Пока 10 крыл )но я хочу Двенадцать Рокки в шоке!
						</a>
					</div>
					<div class="main-columns__column column-2">
						<h3 class="block-title notes">
							Дневники
						</h3>
						<span class="title-rows">
							Новые:
						</span>
						<a href="#">
							Пернатый двор Шумная семейка
						</a>
						<span class="title-rows">
							Обновленные:
						</span>
						<a href="#">
							Пернатый двор Шумная семейка
						</a>
						<span class="title-rows">
							Популярные:
						</span>
						<a href="#">
							Пернатый двор Шумная семейка
						</a>
					</div>
					<div class="main-columns__column column-3">
						<h3 class="block-title forum">
							Форумы
						</h3>
						<span class="title-rows">
							Обновленные:
						</span>
						<a href="#">
							Капли "Кот-баюн" (есть ли у кого опыт применения) или
						</a>
						<a href="#">
							Капли "Кот-баюн" (есть ли у кого опыт применения) или
						</a>
						<a href="#">
							Капли "Кот-баюн" (есть ли у кого опыт применения) или
						</a>
					</div>
				</div>
			</section>
		</main>

<?php
get_footer();
