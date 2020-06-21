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
 * @package WP_Bootstrap_Starter
 */

get_header(); ?>
	<section id="primary" class="content-area">
        <div class="container-fluid">
            <main id="main" class="jumbotron-fluid openning-page position-relative" role="main">
                <div class="text-center">
                    <img src = "<?php echo  get_template_directory_uri() . '/assets/ASIK-LOGO-fix.png' ?>" alt = "Logo" class="h-25 w-25 mt-4">
                    <h3 class="font-weight-bold mt-2 ">Situs belajar Biologi yang menyenangkan!</h3>
                    <form action="" class="">
                        <div class="row mt-3">
                            <input type="text" class="form-control rounded-pill border-0 col-3 ml-auto" placeholder="Cari Materi ...">
                            <a href="" class="mr-auto ml-3 mt-1" style="color: #0c5460"><i class="fas fa-search"></i></a>
                        </div>
                    </form>
                </div>
                <div class="position-absolute" style="bottom: 0">
                    <div class="d-flex justify-content-between align-self-end">
                        <img src="<?php echo  get_template_directory_uri() . '/assets/orang-di-depan.png' ?>" alt=""
                             class="boy-pic img-fluid">
                        <img src="<?php echo  get_template_directory_uri() . '/assets/orang-di-depan-2.png' ?>" alt=""
                             class="boy-pic img-fluid">
                    </div>
                </div>
            </main><!-- #main -->
        </div>
	</section><!-- #primary -->
    <section id="main-content">
        <div class="container">
            <h5 class="text-center font-weight-bold pb-3">Cari Materi yang Kamu Inginkan!</h5>
            <div class="course">
                <h5>Kelas 7 SMP</h5>
                <div class="px-5">
                    <div id="carousel7Grade" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner py-4 px-3">
                            <div class="carousel-item active">
                                <div class="row">
                                    <div class="col-3">
                                        <div class="card bg-skyblue border-0">
                                            <img src="<?php echo get_template_directory_uri() .
                                                "/assets/tumbnail-web-yg-kosong.png" ?>"
                                                 class="img-fluid"
                                                 alt=""
                                            >
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="card bg-skyblue border-0">
                                            <img src="<?php echo get_template_directory_uri() .
                                                "/assets/tumbnail-web-yg-kosong.png" ?>"
                                                 class="img-fluid"
                                                 alt=""
                                            >
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="card bg-skyblue border-0">
                                            <img src="<?php echo get_template_directory_uri() .
                                                "/assets/tumbnail-web-yg-kosong.png" ?>"
                                                 class="img-fluid"
                                                 alt=""
                                            >
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="card bg-skyblue border-0">
                                            <img src="<?php echo get_template_directory_uri() .
                                                "/assets/tumbnail-web-yg-kosong.png" ?>"
                                                 class="img-fluid"
                                                 alt=""
                                            >
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row px-2">
                                    <div class="col-3">
                                        <div class="card bg-skyblue border-0">
                                            <img src="<?php echo get_template_directory_uri() .
                                                "/assets/tumbnail-web-yg-kosong.png" ?>"
                                                 class="img-fluid"
                                                 alt=""
                                            >
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="card bg-skyblue border-0">
                                            <img src="<?php echo get_template_directory_uri() .
                                                "/assets/tumbnail-web-yg-kosong.png" ?>"
                                                 class="img-fluid"
                                                 alt=""
                                            >
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="card bg-skyblue border-0">
                                            <img src="<?php echo get_template_directory_uri() .
                                                "/assets/tumbnail-web-yg-kosong.png" ?>"
                                                 class="img-fluid"
                                                 alt=""
                                            >
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="card bg-skyblue border-0">
                                            <img src="<?php echo get_template_directory_uri() .
                                                "/assets/tumbnail-web-yg-kosong.png" ?>"
                                                 class="img-fluid"
                                                 alt=""
                                            >
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carousel7Grade" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carousel7Grade" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php
get_footer();
