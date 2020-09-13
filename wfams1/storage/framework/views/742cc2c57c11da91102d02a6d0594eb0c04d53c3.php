<!DOCTYPE html>
<html>
<head>
<title>Page Management</title>
</head>
<body>

<h1>Welcome to Page Management</h1>
<a href="<?php echo e(url('createPage')); ?>" class="btn btn-primary">Add Page</a>
<table style="width:100%">
  <tr>
    <th>Title</th>
    <th>URI</th>
    <th></th>
    <th></th>
  </tr>
<?php $__currentLoopData = $pages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<tr>
    <td><a href="/page/<?php echo e($page->URI); ?>"><?php echo e($page->title); ?></a></td>
    <td><a href="/page/<?php echo e($page->URI); ?>"><?php echo e($page->URI); ?></td>
    <td><a href="/page/<?php echo e($page->URI); ?>/edit">Modify</a></td>
    <td><form action="/page/<?php echo e($page->URI); ?>" method="post">
    <?php echo csrf_field(); ?>
      <?php echo method_field('DELETE'); ?>
      <button>Delete</button>
      </form></td>
</tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>

</body>
</html>
<?php /**PATH C:\PX\htdocs\wfams1\wfams1\resources\views/pageManagement.blade.php ENDPATH**/ ?>