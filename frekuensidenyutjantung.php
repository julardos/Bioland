<?php
/**
 * Template Name: Frekuensi Denyut Jantung
 */

get_header(); ?>
    <section id="primary" class="my-5">
        <div class="container">
            <div class="text-center">
                <h2 class="font-weight-bold">Frekuensi Denyut Jantung</h2>
                <p>
                    Ada beberapa faktor yang memengaruhi frekuensi denyut jantung di antaranya beberapa hal berikut.
                </p>
            </div>
            <div class="row my-4">
                <div class="orang_jalan col-4">
                    <img src="<?php echo  get_template_directory_uri() . "/assets/gif/orang-jalan-4-rev.gif" ?>" alt=""
                        class="img-fluid">
                </div>
                <div class="text col-8">
                    <h4 class="font-weight-bold">Kegiatan atau Aktivitas tubuh</h4>
                    <p>Orang yang melakukan aktivitas memerlukan lebih banyak sumber energi berupa glukosa dan oksigen dibandingkan dengan orang yang tidak melakukan aktivitas seperti duduk santai atau tiduran. Untuk memenuhi kebutuhan sumber energi dan oksigen tersebut, jantung harus memompa darah lebih cepat.</p>
                    <div class="jantung mx-auto">
                        <img src="<?php echo  get_template_directory_uri() . "/assets/gif/jantung-2.gif" ?>" alt=""
                             class="img-fluid">
                    </div>
                    <div class="mx-auto" style="max-width: 15vw">
                        <div class="row justify-content-between">
                            <div class="col-2 p-0">
                                <img src="<?php echo  get_template_directory_uri() . "/assets/1-darah.png" ?>" alt=""
                                     class="img-fluid">
                            </div>
                            <div class="col-2 p-0 float-right">
                                <img src="<?php echo  get_template_directory_uri() . "/assets/1-darah.png" ?>" alt=""
                                     class="img-fluid">
                            </div>
                        </div>
                        <input type="range" class="form-control-range">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="gander" class="bg-white py-3">
        <div class="container">
            <div class="text-center">
                <h4 class="font-weight-bold">Jenis Kelamin</h4>
                <p>Pada umumnya perempuan memiliki frekuensi denyut jantung yang lebih tinggi daripada laki-laki. Pada kondisi normal, denyut jantung perempuan berkisar antara 72-80 denyutan/menit, sedangkan denyut jantung laki-laki berkisar antara 64-72 denyutan/menit.</p>
            </div>
            <div class="row justify-content-center">
                <div class="col-4">
                    <div class="jantung-bigger mx-auto">
                        <img src="<?php echo  get_template_directory_uri() . "/assets/gif/jantung-2.gif" ?>" alt=""
                             class="img-fluid">
                    </div>
                    <div class="face">
                        <img src="<?php echo  get_template_directory_uri() . "/assets/girl.png" ?>" alt=""
                             class="img-fluid">
                    </div>
                </div>
                <div class="col-4">
                    <div class="jantung-bigger mx-auto">
                        <img src="<?php echo  get_template_directory_uri() . "/assets/gif/jantung-2.gif" ?>" alt=""
                             class="img-fluid">
                    </div>
                    <div class="face">
                        <img src="<?php echo  get_template_directory_uri() . "/assets/man.png" ?>" alt=""
                             class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="temperature" class="my-3">
        <div class="container">
            <div class="text-center">
                <h4 class="font-weight-bold">Suhu Tubuh</h4>
                <p>Pada umumnya perempuan memiliki frekuensi denyut jantung yang lebih tinggi daripada laki-laki. Pada kondisi normal, denyut jantung perempuan berkisar antara 72-80 denyutan/menit, sedangkan denyut jantung laki-laki berkisar antara 64-72 denyutan/menit.</p>
            </div>
            <div class="d-flex justify-content-center">
                <div>
                    <input type="range" orient="vertical" />
                </div>
                <div class="orang_sakit w-75">
                    <img src="<?php echo  get_template_directory_uri() . "/assets/gif/orang-sakit-s.gif" ?>" alt=""
                         class="img-fluid mx-auto">
                </div>
                <div class="jantung">
                    <img src="<?php echo  get_template_directory_uri() . "/assets/gif/jantung-2.gif" ?>" alt=""
                         class="img-fluid">
                </div>
            </div>
        </div>
    </section>
    <section id="aged" class="bg-white pt-3 pb-5">
        <div class="container">
            <div>
            </div>
            <div class="text-center">
                <h4 class="font-weight-bold">Umur</h4>
                <p>Pada umumnya perempuan memiliki frekuensi denyut jantung yang lebih tinggi daripada laki-laki. Pada kondisi normal, denyut jantung perempuan berkisar antara 72-80 denyutan/menit, sedangkan denyut jantung laki-laki berkisar antara 64-72 denyutan/menit.</p>
            </div>
            <div class="row justify-content-center">
                <div class="col-4">
                    <div class="jantung-bigger mx-auto">
                        <img src="<?php echo  get_template_directory_uri() . "/assets/gif/jantung-2.gif" ?>" alt=""
                             class="img-fluid">
                    </div>
                    <div class="face">
                        <img src="<?php echo  get_template_directory_uri() . "/assets/man.png" ?>" alt=""
                             class="img-fluid">
                    </div>
                </div>
                <div class="col-4">
                    <div class="jantung-bigger mx-auto">
                        <img src="<?php echo  get_template_directory_uri() . "/assets/gif/jantung-2.gif" ?>" alt=""
                             class="img-fluid">
                    </div>
                    <div class="face">
                        <img src="<?php echo  get_template_directory_uri() . "/assets/grandfather.png" ?>" alt=""
                             class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php
get_footer();
?>
