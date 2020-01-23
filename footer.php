<?php
/* ------------------------------------------------------------------------- *
 * 	Vesst 
 *  Footer		Version		 1.0.0
/* ------------------------------------------------------------------------- */	

// todo replace all text with variables for multilingual
$footer_background = get_field('footer_background', 'options');
?>

<footer>    
    <div class="columns">
        <div class="column is-3 footer-left"><a href="/"><span class="footer-rugged">Rugged</span> Workbench</a></div>
        <div class="column is-9 footer-right">
            <?php wp_nav_menu( array( 
                'container'=> false,
                'theme_location' => 'footer',
                'depth'             => 2,
                'menu_class' => 'footer-menu',
                'menu_id' => 'footer-menu',
								
            )); ?>
        </div>

    </div>
</footer>
</div> <!-- This is the wrapper DO NOT DELETE. -->
<?php wp_footer(); ?>
</body>

</html>