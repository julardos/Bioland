<?php
/**
 * Template Name: Pengendalian Kecepatan Pernapasan
 */

get_header(); ?>

<section>
    <div class="container my-4">
        <div class="text-center px-3">
            <h2 class="font-weight-bold">Pengendalian dan Kecepatan Pernapasan</h2>
            <p>
                Pada saat kita melakukan aktivitas berat, terjadi peningkatan metabolisme dalam jaringan, terutama pada otot. Jika tubuh lebih banyak menghasilkan energi dan terjadi peningkatan kadar CO2. Hal ini menyebabkan pernapasan berjalan lebih cepat dan lebih pendek, sehingga tubuh akan terengah-engah.
                Kecepatan (frekuensi) pernapasan dipengaruhi oleh beberapa faktor , yaitu:
            </p>
        </div>
    </div>
</section>
<section id="gander" class="bg-white py-3">
    <div class="container">
        <div class="text-center">
            <h4 class="font-weight-bold">Jenis Kelamin</h4>
        </div>
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="jantung-bigger mx-auto">
                    <iframe src="https://biolandclass.com/wp-admin/admin-ajax.php?action=h5p_embed&id=6" width="958" height="1159" frameborder="0" allowfullscreen="allowfullscreen" title="Mekanisme Pernapasan Ekspirasi pada Dada"></iframe>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container my-4">
        <div class="text-center">
            <h2 class="font-weight-bold">Umur</h2>
            <p>
                Tubuh yang berkembang memerlukan oksigen untuk tumbuh. Orang yang sudah tua juga memiliki frekuensi pernapasan lebih banyak, karena kontraksi otot-otot pernapasan dan diafragma tidak sebaik pada saat masih muda, sehingga udara pernapasan yang mampu dihirup berjumlah sedikit.
            </p>
        </div>
        <div class="text-center">
            <div class="jantung-bigger mx-auto">
                <img src="<?php echo  get_template_directory_uri() . "/assets/pernafasan/animasi-slider/umur/umur-normal.gif" ?>" alt=""
                     class="img-fluid" id="umur/umur">
                <div style="padding: 0 5rem">
                    <input type="range" class="form-control-range" onchange="activity_speed(this.value, 'umur/umur', true)">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-white py-4">
    <div class="container">
        <div class="text-center">
            <h2 class="font-weight-bold">Suhu Tubuh</h2>
            <p>
                Perubahan suhu tubuh berkaitan dengan produksi panas dan pengeluaran panas yang berlebihan. Selama demam, metabolisme meningkat dan konsumsi oksigen bertambah. Metabolisme karbohidrat akan meningkat sekitar 10 – 15% untuk setiap kenaikan suhu 1°C, sehingga frekuensi jantung dan pernapasan akan meningkat untuk memenuhi kebutuhan metabolisme tubuh terhadap nutrisi dan oksigen. Dalam suhu dingin pernapasan akan menurun.
            </p>
        </div>
        <div class="row">
            <div class="col-6">
                <div class="text-center d-flex">
                    <div class="jantung-bigger mx-auto">
                        <img src="<?php echo  get_template_directory_uri() . "/assets/pernafasan/animasi-slider/orang-demam/orang-demam-normal.gif" ?>" alt=""
                             class="img-fluid" id="orang-demam/orang-demam">
                        <div style="padding: 0 5rem">
                            <input type="range" class="form-control-range" onchange="activity_speed(this.value, 'orang-demam/orang-demam', true)">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="text-center">
                    <div class="jantung-bigger mx-auto">
                        <img src="<?php echo  get_template_directory_uri() . "/assets/pernafasan/animasi-slider/orang-kedinginan/orang-kedinginan-normal.gif" ?>" alt=""
                             class="img-fluid" id="orang-kedinginan/orang-kedinginan">
                        <div style="padding: 0 5rem">
                            <input type="range" class="form-control-range" onchange="activity_speed(this.value, 'orang-kedinginan/orang-kedinginan', true)">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container my-4">
        <div class="text-center">
            <h2 class="font-weight-bold">Posisi dan Aktivitas Tubuh</h2>
        </div>
        <div class="row">
            <div class="col-12 col-md-4">
                <iframe src="https://biolandclass.com/wp-admin/admin-ajax.php?action=h5p_embed&id=23" width="958" height="1159" frameborder="0" allowfullscreen="allowfullscreen" title="Mekanisme Pernapasan Ekspirasi pada Dada"></iframe>
            </div>
            <div class="col-12 col-md-4">
                <img src="<?php echo  get_template_directory_uri() . "/assets/pernafasan/gif/orang-duduk.gif" ?>" alt=""
                     class="img-fluid" >
            </div>
            <div class="col-12 col-md-4">
                <iframe src="https://biolandclass.com/wp-admin/admin-ajax.php?action=h5p_embed&id=8" width="958" height="1159" frameborder="0" allowfullscreen="allowfullscreen" title="Mekanisme Pernapasan Ekspirasi pada Dada"></iframe>
            </div>
        </div>
    </div>
