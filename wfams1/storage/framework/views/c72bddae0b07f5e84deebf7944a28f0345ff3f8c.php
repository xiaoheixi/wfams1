<!DOCTYPE html>
<html>
<head>
<title>Product Management</title>
</head>
<body>

<h1>Welcome to Product Management</h1>
<a href="<?php echo e(url('createProduct')); ?>" class="btn btn-primary">Add Product</a>
<table style="width:100%">
  <tr>
    <th>Name</th>
    <th>Image</th>
    <th>Link</th>
    <th>Price</th>
    <th></th>
    <th></th>
  </tr>
<?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<tr>
    <td><?php echo e($product->productName); ?></a></td>
    <td><img src="<?php echo e(static('images/{{$product->productImage); ?>')}}" class="img-thumbnail" width="75" /><?php echo e($product->productImage); ?></td>
    <td><?php echo e($product->productLink); ?></td>
    <td><?php echo e($product->productPrice); ?></td>
    <td><a href="/product/<?php echo e($product->productName); ?>/edit">Modify</a></td>
    <td><form action="/product/<?php echo e($product->productName); ?>" method="post">
    <?php echo csrf_field(); ?>
      <?php echo method_field('DELETE'); ?>
      <button>Delete</button>
      </form></td>
</tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>

</body>
</html><?php /**PATH C:\PX\htdocs\wfams1\wfams1\resources\views/productManagement.blade.php ENDPATH**/ ?>