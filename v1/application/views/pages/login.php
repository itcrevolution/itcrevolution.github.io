 <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Login</h2>
                    <h3 class="section-subheading text-muted">Login for more info about ITC.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form method="POST" action="home/login" id="contactForm" novalidate id="login">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="data[username]" placeholder="Username *" id="name">
                                    
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" name="data[password]" placeholder="Password *" id="email" required data-validation-required-message="Please enter your password.">
                                    
                                </div>
                               </div>
                            <div class="row">
                                <div class="col-lg-12" align="center" >
                                	<div class="form-group">
	                                	<button type="submit" class="btn btn-xl">Login</button>
	                                </div>
                                </div>
                            </div>
                         </div>
                    </form>
                </div>
            </div>
        </div>
</section>