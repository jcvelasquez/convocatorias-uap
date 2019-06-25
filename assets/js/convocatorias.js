"use strict";
var DatatableConvocatorias = function() {

	// Base elements
    var form_registro;
    var validator;
    var primaryKey;
    var error;
    var success;

	var initSelect = function(){

        $('#select_cursos').select2({
            placeholder: "Selecciona los cursos para esta escuela"
        });

         $('#sedes_sedeId').select2({
            placeholder: "Selecciona una sede"
        });

         $('#convoVacantes').TouchSpin({
            buttondown_class: 'btn btn-secondary',
            buttonup_class: 'btn btn-secondary',
            min: 1,
            max: 100,
            step: 1,
            boostat: 5,
            maxboostedstep: 10,
        });

        var arrows = {
            leftArrow: '<i class="la la-angle-left"></i>',
            rightArrow: '<i class="la la-angle-right"></i>'
        }

        $('#convoFechaInicio, #convoFechaFin').datepicker({
            todayHighlight: true,
            orientation: "bottom left",
            templates: arrows
        });


	}

	var initContent = function(){

			if (primaryKey != '' && primaryKey != 'nuevo' && typeof(primaryKey) != 'undefined') {

				 $.ajax({
					dataType:'JSON',
					type: 'POST',
					url: BASE_URL + 'convocatoria_x_id',
					data : {convocatoriaId: primaryKey},
					success:function(data){

						//var cursos = data.cursos;
						var ids = [];

						$('#select_cursos').val(ids).trigger('change');
						$('#select_sede').val(data.sedes_sedeId).trigger('change');
						$('#escuelaNombre').val(data.convoNombre);
						$('#convoDescripcion').val(data.convoDescripcion);
						$('#convoVacantes').val(data.convoVacantes);
						$('#convoFechaInicio').datepicker('update', data.convoFechaInicio);
						$('#convoFechaFin').datepicker('update', data.convoFechaFin);
						$('#convoEstado').val(data.convoEstado).trigger('change');

					},
					error: function(xhr) { 
						console.log(xhr.statusText + xhr.responseText);
					}
				});
			
			}

	}
	

	var initTable = function() {

		var table = $('#table_convocatorias');

		// begin first table
		table.DataTable({
			responsive: true,
			processing: true,
			serverSide: true,
			paging:   true,
			searching:   false,
			ajax: BASE_URL + 'admin/convocatorias/listar',
			columns: [
				{data: 'convocatoriaId'},
				{data: 'convoNombre'},
				{data: 'sedeNombre'},
				{data: 'convoFechaInicio'},
				{data: 'convoFechaFin'},
				{data: 'convoVacantes'},
				{data: 'convoEstado'},
				{data: 'Acciones', responsivePriority: -1},
			],
			columnDefs: [
				{
					targets: -1,
					title: 'Acciones',
					orderable: false,
					render: function(data, type, full, meta) {

						return `
                         <span class="dropdown">
                            <a href="#" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown" aria-expanded="true">
                              <i class="fa fa-tools"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="` + BASE_URL + 'admin/convocatorias/editar/' + full['convocatoriaId'] + `"><i class="la la-edit"></i> Editar </a>
                                <a class="dropdown-item" href="#"><i class="la la-leaf"></i> Eliminar </a>
                                <a class="dropdown-item" href="#"><i class="la la-print"></i> Ver escuelas</a>
                            </div>
                        </span>`;
					},
				},
				{
					targets: -2,
					render: function(data, type, full, meta) {
						var status = {
							0: {'title': 'INACTIVA', 'state': 'danger'},
							1: {'title': 'ACTIVA', 'state': 'success'},
						};
						if (typeof status[data] === 'undefined') {
							return data;
						}
						return '<span class="kt-badge kt-badge--' + status[data].state + ' kt-badge--inline kt-badge--pill">' + status[data].title + '</span>&nbsp;';
					},
				},
				{
					targets: -7,
					render: function(data, type, full, meta) {

						return '<a href="' + BASE_URL + 'admin/convocatorias/editar/' + full['convocatoriaId'] + '">' + full['convoNombre'] + ' </a>';
					},
				}
				
			],
		});
		
	};


	//FIN DE INIT VALIDATION
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
                sedes_sedeId: {
                    required: true
                },   
                escuelaNombre: {
                    required: true
                },  
                escuelaEstado: {
                    required: true
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

            },
            // Submit valid form
            submitHandler: function (form) {
                
            }
        });   
    }
    //FIN DE INIT VALIDATION

	return {

		//main function to initiate the module
		init: function() {


			form_registro = $('#form_registro');

            error = $('.alert-warning', form_registro);
            success = $('.alert-success', form_registro);

            primaryKey = $('#primaryKey').val();

			initTable();
			initSelect();
			initContent();

		},

	};

}();

//----------------------------------------------------
//FUNCIONA PARA LA PAGINA DE FRONTEND SOLAMENTE
//----------------------------------------------------
var ConvocatoriasDocentes = function() {

	// Base elements
    var form_registro;
    var validator;
    var primaryKey;
    var error;
    var success;

	var initTable = function() {

		var table = $('#table_convocatorias_docentes');

		// begin first table
		table.DataTable({
			responsive: true,
			//searchDelay: 500,
			processing: true,
			serverSide: false,
			paging:   false,
			searching:   false,
			ajax: BASE_URL + 'admin/convocatorias/listar',
			columns: [
				{data: 'convocatoriaId'},
				{data: 'convoNombre'},
				{data: 'sedeNombre'},
				{data: 'convoEstado'},
				{data: 'convoFechaFin'},				
				{data: '', responsivePriority: -1},
			],
			columnDefs: [
				{
					targets: -1,
					title: '',
					orderable: false,
					render: function(data, type, full, meta) {

						return '<a href="' + BASE_URL + 'convocatorias/seleccionar/' + full['convocatoriaId'] + '" class="btn btn-primary" aria-expanded="true"> Postular </a>';
					},
				},
				{
					targets: -3,
					render: function(data, type, full, meta) {
						var status = {
							0: {'title': 'INACTIVA', 'state': 'danger'},
							1: {'title': 'ACTIVA', 'state': 'success'},
						};
						if (typeof status[data] === 'undefined') {
							return data;
						}
						return '<span class="kt-badge kt-badge--' + status[data].state + ' kt-badge--inline kt-badge--pill">' + status[data].title + '</span>&nbsp;';
					},
				}
			],
		});
	};


	
	return {

		//main function to initiate the module
		init: function() {

			initTable();

		},

	};

}();

