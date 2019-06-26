"use strict";

var SesionTimeout = function () {

    var initTimer = function () {
        $.sessionTimeout({
            title: 'SE CERRARÁ LA SESIÓN',
            message: 'Su sesión esta a punto de expirar pero descuide, todos los datos han sido guardados automáticamente para su comodidad.',
            keepAliveUrl: BASE_URL + 'convocatorias/mantener-sesion',
            redirUrl: BASE_URL + 'convocatorias/cerrar-sesion',
            logoutUrl: BASE_URL + 'convocatorias/cerrar-sesion',
            warnAfter: 300000, //warn after 5 seconds
            redirAfter: 500000, //redirect after 10 secons,
            logoutButton: 'Cerrar sesión',
            keepAliveButton: 'Aún sigo aquí',
            ignoreUserActivity: false,
            countdownMessage: 'Cerrando sesión en {timer}...',
            countdownBar: true
        });
    }

    return {
        //main function to initiate the module
        init: function () {
            initTimer();
        }
    };

}();

jQuery(document).ready(function() {    
    SesionTimeout.init();
});