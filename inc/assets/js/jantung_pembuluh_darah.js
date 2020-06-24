document.getElementById('pembuluh_darah').addEventListener('mouseover', function () {
    document.getElementById('table_peredaran').classList.remove('d-none')
})
document.getElementById('pembuluh_darah').addEventListener('touchstart', function () {
    document.getElementById('table_peredaran').classList.remove('d-none')
})
document.getElementById('pembuluh_darah').addEventListener('mouseout', function () {
    document.getElementById('table_peredaran').classList.add('d-none')
})
document.getElementById('pembuluh_darah').addEventListener('touchend', function () {
    document.getElementById('table_peredaran').classList.add('d-none')
})

function home_bab() {
    window.location.href = location.href + "/sistem-peredaran-darah"
}