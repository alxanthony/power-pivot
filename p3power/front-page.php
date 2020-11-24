<?php get_header(); ?>
<div class="header-background">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <a href="/" class="logo">
                    <img src="/wp-content/uploads/2020/11/logo1.png" />

                </a>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="hero-black">
                    <p class="c-green f-space">
                        <img src="/wp-content/uploads/2020/11/arrows.png" class="arrows" /> <?php the_field('hero_subtitle'); ?>
                    </p>
                    <h2><?php the_field('hero_title'); ?></h2>
                    <p class="font-small">
                        <?php the_field('hero_paragraph'); ?>
                    </p>
                    <div class="cta-row">
                        <a class="green-button" href=" <?php the_field('hero_cta_link'); ?>">
                            <?php the_field('hero_cta_text'); ?>
                        </a>
                      <i class="down-arr fas fa-angle-down"></i>
                     
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="second-row">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <h1><?php the_field('second_section_title'); ?></h1>
                <p>
                   <?php the_field('second_section_subtitle'); ?>

                </p>
                <img src="<?php the_field('second_section_main_image'); ?>" style="width:100%; height:auto; margin:30px 0;" >
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="<?php the_field('second_section_half_image1'); ?>" class="half-g">
                            
                            <?php
                                $lastposts = get_posts( array(
                                    'posts_per_page' => 2,
                                    'category'=>2
                                    
                                ) );
                                 
                                if ( $lastposts ) {
                                    foreach ( $lastposts as $post ) :
                                        setup_postdata( $post ); ?>
                                        <h2><a href="<?php the_permalink(); ?>"></a></h2>
                                        
                                        
                                        <div class="blog-post">
                                <span class="time">2 DAYS</span>
                                <h5><?php the_title(); ?></h5>
                                <hr/>
                                <p class="categories">
                                    <?php 
                                   $post_categories = wp_get_post_categories( $post->ID);
$cats = array();
     
foreach($post_categories as $c){
   $cat = get_category( $c );
    echo ' '.$cat->name. ' ';
}?>
                                </p>
                                <p class="p-exceprt">
                                      <?php the_content(); ?>   </p>
                                <p class="link">
                                <a href="<?php the_permalink(); ?>">
                                    GET STARTED
                                </a>
                                <i class="fas fa-long-arrow-alt-right"></i>
                                </p>
                            </div>
                                    <?php
                                    endforeach; 
                                    wp_reset_postdata();
                                }
                            ?>
                            
                        </div>
                        <div class="col-md-6">
                             <img src="<?php the_field('second_section_half_image2'); ?>" class="half-g">
                                <?php
                                $lastposts = get_posts( array(
                                    'posts_per_page' => 2,
                                    'category'=>4
                                    
                                ) );
                                 
                                if ( $lastposts ) {
                                    foreach ( $lastposts as $post ) :
                                        setup_postdata( $post ); ?>
                                        <h2><a href="<?php the_permalink(); ?>"></a></h2>
                                        
                                        
                                        <div class="blog-post">
                                <span class="time">2 DAYS</span>
                                <h5><?php the_title(); ?></h5>
                                <hr/>
                                <p class="categories">
                              
                                <?php 
                                   $post_categories = wp_get_post_categories( $post->ID);
$cats = array();
     
foreach($post_categories as $c){
   $cat = get_category( $c );
    echo ' '.$cat->name. ' ';
}?>
                                </p>
                                <p class="p-exceprt">
                                      <?php the_content(); ?>   </p>
                                <p class="link">
                                <a href="<?php the_permalink(); ?>">
                                    GET STARTED
                                </a>
                                <i class="fas fa-long-arrow-alt-right"></i>
                                </p>
                            </div>
                                    <?php
                                    endforeach; 
                                    wp_reset_postdata();
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="third-row">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="quote-box">
                    <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-1">
                            <i class="fas fa-quote-left"></i>
                        </div>
                        <div class="col-sm-10">
                            <p class="quote-p">
                            <?php the_field('first_quote_text'); ?>
                           </p>
                            <p class="author">
                                <?php the_field('first_quote_author'); ?>
                            </p>
                            <p>
                                <?php the_field('first_quote_footer'); ?>
                            </p>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="fourth-row">
    <div class="container">
        <div class="row ttt">
            <div class="col-md-4">
                <img class="balls" src="/wp-content/uploads/2020/11/balls1.png">
                <p>
                   <?php the_field('fourth_section_first_column_text'); ?>
                </p>
            </div>
            <div class="col-md-4">
                <img  class="balls" src="/wp-content/uploads/2020/11/balls2.png">
                <p>
                   <?php the_field('fourth_section_second_column_text'); ?>
                </p>
            </div>
            <div class="col-md-4">
                <img  class="balls" src="/wp-content/uploads/2020/11/balls3.png">
                <p>
                    <?php the_field('fourth_section_third_column_text'); ?>
                </p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 left-c">
               
                    <?php the_field('fourth_section_html_left_column'); ?>
            </div>


            <div class="col-md-6 text-center">
                <img class="brands" src="
                    <?php the_field('fourth_section_right_image'); ?>" >
            </div>
        </div>
    </div>
</div>



<div class="third-row" style="position:relative; top:-200px;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="quote-box">
                    <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-1">
                            <i class="fas fa-quote-left"></i>
                        </div>
                        <div class="col-sm-10">
                            <p class="quote-p">
                         <?php the_field('second_quote_text'); ?>   </p>
                            <p class="author">
                               <?php the_field('second_quote_author'); ?>
                            </p>
                            <p>
                                <?php the_field('second_quote_footer_text'); ?>
                            </p>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="fifth-row">
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2 text-center">
                <h5>
                   <?php the_field('fifth_section_title'); ?>
                </h5>
                 <img src="<?php the_field('fifth_section_image'); ?>" class="half-g">

            </div>
        </div>
        <div class="row">
            <div class="col-md-8 offset-md-2 ">
            <div class="container-fluid">
               <div class="row">
            <div class="col-md-6">
               <?php the_field('fifth_section_left_html'); ?>
            </div>
            <div class="col-md-6">
                <div class="slider">
                    <div class="slide slide1" style="display:block;">
                        <?php the_field('fifth_section_first_slider_html'); ?>
                    </div>
                    <div class="slide slide2">
                       <?php the_field('fifth_section_second_slider_html'); ?>
                    </div>
                </div>
                
                <div class="text-center" style="margin-top:30px;">
                    <span class="slider-1 active"></span>
                    <span class="slider-1"></span>
                    
                </div>
            </div>
        </div>
        </div>

            </div>
        </div>
        
    </div>
</div>

<div class="sixth-row">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <h4>Contact us</h4>
                <h5>
                    Let’s solve your data problems.
                </h5>
                <div class="form">
<?php echo do_shortcode('[gravityform id="1" title="false" description="false"]'); ?>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="seventh-row">
    <div class="container">
        <div class="row">
            <div class="col-md-6 ">
                <h5>  <?php the_field('cta_left_text'); ?></h5>
            </div>
            <div class="col-md-6 ">
                <a class="cta" href="  <?php the_field('cta_link'); ?>">
                    <?php the_field('cta_link_text'); ?>
                </a>
            </div>
        </div>
    </div>
</div>

<footer>
    <div class="eight-row">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <p>
                        P3 is a premiere Microsoft Data Platform consultancy. Our experts channel your business-critical data to generate insights and drive outcomes throughout your organization.
                    </p>
                    <a href="#" class="green-c"> empower@powerpivotpro.com</a>
                    <img src="/wp-content/uploads/2020/11/micro.png" />
                </div>
                <div class="col-md-2"></div>
                <div class="col-md-2">
                    <div class="menu-title green-c">
                        Services
                    </div>
                    <ul>
                        <li>
                            Consulting
                        </li>
                        <li>
                            Governance
                        </li>
                        <li>
                            Training
                        </li>

                    </ul>
                </div>
                <div class="col-md-2">
                    <div class="menu-title green-c">
                        Resources
                    </div>
                    <ul>
                        <li>
                            Blog
                        </li>
                        <li>
                            Reference Card
                        </li>
                        <li>
                            Book
                        </li>

                    </ul>
                </div>
                <div class="col-md-2">
                    <div class="menu-title green-c">
                        About
                    </div>

                </div>
            </div>

            <div class="row">
                <div class="col-md-12 text-center copy">
                    Copyright © 2009 - 2020 · All Rights Reserved · PowerPivotPro LLC
                </div>
            </div>
        </div>
    </div>
</footer>
<?php get_footer(); ?>
