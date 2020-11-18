function masukan(num) {
    document.form.tampilan.value = document.form.tampilan.value + num; //simpan nilai
}
function hasil() {
    var nilai = document.form.tampilan.value;
    if (nilai) document.value.output.value = eval(nilai); // cari hasil
}
function reset() {
    document.form.tampilan.value = ""; // kosongkan tampilan
    document.value.output.value = ""; //kosongkan hasil
}
function hapus() {
    var nilai = document.form.tampilan.value;
    document.form.tampilan.value = nilai.substring(0, nilai.length - 1); // hapus satu karakter
    hasil();
}
