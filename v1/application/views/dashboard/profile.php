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
  <script type="text/javascript">
  	$(document).ready(function() {
	  $('[data-toggle=offcanvas]').click(function() {
	    $('.row-offcanvas').toggleClass('active');
	  });
	});
  </script>
  