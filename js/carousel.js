window.onload = function () {
    // Variables
    const IMAGENES = [
        'img/fondo.jpg',
        'img/fondo1.jpg',
        'img/fondo2.jpg',
    ];
    const TIEMPO_INTERVALO_MILESIMAS_SEG = 5000;
    let posicionActual = 0;
    let $imagen = document.querySelector('#imagen');
    let intervalo;

    // Funciones

    /**
     * Funcion que cambia la foto en la siguiente posicion
     */
    function pasarFoto() {
        if(posicionActual >= IMAGENES.length - 1) {
            posicionActual = 0;
        } else {
            posicionActual++;
        }
        renderizarImagen();
    }

    /**
     * Funcion que actualiza la imagen de imagen dependiendo de posicionActual
     */
    function renderizarImagen () {
        $imagen.style.backgroundImage = `url(${IMAGENES[posicionActual]})`;
    }

    /**
     * Activa el autoplay de la imagen
     */
    function playIntervalo() {
        intervalo = setInterval(pasarFoto, TIEMPO_INTERVALO_MILESIMAS_SEG);
        
    }

    // Eventos
    renderizarImagen();
    playIntervalo();
}