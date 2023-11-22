document.addEventListener('DOMContentLoaded', function() {

    const registerForm = document.getElementById('registerForm');

    

    registerForm.addEventListener('submit', function(event) {

        event.preventDefault();

        

        const name = document.getElementById('name').value;

        const link = window.location.href.endsWith('register_left.html') ? 'left' : 'right';

        

        // Send the name and link to the store_data.php file using AJAX

        const xhr = new XMLHttpRequest();

        xhr.open('POST', 'store_data.php', true);

        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

        xhr.onreadystatechange = function() {

            if (xhr.readyState === 4 && xhr.status === 200) {

                const response = JSON.parse(xhr.responseText);

                if (response.hasOwnProperty('message')) {

                    // Handle successful response (e.g., show a success message)

                    // alert(response.message);

                    location.reload();

                } else if (response.hasOwnProperty('error')) {

                    // Handle error response (e.g., show an error message)

                    // alert(response.error);

                }

            }

        };

        

        const data = `name=${encodeURIComponent(name)}&link=${encodeURIComponent(link)}`;

        xhr.send(data);

    });

});

