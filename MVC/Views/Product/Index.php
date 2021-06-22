	<div class="content">
		<!-- product-wrapper start -->
		<div class="product-wrapper">
			<!-- product-navigation start -->
			<div class="product-navigation">
				<ul>
					<li class="active" data-filter="all">All</li>
					<?php foreach ($model['listCate'] as $item) : ?>
						<li data-filter=<?php echo $item['ID']; ?>><?php echo $item['CateName']; ?></li>
					<?php endforeach; ?>
				</ul>
			</div>
			<!-- product-navigation end -->
			<!-- products start -->
			<div class="products" style='flex-wrap:wrap;'>
				<?php foreach ($model['listProduct'] as $item) : ?>
					<div class="product-card <?php echo $item['IDCate']; ?>">
						<?php if (isset($_SESSION['VISITED_SESSION']) && in_array($item['ID'], $_SESSION['VISITED_SESSION'])) : ?>
							<label class="visited">Seen <i class="fas fa-check-double"></i></label>
						<?php endif; ?>
						<div class="image-move move">
							<img src="<?php echo IMAGE_URL . '/' . $item['Image']; ?>" alt="">
						</div>
						<div class="image-card">
							<a onclick="updateView(<?php echo $item['ID'] ?>)" href="<?php echo BASE_URL . 'Product/Detail/' . $item['ID']; ?>"><img src="<?php echo IMAGE_URL . '/' . $item['Image']; ?>" alt=""></a>
						</div>
						<div class="content-card">
							<h5><?php echo $item['ProductName']; ?></h5>
							<h6>Price: <?php echo number_format($item['Price'], 0, '', ','); ?> đ</h6>
							<div class="btn-content-card">
								<a onclick="updateView(<?php echo $item['ID'] ?>)" class="view-card" href="<?php echo BASE_URL . 'Product/Detail/' . $item['ID']; ?>">View</a>
								<div class="hover-card">
									<i class="fas fa-cart-arrow-down"></i>
									<button onclick="addCart(<?php echo $item['ID']; ?>,1)" style="width: 100%" class="add-cart-card dm">Add Cart
									</button>
								</div>
							</div>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
		<!-- products end -->
	</div>
	<!-- product-wrapper end -->
	</div>

	<!-- login permission modal -->
	<div class="modal fade" id="loginPermissionModal">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 style="color:black;" class="modal-title">Oops!</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span style="color:black;" aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<label style="color:black;">Login to use. Thanks! :D</label>
				</div>
				<div class="modal-footer">
					<button onclick="window.location.href='<?php echo BASE_URL; ?>Login/Index'" type="button" class="btn btn-danger" data-dismiss="modal">Login</button>
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
	<!-- end login permission modal -->

	<!-- out quantity modal -->
	<div class="modal fade" id="outQuantityModal">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 style="color:black;" class="modal-title">Oops!</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span style="color:black;" aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<label style="color:black;">
						This product is sold out. You can choose other products.
						Thanks for your attention!. :D
					</label>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-primary" data-dismiss="modal">OK</button>
				</div>
			</div>
		</div>
	</div>
	<!-- end out quantity modal -->