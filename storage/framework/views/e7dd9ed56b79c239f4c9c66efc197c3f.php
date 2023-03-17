<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container">
	<!-- card start-->
	<div class="card">
		<div class="card-header">
			<h4>Product Add</h4>
		</div>
		<div class="card-body">
			<!-- row start-->
			<div class="row">
				<div class="col-md-12">
					<form action="<?php echo e(route('save.product')); ?>" method="post" enctype="multipart/form-data">
						 <?php echo csrf_field(); ?>
                         <?php if(Session::get('message')): ?>
                         <div class="alert alert-success">
                            <?php echo e(Session('message')); ?>

                         </div>

                         <?php endif; ?>

                         <div class="form-group">
                            <label style="font-size:16px;">Name</label>
                            <input type="text" class="form-control" id="name" name="name" style="border:1px solid gray;">
                            
                        </div><br/>
                        <div class="form-group">
                            <label style="font-size:16px;">Description</label>
                            <textarea class="form-control" id="description" name="description" style="border:none;border-bottom: 2px solid purple;"></textarea>
                            
                            
                        </div><br/>
                        <div class="form-group">
                            <label>Upload Product Images</label>
                            <input type="file" multiple class="form-control" id="image" name="image">
                        </div><br/>
                        <div class="form-group">
                        	<label style="font-size:16px;">Original Price</label>
                        	<input type="text" class="form-control" id="original_price" name="original_price" style="border:1px solid gray;">
                            
                        </div><br/>
                         <div class="form-group">
                        	<label style="font-size:16px;">Selling Price</label>
                        	<input type="text" class="form-control" id="selling_price" name="selling_price" style="border:1px solid gray;">
                            
                        </div><br/>

                        <button type="submit" class="btn btn-primary">Add</button>
						
					</form>
				</div>
			</div>
			<!-- end row-->
			
		</div><!-- end card body-->
	</div>
	<!-- end card-->
</div> 

    


</body>
</html><?php /**PATH C:\xampp\htdocs\laravelStripe\resources\views/Admin/productCreate.blade.php ENDPATH**/ ?>