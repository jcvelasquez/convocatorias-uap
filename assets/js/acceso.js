"use strict";

// Class definition
var IniciarSesion = function () {
    
    // Base elements
    var form_inicio;
    var validator;


    var initFormFields = function () {

        $(document).ajaxStart($.blockUI).ajaxStop($.unblockUI);

    }

    var initSubmit = function() {

        var btn_iniciar = form_inicio.find('button[id="iniciarDocente"]');

        btn_iniciar.on('click', function(e) {
            e.preventDefault();

            if (validator.form()) {

                var docEmail = $("#docEmail").val();
                var docClave = $("#docClave").val();

                $.ajax({
                    dataType:'JSON',
                    type: 'POST',
                    url: BASE_URL + 'iniciar-sesion',
                    data : {docEmail: docEmail, docClave: docClave},
                    success:function(response){
                                                                                                   
                        if(response.success){

                            swal.fire({
                                title: 'INICIO DE SESIÓN CORRECTO',
                                text: response.message, 
                                timer: 3000,
                                type: "success",
                                onOpen: function() {
                                    swal.showLoading()
                                }
                            }).then(function(result) {
                                if (result.dismiss === 'timer') {
                                    window.location.href = BASE_URL + "registro";
                                }
                            })

                        }else{

                             swal.fire({
                                title: "ERROR DE EMAIL", 
                                text: response.message, 
                                type: "error",
                                confirmButtonClass: "btn btn-secondary"
                            });
                        }
        
                    },
                    error: function(xhr) { 
                        console.log(xhr.statusText + xhr.responseText);
                    }
                });


                
            }

        });


    }


    var initValidation = function() {

        validator = form_inicio.validate({
            // Validate only visible fields
            ignore: ":hidden",

            // Validation rules
            rules: {
                docEmail: {
                    required: true,
                    email: true
                },
                docClave: {
                    required: true
                }
            },
            
            // Display error  
            invalidHandler: function(event, validator) {     
                //KTUtil.scrollTop();

                swal.fire({
                    "title": "ERROR", 
                    "text": "Comprobar  los campos de inicio de sesión.", 
                    "type": "error",
                    "confirmButtonClass": "btn btn-secondary"
                });


            },

            // Submit valid form
            submitHandler: function (form) {
                
            }
        });   
    }

    

    return {
        // public functions
        init: function() {

            //wizardEl = KTUtil.get('kt_wizard_v3');
            form_inicio = $('#form_inicio');

            //initWizard(); 
            initFormFields();
            initValidation();
            initSubmit();


        }
    };
}();


jQuery(document).ready(function() { 
    IniciarSesion.init();
});