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
                    <a href="<?=$facebook?>"><i class="fab fa-facebook-square"></i></a>
                    <a href="<?=$instagram?>"><i class="fab fa-instagram-square"></i></a>
                </div>
            </div>
            <div class="column is-6">   
                <a class="footer-donate" href="<?=$donate?>"><span>Donate</span></a>
                <a class="footer-logo" href="/"><img src="<?=$logo['url']?>"></a>
            </div>
        </div>
    </div>
</footer>
</div> <!-- This is the wrapper DO NOT DELETE. -->
<?php wp_footer(); ?>
</body>

</html>