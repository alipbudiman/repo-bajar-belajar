import {MYFunc} from "./func.js"

const fun = new MYFunc();
var sub_total = 0

function CreatedTable(pemakaian, tarif_per_kwh, Abodement){
    const table = document.querySelector('table');
    let incrst = parseInt(Abodement)
    for (let i = 1; i <= pemakaian;i++) {
        const newRow = document.createElement('tr');
        const c1 = document.createElement('td');
        c1.textContent = i;
        newRow.appendChild(c1);

        const c2 = document.createElement('td');
        var kWH = parseInt(tarif_per_kwh)
        incrst = incrst + kWH
        c2.textContent = fun.ConvertToIDR(kWH * i);
        newRow.appendChild(c2);

        const c3 = document.createElement('td');
        c3.textContent = fun.ConvertToIDR(Abodement);
        newRow.appendChild(c3);

        const c4 = document.createElement('td');
        c4.textContent = fun.ConvertToIDR(incrst);
        newRow.appendChild(c4);

        table.appendChild(newRow);
    }
    sub_total = incrst
}

function CreatePlacmentResult(name, category, total){
    var htmlCode = `
            <p>_______________________________________</p>
            <h1>TAGIHAN LISTRIK</h1>
            <label class="label-alif">Nama pelanggan:</label>
            <input type="text" name="r-name" value="${name}"/>
            <label class="label-alif">Kategori:</label>
            <input type="text" name="r-category" value="${category}"/>
            <label class="label-alif">Jumlah pemakaian:</label>
            <input type="text" name="r-used" value="${total}"/>
            <h2>Rincian Tagihan Listrik</h2>
            <table>
                <tr>
                    <th>Jumlah</th>
                    <th>Tarif per KWH</th>
                    <th>Abodement</th>
                    <th>Sub total</th>
                </tr>
            </table>
            <div class="here-result2">
                
            </div>
        `;
        var resultDiv = document.querySelector('.here-result');
		resultDiv.innerHTML = htmlCode;
}

function CreatingTotal(subtotal, pajak) {
    var pajak = subtotal * pajak
    var bayar = subtotal + pajak
    var htmlCode = `
            <p>_______________________________________</p>
            <h1>TAGIHAN LISTRIK</h1>
            <label class="label-alif">Sub total:</label>
            <input type="text" name="r-sub-tot" value="${fun.ConvertToIDR(subtotal)}"/>
            <label class="label-alif">Pajak:</label>
            <input type="text" name="r-pajak" value="${fun.ConvertToIDR(pajak)}"/>
            <label class="label-alif">Bayar:</label>
            <input type="text" name="r-bayar" value="${fun.ConvertToIDR(bayar)}"/>
        `;
        var resultDiv = document.querySelector('.here-result2');
		resultDiv.innerHTML = htmlCode;
}

const bttn = document.getElementById("proc");

bttn.addEventListener('click', function(){
    const name = document.getElementsByName("nama")[0].value;
    const category = document.getElementsByName("kategori")[0].value;
    const total = document.getElementsByName("jumlah")[0].value;
    let kwh_nyw = 0
    let Abodement_nya = 0
    let pajak_nya = 0
    if (category === "sosial") {
        kwh_nyw = 300
        Abodement_nya = 10000
        pajak_nya = 0
    } else if (category === "rumah") {
        kwh_nyw = 500
        Abodement_nya = 30000
        pajak_nya = 0.10
    } else if (category === "industri") {
        kwh_nyw = 1000
        Abodement_nya = 50000
        pajak_nya = 0.30
    }
    CreatePlacmentResult(name, category, total);
    CreatedTable(total, kwh_nyw, Abodement_nya)
    CreatingTotal(sub_total, pajak_nya)
})