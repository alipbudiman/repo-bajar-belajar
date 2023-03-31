import {MYFunc} from "./func.js"

const fun = new MYFunc();

function CreatedTable(nilai_awal, nilai_akhir){
    const table = document.querySelector('table');
    for (let i = nilai_awal; i <= nilai_akhir;i++) {
        const newRow = document.createElement('tr');
        const c1 = document.createElement('td');
        c1.textContent = i;
        newRow.appendChild(c1);

        const c2 = document.createElement('td');
        c2.textContent = fun.isGenap(i);
        newRow.appendChild(c2);

        const c3 = document.createElement('td');
        c3.textContent = fun.isPrime(i);
        newRow.appendChild(c3);

        const c4 = document.createElement('td');
        c4.textContent = fun.factorials(i);
        newRow.appendChild(c4);

        table.appendChild(newRow);
    }
}

function CreatePlacmentResult(){
    var htmlCode = `
            <table>
                <tr>
                    <th>Nilai</th>
                    <th>Ganjil</th>
                    <th>Prima</th>
                    <th>Faktorial</th>
                </tr>
            </table>
        `;
        var resultDiv = document.querySelector('.here-result');
		resultDiv.innerHTML = htmlCode;
}

const bttn = document.getElementById("proc");

bttn.addEventListener('click', function(){
    CreatePlacmentResult();
    
    const al_awal = document.getElementsByName("awal")[0].value;
    const al_akhir = document.getElementsByName("akhir")[0].value;
    CreatedTable(parseInt(al_awal), parseInt(al_akhir));
})