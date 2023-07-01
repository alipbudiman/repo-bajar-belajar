var boxes = document.querySelectorAll(".box");
boxes.forEach(function(box) {
    box.addEventListener("dblclick", function() {
        // Mengubah warna kotak menjadi merah
        this.style.backgroundColor = "red";
    });
});