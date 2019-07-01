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
    var formDataIdioma;

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

        $("#archivoPdfSunedu").dropzone({ 
              url: BASE_URL + "Adicionales/agregar_sunedu",
              paramName: "archivoSunedu", // The name that will be used to transfer the file
              maxFilesize: 5, // MB
              maxFiles: 1,
              addRemoveLinks: true,
              dictRemoveFile : "Eliminar archivo",
              removedfile: function(file) {

                    var name = file.name; 

                    $.ajax({
                        type: 'POST',
                        url: 'Adicionales/eliminar',
                        data: { docenteId: docenteId },
                        dataType: 'html',
                        success:function(response){
                                                                                    
                         var _ref;
                        return (_ref = file.previewElement) != null ? _ref.parentNode.removeChild(file.previewElement) : void 0;

                        },
                        error: function(xhr) { 
                            console.log(xhr.statusText + xhr.responseText);
                        }
                    });

                    
              },
              params: { docenteId: docenteId },
              accept: function(file, done) {
                if (file.name == "justinbieber.jpg") {
                  done("Naha, you don't.");
                }
                else { done(); }
              },
              init: function() { 

                    var myDropzone = this;

                    $.ajax({
                      url: BASE_URL + 'Adicionales/listar_archivo_sunedu',
                      type: 'post',
                      data: { docenteId: docenteId },
                      dataType: 'json',
                      success: function(response){

                        //console.log(response);

                        $.each(response, function(key,value) {

                            if(key == "archivoSunedu")
                            console.log(value);
                          /*var mockFile = { name: value.name, size: value.size };

                          myDropzone.emit("addedfile", mockFile);
                          myDropzone.emit("thumbnail", mockFile, value.path);
                          myDropzone.emit("complete", mockFile);*/

                        });

                      }
                    });

              }

        });



        $("#expDocHastaActual").click(function () {

            if ($(this).is(":checked")) {
                $("#expDocFecFin").attr("disabled", "disabled");
                $("#expDocFecFin").datepicker('setDate', null);
            } else {
                $("#expDocFecFin").removeAttr("disabled");
            }

        });

        $("#especHastaFecha").click(function () {

            if ($(this).is(":checked")) {
                $("#especFecFin").attr("disabled", "disabled");
                $("#especFecFin").datepicker('setDate', null);
            } else {
                $("#especFecFin").removeAttr("disabled");
            }

        });

        $("#carAcadeHastaFecha").click(function () {

            if ($(this).is(":checked")) {
                $("#carAcadFecFin").attr("disabled", "disabled");
                $("#carAcadFecFin").datepicker('setDate', null);
            } else {
                $("#carAcadFecFin").removeAttr("disabled");
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

/*
        $('#idioRutaArchivoCertificacion').on('change', function(){

            formDataIdioma = new FormData(this);

        }); */

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
                    url: BASE_URL + 'Grados/listar',
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
            /*******************************************/
            /*           FIN GRABAR GRADOS             */
            /*******************************************/

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



    // Private functions
    var initExperienciaDocencia = function() {


            var table_experiencia_docencia = $('#table_experiencia_docencia');

            table_experiencia_docencia.DataTable({
                responsive: true,
                processing: true,
                serverSide: true,
                paging: false,
                searching: false,
                ajax: {
                    url: BASE_URL + 'ExperienciaDocencia/listar',
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
                        targets: -3,
                        render: function(data, type, full, meta) {
                            if (full['expDocFecFin'] === '00/00/0000') {
                                return "---";
                            }
                            return full['expDocFecFin'];
                        },
                    },
                    {
                        targets: -2,
                        render: function(data, type, full, meta) {
                            var status = {
                                0: {'title': 'NO', 'state': 'danger'},
                                1: {'title': 'SI', 'state': 'success'},
                            };
                            if (typeof status[data] === 'undefined') {
                                return data;
                            }
                            return '<span class="kt-badge kt-badge--' + status[data].state + ' kt-badge--inline kt-badge--pill">' + status[data].title + '</span>';
                        },
                    },
                    {
                        targets: -1,
                        title: 'Acciones',
                        orderable: false,
                        render: function(data, type, full, meta) {

                            return `<a class="btn btn-danger mt-sweetalert" href="javascript:;" data-id="` + full['experienciaId'] + `"><i class="fas fa-trash"></i> Eliminar </a>`;
                        },
                    }
                    
                ],
            });


            /***********************/
            /*    INICIO GRABAR    */
            /***********************/  
            $('#grabarExperienciaDocencia').on('click', function(e){

     
                var expDocInstitucion = $("#expDocInstitucion");
                var cargoDocencia = $("#cargoDocencia");
                var tipoConDocencia = $("#tipoConDocencia");
                var expDocFecInicio = $("#expDocFecInicio");
                var expDocFecFin
                var expDocHastaActual;

                if($("#expDocHastaActual").is(':checked')){
                    expDocHastaActual = 1;
                    expDocFecFin = "";
                }else{
                    expDocHastaActual = 0;
                    expDocFecFin = $("#expDocFecFin").val();
                }


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
                                     cargoDocencia: cargoDocencia.val(),
                                     tipoConDocencia: tipoConDocencia.val(),
                                     expDocFecInicio: expDocFecInicio.val(),
                                     expDocFecFin: expDocFecFin,
                                     expDocHastaActual: expDocHastaActual
                            },
                            success:function(response){
                                                                                    
                                $('#table_experiencia_docencia').DataTable().ajax.reload();     

                                expDocInstitucion.val("");
                                cargoDocencia.val("");
                                tipoConDocencia.val("");
                                expDocFecInicio.datepicker('setDate', null);

                                $("#expDocFecFin").prop("disabled",false);
                                $("#expDocFecFin").datepicker('setDate', null);

                                $("#expDocHastaActual").prop("checked",false);



                            },
                            error: function(xhr) { 
                                console.log(xhr.statusText + xhr.responseText);
                            }
                        });
                    
                }


            }); 
            /*******************************/
            /*          FIN GRABAR         */
            /*******************************/

            /*******************************/
            /*     CLICK BOTON ELIMINAR    */
            /*******************************/
            $('#table_experiencia_docencia tbody').on( 'click', 'a.mt-sweetalert', function () {
                
                    var data = $('#table_experiencia_docencia').DataTable().row( $(this).parents('tr') ).data();
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
                                url: BASE_URL + 'ExperienciaDocencia/eliminar',
                                data:{ experienciaId : data['experienciaId'] },
                                success:function(data){

                                    if(data){
                                        swal.fire("CONFIRMACION!","El registro ha sido eliminado.","success")
                                        $('#table_experiencia_docencia').DataTable().row(rowToDelete).remove().draw();    
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



    // Private functions
    var initExperienciaProfesional = function() {
        
            var table_experiencia_profesional = $('#table_experiencia_profesional');

            // begin first table
            table_experiencia_profesional.DataTable({
                responsive: true,
                processing: true,
                serverSide: true,
                paging: false,
                searching: false,
                ajax: {
                    url: BASE_URL + 'ExperienciaProfesional/listar',
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
                        targets: -3,
                        render: function(data, type, full, meta) {
                            if (full['especFecFin'] === '00/00/0000') {
                                return "---";
                            }
                            return full['especFecFin'];
                        },
                    },
                    {
                        targets: -2,
                        render: function(data, type, full, meta) {
                            var status = {
                                0: {'title': 'NO', 'state': 'danger'},
                                1: {'title': 'SI', 'state': 'success'},
                            };
                            if (typeof status[data] === 'undefined') {
                                return data;
                            }
                            return '<span class="kt-badge kt-badge--' + status[data].state + ' kt-badge--inline kt-badge--pill">' + status[data].title + '</span>';
                        },
                    },
                    {
                        targets: -1,
                        title: 'Acciones',
                        orderable: false,
                        render: function(data, type, full, meta) {

                            return `<a class="btn btn-danger mt-sweetalert" href="javascript:;" data-id="` + full['especializacionId'] + `"><i class="fas fa-trash"></i> Eliminar </a>`;
                        },
                    }
                ],
            });

            /***********************/
            /*    INICIO GRABAR    */
            /***********************/  
            $('#grabarExperienciaProfesional').on('click', function(e){

     
                var especInstitucion = $("#especInstitucion");
                var especTipoInstitucion = $("#especTipoInstitucion");
                var especCargo = $("#especCargo");
                var especFecInicio = $("#especFecInicio");
                var especFecFin
                var especHastaFecha;

                if($("#especHastaFecha").is(':checked')){
                    especHastaFecha = 1;
                    especFecFin = "";
                }else{
                    especHastaFecha = 0;
                    especFecFin = $("#especFecFin").val();
                }


                if( especInstitucion.val() == "" || 
                    especCargo.val() == "" || 
                    especTipoInstitucion.val() == "" || 
                    especFecInicio.val() == "" ){
                    
                    swal.fire("ERROR", "¡Completa todos los campos para poder grabar!", "error");
                    
                }else{

                        $.ajax({dataType:'JSON',
                            type: 'POST',
                            url: BASE_URL + 'ExperienciaProfesional/agregar',
                            data : {docenteId: docenteId,
                                     especInstitucion: especInstitucion.val(),
                                     especCargo: especCargo.val(),
                                     especTipoInstitucion: especTipoInstitucion.val(),
                                     especFecInicio: especFecInicio.val(),
                                     especFecFin: especFecFin,
                                     especHastaFecha: especHastaFecha
                            },
                            success:function(response){
                                                                                    
                                $('#table_experiencia_profesional').DataTable().ajax.reload();     

                                especInstitucion.val("");
                                especCargo.val("");
                                especTipoInstitucion.val("");
                                especFecInicio.datepicker('setDate', null);

                                $("#especFecFin").prop("disabled",false);
                                $("#especFecFin").datepicker('setDate', null);
                                $("#especHastaFecha").prop("checked",false);


                            },
                            error: function(xhr) { 
                                console.log(xhr.statusText + xhr.responseText);
                            }
                        });
                    
                }


            }); 
            /*******************************/
            /*          FIN GRABAR         */
            /*******************************/

            /*******************************/
            /*     CLICK BOTON ELIMINAR    */
            /*******************************/
            $('#table_experiencia_profesional tbody').on( 'click', 'a.mt-sweetalert', function () {
                
                    var data = $('#table_experiencia_profesional').DataTable().row( $(this).parents('tr') ).data();
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
                                url: BASE_URL + 'ExperienciaProfesional/eliminar',
                                data:{ especializacionId : data['especializacionId'] },
                                success:function(data){

                                    if(data){
                                        swal.fire("CONFIRMACION!","El registro ha sido eliminado.","success")
                                        $('#table_experiencia_profesional').DataTable().row(rowToDelete).remove().draw();    
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
                    url: BASE_URL + 'Cargos/listar',
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
                        targets: -3,
                        render: function(data, type, full, meta) {
                            if (full['carAcadFecFin'] === '00/00/0000') {
                                return "---";
                            }
                            return full['carAcadFecFin'];
                        },
                    },
                    {
                        targets: -2,
                        render: function(data, type, full, meta) {
                            var status = {
                                0: {'title': 'NO', 'state': 'danger'},
                                1: {'title': 'SI', 'state': 'success'},
                            };
                            if (typeof status[data] === 'undefined') {
                                return data;
                            }
                            return '<span class="kt-badge kt-badge--' + status[data].state + ' kt-badge--inline kt-badge--pill">' + status[data].title + '</span>';
                        },
                    },
                    {
                        targets: -1,
                        title: 'Acciones',
                        orderable: false,
                        render: function(data, type, full, meta) {

                            return `<a class="btn btn-danger mt-sweetalert" href="javascript:;" data-id="` + full['cargosId'] + `"><i class="fas fa-trash"></i> Eliminar </a>`;
                        },
                    }                    
                ],
            });



            /***********************/
            /*    INICIO GRABAR    */
            /***********************/  
            $('#btnGrabarCargos').on('click', function(e){

     
                var carAcadNomInstitucion = $("#carAcadNomInstitucion");
                var carAcadArea = $("#carAcadArea");
                var carAcadFecInicio = $("#carAcadFecInicio");
                var carAcadFecFin
                var carAcadeHastaFecha;

                if($("#carAcadeHastaFecha").is(':checked')){
                    carAcadeHastaFecha = 1;
                    carAcadFecFin = "";
                }else{
                    carAcadeHastaFecha = 0;
                    carAcadFecFin = $("#carAcadFecFin").val();
                }


                if( carAcadNomInstitucion.val() == "" || 
                    carAcadArea.val() == "" || 
                    carAcadFecInicio.val() == "" ){
                    
                    swal.fire("ERROR", "¡Completa todos los campos para poder grabar!", "error");
                    
                }else{

                        $.ajax({dataType:'JSON',
                            type: 'POST',
                            url: BASE_URL + 'Cargos/agregar',
                            data : {docenteId: docenteId,
                                     carAcadNomInstitucion: carAcadNomInstitucion.val(),
                                     carAcadArea: carAcadArea.val(),
                                     carAcadFecInicio: carAcadFecInicio.val(),
                                     carAcadFecFin: carAcadFecFin,
                                     carAcadeHastaFecha: carAcadeHastaFecha
                            },
                            success:function(response){
                                                                                    
                                $('#table_cargos').DataTable().ajax.reload();     

                                carAcadNomInstitucion.val("");
                                carAcadArea.val("");
                                carAcadFecInicio.datepicker('setDate', null);

                                $("#carAcadFecFin").prop("disabled",false);
                                $("#carAcadFecFin").datepicker('setDate', null);
                                $("#carAcadeHastaFecha").prop("checked",false);


                            },
                            error: function(xhr) { 
                                console.log(xhr.statusText + xhr.responseText);
                            }
                        });
                    
                }


            }); 
            /*******************************/
            /*          FIN GRABAR         */
            /*******************************/

            /*******************************/
            /*     CLICK BOTON ELIMINAR    */
            /*******************************/
            $('#table_cargos tbody').on( 'click', 'a.mt-sweetalert', function () {
                
                    var data = $('#table_cargos').DataTable().row( $(this).parents('tr') ).data();
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
                                url: BASE_URL + 'Cargos/eliminar',
                                data:{ cargosId : data['cargosId'] },
                                success:function(data){

                                    if(data){
                                        swal.fire("CONFIRMACION!","El registro ha sido eliminado.","success")
                                        $('#table_cargos').DataTable().row(rowToDelete).remove().draw();    
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
                    url: BASE_URL + 'Idiomas/listar',
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
                        targets: -2,
                        title: 'Descargar',
                        orderable: false,
                        render: function(data, type, full, meta) {

                            return `<a class="btn btn-danger ver_archivo" target="_blank" href="` + BASE_URL + `assets/uploads/idiomas/` + full['idioRutaArchivoCertificacion'] + `" ><i class="fas fa-download"></i> Descargar </a>`;
                        },
                    },     
                    {
                        targets: -1,
                        title: 'Acciones',
                        orderable: false,
                        render: function(data, type, full, meta) {

                            return `<a class="btn btn-danger mt-sweetalert" href="javascript:;" data-id="` + full['idiomaId'] + `"><i class="fas fa-trash"></i> Eliminar </a>`;
                        },
                    }    
                    
                ],
            });

            /***********************/
            /*    INICIO GRABAR    */
            /***********************/  
            $('#grabarIdiomas').on('click', function(e){
     
                var idioCentroEstudios = $("#idioCentroEstudios");
                var idioNombre = $("#idioNombre");
                var idioNivel = $("#idioNivel");
                var idioFechaCertificacion = $("#idioFechaCertificacion");
                var idioRutaArchivoCertificacion = $("#idioRutaArchivoCertificacion");
                var idioFechaCertificacion = $("#idioFechaCertificacion");

                if( idioCentroEstudios.val() == "" || 
                    idioNombre.val() == "" || 
                    idioNivel.val() == "" || 
                    idioFechaCertificacion.val() == "" || 
                    idioRutaArchivoCertificacion.val() == "" || 
                    idioFechaCertificacion.val() == "" ){
                    
                    swal.fire("ERROR", "¡Completa todos los campos para poder grabar!", "error");
                    
                }else{

                    var formDataIdioma = new FormData();

                    formDataIdioma.append('docenteId', docenteId);
                    formDataIdioma.append('idioCentroEstudios', $("#idioCentroEstudios").val());
                    formDataIdioma.append('idioNombre', $("#idioNombre").val());
                    formDataIdioma.append('idioNivel', $("#idioNivel").val());
                    formDataIdioma.append('idioFechaCertificacion', $("#idioFechaCertificacion").val());
                    formDataIdioma.append('idioRutaArchivoCertificacion', $("#idioRutaArchivoCertificacion")[0].files[0]);

                    $.ajax({url: BASE_URL + 'Idiomas/agregar',
                             type:"post",
                             data: formDataIdioma, //this is formData
                             processData:false,
                             contentType:false,
                             cache:false,
                             async:false,
                             success: function(data){

                                if(data.status == "error"){

                                   swal.fire("ERROR", "Se produjo un error al grabar la información, el archivo seleccionado no puede exceder los 4Mb de tamaño y los archivos permitidos son imágenes JPG, PNG, GIF y PDF", "error");

                                }else{

                                    $('#table_idiomas').DataTable().ajax.reload();     

                                    idioCentroEstudios.val("");
                                    idioNombre.val("");
                                    idioNivel.val("");
                                    idioRutaArchivoCertificacion.val("")
                                    idioFechaCertificacion.datepicker('setDate', null);

                                    swal.fire("CONFIRMACIÓN", "¡Información agregada correctamente!", "success");
      
                                }


                            },
                            error: function(xhr) { 

                                swal.fire("ERROR", "Se produjo un error al grabar la información, el archivo seleccionado no puede exceder los 4Mb de tamaño y los archivos permitidos son imágenes JPG, PNG, GIF y PDF", "error");

                            }
                    });
                    
                }


            }); 
            /*******************************/
            /*          FIN GRABAR         */
            /*******************************/

            /*******************************/
            /*     CLICK BOTON ELIMINAR    */
            /*******************************/
            $('#table_idiomas tbody').on( 'click', 'a.mt-sweetalert', function () {
                
                    var data = $('#table_idiomas').DataTable().row( $(this).parents('tr') ).data();
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
                                url: BASE_URL + 'Idiomas/eliminar',
                                data:{ idiomaId : data['idiomaId'] },
                                success:function(data){

                                    if(data){
                                        swal.fire("CONFIRMACIÓN","El registro ha sido eliminado.","success")
                                        $('#table_idiomas').DataTable().row(rowToDelete).remove().draw();    
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
                    url: BASE_URL + 'Herramientas/listar',
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
                        targets: -2,
                        title: 'Descargar',
                        orderable: false,
                        render: function(data, type, full, meta) {

                            return `<a class="btn btn-danger ver_archivo" target="_blank" href="` + BASE_URL + `assets/uploads/herramientas/` + full['inforRutaArchivoCertificacion'] + `" ><i class="fas fa-download"></i> Descargar </a>`;
                        },
                    },     
                    {
                        targets: -1,
                        title: 'Acciones',
                        orderable: false,
                        render: function(data, type, full, meta) {

                            return `<a class="btn btn-danger mt-sweetalert" href="javascript:;" data-id="` + full['informaticaId'] + `"><i class="fas fa-trash"></i> Eliminar </a>`;
                        },
                    }  
                ],
            });

            /***********************/
            /*    INICIO GRABAR    */
            /***********************/  
            $('#btnGrabarHerramientas').on('click', function(e){
     
                var inforEspecialidadCurso = $("#inforEspecialidadCurso");
                var inforCentroEstudio = $("#inforCentroEstudio");
                var inforNivel = $("#inforNivel");
                var inforFechaCertificacion = $("#inforFechaCertificacion");
                var inforRutaArchivoCertificacion = $("#inforRutaArchivoCertificacion");

                if( inforEspecialidadCurso.val() == "" || 
                    inforCentroEstudio.val() == "" || 
                    inforNivel.val() == "" || 
                    inforFechaCertificacion.val() == "" || 
                    inforRutaArchivoCertificacion.val() == "" ){
                    
                    swal.fire("ERROR", "¡Completa todos los campos para poder grabar!", "error");
                    
                }else{

                    var formDataHerramientas = new FormData();

                    formDataHerramientas.append('docenteId', docenteId);
                    formDataHerramientas.append('inforEspecialidadCurso', $("#inforEspecialidadCurso").val());
                    formDataHerramientas.append('inforCentroEstudio', $("#inforCentroEstudio").val());
                    formDataHerramientas.append('inforNivel', $("#inforNivel").val());
                    formDataHerramientas.append('inforFechaCertificacion', $("#inforFechaCertificacion").val());
                    formDataHerramientas.append('inforRutaArchivoCertificacion', $("#inforRutaArchivoCertificacion")[0].files[0]);

                    $.ajax({url: BASE_URL + 'Herramientas/agregar',
                             type:"post",
                             data: formDataHerramientas, //this is formData
                             processData:false,
                             contentType:false,
                             cache:false,
                             async:false,
                             success: function(data){


                                if(data.status == "error"){

                                    swal.fire("ERROR", "Se produjo un error al grabar la información, el archivo seleccionado no puede exceder los 4Mb de tamaño y los archivos permitidos son imágenes JPG, PNG, GIF y PDF", "error");

                                }else{

                                    $('#table_herramientas').DataTable().ajax.reload();     

                                    inforEspecialidadCurso.val("");
                                    inforCentroEstudio.val("");
                                    inforNivel.val("");
                                    inforRutaArchivoCertificacion.val("")
                                    inforFechaCertificacion.datepicker('setDate', null);

                                    swal.fire("CONFIRMACIÓN", "¡Información agregada correctamente!", "success");
      
                                }
                            },
                            error: function(xhr) { 

                                swal.fire("ERROR", "Se produjo un error al grabar la información, el archivo seleccionado no puede exceder los 4Mb de tamaño y los archivos permitidos son imágenes JPG, PNG, GIF y PDF", "error");

                            }
                    });
                    
                }


            }); 
            /*******************************/
            /*          FIN GRABAR         */
            /*******************************/

            /*******************************/
            /*     CLICK BOTON ELIMINAR    */
            /*******************************/
            $('#table_herramientas tbody').on( 'click', 'a.mt-sweetalert', function () {
                
                    var data = $('#table_herramientas').DataTable().row( $(this).parents('tr') ).data();
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
                                url: BASE_URL + 'Herramientas/eliminar',
                                data:{ informaticaId : data['informaticaId'] },
                                success:function(data){

                                    if(data){
                                        swal.fire("CONFIRMACIÓN","El registro ha sido eliminado.","success")
                                        $('#table_herramientas').DataTable().row(rowToDelete).remove().draw();    
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
                    url: BASE_URL + 'Reconocimientos/listar',
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
                    {data: 'recRutaArchivoCertificacion'},
                    {data: 'Acciones'},
                ],
                columnDefs: [
                    {
                        targets: -2,
                        title: 'Descargar',
                        orderable: false,
                        render: function(data, type, full, meta) {

                            return `<a class="btn btn-danger ver_archivo" target="_blank" href="` + BASE_URL + `assets/uploads/reconocimientos/` + full['recRutaArchivoCertificacion'] + `" ><i class="fas fa-download"></i> Descargar </a>`;
                        },
                    },     
                    {
                        targets: -1,
                        title: 'Acciones',
                        orderable: false,
                        render: function(data, type, full, meta) {

                            return `<a class="btn btn-danger mt-sweetalert" href="javascript:;" data-id="` + full['reconocimientoId'] + `"><i class="fas fa-trash"></i> Eliminar </a>`;
                        },
                    } 
                    
                ],
            });


            /***********************/
            /*    INICIO GRABAR    */
            /***********************/  
            $('#btnGrabarReconocimientos').on('click', function(e){
     
                var recInstPremio = $("#recInstPremio");
                var recInstitucion = $("#recInstitucion");
                var recInstFecha = $("#recInstFecha");
                var recRutaArchivoCertificacion = $("#recRutaArchivoCertificacion");

                if( recInstPremio.val() == "" || 
                    recInstitucion.val() == "" || 
                    recInstFecha.val() == "" || 
                    recRutaArchivoCertificacion.val() == "" ){
                    
                    swal.fire("ERROR", "¡Completa todos los campos para poder grabar!", "error");
                    
                }else{

                    var formDataReconocimientos = new FormData();

                    formDataReconocimientos.append('docenteId', docenteId);
                    formDataReconocimientos.append('recInstPremio', $("#recInstPremio").val());
                    formDataReconocimientos.append('recInstitucion', $("#recInstitucion").val());
                    formDataReconocimientos.append('recInstFecha', $("#recInstFecha").val());
                    formDataReconocimientos.append('recRutaArchivoCertificacion', $("#recRutaArchivoCertificacion")[0].files[0]);

                    $.ajax({url: BASE_URL + 'Reconocimientos/agregar',
                             type:"post",
                             data: formDataReconocimientos, //this is formData
                             processData:false,
                             contentType:false,
                             cache:false,
                             async:false,
                             success: function(data){


                                if(data.status == "error"){

                                    swal.fire("ERROR", "Se produjo un error al grabar la información, el archivo seleccionado no puede exceder los 4Mb de tamaño y los archivos permitidos son imágenes JPG, PNG, GIF y PDF", "error");

                                }else{

                                    $('#table_reconocimientos').DataTable().ajax.reload();     

                                    recInstPremio.val("");
                                    recInstitucion.val("");
                                    recRutaArchivoCertificacion.val("")
                                    recInstFecha.datepicker('setDate', null);

                                    swal.fire("CONFIRMACIÓN", "¡Información agregada correctamente!", "success");
      
                                }
                            },
                            error: function(xhr) { 

                                swal.fire("ERROR", "Se produjo un error al grabar la información, el archivo seleccionado no puede exceder los 4Mb de tamaño y los archivos permitidos son imágenes JPG, PNG, GIF y PDF", "error");

                            }
                    });
                    
                }


            }); 
            /*******************************/
            /*          FIN GRABAR         */
            /*******************************/

            /*******************************/
            /*     CLICK BOTON ELIMINAR    */
            /*******************************/
            $('#table_reconocimientos tbody').on( 'click', 'a.mt-sweetalert', function () {
                
                    var data = $('#table_reconocimientos').DataTable().row( $(this).parents('tr') ).data();
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
                                url: BASE_URL + 'Reconocimientos/eliminar',
                                data:{ reconocimientoId : data['reconocimientoId'] },
                                success:function(data){

                                    if(data){
                                        swal.fire("CONFIRMACIÓN","El registro ha sido eliminado.","success")
                                        $('#table_reconocimientos').DataTable().row(rowToDelete).remove().draw();    
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
                    url: BASE_URL + 'Investigaciones/listar',
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
                    {data: 'invesNroOrcid'},
                    {data: 'invesRutaArchivoInvestigacion'},
                    {data: 'Acciones'},
                ],
                columnDefs: [

                    {
                        targets: -2,
                        title: 'Archivos',
                        orderable: false,
                        render: function(data, type, full, meta) {

                            return `<a class="btn btn-danger ver_archivo" target="_blank" href="` + BASE_URL + `assets/uploads/investigaciones/` + full['invesRutaArchivoInvestigacion'] + `" ><i class="fas fa-download"></i> Descargar </a>`;
                        },
                    },     
                    {
                        targets: -1,
                        title: 'Acciones',
                        orderable: false,
                        render: function(data, type, full, meta) {

                            return `<a class="btn btn-danger mt-sweetalert" href="javascript:;" data-id="` + full['reconocimientoId'] + `"><i class="fas fa-trash"></i> Eliminar </a>`;
                        },
                    } 
                    
                ],
            });


            /***********************/
            /*    INICIO GRABAR    */
            /***********************/  
            $('#btnGrabarInvestigaciones').on('click', function(e){
     
                var invesTitulo = $("#invesTitulo");
                var invesTipoPublicacion = $("#invesTipoPublicacion");
                var invesNroOrcid = $("#invesNroOrcid");
                var invesFecha = $("#invesFecha");
                var invesRutaArchivoInvestigacion = $("#invesRutaArchivoInvestigacion");

                if( invesTitulo.val() == "" || 
                    invesTipoPublicacion.val() == "" || 
                    invesNroOrcid.val() == "" || 
                    invesFecha.val() == "" || 
                    invesRutaArchivoInvestigacion.val() == "" ){
                    
                    swal.fire("ERROR", "¡Completa todos los campos para poder grabar!", "error");
                    
                }else{

                    var formDataInvestigaciones = new FormData();

                    formDataInvestigaciones.append('docenteId', docenteId);
                    formDataInvestigaciones.append('invesTitulo', $("#invesTitulo").val());
                    formDataInvestigaciones.append('invesNroOrcid', $("#invesNroOrcid").val());
                    formDataInvestigaciones.append('invesTipoPublicacion', $("#invesTipoPublicacion").val());
                    formDataInvestigaciones.append('invesFecha', $("#invesFecha").val());
                    formDataInvestigaciones.append('invesRutaArchivoInvestigacion', $("#invesRutaArchivoInvestigacion")[0].files[0]);

                    $.ajax({url: BASE_URL + 'Investigaciones/agregar',
                             type:"post",
                             data: formDataInvestigaciones, //this is formData
                             processData:false,
                             contentType:false,
                             cache:false,
                             async:false,
                             success: function(data){


                                if(data.status == "error"){

                                    swal.fire("ERROR", "Se produjo un error al grabar la información, el archivo seleccionado no puede exceder los 4Mb de tamaño y los archivos permitidos son imágenes JPG, PNG, GIF y PDF", "error");

                                }else{

                                    $('#table_investigaciones').DataTable().ajax.reload();     

                                    invesTitulo.val("");
                                    invesNroOrcid.val("");
                                    invesTipoPublicacion.val("");
                                    invesRutaArchivoInvestigacion.val("")
                                    invesFecha.datepicker('setDate', null);

                                    swal.fire("CONFIRMACIÓN", "¡Información agregada correctamente!", "success");
      
                                }
                            },
                            error: function(xhr) { 

                                swal.fire("ERROR", "Se produjo un error al grabar la información, el archivo seleccionado no puede exceder los 4Mb de tamaño y los archivos permitidos son imágenes JPG, PNG, GIF y PDF", "error");

                            }
                    });
                    
                }


            }); 
            /*******************************/
            /*          FIN GRABAR         */
            /*******************************/

            /*******************************/
            /*     CLICK BOTON ELIMINAR    */
            /*******************************/
            $('#table_investigaciones tbody').on( 'click', 'a.mt-sweetalert', function () {
                
                    var data = $('#table_investigaciones').DataTable().row( $(this).parents('tr') ).data();
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
                                url: BASE_URL + 'Investigaciones/eliminar',
                                data:{ investigacionesId : data['investigacionesId'] },
                                success:function(data){

                                    if(data){
                                        swal.fire("CONFIRMACIÓN","El registro ha sido eliminado.","success")
                                        $('#table_investigaciones').DataTable().row(rowToDelete).remove().draw();    
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
                    url: BASE_URL + 'Asesorias/listar',
                    data: function ( d ) {
                        d.docenteId = $('#docenteId').val();
                    },
                    type: "POST"
                },
                columns: [
                    {data: 'tesisId'},
                    {data: 'tesNombreTesis'},
                    {data: 'tesTipo'},
                    {data: 'tesNivel'},
                    {data: 'tesNroResolucion'},
                    {data: 'Acciones'},
                ],
                columnDefs: [

                    {
                        targets: -1,
                        title: 'Acciones',
                        orderable: false,
                        render: function(data, type, full, meta) {

                            return `<a class="btn btn-danger mt-sweetalert" href="javascript:;" data-id="` + full['tesisId'] + `"><i class="fas fa-trash"></i> Eliminar </a>`;
                        },
                    } 
                    
                ],
            });

            /*******************************************/
            /*              GRABAR GRADOS              */
            /*******************************************/
            $('#btnGrabarAsesorias').on('click', function(e){

     
                var tesNombreTesis = $("#tesNombreTesis");
                var tesTipo = $("#tesTipo");
                var tesNivel = $("#tesNivel");
                var tesNroResolucion = $("#tesNroResolucion");

                if( tesNombreTesis.val() == "" || tesTipo.val() == "" || tesNivel.val() == "" || tesNroResolucion.val() == ""){
                    
                    swal.fire("ERROR", "¡Completa todos los campos para poder grabar!", "error");
                    
                }else{

                        $.ajax({dataType:'JSON',
                            type: 'POST',
                            url: BASE_URL + 'Asesorias/agregar',
                            data : {docenteId: docenteId,
                                     tesNombreTesis: tesNombreTesis.val(),
                                     tesTipo: tesTipo.val(),
                                     tesNivel: tesNivel.val(),
                                     tesNroResolucion: tesNroResolucion.val()
                                    },
                            success:function(response){
                                                                                    
                                $('#table_asesorias').DataTable().ajax.reload();     

                                tesNombreTesis.val("");
                                tesTipo.val("");
                                tesNivel.val("");
                                tesNroResolucion.val("");

                            },
                            error: function(xhr) { 
                                console.log(xhr.statusText + xhr.responseText);
                            }
                        });

                }


            }); 
            /*******************************************/
            /*           FIN GRABAR GRADOS             */
            /*******************************************/

            /*******************************/
            /*     CLICK BOTON ELIMINAR    */
            /*******************************/
            $('#table_asesorias tbody').on( 'click', 'a.mt-sweetalert', function () {
                
                    var data = $('#table_asesorias').DataTable().row( $(this).parents('tr') ).data();
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
                                url: BASE_URL + 'Asesorias/eliminar',
                                data:{ tesisId : data['tesisId'] },
                                success:function(data){

                                    if(data){
                                        swal.fire("CONFIRMACION!","El registro ha sido eliminado.","success")
                                        $('#table_asesorias').DataTable().row(rowToDelete).remove().draw();    
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


    




    /*******************************************/
    /*          CARGAR SELECT PROVINCIA        */
    /*******************************************/       
    var initProvincia = function(idDepa){
            
            $.ajax({
                dataType:'JSON',
                type: 'POST',
                url: BASE_URL + 'Provincia/listar_provincias_x_depa',
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
                url: BASE_URL + 'Distrito/listar_distritos_x_prov',
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
                registroDina: {
                    required: false
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

                    var autosave    = $(element).data("autosave");

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
                    if ((this.checkable(element) || this.optional(element)) && autosave) {
                        
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
                    
                    if (!this.checkable(element) && (element.name in this.submitted || !this.optional(element)) && autosave) {

                        //SI SE SACO EL FOCUS Y ES VALIDO, SE GRABA
                        if($(element).val() != "") {

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

                        }
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

            initWizard(); 
            initFormFields();
            initValidation();
            initSubmit();

            //REPEATERS
            initCargos();
            initGrados();
            initExperienciaDocencia();
            initExperienciaProfesional();
            initHerramientas();
            initReconocimientos();
            initInvestigacion();
            initAsesoria();
            initIdiomas();

            


            



        }
    };
}();


jQuery(document).ready(function() { 
    Registro.init();
});