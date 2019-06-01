"use strict";


// Class definition
var Registro = function () {

    // Base elements
    var wizardEl;
    var form_registro;
    var validator;
    var wizard;
    var docenteId;
    var error;
    var success;

    var arrows = {
            leftArrow: '<i class="la la-angle-left"></i>',
            rightArrow: '<i class="la la-angle-right"></i>'
        }


    var limpiarUbigeo = function () {

        $('#ubprovincia_idProv').empty();
        $("#ubprovincia_idProv").append('<option value="">Selecciona un departamento</option>');

        $('#ubdistrito_idDist').empty();
        $("#ubdistrito_idDist").append('<option value="">Selecciona una provincia</option>');

    }

    var initGrados = function() {

        $('#kt_repeater_grados').repeater({
            initEmpty: false,
            isFirstItemUndeletable: true,
            show: function() {
                
                initDateFields();

                var $repeater_item = $(this);

                //INICIO DEL AJAX EDICION DE CAMPO
                $.ajax({
                    dataType:'JSON',
                    type: 'POST',
                    url: BASE_URL + 'generar-idrepeater',
                    success:function(randomid){

                        $repeater_item.attr('data-random-id', randomid);
                        $repeater_item.slideDown(); 
                                                                                              
                    },
                    error: function(xhr) { 
                        console.log(xhr.statusText + xhr.responseText);
                    }
                });
                //FIN DEL AJAX


            },
            ready: function (setIndexes) {
                //$dragAndDrop.on('drop', setIndexes);
                //$(this).addClass("test")
            },
            hide: function(deleteElement) {     

                var $repeater_item = $(this);

                swal.fire({
                    title: '¿ESTÁS SEGURO?',
                    text: "No será posible recuperar la información",
                    type: 'warning',
                    confirmButtonText: "ELIMINAR",
                    confirmButtonClass: "btn btn-danger",
                    showCancelButton: true,
                    cancelButtonText: "CANCELAR",
                    cancelButtonClass: "btn btn-danger",
                }).then(function(result) {
                    if (result.value) {

                        $repeater_item.slideUp(deleteElement);

                    } 
                });

                                                    
            }      
        });
    }

    var initCargos = function() {
        $('#kt_repeater_cargos').repeater({
            initEmpty: false,
            isFirstItemUndeletable: true,
            show: function() {
                $(this).slideDown();   

                initDateFields();

            },

            hide: function(deleteElement) {    

                    var $repeater = $(this);

                    swal.fire({
                        title: 'Are you sure?',
                        text: "You won't be able to revert this!",
                        type: 'warning',
                        confirmButtonText: "<i class='la la-headphones'></i> Eliminar",
                        confirmButtonClass: "btn btn-danger",
                        showCancelButton: true,
                        cancelButtonText: "Cancelar",
                        cancelButtonClass: "btn btn-danger",
                    }).then(function(result) {
                        if (result.value) {

                            $repeater.slideUp(deleteElement);

                        } 

                    });
                                                           
            }      
        });
    }

    // Private functions
    var initExperiencia = function() {
        $('#kt_repeater_experiencia').repeater({
            initEmpty: false,
            isFirstItemUndeletable: true,
            show: function() {
                $(this).slideDown();  

                initDateFields();

            },

            hide: function(deleteElement) {     

                     var $repeater = $(this); 

                    swal.fire({
                        title: 'Are you sure?',
                        text: "You won't be able to revert this!",
                        type: 'warning',
                        confirmButtonText: "<i class='la la-headphones'></i> I am game!",
                        confirmButtonClass: "btn btn-danger",
                        showCancelButton: true,
                        cancelButtonText: "Cancelar",
                        cancelButtonClass: "btn btn-danger",
                    }).then(function(result) {
                        if (result.value) {


                            $repeater.slideUp(deleteElement);

                        } 

                    });

                 

            }      
        });
    }


    

    // Private functions
    var initEstudios = function() {
        $('#kt_repeater_estudios').repeater({
            initEmpty: false,
            isFirstItemUndeletable: true,
            show: function() {
                $(this).slideDown(); 

                initDateFields();

            },

            hide: function(deleteElement) {    

                var $repeater = $(this); 

                swal.fire({
                        title: 'Are you sure?',
                        text: "You won't be able to revert this!",
                        type: 'warning',
                        confirmButtonText: "Eliminar",
                        confirmButtonClass: "btn btn-success",
                        showCancelButton: true,
                        cancelButtonText: "Cancelar",
                        cancelButtonClass: "btn btn-danger",
                    }).then(function(result) {
                        if (result.value) {

                            $repeater.slideUp(deleteElement);

                        } 

                    });              
                


            }      
        });
    }

    // Private functions
    var initEspecializacion = function() {
        $('#kt_repeater_especializacion').repeater({
            initEmpty: false,
            isFirstItemUndeletable: true,
            show: function() {
                $(this).slideDown(); 

                initDateFields();

            },

            hide: function(deleteElement) {    

                var $repeater = $(this); 

                swal.fire({
                        title: 'Are you sure?',
                        text: "You won't be able to revert this!",
                        type: 'warning',
                        confirmButtonText: "Eliminar",
                        confirmButtonClass: "btn btn-success",
                        showCancelButton: true,
                        cancelButtonText: "Cancelar",
                        cancelButtonClass: "btn btn-danger",
                    }).then(function(result) {
                        if (result.value) {

                            $repeater.slideUp(deleteElement);

                        } 

                    });              
                


            }      
        });
    }





    // Private functions
    var initReconocimientos = function() {
        $('#kt_repeater_reconocimientos').repeater({
            initEmpty: false,
            isFirstItemUndeletable: true,
            show: function() {
                $(this).slideDown();  

                initDateFields();

            },

            hide: function(deleteElement) {    

                var $repeater = $(this); 

                swal.fire({
                        title: 'Are you sure?',
                        text: "You won't be able to revert this!",
                        type: 'warning',
                        confirmButtonText: "Eliminar",
                        confirmButtonClass: "btn btn-success",
                        showCancelButton: true,
                        cancelButtonText: "Cancelar",
                        cancelButtonClass: "btn btn-danger",
                    }).then(function(result) {
                        if (result.value) {

                            $repeater.slideUp(deleteElement);

                        } 

                    });              

            }      
        });
    }

    
    

    // Private functions
    var initAsesoria = function() {
        $('#kt_repeater_asesoria').repeater({
            initEmpty: false,
            isFirstItemUndeletable: true,
            show: function() {
                $(this).slideDown();  

                initDateFields();

            },

            hide: function(deleteElement) {    

                var $repeater = $(this); 

                swal.fire({
                        title: 'Are you sure?',
                        text: "You won't be able to revert this!",
                        type: 'warning',
                        confirmButtonText: "Eliminar",
                        confirmButtonClass: "btn btn-success",
                        showCancelButton: true,
                        cancelButtonText: "Cancelar",
                        cancelButtonClass: "btn btn-danger",
                    }).then(function(result) {
                        if (result.value) {

                            $repeater.slideUp(deleteElement);

                        } 

                    });              
                


            }      
        });
    }


    // Private functions
    var initInvestigacion = function() {
        $('#kt_repeater_investigacion').repeater({
            initEmpty: false,
            isFirstItemUndeletable: true,
            show: function() {
                $(this).slideDown();   

                initDateFields();

            },

            hide: function(deleteElement) {    

                var $repeater = $(this); 

                swal.fire({
                        title: 'Are you sure?',
                        text: "You won't be able to revert this!",
                        type: 'warning',
                        confirmButtonText: "Eliminar",
                        confirmButtonClass: "btn btn-success",
                        showCancelButton: true,
                        cancelButtonText: "Cancelar",
                        cancelButtonClass: "btn btn-danger",
                    }).then(function(result) {
                        if (result.value) {

                            $repeater.slideUp(deleteElement);

                        } 

                    });              
                


            }      
        });
    }



    // Private functions
    var initHerramientas = function() {
        $('#kt_repeater_herramientas').repeater({
            initEmpty: false,
            isFirstItemUndeletable: true,
            show: function() {
                $(this).slideDown();     

                initDateFields();

            },

            hide: function(deleteElement) {    

                var $repeater = $(this); 

                swal.fire({
                        title: 'Are you sure?',
                        text: "You won't be able to revert this!",
                        type: 'warning',
                        confirmButtonText: "Eliminar",
                        confirmButtonClass: "btn btn-success",
                        showCancelButton: true,
                        cancelButtonText: "Cancelar",
                        cancelButtonClass: "btn btn-danger",
                    }).then(function(result) {
                        if (result.value) {

                            $repeater.slideUp(deleteElement);

                        } 

                    });              
                


            }      
        });
    }


    
    var initFormFields = function () {

        $('#ubdepartamento_idDepa').on('change', function(){
            var idDepa = $(this).val(); 
            if(idDepa != ''){ 
                limpiarUbigeo();
                //CARGA PROVINCIA
                initProvincia(idDepa);  
            }
        }); 


        $('#ubprovincia_idProv').on('change', function(){
            var idProv = $(this).val(); 
            if(idProv != ''){ 
                initDistrito(idProv);                      
            }
        }); 

        $(document).ajaxStart($.blockUI).ajaxStop($.unblockUI);


    }


    var initDateFields = function () {
        
        $('.form-date').datepicker({
            todayHighlight: true,
            format: "yyyy-mm-dd",
            orientation: "bottom left",
            templates: arrows
        });

    }



    /*******************************************/
    /*          CARGAR SELECT PROVINCIA        */
    /*******************************************/       
    var initProvincia = function(idDepa){
            
            $.ajax({
                dataType:'JSON',
                type: 'POST',
                url: BASE_URL + 'provincia/prov_x_depa',
                data : {idDepa: idDepa},
                success:function(response){
                                                                        
                    //CARGA DE REGISTROS EN EL SELECT
                    var len = response.length;
                    
                    $("#ubprovincia_idProv").empty();
                    $("#ubprovincia_idProv").append('<option value="">Selecciona una provincia</option>');
                    
                    for( var i = 0; i<len; i++){
                        var idProv = response[i]['idProv'];
                        var provincia = response[i]['provincia'];
                        $('#ubprovincia_idProv').append($('<option>', { value: idProv, text: provincia }));
                    }
                    
                    //SI SE MANDO EL LABEL A SELECCIONAR SE CARGA
                    /*if(SelectedIndex != ""){
                        $("#ubprovincia_idProv option").filter(function(){ return $.trim($(this).val()) ==  SelectedIndex}).prop('selected', true);
                        $('#ubprovincia_idProv').selectpicker('refresh');
                    }*/
    
                },
                error: function(xhr) { 
                    console.log(xhr.statusText + xhr.responseText);
                }
            });
        
    }   


    /*******************************************/
    /*          CARGAR SELECT DISTRITO        */
    /*******************************************/       
    var initDistrito = function(idProv){

           
            $.ajax({
                dataType:'JSON',
                type: 'POST',
                url: BASE_URL + 'distrito/dist_x_prov',
                data : {idProv: idProv},
                success:function(response){
                                                                        
                    //CARGA DE REGISTROS EN EL SELECT
                    var len = response.length;
                    
                    $("#ubdistrito_idDist").empty();
                    $("#ubdistrito_idDist").append('<option value="">Selecciona un distrito</option>');
                    
                    for( var i = 0; i<len; i++){
                        var idDist = response[i]['idDist'];
                        var distrito = response[i]['distrito'];
                        $('#ubdistrito_idDist').append($('<option>', { value: idDist, text: distrito }));
                    }
                    
                    //SI SE MANDO EL LABEL A SELECCIONAR SE CARGA
                    /*if(SelectedIndex != ""){
                        $("#ubprovincia_idProv option").filter(function(){ return $.trim($(this).val()) ==  SelectedIndex}).prop('selected', true);
                        $('#ubprovincia_idProv').selectpicker('refresh');
                    }*/
    
                },
                error: function(xhr) { 
                    console.log(xhr.statusText + xhr.responseText);
                }
            });
        
    }   

    
    // Private functions
    var initWizard = function () {
        // Initialize form wizard
        wizard = new KTWizard('kt_wizard_v3', {
            startStep: 1,
            manualStepForward: true
        });

        // Validation before going to next page
        wizard.on('beforePrev', function(wizardObj) {

            if (validator.form() !== true) {
                wizardObj.stop();  // don't go to the next step
            }

        })

        wizard.on('beforeNext', function(wizardObj) {

            if (validator.form() !== true) {
                wizardObj.stop();  // don't go to the next step
            }

        })

        // Change event
        wizard.on('change', function(wizard) {
            
            
             console.log(wizard.currentStep);
            //KTUtil.scrollTop(); 
            //if(wizard.getStep() = 2)
        
        });
    }


    var initValidation = function() {
        validator = form_registro.validate({
            // Validate only visible fields
            ignore: ":hidden",
            onfocusout: true,
            errorClass: "error",
            validClass: "success",
            invalidClass: "error",
            // Validation rules
            rules: {
                
                //PERSONAL
                docNacionalidad: {
                    required: true
                },   
                docTipoDocumento: {
                    required: true
                },  
                docNroDocumento: {
                    required: true,
                    digits: true
                }, 
                docApPaterno: {
                    required: true
                },
                docApMaterno: {
                    required: true
                },
                docNombres: {
                    required: true
                },
                docGenero: {
                    required: true
                }, 
                docFechaNacimiento: {
                    required: true
                }, 
                ubdepartamento_idDepa: {
                    required: true
                }, 
                ubprovincia_idProv: {
                    required: true
                }, 
                ubdistrito_idDist: {
                    required: true
                }, 
                docDireccion: {
                    required: true
                }, 
                docCelular: {
                    required: true,
                    digits: true
                }, 
                docTelFijo: {
                    required: true,
                    digits: true
                },

                //ACADEMICA
                tieneGradoMaestro: {
                    required: false
                },
                tieneSegEspecialidad: {
                    required: false
                },
                archivoDina: {
                    required: {
                        depends: function(element) {
                            return ($("#tieneRegistroDina").prop('checked'));
                        }
                    }
                },
                archivoRegina: {
                    required: {
                        depends: function(element) {
                            return ($("#tieneRegistroRegina").prop('checked'));
                        }
                    }
                }

            },
            
            // Display error  
            invalidHandler: function(event, validator) {     
                //KTUtil.scrollTop();

                var errors = validator.numberOfInvalids();

                if (errors) {
                    var message = errors == 1
                      ? 'Por favor corrige el siguiente error : <br/>'
                      : 'Por favor corregir los siguientes ' + errors + ' errores : <br/>';
                    
                    var errors = "";

                    if (validator.errorList.length > 0) {
                        for (var x=0;x<validator.errorList.length;x++) {
                            errors += "\n\u25CF " + validator.errorList[x].message + "<br/>";
                        }
                    }
                    
                    swal.fire({
                        "title": "EL FORMULARIO CONTIENE ERRORES", 
                        "html": message + errors, 
                        "type": "error",
                        "confirmButtonClass": "btn btn-secondary"
                    });

                    KTUtil.scrollTop();

                }
                //success.hide();
                //success.addClass('kt-hide');
                //error.removeClass('kt-hide');

            },
            onfocusout: function(element) {

                var valor   = $(element).val();
                var campo   = $(element).attr("name");
                var dbtable = $(element).data("dbtable");
                var dbpk    = $(element).data("dbpk");

                var isCheked = ($(element).prop('checked'))? '1' : '0';

                console.log("valor " + isCheked);
                console.log("campo " + campo);
                console.log("dbtable " + dbtable);
                console.log("dbpk " + dbpk);
                
                /*************************************************************/
                //FUNCION PERSONALIZADO PARA LOS CHECKBOX - SI ESTA EN CHECK
                /*************************************************************/
                if (this.checkable(element) || (element.name in this.submitted || this.optional(element))) {
                    
                    if($(element).val() != "") {

                        //INICIO DEL AJAX EDICION DE CAMPO
                        $.ajax({
                            dataType:'JSON',
                            type: 'POST',
                            url: BASE_URL + 'registro-campo',
                            data : {valor: isCheked, 
                                    campo: campo, 
                                    docenteId: docenteId, 
                                    tabla: dbtable,
                                    primarykey: dbpk},
                            success:function(response){

                                console.log(response);
                                                                                                      
                            },
                            error: function(xhr) { 
                                console.log(xhr.statusText + xhr.responseText);
                            }
                        });
                        //FIN DEL AJAX

                    }

                }

                /*************************************************************/
                //PARA TODOS LOS CAMPOS QUE NO SON CHECKBOXES
                /*************************************************************/
                
                if (!this.checkable(element) && (element.name in this.submitted || !this.optional(element))) {

                    //SI SE SACO EL FOCUS Y ES VALIDO, SE GRABA
                    if($(element).val() != "") {
                        //INICIO DEL AJAX EDICION DE CAMPO
                        $.ajax({
                            dataType:'JSON',
                            type: 'POST',
                            url: BASE_URL + 'registro-campo',
                            data : {valor: valor, campo: campo, docenteId: docenteId, tabla: dbtable},
                            success:function(response){

                                console.log(response);
                                                                                                      
                            },
                            error: function(xhr) { 
                                console.log(xhr.statusText + xhr.responseText);
                            }
                        });
                        //FIN DEL AJAX

                    }

                }

            },

            // Submit valid form
            submitHandler: function (form) {
                
            }
        });   
    }

    var initSubmit = function() {
        var btn = form_registro.find('[data-ktwizard-type="action-submit"]');

        btn.on('click', function(e) {
            e.preventDefault();

            if (validator.form()) {
                // See: src\js\framework\base\app.js
                //KTApp.progress(btn);
                //KTApp.block(form_registro);

                // See: http://malsup.com/jquery/form/#ajaxSubmit
                form_registro.ajaxSubmit({
                    success: function() {
                        //KTApp.unprogress(btn);
                        //KTApp.unblock(form_registro);

                        swal.fire({
                            "title": "", 
                            "text": "The application has been successfully submitted!", 
                            "type": "success",
                            "confirmButtonClass": "btn btn-secondary"
                        });
                    }
                });
            }


        });
    }

    return {
        // public functions
        init: function() {

            wizardEl = KTUtil.get('kt_wizard_v3');
            form_registro = $('#kt_form');

            error = $('.alert-warning', form_registro);
            success = $('.alert-success', form_registro);

            docenteId = $('#docenteId').val();

            initWizard(); 
            initFormFields();
            initDateFields();
            initValidation();
            initSubmit();


            //REPEATERS
            initCargos();
            initGrados();
            initExperiencia();
            initEspecializacion();
            initEstudios();
            initHerramientas();
            initReconocimientos();
            initInvestigacion();
            initAsesoria();



        }
    };
}();


jQuery(document).ready(function() { 
    Registro.init();
});