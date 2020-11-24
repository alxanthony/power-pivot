<?php get_header();  ?>

<? //░░░░░░░░░░░░░░░░░░░░░░░░
   //
   //     DIRECTORY
   //
   //     _Intro
   //     _Content
   //     _Quote
   //     _CTA
   //     _Gallery
   //     _Video
   //     _Related
   //
   //░░░░░░░░░░░░░░░░░░░░░░░░ ?>

<?php
if ( ! post_password_required() ) {
    if ( have_rows( 'flexible_content' ) ) {

        while ( have_rows( 'flexible_content' ) ) { the_row();

            get_template_part( 'layouts/default/flex_' . get_row_layout() );

        }
    }
}else{
    echo '<div style="padding:100px 50px 300px 50px;">';
echo get_the_password_form(  );
echo '</div>';
}
?>

<?php get_footer(); ?>
