<?php
/**
 * Template Name: Mekanisme Pernapasan
 */

get_header(); ?>
    <section>
        <div class="container">
            <div class="text-center">
                <h2 class="font-weight-bold">Mekanisme Pernafasan</h2>
                <p>
                    Proses pernapasan merupakan proses yang kompleks dan bergantung pada perubahan volume rongga dada (toraks) dan perubahan tekanan.
                </p>
            </div>
        </div>
    </section>
    <section id="mekanisme-dada" class="bg-white py-3">
        <div class="container">
            <div class="text-center">
                <h4 class="font-weight-bold">Respirasi pada Dada</h4>
            </div>
            <div class="row justify-content-center">
                <div class="col-4">
                    <div class="jantung-bigger mx-auto">
                        <img src="<?php echo  get_template_directory_uri() . "/assets/pernafasan/gif/mekanisme-dada-ekspirasi.gif" ?>" alt=""
                             class="img-fluid">
                    </div>
                </div>
                <div class="col-4">
                    <div class="jantung-bigger mx-auto">
                        <img src="<?php echo  get_template_directory_uri() . "/assets/pernafasan/gif/mekanisme-dada-inspirasi.gif" ?>" alt=""
                             class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="mekanisme-diafragma" class="my-3">
        <div class="container">
            <div class="text-center">
                <h4 class="font-weight-bold">Respirasi pada Perut</h4>
            </div>
            <div class="row justify-content-center">
                <div class="col-4">
                    <div class="jantung-bigger mx-auto">
                        <img src="<?php echo  get_template_directory_uri() . "/assets/pernafasan/gif/mekanisme-diafragma-ekspirasi.gif" ?>" alt=""
                             class="img-fluid">
                    </div>
                </div>
                <div class="col-4">
                    <div class="jantung-bigger mx-auto">
                        <img src="<?php echo  get_template_directory_uri() . "/assets/pernafasan/gif/mekanisme-diafragma-inspirasi.gif" ?>" alt=""
                             class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="volume-kecepatan-paru-paru" class="bg-white my-3">
        <div class="container">
            <div class="text-center">
                <h4 class="font-weight-bold mt-3">Volume dan Kecapatan Paru-Paru</h4>
            </div>
            <div class="row justify-content-center">
                <div class="col-4">
                    <div class="jantung-bigger mx-auto">
                        <img src="<?php echo  get_template_directory_uri() . "/assets/pernafasan/gif/pernapasan-tidal.gif" ?>" alt=""
                             class="img-fluid">
                        <p>Volume udara tidal</p>
                    </div>
                </div>
                <div class="col-4">
                    <div class="jantung-bigger mx-auto">
                        <img src="<?php echo  get_template_directory_uri() . "/assets/pernafasan/gif/pernapasan-udara-komplementer.gif" ?>" alt=""
                             class="img-fluid">
                    </div>
                </div>
                <div class="col-4">
                    <div class="jantung-bigger mx-auto">
                        <img src="<?php echo  get_template_directory_uri() . "/assets/pernafasan/gif/pernapasan-suplementer.gif" ?>" alt=""
                             class="img-fluid">
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-4">
                    <div class="jantung-bigger mx-auto">
                        <img src="<?php echo  get_template_directory_uri() . "/assets/pernafasan/gif/pernapasan-residu.gif" ?>" alt=""
                             class="img-fluid">
                    </div>
                </div>
                <div class="col-4">
                    <div class="jantung-bigger mx-auto">
                        <img src="<?php echo  get_template_directory_uri() . "/assets/pernafasan/gif/pernapasan-kapasitas-vital-paru.gif" ?>" alt=""
                             class="img-fluid">
                    </div>
                </div>
                <div class="col-4">
                    <div class="jantung-bigger mx-auto">
                        <img src="<?php echo  get_template_directory_uri() . "/assets/pernafasan/gif/pernapasan-total-paru-paru.gif" ?>" alt=""
                             class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php
get_footer()
?>