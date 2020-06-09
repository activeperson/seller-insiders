
<?php

/*
Template Name: Шаблон страницы контактов
*/


get_header();
?>

<section class="contacts container padding">
    <div class="title">Свяжитесь с нами</div>
        <div class="subtitle">Заполните форму ниже <br />
            или напишите нам на email:</div>
        <a href="mailto:info@sellerinsider.com" class="email">info@sellerinsider.com</a>

        <?php 
        echo do_shortcode('[contact-form-7 id="29" title="Контактная форма 1"]');
        
        ?>
</section>

<?php
get_footer();