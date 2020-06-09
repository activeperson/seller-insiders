<?php

/*
Template Name: Универсальный шаблон
*/

get_header();
?>




<div class="padding"></div>





<?php if(get_field('pokazyvat_blok_tekst_kartinka')){ 
?>

<section class="ut__big-block-with-text-and-image container">
	<div class="ut__bbwt__information">
		<div class="ut__bbwt-subtitle"><?php the_field('podzagolovok'); ?></div>
		<div class="u__title"><?php the_field('zagolovok'); ?></div>
		<div class="u__text">
        <?php the_field('opisanie'); ?>
		</div>
	</div>
	<div class="ut__bbwt-image">
		<img src=" <?php the_field('kartinka'); ?>" alt="Pink circle">
	</div>
</section>


<?php
} else {

    echo '<h3 style="display: block; text-align: center; padding: 100px 0;">
    Страница не настроена! <br /> <br />
    Настройте страницу из <a href="' . admin_url() . '/post.php?post='. get_the_ID() .'&action=edit">админ панели.</a> <br> <br>
    Название страницы: <b style="color: #e10087;">' . get_the_title() . '</b>
    </h3>';
} ?>



<?php if(get_field('pokazyvat_blok_dlinnyj_zagolovok')){ 
?>

    <section class="u__block-width-text-two-collum container">
        <div>
            <div class="u__title"> <?php the_field('zagolovok_2'); ?></div>
            <div class="u__subtitle"> <?php the_field('podzagolovok_2'); ?></div>
        </div>
        <div>
            <div class="u__text no-opacity">
            <?php the_field('tekst'); ?>
            </div>
        </div>
    </section>

<?php
} ?>


<?php if(get_field('pokazyvat_blok_s_cziframi')){ 
?>

    <section class="ut__numbers">
        <div class="ut__numbers-container container">
            <div class="title"> <?php the_field('zagolovok_32'); ?></div>
            <div class="ut__numbers__wrapper">

            <?php

                if( have_rows('elementy') ):
                    while ( have_rows('elementy') ) : the_row();
                    ?>
                        <div class="ut__numbers__item">
                            <div class="ut__numbers__number"><?php the_sub_field('zagolovok_22'); ?></div>
                            <div class="ut__numbers__text"><?php the_sub_field('tekst_22'); ?></div>
                        </div>
                    <?php
                    endwhile;
                endif;

            ?>
            </div>
        </div>
    </section>

<?php
} ?>




<?php if(get_field('pokazyvat_blok_punkty')){ 
?>

    <section class="ut__block-width-points container">
        <div class="title"> <?php the_field('zagolovok_23'); ?></div>
        <div class="u__text"> <?php the_field('opisanie_23'); ?></div>
        <div class="ut__block-width-points-wrapper">

        <?php

            if( have_rows('punkty') ):
                while ( have_rows('punkty') ) : the_row();
                ?>
                    <div class="ut__block-width-points-item">
                        <img src="<?php the_sub_field('kartinka_punkta'); ?>" alt="Изображение <?php the_sub_field('zagolovok_punkta'); ?>">
                        <div class="ut__block-width-points-title"><?php the_sub_field('zagolovok_punkta'); ?></div>
                        <div class="ut__block-width-points-descripton"><?php the_sub_field('opisanie_punkta'); ?></div>
                    </div>
                <?php
                endwhile;
            endif;

        ?>
           
        </div>
    </section>

<?php
} ?>


