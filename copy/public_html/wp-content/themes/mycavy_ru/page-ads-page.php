<?php
/**
 * Template Name: Все карточки
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

get_header();
?>


  <section class="main-block-1">

<?php
get_sidebar();

$ads	= get_posts(
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
?>

    <div class="main-content">
    	<div class="left-side">
    		<h1>
    			Купить морскую свинку
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
    	<div class="all-side all-ads">
        <?php
        foreach ($ads as $obj) {
            if($obj->post_name == 'archive'){
                continue;
            }

        ?>

        <div class="ads-card">
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
          <a class="ads_wiget-btn" href="<?php echo $obj->post_name; ?>" target="_blank">Подробнее</a>
        </div>



        <?php
          $ads_count++;
          };
         ?>

    	</div>
    </div>

  </section>
</div>

<?php

get_footer();
