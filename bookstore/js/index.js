
$(document).ready(function () {

    showBooks();

    $('#saveBookButton').click(function () {

        var bookTitle = $('#bookTitle').val()
        var bookAuthor = $('#myAuthorsDropdown').val()
        var bookGenre = $('#myGenresDropdown').val()
        var bookLanguage = $('#myCountriesDropdown').val()

        fetch('http://localhost/practice/php/php-rest-api-2/api/books/create.php',
            {
                body: JSON.stringify({
                    name: bookTitle,
                    author: bookAuthor,
                    genre: bookGenre,
                    language: bookLanguage
                }),
                method: 'POST'
            })
            .then(response => response.json())
            .then(data => {
                console.log(data.message)
            })
    })

});

function showBooks() {
    fetch('http://localhost/practice/php/php-rest-api-2/api/books/read.php')
        .then(response => response.json())
        .then((data) => {
            var html = ''
            for (var i = 0; i < data.length; i++) {
                html += `<figure class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
                            <a href="preview.php?book_id=${data[i].id}">
                                <div class="tm-gallery-item-overlay">
                                    <img src="img/books/image-06.jpg" alt="Image" class="img-fluid tm-img-center">
                                </div>
                                <p class="tm-figcaption"> ${data[i].name} </p>
                                </a>
                                <span class="btn btn-success" onClick="">U</span>
                                <span class="btn btn-danger" onClick="">D</span> 
                            
                        </figure>`
                $('#myBooks').html(html);
            }
        })
}


