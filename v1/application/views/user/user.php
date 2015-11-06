<div id="main">
	<div class="col-md-12">
		<table class="table table-hover">
		  <thead>
		    <tr>
		      <th>#</th>
		      <th>NIM</th>
		      <th>Nama</th>
		      <th>No Hp</th>
		      <th>BBM PIN</th>
		      <th>E-Mail</th>
		    </tr>
		  </thead>
		  <tbody>
		        <!-- Menampilkan Tabel Perbaris -->
		        <?php $no=0; foreach ($total as $list){ $no++ ?>
		    <tr>
		      <td><?php echo $no ?></td>
		      <td><?php echo $list['nim'] ?></td>
		      <td><?php echo $list['nama']?></td>
		      <td><?php echo $list['hp'] ?></td>
		      <td><?php echo $list['bbm'] ?></td>
		      <td><?php echo $list['email'] ?></td>
		   	</tr>
		   		<?php } ?>  
		  </tbody>
		</table>
	</div>
</div>