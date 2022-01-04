$(document).ready(function () {  


  $('.product-images').on('change', function () { //on file input change
    $(".preview_img").empty();
    
    if (window.File && window.FileReader && window.FileList && window.Blob) //check File API supported browser
    {
      var data = $(this)[0].files; //this file data

      $.each(data, function (index, file) { //loop though each file
          var fRead = new FileReader(); //new filereader
          fRead.onload = (function (file) { //trigger function on successful read
            return function (e) {

              var image = $('<img/>').attr('src', e.target.result).css('max-height','100%').css('max-width','100%').css('margin','auto'); //create image element 
              var imageContainer = $('<div></div>')
              .addClass('img-thumbnail d-flex justify-content-center align-items-center m-1')
              .width(100)
              .height(100)
              .append(image);

              $('.preview_img').append(imageContainer); //append image to output element

            };
          })(file);
          fRead.readAsDataURL(file); //URL representing the file's data.
        
      });

    } else {
      alert("Your browser doesn't support File API!"); //if File API is absent
    }
  });
});