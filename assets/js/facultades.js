"use strict";
var DatatableFacultades = function() {

	var initTable = function() {
		var table = $('#table_facultades');

		// begin first table
		table.DataTable({
			responsive: true,
			//searchDelay: 500,
			processing: true,
			serverSide: false,
			paging:   true,
			searching:   false,
			ajax: BASE_URL + 'admin/facultades/listar',
			columns: [
				{data: 'facultadId'},
				{data: 'facultadNombre'},
				{data: 'facultadEstado'},
				{data: 'ACCIONES', responsivePriority: -1},
			],
			columnDefs: [
				{
					targets: -1,
					title: 'Actions',
					orderable: false,
					render: function(data, type, full, meta) {
						return `
                         <span class="dropdown">
                            <a href="#" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown" aria-expanded="true">
                              <i class="la la-ellipsis-h"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#"><i class="la la-edit"></i> Editar </a>
                                <a class="dropdown-item" href="#"><i class="la la-leaf"></i> Eliminar </a>
                                <a class="dropdown-item" href="#"><i class="la la-print"></i> Ver escuelas</a>
                            </div>
                        </span>

                        <a title="Delete" class="btn btn-sm btn-clean btn-icon btn-icon-md">
							<i class="la la-edit"></i>
						</a>
						<a title="Delete" class="btn btn-sm btn-clean btn-icon btn-icon-md">
							<i class="la la-trash"></i>
						</a>

                        `;
					},
				},
				/*{
					targets: -3,
					render: function(data, type, full, meta) {
						var status = {
							1: {'title': 'Pending', 'class': 'kt-badge--brand'},
							2: {'title': 'Delivered', 'class': ' kt-badge--danger'},
							3: {'title': 'Canceled', 'class': ' kt-badge--primary'},
							4: {'title': 'Success', 'class': ' kt-badge--success'},
							5: {'title': 'Info', 'class': ' kt-badge--info'},
							6: {'title': 'Danger', 'class': ' kt-badge--danger'},
							7: {'title': 'Warning', 'class': ' kt-badge--warning'},
						};
						if (typeof status[data] === 'undefined') {
							return data;
						}
						return '<span class="kt-badge ' + status[data].class + ' kt-badge--inline kt-badge--pill">' + status[data].title + '</span>';
					},
				},*/
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

jQuery(document).ready(function() {
	DatatableFacultades.init();
});