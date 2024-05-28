$(document).ready(function() {
    var item, title1, author1, publisher1, bookLink1, bookImg1, bookIsbn;
    var outputList = document.getElementById("list-output");
    var bookUrl = "https://www.googleapis.com/books/v1/volumes?q=";
    var placeHldr = '<img src="https://via.placeholder.com/150">';
    var searchData;

    // Listener para el botón de búsqueda
    $("#search").click(function() {
        outputList.innerHTML = ""; // Vaciar el contenido anterior
        searchData = $("#search-box").val();

        // Manejo de campo de búsqueda vacío
        if (searchData === "" || searchData === null) {
            displayError();
        } else {
            $.ajax({
                url: bookUrl + searchData,
                dataType: "json",
                success: function(response) {
                    console.log(response);
                    if (response.totalItems === 0) {
                        alert("No hay resultados, intenta de nuevo.");
                    } else {
                        displayResults(response);
                    }
                },
                error: function() {
                    alert("Algo salió mal, intenta de nuevo.");
                }
            });
        }
        $("#search-box").val(""); // Limpiar la caja de búsqueda
    });

    // Función para mostrar los resultados
    function displayResults(response) {
        for (var i = 0; i < response.items.length; i++) {
            item = response.items[i];
            title1 = item.volumeInfo.title;
            author1 = item.volumeInfo.authors ? item.volumeInfo.authors.join(", ") : "No disponible";
            publisher1 = item.volumeInfo.publisher ? item.volumeInfo.publisher : "No disponible";
            bookLink1 = item.volumeInfo.previewLink;
            bookIsbn = item.volumeInfo.industryIdentifiers ? item.volumeInfo.industryIdentifiers[0].identifier : "No disponible";
            bookImg1 = item.volumeInfo.imageLinks ? item.volumeInfo.imageLinks.thumbnail : placeHldr;

            // Crear la tarjeta para el libro
            var cardHTML = formatOutput(bookImg1, title1, author1, publisher1, bookLink1, bookIsbn);
            outputList.innerHTML += cardHTML;
        }
    }

    // Función para formatear los resultados
    function formatOutput(bookImg, title, author, publisher, bookLink, bookIsbn) {
        var viewUrl = 'book.html?isbn=' + bookIsbn;
        var htmlCard = `<div class="col-lg-3 col-md-4 col-sm-6 mb-4">
            <div class="card">
                <img src="${bookImg}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">${title}</h5>
                    <p class="card-text">Autor: ${author}</p>
                    <p class="card-text">Editorial: ${publisher}</p>
                    <a target="_blank" href="${viewUrl}" class="btn btn-secondary">Leer libro</a>
                </div>
            </div>
        </div>`;
        return htmlCard;
    }

    // Manejo de error para la caja de búsqueda vacía
    function displayError() {
        alert("El término de búsqueda no puede estar vacío.");
    }
});