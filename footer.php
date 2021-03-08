<?php
/* ------------------------------------------------------------------------- *
 * 	Jacksoncyberspace 
 *  Footer		Version		 1.0.0
/* ------------------------------------------------------------------------- */	

// todo replace all text with variables for multilingual
// $footer_background = get_field('footer_background', 'options');
$facebook = get_field('facebook', 'options');
$instagram = get_field('instagram', 'options');
$logo = get_field('header_logo','options');
$donate = get_field('donate','options');
?>

<footer>    
    <div class="container">
        <div class="columns">
            <div class="column is-6">
                <?php wp_nav_menu( array( 
                                'container'=> false,
                                'theme_location' => 'footer',
                                'depth'             => 2,
                                'menu_class' => 'footer-menu',
                ));
                ?>

                <div class="social-icons">
                    <a href="<?=$facebook?>"><i class="fab fa-facebook-square white-hover"></i></a>
                    <a href="<?=$instagram?>"><i class="fab fa-instagram-square white-hover"></i></a>
                </div>
            </div>
            <div class="column is-6">  

            <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                <input type="hidden" name="cmd" value="_donations" />
                <input type="hidden" name="business" value="jenrouble@gmail.com" />
                <input type="hidden" name="currency_code" value="USD" />
                <input type="image" class="footer-donate-img" src="https://dent.jacksoncyberspace.com/wp-content/uploads/2020/03/Untitled.png" border="0" name="submit" title="PayPal - The safer, easier way to pay online!" alt="Donate with PayPal button" />
                <img alt="" border="0" src="https://www.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1" />
            </form>



                <!-- <a class="footer-donate" href="<?=$donate?>"><span>Donate</span></a> -->





                <a class="footer-logo" href="/"><img src="<?=$logo['url']?>"></a>
            </div>
        </div>
    </div>
</footer>
</div> <!-- This is the wrapper DO NOT DELETE. -->
<?php wp_footer(); ?>
</body>

</html>