

const btn1Hide = document.getElementById("1a")
const btn1Show = document.getElementById("2a")
const btn1Show03 = document.getElementById("3a")


btn1Hide.addEventListener('click', function() {
    console.log("click")
    setTimeout(function() {
        $(document).ready(function(){
            $("#boxx").fadeOut();
        });
    }, 500)
})

btn1Show.addEventListener('click', function() {
    setTimeout(function() {
        $(document).ready(function(){
            $("#boxx").fadeIn();
            $("#boxx").css("opacity", "1");
        });
    }, 500)
})

btn1Show03.addEventListener('click', function() {
    setTimeout(function() {
        $(document).ready(function(){
            // Mengubah opacity kotak dengan ID "box" menjadi 0.3
            $("#boxx").css("opacity", "0.3");
          });
    }, 500)
})