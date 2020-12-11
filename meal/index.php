
<?php
get_header();
$meal_section_id = 260;
get_template_part( "/sections-templates/Banner" );

?>
    <div class="main-wrap " id="section-home">

        <div <?php post_class("single-post"); ?>>
            <div class="container">
                <div class="row post-body">
                    <div class="col-md-12">
                        <section class="section-gap">
                            <div id="posts_container">
                                <?php
                                while(have_posts()){
                                    the_post();
                                    ?>
                                    <div <?php post_class(); ?>>
                                        <h2>
                                           <a href="<?php the_permalink();?>">
                                               <?php the_title(); ?>
                                           </a>
                                        </h2>
                                        <div class="post-content">
                                            <?php
                                            the_excerpt();
                                            ?>
                                        </div>
                                    </div>
                                <?php

                                }

                                ?>


                            </div>

                        </section>
                    </div>
                    <div class="row">
                        <div class="col-12 text-center mt-md-5 mt-3" id="loadmore_container">
                            <a href="<?php next_posts(max_name_page_number()); ?>" class="btn btn-danger" id="loadmore">
                                <?php _e("Load More","meal");?>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="ftco-footer">
            <div class="container">

                <div class="row">
                    <div class="col-md-4 mb-5">
                        <div class="footer-widget">
                            <h3 class="mb-4">About Meal</h3>
                            <p>The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild
                                Question Marks and devious Semikoli, but the Little Blind Text didn’t listen. </p>
                            <!-- <input type="submit" class="btn btn-primary btn-outline-primary" value="Send Message"> -->
                            <p><a href="https://free-template.co" target="_blank"
                                  class="btn btn-primary btn-outline-primary">More Templates</a></p>
                        </div>
                    </div>
                    <div class="col-md-4 mb-5">
                        <div class="footer-widget">
                            <h3 class="mb-4">Lunch Service</h3>
                            <p>Booking from 12:00pm &mdash; 1:30pm</p>
                            <h3 class="mb-4">Dinner Service</h3>
                            <p>Everyday: <br> Booking from 6:00pm &mdash; 9:00pm</p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="footer-widget">
                            <h3 class="mb-4">Follow Along</h3>
                            <ul class="list-unstyled social">
                                <li><a href="#"><span class="fa fa-tripadvisor"></span></a></li>
                                <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                                <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                                <li><a href="#"><span class="fa fa-instagram"></span></a></li>
                            </ul>
                        </div>
                        <div class="footer-widget">
                            <h3 class="mb-4">Newsletter</h3>
                            <form action="#" class="ftco-footer-newsletter">
                                <div class="form-group">
                                    <button class="button"><span class="fa fa-envelope"></span></button>
                                    <input type="email" class="form-control" placeholder="Enter Email">
                                </div>
                            </form>
                        </div>
                    </div>

                </div>

                <div class="row pt-5">
                    <div class="col-md-12 text-center">
                        <p>&copy; Copyright 2018. All Rights Reserved. Designed &amp; Developed by <a
                                href="https://free-template.co/">Free-Template.co</a></p>
                    </div>
                </div>
            </div>
        </footer>

    </div>
<?php
get_footer();