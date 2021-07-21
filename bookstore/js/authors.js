$(document).ready(function () {

    showAuthors();

    $('#saveAuthorButton').click(function () {
        fetch('http://localhost/practice/php/php-rest-api-2/api/authors/create.php',
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
function showDeleteModal(id) {
    console.log('click')
    $('#modalDelete').modal('show')
    $("#deleteModalButtons").append('<button type="button" id="deleteAuthorButton" data-dismiss="modal" class="btn btn-default">Delete</button>')
}

function updateAuthor(){
    $('#saveAuthorButton').click(function () {
        fetch('http://localhost/practice/php/php-rest-api-2/api/authors/update.php',
            {
                body: JSON.stringify({ name: $('#authorName').val() }),
                method: 'POST'
            })
    })
}

function deleteAuthor(id){
    $('#saveAuthorButton').click(function () {
        fetch('http://localhost/practice/php/php-rest-api-2/api/authors/delete.php?id='+id,
            {
                body: JSON.stringify({ id: id }),
                method: 'DELETE'
            })
    })
}