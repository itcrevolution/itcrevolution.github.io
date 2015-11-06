<div class="modal fade" id="reg" tabindex="-1" role="form" aria-labelledby="myModalLabel" aria-hidden="true">
  	<div class="modal-dialog">
            <div class="modal-content">
      		<div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Registration ITC</h4>
      		</div>
      		
            <div class="modal-body">
	    		<form action="home/register" method="post" id="reg">
	    			
	            	<div class="form-group">
		    			<label>Full Name</label>
		    			<input type="text" class="form-control" name="nama" id="nama" placeholder="Full Name..">
	                </div>
	                <div class="form-group">
		    			<label>NIM</label>
		    			<input type="text" class="form-control" placeholder="Example: G.211.14.0001" name="nim" id="nim">
	               	</div>
	               	<div class="form-group">
		    			<label>Place of Birth</label>
		    			<input type="text" class="form-control" placeholder="Place of Birth" name="tmp_lhr" id="tmp_lhr">
	               	</div>
	                
	               	<div class="form-group">
		                <label>Date of Birth</label>
		                <div class="input-group date">
		                    <input type="text" class="form-control" id="tgl"  data-date-format="YYYY/MM/DD" name="tgl_lhr">
		                    <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
		                    </span>
		                </div>
		            </div>
		            
	               	<div class="form-group">
		    			<label>Current Residence</label>
		    			<input type="text" class="form-control" placeholder="Current Residence" name="tmp_skg" id="tmp_skg">
	               	</div>
	               	<div class="form-group">
		    			<label>Address</label>
		    			<input type="text" class="form-control" placeholder="Jl. Sukarno Hata" name="alamat" id="alamat">
	               	</div>
	                <div class="form-group">
		 				<label>Phone Number</label>
		    			<input type="text" class="form-control" placeholder="Active Phone Number" name="hp" id="hp">
	                </div>
	           		<div class="form-group">
		 				<label>BBM</label>
		    			<input type="text" class="form-control" placeholder="BBM Pin.." name="bbm" id="bbm">
	                </div>
				    <div class="form-group">
		 				<label>Email</label>
		    			<input type="email" class="form-control" placeholder="Gmail Only" name="email" id="email">
	                </div>
				    <div class="form-group">
				        <label for="single_select">Select list</label>
				        <select id="single_select" class="form-control" name="id_prog">
				            <option value=""> --Select Progdi--</option>
				            <option value="1">Teknik Informatika</option>
				            <option value="2">Sistem Informasi</option>
				            <option value="3">Ilmu Komputer</option>
				            
				        </select>
				    </div>
				    	   
	            	<div class="form-group">
		    			<label>Username</label>
		    			<input type="text" class="form-control" placeholder="Input Username" name="username" id="user">
	                </div>
	                <div class="form-group">
		    			<label>Password</label>
		    			<input type="password" class="form-control" placeholder="Password" name="password" id="pass">
	                </div>
	                
	                

	                
	                
	                <button class="btn btn-primary" type="submit">Register</button>
	  				
	  			</form>
	  			    			
            </div>
  		</div>
  	</div>
</div>
<script type="text/javascript">
		            $(function () {
		                $('#tgl').datetimepicker({
		                    pickTime: false
		                });
		            });
		            
		            $(document).ready(function() {
					    $('#reg').bootstrapValidator({
					        message: 'This value is not valid',
					        feedbackIcons: {
					            valid: 'glyphicon glyphicon-ok',
					            invalid: 'glyphicon glyphicon-remove',
					            validating: 'glyphicon glyphicon-refresh'
					        },
					        fields: {
					        	nama:{
									message: 'The name is not valid',
					                validators: {
					                    notEmpty: {
					                        message: 'The full name is required and can\'t be empty'
					                    },
					                    stringLength: {
					                        min: 6,
					                        max: 30,
					                        message: 'The full name must be more than 6 and less than 30 characters long'
					                    },
									}	
								},
								 nim: {
					                message: 'Contoh[G.211.13.0047] x.xxx.xx.xxxx',
					                validators: {
					                    notEmpty: {
					                        message: 'NIM is required and cannot be empty'
					                    },
					                    stringLength: {
					                        min: 13,
					                        max: 13,
					                        message: 'Example [G.211.13.0047] x.xxx.xx.xxxx 13 Character'
					                    },
					                    
					                    
					                }
					            },
					            username: {
					                message: 'The username is not valid',
					                validators: {
					                    notEmpty: {
					                        message: 'The username is required and can\'t be empty'
					                    },
					                    stringLength: {
					                        min: 6,
					                        max: 30,
					                        message: 'The username must be more than 6 and less than 30 characters long'
					                    },
					                    regexp: {
					                        regexp: /^[a-zA-Z0-9_\.]+$/,
					                        message: 'The username can only consist of alphabetical, number, dot and underscore'
					                    },
					                    different: {
					                        field: 'password',
					                        message: 'The username and password cannot be the same as each other'
					                    }
					                }
					            },
					            
					            tgl_lhr: {
					                validators: {
					                    notEmpty: {
					                        message: 'The date is required and cannot be empty'
					                    },
					                   
					                }
					            },

					            tmp_lhr: {
					                validators: {
					                    stringLength: {
					                        min: 4,
					                        max: 30,
					                        message: 'The country must be more than 6 and less than 30 characters long'
					                    },
					                    notEmpty: {
					                        message: 'The country is required and can\'t be empty'
					                    }
					                }
					            },
					            
					            tmp_skg: {
					                validators: {
					                	stringLength: {
					                        min: 4,
					                        max: 30,
					                        message: 'The country must be more than 6 and less than 30 characters long'
					                    },
					                    notEmpty: {
					                        message: 'The country is required and can\'t be empty'
					                    }
					                }
					            },
					         	
					         	alamat: {
					                validators: {
					                    stringLength: {
					                        min: 6,
					                        max: 30,
					                        message: 'The address must be more than 6 and less than 30 characters long'
					                    },
					                    notEmpty: {
					                        message: 'The address is required and can\'t be empty'
					                    }
					                }
					            },
					         					         	            
					            email: {
					                validators: {
					                    notEmpty: {
					                        message: 'The email address is required and can\'t be empty'
					                    },
					                    emailAddress: {
					                        message: 'The input is not a valid email address'
					                    }
					                }
					            },
					            
					            id_prog: {
					                validators: {
					                    notEmpty: {
					                        message: 'The country is required and can\'t be empty'
					                    }
					                }
					            },

					            
					            hp: {
					                validators: {
					                	notEmpty: {
					                        message: 'The phone number is required and can\'t be empty'
					                    },
					                    stringLength: {
					                        min: 10,
					                        max: 13,
					                        message: 'The phone number must be more than 10 and less than 13 digits'
					                    },
					                    digits: {
					                        message: 'The value can contain only digits'
					                    }
					                }
					            },
					            
					            password: {
					                validators: {
					                	stringLength: {
					                        min: 6,
					                        max: 16,
					                        message: 'The password must be more than 6 and less than 16 characters long'
					                    },
					                    notEmpty: {
					                        message: 'The password is required and can\'t be empty'
					                    },
					                    different: {
					                        field: 'username',
					                        message: 'The password cannot be the same as username'
					                    }
					                    
					                }
					            },
					            
					        }
					    });
					});

				</script>            
		        
		