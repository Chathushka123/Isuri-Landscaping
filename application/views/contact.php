
	
    <div class="container">
        
		<div class="row">
		    <div class="col-md-12">
			    <div class="breadcrumbs">
				    <ul class="breadcrumb">
                        <li><a href="index.html">Home</a> <span class="divider"></span></li>
                        <li class="active">Contact Us</li>
                    </ul>
				</div>
			</div>
		</div>
		
		<div class="row">
		    <div class="col-md-12">
				<h2>Contact Us</h2>
			</div>
		</div>
       
		<div class="row">
				<div class="col-md-6">
					<div class="contact_form">
						<form method="post" action="<?php echo base_url('Pages/send_mail'); ?>">
							<fieldset class="form-group">
								<label>Name<span class="required">*</span></label>
								<input type="text" placeholder="Name" class="form-control" name="name">
								<label>Email<span class="required">*</span></label>
								<input type="text" placeholder="Email" class="form-control" name="from_email">
								<label>Subject<span class="required">*</span></label>
								<input type="text" placeholder="Subject" class="form-control" name="subject">							
							</fieldset>
						
						<div class="form-group">
							<label>Message<span class="required">*</span></label>
							<textarea rows="3" class="form-control" name="message"></textarea>
						</div>
						<p class="form-group">
							<button class="btn btn-primary" type="submit">Send Request</button>
						</p>
					</div>
					</form>
				</div>				
				<div class="col-md-6">
					<div class="location">
						<address>
						  <strong>Twitter, Inc.</strong><br>
						  795 Folsom Ave, Suite 600<br>
						  San Francisco, CA 94107<br>
						  <abbr title="Phone">P:</abbr> (123) 456-7890
						</address>

						<address>
						  <strong>Full Name</strong><br>
						  <a href="mailto:#">first.last@example.com</a>
						</address>
					</div>
				</div>	
			</div>			
	

	</div>		
	
	