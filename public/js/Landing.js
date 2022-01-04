$(document).ready(function () { 

    document.getElementsByClassName("slideshow__prevButton")[0]
            .addEventListener("click", function() {plusSlides(-1)}, false);
    document.getElementsByClassName("slideshow__nextButton")[0]
            .addEventListener("click", function() {plusSlides(1)}, false);

    var slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("slideshow__image");

        if (n > slides.length) { 
            slideIndex = 1 
        }

        if (n < 1) { 
            slideIndex = slides.length 
        }

        for (i = 0; i < slides.length; i++) {
            slides[i].setAttribute("style", "display:none;");
        }

        slides[slideIndex - 1].setAttribute("style", "display:block;");
    }


})
