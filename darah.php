<?php
/**
 * Template Name: Darah
 */

get_header(); ?>
 <section id="primary" class="position-relative" style="margin-top: -110px">
     <iframe src="<?php echo  get_template_directory_uri() . "/assets/SVG/aliran-darah.svg" ?>" frameborder="0"
        class="darah_bg"></iframe>
     <div class="info_text position-absolute w-50">
         <h1 class="text-danger font-weight-bold">Darah</h1>
         <p>Darah merupakan jaringan ikat yang berwujud cair dan tersusun atas dua komponen utama yaitu plasma dan elemen seluler, yang tersusun atas sel-sel darah. Darah tersusun atas 55% plasma darah dan 45% sel-sel darah. Secara normal, lebih dari 99% sel-sel darah tersusun atas sel darah merah (eritrosit) dan sisanya tersusun oleh sel darah putih (leukosit) dan keping darah (trombosit).</p>
         <a class="btn btn-outline-danger" href="javascript:history.back()">Back</a>
     </div>
 </section>
<?php
get_footer();
?>
