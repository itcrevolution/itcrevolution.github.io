$(document).ready(function(){

	$('#registe').bootstrapValidator({
	live: 'enabled',
        message: 'This value is not valid',
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
    fields: {
            nama: {
         	    validators: {
                    notEmpty: {
                        message: 'The name is required and cannot be empty'
                    }
                }
            },
            
            nim: {
                message: 'Contoh[G.211.13.0047] x.xxx.xx.xxxx',
                validators: {
                    notEmpty: {
                        message: 'The username is required and cannot be empty'
                    },
                    stringLength: {
                        min: 13,
                        max: 13,
                        message: 'Contoh[G.211.13.0047] x.xxx.xx.xxxx 13 Character'
                    },
                    
                    
                }
            },
            hp: {
                validators: {
                    notEmpty: {
                        message: 'The is required and cannot be empty'
                    },
                regexp: {
                        regexp: /^[0-9]+$/,
                        message: 'The username can only consist of alphabetical, number, dot and underscore'
                    },
                }
            },
            
            
       },
			        
});
            
            
            
            
		

}); // end document.ready