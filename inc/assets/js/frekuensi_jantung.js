function activity_speed(speed) {
    if(speed > 80) {
        var src_image = currentScriptPath() + "Jantung/5-jantung.gif"
        var orang_src = currentScriptPath() + "Orang_jalan/5-orang-jalan-4-rev.gif"
    } else if (speed > 60) {
        var src_image = currentScriptPath() + "Jantung/4-jantung.gif"
        var orang_src = currentScriptPath() + "Orang_jalan/4-orang-jalan-4-rev.gif"
    } else if (speed > 40) {
        var src_image = currentScriptPath() + "Jantung/3-jantung.gif"
        var orang_src = currentScriptPath() + "Orang_jalan/3-orang-jalan-4-rev.gif"
    } else if (speed > 20) {
        var src_image = currentScriptPath() + "Jantung/2-jantung.gif"
        var orang_src = currentScriptPath() + "Orang_jalan/2-orang-jalan-4-rev.gif"
    } else {
        var src_image = currentScriptPath() + "Jantung/1-jantung.gif"
        var orang_src = currentScriptPath() + "Orang_jalan/1-orang-jalan-4-rev.gif"
    }
    document.getElementById("activity_jantung").src = src_image
    document.getElementById("activity_orang").src = orang_src
}

function termo_speed(speed) {
    if(speed > 80) {
        var src_image = currentScriptPath() + "Jantung/5-jantung.gif"
    } else if (speed > 60) {
        var src_image = currentScriptPath() + "Jantung/4-jantung.gif"
    } else if (speed > 40) {
        var src_image = currentScriptPath() + "Jantung/3-jantung.gif"
    } else if (speed > 20) {
        var src_image = currentScriptPath() + "Jantung/2-jantung.gif"
    } else {
        var src_image = currentScriptPath() + "Jantung/1-jantung.gif"
    }
    document.getElementById("termo_jantung").src = src_image
}

function currentScriptPath() {
    var scripts = document.querySelectorAll( 'script[src]' );
    var currentScript = scripts[ scripts.length - 1 ].src;
    var currentScriptChunks = currentScript.split( '/' );
    var currentScriptFile =  currentScriptChunks[currentScriptChunks.length - 3] + "/" + currentScriptChunks[currentScriptChunks.length - 2] + "/" + currentScriptChunks[ currentScriptChunks.length - 1 ];
    return currentScript.replace( currentScriptFile, 'wp-content/themes/bioland/assets/gif/' );
}
jQuery(function ($) {
    $(function() {
        $('#showModal').modal('show')
    });
});