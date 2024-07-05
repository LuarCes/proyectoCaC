document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('modificar').addEventListener('click', function(e) {
        e.preventDefault();
        confirmacion()
    });
});

function confirmacion() {
    if (confirm('¿Estas seguro de modificar los datos?')) {
        document.getElementById('form-libro').submit();
    }
}