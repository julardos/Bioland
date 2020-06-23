<?php
/**
 * Template Name: Jantung dan Pembuluh Darah
 */

get_header(); ?>
    <section id="primary" class="my-5">
        <div class="container">
            <div class="d-flex">
                <div class="jantung">
                    <img src="<?php echo  get_template_directory_uri() . "/assets/gif/jantung-2.gif" ?>" alt=""
                         class="img-fluid">
                </div>
                <div class="align-self-center" style="max-width: 40vw">
                    <h3 class="text-danger font-weight-bold">Jantung dan Pembuluh Darah</h3>
                    <p>Darah dapat mengalir ke seluruh tubuh karena di dalam tubuh kita terdapat organ yang berperan sebagai pemompa darah yang disebut dengan jantung. Jantung terdiri atas 4 ruangan, yaitu serambi (atrium) kiri dan serambi (atrium) kanan serta bilik (ventrikel) kiri dan bilik (ventrikel) kanan.</p>
                </div>
            </div>
            <div class="d-flex">
                <div class="align-self-center" style="max-width: 40vw">
                    <p>Pembuluh darah dapat dibedakan menjadi tiga, yaitu pembuluh nadi (arteri), pembuluh balik (vena), dan pembuluh kapiler. Arteri merupakan pembuluh darah yang mengalirkan darah keluar jantung, sedangkan vena mengalirkan darah masuk ke dalam jantung. Arteri berisi darah yang mengandung oksigen, kecuali pembuluh arteri pulmonalis. Vena berisi darah yang banyak mengandung karbon dioksida, kecuali vena pulmonalis. Ujung arteri dan vena bercabangcabang menjadi pembuluh-pembuluh kecil yang disebut pembuluh kapiler. Pada pembuluh kapiler inilah terjadi pertukaran gas oksigen dan gas karbon dioksida antara darah dengan jaringan tubuh.</p>
                </div>
                <div class="pembuluh_darah">
                    <img src="<?php echo  get_template_directory_uri() . "/assets/gif/pembuluh-darah-baru.gif" ?>" alt=""
                         class="img-fluid">
                </div>
            </div>
        </div>
    </section>
    <section id="secondary" class="bg-white">
        <div class="container py-5">
            <div class="text-center">
                <h3 class="text-danger font-weight-bold">Peredaran Darah Manusia</h3>
                <p>Peredaran darah manusia termasuk peredaran darah tertutup karena darah selalu beredar di dalam pembuluh darah. Setiap beredar, darah melewati jantung dua kali sehingga disebut peredaran darah ganda. Pada peredaran darah ganda tersebut dikenal peredaran darah kecil dan peredaran darah besar.</p>
            </div>
            <div class="row mt-5">
                <div class="col-12 col-lg-6 col-md-6">
                    <div class="card border-0 bg-skyblue h-100">
                        <div class="card-body">
                            <h5 class="text-center font-weight-bold">
                                Peredaran Darah Kecil
                            </h5>
                            <p class="text-center">
                                Peredaran darah kecil merupakan peredaran darah yang dimulai dari jantung (bilik kanan) menuju ke paru-paru kemudian kembali lagi ke jantung (serambi kiri).
                            </p>
                            <img src="<?php echo  get_template_directory_uri() . "/assets/gif/peredaran-darah-kecil.gif" ?>" alt=""
                                class="img-fluid">
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6 col-md-6">
                    <div class="card border-0 bg-skyblue h-100">
                        <div class="card-body">
                            <h5 class="text-center font-weight-bold">
                                Peredaran Darah Besar
                            </h5>
                            <p class="text-center">
                                Peredaran darah besar adalah peredaran darah dari jantung (bilik kiri) ke seluruh tubuh kemudian kembali ke jantung lagi (serambi kanan).
                            </p>
                            <img src="<?php echo  get_template_directory_uri() . "/assets/gif/peredaran-darah-kecil.gif" ?>" alt=""
                                 class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php
get_footer();
?>
