function activity_speed(speed, tipe, isReverse = false) {
    let src_image;
    if(speed > 80) {
        src_image = currentScriptPath() + tipe + (isReverse ? "-cepat.gif" : "-lambat.gif")
    } else if (speed > 60) {
        src_image = currentScriptPath() + tipe + (isReverse ? "-agak-lambat.gif" : "-agak-cepat.gif")
    } else if (speed > 40) {
        src_image = currentScriptPath() + tipe + "-normal.gif"
    } else if (speed > 20) {
        src_image = currentScriptPath() + tipe + (isReverse ? "-agak-lambat.gif" : "-agak-cepat.gif")
    } else {
        src_image = currentScriptPath() + tipe + (isReverse ? "-lambat.gif" : "-cepat.gif")
    }
    document.getElementById(tipe).src = src_image
}

function currentScriptPath() {
    var scripts = document.querySelectorAll( 'script[src]' );
    var currentScript = scripts[ scripts.length - 1 ].src;
    var currentScriptChunks = currentScript.split( '/' );
    var currentScriptFile =  currentScriptChunks[currentScriptChunks.length - 3] + "/" + currentScriptChunks[currentScriptChunks.length - 2] + "/" + currentScriptChunks[ currentScriptChunks.length - 1 ];
    return currentScript.replace( currentScriptFile, 'wp-content/themes/bioland/assets/pernafasan/animasi-slider/' );
}