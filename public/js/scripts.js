// scripts.js

// Mostrar overlay cuando se abre el menú desplegable
$('.dropdown-toggle').on('click', function() {
    $('#overlay').fadeIn();
});

// Ocultar overlay cuando se cierra el menú desplegable
$('.dropdown-menu').on('hidden.bs.dropdown', function() {
    $('#overlay').fadeOut();
});
