window.addEventListener('DOMContentLoaded', function() {
    var tanggalInput = document.querySelector('input[type="date"]');
    
    // Mendapatkan tanggal hari ini
    var today = new Date();
    
    // Format tanggal dengan YYYY-MM-DD
    var year = today.getFullYear();
    var month = ('0' + (today.getMonth() + 1)).slice(-2);
    var day = ('0' + today.getDate()).slice(-2);
    
    var formattedDate = year + '-' + month + '-' + day;
    
    // Mengatur nilai default pada input tanggal
    tanggalInput.value = formattedDate;
});