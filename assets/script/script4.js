import {MYFunc} from "./func.js"

const fun = new MYFunc();

function CreatedTable(angsuran, sisa, lama_kredit){
    let sisa_bayar = sisa
    const table = document.querySelector('table');
    for (let i = 0; i < lama_kredit;i++) {
        const newRow = document.createElement('tr');
        const c1 = document.createElement('td');
        c1.textContent = i + 1;
        newRow.appendChild(c1);

        const c2 = document.createElement('td');
        c2.textContent = fun.ConvertToIDR(angsuran);
        newRow.appendChild(c2);

        const c3 = document.createElement('td');
        sisa_bayar -= angsuran
        c3.textContent = fun.ConvertToIDR(sisa_bayar);
        newRow.appendChild(c3);

        table.appendChild(newRow);
    }
}

function CreatePlacmentResult(){
    var htmlCode = `
            <div>
                <p id="tipe_rumah">-</p>
                <p id="harga_rumah">-</p>
                <p id="uang_muka">-</p>
                <p id="sisa">-</p>
                <p id="lama_kredit">-</p>
                <p id="angsuran">-</p>
            </div>
            <table>
                <tr>
                    <th>Bulan</th>
                    <th>Angsuran</th>
                    <th>Sisa</th>
                </tr>
            </table>
        `;
        var resultDiv = document.querySelector('.here-result');
		resultDiv.innerHTML = htmlCode;
}


const bttn = document.getElementById("proc");

bttn.addEventListener('click', function(){
    CreatePlacmentResult();
    const type_of_house = document.getElementsByName("tipe")[0].value;
    let price = 0
    if(type_of_house === "alamanda") {
        document.getElementById('tipe_rumah').innerHTML = "Tipe Rumah: Alamanda";
        price = 120000000
    } else if (type_of_house === "mawar") {
        document.getElementById('tipe_rumah').innerHTML = "Tipe Rumah: Mawar";
        price = 130000000
    }
    document.getElementById('harga_rumah').innerHTML = "Harga Rumah: "+fun.ConvertToIDR(price);
    var uang_muka = price * 0.20
    document.getElementById('uang_muka').innerHTML = "Uang Muka: "+fun.ConvertToIDR(uang_muka);
    var sisa = price - uang_muka
    document.getElementById('sisa').innerHTML = "Sisa: "+fun.ConvertToIDR(sisa);
    const lama_kredit = document.getElementsByName("lama")[0].value;
    document.getElementById('lama_kredit').innerHTML = "Lama Kredit: "+lama_kredit;
    var lama_k = parseInt(lama_kredit)
    var angsuran = sisa / lama_k
    document.getElementById('angsuran').innerHTML = "Angsuran: "+fun.ConvertToIDR(angsuran);
    CreatedTable(angsuran, sisa, lama_k);
})



