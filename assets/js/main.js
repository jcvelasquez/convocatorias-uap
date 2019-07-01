//var BASE_URL = "https://dev.foodbox.pe/";
//var BASE_URL = "http://10.100.50.75/convocatorias-uap/";
var BASE_URL = "http://localhost/convocatorias-uap/";
//var BASE_URL = "http://convocatorias.uap.edu.pe/";

"use strict";
var MainApp = function() {

	var initApp = function(){
   		//$(document).ajaxStart($.blockUI).ajaxStop($.unblockUI);     
   	}

	return {

		//main function to initiate the module
		init: function() {
			initApp();
			//initAjaxFileUpload();
		}

	};

}();

jQuery(document).ready(function() {
	MainApp.init();
});


