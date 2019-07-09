<footer>
    <div class="container">
        <!-- Single column layout for mobile view and 4 columns from md breakpoint and larger. -->
        <div class="row justify-content-between">
            <div class="col-md-3 foot-col">
                <ul>
                    <li><img src="<?php bloginfo('template_directory'); ?>/images/logo-black.png" alt="logo"></li>
                    <li>
                        <h4><a href="<?php echo get_permalink( get_page_by_title( 'Sitemap' ) ); ?>">Sitemap</a></h4>
                    </li>
                    <!-- .character-cpy class increases size of copywrite symbol -->
                    <li><span class="character-cpy">&copy;</span> 2019 Methed.</li>
                    <li>All rights reserved.</li>
                </ul>
            </div>
            <!-- Links -->
            <div class="col-md-3 foot-col">
                <ul>
                    <li>
                        <h4>Links</h4>
                    </li>
                    <li><a href="<?php echo get_permalink( get_page_by_title( 'About Us' ) ); ?>">About Us</a></li>
                    <li><a href="<?php echo get_permalink( get_page_by_title( 'Privacy Policy' ) ); ?>">Privacy Policy</a></li>
                    <li><a href="<?php echo get_permalink( get_page_by_title( 'Data Policy' ) ); ?>">Data Policy</a></li>
                    <li><a href="<?php echo get_permalink( get_page_by_title( 'Terms and Conditions' ) ); ?>">Terms &#38; Conditions</a></li>
                    <li><a href="<?php echo get_permalink( get_page_by_title( 'Cookie Policy' ) ); ?>">Cookie Policy</a></li>
                </ul>
            </div>
            <!-- Contact Us -->
            <div class="col-md-3 foot-col">
                <ul>
                    <li>
                        <h4>Contact Us</h4>
                    </li>
                    <li>
                        <address>
                            <ul>
                                <li>10 Somewhere</li>
                                <li>Somewhere Street</li>
                                <li>Norfolk,</li>
                                <li>NR4 2UU</li>
                            </ul>
                        </address>
                    </li>
                    <li><span class="text-muted">Email: </span><a href="mailto:method@example.com">method@example.com</a></li>
                    <div class="vertical-space"></div>
                    <li><span class="text-muted">Phone: </span><a href="tel:01493444444">01493444444</a></li>
                </ul>
            </div>
            <!-- Follow Us -->
            <div class="col-md-2  foot-col follow-us">
                <ul>
                    <li>
                        <h4>Follow Us</h4>
                    </li>
                    <li>
                        <ul class="row justify-content-center social">
                            <li class="col-2 col-md-12"><a id="facebook" href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li class="col-2 col-md-12"><a id="twitter" href="#"><i class="fab fa-twitter"></i></a></li>
                            <li class="col-2 col-md-12"><a id="linkedin" href="#"><i class="fab fa-linkedin-in"></i></a>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <div class="to-top d-md-none"> 
            <a href="#"><i class="fas fa-chevron-up"></i><a>
        </div>
    </div>  <!-- /.container -->
</footer>   

<?php wp_footer(); ?>

</body>
</html>