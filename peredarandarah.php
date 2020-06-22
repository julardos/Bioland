<?php
/**
 * Template Name: Sistem Peredaran Darah
 */

get_header(); ?>

<section id="primary">
    <div class="container d-flex align-self-center">
        <div class="row align-self-center w-100">
            <div class="col-12 col-lg-4 col-md-4">
                <img src="<?php echo get_template_directory_uri() . "/assets/peredaran-darah-bener.png" ?>" alt=""
                     class="blood_flow img-fluid mx-auto">
            </div>
            <div class="col-12 col-lg-8 col-md-8">
                <h3 class="font-weight-bold">Sistem Peredaran Darah Manusia</h3>
                <p>Dalam materi Sistem Peredaran Darah Manusia ini, akan dibagi menjadi 3 sub-materi</p>
                <div class="row justify-content-between">
                    <div class="col-lg-4 col-md-4 col-6">
                        <a href="darah" class="text-dark">
                            <div class="card border-0 h-100 align-self-center">
                                <div class="card-body">
                                    <img src="<?php echo get_template_directory_uri() . "/assets/darah-baru.png" ?>" alt=""
                                         class="img-fluid d-block mx-auto" style="max-height: 8rem">
                                    <h5 class="text-center mt-2">Darah</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-4 col-6">
                        <a href="jantung-pembuluh-darah" class="text-dark">
                            <div class="card border-0 h-100 align-self-center">
                                <div class="card-body">
                                    <img src="<?php echo get_template_directory_uri() . "/assets/1-darah.png" ?>" alt=""
                                         class="img-fluid d-block mx-auto" style="max-height: 8rem">
                                    <h5 class="text-center mt-2">Jantung dan Pembuluh Darah</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12 mt-4 mt-lg-0 mt-md-0">
                        <a href="denyut-jantung" class="text-dark">
                            <div class="card border-0 h-100 align-self-center">
                                <div class="card-body">
                                    <img src="<?php echo get_template_directory_uri() . "/assets/jantung.png" ?>" alt=""
                                         class="img-fluid d-block mx-auto" style="max-height: 8rem">
                                    <h5 class="text-center mt-2">Frekuensi Denyut Jantung</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
get_footer()
?>