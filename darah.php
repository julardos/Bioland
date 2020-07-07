<?php
/**
 * Template Name: Darah
 */

get_header(); ?>
 <section id="primary" class="position-relative" style="margin-top: -110px">
     <iframe src="<?php echo  get_template_directory_uri() . "/assets/SVG/aliran-darah.svg" ?>" frameborder="0"
        class="darah_bg" id="aliran_darah"></iframe>
     <div class="info_text position-absolute w-50" style="left:40vw">
         <h1 class="text-danger font-weight-bold">Darah</h1>
         <p>Darah merupakan jaringan ikat yang berwujud cair dan tersusun atas dua komponen utama yaitu plasma dan elemen seluler, yang tersusun atas sel-sel darah. Darah tersusun atas 55% plasma darah dan 45% sel-sel darah. Secara normal, lebih dari 99% sel-sel darah tersusun atas sel darah merah (eritrosit) dan sisanya tersusun oleh sel darah putih (leukosit) dan keping darah (trombosit).</p>
         <a class="btn btn-outline-danger" href="<?php echo home_url() . '/sistem-peredaran-darah' ?>">Kembali</a>
         <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Animasi</button>
     </div>
     <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog" style="max-width: 1000px; max-height: 550px" role="document">
             <div class="modal-content">
                 <div class="modal-header">
                     <h5 class="modal-title" id="exampleModalLabel">Animasi</h5>
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                         <span aria-hidden="true">&times;</span>
                     </button>
                 </div>
                 <div class="modal-body">
                     <iframe src="<?php echo  get_template_directory_uri() . "/assets/gif/darah-ngalir.gif" ?>" frameborder="0"
                             class="darah_bg img-fluid" style="max-height: 550px" id="aliran_darah"></iframe>
                 </div>
                 <div class="modal-footer">
                     <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                 </div>
             </div>
         </div>
     </div>
     <div id="info_tab" class="d-none info_tab">
        <div class="card border-0">
            <div class="card-header bg-warning">
                <h3 id="blood_info_title" class="font-weight-bold text-center">Title</h3>
            </div>
            <div class="card-body bg-white">
                <div class="d-flex">
                    <div>
                        <img src="" alt="" id="info_image">
                    </div>
                    <p id="blood_info_desc">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet animi, autem cupiditate explicabo facilis fugit molestiae numquam! A aspernatur consectetur eos iure libero nihil repellendus. Architecto aspernatur corporis itaque molestias!
                    </p>
                </div>
            </div>
        </div>
     </div>
     <div id="info_tab_putih" class="d-none info_tab">
         <div class="card border-0">
             <div class="card-header bg-warning">
                 <h3 id="blood_info_title" class="font-weight-bold text-center">Sel Darah Putih</h3>
             </div>
             <div class="card-body bg-white">
                 <h5 class="font-weight-bold text-center">Karakteristik Sel Darah Putih</h5>
                 <table class="table">
                     <thead>
                     <tr>
                         <th scope="col">Granula</th>
                         <th scope="col">A-granulosit</th>
                     </tr>
                     </thead>
                     <tbody>
                     <tr>
                         <td class="bg-skyblue">
                             <div class="row text-center">
                                 <div class="col-12 col-md-6 col-lg-4">
                                     <div class="w-100">
                                         <img src="<?php echo  get_template_directory_uri() .
                                             "/assets/sel-darah-putih.png" ?>" alt="" class="img-fluid">
                                     </div>
                                     <p class="font-weight-bold">
                                         Eosinofil
                                     </p>
                                     <p>
                                         Mengandung
                                         granula berwarna
                                         merah. Berfungsi
                                         pada reaksi alergi,
                                         terutama infeksi
                                         cacing.

                                     </p>
                                 </div>
                                 <div class="col-12 col-md-6 col-lg-4">
                                     <div class="w-100">
                                         <img src="<?php echo  get_template_directory_uri() .
                                             "/assets/sel-darah-putih.png" ?>" alt="" class="img-fluid">
                                     </div>
                                     <p class="font-weight-bold">
                                         Basofil
                                     </p>
                                     <p>
                                         Mengandung granula berwarna biru. Berfungsi pada reaksi alergi.
                                     </p>
                                 </div>
                                 <div class="col-12 col-md-6 col-lg-4">
                                     <div class="w-100">
                                         <img src="<?php echo  get_template_directory_uri() .
                                             "/assets/sel-darah-putih.png" ?>" alt="" class="img-fluid">
                                     </div>
                                     <p class="font-weight-bold">
                                         Netrofil
                                     </p>
                                     <p>
                                         Disebut juga sel-sel PMN (Poly Morpho Nuclear). Berfungsi sebagai fagosit (menyerang patogen)
                                     </p>
                                 </div>
                             </div>
                         </td>
                         <td>
                             <div class="row text-center">
                                 <div class="col-12 col-lg-6">
                                     <div class="w-100">
                                         <img src="<?php echo  get_template_directory_uri() .
                                             "/assets/sel-darah-putih.png" ?>" alt="" class="img-fluid">
                                     </div>
                                     <p class="font-weight-bold">
                                         Limfosit
                                     </p>
                                     <p>
                                         Ada dua jenis, sel T dan sel B. Keduanya untuk imunitas dan kekebalan tubuh.
                                     </p>
                                 </div>
                                 <div class="col-12 col-lg-6">
                                     <div class="w-100">
                                         <img src="<?php echo  get_template_directory_uri() .
                                             "/assets/sel-darah-putih.png" ?>" alt="" class="img-fluid">
                                     </div>
                                     <p class="font-weight-bold">
                                         Monosit
                                     </p>
                                     <p>
                                         Leukosit yang berukuran paling besar. Berfungsi mencerna sel-sel yang mati atau rusak dan membantu sistem kekebalan tubuh.
                                     </p>
                                 </div>
                             </div>
                         </td>
                     </tr>
                     </tbody>
                 </table>
             </div>
         </div>
     </div>
 </section>
<?php
get_footer();
?>
