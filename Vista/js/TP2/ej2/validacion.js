// Ejemplo de validación con Bootstrap 5
(function () {
    'use strict'

    window.addEventListener('load', function () {
        // Obtener todos los formularios que tengan clase needs-validation
        var forms = document.getElementsByClassName('needs-validation');

        Array.prototype.filter.call(forms, function (form) {
            form.addEventListener('submit', function (event) {
                if (!form.checkValidity()) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.classList.add('was-validated');
            }, false);
        });
    }, false);
})();
