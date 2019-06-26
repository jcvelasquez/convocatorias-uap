"use strict";
var DatatableEscuelas = function() {


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

        $('#facultades_facultadId').select2({
            placeholder: "Selecciona una facultad"
        });

        $('#btnGrabar').on('click', function(){
        	form_registro.valid();
        });
        

	}

	var initContent = function(){

			if (primaryKey != '' && primaryKey != 'nuevo' && typeof(primaryKey) != 'undefined') {


				 $.ajax({
					dataType:'JSON',
					type: 'POST',
					url: BASE_URL + 'escuela_x_id',
					data : {escuelaId: primaryKey},
					success:function(data){

						console.log(data);

						var cursos = data.cursos;
						var ids = [];
                 
	                    for( var i = 0; i<cursos.length; i++){ ids.push(cursos[i]['id']); }

						$('#select_cursos').val(ids).trigger('change');
						$('#select_sede').val(data.sedes_sedeId).trigger('change');
						$('#escuelaNombre').val(data.escuelaNombre);
						
		
					},
					error: function(xhr) { 
						console.log(xhr.statusText + xhr.responseText);
					}
				});
			
			}

	}
	

	var initTable = function() {

		var table = $('#table_escuelas');

		// begin first table
		table.DataTable({
			responsive: true,
			//searchDelay: 500,
			processing: true,
			serverSide: true,
			paging:   false,
			searching:   false,
			ajax: BASE_URL + 'admin/escuelas/listar',
			columns: [
				{data: 'escuelaId'},
				{data: 'escuelaNombre'},
				{data: 'sedeNombre'},
				{data: 'escuelaEstado'},
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
                                <a class="dropdown-item" href="` + BASE_URL + 'admin/escuelas/editar/' + full['escuelaId'] + `"><i class="la la-edit"></i> Editar </a>
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
					targets: -4,
					render: function(data, type, full, meta) {

						return '<a href="' + BASE_URL + 'admin/escuelas/editar/' + full['escuelaId'] + '">' + full['escuelaNombre'] + ' </a>';
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
                facultades_facultadId: {
                    required: true
                },  
                escuelaEstado: {
                    required: true
                },  
                select_cursos: {
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

                    //KTUtil.scrollTop();

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
			initValidation();

		},

	};

}();

jQuery(document).ready(function() {
	DatatableEscuelas.init();
});