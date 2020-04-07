<?php
/*
Template Name: Template with Shortcode
*/
get_header();
?>

    <main id="main">
        <div class="page_header">
            <h1 class="page_header_title"><?=get_the_title(); ?></h1>
        </div>
        <div class="wrapper">
            <div class="content">
				<?=do_shortcode('[art]')?>
            </div>
        </div>
    </main>


<?php
get_footer();
?>