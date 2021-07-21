$(document).ready(function () {

    showAuthorsDropdown();
    showGenresDropdown();
    showCountryDropdown();

});

function showAuthorsDropdown() {
    fetch('http://localhost/practice/php/php-rest-api-2/api/authors/read.php')
        .then(response => response.json())
        .then((data) => {
            var html = ''
            for (var i = 0; i < data.length; i++) {
                html += '<option value="' + data[i].id + '">' + data[i].name + '</option>'
            }
            $('#myAuthorsDropdown').html(html);
        });
}

function showGenresDropdown() {
    fetch('http://localhost/practice/php/php-rest-api-2/api/genres/read.php')
        .then(response => response.json())
        .then((data) => {
            var html = ''
            for (var i = 0; i < data.length; i++) {
                html += '<option value="' + data[i].id + '">' + data[i].genre + '</option>'
            }
            $('#myGenresDropdown').html(html);
        });
}

function showCountryDropdown() {
    $.getJSON("js/json/countries.json", function (data) {
        var html = ''
        for (var i = 0; i < data.length; i++) {
            html += '<option value="' + data[i].code + '">' + data[i].name + '</option>'
        }
        $('#myCountriesDropdown').html(html);
    });
}

