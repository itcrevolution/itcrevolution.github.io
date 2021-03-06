 <html>
 	<head>
 		<script type="text/javascript" src="<?php echo base_url('asset/bootstrap/js/jquery-1.10.2.min.js');?>"></script>
        <script type="text/javascript" src="<?php echo base_url('asset/bootstrap/js/bootstrap.min.js');?>"></script>
        <script type="text/javascript" src="<?php echo base_url('//asset/validator/js/bootstrapValidator.min.js');?>"></script>
        <script type="text/javascript" src="<?php echo base_url('//asset/valid.js');?>"></script>
        <script type="text/javascript" src="<?php echo base_url('//asset/d_user.js');?>"></script>
        <link href="<?php echo base_url('asset/bootstrap/css/bootstrap.min.css');?>" rel="stylesheet">
        <link href="<?php echo base_url('asset/bootstrap/css/bootstrap-theme.min.css');?>" rel="stylesheet">
        <link href="<?php echo base_url('//asset/validator/css/bootstrapValidator.min.css');?>" rel="stylesheet">
        <link href="<?php echo base_url('asset/slider.css');?>" rel="stylesheet">
        <link href="<?php echo base_url('asset/bootstrap/css/normalize.css');?>" rel="stylesheet">
 	</head>
 	<body>
 		<div class="navbar navbar-default navbar-fixed-top">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Dashboard Anggota</a>
    </div>
    <div class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a data-toggle="offcanvas">About</a></li>
        <li><?php echo anchor('home/logout','Logout')?></li>
      </ul>
    </div><!--/.nav-collapse -->
</div><!--/.navbar -->

<div class="row-offcanvas row-offcanvas-left">
  <div id="sidebar" class="sidebar-offcanvas">
      <div class="col-md-12">
        <center>
        	<h3>Welcome</h3>
        	<img src="http://localhost/project/images/agus.jpg" alt="..." class="img-circle" height="65px" width="65px">
        	<h2><?php echo $this->session->userdata('nama') ?></h2>
        </center>
        <ul class="nav nav-pills nav-stacked">
          <li class="active"><a href="#">Section</a></li>
          <li><a href="#">Section</a></li>
          <li><a href="#">Section</a></li>
          <li><a href="#">Section</a></li>
          <li><a href="#">Section</a></li>
        </ul>
      </div>
  </div>
  
  <div id="main">
      <div class="col-md-12">
          <table class="table table-hover">
		      <thead>
		        <tr>
		          <th>#</th>
		          <th>NIM</th>
		          <th>Nama</th>
		          <th>PIN</th>
		        </tr>
		      </thead>
		      <tbody>
		            <!-- Menampilkan Tabel Perbaris -->
		            <?php foreach ($total as $list){ ?>
		        <tr>
		          <td><?php echo $list['nim'] ?></td>
		          <td><?php echo $list['nama']?></td>
		          <td><?php echo $list['bbm'] ?></td>
		       	</tr>
		       		<?php } print_r ($total); ?>  
		      </tbody>
    		</table>
          
          
          <h2>Fixed + Fluid Bootstrap Template with Off-canvas Sidebar</h2>
          <div class="row">
              <div class="col-md-12"><div class="well"><p>Shrink the browser width to make the sidebar collapse off canvase.</p></div></div>
          </div>
          <div class="row">
              <div class="col-md-4"><div class="well"><p>4 cols</p></div></div>
              <div class="col-md-4"><div class="well"><p>4 cols</p></div></div>
              <div class="col-md-4"><div class="well"><p>4 cols</p></div></div>
          </div>
          <div class="row">
              <div class="col-lg-6 col-sm-6"><div class="well"><p>6 cols, 6 small cols</p></div></div>
              <div class="col-lg-6 col-sm-6"><div class="well"><p>6 cols, 6 small cols</p></div></div>
          </div>
          <div class="row">
              <div class="col-lg-4 col-sm-6"><div class="well">4 cols, 6 small cols</div></div>
              <div class="col-lg-4 col-sm-6"><div class="well">4 cols, 6 small cols</div></div>
              <div class="col-lg-4 col-sm-12"><div class="well">4 cols, 12 small cols</div></div>
          </div>
      </div>
  </div>
</div><!--/row-offcanvas -->


<script>
	$(".dropdown-menu li a").click(function(){
  var selText = $(this).text();
  $(this).parents('.btn-group').find('.dropdown-toggle').html(selText+' <span class="caret"></span>');
});

	$('.btn-toggle').click(function() {
    $(this).find('.btn').toggleClass('active');  
    
    if ($(this).find('.btn-primary').size()>0) {
    	$(this).find('.btn').toggleClass('btn-primary');
    }
    if ($(this).find('.btn-danger').size()>0) {
    	$(this).find('.btn').toggleClass('btn-danger');
    }
    if ($(this).find('.btn-success').size()>0) {
    	$(this).find('.btn').toggleClass('btn-success');
    }
    if ($(this).find('.btn-info').size()>0) {
    	$(this).find('.btn').toggleClass('btn-info');
    }
    
    $(this).find('.btn').toggleClass('btn-default');
       
});
</script>

 	</body>
 </html>