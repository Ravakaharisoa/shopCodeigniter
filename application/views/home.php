			<div class="span9">		
				<div class="well well-small">
					<h4>Featured Products <small class="pull-right">200+ featured products</small></h4>
					<div class="row-fluid">
						<div id="featured" class="carousel slide">
							<div class="carousel-inner">
						  		<div class="item active">
						  			<ul class="thumbnails">
										<?php foreach ($FeatureProductsNew as $FeatureProductNew) : ?>

										<?php 
											$prodAddDate = $FeatureProductNew->product_time;
											$proTime = strtotime($prodAddDate);
											$proDate = date('Y-m-d',$proTime);
											$today = date('Y-m-d');

										?>

										<li class="span3">
							  				<div class="thumbnail">
							  					<?php if ($proDate == $today) : ?>
							  					<i class="tag"></i>
							  				<?php endif; ?>
												<a href="<?= base_url('product/productDetails') ?>?pid=<?= $FeatureProductNew->product_id ?>">
													<img src="<?= base_url('assets/uploads/products/'.$FeatureProductNew->product_image) ?>" alt="">
												</a>
												<div class="caption">
								  					<h5><?= $FeatureProductNew->product_name ?></h5>
								  					<h4>
								  						<a class="btn" href="<?= base_url('product/productDetails') ?>?pid=<?= $FeatureProductNew->product_id ?>">VIEW</a> 
								  						<span class="pull-right">$<?= $FeatureProductNew->product_price ?></span>
								  					</h4>
												</div>
							  				</div>
										</li>
									<?php endforeach; ?>
						  			</ul>
						  		</div>
						   		<div class="item">
						  			<ul class="thumbnails">
						  				<?php foreach ($FeatureProductsOld as $FeatureProductOld) : ?>
						  				<?php 
											$prodAddDate = $FeatureProductOld->product_time;
											$proTime = strtotime($prodAddDate);
											$proDate = date('Y-m-d',$proTime);
											$today = date('Y-m-d');

										?>
										<li class="span3">
										  	<div class="thumbnail">
										  		<?php if ($proDate == $today) : ?>
								  					<i class="tag"></i>
								  				<?php endif; ?>
												<a href="<?= base_url('product/productDetails/'.$FeatureProductOld->product_id) ?>?pid=<?= $FeatureProductOld->product_id ?>">
													<img src="<?= base_url('assets/uploads/products/'.$FeatureProductOld->product_image) ?>" alt="">
												</a>
												<div class="caption">
											  		<h5><?= $FeatureProductOld->product_name ?></h5>
											  		<h4>
											  			<a class="btn" href="<?= base_url('product/productDetails') ?>?pid=<?= $FeatureProductOld->product_id ?>">VIEW</a> 
											  			<span class="pull-right">$<?= $FeatureProductOld->product_price ?></span>
											  		</h4>
												</div>
										  	</div>
										</li>
									<?php endforeach; ?>
						  			</ul>
						  		</div>
						  	</div>
						  	<a class="left carousel-control" href="#featured" data-slide="prev">‹</a>
						  	<a class="right carousel-control" href="#featured" data-slide="next">›</a>
						</div>
					</div>
				</div>
				<h4>Latest Products </h4>
				<ul class="thumbnails">
					<?php foreach ($latestProducts as $latestProduct) : ?>
					<li class="span3">
						<div class="thumbnail">
							<a  href="<?= base_url('product/productDetails') ?>?pid=<?= $latestProduct->product_id ?>">
								<img src="<?= base_url('assets/uploads/products/'.$latestProduct->product_image) ?>" alt=""/>
							</a>
							<div class="caption">
								<h5><?= $latestProduct->product_name ?></h5>
								<p>Lorem Ipsum is simply dummy text.</p>
							 	<h4 style="text-align:center">
							 		<a class="btn" href="<?= base_url('product/productDetails') ?>?pid=<?= $latestProduct->product_id ?>"> <i class="icon-zoom-in"></i></a> 
							 		<a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> 
							 		<a class="btn btn-primary" href="#">$<?= $latestProduct->product_price ?></a>
							 	</h4>
							</div>
						</div>
					</li>
					<?php endforeach; ?>
				</ul>	
			</div>
		</div>
	</div>
</div>
	