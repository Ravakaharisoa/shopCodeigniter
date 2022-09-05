<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Bootshop online Shopping cart</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link id="callCss" rel="stylesheet" href="<?= base_url() ?>assets/themes/bootshop/bootstrap.min.css" media="screen"/>
    <link href="<?= base_url() ?>assets/themes/css/base.css" rel="stylesheet" media="screen"/>
	<link href="<?= base_url() ?>assets/themes/css/bootstrap-responsive.min.css" rel="stylesheet"/>
	<link href="<?= base_url() ?>assets/themes/css/font-awesome.css" rel="stylesheet" type="text/css">
	<link href="<?= base_url() ?>assets/themes/js/google-code-prettify/prettify.css" rel="stylesheet"/>
    <link rel="shortcut icon" href="<?= base_url() ?>assets/themes/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?= base_url() ?>assets/themes/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?= base_url() ?>assets/themes/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?= base_url() ?>assets/themes/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?= base_url() ?>assets/themes/images/ico/apple-touch-icon-57-precomposed.png">
	<style type="text/css" id="enject"></style>
</head>
<body>
<div id="header">
	<div class="container">
		<div id="welcomeLine" class="row">
			<div class="span6">Welcome!
				<strong> 
					<?php if ($this->session->userdata('uname')) : ?>
						<?= $this->session->userdata('uname') ?>
					<?php else: ?>
						User
					<?php endif; ?>
				</strong>
			</div>
			<div class="span6">
				<div class="pull-right">
					<a href="product_summary.html"><span class="">Fr</span></a>
					<a href="product_summary.html"><span class="">Es</span></a>
					<span class="btn btn-mini">En</span>
					<a href="product_summary.html"><span>&pound;</span></a>
					<span class="btn btn-mini">$155.00</span>
					<a href="product_summary.html"><span class="">$</span></a>
					<a href="product_summary.html"><span class="btn btn-mini btn-primary"><i class="icon-shopping-cart icon-white"></i> [ 3 ] Itemes in your cart </span> </a> 
				</div>
			</div>
		</div>

		<div id="logoArea" class="navbar">
			<a id="smallScreen" data-target="#topMenu" data-toggle="collapse" class="btn btn-navbar">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</a>
		  	<div class="navbar-inner">
		    	<a class="brand" href="<?= base_url() ?>"><img src="<?= base_url() ?>assets/themes/images/logo.png" alt="Bootsshop"/></a>
				<form class="form-inline navbar-search" method="post" action="<?= base_url('product/searchProduct') ?>">
					<input id="srchFld" class="srchTxt" name="productName" type="text" placeholder="Product Name" />
					<select class="srchTxt" name="cat_id">
						<option hidden>Product Categories</option>
						<?php foreach ($categories as $categorie) : ?>
						<option value="<?= $categorie->cat_id ?>"><?= $categorie->cat_name ?></option>
					<?php endforeach; ?>
					</select> 
					<button type="submit" id="submitButton" class="btn btn-primary">Go</button>
			    </form>
			    <ul id="topMenu" class="nav pull-right">
					 <li class=""><a href="special_offer.html">Specials Offer</a></li>
					 <li class=""><a href="normal.html">Delivery</a></li>
					 <li class=""><a href="contact.html">Contact</a></li>
					 <li class="">
					 	<?php if (!$this->session->userdata('uname')) : ?>
				 		<a href="#loginmodal" role="button" data-toggle="modal" style="padding-right:0"><span class="btn btn-large btn-success">Login</span></a>
				 		<?php else: ?>
				 		<a href="<?= base_url('login/logout')?>" role="button" style="padding-right:0"><span class="btn btn-large btn-success">Logout</span></a>
				 		<?php endif; ?>
						<div id="loginmodal" class="modal hide fade in" tabindex="-1" role="dialog" aria-labelledby="login" aria-hidden="false" >
						  	<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
								<h3>Login Block</h3>
						  	</div>
						  	<div class="modal-body">
								<form class="form-horizontal loginFrm" autocomplete="off">
							  		<div class="control-group">								
										<input type="text" id="inputUname" name="uname" placeholder="Username">
							  		</div>
							  		<div class="control-group">
										<input type="password" id="inputPassword" name="pwd" placeholder="Password">
							  		</div>
							  		<div class="control-group">
										<label class="checkbox">
											<input type="checkbox"> Remember me
										</label>
										<div id="error" style="color: red;"></div>
							  		</div>
								</form>		
								<button type="submit" id="ulogin" class="btn btn-success">Sign in</button>
								<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
						  	</div>
						</div>
					</li>
    			</ul>
  			</div>
		</div>
	</div>
</div>
<script src="<?= base_url()?>assets/themes/js/jquery.min.js"></script>
<script>
	$(document).ready(function(){
		$('#ulogin').click(function(event){
			event.preventDefault();
			var user_name = $('#inputUname').val();
			var password = $('#inputPassword').val();

			jQuery.ajax({
				type:"POST",
				url:'<?=base_url() ?>login/userLogin',
				dataType:"json",
				data:{uname:user_name,pwd:password},
				success:function(res){
					if (res == "Success") {
						window.location.href="<?= base_url() ?>";
					}else if (res == "Failed") {
						$('#error').html("Wrong credential!");
					}else if (res == "Blank"){
						$('#error').html("All fields are mandatory!!");
					}
				}
			});
		});
	});
</script>