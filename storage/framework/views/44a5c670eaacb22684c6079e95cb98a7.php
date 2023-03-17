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
/*    		border: 3px solid lightgray;*/
/*    		margin-top: 50px;*/
    		padding: 30px;
/*    		border-radius: 20px;*/
    	}
    	/*.dropdown{
    		margin-top: 5px;
    	}*/

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
	
	<div class="container">
		<div class="products">
			<!-- row start-->
		<div class="row">
			<?php $__currentLoopData = $datas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<div class="col-md-4">
				<h5><?php echo e($data->name); ?></h5>
				<p><a href="<?php echo e(url('singleProduct/'.$data->id)); ?>"><img src="<?php echo e(asset('public/uploads/product/')); ?>/<?php echo e($data->image); ?>" style="width:300px;height: 300px;" alt="image" class="me-4 border"></a></p>
				<h4>RS.<?php echo e($data->selling_price); ?> <span style="margin-left: 10px;text-decoration: line-through;">RS.<?php echo e($data->original_price); ?></span></h4>
				<button type="button" class="btn btn-success"><a href="<?php echo e(url('singleProduct/'.$data->id)); ?>" style="text-decoration:none;color: white;">Buy Now</a></button>
			</div>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</div>
		<!-- end row-->
		</div>
	</div><!-- end container-->

</body>
</html><?php /**PATH C:\xampp\htdocs\laravelStripe\resources\views/Frontend/productView.blade.php ENDPATH**/ ?>