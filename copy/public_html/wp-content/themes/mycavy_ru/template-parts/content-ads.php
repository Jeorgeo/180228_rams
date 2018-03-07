<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package mycavy_ru
 */

?>

<div class="main-content sale-content">
  <h2 class="sale-content_title">
    <?php echo get_field( 'title-ads' ); ?>
  </h2>
  <div class="sale-content_left-side">
    <figure class="sale-content_big-img">
      <img src="<?php echo get_field( 'img1-ads' ); ?>" alt="РАМС - рупнейший русскоязычный ресурс">
    </figure>
    <figure class="sale-content_small-img">
      <img src="<?php echo get_field( 'img2-ads' ); ?>" alt="РАМС - рупнейший русскоязычный ресурс">
    </figure>
    <figure class="sale-content_small-img">
      <img src="<?php echo get_field( 'img3-ads' ); ?>" alt="РАМС - рупнейший русскоязычный ресурс">
    </figure>
    <figure class="sale-content_small-img">
      <img src="<?php echo get_field( 'img4-ads' ); ?>" alt="РАМС - рупнейший русскоязычный ресурс">
    </figure>
  </div>
  <div class="sale-content_right-side">
    <p>
      <span class="cell-name">Имя</span>
      <span class="cell-value"><?php echo get_field( 'name-ads' ); ?></span>
    </p>
    <p>
      <span class="cell-name">Дата рождения</span>
      <span class="cell-value"><?php echo get_field( 'date-ads' ); ?></span>
    </p>
    <p>
      <span class="cell-name">Порода</span>
      <span class="cell-value"><?php echo get_field( 'breed-ads' ); ?></span>
    </p>
    <p>
      <span class="cell-name">Окрас</span>
      <span class="cell-value"><?php echo get_field( 'color-ads' ); ?></span>
    </p>
    <p>
      <span class="cell-name">Мать</span>
      <span class="cell-value"><?php echo get_field( 'mother-ads' ); ?></span>
    </p>
    <p>
      <span class="cell-name">Отец</span>
      <span class="cell-value"><?php echo get_field( 'father-ads' ); ?></span>
    </p>
    <p>
      <span class="cell-name">Статус</span>
      <span class="cell-value"><?php echo get_field( 'status-ads' ); ?></span>
    </p>
  </div>
  <div class="sale-content_all-side">
    <h5>Краткое описание:</h5>
    <?php the_post(); ?>
  	<?php the_content(); ?>
    <div class="sale-content_btn">
      <a href="#">ОСТАВИТЬ ЗАЯВКУ</a>
    </div>
  </div>
</div>
