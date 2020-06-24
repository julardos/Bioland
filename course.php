<div class="course">
    <h5>Kelas <?php echo $grade ?> SMP</h5>
    <div class="px-5">
        <div id="carousel<?php echo $grade ?>Grade" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner py-4 px-3">
                <div class="carousel-item active">
                    <div class="row px-2">
                        <?php if ($grade == 8) { ?>
                        <div class="col-3">
                            <a href="sistem-peredaran-darah">
                                <div class="card bg-skyblue border-0">
                                    <div class="course_img mx-auto">
                                        <img src="<?php echo get_template_directory_uri() .
                                            "/assets/peredaran-darah-bener.png" ?>"
                                             class="img-fluid"
                                             alt="">
                                    </div>
                                    <p class="text-center text-dark font-weight-bold">Sistem peredaran darah manusia</p>
                                </div>
                            </a>
                        </div>
                        <?php } else {?>
                        <div class="col-3">
                            <div class="card bg-skyblue border-0">
                                <img src="<?php echo get_template_directory_uri() .
                                    "/assets/tumbnail-web-yg-kosong.png" ?>"
                                     class="img-fluid"
                                     alt=""
                                >
                            </div>
                        </div>
                        <?php } ?>
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
            <a class="carousel-control-prev" href="#carousel<?php echo $grade ?>Grade" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel<?php echo $grade ?>Grade" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</div>