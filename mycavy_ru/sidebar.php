<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
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

?>

<aside class="main-menu main-wigets">
	<?php dynamic_sidebar( 'sidebar-menu' ); ?>
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
		<?php dynamic_sidebar( 'f_wiget' ); ?>
	</div>
	<div class="vk_wiget">
		<?php dynamic_sidebar( 'vk_wiget' ); ?>
	</div>
</aside>
