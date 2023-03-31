import {MYFunc} from "./func.js"

const fun = new MYFunc();

const bttn = document.getElementById("proc");
const check_discount = document.getElementById('check-detect');
const res = document.getElementById("res");

let jumlah_bayar = 0



check_discount.addEventListener('keyup', function(event) {
    event.preventDefault();
    const harga = document.getElementsByName("harga")[0].value;
    const jumlah = document.getElementsByName("jumlah")[0].value;
    var harga_int = parseInt(harga);
    var jumlah_int = parseInt(jumlah);
    let diskon = 0;
    let discc = "0%";
    if (jumlah_int > 10 && jumlah_int < 15) {
        diskon = 0.10;
        discc = "10%";
    } else if (jumlah_int >= 15) {
        diskon = 0.15;
        discc = "15%";
    }
    var total_bayar = harga_int * jumlah_int
    var total_diskon = total_bayar * diskon
    
    jumlah_bayar = total_bayar - total_diskon
    document.getElementsByName("total")[0].value = fun.ConvertToIDR(total_bayar) ;
    document.getElementsByName("diskon")[0].value = fun.ConvertToIDR(total_diskon) + ` (${discc})`;
})

bttn.addEventListener('click', function() {
    document.getElementsByName("bayar")[0].value= fun.ConvertToIDR(jumlah_bayar);
})

res.addEventListener('click', function() {
    document.getElementsByName("barang")[0].value = '';
    document.getElementsByName("harga")[0].value = '';
    document.getElementsByName("jumlah")[0].value = '';
    document.getElementsByName("total")[0].value = '';
    document.getElementsByName("diskon")[0].value = '';
    document.getElementsByName("bayar")[0].value = '';
})