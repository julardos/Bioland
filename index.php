<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Bioland
 */

get_header(); ?>
	<section id="primary" class="content-area">
        <div class="container-fluid">
            <main id="main" class="jumbotron-fluid position-relative" role="main">
                <div class="text-center mb-5">
                    <img src = "<?php echo  get_template_directory_uri() . '/assets/ASIK-LOGO-fix.png' ?>" alt = "Logo" class="h-25 w-25 mt-4">
                    <h3 class="font-weight-bold mt-2 ">Situs belajar Biologi yang menyenangkan!</h3>
                    <form action="">
                        <div class="row mt-3">
                            <input type="text" class="form-control rounded-pill border-0 col-3 ml-auto" placeholder="Cari Materi ...">
                            <a href="" class="mr-auto ml-3 mt-1" style="color: #0c5460"><i class="fas fa-search"></i></a>
                        </div>
                    </form>
                </div>
                <div class="openning-page">
                    <div class="position-absolute" style="bottom: 0">
                        <div class="d-flex justify-content-between align-self-end">
                            <img src="<?php echo  get_template_directory_uri() . '/assets/orang-di-depan.png' ?>" alt=""
                                 class="boy-pic img-fluid">
                            <img src="<?php echo  get_template_directory_uri() . '/assets/orang-di-depan-2.png' ?>" alt=""
                                 class="boy-pic img-fluid">
                        </div>
                    </div>
                </div>
            </main><!-- #main -->
        </div>
	</section><!-- #primary -->
    <section id="main-content">
        <div class="container">
            <h5 class="text-center font-weight-bold pb-3">Cari Materi yang Kamu Inginkan!</h5>
            <?php get_course(7); ?>
            <?php get_course(8); ?>
            <?php get_course(9); ?>
        </div>
    </section>

<?php
get_footer();
