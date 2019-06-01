// Class definition
var KTFormRepeater = function() {



    // Private functions
    var grados = function() {
        $('#kt_repeater_grados').repeater({
            initEmpty: false,
           
            defaultValues: {
                'text-input': 'foo'
            },
             
            show: function() {
                $(this).slideDown();                               
            },

            hide: function(deleteElement) {                  
                 if(confirm('Are you sure you want to delete this element?')) {
                    $(this).slideUp(deleteElement);
                }                                             
            }      
        });
    }

    // Private functions
    var cargos = function() {
        $('#kt_repeater_cargos').repeater({
            initEmpty: false,
           
            defaultValues: {
                'text-input': 'foo'
            },
             
            show: function() {
                $(this).slideDown();                               
            },

            hide: function(deleteElement) {                  
                 if(confirm('Are you sure you want to delete this element?')) {
                    $(this).slideUp(deleteElement);
                }                                             
            }      
        });
    }

    // Private functions
    var experiencia = function() {
        $('#kt_repeater_experiencia').repeater({
            initEmpty: false,
           
            defaultValues: {
                'text-input': 'foo'
            },
             
            show: function() {
                $(this).slideDown();                               
            },

            hide: function(deleteElement) {                  
                 if(confirm('Are you sure you want to delete this element?')) {
                    $(this).slideUp(deleteElement);
                }                                             
            }      
        });
    }

    // Private functions
    var especializacion = function() {
        $('#kt_repeater_especializacion').repeater({
            initEmpty: false,
           
            defaultValues: {
                'text-input': 'foo'
            },
             
            show: function() {
                $(this).slideDown();                               
            },

            hide: function(deleteElement) {                  
                 if(confirm('Are you sure you want to delete this element?')) {
                    $(this).slideUp(deleteElement);
                }                                             
            }      
        });
    }

    

    return {
        // public functions
        init: function() {
 
            cargos();
            grados();
            experiencia();
            especializacion();
        }
    };
}();

jQuery(document).ready(function() {
    KTFormRepeater.init();
});

    