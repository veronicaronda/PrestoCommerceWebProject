// public/js/favorite.js

document.addEventListener('DOMContentLoaded', function () {
    document.querySelectorAll('.favorite-button').forEach(button => {
        button.addEventListener('click', function (event) {
            event.preventDefault();

            let url = this.getAttribute('data-url');
            let icon = this.querySelector('i');

            fetch(url, {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({})
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    // Toggle l'icona del cuore
                    if (data.status === 'added') {
                        icon.classList.remove('fa-regular');
                        icon.classList.add('fa-solid');
                    } else if (data.status === 'removed') {
                        icon.classList.remove('fa-solid');
                        icon.classList.add('fa-regular');
                    }
                } else {
                    console.error('Errore durante la gestione dei preferiti.');
                }
            })
            .catch(error => console.error('Errore:', error));
        });
    });
});
