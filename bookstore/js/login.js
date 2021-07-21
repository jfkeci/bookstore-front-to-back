$(document).ready(function () {

    $('#loginButton').click(function (event) {

        event.preventDefault()

        if($('#loginEmail').val().length>6){
            if($('#loginPassword').val().length>6){
                fetch('http://localhost/practice/php/php-rest-api-2/api/users/login.php?email=iivanovic@mail.com&password=1232323')
                .then(data => {
                    
                    data.json().then(obj => {
                        console.log(obj)
                        localStorage.setItem('user', obj.id);
                    })
                })
            }else{
                /* alert('Password too short') */
            }
        }else{
            /* alert('Not valid email') */
        }

        
        
        
    })

    $('#newbutton').click(function(event){
        event.preventDefault()
        alert(localStorage.getItem('user'))
    })

});