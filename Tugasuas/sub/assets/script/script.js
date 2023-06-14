function ConvertToIDR(number) {
    const pricing = new Intl.NumberFormat("en-US", {
        currency:"IDR",
        style: "currency",
    }).format(number)
    return pricing.toString()
}

function CreatedTable(lama_pinjaman, pokok, bunga, jumlah){
    const table = document.querySelector('table');
    const newRow = document.createElement('tr');

    const c0 = document.createElement('td');
    c0.textContent = lama_pinjaman;
    newRow.appendChild(c0);
        
    const c1 = document.createElement('td');
    c1.textContent = ConvertToIDR(pokok);
    newRow.appendChild(c1);

    const c2 = document.createElement('td');
    c2.textContent = ConvertToIDR(bunga);
    newRow.appendChild(c2);

    const c3 = document.createElement('td');
    c3.textContent = ConvertToIDR(jumlah);
    newRow.appendChild(c3);

    table.appendChild(newRow);
}

function CreatePlacmentResult(){
    var htmlCode = `
            <table class="table table-bordered bg-white">
                <tr>
                    <th>JENIS</th>
                    <th>POKOK</th>
                    <th>BUNGA</th>
                    <th>JUMLAH</th>
                </tr>
            </table>
        `;
        var resultDiv = document.querySelector('.here-result');
		resultDiv.innerHTML = htmlCode;
}

const pathname = window.location.pathname;
const lastpath = pathname.substring(pathname.lastIndexOf("/") + 1);
if (lastpath === "edit.php") {
    document.addEventListener("DOMContentLoaded", function() {
        let lama_pinjaman = document.getElementsByName("lama_pinjaman")[0].value;
        let jumlah_pinjaman = document.getElementsByName("jumlah_pinjaman")[0].value;
        let Bunga = document.getElementsByName("bunga")[0].value;
        let jangka = "";
        if (parseInt(lama_pinjaman) <= 36) {
            jangka = "Jangka pendek";
        } else {
            jangka = "Jangka panjang";
        };
        let pokok = parseInt(jumlah_pinjaman) / parseInt(lama_pinjaman);
        let bunga = parseInt(jumlah_pinjaman) * (Bunga/100);
        let jumlah = pokok + bunga;
        if (lama_pinjaman != "" && jumlah_pinjaman != "" && Bunga != "") {
            CreatePlacmentResult();
            CreatedTable(jangka, pokok, bunga, jumlah);
        }
      });
}

let formElement = document.getElementById("myForm");

formElement.addEventListener('keyup', function(){
    let lama_pinjaman = document.getElementsByName("lama_pinjaman")[0].value;
    let jumlah_pinjaman = document.getElementsByName("jumlah_pinjaman")[0].value;
    let Bunga = document.getElementsByName("bunga")[0].value;
    let jangka = "";
    if (parseInt(lama_pinjaman) <= 36) {
        jangka = "Jangka pendek";
    } else {
        jangka = "Jangka panjang";
    };
    let pokok = parseInt(jumlah_pinjaman) / parseInt(lama_pinjaman);
    let bunga = parseInt(jumlah_pinjaman) * (Bunga/100);
    let jumlah = pokok + bunga;
    if (lama_pinjaman != "" && jumlah_pinjaman != "" && Bunga != "") {
        CreatePlacmentResult();
        CreatedTable(jangka, pokok, bunga, jumlah);
    }
})