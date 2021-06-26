        <div class="footer-container">
    <footer class="footer">
        <div class="footer__column">

           <div class="column__content">
            <h2>Seguici</h2>
            <div class="socials">
                    <div class="social-icon">
                        <a href="https://www.facebook.com/gio.amato.33"><img src="http://dacciuntaglio.netsons.org/wp-content/uploads/2021/06/icon-facebook.png" alt="Facebook icon"></a>
                        <a href="https://www.instagram.com/amatgio/"><img src="http://dacciuntaglio.netsons.org/wp-content/uploads/2021/06/instagram_icon.png" alt="Instagram icon"></a>
                    </div>
                </div>
           </div>
           
           <div class="column__content">
            <?php
                wp_nav_menu(array(
                'theme_location' => 'footer',
                'depth' => 2,
                'container' => false,
                'menu_class' => 'footer__menu'
                ));
                ?>
            </div>

           <div class="column__content">
                <button class="footer__menu_item_button"><a href="http://dacciuntaglio.netsons.org/contattaci/">PRENOTA IL TUO APPUNTAMENTO</a></li>
           </div>
           
        </div>

        <div class="footer__copy">
            &copy; 2021 | Designed by Giorgia Amato
        </div>
    </footer>
</div>
        
        <?php wp_footer(); ?>
    </body>
</html>