


const btn1Hide = document.getElementById("1a")
const btn1Show = document.getElementById("2a")


btn1Hide.addEventListener('click', function() {
    setTimeout(function() {
        $(document).ready(function(){
            $("#a").fadeOut();
        });
    }, 500)
})

btn1Show.addEventListener('click', function() {
    setTimeout(function() {
        $(document).ready(function(){
            $("#a").fadeIn();
        });
    }, 500)
})

const btn2Hide = document.getElementById("1b")
const btn2Show = document.getElementById("2b")

btn2Hide.addEventListener('click', function() {
    setTimeout(function() {
        $(document).ready(function(){
            $("#b").fadeOut();
        });
    }, 500)
})

btn2Show.addEventListener('click', function() {
    setTimeout(function() {
        $(document).ready(function(){
            $("#b").fadeIn();
        });
    }, 500)
})

const btn3Hide = document.getElementById("1c")
const btn3Show = document.getElementById("2c")

btn3Hide.addEventListener('click', function() {
    setTimeout(function() {
        $(document).ready(function(){
            $("#c").fadeOut();
        });
    }, 500)
})

btn3Show.addEventListener('click', function() {
    setTimeout(function() {
        $(document).ready(function(){
            $("#c").fadeIn();
        });
    }, 500)
})