<?php if(get_field('pokazyvat_blok_c_dejstviem')){ 
?>

<section class="universal-block-request padding-80 universal" style="background: #00adee;">
	<div class="container">
		<div class="u-b-r__title"> <?php the_field('zagolovok_44'); ?></div>
	<div class="u-b-r__text"><?php the_field('opisanie_44'); ?></div>
	<div class="arrow">
		<svg class="t580__arrow-icon " style="fill:#e10087; " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 80 180"><path d="M54.1 109c-.8 0-1.6-.4-2-1.1-.8-1.1-.5-2.7.6-3.5 1.3-.9 6.8-4 11.6-6.6-15.9-1.3-29.2-8.3-38.5-20.2C8.9 56 8.5 24.1 13.2 3.4c.3-1.3 1.7-2.2 3-1.9 1.3.3 2.2 1.7 1.9 3-4.5 19.6-4.2 49.8 11.6 70 9 11.5 21.5 17.7 37.2 18.4l-1.8-2.3c-1.4-1.7-2.7-3.4-4.1-5.1-.7-.9-1.5-1.9-2.3-2.9-.9-1.1-.7-2.6.4-3.5 1.1-.9 2.6-.7 3.5.4 0 0 0 .1.1.1l6.4 7.9c.5.5.9 1.1 1.4 1.7 1.5 1.8 3.1 3.6 4.4 5.6 0 .1.1.1.1.2.1.3.2.5.3.8v.6c0 .2-.1.4-.2.6-.1.1-.1.3-.2.4-.1.2-.3.4-.5.6-.1.1-.3.2-.5.3-.1 0-.1.1-.2.1-1.2.6-16 8.6-18.1 10-.5.5-1 .6-1.5.6z"></path></svg>
		<svg class="mobile-icon" style="fill:#e10087;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 35 70"><path d="M31.5 47c-1.1-.9-2.7-.7-3.5.4L20.2 57V5.8c0-1.4-1.1-2.5-2.5-2.5s-2.5 1.1-2.5 2.5V57l-7.8-9.7c-.8-1-2.4-1.2-3.5-.3-1.1.9-1.2 2.4-.4 3.5l12.2 15.2c.5.6 1.2.9 1.9.9s1.5-.3 1.9-.9l12.2-15.2c1-1.1.9-2.6-.2-3.5z"></path></svg>
	</div>
	<div class="u-b-r__button open-modal"><?php the_field('tekst_na_knopke'); ?></div>
	</div>
</section>

<?php
} ?>




<?php if(get_field('pokazyvat_blok_tekst_tekst')){ 
?>

<section class="u__block-width-text-two-collum container">
	<div>
		<div class="u__text  no-opacity">
        <?php the_field('tekst_v_levoj_kolonke'); ?>
		</div>
	</div>
	<div>
		<div class="u__text no-opacity">
        <?php the_field('tekst_v_pravoj_kolonke'); ?>
		</div>
	</div>
</section>

<?php
} ?>






<?php if(get_field('pokazyvat_blok_otzyvy')){ 
?>

    <section class="ut__block-reviews container">
        <div class="title"><?php the_field('zagolovok_reviews'); ?></div>
        <div class="ut__block-reviews__wrapper">

            <?php

                if( have_rows('otzyvy') ):
                    while ( have_rows('otzyvy') ) : the_row();
                    ?>

                        <div class="ut__block-reviews__item">
                            <div class="ut__block-reviews__text">
                                <?php the_sub_field('otzyv_tekst'); ?>
                            </div>
                            <div class="ut__block-reviews__people">
                                <img src="<?php the_sub_field('izobrazhenie_people'); ?>" alt="<?php the_sub_field('imya_cheloveka'); ?>" class="ut__block-reviews__ico">
                                <div class="ut__block-reviews__name"><?php the_sub_field('imya_cheloveka'); ?></div>
                            </div>
                        </div>

                    <?php
                    endwhile;
                endif;

            ?>

        </div>
    </section>

<?php
} ?>





<?php if(get_field('pokazyvat_formu_obratnoj_svyazi')){ 
?>

    <section class="contacts container">
        <div class="title">Свяжитесь с нами</div>
            <div class="subtitle">Заполните форму ниже <br />
                или напишите нам на email:</div>
            <a href="mailto:info@sellerinsider.com" class="email">info@sellerinsider.com</a>

            <?php 
               echo do_shortcode('[contact-form-7 id="29" title="Контактная форма 1"]');
            ?>
    </section>

<?php
} ?>







<?php

get_footer();