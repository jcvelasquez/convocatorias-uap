"use strict";

// Class definition
var Bienvenidos = function () {
    
    // Base elements
    var form_registro;
    var validator;


    var initFormFields = function () {

        $('input[name="tienePeriodoEjercido"]').on('change', function(){
            
            if($(this).val() == 1){
                $('#campos_si_ejercio').slideDown();
                $('#campos_no_ejercio').slideUp();    
            }else{
                $('#campos_si_ejercio').slideUp();
                $('#campos_no_ejercio').slideDown();    
            }

        }); 

        $('#select_cursos').select2({
            placeholder: "Selecciona los cursos para esta escuela"
        });

        //$(document).ajaxStart($.blockUI).ajaxStop($.unblockUI);

    }

    var initCursosConvocatorias = function () {

            $.ajax({
                dataType:'JSON',
                type: 'POST',
                url: BASE_URL + 'cursos_x_convocatoria',
                success:function(data){

                    console.log(data);

                    /*var cursos = data.cursos;
                    var ids = [];
             
                    for( var i = 0; i<cursos.length; i++){ ids.push(cursos[i]['id']); }

                    $('#select_cursos').val(ids).trigger('change');*/
                    

                },
                error: function(xhr) { 
                    console.log(xhr.statusText + xhr.responseText);
                }
            });

    }

    var initSubmit = function() {

        
        var btn_docente = form_registro.find('button[id="registrarDocente"]');
        var btn_nuevo = form_registro.find('button[id="registrarNuevo"]');

        btn_nuevo.on('click', function(e) {
            e.preventDefault();

            if (validator.form()) {

                var docEmail = $("#docEmailNuevo").val();
                var docClave = $("#docClaveNuevo").val();

                $.ajax({
                    dataType:'JSON',
                    type: 'POST',
                    url: BASE_URL + 'crear-cuenta',
                    data : {docEmail: docEmail, docClave: docClave},
                    success:function(response){
                                                                                                   
                        
                        if(response.success){

                            swal.fire({
                                title: 'REGISTRO CORRECTO',
                                text: response.message, 
                                timer: 4000,
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

        btn_docente.on('click', function(e) {
            e.preventDefault();

            if (validator.form()) {

                form_registro.ajaxSubmit({
                    success: function() {

                       
                        
                        
                    }
                });
            }

        });


    }


    var initValidation = function() {

        validator = form_registro.validate({
            // Validate only visible fields
            ignore: ":hidden",

            // Validation rules
            rules: {
                aceptoTerminos: {
                    required: true
                },  
                tienePeriodoEjercido: {
                    required: true
                },  
                //CAMPOS PARA VALIDAR SI HA SIDO DOCENTE ANTERIORMENTE
                docCodigoDocente: {
                    required: {
                        depends: function(element) {
                            return ($("input[name='tienePeriodoEjercido']:checked").val() == 1);
                        }
                    }
                },
                docClaveDocente: {
                    required: {
                        depends: function(element) {
                            return ($("input[name='tienePeriodoEjercido']:checked").val() == 1);
                        }
                    }
                },
                //CAMPOS PARA VALIDAR SI NO SIDO DOCENTE ANTERIORMENTE
                docEmailNuevo: {
                    required: {
                        depends: function(element) {
                            return ($("input[name='tienePeriodoEjercido']:checked").val() == 0);
                        }
                    },
                    email: {
                        depends: function(element) {
                            return ($("input[name='tienePeriodoEjercido']:checked").val() == 0);
                        }
                    }
                },
                docClaveNuevo: {
                    required: {
                        depends: function(element) {
                            return ($("input[name='tienePeriodoEjercido']:checked").val() == 0);
                        }
                    }
                }

            },
            
            // Display error  
            invalidHandler: function(event, validator) {     
                //KTUtil.scrollTop();

                swal.fire({
                    "title": "", 
                    "text": "There are some errors in your submission. Please correct them.", 
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
            form_registro = $('#form_registro');

            //initWizard(); 
            initCursosConvocatorias();
            initFormFields();
            initValidation();
            initSubmit();


        }
    };
}();


jQuery(document).ready(function() { 
    Bienvenidos.init();
});