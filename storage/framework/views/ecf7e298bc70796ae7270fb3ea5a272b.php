<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <style type="text/css">
    	body{
    		font-family: Georgia, serif;
    	}
    	.container{
    		margin-top: 30px;
    	}
    </style>
</head>
<body>
    <div class="dropdown float-end">
        <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown">
            <?php echo e($LoggedUserInfo['name']); ?>

        </button>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="<?php echo e(route('auth.logout')); ?>">Logout</a></li>
        </ul>
    </div>
	<section class="container">
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<!-- card start-->
				<div class="card">
					<div class="card-header">
						<h4>Product</h4>
					</div>
					<div class="card-body">
						<h3><?php echo e($products[0]->name); ?></h3>
						<div class="row">
							<div class="col-md-6">
								<p><img src="<?php echo e(asset('public/uploads/product/')); ?>/<?php echo e($products[0]->image); ?>" alt="products" width="300px" height="300px"></p>
							</div>
							<div class="col-md-6">
								<h4>RS.<?php echo e($products[0]->selling_price); ?> <span style="text-decoration:line-through; ">RS.<?php echo e($products[0]->original_price); ?></span></h4><br/><br/><br/>
								<button type="button" class="btn btn-success"><a href="<?php echo e(url('stripe')); ?>" style="text-decoration:none;color: white;">Buy Now</a></button>
								
							</div>
						</div>
						<h6><?php echo e($products[0]->description); ?></h6>
					</div><!-- end card body-->
				</div><!-- end card-->
			</div>
			<div class="col-md-2"></div>
		</div><!-- end row-->
	</section>

</body>
</html><?php /**PATH C:\xampp\htdocs\laravelStripe\resources\views/Frontend/singleProduct.blade.php ENDPATH**/ ?>