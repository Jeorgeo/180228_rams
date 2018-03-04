<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mycavy_ru
 */
?>

<aside class="main-menu main-wigets">
	<ul>
		<li class="main-menu_1"><?php echo get_field( 'menu-1' ); ?></li>
		<li class="main-menu_2"><?php echo get_field( 'menu-2' ); ?></li>
		<li class="main-menu_3"><?php echo get_field( 'menu-3' ); ?></li>
		<li class="main-menu_4"><?php echo get_field( 'menu-4' ); ?></li>
		<li class="main-menu_5"><?php echo get_field( 'menu-5' ); ?></li>
		<li class="main-menu_6"><?php echo get_field( 'menu-6' ); ?></li>
		<li class="main-menu_7"><?php echo get_field( 'menu-7' ); ?></li>
	</ul>
	<div class="ads_wiget">
		<h3 class="block-title ads">
			Доска объявлений
		</h3>
		<a class="ads_wiget__box" href="#">
			<img src="pics/pic-1.jpg" alt="">
			<p class="ads_wiget-date">
				<span>
					24.02.2018
				</span>
				<span>
					21:38
				</span>
			</p>
			<p>
				Продам морскую свинку в Москве.
			</p>
		</a>
		<a class="ads_wiget__box" href="#">
			<img src="pics/pic-2.jpg" alt="">
			<p class="ads_wiget-date">
				<span>
					24.02.2018
				</span>
				<span>
					21:38
				</span>
			</p>
			<p>
				Продам морскую свинку в Москве.
			</p>
		</a>
		<a class="ads_wiget__box" href="#">
			<img src="pics/pic-3.jpg" alt="">
			<p class="ads_wiget-date">
				<span>
					24.02.2018
				</span>
				<span>
					21:38
				</span>
			</p>
			<p>
				Продам морскую свинку в Москве.
			</p>
		</a>
		<a class="ads_wiget__box" href="#">
			<img src="pics/pic-4.jpg" alt="">
			<p class="ads_wiget-date">
				<span>
					24.02.2018
				</span>
				<span>
					21:38
				</span>
			</p>
			<p>
				Продам морскую свинку в Москве.
			</p>
		</a>
		<a href="#" class="ads_wiget-btn">ВСЕ ОБЪЯВЛЕНИЯ</a>
	</div>
	<div class="facebook_wiget">
		<figure>
			<img src="img/f_wiget.jpg" alt="">
		</figure>
	</div>
	<div class="vk_wiget">
		<figure>
			<img src="img/vk_wiget.jpg" alt="">
		</figure>
	</div>
</aside>
