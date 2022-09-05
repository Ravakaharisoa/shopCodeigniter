<div id="mainBody">
	<div class="container">
		<div class="row">
			<div class="span9">
			    <ul class="breadcrumb">
					<li><a href="<?= base_url() ?>">Home</a> <span class="divider">/</span></li>
					<li class="active">Products Name</li>
			    </ul>
				<h3> Products Name <small class="pull-right"> 40 products are available </small></h3>	
				<hr class="soft"/>
				<p>Nowadays the lingerie industry is one of the most successful business spheres.We always stay in touch with the latest fashion tendencies - that is why our goods are so popular and we have a great number of faithful customers all over the country.</p>
				<hr class="soft"/>
				<form class="form-horizontal span6">
					<div class="control-group">
					  <label class="control-label alignL">Sort By </label>
						<select>
				            <option>Product name A - Z</option>
				            <option>Product name Z - A</option>
				            <option>Product Stoke</option>
				            <option>Price Lowest first</option>
			            </select>
					</div>
	  			</form>
				<div id="myTab" class="pull-right">
				 	<a href="#listView" data-toggle="tab">
				 		<span class="btn btn-large"><i class="icon-list"></i></span>
				 	</a>
				 	<a href="#blockView" data-toggle="tab">
				 		<span class="btn btn-large btn-primary"><i class="icon-th-large"></i></span>
				 	</a>
				</div>
				<br class="clr"/>
				<div class="tab-content">
					<div class="tab-pane" id="listView">
						<?php if($products) :?>
						<?php foreach($products as $product) : ?>
						<div class="row">	  
							<div class="span2">
								<img src="<?= base_url('assets/uploads/products/'.$product->product_image) ?>" alt=""/>
							</div>
							<div class="span4">
								<h3>New | Available</h3>				
								<hr class="soft"/>
								<h5><?= $product->product_name ?></h5>
								<p><?= substr($product->product_desc,0,75).'....' ?></p>
								<a class="btn btn-small pull-right" href="<?= base_url('product/productDetails') ?>?pid=<?= $product->product_id ?>">View Details</a>
								<br class="clr"/>
							</div>
							<div class="span3 alignR">
								<form class="form-horizontal qtyFrm">
									<h3> $<?= $product->product_price ?></h3>
									<label class="checkbox">
										<input type="checkbox">  Adds product to compair
									</label><br/>
								  <a href="<?= base_url('product/productDetails') ?>?pid=<?= $product->product_id ?>"" class="btn btn-large btn-primary"> Add to <i class=" icon-shopping-cart"></i></a>
								  <a href="<?= base_url('product/productDetails') ?>?pid=<?= $product->product_id ?>"" class="btn btn-large"><i class="icon-zoom-in"></i></a>
								</form>
							</div>
						</div>
						<hr class="soft"/>
						<?php 
							endforeach;
							else:
						?>
							<h3 style="text-align: center;">No result Found</h3>
						<?php endif; ?>
					</div>
					<div class="tab-pane  active" id="blockView">
						<ul class="thumbnails">
							<?php if($products) :?>
							<?php foreach ($products as $pro) : ?>
							<li class="span3">
								<div class="thumbnail">
									<a href="<?= base_url('assets/uploads/products/'.$pro->product_image) ?>"><img src="<?= base_url('assets/uploads/products/'.$pro->product_image) ?>" alt=""/></a>
									<div class="caption">
										<h5><?= $pro->product_name ?></h5>
										<p> <?= substr($pro->product_desc,0,15) ?>.....</p>
										<h4 style="text-align:center">
											<a class="btn" href="<?= base_url('product/productDetails') ?>?pid=<?= $product->product_id ?>"> <i class="icon-zoom-in"></i></a> 
											<a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> 
											<a class="btn btn-primary" href="#">&euro;<?= $pro->product_price ?></a>
										</h4>
									</div>
								</div>
							</li>
							<?php 
								endforeach;
							else:
							?>
								<h3 style="text-align: center;">No result Found</h3>
							<?php endif; ?>
						  </ul>
					<hr class="soft"/>
					</div>
				</div>
				<a href="compair.html" class="btn btn-large pull-right">Compair Product</a>
				<div class="pagination">
					<ul>
						<li><a href="#">&lsaquo;</a></li>
						<li><a href="#">1</a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#">4</a></li>
						<li><a href="#">...</a></li>
						<li><a href="#">&rsaquo;</a></li>
					</ul>
				</div>
				<br class="clr"/>
			</div>
		</div>
	</div>
</div>
