import {MYFunc} from "./func.js"

const fun = new MYFunc();

const bttn = document.getElementById("proc");
const res = document.getElementById("res");

const detect = document.getElementById('check-detect');

let cost = 0
detect.addEventListener('click', function(){
    const barang = document.getElementsByName("barang")[0].value;
    if(barang == "monitor") {
        cost = 2000000
    } else if (barang === "cpu"){
        cost = 6000000
    } else if (barang === "keyboard"){
        cost = 500000
    }else if (barang === "mouse") {
        cost = 200000
    }
    document.getElementsByName("harga")[0].value= fun.ConvertToIDR(cost);
})

bttn.addEventListener('click', function(){
    const jumlah = document.getElementsByName("jumlah")[0].value;
    document.getElementsByName("total")[0].value= fun.ConvertToIDR(cost * parseInt(jumlah));
})

res.addEventListener('click', function(){
    document.getElementsByName("barang")[0].value= 'monitor';
    document.getElementsByName("jumlah")[0].value= '';
    document.getElementsByName("harga")[0].value= '';
    document.getElementsByName("total")[0].value= '';
})