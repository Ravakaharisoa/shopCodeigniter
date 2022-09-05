<div id="mainBody">
	<div class="container">
		<div class="row">
			<div class="span9">
			    <ul class="breadcrumb">
					<li><a href="<?= base_url('home') ?>">Home</a> <span class="divider">/</span></li>
					<li class="active">Registration</li>
			    </ul>
				<h3> Registration</h3>	
				<div class="well">
					<?php if($this->session->flashdata('signupSuccess')): ?>
			          <div class="alert alert-success fade in">
						<button type="button" class="close" data-dismiss="alert">×</button>
						<strong><?= $this->session->flashdata('signupSuccess') ?></strong>
					 </div>
			        <?php endif; ?>
					<!--<form class="form-horizontal" >-->
					<?= form_open('register/signup',array('class'=>'form-horizontal','autocomplete'=>'off')) ?>
						<h4>Your personal information</h4>
						<div class="control-group">
							<label class="control-label" for="inputFname1">Username <sup>*</sup></label>
							<div class="controls">
							  	<?= form_input(array('name'=>'uname','id'=>'inputUname','placeholder'=>'Username')) ?>
							  	<span style="color: red;"><?= form_error('uname') ?></span>
							</div>
						 </div>
						<div class="control-group">
							<label class="control-label" for="inputFname1">First name <sup>*</sup></label>
							<div class="controls">
								<?= form_input(array('name'=>'fname','id'=>'inputFname1','placeholder'=>'First Name')) ?>
								<span style="color: red;"><?= form_error('fname') ?></span>
							</div>
						 </div>
						 <div class="control-group">
							<label class="control-label" for="inputLnam">Last name <sup>*</sup></label>
							<div class="controls">
								<?= form_input(array('name'=>'lname','id'=>'inputLnam','placeholder'=>'Last Name')) ?>
								<span style="color: red;"><?= form_error('lname') ?></span>
							</div>
						 </div>
						<div class="control-group">
							<label class="control-label" for="input_email">Email <sup>*</sup></label>
							<div class="controls">
								<?= form_input(array('name'=>'email','id'=>'input_email','placeholder'=>'Email')) ?>
								<span style="color: red;"><?= form_error('email') ?></span>
							</div>
					  	</div>	  
						<div class="control-group">
							<label class="control-label" for="inputPassword1">Password <sup>*</sup></label>
							<div class="controls">
							  	<?= form_password(array('name'=>'pwd','id'=>'inputPassword1','placeholder'=>'Password')) ?>
							  	<span style="color: red;"><?= form_error('pwd') ?></span>
							</div>
						</div>	  
						<div class="control-group">
							<label class="control-label" for="mobile">Mobile Phone <sup>*</sup></label>
							<div class="controls">
							  	<?= form_input(array('name'=>'mobile','id'=>'mobile','placeholder'=>'Mobile Phone')) ?>
							  	<span style="color: red;"><?= form_error('mobile') ?></span>
							</div>
						</div>
						<p><sup>*</sup>Required field</p>
						<div class="control-group">
							<div class="controls">
								<input type="hidden" name="email_create" value="1">
								<input type="hidden" name="is_new_customer" value="1">
								<input class="btn btn-large btn-success" type="submit" value="Register" />
							</div>
						</div>		
					<?= form_close() ?>
				</div>

			</div>
		</div>
	</div>
</div>
