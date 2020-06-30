window.addEventListener("load", function() {
    var svgObject = document.getElementById('aliran_darah').contentDocument;
    var plasma_darah = svgObject.getElementById('jalur_baru_png');
    var darah_merah = svgObject.getElementById('FL_1_darah_png');
    var darah_putih = svgObject.getElementById('sel_darah_putih_png');
    var keping_darah = svgObject.getElementById('keping_darah_png');
    darah_merah.addEventListener('mouseover', merah)
    darah_merah.addEventListener('mouseout', mouseout)
    darah_putih.addEventListener('mouseover', putih)
    darah_putih.addEventListener('mouseout', putihout)
    keping_darah.addEventListener('mouseover', keping)
    keping_darah.addEventListener('mouseout', mouseout)
    plasma_darah.addEventListener('mouseover', plasma)
    plasma_darah.addEventListener('mouseout', mouseout)
});
function mouseover(title, desc, src_img="") {
    document.getElementById('blood_info_title').innerText = title;
    document.getElementById('blood_info_desc').innerText = desc;
    document.getElementById("info_tab").classList.remove("d-none");
    document.getElementById('info_image').src = src_img
}
function mouseout() {
    document.getElementById("info_tab").classList.add("d-none");
}
function plasma() {
    var title = "Plasma Darah"
    var desc = "merupakan cairan ekstraseluler yang tersusun atas 91,5% air (H2O) dan 8,5% zat-zat terlarut. Zat-zat terlarut tersebut tersusun atas protein dan zat-zat lain. Protein-protein yang terlarut dalam plasma antara lain albumin, fibrinogen, dan globulin yang sering disebut sebagai protein plasma. Zat-zat lain yang terlarut dalam plasma darah antara lain sari makanan, mineral, hormon, antibodi, dan zat sisa metabolisme (urea dan karbon dioksida)."
    mouseover(title, desc);
}
function merah() {
    var src_image = currentScriptPath() + "darah-baru.png"
    var title = "Sel Darah Merah"
    var desc = "Sel darah merah berbentuk bulat pipih dengan bagian tengahnya cekung (bikonkaf). Sel darah merah tidak memiliki inti sel. Warna merah pada sel darah merah disebabkan adanya hemoglobin (Hb) dalam sel darah merah. Hemoglobin merupakan suatu protein yang mengandung unsur besi. Sel darah merah paling banyak terdapat dalam darah, 1 mm3 (kurang lebih sekitar satu tetes) darah terdiri atas 4-5 juta sel darah merah. Sel darah merah dibentuk di dalam sumsum merah tulang. Sel darah merah hanya berusia sekitar 100 - 120 hari."
    mouseover(title, desc, src_image);
}
function keping() {
    var src_image = currentScriptPath() + "keping-darah.png"
    var title = "Keping Darah (Trombosit)"
    var desc = "Bentuk trombosit beraneka ragam, yaitu bulat, oval, dan memanjang. Trombosit tidak berinti dan bergranula. Jumlah sel pada orang dewasa sekitar 200.000 – 500.000 sel per 1 mm3 darah. Umur dari keping darah cukup singkat, yaitu 5 sampai 9 hari. Keping darah sangat berhubungan dengan proses mengeringnya luka, sehingga tidak heran jika ada yang menyebut keping darah dengan sel darah pembeku."
    mouseover(title, desc, src_image);
}
function putih() {
    document.getElementById('info_tab_putih').classList.remove('d-none')
}
function putihout() {
    document.getElementById('info_tab_putih').classList.add('d-none')
}
var currentScriptPath = function () {
    var scripts = document.querySelectorAll( 'script[src]' );
    var currentScript = scripts[ scripts.length - 1 ].src;
    var currentScriptChunks = currentScript.split( '/' );
    var currentScriptFile =  currentScriptChunks[currentScriptChunks.length - 3] + "/" + currentScriptChunks[currentScriptChunks.length - 2] + "/" + currentScriptChunks[ currentScriptChunks.length - 1 ];
    return currentScript.replace( currentScriptFile, 'wp-content/themes/bioland/assets/' );
}
