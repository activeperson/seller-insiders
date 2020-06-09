<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Seller_Insiders
 */

get_header();
?>
	
<div style="padding-top: 80px;"></div>
	<div class="single-first-screen" 
	style="background: url(
		<?php if(get_field('kartinka_na_pervom_ekrane_v_detalnoj_stranicze')) {
			the_field('kartinka_na_pervom_ekrane_v_detalnoj_stranicze');
		} else {
			echo 'http://test.elite-mebel.kiev.ua/wp-content/uploads/2020/06/unnamed.png';
		} ?>) no-repeat center;
	">
		<div class="single__wrapper container">
		<div class="single__name"><?php (!empty(get_field('kartinka_na_pervom_ekrane_v_detalnoj_stranicze'))) ? the_title() : ''; ?></div></div>
	</div>
	<div class="single-wrapper-all-content container">
		<div class="single__content">
			<div class="singel__title"><?php the_title(); ?></div>
			<div class="single__date"><?php the_date(); ?></div>
				<div class="single__databaase-content">
				<?php 
					if ( have_posts() ){
						while ( have_posts() ){
							the_post();
							the_content();
						}
					} 
				?>
				</div>
				<div class="single__bottom-block">
					<div class="bottom-block__title">Также читают:</div>
					<div class="bottom-block__wrapper-news">


					<?php
						$args=array('orderby'=>'rand','caller_get_posts'=>1,'posts_per_page' => 3);
						$my_query = new wp_query($args);
						if( $my_query->have_posts() ) {
						while ($my_query->have_posts()) {
						$my_query->the_post();
					?>
						<a href="<?php echo get_permalink(); ?>" href="" class="bottom-block__item">
							<img src="<?php if(get_the_post_thumbnail_url($post->ID, array(370, 217))) echo get_the_post_thumbnail_url($post->ID, array(370, 217)); else echo get_site_url() . '/wp-content/themes/seller-insiders/assets/images/unnamed.png'; ?>" class="bb__img">
							<div class="bb__content">
								<div class="bb__name"><?php the_title(); ?></div>
								<div class="bb__text"><?php echo iconv ('windows-1251', 'utf-8', substr(iconv ('utf-8', 'windows-1251', strip_tags($post->post_content)), 0, 150)); ?></div>
								<div class="bb__link">Читать</div>
							</div>
						</a>
				<?php } }
				wp_reset_query(); ?>


						
					</div>
				</div>
			</div>
		<div class="single-sidebar">
			<div class="single-sidebar__title">Последние Статьи</div>
			<div class="single-sidebar__wrapper">
				<?php
					$recent_posts = wp_get_recent_posts(2);
					foreach($recent_posts as $post){
						?>
						<a href="<?php the_permalink($post["ID"]) ?>" class="single-sidebar__item">
							<img src="<?php if(get_the_post_thumbnail_url($post['ID'], array(370, 217))) echo get_the_post_thumbnail_url($post['ID'], array(370, 217)); else echo get_site_url() . '/wp-content/themes/seller-insiders/assets/images/unnamed.png'; ?>" class="sidebar-item__image">
							<div class="sidebar-item__name"><?php echo $post["post_title"]; ?></div>
							<div class="sidebar-item__text"><?php echo iconv ('windows-1251', 'utf-8', substr(iconv ('utf-8', 'windows-1251', strip_tags($post['post_content'])), 0, 150)); //выводит текст статьи ?></div>
							<div href="<?php the_permalink($post["ID"]) ?>" class="sidebar-item__link">Читать</div>	
						</a>
				<?php
				} ?>
			</div>
			<div class="button-recall">Читать все статьи</div>
		</div>
	</div>


	<section class="reviews-single">
	<div class="container">
	<?php echo do_shortcode('[anycomment]'); ?>
	</div>
	</section>
	

<?php
get_footer();
