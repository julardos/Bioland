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
                    <img src="<?php echo  get_template_directory_uri() . "/assets/pernafasan/gif/cwe-cwo.gif" ?>" alt=""
                         class="img-fluid">
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
                     class="img-fluid">
                <div style="padding: 0 5rem">
                    <input type="range" class="form-control-range" onchange="activity_speed(this.value)">
                </div>
            </div>
        </div>
    </div>
</section>

<?php
get_footer()
?>