</section>

<section class="bg-white py-4">
    <div class="container my-4">
        <div class="text-center">
            <h2 class="font-weight-bold">Emosi, rasa sakit, dan ketakutan</h2>
            <p>
                Hal ini menyebabkan terjadinya impuls yang merangsang pusat pernapasan, sehingga penghirupan udara semakin kuat. Ketika ketakutan akan memicu pengeluaran hormone adrenalin yang mana jantung berdenyut lebih cepat. Hal tersebut memerlukan energi lebih. Sehingga kebutuhan Oksigen untuk pembentukan ATP/energi bertambah. Jadi napas akan terengah-engah untuk memenuhi kebutuhan ATP.
            </p>
        </div>
        <div class="row">
            <div class="col-6">
                <div class="text-center d-flex">
                    <div class="jantung-bigger mx-auto">
                        <img src="<?php echo  get_template_directory_uri() . "/assets/pernafasan/animasi-slider/orang-marah/orang-marah-normal.gif" ?>" alt=""
                             class="img-fluid" id="orang-marah/orang-marah">
                        <div style="padding: 0 5rem">
                            <input type="range" class="form-control-range" onchange="activity_speed(this.value, 'orang-marah/orang-marah', true)">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="text-center">
                    <div class="jantung-bigger mx-auto">
                        <img src="<?php echo  get_template_directory_uri() . "/assets/pernafasan/animasi-slider/orang-ketakutan/orang-ketakutan-normal.gif" ?>" alt=""
                             class="img-fluid" id="orang-ketakutan/orang-ketakutan">
                        <div style="padding: 0 5rem">
                            <input type="range" class="form-control-range" onchange="activity_speed(this.value, 'orang-ketakutan/orang-ketakutan', true)">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-4">
    <div class="container my-4">
        <div class="text-center">
            <h2 class="font-weight-bold">Posisi dan Aktivitas Tubuh</h2>
        </div>
        <div class="row">
            <div class="col-12 col-md-6">
                <iframe src="https://biolandclass.com/wp-admin/admin-ajax.php?action=h5p_embed&id=21" width="958" height="1159" frameborder="0" allowfullscreen="allowfullscreen" title="Mekanisme Pernapasan Ekspirasi pada Dada"></iframe>
            </div>
            <div class="col-12 col-md-6">
                <iframe src="https://biolandclass.com/wp-admin/admin-ajax.php?action=h5p_embed&id=22" width="958" height="1159" frameborder="0" allowfullscreen="allowfullscreen" title="Mekanisme Pernapasan Ekspirasi pada Dada"></iframe>
            </div>
        </div>
    </div>
</section>

<section class="bg-white py-4">
    <div class="container my-4">
        <div class="text-center">
            <h2 class="font-weight-bold">Posisi dan Aktivitas Tubuh</h2>
        </div>
        <div class="row justify-content-center">
            <div class="col-8">
                <iframe src="https://biolandclass.com/wp-admin/admin-ajax.php?action=h5p_embed&id=20" width="958" height="1159" frameborder="0" allowfullscreen="allowfullscreen" title="Mekanisme Pernapasan Ekspirasi pada Dada"></iframe>
            </div>
        </div>
    </div>
</section>


<?php
get_footer()
?>
