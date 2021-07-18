<?php
/**
 * Template Name: Sistem Pernapasan
 */

get_header(); ?>

<section id="primary">
    <div class="container d-flex align-self-center mt-5 mt-lg-0 mt-md-0">
        <div class="row align-self-center w-100 mt-5 mt-lg-0 mt-md-0">
            <div class="col-12 col-lg-4 col-md-4 mt-5 mt-lg-0 mt-md-0">
                <img src="<?php echo get_template_directory_uri() . "/assets/pernafasan/mekanisme-01.png" ?>" alt=""
                     class="blood_flow img-fluid mx-auto">
            </div>
            <div class="col-12 col-lg-8 col-md-8">
                <h3 class="font-weight-bold">Sistem Pernapasan Manusia</h3>
                <p>Dalam materi Sistem Pernapasan Manusia ini, akan dibagi menjadi 4 sub-materi</p>
                <div class="row justify-content-between">
                    <div class="col-lg-3 col-md-4 col-6">
                        <a href="alat-pernapasan" class="text-dark">
                            <div class="card border-0 h-100 align-self-center">
                                <div class="card-body">
                                    <img src="<?php echo get_template_directory_uri() . "/assets/pernafasan/alat-pernafasan-1.png" ?>" alt=""
                                         class="img-fluid d-block mx-auto" style="max-height: 8rem">
                                    <h5 class="text-center mt-2">Alat Pernapasan</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-4 col-6">
                        <a href="mekanisme-pernapasan" class="text-dark">
                            <div class="card border-0 h-100 align-self-center">
                                <div class="card-body">
                                    <img src="<?php echo get_template_directory_uri() . "/assets/pernafasan/mekanisme-02.png" ?>" alt=""
                                         class="img-fluid d-block mx-auto" style="max-height: 8rem">
                                    <h5 class="text-center mt-2">Mekanisme Pernapasan</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-4 col-12 mt-4 mt-lg-0 mt-md-0">
                        <a href="pengendalian-dan-kecepatan-pernapasan" class="text-dark">
                            <div class="card border-0 h-100 align-self-center">
                                <div class="card-body">
                                    <img src="<?php echo get_template_directory_uri() . "/assets/pernafasan/paru-paru.png" ?>" alt=""
                                         class="img-fluid d-block mx-auto" style="max-height: 8rem">
                                    <h5 class="text-center mt-2">Pengendalian dan Kecepatan Pernapasan</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-4 col-12 mt-4 mt-lg-0 mt-md-0">
                        <a href="bahaya-rokok-bagi-kesehatan" class="text-dark">
                            <div class="card border-0 h-100 align-self-center">
                                <div class="card-body">
                                    <img src="<?php echo get_template_directory_uri() . "/assets/pernafasan/rokok1.png" ?>" alt=""
                                         class="img-fluid d-block mx-auto" style="max-height: 8rem">
                                    <h5 class="text-center mt-2">Bahaya Rokok Bagi kesehatan</h5>
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