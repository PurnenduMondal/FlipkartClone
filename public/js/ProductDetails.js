$(document).ready(function () {

    function imageZoom(imgID, resultID) {
        var img, lens, result, cx, cy;
        img = document.getElementById(imgID);
        result = document.getElementById(resultID);
        /*create lens:*/
        lens = document.createElement("DIV");
        lens.setAttribute("class", "img-zoom-lens");

        /*insert lens:*/
        img.parentElement.insertBefore(lens, img);
        /*calculate the ratio between result DIV and lens:*/
        cx = result.offsetWidth / lens.offsetWidth;
        cy = result.offsetHeight / lens.offsetHeight;
        /*set background properties for the result DIV:*/
        result.style.backgroundImage = "url('" + img.src + "')";
        result.style.backgroundSize = (img.width * cx) + "px " + (img.height * cy) + "px";
        /*execute a function when someone moves the cursor over the image, or the lens:*/
        lens.addEventListener("mousemove", moveLens);
        img.addEventListener("mousemove", moveLens);
        /*and also for touch screens:*/
        lens.addEventListener("touchmove", moveLens);
        img.addEventListener("touchmove", moveLens);
        function moveLens(e) {
            var pos, x, y;
            /*prevent any other actions that may occur when moving over the image:*/
            e.preventDefault();
            /*get the cursor's x and y positions:*/
            pos = getCursorPos(e);
            /*calculate the position of the lens:*/
            x = pos.x - (lens.offsetWidth / 2);
            y = pos.y - (lens.offsetHeight / 2);
            /*prevent the lens from being positioned outside the image:*/
            if (x > img.width - lens.offsetWidth) { x = img.width - lens.offsetWidth; }
            if (x < 0) { x = 0; }
            if (y > img.height - lens.offsetHeight) { y = img.height - lens.offsetHeight; }
            if (y < 0) { y = 0; }
            /*set the position of the lens:*/
            lens.style.left = x + "px";
            lens.style.top = y + "px";
            /*display what the lens "sees":*/
            result.style.backgroundPosition = "-" + (x * cx) + "px -" + (y * cy) + "px";
        }
        function getCursorPos(e) {
            var a, x = 0, y = 0;
            e = e || window.event;
            /*get the x and y positions of the image:*/
            a = img.getBoundingClientRect();
            /*calculate the cursor's x and y coordinates, relative to the image:*/
            x = e.pageX - a.left;
            y = e.pageY - a.top;
            /*consider any page scrolling:*/
            x = x - window.pageXOffset;
            y = y - window.pageYOffset;
            return { x: x, y: y };
        }
    }


    var isZoomed = false;
    window.onmouseover = function (e) {
        if (e.target.parentElement.id === 'img-container') {

            if (!isZoomed) {

                var result = document.createElement("DIV");
                result.setAttribute("class", "img-zoom-result");
                result.setAttribute("id", "zoomed-img-result-id");

                img = document.getElementById('img-container');
                img.parentElement.insertBefore(result, img);

                imageZoom("largeImage", "zoomed-img-result-id");
                isZoomed = true;
            }
        } else {
            $('.img-zoom-result').remove();
            $('.img-zoom-lens').remove();
            isZoomed = false;
        }

        if (e.target.parentElement.className === 'product__smallImage') {
            var smallImage = e.target.parentElement.getElementsByTagName('img')[0];
            //smallImage.parentElement.setAttribute('border', '2px solid #2874f0;');
            document.getElementById('largeImage').src = smallImage.src;
        }

    }

        // $('.product__smallImage').mouseenter(function () {
        //     $(this).parent().attr('border', '2px solid #2874f0;');
        // });

        // $('.product__smallImage').mouseleave(function () {
        //     $(this).parent().attr('border', '1px solid rgb(0 0 0 / 16%)');
        // })

})