$(document).ready(function () {

    showAuthors();

    $('#saveAuthorButton').click(function () {
        fetch('/practice/php/php-rest-api-2/api/authors/create.php',
            {
                body: JSON.stringify({ name: $('#authorName').val() }),
                method: 'POST'
            })
    })

});

function showAuthors() {
    fetch('http://localhost/practice/php/php-rest-api-2/api/authors/read.php')
        .then(response => response.json())
        .then((data) => {
            html = '';
            for (var i = 0; i < data.length; i++) {
                html += `<tr> 
                            <th scope="row">${i + 1}</th>
                            <td>${data[i].id}</td>
                            <td>${data[i].name}</td>
                            <td>${data[i].created_at}</td>
                            <td><span class="btn btn-success" onClick="showUpdateModal(\'${data[i].name}\')">U</span></td>
                            <td><span class="btn btn-danger onClick="showDeleteModal(\'${data[i].id}\')">D</span></td>
                        </tr>`;
            }
            $('#myAuthors').html(html)
        })
}

function showUpdateModal(name) {
    $('#modalUpdate').modal('show')
    $('#authorNameUpdate').val(name)
}
function showDeleteModal(id, name) {
    $('#modalDelete').modal('show')
}

