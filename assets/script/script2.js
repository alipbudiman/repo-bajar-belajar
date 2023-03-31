import {MYFunc} from "./func.js"

const fun = new MYFunc();

const bttn = document.getElementById("proc");
const check_gaji = document.getElementById('check-detect1');
const check_anak = document.getElementById('check-detect2');
const res = document.getElementById("res");

let gaji_person = 0
let tunjagan_anak_keseluruhan = 0

check_gaji.addEventListener('keyup', function(){
    const jam_kerja = document.getElementsByName("jam-kerja")[0].value;
    const upah = document.getElementsByName("upah")[0].value;
    const jumlah_anak = document.getElementsByName("jumlah-anak")[0].value;
    var jumlah_gaji = parseInt(upah) * parseInt(jam_kerja)
    gaji_person = jumlah_gaji
    document.getElementsByName("gaji")[0].value = fun.ConvertToIDR(jumlah_gaji)
})

check_anak.addEventListener('keyup', function(){
    const jumlah_anak = document.getElementsByName("jumlah-anak")[0].value;
    if(jumlah_anak === ""){
        tunjagan_anak_keseluruhan = 0;
    } else {
        var tunjangan_anak = gaji_person * 0.10
        var total_tunjangan_anak = tunjangan_anak * parseInt(jumlah_anak);
        tunjagan_anak_keseluruhan = total_tunjangan_anak
        document.getElementsByName("tunjangan-anak")[0].value=fun.ConvertToIDR(total_tunjangan_anak);
    }
})

bttn.addEventListener('click', function() {
    document.getElementsByName("total-gaji")[0].value= fun.ConvertToIDR(gaji_person + tunjagan_anak_keseluruhan);
    if (tunjagan_anak_keseluruhan === 0) {
        document.getElementsByName("tunjangan-anak")[0].value="Tidak punya anak";
    }
})

res.addEventListener('click', function() {
    document.getElementsByName("nama")[0].value = '';
    document.getElementsByName("jam-kerja")[0].value = '';
    document.getElementsByName("upah")[0].value = '';
    document.getElementsByName("jumlah-anak")[0].value = '';
    document.getElementsByName("gaji")[0].value = '';
    document.getElementsByName("tunjangan-anak")[0].value = '';
    document.getElementsByName("total-gaji")[0].value = '';
})