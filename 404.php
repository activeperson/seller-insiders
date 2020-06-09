<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Seller_Insiders
 */

get_header();
?>

	<div class="page-404 w1135 padding">
		<h2>404</h2>
		<p>Страница не найдена.</p>
		<a href="<?php echo home_url(); ?>" class="button-recall">Вернуться на главную</a>
	</div>

<?php
get_footer();
