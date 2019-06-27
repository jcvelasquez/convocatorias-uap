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

    var initFormFields = function () {


        $('.form-date').datepicker({
            todayHighlight: true,
            format: "dd/mm/yyyy",
            orientation: "bottom left",
            templates: arrows
        });

        

        $("#expDocHastaActual").click(function () {

            if ($(this).is(":checked")) {
                $("#expDocFecFin").attr("disabled", "disabled");
            } else {
                $("#expDocFecFin").removeAttr("disabled");
            }

        });

        $("#especHastaFecha").click(function () {

            if ($(this).is(":checked")) {
                $("#especFecFin").attr("disabled", "disabled");
            } else {
                $("#especFecFin").removeAttr("disabled");
            }

        });
        

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


        $('.kt-wizard-v3__nav-item').on('click', function(e){  e.preventDefault();   });


        /*******************************************/
        /*              GRABAR GRADOS              */
        /*******************************************/  
        $('#grabarGrados').on('click', function(e){

 
            var gradAcademico = $("#gradAcademico");
            var gradEspecialidad = $("#gradEspecialidad");
            var gradInstitucion = $("#gradInstitucion");

            if( gradAcademico.val() == "" || gradEspecialidad.val() == "" || gradInstitucion.val() == "" ){
                
                swal.fire("ERROR", "¡Completa todos los campos para poder grabar!", "error");
                
            }else{

                    $.ajax({dataType:'JSON',
                        type: 'POST',
                        url: BASE_URL + 'Grados/agregar',
                        data : {docenteId: docenteId,
                                 gradAcademico: gradAcademico.val(),
                                 gradEspecialidad: gradEspecialidad.val(),
                                 gradInstitucion: gradInstitucion.val()
                                },
                        success:function(response){
                                                                                
                            $('#table_grados').DataTable().ajax.reload();     

                            gradAcademico.val("");
                            gradEspecialidad.val("");
                            gradInstitucion.val("");

                        },
                        error: function(xhr) { 
                            console.log(xhr.statusText + xhr.responseText);
                        }
                    });

            }


        }); 


        /***********************************************/
        /* GRABAR EXPERIENCIA DOCENCIA UNIVERSITARIA   */
        /***********************************************/  
        $('#grabarExperienciaDocencia').on('click', function(e){

 
            var expDocInstitucion = $("#expDocInstitucion");
            var cargoDocencia = $("#cargoDocencia");
            var tipoConDocencia = $("#tipoConDocencia");
            var expDocFecInicio = $("#expDocFecInicio");
            var expDocFecFin = $("#expDocFecFin");
            var expDocHastaActual = ($("#expDocHastaActual").is(':checked'))? '1' : '0';

            console.log(expDocHastaActual);

            if( expDocInstitucion.val() == "" || 
                cargoDocencia.val() == "" || 
                tipoConDocencia.val() == "" || 
                expDocFecInicio.val() == "" ){
                
                swal.fire("ERROR", "¡Completa todos los campos para poder grabar!", "error");
                
            }else{

                    $.ajax({dataType:'JSON',
                        type: 'POST',
                        url: BASE_URL + 'ExperienciaDocencia/agregar',
                        data : {docenteId: docenteId,
                                 expDocInstitucion: expDocInstitucion.val(),
                                 gradEspecialidad: gradEspecialidad.val(),
                                 gradInstitucion: gradInstitucion.val()
                                },
                        success:function(response){
                                                                                
                            $('#table_experiencia_docencia').DataTable().ajax.reload();     

                            gradAcademico.val("");
                            gradEspecialidad.val("");
                            gradInstitucion.val("");

                        },
                        error: function(xhr) { 
                            console.log(xhr.statusText + xhr.responseText);
                        }
                    });
                
            }


        }); 
        /*******************************************/
        /*          FIN GRABAR GRADOS              */
        /*******************************************/


    }

    

    var initGrados = function() {


        /*******************************/
        /*         TABLE GRADOS        */
        /*******************************/
        var table_grados = $('#table_grados');

        // begin first table
        table_grados.DataTable({
            responsive: true,
            processing: true,
            serverSide: true,
            paging: false,
            searching: false,
            ajax: {
                url: BASE_URL + 'registro/grados/listar',
                data: function ( d ) {
                    d.docenteId = docenteId ;
                },
                type: "POST"
            },
            columns: [
                {data: 'gradosId'},
                {data: 'gradAcademico'},
                {data: 'gradEspecialidad'},
                {data: 'gradInstitucion'},
                {data: 'Acciones'},
            ],
            columnDefs: [

                {
                    targets: -1,
                    title: 'Acciones',
                    orderable: false,
                    render: function(data, type, full, meta) {

                        return `<a class="btn btn-danger mt-sweetalert" href="javascript:;" data-id="` + BASE_URL + 'admin/convocatorias/editar/' + full['gradosId'] + `"><i class="fas fa-trash"></i> Eliminar </a>`;
                    },
                }
                
            ],
        });

        /*******************************/
        /*     CLICK BOTON ELIMINAR    */
        /*******************************/
        $('#table_grados tbody').on( 'click', 'a.mt-sweetalert', function () {
            
                var data = $('#table_grados').DataTable().row( $(this).parents('tr') ).data();
                var rowToDelete = $(this).parents('tr');
                                
                swal.fire({
                    title: 'CONFIRMACION REQUERIDA',
                    text: "¿Esta seguro que desea eliminar el registro?",
                    type: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Eliminar',
                    cancelButtonText: 'Cancelar',
                    reverseButtons: true
                }).then(function(result){
                    if (result.value) {


                        $.ajax({
                            dataType:'JSON',
                            type: 'POST',
                            url: BASE_URL + 'Grados/eliminar',
                            data:{ gradosId : data['gradosId'] },
                            success:function(data){

                                if(data){
                                    swal.fire("CONFIRMACION!","El registro ha sido eliminado.","success")
                                    $('#table_grados').DataTable().row(rowToDelete).remove().draw();    
                                }
                                                   
                            },
                            error: function(xhr) { 
                                console.log(xhr.statusText + xhr.responseText);
                            }
                        });
        
                    } 

                });
                
        } );
        /*******************************/
        /*  FIN CLICK BOTON ELIMINAR   */
        /*******************************/
        

        
    }

    var initCargos = function() {
        
        var table_cargos = $('#table_cargos');

        // begin first table
        table_cargos.DataTable({
            responsive: true,
            processing: true,
            serverSide: true,
            paging: false,
            searching: false,
            ajax: {
                url: BASE_URL + 'registro/cargos-academicos/listar',
                data: function ( d ) {
                    d.docenteId = $('#docenteId').val();
                },
                type: "POST"
            },
            columns: [
                {data: 'cargosId'},
                {data: 'carAcadNomInstitucion'},
                {data: 'carAcadArea'},
                {data: 'carAcadFecInicio'},
                {data: 'carAcadFecFin'},
                {data: 'carAcadeHastaFecha'},
                {data: 'Acciones'},
            ],
            columnDefs: [

                {
                    targets: -1,
                    title: 'Acciones',
                    orderable: false,
                    render: function(data, type, full, meta) {

                        return `<a class="btn btn-danger mt-sweetalert" data-id="` + BASE_URL + 'admin/convocatorias/editar/' + full['cargosId'] + `" href="javascript:;"><i class="la la-edit"></i> Eliminar </a>`;
                    },
                }
                
            ],
        });



        /*******************************/
        /*     CLICK BOTON ELIMINAR    */
        /*******************************/
        $('#table_cargos tbody').on( 'click', 'a.mt-sweetalert', function () {
            
                var data = table_cargos.getDataTable().row( $(this).parents('tr') ).data();
                var rowToDelete = $(this).parents('tr');

                console.log(data);
                                
                    swal({
                      title: "CONFIRMACION REQUERIDA",
                      text: "Una vez eliminada, no será posible recuperar la información!",
                      type: "warning",
                      showCancelButton: true,
                      confirmButtonClass: "btn-success",
                      confirmButtonText: "Si, eliminar!",
                      cancelButtonText: "Cancelar",
                      closeOnConfirm: false
                    },
                    function(){
                    
                            /*******************************/
                            /*       BORRAR REGISTRO       */
                            /*******************************/
                            /*$.ajax({
                                dataType:'JSON',
                                type: 'POST',
                                url: 'database/ContratosGet.php?action_type=delete&id='+data['idcontratos'],
                                success:function(data){
                                    
                                    switch(data.code){
                                    
                                        case "200"  :   swal("CONFIRMACION", "El registro ha sido eliminado.", "success");
                                                        table_cargos.getDataTable().row(rowToDelete).remove().draw( false );
                                                        break;
                                                            
                                        case "1451" :   swal("ERROR", "El registro no se puede eliminar ya que estÃ¡ asociado a otro documento. Para poder eliminar el contrato, deberÃ¡ eliminar todos los documentos asociados a este registro.", "error");
                                                        break;
                                                            
                                        default     :   swal("ERROR", "El registro no se puede eliminar.", "error");

                                    }
                    
                                },
                                error: function(xhr) { 
                                    console.log(xhr.statusText + xhr.responseText);
                                }
                            });*/
                            /*******************************/
                            /*    FIN BORRAR REGISTRO      */
                            /*******************************/
                            
                    });
                
        } );
        /*******************************/
        /*  FIN CLICK BOTON ELIMINAR   */
        /*******************************/
        

    }

    // Private functions
    var initExperienciaDocencia = function() {


        var table_experiencia_docencia = $('#table_experiencia_docencia');

        // begin first table
        table_experiencia_docencia.DataTable({
            responsive: true,
            processing: true,
            serverSide: true,
            paging: false,
            searching: false,
            ajax: {
                url: BASE_URL + 'registro/experiencia-docencia/listar',
                data: function ( d ) {
                    d.docenteId = $('#docenteId').val();
                },
                type: "POST"
            },
            columns: [
                {data: 'experienciaId'},
                {data: 'expDocInstitucion'},
                {data: 'cargoDocencia'},
                {data: 'tipoConDocencia'},
                {data: 'expDocFecInicio'},
                {data: 'expDocFecFin'},
                {data: 'expDocHastaActual'},
                {data: 'Acciones'},
            ],
            columnDefs: [

                {
                    targets: -1,
                    title: 'Acciones',
                    orderable: false,
                    render: function(data, type, full, meta) {

                        return `<a class="btn btn-danger" href="` + BASE_URL + 'admin/convocatorias/editar/' + full['experienciaId'] + `"><i class="la la-edit"></i> Eliminar </a>`;
                    },
                }
                
            ],
        });

       
    }



    // Private functions
    var initExperienciaEspecializacion = function() {
        
        var table_experiencia_profesional = $('#table_experiencia_profesional');

        // begin first table
        table_experiencia_profesional.DataTable({
            responsive: true,
            processing: true,
            serverSide: true,
            paging: false,
            searching: false,
            ajax: {
                url: BASE_URL + 'registro/experiencia-profesional/listar',
                data: function ( d ) {
                    d.docenteId = $('#docenteId').val();
                },
                type: "POST"
            },
            columns: [
                {data: 'especializacionId'},
                {data: 'especInstitucion'},
                {data: 'especTipoInstitucion'},
                {data: 'especCargo'},
                {data: 'especFecInicio'},
                {data: 'especFecFin'},
                {data: 'especHastaFecha'},
                {data: 'Acciones'},
            ],
            columnDefs: [

                {
                    targets: -1,
                    title: 'Acciones',
                    orderable: false,
                    render: function(data, type, full, meta) {

                        return `<a class="btn btn-danger" href="` + BASE_URL + 'admin/convocatorias/editar/' + full['especializacionId'] + `"><i class="la la-edit"></i> Eliminar </a>`;
                    },
                }
                
            ],
        });

    }



    

    // Private functions
    var initIdiomas = function() {


        var table_idiomas = $('#table_idiomas');

        // begin first table
        table_idiomas.DataTable({
            responsive: true,
            processing: true,
            serverSide: true,
            paging: false,
            searching: false,
            ajax: {
                url: BASE_URL + 'registro/idiomas/listar',
                data: function ( d ) {
                    d.docenteId = $('#docenteId').val();
                },
                type: "POST"
            },
            columns: [
                {data: 'idiomaId'},
                {data: 'idioCentroEstudios'},
                {data: 'idioNombre'},
                {data: 'idioNivel'},
                {data: 'idioFechaCertificacion'},
                {data: 'idioRutaArchivoCertificacion'},
                {data: 'Acciones'},
            ],
            columnDefs: [

                {
                    targets: -1,
                    title: 'Acciones',
                    orderable: false,
                    render: function(data, type, full, meta) {

                        return `<a class="btn btn-danger" href="` + BASE_URL + 'admin/convocatorias/editar/' + full['idiomaId'] + `"><i class="la la-edit"></i> </a>`;
                    },
                }
                
            ],
        });
        

    }


    // Private functions
    var initReconocimientos = function() {

        var table_reconocimientos = $('#table_reconocimientos');

        // begin first table
        table_reconocimientos.DataTable({
            responsive: true,
            processing: true,
            serverSide: true,
            paging: false,
            searching: false,
            ajax: {
                url: BASE_URL + 'registro/reconocimientos/listar',
                data: function ( d ) {
                    d.docenteId = $('#docenteId').val();
                },
                type: "POST"
            },
            columns: [
                {data: 'reconocimientoId'},
                {data: 'recInstPremio'},
                {data: 'recInstitucion'},
                {data: 'recInstFecha'},
                {data: 'rutaArchivoDocSustentatorio'},
                {data: 'Acciones'},
            ],
            columnDefs: [

                {
                    targets: -1,
                    title: 'Acciones',
                    orderable: false,
                    render: function(data, type, full, meta) {

                        return `<a class="btn btn-danger" href="` + BASE_URL + 'admin/convocatorias/editar/' + full['reconocimientoId'] + `"><i class="la la-edit"></i> </a>`;
                    },
                }
                
            ],
        });


    }

    
    

    // Private functions
    var initAsesoria = function() {
        
        var table_asesorias = $('#table_asesorias');

        // begin first table
        table_asesorias.DataTable({
            responsive: true,
            processing: true,
            serverSide: true,
            paging: false,
            searching: false,
            ajax: {
                url: BASE_URL + 'registro/asesorias/listar',
                data: function ( d ) {
                    d.docenteId = $('#docenteId').val();
                },
                type: "POST"
            },
            columns: [
                {data: 'tesisId'},
                {data: 'tesNombreTesis'},
                {data: 'tesTipo'},
                {data: 'tesFecha'},
                {data: 'tesNroResolucion'},
                {data: 'Acciones'},
            ],
            columnDefs: [

                {
                    targets: -1,
                    title: 'Acciones',
                    orderable: false,
                    render: function(data, type, full, meta) {

                        return `<a class="btn btn-danger" href="` + BASE_URL + 'admin/convocatorias/editar/' + full['tesisId'] + `"><i class="la la-edit"></i> </a>`;
                    },
                }
                
            ],
        });


    }


    // Private functions
    var initInvestigacion = function() {

        var table_investigaciones = $('#table_investigaciones');

        // begin first table
        table_investigaciones.DataTable({
            responsive: true,
            processing: true,
            serverSide: true,
            paging: false,
            searching: false,
            ajax: {
                url: BASE_URL + 'registro/investigaciones/listar',
                data: function ( d ) {
                    d.docenteId = $('#docenteId').val();
                },
                type: "POST"
            },
            columns: [
                {data: 'investigacionesId'},
                {data: 'invesTitulo'},
                {data: 'invesTipoPublicacion'},
                {data: 'invesFecha'},
                {data: 'invesNroRegistro'},
                {data: 'rutaArchivoInvestigacion'},
                {data: 'Acciones'},
            ],
            columnDefs: [

                {
                    targets: -1,
                    title: 'Acciones',
                    orderable: false,
                    render: function(data, type, full, meta) {

                        return `<a class="btn btn-danger" href="` + BASE_URL + 'admin/convocatorias/editar/' + full['reconocimientoId'] + `"><i class="la la-edit"></i> </a>`;
                    },
                }
                
            ],
        });
     

       
    }



    // Private functions
    var initHerramientas = function() {

        var table_herramientas = $('#table_herramientas');

        // begin first table
        table_herramientas.DataTable({
            responsive: true,
            processing: true,
            serverSide: true,
            paging: false,
            searching: false,
            ajax: {
                url: BASE_URL + 'registro/herramientas/listar',
                data: function ( d ) {
                    d.docenteId = $('#docenteId').val();
                },
                type: "POST"
            },
            columns: [
                {data: 'informaticaId'},
                {data: 'inforEspecialidadCurso'},
                {data: 'inforCentroEstudio'},
                {data: 'inforNivel'},
                {data: 'inforFechaCertificacion'},
                {data: 'inforRutaArchivoCertificacion'},
                {data: 'Acciones'},
            ],
            columnDefs: [

                {
                    targets: -1,
                    title: 'Acciones',
                    orderable: false,
                    render: function(data, type, full, meta) {

                        return `<a class="btn btn-danger" href="` + BASE_URL + 'admin/convocatorias/editar/' + full['informaticaId'] + `"><i class="la la-edit"></i> </a>`;
                    },
                }
                
            ],
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
                tieneGradoMaestro: {
                    required: true
                },
                tieneSegEspecialidad: {
                    required: true
                },
                archivoDina: {
                    required: {
                        depends: function(element) {
                            return ($("#tieneRegistroDina").prop('checked'));
                        }
                    }
                }

            },
            invalidHandler: function(event, validator) {     

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

                }
               

            },
            onfocusout: function(element) {

                    var valor    = $(element).val();
                    var campo    = $(element).attr("name");
                    var dbtable  = $(element).data("dbtable");
                    var dbpk     = $(element).data("dbpk");
                    var isCheked = ($(element).prop('checked'))? '1' : '0';


                    if(campo == "docNroDocumento"){

                        $.ajax({
                            dataType:'JSON',
                            type: 'POST',
                            url: BASE_URL + 'consultar-dni',
                            data : {dni: valor},
                            success:function(response){

                                $('#docApMaterno').val(response.APEMAT).blur();
                                $('#docApPaterno').val(response.APEPAT).blur();
                                $('#docNombres').val(response.NOMBRES).blur();
                                                                                                      
                            },
                            error: function(xhr) { 
                                console.log(xhr.statusText + xhr.responseText);
                            }
                        });

                    }
                    
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
                        /*if($(element).val() != "") {

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

                        }*/
                    }

            },
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

            //REPEATERS
            initCargos();
            initGrados();
            initExperienciaDocencia();
            initExperienciaEspecializacion();
            initHerramientas();
            initReconocimientos();
            initInvestigacion();
            initAsesoria();
            initIdiomas();

            initWizard(); 
            initFormFields();
            initValidation();
            initSubmit();


            



        }
    };
}();


jQuery(document).ready(function() { 
    Registro.init();
});