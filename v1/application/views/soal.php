<body>
    <div class="modal fade" id="reg" tabindex="-1" role="form" aria-labelledby="myModalLabel" aria-hidden="true">
  	<div class="modal-dialog">
            <div class="modal-content">
      		<div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Registrasi Anggota ITC</h4>
      		</div>
      		
            <div class="modal-body">
            
	    		<form action="add_soal" method="post" id="reg-itc">
	            	
	            	<div class="form-group">
				        <label>Piliha Kategori Soal</label>
				        <label for="single_select">Select list</label>
				        <select id="single_select" class="form-control" name="soal[kategori_soal]">
				            <option value="Web Programing">Web Programing</option>
				            <option value="Web Disain">Web Disain</option>
				            <option value="Multimedia">Multimedia</option>
				        </select>
				    </div>
	            	<div class="form-group">
		    			<label>Creator</label>
		    			<input type="text" class="form-control" name="soal[creator]" id="nama">
	                </div>
	                <div class="form-group">
		    			<label>Soal</label>
		    			<textarea class="form-control" placeholder="Tulis Soal Yang Berubungan Degan Kategori" name="soal[soal]" id="nim"></textarea>
	               	</div>
	               	<div class="form-group">
		    			<label>Pilihan A</label>
		    			<input type="text" class="form-control" placeholder="Pilihan A" name="soal[ja]" id="tmp_lhr">
	               	</div>
	               	<div class="form-group">
		    			<label>Pilihan B</label>
		    			<input type="text" class="form-control" placeholder="Pilihan B" name="soal[jb]" id="tmp_lhr">
	               	</div>
	               	<div class="form-group">
		    			<label>Pilihan C</label>
		    			<input type="text" class="form-control" placeholder="Pilihan C" name="soal[jc]" id="tmp_lhr">
	               	</div>
	               	<div class="form-group">
		    			<label>Pilihan D</label>
		    			<input type="text" class="form-control" placeholder="Pilihan D" name="soal[jd]" id="tmp_lhr">
	               	</div>
	               	<div class="form-group">
		    			<label>Jawaban</label>
		    			<input type="text" class="form-control" placeholder="Jawab" name="soal[jbnr]" id="tmp_lhr">
	               	</div>
	               	
	               	
	                <button class="btn btn-primary" type="submit">Tambah Soal</button>
	  			</form>			
            
            
            </div>
            

  		</div>
	</div>
 
</body>