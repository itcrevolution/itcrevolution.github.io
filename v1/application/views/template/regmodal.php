<body>
    <div class="modal fade" id="reg" tabindex="-1" role="form" aria-labelledby="myModalLabel" aria-hidden="true">
  	<div class="modal-dialog">
            <div class="modal-content">
      		<div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Registrasi Anggota ITC</h4>
      		</div>
      		
            <div class="modal-body">
	    		<form action="home/register" method="post" id="reg-itc">
	            	<div class="form-group">
		    			<label>Full Name</label>
		    			<input type="text" class="form-control" name="data[nama]" id="nama" placeholder="Full Name..">
	                </div>
	                <div class="form-group">
		    			<label>NIM</label>
		    			<input type="text" class="form-control" placeholder="Nomer Induk Mahasiswa" name="data[nim]" id="nim">
	               	</div>
	               	<div class="form-group">
		    			<label>Tempat Lahir</label>
		    			<input type="text" class="form-control" placeholder="Tempat lahir" name="data[tmp_lhr]" id="tmp_lhr">
	               	</div>
	                <div class="form-group">
		    			<label>Tanggal Lahir</label>
		    			<input type="date" class="form-control" placeholder="[Tanggal]-[Bulan]-[Tahun]" name="data[tgl_lhr]" id="tgl_lhr">
	               	</div>
	               	<div class="form-group">
		    			<label>Tempat Tinggal Sekarag</label>
		    			<input type="text" class="form-control" placeholder="Sekarang Tinggal Di..." name="data[tmp_skg]" id="tmp_skg">
	               	</div>
	               	<div class="form-group">
		    			<label>Alamat</label>
		    			<input type="text" class="form-control" placeholder="Alamat...." name="data[alamat]" id="alamat">
	               	</div>
	                <div class="form-group">
		 				<label>Phone Number</label>
		    			<input type="number" class="form-control" placeholder="No Hp yang Aktif" name="data[hp]" id="hp">
	                </div>
	           		<div class="form-group">
		 				<label>BBM</label>
		    			<input type="text" class="form-control" placeholder="BBM Pin.." name="data[bbm]" id="bbm">
	                </div>
				    <div class="form-group">
		 				<label>Email</label>
		    			<input type="email" class="form-control" placeholder="Usahakan Gmail" name="data[email]" id="email">
	                </div>
				    <div class="form-group">
				        <label for="single_select">Select list</label>
				        <select id="single_select" class="form-control" name="data[id_prog]">
				            <option value="1">Teknik Informatika</option>
				            <option value="2">Sistem Informasi</option>
				            <option value="3">Ilmu Komputer</option>
				            
				        </select>
				    </div>
				    	   
	            	<div class="form-group">
		    			<label>Username</label>
		    			<input type="text" class="form-control" placeholder="Input Username" name="data[username]" id="user">
	                </div>
	                <div class="form-group">
		    			<label>Password</label>
		    			<input type="password" class="form-control" placeholder="Password" name="data[password]" id="pass">
	                </div>
	                <div class="form-group">
		    			<label>Re Type Password</label>
		    			<input type="password" class="form-control" placeholder="Re-type Password" name="password2" id="pass2">
	                </div>
	                <button class="btn btn-primary" type="submit">Register</button>
	  			</form>			
            </div>
            

  		</div>
	</div>
 
</body>