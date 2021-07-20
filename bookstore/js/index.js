$( document ).ready(function() {

    showBooks();
    showAuthorsDropdown();
    showGenresDropdown();
    showCountryDropdown();
    
});


function showBooks(){
    fetch('http://localhost/practice/php/php-rest-api-2/api/books/read.php')
        .then(response => response.json())
        .then((data) => {
            var html = ''
            for(var i = 0; i<data.length; i++){
                html += '<figure class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">' + 
                            '<a href="preview.php">'+
                                '<div class="tm-gallery-item-overlay">'+
                                    '<img src="img/books/image-06.jpg" alt="Image" class="img-fluid tm-img-center">'+
                                '</div>'+
                                '<p class="tm-figcaption">'+data[i].name+'</p>'+
                            '</a>'+
                        '</figure>'
            }
            $('#myBooks').html(html);
        });
}

function showAuthorsDropdown(){
    fetch('http://localhost/practice/php/php-rest-api-2/api/authors/read.php')
    .then(response => response.json())
    .then((data) => {
        var html = ''
        for(var i = 0; i<data.length; i++){
            html += '<option value="'+data[i].id+'">'+data[i].name+'</option>'
        }
        $('#myAuthors').html(html);
    });
}

function showGenresDropdown(){
    fetch('http://localhost/practice/php/php-rest-api-2/api/genres/read.php')
    .then(response => response.json())
    .then((data) => {
        var html = ''
        for(var i = 0; i<data.length; i++){
            html += '<option value="'+data[i].id+'">'+data[i].genre+'</option>'
        }
        $('#myGenres').html(html);
    });
}

function showCountryDropdown(){
    $.getJSON( "js/json/countries.json", function( data ) {
        var html = ''
        for(var i = 0; i<data.length; i++){
            html += '<option value="'+data[i].code+'">'+data[i].name+'</option>'
        }
        $('#myCountries').html(html);
      });
}
