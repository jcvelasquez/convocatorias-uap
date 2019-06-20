"use strict";

var SesionTimeout = function () {

    var initTimer = function () {
        $.sessionTimeout({
            title: 'Session Timeout Notification',
            message: 'Su sesión esta a punto de expirar pero descuide, todos los datos han sido guardados automáticamente para su comodidad.',
            keepAliveUrl: BASE_URL + 'mantener-sesion',
            redirUrl: '?p=page_user_lock_1',
            logoutUrl: BASE_URL + 'cerrar-sesion',
            warnAfter: 3000, //warn after 5 seconds
            redirAfter: 35000, //redirect after 10 secons,
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