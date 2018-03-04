<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package mycavy_ru
 */

?>

<div class="main-content">
	<div class="left-side">
		<h1>
			<?php the_title(); ?>
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
	<div class="all-side">
		<?php the_post(); ?>
  	<?php the_content(); ?>
	</div>
</div>
