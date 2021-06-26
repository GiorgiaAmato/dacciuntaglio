<?php get_header(); ?>


<div class="cover cover-page">
    <div class="cover__shadow cover__shadow-page">
        <h2>HAIR & BEAUTY</h2>
        <h1 class="ml14">
            <span class="text-wrapper">
                <span class="letters">Dacci un taglio</span>
                <span class="line"></span>
            </span>
        </h1>
    </div>
</div>


<div class="contact">
    <div class="contact__text clearfix">
        <h3>PRENOTA IL TUO APPUNTAMENTO</h3>
        <p>Completa i campi per farci sapere quali trattamenti vorresti fare e le tue disponibilità. Ti invieremo presto una conferma via mail.</p>

    </div>

    <div class="contact__container clearfix">
        <?php echo do_shortcode( '[contact-form-7 id="97" title="Contact Form"]' ); ?>
    </div>
</div>








<?php get_footer(); ?>