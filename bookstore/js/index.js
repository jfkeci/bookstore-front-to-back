
$(document).ready(function () {

    showBooks();

    $('#saveBookButton').click(function () {
        fetch('http://localhost/practice/php/php-rest-api-2/api/books/create.php',
            {
                body: JSON.stringify({
                    name:       $('#bookTitle').val(),
                    author:     $('#myAuthorsDropdown').val(),
                    genre:      $('#myGenresDropdown').val(),
                    language:   $('#myCountriesDropdown').val()
                }),
                method: 'POST'
            }).then(response => {
                console.log(response)
            })
    })

});

function showBooks() {
    fetch('http://localhost/practice/php/php-rest-api-2/api/books/read.php')
        .then(response => response.json())
        .then((data) => {
            var html = ''
            for (var i = 0; i < data.length; i++) {
                html += '<figure class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">' +
                    '<a href="preview.php">' +
                    '<div class="tm-gallery-item-overlay">' +
                    '<img src="img/books/image-06.jpg" alt="Image" class="img-fluid tm-img-center">' +
                    '</div>' +
                    '<p class="tm-figcaption">' + data[i].name + '</p>' +
                    '</a>' +
                    '</figure>'
            }
            $('#myBooks').html(html);
        });
}


