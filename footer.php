<?php
/**
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Seller_Insiders
 */

?>

<footer>
	<div class="footer__wrapper">
		<div class="footer__container w1135">
			<div class="wrapper__list">
				<?php
					wp_nav_menu( [
						'theme_location'  => '',
						'menu'            => 'links_menu_footer', 
						'container'       => 'ul', 
						'menu_class'      => '', 
						'menu_id'         => '',
						'echo'            => true,
						'fallback_cb'     => 'wp_page_menu',
						'items_wrap'      => '<ul class="%2$s">%3$s</ul>',
						'depth'           => 0,
						'walker'          => '',
					] );
				?>
				<?php
					wp_nav_menu( [
						'theme_location'  => '',
						'menu'            => 'uslugi_footer', 
						'container'       => 'ul', 
						'menu_class'      => '', 
						'menu_id'         => '',
						'echo'            => true,
						'fallback_cb'     => 'wp_page_menu',
						'items_wrap'      => '<ul class="%2$s">%3$s</ul>',
						'depth'           => 0,
						'walker'          => '',
					] );
				?>
				<?php
					wp_nav_menu( [
						'theme_location'  => '',
						'menu'            => 'obucheniye_footer', 
						'container'       => 'ul', 
						'menu_class'      => '', 
						'menu_id'         => '',
						'echo'            => true,
						'fallback_cb'     => 'wp_page_menu',
						'items_wrap'      => '<ul class="%2$s">%3$s</ul>',
						'depth'           => 0,
						'walker'          => '',
					] );
				?>
			</div>
			<div class="footer__form">
				<div class="footer__info">ОСТАВЬ E-MAIL И ПОЛУЧИ СКИДКУ -50%</div>
				<?php  echo do_shortcode('[contact-form-7 id="147" title="Форма скидки в подвале сайта"]'); ?>
				<div class="footer__email">info@sellerinsiders.com</div>
				<div class="footer__copy">© <?php echo date("Y"); ?> Seller Insiders LLC</div>
			</div>
		</div>
	</div>

</footer>
<div class="modal-recall">
<div class="wrapper-close-button">
	<svg class="t-popup__close-icon" width="23px" height="23px" viewBox="0 0 23 23" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <g stroke="none" stroke-width="1" fill="#ffffff" fill-rule="evenodd"> <rect transform="translate(11.313708, 11.313708) rotate(-45.000000) translate(-11.313708, -11.313708) " x="10.3137085" y="-3.6862915" width="2" height="30"></rect> <rect transform="translate(11.313708, 11.313708) rotate(-315.000000) translate(-11.313708, -11.313708) " x="10.3137085" y="-3.6862915" width="2" height="30"></rect> </g> </svg>
</div>
		<?php echo do_shortcode('[contact-form-7 id="151" title="Popup форма"]'); ?>
</div>



	<?php wp_footer(); ?>

</body>
</html>
